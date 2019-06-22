<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateQuestionsRequest;
use App\Questions;

class QuestionsController extends Controller
{
    public function index() {
    	$questions = Questions::all();
    	return view('questions.index', [
    		'questions' => $questions,
		]);
	}

	public function create() {
    	return view('questions.create');
	}

	public function store(CreateQuestionsRequest $request) {
		Questions::create($request->all());
		return redirect()->route('questions.index');
	}

	public function edit($id) {
    	$question = Questions::find($id);
    	return view('questions.edit', [
    		'question' => $question,
		]);
	}

	public function update(CreateQuestionsRequest $request, $id) {
		$question = Questions::find($id);
		$question->fill($request->all());
		$question->save();
		return redirect()->route('questions.index');
	}

	public function show($id) {
    	$question = Questions::find($id);
    	return view('questions.show', [
    		'question' => $question,
		]);
	}

	public function destroy($id) {
    	Questions::find($id)->delete();
    	return redirect()->route('questions.index');
	}
}
