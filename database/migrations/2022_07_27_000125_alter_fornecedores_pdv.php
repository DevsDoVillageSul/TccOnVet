<?php

use App\Models\Security\Permission;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterFornecedoresPdv extends Migration
{
    public function up()
    {
        $menu = Permission::find(12);
        if (isset($menu->id)) {
            $menu->icon = 'map-pin';
            $menu->save();
        }
    }


    public function down()
    {
        $menu = Permission::find(12);
        if (isset($menu->id)) {
            $menu->icon = 'briefcase';
            $menu->save();
        }
    }
}