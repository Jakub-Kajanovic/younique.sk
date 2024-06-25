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
            <a href="#" class="nav__logo">
                <img src="{{Vite::asset('resources/images/logo.svg')}}" alt="Logo of Younique in SVG format">
            </a>
            <div class="nav__toggle" id="nav-toggle">
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
                                @foreach ($blogs as $blog)
                                <div class="dropdown__icon">
                                    <img src="{{ asset('storage/' . $blog->image) }}" alt="Blog Image">
                                </div>
                                @endforeach
                                <span class="dropdown__title">Novinka</span>

                                <ul class="dropdown__list">
                                    <li>
                                        <a href="#" class="dropdown__link">HTML for beginners</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Advanced CSS</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">JavaScript OOP</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="dropdown__group">
                                <div class="dropdown__icon">
                                    <i class="ri-heart-3-line"></i>
                                </div>

                                <span class="dropdown__title">Popular courses</span>

                                <ul class="dropdown__list">
                                    <li>
                                        <a href="#" class="dropdown__link">Development with Flutter</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Web development with React</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Backend development expert</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="dropdown__group">
                                <div class="dropdown__icon">
                                    <i class="ri-book-mark-line"></i>
                                </div>

                                <span class="dropdown__title">Careers</span>

                                <ul class="dropdown__list">
                                    <li>
                                        <a href="#" class="dropdown__link">Web development</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Applications development</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">UI/UX design</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Informatic security</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="dropdown__group">
                                <div class="dropdown__icon">
                                    <i class="ri-file-paper-2-line"></i>
                                </div>

                                <span class="dropdown__title">Certifications</span>

                                <ul class="dropdown__list">
                                    <li>
                                        <a href="#" class="dropdown__link">Course certificates</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Free certifications</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>

                <!--=============== DROPDOWN 2 ===============-->
                <li class="dropdown__item">
                    <div class="nav__link dropdown__button">
                        Resources <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                    </div>

                    <div class="dropdown__container">
                        <div class="dropdown__content">
                            <div class="dropdown__group">
                                <div class="dropdown__icon">
                                    <i class="ri-code-line"></i>
                                </div>

                                <span class="dropdown__title">Web templates</span>

                                <ul class="dropdown__list">
                                    <li>
                                        <a href="#" class="dropdown__link">Free templates</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Premium templates</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="dropdown__group">
                                <div class="dropdown__icon">
                                    <i class="ri-pen-nib-line"></i>
                                </div>

                                <span class="dropdown__title">Designs</span>

                                <ul class="dropdown__list">
                                    <li>
                                        <a href="#" class="dropdown__link">Web designs</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">App designs</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Component design</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="dropdown__group">
                                <div class="dropdown__icon">
                                    <i class="ri-apps-2-line"></i>
                                </div>

                                <span class="dropdown__title">Others</span>

                                <ul class="dropdown__list">
                                    <li>
                                        <a href="#" class="dropdown__link">Recent blogs</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Tutorial videos</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Webinar</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>

                <li>
                    <a href="{{route('o-nas')}}" class="nav__link">O nás</a>
                </li>

                <!--=============== DROPDOWN 3 ===============-->
                <li class="dropdown__item">                        
                    <div class="nav__link dropdown__button">
                        Company <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                    </div>

                    <div class="dropdown__container">
                        <div class="dropdown__content">
                            <div class="dropdown__group">
                                <div class="dropdown__icon">
                                    <i class="ri-community-line"></i>
                                </div>

                                <span class="dropdown__title">About us</span>

                                <ul class="dropdown__list">
                                    <li>
                                        <a href="#" class="dropdown__link">About us</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Support</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Contact us</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="dropdown__group">
                                <div class="dropdown__icon">
                                    <i class="ri-shield-line"></i>
                                </div>

                                <span class="dropdown__title">Safety and quality</span>

                                <ul class="dropdown__list">
                                    <li>
                                        <a href="#" class="dropdown__link">Cookie settings</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Privacy Policy</a>
                                    </li>
                                </ul>
                            </div>
                    </div>
                </div>
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