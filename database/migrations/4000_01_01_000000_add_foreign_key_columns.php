<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('post_user', static function (Blueprint $table) {
            $table->foreignId('post_id')->constrained()->onUpdate('cascade');
            $table->foreignId('user_id')->constrained()->onUpdate('cascade');
        });

        Schema::table('post_tag', static function (Blueprint $table) {
            $table->foreignId('post_id')->constrained()->onUpdate('cascade');
            $table->foreignId('tag_id')->constrained()->onUpdate('cascade');
        });

        Schema::table('lesson_user', static function (Blueprint $table) {
            $table->foreignId('lesson_id')->constrained()->onUpdate('cascade');
            $table->foreignId('user_id')->constrained()->onUpdate('cascade');
        });

        Schema::table('lesson_quarter', static function (Blueprint $table) {
            $table->foreignId('lesson_id')->constrained()->onUpdate('cascade');
            $table->foreignId('quarter_id')->constrained()->onUpdate('cascade');
        });

        Schema::table('question_tag', static function (Blueprint $table) {
            $table->foreignId('question_id')->constrained()->onUpdate('cascade');
            $table->foreignId('tag_id')->constrained()->onUpdate('cascade');
        });

        Schema::table('internship_tag', static function (Blueprint $table) {
            $table->foreignId('internship_id')->constrained()->onUpdate('cascade');
            $table->foreignId('tag_id')->constrained()->onUpdate('cascade');
        });

        Schema::table('answers', static function (Blueprint $table) {
            $table->foreignId('question_id')->constrained()->onUpdate('cascade');
            $table->foreignId('user_id')->constrained()->onUpdate('cascade');
        });

        Schema::table('comments', static function (Blueprint $table) {
            $table->foreignId('question_id')->nullable()->constrained()->onUpdate('cascade');
            $table->foreignId('user_id')->constrained()->onUpdate('cascade');
            $table->foreignId('answer_id')->nullable()->constrained()->onUpdate('cascade');
        });

        Schema::table('internships', static function (Blueprint $table) {
            $table->foreignId('company_id')->constrained()->onUpdate('cascade');
        });

        Schema::table('lessons', static function (Blueprint $table) {
            $table->foreignId('year_id')->constrained()->onUpdate('cascade');
        });

        Schema::table('questions', static function (Blueprint $table) {
            $table->foreignId('user_id')->constrained()->onUpdate('cascade');
        });

        Schema::table('votes', static function (Blueprint $table) {
            $table->foreignId('question_id')->nullable()->constrained()->onUpdate('cascade');
            $table->foreignId('user_id')->constrained()->onUpdate('cascade');
            $table->foreignId('answer_id')->nullable()->constrained()->onUpdate('cascade');
        });

        Schema::table('works', static function (Blueprint $table) {
            $table->foreignId('user_id')->constrained()->onUpdate('cascade');
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
