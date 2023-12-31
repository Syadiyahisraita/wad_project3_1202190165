<?php 
    
    ##echo $_POST['inputNumber5'];
    if (isset($_GET['inputNumber5'])) {
        echo 'muncul';
    } else {
        echo 'tidak muncul';
    }
?>
<br>
<?php 
    
    ##alasan 'tidak muncul' karena $_GET tidak ada isinya
    if ($_GET) {
        echo 'muncul';
    } else {
        echo 'tidak muncul';
    }
?>
<br>
<?php 
    
    ##alasan 'muncul' karena $_GET sudah termasuk setting defaut alias sudah terset
    if (isset($_GET)) {
        echo 'muncul';
    } else {
        echo 'tidak muncul';
    }
?>
<br>