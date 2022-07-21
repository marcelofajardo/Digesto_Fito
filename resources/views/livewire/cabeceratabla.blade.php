<div class="form-row">

    <div class="form-group col-md-3">
        {{-- <input class="form-control form-control-sm" 
        wire:model="cat" type="text" placeholder="Categoría..."> --}}
        <span class="label label-default text-info"><small>Seleccionar Categoría</small></span>
        <select wire:model="cat" class="form-control form-control-sm form-select">
            <option value=''>Todas</option>
            @foreach ($categorias as $categoria )
                <option value={{$categoria->id}}>{{$categoria->nombre}}</option>  
            @endforeach
            

        </select>
    </div>

    <div class="form-group col-md-6">
        <span class="label label-default text-info"><small>Buscar por título</small></span>
        <input class="form-control form-control-sm" 
        wire:model="buscar" type="text" placeholder="Buscar...">
    </div>

    <div class='form-group col-md-2'>
        {{-- <label for="xpag" class="label label-default">Cantidad x página</label> --}}
        <span class="label label-default text-info"><small>Cantidad x página</small></span>
        <select wire:model="porPagina" class="form-control form-control-sm form-select" id="xpag">
            <option value="5">5 por pagina</option>
            <option value="10">10 por pagina</option>
            <option value="15">15 por pagina</option>
            <option value="20">20 por pagina</option>
            <option value="100">100 por pagina</option>
        </select>

    </div>
    <div class="form-group col-md-1">
        @if ($buscar !=='' or $cat !==null)
        <span class="label label-default text-info"><small>Limpiar</small></span>
        <button wire:click="clear" class="form-control form-control-sm btn btn-outline-secondary btn-sm" 
        type="button">X</button>
        @endif
        
    </div>

</div>
