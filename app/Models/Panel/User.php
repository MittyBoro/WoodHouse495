<?php

namespace App\Models\Panel;

use App\Models\Traits\ExtractingTrait;
use App\Models\User as BaseUser;

class User extends BaseUser
{
    use ExtractingTrait;

    protected $sortable = [
        'created_at', 'id', 'email', 'name', 'role', 'email_notification',
    ];
    protected $defaultSort = 'id-desc';

    public function getMorphClass()
    {
        return Model::class;
    }

    public function scopeFilter($query, array $filter)
    {
        if (isset($filter['role'])) {
            $query->where('role', $filter['role']);
        }

        if (isset($filter['q'])) {
            $query->search($filter['q']);
        }
    }
}
