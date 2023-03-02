<?php
namespace Makaroni\Migration;

use Alirezasalehizadeh\QuickMigration\Enums\Index;
use Alirezasalehizadeh\QuickMigration\Structure\Structure;
use Makaroni\Core\Migration\Migration;

class PostsTableMigration extends Migration
{
    protected $database = '';

    public function set() : array
    {
        $structure = new Structure('posts');

        $structure->id();
        $structure->string('title', 100)->nullable(false);
        $structure->string('slug', 150)->nullable(false)->index(Index::Unique);
        $structure->text('body', 500)->nullable(false);
        $structure->timestamp('created_at');
        $structure->timestamp('updated_at');

        return $structure->done();
    }

    
}
