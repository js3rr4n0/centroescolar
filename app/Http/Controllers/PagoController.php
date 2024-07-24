<?php

namespace App\Http\Controllers;

use App\Models\Pago;
use Illuminate\Http\Request;

class PagoController extends Controller
{
    public function index()
    {
        $pagos = Pago::with('empleado')->get();
        return view('pagos', ['pagos' => $pagos]);
    }
    public function miPago()
    {
        $user = auth()->user();
        $pagos = Pago::where('empleado_id', $user->id)->get();
    
        return view('mi-pago', ['pagos' => $pagos]);
    }
    
    // Otros métodos del controlador
}
