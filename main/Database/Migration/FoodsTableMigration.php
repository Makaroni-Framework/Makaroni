<?php
namespace Makaroni\Database\Migration;

use Alirezasalehizadeh\QuickMigration\Structure\Structure;
use Makaroni\Core\Database\Migration\Migration;

class FoodsTableMigration extends Migration
{
    protected $database = '';

    public function set(): array
    {
        $structure = new Structure('foods');


        // Write structure here...

        
        return $structure->done();
    }

}