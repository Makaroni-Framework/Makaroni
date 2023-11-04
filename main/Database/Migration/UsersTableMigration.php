<?php

namespace Makaroni\Database\Migration;

use Makaroni\Core\Database\Migration\Migration;
use Alirezasalehizadeh\QuickMigration\Structure\Structure;
use Alirezasalehizadeh\QuickMigration\Structure\StructureBuilder;

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
