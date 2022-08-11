<!-- Bootstrap core JavaScript-->
<script src="<?= base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url(); ?>assets/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?= base_url(); ?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?= base_url(); ?>assets/js/demo/datatables-demo.js"></script>

<!-- SweetAlert2 -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  $('.delete').on('click', function(e) {
    e.preventDefault();
    const href = $(this).attr('href');
    Swal.fire({
      title: 'Are you sure?',
      text: "To Delete <?= $title ?>",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#e64738',
      cancelButtonColor: '#4168dd',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      if (result.value) {
        document.location.href = href;
      }
    });
  });
</script>

<!-- AOS animation -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({
    once: true,
    duration: 1500
  });
</script>

</body>

</html>