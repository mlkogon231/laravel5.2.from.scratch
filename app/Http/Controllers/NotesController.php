<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Card;
use App\Note;

class NotesController extends Controller
{
   	public function store(Request $request, Card $card)
	{

		$note = new Note($request->all());
//		$note->by(Auth::user());
		$note->user_id = 1;

//		$card->AddNote($note, $user);
		$card->AddNote($note, 1);
//		$card->addNote(
//			new Note($request->all())
//		);

		return back();
	}


	public function edit(Note $note)
	{
		return view('notes.edit', compact('note'));
	}
	public function update(Request $request, Note $note)
	{
		$note->update($request->all());
		return back();
	}

}
