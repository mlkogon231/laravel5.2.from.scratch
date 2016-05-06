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
//		$card = Card::find($card);
		return view ('cards.show', compact('card'));
	}

}
