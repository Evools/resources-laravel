<header class="flex items-center justify-between max-w-[1280px] m-auto">
    <div class="flex items-center gap-6">
        <a href="/" class="flex items-center gap-2 text-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 40 40">
                <path fill="#fff"
                    d="M20 0c11.046 0 20 8.954 20 20v14a6 6 0 0 1-6 6H21v-8.774c0-2.002.122-4.076 1.172-5.78a10 10 0 0 1 6.904-4.627l.383-.062a.8.8 0 0 0 0-1.514l-.383-.062a10 10 0 0 1-8.257-8.257l-.062-.383a.8.8 0 0 0-1.514 0l-.062.383a9.999 9.999 0 0 1-4.627 6.904C12.85 18.878 10.776 19 8.774 19H.024C.547 8.419 9.29 0 20 0Z">
                </path>
                <path fill="#fff"
                    d="M0 21h8.774c2.002 0 4.076.122 5.78 1.172a10.02 10.02 0 0 1 3.274 3.274C18.878 27.15 19 29.224 19 31.226V40H6a6 6 0 0 1-6-6V21ZM40 2a2 2 0 1 1-4 0 2 2 0 0 1 4 0Z">
                </path>
            </svg>
            <span>Resources</span>
        </a>
    </div>
    <div class="flex items-center gap-2">
        @guest
            <button id="addResourceModal" type="button"
                    class="flex items-center gap-2 px-4 py-2 border
            border-stone-800 rounded-full text-white hover:bg-stone-800 transition">
                Добавить ресурс
                <span>→</span>
            </button>
        @endguest
        @auth
{{--            <p class="text-lg text-white">Добро пожаловать: <span class="font-bold">{{ auth()->user()->email  }}</span> </p>--}}
            <div class="flex items-center gap-2">
                <a href="/admin" class="flex items-center gap-2 px-4 py-2 border border-stone-800 rounded-full text-white hover:bg-stone-800 transition">Админ панель</a>
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="flex items-center gap-2 px-4 py-2 border border-stone-800 rounded-full text-white hover:bg-stone-800 transition">
                        <span>Выйти</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                            <path fill-rule="evenodd" d="M17 4.25A2.25 2.25 0 0 0 14.75 2h-5.5A2.25 2.25 0 0 0 7 4.25v2a.75.75 0 0 0 1.5 0v-2a.75.75 0 0 1 .75-.75h5.5a.75.75 0 0 1 .75.75v11.5a.75.75 0 0 1-.75.75h-5.5a.75.75 0 0 1-.75-.75v-2a.75.75 0 0 0-1.5 0v2A2.25 2.25 0 0 0 9.25 18h5.5A2.25 2.25 0 0 0 17 15.75V4.25Z" clip-rule="evenodd" />
                            <path fill-rule="evenodd" d="M14 10a.75.75 0 0 0-.75-.75H3.704l1.048-.943a.75.75 0 1 0-1.004-1.114l-2.5 2.25a.75.75 0 0 0 0 1.114l2.5 2.25a.75.75 0 1 0 1.004-1.114l-1.048-.943h9.546A.75.75 0 0 0 14 10Z" clip-rule="evenodd" />
                        </svg>

                    </button>
                </form>
            </div>
        @endauth
        @include('components.select-modal')
    </div>
</header>
