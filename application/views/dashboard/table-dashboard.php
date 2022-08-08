<!-- Tables -->
<div class="col-xl-8 col-lg-7">
  <div class="card shadow mb-4">
    <!-- Card Header - Dropdown -->
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-primary">
        Product Tables
      </h6>
    </div>
    <!-- Card Body -->
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Name Items</th>
              <th>Name Categories</th>
              <th>Price</th>
              <th>Stock</th>
              <th>Detail</th>
            </tr>
          </thead>
          <tbody>
            <?php if (!empty($products)) { ?>
              <?php
              $no = 1;
              foreach ($products as $pdr) : ?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $pdr->name_items ?></td>
                  <td><?= $pdr->name_categories ?></td>
                  <td><?= $pdr->price ?></td>
                  <td><?= $pdr->stock ?></td>
                  <td>
                    <a href="<?= base_url(); ?>products" class="btn btn-warning btn-sm"><i class="fas fa-eye"></i></a>
                  </td>
                </tr>
              <?php endforeach; ?>
            <?php } else { ?>
              <td colspan="6" class="text-center">No Data Produts</td>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>