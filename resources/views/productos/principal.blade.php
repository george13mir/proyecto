<x-app-layout>

<br>
<header>
    <div class="mx-auto max-w-7x1 px-4 py-6 sm:px-6 lg:px-8">
        <h1 class="text-3x1 font-bold tracking-tight ">Aqui se va mostrar todos los productos</h1>
    </div>
</header>
<br>
<div class="container size-11/12 m-auto">
<a href="{{route('producto.crear')}}"><button class="bg-green-500 hover:bg-black-700 text-white font-bold py-1 px-2 border border-red-500 rounded">Nuevo Registro</button></a>
<br>
<table class="min-w-full border-collapse block md:table">
    <thead class="block md:table-header-group">
        <tr class="border border-blue-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
            <th class="bg-gray-900 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Nombre</th>
            <th class="bg-gray-900 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Precio</th>
            <th class="bg-gray-900 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Descripcion</th>
            <th class="bg-gray-900 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Categoria</th>
            <th class="bg-gray-900 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Operaciones</th>
        </tr>
    </thead>
    <tbody class="block md:table-row-group">
        @foreach ($prod as $produ )
        <tr class="bg-gray-900 border border-grey-500 md:border-none block md:table-row text-white">
            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Nombre</span><a href="{{route('producto.mostrar',$produ->id)}}">{{$produ->nombre}}</a></td>
            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Precio</span>{{$produ->precio}}</td>
            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Descripcion</span>{{$produ->descripcion}}</td>
            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Categoria</span>{{$produ->categoria}}</td>
            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Operaciones</span>
                
                <button class="bg-yellow-500 hover:bg-blue-700 text-white font-bold py-1 px-2 border border-green-500 rounded"><a href="{{route('producto.mostrar',$produ->id)}}">Ver </a></button>
                <button class="bg-green-500 hover:bg-blue-700 text-white font-bold py-1 px-2 border border-blue-500 rounded"><a href="{{route('producto.editar',$produ)}}">Editar</a></button>
                <form action="{{route('producto.borrar',$produ)}}"  method="POST">
                    @method('delete')
                    @csrf
                    @if ($produ->deleted_at)
                        <button type="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 border border-green-500 rounded"><a href="{{route('activapro',$produ->id)}}">Activar </a> </button>
                        
                    @else
                        <button type="button" class="bg-gray-500 hover:bg-blue-600 text-white font-bold py-1 px-1 border border-gray-400 rounded"><a href="{{route('desactivapro',$produ->id)}}">Desactivar</a></button>
                        <input type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 border border-red-500 rounded" value="borrar" onclick="if(!confirm('Desea eliminar a : {{$produ->nombre}}?')){return false;}"/> 
                        
                    @endif
                {{--<button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 border border-red-500 rounded">Eliminar</button>--}}
                    
                    
                    
                </form>
            </td>
        </tr>
        @endforeach		
    </tbody>
</table>
</div>


<br>




{{$prod->links()}};


</x-app-layout>