<?php

use Callmeaf\Base\App\Enums\RequestType;

return [
    'model' => \Callmeaf\Variant\App\Models\Variant::class,
    'route_key_name' => 'sku',
    'repo' => \Callmeaf\Variant\App\Repo\V1\VariantRepo::class,
    'resources' => [
        RequestType::API->value => [
            'resource' => \Callmeaf\Variant\App\Http\Resources\Api\V1\VariantResource::class,
            'resource_collection' => \Callmeaf\Variant\App\Http\Resources\Api\V1\VariantCollection::class,
        ],
        RequestType::WEB->value => [
            'resource' => \Callmeaf\Variant\App\Http\Resources\Web\V1\VariantResource::class,
            'resource_collection' => \Callmeaf\Variant\App\Http\Resources\Web\V1\VariantCollection::class,
        ],
        RequestType::ADMIN->value => [
            'resource' => \Callmeaf\Variant\App\Http\Resources\Admin\V1\VariantResource::class,
            'resource_collection' => \Callmeaf\Variant\App\Http\Resources\Admin\V1\VariantCollection::class,
        ],
    ],
    'events' => [
        RequestType::API->value => [
            \Callmeaf\Variant\App\Events\Api\V1\VariantIndexed::class => [
                // listeners
            ],
            \Callmeaf\Variant\App\Events\Api\V1\VariantCreated::class => [
                // listeners
            ],
            \Callmeaf\Variant\App\Events\Api\V1\VariantShowed::class => [
                // listeners
            ],
            \Callmeaf\Variant\App\Events\Api\V1\VariantUpdated::class => [
                // listeners
            ],
            \Callmeaf\Variant\App\Events\Api\V1\VariantDeleted::class => [
                // listeners
            ],
            \Callmeaf\Variant\App\Events\Api\V1\VariantStatusUpdated::class => [
                // listeners
            ],
            \Callmeaf\Variant\App\Events\Api\V1\VariantTypeUpdated::class => [
                // listeners
            ],
        ],
        RequestType::WEB->value => [
            \Callmeaf\Variant\App\Events\Web\V1\VariantIndexed::class => [
                // listeners
            ],
            \Callmeaf\Variant\App\Events\Web\V1\VariantCreated::class => [
                // listeners
            ],
            \Callmeaf\Variant\App\Events\Web\V1\VariantShowed::class => [
                // listeners
            ],
            \Callmeaf\Variant\App\Events\Web\V1\VariantUpdated::class => [
                // listeners
            ],
            \Callmeaf\Variant\App\Events\Web\V1\VariantDeleted::class => [
                // listeners
            ],
            \Callmeaf\Variant\App\Events\Web\V1\VariantStatusUpdated::class => [
                // listeners
            ],
            \Callmeaf\Variant\App\Events\Web\V1\VariantTypeUpdated::class => [
                // listeners
            ],
        ],
        RequestType::ADMIN->value => [
            \Callmeaf\Variant\App\Events\Admin\V1\VariantIndexed::class => [
                // listeners
            ],
            \Callmeaf\Variant\App\Events\Admin\V1\VariantCreated::class => [
                // listeners
            ],
            \Callmeaf\Variant\App\Events\Admin\V1\VariantShowed::class => [
                // listeners
            ],
            \Callmeaf\Variant\App\Events\Admin\V1\VariantUpdated::class => [
                // listeners
            ],
            \Callmeaf\Variant\App\Events\Admin\V1\VariantDeleted::class => [
                // listeners
            ],
            \Callmeaf\Variant\App\Events\Admin\V1\VariantStatusUpdated::class => [
                // listeners
            ],
            \Callmeaf\Variant\App\Events\Admin\V1\VariantTypeUpdated::class => [
                // listeners
            ],
        ],
    ],
    'requests' => [
        RequestType::API->value => [
            'index' => \Callmeaf\Variant\App\Http\Requests\Api\V1\VariantIndexRequest::class,
            'store' => \Callmeaf\Variant\App\Http\Requests\Api\V1\VariantStoreRequest::class,
            'show' => \Callmeaf\Variant\App\Http\Requests\Api\V1\VariantShowRequest::class,
            'update' => \Callmeaf\Variant\App\Http\Requests\Api\V1\VariantUpdateRequest::class,
            'destroy' => \Callmeaf\Variant\App\Http\Requests\Api\V1\VariantDestroyRequest::class,
            'statusUpdate' => \Callmeaf\Variant\App\Http\Requests\Api\V1\VariantStatusUpdateRequest::class,
            'typeUpdate' => \Callmeaf\Variant\App\Http\Requests\Api\V1\VariantTypeUpdateRequest::class,
        ],
        RequestType::WEB->value => [
            'index' => \Callmeaf\Variant\App\Http\Requests\Web\V1\VariantIndexRequest::class,
            'create' => \Callmeaf\Variant\App\Http\Requests\Web\V1\VariantCreateRequest::class,
            'store' => \Callmeaf\Variant\App\Http\Requests\Web\V1\VariantStoreRequest::class,
            'show' => \Callmeaf\Variant\App\Http\Requests\Web\V1\VariantShowRequest::class,
            'edit' => \Callmeaf\Variant\App\Http\Requests\Web\V1\VariantEditRequest::class,
            'update' => \Callmeaf\Variant\App\Http\Requests\Web\V1\VariantUpdateRequest::class,
            'destroy' => \Callmeaf\Variant\App\Http\Requests\Web\V1\VariantDestroyRequest::class,
            'statusUpdate' => \Callmeaf\Variant\App\Http\Requests\Web\V1\VariantStatusUpdateRequest::class,
            'typeUpdate' => \Callmeaf\Variant\App\Http\Requests\Web\V1\VariantTypeUpdateRequest::class,
        ],
        RequestType::ADMIN->value => [
            'index' => \Callmeaf\Variant\App\Http\Requests\Admin\V1\VariantIndexRequest::class,
            'store' => \Callmeaf\Variant\App\Http\Requests\Admin\V1\VariantStoreRequest::class,
            'show' => \Callmeaf\Variant\App\Http\Requests\Admin\V1\VariantShowRequest::class,
            'update' => \Callmeaf\Variant\App\Http\Requests\Admin\V1\VariantUpdateRequest::class,
            'destroy' => \Callmeaf\Variant\App\Http\Requests\Admin\V1\VariantDestroyRequest::class,
            'statusUpdate' => \Callmeaf\Variant\App\Http\Requests\Admin\V1\VariantStatusUpdateRequest::class,
            'typeUpdate' => \Callmeaf\Variant\App\Http\Requests\Admin\V1\VariantTypeUpdateRequest::class,
        ],
    ],
    'controllers' => [
        RequestType::API->value => [
            'variant' => \Callmeaf\Variant\App\Http\Controllers\Api\V1\VariantController::class,
        ],
        RequestType::WEB->value => [
            'variant' => \Callmeaf\Variant\App\Http\Controllers\Web\V1\VariantController::class,
        ],
        RequestType::ADMIN->value => [
            'variant' => \Callmeaf\Variant\App\Http\Controllers\Admin\V1\VariantController::class,
        ],
    ],
    'routes' => [
        RequestType::API->value => [
            'prefix' => 'variants',
            'as' => 'variants.',
            'middleware' => [
                'route_status:' . \Symfony\Component\HttpFoundation\Response::HTTP_NOT_FOUND
            ],
        ],
        RequestType::WEB->value => [
            'prefix' => 'variants',
            'as' => 'variants.',
            'middleware' => [
                'route_status:' . \Symfony\Component\HttpFoundation\Response::HTTP_NOT_FOUND
            ],
        ],
        RequestType::ADMIN->value => [
            'prefix' => 'variants',
            'as' => 'variants.',
            'middleware' => [
                'auth:sanctum',
                'role:' . \Callmeaf\Role\App\Enums\RoleName::SUPER_ADMIN->value,
            ],
        ],
    ],
    'enums' => [
         'status' => \Callmeaf\Variant\App\Enums\VariantStatus::class,
         'type' => \Callmeaf\Variant\App\Enums\VariantType::class,
    ],
     'exports' => [
        RequestType::API->value => [
            'excel' => \Callmeaf\Variant\App\Exports\Api\V1\VariantsExport::class,
        ],
        RequestType::WEB->value => [
            'excel' => \Callmeaf\Variant\App\Exports\Web\V1\VariantsExport::class,
        ],
        RequestType::ADMIN->value => [
            'excel' => \Callmeaf\Variant\App\Exports\Admin\V1\VariantsExport::class,
        ],
     ],
     'imports' => [
         RequestType::API->value => [
             'excel' => \Callmeaf\Variant\App\Imports\Api\V1\VariantsImport::class,
         ],
         RequestType::WEB->value => [
             'excel' => \Callmeaf\Variant\App\Imports\Web\V1\VariantsImport::class,
         ],
         RequestType::ADMIN->value => [
             'excel' => \Callmeaf\Variant\App\Imports\Admin\V1\VariantsImport::class,
         ],
     ],
];
