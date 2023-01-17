<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // CODE INI MERUPAKAN FUNGSI UNTUK MENGATUR VIEW DATA YANG DIPROSES
    // FUNGSI INI BISA MENGEMBALIKAN DATA BERUPA JSON ATAU TEMPLATE 
    // ARTINYA MENGEMBALIKAN DATA KEPADA VIEW DIMANA TERTUJU KEPADA FOLDER ADMIN 
    // DENGAN NAMA layouts.backend.admin

    public function index()
    {
        return view('layouts.backend.admin');
    }
}
