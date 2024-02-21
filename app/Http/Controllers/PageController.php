<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }
    public function about() {
        return 'Nama : Muhammad Irfan Nur Hakim <br>  NIM : 2241720230';
    }
    public function articles($id) {
        return 'Halaman Artikel dengan ID '. $id;
    }
}
