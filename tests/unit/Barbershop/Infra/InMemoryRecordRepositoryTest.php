<?php
declare(strict_types=1);

namespace unit\Barbershop\Infra;

use Barbershop\Domain\Record;
use Barbershop\Infra\InMemoryRecordRepository;
use PHPUnit\Framework\TestCase;

class InMemoryRecordRepositoryTest extends TestCase
{
    public function testAddAndGetRecord(): void
    {
        $repo = new InMemoryRecordRepository();
        $record = new Record(1);

        $repo->add($record);
        $recordFromRepo = $repo->getById($record->getId());

        $this->assertEquals($record->getId(), $recordFromRepo->getId());
    }
}
