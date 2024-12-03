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
    @if (session('success'))
        <div class="alert"
            style="background-color: #28a745; color: white; padding: 10px; border-radius: 5px; text-align: center;">
            {{ session('success') }}
        </div>
    @endif

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
                        <li><x-link href="#">Home</x-link>
                        </li>
                        <li><x-link href="#">Template</x-link></li>
                        <li><x-link href="#">Request</x-link></li>
                    </ul>
                </div>
        </nav>
        <div class="flex justify-center z-10 items-center h-5/6">
            <div class="flex flex-col items-center gap-5">
                <h1 class="text-6xl font-bold text-white text-center w-4/6">Request Your Product Website With <span
                        class="text-red-600">CompactIn</span></h1>
                <p class="text-2xl leading-7 font-light text-white text-center w-4/6">Tired with social media marketing?
                    Make your product goes online with website, be well known, and gain more customer with it!</p>
                <x-button>Order Now!</x-button>
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
        <div class="flex flex-col items-center my-20">
            <h2 class="text-4xl font-bold text-white mb-20">Why Request on <span class="text-red-600">Us?</span></h2>
            <div class="flex flex-col justify-stretch gap-10 px-10 w-4/5">
                <x-feature-card icon="fa-regular fa-window-maximize" title="Optimized User Experience"
                    description="Our design is focusing easy to use for user and giving product information to attract potential customer" />
                <x-feature-card icon="fa-regular fa-money-bill-1" title="Secured Payment"
                    description="We provide the payment when you receive our final prototype to you and you can pay to us as agreement" />
                <x-feature-card icon="fa-regular fa-user" title="Discussion with Us"
                    description="You can discuss with us from adding extra page or anything you need. Extra page from template can be charge" />
            </div>
        </div>
    </div>
    <div class="h-screen">
        <div class="flex flex-col items-center my-20">
            <h2 class="text-4xl font-bold text-white mb-10"><span class="text-red-600">Our</span> Product</h2>
            <div class="flex flex-row justify-center items-center">
                <div class="flex flex-row gap-3">
                    @foreach ($products as $product)
                        <x-product-card :titleProduct="$product->titleProduct" :category="$product->category->name" :imageSrc="$product->imageSrc" />
                    @endforeach
                </div>
            </div>
            <div class="flex flex-row items-center gap-32 mt-10">
                <button class="bg-red-600 hover:bg-red-900 text-white font-bold py-3 px-5 rounded-full"><i
                        class="fa fa-chevron-left"></i></button>
                <div class="flex gap-2">
                    <span class="w-3 h-3 bg-red-600 rounded-full"></span>
                    <span class="w-3 h-3 bg-gray-400 rounded-full"></span>
                    <span class="w-3 h-3 bg-gray-400 rounded-full"></span>
                </div>
                <button class="bg-red-600 hover:bg-red-900 text-white font-bold py-3 px-5 rounded-full"><i
                        class="fa fa-chevron-right"></i></button>
            </div>
        </div>
    </div>
    <div class="h-screen">
        <div class="flex flex-col items-center my-20">
            <h2 class="text-4xl font-bold text-white mb-10">Request Your <span class="text-red-600">Website</span>
            </h2>
            <form action="/submit-order" method="POST" class="flex flex-col justify-stretch w-4/6">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-white text-sm font-bold mb-2">Name</label>
                    <input type="text" name="name" id="name"
                        class="shadow appearance-none border-2 border-red-600 rounded-lg w-full py-2 px-3 text-gray-400 leading-tight focus:outline-none focus:border-red-950 bg-transparent"
                        required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-white text-sm font-bold mb-2">Email</label>
                    <input type="email" name="email" id="email"
                        class="shadow appearance-none border-2 border-red-600 rounded-lg w-full py-2 px-3 text-gray-400 leading-tight focus:outline-none focus:border-red-950 bg-transparent"
                        required>
                </div>
                <div class="mb-4">
                    <label for="template" class="block text-white text-sm font-bold mb-2">Template</label>
                    <select name="template" id="template"
                        class="shadow appearance-none border-2 border-red-600 rounded-lg w-full py-2 px-3 text-gray-400 leading-tight focus:outline-none focus:border-red-950 bg-transparent"
                        required>
                        <option value="template_00">Choose your template</option>
                        <option value="template_0">I Want Order Custom Template</option>
                        <option value="template_1">Template 1</option>
                        <option value="template_2">Template 2</option>
                        <option value="template_3">Template 3</option>
                        <option value="template_4">Template 4</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="message" class="block text-white text-sm font-bold mb-2">Message</label>
                    <textarea name="message" id="message" rows="4"
                        class="shadow appearance-none border-2 border-red-600 rounded-lg w-full py-2 px-3 text-gray-400 leading-tight focus:outline-none focus:border-red-950 bg-transparent"
                        required></textarea>
                </div>
                <div class="flex items-center justify-center my-5">
                    <button type="submit"
                        class="bg-red-600 hover:bg-red-900 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Request
                        Now!</button>
                </div>
            </form>
        </div>
    </div>
    <div class="h-36 bg-red-600">
        <div class="flex flex-row justify-between p-10">
            <img src="{{ asset('images/SediaSelaras-footer.png') }}" alt="">
            <div class="flex flex-row">
                <ul class="flex flex-row justify-evenly gap-5 items-center">
                    <li><a href="#" class="text-white font-semibold hover:text-gray-300">FAQ</a></li>
                    <li><a href="#" class="text-white font-semibold hover:text-gray-300">Contact Us</a></li>
                    <li><a href="#" class="text-white font-semibold hover:text-gray-300">Help</a></li>
                </ul>
            </div>
        </div>
    </div>
    </div>
</body>

</html>
