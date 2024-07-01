<x-layout>
    <section class="py-20 purple-finger p-8">
        <div class="mx-auto container flex flex-col">
            <h1 class="text-lightBlue text-center font-semibold pb-10">Články</h1>
            <img src="https://placehold.co/1200x500" class="rounded-xl" alt="">
        </div>
    </section>
    <section class="mx-auto container p-8">
        <div class="flex lg:flex-row flex-col gap-4 pb-20">
            <x-tag><a href="{{route('clanky')}}#blogs">Všetky články</a></x-tag>
            @foreach ($categories as $category)
                <x-tag><a href="{{ route('clanky', ['category_id' => $category->id]) }}#blogs">{{ $category->name }}</a></x-tag>
            @endforeach
        </div>
        <div class="grid lg:grid-cols-3 grid-cols-1 gap-10 justify-items-center">
            <div class="col-span-2 flex flex-row gap-20 lg:mr-10">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-20" id="blogs">
                    @foreach ($blogs as $blog)
                    <a href="{{route('blog.show', $blog->slug)}}" class="flex flex-col gap-6 group hover:-translate-y-6 transition duration-700">
                        <img class="rounded-xl" src="{{asset('storage/' . $blog->image)}}" alt="">
                        <div class="flex flex-col gap-2">
                            <h3 class="group-hover:text-lightBlue font-semibold text-[20px]">
                                {{ $blog->title }}
                            </h3>
                            <p class="text-md group-hover:text-lightBlue">
                                {{$blog->featured_text}}
                            </p>
                            <p class="group-hover:text-lightBlue">{{$blog->created_at}}</p>
                        </div>
                    </a> 
                    @endforeach
                </div>   
            </div>
            <div class="lg:p-0 py-10">
                <x-card class="space-y-4">
                    <img src="images/logo.svg" alt="">
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
    </section>
</x-layout>