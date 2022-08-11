<?php echo $this->session->flashdata('message'); ?>
<!-- Tables -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <a href="<?= base_url(); ?>items/insert" class="btn btn-primary">
      <i class="fas fa-fw fa-plus"></i>
      Add
    </a>
    <a href="<?= base_url(); ?>items/print" class="btn btn-danger " target="_blank" rel="noreferrer">
      <i class="fas fa-fw fa-print"></i>
      Print
    </a>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No</th>
            <th>Item Code</th>
            <th>Item Name</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          foreach ($items as $ctr) : ?>
            <tr>
              <td><?= $no++ ?></td>
              <td><?= $ctr->code_items ?></td>
              <td><?= $ctr->name_items ?></td>
              <td>
                <a href="<?= base_url(); ?>items/update/<?= $ctr->id_items ?>" class="btn btn-warning btn-sm"><i class="fas fa-fw fa-pen"></i></a>
                <a href="<?= base_url(); ?>items/delete/<?= $ctr->id_items ?>" class="btn btn-danger btn-sm delete"><i class="fas fa-fw fa-trash"></i></a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>