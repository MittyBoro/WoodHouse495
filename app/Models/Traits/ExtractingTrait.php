<?php

namespace App\Models\Traits;

use Illuminate\Database\Eloquent\Builder;

trait ExtractingTrait
{
    public function scopeOrderByStr(Builder $query, string $sort = null)
    {
        $sort = $sort ?: $this->defaultSort ?: $this->sortable[0] ?? '';

        if (!$sort) {
            return;
        }

        [$column, $direction] = array_pad(explode('-', $sort, 2), 2, 'asc');

        $sortableColumns = $this->sortable ?: ['id'];

        $query->orderBy(
            in_array($column, $sortableColumns) ? $column : $sortableColumns[0],
            $direction,
        );
    }

    public function scopeCustomPaginate($query, $perPage = null, $append = null)
    {
        $paginated = $query->paginate($perPage, ['*'], 'p');

        $result = $paginated
            ->withQueryString()
            ->setPath('')
            ->onEachSide(1);

        if ($append) {
            $result->through(fn($item) => $item->append($append));
        }

        return $result;
    }
}
