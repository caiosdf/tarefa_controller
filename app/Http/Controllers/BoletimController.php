<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Boletim;

class BoletimController extends Controller
{
  public function createBoletim(Request $request){
      $boletim = new Boletim;

      $boletim->nota_portugues = $request->nota_portugues;
      $boletim->nota_ingles = $request->nota_ingles;
      $boletim->nota_ciencias = $request->nota_ciencias;
      $boletim->nota_mat = $request->nota_mat;
      $boletim->save();

      return response()->success($boletim);
  }

  public function listBoletim(){

      return Boletim::all();

  }

  public function showBoletim($id){

      $boletim = Boletim::findOrFail($id);
      if($boletim){
          return response()->success($boletim);
      }
      else{
          $boletim = "aluno não encontrado, verifique o id novamente";
          return response()->error($data, 400);
      }

  }

  public function updateBoletim(Request $request, $id){

    $boletim = Boletim :: findOrFail($id);

    if($request->nota_portugues){
        $boletim->nota_portugues = $request->nota_portugues;
    }
    if($request->nota_ingles){
        $boletim->nota_ingles = $request->nota_ingles;
    }
    if($request->nota_ciencias){
        $boletim->nota_ciencias = $request->nota_ciencias;
    }
    if($request->nota_mat){
        $boletim->nota_mat = $request->nota_mat;
    }

    $boletim->save();

    return response()->success($boletim);
  }

  public function deleteBoletim($id){

      Boletim :: destroy($id);
      return response()->json(['Boletim detectado']);
  }
}
