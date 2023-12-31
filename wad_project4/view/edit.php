<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit</title>
    </head>
    <body>
        <?php 
            include("connect.php");
        ?>
        <div class="row">
            <center>
                <h1>Form Edit</h1>
                <div class="col-md-4 p-3">
                    <div class="card">
                        <div class="card-body">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="form-floating mb-3">
                                    <input type="string" class="form-control" name="nama" id="nama" value="Tampilkan data nama disini">
                                    <label for="nama">Nama</label>
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" name="nim" id="nim" value="Tampilkan data nim disini">
                                    <label for="nim">NIM</label>
                                </div>
                                <button type="submit" name="update" id="update" class="btn btn-primary mb-3 mt-3 w-100">Simpan Perubahan</button>
                                <a href="index.php" class="btn btn-success">Kembali ke Index</a>
                            </form>
                        </div>
                    </div>
                </div>
            <center>
        </div>
    </body>
</html>