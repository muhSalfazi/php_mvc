<?php

class About
{
    public function index($nama = 'salman', $perkerjaan = 'mahasiswa')
    {
        echo "hallo,nama saya " . $nama . " saya adalah seorang " . $perkerjaan;
    }
    public function page()
    {
        echo "About/page";
    }
}
