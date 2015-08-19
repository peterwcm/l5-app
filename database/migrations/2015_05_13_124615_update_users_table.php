<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users', function(Blueprint $table)
		{
            $table->dropColumn('name');
			$table->string('first_name')->after('password');
            $table->string('last_name')->after('first_name');
            $table->string('username')->unique()->nullable()->after('last_name');
            $table->boolean('is_email_verified')->default(0);
            $table->string('email_verification_code', 32)->nullable();
            $table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users', function(Blueprint $table)
		{
            $table->string('name')->after('id');
            $table->dropColumn('first_name');
            $table->dropColumn('last_name');
            $table->dropColumn('username');
            $table->dropColumn('is_email_verified');
            $table->dropColumn('email_verification_code');
            $table->dropColumn('deleted_at');
		});
	}

}
