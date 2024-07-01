@php
    $blogs = App\Models\Blog::all();
@endphp
    @foreach ($blogs as $blog)
    <swiper-slide>
            <div class="flex flex-wrap max-w-80 items-center gap-2">
                <img class="rounded-xl" width="300" height="300" src="{{ asset('storage/' . $blog->image) }}" alt="">
                <h2 class="font-semibold text-xl">{{$blog->title}}</h2>
                <a href="{{route('blog.show', $blog->slug)}}" class="hover:text-lightBlue">Čítaj viac <span class="underline">tu!</span></a>
            </div>
    </swiper-slide>
    @endforeach
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>