<?php

namespace Callmeaf\Variant\App\Repo\Contracts;

use Callmeaf\Base\App\Repo\Contracts\BaseRepoInterface;
use Callmeaf\Variant\App\Models\Variant;
use Callmeaf\Variant\App\Http\Resources\Api\V1\VariantCollection;
use Callmeaf\Variant\App\Http\Resources\Api\V1\VariantResource;

/**
 * @extends BaseRepoInterface<Variant,VariantResource,VariantCollection>
 */
interface VariantRepoInterface extends BaseRepoInterface
{
    /**
     * @param mixed $id
     * @param int $qty
     * @return VariantResource
     */
    public function decreaseStock(mixed $id,int $qty = 1);
}
