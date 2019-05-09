<?php

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

abstract class FilterAbstract
{
    public abstract function filter(Builder $builder, $value);

    protected function mappings()
    {
        return [];
    }

    protected function resolveFilterValue($key)
    {
        return array_get($this->mappings(), $key);
    }

    protected function resolveOrderDirection($direction)
    {
        return array_get([
            'desc' => 'desc',
            'asc' => 'asc'
        ], $direction, 'desc');
    }
}
