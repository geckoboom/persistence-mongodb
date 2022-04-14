<?php

declare(strict_types=1);

namespace Whirlwind\Persistence\Mongo\Structure;

use Whirlwind\Persistence\Mongo\MongoConnection;

class MongoDatabaseFactory
{
    protected $collectionFactory;

    public function __construct(MongoCollectionFactory $collectionFactory)
    {
        $this->collectionFactory = $collectionFactory;
    }

    public function create(MongoConnection $connection, string $name): MongoDatabase
    {
        return new MongoDatabase($this->collectionFactory, $connection, $name);
    }
}
