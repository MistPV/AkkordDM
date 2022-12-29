@extends('layouts.base')
@section('title', 'Мои объявления')
@section('main')
@auth
     @if(Auth::user()->isAdmin())
        <div class="mt-5 mb-5 ml-14 mr-40 h-auto rounded-xl w-[83%] float-right bg-[#9B816E]">
            @if (count($bbs) > 0)
                    @foreach ($bbs as $bb)
                        <div class="flex bg-white m-5 rounded-xl uppercase">
                            <img class="m-5 rounded-xl w-32" src="/public/images/{{ $bb->image }}">
                            <p class="font-black text-lg mt-5 w-full">{{ $bb->title }}<br><br><span class="bg-[#F7D3B2] pl-5 pr-5 pt-3 pb-3 rounded-xl">цена: {{ $bb->price }} ₽</span></p>
                            <br>
                            <a class="text-white bg-[#836F6F] hover:bg-[#F7D3B2] hover:text-black font-black p-5 m-14 rounded-xl" href="{{ route('bb.edit', ['bb' => $bb->id]) }}">Изменить</a>
                            <br>
                            <a class="text-white bg-[#836F6F] hover:bg-[#F7D3B2] hover:text-black font-black p-5 m-14 rounded-xl" href="{{ route('bb.delete', ['bb' => $bb->id]) }}">Удалить</a>
                        </div>
                    @endforeach
            @endif
            <div class="mr-5 ml-5 mt-14 mb-14">
                <a href="{{ route('bb.add') }}" class="text-white text-4xl uppercase bg-[#836F6F] hover:bg-[#F7D3B2] hover:text-black font-black p-5 rounded-xl pl-[49%] pr-[48.6%] border-4 border-white text-center">+</a>
            </div>
        </div>
     
     @else
    <script type="text/javascript">
          location.href='http://akkorddm.ru';
          </script>
    </script> 
    @endif
@endauth
@endsection
