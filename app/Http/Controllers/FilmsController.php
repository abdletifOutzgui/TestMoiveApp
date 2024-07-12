<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use App\Services\FilmService;
use App\Http\Requests\FilmStoreRequest;
use App\Models\Film;

class FilmsController extends Controller
{
    public function __construct(private FilmService $filmService) {}

    /**
     * Display a listing of trending films.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $films = $this->filmService->getTrendingFilms();       

        return view('films.index', compact('films'));
    }

    /**
     * Display from for create new Film.
     *
     * @return \Illuminate\View\View
     */
    public function create() 
    {
        return view('films.create');
    }

    /**
     * Save film.
     *
     * @param \App\Http\Requests\FilmStoreRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(FilmStoreRequest $request) 
    {
        $film = $this->filmService->createFilm($request->validated());

        return to_route('films.index')->withMessage("film created successfully!");
    }

    /**
     * Show the form for editing the specified film.
     *
     * @param \App\Models\Film $film
     * @return \Illuminate\View\View
     */
    public function edit(Film $film) 
    {
        return view('films.edit', compact('film'));
    }

    /**
     * Update the specified film in storage.
     *
     * @param \App\Http\Requests\FilmStoreRequest $request
     * @param \App\Models\Film $film
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(FilmStoreRequest $request, Film $film) 
    {
        $film = $this->filmService->updateFilm($film, $request->validated());

        return to_route('films.index')->withMessage("film updated successfully!");
    }

    /**
     * Display the specified film.
     *
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function show($id) 
    {
        $film = $this->filmService->getFilmById($id);

        return view('films.show', compact('film'));
    }

    /**
     * Remove the specified film from storage.
     *
     * @param \App\Models\Film $film
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Film $film) 
    {
        $this->filmService->deleteFilm($film);

        return to_route('films.index')->withMessage("film deleted successfully!");
    }
}
