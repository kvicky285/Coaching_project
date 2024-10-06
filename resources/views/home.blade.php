@extends("layouts.app")
@section("home")
<!-- component -->
<article x-data="slider" class="relative w-full flex flex-shrink-0 overflow-hidden">
    <div class="rounded-full bg-gray-600 text-white absolute top-5 right-5 text-sm px-2 text-center z-10">
        <span x-text="currentIndex"></span>/
        <span x-text="images.length"></span>
    </div>

    <template x-for="(image, index) in images">
        <figure class="h-96" x-show="currentIndex == index + 1" x-transition:enter="transition transform duration-300"
        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
        x-transition:leave="transition transform duration-300" x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0">
        <img :src="image" alt="Image" class="absolute inset-0 z-10 h-full w-full object-cover opacity-70" />
        <figcaption class="absolute inset-x-0 bottom-1 z-20 w-96 mx-auto p-4 font-light text-sm text-center tracking-widest leading-snug bg-gray-300 bg-opacity-25">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit praesentium voluptate iure sapiente sequi dolorem provident eum eaque maxime repellat eligendi perferendis, 
            nostrum soluta esse. Vel unde  doloribus?
        </figcaption>
        </figure>
    </template>

    <button @click="back()"
        class="absolute left-14 top-1/2 -translate-y-1/2 w-11 h-11 flex justify-center items-center rounded-full shadow-md z-10 bg-gray-100 hover:bg-gray-200">
        <svg class=" w-8 h-8 font-bold transition duration-500 ease-in-out transform motion-reduce:transform-none text-gray-500 hover:text-gray-600 hover:-translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7">
            </path>
        </svg>
    </button>

    <button @click="next()"
    class="absolute right-14 top-32 translate-y-1/2 w-11 h-11 flex justify-center items-center rounded-full shadow-md z-10 bg-gray-100 hover:bg-gray-200">
        <svg class=" w-8 h-8 font-bold transition duration-500 ease-in-out transform motion-reduce:transform-none text-gray-500 hover:text-gray-600 hover:translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
        xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path>
        </svg>
    </button>
</article>

<div class="p-8 bg-slate-200">
    <div class="md:flex flex-row">
        <div class="basis-1/2">
            <div class="px-5">
                <img src="../img/img-2.jpg" alt="" class="h-80 w-10/12 rounded-3xl hover:opacity-50">
            </div>
            
        </div>
        <div class="basis-1/2">
            <span class="px-5"><h2 class="text-center font-serif font-semibold text-2xl opacity-70">About Us</h2></span>
            <p class="text-justify">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut inventore culpa dolor maiores. Illo animi adipisci
                aspernatur cum quo magnam rerum itaque labore dolor esse. Blanditiis sint expedita aliquid nemo?
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet expedita exercitationem iste quidem voluptatibus pariatur, 
                repellendus delectus voluptatem molestias modi. Ab voluptate laudantium velit fuga nemo aliquam natus iure beatae?
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate corporis magnam neque doloribus explicabo iusto unde velit. 
                Veniam, enim? Quas minima corrupti, officia esse voluptates tenetur deleniti. Veniam, adipisci totam!
            </p>
        </div>
    </div>
    <div class="text-center p-5 text-red-500"><span class="inline-block align-baseline"><a href="{{ route('about') }}">Read More</a></span></div>
</div>

    <div class="bg-orange-400 text-center h-auto">
        <div class="p-8"><span class="font-serif font-bold text-2xl opacity-70">Courses we Offered</span></div>
        <div class="flex flex-auto justify-between ">
            <div></div>
            <div class="text-lg font-sans font-light"><a href="{{ route('courses') }}"><img src="../img/img-6.jpg" alt="" class="h-36 w-36 rounded-full hover:shadow-2xl">DCA</a></div>
            <div class="text-lg font-sans font-light"><a href="{{ route('courses') }}"><img src="../img/img-4.jpg" alt="" class="h-36 w-36 rounded-full hover:shadow-2xl">ADCA</a></div>
            <div class="text-lg font-sans font-light"><a href="{{ route('courses') }}"><img src="../img/img-5.jpg" alt="" class="h-36 w-36 rounded-full hover:shadow-2xl">Tally</a></div>
            <div class="text-lg font-sans font-light"><a href="{{ route('courses') }}"><img src="../img/img-11.jpg" alt="" class="h-36 w-36 rounded-full hover:shadow-2xl">Typing</a></div>
            <div></div>
        </div><br>
        <div class="flex flex-auto justify-between ">
            <div></div>
            <div class="text-lg font-sans font-light"><a href="{{ route('courses') }}"><img src="../img/img-9.jpg" alt="" class="h-36 w-36 rounded-full hover:shadow-2xl">Short Hand</a></div>
            <div class="text-lg font-sans font-light"><a href="{{ route('courses') }}"><img src="../img/img-10.jpg" alt="" class="h-36 w-36 rounded-full hover:shadow-2xl">English Spoken</a></div>
            <div class="text-lg font-sans font-light"><a href="{{ route('courses') }}"><img src="../img/img-8.jpg" alt="" class="h-36 w-36 rounded-full hover:shadow-2xl">Web Designing</a></div>
            <div class="text-lg font-sans font-light"><a href="{{ route('courses') }}"><img src="../img/img-7.jpg" alt="" class="h-36 w-36 rounded-full hover:shadow-2xl">Web Development</a></div>
            <div></div>
        </div>
        <br>
    </div>
@endsection
