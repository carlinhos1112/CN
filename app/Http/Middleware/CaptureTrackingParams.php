<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CaptureTrackingParams
{
    public function handle(Request $request, Closure $next)
    {
        $keysToCapture = [
            'utm_source',
            'utm_medium',
            'utm_campaign',
            'utm_content',
            'utm_term',
            'fbclid',
            'gclid',
            'adset_id',
            'ad_id',
            'campaign_id'
        ];

        foreach ($keysToCapture as $key) {
            $value = $request->query($key);
            if ($value && !session()->has($key)) {
                session([$key => $value]);
            }
        }

        return $next($request);
    }
}
