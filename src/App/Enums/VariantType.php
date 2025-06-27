<?php

namespace Callmeaf\Variant\App\Enums;

enum VariantType: string
{
    case ONLINE_AND_COD = 'online_and_cod';
    case ONLINE_ONLY = 'online_only';
    case COD_ONLY = 'cod_only';
    case PHONE_ORDER = 'phone_order';
    case PREORDER = 'preorder';
    case STORE_PICKUP = 'store_pickup';
}
