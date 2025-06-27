<?php

namespace Callmeaf\Variant\App\Enums;


use Callmeaf\Base\App\Enums\BaseStatus;

enum VariantStatus: string
{
    case ACTIVE = BaseStatus::ACTIVE->value;
    case INACTIVE = BaseStatus::INACTIVE->value;
    case PENDING = BaseStatus::PENDING->value;
}
