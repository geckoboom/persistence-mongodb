<?php

declare(strict_types=1);

namespace Whirlwind\Persistence\Mongo\Query;

use Whirlwind\Persistence\Mongo\MongoConnection;

class MongoQueryBuilderFactory
{
    public function create(MongoConnection $connection): MongoQueryBuilder
    {
        return new MongoQueryBuilder($connection);
    }
}
