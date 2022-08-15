<div class="card shadow mb-4 mt-2">
  <div class="card-body">
    <form action="<?= base_url(); ?>categories/update/<?= $categories->id_categories; ?>" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
      <div class="form-group">
        <label for="code_categories">Category Code</label>
        <input type="hidden" name="id_categories" value="<?= $categories->id_categories; ?>">
        <input type="text" class="form-control <?= form_error('code_categories') ? 'is-invalid' : ''; ?>" name="code_categories" value="<?= form_error('code_categories') ? set_value('code_categories') : $categories->code_categories; ?>" readonly>
        <div class="invalid-feedback">
          <?= form_error('code_categories'); ?>
        </div>
      </div>
      <div class="form-group">
        <label for="name_categories">Category Name</label>
        <input type="text" class="form-control <?= form_error('name_categories') ? 'is-invalid' : ''; ?>" name="name_categories" value="<?= form_error('name_categories') ? set_value('name_categories') : $categories->name_categories; ?>" required>
        <div class="invalid-feedback">
          <?= form_error('name_categories'); ?>
        </div>
      </div>
      <div class="form-footer">
        <a href="<?= base_url(); ?>categories" class="btn btn-warning">Back</a>
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
    </form>
  </div>
</div>