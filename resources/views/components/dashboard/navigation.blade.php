<nav id="nav">
<div x-data="{ isOpen: false }" id="navcontainer" class="relative flex shadow h-20 w-screen max-h-20">
    <div class="w-20 sm:hidden md:block lg:block">
        <a id="homeurl" href="">
        <img id="homepage" src="{{asset('storage/images/WMSU.png')}}" class="w-20 h-18 p-2 flex rounded-full" alt="">
        </a>
    </div>

    <div class="container px-2 py-3 mx-2 md:flex">

        <div class="flex items-center justify-between">
            <!-- !Mobile menu button -->
            <div class="flex lg:hidden md:hidden">
                <button x-cloak @click="isOpen = !isOpen" type="button" class="text-white focus:outline-none" aria-label="toggle menu">
                    <svg x-show="!isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 8h16M4 16h16" />
                    </svg>

                    <svg x-show="isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
        <div x-cloak :class="[isOpen ? 'translate-x-0 opacity-100 ' : 'opacity-0 -translate-x-full']" id="mobilenavcontainer" class="absolute inset-x-0 z-20 w-full px-6 py-4 transition-all duration-300 ease-in-out md:mt-0 md:p-0 md:top-0 md:relative md:opacity-100 md:translate-x-0 md:flex md:items-center md:justify-between">
            {{-- <img src="{{asset('storage/images/WMSU.png')}}" class="w-20 h-16 p-2 sm-flex md:hidden lg:hidden rounded-full block" alt=""> --}}

            <div class="flex flex-col px-2 mx-4 md:flex-row md:mx-10 md:py-0" id="navigation">

            </div>

        </div>
    </div>
</div>
</nav>

