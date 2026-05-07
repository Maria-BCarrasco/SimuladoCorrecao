<?php

namespace App\Livewire\Movimentacao;

use App\Models\Movimentacao;
use Livewire\Component;

class MovimentacaoIndex extends Component
{
    
    public function render()
    {
        $movimentacaos = Movimentacao::all();

        return view('livewire.movimentacao.movimentacao-index', compact('movimentacaos'));
    }
}
