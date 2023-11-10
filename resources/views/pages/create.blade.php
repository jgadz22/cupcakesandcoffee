<x-layout>

    <x-card class="p-10 max-w-lg mx-auto mt-24 text-black">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Create a Product Information
            </h2>
            <p class="mb-4">Post a product to make it available!</p>
        </header>

        <form method="POST" action="/products" enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <label for="productName" class="inline-block text-lg mb-2">Product Name</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="productName"
                    value="{{ old('productName') }}" />
                @error('productName')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror

            </div>

            <div class="mb-6">
                <label for="priceBefore" class="inline-block text-lg mb-2">Price Before</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="priceBefore"
                    placeholder="Example: Senior Laravel Developer" value="{{ old('priceBefore') }}" />
                @error('priceBefore')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="priceNow" class="inline-block text-lg mb-2">Price Now</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="priceNow"
                    placeholder="Example: Remote, Boston MA, etc" value="{{ old('priceNow') }}" />
                @error('priceNow')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="size" class="inline-block text-lg mb-2">Size</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="size"
                    value="{{ old('size') }}" />
                @error('size')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="flavors" class="inline-block text-lg mb-2">
                    Flavors (Comma Separated)
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="flavors"
                    placeholder="Example: Laravel, Backend, Postgres, etc" value="{{ old('flavors') }}" />
                @error('flavors')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="productPhoto" class="inline-block text-lg mb-2">
                    Product Photo
                </label>
                <input type="file" class="border border-gray-200 rounded p-2 w-full" name="productPhoto" />
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
                   {{ old('productIngredients') }}
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
                   {{ old('productDescription') }}
                </textarea>
                @error('productDescription')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                    Create Product
                </button>

                <a href="/" class="text-black ml-4"> Back </a>
            </div>
        </form>
    </x-card>

</x-layout>
