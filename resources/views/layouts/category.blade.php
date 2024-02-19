<ul class="flex flex-col gap-4 w-[140px] text-stone-600">
    <li>
        <a href="/" class="text-white">Все</a>
    </li>
    @foreach ($categories as $category)
        <li>
            <a href="/category/{{ $category->id }}" class="hover:text-white transition">{{ $category->name }}</a>
        </li>
    @endforeach
</ul>
