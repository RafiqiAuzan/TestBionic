<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite('resources/css/app.css')
        <!-- Styles -->
    </head>
    <body class="antialiased ">
        <section class="lg:grid">
            <div class="bg-white">
                <div class="container mx-auto p-5 bg-black">
                    <div class=" bg-blue-900 p-5">
                        <h1 class="text-center text-white"> 1</h1>
                    </div>
                    <div class="lg:grid lg:grid-cols-2 lg:grid-rows-1 grid-rows-2 mt-5 gap-5">
                        <div class=" bg-blue-900 lg:p-5 p-2">
                            <h1 class="text-center text-white"> 2</h1>
                        </div>
                        <div class=" bg-blue-900 mt-5 lg:mt-0 lg:p-5 p-2">
                            <h1 class="text-center text-white"> 3</h1>
                        </div>
                    </div>
                    
                    <div class="lg:grid lg:grid-cols-2 lg:grid-rows-1 mt-5 gap-5 bg-black">
                        <div>
                            <div class="bg-blue-900 lg:p-4 p-3">
                                <div class=" bg-red-500 p-12 border-8 border-black">
                                <h1 class="text-center text-white"> 4</h1>
                                </div>
                            </div>
                            <div class="grid grid-cols-3 gap-5 bg-black my-2 lg:mt-5">
                                <h1 class="text-center text-white bg-blue-900 py-5 border-8 border-black"> 5</h1>
                                <h1 class="text-center text-white bg-blue-900 py-5 border-8 border-black"> 6</h1>
                                <h1 class="text-center text-white bg-blue-900 py-5 border-8 border-black"> 7</h1>
                            </div>
                        </div>
                        <div class="lg:grid lg:grid-rows-3 flex grid-rows-1 bg-blue-900 p-2 gap-1">
                            <h1 class="text-center text-white bg-red-500 p-2 border-8 lg:w-full w-1/3 border-black"> 8</h1>
                            <h1 class="text-center text-white bg-red-500 p-2 border-8 lg:w-full w-1/3 border-black"> 9</h1>
                            <h1 class="text-center text-white bg-red-500 p-2 border-8 lg:w-full w-1/3 border-black"> 10</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
