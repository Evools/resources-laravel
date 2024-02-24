@extends('layouts.app')

@section('title', 'Главная')

@section('content')
    <div class="m-auto py-3 border-b border-slate-100/10 sticky top-0 bg-[#09090A]">
        @include('layouts.nav')
    </div>
    <div class="max-w-[1280px] m-auto mt-5 text-white">
        <h2 class="text-2xl font-bold rounded-xl mb-5">Подготовка для публикации</h2>
        <form class="w-full" method="post" action="{{ route('savePost') }}">
            @csrf
            <input type="hidden" name="post_id" value="{{ $post->id }}">

            <div class="mb-5">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Название</label>
                <input name="name" type="text" id="name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Введите название" required value="{{$post->name}}" />
                @error('name')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-5">
                <label for="content" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Описание</label>
                <input name="content" type="text" id="content" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Введите описание" value="{{$post->content}}"/>
                @error('content')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-5">
                <label for="href" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ссылка</label>
                <input name="href" type="text" id="href" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Введите ссылку" value="{{$post->href}}"/>
                @error('href')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-5">
                <label for="category_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Категория</label>
                <select name="category_id" id="category_id" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light">
                    <option value="" selected>Выберите категорию</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ $category->id == $post->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <p class="mb-3">Статус публикации</p>
            <span class="rounded-full px-3 py-1 text-xs font-semibold {{ $post->status === 'Опубликовано' ? 'bg-green-500 text-white' : 'bg-red-500 text-white' }}">
                {{ $post->status }}
            </span>

            <div class="flex items-start mb-5 mt-5">
                <label for="publishStatus" class="text-sm font-medium text-gray-900 dark:text-gray-300">Изменить статус:</label>
                <select id="publishStatus" name="status" onchange="this.form.submit()" class="ml-2 block w-auto py-1 px-2 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800">
                    <option value="Опубликовано" {{ $post->status === 'Опубликовано' ? 'selected' : '' }}>Опубликовано</option>
                    <option value="Неопубликовано" {{ $post->status !== 'Опубликовано' ? 'selected' : '' }}>Неопубликовано</option>
                </select>
            </div>

            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Сохранить</button>
        </form>
    </div>
@endsection
