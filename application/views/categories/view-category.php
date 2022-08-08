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
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">
            <?= $title ?>
          </h1>
        </div>
        <?php echo $this->session->flashdata('message'); ?>
        <?php $this->load->view('categories/table-category'); ?>
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

<?php $this->load->view('categories/add-category'); ?>
<?php $this->load->view('categories/edit-category'); ?>
<?php $this->load->view('templates/js'); ?>

<script>
  // Example starter JavaScript for disabling form submissions if there are invalid fields
  (function() {
    'use strict';
    window.addEventListener('load', function() {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();
</script>