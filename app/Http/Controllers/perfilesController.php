<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class perfilesController extends Controller
{
    public function principal()
    {
        $perfiles = Profile::withTrashed()->paginate(5);
        return view('perfiles.principal', ['perfi' => $perfiles]);
    }

    public function crear()
    {
        $perfil=Profile::all();
        return view('perfiles.crear');
    }

    public function mostrar($variable)
    {
        $perfil = Profile::find($variable);
        return view('perfiles.mostrar', ['perfi'=>$perfil]);
    }


    public function store(Request $request)
    {
        $per=new Profile();
        $per->cargo=$request->cargo;
        $per->biografia=$request->biografia;

        // return $request->all();
        $per->save();

        // return redirect()->route('producto.principal');
        return redirect()->route('perfiles.mostrar', $per->id);

    }
    public function editar($perf){
        $perf = Profile::findOrFail($perf); 
        return view("perfiles.editar", compact('perf'));
    }
    public function update(Request $request,Profile $perf){
        $perf->cargo=$request->cargo;
        $perf->biografia=$request->biografia;
        $perf->save();

        return redirect()->route('perfiles.mostrar', $perf->id);
    }
    
    public function borrar($id){
        $perf=Profile::find($id);
        $perf->forceDelete();
        return redirect()->route('perfiles.principal');
    }

    public function desactivarperfil($id){

        $perf=Profile::find($id);
        $perf->delete();
        return redirect()->route('perfiles.principal');
    }

    public function activaperfil($id){
        
        $perf=Profile::withTrashed()->find($id);
        $perf->restore($id);

        return redirect()->route('perfiles.principal');
    }
}
