<?php

namespace App\Http\Controllers;

use App\Progress;
use App\Questions;
use Illuminate\Support\Facades\Auth;

class MapController extends Controller
{
    public function index($id) {
		$questions = Questions::all()->where('level', $id);
		$questions = $questions->shuffle()->all();
		$questions = array_slice($questions, 0, 10);
		return view('map.index', [
			'id' => $id,
			'questions' => $questions,
		]);
	}

	public function checkAnswer($id) {
		$results = [];
		$count_answer = 0;
		$comment = "";
		$correct_answer = false;
		foreach ($_POST as $key => $value) {
			if ($key != '_token') {
				preg_match('/\d+/', $key, $matches);
				$question = Questions::find($matches[0]);
				switch ($value) {
					case $question->answer1:
						$count_answer++;
						$correct_answer = true;
						$comment = $question->comment1;
						break;
					case $question->answer2:
						$correct_answer = false;
						$comment = $question->comment2;
						break;
					case $question->answer3:
						$correct_answer = false;
						$comment = $question->comment3;
						break;
					case $question->answer4:
						$correct_answer = false;
						$comment = $question->comment4;
						break;
					case $question->answer5:
						$correct_answer = false;
						$comment = $question->comment5;
						break;
				}
				$results[] = [
					'question' => $question->question,
					'correct_answer' => $correct_answer,
					'answer' => $value,
					'comment' => $comment,
				];
			}
		}
		$user_id = Auth::user()->id;
		$progress = Progress::all()->where('user_id', $user_id)[$user_id - 1];
		$prog = "progress{$id}";
		if ($progress->$prog < $count_answer) {
			$progress->$prog = $count_answer;
			$progress->save();
		}
		return view('map.answer', [
			'id' => $id,
			'results' => $results,
		]);
	}
}
