<?php

namespace App\Http\Requests\Panel;


class PortfolioRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules = [
            'title'        => 'required|string|max:255',
            'is_published' => 'required|boolean',
        ];

        if ($this->has('index_edit')) {
            return $rules;
        }

        $rules += [
            'mini_description' => 'string|nullable',
            'description'      => 'string|nullable',
            'location'      => 'string|nullable',

            'published_at' => 'nullable|date',
            'page_id' => 'present|nullable|exists:pages,id',

            ...$this->validationFiles('gallery', 'dimensions:min_width=400,min_height=400'),
        ];

        return $rules;
    }
}
