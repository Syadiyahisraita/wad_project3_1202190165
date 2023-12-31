<?php 
    
    ##alasan 'muncul' karena $_GET sudah termasuk setting defaut alias sudah terset
    if ($_GET) { //untuk menentukan apakah form sudah tersubmit atau belum dan tidak perlu diberi else apabila diluar html namun masih dalam satu file
        echo $_GET['inputNumber5'];
    }
?>
<br>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Latihan 2 PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
  </head>
  <body>
    <!-- As a heading -->
    <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">Latihan 2 PHP</span>
        </div>
    </nav>
    <br>
<form action="#" method="get"> <!-- jika ingin mempassing data ke file lain yang perlu dilakukan adalah membungkus dg tag <form action="linkfilepassing.php" method="ygakandigunakan"> didalamnya tag form harus ada tag <input type="" name="iniharusdiisibuat bisa dipanggil"> dan didalam form harus ada tag <button type="submit"> agar berhasil dipassing -->
  <div class="container">
  <label for="inputNumber5" class="form-label">Input Suhu Celcius</label>
  <input type="number" name="inputNumber5" id="inputNumber5" class="form-control" aria-describedby="numberHelpBlock">
  <div id="numberHelpBlock" class="form-number">
  Your characters contain numbers, and must not contain spaces, alfabet, special characters, or emoji.
  </div>
  <br>
  <label for="inputDropdown5" class="form-label">Konversi</label>
  <select class="form-select" aria-label="Default select example">
    <option selected>Open this select menu</option>
    <option value="1">Fahrenheit</option>
    <option value="2">Reaumur</option>
    <option value="3">Kelvin</option>
  </select>
  <br>
  <button class="btn btn-primary" type="submit">Hitung</button>
</form>
<br>
<?php 
    
    ##alasan 'muncul' karena $_GET sudah termasuk setting defaut alias sudah terset
    if (isset($_GET)) { //akan error karena nilai index 'inputnumber5' belum terdefinisikan atau terisi jadi lebih baik 'isset' harus dihilangkan agar tidak keluar errornya
        echo $_GET['inputNumber5'];
    } else {
        echo 'tidak muncul';
    }
?>
  </div>
  </body>
</html>