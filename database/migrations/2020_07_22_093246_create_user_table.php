<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    

    DB::table('user')->insert(
        array(
            'id' => 1,
            'name' => 'Joe Bloggs',
            'email' => 'joe.bloggs@dummy.co.uk',
            'password' => 'password',
        )
    );

    DB::table('user')->insert(
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
        Schema::dropIfExists('user');
    }
}
