<?php

namespace App\Http\Livewire;


use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Documento;
use App\Models\Categoria;
use App\Models\Tipo;

class DocumentosTable extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    protected $queryString=['buscar' => ['except'=>''],
                            'porPagina' =>['except'=>'5']
    ];
    public $buscar='';
    public $cat;
    public $porPagina='5';
    public $orden='titulo';
    public $direccion='desc';
    public $tipo=1;
    
    //public $queryString = $buscar;

    public function render()
    {
        $categorias=Categoria::all();
        $tipos=Tipo::all();
        $documentos=Documento::join('categorias', 'documentos.categoria_id', '=', 'categorias.id')
                                ->where("titulo", "LIKE", "%{$this->buscar}%")
                                ->Where("categoria_id", "LIKE", "%{$this->cat}%")
                                ->where("tipo_id","LIKE","%{$this->tipo}%")
                                ->orderBy($this->orden,$this->direccion)
                                ->paginate($this->porPagina)->withQueryString();
        return view('livewire.documentos-table',[
                                                'documentos' => $documentos, 
                                                'categorias' => $categorias, 
                                                'tipos' => $tipos
                                                ]); 
    }

    public function clear(){
        $this->buscar='';
        $this->porPagina='5';
        $this->cat=null;
        $this->resetPage();
        $this->tipo=1;
        
    }
    public function ordenar($orden){
        if ($this->orden == $orden) {
            if ($this->direccion == 'desc') {
                $this->direccion = 'asc';
            } else {
                $this->direccion = 'desc';
                
            }
        } else {
            $this->direccion = 'asc';
            $this->orden = $orden;
        }
        
        
        
        

    }
}
