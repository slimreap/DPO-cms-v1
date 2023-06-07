{{-- IMAGES --}}
				<div x-data="{ imgOpen: false, existingImg: false }" x-on:close-parent-modal="showModal = false" class="relative flex justify-center z-30">
					<button @click="existingImg = true" class="w-full px-6 py-2 mx-auto tracking-wide text-darkgreen capitalize transition-colors duration-300 transform bg-[#f8e5e5] hover:bg-[#e06469] hover:text-white"><span class="mx-auto block"><box-icon name='image-alt'></box-icon></span> Add Image</button>
					
					
						{{-- <div x-show ="imgOpen" x-cloak x-transition:enter="transition duration-300 ease-out" x-transition:enter-start="translate-y-4 opacity-0 sm:translate-y-0 sm:scale-95" x-transition:enter-end="translate-y-0 opacity-100 sm:scale-100" x-transition:leave="transition duration-150 ease-in" x-transition:leave-start="translate-y-0 opacity-100 sm:scale-100" x-transition:leave-end="translate-y-4 opacity-0 sm:translate-y-0 sm:scale-95" class="fixed inset-0 z-10 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
							<div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
								<span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
								<div class="relative inline-block px-4 pt-5 pb-4 overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl rtl:text-right dark:bg-gray-900 sm:my-8 sm:align-middle sm:max-w-sm sm:w-full sm:p-6">
									<div>
										<div class="mt-2 text-center">
											<h3 class="text-lg font-medium leading-6 text-gray-800 capitalize dark:text-white" id="modal-title">Image file only</h3>
											<form id="singleimageupload" action="{{route('uploadsingleimage')}}" method="post" enctype="multipart/form-data">
												@csrf
												<input type="text" hidden name="userid" value="{{auth()->user()->id}}">
												<input type="file" name="singleimg" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" id="singleimage">
												<div class="sm:flex sm:items-center ">
													<button type="button" @click="imgOpen = false"  class="w-full px-4 py-2 mt-2 text-sm font-medium tracking-wide text-gray-700 capitalize transition-colors duration-300 transform border border-gray-200 rounded-md sm:mt-0 sm:w-auto sm:mx-2 dark:text-gray-200 dark:border-gray-700 dark:hover:bg-gray-800 hover:bg-gray-100 focus:outline-none focus:ring focus:ring-gray-300 focus:ring-opacity-40">
														Cancel
													</button>
													<button type="button" class="w-full px-4 py-2 mt-2 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-md sm:w-auto sm:mt-0 hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40" id="uploadsingleimg">
														Upload image
													</button>
												
												</div>
											</form>
										</div>
									</div>
									<div class="mt-5 sm:flex sm:items-center sm:justify-between">
										<a @click="imgOpen = false; existingImg = true" id="" class="cursor-pointer">add existing image</a>
										

									</div>
								</div>
							</div>
						</div> --}}

		
					

					{{-- <template x-if="existingImg"> --}}
						<div x-show = "existingImg" x-cloak x-transition:enter="transition duration-300 ease-out" x-transition:enter-start="translate-y-4 opacity-0 sm:translate-y-0 sm:scale-95" x-transition:enter-end="translate-y-0 opacity-100 sm:scale-100" x-transition:leave="transition duration-150 ease-in" x-transition:leave-start="translate-y-0 opacity-100 sm:scale-100" x-transition:leave-end="translate-y-4 opacity-0 sm:translate-y-0 sm:scale-95" class="fixed inset-0 z-10 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
							<div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
								<span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
								<div class="relative inline-block px-4 pt-5 pb-4 overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl rtl:text-right dark:bg-gray-900 sm:my-8 sm:align-middle sm:max-w-sm sm:w-full sm:p-6">
									<div>
										<div class="mt-2 text-center">
											<h3 class="text-lg font-medium leading-6 text-gray-800 capitalize dark:text-white" id="modal-title">Choose Image only</h3>
											<select name="" id="existingsingleimages" class="existingsingleimages">
					
											</select>
										</div>
									</div>
									<div class="mt-5 sm:flex sm:items-center sm:justify-between">
										<div class="sm:flex sm:items-center ">
											<button @click="existingImg = false" class="w-full px-4 py-2 mt-2 text-sm font-medium tracking-wide text-gray-700 capitalize transition-colors duration-300 transform border border-gray-200 rounded-md sm:mt-0 sm:w-auto sm:mx-2 dark:text-gray-200 dark:border-gray-700 dark:hover:bg-gray-800 hover:bg-gray-100 focus:outline-none focus:ring focus:ring-gray-300 focus:ring-opacity-40">
												Cancel
											</button>
											<button id="addexistingimage"
											@click="existingImg = false"
											 class="w-full px-4 py-2 mt-2 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-md sm:w-auto sm:mt-0 hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40" id="">
												Add
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					{{-- </template> --}}
				</div>
