<?php
namespace Makaroni\Migration;

use Alirezasalehizadeh\QuickMigration\Structure\Structure;
use Makaroni\Core\Migration\Migration;

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
