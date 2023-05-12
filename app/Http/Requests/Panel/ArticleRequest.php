<?php

namespace App\Http\Requests\Panel;


class ArticleRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $id = $this->article ? $this->article->id : '';

        $rules = [
            'title'        => 'required|string|max:255',
            'is_published' => 'required|boolean',
        ];

        if ($this->has('index_edit')) {
            return $rules;
        }

        $rules += [
            'slug' => 'required|string|max:255|unique:articles,slug,' . $id,

            'mini_description' => 'string|nullable',
            'description'      => 'string|nullable',

            'published_at' => 'nullable|date',

            ...$this->validationSEO(),
            ...$this->validationFiles('gallery', 'dimensions:min_width=400,min_height=400'),
        ];

        return $rules;
    }
}
