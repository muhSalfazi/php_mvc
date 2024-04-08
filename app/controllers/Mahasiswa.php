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

        if ( $this ->model('mahasiswa_model')->tambahDataMahasiswa($_POST)> 0){
            Flasher :: setFlash('berhasil','ditambahkan','success');
            header('Location:'.BASEURL.'/mahasiswa');
            exit;
        }else{
            Flasher :: setFlash('gagal','ditambahkan','danger');
            header('Location:'.BASEURL.'/mahasiswa');
            exit;
        }
    }
}