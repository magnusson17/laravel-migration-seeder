<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Train;

class TrainController extends Controller
{
    public function index() {

        $trains = Train::where('orario_partenza', '=', '12:30')->get();

        return view('page.index', compact('trains'));
    }

    public function show($id) {

        $train = Train::findOrFail($id);

        return view('page.train', compact('train'));
    }
}
