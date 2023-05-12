<?php

namespace App\Models\Panel;

use App\Models\Traits\ExtractingTrait;
use App\Models\User as BaseUser;

class User extends BaseUser
{
    use ExtractingTrait;

    protected $sortable = [
        'created_at', 'id', 'email', 'name', 'role',
    ];
    protected $defaultSort = 'id-desc';

    public static function roleList()
    {
        return [
            self::ROLE_ADMIN => 'Админ',
            self::ROLE_EDITOR => 'Редактор',
            self::ROLE_USER => 'Пользователь',
            self::ROLE_BLOCKED => 'Заблокирован',
        ];
    }

    public function getMorphClass()
    {
        return Model::class;
    }

    public function getPanelAvatarAttribute()
    {
        return $this->getPanelMedia(self::MEDIA_COLLECTION);
    }

    public function scopeUpdateUser($query, $data)
    {
        $this->update($data);

        if (isset($data['panel_avatar']))
            $this->syncMedia($data['panel_avatar'], self::MEDIA_COLLECTION);
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
