<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'user';

// Bagian link buat web admin
$route['admin'] = 'auth';
$route['admin/dashboard'] = 'admin/dashboard';
$route['admin/produk'] = 'admin/produk';
$route['admin/kategori-bangunan'] = 'admin/kategori/bangunan';
$route['admin/kategori-mebel'] = 'admin/kategori/mebel';
$route['admin/kategori-bedug'] = 'admin/kategori/bedug';
$route['admin/cara-pesan'] = 'admin/cara_pesan';
$route['admin/profil'] = 'admin/profil';
$route['admin/pesanan'] = 'admin/pesanan';
$route['admin/testimoni'] = 'admin/testimoni';
$route['admin/edit_akun'] = 'admin/edit_akun';
//$route['admin/kelola_akun'] = 'admin/kelola_akun';
$route['admin/kelola_akun-changePassword'] = 'admin/kelola_akun/changePassword';
$route['admin/setting'] = 'admin/setting';

/*
// Bagian link buat web user
$route['user/home'] = 'aser/home';
$route['user/aboutus'] = 'user/aboutus';
$route['user/profile'] = 'user/profile';
$route['user/bahanproduk'] = 'user/bahanproduk';
$route['user/pesansekarang'] = 'user/pesansekarang';
$route['user/carapesan'] = 'user/carapesan';
$route['user/mebel'] = 'user/mebel';
$route['admin/produk-bedug'] = 'admin/produk_bedug';
$route['admin/produk-bangunan'] = 'admin/produk_bangunan';
$route['admin/produk-mebel'] = 'admin/produk_mebel';
*/

// Bagian link buat web user
$route['user/dashboard'] = 'user/Dashboard';
$route['user/testimoni'] = 'user/testimoni';
$route['user/pesansekarang'] = 'user/pesansekarang';
$route['user/carapesan'] = 'user/carapesan';
$route['user/mebel'] = 'user/mebel';
$route['user/bangunan'] = 'user/bangunan';
$route['User/lihatproduk'] = 'User/lihatproduk';
$route['user/pesancoustems'] = 'user/pesancoustems';




$route['api/getKategori'] = 'api/kategori/kategori/';
$route['api/getKategoriJenis'] = 'api/kategori/kategoriByJenis/';
$route['api/kategoriapi'] = 'api/kategoriapi/index_get';
$route['api/login'] = 'api/login/login/';
$route['api/pesanan'] = 'api/pesanan/ubah_status/';

$route['api/example/users/(:num)'] = 'api/example/users/id/$1'; // Example 4
$route['api/example/users/(:num)(\.)([a-zA-Z0-9_-]+)(.*)'] = 'api/example/users/id/$1/format/$3$4'; // Example 8

$route['404_override'] = '';
$route['translate_uri_dashes'] = false;
