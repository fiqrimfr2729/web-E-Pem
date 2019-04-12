<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'user';

// Bagian link buat web admin
$route['admin'] = 'auth';
$route['admin/dashboard'] = 'admin/dashboard';
$route['admin/produk'] = 'admin/produk';
$route['admin/kategori-kusen'] = 'admin/kategori/kusen';
$route['admin/kategori-mebel'] = 'admin/kategori/mebel';
$route['admin/cara-pesan'] = 'admin/cara_pesan';
$route['admin/profil'] = 'admin/profil';
$route['admin/pesanan'] = 'admin/pesanan';
$route['admin/testimoni'] = 'admin/testimoni';
$route['admin/edit_akun'] = 'admin/edit_akun';
$route['admin/kelola_akun'] = 'admin/kelola_akun';
$route['admin/kelola_akun/changePwd'] = 'admin/kelola_akun/changePwd';


// Bagian link buat web user
$route['user/home'] = 'aser/home';
$route['user/aboutus'] = 'user/aboutus';
$route['user/contact'] = 'user/home';
$route['user/galery'] = 'user/galery';
$route['user/pesansekarang'] = 'user/pesansekarang';
$route['user/carapesan'] = 'user/carapesan';
$route['user/furniture'] = 'user/furniture';
$route['user/kusen'] = 'user/kusen';




$route['404_override'] = '';
$route['translate_uri_dashes'] = false;
