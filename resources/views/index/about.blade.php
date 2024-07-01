@php
    function decodeAndAllowTags($short_bio) {
        $decodedContent = html_entity_decode($short_bio);
        return strip_tags($decodedContent, '<p><a><b><strong><i><em><ul><ol><li><br><img>');
    }
    function decodeAndAllowTags2($bio) {
        $decodedContent2 = html_entity_decode($bio);
        return strip_tags($decodedContent2, '<p><a><b><strong><i><em><ul><ol><li><br><img>');
    }
@endphp
<x-layout>
<section class="purple-finger">
<div class="mx-auto container flex flex-col items-center gap-10 p-8">
    <h2 class="text-md text-center text-lightBlue lg:py-10">O nás</h2>
    <x-heading class="text-center">Lorem ipsum dolor i domeis i pandre</x-heading>
    <img src="https://placehold.co/1200x500" class="rounded-xl" alt="">
    <x-box>
        <div class="flex flex-row gap-10">
            <h3 class="font-bold text-2xl">200 + Mladých</h3>
        </div>
        <div class="flex flex-row gap-10">
            <h3 class="font-bold text-2xl">120 + Dospelých</h3>
        </div>
        <div class="flex flex-row gap-10">
            <h3 class="font-bold text-2xl">20+ workshopov</h3>
        </div>
        <div class="flex flex-row gap-10">
            <h3 class="font-bold text-2xl">+ 600h Poradenstva</h3>
        </div>
    </x-box>
</div>
</section>
<section class="p-10 container mx-auto">
    <div class="bg-[white] rounded-xl p-8 flex flex-col gap-6">
        <article class="flex flex-col gap-4">
        <x-heading class="text-lightBlue">
            Náš príbeh
        </x-heading>
        <x-paragraph>
        Sme Biba a Lucia. Keď sme sa spoznali, obe sme mali prácu, ktorá nás nenapĺňala. Nemali sme jasno, čo chceme
        vlastne robiť, ale boli sme rozhodnuté to zistiť. Potom prišiel Covid a my sme zrazu mali čas hľadať odpovede.
        Absolvovali sme množstvo testov, ktoré nám postupne odhalili, v čom sme prirodzene dobré.
        </x-paragraph>
        <x-paragraph>
        Tieto výsledky nás natoľko ohromili, že sme chceli zistiť viac o sebe a svojich schopnostiach. Fascinovalo nás, ako
        jasne testy ukazujú schopnosti, osobnosti a skutočné záujmy. Predstavte si, aké by to bolo, keby naše deti vedeli, v
        čom sú naozaj dobré! O čo viac by sa im darilo, keby si vybrali školu a prácu, na ktorú majú nadanie a ktorá im
        sedí?
        </x-paragraph>
        <x-paragraph>
            Pustili sme sa do práce. Spolu so skúsenou psychologičkou sme vytvorili <span class="text-lightBlue">Program pre mladých</span>. Po roku pilotného
            testovania sme začali pomáhať mladým rozhodovať sa o správnej strednej alebo vysokej škole. Dodnes sme
            otestovali <span class="text-lightBlue">viac ako 200 mladých</span>, vrátane našich vlastných detí. Spolupracujeme so skúsenými psychologičkami a
            na základe výsledkov vieme <span class="text-lightBlue">odporučiť nielen správnu školu a povolanie</span>, ale aj <span class="text-lightBlue">poradiť s konkrétnymi
                problémami.</span>
        </x-paragraph>
        <x-paragraph>
            Po dvoch rokoch úspešného testovania nás začali oslovovať rodičia mladých s otázkou, či vieme pomôcť aj im.
            Chceli vedieť, na akú prácu majú najlepšie predpoklady, <span class="text-lightBlue">či majú prijať povýšenie, zmeniť zamestnanie alebo
                začať podnikať</span>. Spolupracovali sme už s viacerými psychologičkami a preto sme spolu s nimi vyvinuli Program
            pre dospelých. Dnes pomáhame jednotlivcom aj firmám, ktoré chcú overiť, či sa konkrétny uchádzač hodí na danú
            pozíciu
        </x-paragraph>
            <x-paragraph><span class="text-lightBlue mt-6">Objavte s nami svoje silné stránky a dosiahnite ľahšie úspech a spokojnosť v osobnom i pracovnom živote.</span>
        </x-paragraph>
        </article>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-3 lg:mt-20 gap-16">
        <x-card class="flex flex-col gap-4">
            <x-heading class="text-center text-lightPurple">
                Úprimnosti
            </x-heading>
            <x-paragraph class="text-center">
                Záleží nám na vzájomnej dôvere. Povieme vám, čo potrebujete počuť. Niekedy to nemusí byť príjemné. Preto vám výsledky a odporúčania podáme zrozumiteľne a citlivo
            </x-paragraph>
        </x-card>
        <x-card class="flex flex-col gap-4">
            <x-heading class="text-center text-lightPurple">
                Odbornosti
            </x-heading>
            <x-paragraph class="text-center">
                Naše programy zmenia váš pohľad na vaše dieťa alebo na vás samých. Preto sa nehráme a nestačia nám rozhovory, ale testujeme. Spolupracujeme s odborníkmi, ktorým dôverujeme.            </x-paragraph>
        </x-card>
        <x-card class="flex flex-col gap-4">
            <x-heading class="text-center text-lightPurple">
                Autenticite
            </x-heading>
            <x-paragraph class="text-center">
                Stojíme si za tým, čo robíme. Veríme, že ak si rozumieme, vieme byť autentickí.
                A život je ľahší.
            </x-paragraph>
        </x-card>
    </div>
