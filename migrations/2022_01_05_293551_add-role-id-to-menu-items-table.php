<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRoleIdToMenuItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table(config('menugenerator.table_prefix') . config('menugenerator.table_name_items'), function ($table) {
            $table->integer('role_id')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table(config('menugenerator.table_prefix') . config('menugenerator.table_name_items'), function ($table) {
            $table->dropColumn('role_id');
        });
    }
}
