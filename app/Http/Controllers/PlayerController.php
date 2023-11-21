<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function index() {
        return view('players', [
            "title" => "All Players",
            "players"=> Player::all()
        ]);
    }
}