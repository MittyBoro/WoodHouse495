<?php

namespace App\Http\Requests\Panel;

use Illuminate\Validation\Rule;

class PageRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules = [
            'title' => 'nullable|string|max:255',
            'slug' =>
                'required|string|max:255|unique:pages,slug,' . $this->page?->id,

            'description' => 'string|nullable',

            ...$this->validationSEO(),

            ...(new PropListRequest())->rules(),
        ];

        return $rules;
    }
}
