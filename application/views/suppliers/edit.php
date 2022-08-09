<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">
    <?= $title ?>
  </h1>
</div>
<div class="card shadow mb-4 mt-2">
  <div class="card-body">
    <form action="<?= base_url(); ?>suppliers/update/<?= $suppliers->id_suppliers; ?>" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
      <div class="form-group">
        <label for="code_suppliers">Code Supplier</label>
        <input type="hidden" name="id_suppliers" value="<?= $suppliers->id_suppliers; ?>">
        <input type="text" class="form-control <?= form_error('code_suppliers') ? 'is-invalid' : ''; ?>" name="code_suppliers" value="<?= form_error('code_suppliers') ? set_value('code_suppliers') : $suppliers->code_suppliers; ?>" required>
        <div class="invalid-feedback">
          <?= form_error('code_suppliers'); ?>
        </div>
      </div>
      <div class="form-group">
        <label for="name_suppliers">Name Supplier</label>
        <input type="text" class="form-control <?= form_error('name_suppliers') ? 'is-invalid' : ''; ?>" name="name_suppliers" value="<?= form_error('name_suppliers') ? set_value('name_suppliers') : $suppliers->name_suppliers; ?>" required>
        <div class="invalid-feedback">
          <?= form_error('name_suppliers'); ?>
        </div>
      </div>
      <div class="form-footer">
        <a href="<?= base_url(); ?>suppliers" class="btn btn-warning mr-2">Back</a>
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
    </form>
  </div>
</div>