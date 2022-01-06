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
            $table->bigIncrements('id');
            $table->string('firstname'); /**primer nombre */
            $table->string('secondname')->nullable(); /**segundo nombre acepta nulos */
            $table->string('lastname');/**apellido del usuario */
            $table->string('username')->index();/**nombre del usuario y agrega un indice para que sea unico */
            $table->string('email')->unique(); /**email tambiem agregamos unico */
            $table->timestamp('email_verified_by')->nullable();
            $table->string('password');
            $table->bigInteger('file_id')->unsigned()->nullable();/**que no acepte valores negativos y acepte nulos */
            $table->rememberToken();
            /**saber quien actualizo los datos */
            $table->bigInteger('created_by')->unsigned()->index();
            $table->bigInteger('updated_by')->unsigned()->index();
            $table->enum('state', ['A', 'I'])->nullable()->default('A');/**estado del usuario activo o inactivo  y por defecto registre activo*/
            $table->timestamps();

            /**referencia a la tabla files, referencia al campo file_id con el campo id de la tabla files*/
            $table->foreign('file_id')->references('id')->on('files');
        });
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
