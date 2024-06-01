<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>

        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>

        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full pt-10">
            <form>
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="mb-4">
                        <label for="name" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Nombre</label>
                        <input type="text" id="name" class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="James" wire:model="name" />
                    </div>
                    <div class="mb-4">
                        <label for="descriptions" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Descripción</label>
                        <input type="text" id="descriptions" class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="Describe tu producto" wire:model="descriptions" />
                    </div>
                    <div class="mb-4">
                        <label for="price" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Precio</label>
                        <input type="number" id="price" class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" wire:model="price" />
                    </div>

                    <div class="flex items-center justify-end w-full">
                        <button type="button" class="focus:outline-none focus:ring-2 focus:ring-offset-2  focus:ring-gray-400  bg-gray-100 transition duration-150 text-gray-600 ease-in-out hover:border-gray-400 hover:bg-gray-300 border rounded px-8 py-2 text-sm" wire:click="cerrarModal()">Cancelar</button>
                        <button type="submit" class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 ml-3 transition duration-150 ease-in-out hover:bg-indigo-600 bg-indigo-700 rounded text-white px-8 py-2 text-sm" wire:click.prevent="guardar()">Guardar</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>
