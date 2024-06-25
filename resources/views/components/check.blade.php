
<div class="flex flex-row gap-2">
    <img src="{{Vite::asset('resources/images/check.svg')}}" alt="Check svg symbol">
    <p {{$attributes(['class' => 'text-[18px] font-semibold text-[#424242]'])}}>{{$slot}}</p>
</div>