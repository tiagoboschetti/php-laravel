<?php

namespace App\Http\Controllers;

use App\Services\DocumentService;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class DocumentController extends Controller
{
    public function import(Request $request)
    {
        try {
            $documentsArray = $request->input('documentos');

            $service = new DocumentService();
            $service->import($documentsArray);
            
            return $this->responseData('Documents imported successfully!');
        } catch (\Exception $e) {
            return $this->responseData($e->getMessage(), $e->getCode());
        }
    }
}