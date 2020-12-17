<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()

    {
        $data = [
            'title' => ' Pendaftaran IGD',
            'page' => 'pendaftaran'
        ];

        return view('pages/home', $data);
    }

    public function pasien()

    {
        $data = [
            'title' => ' Pasien Aktif IGD',
            'page' => 'pasien'
        ];

        return view('pages/home', $data);
    }

    public function bed()

    {
        $data = [
            'title' => ' Manajemen Bed',
            'page' => 'bed'
        ];

        return view('pages/home', $data);
    }

    public function rekammedis()

    {
        $data = [
            'title' => ' Daftar Rekam Medis',
            'page' => 'rekammedis'
        ];

        return view('pages/home', $data);
    }

    public function transaksi()

    {
        $data = [
            'title' => ' Pembayaran',
            'page' => 'transaksi'
        ];

        return view('pages/home', $data);
    }




    //--------------------------------------------------------------------

}
