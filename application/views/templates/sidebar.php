<ul class="navbar-nav bg-white sidebar sidebar-dark accordion shadow" id="accordionSidebar">
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url(); ?>">
    <div class="sidebar-brand-icon">
      <i class='bx bxs-package bx-tada'></i>
    </div>
    <div class="sidebar-brand-text mx-1">
      E-Ventory
    </div>
  </a>

  <!-- Nav Item - Dashboard -->
  <li class="nav-item
      <?= $this->uri->segment(1) == 'dashboard' || $this->uri->segment(1) == '' ? 'active' : ''; ?>">
    <a class="nav-link" href="<?= base_url(); ?>">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <!-- Nav Item - Products -->
  <li class="nav-item
      <?= $this->uri->segment(1) == 'products' ? 'active' : ''; ?>">
    <a class="nav-link" href="<?= base_url(); ?>products">
      <i class="fas fa-dolly-flatbed"></i>
      <span>Product</span>
    </a>
  </li>

  <!-- Nav Item - Items -->
  <li class="nav-item
      <?= $this->uri->segment(1) == 'items' ? 'active' : ''; ?>">
    <a class="nav-link" href="<?= base_url(); ?>items">
      <i class="fas fa-box"></i>
      <span>Item</span>
    </a>
  </li>

  <!-- Nav Item - Categories -->
  <li class="nav-item
      <?= $this->uri->segment(1) == 'categories' ? 'active' : ''; ?>">
    <a class="nav-link" href="<?= base_url(); ?>categories">
      <i class="fas fa-shapes"></i>
      <span>Category</span>
    </a>
  </li>

  <!-- Nav Item - Suppliers -->
  <li class="nav-item
      <?= $this->uri->segment(1) == 'suppliers' ? 'active' : ''; ?>">
    <a class="nav-link" href="<?= base_url(); ?>suppliers">
      <i class="fas fa-user fa-table"></i>
      <span>Supplier</span>
    </a>
  </li>

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline mt-3">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
</ul>
<!-- End of Sidebar -->