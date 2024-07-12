<?php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Support\Facades\Log;
use App\Models\Film;

class FilmService
{
    public function __construct(private Client $client) { }
    
    /**
     * Get all list of films.
     *
     * @return array The list of trending films.
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
    */
    public function getTrendingFilms(): array
    {
        return $this->makeRequest('GET', 'trending/movie/day');
    }

    /**
     * Create a new film with the provided data.
     * @param array $data
     * @return Film  the new film created
    */
    public function createFilm($data): Film
    {
        $film = Film::create($data);

        return $film;
    }

    /**
     * Update the specified film with the provided data.
     * @param array $data
     * @return Film
    */
    public function updateFilm(Film $film, $data): Film
    {
        $film->update($data);

        return $film;
    }

    /**
     * @param int $id
     * @return array
    */
    public function getFilmById(int $id): array
    {
        return $this->makeRequest('GET', "movie/$id");
    }

    /**
     * Delete a specific film
     * @param Film $film
     * @return bool
     * @throws \Exception
    */
    public function deleteFilm($film)
    {
        $film->delete();

        return true;
    }

    /**
     * @param string $method
     * @param string $uri
     * @return array
     * @throws \GuzzleHttp\Exception\GuzzleException.
    */
    private function makeRequest(string $method, string $uri): array
    {
        try {
            $response = $this->client->request($method, config('movieDb.movie_db_url') . '/' . $uri, [
                'headers' => [
                    'Authorization' => 'Bearer ' . config('movieDb.movie_db_key_api'),
                    'accept' => 'application/json',
                ],
            ]);

            return json_decode($response->getBody()->getContents(), true);
        } catch (GuzzleException $e) {
            Log::error('Error :', ['error' => $e->getMessage()]);
            return ['error' => 'Unable to fetch data. Please try again later.'];
        }
    }
}
