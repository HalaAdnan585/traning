<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class StudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //student
        Schema::create('first', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('id');
            $table->string('userName');
            $table->rememberToken();
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
        //
    }

    public function teacher(){
        return $this->belongsTo(Teacher::Class);
    }
}
