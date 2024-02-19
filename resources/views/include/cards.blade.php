<div class="grid-card">
    @foreach ($posts as $post)
        <div
            class="cursor-pointer border border-stone-800 rounded-xl bg-[#09090A] transition-all hover:opacity-80 w-full text-white">
            <a href="{{ $post->href }}" target="_blank" class="w-full">
                <div class="flex flex-col space-y-1.5 p-6">
                    <img alt="Resource Image" loading="lazy" width="40" height="40" decoding="async" data-nimg="1"
                        class="mb-2 rounded-md object-cover"
                        src="https://designresourc.es/_next/image?url=%2Fimg%2F5ea6cfa29a5ca9162765aed7_5ea04e67bc13ef6060f34b23_figma.png&w=48&q=75">
                    <h3 class="text-lg text-white"> {{ $post->name }} </h3>
                    <p class="text-[12px] text-white/50">{{ $post->content }}</p>
                </div>
                <div class="p-2 pt-0"></div>
                <div class="items-center border-t border-stone-800 p-3 flex justify-between">
                    <div class="inline-flex items-center rounded-full border border-stone-800 px-3.5 py-1.5 text-xs">
                        {{ $post->category->name }}
                    </div>
                    <button data-state="closed">
                        <a target="_blank" href="https://www.figma.com/?ref=designresourc.es">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="ml-2 h-[16px] w-[16px] cursor-pointer text-white opacity-40 hover:opacity-60"
                                title="Open Link">
                                <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                                <polyline points="15 3 21 3 21 9"></polyline>
                                <line x1="10" y1="14" x2="21" y2="3"></line>
                            </svg>
                        </a>
                    </button>
                </div>
            </a>
        </div>
    @endforeach
</div>
