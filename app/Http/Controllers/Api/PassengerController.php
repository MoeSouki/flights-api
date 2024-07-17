<?php

namespace App\Http\Controllers\Api;

use App\Models\Passenger;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\AllowedFilter;

class PassengerController extends Controller
{
    public function index(Request $request)
    {
        $cacheKey = $this->generateCacheKey($request->all());
        $cacheDuration = 60 * 60;

        $passengers = Cache::remember($cacheKey, $cacheDuration, function () {
            return QueryBuilder::for(Passenger::class)
                ->with('flights')
                ->defaultSort('-updated_at')
                ->allowedFilters([AllowedFilter::exact('id'), 'first_name', 'last_name', 'email', 'date_of_birth', 'passport_expiry_date'])
                ->allowedSorts(['id', 'first_name', 'last_name', 'email', 'date_of_birth', 'passport_expiry_date'])
                ->paginate(100);
        });

        if (Cache::has($cacheKey)) {
            Log::info('Passengers fetched from cache. Cache key: ' . $cacheKey);
        } else {
            Log::info('Fetching passengers from database. Cache key: ' . $cacheKey);
        }


        return response()->json($passengers);

    }

    private function generateCacheKey(array $params)
    {
        ksort($params);
        return 'passengers_' . md5(http_build_query($params));
    }
}