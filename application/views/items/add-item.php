<!-- Modal -->
<div class="modal fade" id="add-items" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add item</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url(); ?>items/insert" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Code item</label>
                        <input type="text" class="form-control" name="code_items" placeholder="Enter code item" required>
                        <div class="invalid-feedback">
                            Please enter your code item
                        </div>
                    </div>
                    <div class=" form-group">
                        <label for="name">Name item</label>
                        <input type="text" class="form-control" name="name_items" placeholder="Enter name item" required>
                        <div class="invalid-feedback">
                            Please enter your name item
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="reset" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>