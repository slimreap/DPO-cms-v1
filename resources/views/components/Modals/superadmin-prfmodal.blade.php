<div class="container absolute z-10 bg-slate-500 h-44 mx-auto mt-20" 
x-data="{ open: false }"
x-show="open"
x-on:open-modal-2.window="open = true"
x-on:click.outside="open=false"
x-on:keyup.escape.window="open = false"
>    
            {{$slot}}

</div>