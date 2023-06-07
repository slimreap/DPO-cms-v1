<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://cdn.tailwindcss.com"></script>
	<link defer rel="stylesheet" href="{{asset('/css/app.css')}}">
	<title>DPO Wmsu</title>
<style>
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
</head>

<body x-data class="overflow-x-hidden grid grid-rows-none">
 
  {!! $navigation_content !!}
  {{-- <div class="flex flex-col gap-2 justify-center items-center"> --}}
  {!! $canvas_content !!}
  {{-- </div> --}}
  {!! $footer_content !!}
  {{-- <script src="{{ asset('js/alpine.js') }}"></script> --}}
  @livewireScripts
  
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
  <script  type="text/javascript" src="{{asset('js/pdfobject.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/jquery/JQ.js')}}"></script>
  <script defer type="text/javascript" src="{{asset('js/app.js')}}"></script>
  {{-- <script type="text/javascript" src="{{asset('js/flowbite.js')}}"></script> --}}
<script>
	$(document).ready(function() {
    $('.pageform').each(function() {
        var url = window.location.href;
        var slug = url.substring(0, url.lastIndexOf("/")).substring(url.substring(0, url.lastIndexOf("/")).lastIndexOf("/") + 1);
        var decodedString = decodeURIComponent(slug);
        console.log(decodedString);
        var action = $(this).find('button').text().toLowerCase();
        this.setAttribute('action', `/${action}`);
    });


$('.cb4').each(function() {
    var $element = $(this);

    // Destroy the CKEditor instance

    // Remove the contentEditable attribute from the element
    $element.removeAttr('contentEditable');
});

$(".closebtn").remove();

    
});

</script>
<script>
	$(document).ready(function() {

		var buttons = document.getElementsByClassName('button');

// Iterate over the collection of elements
for (var i = 0; i < buttons.length; i++) {
  var anchor = document.createElement('a');
  var button = buttons[i];

  anchor.className = button.className;
  anchor.innerHTML = button.innerHTML;
  anchor.href = button.getAttribute('href');
  
  // Add additional classes to the anchor element
  anchor.classList.add('text-center', 'py-auto');

  button.parentNode.replaceChild(anchor, button);
}


// Restore original editable behavior for elements
var editableElements = document.querySelectorAll('[contenteditable="true"]');
editableElements.forEach(function(element) {
  element.removeAttribute('contenteditable');
});


	});
</script>
</body>
</html>


