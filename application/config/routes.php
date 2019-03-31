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
$route['admin/setting'] = 'admin/setting';


// Bagian link buat web user
$route['user/home'] = 'aser/home';
$route['user/aboutus'] = 'user/aboutus';
$route['user/profile'] = 'user/profile';
$route['user/bahanproduk'] = 'user/bahanproduk';
$route['user/pesansekarang'] = 'user/pesansekarang';
$route['user/carapesan'] = 'user/carapesan';
$route['user/mebel'] = 'user/mebel';
$route['user/kusen'] = 'user/kusen';




$route['404_override'] = '';
$route['translate_uri_dashes'] = false;

 