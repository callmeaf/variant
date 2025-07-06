<?php

namespace Callmeaf\Variant\App\Repo\V1;

use Callmeaf\Base\App\Repo\V1\BaseRepo;
use Callmeaf\Variant\App\Exceptions\VariantOutStockException;
use Callmeaf\Variant\App\Http\Resources\Api\V1\VariantResource;
use Callmeaf\Variant\App\Repo\Contracts\VariantRepoInterface;
use Illuminate\Database\Eloquent\Model;

class VariantRepo extends BaseRepo implements VariantRepoInterface
{
    public function decreaseStock(mixed $id, int $qty = 1)
    {
        /**
         * @var VariantResource $variant
         */
        $variant = $this->findById(value: $id);

        if($variant->resource->outStock(qty: $qty)) {
            throw new VariantOutStockException();
        }

        $variant->resource->decrement("stock",$qty);

        return $variant;
    }
}
