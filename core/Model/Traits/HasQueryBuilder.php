<?php 
namespace Makaroni\Framework\Model\Traits;

use Makaroni\Framework\Database\QueryBuilder;

trait HasQueryBuilder{

    public static function query()
    {
        return new QueryBuilder;
    }
}