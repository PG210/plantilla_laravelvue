<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() /**se utiliza para crear campos, tablas */
    {
        Schema::create('files', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('path'); /**ruta del archivo */
            $table->string('filename'); /**nombre del archivo */

            $table->bigInteger('created_by')->unsigned()->index(); /**quien creo el registro */
            $table->bigInteger('updated_by')->unsigned()->index(); /**quien modifico el registro */

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() /**se utiliza para revertir */
    {
        Schema::dropIfExists('files');
    }
}
