@props(['product'])

<x-card>
    <div class="flex text-black">
        <img class="hidden w-48 mr-6 md:block"
            src="{{ $product->productPhoto ? asset('storage/' . $product->productPhoto) : asset('images/no-image.png') }}"
            alt="" />
        <div>
            <h3 class="text-2xl">
                <a href="/products/{{ $product->id }}">{{ $product->productName }}</a>
            </h3>
            <div class="text-xl mb-4">
                <p>Price Before: <s>$ {{ $product->priceBefore }}</s></p>
            </div>
            <div class="text-xl font-bold mb-4">
                <p>Price Now: $ {{ $product->priceNow }}</p>
            </div>
            <x-product-flavors :flavorsCsv="$product->flavors" />

        </div>
    </div>
</x-card>
