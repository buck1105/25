<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('specialist_id')->unsigned();
            $table->string('name');
            $table->string('email');
            $table->string('password')->nullable();
            $table->string('image')->nullable();
            $table->string('phone')->nullable();
            $table->date('birthdate')->nullable();
            $table->boolean('gender')->default(1);
            $table->text('address')->nullable();
            $table->smallInteger('role')->default(3);
            $table->timestamps();
            // $table->foreignId('specialist_id')->constrained('specialists')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('users');
        $table->dropColumn('specialist_id');
    }
}
