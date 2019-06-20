<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCregsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cregs', function (Blueprint $table) {
            $table->bigIncrements('cid');
			$table->string('name');
			$table->string('addr');
			$table->string('state');
			$table->string('city');
			$table->string('landmark');
			$table->integer('pin');
			$table->string('ph');
			$table->string('addtype');
			
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
        Schema::dropIfExists('cregs');
    }
}
