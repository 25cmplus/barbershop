<?php
declare(strict_types=1);

namespace Barbershop\Infra;

use Barbershop\Domain\Record;
use Barbershop\Domain\RecordRepository;

final class InMemoryRecordRepository implements RecordRepository
{
    /** @var Record[] */
    private $records = [];

    public function add(Record $record): void
    {
        $this->records[$record->getId()] = $record;
    }

    public function getById(int $id): Record
    {
        return $this->records[$id];
    }
}