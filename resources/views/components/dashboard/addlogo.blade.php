<x-Modals.editorpagemodal>
    <x-slot name="button">
        <button @click="open = !open" id="" class="w-full h-full px-6 py-2 mx-auto tracking-wide text-darkgreen capitalize transition-colors duration-300 transform bg-[#f8e5e5] hover:bg-[#e06469] hover:text-white">
            <div class="grid grid-rows-2 justify-center">
                <box-icon type='logo' class="mx-auto" name='ok-ru'></box-icon>
                {{ $btnText }}
            </div>
            
            
        </button>


    </x-slot>
    <x-slot name="id">
        addlogo
    </x-slot>
    <x-slot name="btnokid">
        btnoklogo
    </x-slot>
    <x-slot name="btnText">
        Addlogo
    </x-slot>
    <div class="mt-2 text-center">
        <h3 class="text-lg font-medium leading-6 text-gray-800 capitalize dark:text-white" id="modal-title">Upload logo</h3>
        <form id="logoform" method="post" action="{{route('uploadlogo')}}" enctype="multipart/form-data">
            @csrf
            <input type="text" hidden name="userid" value="{{auth()->user()->id}}">
            <label for="logoimg">Choose a file:</label>
            <input type="file" id="logoimg" name="logoimg">
        </form>
    </div>

    <a @click="open = false; logo = true" id="" class="cursor-pointer">Add existing logo</a>

    <x-slot name="existinglogo">
   
    <div x-show="logo" x-transition:enter="transition duration-200 ease-out" x-transition:enter-start="translate-y-4 opacity-0 sm:translate-y-0 sm:scale-95" x-transition:enter-end="translate-y-0 opacity-100 sm:scale-100" x-transition:leave="transition duration-150 ease-in" x-transition:leave-start="translate-y-0 opacity-100 sm:scale-100" x-transition:leave-end="translate-y-4 opacity-0 sm:translate-y-0 sm:scale-95" class="fixed inset-0 z-30 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
            <div class="relative inline-block px-4 pt-5 pb-4 overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl rtl:text-right dark:bg-gray-900 sm:my-8 sm:align-middle sm:max-w-sm sm:w-full sm:p-6">
                <div>
                   
                    <div class="mt-2 text-center">
                        <h3 class="text-lg font-medium leading-6 text-gray-800 capitalize dark:text-white" id="modal-title">Choose Image only</h3>
                        <select name="" id="logoselection" class="">
                
                        </select>
                    </div>

                </div>
                <div class="mt-5 sm:flex sm:items-center sm:justify-between">

                    <div class="sm:flex sm:items-center ">
                        <button
                        id=""
                        @click="logo = false" class="w-full px-4 py-2 mt-2 text-sm font-medium tracking-wide text-gray-700 capitalize transition-colors duration-300 transform border border-gray-200 rounded-md sm:mt-0 sm:w-auto sm:mx-2 dark:text-gray-200 dark:border-gray-700 dark:hover:bg-gray-800 hover:bg-gray-100 focus:outline-none focus:ring focus:ring-gray-300 focus:ring-opacity-40">
                            Cancel
                        </button>
                        <button @click="logo = false" class="w-full px-4 py-2 mt-2 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-md sm:w-auto sm:mt-0 hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40" id="btnreplacelogo">
                            OK
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-slot>
</x-Modals.editorpagemodal>