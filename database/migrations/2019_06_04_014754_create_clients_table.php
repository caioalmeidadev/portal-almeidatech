<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Enums\ClientStatus;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('razao_social');
            $table->string('nome_fantasia')->nullable();
            $table->string('responsavel_um')->nullable();
            $table->string('responsavel_dois')->nullable();
            $table->unsignedInteger('segment_id');
            $table->string('telefone')->nullable();
            $table->string('celular')->nullable();
            $table->string('email')->nullable();
            $table->string('cnpj')->nullable();
            $table->string('endereco')->nullable();
            $table->string('bairro')->nullable();
            $table->string('numero')->nullable();
            $table->boolean('nfe')->default(false);
            $table->boolean('nfce')->default(false);
            $table->boolean('nfse')->default(false);
            $table->boolean('sped')->default(false);
            $table->date('data_limite')->nullable();
            $table->string('liberacao')->nullable();
            $table->integer('status')->default(ClientStatus::ACTIVE);
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
        Schema::dropIfExists('clients');
    }
}
