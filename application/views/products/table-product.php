<!-- Tables -->
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
                <td><?= $pdr->price ?></td>
                <td><?= $pdr->stock ?></td>
                <td>
                  <a href="#" class="btn btn-primary btn-sm"><i class="fas fa-pen"></i></a>
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