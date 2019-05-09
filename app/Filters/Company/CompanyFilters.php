<?php

namespace App\Filters\Company;

use App\Filters\FiltersAbstract;
use App\Filters\Company\{RecentFilter, HasEmployeesFilter};

class CompanyFilters extends FiltersAbstract
{
  protected $filters = [
    'recent' => RecentFilter::class,
    'has-employees' => HasEmployeesFilter::class,
  ];

}
