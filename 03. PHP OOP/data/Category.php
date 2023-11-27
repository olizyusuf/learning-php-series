<?php

// setter getter pada php

namespace data;

class Category
{
    private string $name;
    private bool $expensive;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getExpensive(): bool
    {
        return $this->expensive;
    }

    public function isEspensive(bool $expensive): void
    {
        $this->expensive = $expensive;
    }
}
