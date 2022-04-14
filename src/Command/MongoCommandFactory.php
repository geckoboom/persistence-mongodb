<?php

declare(strict_types=1);

namespace Whirlwind\Persistence\Mongo\Command;

use Whirlwind\Persistence\Mongo\MongoConnection;

class MongoCommandFactory
{
    public function create(MongoConnection $connection, string $databaseName = null, array $document = []): MongoCommand
    {
        return new MongoCommand($connection, $databaseName, $document);
    }
}
