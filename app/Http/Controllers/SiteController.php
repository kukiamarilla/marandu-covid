<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsuarioRequest;
use App\Models\Hisopado;
use App\Models\Hospital;
use App\Models\Medicamento;
use App\Models\Usuario;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
    public function home()
    {
        return view('home')->with(['nav' => 'home']);
    }
    public function sobreNosotros()
    {
        return view('sobre-nosotros')->with(['nav' => 'sobre-nosotros']);
    }
    public function covid19()
    {
        return view('covid-19')->with(['nav' => 'covid-19']);
    }
    public function medicamentos()
    {
        $medicamentos = Medicamento::all();
        return view('medicamentos')->with(['nav' => 'medicamentos', 'medicamentos' => $medicamentos]);
    }
    public function hospitales()
    {
        $hospitales = Hospital::all();
        return view('hospitales')->with(['nav' => 'hospitales', 'hospitales' => $hospitales]);
    }
    public function vacunas()
    {
        return view('vacunas')->with(['nav' => 'vacunas']);
    }
    public function volantes()
    {
        return view('volantes')->with(['nav' => 'volantes']);
    }
    public function registro()
    {
        return view('registro')->with(['nav' => 'registro']);
    }
    public function hisopado()
    {
        $hisopados = Hisopado::all();
        return view('hisopado')->with(['nav' => 'hisopado', 'hisopados' => $hisopados]);
    }
    public function sintomas()
    {
        return view('sintomas')->with(['nav' => 'sintomas']);
    }
    public function medidas()
    {
        return view('medidas')->with(['nav' => 'medidas']);
    }
    public function familiares()
    {
        return view('familiares')->with(['nav' => 'familiares']);
    }
    public function usuarios(UsuarioRequest $request)
    {
        $usuario = Usuario::create($request->all());
        return back()->with(['message' => 'Usuario creado exitosamente.']);
    }
}
