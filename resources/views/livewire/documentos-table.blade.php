<div>
       
    <div class="container py-8">
        <div class="row">
            <div class="col">
                <div class="container">
                    <div class="row justify-content-start">
                      <div class="col-3">
                        <span class="label label-default text-info">
                            <small>Seleccionar Tipo de Documentos</small>
                        </span>
                      </div>
                      <div class="col-6">
                        <div class="form-group col-md-6">
                            {{-- <input class="form-control form-control-sm" 
                            wire:model="cat" type="text" placeholder="Categoría..."> --}}
                        
                            <select wire:model="tipo" class="form-control form-control-sm form-select" aria-label="Filter select">
                                <option value=''>Todos los tipos</option>
                                @foreach ($tipos as $tipo )
                                    <option value={{$tipo->id}}>{{$tipo->nombre}}</option>  
                                @endforeach
                                
    
                            </select>
                        </div>
                      </div>
                    </div>

                  </div>
                   
                </div>

            @include('livewire.cabeceratabla')
                
                
            @include('livewire.tabla') 
               
            </div> 
            @if ($documentos->count())
            {{-- <ul class="pagination pagination-sm flex-sm-wrap float-right"> --}}
                <div class="nav-scroller py-1 mb-2"> 
                    <nav class="nav d-flex justify-content-center">
                        <ul class="pagination pagination-sm flex-sm-wrap"> 
                            {{ $documentos->links()}}
                        </ul>
                    </nav>
                </div>

                {{-- {{ $documentos->links() }} --}}

            </div>
            @else
            <div>
                No hay registros para la buesqueda "{{$buscar}}" en la página {{$page}} 
                mostrando {{$porPagina}} registros por página.

            </div>
            
            @endif   
        </div>
    </div>
        
</div>
