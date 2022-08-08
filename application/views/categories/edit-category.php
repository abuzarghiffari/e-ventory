<!-- Modal -->
<?php foreach ($categories as $ctr) : ?>
  <div class="modal fade" id="edit-modal<?= $ctr->id_categories ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="<?= base_url(); ?>categories/update" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
          <div class="modal-body">
            <div class="form-group">
              <label for="name">Code Category</label>
              <input type="hidden" name="id_categories" value="<?= $ctr->id_categories ?>">
              <input type="text" class="form-control" name="code_categories" value="<?= $ctr->code_categories ?>" required>
              <div class="invalid-feedback">
                Please enter your code category
              </div>
            </div>
            <div class=" form-group">
              <label for="name">Name Category</label>
              <input type="text" class="form-control" name="name_categories" value="<?= $ctr->name_categories ?>" required>
              <div class="invalid-feedback">
                Please enter your name category
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" id="reset" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Update</button>
          </div>
        </form>
      </div>
    </div>
  </div>
<?php endforeach; ?>