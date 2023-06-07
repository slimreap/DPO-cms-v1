<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
			{{-- Summernote --}}
	<script src="https://cdn.tailwindcss.com"></script>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
			@livewireStyles
	<link rel="stylesheet" href="{{asset('js/chosen_v1.8.7/chosen.min.css')}}">
	@livewireScripts
        {{-- <script defer src="{{asset('js/alpine.js')}}"></script> --}}
        <!-- ~jquery ui css -->
		<link rel="stylesheet" href="{{asset('js/jquery-ui/jquery-ui.css')}}">
        <!-- ~jquery -->
        <script type="text/javascript" src="{{asset('js/jquery/JQ.js')}}"></script>
        <!-- ~Jquery color Plugin -->
        {{-- <script type="text/javascript" src="{{asset('js/jquery-color/jquery.animate-colors.js')}}" defer></script> --}}
        <!-- ~jquery ui js-->
        <script type="text/javascript" src="{{asset('js/jquery-ui/jquery-ui.js')}}" defer></script>

<title>Document</title>
	<style>
		[x-cloak] {
			display: none;
		}
		#editor-modal {
  display: none;
}

#editor {
  width: 100%;
  height: 300px;
}
.chosen-results{
	overflow-y: auto;
}

.pdfobject-container {
	 height: 800px; 
	 width: 800px;
	 margin: auto;
	 margin-bottom: 2px;
	 margin-top: 2px;
	 }

.pdfobject {
	margin: auto;
}


	</style>
  <meta name="csrf-token" content="{{ csrf_token() }}">
	     <!-- Insert the blade containing the TinyMCE configuration and source script -->
</head>

