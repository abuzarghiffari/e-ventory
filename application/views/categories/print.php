<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $title ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <table class="table table-bordered" id="dataTable" width="50%" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Category Code</th>
                <th>Category Name</th>

            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($categories as $ctr) : ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $ctr->code_categories ?></td>
                    <td><?= $ctr->name_categories ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>

<script type="text/javascript">
    window.print();
</script>