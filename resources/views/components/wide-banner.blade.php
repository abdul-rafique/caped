<div {{ $attributes->merge(['class' => 'relative row-span-2 col-span-2 lg:row-span-2 rounded-2xl']) }}>
    {{$slot}}
    <a href="!#" class="after:absolute after:top-0 after:left-0 after:right-0 after:bottom-0 after:pointer-events-auto"></a>
</div>