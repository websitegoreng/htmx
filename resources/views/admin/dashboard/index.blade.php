<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            {{ __('Overview') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-3 gap-2">
                <div class="flex flex-col w-full ">
                    <div class="flex flex-col justify-start my-4">
                            <h1 class="text-xl my-2 font-bold">Total Pendapatan</h1>
                            <p class="text-sm my-2 font-medium">Dalam juta rupiah</p>
                        </div>
                    <div class="border-2 shadow-md rounded-lg flex justify-center items-center">
                        <table class="table-fixed border-separate border-spacing-2 border border-slate-500 rounded-md">
                            <thead>
                                <tr>
                                    <th>Aug</th>
                                    <th>Sep</th>
                                    <th>Oct</th>
                                    <th>Nov</th>
                                    <th>Des</th>
                                    <th>Jan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>10</td>
                                    <td>20</td>
                                    <td>30</td>
                                    <td>40</td>
                                    <td>70</td>
                                    <td>60</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="flex flex-col w-full gap-x-6 ">
                    <div class="flex flex-col justify-start my-4">
                        <h1 class="text-xl my-2 font-bold">Total User</h1>
                        <p class="text-sm my-2 font-medium">6 Bulan terakhir</p>
                    </div>
                    <div class="border-2 shadow-md rounded-lg flex justify-center items-center border-2 shadow-md rounded-lg">
                        <table class="table-fixed border-separate border-spacing-2 border border-slate-500 rounded-md">
                            <thead>
                                <tr>
                                    <th>Aug</th>
                                    <th>Sep</th>
                                    <th>Oct</th>
                                    <th>Nov</th>
                                    <th>Des</th>
                                    <th>Jan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>10</td>
                                    <td>20</td>
                                    <td>30</td>
                                    <td>40</td>
                                    <td>70</td>
                                    <td>60</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="flex flex-col w-full gap-x-6">
                    <div class="flex flex-col justify-start my-4">
                        <h1 class="text-xl my-2 font-bold">Order Terbanyak</h1>
                        <p class="text-sm my-2 font-medium">Dalam juta rupiah</p>
                    </div>
                    <div class="border-2 shadow-md rounded-lg flex justify-center items-center border-2 shadow-md rounded-lg">
                        <table class="table-fixed border-separate border-spacing-2 border border-slate-500 rounded-md">
                            <thead>
                                <tr>
                                    <th>Aug</th>
                                    <th>Sep</th>
                                    <th>Oct</th>
                                    <th>Nov</th>
                                    <th>Des</th>
                                    <th>Jan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>10</td>
                                    <td>20</td>
                                    <td>30</td>
                                    <td>40</td>
                                    <td>70</td>
                                    <td>60</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="">
                <h1 class="my-6 text-2xl font-medium">Transaksi terbaru</h1>
                <x-table></x-table>
            </div>
        </div>
    </div>
</x-app-layout>
