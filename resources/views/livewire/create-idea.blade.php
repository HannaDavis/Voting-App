<div>
    <form wire:submit.prevent="createIdea" method="POST" class="space-y-4 px-4 py-6">
        <div>
            <input wire:model.defer="title"
                   type="text" class="w-full bg-gray-100 rounded-xl placeholder-gray-900 px-4 py-2"
                   placeholder="Your idea"
                   required>
            @error('title')
                <p class="text-red-500 text-xs mt-2 mx-2">{{$message}}</p>
            @enderror
        </div>
        <div>
            <select wire:model.defer="category"
                    name="category_add" id="category_add"
                    class="bg-gray-100 w-full border-none rounded-xl px-4 py-2 text-sm">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{$category->name}}</option>
                @endforeach
            </select>
            @error('category')
                <p class="text-red-500 text-xs mt-2 mx-2">{{$message}}</p>
            @enderror
        </div>
        <div>
                <textarea wire:model.defer="description"
                          name="idea" id="idea" cols="30" rows="10"
                          class="w-full bg-gray-100 rounded-xl placeholder-gray-900 text-sm px-4 py-2 border-none"
                          placeholder="Describe your idea"
                          required></textarea>
            @error('description')
                <p class="text-red-500 text-xs mt-2 mx-2">{{$message}}</p>
            @enderror
        </div>
        <div class="flex items-center justify-between space-x-3">
            <button type="button"
                    class="flex items-center justify-center w-1/2 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 ">
                <span>Attach</span>
            </button>
            <button type="submit"
                    class="flex items-center justify-center w-1/2 h-11 text-xs bg-blue-200 font-semibold rounded-xl border border-blue-200 hover:border-blue-400 ">
                <span>Submit</span>
            </button>
        </div>
        <div>
            @if(session('success_message'))
                <div x-data="{ isVisible: true}"
                     x-init="setTimeout( () => {
                        isVisible = false
                     }, 5000 )"
                     x-show.transition.duration.1000ms="isVisible"
                     class="text-green-900 mt-4 text-center">
                    {{ session('success_message') }}
                </div>
            @endif
        </div>
    </form>
</div>
