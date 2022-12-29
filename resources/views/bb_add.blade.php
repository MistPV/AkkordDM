@extends('layouts.base')
@section('title', 'Добавление объявления :: Мои объявления')
@section('main')
@auth
     @if(Auth::user()->isAdmin())
        <div class="mt-5 ml-14 mr-40 h-auto rounded-xl w-[83%] float-right bg-[#9B816E]">
            <form action="{{ route('bb.store') }}" method="POST">
                @csrf
                <div class="bg-white m-5 p-5 font-black rounded-xl uppercase">
                    <label for="txtTitle">Товар</label>
                    <input name="title" id="txtTitle" class=" ml-5 p-5 bg-[#F7D3B2] rounded-xl">
                </div>
                <div class="bg-white m-5 p-5 font-black rounded-xl uppercase">
                    <label for="txtContent">Описание</label>
                    <textarea name="content" id="txtContent" class="ml-5 p-5 mt-5 bg-[#F7D3B2] border-0 rounded-xl"></textarea>
                </div>
                <div class="bg-white m-5 p-5 font-black rounded-xl uppercase">
                    <label for="txtPrice">Цена</label>
                    <input name="price" id="txtPrice" class="ml-5 p-5 bg-[#F7D3B2] rounded-xl">
                </div>
                <div class="bg-white m-5 p-5 font-black rounded-xl uppercase">
                    <label for="txtimage">Фото</label>
                    <input type="file" name="image" id="txtPrice" class="ml-5 bg-[#F7D3B2] rounded-xl">
                </div>
                <div class="bg-white m-5 p-5 font-black rounded-xl uppercase">
                    <label for="txtCategory">Категория</label>
                    <select name="category" class="bg-[#F7D3B2] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                      <option selected>Выберите категорию</option>
                      <option value="Гитары">Гитары</option>
                      <option value="Барабаны">Барабаны</option>
                      <option value="Клавишные">Клавишные</option>
                    </select>
                </div>
                <input type="submit" class="bg-white m-5 p-5 font-black rounded-xl uppercase" value="Добавить">
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
