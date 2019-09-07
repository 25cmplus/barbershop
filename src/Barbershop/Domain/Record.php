<?php
declare(strict_types=1);

namespace Barbershop\Domain;

class Record
{
    /** @var int */
    private $id;

    /** Это будет Enum: https://github.com/myclabs/php-enum, можно написать тест */
    private $state;

    public function __construct(int $id)
    {
        $this->id = $id;
    }

    public function getId(): int
    {
        return $this->id;
    }
}