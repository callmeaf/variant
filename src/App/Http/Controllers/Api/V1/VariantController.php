<?php

namespace Callmeaf\Variant\App\Http\Controllers\Api\V1;

use Callmeaf\Base\App\Http\Controllers\Api\V1\ApiController;
use Callmeaf\Variant\App\Repo\Contracts\VariantRepoInterface;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class VariantController extends ApiController implements HasMiddleware
{
    public function __construct(protected VariantRepoInterface $variantRepo)
    {
        parent::__construct($this->variantRepo->config);
    }

    public static function middleware(): array
    {
        return [
           //
        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->variantRepo->latest()->search()->paginate();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        return $this->variantRepo->create(data: $this->request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return $this->variantRepo->findById(value: $id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(string $id)
    {
        return $this->variantRepo->update(id: $id, data: $this->request->validated());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return $this->variantRepo->delete(id: $id);
    }

    public function statusUpdate(string $id)
    {
        return $this->variantRepo->update(id: $id, data: $this->request->validated());
    }

    public function typeUpdate(string $id)
    {
        return $this->variantRepo->update(id: $id, data: $this->request->validated());
    }

    public function trashed()
    {
        return $this->variantRepo->trashed()->latest()->search()->paginate();
    }

    public function restore(string $id)
    {
        return $this->variantRepo->restore(id: $id);
    }

    public function forceDestroy(string $id)
    {
        return $this->variantRepo->forceDelete(id: $id);
    }
}
