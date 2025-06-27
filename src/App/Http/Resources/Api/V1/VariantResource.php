<?php

namespace Callmeaf\Variant\App\Http\Resources\Api\V1;

use Callmeaf\Variant\App\Models\Variant;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property-read Variant $resource
 */
class VariantResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'sku' => $this->sku,
            'product_slug' => $this->product_slug,
            'status' => $this->status,
            'status_text' => $this->statusText,
            'type' => $this->type,
            'type_text' => $this->typeText,
            'stock' => $this->stock,
            'price' => $this->price,
        ];
    }
}
