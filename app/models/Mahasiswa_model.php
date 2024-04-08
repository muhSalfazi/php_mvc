<?php


class Mahasiswa_model
{
   
   private $table = 'mahasiswa';
   private $db;

   public function __construct(){
    $this->db= new Database;
   }

    public function getAllmahasiswa()
    {
        $this->db->query('SELECT * FROM '. $this->table);
        return $this->db->resultSet();
    }

    public function getMahasiswaById($id)
    {
        $this-> db->query('SELECT * FROM '.$this->table.' WHERE id=:id');
        $this->db->bind('id',$id);
        return $this->db->single();
    }

   public function tambahDataMahasiswa($data){
    // Check if the NIM already exists
    $this->db->query('SELECT * FROM mahasiswa WHERE nim = :nim');
    $this->db->bind(':nim', $data['nim']);
    $existingMahasiswa = $this->db->single();

    if ($existingMahasiswa) {
        // Jika NIM sudah ada, beri pesan kesalahan atau tindakan yang sesuai
        return -1; // Misalnya, Anda bisa mengembalikan nilai negatif untuk menandakan kesalahan duplikasi NIM
    }

    // Jika NIM belum ada, tambahkan mahasiswa baru
    $query = "INSERT INTO mahasiswa VALUES('', :nama, :nim, :kelas, :jurusan)";
    $this->db->query($query);
    $this->db->bind(':nama', $data['nama']);
    $this->db->bind(':nim', $data['nim']);
    $this->db->bind(':kelas', $data['kelas']);
    $this->db->bind(':jurusan', $data['jurusan']);

    $this->db->execute();
    return $this->db->rowCount();
}

    public function hapusDataMahasiswa($id)
    {
        $query = "DELETE FROM mahasiswa WHERE id=:id";
        $this -> db-> query ($query);
        $this->db->bind('id',$id);
        $this->db->execute();
        return $this->db->rowCount();
    }
}