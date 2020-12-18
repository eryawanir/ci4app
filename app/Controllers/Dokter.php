<?php

namespace App\Controllers;

class Dokter extends BaseController
{
    public function index()

    {
        $data = [
            'title' => ' List Dokter',
            'page' => 'dokter'
        ];

        return view('pages/dokter', $data);
    }






    //--------------------------------------------------------------------

}
