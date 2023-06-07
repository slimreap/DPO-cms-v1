<div x-data="{ open: false }">
    <button @click="open = !open" id="showbtnproperty" class="w-full h-full px-6 py-2 mx-auto tracking-wide text-darkgreen capitalize transition-colors duration-300 transform bg-[#f8e5e5] hover:bg-[#e06469] hover:text-white"><x-polaris-major-buy-button class="w-6 h-6 mx-auto" />Button</button>
    <button @click="open = !open" id="openbtnmodal" class="hidden w-full px-6 py-2 mx-auto tracking-wide text-white capitalize transition-colors duration-300 transform bg-red-600 rounded-md hover:bg-red-200 focus:outline-none focus:ring focus:ring-red-300 focus:ring-opacity-80">Button</button>
    <div x-show="open" x-transition:enter="transition duration-200 ease-out" x-transition:enter-start="translate-y-4 opacity-0 sm:translate-y-0 sm:scale-95" x-transition:enter-end="translate-y-0 opacity-100 sm:scale-100" x-transition:leave="transition duration-150 ease-in" x-transition:leave-start="translate-y-0 opacity-100 sm:scale-100" x-transition:leave-end="translate-y-4 opacity-0 sm:translate-y-0 sm:scale-95" class="fixed inset-0 z-30 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
            <div class="relative inline-block px-4 pt-5 pb-4 overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl rtl:text-right dark:bg-gray-900 sm:my-8 sm:align-middle sm:max-w-sm sm:w-full sm:p-6">
                <div>
                    <div class="mt-2 text-center">
                        <h3 class="text-lg font-medium leading-6 text-gray-800 capitalize dark:text-white" id="modal-title">Insert New Button</h3>
                        <input placeholder="Name of Button" id="button-text" class="mt-2 text-sm text-gray-500 dark:text-gray-400 rounded">
                    </div>
                    <div class="mt-2 flex flex-col w-40 ml-20 pl-3 text-center">
                        <label for="button_radius" class="text-white">Button Radius</label>
                        <select name="button_radius" class="" id="buttonradius">
                            <option value="" data-radius="rounded-full">Pill buttons</option>
                            <option value="" data-radius="rounded-none">No rounding</option>
                        </select>
                    </div>

                    <div class="mt-2 flex flex-col w-40 ml-20 pl-3 text-center">
                        <label for="button_position" class="text-white">Button Position</label>
                        <select name="" class="" id="button_position">
                            <option value="" data-position="place-self-start">left</option>
                            <option value="" data-position="place-self-center">middle</option>
                            <option value="" data-position="place-self-end">right</option>
                        </select>
                    </div>
                    <div class="mt-2 flex flex-col w-40 ml-20 pl-3 text-center">
                        <label for="button_color" class="text-white">Button Color</label>
                        <select name="" class="" id="button_color">
                            <option value="" data-color="bg-red-800">crimson</option>
                            <option value="" data-color="bg-green-700">green</option>
                            <option value="" data-color="bg-black">black</option>
                        </select>
                    </div>
                    <div class="mt-2 flex flex-col w-40 ml-20 pl-3 text-center">
                        <label for="button_text_color" class="text-white">Button Text Color</label>
                        <select name="" class="" id="button_text_color">
                            <option value="" data-textcolor="text-white">White</option>
                            <option value="" data-textcolor="text-teal-950">Green</option>
                            <option value="" data-textcolor="text-black">Black</option>
                        </select>
                    </div>
                    <div class="mt-2 flex flex-col w-40 ml-20 pl-3 text-center">
                        <label for="btnlink" class="text-white">Button link</label>
                        <input type="text" id="btnlink">
                    </div>
                </div>
                <div class="mt-5 sm:flex sm:items-center sm:justify-between">

                    <div class="sm:flex sm:items-center ">
                        <button
                        id="removebutton"
                        @click="open = false" class="w-full px-4 py-2 mt-2 text-sm font-medium tracking-wide text-gray-700 capitalize transition-colors duration-300 transform border border-gray-200 rounded-md sm:mt-0 sm:w-auto sm:mx-2 dark:text-gray-200 dark:border-gray-700 dark:hover:bg-gray-800 hover:bg-gray-100 focus:outline-none focus:ring focus:ring-gray-300 focus:ring-opacity-40">
                            Cancel
                        </button>
                        <button @click="open = false" class="w-full px-4 py-2 mt-2 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-md sm:w-auto sm:mt-0 hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40" id="addbutton">
                            OK
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
