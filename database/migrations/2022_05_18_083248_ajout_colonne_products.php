<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AjoutColonneProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('categorie')->after('product_name');
            $table->string('localisation')->after('categorie');
            $table->string('images')->after('localisation');
            $table->text('marquesVisees')->after('description');
        });
    }
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('categorie');
            $table->dropColumn('localisation');
            $table->dropColumn('images');
            $table->dropColumn('marquesVisees');
        });
    }
}


    /**
     * Reverse the migrations.
     *
     * @return void
     */