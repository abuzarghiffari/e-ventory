<!-- Tables -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add-modal">
      <i class="fas fa-plus"></i>
    </button>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No</th>
            <th>Code Categories</th>
            <th>Name Categories</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php if (!empty($categories)) { ?>
            <?php
            $no = 1;
            foreach ($categories as $ctr) : ?>
              <tr>
                <td><?= $no++ ?></td>
                <td><?= $ctr->code_categories ?></td>
                <td><?= $ctr->name_categories ?></td>
                <td>
                  <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#edit-modal<?= $ctr->id_categories ?>"><i class="fas fa-pen"></i></button>
                  <a href="<?= base_url(); ?>categories/delete/<?= $ctr->id_categories ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"><i class="fas fa-trash"></i></a>
                </td>
              </tr>
            <?php endforeach; ?>
          <?php } else { ?>
            <td colspan="4" class="text-center">No Data Categories</td>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>