<div class="flex justify-between items-center px-5 py-3 sticky top-0 left-0 right-0 z-30 bg-white shadow">
    <!-- Sidebar Trigger ( For small devices ) -->
    <button type="button" class="p-1 border mr-6 rounded lg:hidden" id="sidebar-trigger">
        <img src="{{ asset('images/menu-outline.svg') }}" alt="" class="w-8">
    </button>

    <!-- App Search Box -->
    <form class="min-w-fit grow">
        <div class="flex rounded border focus-within:ring ring-offset-2 ring-yellow-300">
            <div class="min-w-fit p-2">
                <img src="{{ asset('images/magnifier.svg') }}" alt="">
            </div>
            <input type="search" name="search" id="search" placeholder="Search store" class="flex-1 min-w-fit px-2 outline-none text-lg">
        </div>
    </form>

    <!-- Cart and Login Links ( For small devices ) -->
    <a href="!#" class="relative ml-5 mr-5 lg:hidden">
        <img src="{{ asset('images/basket.svg') }}" alt="Basket">
        <span class="w-5 h-5 absolute -top-3 -right-3 rounded-full bg-yellow-300 text-sm text-center font-bold text-gray-900 leading-normal">0</span>
    </a>
    <x-icon-link href="!#"  class="lg:hidden">
        <img src="{{ asset('images/user.svg') }}" alt="User">
    </x-icon-link>

    <!-- ( For large devices ) -->
    <div class="hidden lg:flex items-center ml-5">
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
        <x-icon-link href="!#">
            <img src="{{ asset('images/user.svg') }}" alt="User">
        </x-icon-link>
    </div>

</div>
<!-- ( For small devices ) -->
<div class="flex lg:hidden items-center justify-center py-2 shadow">
    <!-- Main Navigations -->
    <div>
        <x-topbar-link text="Products" />
        <x-topbar-link text="Story" />
        <x-topbar-link text="Manufacturing" />
        <x-topbar-link text="Packaging" />
    </div>
</div>