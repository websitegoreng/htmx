<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            {{ __('Overview') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col gap-y-4 w-full justify-center">
                <table class="flex flex-col table-auto border-separate border-2 shadow-md">
                    <tbody>
                        <tr>
                            <td>Nama Produk</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Kode SKU</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Harga</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Kategori</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Tanggal Dibuat</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Stok Produk</td>
                            <td>2</td>
                        </tr>
                    </tbody>
                </table>
                <div class="flex flex-col justify-start">
                    <h1>Foto Produk</h1>
                    <div class="flex gap-x-4 w-1/4 rounded-md shadow-md">
                        <img src="" alt="png">
                    </div>
                </div>
            </div>
            <a class="flex my-6" href="{{route('product')}}">
                <x-primary-button>back</x-primary-button>
            </a>
        </div>
        </div>
    </div>
</x-app-layout>
