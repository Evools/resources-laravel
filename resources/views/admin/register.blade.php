@extends('layouts.app')

@section('title', 'Войти')

@section('content')
    <div
        class="m-auto py-3 border-b border-slate-100/10 sticky top-0 bg-[#09090A] flex items-center justify-center min-h-screen">
        <div class="bg-white shadow-md border border-gray-200 rounded-lg max-w-sm p-4 sm:p-6 lg:p-8 w-full">
            <form class="space-y-6" action="{{ route('register') }}" method="post" novalidate>
                @csrf
                <h3 class="text-xl font-medium text-gray-900 ">Регистрация</h3>
                <div>
                    <label for="name" class="text-sm font-medium text-gray-900 block mb-2">Ваше имя</label>
                    <input type="text" name="name" id="name" value="{{old('name')}}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="John Doe" required="">
                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="email" class="text-sm font-medium text-gray-900 block mb-2">Ваша почта</label>
                    <input type="email" name="email" id="email" value="{{old('email')}}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="name@company.com" required="">
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="password" class="text-sm font-medium text-gray-900 block mb-2">Ваш пароль</label>
                    <input type="password" name="password" id="password" placeholder="••••••••"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        required="">
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit"
                    class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Регистрация</button>
            </form>
        </div>
    </div>
@endsection
