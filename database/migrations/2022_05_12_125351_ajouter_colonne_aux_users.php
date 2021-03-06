<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AjouterColonneAuxUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('firstname')->after("name");
            $table->string("dateOfBirth")->after("password");
            $table->string("status")->after("dateOfBirth");
            $table->string("chooseStatus")->after("status");
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
            $table->dropColumn("firstname");
            $table->dropColumn("dateOfBirth");
            $table->dropColumn("status");
            $table->dropColumn("chooseStatus");
        });
    }
}
