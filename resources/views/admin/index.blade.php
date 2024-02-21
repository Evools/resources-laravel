@extends('layouts.app')

@section('title', 'Главная')

@section('content')
    <div class="m-auto py-3 border-b border-slate-100/10 sticky top-0 bg-[#09090A]">
        @include('layouts.nav')
    </div>

    <div class="relative m-auto mt-10 max-w-[1280px] overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Название
                </th>
                <th scope="col" class="px-6 py-3">
                    Описание
                </th>
                <th scope="col" class="px-6 py-3">
                    Ссылка
                </th>
                <th scope="col" class="px-6 py-3">
                    Статус
                </th>
                <th scope="col" class="px-6 py-3">
                    Действие
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
                <tr class="bg-white border-b">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                       {{ $post->name }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $post->content }}
                    </td>
                    <td class="px-6 py-4">
                        <a class="underline text-blue-500" href="{{ $post->href }}">{{ $post->href }}</a>
                    </td>
                    <td class="px-6 py-4">
                        <span class="rounded-full px-3 py-1 text-xs font-semibold
                            {{ $post->status === 'Опубликовано' ? 'bg-green-500 text-white' : 'bg-red-500 text-white' }}">
                            {{ $post->status }}
                        </span>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex items-center gap-6">
                            <a href="{{ route('home', $post->id) }}" class="text-blue-500 hover:underline">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                    <path d="m5.433 13.917 1.262-3.155A4 4 0 0 1 7.58 9.42l6.92-6.918a2.121 2.121 0 0 1 3 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 0 1-.65-.65Z" />
                                    <path d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0 0 10 3H4.75A2.75 2.75 0 0 0 2 5.75v9.5A2.75 2.75 0 0 0 4.75 18h9.5A2.75 2.75 0 0 0 17 15.25V10a.75.75 0 0 0-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5Z" />
                                </svg>
                            </a>
                            <a href="{{ route('home', $post->id) }}" class="text-red-500 hover:underline">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                    <path fill-rule="evenodd" d="M8.75 1A2.75 2.75 0 0 0 6 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 1 0 .23 1.482l.149-.022.841 10.518A2.75 2.75 0 0 0 7.596 19h4.807a2.75 2.75 0 0 0 2.742-2.53l.841-10.52.149.023a.75.75 0 0 0 .23-1.482A41.03 41.03 0 0 0 14 4.193V3.75A2.75 2.75 0 0 0 11.25 1h-2.5ZM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4ZM8.58 7.72a.75.75 0 0 0-1.5.06l.3 7.5a.75.75 0 1 0 1.5-.06l-.3-7.5Zm4.34.06a.75.75 0 1 0-1.5-.06l-.3 7.5a.75.75 0 1 0 1.5.06l.3-7.5Z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
