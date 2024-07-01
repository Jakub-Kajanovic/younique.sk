<x-layout>
    <section class="purple-finger">
        <div class="container mx-auto grid lg:grid-cols-2 p-8 lg:pt-20">
                <div class="flex flex-col gap-10">
                    <x-heading class="lg:w-[90%] md:w-full w-[80%] text-lightBlue">Program pre  mladých
                    </x-heading>
                    <h2 class="text-xl md:text-2xl lg:text-4xl text-[#424242] font-semibold lg:w-[90%] md:w-full w-[80%]">Vaše dieťa bude šťastnejšie, ak bude robiť to, na čo má nadanie a baví ho.</h2>
                        <x-paragraph>
                            Žijeme vo svete, kde už nestačí byť šikovný. Treba si vedieť aj dobre vybrať.
                        </x-paragraph>
                    <div>
                        <x-button-primary class="px-6" href="/">Pripojiť sa na kurz</x-button-primary>
                    </div>
                </div>
                <div class="py-10 lg:py-0">
                    <img src="https://placehold.co/600x400" alt="">
                </div>
            </div>
            <div class="flex items-start container lg:py-32 mx-auto p-8">
                <x-paragraph class="w-[80%]">
                    Keď si vyberáte auto, poradíte sa s predajcom. Pri kúpe bytu sa spoľahnete na realitného makléra. 
                    Nespoliehajte sa pri výbere školy iba na to, v ktorých predmetoch má vaše dieťa dobré známky. 
                    Ani  ho nesmerujte podľa vašich predstáv.
                </x-paragraph>
            </div>
    </section>
    <section>
        <div class="mx-auto container p-8">
            <x-heading class="text-[#424242] py-20">Zistite s nami skutočné <span class="text-lightBlue">schopnosti, osobnosť<br>
                a dlhodobé záujmy</span> vášho dieťaťa.
            </x-heading>
        
            <x-small-box>           
                <div class="flex flex-row gap-10">
                    <h3 class="font-bold text-2xl">200 + Odovzdaných výsledkov</h3>
                </div>
                <div class="flex flex-row gap-10">
                    <h3 class="font-bold text-2xl">98% Hodín poradenstva</h3>
                </div>
                <div class="flex flex-row gap-10">
                    <h3 class="font-bold text-2xl">600 + hodín testovania</h3>
                </div>
            </x-small-box>
            <div class="flex flex-col gap-10 py-20">
                <x-heading>Dáte mu tak sebadôveru a istotu, kam chce v živote smerovať.</x-heading>
                <x-heading>A to je tá najlepšia motivácia.</x-heading>
            </div>
            <h2 class="font-semibold text-xl text-lightBlue pb-10">{{$course->title}}</h2>
            <div class="grid lg:grid-cols-2 grid-cols-1">
                <div class="flex flex-col gap-4">
                    <x-check>
                        3 hodiny testovania s koučom (osobne/online)
                    </x-check>
                    <x-check>
                        Testujeme intelekt, osobnosť a dlhodobé záujmy
                    </x-check>
                    <x-check>
                        10 hodín práce psychológa, kariérneho poradcu a kouča
                    </x-check>
                    <x-check>
                        Podrobné vysvetlenie výsledkov na stretnutí s vami a dieťaťom
                    </x-check>
                    <div class="pt-10 lg:flex hidden"><x-button-primary class="px-8">Pripojiť sa na kurz</x-button-primary></div>
                </div>
                <div class="flex flex-col gap-4">
                    <x-check>
                        Individuálny prístup a poradenstvo
                    </x-check>
                    <x-check>
                        Odporúčania od psychológa pre jeho ďalší rozvoj
                    </x-check>
                    <x-check>
                        nič si nemusíš pamätať, výsledky a odporúčania dostaneš aj v .pdf
                    </x-check>
                    <div class="flex lg:flex-row flex-col gap-6 lg:pt-[88px] pt-10 items-center">
                        <p class="text-2xl font-semibold text-lightBlue">{{$course->price}}€</p>
                        <p class="text-md font-semibold text-[#424242]">Príde ti to veľa? Môžeš za to mať radšej starý
                            iPhone. Je len na tebe do čoho investuješ.</p>
                    </div>
                    <div class="lg:pt-10 lg:hidden flex justify-center"><x-button-primary class="px-8">Pripojiť sa na kurz</x-button-primary></div>
                </div>
            </div>
        </div>
    </section>
    <section class="job-cast lg:py-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 container mx-auto gap-20 py-20 p-8">
            <div class="flex flex-col gap-10">
                <x-heading>Ani váš 9tak nevie, čím chce byť?</x-heading>
                <x-paragraph>V 14tich rokoch je prirodzené, že nevie, čo chce robiť.
                    Ešte ani len nebrigádoval, nevie povedať, čo mu ide a baví ho. No má si vybrať strednú školu, ktorá ho smeruje k tomu, čo bude ďalej študovať a robiť.
                </x-paragraph>
                <div><x-button-primary>Viac informácii</x-button-primary></div>
            </div>
            <div>
                <img class="600x400" src="https://placehold.co/600x400"></img>
            </div>
        </div>
    </section>
    <section>
        <div class="mx-auto container p-8">
            <x-heading class="text-lightBlue text-center">MY TO ROBÍME TAKTO</x-heading>
            <div class="grid grid-cols-1 lg:grid-cols-2 lg:gap-0 gap-10 lg:py-20 py-10">
                <img src="https://placehold.co/600x400" alt="">
                <div class="flex flex-col gap-6">
                    <div class="flex flex-row gap-4">
                        <img src="images/svgBlue.svg" alt="">
                        <h2 class="text-xl font-semibold text-lightBlue">Nehráme sa kariérne hry</h2> 
                    </div>
                    <div class="flex flex-row gap-4">
                        <img src="images/svgPurple.svg" alt="">                         
                        <h2 class="text-xl font-semibold text-lightBlue">Netrápime dieťa ani rodičov vyčerpávajúcimi rozhovormi.</h2> 
                    </div>
                    <div class="flex flex-row gap-4">
                        <img src="images/svgBlue.svg" alt="">      
                        <h2 class="text-xl font-semibold text-lightBlue">Používame spoľahlivé psychologické a kariérne testy.</h2> 
                    </div>
                    <div class="flex flex-row gap-4">
                        <img src="images/svgPurple.svg" alt="">      
                        <h2 class="text-xl font-semibold text-lightBlue">Celým programom vaše dieťa sprevádza poradca.</h2> 
                    </div>
                    <div class="flex flex-row gap-4">
                        <img src="images/svgBlue.svg" alt="">      
                        <h2 class="text-xl font-semibold text-lightBlue">Dieťa vieme otestovať aj online.</h2> 
                    </div>
                </div>
            </div>
            <x-paragraph>
            To pre to, aby profil vášho dieťaťa aj odporúčania škôl a povolaní boli spoľahlivé a čo najpresnejšie.
            Vďaka výsledkom vám povieme aj ako môže dieťa zlepšiť pamäť, sústredenie a čo potrebuje na zvládnutie
            školy.
            </x-paragraph>
            <x-heading class="text-lightBlue pt-20 text-center">
                TAKTO TO U NÁS PREBIEHA
            </x-heading>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 py-20">
                <div class="wrapper">
                    <div class="single-card">
                        <div class="front shadow-lg">
                            <h2 class="text-[300px]">
                                1
                            </h2>
                        </div>
                        <div class="back flex justify-center items-center p-10">
                            <x-paragraph>
                                Spojíme sa a <strong>ujasníme si čo s dieťaťom riešite.</strong> 
                                Aby ste okrem odporúčaní
                                najvhodnejších škôl a povolaní dostali aj odpovede na to, čo
                                vás zaujíma.
                            </x-paragraph>
                        </div>
                    </div>
                </div>
                <div class="wrapper">
                    <div class="single-card">
                        <div class="front shadow-lg">
                            <h2 class="text-[300px]">
                                2
                            </h2>
                        </div>
                        <div class="back flex justify-center items-center p-10">
                            <x-paragraph>
                                <strong>Dieťa absolvuje testy</strong> -
                                osobne (v BA) alebo online.
                                Rodičia vyplnia <strong>dotazník o
                                    dieťati.</strong> Pomocou koučingu
                                zisťujeme potreby dieťaťa a
                                jeho predstavy o budúcnosti. <strong>Všetky informácie
                                    vyhodnotí psychológ.</strong>
                            </x-paragraph>
                        </div>
                    </div>
                </div>
                <div class="wrapper">
                    <div class="single-card">
                        <div class="front shadow-lg">
                            <h2 class="text-[300px]">
                                3
                            </h2>
                        </div>
                        <div class="back flex justify-center items-center p-10">
                            <x-paragraph>
                                Stretneme sa s vami a
                                dieťaťom. <strong>Zrozumiteľne vám
                                    vysvetlíme, čo presne jeho
                                    výsledky znamenajú.</strong>
                                Poradíme vám ohľadom
                                konkrétnej školy/povolania.
                                Dostanete odporúčania od
                                psychológa.
                            </x-paragraph>
                        </div>
                    </div>
                </div>
            </div>
            <x-paragraph class="pt-20">
                4 roky testovania mladých nám pomohli nastaviť <span class="text-lightBlue">Program pre mladých</span> tak, aby vám dal istotu, na akú školu a povolania má vaše dieťa najlepšie predpoklady.
            </x-paragraph>
            <x-heading class="text-lightPurple py-20 text-center">S nami to vášmu dieťaťu vyjde!</x-heading>
        </div>
    </section>
    <section class="bg-[#C7DAFC] purple-finger">
        <div class="container mx-auto py-20 p-8">
            <x-heading>Ako sa im náš program páčil?</x-heading>
        </div>
        <div class="h-auto flex mx-auto p-8">
            <x-swiper-young slides-per-view="3" class="hidden lg:flex"/>
            <x-swiper-young slides-per-view="1" class="lg:hidden flex"/>
        </div>
        <div class="mx-auto container text-center py-20">
            <x-button-primary>Pripojiť sa na kurz</x-button-primary>
        </div>
    </section>
    <section class="purple-finger py-20">
                <div class="max-w-4xl mx-auto space-y-4 p-8">
                    <div
                        class="transition-all duration-200 bg-[white] rounded-xl shadow-lg cursor-pointer hover:bg-[#fbfbfb]">
                        <button type="button" id="question1" data-state="closed" class="flex items-center justify-between w-full px-4 py-5 sm:p-6">
                            <span class="flex text-lg font-semibold text-black gap-4 items-center"><img src="images/questionmark.svg" alt="">V akom veku dieťa testovať?</span>
                            <svg id="arrow1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                class="w-6 h-6 text-gray-400">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div id="answer1" style="display:none" class="px-4 pb-5 sm:px-6 sm:pb-6">
                            <p>Testujeme deti od 13 rokov. Vtedy je ich mozog dostatočne vyvinutý, aby sme vedeli zistiť schopnosti, osobnosť aj dlhodobé záujmy.

                                Mladí, ktorí sa rozhodujú pre strednú alebo vysokú školu sa môžu otestovať v programe Pre mladých.
                                
                                Tí, ktorí si vyberajú alebo menia zamestnanie môžu absolvovať testovanie v Programe pre dospelých.</p>
                        </div>
                    </div>
                    <div
                    class="transition-all duration-200 bg-[white] rounded-xl shadow-lg cursor-pointer hover:bg-[#fbfbfb]">
                    <button type="button" id="question2" data-state="closed" class="flex items-center justify-between w-full px-4 py-5 sm:p-6">
                            <span class="flex text-lg font-semibold text-black gap-4 items-center"><img src="images/questionmark.svg" alt="">Čo všetko testami zistíme?</span>
                            <svg id="arrow2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                class="w-6 h-6 text-gray-400">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div id="answer2" style="display:none" class="px-4 pb-5 sm:px-6 sm:pb-6">
                            <p>Testujeme rozumové schopnosti, osobnosť a dlhodobé záujmy vášho dieťaťa. Zistíme tak, na akú školu a neskôr povolania má vaše dieťa najlepšie predpoklady.

                                Okrem testov zisťujeme informácie o dieťati aj od rodičov a osôb, ktoré ho dobre poznajú (učiteľ, tréner, blízky príbuzný).
                                
                                Výsledky vyhodnocuje skúsená psychologička. Ukážu aké má dieťa schopnosti, osobnosť a dlhodobé záujmy. Na potvrdenie záverov psychologička prepojí výsledky testov s informáciami od
                                rodičov, iných osôb a tým, čo sme zistili počas testovania od samotného dieťaťa (použitím koučovacích otázok).
                                
                                Všetky informácie o dieťati sú chránené ako osobný údaj. Dieťa má pridelené svoje osobné číslo, pod ktorým sú spracúvané jeho údaje.</p>
                        </div>
                    </div>
                    <div
                    class="transition-all duration-200 bg-[white] rounded-xl shadow-lg cursor-pointer hover:bg-[#fbfbfb]">
                    <button type="button" id="question3" data-state="closed" class="flex items-center justify-between w-full px-4 py-5 sm:p-6">
                        <span class="flex text-lg font-semibold text-black gap-4 items-center"><img src="images/questionmark.svg" alt="">Dokedy a ako dostaneme výsledky?</span>
                            <svg id="arrow3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                class="w-6 h-6 text-gray-400">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div id="answer3" style="display:none" class="px-4 pb-5 sm:px-6 sm:pb-6">
                            <p>Snažíme sa odovzdať vám výsledky do 2 týždňov od testovania dieťaťa. Konkrétny termín stretnutia k výsledkom si dohodneme.

                                Ak potrebujete výsledky urýchlene, oznámte nám to prosím vopred.
                                
                                Odporúčame absolvovať osobné stretnutie k výsledkom. Ak to nie je možné, vieme si dohodnúť online stretnutie.
                                
                                Výsledky si prejdeme spoločne s dieťaťom a ideálne s oboma rodičmi. Vysvetlíme vám, čo presne výsledky znamenajú.
                                
                                Na stretnutí zodpovieme vaše otázky ohľadom konkrétnych škôl a povolaní. Poradíme vám aj ako vie vaše dieťa zlepšiť pamäť, sústredenie alebo to, čo potrebuje na zvládnutie školy. Tieto rady
                                vychádzajú z toho akým informáciám vaše dieťa najlepšie rozumie, akú má pamäť atď.</p>
                        </div>
                    </div>
                    <div
                    class="transition-all duration-200 bg-[white] rounded-xl shadow-lg cursor-pointer hover:bg-[#fbfbfb]">
                    <button type="button" id="question4" data-state="closed" class="flex items-center justify-between w-full px-4 py-5 sm:p-6">
                        <span class="flex text-lg font-semibold text-black gap-4 items-center"><img src="images/questionmark.svg" alt="">Ako vyzerá výstup z testovania?</span>
                            <svg id="arrow4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                class="w-6 h-6 text-gray-400">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div id="answer4" style="display:none" class="px-4 pb-5 sm:px-6 sm:pb-6 active:transition-all active:duration-700">
                            <p>Výsledky testov aj s vysvetlením a odporúčaniami od psychológa vám odovzdáme vo forme jeho osobného portfólia. Je to jeho osobný profil a okrem výsledkov obsahuje aj odporúčania vhodných
                                škôl a povolaní.
                                
                                Závery uvedené v portfóliu ukazujú aké možnosti štúdia a zamestnania najviac zodpovedajú profilu vášho dieťaťa.
                                
                                Portfólio vám odovzdáme vytlačené aj pošleme mailom v elektronickej podobe.
                                
                                Môžete sa rozhodnúť chrániť portfólio vášho dieťaťa heslom, ktoré sami navrhnete.</p>
                        </div>
                    </div>
                    <div
                    class="transition-all duration-200 bg-[white] rounded-xl shadow-lg cursor-pointer hover:bg-[#fbfbfb]">
                    <button type="button" id="question5" data-state="closed" class="flex items-center justify-between w-full px-4 py-5 sm:p-6">
                        <span class="flex text-lg font-semibold text-black gap-4 items-center"><img src="images/questionmark.svg" alt="">Kto má byť na stretnutí k výsledkom?</span>
                            <svg id="arrow5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                class="w-6 h-6 text-gray-400">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div id="answer5" style="display:none" class="px-4 pb-5 sm:px-6 sm:pb-6 active:transition-all active:duration-700">
                            <p>Ak dieťa nemá 18 rokov, musí byť na stretnutí k výsledkom jeho zákonný zástupca. Odporúčame, aby sa zúčastnili obaja rodičia. Výsledky a vysvetlenia vám dajú veľa cenných informácií o vašom
                                dieťati.
                                
                                Ak vaše dieťa má 18 rokov, samé rozhoduje o tom, kto bude na stretnutí k výsledkom.</p>
                        </div>
                    </div>
                    <div
                    class="transition-all duration-200 bg-[white] rounded-xl shadow-lg cursor-pointer hover:bg-[#fbfbfb]">
                    <button type="button" id="question6" data-state="closed" class="flex items-center justify-between w-full px-4 py-5 sm:p-6">
                        <span class="flex text-lg font-semibold text-black gap-4 items-center"><img src="images/questionmark.svg" alt="">Čo všetko sa dozviem na stretnutí k výsledkom?</span>
                            <svg id="arrow6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                class="w-6 h-6 text-gray-400">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div id="answer6" style="display:none" class="px-4 pb-5 sm:px-6 sm:pb-6 active:transition-all active:duration-700">
                            <p>Na stretnutí k výsledkom vám povieme, aké výsledky dieťa v testoch dosiahlo a čo presne znamenajú.

                                Zameriavame sa na to, na čo má dieťa nadanie, v čom je dobré a ako to najlepšie využije.
                                
                                Zodpovieme vaše otázky ohľadom konkrétnej školy alebo povolania. Ujasníme si, čo potrebuje prípadne zlepšiť, ak chce túto školu alebo prácu zvládnuť.
                                
                                Odporúčania zohľadňujú aj to, akú má vaše dieťa osobnosť a záujmy. Citlivo počúvame aj želania vášho dieťaťa a sústredíme sa na to, aby sme ho podporili v smerovaní, ktoré
                                uprednostňuje.</p>
                        </div>
                    </div>
                    <div
                    class="transition-all duration-200 bg-[white] rounded-xl shadow-lg cursor-pointer hover:bg-[#fbfbfb]">
                    <button type="button" id="question7" data-state="closed" class="flex items-center justify-between w-full px-4 py-5 sm:p-6">
                        <span class="flex text-lg font-semibold text-black gap-4 items-center"><img src="images/questionmark.svg" alt="">Môže môjmu dieťaťu vyjsť škola alebo práca, ktoré mu nesedia?</span>
                            <svg id="arrow7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                class="w-6 h-6 text-gray-400">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div id="answer7" style="display:none" class="px-4 pb-5 sm:px-6 sm:pb-6 active:transition-all active:duration-700">
                            <p>Nemôže. Celý proces sme nastavili tak, aby ste dostali maximálne spoľahlivé výsledky:

                                Spájame psychológiu, koučing a kariérne poradenstvo. Výsledky testov si potvrdzujeme pomocou informácií, ktoré sme získali od rodičov aj od dieťaťa a osôb, ktoré ho dobre poznajú.
                                
                                Testy dajú spoľahlivé výsledky o schopnostiach, osobnosti a záujmoch vášho dieťaťa. Vďaka nim iIdeme do hĺbky, do akej sa bežne neviete dostať. Informácie o dieťati získavame okrem
                                testov aj koučovacím rozhovorom s dieťaťom, od vás rodičov a od osôb, ktoré vaše dieťa dobre poznajú.
                                
                                Zamestnávame skúsené psychologičky (viac ako 15 rokov praxe), kouča a kariérneho poradcu. Títo si spoločne prechádzajú výsledky a všetky informácie o dieťati a navrhujú odporúčania
                                najvhodnejších škôl a povolaní.</p>
                        </div>
                    </div>
                    <div
                    class="transition-all duration-200 bg-[white] rounded-xl shadow-lg cursor-pointer hover:bg-[#fbfbfb]">
                    <button type="button" id="question8" data-state="closed" class="flex items-center justify-between w-full px-4 py-5 sm:p-6">
                        <span class="flex text-lg font-semibold text-black gap-4 items-center"><img src="images/questionmark.svg" alt="">Môžu môjmu dieťaťu vyjsť nesprávne výsledky?</span>
                            <svg id="arrow4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                class="w-6 h-6 text-gray-400">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div id="answer8" style="display:none" class="px-4 pb-5 sm:px-6 sm:pb-6 active:transition-all active:duration-700">
                            <p>Nemôžu. Celý proces sme nastavili tak, aby ste dostali spoľahlivé výsledky. Výsledky testov si potvrdzujeme informáciami od rodičov a blízkych aj od dieťaťa.

                                Dieťa robí testy pod odborným dohľadom. Úlohy si vyskúša, aby sme mali istotu, že rozumie zadaniu.
                                
                                Počas testovania pomocou koučingu zisťujeme aké činnosti preferuje, aké sú jeho potreby a predstavy o budúcnosti.
                                
                                Informácie o dieťati získavame aj od vás, rodičov, príp. iných osôb a prepojíme ich s výsledkami testov.
                                
                                Výsledky aj odporúčania spolu s dieťaťom a s vami prejdeme na osobnom stretnutí.
                                
                                Zamestnávame skúsené psychologičky (viac ako 15 rokov praxe), kouča a kariérneho poradcu. Títo spoločne navrhujú odporúčania najvhodnejších škôl a povolaní.
                                
                                350+ otestovaných klientov a 4 roky našich programov nám pomohli nastaviť ich tak, že sa vieme za správnosť výsledkov zaručiť.</p>
                        </div>
                    </div>
                    <div
                    class="transition-all duration-200 bg-[white] rounded-xl shadow-lg cursor-pointer hover:bg-[#fbfbfb]">
                    <button type="button" id="question9" data-state="closed" class="flex items-center justify-between w-full px-4 py-5 sm:p-6">
                        <span class="flex text-lg font-semibold text-black gap-4 items-center"><img src="images/questionmark.svg" alt="">Kedy dieťa netestovať?</span>
                            <svg id="arrow9" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                class="w-6 h-6 text-gray-400">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div id="answer9" style="display:none" class="px-4 pb-5 sm:px-6 sm:pb-6 active:transition-all active:duration-700">
                            <p>Ak ešte nemá 13 rokov.

                                Ak na testy v škole reaguje prehnane úzkostne. Testami nemeriame aký podáva dieťa výkon. Zisťujeme ako jeho mozog spracúva rôzne typy informácií, akú má osobnosť a dlhodobé
                                záujmy. Dieťaťu to citlivo vysvetlíme pred testovaním.
                                
                                Ak dieťa momentálne prežíva mimoriadny stres alebo následky traumy.
                                
                                Ak je dieťa v starostlivosti psychológa, terapeuta alebo psychiatra, informujte nás o tom prosím vopred. Individuálne s vami odkonzultujeme, či je vhodné dieťa testovať.
                                
                                V prípade, ak má vaše dieťa diagnostikovanú závažnú poruchu učenia, budeme s vami konzultovať, či je vhodné vaše dieťa testovať. Pri ADHD, dyslexiii apod. upravíme podmienky
                                testovania a psychologička ju zohľadní pri vyhodnotení testov.
                                
                                Ak dieťa s testovaním nesúhlasí. Je síce neplnoleté, no s testovaním musí dobrovoľne súhlasiť.</p>
                        </div>
                    </div>
                </div>
                <x-heading class="text-center py-10">
                    Máš ešte otázky? Kontaktuj nás.
                </x-heading>
                <div class="text-center">
                    <x-button-primary class="px-10">Kontakt</x-button-primary>
                </div>
    </section>
</x-layout>
