<?php
include 'koneksi.php';
$email = $_GET['email'];
$sqlGet = "SELECT * FROM mid11825 WHERE email='$email'";
$queryGet = mysqli_query($conn, $sqlGet);
$data = mysqli_fetch_array($queryGet);
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
            <li><a href="update.php"><i class="fas fa-plus"> Tambah</i></a></li>
            <li><a href="#"><i class="fas fa-search"> Cari</i></a></li>
            <li><a href="tampil.php"><i class="fas fa-cog"> Edit</i></a></li>


        </ul>
    </div>
    <br>
    <aside>
        <form action="" method="post">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="<?php echo "$data[name]"; ?>" class="form-control" required>
            <br>
            <label for="name">Membership</label>
            <input type="text" id="membership" name="membership" value="<?php echo "$data[membership]"; ?>" class="form-control" required>
            <br>
            <label for="name">Email</label>
            <input type="text" id="email" name="email" value="<?php echo "$data[email]"; ?>" class="form-control" required readonly>
            <br>
            <label for="name">Phone</label>
            <input type="text" id="phone" name="phone" value="<?php echo "$data[phone]"; ?>" class="form-control" required>
            <br>
            <label for="name">Address</label>
            <input type="text" id="address" name="address" value="<?php echo "$data[address]"; ?>" class="form-control" required>
            <br>
            <label for="name">Date Of Birthday</label>
            <input type="DATE" id="dob" name="dob" value="<?php echo "$data[dob]"; ?>" class="form-control" required>
            <br>
            <label for="name">Gender</label>
            <br>
            <select name="gender" id="gender" value="<?php echo "$data[gender]"; ?>" class="form-select">
                <option>Pilih jenis Kelamin</option>
                <option value="Laki-laki">Laki-laki
                </option>
                <option value="Perempuan">Perempuan</option>
            </select>
            <br>

            <input class="btn btn-success mt-3" type="submit" name="simpan" value="simpan">

            <?php
            if (isset($_POST['simpan'])) {
                $name = $_POST['name'];
                $membership = $_POST['membership'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                $dob = $_POST['dob'];
                $gender = $_POST['gender'];

                $sqlUpdate = "UPDATE mid11825 SET name='" . $name . "',membership='" . $membership . "',email='" . $email . "',phone='" . $phone . "',address='" . $address . "',dob='" . $dob . "',gender='" . $gender . "' WHERE email='" . $email . "'";
                $queryUpdate = mysqli_query($conn, $sqlUpdate);
                header("location: tampil.php");
            }
            ?>


    </aside>

</body>

</html>