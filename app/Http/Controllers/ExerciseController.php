<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    //種目登録画面
    public function add($id)
    {
        return view('exercise.add',['schedule_id' => $id]);
    }
}
