<?php

namespace App\Http\Requests\Panel;

use Illuminate\Validation\Rule;
use App\Models\Panel\Prop;

class PropRequest extends PanelFormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules = [
            'key'   => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'tab'   => 'nullable|string|max:255',
        ];

        if ($this->has('index_edit'))
            return $rules;

        return [
            ...$rules,
            'type'       => ['required', 'string', Rule::in(array_keys(Prop::TYPES))],
            'model_id'   => 'nullable',
            'model_type_key' => ['nullable', 'string', Rule::in(array_keys(Prop::MODELS))],
        ];
    }
}
