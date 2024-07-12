<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FilmStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            "backdrop_path" => ['required'],
            "title" => ['required'],
            "original_title" => ['required'],
            "overview" => ['required'],
            "poster_path" => ['required'],
            "media_type" => ['required'],
            "adult" => ['required'],
            "original_language" => ['required'],
            "genre_ids" => ['required'],
            "popularity" => ['required'],
            "release_date" => ['required'],
            "video" => ['required'],
            "vote_average" => ['required'],
            "vote_count" => ['required'],
        ];
    }
}
