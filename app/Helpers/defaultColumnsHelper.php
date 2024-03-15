<?php


namespace App\Helpers;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class defaultColumnsHelper
{
    public static function defaultColumns(Blueprint $blueprint)
    {
        $blueprint->string('creation_user')->nullable();
        $blueprint->string('modification_user')->nullable();
        $blueprint->timestamps();
        $blueprint->softDeletes();
        $blueprint->string('elimination_user')->nullable();
        $blueprint->integer('status')->comment('0 deleted, 1 active, 2 inactive')->nullable();
    }

}
