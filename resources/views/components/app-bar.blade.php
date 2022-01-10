<div class="p-5 flex justify-between items-center">
    <form>
        <div class="flex min-w-fit p-2 rounded border focus-within:ring ring-offset-2 ring-yellow-300">
            <div class="min-w-fit">
                <img src="{{ asset('images/magnifier.svg') }}" alt="">
            </div>
            <input type="search" name="search" id="search" placeholder="Search store" class="flex-1 min-w-fit ml-3 outline-none ">
        </div>

    </form>
    <div>
        <x-topbar-link text="products" />
        <x-topbar-link text="story" />
        <x-topbar-link text="manufacturing" />
        <x-topbar-link text="packaging" />
    </div>
</div>