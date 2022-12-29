@extends('layouts.base')
@section('title', 'Правка объявления :: Мои объявления')
@section('main')
@auth
     @if(Auth::user()->isAdmin())
        <div class="mt-5 ml-14 mr-40 h-auto rounded-xl w-[83%] float-right bg-[#9B816E]">
            <form action="{{ route('bb.update', ['bb' => $bb->id]) }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="bg-white m-5 p-5 font-black rounded-xl uppercase">
                    <label for="txtTitle">Товар</label>
                    <input name="title" id="txtTitle" class=" ml-5 p-5 bg-[#F7D3B2] rounded-xl" value="{{ $bb->title }}">
                </div>
                <div class="bg-white m-5 p-5 font-black rounded-xl uppercase">
                    <label for="txtContent">Описание</label>
                    <textarea name="content" id="txtContent" class="ml-5 p-5 bg-[#F7D3B2] rounded-xl" >{{ $bb->content }}</textarea>
                </div>
                <div class="bg-white m-5 p-5 font-black rounded-xl uppercase">
                    <label for="txtPrice">Цена</label>
                    <input name="price" id="txtPrice" class="ml-5 p-5 bg-[#F7D3B2] rounded-xl" value="{{ $bb->price }}">
                </div>
                <div class="bg-white m-5 p-5 font-black rounded-xl uppercase">
                    <label for="txtimage">Фото</label>
                    <input type="file" name="image" id="txtPrice" class="ml-5 bg-[#F7D3B2] rounded-xl" value="{{ $bb->image }}">
                </div>
                <div class="bg-white m-5 p-5 font-black rounded-xl uppercase">
                    <label for="txtCategory">Категория</label>
                    <input name="category" id="txtPrice" class="ml-5 bg-[#F7D3B2] p-5 rounded-xl" value="{{ $bb->category }}">
                </div>
                <input type="submit" class="bg-white hover:bg-[#F7D3B2] bg m-5 p-5 font-black rounded-xl uppercase" value="Сохранить">
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
@endsection
