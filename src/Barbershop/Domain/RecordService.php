<?php
declare(strict_types=1);

namespace Barbershop\Domain;

class RecordService
{
    /**
     * @var RecordRepository
     */
    private $recordRepository;

    public function __construct(RecordRepository $recordRepository)
    {
        $this->recordRepository = $recordRepository;
    }

    public function makeRecord(RecordRequest $request): Record {
        // создать запись на основе запроса, сохранить в репо и вернуть ее
        // $this->recordRepository->add(..)
    }
}