<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://cdn.tailwindcss.com"></script>
	<link defer rel="stylesheet" href="{{asset('css/app.css')}}">
	<title>Preview</title>
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

<body x-data>

	@if ($canvas_content)
	{!! $navigation_content !!}
	{!! $canvas_content !!}
	{!! $footer_content !!}
@else
	@if ($navigation_content)
		{!! $navigation_content !!}
	@endif
@endif

  {{-- <script src="{{ asset('js/alpine.js') }}"></script> --}}
  @livewireScripts

  <script type="text/javascript" src="{{asset('js/jquery/JQ.js')}}"></script>
  <script defer type="text/javascript" src="{{asset('js/app.js')}}"></script>
  <script defer type="text/javascript" src="{{asset('js/previewjs.js')}}"></script>
  {{-- <script type="text/javascript" src="{{asset('js/flowbite.js')}}"></script> --}}

</body>
</html>


