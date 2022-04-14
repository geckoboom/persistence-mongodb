<?php

declare(strict_types=1);

namespace Whirlwind\Persistence\Mongo\Query;

use Whirlwind\Persistence\Mongo\MongoConnection;

class MongoQueryFactory
{
    public function create(MongoConnection $connection): MongoQuery
    {
        return new MongoQuery($connection);
    }
}
