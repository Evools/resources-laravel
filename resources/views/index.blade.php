@extends('layouts.app')

@section('title', 'Главная')

@section('content')
    <div class="m-auto py-3 border-b border-slate-100/10 sticky top-0 bg-[#09090A]">
        @include('layouts.nav')
    </div>
    <div class="flex items-start gap-12 mt-4 max-w-[1280px] m-auto">
        <div class=" sticky top-20 max-w-64">
            @include('layouts.category')
        </div>
        @include('include.cards')
    </div>
@endsection
