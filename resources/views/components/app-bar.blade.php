<div class="min-w-fit flex justify-between items-center px-3 py-3 sticky top-0 left-0 right-0 z-30 bg-white shadow">
    <!-- Sidebar Trigger ( For small devices ) -->
    <button type="button" class="min-w-fit p-1 border mr-3 rounded lg:hidden" id="sidebar-trigger">
        <img src="{{ asset('images/menu-outline.svg') }}" alt="" class="min-w-fit w-8">
    </button>

    <!-- Logo -->
    <x-brand-name class="lg:hidden" />

    <!-- App Search Box -->
    <form class="hidden lg:flex min-w-fit" id="searchBox">
        <div class="min-w-fit flex rounded border bg-white p-2 focus-within:ring ring-inset ring-yellow-300">
            <div class="min-w-fit hidden lg:flex items-center">
                <img src="{{ asset('images/magnifier.svg') }}" alt="" class="min-w-fit">
            </div>
            <input type="search" name="search" id="search" placeholder="Search store" class="grow px-2 outline-none text-lg">
            <button type="button" class="min-w-fit lg:hidden" id="searchBoxCloseTrigger">
                <img src="{{ asset('images/close-outline.svg') }}" alt="Close" class="w-8">
            </button>
        </div>
    </form>

    
    <div class="flex items-center ml-5">
        <!-- Main Navigations -->
        <div class="hidden xl:flex">
            <x-topbar-link text="Products" />
            <x-topbar-link text="Story" />
            <x-topbar-link text="Manufacturing" />
            <x-topbar-link text="Packaging" />
        </div>
        <!-- Search, Cart and Login Links -->
        <button type="button" class="relative mr-5 lg:hidden" id="searchBoxTrigger">
            <img src="{{ asset('images/magnifier.svg') }}" alt="" class="min-w-fit">
        </button>

        <a href="!#" class="relative mr-5">
            <img src="{{ asset('images/basket.svg') }}" alt="Basket">
            <span class="w-5 h-5 absolute -top-3 -right-3 rounded-full bg-yellow-300 text-sm text-center font-bold text-gray-900 leading-normal">0</span>
        </a>
        
        <x-icon-link href="!#" class="">
            <img src="{{ asset('images/user.svg') }}" alt="User">
        </x-icon-link>
    </div>

</div>
<!-- ( For small devices ) -->
<div class="flex xl:hidden items-center justify-center py-2 px-2 shadow">
    <!-- Main Navigations -->
    <div class="flex flex-wrap justify-center">
        <x-topbar-link text="Products" />
        <x-topbar-link text="Story" />
        <x-topbar-link text="Manufacturing" />
        <x-topbar-link text="Packaging" />
    </div>
</div>