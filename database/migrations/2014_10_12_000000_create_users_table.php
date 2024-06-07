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
					$table->string('first_name', 50);
					$table->string('last_name', 50)->nullable();
					$table->string('email')->unique();
					$table->timestamp('email_verified_at')->nullable();
					$table->string('password');
					$table->string('mobile_number', 10)->unique();
					$table->date('date_of_birth');
					$table->string('gender');
					$table->string('address', 200)->nullable();
					$table->string('profile_image')->nullable();
					$table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}