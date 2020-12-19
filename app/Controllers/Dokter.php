<?php

namespace App\Controllers;

use App\Models\DokterModel;

class Dokter extends BaseController
{
    public function index()

    {
        $dokterModel = new DokterModel();
        $dokter = $dokterModel->findAll();



        $data = [
            'title' => ' List Dokter',
            'page' => 'dokter',
            'dokter' => $dokter

        ];

        return view('pages/dokter', $data);
    }






    //--------------------------------------------------------------------

}
