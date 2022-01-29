<div {{ $attributes->merge(['class' => 'relative min-h-[16rem] md:min-h-[28rem] lg:min-h-[14rem] lg:row-span-4 xl:row-span-6 rounded-2xl bg-no-repeat bg-center bg-cover']) }}>
    {{ $slot }}
    <x-favorite-btn class="absolute top-5 right-5" />
</div>