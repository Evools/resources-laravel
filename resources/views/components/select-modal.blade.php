<div id="modal" class="fixed z-10 inset-0 overflow-y-auto hidden">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-[#09090A] opacity-75"></div>
        </div>
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>​
        <div
            class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="sm:flex sm:items-start">
                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                        <div class="flex flex-col space-y-1.5 text-center sm:text-left">
                            <h2 id="radix-:R2a6taH1:" class="text-lg font-medium">
                                Добавить ресурс
                            </h2>
                            <p id="radix-:R2a6taH2:" class="text-sm text-muted-foreground">
                                Отправьте ресурс для
                                других дизайнеров. Если нам это тоже понравится, мы опубликуем это.
                            </p>
                        </div>
                        <div class="items-left flex flex-col gap-1">
                            <div class="grid flex-1 gap-1"></div>
                            <div class="relative py-4">
                                <div class="absolute left-3 top-1/2 -translate-y-1/2 transform">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="text-muted-foreground">
                                        <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71">
                                        </path>
                                        <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71">
                                        </path>
                                    </svg>
                                </div>
                                <input class="flex h-10 rounded-md border px-3 py-2 text-sm w-full pl-8" id="link"
                                    placeholder="Ссылка на ресурс" value="">
                            </div>
                            <div>
                                <label id="listbox-label"
                                    class="block text-sm font-medium leading-6 text-gray-900">Выбери
                                    категорию</label>
                                <div class="relative mt-2">
                                    <button type="button"
                                        class="relative w-full cursor-default rounded-md bg-white py-1.5 pl-3 pr-10 text-left text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 sm:text-sm sm:leading-6"
                                        aria-haspopup="listbox" aria-expanded="false" aria-labelledby="listbox-label">
                                        <span class="flex items-center">
                                            <span class="ml-3 block truncate">Не выбрано</span>
                                        </span>
                                        <span
                                            class="pointer-events-none absolute inset-y-0 right-0 ml-3 flex items-center pr-2">
                                            <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                                aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M10 3a.75.75 0 01.55.24l3.25 3.5a.75.75 0 11-1.1 1.02L10 4.852 7.3 7.76a.75.75 0 01-1.1-1.02l3.25-3.5A.75.75 0 0110 3zm-3.76 9.2a.75.75 0 011.06.04l2.7 2.908 2.7-2.908a.75.75 0 111.1 1.02l-3.25 3.5a.75.75 0 01-1.1 0l-3.25-3.5a.75.75 0 01.04-1.06z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </button>
                                    <ul class="absolute z-10 mt-1 max-h-28 w-full overflow-auto rounded-md bg-white py-1 text-base shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm hidden"
                                        tabindex="-1" role="listbox" aria-labelledby="listbox-label">
                                        @foreach ($categories as $category)
                                            <li class="text-gray-900 cursor-default select-none relative py-2 pl-3 pr-9"
                                                id="listbox-option-0" role="option">
                                                <span class="font-normal block truncate">
                                                    {{ $category->name }}
                                                </span>
                                            </li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col-reverse sm:flex-row sm:space-x-2 sm:justify-start">
                            <form class="flex w-full flex-row justify-between">
                                <button class="rounded-xl text-sm font-medium px-4 py-2 bg-stone-900 text-white mt-4"
                                    type="submit">Отправить ресурс
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                <button id="closeModalButton" type="button"
                    class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                    Закрыть
                </button>
            </div>
        </div>
    </div>
</div>
