<div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-3">
    @if (count($products) > 0)
        @foreach ($products as $item)
            <livewire:item-card :product_details='$item' wire:key='{{ $item->id }}' lazy />
        @endforeach
    @else
        <h2 class="text-2xl text-gray-300">No Product Available</h2>
    @endif

</div>
