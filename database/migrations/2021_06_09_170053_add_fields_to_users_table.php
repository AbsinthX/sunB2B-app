<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::table('users', function (Blueprint $table) {
        $table->unsignedBigInteger('country_id')->constrained()->nullable()->after('password');
        $table->text('biography')->nullable()->after('country_id');
    });
}
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
