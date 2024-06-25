<swiper-container {{$attributes(['class' => 'mySwiper'])}} pagination="true" pagination-clickable="true" slides-per-view="{{$slot}}"
    space-between="30" free-mode="true" loop="true" autoplay-delay="2500" autoplay-disable-on-interaction="true">
        <swiper-slide class="bg-[#F8F8F8] rounded-lg shadow-md p-8">
            <div class="flex flex-row gap-10 items-center">
                <img src="https://placehold.co/60x60" class="rounded-full" alt="">
                <div>
                    <h2 class="text-[16px] font-semibold ">Anna Vymyslená</h2>
                    <p class="text-[12px] font-semibold">Fakulta komenského</p>
                </div>
            </div>
            <div class="flex flex-wrap mt-8 italic font-semibold">
                “lorem Ipsum, dolor et serius, et domino padre, nominom et filus sakte” 
            </div>
        </swiper-slide>
    </swiper-container>