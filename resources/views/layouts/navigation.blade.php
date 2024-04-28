<aside x-data="{ open: false }" class="flex flex-col bg-white border-r border-gray-100 w-1/5">
    <!-- Primary Navigation Menu -->
    <div class=" flex max-w-7xl my-10 px-2 sm:px-4 lg:px-6">
        <div class="flex flex-col items-start gap-y-6">
            <div class="flex justify-center items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-logo class="ml-10 block h-9 w-auto fill-current text-gray-800" />
                    </a>
            </div>
            <div class="hidden my-6 sm:-my-px sm:ml-10 sm:flex pl-2 focus:border-indigo-600 active:border-indigo-600 border-l-2 border-transparent hover:border-indigo-600"    ">
                    <a class="font-medium text-sm" href="{{route('dashboard')}}">
                        {{ __('Dashboard') }}
                    </a>
            </div>
            <div class="hidden my-6 sm:-my-px sm:ml-10 sm:flex pl-2 focus:border-indigo-600 active:border-indigo-600 border-l-2 border-transparent hover:border-indigo-600"">
                    <a class="font-medium text-sm" href="{{route('transactions')}}">
                        {{ __('Transactions') }}
                    </a>
            </div>
            <div class="hidden my-6 sm:-my-px sm:ml-10 sm:flex pl-2 focus:border-indigo-600 active:border-indigo-600 border-l-2 border-transparent hover:border-indigo-600">
                    <a class="font-medium text-sm" href="{{route('product')}}">
                        {{ __('Product') }}
                    </a>
            </div>
</aside>
