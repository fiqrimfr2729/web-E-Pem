<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'user';


$route['admin'] = 'auth';
$route['admin/produk'] = 'admin/produk';
$route['admin/kategori-kusen'] = 'admin/kategori/kusen';
$route['admin/kategori-mebel'] = 'admin/kategori/mebel';
$route['admin/cara-pesan'] = 'admin/cara_pesan';
$route['admin/profil'] = 'admin/profil';
$route['admin/pesanan'] = 'admin/pesanan';
$route['admin/testimoni'] = 'admin/testimoni';

$route['404_override'] = '';
$route['translate_uri_dashes'] = false;

 