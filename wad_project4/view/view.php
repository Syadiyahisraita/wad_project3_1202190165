<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>VIEW</title>
    </head>
    <body>
        <?php 
            include("connect.php");
        ?>
        <div class="row">
            <center>
                <h1>Form View</h1>
                <div class="col-md-4 p-3">
                    <div class="card">
                        <div class="card-body">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <!-- Tampilkan masing-masing data yang telah diambil dari database tadi -->
                                <div class="form-floating mb-3">
                                    <input type="string" class="form-control" name="nama" id="nama" value="Tampilkan data Nama disini" disabled>
                                    <label for="nama">Nama</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" name="nim" id="nim" value="Tampilkan data NIM disini" disabled>
                                    <label for="nim">NIM</label>
                                </div>
                                <a href="index.php" class="btn btn-success">Kembali ke Index</a>
                            </form>
                        </div>
                    </div>
                </div>
            <center>
        </div>
    </body>
</html>