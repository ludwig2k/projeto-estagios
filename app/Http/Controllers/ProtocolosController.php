<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pessoas;
use App\Protocolos;
use Illuminate\Support\Facades\Auth;

class ProtocolosController extends Controller
{
    public function index(){
        $pessoas = Pessoas::all();
        return view('protocolo', compact('pessoas'));
    }

    public function store(Request $request){
        $request->validate([
            'descricao' => ['required', 'string'],
            'prazo' => ['required', 'date_format:Y-m-d'],
            'pessoa' => ['required', 'integer']
        ],

        [
            'descricao.required' => 'O campo de descrição é obrigatorio!',
            'prazo.required' => 'O campo de prazo é obrigatorio!',
            'pessoa.required' => 'Por favor, selecione um receptor'
        ],


    );
        //$atendente = Auth::user()->id;
        $descricao = $request->descricao;
        $prazo = $request->prazo;
        $pessoa = $request->pessoa;


        $protocoloCriado = Protocolos::create([
            'atendente' => 1,
            'descricao' => $descricao,
            'prazo' => $prazo,
            'receptor' => $pessoa

        ]);
        
        return "Seu protocolo foi enviado!";
    }

    public function exibirTodos(Request $request){
        $protocolos = Protocolos::all();

        return view('protocolo_exibir', compact('protocolos'));

    }

    public function filter(Request $request){
        $protocolos = new Protocolos();
       

        $protocolos = $protocolos->where(function ($query) use ($request){
    
            if($request->search){
                 $query->where('descricao', "LIKE", "%{$request->search}%"); 
            }
            if($request->data_inicial && $request->data_final){
                $query->whereDate('prazo', ">=", $request->data_inicial)->whereDate('prazo', "<=", $request->data_final);
            }
            
            })->get();
        
    

        return view('protocolo_exibir', compact('protocolos'));
    }

    public function destroy($id){
        $protocolo = Protocolos::find($id);

        if($protocolo){
            $protocolo->delete();
            return redirect()->back();
        }

        return redirect()->back();

        
        
    }
    public function editarIndex($id){
        $protocolo = Protocolos::find($id);
        $pessoas = Pessoas::all();

        if($protocolo){
            return view('protocolos_editar', compact('protocolo', 'pessoas'));
            
        }
            return redirect()->back();
    }

    public function update(Request $request){

        $protocolo = Protocolos::find($request->protocolo_id);

        if(!$protocolo){
            return redirect()->back();  
        }

        $request->validate([
            'descricao' => ['required', 'string'],
            'prazo' => ['required', 'date_format:Y-m-d'],
            'pessoa' => ['required', 'integer']
            ],

            [
            'descricao.required' => 'O campo de descrição é obrigatorio!',
            'prazo.required' => 'O campo de prazo é obrigatorio!',
            'pessoa.required' => 'Por favor, selecione um receptor'
            ],
        );
        
        $protocoloUpdate = $protocolo->update([
            'descricao' => $request->descricao,
            'prazo' => $request->prazo,
            'receptor' => $request->pessoa

        ]);

        return redirect()->route('protocolos_exibir_todos');
    }

}


