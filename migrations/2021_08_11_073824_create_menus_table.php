<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create( config('menugenerator.table_prefix') . config('menugenerator.table_name_menus'), function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('description',100)->nullable();
            $table->longText('properties')->default('[]');
            $table->string('status', 20)->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists( config('menugenerator.table_prefix') . config('menugenerator.table_name_menus'));
    }
}
