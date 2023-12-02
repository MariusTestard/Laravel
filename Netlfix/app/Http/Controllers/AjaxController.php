<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function getBTB(Request $request)
    {
        $term = $request->name;
        $data = Film::where('titre', $term)->get();
        return $data;
    }
}
