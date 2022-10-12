<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\QuizStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            'success' => 'success'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
           'quiz_id'=> 'string|required',
           'question_api_id'=> 'string|required',
            'question' => 'string| required',
           'select_answer' => 'string|required',
           'correct_answer' => 'string|required',
           'incorrect_answers' => 'required',
            'type'=> 'string|required',
            'is_completed' => 'required',
            'marks' => 'required'
        ]);

        $quiz = Quiz::create([
            'user_id' => Auth::user()->id,
            'quiz_id' => $request->quiz_id,
            'question_api_id' => $request->question_api_id,
            'question' => $request->question,
            'select_answer' => $request->select_answer,
            'correct_answer' => $request->correct_answer,
            'incorrect_answers' => implode($request->incorrect_answers),
            'type' => $request->type
        ]);

        if($request->is_completed){
            $quiz_status = QuizStatus::create([
               'user_id' => Auth::user()->id,
               'quiz_id' => $request->quiz_id,
               'is_completed' => $request->is_completed,
               'marks' => $request->marks
            ]);

            return response()->json([
                'quiz_status' => $quiz_status,
                'message' => 'Quiz compeleted',
                'is_completed' => $quiz_status->is_completed
            ]);
        }
        return response()->json([
            'quiz' => $quiz,
            'message' => 'Answer submitted',
            'is_completed' => 0
        ]);
    }

    public function isCompleted(Request $request) {
        $quiz_status = DB::table('quiz_statuses')
            ->where('user_id', Auth::user()->id)
            ->where('quiz_id', $request->quiz_id)
            ->first();
        //dd($quiz_status);
        if($quiz_status){
            return response()->json([
                'quiz_status' => $quiz_status,
                'is_completed' => $quiz_status->is_completed
            ]);
        }
        else{
            return response()->json([
                'is_completed' => 0
            ]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
