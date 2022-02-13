<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePizzaTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pizza_tags', function (Blueprint $table) {
        
            $table->foreignId('pizza_id')->constrained();
            $table->foreignId('tag_id')->constrained();
            $table->primary(['pizza_id', 'tag_id']); // primary key
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pizza_tags');
    }
}
