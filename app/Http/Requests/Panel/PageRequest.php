<?php

namespace App\Http\Requests\Panel;

use Illuminate\Validation\Rule;

class PageRequest extends PanelFormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $id = $this->page ? $this->page->id : '';

        $rules = [
            'title'       => 'nullable|string|max:255',
            'slug'        => [
                'required', 'string', 'max:255',
                Rule::unique('pages')->where(function ($query) {
                    return $query->where('slug', $this->get('slug'))
                        ->where('lang', $this->get('lang'));
                })->ignore($id)
            ],

            'description' => 'string|nullable',
            'view'        => 'string|nullable',

            ...$this->validationSEO(),

            ...(new PropListRequest)->rules()
        ];

        return $rules;
    }
}
