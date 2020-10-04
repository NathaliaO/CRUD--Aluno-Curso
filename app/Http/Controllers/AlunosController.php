<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aluno;

class AlunosController extends Controller
{
    public function create() {
        $alunos = Aluno::all();
        return view('aluno.create')->with('alunos', $alunos);
    }

    public function insert(Request $request){
        Aluno::create([
            'nome' => $request->nome
        ]);

        return back();
    }

    public function update(Request $request, $id){

        $aluno = Aluno::find($id);

        $aluno->nome = $request->input('nome');
        
        $aluno->save();

        return redirect('/alunos/novo')->with('sucess', 'Alterado com sucesso');
        
    }

    public function delete($id){
        $aluno = Aluno::find($id);
        $aluno->delete();
        return redirect('/alunos/novo')->with('sucess', 'Deletado com sucesso');
    }
}
