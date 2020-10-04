<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso;

class CursosController extends Controller
{
    public function create() {
        $cursos = Curso::all();
        return view('curso.create')->with('cursos', $cursos);
    }

    public function insert(Request $request){
        Curso::create([
            'curso' => $request->curso,
            'carga_horaria' => $request->carga_horaria,
        ]);

        return back();
    }

    public function update(Request $request, $id){

        $curso = Curso::find($id);

        $curso->curso = $request->input('curso');
        $curso->carga_horaria = $request->input('carga_horaria');
        
        $curso->save();

        return redirect('/cursos/novo')->with('sucess', 'Alterado com sucesso');
        
    }

    public function delete($id){
        $curso = Curso::find($id);
        $curso->delete();
        return redirect('/cursos/novo')->with('sucess', 'Deletado com sucesso');
    }
}
