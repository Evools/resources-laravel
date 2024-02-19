<?php

$arr_card = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1];

?>

<div class="grid grid-cols-3 gap-5 overflow-y-scroll min-h-96">
    @foreach ($arr_card as $card)
        <div class="p-5 border border-slate-200 rounded-lg bg-white transition-all hover:opacity-60 cursor-pointer">
            <div class="flex flex-col gap-2">
                <img src="" alt="">
                <h3 class="text-xl">Figma</h3>
                <p class="text-base">Design and collaborate all in the browser</p>
            </div>
            <div class="flex items-center justify-between pt-3 border-t border-slate-200 mt-4 text-[14px]">
                <span class="py-2 px-4 bg-slate-100 rounded-full">Design Tools</span>
                <a href="/" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-share-3" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M13 4v4c-6.575 1.028 -9.02 6.788 -10 12c-.037 .206 5.384 -5.962 10 -6v4l8 -7l-8 -7z" />
                    </svg>
                </a>
            </div>
        </div>
    @endforeach
</div>
