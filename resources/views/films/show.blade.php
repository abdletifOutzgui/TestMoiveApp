<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Film details') }}
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class=" mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table class="w-full text-sm">
                    <thead class="text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th class="text-left">Property</th>
                            <th class="text-left">Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:border-gray-700">
                            <td class="font-semibold">Title</td>
                            <td>{{ $film['title'] }}</td>
                        </tr>
                        <tr class="bg-white border-b dark:border-gray-700">
                            <td class="font-semibold">Original Title</td>
                            <td>{{ $film['original_title'] }}</td>
                        </tr>
                        <tr class="bg-white border-b dark:border-gray-700">
                            <td class="font-semibold">Overview</td>
                            <td>{{ Str::limit($film['overview'], 30) }}</td>
                        </tr>
                        <tr class="bg-white border-b dark:border-gray-700">
                            <td class="font-semibold">Original Language</td>
                            <td>{{ $film['original_language'] }}</td>
                        </tr>
                        <tr class="bg-white border-b dark:border-gray-700">
                            <td class="font-semibold">Popularity</td>
                            <td>{{ $film['popularity'] }}</td>
                        </tr>
                        <tr class="bg-white border-b dark:border-gray-700">
                            <td class="font-semibold">Release Date</td>
                            <td>{{ $film['release_date'] }}</td>
                        </tr>
                        <tr class="bg-white border-b dark:border-gray-700">
                            <td class="font-semibold">Vote Average</td>
                            <td>{{ $film['vote_average'] }}</td>
                        </tr>
                        <tr class="bg-white border-b dark:border-gray-700">
                            <td class="font-semibold">Vote Count</td>
                            <td>{{ $film['vote_count'] }}</td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</x-app-layout>
