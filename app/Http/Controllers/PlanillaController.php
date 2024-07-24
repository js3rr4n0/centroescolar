<?php

namespace App\Http\Controllers;

use App\Models\Planilla;
use Illuminate\Http\Request;

class PlanillaController extends Controller
{
    public function index()
    {
        $planillas = Planilla::all();
        return view('planillas', ['planillas' => $planillas]);
    }

    // Otros métodos del controlador
}

