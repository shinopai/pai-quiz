<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quiz;
use App\Answer;
use App\Category;

class QuizController extends Controller
{
    public function getQuizzes(Request $request){
        $category_ids = Category::whereIn('name', $request->input('categories'))->pluck('id');

        $all_quizzes = Quiz::whereIn('category_id', $category_ids)->inRandomOrder()->limit(10)->get();
        $all_quizzes->load('answer', 'category');

        return $all_quizzes;
    }
}
