<?php

declare(strict_types=1);

namespace Whirlwind\Persistence\Mongo\Structure;

class MongoCollectionFactory
{
    public function create(MongoDatabase $database, string $name): MongoCollection
    {
        return new MongoCollection($database, $name);
    }
}
