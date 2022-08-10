<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">
    <?= $title ?>
  </h1>
</div>
<!-- Content Row -->
<div class="row ">
  <!-- Products Card -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card bg-products h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-md font-weight-bold text-white text-uppercase mb-1">
              Product<?= $this->db->count_all_results('products') > 1 ? 's' : '' ?>
            </div>
            <div class="h3 mb-0 font-weight-bold text-white">
              <?= $this->db->count_all_results('products'); ?>
            </div>
          </div>
          <div class="bg-icon col-auto">
            <i class="fas fa-dolly-flatbed fa-2x"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Items Card -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card bg-items shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-md font-weight-bold text-white text-uppercase mb-1">
              Item<?= $this->db->count_all_results('items') > 1 ? 's' : '' ?>
            </div>
            <div class="h3 mb-0 font-weight-bold text-white">
              <?= $this->db->count_all_results('items'); ?>
            </div>
          </div>
          <div class="bg-icon col-auto">
            <i class="fas fa-box fa-2x"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Categories Card -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card bg-categories shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-md font-weight-bold text-white text-uppercase mb-1">
              Categor<?= $this->db->count_all_results('categories') > 1 ? 'ies' : 'y' ?>
            </div>
            <div class="h3 mb-0 mr-3 font-weight-bold text-white">
              <?= $this->db->count_all_results('categories'); ?>
            </div>
          </div>
          <div class="bg-icon col-auto">
            <i class="fas fa-shapes fa-2x"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Suppliers Card -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card bg-suppliers shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-md font-weight-bold text-white text-uppercase mb-1">
              Supplier<?= $this->db->count_all_results('suppliers') > 1 ? 's' : '' ?>
            </div>
            <div class="h3 mb-0 mr-3 font-weight-bold text-white">
              <?= $this->db->count_all_results('suppliers'); ?>
            </div>
          </div>
          <div class="bg-icon col-auto">
            <i class="fas fa-user fa-2x"></i>
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
          Data Sources
        </h6>
      </div>
      <!-- Card Body -->
      <div class="card-body">
        <div class="chart-pie pt-4 pb-2">
          <canvas id="myPieChart"></canvas>
        </div>
        <div class="mt-4 text-center small">
          <span class="mr-1">
            <i class="fas fa-circle text-warning"></i>
            Products
          </span>
          <span class="mr-1">
            <i class="fas fa-circle text-primary"></i>
            Items
          </span>
          <span class="mr-1">
            <i class="fas fa-circle text-info"></i>
            Categories
          </span>
          <span class="mr-1">
            <i class="fas fa-circle text-success"></i>
            Suppliers
          </span>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Page level plugins -->
<script src="<?= base_url(); ?>assets/vendor/chart.js/Chart.min.js"></script>
<!-- Page level custom scripts -->
<script>
  // Set new default font family and font color to mimic Bootstrap's default styling
  Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
  Chart.defaults.global.defaultFontColor = '#858796';

  // Pie Chart Example
  var ctx = document.getElementById("myPieChart");
  var myPieChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
      labels: ["Products", "Items", "Categories", "Suppliers", ],
      datasets: [{
        data: [
          <?= $this->db->count_all_results('products'); ?>,
          <?= $this->db->count_all_results('items'); ?>,
          <?= $this->db->count_all_results('categories'); ?>,
          <?= $this->db->count_all_results('suppliers'); ?>
        ],
        backgroundColor: ['#F4B408', '#296FF3', '#43C3EF', '#1CB788'],
        hoverBackgroundColor: ['#C59411', '#1A50B7', '#2E9BC0', '#148E69'],
        hoverBorderColor: "rgba(234, 236, 244, 1)",
      }],
    },
    options: {
      maintainAspectRatio: false,
      tooltips: {
        backgroundColor: "rgb(255,255,255)",
        bodyFontColor: "#858796",
        borderColor: '#dddfeb',
        borderWidth: 1,
        xPadding: 15,
        yPadding: 15,
        displayColors: false,
        caretPadding: 10,
      },
      legend: {
        display: false
      },
      cutoutPercentage: 80,
    },
  });
</script>