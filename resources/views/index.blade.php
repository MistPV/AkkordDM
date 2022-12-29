@extends('layouts.base')
@section('title', 'Главная')
@section('main')
    <div class="mt-5 ml-14 mr-40 h-auto rounded-xl w-[65%] float-right bg-[#9B816E]">
        @if (count($bbs) > 0)
            @foreach ($bbs as $bb)
            <div class="flex bg-white m-5 rounded-xl uppercase shadow-lg shadow-black">
                <img class="m-5 rounded-xl w-32" src="/public/images/{{ $bb->image }}">
                <p class="font-black text-lg mt-5 w-full">{{ $bb->title }}<br><br><span class="bg-[#F7D3B2] pl-5 pr-5 pt-3 pb-3 rounded-xl shadow-lg shadow-[#F7D3B2]">цена: {{ $bb->price }} ₽</span></p>
                <br>
                <a class="text-white bg-[#836F6F] hover:bg-[#F7D3B2] hover:text-black font-black p-5 m-14 rounded-xl hover:shadow-lg hover:shadow-[#F7D3B2]" href="{{ route('detail', ['bb' => $bb->id]) }}">КУПИТЬ</a>
            </div>
            @endforeach
        @endif
    </div>
        <div class="mt-5 h-auto w-[14.5%] rounded-xl float-right bg-[#9B816E]">
            <form method="get" action="#" >
                <input type="text" class="block mt-5 ml-5 mr-5 p-2.5 w-58 rounded-xl font-bold text-black bg-[#F7D3B2] text-center placeholder-black shadow-lg shadow-black"  placeholder="ПОИСК">
            </form>
            <span class="font-black text-xl ml-5 text-white">КАТЕГОРИИ:</span>
            <div class="mt-5 ml-5 mb-10">
                <a href="" class="bg-[#F7D3B2] font-black pl-10 pr-10 pt-3 pb-3 uppercase rounded-xl shadow-lg shadow-black">гитары</a>
            </div>
            <div class="mt-5 ml-5 mb-10">
                <a href="" class="bg-[#F7D3B2] font-black pl-10 pr-10 pt-3 pb-3 uppercase rounded-xl shadow-lg shadow-black">барабаны</a>
            </div>
            <div class="mt-5 ml-5 mb-10">
                <a href="" class="bg-[#F7D3B2] font-black pl-10 pr-10 pt-3 pb-3 uppercase rounded-xl shadow-lg shadow-black">клавишные</a>
            </div>
        </div>
@endsection('main')
