<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Services\DocumentService;
use App\Models\DocumentModel;
use Illuminate\Testing\Assert;

class DocumentServiceTest extends TestCase
{

    public function test_ShouldImportDocumentsWithCorrectProperties(): void
    {
        $document = [[
            'titulo' => 'Os Irmãos Karamázov - Test',
            'conteúdo' => 'Os irmãos Karamázov é o último romance de Dostoiévski. No fundo, ele resume toda a criatividade do escritor, trazendo à baila as “malditas” questões existenciais que o afligiram a vida inteira, com especial relevo para a flagrante degradação moral da humanidade afastada dos ideais cristãos. Cheia de peripécias, a narrativa põe em foco três protagonistas irmãos, representantes dos mais diversos aspectos da realidade russa – o libertino Dmítri, o niilista Ivan e o sublime Aliocha –, a fim de alumiar as profundezas insondáveis do coração entregue ao pecado, corrompido por dúvidas ou transbordantede amor.',
            'categoria' => 'Remessa',
        ]];

        (new DocumentService())->import($document);

        $documentModel = DocumentModel::where('title', 'Os Irmãos Karamázov - Test')->firstOrFail();

        Assert::assertEquals($document[0]['titulo'], $documentModel->title);
        Assert::assertEquals($document[0]['conteúdo'], $documentModel->content);
        Assert::assertEquals($document[0]['categoria'], $documentModel->category()->first()->name);
    }
}
