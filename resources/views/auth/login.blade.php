@extends('layouts.base')

@section('title', 'Вход')
@section('main')
            <div class="mt-5 mr-[36.5%] h-auto rounded-xl w-[30%] float-right bg-[#9B816E]">
                <div class="text-white ml-5 mt-5 text-xl font-black">ВХОД</div>

                <div class="ml-5 mt-5">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="text-white font-bold">ЭЛ. ПОЧТА</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="p-2 bg-[#F7D3B2] rounded-xl" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="text-white font-bold">ПАРОЛЬ</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="p-2 bg-[#F7D3B2] rounded-xl" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="p-3 bg-[#F7D3B2] rounded-lg" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="text-white font-bold" for="remember">
                                        ЗАПОМНИТЬ МЕНЯ
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                @if (Route::has('password.request'))
                                    <a class="text-[#F7D3B2] font-bold uppercase" href="{{ route('password.request') }}">
                                        Забыли пароль ?
                                    </a>
                                @endif
                                <br>
                                <button type="submit" class="bg-white hover:bg-[#F7D3B2] mt-5 pl-10 pr-10 pt-3 pb-3 font-black rounded-xl uppercase">
                                    ВОЙТИ
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
@endsection
