<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aluno;

class AulaController extends Controller
{
    public function createAluno(Request $request){
        $aluno = new Aluno;

        $aluno->nome = $request->nome;
        $aluno->matricula = $request->matricula;
        $aluno->email = $request->email;
        $aluno->telefone = $request->telefone;
        $aluno->save();

        return response()->success($aluno);
    }

    public function listAluno(){

        return Aluno::all();

    }

    public function showAluno($id){

        $aluno = Aluno::findOrFail($id);
        if($aluno){
            return response()->success($aluno);
        }
        else{
            $aluno = "aluno não encontrado, verifique o id novamente";
            return response()->error($data, 400);
        }

    }

    public function updateAluno(Request $request, $id){

      $aluno = Aluno :: findOrFail($id);

      if($request->nome){
          $aluno->nome = $request->nome;
      }
      if($request->matricula){
          $aluno->matricula = $request->matricula;
      }
      if($request->email){
          $aluno->email = $request->email;
      }
      if($request->telefone){
          $aluno->telefone = $request->telefone;
      }

      $aluno->save();

      return response()->success($aluno);
    }

    public function deleteAluno($id){

        Aluno :: destroy($id);
        return response()->json(['Aluno detectado']);
    }
}
