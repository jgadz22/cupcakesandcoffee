<x-layout>

    @include('partials._hero')

    @include('partials._search')

    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">


        {{-- @if (count($listings) == 0)
            <p>No listings found</p>
        @endif --}}


        {{-- unless is like an if-else statement --}}
        @unless (count($products) == 0)

            @foreach ($products as $product)
                <x-product-card :product="$product" />
            @endforeach
        @else
            <p>No listings found</p>
        @endunless

    </div>

    <div class="mt-6 p-4">
        {{ $products->links() }}
    </div>

</x-layout>
