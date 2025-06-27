<?php

namespace Callmeaf\Variant\App\Imports\Api\V1;

use Callmeaf\Base\App\Services\Importer;
use Callmeaf\Variant\App\Enums\VariantStatus;
use Callmeaf\Variant\App\Repo\Contracts\VariantRepoInterface;
use Illuminate\Support\Collection;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class VariantsImport extends Importer implements ToCollection,WithChunkReading,WithStartRow,SkipsEmptyRows,WithValidation,WithHeadingRow
{
    private VariantRepoInterface $variantRepo;

    public function __construct()
    {
        $this->variantRepo = app(VariantRepoInterface::class);
    }

    public function collection(Collection $collection)
    {
        $this->total = $collection->count();

        foreach ($collection as $row) {
            $this->variantRepo->freshQuery()->create([
                // 'status' => $row['status'],
            ]);
            ++$this->success;
        }
    }

    public function chunkSize(): int
    {
        return \Base::config('import_chunk_size');
    }

    public function startRow(): int
    {
        return 2;
    }

    public function rules(): array
    {
        $table = $this->variantRepo->getTable();
        return [
            // 'status' => ['required',Rule::enum(VariantStatus::class)],
        ];
    }

}
