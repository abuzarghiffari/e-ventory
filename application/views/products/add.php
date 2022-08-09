<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">
    <?= $title ?>
  </h1>
</div>
<div class="card shadow mb-4 mt-2">
  <div class="card-body">
    <form action="<?= base_url(); ?>products/insert" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
      <div class="form-group">
        <label for="id_items">Name Item</label>
        <select name="id_items" class="custom-select <?= form_error('id_items') ? 'is-invalid' : ''; ?>" required>
          <option value="">-- Select the Item --</option>
          <?php foreach ($items as $itm) : ?>
            <option value="<?= $itm->id_items ?>" <?= (set_value('id_items') == $itm->id_items) ? 'selected' : ''; ?>><?= $itm->name_items ?></option>
          <?php endforeach; ?>
        </select>
        <div class="invalid-feedback">
          <?= form_error('id_items'); ?>
        </div>
      </div>
      <div class="form-group">
        <label for="id_categories">Name Category</label>
        <select name="id_categories" class="custom-select <?= form_error('id_categories') ? 'is-invalid' : ''; ?>" required>
          <option value="">-- Select the Category --</option>
          <?php foreach ($categories as $ctr) : ?>
            <option value="<?= $ctr->id_categories ?>" <?= (set_value('id_categories') == $ctr->id_categories) ? 'selected' : ''; ?>><?= $ctr->name_categories ?></option>
          <?php endforeach; ?>
        </select>
        <div class="invalid-feedback">
          <?= form_error('id_categories'); ?>
        </div>
      </div>
      <div class="form-group">
        <label for="id_suppliers">Name Supplier</label>
        <select name="id_suppliers" class="custom-select <?= form_error('id_suppliers') ? 'is-invalid' : ''; ?>" required>
          <option value="">-- Select the Supplier --</option>
          <?php foreach ($suppliers as $ctr) : ?>
            <option value="<?= $ctr->id_suppliers ?>" <?= (set_value('id_suppliers') == $ctr->id_suppliers) ? 'selected' : ''; ?>><?= $ctr->name_suppliers ?></option>
          <?php endforeach; ?>
        </select>
        <div class="invalid-feedback">
          <?= form_error('id_suppliers'); ?>
        </div>
      </div>
      <div class="form-group">
        <label for="price">Price</label>
        <input type="number" class="form-control <?= form_error('price') ? 'is-invalid' : ''; ?>" name="price" value="<?= set_value('price'); ?>" required>
        <div class="invalid-feedback">
          <?= form_error('price'); ?>
        </div>
      </div>
      <div class="form-group">
        <label for="stock">Stock</label>
        <input type="number" class="form-control <?= form_error('stock') ? 'is-invalid' : ''; ?>" name="stock" value="<?= set_value('stock'); ?>" required>
        <div class="invalid-feedback">
          <?= form_error('stock'); ?>
        </div>
      </div>
      <div class="form-footer">
        <a href="<?= base_url(); ?>products" class="btn btn-warning mr-2">Back</a>
        <button type="submit" class="btn btn-primary">Add</button>
      </div>
    </form>
  </div>
</div>