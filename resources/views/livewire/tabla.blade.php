<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th wire:click="ordenar('titulo')">Título
                @if ($orden=='titulo')
                    @if ($direccion == 'desc')
                    <i class="fas fa-arrow-down float-right mt-1"></i>
                    @else
                    <i class="fas fa-arrow-up float-right mt-1"></i>   
                    @endif
                @else
                <i class="fas fa-sort float-right mt-1"></i>
                @endif
            
            </th>
            <th wire:click="ordenar('descripcion')" width="50%">Descripción
                @if ($orden=='descripcion')
                @if ($direccion == 'desc')
                <i class="fas fa-arrow-down float-right mt-1"></i>
                @else
                <i class="fas fa-arrow-up float-right mt-1"></i>   
                @endif
            @else
            <i class="fas fa-sort float-right mt-1"></i>
            @endif
            </th>
            <th wire:click="ordenar('categoria_id')" width="15%">Categoría
                @if ($orden=='categoria_id')
                @if ($direccion == 'desc')
                <i class="fas fa-arrow-down float-right mt-1"></i>
                @else
                <i class="fas fa-arrow-up float-right mt-1"></i>   
                @endif
            @else
            <i class="fas fa-sort float-right mt-1"></i>
            @endif
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($documentos as $documento )
            <tr>
                <td>{{$documento->Titulo}}</td>
                <td>{{$documento->Descripcion}}</td>
                <td>{{$documento->nombre}}</td>
            </tr>
            
        @endforeach
        
    </tbody>
   
</table>