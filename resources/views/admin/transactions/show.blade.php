<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            {{ __('Detail Transaksi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-full sm:px-6 lg:px-8">
            <div class="flex flex-col gap-y-4 w-full justify-center">
                <table class="flex flex-col table-auto border-separate border-2 shadow-md">
                    <tbody>
                        <tr>
                            <td>Code Order</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Tanggal Dipesan</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Nama Penerima</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>2</td>
                        </tr>
                    </tbody>
                </table>
                <div class="flex flex-col justify-start">
                    <h1>Produk yang di pesan</h1>
                    <div class="flex">
                        <img src="">
                        <h1></h1>
                        <h3></h3>
                        <h5></h5>
                        <p class="flex justify-end"></p>
                    </div>
                </div>
            </div>
            <a class="flex my-6" href="{{route('transactions')}}">
                <x-primary-button>back</x-primary-button>
            </a>
        </div>
    </div>
</x-app-layout>
