<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">
    <?= $title ?>
  </h1>
</div>
<!-- Content Row -->
<div class="row">
  <!-- Products Card -->
  <div class="col-xl-4 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
              Products
            </div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">
              <?= $this->db->count_all_results('products'); ?>
            </div>
          </div>
          <div class="col-auto">
            <i class="fas fa-cog fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Items Card -->
  <div class="col-xl-4 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
              Items
            </div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">
              <?= $this->db->count_all_results('items'); ?>
            </div>
          </div>
          <div class="col-auto">
            <i class="fas fa-shopping-basket fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Categories Card -->
  <div class="col-xl-4 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
              Categories
            </div>
            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
              <?= $this->db->count_all_results('categories'); ?>
            </div>
          </div>
          <div class="col-auto">
            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Content Row -->
<div class="row">
  <!-- Tables -->
  <?php $this->load->view('dashboard/table'); ?>
  <!-- Pie Chart -->
  <div class="col-xl-4 col-lg-5">
    <div class="card shadow mb-4">
      <!-- Card Header - Dropdown -->
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">
          Revenue Sources
        </h6>
      </div>
      <!-- Card Body -->
      <div class="card-body">
        <div class="chart-pie pt-4 pb-2">
          <canvas id="myPieChart"></canvas>
        </div>
        <div class="mt-4 text-center small">
          <span class="mr-2">
            <i class="fas fa-circle text-primary"></i>
            Direct
          </span>
          <span class="mr-2">
            <i class="fas fa-circle text-success"></i>
            Social
          </span>
          <span class="mr-2">
            <i class="fas fa-circle text-info"></i>
            Referral
          </span>
        </div>
      </div>
    </div>
  </div>
</div>