<body class="overflow-x-hidden">
	{{-- CANVAS --}}
	<div class="flex flex-row">
		<div class="col-span-3 w-full flex-auto transition ease-in delay-150" id="pagecontainer">

			{{-- Page title and save html to database --}}
			<form action="{{ route('saveHtml') }}" method="POST" id="htmlcontent">
				@csrf
			<input type="text" name="canvas-content" id="canvas-content" hidden>
			<input type="text" name="footer-content" id="footer-content" hidden>
			<input type="text" name="nav-content" id="nav-content" hidden>
			<input type="text" name="file_name" hidden>
			<input type="text" name="page_name" value="			
			@if (isset($slug))
				{{$slug}}
			@else
				Home
			@endif" hidden>
			<input type="text" name="user_id" value="{{auth()->user()->id}}" hidden>
			<div class="grid grid-flow-col auto-cols-auto gap-x-64 mb-1 w-full bg-[#f8e5e5] justify-center items-center border-b-4 border-r-4">
				<div class="">

					<h3 id="editable-title" class="mx-auto text-center tracking-wide rounded-md text-darkgreen capitalize transition-colors duration-300 transform bg-[#f8e5e5] hover:bg-[#e06469] hover:text-white px-4 h-8" 
					@if (isset($title))
						data-value="{{$title}}"
					@endif 
	
					contenteditable="true">
					@if (isset($title))
					{{ ($title) ? $title : 'Title of the theme' }}
					@endif 
				</h3>
				</div>

				<div class="">

					<button id="savehtml" type="submit" @click="canvasContent = $el.querySelector('#canvas').innerHTML, navContent = $el.querySelector('#nav').innerHTML" class="w-30 px-6 py-2 mx-auto my-2 tracking-wide rounded-md text-darkgreen capitalize transition-colors duration-300 transform bg-[#f8e5e5] hover:bg-[#e06469] hover:text-white">Save</button>
				</div>

			<div class="">
				<button id="btntoolbar" class="w-30 px-6 py-2 mx-auto my-2 tracking-wide rounded-md text-darkgreen capitalize transition-colors duration-300 transform bg-[#f8e5e5] hover:bg-[#e06469] hover:text-white ">
					<box-icon class="text-3xl bx-md" name='chevrons-right'></box-icon>
				</button>

			</div>

		</div>

		  </form>



		  <div id="message"></div>
		  @if(session('success'))
			<div class="flex bg-green-100 rounded-lg p-4 mb-4 text-sm text-green-700">
				<div class="mx-auto">
					<svg class="w-5 h-5 inline mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
					{{ session('success') }}
					</div>
			</div>
		@endif


			<div class="flex flex-col bg-slate-50 h-full mx-10 overflow-y-scroll overflow-x-hidden relative" id=""> 
				{{-- <x-dashboard.navigation/>
				  

				<div class="container w-full" id="innercanvas">
					I'm inner canvas of About
				</div> --}}

				@if ($canvas_content)
				{!! $navigation_content !!}
				{!! $canvas_content !!}
				{!! $footer_content !!}
				@else

				@if ($navigation_content)
				{!! $navigation_content !!}
				<div id="canvas" class="mb-auto">

				</div>
				{!! $footer_content !!}


				@else 
				<x-dashboard.navigation/>
				<div id="canvas" class="mb-auto">

				</div>
				<x-dashboard.footer/>
				 @endif
			
				

				@endif
				
				{{-- content block 3 --}}
				{{-- <div class="grid grid-cols-2 justify-items-center">
					<div class="flex flex-col">
						<p>test</p>
						<p>desc</p>
					
					</div>
					<div class="">
						<img src="{{asset('storage/images/picko.jpg')}}" alt="">
					</div>
					
				</div> --}}

			
			{{-- accordion --}}

	



			</div>


		</div>

		


		{{-- TOOLS --}}
		<div id="toolbar" class="w-full h-full flex-auto text-green-800 bg-[#f4f5f7] relative transition ease-in-out delay-150 translate-x-full">

			<div class="grid grid-cols-2 gap-0">
				<button class="transition-colors duration-300 transform bg-[#f8e5e5] hover:bg-[#e06469] hover:text-white h-16" id="btninsert">Insert</button>
				<button class="transition-colors duration-300 transform bg-[#f8e5e5] hover:bg-[#e06469] hover:text-white" id="btnpage">Page</button>
			</div>
			{{-- INSERT --}}
			<div class="grid grid-cols-2 gap-5 mt-2 text-center mx-2 px-2" id="inserttools">
				<!-- <button class=" h-20 bg-red-200" id="btnimg">Images</button> -->
			<x-dashboard.addimages/>
			{{-- <button class="w-full px-6 py-2 mx-auto tracking-wide text-darkgreen capitalize transition-colors duration-300 transform bg-beige hover:bg-darkbeige focus:outline-none focus:ring focus:ring-darkbeige focus:ring-opacity-80" id="addtextbox">Textbox</button> --}}
			<x-dashboard.addbutton />
			{{-- <x-dashboard.addcard /> --}}
			<button id="addDivider"
			class="w-full px-6 py-2 mx-auto tracking-wide text-darkgreen capitalize transition-colors duration-300 transform bg-[#f8e5e5] hover:bg-[#e06469] hover:text-white"><x-radix-divider-horizontal class="w-10 h-10 mx-auto"/>Divider</button>
			<x-dashboard.addcarousel />
			<x-dashboard.addnavigation />
			<x-dashboard.addytvideo/>
			{{-- <button class="w-full px-6 py-2 mx-auto tracking-wide text-darkgreen capitalize transition-colors duration-300 transform bg-beige hover:bg-darkbeige focus:outline-none focus:ring focus:ring-darkbeige focus:ring-opacity-80" id="addcontactform"><x-clarity-form-line class="w-6 h-6 mx-auto" />Contact Form</button> --}}
			<x-dashboard.addlogo btnText="Addlogo"/>
			<x-dashboard.addpdf/>
			<button id="addTextbox"
			class="w-full px-6 py-2 mx-auto tracking-wide text-darkgreen capitalize transition-colors duration-300 transform bg-[#f8e5e5] hover:bg-[#e06469] hover:text-white"><div class="flex flex-col justify-center"><div class="mx-auto"><box-icon class="" name='text'></box-icon></div><div class="">Addtextbox</div></div></button>
			<x-dashboard.uploadphotos/>
			<x-dashboard.themecolor/>
			{{-- Accordion --}}

			
		<div class=" h-16 p-4 bg-[#e06469] text-white col-span-2 w-full">Content Block</div>

		<x-dashboard.content_blocks.addcb1/>
		<x-dashboard.content_blocks.addcb2/>
		<x-dashboard.content_blocks.addcb3/>
		<x-dashboard.content_blocks.addcb4/>
		<x-dashboard.content_blocks.addcb5/>

	

	</div>


		{{-- PAGES --}}
		<div class="grid grid-cols-1 gap-1 text-center border-l-4" id="pagestools">
			<div class="h-20">
				<div id="pages-container" class="grid grid-cols-3 bg-beige">
					{{-- <div class="col-span-2">
						Home
					</div>
					<div class="">
						<button class="rounded-full remove" data-page="Home">
							Remove
						</button>
						
					</div> --}}
					<div class="col-span-3">
					<div class="grid grid-cols-2">
						<div>Home</div>
						<div class="">
						<button class="rounded-full remove" data-page="Home" id="removepage">
						Remove
					  </button>
						</div>
				</div>
			</div>
		</div>
	</div>
		{{-- END PAGES --}}
	</div>
	</div>


	</div>



	
	{{-- Hidden editor Modals for editing elements --}}
	<x-editing.editimage/>
	<x-editing.cardimage/>
	<div id="modal" class="" style="position: absolute; display: none;">
		<div class="grid grid-cols-2 w-20 mx-full">
			<button class="rounded-full" id="removeElement">
				X
			</button>
		</div>
	  </div>


	  {{-- alpine accordion --}}
	  <script>
		document.addEventListener('alpine:init', () => {
		  Alpine.store('accordion', {
			tab: 0
		  });
		  
		  Alpine.data('accordion', (idx) => ({
			init() {
			  this.idx = idx;
			},
			idx: -1,
			handleClick() {
			  this.$store.accordion.tab = this.$store.accordion.tab === this.idx ? 0 : this.idx;
			},
			handleRotate() {
			  return this.$store.accordion.tab === this.idx ? 'rotate-180' : '';
			},
			handleToggle() {
			  return this.$store.accordion.tab === this.idx ? `max-height: ${this.$refs.tab.scrollHeight}px` : '';
			}
		  }));
		})
	  </script>
	<!-- !javascript -->
