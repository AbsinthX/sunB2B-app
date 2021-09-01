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
        $table->unsignedBigInteger('country_id')->constrained()->nullable()->after('email_verified_at');
        $table->bigInteger('nip')->length(12)->after('country_id')->nullable();
        $table->bigInteger('phone')->length(14)->after('email')->nullable();
        $table->string('street', 50)->after('nip')->nullable();
        $table->string('postal_code', 10)->after('street')->nullable();
        $table->string('city', 50)->after('postal_code')->nullable();
        $table->string('state', 50)->after('city')->nullable();
    });
}
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
