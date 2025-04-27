<div>
    <h2>Product List</h2>
    <ul>
        @foreach ($products as $product)
            <li>
                {{ $product['name'] }} - ${{ $product['price'] }}
                <button wire:click="addToCart({{ $product['id'] }}, '{{ $product['name'] }}', {{ $product['price'] }})">
                    Add to Cart
                </button>
            </li>
        @endforeach
        @livewire('cart')
    </ul>
</div>
