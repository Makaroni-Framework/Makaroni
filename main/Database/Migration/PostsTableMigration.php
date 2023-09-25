<?php

namespace Makaroni\Database\Migration;

use Alirezasalehizadeh\QuickMigration\Structure\Structure;
use Alirezasalehizadeh\QuickMigration\Structure\StructureBuilder;
use Makaroni\Core\Database\Migration\Migration;

class PostsTableMigration extends Migration
{
    public function set(): array
    {
        return Structure::create('posts', function (StructureBuilder $structure) {
            $structure->id();
            $structure->string('title', 100);
            $structure->string('slug', 150)->unique();
            $structure->text('body', 500);
            $structure->timestamps();
        });
    }
}
