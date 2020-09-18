@extends('layout')

@section("content")
<div class="w-screen h-screen flex flex-col items-center justify-center">
  <div class="mb-4 text-xl underline"><a href="/30/today/3">&laquo; Back</a></div>
  <div class="px-4 w-full">
    <div class="w-full embed-responsive aspect-ratio-16/9">
      <iframe width="560"
              height="315"
              class="embed-responsive-item"
              src="https://www.youtube.com/embed/C3tuz4BTjZw"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen></iframe>
    </div>
  </div>
  <div class="text-2xl px-4 text-center mt-4">
    <div class="font-bold uppercase border-2 border-red-500 bg-yellow-500 px-4">It is your birthday!!!</div>
    <div class="text-lg mt-4">Want some cake?</div>
  </div>
  <div class="mt-4 text-xl underline"><a href="/30/today/5">Here's some cake...</a></div>
</div>
@stop