</section>
@foreach ($authors as $author)
    @if ($loop->iteration % 2 == 0)
        <section id="{{$author->id}}" class="lg:py-20 blue-finger">
    @else
        <section id="{{$author->id}}" class="lg:py-20 bg-[#C7DAFC] purple-finger">
    @endif
        <div class="grid grid-cols-1 lg:grid-cols-2 mx-auto gap-20 justify-items-center container p-8">
            @if ($loop->iteration % 2 == 0)
                <img class="w-[400px]" src="{{asset('storage/' . $author->photo)}}" class="rounded-xl" alt="">
                <div class="flex flex-col gap-10">
                    <x-heading class="text-lightBlue">
                        {{$author->name}}
                    </x-heading>
                    <div>
                        {!! decodeAndAllowTags($author->short_bio) !!}
                    </div>
                    <x-paragraph>
                        {!! decodeAndAllowTags2($author->bio) !!}
                    </x-paragraph>
                    <div class="flex flex-row gap-4">
                        <a class="hover:scale-110 hover:duration-700" target="__blank" href="{{$author->linkedin}}"><i class="fa-brands fa-linkedin text-3xl text-lightBlue"></i></a>
                        <a class="hover:scale-110 hover:duration-700" target="__blank" href="{{$author->facebook}}"><i class="fa-brands fa-facebook text-3xl text-lightBlue"></i></a>
                        <a class="hover:scale-110 hover:duration-700" target="__blank" href="{{$author->instagram}}"><i class="fa-brands fa-instagram text-3xl text-lightBlue"></i></a>
                    </div>
                </div>
            @else
                <div class="flex flex-col gap-10">
                    <x-heading class="text-lightBlue">
                        {{$author->name}}
                    </x-heading>
                    <div>
                        {!! decodeAndAllowTags($author->short_bio) !!}
                    </div>
                    <x-paragraph>
                        {!! decodeAndAllowTags2($author->bio) !!}
                    </x-paragraph>
                    <div class="flex flex-row gap-4">
                        <a class="hover:scale-110 hover:duration-700" target="__blank" href="{{$author->linkedin}}"><i class="fa-brands fa-linkedin text-3xl text-lightBlue"></i></a>
                        <a class="hover:scale-110 hover:duration-700" target="__blank" href="{{$author->facebook}}"><i class="fa-brands fa-facebook text-3xl text-lightBlue"></i></a>
                        <a class="hover:scale-110 hover:duration-700" target="__blank" href="{{$author->instagram}}"><i class="fa-brands fa-instagram text-3xl text-lightBlue"></i></a>
                    </div>
                </div>
                <img class="w-[400px]" src="{{asset('storage/' . $author->photo)}}" class="rounded-xl" alt="">
            @endif
        </div>
    </section>
@endforeach
<section class="py-20 blue-finger bg-[#C7DAFC]">
    <div class="mx-auto container p-8">
        <x-heading class="pb-20">
            Tu sme sa mohli vidieť
        </x-heading>
        <div class="grid lg:grid-cols-2 gap-20">
           <div class="flex flex-col gap-6">
                <x-heading class="text-sm">
                    Spoluorganizujeme
                </x-heading>
                <ul class="text-lightGray font-semibold text-[20px] space-y-2">
                    <li>Prednášky a workshopy na témy,
                        ktorým najlepšie rozumieme.</li>
                    <li>Podujatie Mladá Bratislava.</li>
                    <li>Workshopový event Be Hired od Beluminary</li>
                    <li>Growni Koktejl</li>
                    <li>Webináre pre rodičov budúcich stredoškolákov</li>
                </ul>
           </div>
            <div class="flex flex-col gap-6">
                <x-heading class="text-sm">
                    Spoluorganizujeme
                </x-heading>
                <ul class="text-lightGray font-semibold text-[20px] space-y-2">
                    <li>Vyberáme si podujatia s inšpiratívnymi spíkrami na témy, ktoré sú nám blízke..</li>
                    <li>Podujatie Mladá Bratislava.</li>
                    <li>Networkujeme a podporujeme sa navzájom so ženami, ktoré podnikajú alebo
                        podnikanie zvažujú.</li>
                    <li>WomanUp eventy</li>
                    <li>Brand Talks Effectix</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="slider my-20" style="
            --width: 380px;
            --height: 253px;
            --quantity: 10;
        ">
            <div class="list">
                <div class="item" style="--position: 1"><img src="https://placehold.co/150x100" alt=""></div>
                <div class="item" style="--position: 2"><img src="https://placehold.co/150x100" alt=""></div>
                <div class="item" style="--position: 3"><img src="https://placehold.co/150x100" alt=""></div>
                <div class="item" style="--position: 4"><img src="https://placehold.co/150x100" alt=""></div>
                <div class="item" style="--position: 5"><img src="https://placehold.co/150x100" alt=""></div>
                <div class="item" style="--position: 6"><img src="https://placehold.co/150x100" alt=""></div>
                <div class="item" style="--position: 7"><img src="https://placehold.co/150x100" alt=""></div>
                <div class="item" style="--position: 8"><img src="https://placehold.co/150x100" alt=""></div>
                <div class="item" style="--position: 9"><img src="https://placehold.co/150x100" alt=""></div>
                <div class="item" style="--position: 10"><img src="https://placehold.co/150x100" alt=""></div>
            </div>
        </div>
</section>
<section class="">
    <div class="flex flex-col mx-auto container p-8 py-20 text-center gap-10">
        <x-heading>
            Ako sa môžeš zapojiť?
        </x-heading>
        <div>
            <x-button-primary class="px-12">
                Pripojiť sa na kurz
            </x-button-primary>
        </div>
    </div>
</section>
</x-layout>