<?php

namespace App\Filters\Company;

use App\Filters\FilterAbstract;
use Illuminate\Database\Eloquent\Builder;

class HasEmployeesFilter extends FilterAbstract
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

      return $builder->{$method}('employees');

  }
}
