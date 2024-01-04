<div>
     <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Edit this Post ✌️
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form wire:submit="update">
                      <div class="mb-5">
                          <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                          <input type="text" wire:model="fields.title" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                          @error('fields.title')<span class="text-red-600"> {{$message}} </span> @enderror
                      </div>
                      <div class="mb-5 mt-4">
                          <label for="body" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Body</label>
                          <textarea id="body" rows="4" wire:model="fields.body" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Leave a comment..."></textarea>
                          @error('fields.body')<span class="text-red-600"> {{$message}} </span> @enderror
                      </div>
                     <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
                    </form>
                </div>
            </div>
        </div>
     </div>
</div>