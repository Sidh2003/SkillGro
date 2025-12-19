<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->string('course_name')->nullable();
            $table->string('slug')->nullable();
            $table->string('price')->nullable();
            $table->string('teacher')->nullable();
            $table->string('photo')->nullable();
            $table->longText('course_description')->nullable();
            $table->longText('pointers')->nullable();
            $table->longText('short_description')->nullable();
            $table->string('level')->nullable();
            $table->string('duration')->nullable();
            $table->string('lesson')->nullable();
            $table->string('quizzes')->nullable();
            $table->string('weekly_test')->nullable();
            $table->string('certificate')->nullable();
            $table->string('language')->nullable();
            $table->string('status')->default('INACTIVE');
            $table->string('home_featured')->default('INACTIVE');
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->timestamps();


            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
};
