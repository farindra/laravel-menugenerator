<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create( config('menugenerator.table_prefix') . config('menugenerator.table_name_items') , function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('label');
            $table->string('link');
            $table->string('link_type', 10)->default('url');
            $table->unsignedBigInteger('parent')->default(0);
            $table->integer('sort')->default(0);
            $table->string('class')->nullable();
            $table->unsignedBigInteger('menu');
            $table->integer('depth')->default(0);
            $table->string('description',100)->nullable();
            $table->string('permissions', 100)->nullable();
            $table->longText('properties')->default('[]');
            $table->string('status', 20)->default('active');
            $table->timestamps();

            $table->foreign('menu')->references('id')->on(config('menugenerator.table_prefix') . config('menugenerator.table_name_menus'))
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists( config('menugenerator.table_prefix') . config('menugenerator.table_name_items'));
    }
}
