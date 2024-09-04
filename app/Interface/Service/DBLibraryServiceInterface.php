<?php

namespace App\Interface\Service;

interface DBLibraryServiceInterface
{
    public function findEntries(string $modeltype);

    public function findEntry(string $modeltype, int $id);

    public function createEntry(string $modeltype, object $payload);

    public function updateEntryById(string $modeltype, object $payload, int $id);

    public function deleteEntryById(string $modeltype, int $id);
}
