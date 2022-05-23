<?php
    include 'koneksi.inc.php';
?>
<html>
<head>
    <title> DATA PENGGUNA</title>
</head>
<body>
        <h3><center> DATA PENGGUNA </center></h3>
            <table width='80%' border=1>
            <tr>
                <th> ID </th>
                <th> Nama </th>
                <th> Jenis Kelamin </th>
                <th> Email </th>
                <th> Alamat </th>
                <th> Kota </th>
                <th> Pesan </th>
            </tr>
        <?php
            $kontak = mysqli_query($conn, "SELECT * FROM kontak");
            foreach ($kontak as $row) {
                echo "<tr>";
                echo "<td align = 'center'>".$row['id']."</td>";
                echo "<td align = 'center'>".$row['nama']."</td>";
                echo "<td align = 'center'>".$row['jkel']."</td>";
                echo "<td align = 'center'>".$row['email']."</td>";
                echo "<td align = 'center'>".$row['alamat']."</td>";
                echo "<td align = 'center'>".$row['kota']."</td>";
                echo "<td align = 'center'>".$row['pesan']."</td>";
                echo "</tr>";
            }
            ?>
    </table>
    <br>
    <a href="kontak.html"><button class="button">Kembali</button></a>
</body>
</html>