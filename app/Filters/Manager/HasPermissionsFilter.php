<?php

namespace App\Filters\Manager;

use App\Filters\FilterAbstract;
use Illuminate\Database\Eloquent\Builder;

class HasPermissionsFilter extends FilterAbstract
{
  public function mappings()
  {
      return [
          'true' => true,
          'false' => false,
      ];
  }

  public function filter(Builder $builder, $value)
  {
      $value = $this->resolveFilterValue($value);

      $method = $value ? 'whereHas' : 'wheredoesntHave';

      if ($value === null) {
          return $builder;
      }

      return $builder->{$method}('companies');

  }
}
