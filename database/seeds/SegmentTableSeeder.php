<?php

use Illuminate\Database\Seeder;
use App\Models\Segment;
class SegmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Segment::create(['descricao' => 'SUPERMERCADO','slug' => 'super-mercado']);
       Segment::create(['descricao' => 'SERVICOS','slug' => 'servicos']);
       Segment::create(['descricao' => 'INDUSTRIA','slug' => 'industria']);
    }
}
