<div>
    <div class="idea-container bg-white rounded-xl flex
                    hover:shadow-md transition duration-150 ease-in cursor-pointer">
        <div class="border-r border-gray-100 px-5 py-8">
            <div class="text-center">
                <div class="font-semibold text-2xl">{{ $votesCount }}</div>
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
            <div class="flex-none">
                <a href="#" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar"
                         class="w-14 h-14 rounded-xl">
                </a>
            </div>
            <div class="mx-4">
                <h4 class="text-xl font-semibold">
                    <a href="{{ route('idea.show', $idea) }}" class="hover:underline">{{$idea->title}}</a>
                </h4>
                <div class="text-gray-600 mt-3 line-clamp-3">
                    {{$idea->description}}
                </div>
                <div class="flex items-center justify-between mt-6">
                    <div class="flex items-center sm:text-xs font-semibold space-x-1 text-gray-400">
                        <div>{{$idea->created_at->diffForHumans()}}</div>
                        <div>&bull;</div>
                        <div>{{$idea->category->name}}</div>
                        <div>&bull;</div>
                        <div class="text-gray-900">3 Comments</div>
                    </div>
                    <div class="flex items-center space-x-2" x-data="{ isOpen:false }">
                        <div class=" {{$idea->status->classes}}  sm:text-xs font-bold uppercase
                                leading-none rounded-full text-center w-28 h-7 py-2 px-4">{{$idea->status->name}}
                        </div>
                        <button
                            @click="isOpen = !isOpen"
                            class="relative bg-gray-100 hover:bg-gray-200
                                rounded-full h-7
                                ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-24" viewBox="0 0 20 20"
                                 fill="currentColor">
                                <path
                                    d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z"/>
                            </svg>
                            <ul
                                x-cloak
                                @keydown.escape.window="isOpen=false"
                                x-show.transition.origin.top.left.duration.500ms="isOpen"
                                @click.away="isOpen=false"
                                class="absolute w-44 font-semibold
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
</div>
