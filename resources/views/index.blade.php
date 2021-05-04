<x-app-layout>x

    <div class="filters flex space-x-6">
        <div class="w-1/3">
            <select name="category" id="category" class="w-full border-none rounded-xl px-4 py-2">
                <option value="Category One">Category 1</option>
                <option value="Category Two">Category 2</option>
                <option value="Category Three">Category 3</option>
                <option value="Category Four">Category 4</option>
            </select>
        </div>

        <div class="w-1/3">
            <select name="other_filters" id="other_filters" class="w-full border-none rounded-xl px-4 py-2">
                <option value="Filter One">Filter 1</option>
                <option value="Filter Two">Filter 2</option>
                <option value="Filter Three">Filter 3</option>
                <option value="Filter Four">Filter 4</option>
            </select>
        </div>

        <div class="w-2/3 relative">

            <input type="search" placeholder="Find an idea"
                   class="border-none w-full rounded-xl bg-white px-4 py-2 pl-8 placeholder-gray-900">
            <div class="absolute top-0 flex items-center h-full ml-2">
                <svg class="w-4 text-gray-700" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                </svg>
            </div>
        </div>
    </div>
    {{--    Edn filters --}}
    <div class="ideas-container space-y-6 my-6">
        <div class="idea-container bg-white rounded-xl flex
                    hover:shadow-md transition duration-150 ease-in cursor-pointer">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">2</div>
                    <div class="text-gray-500">Votes</div>
                </div>

                <div class="mt-8">
                    <button class="w-20 bg-gray-200 font-bold
                text-xs uppercase rounded-xl py-4 px-3
                 transition duration-300 transform border-b-4 hover:border-gray-300">Vote
                    </button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="#" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar"
                         class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="" class="hover:underline">A random title goes here</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur dolore fugit itaque labore
                        molestiae neque reiciendis unde! Architecto aspernatur assumenda consectetur cupiditate delectus
                        dolorum eligendi esse harum iusto, labore, maiores molestiae molestias natus nesciunt nihil
                        nobis nulla, numquam quae recusandae repellendus repudiandae ullam ut vel! Adipisci at commodi
                        cumque, delectus deserunt dolorum enim error esse exercitationem fugiat, inventore itaque iusto
                        minus mollitia obcaecati, quaerat tenetur voluptates voluptatibus. Aspernatur expedita impedit
                        laborum laudantium, magni modi necessitatibus numquam omnis, perspiciatis quis quo quod tempore
                        ullam unde vitae. Aliquid animi eaque iusto labore laudantium modi nobis officiis, placeat
                        praesentium, repellat sit, veritatis voluptatem?
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <div>10 hours ago</div>
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
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-24" viewBox="0 0 20 20" fill="currentColor">
                                  <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                </svg>
                                <ul class="absolute w-44 font-semibold
                                bg-white shadow-lg rounded-xl py-3 ml-8">
                                    <li><a href="#" class="hover:bg-gray-100 px-5 py-3 block">Mark as Spam</a> </li>
                                    <li><a href="#" class="hover:bg-gray-100 px-5 py-3 block">Delete Post</a> </li>

                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="idea-container bg-white rounded-xl flex
                    hover:shadow-md transition duration-150 ease-in cursor-pointer">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-gray-500">Votes</div>
                </div>

                <div class="mt-8">
                    <button class="w-20 bg-blue-200 font-bold
                text-xs uppercase rounded-xl py-4 px-3
                 transition duration-300 transform border-b-4 hover:border-gray-300">Voted
                    </button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="#" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar"
                         class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="" class="hover:underline">A random title goes here</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur dolore fugit itaque labore
                        molestiae neque reiciendis unde! Architecto aspernatur assumenda consectetur cupiditate delectus
                        dolorum eligendi esse harum iusto, labore, maiores molestiae molestias natus nesciunt nihil
                        nobis nulla, numquam quae recusandae repellendus repudiandae ullam ut vel! Adipisci at commodi
                        cumque, delectus deserunt dolorum enim error esse exercitationem fugiat, inventore itaque iusto
                        minus mollitia obcaecati, quaerat tenetur voluptates voluptatibus. Aspernatur expedita impedit
                        laborum laudantium, magni modi necessitatibus numquam omnis, perspiciatis quis quo quod tempore
                        ullam unde vitae. Aliquid animi eaque iusto labore laudantium modi nobis officiis, placeat
                        praesentium, repellat sit, veritatis voluptatem?
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 Comments</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="bg-yellow-200 sm:text-xs font-bold uppercase
                                leading-none rounded-full text-center w-28 h-7 py-2 px-4">In Progress
                            </div>
                            <button class="relative bg-gray-100 hover:bg-gray-200
                                rounded-full h-7
                                ">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-24" viewBox="0 0 20 20" fill="currentColor">
                                  <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                </svg>
                                <ul class="absolute w-44 font-semibold
                                bg-white shadow-lg rounded-xl py-3 ml-8">
                                    <li><a href="#" class="hover:bg-gray-100 px-5 py-3 block">Mark as Spam</a> </li>
                                    <li><a href="#" class="hover:bg-gray-100 px-5 py-3 block">Delete Post</a> </li>

                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="idea-container bg-white rounded-xl flex
                    hover:shadow-md transition duration-150 ease-in cursor-pointer">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">32</div>
                    <div class="text-gray-500">Votes</div>
                </div>

                <div class="mt-8">
                    <button class="w-20 bg-gray-200 font-bold
                text-xs uppercase rounded-xl py-4 px-3
                 transition duration-300 transform border-b-4 hover:border-gray-300">Vote
                    </button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="#" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar"
                         class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="" class="hover:underline">A random title goes here</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur dolore fugit itaque labore
                        molestiae neque reiciendis unde! Architecto aspernatur assumenda consectetur cupiditate delectus
                        dolorum eligendi esse harum iusto, labore, maiores molestiae molestias natus nesciunt nihil
                        nobis nulla, numquam quae recusandae repellendus repudiandae ullam ut vel! Adipisci at commodi
                        cumque, delectus deserunt dolorum enim error esse exercitationem fugiat, inventore itaque iusto
                        minus mollitia obcaecati, quaerat tenetur voluptates voluptatibus. Aspernatur expedita impedit
                        laborum laudantium, magni modi necessitatibus numquam omnis, perspiciatis quis quo quod tempore
                        ullam unde vitae. Aliquid animi eaque iusto labore laudantium modi nobis officiis, placeat
                        praesentium, repellat sit, veritatis voluptatem?
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 Comments</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="bg-green-200 sm:text-xs font-bold uppercase
                                leading-none rounded-full text-center w-28 h-7 py-2 px-4">Implemented
                            </div>
                            <button class="relative bg-gray-100 hover:bg-gray-200
                                rounded-full h-7
                                ">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-24" viewBox="0 0 20 20" fill="currentColor">
                                  <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                </svg>
                                <ul class="absolute w-44 font-semibold
                                bg-white shadow-lg rounded-xl py-3 ml-8">
                                    <li><a href="#" class="hover:bg-gray-100 px-5 py-3 block">Mark as Spam</a> </li>
                                    <li><a href="#" class="hover:bg-gray-100 px-5 py-3 block">Delete Post</a> </li>

                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="idea-container bg-white rounded-xl flex
                    hover:shadow-md transition duration-150 ease-in cursor-pointer">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">22</div>
                    <div class="text-gray-500">Votes</div>
                </div>

                <div class="mt-8">
                    <button class="w-20 bg-gray-200 font-bold
                text-xs uppercase rounded-xl py-4 px-3
                 transition duration-300 transform border-b-4 hover:border-gray-300">Vote
                    </button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="#" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar"
                         class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="" class="hover:underline">A random title goes here</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur dolore fugit itaque labore
                        molestiae neque reiciendis unde! Architecto aspernatur assumenda consectetur cupiditate delectus
                        dolorum eligendi esse harum iusto, labore, maiores molestiae molestias natus nesciunt nihil
                        nobis nulla, numquam quae recusandae repellendus repudiandae ullam ut vel! Adipisci at commodi
                        cumque, delectus deserunt dolorum enim error esse exercitationem fugiat, inventore itaque iusto
                        minus mollitia obcaecati, quaerat tenetur voluptates voluptatibus. Aspernatur expedita impedit
                        laborum laudantium, magni modi necessitatibus numquam omnis, perspiciatis quis quo quod tempore
                        ullam unde vitae. Aliquid animi eaque iusto labore laudantium modi nobis officiis, placeat
                        praesentium, repellat sit, veritatis voluptatem?
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 Comments</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="bg-purple-200 sm:text-xs font-bold uppercase
                                leading-none rounded-full text-center w-28 h-7 py-2 px-4">Considering
                            </div>
                            <button class="relative bg-gray-100 hover:bg-gray-200
                                rounded-full h-7
                                ">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-24" viewBox="0 0 20 20" fill="currentColor">
                                  <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                </svg>
                                <ul class="absolute w-44 font-semibold
                                bg-white shadow-lg rounded-xl py-3 ml-8">
                                    <li><a href="#" class="hover:bg-gray-100 px-5 py-3 block">Mark as Spam</a> </li>
                                    <li><a href="#" class="hover:bg-gray-100 px-5 py-3 block">Delete Post</a> </li>

                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
