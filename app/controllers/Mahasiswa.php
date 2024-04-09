<?php

class Mahasiswa extends Controller
{
    public function index()
    {

        $data['judul'] = 'daftar mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllmahasiswa();
        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {

        $data['judul'] = 'Detail Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
        $this->view('templates/header', $data);
        $this->view('mahasiswa/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah(){
    $result = $this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST);

    if ($result === -1) {
        Flasher::setFlash('gagal', 'NIM sudah ada', 'danger');
    } elseif ($result > 0) {
        Flasher::setFlash('berhasil', 'ditambahkan', 'success');
    } else {
        Flasher::setFlash('gagal', ' di tambahkan semua data harus di isi', 'danger');
    }

    header('Location:'.BASEURL.'/mahasiswa');
    exit;
}
      public function hapus($id){

        if ( $this ->model('mahasiswa_model')->hapusDataMahasiswa($id)> 0){
            Flasher :: setFlash('berhasil','dihapus','success');
            header('Location:'.BASEURL.'/mahasiswa');
            exit;
        }else{
            Flasher :: setFlash('gagal','dihapus','danger');
            header('Location:'.BASEURL.'/mahasiswa');
            exit;
        }
    }
}