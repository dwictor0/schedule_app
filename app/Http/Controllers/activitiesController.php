<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\activity;

class activitiesController extends Controller
{
    public function create(){
        return view('add.create');
    }

     public function store(Request $request)
     {
       activity::create([
        'nome'=>$request->nome,
        'atividade'=>$request->atividade,
        'categoria'=>$request->categoria,
       ]);
       return "Cadastro feito com sucesso";
     }
     public function edit($id)
     {
        $activity = activity::findOrFail($id);
        return view('add.edit',['activity' =>$activity]);
       //return view('add.edit',['activity' => $activity]); 
     }
    public function update(Request $request, $id)
    {
        $activity = activity::findOrFail($id);

        $activity->update([
            'nome' => $request->nome,
            'atividade'=> $request->atividade,
            'categoria'=> $request->categoria,
        ]);
        return "Usuario atualizado com sucesso!";
    } 
    public function delete($id)
    {
        $activity = activity::findOrFail($id);
        return view('add.delete',['activity' => $activity]);
    }
    public function destroy($id)
    {
        $activity = activity::findOrFail($id);
        $activity->delete();
        
        return "Usuario excluido com sucesso";
    }
}
