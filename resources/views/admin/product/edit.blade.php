<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            {{ __('Edit Produk') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col justify-center w-full">
                <x-form-edit-product></x-form-edit-product>
                <a class="flex mx-auto w-3/4 my-6" href="{{route('product')}}">
                    <x-primary-button>save</x-primary-button>
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
