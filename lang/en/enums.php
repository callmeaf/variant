<?php

use Callmeaf\Variant\App\Enums\VariantStatus;
use Callmeaf\Variant\App\Enums\VariantType;

return [
    VariantStatus::class => [
        VariantStatus::ACTIVE->name => 'Active',
        VariantStatus::INACTIVE->name => 'InActive',
        VariantStatus::PENDING->name => 'Pending',
    ],
    VariantType::class => [
        VariantType::ONLINE_AND_COD->name => 'Online And Cod',
        VariantType::ONLINE_ONLY->name => 'Online Only',
        VariantType::COD_ONLY->name => 'COD Only',
        VariantType::PHONE_ORDER->name => 'Phone Order',
        VariantType::PREORDER->name => 'PreOrder',
        VariantType::STORE_PICKUP->name => 'Store Pickup'
    ],
];
