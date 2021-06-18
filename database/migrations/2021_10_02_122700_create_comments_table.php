<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string('name', 40);
            $table->string('email');
            $table->text('comment', 400);

            $table->unsignedBigInteger('post_id')->constrained('posts')->OnDelete('cascade');

            $table->string("dateDay");
            $table->string("dateMonth");
            $table->string("dateYear");

            $table->boolean('validate');
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
        Schema::dropIfExists('comments');
    }
}
