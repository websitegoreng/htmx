<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            {{ __('Tambah Produk') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col justify-center w-full">
                <form class="flex flex-col gap-y-4 justify-center w-3/4 mx-auto" action="{{ route('product.store') }}"
                    method="post" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="flex flex-col">
                        <label for="name">Nama</label>
                        <input name="name" type="text" placeholder="Product Name">
                    </div>
                    <div class="flex flex-col">
                        <label for="price_old">Price Old</label>
                        <input name="price_old" type="number">
                    </div>
                    <div class="flex flex-col">
                        <label for="price_new">Price New</label>
                        <input name="price_new" type="number">
                    </div>
                    <div class="flex flex-col">
                        <label for="available_stock">Product Stock Available</label>
                        <input name="available_stock" type="number">

                    </div>
                    <div class="flex flex-col">
                        <label for="stock">Product Stock</label>
                        <input name="stock" type="number">
                    </div>

                    <div class="flex flex-col">
                        <label for="rating">Product Rating</label>
                        <input name="rating" type="number">
                    </div>
                    <div class="flex flex-col">
                        <label for="desc">Description</label>
                        <textarea class="h-32" name="desc" placeholder="Deskripsi Produk"></textarea>
                    </div>
                    <div class="flex flex-col">
                        <label for="productId">Category</label>
                        <select name="product_category_id">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="flex flex-col">
                        <label for="rating">Brand</label>
                        <input name="brand" type="text" placeholder="Nama Brand">
                    </div>

                    <div class="flex my-6">
                        <x-primary-button>save</x-primary-button>
                    </div>


                </form>

                {{-- <a class="flex mx-auto w-3/4 my-6" href="{{ route('product.store') }}">
                    <x-primary-button>save</x-primary-button>
                </a> --}}
            </div>
        </div>
    </div>
</x-app-layout>
