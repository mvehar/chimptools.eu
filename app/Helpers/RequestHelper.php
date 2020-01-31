<?php

namespace App\Helpers;

use Illuminate\Http\Request;

class RequestHelper
{
    /**
     * @param Request $request
     * @param string $key
     * @param $default
     *
     * @return array
     */
    public static function arrayParameter(Request $request, string $key, $default = [])
    {
        $value = $request->get($key);
        if (is_array($value)) {
            if (empty($value) || empty(current($value))) {
                return $default;
            }
            return $value;
        }

        if ($value) {
            return explode(',', $value);
        }
        return $default;
    }

}
