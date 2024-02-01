<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('titre'); 
            $table->string('slug'); 
            $table->text('body'); 
            $table->decimal('prix',10,2); 
            $table->string('image'); 
            $table->string('user_phone'); 
            $table->string('user_email'); 
            $table->string('fname'); 
            $table->string('lname');
            $table->string('image_user')->nullable();
            $table->unsignedBigInteger('cat_id'); 
            $table->timestamps(); 
            //foreing key :
            $table->foreign('cat_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};

