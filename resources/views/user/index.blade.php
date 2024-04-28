<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing - Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <header class="flex my-4 w-full border-b-2 border-indigo-600">
        <nav class="mb-4 flex items-center w-full" style="justify-content: space-around;">
            <div class="w-1/5">
                <img class="w-[50px]" src="{{asset('/Assets/logo/logo.png')}}">
            </div>
            <div class="flex space-x-16">
                <a href="#">Home</a>
                <a href="#">Product's</a>
                <a href="#">Contact Us</a>
            </div>
            <div class="flex justify-center items-center gap-x-4">
                <input class="border-2 rounded-md border-indigo-600 p-2" type="search" placeholder="Find Anything...">
                <div class="flex items-center gap-x-4">
                    <a href="#">Buy</a>
                    <a href="#">
                        <div class="flex px-6 py-2 rounded-md shadow-sm shadow-indigo-400 bg-indigo-600 text-white font-medium hover:bg-indigo-500">Login/Sign Up</div>
                    </a>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section class="flex w-full justify-center items-center mx-auto">
            <div class="flex ">
                <div class="flex flex-col">
                    <h1>Merah Putih</h1>
                    <p>Toko online masa depan bangsa indonesia</p>
                </div>
                <a href="#">
                    <div class="text-white font-medium text-center px-6 py-2 rounded-md border-2 border-amber-500 bg-amber-500 shadow-md shadow-amber-600 hover:bg-amber-400">
                        Explore More
                    </div>
                </a>
            </div>
            <div class="w-full">
                <img src="{{asset('/Assets/banner/home.png')}}" alt="">
            </div>
        </section>
    </main>
    <footer>

    </footer>
</body>
</html>
