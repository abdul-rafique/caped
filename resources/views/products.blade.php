<x-app-layout>
    <div class="grid grid-rows-2 gap-6 h-screen">
        <div class="grid grid-rows-12 grid-cols-2 gap-4 lg:grid-cols-4">
            
            <x-wide-banner 
                class="flex items-center justify-center text-4xl font-bold bg-cyan-300 bg-no-repeat bg-cover bg-center" 
                style="background-image: url( {{ asset('images/50%-off-banner-bg.svg') }} )">
                GET UP TO 50% OFF
            </x-wide-banner>
            <x-wide-banner
                class="lg:order-1 bg-green-300 bg-no-repeat bg-cover bg-center" 
                style="background-image: url( {{ asset('images/summer-off-banner-bg.svg') }} )"
                />
                
            <x-tall-banner class="bg-indigo-300  row-span-6" />
            <x-tall-banner class="bg-gray-300" />
        </div>

        <div class="grid grid-rows-4 grid-cols-4 gap-4">
            <!-- <x-tall-banner class="bg-green-300" />
            <x-tall-banner class="bg-yellow-300" />
            <x-wide-banner class="bg-indigo-300" />
            <x-wide-banner class="bg-gray-300" /> -->
        </div>
    </div>
</x-app-layout>