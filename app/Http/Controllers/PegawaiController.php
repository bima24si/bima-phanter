<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {
        $data['name']               = 'bima al arsy rabbani';
        $data['my_age']             = date('Y') - 2006;
        $data['hobbies']            = ['badminton, main gitar, scroll tiktok, ngoding, nonton'];
        $data['tgl_harus_wisuda']   = 2024 + 4;
        $data['time_to_study_left'] = $data['tgl_harus_wisuda'] - date('Y');
        $data['current_semester']   = 3;

        if ($data['current_semester'] < 3) {
            $data['kata'] = 'Masih Awal, Kejar TAK';
        } else {
            $data['kata'] = 'Jangan Main-Main, Kurangin Main Game';
        }

        $data['future_goal'] = 'lulus tepat waktu';

        return view('pegawai', $data);
    }
}
