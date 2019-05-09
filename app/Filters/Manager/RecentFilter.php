<?php

namespace App\Filters\Manager;

use App\Filters\FilterAbstract;
use Illuminate\Database\Eloquent\Builder;

class RecentFilter extends FilterAbstract
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

      if ($value === null) {
          return $builder;
      }

      return $builder->where('created_at', '>=', last_week());

  }
}
