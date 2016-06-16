<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypebooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('typebooks', function (Blueprint $table) {
            $table->increments('id'); //ລະຫັດປະເພດໜັງສື
            $table->string('name'); //ລາຍລະອຽດປະເພດໜັງສື
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
        Schema::drop('typebooks');
    }
}
