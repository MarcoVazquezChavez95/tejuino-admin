<?php

namespace Tejuino\Admin\Traits;

trait HasApis
{

    protected function dispatch($data = [])
    {
        return response()->json([
            'code' => 200,
            'data' => $data
        ]);
    }

    protected function dispatchError($code = 500, $message = '', $debugMessage = '')
    {
        return response()->json([
            'error' => [
                'debug' => $debugMessage,
                'user' => $message
            ]
        ], $code);
    }

}
