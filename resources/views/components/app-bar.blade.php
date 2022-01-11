<div class="flex justify-between items-center p-5 sticky top-0 left-0 right-0 bg-white shadow">
    <!-- App Search Box -->
    <form class="min-w-fit w-72">
        <div class="flex rounded border focus-within:ring ring-offset-2 ring-yellow-300">
            <div class="min-w-fit p-2">
                <img src="{{ asset('images/magnifier.svg') }}" alt="">
            </div>
            <input type="search" name="search" id="search" placeholder="Search store" class="flex-1 min-w-fit px-2 outline-none text-lg">
        </div>
    </form>

    <div class="flex items-center">
        <!-- Main Navigations -->
        <x-topbar-link text="Products" />
        <x-topbar-link text="Story" />
        <x-topbar-link text="Manufacturing" />
        <x-topbar-link text="Packaging" />

        <!-- Cart and Login Links -->
        <a href="!#" class="relative mr-5">
            <img src="{{ asset('images/basket.svg') }}" alt="Basket">
            <span class="w-5 h-5 absolute -top-3 -right-3 rounded-full bg-yellow-300 text-sm text-center font-bold text-gray-900 leading-normal">0</span>
        </a>
        <x-icon-link src="{{ asset('images/user.svg') }}" alt="User" />
    </div>
</div>