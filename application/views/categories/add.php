<div class="card shadow mb-4 mt-2">
  <div class="card-body">
    <form action="<?= base_url(); ?>categories/insert" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
      <div class="form-group">
        <label for="code_categories">Category Code</label>
        <input type="text" class="form-control <?= form_error('code_categories') ? 'is-invalid' : ''; ?>" name="code_categories" value="<?= codeCategoryAutomation(); ?>" readonly>
        <div class="invalid-feedback">
          <?= form_error('code_categories'); ?>
        </div>
      </div>
      <div class="form-group">
        <label for="name_categories">Category Name</label>
        <input type="text" class="form-control <?= form_error('name_categories') ? 'is-invalid' : ''; ?>" name="name_categories" value="<?= set_value('name_categories'); ?>" required>
        <div class="invalid-feedback">
          <?= form_error('name_categories'); ?>
        </div>
      </div>
      <div class="form-footer">
        <a href="<?= base_url(); ?>categories" class="btn btn-warning">Back</a>
        <button type="submit" class="btn btn-primary">Add</button>
      </div>
    </form>
  </div>
</div>