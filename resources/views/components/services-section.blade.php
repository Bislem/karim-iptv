    <!-- Start block -->
    <section id="section1" class="bg-gray-50 dark:bg-gray-800">
        <div class="max-w-screen-xl px-4 py-10 mx-auto space-y-12 lg:space-y-20 lg:py-10 lg:px-6">
            <!-- Row -->
            <div class="items-center gap-8 lg:grid lg:grid-cols-2 xl:gap-16">
                <div class="text-gray-500 sm:text-lg dark:text-gray-400 max-w-[600px] mx-auto">
                    <h2
                        class="mb-4 lg:text-5xl md:text-4xl text-2xl font-extrabold tracking-tight text-gray-900 dark:text-white">
                        Avec notre sélection de qualité, comprenant Orca Pro Plus, Iron TV Pro, King365 IPTV, Atlas Pro IPTV et Gogo IPTV
                    </h2>
                    <p class="mb-8 font-light lg:text-xl">
                       Découvrez l'IPTV moins cher et le meilleur IPTV sur le marché, offrant une stabilité exceptionnelle et une simplicité d'installation remarquable. Optez pour la fiabilité et l'efficacité de nos serveurs IPTV, leaders du marché, pour une expérience de divertissement sans pareille.
                    </p>
                    <h3 class="my-5 font-bold text-xl lg:text-left text-center">Nos Services</h3>
                    <!-- List of buttons -->
                    <div class="flex flex-row w-full lg:justify-start justify-center" data-tabs-toggle="#pricing-details"
                        role="tablist">
                        @foreach ($services as $service)
                            <button id="bb{{ $service->id }}-tab" data-tabs-target="#bb{{ $service->id }}"
                                type="button" role="tab" aria-controls="bb{{ $service->id }}"
                                aria-selected="{{ $loop->iteration === 0 ? 'true' : 'false' }}"
                                class="h-fit me-2 p-1 border border-slate-600 rounded-lg hover:!cursor-pointer hover:bg-slate-700 hover:border-1 block aria-selected:bg-slate-600">
                                <img class="block h-[50px] w-auto" src="{{ $service->icon }}" alt="">
                            </button>
                        @endforeach
                    </div>

                </div>
                <div>
                    {{-- service details section  --}}
                    <div class="" id="pricing-details">
                        @foreach ($services as $service)
                            <div class="w-full items-center justify-between flex flex-wrap flex-row lg:mt-2 mt-10"
                                id="bb{{ $service->id }}" role="tabpanel" aria-labelledby="bb{{ $service->id }}-tab">
                                <img class="hidden w-full mb-4 rounded-lg lg:mb-0 lg:flex" src="{{ $service->cover }}"
                                    alt="dashboard feature image">

                                @foreach ($service->data as $item)
                                    <button
                                        class="h-fit lg:me-2 lg:ms-0 lg:p-1 text-white lg:w-auto border-l-[5px] border-l-green-400 w-[45%] mx-auto p-8 mb-5 lg:bg-transparent bg-slate-600 text-left lg:border-none  rounded-lg hover:cursor-pointer block">
                                        <strong class="text-lg">{{ $item['label'] }}</strong> <br>
                                        {{ $item['value'] }}
                                    </button>
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </section>
