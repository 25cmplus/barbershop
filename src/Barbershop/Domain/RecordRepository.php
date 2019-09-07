<?php
declare(strict_types=1);

namespace Barbershop\Domain;

interface RecordRepository
{
    public function add(Record $record): void;

    public function getById(int $id): Record;
}