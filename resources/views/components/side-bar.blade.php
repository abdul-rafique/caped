<div class="min-h-screen w-1/5 max-w-xs min-w-max flex flex-col items-center py-10 shadow-md z-50">
    <div >
        <img src="{{ asset('images/logo.svg') }}" alt="Logo" >
    </div>

    <h2 class="font-bold text-3xl mt-16">{{ __('Explore') }}</h2>

    <div class="flex flex-1 flex-col items-center mt-16 px-5">
        <x-navlink icon="{{asset('images/flash.svg')}}" text="New In" />
        <x-navlink icon="{{asset('images/cloth.svg')}}" text="Clothing" />
        <x-navlink icon="{{asset('images/shoe.svg')}}" text="Shoes" />
        <x-navlink icon="{{asset('images/purse.svg')}}" text="Accessories" />
        <x-navlink icon="{{asset('images/activewear.svg')}}" text="Activewear" />
        <x-navlink icon="{{asset('images/gift.svg')}}" text="Gifts & Living" />
        <x-navlink icon="{{asset('images/diamond.svg')}}" text="Inspiration" />
    </div>
</div>