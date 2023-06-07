<x-Modals.editorpagemodal>
    <x-slot name="existinglogo">
       
    </x-slot>
    <x-slot name="button">
        <button @click="open = !open" id="" class="w-full h-full px-6 py-2 mx-auto tracking-wide text-darkgreen capitalize transition-colors duration-300 transform bg-[#f8e5e5] hover:bg-[#e06469] hover:text-white">
            <div class="grid grid-rows-2 justify-center">
                <box-icon type='solid' class="mx-auto" name='file-pdf'></box-icon>                
                <p>Upload Pdf</p>
            </div>
            
            
        </button>
    </x-slot>
    <x-slot name="id">
        addpdf
    </x-slot>
    <x-slot name="btnokid">
        submitpdf
    </x-slot>
    <x-slot name="btnText">
        upload pdf
    </x-slot>
    <div class="mt-2 text-center">
        <h3 class="text-lg font-medium leading-6 text-gray-800 capitalize dark:text-white" id="modal-title">Upload pdf file</h3>
        <form action="{{route('uploadPdf')}}" id="pdfform" method="post" enctype="multipart/form-data">
        @csrf
        {{-- <input type="hidden" value="{{auth()->user()->id}}" name="user_id"> --}}
        <input type="file" id="pdf" name="pdffile">

        </form>
    </div>
</x-Modals.editorpagemodal>