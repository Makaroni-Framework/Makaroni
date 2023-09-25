<?php

namespace Makaroni\Database\Migration;

use Alirezasalehizadeh\QuickMigration\Structure\Structure;
use Alirezasalehizadeh\QuickMigration\Structure\StructureBuilder;
use Makaroni\Core\Database\Migration\Migration;

class UsersTableMigration extends Migration
{
    public function set(): array
    {
        return Structure::create('users', function (StructureBuilder $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('email', 100)->unique();
            $table->string('password', 100);
            $table->timestamps();
        });
    }
}
