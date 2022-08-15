CREATE TABLE items (
  id_items serial NOT NULL PRIMARY KEY,
  code_items varchar(20) NOT NULL,
  name_items varchar(20) NOT null
);

CREATE TABLE categories (
  id_categories serial NOT NULL PRIMARY KEY,
  code_categories varchar(20) not null,
  name_categories varchar(20) not null
);

CREATE TABLE suppliers (
  id_suppliers serial NOT NULL PRIMARY KEY,
  code_suppliers varchar(20) not null,
  name_suppliers varchar(20) not null
);

CREATE TABLE products (
  id_products serial not null PRIMARY KEY,
  id_suppliers serial not null,
  id_items serial  not null,
  id_categories serial not null,
  price varchar(20) not null,
  stock varchar(20) not null,
  constraint suppliers_fkey FOREIGN key(id_suppliers) REFERENCES suppliers(id_suppliers),
  constraint items_fkey FOREIGN key(id_items) REFERENCES items(id_items),
  constraint categories_fkey FOREIGN key(id_categories) REFERENCES categories(id_categories)
);