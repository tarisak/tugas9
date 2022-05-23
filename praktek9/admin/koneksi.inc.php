<html>
    <head>
        <title> Data Pengguna </title>
    </head>
    <body>
        <?php
        $conn = mysqli_connect("localhost", "root", "" ,"data_pengguna");

        //check connection
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL:". mysqli_connect_error();
            exit();
        }
        ?>
    </body>
</html>