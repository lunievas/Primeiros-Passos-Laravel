<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmeController extends Controller
{
    public function procurarFilmeId($id){

        $filmes = [
            1 => "Toy Story",
            2 => "Procurando Nemo",
            3 => "Avatar",
            4 => "Star Wars: Episódio V",
            5 => "Up",
            6 => "Mary e Max"
            ];
        return $filmes[$id];
    }

    public function procurarFilmeNome($nome){
        $filmes = [
            1 => "Toy Story",
            2 => "Procurando Nemo",
            3 => "Avatar",
            4 => "Star Wars: Episódio V",
            5 => "Up",
            6 => "Mary e Max"
            ];
            
            foreach($filmes as $filme){
                if (strtolower($filme) == strtolower($nome)){
                    return $filme;
                }
            }

            return "Não deu match!";
    }

    public function listar(){
        $filmes = [
            1 => "Toy Story",
            2 => "Procurando Nemo",
            3 => "Avatar",
            4 => "Star Wars: Episódio V",
            5 => "Up",
            6 => "Mary e Max"
            ];
        return view('filmes', ['filmes' => $filmes]);
    }

    public function adicionarFilme(){
            return view('adicionarFilme');
    }

    public function  adicionarFilmePost(){
        return redirect('/filmes')-> with('mensagem', 'Formulario salvo!');
    }
}
