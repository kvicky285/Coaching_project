@extends('layouts.app')
@section('courses')
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
            <div class="text-lg font-sans font-light sepia-0"><a href="{{ route('courses') }}"><img src="../img/img-9.jpg" alt="" class="h-36 w-36 rounded-full hover:shadow-2xl">Short Hand</a></div>
            <div class="text-lg font-sans font-light"><a href="{{ route('courses') }}"><img src="../img/img-10.jpg" alt="" class="h-36 w-36 rounded-full hover:shadow-2xl">English Spoken</a></div>
            <div class="text-lg font-sans font-light"><a href="{{ route('courses') }}"><img src="../img/img-8.jpg" alt="" class="h-36 w-36 rounded-full hover:shadow-2xl">Web Designing</a></div>
            <div class="text-lg font-sans font-light"><a href="{{ route('courses') }}"><img src="../img/img-7.jpg" alt="" class="h-36 w-36 rounded-full hover:shadow-2xl">Web Development</a></div>
            <div></div>
        </div>
        <br>
    </div>
@endsection
