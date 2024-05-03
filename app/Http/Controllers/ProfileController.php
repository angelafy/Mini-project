<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProfileController extends Controller
{

    public function __invoke(Request $request)
    {
        $page_title = 'Profile Biodata';
        $nama_lengkap = 'Muhammad Izzul Haq Syihabuddin Sanni';
        $nim = '1204220052';
        $kelas = 'IS - 05 - 03';
        $matkul = 'Pemrograman Framework';

        return view('auth.profile', ['page_title' => $page_title, 'nama_lengkap' => $nama_lengkap, 'nim' => $nim, 'kelas' => $kelas, 'matkul' => $matkul]);
    }

    // added by sihub

}
