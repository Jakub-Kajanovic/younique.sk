@php
    $otherReferences = App\Models\Reference::where('type', 'other')->get();
@endphp
<swiper-container {{$attributes(['class' => 'mySwiper'])}} pagination="true" pagination-clickable="true" slides-per-view="{{$slot}}"
    space-between="30" free-mode="true" loop="true" autoplay-delay="2500" autoplay-disable-on-interaction="true">
    @foreach ($otherReferences as $reference)
    <swiper-slide class="bg-[#F8F8F8] rounded-lg shadow-md p-8">
        <div class="flex flex-row gap-10 items-center">
            <img src="https://placehold.co/60x60" class="rounded-full" alt="">
            <div>
                <h2 class="text-[16px] font-semibold ">{{$reference->name}}</h2>
                <p class="text-[12px] font-semibold">{{$reference->place}}</p>
            </div>
        </div>
        <div class="flex flex-wrap mt-8 italic font-semibold">
            "{{$reference->content}}""
        </div>
    </swiper-slide>
    @endforeach

    </swiper-container>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>