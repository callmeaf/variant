<?php

namespace Callmeaf\Variant\App\Http\Resources\Api\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

/**
 * @extends ResourceCollection<VariantResource>
 */
class VariantCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, VariantResource>
     */
    public function toArray(Request $request): array
    {
        return parent::toArray($request);
    }
}
