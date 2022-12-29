@extends('layouts.base')
@section('title', 'Удаление объявления :: Мои объявления')
@section('main')
@auth
     @if(Auth::user()->isAdmin())
      <div class="mt-5 ml-14 mr-40 h-auto rounded-xl w-[83%] float-right bg-[#9B816E]">
        <div class="bg-white m-5 p-5 font-black rounded-xl uppercase">
          <h2>{{ $bb->title }}</h2>
        </div>
        <div class="bg-white m-5 p-5 font-black rounded-xl uppercase">
          <img class="m-5 rounded-xl w-32" src="/public/images/{{ $bb->image }}">
        </div>
        <div class="bg-white m-5 p-5 font-black rounded-xl uppercase">
          <p>{{ $bb->price }} руб.</p>
        </div>
        <div class="bg-white m-5 p-5 font-black rounded-xl uppercase">
          <p>{{ $bb->content }}</p>
         </div>
        <div class="bg-white m-5 p-5 font-black rounded-xl uppercase">
          <p>{{ $bb->category }}</p>
        </div>
        <div class="bg-white m-5 p-5 font-black rounded-xl uppercase"> 
          <p>Автор: {{ $bb->user->name }}</p>
        </div>
          <form action="{{ route('bb.destroy', ['bb' => $bb->id]) }}"
                method="POST">
              @csrf
              @method('DELETE')
              <input type="submit" class="bg-white m-5 p-5 font-black rounded-xl uppercase" value="Удалить">
          </form>
      </div>
   @else
    <script type="text/javascript">
            alert('Вы не администратор!');
          location.href='http://akkorddm.ru';
          </script>
    </script> 
    @endif
@endauth
@endsection('main')
