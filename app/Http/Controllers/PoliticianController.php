<?php

namespace App\Http\Controllers;

use App\Models\Politician;
use Illuminate\Http\Request;

class PoliticianController extends Controller
{
    /**
     * 
     */
    public function getPolticianView(Request $request) {
        $politician_id = $request->id;

        $candidate = Politician::find($politician_id);
        return view('candidate.page')
                    ->with('candidate', $candidate);
    }

    public function politician_edit_search() {
        return view('admin.find_politician');
    }

    public function politician_edit_page() {
        return view('admin.edit_page');
    }
}
