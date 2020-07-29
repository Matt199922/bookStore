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
            $table->increments('id');
            $table->string('name');
            $table->string('email', 191)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    

    DB::table('users')->insert(
        array(
            'id' => 1,
            'name' => 'Joe Bloggs',
            'email' => 'joe.bloggs@dummy.co.uk',
            'password' => 'password',
        )
    );

    DB::table('users')->insert(
        array(
            'id' => 2,
            'name' => 'James Bond',
            'email' => 'james.bond@spy.co.uk',
            'password' => 'password',
        )
    );
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
