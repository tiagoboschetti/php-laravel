<?php

namespace App\Services;

use App\DTOs\DocumentDTO;
use App\Models\DocumentModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

final class DocumentService
{
    public function import(Array $documentsArray): void
    {
        try {
            foreach ($documentsArray as $document) {
                $documentDTO = DocumentDTO::fromArray($document);
                $this->save($documentDTO);
            }
        } catch (\Exception $e) {
            throw $e;
        }
    }

    private function save(DocumentDTO $documentDTO): void
    {
        $category = $documentDTO->getCategory();

        $document = new DocumentModel([
            'title' => $documentDTO->getTitle(),
            'content' => $documentDTO->getContent(),
            'category_id' => $category->id,
        ]);

        $document->save();        
    }
}