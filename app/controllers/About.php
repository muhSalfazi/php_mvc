<?php

class About extends Controller
{
    public function index($nama = 'salman', $perkerjaan = 'mahasiswa', $umur = 20)
    {
        $data['nama'] = $nama;
        $data['perkerjaan'] = $perkerjaan;
        $data['umur'] = $umur;
        
        
        $data['judul'] = 'about me';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
    public function page()
    {
        $data['judul'] = 'Pages';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}