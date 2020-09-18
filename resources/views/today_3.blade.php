@extends('layout')

@section("content")
<div class="w-full h-screen flex flex-col items-center justify-center">
  <div class="mb-4 text-xl underline"><a href="/30/today/2">&laquo; Back</a></div>
  <div class="px-4 w-full">
    <div class="w-full embed-responsive aspect-ratio-16/9">
      <iframe width="560"
              height="315"
              class="embed-responsive-item"
              src="https://www.youtube.com/embed/FcbvKe34Zjw"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen></iframe>
    </div>
  </div>
  <div class="text-2xl px-4 text-center mt-4">
    <div class="font-bold uppercase border-2 px-4">It is your birthday.</div>
    <div class="text-lg mt-4">Not festive enough?</div>
  </div>
  <div class="mt-4 text-xl underline"><a href="/30/today/4">Try here...</a></div>
</div>
@stop
