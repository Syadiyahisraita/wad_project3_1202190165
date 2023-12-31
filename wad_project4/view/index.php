<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form List</title>
</head>
<body>
    <center>
        <div class="container">
        <form>
    <div class="form-group">
      <label for="nama">Nama:</label>
      <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama">
    </div>
    <div class="form-group">
      <label for="nim">NIM:</label>
      <input type="text" class="form-control" id="nim" placeholder="Masukkan NIM">
    </div>
    <div class="form-group">
      <label for="action">Action:</label>
      <div class="btn-group">
        <a href="delete.php" class="btn btn-danger">Delete</a>
        <a href="edit.php" class="btn btn-primary">Edit</a>
        <a href="view.php" class="btn btn-success">View</a>
      </div>
    </div>
  </form>
        </div>
    </center>
</body>
</html>
