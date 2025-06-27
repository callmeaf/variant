<?php

namespace Callmeaf\Variant\App\Exports\Api\V1;

use Callmeaf\Variant\App\Models\Variant;
use Callmeaf\Variant\App\Repo\Contracts\VariantRepoInterface;
use Illuminate\Contracts\Support\Responsable;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithCustomChunkSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Excel;

class VariantsExport implements FromCollection,WithHeadings,Responsable,WithMapping,WithCustomChunkSize
{
    use Exportable;

    /**
     * It's required to define the fileName within
     * the export class when making use of Responsable.
     */
    private $fileName = '';

    /**
     * Optional Writer Type
     */
    private $writerType = Excel::XLSX;

    /**
     * Optional headers
     */
    private $headers = [
        'Content-Type' => 'text/csv',
    ];

    private VariantRepoInterface $variantRepo;
    public function __construct()
    {
        $this->variantRepo = app(VariantRepoInterface::class);
        $this->fileName = $this->fileName ?: \Base::exportFileName(model: $this->variantRepo->getModel()::class,extension: $this->writerType);
    }

    public function collection()
    {
        if(\Base::getTrashedData()) {
            $this->variantRepo->trashed();
        }

        $this->variantRepo->latest()->search();

        if(\Base::getAllPagesData()) {
            return $this->variantRepo->lazy();
        }

        return $this->variantRepo->paginate();
    }

    public function headings(): array
    {
        return [
           // 'status',
        ];
    }

    /**
     * @param Variant $row
     * @return array
     */
    public function map($row): array
    {
        return [
            // $row->status?->value,
        ];
    }

    public function chunkSize(): int
    {
        return \Base::config('export_chunk_size');
    }
}
