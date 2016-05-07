<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Card;
//use App\Http\Requests;

class CardsController extends Controller
{
	public function index()
	{
		$cards = Card::all();

		return view('cards.index', compact('cards'));
	}
	public function show(Card $card)
	{
		//return $card->notes;
//		$card = Card::with('notes.user')->find(1);
//		return $card;
//		$card = Card::find($card);

		$card->load('notes.user');
//		return $card;
		return view ('cards.show', compact('card'));
	}

}
