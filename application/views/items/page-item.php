<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/sidebar'); ?>
<?php $this->load->view('templates/navbar.php') ?>

<!-- Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">
      <?= $title ?>
    </h1>
  </div>
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Table <?= $title ?></h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Code Items</th>
              <th>Name Items</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>27</td>
              <td>Donna Snider</td>
              <td>Customer Support</td>
              <td>
                <a href="#" class="btn btn-primary btn-sm"><i class="fas fa-pen"></i></a>
                <a href="#" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">
                  <i class="fas fa-trash"></i>
                </a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- End of Content -->

</div>
<!-- End of Main Content -->
<?php $this->load->view('templates/footer'); ?>
</div>
<!-- End of Content Wrapper -->
</div>
<!-- End of Page Wrapper -->
<?php $this->load->view('templates/js'); ?>