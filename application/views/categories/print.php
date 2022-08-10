<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= base_url(); ?>assets/css/sb-admin-2.min.css" rel="stylesheet" />
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <title><?= $title ?></title>
</head>

<body>
    <div class="container mt-3">
        <div class="text-center">
            <h4>
                <i class='bx bxs-package bx-md align-middle'></i>
                E-VENTORY
            </h4>
            <p>Jl. Kemana Mana Kita Senang, Pulau Kapuk</p>
            <p>Telp. (XXX)-XXXXXXX</p>
        </div>
        <div class="row">
            <div class="col-md-12">
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
            </div>
        </div>
    </div>

</body>

</html>

<script>
    window.print();
</script>