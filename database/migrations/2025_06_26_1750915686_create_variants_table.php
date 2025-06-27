<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('variants', function (Blueprint $table) {
            $table->string('sku')->primary();
            /**
             * @var \Callmeaf\Product\App\Repo\Contracts\ProductRepoInterface $productRepo
             */
            $productRepo = app(\Callmeaf\Product\App\Repo\Contracts\ProductRepoInterface::class);
            $table->string('product_slug');
            $table->foreign('product_slug')->references($productRepo->getModel()->getKeyName())->on($productRepo->getTable());
            $table->integer('stock')->nullable();
            $table->string('status');
            $table->string('type')->index();
            $table->string('price')->nullable();
            $table->string('cost_price')->nullable();

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('variants');
    }
};
