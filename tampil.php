<?php
include 'koneksi.php'

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


        <div class="container ">
            <table class="table table-striped table-hover">

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
                $sqlGet = "SELECT * FROM mid11825";
                $query = mysqli_query($conn, $sqlGet);

                while ($data = mysqli_fetch_array($query)) {
                    echo "
                <tbody>
                <tr>
                    <td>$data[name]</td>
                    <td>$data[membership]</td>
                    <td>$data[email]</td>
                    <td>$data[phone]</td>
                    <td>$data[address]</td>
                    <td>$data[dob]</td>
                    <td>$data[gender]</td>
                    <td>
                        <div class='row'>
                            <div class='col d-flex justify-content-center'>
                                <a href='update.php?email=$data[email]' class='btn btn-sm btn-warning'>Update</a>
                    </td>
                    <td>
                        <a href='delete.php?name=$data[name]' class='btn btn-sm btn-danger'>Delete</a>
                    </td>
                </tr>
            </tbody>
                    ";
                }
                ?>



            </table>
        </div>
    </aside>
</body>

</html>