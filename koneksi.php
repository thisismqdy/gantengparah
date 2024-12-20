<?php
class Koneksi
{
    protected $conn;

    public function __construct()
    {
        $host = "localhost";
        $database = "dbperpus";
        $username = "root";
        $password = "";

        $this->conn = new mysqli($host, $username, $password, $database);
        if ($this->conn->error) {
            die("Koneksi dabatase MySQL gagal: " . $this->conn->error);
        }
    }
    
}

    class DataBuku extends Koneksi {
        public function tampilDatabuku() {
        $sql = "SELECT * FROM buku";
        return mysqli_query($this->conn, $sql);
    }
}


    class LokerBuku extends Koneksi {
        // No. 6
        public function tampilLokerbuku (){
        $sql = "SELECT * FROM buku WHERE loker_buku='Buku Resep Masakan'";
        return mysqli_query($this->conn, $sql);
        }
    }
    



?>