@extends('layouts.base')

@section('title', 'Вход')
@section('main')
            <div class="mt-5 mr-[36.5%] h-auto rounded-xl w-[30%] float-right bg-[#9B816E]">
                <div class="text-white ml-5 mt-5 text-xl font-black">РЕГИСТРАЦИЯ</div>

                <div class="ml-5 mt-5">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="text-white font-bold">ИМЯ</label>

                            <div class="col-md-6">
                                <input id="name" type="text" name="name" class="p-2 bg-[#F7D3B2] rounded-xl" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="text-white font-bold">ЭЛ. ПОЧТА</label>

                            <div class="col-md-6">
                                <input id="email" type="email" name="email" class="p-2 bg-[#F7D3B2] rounded-xl" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="text-white font-bold">ПАРОЛЬ</label>

                            <div class="col-md-6">
                                <input id="password" type="password" name="password" class="p-2 bg-[#F7D3B2] rounded-xl" required autocomplete="new-password">

                                @error('password')
                                    <span class="" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="text-white font-bold">ПОВТОРИТЕ ПАРОЛЬ</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="p-2 bg-[#F7D3B2] rounded-xl" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="bg-white hover:bg-[#F7D3B2] p-2 font-black rounded-xl uppercase">
                                    ЗАРЕГИСТРИРОВАТЬСЯ
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
@endsection
