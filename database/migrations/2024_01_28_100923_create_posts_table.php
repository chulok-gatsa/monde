<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// return new class extends Migration
class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('price');
            $table->string('image');
            $table->boolean('InStock')-> default(1);
            $table->timestamps();
            $table->unsignedBigInteger('quantity')-> default(1);

            $table->unsignedBigInteger('category_id')->nullable();
            $table->index('category_id','post_category_idx');
            $table->foreign('category_id','post_category_fk')->on('categories')->references('id');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
