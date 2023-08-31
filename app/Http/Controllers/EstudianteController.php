<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos['estudiantes']=Estudiante::paginate(3);
        return view('estudiante.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('estudiante.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->hasFile('Foto')){
            $campos=[
                'Nombre'=>'required|string|max:100',
                'Apellido'=>'required|string|max:100',
                'Edad'=>'required|numeric|min:3|max:125',
                'Foto'=>'nullable|max:4096|mimes:jpeg,png,jpg'
            ];
        } else {
            $campos=[
                'Nombre'=>'required|string|max:100',
                'Apellido'=>'required|string|max:100',
                'Edad'=>'required|numeric|min:3|max:125'
            ];
        }

        $this->validate($request, $campos);

        $datosEstudiante = request()->except('_token');
        if($request->hasFile('Foto')){
            $datosEstudiante['Foto']=$request->file('Foto')->store('uploads', 'public');
        }
        Estudiante::insert($datosEstudiante);
        return redirect('estudiante/')->with('mensaje', 'Estudiante creado con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Estudiante $estudiante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $estudiante=Estudiante::findOrFail($id);
        return view('estudiante.edit', compact('estudiante'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $datosEstudiante = request()->except(['_token','_method']);

        if($request->hasFile('Foto')){
            $campos=[
                'Nombre'=>'required|string|max:100',
                'Apellido'=>'required|string|max:100',
                'Edad'=>'required|numeric|min:3|max:125',
                'Foto'=>'nullable|max:4096|mimes:jpeg,png,jpg'
            ];
        } else {
            $campos=[
                'Nombre'=>'required|string|max:100',
                'Apellido'=>'required|string|max:100',
                'Edad'=>'required|numeric|min:3|max:125'
            ];
        }

        $this->validate($request, $campos);

        if($request->hasFile('Foto')){
            $estudiante=Estudiante::findOrFail($id);
            Storage::delete('public/'.$estudiante->Foto);
            $datosEstudiante['Foto']=$request->file('Foto')->store('uploads', 'public');
        }

        Estudiante::where('id','=',$id)->update($datosEstudiante);
        return redirect('estudiante/')->with('mensaje', 'Estudiante actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $estudiante=Estudiante::findOrFail($id);
        if(Storage::exists('public/'.$estudiante->Foto)){
            Storage::delete('public/'.$estudiante->Foto);
            Estudiante::destroy($id);
        } else {
            Estudiante::destroy($id);
        }
        return redirect('estudiante/')->with('mensaje', 'Estudiante eliminado con exito');
    }
}
