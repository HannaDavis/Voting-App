<x-app-layout>
    <div>
        <a href="/" class="flex items-center font-semibold hover:underline">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
            </svg>
            <span class="ml-2">All Ideas</span>
        </a>
    </div>

    <div class="idea-container bg-white rounded-xl flex">
        <div class="flex px-4 py-6">
            <div class="flex-none">
                <a href="#" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar"
                         class="w-14 h-14 rounded-xl">
                </a>
            </div>
            <div class="mx-4">
{{--                <h4 class="text-xl font-semibold">--}}
{{--                    <a href="" class="hover:underline">A random title goes here</a>--}}
{{--                </h4>--}}
                <div class="text-gray-600 mt-3 line-clamp-3">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur dolore fugit itaque labore
                    molestiae neque reiciendis unde! Architecto aspernatur assumenda consectetur cupiditate delectus
                    dolorum eligendi esse harum iusto, labore, maiores molestiae molestias natus nesciunt nihil.
                </div>
                <div class="flex items-center justify-between mt-6">
                    <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                        <div class="font-bold text-gray-900">John Doe</div>
                        <div>&bull;</div>
                        <div>Category 1</div>
                        <div>&bull;</div>
                        <div class="text-gray-900">3 Comments</div>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div class="bg-gray-200 sm:text-xs font-bold uppercase
                                leading-none rounded-full text-center w-28 h-7 py-2 px-4">Open
                        </div>
                        <button class="relative bg-gray-100 hover:bg-gray-200
                                rounded-full h-7
                                ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-24" viewBox="0 0 20 20"
                                 fill="currentColor">
                                <path
                                    d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z"/>
                            </svg>
                            <ul class="absolute w-44 font-semibold hidden
                                bg-white shadow-lg rounded-xl py-3 ml-8">
                                <li><a href="#" class="hover:bg-gray-100 px-5 py-3 block">Mark as Spam</a></li>
                                <li><a href="#" class="hover:bg-gray-100 px-5 py-3 block">Delete Post</a></li>

                            </ul>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end idea container --}}
    <div class="buttons-container flex items-center justify-between mt-6">
        <div class="flex items-center space-x-4 ml-6">
            <button type="button"
                    class="flex items-center justify-center h-11 w-32 text-xs bg-blue-200 font-semibold rounded-xl border border-blue-200 hover:border-blue-400 ">
                <span>Reply</span>
            </button>
            <button type="button"
                    class="flex items-center justify-center w-32 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 ">
                <span>Set Status</span>
            </button>
        </div>
        <div class="flex items-center space-x-3">
            <div class="bg-white font-semibold text-center rounded-xl px-3 py-2">
                <div class="text-xl leading-snug">12</div>
                <div class="text-gray-400 text-xs leading-none">Votes</div>
            </div>
            <button type="button"
                    class="flex items-center justify-center w-32 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 uppercase">
                <span>Vote</span>
            </button>
        </div>
    </div>
    {{--    end buttons-container--}}

    <div class="comments-container space-y-6 ml-16 my-8">
        <div class="comment-container bg-white rounded-xl flex">
            <div class="flex px-4 py-6">
                <div class="flex-none">
                    <a href="#" class="flex-none">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=2" alt="avatar"
                             class="w-14 h-14 rounded-xl">
                    </a>
                </div>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="" class="hover:underline">A random title goes here</a>
                    </h4>
                    <div class="text-gray-600 mt-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur dolore fugit itaque labore
                        molestiae neque reiciendis unde! Architecto aspernatur assumenda consectetur cupiditate delectus
                        dolorum eligendi esse harum iusto, labore, maiores molestiae molestias natus nesciunt nihil.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <div class="font-bold text-gray-900">John Doe</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <button class="relative bg-gray-100 hover:bg-gray-200
                                rounded-full h-7
                                ">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-24" viewBox="0 0 20 20"
                                     fill="currentColor">
                                    <path
                                        d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z"/>
                                </svg>
                                <ul class="absolute w-44 font-semibold hidden
                                bg-white shadow-lg rounded-xl py-3 ml-8">
                                    <li><a href="#" class="hover:bg-gray-100 px-5 py-3 block">Mark as Spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 px-5 py-3 block">Delete Post</a></li>

                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--        end comment-container--}}

        <div class="comment-container bg-white rounded-xl flex">
            <div class="flex px-4 py-6">
                <div class="flex-none">
                    <a href="#" class="flex-none">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=4" alt="avatar"
                             class="w-14 h-14 rounded-xl">
                    </a>
                    <div class="text-center uppercase text-blue-900 text-xs font-bold mt-1">Admin</div>
                </div>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="" class="hover:underline">Status Changed to "Under Construction"</a>
                    </h4>
                    <div class="text-gray-600 mt-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur dolore fugit itaque labore
                        molestiae neque reiciendis unde! Architecto aspernatur assumenda consectetur cupiditate delectus
                        dolorum eligendi esse harum iusto, labore, maiores molestiae molestias natus nesciunt nihil.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <div class="font-bold text-blue-900">Andrea</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <button class="relative bg-gray-100 hover:bg-gray-200
                                rounded-full h-7
                                ">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-24" viewBox="0 0 20 20"
                                     fill="currentColor">
                                    <path
                                        d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z"/>
                                </svg>
                                <ul class="absolute w-44 font-semibold hidden
                                bg-white shadow-lg rounded-xl py-3 ml-8">
                                    <li><a href="#" class="hover:bg-gray-100 px-5 py-3 block">Mark as Spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 px-5 py-3 block">Delete Post</a></li>

                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--        end comment-container--}}

        <div class="comment-container bg-white rounded-xl flex">
            <div class="flex px-4 py-6">
                <div class="flex-none">
                    <a href="#" class="flex-none">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=4" alt="avatar"
                             class="w-14 h-14 rounded-xl">
                    </a>
                </div>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="" class="hover:underline">A random title goes here</a>
                    </h4>
                    <div class="text-gray-600 mt-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur dolore fugit itaque labore
                        molestiae neque reiciendis unde! Architecto aspernatur assumenda consectetur cupiditate delectus
                        dolorum eligendi esse harum iusto, labore, maiores molestiae molestias natus nesciunt nihil.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <div class="font-bold text-gray-900">John Doe</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <button class="relative bg-gray-100 hover:bg-gray-200
                                rounded-full h-7
                                ">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-24" viewBox="0 0 20 20"
                                     fill="currentColor">
                                    <path
                                        d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z"/>
                                </svg>
                                <ul class="absolute w-44 font-semibold hidden
                                bg-white shadow-lg rounded-xl py-3 ml-8">
                                    <li><a href="#" class="hover:bg-gray-100 px-5 py-3 block">Mark as Spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 px-5 py-3 block">Delete Post</a></li>

                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
{{--        end comment-container--}}
    </div>
    {{--    end comments-container--}}
</x-app-layout>
