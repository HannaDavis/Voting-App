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
        <div class="flex items-center space-x-4 ml-6 ">
            <button type="button"
                    class="flex items-center justify-center h-11 w-32 text-xs bg-blue-200 font-semibold rounded-xl border border-blue-200 hover:border-blue-400 ">
                <span>Reply</span>
            </button>
            <div
                class="hidden absolute z-10 w-104 text-left font-semibold text-sm bg-white shadow-dialog rounded-xl mt-2">
                <form action="#" class="space-y-4 px-4 py-6" method="post">
                    <div>
                        <textarea
                            class="w-full text-sm bg-gray-100 rounded-xl placeholder-gray-900 border-none px-4 py-2"
                            name="post_comment" id="post_comment" cols="30" rows="4"
                            placeholder="Go ahead, don't be shy.Share your thoughts..."></textarea>
                    </div>
                    <div class="flex items-center space-x-3">
                        <button type="button"
                                class="flex items-center justify-center h-11 w-1/2 text-xs bg-blue-200 font-semibold rounded-xl border border-blue-200 hover:border-blue-400 ">
                            Post Comment
                        </button>
                        <button type="button"
                                class="flex items-center justify-center w-32 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 ">
                            <span>Attach</span>
                        </button>
                    </div>
                </form>
            </div>
            <div class="relative">
                <button type="button"
                        class="flex items-center justify-center w-32 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 ">
                    <span>Set Status</span>
                </button>
                <div
                    class=" absolute z-20 w-76 text-left font-semibold text-sm bg-white shadow-dialog rounded-xl mt-2 px-6 py-6">
                    <form action="" method="post">
                        <div class="mt-2 px-4">
                            <div>
                                <label class="inline-flex items-center">
                                    <input class="form-radio" type="radio" checked="" name="radio-direct" value="1">
                                    <span class="ml-2">Open</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input class="form-radio" type="radio" name="radio-direct" value="2">
                                    <span class="ml-2">Considering</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input class="form-radio" type="radio" name="radio-direct" value="3">
                                    <span class="ml-2">In Progress</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input class="form-radio" type="radio" name="radio-direct" value="3">
                                    <span class="ml-2">Implemented</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input class="form-radio" type="radio" name="radio-direct" value="3">
                                    <span class="ml-2">Closed</span>
                                </label>
                            </div>
                        </div>
                        <div class="my-6">
                            <textarea name="update_comment" id="update_comment" cols="30" rows="3"
                                      class="w-full text-sm bg-gray-100 rounded-xl placeholder-gray-900 border-none px-4 py-2"
                                      placeholder="Add an update comment (optional)"></textarea>
                        </div>
                        <div class="flex items-center justify-between space-x-3">
                            <button type="button"
                                    class="flex items-center justify-center w-1/2 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 ">
                                <span>Attach</span>
                            </button>
                            <button type="submit"
                                    class="flex items-center justify-center w-1/2 h-11 text-xs bg-blue-200 font-semibold rounded-xl border border-blue-200 hover:border-blue-400 ">
                                <span>Update</span>
                            </button>
                        </div>
                        <div class="mt-6">
                            <label class="inline-flex items-center font-normal">
                                <input class="form-checkbox rounded bg-gray-200" name="notify_voters" type="checkbox" checked="">
                                <span class="ml-2">Notify All Voters</span>
                            </label>
                        </div>
                    </form>
                </div>
            </div>
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
                        <a href="" class="hover:underline">Status Changed to "Under Consideration"</a>
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
