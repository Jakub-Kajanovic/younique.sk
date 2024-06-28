<x-layout>
    <section class="py-20">
        <div class="mx-auto container p-8 grid lg:grid-cols-2 grid-cols-1 gap-20">
            <div class="flex flex-col gap-6">
                <x-heading class="text-lightBlue">
                    Kontakt
                </x-heading>
                <x-paragraph>
                    Vo formulári uveďte či máte otázku alebo zvoľte
                    program, ktorý vás zaujíma. Do poľa „Chcem sa
                    opýtať“ prosím uveďte, či sa chcete objednať na
                    testovanie, máte záujem o 15
                    min. konzultáciu zadarmo alebo rovno napíšte vašu
                    otázku.

                    Ozveme sa vám do 48 hodín.
                </x-paragraph>
                <div class="flex flex-row gap-20">
                    <div>
                        <h2 class="text-lightBlue pb-2">
                            ADRESA
                            </h2>
                            <ul class="flex flex-col gap-1">
                                <li>youNique s.r.o.</li>
                                <li>Za kasárňou 1</li>
                                <li>831 03 Bratislava</li>
                            </ul>
                    </div>
                    <div>
                        <h2 class="text-lightBlue pb-2">
                            KONTAKT
                            </h2>
                            <ul class="flex flex-col gap-1">
                                <li>info@younique.sk</li>
                                <li>0911 70 10 77</li>
                            </ul>
                    </div>
                </div>
            </div>
            <div class="bg-[white] shadow-xl rounded-xl p-8">
            <form action="">
                <div class="grid lg:grid-cols-2 grid-cols-1 gap-10">
                    <div class="flex flex-col gap-4">
                            <x-label for="name">
                                Celé meno *
                            </x-label>
                            <x-input type="text" for="name" id="name" placeholder="Celé meno" />
                    </div>
                    <div class="flex flex-col gap-4">
                        <x-label for="email">
                            Email *
                        </x-label>
                        <x-input type="email" for="email" id="email" placeholder="Tvoj email" />
                    </div>
                    <div class="flex flex-col gap-4">
                        <x-label for="number">
                            Telefonné číslo
                        </x-label>
                        <x-input type="number" for="number" id="number" placeholder="Tvoje telefonné číslo" />
                    </div>
                    <div class="flex flex-col gap-4">
                        <x-label for="program">
                            Zaujímam sa o?
                        </x-label>
                        <select class="w-full rounded-lg border border-lightBlue text-[black] text-sm px-4 py-4" name="select" id="select">
                            <option value="Program pre mladých">Program pre mladých</option>
                            <option value="Program pre dospelých">Program pre dospelých</option>
                            <option value="15.min konzutlácia">15 minutová konzultácia</option>
                        </select>
                    </div>
                </div>
                <div class="flex flex-col gap-4 mt-8">
                    <x-label for="message">
                        Chcem sa opýtať
                    </x-label>
                    <textarea rows="6" class="w-full rounded-lg border border-lightBlue text-[black] text-sm px-4 py-4" name="message" id="message" placeholder="Vaša otázka"></textarea>
                </div>
                <div class="flex flex-col lg:flex-row justify-between gap-4 mt-8">
                    <button class="bg-lightPurple text-[white] rounded-lg px-4 py-2">
                    Odoslať
                    </button>
                <div class="flex gap-4 items-center">
                    <input type="checkbox" class="rounded-md border border-lightBlue text-[black] text-sm px-2 py-2" name="checkbox" id="checkbox">
                    <label for="checkbox" class="text-md text-lightGray">
                        Súhlasím s podmienkami ochrany osobných údajov
                    </label>
                </div>
                </div>
            </form>
            </div>
        </div>
    </section>
</x-layout>