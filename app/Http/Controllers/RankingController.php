<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ranking;
use App\User;

class RankingController extends Controller
{
    public function insertPercentage(Request $request, User $user){
      $this->validate($request, [
          'percentage_correct_answer' => 'required|numeric'
      ]);

      $user->rankings()->create([
          'percentage_correct_answer' => $request->percentage_correct_answer
      ]);
    }

    public function getRanking(){
        $percentages = Ranking::orderBy('percentage_correct_answer', 'desc')->limit(5)->get();
        $percentages->load('user');

        return $percentages;
    }
}
