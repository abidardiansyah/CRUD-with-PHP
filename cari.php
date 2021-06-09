<?php
include 'koneksi.php';
error_reporting()
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

</head>

<body>

    <div class="sidebar">
        <header>CRUD</header>
        <ul>
            <li><a href="index.php"><i class="fas fa-plus"> Tambah</i></a></li>
            <li><a href="cari.php"><i class="fas fa-search"> Cari</i></a></li>
            <li><a href="tampil.php"><i class="fas fa-cog"> Edit</i></a></li>


        </ul>
    </div>
    <br>
    <aside>
        <form action="" method="post">
            <div class="container ">
                <table class="table table-striped table-hover">
                    <label for="name">Masukkan Nama Pencarian</label>
                    <input type="text" name="keyword" class="form-control">
                    <input class="btn btn-success mt-3" type="submit" value="Search">
        </form>
        <?php
        if (isset($_POST['keyword'])) {
            $keyword = $_POST['keyword'];
            if (!empty($keyword) && $keyword != "") {
                $query = "SELECT * FROM mid11825 WHERE name LIKE '%$keyword%'";
                $sql = mysqli_query($conn, $query);
            } else if ($keyword == "") {
                $query = "SELECT * FROM mid11825";
                $sql = mysqli_query($conn, $query);
            }
        } else {
            die("");
        }

        ?>
        <thead>
            <th>Name </th>
            <th>Membership</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Birthday</th>
            <th>Gender</th>
            <th>Aksi</th>
            <th></th>


        </thead>
        <?php
        if (mysqli_num_rows($sql) < 1) { ?>
            <tr>
                <td colspan="8">Tidak Ada Data Nama</td>
            </tr>
            <?php } else {
            while ($hasil = mysqli_fetch_array($sql)) {
                $nama = $hasil['name'];
                $membership = $hasil['membership'];
                $email = $hasil['email'];
                $phone = $hasil['phone'];
                $address = $hasil['address'];
                $dob = $hasil['dob'];
                $gender = $hasil['gender'];

            ?>
                <tr>
                    <td><?= $nama ?></td>
                    <td><?= $membership ?></td>
                    <td><?= $email ?></td>
                    <td><?= $phone ?></td>
                    <td><?= $address ?></td>
                    <td><?= $dob ?></td>
                    <td><?= $gender ?></td>
                    <td>


                        <a href='update.php?email=<?= $email ?>' class='btn btn-sm btn-warning'>Edit</a>
                    </td>
                    <td>


                        <a href='delete.php?name=<?= $nama ?>' class='btn btn-sm btn-danger'>delete</a>
                    </td>

                </tr>

        <?php }
        } ?>



        </table>
        </div>
    </aside>
</body>

</html>