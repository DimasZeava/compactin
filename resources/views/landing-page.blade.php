<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/styles.css">
    @vite('resources/css/app.css')
    <title>Compactin</title>
</head>

<body>
    <div class="h-screen">
        <nav class="flex px-32 py-10">
            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                <div class="logo">
                    <img src="{{ asset('images/compactin-logo.svg') }}" alt="compactin-logo">
                    <a href=""></a>
                </div>
                <div class="flex sm:justify-stretch ">
                    <ul
                        class="flex flex-1 items-center justify-center sm:justify-center mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
                        <li><a class="text-md font-semibold text-white hover:text-red-500 p-5" href="">Home</a>
                        </li>
                        <li><a class="text-md font-semibold text-white hover:text-red-500 p-5"
                                href="">Template</a></li>
                        <li><a class="text-md font-semibold text-white hover:text-red-500 p-5"
                                href="">Request</a></li>
                    </ul>
                </div>
        </nav>
        <div class="flex justify-center z-10 items-center h-5/6">
            <div class="flex flex-col items-center gap-5">
                <h1 class="text-6xl font-bold text-white text-center w-4/6">Request Your Product Website With <span
                        class="text-red-600">CompactIn</span></h1>
                <p class="text-2xl leading-7 font-light text-white text-center w-4/6">Tired with social media marketing?
                    Make your product goes online with website, be well known, and gain more customer with it!</p>
                <button class="bg-red-600 hover:bg-red-900 text-white font-bold py-3 px-6 rounded mt-10">Order
                    Now!</button>
            </div>
        </div>
        <div class="absolute bottom-0 z-0 w-full" style="pointer-events: none;">
            <div class="flex justify-between">
                <img src="{{ asset('images/background-left.png') }}">
                <img src="{{ asset('images/background-right.png') }}">
            </div>
        </div>
    </div>
    <div class="h-screen">
        <section class="flex flex-col items-center py-20">
            <h2 class="text-4xl font-bold text-white mb-20">Why Request on <span class="text-red-500">Us?</span></h2>
            <div class="flex flex-col justify-stretch gap-10 px-10 w-4/5">
                <div class="border-2 border-red-600 shadow-lg shadow-red-950 rounded-lg p-6">
                    <div class="flex gap-5 items-center">
                        <i class="fa-regular fa-window-maximize text-red-600 text-4xl mx-5"></i>
                        <div>
                            <h3 class="text-2xl font-semibold text-white mb-4">Optimized User Experience</h3>
                            <p class="text-white">Our design is focusing easy to use for user and giving product information to attract potential customer</p>
                        </div>
                    </div>
                </div>
                <div class="border-2 border-red-600 shadow-lg shadow-red-950 rounded-lg p-6">
                    <div class="flex gap-5 items-center">
                        <i class="fa-regular fa-money-bill-1 text-red-600 text-4xl mx-5"></i>
                        <div>
                            <h3 class="text-2xl font-semibold text-white mb-4">Secured Payment</h3>
                            <p class="text-white">We provide the payment when you receive our final prototype to you and you can pay to us as agreement</p>
                        </div>
                    </div>
                </div>
                <div class="border-2 border-red-600 shadow-lg shadow-red-950 rounded-lg p-6">
                    <div class="flex gap-5 items-center">
                        <i class="fa fa-user-group text-red-600 text-4xl mx-5"></i>
                        <div>
                            <h3 class="text-2xl font-semibold text-white mb-4">Discussion with Us</h3>
                            <p class="text-white">You can discuss with us from adding extra page or anything you need. Extra page from template can be charge</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

</html>
