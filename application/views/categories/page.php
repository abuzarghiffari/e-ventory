<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">
    <?= $title ?>
  </h1>
</div>
<?php echo $this->session->flashdata('message'); ?>
<!-- Tables -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <a href="<?= base_url(); ?>categories/insert" class="btn btn-primary">
      <i class="fas fa-plus"></i>
      add
    </a>
    <a href="<?= base_url(); ?>categories/print" class="btn btn-danger">
      <i class="fas fa-print"></i> print
    </a>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No</th>
            <th>Category Code</th>
            <th>Category Name</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          foreach ($categories as $ctr) : ?>
            <tr>
              <td><?= $no++ ?></td>
              <td><?= $ctr->code_categories ?></td>
              <td><?= $ctr->name_categories ?></td>
              <td>
                <a href="<?= base_url(); ?>categories/update/<?= $ctr->id_categories ?>" class="btn btn-warning btn-circle btn-sm"><i class="fas fa-pen"></i></a>
                <a href="<?= base_url(); ?>categories/delete/<?= $ctr->id_categories ?>" class="btn btn-danger btn-circle btn-sm" onclick="return confirm('Are you sure?')"><i class="fas fa-trash"></i></a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>