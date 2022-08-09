<?php $this->load->view('templates/header'); ?>
<!-- Page Wrapper -->
<div id="wrapper">
  <?php $this->load->view('templates/sidebar'); ?>
  <!-- Content Wrapper -->
  <div id="content-wrapper" class="d-flex flex-column">
    <!-- Main Content -->
    <div id="content">
      <?php $this->load->view('templates/navbar.php') ?>
      <!-- Content -->
      <div class="container-fluid">
        <!-- Page Heading -->
        <?php $this->load->view($content) ?>
      </div>
      <!-- End of Content -->
    </div>
    <!-- End of Main Content -->
    <?php $this->load->view('templates/footer'); ?>
  </div>
  <!-- End of Content Wrapper -->
</div>
<!-- End of Page Wrapper -->
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>

<?php $this->load->view('templates/js'); ?>