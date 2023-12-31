<?php 
class mahasiswa{ //class model->terkait data
    //buat method koneksi
    //public $conn = new mysqli("localhost","root","","wad_project3");
    // Database connection
    private $conn;

    // Constructor to establish database connection
    public function __construct() {
        $this->conn = new mysqli("localhost", "root", "", "wad_project3");

        // Check connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }
    //buat method insert data
    public function insert($nama, $nim){
        //logic insert
    }

    //buat method update data
    public function update($nama, $nim){
        //logic update
    }

    //buat method delete data

    //buat method select data
    public function select($nama, $nim){
        //logic select
    }

}
?>