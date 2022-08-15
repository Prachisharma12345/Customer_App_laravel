<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id('customer_id');
            $table->string('name',60);
            $table->string('email',100);
            //$table->enum('gender',["M","F","O"])->nullable();
            $table->text('address');
            $table->date('dob')->nullable();
            $table->string('password');//takes 255 char by default
            $table->boolean('status')->default(1);
            $table->integer('points')->default(0);
            $table->timestamps();//created_ at, updated_at

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
