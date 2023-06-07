<div x-data="{ open: false, existingimg: false }">
    <button @click="existingimg = !existingimg" id="addcontent_block_1" class="w-full px-6 py-2 mx-auto tracking-wide text-darkgreen capitalize transition-colors duration-300 transform bg-[#f8e5e5] hover:bg-[#e06469]">
        {{-- Image and carousel --}}

    <div class="grid grid-cols-3">
        <div class="">
            <box-icon name='image-alt' class="text-[#545454]" size="lg"></box-icon>
            
        </div>
        <x-radix-divider-horizontal class="w-18 text-[#545454] mx-auto rotate-90"/>
        <div class="">
            <box-icon name='carousel' class="text-[#545454]" size="lg"></box-icon>
        </div>
    </div>

    </button>
    <button @click="existingimg = !existingimg" id="opencb1" class="hidden w-full px-6 py-2 mx-auto tracking-wide text-white capitalize transition-colors duration-300 transform bg-red-600 rounded-md hover:bg-red-200 focus:outline-none focus:ring focus:ring-red-300 focus:ring-opacity-80">Button</button>



    {{-- existing images --}}
    <div x-show="existingimg" x-transition:enter="transition duration-200 ease-out" x-transition:enter-start="translate-y-4 opacity-0 sm:translate-y-0 sm:scale-95" x-transition:enter-end="translate-y-0 opacity-100 sm:scale-100" x-transition:leave="transition duration-150 ease-in" x-transition:leave-start="translate-y-0 opacity-100 sm:scale-100" x-transition:leave-end="translate-y-4 opacity-0 sm:translate-y-0 sm:scale-95" class="fixed inset-0 z-30 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
            <div class="relative inline-block px-4 pt-5 pb-4 overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl rtl:text-right dark:bg-gray-900 sm:my-8 sm:align-middle sm:max-w-sm sm:w-full sm:p-6">
                <div>
                    <div class="mt-2 text-center">
                        <h3 class="text-lg font-medium leading-6 text-darkgreen capitalize dark:text-white" id="modal-title">Choose Image</h3>

                            <div class="grid grid-flow-row space-y-2 justify-items-center">
                            <select name="" class="chosen-select" id="existingsingleimgcarousel" multiple>

                            </select>
                            <label class="text-white" for="existingimgcarousel">Choose images for carousel</label>
                            <select name="" class="chosen-select" id="existingimgcarousel" multiple>

                            </select>
                        </div>
                    </div>


                </div>
                <div class="mt-5 sm:flex sm:items-center sm:justify-between">

                    <div class="sm:flex sm:items-center ">
                        <button
                        id="removebutton"
                        @click="existingimg = false" type="button" class="w-full px-4 py-2 mt-2 text-sm font-medium tracking-wide text-gray-700 capitalize transition-colors duration-300 transform border border-gray-200 rounded-md sm:mt-0 sm:w-auto sm:mx-2 dark:text-gray-200 dark:border-gray-700 dark:hover:bg-gray-800 hover:bg-gray-100 focus:outline-none focus:ring focus:ring-gray-300 focus:ring-opacity-40">
                            Cancel
                        </button>
                        <button @click="existingimg = false" type="button" class="w-full px-4 py-2 mt-2 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-crimson rounded-md sm:w-auto sm:mt-0 hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40" id="addcontentblock-1">
                            OK
                        </button>
                        
                 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
