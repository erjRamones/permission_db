<?php

namespace App\Interface\Service;

interface DBLibraryServiceInterface
{
    public function findEntries(string $modeltype);

    public function findEntry(object $payload, int $id);

    public function createEntry(object $payload);

    public function updateEntryById(string $modeltype, object $payload, int $id);

    public function deleteEntryById(string $modeltype, int $id);
}
