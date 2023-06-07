<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editor Landing Page</title>
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet"> 
<style>
h1 {
  /* -webkit-text-stroke: 0.02rem black; */
  color: white;
  font: bold;
  font-family: 'Poppins', sans-serif;
}
  </style>
  
</head>
<body class="bg-beige">
    <header class="bg-crimson shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 text-center">

            <h1 class="text-3xl h-full font-extrabold text-white text-stroke text-stroke-yellow">
               <b>Editor Page</b> 
            </h1>
        </div>
    </header>

    <main class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8 ">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            
            <div class="bg-beige overflow-hidden shadow rounded-lg">
                <a href="{{route('editorpage')}}" class="block hover:bg-[#e06469] transition duration-150 ease-in-out">
                    <img src="https://via.placeholder.com/640x480.png" alt="Thumbnail" class="w-full h-48 object-cover">
                    <div class="p-4 ">
                        <h2 class="text-base font-medium text-gray-900 truncate">Create new theme</h2>
                        {{-- <p class="text-sm font-medium text-gray-500">Description of Custom Page 1</p> --}}
                    </div>
                </a>
            </div> 

            @foreach ($themes as $theme)
            <div class="overflow-hidden shadow bg-beige rounded-lg">
                <a href="{{route('editorpage', ['themename' => $theme->name])}}" class="block hover:bg-[#e06469] focus:outline-none focus:bg-gray-50 transition duration-150 ease-in-out">
                    <img src="https://via.placeholder.com/640x480.png" alt="Thumbnail" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h2 class="text-base font-medium text-gray-900 truncate">{{$theme->name}}</h2>
                        {{-- <p class="text-sm font-medium text-gray-500">Description of Custom Page 1</p> --}}
                    </div>
                </a>
            </div> 
            @endforeach


            <!-- Add more custom pages here -->
        </div>
    </main>
</body>
</html>
