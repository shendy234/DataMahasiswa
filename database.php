<?php
class Database {
  private $host = "localhost";
  private $username = "root";
  private $password = "";
  private $database = "db_akademik";
  private $connection;

  function __construct() {
    $this->connection = mysqli_connect($this->host, $this->username, $this->password, $this->database);
    if (!$this->connection) {
      die("Connection failed: " . mysqli_connect_error());
    }
  }

  function tampil() {
    $query = "SELECT * FROM mahasiswa";
    $result = mysqli_query($this->connection, $query);
    if (!$result) {
      die("Query failed: " . mysqli_error($this->connection));
    }
    return $result;
  }

  function simpan($nama, $alamat, $umur) {
    $query = "INSERT INTO mahasiswa (nama, alamat, umur) VALUES ('$nama', '$alamat', '$umur')";
    if (!mysqli_query($this->connection, $query)) {
      die("Insert failed: " . mysqli_error($this->connection));
    }
    echo "Data berhasil disimpan<br>";
  }

  function hapus($id) {
    $query = "DELETE FROM mahasiswa WHERE id=$id";
    if (!mysqli_query($this->connection, $query)) {
      die("Delete failed: " . mysqli_error($this->connection));
    }
    echo "Data berhasil dihapus<br>";
  }
}
?>