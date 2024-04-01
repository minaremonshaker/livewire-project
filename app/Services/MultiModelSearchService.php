<?php
namespace App\Services;

use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Str;

class MultiModelSearchService {


    private static $results;



    public static function search(array|string $models, string $query, array $options = [],$paginationCount = 3)
    {


        self::$results = collect();

        if(is_string($models))
        {
            self::$results = $models::search($query)->options($options)->paginate($paginationCount);
        }
        else
        {
            for($i = 0; $i < count($models); $i++)
            {
                self::$results = self::$results->push($models[$i]::search($query)->options($options)->paginate($paginationCount));
            }
        }

       return self::$results;
    }


}