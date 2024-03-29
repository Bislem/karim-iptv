    <!-- Start block -->
    <section id="section3" class="bg-gray-50 dark:bg-gray-800">
        <div class="max-w-screen-xl px-4 py-10 mx-auto space-y-12 lg:space-y-20 lg:py-10 lg:px-6">
            <!-- Row -->
            <div class="items-center gap-2 lg:grid lg:grid-cols-1 ">
                <div class="text-gray-500 flex flex-col lg:flex-row sm:text-lg dark:text-gray-400 mx-auto">
                    <div class="lg:mr-10 mx-auto">
                        <h2
                            class="mb-4 lg:text-5xl text-center lg:text-left md:text-4xl text-2xl font-extrabold tracking-tight text-gray-900 dark:text-white">
                            Work with tools
                            you already use you already use you already use
                        </h2>
                        <p class="mb-8 font-light lg:text-xl text-center lg:text-left">
                            Deliver great service experiences fast - without the complexity
                            of traditional ITSM solutions. Accelerate critical development work, eliminate toil, and
                            deploy
                            changes with ease.
                        </p>
                    </div>
                    <!-- List of buttons -->
                    <div class="w-full">
                        <h3 class="my-5 font-bold w-full text-xl lg:text-left text-center text-green-400">Nos serveurs
                        </h3>
                        <div class="flex flex-row w-full lg:justify-start justify-center"
                            data-tabs-toggle="#services-details" role="tablist">
                            @foreach ($services as $service)
                                <button id="aa{{ $service->id }}-tab" data-tabs-target="#aa{{ $service->id }}"
                                    type="button" role="tab" aria-controls="aa{{ $service->id }}"
                                    aria-selected="{{ $loop->iteration === 0 ? 'true' : 'false' }}"
                                    class="h-fit me-2 p-1 border border-slate-600 rounded-lg hover:!cursor-pointer hover:bg-slate-700 hover:border-1 block aria-selected:bg-slate-600">
                                    <img class="block h-[50px] w-auto" src="{{ $service->icon }}" alt="">
                                </button>
                            @endforeach
                        </div>
                    </div>

                </div>
                <div>
                    {{-- service details section  --}}
                    <div class="" id="services-details">
                        @foreach ($services as $service)
                            <div class="w-full items-center justify-between flex flex-wrap flex-row lg:mt-2 mt-10"
                                id="aa{{ $service->id }}" role="tabpanel" aria-labelledby="aa{{ $service->id }}-tab">
                                <h3 class="my-5 font-bold w-full mx-auto text-3xl text-center text-green-400">
                                    {{ $service->name }}
                                </h3>
                                <div class="flex flex-row flex-wrap mx-auto">
                                    @foreach ($service->pricing as $pricing)
                                        <div
                                            class="h-fit lg:me-2 lg:ms-0 lg:p-1 text-white lg:w-auto w-[100%] md:w-[50%] max-w-[300px] p-2 mx-auto mb-5  text-left rounded-lg hover:cursor-pointer block">
                                            <div
                                                class="w-full p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-4 dark:bg-gray-800 dark:border-gray-700">
                                                <h5 class="mb-4 text-xl font-medium text-gray-500 dark:text-gray-400">
                                                    {{ $pricing['name'] }}</h5>
                                                <div class="flex items-baseline text-gray-900 dark:text-white">
                                                    <span class="lg:text-3xl text-xl font-semibold">$</span>
                                                    <span
                                                        class="lg:text-5xl text-3xl font-extrabold tracking-tight">{{ $pricing['price'] }}</span>
                                                    <span
                                                        class="ms-1 text-xl font-normal text-gray-500 dark:text-gray-400">/month</span>
                                                </div>
                                                <ul role="list" class="space-y-5 my-7">
                                                  
                                                    @foreach ($pricing['data'] as $serviceItem)
                                                        <li class="flex items-center">
                                                            <span
                                                                class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">
                                                                {{ $serviceItem['label'] }} :
                                                                {{ $serviceItem['value'] }}
                                                            </span>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                                <button type="button"
                                                    class="text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-blue-200 dark:focus:ring-green-900 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center">Choose
                                                    plan</button>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </section>
