<x-layout>
    @include('partials._search')

    <a href="/" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Back
    </a>
    <div class="mx-4 text-black">
        <x-card class="p-10">
            <div class="flex flex-col items-center justify-center text-center">
                <img class="w-48 mr-6 mb-6"
                    src="{{ $product->productPhoto ? asset('storage/' . $product->productPhoto) : asset('images/no-image.png') }}"
                    alt="" />

                <h3 class="text-2xl mb-2">{{ $product->productName }}</h3>
                <div class="text-xl font-bold mb-4">Price Before: <s>{{ $product->priceBefore }}</s></div>
                <div class="text-xl font-bold mb-4">Price Now: {{ $product->priceNow }}</div>
                <div>Flavors:</div>
                <x-product-flavors :flavorsCsv="$product->flavors" />
                <div class="text-lg my-4">
                    Product Size: {{ $product->size }}
                </div>
                <div class="border border-gray-200 w-full mb-6"></div>
                <div>
                    <h3 class="text-3xl font-bold mb-4">
                        Product Ingredients
                    </h3>
                    <div class="text-lg space-y-6">
                        <p>
                            {{ $product->productIngredients }}
                        </p>
                    </div>

                    <h3 class="text-3xl font-bold mb-4">
                        Product Description
                    </h3>
                    <div class="text-lg space-y-6">
                        <p>
                            {{ $product->productDescription }}
                        </p>
                    </div>
                </div>
            </div>
        </x-card>

        <x-card class="mt-4 p-2 flex space-x-6 justify-center">
            <a href="/products/{{ $product->id }}/edit">
                <i class="fa-solid fa-pencil"></i> Edit
            </a>

            <form method="POST" action="/products/{{ $product->id }}">
                @csrf
                @method('DELETE')
                <button class="text-red-500">
                    <i class="fa-solid fa-trash"></i> Delete
                </button>
            </form>
        </x-card>
    </div>


</x-layout>
