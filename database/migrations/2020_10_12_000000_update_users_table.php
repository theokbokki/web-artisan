<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('trail_users', function (Blueprint $table) {
            $table->string('username')->unique()->nullable();
            $table->string('slug')->unique()->nullable();
            $table->string('avatar')->nullable();
            $table->string('job')->nullable();
            $table->text('excerpt')->nullable();
            $table->text('body')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
