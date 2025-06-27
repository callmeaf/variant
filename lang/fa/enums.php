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
        VariantType::ONLINE_AND_COD->name => 'پرداخت به صورت آنلاین یا درب منزل',
        VariantType::ONLINE_ONLY->name => 'فقط پرداخت آنلاین',
        VariantType::COD_ONLY->name => 'فقط پرداخت درب منزل',
        VariantType::PHONE_ORDER->name => 'فقط با تماس به پشتیبانی',
        VariantType::PREORDER->name => 'پیش سفارش',
        VariantType::STORE_PICKUP->name => 'فقط از فروشگاه حضوری قابل دریافت'
    ],
];
