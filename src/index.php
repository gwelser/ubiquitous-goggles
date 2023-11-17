<?php

declare(strict_types=1);

class Index
{
    private int $id;
    private string $name;
    private bool $active;

    public function __construct(int $id, int $name, bool $active = true)
    {
        $this->setId($id);
        $this->setName($name);
        $this->setActive($active);
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getActive(): bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;
        return $this;
    }
}
