<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('admin_nom');
            $table->string('admin_prenom');
            $table->string('admin_sexe');
            $table->string('admin_naissance');
            $table->string('admin_categorie');
            $table->string('admin_login');
            $table->string('admin_pasword');
            $table->string('admin_telephone');
            $table->string('admin_adresse');
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
        Schema::dropIfExists('admins');
    }
}
