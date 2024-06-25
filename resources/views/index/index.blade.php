<x-layout>
   <section class="main">
    <div class="container mx-auto grid lg:grid-cols-2 p-8 lg:pt-20">
    <div class="flex flex-col gap-10">
        <x-heading class="lg:w-[90%] md:w-full w-[80%]"><span class="text-lightBlue">YouNique spájame</span>, psychológiu
            koučing a kariérne poradenstvo.</x-heading>
        <div class="flex flex-col gap-2">
            <x-paragraph>
                Zistíme, aká škola alebo práca je pre teba tá správna. Vďaka spojeniu 3 odborníkovmôžeš aj TY naplno využívať svoje schopnosti.
            </x-paragraph>
            <x-paragraph>
                Študuj a rob, čo ti ide prirodzene a baví ťa!
            </x-paragraph>
        </div>
        <div>
            <x-button-primary class="px-6" href="/">Pripojiť sa na kurz</x-button-primary>
        </div>
        <div class="flex flex-row gap-4 items-center">
            <h2 class="font-semibold text-xl text-lightGray">Zdielať - </h2>
            <a class="hover:scale-110 hover:duration-700" href=""><i class="fa-brands fa-linkedin text-2xl text-lightBlue"></i></a>
            <a class="hover:scale-110 hover:duration-700" href=""><i class="fa-brands fa-facebook text-2xl text-lightBlue"></i></a>
            <a class="hover:scale-110 hover:duration-700" href=""><i class="fa-brands fa-instagram text-2xl text-lightBlue"></i></a>
        </div>
    </div>
    <div class="py-10 lg:py-0">
        <img src="https://placehold.co/600x400" alt="">
    </div>
    </div>
    <div class="container mx-auto grid grid-cols-1 lg:grid-cols-3 gap-20 py-20 p-8">
        <x-card>
            <img src="{{Vite::asset('/resources/images/lightbulb.svg')}}" alt="">
            <h2 class="font-semibold text-xl text-[#000] mt-4">SCHOPNOSTI</h2>
            <x-paragraph class="mt-4 font-semibold">
                Využi, čo ti ide prirodzene.
            </x-paragraph>
        </x-card>
        <x-card>
            <img src="{{Vite::asset('/resources/images/robot.svg')}}" alt="">
            <h2 class="font-semibold text-xl text-[#000] mt-4">OSOBNOSŤ</h2>
            <x-paragraph class="mt-4 font-semibold">
                Rozhoduj sa podľa seba.
            </x-paragraph>
        </x-card>
        <x-card>
            <img src="{{Vite::asset('/resources/images/medal.svg')}}" alt="">
            <h2 class="font-semibold text-xl text-[#000] mt-4">DLHODOBÉ ZÁUJMY</h2>
            <x-paragraph class="mt-4 font-semibold">
                Rob,čo ťa naozaj baví.
            </x-paragraph>
        </x-card>
    </div>
   </section>
   <section class="purple-finger bg-[#C7DAFC]">
    <div class="grid grid-cols-1 lg:grid-cols-2 container mx-auto gap-20 py-20 p-8">
        <div class="flex flex-col gap-10">
            <x-heading>Potrebuje váš teeneger zvýšiť sebadôveru?</x-heading>
            <x-paragraph>
                Ak si váš teenager neverí, nepomôže hovoriť mu, že je šikovný. Vo videu vám prezradíme 2 spôsoby, ako mu môžete zvýšiť sebadôveru.
            </x-paragraph>
            <div class="flex flex-col gap-4">
                <x-check>
                    Váš teenager POTREBUJE ZVLÁDNUŤ nové činnosti,aby si v nich začal veriť
                </x-check>
                <x-check>
                    To, čo vášmu teenagerovi IDE PRIRODZENE, vie využiť aj neskôr v práci.
                </x-check>
                <div class="mt-4">
                    <x-button-primary class="px-6">Pripojiť sa na kurz</x-button-primary>
                </div>
            </div>
        </div>
        <div>
            <img src="https://placehold.co/600x400" alt="">
        </div>
    </div>
   </section>
   <section class="job p-2 mx-auto container">
    <x-heading class="text-center py-20">
        Vyber si správnu <span class="text-lightBlue">prácu</span> a rob, čo ťa <span class="text-lightPurple">baví</span>
    </x-heading>
    <div class="grid grid-cols-1 lg:grid-cols-2 container mx-auto gap-20 pb-20 p-8">
        <x-card class="p-12">
            <x-heading class="text-center py-10">
                Program <span class="text-lightBlue">pre mladých</span>
            </x-heading>
                <div class="flex flex-col gap-4">
                    <x-check>
                        na akú školu/povolania máš predpoklady
                    </x-check>
                    <x-check>
                        tvoje nadanie, osobnosť a dlhodobé záujmy
                    </x-check>
                    <x-check>
                        či zvládneš školu, ktorú zvažuješ
                    </x-check>
                    <x-check>
                        tvoje silné a slabé stránky a čo s tým
                    </x-check>
                    <x-check>
                        poradíš sa s koučom a kariérnym poradcom
                    </x-check>
                </div>
            <p class="py-10 font-medium text-xl text-center">Vyber si správnu strednú alebo vysokú školu.<br> Zisti, ktorá práca je pre teba.</p>
            <p class="text-center text-lightBlue text-3xl font-bold">497 €</p>
            <div class="text-center mt-10">
                <x-button-primary>Pripojiť sa na kurz</x-button-primary>
            </div>
        </x-card>
        <x-card class="p-12">
            <x-heading class="text-center py-10">
                Program <span class="text-lightBlue">pre mladých</span>
            </x-heading>
                <div class="flex flex-col gap-4">
                    <x-check>
                        na aké povolania a činnosti máš predpoklady
                    </x-check>
                    <x-check>
                        schopnosti, osobnosť a dlhodobé záujmy
                    </x-check>
                    <x-check>
                        silné stránky a čo s nimi, aby sa ti viac darilo
                    </x-check>
                    <x-check>
                        slabé stránky a čo s nimi, aby ti neškodili
                    </x-check>
                    <x-check>
                        dôležité rozhodnutie odkonzultuješ s koučom a kariérnym poradcom
                    </x-check>
                    <x-check>
                        uistíme ťa, či vziať zaujímavú prácu, povýšenie alebo podnikať
                    </x-check>
                </div>
            <p class="py-10 font-medium text-xl text-center">Vyber si správnu strednú alebo vysokú školu.<br> Zisti, ktorá práca je pre teba.</p>
            <p class="text-center text-lightBlue text-3xl font-bold">497 €</p>
            <div class="text-center mt-10">
                <x-button-primary>Pripojiť sa na kurz</x-button-primary>
            </div>
        </x-card>
    </div>
    <x-box>
        <div class="flex flex-row gap-10">
            <h3 class="font-bold text-2xl">200 + Mladých</h3>
        </div>
        <div class="flex flex-row gap-10">
            <h3 class="font-bold text-2xl">120 + Dospelých</h3>
        </div>
        <div class="flex flex-row gap-10">
            <h3 class="font-bold text-2xl">98% Spokojných klientov</h3>
        </div>
        <div class="flex flex-row gap-10">
            <h3 class="font-bold text-2xl">+ 600h Poradenstva</h3>
        </div>
    </x-box>
    </section>
    <section class="job-cast py-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 container mx-auto gap-20 py-20 p-8">
            <div class="flex flex-col gap-4">
                <x-heading>JOBCAST - podcast o povolaniach, ktoré mladých najviac zaujímajú.</x-heading>
                <x-paragraph>Rád/a programuješ? Ak slová ako PHP, API rozhranie a podobné patria do tvojho
                    slovníka, môže byť práca phyton developera aj pre teba.</x-paragraph>
                <x-button-primary>Vypočuť si</x-button-primary>
            </div>
            <div>
                <img class="600x400" src="https://placehold.co/600x400"></img>
            </div>
        </div>
    </section>
    <section class="bg-[#C7DAFC] purple-finger">
        <div class="container mx-auto py-20 p-8">
            <x-heading>Ako sa im náš program páčil?</x-heading>
        </div>
        <div class="h-auto flex mx-auto p-8">
            <x-swiper-mix slides-per-view="3"/>
        </div>
        <div class="mx-auto container text-center py-20">
            <x-button-primary>Pripojiť sa na kurz</x-button-primary>
        </div>
    </section>
    <x-footer/>
</x-layout>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>