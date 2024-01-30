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
            $table->text('titre'); // service title
            $table->text('description'); // service description
            $table->decimal('prix',10,2); // service prix
            $table->text('image')->nullable(); // service image
            $table->string('user_contact'); // service user contact
            $table->string('user_email'); // l'e-mail de l'utilisateur
            $table->string('fname'); //first name user
            $table->string('lname');//last name user
            $table->unsignedBigInteger('cat_id'); // cat_id reference to id of category
            $table->timestamps(); // service created
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
