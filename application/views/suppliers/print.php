<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>

<body>

    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Supplier Code</th>
                <th>Supplier Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($suppliers as $spl) : ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $spl->code_suppliers ?></td>
                    <td><?= $spl->name_suppliers ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>


</body>

</html>
<script type="text/javascript">
    window.print();
</script>