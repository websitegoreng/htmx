<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            {{ __('Overview') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col">
                <h1 class="my-6 text-2xl font-medium">List Produk</h1>
                <x-list-table>
                    @foreach ($products as $product)
                        <tbody class="text-center">
                            <tr>
                                <td>
                                    <a href="{{ route('product.show', $product) }}">
                                        10
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('product.edit', $product) }}">
                                        <x-secondary-button>Edit Produk</x-secondary-button>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    @endforeach
                </x-list-table>
            </div>
            <div class="flex gap-x-6 my-6">
                <a href="{{ route('product.create') }}">
                    <x-primary-button>Tambah Produk</x-primary-button>
                </a>

            </div>
        </div>
    </div>
</x-app-layout>
