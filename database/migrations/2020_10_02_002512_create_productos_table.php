<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre');
            $table->string('descripcion');
            $table->decimal('costo1', 8, 2);
            $table->decimal('costo2', 8, 2);
            $table->decimal('costo3', 8, 2);
            $table->decimal('costo4', 8, 2);
            $table->binary('foto');
            $table->string('foto_url');
            $table->integer('categoria_id')
            ->unsigned()
            ->index()
            ->foreign()
            ->references('id')
            ->on('categorias')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
