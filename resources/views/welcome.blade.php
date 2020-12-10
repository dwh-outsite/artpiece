<x-guest-layout>
    <div class="flex">
        <div class="hidden md:block">
            @include('partials.grid')
        </div>
        <div class="px-6 md:px-16">

            <div class="flex text-sm md:text-normal justify-end pt-6 text-gray-400">
                @if (App::isLocale('nl'))
                    <span>View this page in <a href="{{ route('home', 'en') }}" class="underline">English</a></span>
                @else
                    <span>Bekijk deze pagina in het <a href="{{ route('home', 'nl') }}" class="underline">Nederlands</a></span>
                @endif
            </div>

            <article class="py-16">

                @include('partials.logo')

                <h1 class="text-4xl hidden">{{ __('Your artwork in Delft?') }}</h1>

                <p class="text-xl leading-relaxed">
                    @lang('messages.welcome')
                </p>
            </article>

            <section class="border-l-4 border-art-purple p-8 shadow-2xl w-full md:w-2/3">
                <h2 class="font-semibold text-3xl mb-8">
                    @lang('messages.reveal.title')
                </h2>
                <p class="mb-4">
                    @lang('messages.reveal.description')
                </p>

                <iframe width="560" height="315" src="https://www.youtube.com/embed/1MB6GewnLl8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </section>

            <footer class="pt-16 pb-8 mt-8 text-center md:text-left">
                <div class="text-gray-400 uppercase text-sm tracking-wide mb-4 md:mb-2">
                    {{ __('An LGBT+ artwork in Delft is an initiative of') }}
                </div>
                <div class="flex flex-col md:flex-row space-x-6 space-y-4 items-center mb-16">
                    @include('partials.organisations')
                </div>
                <div class="text-gray-400 text-sm tracking-wide md:mb-2">
                    &copy; {{ __(' DWH 2020 - Lange Geer 22, 2611PV Delft - info@dwhdelft.nl - 0637560270') }}
                </div>
            </footer>
        </div>
    </div>
</x-guest-layout>
