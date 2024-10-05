<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  <script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>
  @vite('resources/css/app.css')
  <title>Uplabdhi Classes</title>
</head>
<body>
<header class="bg-white">
        <nav class="flex justify-between items-center w-[92%]  mx-auto">
            <div>
                <img class="w-28 h-28 p-2 cursor-pointe rounded-full" src="../img/logo.png" alt="...">
            </div>
            <div class="nav-links md:static absolute text-black md:text-slate-700 md:bg-white md:min-h-fit min-h-[60vh] left-0 top-[-100%] md:w-auto  w-full flex items-center px-5">
                <ul class="flex md:flex-row flex-col md:items-center md:gap-[4vw] gap-8">
                    <li>
                        <a class="hover:text-gray-500 font-bold text-md" href="{{route('home')}}">Home</a>
                    </li>
                    <li>
                        <a class="hover:text-gray-500 font-bold text-md" href="{{route('about')}}">About</a>
                    </li>
                    <li>
                        <a class="hover:text-gray-500 font-bold text-md" href="{{route('courses')}}">Courses</a>
                    </li>
                    <li>
                        <a class="hover:text-gray-500 font-bold text-md" href="{{route('contact')}}">Contact Us</a>
                    </li>
                    
                </ul>
            </div>
            <div class="flex items-center gap-6">
                <button class="bg-[#a6c1ee] text-white px-5 py-2 rounded-full hover:bg-[#87acec]">Sign in</button>
                <ion-icon onclick="onToggleMenu(this)" name="menu" class="text-3xl cursor-pointer md:hidden"></ion-icon>
            </div>
    </header>
    <main>
        @yield("home")
        @yield("about")
        @yield('courses')
        @yield('contact')
    </main>
    <div class="h-auto bg-slate-600">
        <div class="grid grid-cols-2 justify-items-center">
            <div class="text-center text-xl p-8 text-white"><span><u>Courses</u></span>
                <ul class="text-sm font-serif font-medium p-3 text-white"> 
                    <li class="">DCA</li>
                    <li><a href="{{ route('courses') }}">ADCA</a></li>
                    <li><a href="{{ route('courses') }}">Tally</a></li>
                    <li><a href="{{ route('courses') }}">Shorthand</a></li>
                    <li><a href="{{ route('courses') }}">Typing</a></li>
                    <li><a href="{{ route('courses') }}">English Spoken</a></li>
                    <li><a href="{{ route('courses') }}">Web Designing</a></li>
                    <li><a href="{{ route('courses') }}">Web Development</a></li>
                </ul>
            </div>
            <div class="text-center text-xl p-8">
                <span class="text-white"><u>Contact Us</u></span>
                <ul class="text-sm font-serif font-medium p-3 text-white"> 
                    <li class="">Uplabdhi Classes</li>
                    <li>Nasriganj,Digha</li>
                    <li>Patna-800011</li>
                    <li>Ph: 9950879862</li>
                </ul>
            </div>
        </div>
    </div> 
    
    <script>
        const navLinks = document.querySelector('.nav-links')
        function onToggleMenu(e){
            e.name = e.name === 'menu' ? 'close' : 'menu'
            navLinks.classList.toggle('top-[9%]')
        }
    </script>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('slider', () => ({
            currentIndex: 1,
            images: [
                '../img/img-1.jpg',
                '../img/img-2.jpg',
                '../img/img-3.jpg',
                '../img/img-4.jpg',
                '../img/img-5.jpg'
            ],
            back() {
                if (this.currentIndex > 1) {
                    this.currentIndex = this.currentIndex - 1;
                }
            },
            next() {
                if (this.currentIndex < this.images.length) {
                    this.currentIndex = this.currentIndex + 1;
                } else if (this.currentIndex <= this.images.length){
                    this.currentIndex = this.images.length - this.currentIndex + 1
                }
            },
        }))
    })
</script>
</body>
</html>