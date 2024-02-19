<ul class="flex flex-col gap-4 w-[140px]">
    <li>
        <a href="/">Все</a>
    </li>
    @foreach ($categories as $category)
        <li>
            <a href="/">{{ $category->name }}</a>
        </li>
    @endforeach
</ul>
