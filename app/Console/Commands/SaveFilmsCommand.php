<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\FilmService;
use App\Models\Film;

class SaveFilmsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'save-films';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get Films from API and Save them in DB';
    
    public function __construct(private FilmService $filmService) 
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $results = $this->filmService->getTrendingFilms(); 
        
        foreach($results['results'] as $film) {
            Film::create($film);
        }

        $this->info('Films data saved successfully.');

        return 0;
    }
}
