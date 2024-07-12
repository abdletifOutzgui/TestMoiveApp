<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('list Films') }}
            </h2>
            <a href="{{ route('films.create') }}" class="font-bold text-xl text-gray-800 leading-tight">
                {{ __('Create a new film') }}
            </a>
        </div>
       
    </x-slot>
    
    <div class="py-12">
        <div class=" mx-auto sm:px-6 lg:px-8">

            <x-success-message />

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table class="w-full text-sm">
                    <thead class="text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th>Title</th>
                            <th>Original title</th>
                            <th>Overview</th>
                            <th>Media_type</th>
                            <th>Adult</th>
                            <th>language</th>
                            <th>Popularity</th>
                            <th>Release date</th>
                            <th>Vote average</th>
                            <th>Vote count</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($films['results'] as $film)
                            <tr class="bg-white border-b dark:border-gray-700">
                                <td>{{ $film['title'] }}</td>
                                <td>{{ $film['original_title'] }}</td>
                                <td>{{ Str::limit($film['overview'], 20) }}</td>
                                <td>{{ $film['media_type'] }}</td>
                                <td>{{ $film['adult'] ? 'Yes' : 'No' }}</td>
                                <td>{{ $film['original_language'] }}</td>
                                <td>{{ $film['popularity'] }}</td>
                                <td>{{ $film['release_date'] }}</td>
                                <td>{{ $film['vote_average'] }}</td>
                                <td>{{ $film['vote_count'] }}</td>
                                <td class="flex">
                                    <a href={{ route('films.show', $film['id']) }} class="text-blue-500 underline">Details</a>
                                    <a href={{ route('films.edit', $film['id']) }} class="text-blue-500 underline">Update</a>
                                    <form action="{{ route('films.destroy', $film['id']) }}" method="post">
                                        @csrf
                                        @method("DELETE")

                                        <button class="btn btn-danger" type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr class="text-center colspan-6"><td></td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
