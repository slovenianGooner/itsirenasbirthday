@extends('layout')

@section("content")
<div class="w-full h-screen flex flex-col items-center justify-center">
  <div class="mb-4 text-xl underline"><a href="/30/today/7">&laquo; Back</a></div>
  <div class="px-4 w-full">
    <img src="https://lambergh.com/wp-content/uploads/2016/11/glava-4.jpg"
         alt="">
  </div>
  <div class="text-2xl px-4 text-center mt-4">
    <div class="text-lg">Hotel Lambergh<sup>****</sup></div>
    <div class="text-lg">30.10, 31.10 and 1.11.2020.</div>
  </div>
  <div class="mt-4 text-xl flex items-center space-x-2">
    <span>With the kids</span>
    <svg class="w-6 h-6"
         fill="none"
         stroke="currentColor"
         viewBox="0 0 24 24"
         xmlns="http://www.w3.org/2000/svg">
      <path stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
    </svg>
  </div>
  <div class="mt-4 text-xl underline px-4 text-center"><a href="/30/today/9">Now I really want you to come with me...</a></div>

</div>
@stop
