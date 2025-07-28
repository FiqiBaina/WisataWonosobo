<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Acara;

class AcaraController extends Controller
{

    public function show($id)
{
    $detail = [
        1 => [
            'gambar' => 'images/balon.jpg',
            'judul' => 'Nama Acara 1',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt.',
            'bulan' => 'Jan',
            'tanggal' => '20',
            'tahun' => '2025',
            'jam' => '08.00 WIB',
        ],
        2 => [
            'gambar' => 'images/balon.jpg',
            'judul' => 'Nama Acara 2',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt.',
            'bulan' => 'Jan',
            'tanggal' => '20',
            'tahun' => '2025',
            'jam' => '08.00 WIB',
        ],
        3 => [
            'gambar' => 'images/balon.jpg',
            'judul' => 'Nama Acara 3',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt.',
            'bulan' => 'Jan',
            'tanggal' => '20',
            'tahun' => '2025',
            'jam' => '08.00 WIB',
        ],
        4 => [
            'gambar' => 'images/balon.jpg',
            'judul' => 'Nama Acara 4',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt.',
            'bulan' => 'Jan',
            'tanggal' => '20',
            'tahun' => '2025',
            'jam' => '08.00 WIB',
        ],
    ];

    if (!isset($detail[$id])) {
        abort(404);
    }

    $data = $detail[$id];

    return view('detailacara', compact('data'));
}

}
