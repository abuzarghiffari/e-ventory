<!-- Tables -->
<div data-aos="zoom-in" class=" col-xl-8 col-lg-7">
  <div class="card shadow mb-4">
    <!-- Card Header - Dropdown -->
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-primary">
        Dashboard Table
      </h6>
    </div>
    <!-- Card Body -->
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Item Name</th>
              <th>Category Item</th>
              <th>Supplier Name</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($products as $pdr) : ?>
              <tr>
                <td><?= $no++ ?></td>
                <td><?= $pdr->name_items ?></td>
                <td><?= $pdr->name_categories ?></td>
                <td><?= $pdr->name_suppliers ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>