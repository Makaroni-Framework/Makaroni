<?php
namespace Makaroni\Database\Migration;

use Alirezasalehizadeh\QuickMigration\Structure\Structure;
use Makaroni\Core\Database\Migration\Migration;

class PostsTableMigration extends Migration
{
    protected $database = '';

    public function set() : array
    {
        $structure = new Structure('posts');

        $structure->id();
        $structure->string('title', 100);
        $structure->string('slug', 150)->unique();
        $structure->text('body', 500);
        $structure->timestamp('created_at')->nullable();
        $structure->timestamp('updated_at')->nullable();

        return $structure->done();
    }

    
}
