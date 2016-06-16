<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id'); //ລະຫັດໜັງສື
            $table->string('title'); //ຊື່ໜັງສື
            $table->decimal('price',10,2); //ລາຄາ
            $table->integer('typebooks_id')->unsigned();
            $table->foreign('typebooks_id')->references('id')->on('typebooks');
            $table->string('image'); //ຮູບພາບ
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
        Schema::drop('books');
    }
}
