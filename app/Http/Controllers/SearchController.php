<?php

namespace App\Http\Controllers;

use App\Models\State;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function autocompleteState(Request $request) {
        $data = State::select("name")
        ->where("name","LIKE","%{$request->input('query')}%")
        ->get();

        return response()->json($data);
    }
}
