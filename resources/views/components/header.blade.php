@php
    $categories = App\Models\Category::all();
    $blogs = App\Models\Blog::all();
    $referencies = App\Models\Reference::all();
    $courses = App\Models\Course::all();
    $podcasts = App\Models\Podcast::all();
@endphp
<header class="header">
    @auth
    <div class="bg-[gray] w-full py-1 px-6">
        <a class="text-sm font-bold" href="{{route('dashboard')}}">Admin Dashboard</a> 
    </div>
    @endauth
<div class="flex justify-between items-center container mx-auto gap-20">
    <nav class="nav container">
        <div class="nav__data">
            <a href="/" class="nav__logo z-[999]">
                <img src="/images/logo.svg" alt="Logo of Younique in SVG format">
            </a>
            <div class="nav__toggle z-[999]" id="nav-toggle">
                <i class="ri-menu-line nav__toggle-menu"></i>
                <i class="ri-close-line nav__toggle-close"></i>
            </div>
        </div>
        <!--=============== NAV MENU ===============-->
        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
                <li>
                    <a href="/" class="nav__link">Home</a>
                </li>
                <!--=============== DROPDOWN 1 ===============-->
                <li class="dropdown__item">                      
                    <div class="nav__link dropdown__button">
                        Blog<i class="ri-arrow-down-s-line dropdown__arrow"></i>
                    </div>

                    <div class="dropdown__container">
                        <div class="dropdown__content">
                            <div class="dropdown__group">
                                @if ($blogs->isNotEmpty())
                                @php
                                    $latestBlog = $blogs->first();
                                @endphp
                                <a href="{{ route('blog.show', $latestBlog->slug) }}" class="flex flex-row gap-4 flex-wrap max-w-60 cursor-pointer">
                                    <img class="w-60 rounded-lg" src="{{ asset('storage/' . $latestBlog->image) }}">
                                    <h2 class="text-sm font-semibold">{{ $latestBlog->title }}</h2>
                                </a>
                            @else
                                <h2>Nový blog už čoskoro</h2>
                            @endif                            
                                <span class="dropdown__title">Novinka</span>
                            </div>
                            <div class="dropdown__group">
                                <span class="dropdown__title"><a href="{{route('clanky')}}">Všetky články</a></span>
                            </div>
                        </div>
                    </div>
                </li>

                <!--=============== DROPDOWN 2 ===============-->
                <li class="dropdown__item">
                    <div class="nav__link dropdown__button">
                        Programy <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                    </div>

                    <div class="dropdown__container">
                        <div class="dropdown__content">
                            <div class="dropdown__group">
                                <div class="dropdown__icon">
                                    <i class="ri-code-line"></i>
                                </div>
                                <span class="dropdown__title"><a href="{{route('program-pre-mladych')}}">Program pre mladých</a></span>
                            </div>
                            <div class="dropdown__group">
                                <div class="dropdown__icon">
                                    <i class="ri-pen-nib-line"></i>
                                </div>
                                <span class="dropdown__title"><a href="{{route('program-pre-dospelych')}}">Program pre dospelých</a></span>
                            </div>
                        </div>
                    </div>
                </li>

                <li>
                    <a href="{{route('contact')}}" class="nav__link">Kontakt</a>
                </li>

                <li>
                    <a href="{{route('o-nas')}}" class="nav__link">O nás</a>
                </li>
                <div class="flex flex-col gap-12 w-full lg:hidden p-8">
                    <a href="tel:+421911701077" class="text-center rounded-md px-3 py-3 bg-[#C76CD7] text-[#fff] hover:scale-110 hover:duration-700 hover:bg-[#ed88ff]">+421 911 701 077</a>
                    <x-button-primary class="px-8">Kontakt</x-button-primary>
                </div>
            </li>
        </ul>
    </nav>
    <div class="lg:flex flex-row gap-12 w-1/2  ml-20 hidden">
        <a href="tel:+421911701077" class="rounded-md px-3 py-3 bg-[#C76CD7] text-[#fff] hover:scale-110 hover:duration-700 hover:bg-[#ed88ff]">+421 911 701 077</a>
        <x-button-primary class="px-8">Kontakt</x-button-primary>
    </div>
</div>
</header>