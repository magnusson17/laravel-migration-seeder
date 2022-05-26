<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index() {

        $trains = Train::all();

        return view('page.index', compact('trains'));
    }

    public function show($id) {

        $train = Train::findOrFail($id);

        return view('page.train', compact('train'));
    }
}
