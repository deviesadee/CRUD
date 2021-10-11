<?php include "./conn.php" ?>

<!doctype html>
<html lang=en>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DATA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <h1>HAI WELCOME</h1>
    <a href="siswa.php">CREATE</a>

    <?php
        $sql = 'select * from siswa';
        $result = mysqli_query($conn, $sql);
    ?>

    <table border="1">

        <thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            <?php while ($data = mysqli_fetch_assoc($result)) { ?>
                <tr>

                    <td><?php echo $data['Nama'] ?></td>
                    <td><?php echo $data['Alamat'] ?></td>

                    <td>
                        <a href="editsiswa.php?id=<?php echo $data['Id']; ?>">EDIT</a>
                    </td>
                </tr>

                </tr>

            <?php } ?>
        </tbody>
    </table>

</body>
</html>