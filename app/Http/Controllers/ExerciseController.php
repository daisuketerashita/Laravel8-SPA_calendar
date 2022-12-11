<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use App\Models\Schedule;
use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    //種目登録画面
    public function add($id)
    {
        return view('exercise.add',['schedule_id' => $id]);
    }

    //種目登録処理
    public function store($id,Request $request){
        $schedule_id = Schedule::find($id);
        
        //値を代入
        $exercise = new Exercise();
        $exercise->name = $request->name;
        $exercise->weight = $request->weight;
        $exercise->repetition = $request->repetition;
        $exercise->set_num = $request->set_num;
        $exercise->exe_contents = $request->exe_contents;

        // インスタンスの状態をデータベースに書き込む
        $schedule_id->exercises()->save($exercise);

        return redirect()->route('index');
    }

    //編集画面の表示
    public function edit(int $id,int $exe_id)
    {
        $schedule = Schedule::find($id);
        $exercise = Exercise::find($exe_id);

        return view('exercise.edit',[
            'schedule' => $schedule,
            'exercise' => $exercise,
        ]);
    }
}
