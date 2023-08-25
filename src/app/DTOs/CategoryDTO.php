<?php

namespace App\DTOs;

use Illuminate\Support\Arr;

final class CategoryDTO
{
    private string $name;

    public static function fromArray(array $payload): self
    {
        return (new self())->get($payload);
    }

    private function get(array $payload): self
    {
        $this->name = Arr::get($payload, 'name');

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

}