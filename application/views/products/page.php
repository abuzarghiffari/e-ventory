<?php echo $this->session->flashdata('message'); ?>
<!-- Tables -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <a href="<?= base_url(); ?>products/insert" class="btn btn-primary">
      <i class="fas fa-fw fa-plus"></i>
      Add
    </a>
    <a href="<?= base_url(); ?>products/print" class="btn btn-danger" target="_blank" rel="noreferrer">
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
            <th>Item Name</th>
            <th>Category Item</th>
            <th>Price</th>
            <th>Stock</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          foreach ($products as $pdr) : ?>
            <tr>
              <td><?= $no++ ?></td>
              <td><?= $pdr->name_items ?></td>
              <td><?= $pdr->name_categories ?></td>
              <td>$<?= $pdr->price ?></td>
              <td><?= $pdr->stock ?></td>
              <td>
                <a href="<?= base_url(); ?>products/update/<?= $pdr->id_products ?>" class="btn btn-warning btn-sm"><i class="fas fa-fw fa-pen"></i></a>
                <a href="<?= base_url(); ?>products/delete/<?= $pdr->id_products ?>" class="btn btn-danger btn-sm delete"><i class="fas fa-fw fa-trash"></i></a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>