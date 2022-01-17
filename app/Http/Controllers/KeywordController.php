<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Keyword;

class KeywordController extends Controller
{
    public function getKeywords(Request $request){
        $keywords = Keyword::where('initial', $request->input('initial'))->get();
        $keywords->load('category');

        return $keywords;
    }
}
