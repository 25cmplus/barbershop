<?php
declare(strict_types=1);

namespace Barbershop;

interface RecordRepository
{
    public function add(Record $record);
}