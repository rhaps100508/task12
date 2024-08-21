<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "belajar12");
// ambil data sintesa dari data sintesa
$result = mysqli_query($conn, "SELECT * FROM mahes");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>TUGAS</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>jurusan</th>
            <th>asal</th>
        </tr>

        <?php while ( $row = mysqli_fetch_assoc($result) ) :
        ?>
        <tr>
            <td><?= $row["id"]?></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["jurusan"]; ?></td>
            <td><?= $row["asal"]; ?></td>
        </tr>
        <?php endwhile; ?>
    </table>

</body>
</html>