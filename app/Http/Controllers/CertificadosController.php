<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Certificado;
use App\Aluno;
use App\Curso;
use \PDF;

class CertificadosController extends Controller
{
    public function create() {
        $certificados = Certificado::all();
        $alunos = Aluno::all();
        $cursos = Curso::all();
        return view('certificado.create')->with('certificados',$certificados)->with( 'alunos', $alunos)->with('cursos', $cursos);
    }

    public function certificado($id){
        $certificados = Certificado::find($id);
        $pdf = PDF::loadView('certificado.certificado', compact('certificados'));

        return $pdf->setPaper('a4', 'landscape')->stream('Certificado.pdf');

    }
    public function insert(Request $request){
        Certificado::create([
            'aluno' => $request->aluno ,
            'curso' => $request->curso,
            'carga_horaria' => $request->carga_horaria,
        ]);

        return back();

        
    }

    public function delete($id){
        $certificado = Certificado::find($id);
        $certificado->delete();
        return redirect('/certificados/novo')->with('sucess', 'Deleteado com sucesso');
    }
}
