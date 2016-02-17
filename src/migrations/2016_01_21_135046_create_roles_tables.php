<?php
namespace Kagga\migrations;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateRolesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('label')->nullable();
            $table->string('description');
            $table->timestamps();
        });

        DB::table('roles')->insert(
            array(
                'name' => 'manager',
                'label' => 'manager',
                'description' => 'This gives permission to any one with this role to view the dashboard.'
            )
        );

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('roles');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
