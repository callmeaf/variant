<?php

namespace Callmeaf\Variant\App\Models;

use Callmeaf\Base\App\Models\BaseModel;
use Callmeaf\Base\App\Traits\Model\HasDate;
use Callmeaf\Base\App\Traits\Model\HasSlug;
use Callmeaf\Base\App\Traits\Model\HasStatus;
use Callmeaf\Base\App\Traits\Model\HasType;
use Callmeaf\Product\App\Repo\Contracts\ProductRepoInterface;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Variant extends BaseModel
{
     use SoftDeletes;
     use HasDate,HasStatus,HasType;

     protected $primaryKey = 'sku';
     protected $keyType = 'string';
     public $incrementing = false;

    protected $fillable = [
        'sku',
        'product_slug',
        'stock',
        'status',
        'type',
        'price',
        'cost_price',
    ];

    public static function configKey(): string
    {
        return 'callmeaf-variant';
    }

    protected function casts(): array
    {
        return [
            ...(self::config()['enums'] ?? []),
        ];
    }

    public function product(): BelongsTo
    {
        /**
         * @var ProductRepoInterface $productRepo
         */
        $productRepo = app(ProductRepoInterface::class);
        return $this->belongsTo($productRepo->getModel()::class,'product_slug',$productRepo->getModel()->getKeyName());
    }
}
