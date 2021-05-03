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
</x-app-layout>
