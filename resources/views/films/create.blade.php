<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create a new film') }}
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="mx-auto sm:px-6 lg:px-8">

            <x-validation-errors />

            <div class="py-8 bg-white overflow-hidden shadow-XS sm:rounded-lg">

                <form class="max-w-sm mx-auto" action="{{ route('films.store') }}" method="POST">
                    @csrf

                    <div class="mb-5">
                        <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Title</label>
                        <input type="text" name="title" id="title" value="{{ old('title') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="title..." required />
                    </div>
                    <div class="mb-5">
                        <label for="backdrop_path" class="block mb-2 text-sm font-medium text-gray-900">Backdrop path</label>
                        <input type="text" name="backdrop_path" id="backdrop_path" value="{{ old('backdrop_path') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="backdrop path..." required />
                    </div>

                    <div class="mb-5">
                        <label for="overview" class="block mb-2 text-sm font-medium text-gray-900">overview</label>
                        <input type="text" name="overview" id="overview" value="{{ old('overview') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="overview..." required />
                    </div>

                    <div class="mb-5">
                        <label for="poster_path" class="block mb-2 text-sm font-medium text-gray-900">Poster path</label>
                        <input type="text" name="poster_path" id="poster_path" value="{{ old('poster_path') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="poster path..." required />
                    </div>

                    <div class="mb-5">
                        <label for="media_type" class="block mb-2 text-sm font-medium text-gray-900">Media type</label>
                        <input type="text" name="media_type" id="media_type" value="{{ old('media_type') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="media_type..." required />
                    </div>


                    <div class="mb-5">
                        <label for="adult" class="block mb-2 text-sm font-medium text-gray-900">Adult</label>
                        <input type="text" name="adult" id="adult" value="{{ old('adult') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Adult..." required />
                    </div>

                    <div class="mb-5">
                        <label for="original_title" class="block mb-2 text-sm font-medium text-gray-900">Original title</label>
                        <input type="text" name="original_title" value="{{ old('original_title') }}" id="original_title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="original_title..." required />
                    </div>

                    <div class="mb-5">
                        <label for="original_language" class="block mb-2 text-sm font-medium text-gray-900">Original language (sperated by comma)</label>
                        <input type="text" name="original_language" value="{{ old('original_language') }}" id="original_language" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="original_language..." required />
                    </div>

                    <div class="mb-5">
                        <label for="genre_ids" class="block mb-2 text-sm font-medium text-gray-900">Genre ids (sperated by comma)</label>
                        <input type="text" name="genre_ids" id="genre_ids" value="{{ old('genre_ids') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="genre_ids..." required />
                    </div>

                    <div class="mb-5">
                        <label for="release_date" class="block mb-2 text-sm font-medium text-gray-900">release date</label>
                        <input type="date" name="release_date" id="release_date" value="{{ old('release_date') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="release_date..." required />
                    </div>

                    <div class="mb-5">
                        <label for="popularity" class="block mb-2 text-sm font-medium text-gray-900">popularity</label>
                        <input type="number" name="popularity" id="popularity" value="{{ old('popularity') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="popularity..." required />
                    </div>

                    <div class="mb-5">
                        <label for="release_dates" class="block mb-2 text-sm font-medium text-gray-900">Release date</label>
                        <input type="text" name="release_dates" id="release_dates" value="{{ old('release_dates') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="release_dates..." required />
                    </div>

                    <div class="mb-5">
                        <label for="video" class="block mb-2 text-sm font-medium text-gray-900">video</label>
                        <input type="text" name="video" id="video" value="{{ old('video') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="video..." required />
                    </div>

                    <div class="mb-5">
                        <label for="vote_average" class="block mb-2 text-sm font-medium text-gray-900">vote average</label>
                        <input type="number" name="vote_average" value="{{ old('vote_average') }}" id="vote_average" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="vote_average..." required />
                    </div>

                    <div class="mb-5">
                        <label for="vote_count" class="block mb-2 text-sm font-medium text-gray-900">vote count</label>
                        <input type="number" name="vote_count" value="{{ old('vote_count') }}" id="vote_count" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('vote_count') }}" placeholder="vote_count..." required />
                    </div>
                    
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                </form>
  
            </div>
        </div>
    </div>
</x-app-layout>
