<?php
declare(strict_types=1);

namespace Barbershop;

class Record
{
    /** @var int */
    private $id;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }
}