<!-- Tables -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <a href="<?= base_url(); ?>products/insert" class="btn btn-primary">
      <i class="fas fa-plus"></i>
    </a>
  </div>
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
            <th>Action</th>
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
                <td>$<?= $pdr->price ?></td>
                <td><?= $pdr->stock ?></td>
                <td>
                  <a href="<?= base_url(); ?>products/update/<?= $pdr->id_products ?>" class="btn btn-primary btn-sm"><i class="fas fa-pen"></i></a>
                  <a href="#" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">
                    <i class="fas fa-trash"></i>
                  </a>
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