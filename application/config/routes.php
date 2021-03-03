<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller']        = 'Home';

$route['pilih-login']               = 'Login/pilihLogin';
$route['login-mahasiswa']           = 'Login/loginMahasiswa';
$route['login-dosen']               = 'Login/loginDosen';
$route['login-admin']               = 'Login/loginAdmin';
$route['informasi']                 = 'Dosen/informasi';
$route['daftar-mahasiswa']          = 'Regis/index';
$route['daftar-dosen']              = 'Dosen/daftarDosen';
$route['komentar/(:num)']           = 'Dosen/komentar/$1';
$route['blog-detail/(:num)']        = 'Blog/blogDetail/$1';
$route['logout-admin']              = 'Login/LogoutAdmin';
$route['logout']                    = 'Login/Logout';
$route['lupa-password']             = 'LupaPassword/index';
$route['reset-password']            = 'LupaPassword/resetPassword';
$route['ganti-password']            = 'LupaPassword/gantiPassword';

// admin
// data

$route['data-admin']                = 'Admin/dataAdmin';
$route['data-mahasiswa']            = 'Admin/dataMahasiswa';
$route['data-dosen']                = 'Admin/dataDosen';
$route['data-rektorat']             = 'Admin/dataRektorat';
$route['kategori-rektorat']         = 'Admin/kategoriRektorat';
$route['informasi-about']           = 'Admin/about';
$route['kemahasiswaan']             = 'Admin/kemahasiswaan';
$route['data-berita']               = 'Admin/dataBerita';
$route['data-kontak']               = 'Admin/dataKontak';
$route['profilmhs']                 = 'Profil/profilMhs';
$route['profildsn']                 = 'Profil/profilDsn';
$route['ubah-fotomhs']              = 'Profil/ubahFotoMhs';
$route['ubah-fotodsn']              = 'Profil/ubahFotoDsn';
$route['ubah-foto1']                = 'Profil/ubahFoto1';
$route['ubah-foto2']                = 'Profil/ubahFoto2';

// detail
$route['detail-mahasiswa/(:num)']   = 'Admin/detailMahasiswa/$1';
$route['detail-dosen/(:num)']       = 'Admin/detailDosen/$1';
$route['detail-rektorat/(:num)']    = 'Admin/detailRektorat/$1';
$route['detail-berita/(:num)']      = 'Admin/detailBerita/$1';

// tambah
$route['tambah-admin']              = 'Admin/tambahAdmin';
$route['tambah-mahasiswa']          = 'Admin/tambahMahasiswa';
$route['tambah-dosen']              = 'Admin/tambahDosen';
$route['tambah-rektorat']           = 'Admin/tambahRektorat';
$route['tambah-kategori-rektorat']  = 'Admin/tambahKategoriRektorat';
$route['tambah-about']              = 'Admin/tambahAbout';
$route['tambah-kemahasiswaan']      = 'Admin/tambahKemahasiswaan';
$route['tambah-berita']             = 'Admin/tambahBerita';
$route['tambah-kontak']             = 'Admin/tambahKontak';
$route['tambah-informasi']          = 'Dosen/tambahInformasi';
$route['simpan-komentar/(:num)']    = 'Dosen/simpanKomentar/$1';

// ubah
$route['ubah-data-admin/(:num)']    = 'Admin/ubahAdmin/$1';
$route['ubah-mahasiswa/(:num)']     = 'Admin/ubahMahasiswa/$1';
$route['ubah-dosen/(:num)']         = 'Admin/ubahDosen/$1';
$route['ubah-kategori-rektorat/(:num)']  = 'Admin/ubahKategoriRektorat/$1';
$route['ubah-rektorat/(:num)']      = 'Admin/ubahRektorat/$1';
$route['ubah-about/(:num)']         = 'Admin/ubahAbout/$1';
$route['ubah-kemahasiswaan/(:num)'] = 'Admin/ubahKemahasiswaan/$1';
$route['ubah-berita/(:num)']        = 'Admin/ubahBerita/$1';
$route['ubah-kontak/(:num)']        = 'Admin/ubahKontak/$1';

// hapus
$route['hapus-admin/(:num)']        = 'Admin/hapusAdmin/$1';
$route['hapus-mahasiswa/(:num)']    = 'Admin/hapusMahasiswa/$1';
$route['hapus-dosen/(:num)']        = 'Admin/hapusDosen/$1';
$route['hapus-rektorat/(:num)']     = 'Admin/hapusRektorat/$1';
$route['hapus-kategoriRt/(:num)']   = 'Admin/hapusKategoriRektorat/$1';
$route['hapus-about/(:num)']        = 'Admin/hapusAbout/$1';
$route['hapus-kemahasiswaan/(:num)'] = 'Admin/hapusKemahasiswaan/$1';
$route['hapus-berita/(:num)']       = 'Admin/hapusBerita/$1';
$route['hapus-kontak/(:num)']       = 'Admin/hapusKontak/$1';

$route['404_override']          = '';
$route['translate_uri_dashes']  = FALSE;
