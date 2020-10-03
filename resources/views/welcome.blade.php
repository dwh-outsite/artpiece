<x-guest-layout>
    <div class="flex">
        <div>
            @include('partials.grid')
        </div>
        <div class="px-16">

            <article class="py-16">
                @include('partials.logo')

                <h1 class="text-4xl hidden">Jouw kunstwerk in Delft?</h1>

                <p class="text-xl leading-relaxed">
                    You’ve probably seen it - the rainbow coloured bridge next to Delft Station. A first visible symbol that Delft is a rainbow city, and has been for nearly 10 years. However, this bridge is only temporary. We want to create a more permanent LGBT+ monument which is more unique to Delft, and we want your help to think of what exactly!
                    <br /><br />
                    Between now and December 4th you can submit your idea for a statue or other standalone piece of art that represents the LGBT+ community. It can be just a description in words or a sketch, the winning idea will be given as part of the instructions to an artist.
                    After the competition closes, a panel of representatives of the various LGBT+ organisations in Delft will decide on the winning idea, which will be announced on Purple Friday, December 11th, after which a fundraising campaign will start to fund it. If your idea wins, you can be part of the eventual reveal of the artwork and you will receive a small version of the artwork to take home.
                </p>
            </article>

            <section class="border-l-4 border-art-purple p-8 shadow-2xl w-2/3 ">
                <h2 class="font-semibold text-3xl mb-8">
                    Stuur <span class="text-art-purple">jouw idee</span> voor een <span class="text-art-purple">kunstwerk</span> in!
                </h2>
                @livewire('art-piece-idea-form')
            </section>

            <footer class="pt-16 pb-8 mt-8">
                <div class="text-gray-400 uppercase text-sm tracking-wide mb-2">
                    {{ __('An LGBT+ artwork in Delft is an initiative of') }}
                </div>
                <div class="flex space-x-6 items-center">
                    @include('partials.organisations')
                </div>
            </footer>
        </div>
    </div>
</x-guest-layout>
