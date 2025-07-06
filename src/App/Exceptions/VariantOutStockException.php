<?php

namespace Callmeaf\Variant\App\Exceptions;

use Exception;
use Illuminate\Http\Request;

class VariantOutStockException extends Exception
{
    public function render(Request $request): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            'message' => __('callmeaf-variant::errors.variant_out_stock')
        ], \Symfony\Component\HttpFoundation\Response::HTTP_FORBIDDEN);
    }

}
