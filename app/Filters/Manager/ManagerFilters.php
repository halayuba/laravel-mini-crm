<?php

namespace App\Filters\Manager;

use App\Filters\FiltersAbstract;
use App\Filters\Manager\{RecentFilter, HasPermissionsFilter};

class ManagerFilters extends FiltersAbstract
{
  protected $filters = [
    'recent' => RecentFilter::class,
    'has-permissions' => HasPermissionsFilter::class,
  ];

}
