<?php

namespace Callmeaf\Variant\App\Http\Requests\Admin\V1;

use Callmeaf\Product\App\Repo\Contracts\ProductRepoInterface;
use Callmeaf\Variant\App\Enums\VariantStatus;
use Callmeaf\Variant\App\Enums\VariantType;
use Callmeaf\Variant\App\Repo\Contracts\VariantRepoInterface;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Enum;

class VariantUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(VariantRepoInterface $variantRepo,ProductRepoInterface $productRepo): array
    {
        return [
            'sku' => ['required',Rule::unique($variantRepo->getTable(),$variantRepo->getModel()->getKeyName())->ignore($this->route('variant'),$variantRepo->getModel()->getKeyName())],
            'product_slug' => ['required',Rule::exists($productRepo->getTable(),$productRepo->getModel()->getKeyName())],
            'status' => ['required',new Enum(VariantStatus::class)],
            'type' => ['required',new Enum(VariantType::class)],
            'stock' => ['nullable','integer'],
            'price' => ['nullable','numeric'],
            'cost_price' => ['nullable','numeric'],
        ];
    }
}
