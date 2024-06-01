<x-slot name="header">
    <h2 class="font-bold">Medicamentos Farma Link</h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg px-4 py-4">

        @if(session()->has('message'))
        <div class="bg-teal-100 rounded-b text-teal-900 px-4 py-4 shadow-md my-3">
            <div class="flex">
                <div>
                    <h4>{{ session('message')}}</h4>
                </div>
            </div>
        </div>
        @endif

            <button wire:click="crear()" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 my-3" style="background-color: green; margin-bottom: 1rem; border-radius: inherit">Nuevo</button>

            @if($modal)
                @include('livewire.crear')
            @endif

            <table class="table-fixed w-full">
                <thead>
                    <tr class=" bg-indigo-600 text-white">
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($medications as $medication)
                    <tr class="text-black">
                        <td class="border px-4 py-2">{{$medication->id}}</td>
                        <td class="border px-4 py-2">{{$medication->name}}</td>
                        <td class="border px-4 py-2">{{$medication->descriptions}}</td>
                        <td class="border px-4 py-2">{{$medication->price}}</td>
                        <td class="border px-4 py-2 text-center">
                            <button wire:click="editar({{$medication->id}})" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4">Editar</button>
                            <button wire:click="borrar({{$medication->id}})" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4">Borrar</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>