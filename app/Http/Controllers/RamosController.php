<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\RamosImport;
use App\Ramo;

class RamosController extends Controller
{

    public function index(){
        $asignaturas= Ramo::get();
        // return $asignaturas;
        return view('cargar_asignaturas', ['asignaturas'=> $asignaturas]);
    }

    public function importExcel(Request $request){

        $rules= [
            'file'=> ['required', 'mimes:xlsx']
        ];

        $messages= [
            'file.required'=> "Se necesita un archivo si o si pao qlao",
            'file.mimes'=> "no seai aweonao, coloca un archivo excel,"
        ];

        $this->validate($request, $rules, $messages);

        $file= $request->file('file');
        Excel::import(new RamosImport, $file);
        return back()->with('message', 'Importacion de usuario completada');
    }
}
