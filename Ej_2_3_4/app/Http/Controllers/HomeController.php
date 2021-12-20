<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Cliente;
use Yajra\Datatables\Datatables;

class HomeController extends Controller
{
    public function getFormulario()
    {
        $clientes = Cliente::where('estado',1)->get();
        return view('formulario.index', compact('clientes'));
    }



    public function cliente_create(Request $request)
    {
        // Nombre dpi, fecha de nac
        Cliente::create([
            'nombre' => $request->get('nombre'),
            'dpi' => $request->get('dpi'),
            'fecha_nacimiento' => $request->get('fecha_nacimiento')
        ]);
        $clientes = Cliente::where('estado',1)->get();
        return redirect('/formulario');
    }

    public function cliente_delete($id)
    {
        $cliente = Cliente::find($id);
        $cliente->update([
            'estado' => 0
        ]);
        return redirect('/formulario');
    }

    public function api_create($action, $id, Request $request)
    {
        // Nombre dpi, fecha de nac
        if($action == 'crear')
        {
            if($id == 'cliente')
            {
                Cliente::create([
                    'nombre' => $request->get('nombre'),
                    'dpi' => $request->get('dpi'),
                    'fecha_nacimiento' => $request->get('fecha_nacimiento')
                ]);
                $clientes = Cliente::where('estado',1)->get();
                return redirect('/formulario');
            }
        }
    }
}
