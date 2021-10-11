<?php include "./conn.php" ?>
<body>
    <form action="editsiswapost.php?id=<?php echo $_GET['id'] ?>" method="post">
        <?php
        $sql = 'select * from siswa where id =' . $_GET['id'];
        $result = mysqli_query($conn, $sql);
        if (mysqli_error($conn)) {
            echo mysqli_error($conn);
            exit();
        }
        $data = mysqli_fetch_assoc($result);
        ?>
        <div>
            <span>Name: </span>
            <input type="text" name="Nama" value="<?php echo $data['Nama'] ?>">
        </div>
        <div>
            <span>Address: </span>
            <input type="text" name="Alamat" value="<?php echo $data['Alamat'] ?>">
        </div>
        <div>
            <button type="submit">Update</button>
        </div>
    </form>
</body>