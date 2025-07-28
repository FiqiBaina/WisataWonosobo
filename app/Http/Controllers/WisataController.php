<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wisata;

class WisataController extends Controller
{

    public function show($id)
{
    $destinasi = [
        1 => [
            'gambar1' => 'images/gncilik/gunungcilik.jpg',
            'gambar2' => 'images/gncilik/gunungcilik1.jpg',
            'gambar3' => 'images/gncilik/gunungcilik2.jpg',
            'gambar4' => 'images/gncilik/gunungcilik3.jpg',
            'gambar5' => 'images/gncilik/gunungcilik4.jpg',
            'gambar6' => 'images/gncilik/gunungcilik5.jpg',
            'judul' => 'Gunung Cilik',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'lokasi' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.180329526847!2d109.97095317583063!3d-7.33363479267477!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a9fd4802a0ee9%3A0xf3a51e707e3f0721!2sKaliurip%20Mount!5e0!3m2!1sen!2sid!4v1749567587851!5m2!1sen!2sid" style="border:0; width: 100%; height: 241px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
        ],
        2 => [
            'gambar1' => 'images/bukitskoter/gambar1.jpg',
            'gambar2' => 'images/bukitskoter/gambar2.jpg',
            'gambar3' => 'images/bukitskoter/gambar3.jpg',
            'gambar4' => 'images/bukitskoter/gambar4.jpg',
            'gambar5' => 'images/bukitskoter/gambar5.jpeg',
            'gambar6' => 'images/bukitskoter/gambar6.webp',
            'judul' => 'Bukit Skoter',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'lokasi' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.3806015620435!2d109.90361827582961!3d-7.197342392808045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e700d013a7c0625%3A0x177f4e81819e8dcf!2sBukit%20Skoter!5e0!3m2!1sen!2sid!4v1749568101724!5m2!1sen!2sid" style="border:0; width: 100%; height: 241px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
        ],
        3 => [
            'gambar1' => 'images/gnsindoro/gambar1.jpg',
            'gambar2' => 'images/gnsindoro/gambar2.jpg',
            'gambar3' => 'images/gnsindoro/gambar3.jpeg',
            'gambar4' => 'images/gnsindoro/gambar4.jpg',
            'gambar5' => 'images/gnsindoro/gambar5.jpg',
            'gambar6' => 'images/gnsindoro/gambar6.webp',
            'judul' => 'Gunung Sindoro',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'lokasi' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31659.652000615628!2d109.97523370941579!3d-7.302499383125592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70757555351a43%3A0x6e1fd0eaed14acb5!2sMount%20Sundoro!5e0!3m2!1sen!2sid!4v1749568162111!5m2!1sen!2sid" style="border:0; width: 100%; height: 241px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
        ],
        4 => [
            'gambar1' => 'images/gnprau/gambar1.webp',
            'gambar2' => 'images/gnprau/gambar2.jpg',
            'gambar3' => 'images/gnprau/gambar3.jpg',
            'gambar4' => 'images/gnprau/gambar4.jpg',
            'gambar5' => 'images/gnprau/gambar5.jpg',
            'gambar6' => 'images/gnprau/gambar6.jpg',
            'judul' => 'Gunung Prau',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'lokasi' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.3821640887686!2d109.92960457582963!3d-7.197163292808202!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e700d2137d6aa11%3A0x899b0e25bc74ab01!2sGunung%20Prau!5e0!3m2!1sen!2sid!4v1749568206575!5m2!1sen!2sid" style="border:0; width: 100%; height: 241px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
        ],
        5 => [
            'gambar1' => 'images/sikunir/gambar1.jpg',
            'gambar2' => 'images/sikunir/gambar2.jpg',
            'gambar3' => 'images/sikunir/gambar3.webp',
            'gambar4' => 'images/sikunir/gambar4.webp',
            'gambar5' => 'images/sikunir/gambar5.jpg',
            'gambar6' => 'images/sikunir/gambar6.jpg',
            'judul' => 'Bukit Sikunir',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'lokasi' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.0150537684194!2d109.92172067583007!3d-7.239121092767189!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e700c9f673eedcf%3A0xb11d96d5bd9e2fe3!2sSikunir%20Hill%20Dieng!5e0!3m2!1sen!2sid!4v1749568270372!5m2!1sen!2sid" style="border:0; width: 100%; height: 241px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
        ], 
        6 => [
            'gambar1' => 'images/telagamenjer/gambar1.jpg',
            'gambar2' => 'images/telagamenjer/gambar2.jpg',
            'gambar3' => 'images/telagamenjer/gambar3.webp',
            'gambar4' => 'images/telagamenjer/gambar4.jpg',
            'gambar5' => 'images/telagamenjer/gambar5.jpg',
            'gambar6' => 'images/telagamenjer/gambar6.webp',
            'judul' => 'Telaga Menjer',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'lokasi' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7915.513648936982!2d109.92013374462601!3d-7.268490320953781!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e700b1605a98fe1%3A0xc5f37c5a6d5cecad!2sTelaga%20Menjer!5e0!3m2!1sen!2sid!4v1749568414411!5m2!1sen!2sid" style="border:0; width: 100%; height: 241px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
        ],
        7 => [
            'gambar1' => 'images/telagawarna/gambar1.jpg',
            'gambar2' => 'images/telagawarna/gambar2.jpeg',
            'gambar3' => 'images/telagawarna/gambar3.jpg',
            'gambar4' => 'images/telagawarna/gambar4.jpeg',
            'gambar5' => 'images/telagawarna/gambar5.webp',
            'gambar6' => 'images/telagawarna/gambar6.jpg',
            'judul' => 'Telaga Warna',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'lokasi' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31665.927529073455!2d109.89467820937068!3d-7.213332688704567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e700cefeafe2475%3A0xec2dd3197faf5f2a!2sTelaga%20Warna!5e0!3m2!1sen!2sid!4v1749568437584!5m2!1sen!2sid" style="border:0; width: 100%; height: 241px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
        ],
        8 => [
            'gambar1' => 'images/telagadringo/gambar1.jpg',
            'gambar2' => 'images/telagadringo/gambar2.jpg',
            'gambar3' => 'images/telagadringo/gambar3.jpeg',
            'gambar4' => 'images/telagadringo/gambar4.jpeg',
            'gambar5' => 'images/telagadringo/gambar5.jpg',
            'gambar6' => 'images/telagadringo/gambar6.jpg',
            'judul' => 'Telaga Dringo',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'lokasi' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31667.789420268142!2d109.82717820935727!3d-7.186666090373918!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e700e737a630c59%3A0x57aed7a71c12a2b9!2sTelaga%20Dringo!5e0!3m2!1sen!2sid!4v1749568472419!5m2!1sen!2sid" style="border:0; width: 100%; height: 241px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
        ],
        9 => [
            'gambar1' => 'images/telagapengilon/gambar1.jpeg',
            'gambar2' => 'images/telagapengilon/gambar2.jpg',
            'gambar3' => 'images/telagapengilon/gambar3.jpg',
            'gambar4' => 'images/telagapengilon/gambar4.jpg',
            'gambar5' => 'images/telagapengilon/gambar5.jpeg',
            'gambar6' => 'images/telagapengilon/gambar6.jpg',
            'judul' => 'Telaga Pengilon',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'lokasi' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31665.791493626675!2d109.89662260937163!3d-7.215277188582858!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e700ceef9e86dab%3A0x991e811776f05ad!2sTelaga%20Pengilon!5e0!3m2!1sen!2sid!4v1749568498832!5m2!1sen!2sid" style="border:0; width: 100%; height: 241px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
        ],
        10 => [
            'gambar1' => 'images/telagamerdada/gambar1.jpg',
            'gambar2' => 'images/telagamerdada/gambar2.jpg',
            'gambar3' => 'images/telagamerdada/gambar3.jpg',
            'gambar4' => 'images/telagamerdada/gambar4.jpg',
            'gambar5' => 'images/telagamerdada/gambar5.jpg',
            'gambar6' => 'images/telagamerdada/gambar6.jpg',
            'judul' => 'Telaga Merdada',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'lokasi' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31665.791493626675!2d109.89662260937163!3d-7.215277188582858!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e700c519322d6f7%3A0xefe986a8dc895dc4!2sTelaga%20Merdada!5e0!3m2!1sen!2sid!4v1749568520642!5m2!1sen!2sid" style="border:0; width: 100%; height: 241px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
        ], 
        11 => [
            'gambar1' => 'images/kebuntehpanama/gambar1.jpg',
            'gambar2' => 'images/kebuntehpanama/gambar2.jpg',
            'gambar3' => 'images/kebuntehpanama/gambar3.jpg',
            'gambar4' => 'images/kebuntehpanama/gambar4.jpeg',
            'gambar5' => 'images/kebuntehpanama/gambar5.webp',
            'gambar6' => 'images/kebuntehpanama/gambar6.webp',
            'judul' => 'Kebun Teh Panama',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'lokasi' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.3031168647476!2d109.90394167582967!3d-7.206218292799362!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e700d000459250b%3A0x29e576a1bb96e90d!2sKebun%20teh%20panama!5e0!3m2!1sen!2sid!4v1749568572071!5m2!1sen!2sid" style="border:0; width: 100%; height: 241px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
        ],
        12 => [
            'gambar1' => 'images/kebuntehbedakah/gambar1.jpg',
            'gambar2' => 'images/kebuntehbedakah/gambar2.jpg',
            'gambar3' => 'images/kebuntehbedakah/gambar3.jpeg',
            'gambar4' => 'images/kebuntehbedakah/gambar4.webp',
            'gambar5' => 'images/kebuntehbedakah/gambar5.jpg',
            'gambar6' => 'images/kebuntehbedakah/gambar6.jpg',
            'judul' => 'Teh Bedakah',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'lokasi' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.0508545371695!2d109.97295042695312!3d-7.348186600000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a9ff7fcbc2b05%3A0x208d2bac8be5b257!2sWisata%20Agro%20Kebun%20Teh%20Bedakah!5e0!3m2!1sen!2sid!4v1749568621420!5m2!1sen!2sid" style="border:0; width: 100%; height: 241px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
        ],
        13 => [
            'gambar1' => 'images/kebuntehcandiyasan/gambar1.jpg',
            'gambar2' => 'images/kebuntehcandiyasan/gambar2.jpg',
            'gambar3' => 'images/kebuntehcandiyasan/gambar3.jpg',
            'gambar4' => 'images/kebuntehcandiyasan/gambar4.jpg',
            'gambar5' => 'images/kebuntehcandiyasan/gambar5.jpg',
            'gambar6' => 'images/kebuntehcandiyasan/gambar6.jpg',
            'judul' => 'Kebun Teh Candiyasan',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'lokasi' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.9685295380505!2d109.99345167583087!3d-7.357424292651556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a9f6edbaf2e8d%3A0x6c9a5948d981aaaf!2sKebun%20Teh%20Candiyasan%20Wonosobo!5e0!3m2!1sen!2sid!4v1749568646964!5m2!1sen!2sid" style="border:0; width: 100%; height: 241px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
        ],
        14 => [
            'gambar1' => 'images/kebuntehsikatok/gambar1.jpg',
            'gambar2' => 'images/kebuntehsikatok/gambar2.jpg',
            'gambar3' => 'images/kebuntehsikatok/gambar3.jpg',
            'gambar4' => 'images/kebuntehsikatok/gambar4.webp',
            'gambar5' => 'images/kebuntehsikatok/gambar5.jpg',
            'gambar6' => 'images/kebuntehsikatok/gambar6.webp',
            'judul' => 'Kebun Teh Sikatok',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'lokasi' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.718714544528!2d109.98581697583025!3d-7.272814692734261!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7075005daca397%3A0xf30f1f1bed284549!2sKebun%20teh!5e0!3m2!1sen!2sid!4v1749568676913!5m2!1sen!2sid" style="border:0; width: 100%; height: 241px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
        ],
        15 => [
            'gambar1' => 'images/kebuntehtambi/gambar1.webp',
            'gambar2' => 'images/kebuntehtambi/gambar2.jpg',
            'gambar3' => 'images/kebuntehtambi/gambar3.jpg',
            'gambar4' => 'images/kebuntehtambi/gambar4.webp',
            'gambar5' => 'images/kebuntehtambi/gambar5.jpeg',
            'gambar6' => 'images/kebuntehtambi/gambar6.webp',
            'judul' => 'Agrowisata Teh Tambi',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'lokasi' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.7679660336366!2d109.95747367583007!3d-7.267225592739695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a9fbe4face7bf%3A0xa9e1da34bb2f3b7!2sTambi%20Tea%20Gardens!5e0!3m2!1sen!2sid!4v1749568701830!5m2!1sen!2sid" style="border:0; width: 100%; height: 241px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
        ], 
    ];

    if (!isset($destinasi[$id])) {
        abort(404);
    }

    $data = $destinasi[$id];

    return view('detailwisata', compact('data'));
}

public function cari(Request $request)
{
    $query = strtolower($request->query('query'));

    $wisata = [
        [
            'id' => '1',
            'gambar' => 'gunungcilik.jpg',
            'judul' => 'Gunung Cilik',
            'deskripsi' => 'Deskripsi singkat tentang destinasi wisata',
        ],
        [
            'id' => '2',
            'gambar' => 'bukitskoter.jpg',
            'judul' => 'Bukit Skoter',
            'deskripsi' => 'Deskripsi singkat tentang destinasi wisata',
        ],
        [
            'id' => '3',
            'gambar' => 'gnsindoro.webp',
            'judul' => 'Gunung Sindoro',
            'deskripsi' => 'Deskripsi singkat tentang destinasi wisata',
        ],
        [
            'id' => '4',
            'gambar' => 'gnprau.jpg',
            'judul' => 'Gunung Prau',
            'deskripsi' => 'Deskripsi singkat tentang destinasi wisata',
        ],
        [
            'id' => '5',
            'gambar' => 'sikunir.jpg',
            'judul' => 'Bukit Sikunir',
            'deskripsi' => 'Deskripsi singkat tentang destinasi wisata',
        ],
        [
            'id' => '6',
            'gambar' => 'telagamenjer.jpg',
            'judul' => 'Telaga Menjer',
            'deskripsi' => 'Deskripsi singkat tentang destinasi wisata',
        ],
        [
            'id' => '7',
            'gambar' => 'telagawarna.webp',
            'judul' => 'Telaga Warna',
            'deskripsi' => 'Deskripsi singkat tentang destinasi wisata',
        ],
        [
            'id' => '8',
            'gambar' => 'telagadringo.jpg',
            'judul' => 'Telaga Dringo',
            'deskripsi' => 'Deskripsi singkat tentang destinasi wisata',
        ],
        [
            'id' => '9',
            'gambar' => 'telagapengilon.jpeg',
            'judul' => 'Telaga Pengilon',
            'deskripsi' => 'Deskripsi singkat tentang destinasi wisata',
        ],
        [
            'id' => '10',
            'gambar' => 'telagamerdada.jpg',
            'judul' => 'Telaga Merdada',
            'deskripsi' => 'Deskripsi singkat tentang destinasi wisata',
        ],
        [
            'id' => '11',
            'gambar' => 'kebuntehpanama.webp',
            'judul' => 'Kebun Teh Panama',
            'deskripsi' => 'Deskripsi singkat tentang destinasi wisata',
        ],
        [
            'id' => '12',
            'gambar' => 'kebuntehbedakah.jpg',
            'judul' => 'Teh Bedakah',
            'deskripsi' => 'Deskripsi singkat tentang destinasi wisata',
        ],
        [
            'id' => '13',
            'gambar' => 'kebuntehcandiyasan.jpg',
            'judul' => 'Kebun Teh Candiyasan',
            'deskripsi' => 'Deskripsi singkat tentang destinasi wisata',
        ],
        [
            'id' => '14',
            'gambar' => 'kebuntehsikatok.jpg',
            'judul' => 'Sikatok Kebun Teh',
            'deskripsi' => 'Deskripsi singkat tentang destinasi wisata',
        ],
        [
            'id' => '15',
            'gambar' => 'kebuntehtambi.webp',
            'judul' => 'Agrowisata Teh Tambi',
            'deskripsi' => 'Deskripsi singkat tentang destinasi wisata',
        ],
    ];

    $hasil = array_filter($wisata, function ($item) use ($query) {
        return str_contains(strtolower($item['judul']), $query);
    });

    return view('hasilpencarian', ['hasil' => $hasil, 'query' => $request->query('query')]);
}


}
