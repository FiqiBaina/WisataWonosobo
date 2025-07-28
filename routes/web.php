<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\AcaraController;

// routes/web.php
Route::get('/', function () {
    $destinasi = [
    [
        'id' => 1,
        'gambar' => 'images/beranda/gncilik.jpg',
        'judul' => 'Gunung Cilik',
        'deskripsi' => 'Deskripsi singkat tentang destinasi wisata',
    ],
    [
        'id' => 2,
        'gambar' => 'images/beranda/bukitscooter.jpg',
        'judul' => 'Bukit Skoter',
        'deskripsi' => 'Deskripsi singkat tentang destinasi wisata',
    ],
    [
        'id' => 3,
        'gambar' => 'images/beranda/gnsindoro.png',
        'judul' => 'Gunung Sindoro',
        'deskripsi' => 'Deskripsi singkat tentang destinasi wisata',
    ],
    [
        'id' => 4,
        'gambar' => 'images/beranda/batuangkruk.png',
        'judul' => 'Batu Angkruk',
        'deskripsi' => 'Deskripsi singkat tentang destinasi wisata',
    ],
    [
        'id' => 5,
        'gambar' => 'images/beranda/kahyangan.jpg',
        'judul' => 'Kahyangan Skyline',
        'deskripsi' => 'Deskripsi singkat tentang destinasi wisata',
    ],
];

    return view('beranda', [
        'title' => 'Beranda Page',
        'destinasi' => $destinasi
    ]);
});

Route::get('/detail-wisata/{id}', [WisataController::class, 'show'])->name('detail.wisata');

















Route::get('/wisata', function () {
    $destinasigunung = [
        [
            'id' => 1,
            'gambar' => 'images/gncilik/gunungcilik.jpg',
            'judul' => 'Gunung Cilik',
            'deskripsi' => 'Deskripsi singkat tentang destinasi wisata',
        ],
        [
            'id' => 2,
            'gambar' => 'images/bukitskoter/gambar4.jpg',
            'judul' => 'Bukit Skoter',
            'deskripsi' => 'Deskripsi singkat tentang destinasi wisata',
        ],
        [
            'id' => 3,
            'gambar' => 'images/gnsindoro/gambar6.webp',
            'judul' => 'Gunung Sindoro',
            'deskripsi' => 'Deskripsi singkat tentang destinasi wisata',
        ],
        [
            'id' => 4,
            'gambar' => 'images/gnprau/gambar5.jpg',
            'judul' => 'Gunung Prau',
            'deskripsi' => 'Deskripsi singkat tentang destinasi wisata',
        ],
        [
            'id' => 5,
            'gambar' => 'images/sikunir/gambar6.jpg',
            'judul' => 'Bukit Sikunir',
            'deskripsi' => 'Deskripsi singkat tentang destinasi wisata',
        ],
    ];

    $destinasidanau = [
        [
            'id' => 6,
            'gambar' => 'images/telagamenjer/gambar2.jpg',
            'judul' => 'Telaga Menjer',
            'deskripsi' => 'Deskripsi singkat tentang destinasi wisata',
        ],
        [
            'id' => 7,
            'gambar' => 'images/telagawarna/gambar5.webp',
            'judul' => 'Telaga Warna',
            'deskripsi' => 'Deskripsi singkat tentang destinasi wisata',
        ],
        [
            'id' => 8,
            'gambar' => 'images/telagadringo/gambar1.jpg',
            'judul' => 'Telaga Dringo',
            'deskripsi' => 'Deskripsi singkat tentang destinasi wisata',
        ],
        [
            'id' => 9,
            'gambar' => 'images/telagapengilon/gambar5.jpeg',
            'judul' => 'Telaga Pengilon',
            'deskripsi' => 'Deskripsi singkat tentang destinasi wisata',
        ],
        [
            'id' => 10,
            'gambar' => 'images/telagamerdada/gambar4.jpg',
            'judul' => 'Telaga Merdada',
            'deskripsi' => 'Deskripsi singkat tentang destinasi wisata',
        ],
    ];

    $destinasiperkebunan = [
        [
            'id' => 11,
            'gambar' => 'images/kebuntehpanama/gambar6.webp',
            'judul' => 'Kebun Teh Panama',
            'deskripsi' => 'Deskripsi singkat tentang destinasi wisata',
        ],
        [
            'id' => 12,
            'gambar' => 'images/kebuntehbedakah/gambar6.jpg',
            'judul' => 'Teh Bedakah',
            'deskripsi' => 'Deskripsi singkat tentang destinasi wisata',
        ],
        [
            'id' => 13,
            'gambar' => 'images/kebuntehcandiyasan/gambar2.jpg',
            'judul' => 'Kebun Teh Candiyasan',
            'deskripsi' => 'Deskripsi singkat tentang destinasi wisata',
        ],
        [
            'id' => 14,
            'gambar' => 'images/kebuntehsikatok/gambar5.jpg',
            'judul' => 'Sikatok Kebun Teh',
            'deskripsi' => 'Deskripsi singkat tentang destinasi wisata',
        ],
        [
            'id' => 15,
            'gambar' => 'images/kebuntehtambi/gambar6.webp',
            'judul' => 'Agrowisata Teh Tambi',
            'deskripsi' => 'Deskripsi singkat tentang destinasi wisata',
        ],
    ];

    $telagadringo = [
        [
            'tag' => '#WisataPopuler',
            'gambar' => 'images/telagadringo/gambar1.jpg',
            'judul' => 'Telaga Dringo',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur. Laoreet in nullam in duis
ante sed faucibus ac non. Felis semper massa eget ac mi.',
        ],
    ];

    $bukitsikunir = [
        [
            'tag' => '#WisataPopuler',
            'gambar' => 'images/sikunir/gambar6.jpg',
            'judul' => 'Bukit Sikunir',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur. Laoreet in nullam in duis
ante sed faucibus ac non. Felis semper massa eget ac mi.',
        ],
    ];

    $batupandang = [
        [
            'tag' => '#WisataPopuler',
            'gambar' => 'images/batupandang.jpg',
            'judul' => 'Batu Pandang Ratapan Angin',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur. Laoreet in nullam in duis
ante sed faucibus ac non. Felis semper massa eget ac mi.',
        ],
    ];

    $candiarjuna = [
        [
            'tag' => '#WisataPopuler',
            'gambar' => 'images/candiarjuna.jpg',
            'judul' => 'Candi Arjuna',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur. Laoreet in nullam in duis
ante sed faucibus ac non. Felis semper massa eget ac mi.',
        ],
    ];

    return view('wisata', [
        'destinasigunung' => $destinasigunung,
        'destinasidanau' => $destinasidanau,
        'destinasiperkebunan' => $destinasiperkebunan,
        'telagadringo' => $telagadringo,
        'bukitsikunir' => $bukitsikunir,
        'batupandang' => $batupandang,
        'candiarjuna' => $candiarjuna
    ]);
});

