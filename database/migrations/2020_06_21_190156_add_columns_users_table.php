<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
		Schema::table('users', function (Blueprint $table) {
            $table
                ->string('organization_name', 100)
                ->nullable()
                ->comment('Название организации');
            $table
                ->string('organization_certificate', 100)
                ->nullable()
                ->comment('Номер свидетельства');
            $table
                ->date('organization_created')
                ->nullable()
                ->comment('Дата создания организации');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
		Schema::table('users', function (Blueprint $table) {
			$table->dropColumn(['organization_name','organization_certificate','organization_created']);
        });
    }
}
