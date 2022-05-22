<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PoliticianController extends Controller
{
    //
    public function getPoliticianView() {
        return view('politician.page');
    }

    public function politician_edit_search() {
        return view('admin.find_politician');
    }

    public function politician_edit_page() {
        return view('admin.edit_page');
    }
}
