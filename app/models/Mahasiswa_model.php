<?php


class Mahasiswa_model
{
    // private $mhs = [
    //     [
    //         "nama" => "salman fauzi",
    //         "nim" => "22416255201063",
    //         "kelas" => "if22c",
    //         "jurusan" => "teknik informatika"
    //     ],
    //     [
    //         "nama" => "salman muhamad",
    //         "nim" => "22416255201062",
    //         "kelas" => "if22d",
    //         "jurusan" => "teknik informatika"
    //     ],
    //     [
    //         "nama" => "muhamad salman",
    //         "nim" => "22416255201021",
    //         "kelas" => "if22z",
    //         "jurusan" => "teknik informatika"

    //     ]
    // ];

    private $dbh; //data base handler
    private $stmt; //


    public function __construct()
    {
        //data source name
        $dsn = 'mysql:host=localhost;dbname=php_mvc';

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }


    public function getAllmahasiswa()
    {

        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
