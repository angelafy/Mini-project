<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProfileController extends Controller
{

    public function __invoke(Request $request)
    {
        $page_title = 'Biodata';
        $nama_lengkap = 'Angela Fransisca Yulisiswati';
        $nim = '1204220007';
        $kelas = 'IS - 05 - 03';
        $matkul = 'Pemrograman Framework';

        return view('auth.profile', ['page_title' => $page_title, 'nama_lengkap' => $nama_lengkap, 'nim' => $nim, 'kelas' => $kelas, 'matkul' => $matkul]);
    }
}