<script  type="text/javascript" src="{{asset('js/chosen_v1.8.7/chosen.jquery.js')}}"></script>
<script  type="text/javascript" src="{{asset('js/ckeditor4/ckeditor.js')}}"></script>
<script  type="text/javascript" src="{{asset('js/app.js')}}"></script>
<script  type="text/javascript" src="{{asset('js/flowbite.min.js')}}"></script>
<script  type="text/javascript" src="{{asset('js/pdfobject.min.js')}}"></script>
<script   type="text/javascript" src="{{asset('js/editorajax.js')}}"></script>
<script   type="text/javascript" src="{{asset('js/editorscript.js')}}"></script>
<script>
	
	$('#canvas').click(function(e) {
  e.stopPropagation();
  var clickedElement = e.target;
  var elementClass = clickedElement.classList.contains('edit') ? 'edit' : null;
  var threehierarchyClass = (clickedElement.closest('.edit2')) ? 'edit2' : null;
  var forPdf = (clickedElement.classList.contains('edit4')) ? 'edit4' : null;
  if (elementClass) {
	var parent = clickedElement.parentNode;
    var closebutton = parent.querySelector('#closecb4');
    // rest of the code

    if (!closebutton) {
      parent.classList.add('border-4', 'border-yellow-400');
      var closeButtonElem = document.createElement('button');
      closeButtonElem.id = 'closecb4';
      closeButtonElem.classList.add('closebtn', 'absolute', 'right-0', 'w-10', 'h-10', 'rounded-sm', 'bg-red-500');
      closeButtonElem.innerText = 'x';
      parent.appendChild(closeButtonElem);
      
      closeButtonElem.addEventListener('click', function() {
        parent.remove();
      });
    }
  }

  if(threehierarchyClass)
  {
	var parent = clickedElement.parentNode.parentNode;
    var closebutton = parent.querySelector('#closecb4');
    // rest of the code

    if (!closebutton) {
      parent.classList.add('border-4', 'border-yellow-400');
      var closeButtonElem = document.createElement('button');
      closeButtonElem.id = 'closecb4';
      closeButtonElem.classList.add('closebtn', 'absolute', 'right-0', 'w-10', 'h-10', 'rounded-sm', 'bg-red-500');
      closeButtonElem.innerText = 'x';
      parent.appendChild(closeButtonElem);
      
      closeButtonElem.addEventListener('click', function() {
        parent.remove();
      });
    }
  }



  if(forPdf)
  {
	var element = clickedElement;
    var closebutton = element.querySelector('#closecb4');
    // rest of the code

    if (!closebutton) {
		element.classList.add('border-4', 'border-yellow-400');
      var closeButtonElem = document.createElement('button');
      closeButtonElem.id = 'closecb4';
      closeButtonElem.classList.add('closebtn', 'absolute', 'right-0', 'w-10', 'h-10', 'rounded-sm', 'bg-red-500');
      closeButtonElem.innerText = 'x';
      element.appendChild(closeButtonElem);
      
      closeButtonElem.addEventListener('click', function() {
        element.remove();
      });
    }
  }
});


</script>

</body>

</html>
