<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhProvincesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ph_provinces', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->unsignedTinyInteger('region_id');
            $table->string('name', 41);

            $table->foreign('region_id')->references('id')->on('ph_regions')->onUpdate('cascade')->onDelete('restrict');
        });

        DB::table('ph_provinces')->insert([
            [
                'region_id' => 1,
                'name'      => 'ILOCOS NORTE'
            ],
            [
                'region_id' => 1,
                'name'      => 'ILOCOS SUR'
            ],
            [
                'region_id' => 1,
                'name'      => 'LA UNION'
            ],
            [
                'region_id' => 1,
                'name'      => 'PANGASINAN'
            ],
            [
                'region_id' => 2,
                'name'      => 'BATANES'
            ],
            [
                'region_id' => 2,
                'name'      => 'CAGAYAN'
            ],
            [
                'region_id' => 2,
                'name'      => 'ISABELA'
            ],
            [
                'region_id' => 2,
                'name'      => 'NUEVA VIZCAYA'
            ],
            [
                'region_id' => 2,
                'name'      => 'QUIRINO'
            ],
            [
                'region_id' => 3,
                'name'      => 'AURORA'
            ],
            [
                'region_id' => 3,
                'name'      => 'BATAAN'
            ],
            [
                'region_id' => 3,
                'name'      => 'BULACAN'
            ],
            [
                'region_id' => 3,
                'name'      => 'NUEVA ECIJA'
            ],
            [
                'region_id' => 3,
                'name'      => 'PAMPANGA'
            ],
            [
                'region_id' => 3,
                'name'      => 'TARLAC'
            ],
            [
                'region_id' => 3,
                'name'      => 'ZAMBALES'
            ],
            [
                'region_id' => 4,
                'name'      => 'BATANGAS'
            ],
            [
                'region_id' => 4,
                'name'      => 'CAVITE'
            ],
            [
                'region_id' => 4,
                'name'      => 'LAGUNA'
            ],
            [
                'region_id' => 4,
                'name'      => 'QUEZON'
            ],
            [
                'region_id' => 4,
                'name'      => 'RIZAL'
            ],
            [
                'region_id' => 5,
                'name'      => 'MARINDUQUE'
            ],
            [
                'region_id' => 5,
                'name'      => 'OCCIDENTAL MINDORO'
            ],
            [
                'region_id' => 5,
                'name'      => 'ORIENTAL MINDORO'
            ],
            [
                'region_id' => 5,
                'name'      => 'PALAWAN'
            ],
            [
                'region_id' => 5,
                'name'      => 'ROMBLON'
            ],
            [
                'region_id' => 6,
                'name'      => 'ALBAY'
            ],
            [
                'region_id' => 6,
                'name'      => 'CAMARINES NORTE'
            ],
            [
                'region_id' => 6,
                'name'      => 'CAMARINES SUR'
            ],
            [
                'region_id' => 6,
                'name'      => 'CATANDUANES'
            ],
            [
                'region_id' => 6,
                'name'      => 'MASBATE'
            ],
            [
                'region_id' => 6,
                'name'      => 'SORSOGON'
            ],
            [
                'region_id' => 7,
                'name'      => 'AKLAN'
            ],
            [
                'region_id' => 7,
                'name'      => 'ANTIQUE'
            ],
            [
                'region_id' => 7,
                'name'      => 'CAPIZ'
            ],
            [
                'region_id' => 7,
                'name'      => 'GUIMARAS'
            ],
            [
                'region_id' => 7,
                'name'      => 'ILOILO'
            ],
            [
                'region_id' => 7,
                'name'      => 'NEGROS OCCIDENTAL'
            ],
            [
                'region_id' => 8,
                'name'      => 'BOHOL'
            ],
            [
                'region_id' => 8,
                'name'      => 'CEBU'
            ],
            [
                'region_id' => 8,
                'name'      => 'NEGROS ORIENTAL'
            ],
            [
                'region_id' => 8,
                'name'      => 'SIQUIJOR'
            ],
            [
                'region_id' => 9,
                'name'      => 'BILIRAN'
            ],
            [
                'region_id' => 9,
                'name'      => 'EASTERN SAMAR'
            ],
            [
                'region_id' => 9,
                'name'      => 'LEYTE'
            ],
            [
                'region_id' => 9,
                'name'      => 'NORTHERN SAMAR'
            ],
            [
                'region_id' => 9,
                'name'      => 'SAMAR (WESTERN SAMAR)'
            ],
            [
                'region_id' => 9,
                'name'      => 'SOUTHERN LEYTE'
            ],
            [
                'region_id' => 10,
                'name'      => 'ZAMBOANGA DEL NORTE'
            ],
            [
                'region_id' => 10,
                'name'      => 'ZAMBOANGA DEL SUR'
            ],
            [
                'region_id' => 10,
                'name'      => 'ZAMBOANGA SIBUGAY'
            ],
            [
                'region_id' => 11,
                'name'      => 'BUKIDNON'
            ],
            [
                'region_id' => 11,
                'name'      => 'CAMIGUIN'
            ],
            [
                'region_id' => 11,
                'name'      => 'LANAO DEL NORTE'
            ],
            [
                'region_id' => 11,
                'name'      => 'MISAMIS OCCIDENTAL'
            ],
            [
                'region_id' => 11,
                'name'      => 'MISAMIS ORIENTAL'
            ],
            [
                'region_id' => 12,
                'name'      => 'COMPOSTELA VALLEY'
            ],
            [
                'region_id' => 12,
                'name'      => 'DAVAO (DAVAO DEL NORTE)'
            ],
            [
                'region_id' => 12,
                'name'      => 'DAVAO DEL SUR'
            ],
            [
                'region_id' => 12,
                'name'      => 'DAVAO OCCIDENTAL'
            ],
            [
                'region_id' => 12,
                'name'      => 'DAVAO ORIENTAL'
            ],
            [
                'region_id' => 13,
                'name'      => 'COTABATO (NORTH COT.)'
            ],
            [
                'region_id' => 13,
                'name'      => 'SARANGANI'
            ],
            [
                'region_id' => 13,
                'name'      => 'SOUTH COTABATO'
            ],
            [
                'region_id' => 13,
                'name'      => 'SULTAN KUDARAT'
            ],
            [
                'region_id' => 14,
                'name'      => 'AGUSAN DEL NORTE'
            ],
            [
                'region_id' => 14,
                'name'      => 'AGUSAN DEL SUR'
            ],
            [
                'region_id' => 14,
                'name'      => 'DINAGAT ISLANDS'
            ],
            [
                'region_id' => 14,
                'name'      => 'SURIGAO DEL NORTE'
            ],
            [
                'region_id' => 14,
                'name'      => 'SURIGAO DEL SUR'
            ],
            [
                'region_id' => 15,
                'name'      => 'BASILAN'
            ],
            [
                'region_id' => 15,
                'name'      => 'LANAO DEL SUR'
            ],
            [
                'region_id' => 15,
                'name'      => 'MAGUINDANAO'
            ],
            [
                'region_id' => 15,
                'name'      => 'SULU'
            ],
            [
                'region_id' => 15,
                'name'      => 'TAWI-TAWI'
            ],
            [
                'region_id' => 16,
                'name'      => 'ABRA'
            ],
            [
                'region_id' => 16,
                'name'      => 'APAYAO'
            ],
            [
                'region_id' => 16,
                'name'      => 'BENGUET'
            ],
            [
                'region_id' => 16,
                'name'      => 'IFUGAO'
            ],
            [
                'region_id' => 16,
                'name'      => 'KALINGA'
            ],
            [
                'region_id' => 16,
                'name'      => 'MOUNTAIN PROVINCE'
            ],
            [
                'region_id' => 17,
                'name'      => 'NATIONAL CAPITAL REGION - FOURTH DISTRICT'
            ],
            [
                'region_id' => 17,
                'name'      => 'NATIONAL CAPITAL REGION - MANILA'
            ],
            [
                'region_id' => 17,
                'name'      => 'NATIONAL CAPITAL REGION - SECOND DISTRICT'
            ],
            [
                'region_id' => 17,
                'name'      => 'NATIONAL CAPITAL REGION - THIRD DISTRICT'
            ],
            [
                'region_id' => 17,
                'name'      => 'TAGUIG - PATEROS'
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
        Schema::dropIfExists('ph_provinces');
    }
}
