<x-app-layout>
<header>
    <div class="mx-auto max-w-7x1 px-4 py-6 sm:px-6 lg:px-8">
        <h1 class="text-3x1 font-bold tracking-tight text-gray-900">Perfiles: {{$perfi->id}}</h1>
    </div>
</header>

<div class="continer size-1/2 m-auto">
<div>
    <div class="px-4 sm:px-0">
      <h3 class="text-base font-semibold leading-7 text-gray-900">Este es el Pefil: {{$perfi->id}}</h3>
      <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">Detalles del Perfil.</p>
    </div>
    <div class="mt-6 border-t border-gray-100">
      <dl class="divide-y divide-gray-100">
        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
          <dt class="text-sm font-medium leading-6 text-gray-900">Cargo</dt>
          <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{$perfi->cargo}}</dd>
        </div>
        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
          <dt class="text-sm font-medium leading-6 text-gray-900">Biografia</dt>
          <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{$perfi->biografia}}</dd>
        </div>
        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
            <dt class="text-sm font-medium leading-6 text-gray-900">Operaciones</dt>
            <dd class="mt-2 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
              <ul role="list" class="divide-y divide-gray-100 rounded-md border border-gray-200">
                <li class="flex items-center justify-between py-4 pl-4 pr-5 text-sm leading-6">
                    <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-2 border border-green-500 rounded"><a href="{{route('perfiles.principal')}}">Volver </a></button>
                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 border border-red-500 rounded"><a href="{{route('perfiles.editar',$perfi)}}">Editar</a></button>
      </dl>
    </div>
  </div>
</div>


</x-app-layout>
