<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('text');
            $table->string('image');
            $table->string('dateDay');
            $table->string('dateMonth', 30);
            $table->string('dateYear');

            $table->foreignId('user_id')->constrained();

            $table->foreignId('category_id')->nullable()->constrained()->OnDelete('cascade');

            $table->boolean('validate');
            $table->boolean('trash');

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
        Schema::dropIfExists('posts');
    }
}
