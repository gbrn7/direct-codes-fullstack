<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('trailer');
            $table->string('videos')->nullable();
            $table->string('mentor');
            $table->string('categories');
            $table->string('thumbnail');
            $table->date('release_date');  
            $table->text('about');
            // Note: use text datatype for long string
            $table->string('number_of_parts');
            $table->boolean('featured');
            $table->softDeletes();
            // Note: softDeletes command to activate the soft delete function on laravel
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
};
