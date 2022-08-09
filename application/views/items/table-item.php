<!-- Tables -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add-items">
      <i class="fas fa-plus"></i>
    </button>
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
          <?php if (!empty($items)) { ?>
            <?php
            $no = 1;
            foreach ($items as $ctr) : ?>
              <tr>
                <td><?= $no++ ?></td>
                <td><?= $ctr->code_items ?></td>
                <td><?= $ctr->name_items ?></td>
                <td>
                  <a href="#" class="btn btn-primary btn-sm"><i class="fas fa-pen"></i></a>
                  <a href="#" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">
                    <i class="fas fa-trash"></i>
                  </a>
                </td>
              </tr>
            <?php endforeach; ?>
          <?php } else { ?>
            <td colspan="4" class="text-center">No Data Items</td>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>