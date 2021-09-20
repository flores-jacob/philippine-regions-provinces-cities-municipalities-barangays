<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhRegionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ph_regions', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->string('code', 5);
            $table->string('name', 11);
        });

        DB::table('ph_regions')->insert([
            [
                'code' => '01',
                'name' => 'REGION I'
            ],
            [
                'code' => '02',
                'name' => 'REGION II'
            ],
            [
                'code' => '03',
                'name' => 'REGION III'
            ],
            [
                'code' => '4A',
                'name' => 'REGION IV-A'
            ],
            [
                'code' => '4B',
                'name' => 'REGION IV-B'
            ],
            [
                'code' => '05',
                'name' => 'REGION V'
            ],
            [
                'code' => '06',
                'name' => 'REGION VI'
            ],
            [
                'code' => '07',
                'name' => 'REGION VII'
            ],
            [
                'code' => '08',
                'name' => 'REGION VIII'
            ],
            [
                'code' => '09',
                'name' => 'REGION IX'
            ],
            [
                'code' => '10',
                'name' => 'REGION X'
            ],
            [
                'code' => '11',
                'name' => 'REGION XI'
            ],
            [
                'code' => '12',
                'name' => 'REGION XII'
            ],
            [
                'code' => '13',
                'name' => 'REGION XIII'
            ],
            [
                'code' => 'BARMM',
                'name' => 'BARMM'
            ],
            [
                'code' => 'CAR',
                'name' => 'CAR'
            ],
            [
                'code' => 'NCR',
                'name' => 'NCR'
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ph_regions');
    }
}