Route::get('/acara', function () {
    $detail = [
        [
            'id' => 1,
            'gambar' => 'images/balon.jpg',
            'judul' => 'Nama Acara 1',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur. Laoreet in nullam in duis ante sed. Lorem ipsum dolor sit amet consecte tur lorem ipsum dolor sit amet consectetur. Laoreet in nullam in duis ante sed.',
            'bulan' => 'Jan',
            'tanggal' => '20',
            'tahun' => '2025',
            'jam' => '08.00 WIB',
        ],
        [
            'id' => 2,
            'gambar' => 'images/balon.jpg',
            'judul' => 'Nama Acara 2',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur. Laoreet in nullam in duis ante sed. Lorem ipsum dolor sit amet consecte tur lorem ipsum dolor sit amet consectetur. Laoreet in nullam in duis ante sed.',
            'bulan' => 'Jan',
            'tanggal' => '20',
            'tahun' => '2025',
            'jam' => '08.00 WIB',
        ],
        [
            'id' => 3,
            'gambar' => 'images/balon.jpg',
            'judul' => 'Nama Acara 3',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur. Laoreet in nullam in duis ante sed. Lorem ipsum dolor sit amet consecte tur lorem ipsum dolor sit amet consectetur. Laoreet in nullam in duis ante sed.',
            'bulan' => 'Jan',
            'tanggal' => '20',
            'tahun' => '2025',
            'jam' => '08.00 WIB',
        ],
        [
            'id' => 4,
            'gambar' => 'images/balon.jpg',
            'judul' => 'Nama Acara 4',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur. Laoreet in nullam in duis ante sed. Lorem ipsum dolor sit amet consecte tur lorem ipsum dolor sit amet consectetur. Laoreet in nullam in duis ante sed.',
            'bulan' => 'Jan',
            'tanggal' => '20',
            'tahun' => '2025',
            'jam' => '08.00 WIB',
        ],
    ];

    return view('acara', [
        'title' => 'Acara Page',
        'detail' => $detail
    ]);
});

Route::get('/detail-acara/{id}', [AcaraController::class, 'show'])->name('detail.acara');

Route::get('/pemanduwisata', function () {
    return view('pemanduwisata', ['title' => 'Pemandu Wisata Page']);
});

Route::get('/birotransportasi', function () {
    return view('birotransportasi', ['title' => 'Biro Transportasi Page']);
});

Route::get('/faq', function () {
    return view('faq', ['title' => 'FAQ Page']);
});

Route::get('/hubungi', function () {
    return view('hubungi', ['title' => 'Hubungi Page']);
});

Route::get('/hasil-pencarian', [WisataController::class, 'cari'])->name('hasilpencarian');
