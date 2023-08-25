<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\DTOs\DocumentDTO;
use Illuminate\Testing\Assert;

class DocumentDTOTest extends TestCase
{

    public function test_FromArray_ShouldFillAndReturnProperties(): void
    {
        $dto = DocumentDTO::FromArray([
            'titulo' => 'Os Irmãos Karamázov',
            'categoria' => 'Remessa',
            'conteúdo' => 'livro',
        ]);

        Assert::assertEquals('Os Irmãos Karamázov', $dto->getTitle());
        Assert::assertEquals('Remessa', $dto->getCategoryName());
        Assert::assertEquals('livro', $dto->getContent());
    }
}
