<x-layout>

    <x-card class="p-10 max-w-lg mx-auto mt-24 text-black">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Edit the Information
            </h2>
            <p class="mb-4">Product: {{ $product->productName }}</p>
        </header>

        <form method="POST" action="/products/{{ $product->id }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-6">
                <label for="productName" class="inline-block text-lg mb-2">Product Name</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="productName"
                    value="{{ $product->productName }}" />
                @error('productName')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror

            </div>

            <div class="mb-6">
                <label for="priceBefore" class="inline-block text-lg mb-2">Price Before</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="priceBefore"
                    placeholder="Example: Senior Laravel Developer" value="{{ $product->priceBefore }}" />
                @error('priceBefore')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="priceNow" class="inline-block text-lg mb-2">Price Now</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="priceNow"
                    placeholder="Example: Remote, Boston MA, etc" value="{{ $product->priceNow }}" />
                @error('priceNow')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="size" class="inline-block text-lg mb-2">Size</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="size"
                    value="{{ $product->size }}" />
                @error('size')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="flavors" class="inline-block text-lg mb-2">
                    Flavors (Comma Separated)
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="flavors"
                    placeholder="Example: Laravel, Backend, Postgres, etc" value="{{ $product->flavors }}" />
                @error('flavors')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="productPhoto" class="inline-block text-lg mb-2">
                    Product Photo
                </label>
                <input type="file" class="border border-gray-200 rounded p-2 w-full" name="productPhoto" />

                <img class="w-48 mr-6 mb-6"
                    src="{{ $product->productPhoto ? asset('storage/' . $product->productPhoto) : asset('images/no-image.png') }}"
                    alt="" />

                @error('productPhoto')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="productIngredients" class="inline-block text-lg mb-2">
                    Product Ingredients
                </label>
                <textarea class="border border-gray-200 rounded p-2 w-full" name="productIngredients" rows="10"
                    placeholder="Include tasks, requirements, salary, etc">
                   {{ $product->productIngredients }}
                </textarea>
                @error('productIngredients')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="productDescription" class="inline-block text-lg mb-2">
                    Product Description
                </label>
                <textarea class="border border-gray-200 rounded p-2 w-full" name="productDescription" rows="10"
                    placeholder="Include tasks, requirements, salary, etc">
                    {{ $product->productDescription }}
                </textarea>
                @error('productDescription')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                    Update Product
                </button>

                <a href="/" class="text-black ml-4"> Back </a>
            </div>
        </form>
    </x-card>

</x-layout>
