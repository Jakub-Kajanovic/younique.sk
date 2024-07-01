@php
    function decodeAndAllowTags($content) {
        $decodedContent = html_entity_decode($content);
        return strip_tags($decodedContent, '<p><a><b><strong><i><em><ul><ol><li><br><img>');
    }
@endphp
<x-layout>
<section>
<div class="mx-auto container p-8 flex flex-col items-center gap-20">
    <img class="shadow-xl rounded-xl" src="https://placehold.co/1200x600" alt="">
    <div class="grid lg:grid-cols-3 grid-cols-1 gap-10 justify-items-center">
        <div class="col-span-2 flex flex-row gap-20">
            <div class="flex flex-col gap-4">
                <div class="flex flex-col lg:flex-row justify-between p-8">
                    <div>
                        <p>{{$blog->author}}</p>
                        <p>{{$blog->created_at}}</p>
                    </div>
                    <p>Odhadovaný čas čítania: {{ $readingTime }} minút</p>
                </div>
                <x-heading>{{$blog->title}}</x-heading>
                <x-paragraph>{!! decodeAndAllowTags($blog->content) !!}</x-paragraph>
            </div>
        </div>
        <div>
            <x-card class="space-y-4 sticky">
                <img src="/images/logo.svg" alt="">
                <div class="flex flex-row items-center gap-4">
                    <a class="hover:scale-110 hover:duration-700" href=""><i class="fa-brands fa-linkedin text-3xl text-lightBlue"></i></a>
                    <a class="hover:scale-110 hover:duration-700" href=""><i class="fa-brands fa-facebook text-3xl text-lightBlue"></i></a>
                    <a class="hover:scale-110 hover:duration-700" href=""><i class="fa-brands fa-instagram text-3xl text-lightBlue"></i></a>
                </div>
                <x-heading>
                    Sledujte nás na naších sociálnych sietach
                </x-heading>
            </x-card>
        </div>
    </div>
</div>
</section>
<section class="mx-auto container p-8">
    <x-heading class="text-center">Viac naších článkov</x-heading>
    <div class="h-auto flex mx-auto p-8">
        <swiper-container class="mySwiper lg:hidden flex" pagination="true" pagination-clickable="true" slides-per-view="1"
            space-between="30" free-mode="true" loop="true" autoplay-delay="2500" autoplay-disable-on-interaction="true">
        <x-blog-swiper :blog="$blog" slides-per-view="3" class="hidden lg:flex"/>
        </swiper-container>
        <swiper-container class="mySwiper hidden lg:flex" pagination="true" pagination-clickable="true" slides-per-view="3"
            space-between="30" free-mode="true" loop="true" autoplay-delay="2500" autoplay-disable-on-interaction="true">
        <x-blog-swiper :blog="$blog" slides-per-view="3" class="hidden lg:flex"/>
        </swiper-container>
    </div>
</section>
</x-layout>