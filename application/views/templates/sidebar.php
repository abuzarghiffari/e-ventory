<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url(); ?>">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">
      E-Ventory
    </div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0" />

  <!-- Nav Item - Dashboard -->
  <li class="nav-item
      <?= $this->uri->segment(1) == 'dashboard' || $this->uri->segment(1) == '' ? 'active' : ''; ?>">
    <a class="nav-link" href="<?= base_url(); ?>">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider" />

  <!-- Heading -->
  <div class="sidebar-heading">
    Menu
  </div>

  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item <?= $this->uri->segment(1) == 'products' | $this->uri->segment(1) == 'items' | $this->uri->segment(1) == 'categories' | $this->uri->segment(1) == 'suppliers' ? 'active' : ''; ?>">
    <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-fw fa-cog"></i>
      <span>Master Data</span>
    </a>
    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item <?= $this->uri->segment(1) == 'products' ? 'active' : ''; ?>" href="<?= base_url(); ?>products">
          Products
        </a>
        <a class="collapse-item <?= $this->uri->segment(1) == 'items' ? 'active' : ''; ?>" href="<?= base_url(); ?>items">
          Items
        </a>
        <a class="collapse-item <?= $this->uri->segment(1) == 'categories' ? 'active' : ''; ?>" href="<?= base_url(); ?>categories">
          Categories
        </a>
        <a class="collapse-item <?= $this->uri->segment(1) == 'suppliers' ? 'active' : ''; ?>" href="<?= base_url(); ?>suppliers">
          Suppliers
        </a>
      </div>
    </div>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
</ul>
<!-- End of Sidebar -->