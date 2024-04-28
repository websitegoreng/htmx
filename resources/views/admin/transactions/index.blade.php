<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            {{ __('Overview') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="">
                <h1 class="my-6 text-2xl font-medium">Transaksi terbaru</h1>
                <x-table></x-table>
            </div>
            <div class="flex justify-end my-6">
                <a href="{{route('transactions.detail')}}">
                    <x-primary-button>
                        Detail
                    </x-primary-button>
                </a>

            </div>
        </div>
    </div>
</x-app-layout>
