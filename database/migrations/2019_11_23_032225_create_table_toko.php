<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableToko extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('toko', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 100);
            $table->string('author', 100);
            $table->date('date_published')->nullable();
            $table->integer('number_ofpages')->nullable();
            $table->string('type_ofbooks', 100)->nullable();
            $table->timestamps();
        });

        DB::table('toko')->insert([
            'id' => '1',
            'title' => 'Senja',
            'author' => 'Tere Liye',
            'date_published' => '2019-03-10',
            'number_ofpages' =>'10',
            'type_ofbooks' => 'novel',
        ]
    );

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('toko');
    }
}
