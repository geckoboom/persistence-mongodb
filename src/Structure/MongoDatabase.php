<?php

declare(strict_types=1);

namespace Whirlwind\Persistence\Mongo\Structure;

use Whirlwind\Persistence\Mongo\MongoConnection;

class MongoDatabase
{
    protected MongoCollectionFactory $collectionFactory;

    protected MongoConnection $connection;

    protected string $name;

    protected $collections = [];

    public function __construct(MongoCollectionFactory $collectionFactory, MongoConnection $connection, string $name)
    {
        $this->collectionFactory = $collectionFactory;
        $this->connection = $connection;
        $this->name = $name;
    }

    public function getCollection($name, $refresh = false): MongoCollection
    {
        if ($refresh || !\array_key_exists($name, $this->collections)) {
            $this->collections[$name] = $this->selectCollection($name);
        }
        return $this->collections[$name];
    }

    protected function selectCollection($name): MongoCollection
    {
        return $this->collectionFactory->create($this, $name);
    }

    public function createCommand($document = [])
    {
        return $this->connection->createCommand($document, $this->name);
    }
}
