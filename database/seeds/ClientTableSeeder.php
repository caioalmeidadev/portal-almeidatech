<?php

use Illuminate\Database\Seeder;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i < 10 ; $i++) {
            App\Models\Client::create([
                'razao_social' => 'EMPRESA' . $i
                ,'nome_fantasia' => 'EMPRESA FANTASIA' .$i
                ,'responsavel_um' => 'RESPONSAVEL I'
                ,'responsavel_dois' => 'RESPONSAVEL II'
                ,'segment_id' => rand(0,2)
                ,'telefone' => '22222222'
                ,'celular' => '3333333'
                ,'email' => 'emailempresa' . $i . '@empresa' . $i . '.com'
                ,'cnpj' => '1111111111111' . $i
                ,'endereco' => 'RUA ' . $i
                ,'bairro' => 'BAIRRO ' . $i
                ,'numero' => '00' . $i
                ,'nfe' => (bool)random_int(0,1)
                ,'nfce' => (bool)random_int(0,1)
                ,'nfse' => (bool)random_int(0,1)
                ,'sped' => (bool)random_int(0,1)
                ,'status' => rand(0,3)]);
        }
    }
}
