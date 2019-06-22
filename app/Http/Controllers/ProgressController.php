<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProgressRequest;
use App\Progress;

class ProgressController extends Controller
{
    public function index() {
    	$progress = Progress::all();
    	return view('progress.index', [
    		'progress' => $progress,
		]);
	}

	public function create() {
    	return view('progress.create');
	}

	public function store(CreateProgressRequest $request) {
		Progress::create($request->all());
		return redirect()->route('progress.index');
	}

	public function edit($id) {
    	$progress = Progress::find($id);
    	return view('progress.edit', [
    		'progress' => $progress,
		]);
	}

	public function update(CreateProgressRequest $request, $id) {
    	$progress = Progress::find($id);
    	$progress->fill($request->all());
    	$progress->save();
    	return redirect()->route('progress.index');
	}

	public function show($id) {
    	$progress = Progress::find($id);
    	return view('progress.show', [
    		'progress' => $progress,
		]);
	}

	public function destroy($id) {
    	Progress::find($id)->delete();
    	return redirect()->route('progress.index');
	}
}
