@extends('layouts.base')
@section('title', $bb->title)
@section('main')
        <div class="mt-5 ml-14 mr-40 h-auto rounded-xl w-[83%] float-right bg-[#9B816E]">
            <div class="flex bg-white m-5 rounded-xl uppercase">
            <img class="m-5 rounded-xl w-96" src="/public/images/{{ $bb->image }}">
            <p class="font-black text-lg mt-5 mb-5 w-full">{{ $bb->title }}<br><br><span class="bg-[#F7D3B2] pl-5 pr-5 pt-3 pb-3 rounded-xl">цена: {{ $bb->price }} ₽</span><br><br>Описание:<br><span>{{ $bb->content }}</span><br><br><span>Автор: {{ $bb->user->name }}</span></p>
            <br>
            <a class="text-white bg-[#836F6F] hover:bg-[#F7D3B2] text-center hover:text-black font-black pt-40 m-5 rounded-xl" href="{{ route('index') }}">На перечень объявлений</a>
            <br>
            </div>
        </div>
@endsection('main')
