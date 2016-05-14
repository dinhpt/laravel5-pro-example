<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create ( 'adminusers', function ($t) {
			$t->increments ( 'id' );
			$t->string ( 'username', 20 )->unique ();
			$t->string ( 'password', 64 );
			$t->string ( 'email', 64 )->unique ();
			$t->tinyInteger ( 'status' );
			$t->timestamps ();
		} );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop ( 'adminusers' );
    }
}
