<?php

namespace App\DTOs;

use App\Models\CategoryModel;
use Illuminate\Support\Arr;

final class DocumentDTO
{
    private string $title;
    private string $content;
    private string $categoryName;

    public static function fromArray(array $payload): self
    {
        return (new self())->get($payload);
    }

    private function get(array $payload): self
    {
        $this->categoryName = Arr::get($payload, 'categoria');
        $this->title = Arr::get($payload, 'titulo');
        $this->content = Arr::get($payload, 'conteúdo');

        return $this;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function getCategory(): CategoryModel
    {
        return CategoryModel::where('name', $this->categoryName)->firstOrFail();
    }

    public function getCategoryName(): string
    {
       return $this->categoryName;
    }

}