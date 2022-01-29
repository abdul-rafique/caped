<div {{ $attributes->merge(['class' => 'min-h-[9rem] md:min-h-[12rem] lg:min-h-[5rem] relative col-span-2 lg:row-span-2 xl:row-span-3 rounded-2xl']) }}>
    {{$slot}}
    <a href="!#" class="after:absolute after:top-0 after:left-0 after:right-0 after:bottom-0 after:pointer-events-auto"></a>
</div>