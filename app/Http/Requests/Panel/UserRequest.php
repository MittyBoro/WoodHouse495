<?php

namespace App\Http\Requests\Panel;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;
use Propaganistas\LaravelPhone\PhoneNumber;

class UserRequest extends FormRequest
{

    public function authorize()
    {
        $user = $this->user;

        if ($user) {
            // кроме первого никто не редактирует первого
            if ($user->id === 1 && Auth::id() !== $user->id) {
                return false;
            }
            // нельзя «неадмину» редактировать других
            if ($user->id !== Auth::id() && !Auth::user()->is_admin) {
                return false;
            }
        }

        return true;
    }

    public function rules()
    {
        $user = $this->user;

        return [
            'name'  => 'nullable|string|min:3|max:225',
            'email' => 'email|min:3|max:225|unique:users,email,' . $user?->id,
            'email_notification' => 'boolean',
            'role' => [
                'required',
                Rule::in(User::ROLES),
                function ($attribute, $value, $fail) use ($user) {
                    // Проверяем, может ли пользователь изменить свою роль
                    if ($user && $user->role === Auth::id() && $value !== User::ROLE_ADMIN) {
                        $fail('Вы не можете изменить свои права доступа.');
                    }
                },
            ],

            ...(($this->password || !$user) ?
                [
                    'current_password' => ['sometimes', Auth::id() == $user?->id ? 'required' : 'nullable', 'current_password'],
                    'password' => [
                        'sometimes',
                        'required',
                        'string',
                        'confirmed',
                        Password::defaults(),
                        function ($attribute, $value, $fail) use ($user) {
                            if ($user && Auth::id() !== 1 && $user->role === User::ROLE_ADMIN) {
                                $fail('Вы не можете изменить пароль другого администратора.');
                            }
                        }
                    ],
                ] : [])
        ];
    }
}
