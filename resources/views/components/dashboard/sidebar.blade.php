<section class="container h-full mx-0 px-0">
<div class="w-56 crimson h-full">

    <div class="flex flex-col gap-2">
        <span class="text-center pt-2 pb-3 font-semibold text-white">Editor Dashboard</span>

        <x-dashboard.button-dashboard title="Navbar" link="{{route('navbar.editor')}}"/>
        <x-dashboard.button-dashboard title="Hero" link="{{route('hero.editor')}}"/>
        <x-dashboard.button-dashboard title="News" link="{{route('news.editor')}}"/>
        <x-dashboard.button-dashboard title="Video" link="{{route('video.editor')}}"/>
        <x-dashboard.button-dashboard title="About us" link="{{route('aboutus.editor')}}"/>
        <x-dashboard.button-dashboard title="Articles" link="{{route('articles.editor')}}"/>
        <x-dashboard.button-dashboard title="Downloadables" link="{{route('downloadables.editor')}}"/>
        <x-dashboard.button-dashboard title="Magazine" link="{{route('magazine.editor')}}"/>
    </div>

</div>
</section>