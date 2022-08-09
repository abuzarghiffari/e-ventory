<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">
    <?= $title ?>
  </h1>
</div>
<div class="card shadow mb-4 mt-2">
  <div class="card-body">
    <form action="<?= base_url(); ?>suppliers/insert" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
      <div class="form-group">
        <label for="code_suppliers">Code Supplier</label>
        <input type="text" class="form-control <?= form_error('code_suppliers') ? 'is-invalid' : ''; ?>" name="code_suppliers" value="<?= set_value('code_suppliers'); ?>" required>
        <div class="invalid-feedback">
          <?= form_error('code_suppliers'); ?>
        </div>
      </div>
      <div class="form-group">
        <label for="name_suppliers">Name Supplier</label>
        <input type="text" class="form-control <?= form_error('name_suppliers') ? 'is-invalid' : ''; ?>" name="name_suppliers" value="<?= set_value('name_suppliers'); ?>" required>
        <div class="invalid-feedback">
          <?= form_error('name_suppliers'); ?>
        </div>
      </div>
      <div class="form-footer">
        <a href="<?= base_url(); ?>suppliers" class="btn btn-warning mr-2">Back</a>
        <button type="submit" class="btn btn-primary">Add</button>
      </div>
    </form>
  </div>
</div>