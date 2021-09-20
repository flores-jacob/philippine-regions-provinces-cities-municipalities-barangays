<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhMuncitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ph_muncities', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->unsignedTinyInteger('province_id');
            $table->string('name', 46);

            $table->foreign('province_id')->references('id')->on('ph_provinces')->onUpdate('cascade')->onDelete('restrict');
        });

        DB::table('ph_muncities')->insert([
            [
                'province_id' => 1,
                'name'        => 'ADAMS'
            ],
            [
                'province_id' => 1,
                'name'        => 'BACARRA'
            ],
            [
                'province_id' => 1,
                'name'        => 'BADOC'
            ],
            [
                'province_id' => 1,
                'name'        => 'BANGUI'
            ],
            [
                'province_id' => 1,
                'name'        => 'BANNA (ESPIRITU)'
            ],
            [
                'province_id' => 1,
                'name'        => 'BATAC CITY'
            ],
            [
                'province_id' => 1,
                'name'        => 'BURGOS'
            ],
            [
                'province_id' => 1,
                'name'        => 'CARASI'
            ],
            [
                'province_id' => 1,
                'name'        => 'CURRIMAO'
            ],
            [
                'province_id' => 1,
                'name'        => 'DINGRAS'
            ],
            [
                'province_id' => 1,
                'name'        => 'DUMALNEG'
            ],
            [
                'province_id' => 1,
                'name'        => 'LAOAG CITY'
            ],
            [
                'province_id' => 1,
                'name'        => 'MARCOS'
            ],
            [
                'province_id' => 1,
                'name'        => 'NUEVA ERA'
            ],
            [
                'province_id' => 1,
                'name'        => 'PAGUDPUD'
            ],
            [
                'province_id' => 1,
                'name'        => 'PAOAY'
            ],
            [
                'province_id' => 1,
                'name'        => 'PASUQUIN'
            ],
            [
                'province_id' => 1,
                'name'        => 'PIDDIG'
            ],
            [
                'province_id' => 1,
                'name'        => 'PINILI'
            ],
            [
                'province_id' => 1,
                'name'        => 'SAN NICOLAS'
            ],
            [
                'province_id' => 1,
                'name'        => 'SARRAT'
            ],
            [
                'province_id' => 1,
                'name'        => 'SOLSONA'
            ],
            [
                'province_id' => 1,
                'name'        => 'VINTAR'
            ],
            [
                'province_id' => 2,
                'name'        => 'ALILEM'
            ],
            [
                'province_id' => 2,
                'name'        => 'BANAYOYO'
            ],
            [
                'province_id' => 2,
                'name'        => 'BANTAY'
            ],
            [
                'province_id' => 2,
                'name'        => 'BURGOS'
            ],
            [
                'province_id' => 2,
                'name'        => 'CABUGAO'
            ],
            [
                'province_id' => 2,
                'name'        => 'CANDON CITY'
            ],
            [
                'province_id' => 2,
                'name'        => 'CAOAYAN'
            ],
            [
                'province_id' => 2,
                'name'        => 'CERVANTES'
            ],
            [
                'province_id' => 2,
                'name'        => 'GALIMUYOD'
            ],
            [
                'province_id' => 2,
                'name'        => 'GREGORIO DEL PILAR (CONCEPCION)'
            ],
            [
                'province_id' => 2,
                'name'        => 'LIDLIDDA'
            ],
            [
                'province_id' => 2,
                'name'        => 'MAGSINGAL'
            ],
            [
                'province_id' => 2,
                'name'        => 'NAGBUKEL'
            ],
            [
                'province_id' => 2,
                'name'        => 'NARVACAN'
            ],
            [
                'province_id' => 2,
                'name'        => 'QUIRINO (ANGKAKI)'
            ],
            [
                'province_id' => 2,
                'name'        => 'SALCEDO (BAUGEN)'
            ],
            [
                'province_id' => 2,
                'name'        => 'SAN EMILIO'
            ],
            [
                'province_id' => 2,
                'name'        => 'SAN ESTEBAN'
            ],
            [
                'province_id' => 2,
                'name'        => 'SAN ILDEFONSO'
            ],
            [
                'province_id' => 2,
                'name'        => 'SAN JUAN (LAPOG)'
            ],
            [
                'province_id' => 2,
                'name'        => 'SAN VICENTE'
            ],
            [
                'province_id' => 2,
                'name'        => 'SANTA'
            ],
            [
                'province_id' => 2,
                'name'        => 'SANTA CATALINA'
            ],
            [
                'province_id' => 2,
                'name'        => 'SANTA CRUZ'
            ],
            [
                'province_id' => 2,
                'name'        => 'SANTA LUCIA'
            ],
            [
                'province_id' => 2,
                'name'        => 'SANTA MARIA'
            ],
            [
                'province_id' => 2,
                'name'        => 'SANTIAGO'
            ],
            [
                'province_id' => 2,
                'name'        => 'SANTO DOMINGO'
            ],
            [
                'province_id' => 2,
                'name'        => 'SIGAY'
            ],
            [
                'province_id' => 2,
                'name'        => 'SINAIT'
            ],
            [
                'province_id' => 2,
                'name'        => 'SUGPON'
            ],
            [
                'province_id' => 2,
                'name'        => 'SUYO'
            ],
            [
                'province_id' => 2,
                'name'        => 'TAGUDIN'
            ],
            [
                'province_id' => 2,
                'name'        => 'VIGAN CITY'
            ],
            [
                'province_id' => 3,
                'name'        => 'AGOO'
            ],
            [
                'province_id' => 3,
                'name'        => 'ARINGAY'
            ],
            [
                'province_id' => 3,
                'name'        => 'BACNOTAN'
            ],
            [
                'province_id' => 3,
                'name'        => 'BAGULIN'
            ],
            [
                'province_id' => 3,
                'name'        => 'BALAOAN'
            ],
            [
                'province_id' => 3,
                'name'        => 'BANGAR'
            ],
            [
                'province_id' => 3,
                'name'        => 'BAUANG'
            ],
            [
                'province_id' => 3,
                'name'        => 'BURGOS'
            ],
            [
                'province_id' => 3,
                'name'        => 'CABA'
            ],
            [
                'province_id' => 3,
                'name'        => 'CITY OF SAN FERNANDO'
            ],
            [
                'province_id' => 3,
                'name'        => 'LUNA'
            ],
            [
                'province_id' => 3,
                'name'        => 'NAGUILIAN'
            ],
            [
                'province_id' => 3,
                'name'        => 'PUGO'
            ],
            [
                'province_id' => 3,
                'name'        => 'ROSARIO'
            ],
            [
                'province_id' => 3,
                'name'        => 'SAN GABRIEL'
            ],
            [
                'province_id' => 3,
                'name'        => 'SAN JUAN'
            ],
            [
                'province_id' => 3,
                'name'        => 'SANTO TOMAS'
            ],
            [
                'province_id' => 3,
                'name'        => 'SANTOL'
            ],
            [
                'province_id' => 3,
                'name'        => 'SUDIPEN'
            ],
            [
                'province_id' => 3,
                'name'        => 'TUBAO'
            ],
            [
                'province_id' => 4,
                'name'        => 'AGNO'
            ],
            [
                'province_id' => 4,
                'name'        => 'AGUILAR'
            ],
            [
                'province_id' => 4,
                'name'        => 'ALAMINOS CITY'
            ],
            [
                'province_id' => 4,
                'name'        => 'ALCALA'
            ],
            [
                'province_id' => 4,
                'name'        => 'ANDA'
            ],
            [
                'province_id' => 4,
                'name'        => 'ASINGAN'
            ],
            [
                'province_id' => 4,
                'name'        => 'BALUNGAO'
            ],
            [
                'province_id' => 4,
                'name'        => 'BANI'
            ],
            [
                'province_id' => 4,
                'name'        => 'BASISTA'
            ],
            [
                'province_id' => 4,
                'name'        => 'BAUTISTA'
            ],
            [
                'province_id' => 4,
                'name'        => 'BAYAMBANG'
            ],
            [
                'province_id' => 4,
                'name'        => 'BINALONAN'
            ],
            [
                'province_id' => 4,
                'name'        => 'BINMALEY'
            ],
            [
                'province_id' => 4,
                'name'        => 'BOLINAO'
            ],
            [
                'province_id' => 4,
                'name'        => 'BUGALLON'
            ],
            [
                'province_id' => 4,
                'name'        => 'BURGOS'
            ],
            [
                'province_id' => 4,
                'name'        => 'CALASIAO'
            ],
            [
                'province_id' => 4,
                'name'        => 'DAGUPAN CITY'
            ],
            [
                'province_id' => 4,
                'name'        => 'DASOL'
            ],
            [
                'province_id' => 4,
                'name'        => 'INFANTA'
            ],
            [
                'province_id' => 4,
                'name'        => 'LABRADOR'
            ],
            [
                'province_id' => 4,
                'name'        => 'LAOAC'
            ],
            [
                'province_id' => 4,
                'name'        => 'LINGAYEN'
            ],
            [
                'province_id' => 4,
                'name'        => 'MABINI'
            ],
            [
                'province_id' => 4,
                'name'        => 'MALASIQUI'
            ],
            [
                'province_id' => 4,
                'name'        => 'MANAOAG'
            ],
            [
                'province_id' => 4,
                'name'        => 'MANGALDAN'
            ],
            [
                'province_id' => 4,
                'name'        => 'MANGATAREM'
            ],
            [
                'province_id' => 4,
                'name'        => 'MAPANDAN'
            ],
            [
                'province_id' => 4,
                'name'        => 'NATIVIDAD'
            ],
            [
                'province_id' => 4,
                'name'        => 'POZORRUBIO'
            ],
            [
                'province_id' => 4,
                'name'        => 'ROSALES'
            ],
            [
                'province_id' => 4,
                'name'        => 'SAN CARLOS CITY'
            ],
            [
                'province_id' => 4,
                'name'        => 'SAN FABIAN'
            ],
            [
                'province_id' => 4,
                'name'        => 'SAN JACINTO'
            ],
            [
                'province_id' => 4,
                'name'        => 'SAN MANUEL'
            ],
            [
                'province_id' => 4,
                'name'        => 'SAN NICOLAS'
            ],
            [
                'province_id' => 4,
                'name'        => 'SAN QUINTIN'
            ],
            [
                'province_id' => 4,
                'name'        => 'SANTA BARBARA'
            ],
            [
                'province_id' => 4,
                'name'        => 'SANTA MARIA'
            ],
            [
                'province_id' => 4,
                'name'        => 'SANTO TOMAS'
            ],
            [
                'province_id' => 4,
                'name'        => 'SISON'
            ],
            [
                'province_id' => 4,
                'name'        => 'SUAL'
            ],
            [
                'province_id' => 4,
                'name'        => 'TAYUG'
            ],
            [
                'province_id' => 4,
                'name'        => 'UMINGAN'
            ],
            [
                'province_id' => 4,
                'name'        => 'URBIZTONDO'
            ],
            [
                'province_id' => 4,
                'name'        => 'URDANETA CITY'
            ],
            [
                'province_id' => 4,
                'name'        => 'VILLASIS'
            ],
            [
                'province_id' => 5,
                'name'        => 'BASCO'
            ],
            [
                'province_id' => 5,
                'name'        => 'ITBAYAT'
            ],
            [
                'province_id' => 5,
                'name'        => 'IVANA'
            ],
            [
                'province_id' => 5,
                'name'        => 'MAHATAO'
            ],
            [
                'province_id' => 5,
                'name'        => 'SABTANG'
            ],
            [
                'province_id' => 5,
                'name'        => 'UYUGAN'
            ],
            [
                'province_id' => 6,
                'name'        => 'ABULUG'
            ],
            [
                'province_id' => 6,
                'name'        => 'ALCALA'
            ],
            [
                'province_id' => 6,
                'name'        => 'ALLACAPAN'
            ],
            [
                'province_id' => 6,
                'name'        => 'AMULUNG'
            ],
            [
                'province_id' => 6,
                'name'        => 'APARRI'
            ],
            [
                'province_id' => 6,
                'name'        => 'BAGGAO'
            ],
            [
                'province_id' => 6,
                'name'        => 'BALLESTEROS'
            ],
            [
                'province_id' => 6,
                'name'        => 'BUGUEY'
            ],
            [
                'province_id' => 6,
                'name'        => 'CALAYAN'
            ],
            [
                'province_id' => 6,
                'name'        => 'CAMALANIUGAN'
            ],
            [
                'province_id' => 6,
                'name'        => 'CLAVERIA'
            ],
            [
                'province_id' => 6,
                'name'        => 'ENRILE'
            ],
            [
                'province_id' => 6,
                'name'        => 'GATTARAN'
            ],
            [
                'province_id' => 6,
                'name'        => 'GONZAGA'
            ],
            [
                'province_id' => 6,
                'name'        => 'IGUIG'
            ],
            [
                'province_id' => 6,
                'name'        => 'LAL-LO'
            ],
            [
                'province_id' => 6,
                'name'        => 'LASAM'
            ],
            [
                'province_id' => 6,
                'name'        => 'PAMPLONA'
            ],
            [
                'province_id' => 6,
                'name'        => 'PEÑABLANCA'
            ],
            [
                'province_id' => 6,
                'name'        => 'PIAT'
            ],
            [
                'province_id' => 6,
                'name'        => 'RIZAL'
            ],
            [
                'province_id' => 6,
                'name'        => 'SANCHEZ-MIRA'
            ],
            [
                'province_id' => 6,
                'name'        => 'SANTA ANA'
            ],
            [
                'province_id' => 6,
                'name'        => 'SANTA PRAXEDES'
            ],
            [
                'province_id' => 6,
                'name'        => 'SANTA TERESITA'
            ],
            [
                'province_id' => 6,
                'name'        => 'SANTO NIÑO (FAIRE)'
            ],
            [
                'province_id' => 6,
                'name'        => 'SOLANA'
            ],
            [
                'province_id' => 6,
                'name'        => 'TUAO'
            ],
            [
                'province_id' => 6,
                'name'        => 'TUGUEGARAO CITY'
            ],
            [
                'province_id' => 7,
                'name'        => 'ALICIA'
            ],
            [
                'province_id' => 7,
                'name'        => 'ANGADANAN'
            ],
            [
                'province_id' => 7,
                'name'        => 'AURORA'
            ],
            [
                'province_id' => 7,
                'name'        => 'BENITO SOLIVEN'
            ],
            [
                'province_id' => 7,
                'name'        => 'BURGOS'
            ],
            [
                'province_id' => 7,
                'name'        => 'CABAGAN'
            ],
            [
                'province_id' => 7,
                'name'        => 'CABATUAN'
            ],
            [
                'province_id' => 7,
                'name'        => 'CAUAYAN CITY'
            ],
            [
                'province_id' => 7,
                'name'        => 'CITY OF SANTIAGO'
            ],
            [
                'province_id' => 7,
                'name'        => 'CORDON'
            ],
            [
                'province_id' => 7,
                'name'        => 'DELFIN ALBANO (MAGSAYSAY)'
            ],
            [
                'province_id' => 7,
                'name'        => 'DINAPIGUE'
            ],
            [
                'province_id' => 7,
                'name'        => 'DIVILACAN'
            ],
            [
                'province_id' => 7,
                'name'        => 'ECHAGUE'
            ],
            [
                'province_id' => 7,
                'name'        => 'GAMU'
            ],
            [
                'province_id' => 7,
                'name'        => 'ILAGAN CITY'
            ],
            [
                'province_id' => 7,
                'name'        => 'JONES'
            ],
            [
                'province_id' => 7,
                'name'        => 'LUNA'
            ],
            [
                'province_id' => 7,
                'name'        => 'MACONACON'
            ],
            [
                'province_id' => 7,
                'name'        => 'MALLIG'
            ],
            [
                'province_id' => 7,
                'name'        => 'NAGUILIAN'
            ],
            [
                'province_id' => 7,
                'name'        => 'PALANAN'
            ],
            [
                'province_id' => 7,
                'name'        => 'QUEZON'
            ],
            [
                'province_id' => 7,
                'name'        => 'QUIRINO'
            ],
            [
                'province_id' => 7,
                'name'        => 'RAMON'
            ],
            [
                'province_id' => 7,
                'name'        => 'REINA MERCEDES'
            ],
            [
                'province_id' => 7,
                'name'        => 'ROXAS'
            ],
            [
                'province_id' => 7,
                'name'        => 'SAN AGUSTIN'
            ],
            [
                'province_id' => 7,
                'name'        => 'SAN GUILLERMO'
            ],
            [
                'province_id' => 7,
                'name'        => 'SAN ISIDRO'
            ],
            [
                'province_id' => 7,
                'name'        => 'SAN MANUEL'
            ],
            [
                'province_id' => 7,
                'name'        => 'SAN MARIANO'
            ],
            [
                'province_id' => 7,
                'name'        => 'SAN MATEO'
            ],
            [
                'province_id' => 7,
                'name'        => 'SAN PABLO'
            ],
            [
                'province_id' => 7,
                'name'        => 'SANTA MARIA'
            ],
            [
                'province_id' => 7,
                'name'        => 'SANTO TOMAS'
            ],
            [
                'province_id' => 7,
                'name'        => 'TUMAUINI'
            ],
            [
                'province_id' => 8,
                'name'        => 'ALFONSO CASTANEDA'
            ],
            [
                'province_id' => 8,
                'name'        => 'AMBAGUIO'
            ],
            [
                'province_id' => 8,
                'name'        => 'ARITAO'
            ],
            [
                'province_id' => 8,
                'name'        => 'BAGABAG'
            ],
            [
                'province_id' => 8,
                'name'        => 'BAMBANG'
            ],
            [
                'province_id' => 8,
                'name'        => 'BAYOMBONG'
            ],
            [
                'province_id' => 8,
                'name'        => 'DIADI'
            ],
            [
                'province_id' => 8,
                'name'        => 'DUPAX DEL NORTE'
            ],
            [
                'province_id' => 8,
                'name'        => 'DUPAX DEL SUR'
            ],
            [
                'province_id' => 8,
                'name'        => 'KASIBU'
            ],
            [
                'province_id' => 8,
                'name'        => 'KAYAPA'
            ],
            [
                'province_id' => 8,
                'name'        => 'QUEZON'
            ],
            [
                'province_id' => 8,
                'name'        => 'SANTA FE'
            ],
            [
                'province_id' => 8,
                'name'        => 'SOLANO'
            ],
            [
                'province_id' => 8,
                'name'        => 'VILLAVERDE'
            ],
            [
                'province_id' => 9,
                'name'        => 'AGLIPAY'
            ],
            [
                'province_id' => 9,
                'name'        => 'CABARROGUIS'
            ],
            [
                'province_id' => 9,
                'name'        => 'DIFFUN'
            ],
            [
                'province_id' => 9,
                'name'        => 'MADDELA'
            ],
            [
                'province_id' => 9,
                'name'        => 'NAGTIPUNAN'
            ],
            [
                'province_id' => 9,
                'name'        => 'SAGUDAY'
            ],
            [
                'province_id' => 10,
                'name'        => 'BALER'
            ],
            [
                'province_id' => 10,
                'name'        => 'CASIGURAN'
            ],
            [
                'province_id' => 10,
                'name'        => 'DILASAG'
            ],
            [
                'province_id' => 10,
                'name'        => 'DINALUNGAN'
            ],
            [
                'province_id' => 10,
                'name'        => 'DINGALAN'
            ],
            [
                'province_id' => 10,
                'name'        => 'DIPACULAO'
            ],
            [
                'province_id' => 10,
                'name'        => 'MARIA AURORA'
            ],
            [
                'province_id' => 10,
                'name'        => 'SAN LUIS'
            ],
            [
                'province_id' => 11,
                'name'        => 'ABUCAY'
            ],
            [
                'province_id' => 11,
                'name'        => 'BAGAC'
            ],
            [
                'province_id' => 11,
                'name'        => 'BALANGA CITY'
            ],
            [
                'province_id' => 11,
                'name'        => 'DINALUPIHAN'
            ],
            [
                'province_id' => 11,
                'name'        => 'HERMOSA'
            ],
            [
                'province_id' => 11,
                'name'        => 'LIMAY'
            ],
            [
                'province_id' => 11,
                'name'        => 'MARIVELES'
            ],
            [
                'province_id' => 11,
                'name'        => 'MORONG'
            ],
            [
                'province_id' => 11,
                'name'        => 'ORANI'
            ],
            [
                'province_id' => 11,
                'name'        => 'ORION'
            ],
            [
                'province_id' => 11,
                'name'        => 'PILAR'
            ],
            [
                'province_id' => 11,
                'name'        => 'SAMAL'
            ],
            [
                'province_id' => 12,
                'name'        => 'ANGAT'
            ],
            [
                'province_id' => 12,
                'name'        => 'BALAGTAS (BIGAA)'
            ],
            [
                'province_id' => 12,
                'name'        => 'BALIUAG'
            ],
            [
                'province_id' => 12,
                'name'        => 'BOCAUE'
            ],
            [
                'province_id' => 12,
                'name'        => 'BULACAN'
            ],
            [
                'province_id' => 12,
                'name'        => 'BUSTOS'
            ],
            [
                'province_id' => 12,
                'name'        => 'CALUMPIT'
            ],
            [
                'province_id' => 12,
                'name'        => 'DOÑA REMEDIOS TRINIDAD'
            ],
            [
                'province_id' => 12,
                'name'        => 'GUIGUINTO'
            ],
            [
                'province_id' => 12,
                'name'        => 'HAGONOY'
            ],
            [
                'province_id' => 12,
                'name'        => 'MALOLOS CITY'
            ],
            [
                'province_id' => 12,
                'name'        => 'MARILAO'
            ],
            [
                'province_id' => 12,
                'name'        => 'MEYCAUAYAN CITY'
            ],
            [
                'province_id' => 12,
                'name'        => 'NORZAGARAY'
            ],
            [
                'province_id' => 12,
                'name'        => 'OBANDO'
            ],
            [
                'province_id' => 12,
                'name'        => 'PANDI'
            ],
            [
                'province_id' => 12,
                'name'        => 'PAOMBONG'
            ],
            [
                'province_id' => 12,
                'name'        => 'PLARIDEL'
            ],
            [
                'province_id' => 12,
                'name'        => 'PULILAN'
            ],
            [
                'province_id' => 12,
                'name'        => 'SAN ILDEFONSO'
            ],
            [
                'province_id' => 12,
                'name'        => 'SAN JOSE DEL MONTE CITY'
            ],
            [
                'province_id' => 12,
                'name'        => 'SAN MIGUEL'
            ],
            [
                'province_id' => 12,
                'name'        => 'SAN RAFAEL'
            ],
            [
                'province_id' => 12,
                'name'        => 'SANTA MARIA'
            ],
            [
                'province_id' => 13,
                'name'        => 'ALIAGA'
            ],
            [
                'province_id' => 13,
                'name'        => 'BONGABON'
            ],
            [
                'province_id' => 13,
                'name'        => 'CABANATUAN CITY'
            ],
            [
                'province_id' => 13,
                'name'        => 'CABIAO'
            ],
            [
                'province_id' => 13,
                'name'        => 'CARRANGLAN'
            ],
            [
                'province_id' => 13,
                'name'        => 'CUYAPO'
            ],
            [
                'province_id' => 13,
                'name'        => 'GABALDON (BITULOK AND SABANI)'
            ],
            [
                'province_id' => 13,
                'name'        => 'GAPAN CITY'
            ],
            [
                'province_id' => 13,
                'name'        => 'GENERAL MAMERTO NATIVIDAD'
            ],
            [
                'province_id' => 13,
                'name'        => 'GENERAL TINIO (PAPAYA)'
            ],
            [
                'province_id' => 13,
                'name'        => 'GUIMBA'
            ],
            [
                'province_id' => 13,
                'name'        => 'JAEN'
            ],
            [
                'province_id' => 13,
                'name'        => 'LAUR'
            ],
            [
                'province_id' => 13,
                'name'        => 'LICAB'
            ],
            [
                'province_id' => 13,
                'name'        => 'LLANERA'
            ],
            [
                'province_id' => 13,
                'name'        => 'LUPAO'
            ],
            [
                'province_id' => 13,
                'name'        => 'NAMPICUAN'
            ],
            [
                'province_id' => 13,
                'name'        => 'PALAYAN CITY'
            ],
            [
                'province_id' => 13,
                'name'        => 'PANTABANGAN'
            ],
            [
                'province_id' => 13,
                'name'        => 'PEÑARANDA'
            ],
            [
                'province_id' => 13,
                'name'        => 'QUEZON'
            ],
            [
                'province_id' => 13,
                'name'        => 'RIZAL'
            ],
            [
                'province_id' => 13,
                'name'        => 'SAN ANTONIO'
            ],
            [
                'province_id' => 13,
                'name'        => 'SAN ISIDRO'
            ],
            [
                'province_id' => 13,
                'name'        => 'SAN JOSE CITY'
            ],
            [
                'province_id' => 13,
                'name'        => 'SAN LEONARDO'
            ],
            [
                'province_id' => 13,
                'name'        => 'SANTA ROSA'
            ],
            [
                'province_id' => 13,
                'name'        => 'SANTO DOMINGO'
            ],
            [
                'province_id' => 13,
                'name'        => 'SCIENCE CITY OF MUÑOZ'
            ],
            [
                'province_id' => 13,
                'name'        => 'TALAVERA'
            ],
            [
                'province_id' => 13,
                'name'        => 'TALUGTUG'
            ],
            [
                'province_id' => 13,
                'name'        => 'ZARAGOZA'
            ],
            [
                'province_id' => 14,
                'name'        => 'ANGELES CITY'
            ],
            [
                'province_id' => 14,
                'name'        => 'APALIT'
            ],
            [
                'province_id' => 14,
                'name'        => 'ARAYAT'
            ],
            [
                'province_id' => 14,
                'name'        => 'BACOLOR'
            ],
            [
                'province_id' => 14,
                'name'        => 'CANDABA'
            ],
            [
                'province_id' => 14,
                'name'        => 'FLORIDABLANCA'
            ],
            [
                'province_id' => 14,
                'name'        => 'GUAGUA'
            ],
            [
                'province_id' => 14,
                'name'        => 'LUBAO'
            ],
            [
                'province_id' => 14,
                'name'        => 'MABALACAT CITY'
            ],
            [
                'province_id' => 14,
                'name'        => 'MACABEBE'
            ],
            [
                'province_id' => 14,
                'name'        => 'MAGALANG'
            ],
            [
                'province_id' => 14,
                'name'        => 'MASANTOL'
            ],
            [
                'province_id' => 14,
                'name'        => 'MEXICO'
            ],
            [
                'province_id' => 14,
                'name'        => 'MINALIN'
            ],
            [
                'province_id' => 14,
                'name'        => 'PORAC'
            ],
            [
                'province_id' => 14,
                'name'        => 'SAN FERNANDO CITY'
            ],
            [
                'province_id' => 14,
                'name'        => 'SAN LUIS'
            ],
            [
                'province_id' => 14,
                'name'        => 'SAN SIMON'
            ],
            [
                'province_id' => 14,
                'name'        => 'SANTA ANA'
            ],
            [
                'province_id' => 14,
                'name'        => 'SANTA RITA'
            ],
            [
                'province_id' => 14,
                'name'        => 'SANTO TOMAS'
            ],
            [
                'province_id' => 14,
                'name'        => 'SASMUAN (SEXMOAN)'
            ],
            [
                'province_id' => 15,
                'name'        => 'ANAO'
            ],
            [
                'province_id' => 15,
                'name'        => 'BAMBAN'
            ],
            [
                'province_id' => 15,
                'name'        => 'CAMILING'
            ],
            [
                'province_id' => 15,
                'name'        => 'CAPAS'
            ],
            [
                'province_id' => 15,
                'name'        => 'CITY OF TARLAC'
            ],
            [
                'province_id' => 15,
                'name'        => 'CONCEPCION'
            ],
            [
                'province_id' => 15,
                'name'        => 'GERONA'
            ],
            [
                'province_id' => 15,
                'name'        => 'LA PAZ'
            ],
            [
                'province_id' => 15,
                'name'        => 'MAYANTOC'
            ],
            [
                'province_id' => 15,
                'name'        => 'MONCADA'
            ],
            [
                'province_id' => 15,
                'name'        => 'PANIQUI'
            ],
            [
                'province_id' => 15,
                'name'        => 'PURA'
            ],
            [
                'province_id' => 15,
                'name'        => 'RAMOS'
            ],
            [
                'province_id' => 15,
                'name'        => 'SAN CLEMENTE'
            ],
            [
                'province_id' => 15,
                'name'        => 'SAN JOSE'
            ],
            [
                'province_id' => 15,
                'name'        => 'SAN MANUEL'
            ],
            [
                'province_id' => 15,
                'name'        => 'SANTA IGNACIA'
            ],
            [
                'province_id' => 15,
                'name'        => 'VICTORIA'
            ],
            [
                'province_id' => 16,
                'name'        => 'BOTOLAN'
            ],
            [
                'province_id' => 16,
                'name'        => 'CABANGAN'
            ],
            [
                'province_id' => 16,
                'name'        => 'CANDELARIA'
            ],
            [
                'province_id' => 16,
                'name'        => 'CASTILLEJOS'
            ],
            [
                'province_id' => 16,
                'name'        => 'IBA'
            ],
            [
                'province_id' => 16,
                'name'        => 'MASINLOC'
            ],
            [
                'province_id' => 16,
                'name'        => 'OLONGAPO CITY'
            ],
            [
                'province_id' => 16,
                'name'        => 'PALAUIG'
            ],
            [
                'province_id' => 16,
                'name'        => 'SAN ANTONIO'
            ],
            [
                'province_id' => 16,
                'name'        => 'SAN FELIPE'
            ],
            [
                'province_id' => 16,
                'name'        => 'SAN MARCELINO'
            ],
            [
                'province_id' => 16,
                'name'        => 'SAN NARCISO'
            ],
            [
                'province_id' => 16,
                'name'        => 'SANTA CRUZ'
            ],
            [
                'province_id' => 16,
                'name'        => 'SUBIC'
            ],
            [
                'province_id' => 17,
                'name'        => 'AGONCILLO'
            ],
            [
                'province_id' => 17,
                'name'        => 'ALITAGTAG'
            ],
            [
                'province_id' => 17,
                'name'        => 'BALAYAN'
            ],
            [
                'province_id' => 17,
                'name'        => 'BALETE'
            ],
            [
                'province_id' => 17,
                'name'        => 'BATANGAS CITY'
            ],
            [
                'province_id' => 17,
                'name'        => 'BAUAN'
            ],
            [
                'province_id' => 17,
                'name'        => 'CALACA'
            ],
            [
                'province_id' => 17,
                'name'        => 'CALATAGAN'
            ],
            [
                'province_id' => 17,
                'name'        => 'CUENCA'
            ],
            [
                'province_id' => 17,
                'name'        => 'IBAAN'
            ],
            [
                'province_id' => 17,
                'name'        => 'LAUREL'
            ],
            [
                'province_id' => 17,
                'name'        => 'LEMERY'
            ],
            [
                'province_id' => 17,
                'name'        => 'LIAN'
            ],
            [
                'province_id' => 17,
                'name'        => 'LIPA CITY'
            ],
            [
                'province_id' => 17,
                'name'        => 'LOBO'
            ],
            [
                'province_id' => 17,
                'name'        => 'MABINI'
            ],
            [
                'province_id' => 17,
                'name'        => 'MALVAR'
            ],
            [
                'province_id' => 17,
                'name'        => 'MATAAS NA KAHOY'
            ],
            [
                'province_id' => 17,
                'name'        => 'NASUGBU'
            ],
            [
                'province_id' => 17,
                'name'        => 'PADRE GARCIA'
            ],
            [
                'province_id' => 17,
                'name'        => 'ROSARIO'
            ],
            [
                'province_id' => 17,
                'name'        => 'SAN JOSE'
            ],
            [
                'province_id' => 17,
                'name'        => 'SAN JUAN'
            ],
            [
                'province_id' => 17,
                'name'        => 'SAN LUIS'
            ],
            [
                'province_id' => 17,
                'name'        => 'SAN NICOLAS'
            ],
            [
                'province_id' => 17,
                'name'        => 'SAN PASCUAL'
            ],
            [
                'province_id' => 17,
                'name'        => 'SANTA TERESITA'
            ],
            [
                'province_id' => 17,
                'name'        => 'SANTO TOMAS'
            ],
            [
                'province_id' => 17,
                'name'        => 'TAAL'
            ],
            [
                'province_id' => 17,
                'name'        => 'TALISAY'
            ],
            [
                'province_id' => 17,
                'name'        => 'TANAUAN CITY'
            ],
            [
                'province_id' => 17,
                'name'        => 'TAYSAN'
            ],
            [
                'province_id' => 17,
                'name'        => 'TINGLOY'
            ],
            [
                'province_id' => 17,
                'name'        => 'TUY'
            ],
            [
                'province_id' => 18,
                'name'        => 'ALFONSO'
            ],
            [
                'province_id' => 18,
                'name'        => 'AMADEO'
            ],
            [
                'province_id' => 18,
                'name'        => 'BACOOR CITY'
            ],
            [
                'province_id' => 18,
                'name'        => 'CARMONA'
            ],
            [
                'province_id' => 18,
                'name'        => 'CAVITE CITY'
            ],
            [
                'province_id' => 18,
                'name'        => 'DASMARIÑAS CITY'
            ],
            [
                'province_id' => 18,
                'name'        => 'GEN. MARIANO ALVAREZ'
            ],
            [
                'province_id' => 18,
                'name'        => 'GENERAL EMILIO AGUINALDO'
            ],
            [
                'province_id' => 18,
                'name'        => 'GENERAL TRIAS CITY'
            ],
            [
                'province_id' => 18,
                'name'        => 'IMUS CITY'
            ],
            [
                'province_id' => 18,
                'name'        => 'INDANG'
            ],
            [
                'province_id' => 18,
                'name'        => 'KAWIT'
            ],
            [
                'province_id' => 18,
                'name'        => 'MAGALLANES'
            ],
            [
                'province_id' => 18,
                'name'        => 'MARAGONDON'
            ],
            [
                'province_id' => 18,
                'name'        => 'MENDEZ (MENDEZ-NUÑEZ)'
            ],
            [
                'province_id' => 18,
                'name'        => 'NAIC'
            ],
            [
                'province_id' => 18,
                'name'        => 'NOVELETA'
            ],
            [
                'province_id' => 18,
                'name'        => 'ROSARIO'
            ],
            [
                'province_id' => 18,
                'name'        => 'SILANG'
            ],
            [
                'province_id' => 18,
                'name'        => 'TAGAYTAY CITY'
            ],
            [
                'province_id' => 18,
                'name'        => 'TANZA'
            ],
            [
                'province_id' => 18,
                'name'        => 'TERNATE'
            ],
            [
                'province_id' => 18,
                'name'        => 'TRECE MARTIRES CITY'
            ],
            [
                'province_id' => 19,
                'name'        => 'ALAMINOS'
            ],
            [
                'province_id' => 19,
                'name'        => 'BAY'
            ],
            [
                'province_id' => 19,
                'name'        => 'CABUYAO CITY'
            ],
            [
                'province_id' => 19,
                'name'        => 'CALAMBA CITY'
            ],
            [
                'province_id' => 19,
                'name'        => 'CALAUAN'
            ],
            [
                'province_id' => 19,
                'name'        => 'CAVINTI'
            ],
            [
                'province_id' => 19,
                'name'        => 'CITY OF BIÑAN'
            ],
            [
                'province_id' => 19,
                'name'        => 'FAMY'
            ],
            [
                'province_id' => 19,
                'name'        => 'KALAYAAN'
            ],
            [
                'province_id' => 19,
                'name'        => 'LILIW'
            ],
            [
                'province_id' => 19,
                'name'        => 'LOS BAÑOS'
            ],
            [
                'province_id' => 19,
                'name'        => 'LUISIANA'
            ],
            [
                'province_id' => 19,
                'name'        => 'LUMBAN'
            ],
            [
                'province_id' => 19,
                'name'        => 'MABITAC'
            ],
            [
                'province_id' => 19,
                'name'        => 'MAGDALENA'
            ],
            [
                'province_id' => 19,
                'name'        => 'MAJAYJAY'
            ],
            [
                'province_id' => 19,
                'name'        => 'NAGCARLAN'
            ],
            [
                'province_id' => 19,
                'name'        => 'PAETE'
            ],
            [
                'province_id' => 19,
                'name'        => 'PAGSANJAN'
            ],
            [
                'province_id' => 19,
                'name'        => 'PAKIL'
            ],
            [
                'province_id' => 19,
                'name'        => 'PANGIL'
            ],
            [
                'province_id' => 19,
                'name'        => 'PILA'
            ],
            [
                'province_id' => 19,
                'name'        => 'RIZAL'
            ],
            [
                'province_id' => 19,
                'name'        => 'SAN PABLO CITY'
            ],
            [
                'province_id' => 19,
                'name'        => 'SAN PEDRO CITY'
            ],
            [
                'province_id' => 19,
                'name'        => 'SANTA CRUZ'
            ],
            [
                'province_id' => 19,
                'name'        => 'SANTA MARIA'
            ],
            [
                'province_id' => 19,
                'name'        => 'SANTA ROSA CITY'
            ],
            [
                'province_id' => 19,
                'name'        => 'SINILOAN'
            ],
            [
                'province_id' => 19,
                'name'        => 'VICTORIA'
            ],
            [
                'province_id' => 20,
                'name'        => 'AGDANGAN'
            ],
            [
                'province_id' => 20,
                'name'        => 'ALABAT'
            ],
            [
                'province_id' => 20,
                'name'        => 'ATIMONAN'
            ],
            [
                'province_id' => 20,
                'name'        => 'BUENAVISTA'
            ],
            [
                'province_id' => 20,
                'name'        => 'BURDEOS'
            ],
            [
                'province_id' => 20,
                'name'        => 'CALAUAG'
            ],
            [
                'province_id' => 20,
                'name'        => 'CANDELARIA'
            ],
            [
                'province_id' => 20,
                'name'        => 'CATANAUAN'
            ],
            [
                'province_id' => 20,
                'name'        => 'DOLORES'
            ],
            [
                'province_id' => 20,
                'name'        => 'GENERAL LUNA'
            ],
            [
                'province_id' => 20,
                'name'        => 'GENERAL NAKAR'
            ],
            [
                'province_id' => 20,
                'name'        => 'GUINAYANGAN'
            ],
            [
                'province_id' => 20,
                'name'        => 'GUMACA'
            ],
            [
                'province_id' => 20,
                'name'        => 'INFANTA'
            ],
            [
                'province_id' => 20,
                'name'        => 'JOMALIG'
            ],
            [
                'province_id' => 20,
                'name'        => 'LOPEZ'
            ],
            [
                'province_id' => 20,
                'name'        => 'LUCBAN'
            ],
            [
                'province_id' => 20,
                'name'        => 'LUCENA CITY'
            ],
            [
                'province_id' => 20,
                'name'        => 'MACALELON'
            ],
            [
                'province_id' => 20,
                'name'        => 'MAUBAN'
            ],
            [
                'province_id' => 20,
                'name'        => 'MULANAY'
            ],
            [
                'province_id' => 20,
                'name'        => 'PADRE BURGOS'
            ],
            [
                'province_id' => 20,
                'name'        => 'PAGBILAO'
            ],
            [
                'province_id' => 20,
                'name'        => 'PANUKULAN'
            ],
            [
                'province_id' => 20,
                'name'        => 'PATNANUNGAN'
            ],
            [
                'province_id' => 20,
                'name'        => 'PEREZ'
            ],
            [
                'province_id' => 20,
                'name'        => 'PITOGO'
            ],
            [
                'province_id' => 20,
                'name'        => 'PLARIDEL'
            ],
            [
                'province_id' => 20,
                'name'        => 'POLILLO'
            ],
            [
                'province_id' => 20,
                'name'        => 'QUEZON'
            ],
            [
                'province_id' => 20,
                'name'        => 'REAL'
            ],
            [
                'province_id' => 20,
                'name'        => 'SAMPALOC'
            ],
            [
                'province_id' => 20,
                'name'        => 'SAN ANDRES'
            ],
            [
                'province_id' => 20,
                'name'        => 'SAN ANTONIO'
            ],
            [
                'province_id' => 20,
                'name'        => 'SAN FRANCISCO (AURORA)'
            ],
            [
                'province_id' => 20,
                'name'        => 'SAN NARCISO'
            ],
            [
                'province_id' => 20,
                'name'        => 'SARIAYA'
            ],
            [
                'province_id' => 20,
                'name'        => 'TAGKAWAYAN'
            ],
            [
                'province_id' => 20,
                'name'        => 'TAYABAS CITY'
            ],
            [
                'province_id' => 20,
                'name'        => 'TIAONG'
            ],
            [
                'province_id' => 20,
                'name'        => 'UNISAN'
            ],
            [
                'province_id' => 21,
                'name'        => 'ANGONO'
            ],
            [
                'province_id' => 21,
                'name'        => 'BARAS'
            ],
            [
                'province_id' => 21,
                'name'        => 'BINANGONAN'
            ],
            [
                'province_id' => 21,
                'name'        => 'CAINTA'
            ],
            [
                'province_id' => 21,
                'name'        => 'CARDONA'
            ],
            [
                'province_id' => 21,
                'name'        => 'CITY OF ANTIPOLO'
            ],
            [
                'province_id' => 21,
                'name'        => 'JALA-JALA'
            ],
            [
                'province_id' => 21,
                'name'        => 'MORONG'
            ],
            [
                'province_id' => 21,
                'name'        => 'PILILLA'
            ],
            [
                'province_id' => 21,
                'name'        => 'RODRIGUEZ (MONTALBAN)'
            ],
            [
                'province_id' => 21,
                'name'        => 'SAN MATEO'
            ],
            [
                'province_id' => 21,
                'name'        => 'TANAY'
            ],
            [
                'province_id' => 21,
                'name'        => 'TAYTAY'
            ],
            [
                'province_id' => 21,
                'name'        => 'TERESA'
            ],
            [
                'province_id' => 22,
                'name'        => 'BOAC'
            ],
            [
                'province_id' => 22,
                'name'        => 'BUENAVISTA'
            ],
            [
                'province_id' => 22,
                'name'        => 'GASAN'
            ],
            [
                'province_id' => 22,
                'name'        => 'MOGPOG'
            ],
            [
                'province_id' => 22,
                'name'        => 'SANTA CRUZ'
            ],
            [
                'province_id' => 22,
                'name'        => 'TORRIJOS'
            ],
            [
                'province_id' => 23,
                'name'        => 'ABRA DE ILOG'
            ],
            [
                'province_id' => 23,
                'name'        => 'CALINTAAN'
            ],
            [
                'province_id' => 23,
                'name'        => 'LOOC'
            ],
            [
                'province_id' => 23,
                'name'        => 'LUBANG'
            ],
            [
                'province_id' => 23,
                'name'        => 'MAGSAYSAY'
            ],
            [
                'province_id' => 23,
                'name'        => 'MAMBURAO'
            ],
            [
                'province_id' => 23,
                'name'        => 'PALUAN'
            ],
            [
                'province_id' => 23,
                'name'        => 'RIZAL'
            ],
            [
                'province_id' => 23,
                'name'        => 'SABLAYAN'
            ],
            [
                'province_id' => 23,
                'name'        => 'SAN JOSE'
            ],
            [
                'province_id' => 23,
                'name'        => 'SANTA CRUZ'
            ],
            [
                'province_id' => 24,
                'name'        => 'BACO'
            ],
            [
                'province_id' => 24,
                'name'        => 'BANSUD'
            ],
            [
                'province_id' => 24,
                'name'        => 'BONGABONG'
            ],
            [
                'province_id' => 24,
                'name'        => 'BULALACAO (SAN PEDRO)'
            ],
            [
                'province_id' => 24,
                'name'        => 'CITY OF CALAPAN'
            ],
            [
                'province_id' => 24,
                'name'        => 'GLORIA'
            ],
            [
                'province_id' => 24,
                'name'        => 'MANSALAY'
            ],
            [
                'province_id' => 24,
                'name'        => 'NAUJAN'
            ],
            [
                'province_id' => 24,
                'name'        => 'PINAMALAYAN'
            ],
            [
                'province_id' => 24,
                'name'        => 'POLA'
            ],
            [
                'province_id' => 24,
                'name'        => 'PUERTO GALERA'
            ],
            [
                'province_id' => 24,
                'name'        => 'ROXAS'
            ],
            [
                'province_id' => 24,
                'name'        => 'SAN TEODORO'
            ],
            [
                'province_id' => 24,
                'name'        => 'SOCORRO'
            ],
            [
                'province_id' => 24,
                'name'        => 'VICTORIA'
            ],
            [
                'province_id' => 25,
                'name'        => 'ABORLAN'
            ],
            [
                'province_id' => 25,
                'name'        => 'AGUTAYA'
            ],
            [
                'province_id' => 25,
                'name'        => 'ARACELI'
            ],
            [
                'province_id' => 25,
                'name'        => 'BALABAC'
            ],
            [
                'province_id' => 25,
                'name'        => 'BATARAZA'
            ],
            [
                'province_id' => 25,
                'name'        => 'BROOKE\'S POINT'
            ],
            [
                'province_id' => 25,
                'name'        => 'BUSUANGA'
            ],
            [
                'province_id' => 25,
                'name'        => 'CAGAYANCILLO'
            ],
            [
                'province_id' => 25,
                'name'        => 'CORON'
            ],
            [
                'province_id' => 25,
                'name'        => 'CULION'
            ],
            [
                'province_id' => 25,
                'name'        => 'CUYO'
            ],
            [
                'province_id' => 25,
                'name'        => 'DUMARAN'
            ],
            [
                'province_id' => 25,
                'name'        => 'EL NIDO (BACUIT)'
            ],
            [
                'province_id' => 25,
                'name'        => 'KALAYAAN'
            ],
            [
                'province_id' => 25,
                'name'        => 'LINAPACAN'
            ],
            [
                'province_id' => 25,
                'name'        => 'MAGSAYSAY'
            ],
            [
                'province_id' => 25,
                'name'        => 'NARRA'
            ],
            [
                'province_id' => 25,
                'name'        => 'PUERTO PRINCESA CITY'
            ],
            [
                'province_id' => 25,
                'name'        => 'QUEZON'
            ],
            [
                'province_id' => 25,
                'name'        => 'RIZAL (MARCOS)'
            ],
            [
                'province_id' => 25,
                'name'        => 'ROXAS'
            ],
            [
                'province_id' => 25,
                'name'        => 'SAN VICENTE'
            ],
            [
                'province_id' => 25,
                'name'        => 'SOFRONIO ESPAÑOLA'
            ],
            [
                'province_id' => 25,
                'name'        => 'TAYTAY'
            ],
            [
                'province_id' => 26,
                'name'        => 'ALCANTARA'
            ],
            [
                'province_id' => 26,
                'name'        => 'BANTON'
            ],
            [
                'province_id' => 26,
                'name'        => 'CAJIDIOCAN'
            ],
            [
                'province_id' => 26,
                'name'        => 'CALATRAVA'
            ],
            [
                'province_id' => 26,
                'name'        => 'CONCEPCION'
            ],
            [
                'province_id' => 26,
                'name'        => 'CORCUERA'
            ],
            [
                'province_id' => 26,
                'name'        => 'FERROL'
            ],
            [
                'province_id' => 26,
                'name'        => 'LOOC'
            ],
            [
                'province_id' => 26,
                'name'        => 'MAGDIWANG'
            ],
            [
                'province_id' => 26,
                'name'        => 'ODIONGAN'
            ],
            [
                'province_id' => 26,
                'name'        => 'ROMBLON'
            ],
            [
                'province_id' => 26,
                'name'        => 'SAN AGUSTIN'
            ],
            [
                'province_id' => 26,
                'name'        => 'SAN ANDRES'
            ],
            [
                'province_id' => 26,
                'name'        => 'SAN FERNANDO'
            ],
            [
                'province_id' => 26,
                'name'        => 'SAN JOSE'
            ],
            [
                'province_id' => 26,
                'name'        => 'SANTA FE'
            ],
            [
                'province_id' => 26,
                'name'        => 'SANTA MARIA (IMELDA)'
            ],
            [
                'province_id' => 27,
                'name'        => 'BACACAY'
            ],
            [
                'province_id' => 27,
                'name'        => 'CAMALIG'
            ],
            [
                'province_id' => 27,
                'name'        => 'CITY OF LIGAO'
            ],
            [
                'province_id' => 27,
                'name'        => 'DARAGA (LOCSIN)'
            ],
            [
                'province_id' => 27,
                'name'        => 'GUINOBATAN'
            ],
            [
                'province_id' => 27,
                'name'        => 'JOVELLAR'
            ],
            [
                'province_id' => 27,
                'name'        => 'LEGAZPI CITY'
            ],
            [
                'province_id' => 27,
                'name'        => 'LIBON'
            ],
            [
                'province_id' => 27,
                'name'        => 'MALILIPOT'
            ],
            [
                'province_id' => 27,
                'name'        => 'MALINAO'
            ],
            [
                'province_id' => 27,
                'name'        => 'MANITO'
            ],
            [
                'province_id' => 27,
                'name'        => 'OAS'
            ],
            [
                'province_id' => 27,
                'name'        => 'PIO DURAN'
            ],
            [
                'province_id' => 27,
                'name'        => 'POLANGUI'
            ],
            [
                'province_id' => 27,
                'name'        => 'RAPU-RAPU'
            ],
            [
                'province_id' => 27,
                'name'        => 'SANTO DOMINGO (LIBOG)'
            ],
            [
                'province_id' => 27,
                'name'        => 'TABACO CITY'
            ],
            [
                'province_id' => 27,
                'name'        => 'TIWI'
            ],
            [
                'province_id' => 28,
                'name'        => 'BASUD'
            ],
            [
                'province_id' => 28,
                'name'        => 'CAPALONGA'
            ],
            [
                'province_id' => 28,
                'name'        => 'DAET'
            ],
            [
                'province_id' => 28,
                'name'        => 'JOSE PANGANIBAN'
            ],
            [
                'province_id' => 28,
                'name'        => 'LABO'
            ],
            [
                'province_id' => 28,
                'name'        => 'MERCEDES'
            ],
            [
                'province_id' => 28,
                'name'        => 'PARACALE'
            ],
            [
                'province_id' => 28,
                'name'        => 'SAN LORENZO RUIZ (IMELDA)'
            ],
            [
                'province_id' => 28,
                'name'        => 'SAN VICENTE'
            ],
            [
                'province_id' => 28,
                'name'        => 'SANTA ELENA'
            ],
            [
                'province_id' => 28,
                'name'        => 'TALISAY'
            ],
            [
                'province_id' => 28,
                'name'        => 'VINZONS'
            ],
            [
                'province_id' => 29,
                'name'        => 'BAAO'
            ],
            [
                'province_id' => 29,
                'name'        => 'BALATAN'
            ],
            [
                'province_id' => 29,
                'name'        => 'BATO'
            ],
            [
                'province_id' => 29,
                'name'        => 'BOMBON'
            ],
            [
                'province_id' => 29,
                'name'        => 'BUHI'
            ],
            [
                'province_id' => 29,
                'name'        => 'BULA'
            ],
            [
                'province_id' => 29,
                'name'        => 'CABUSAO'
            ],
            [
                'province_id' => 29,
                'name'        => 'CALABANGA'
            ],
            [
                'province_id' => 29,
                'name'        => 'CAMALIGAN'
            ],
            [
                'province_id' => 29,
                'name'        => 'CANAMAN'
            ],
            [
                'province_id' => 29,
                'name'        => 'CARAMOAN'
            ],
            [
                'province_id' => 29,
                'name'        => 'DEL GALLEGO'
            ],
            [
                'province_id' => 29,
                'name'        => 'GAINZA'
            ],
            [
                'province_id' => 29,
                'name'        => 'GARCHITORENA'
            ],
            [
                'province_id' => 29,
                'name'        => 'GOA'
            ],
            [
                'province_id' => 29,
                'name'        => 'IRIGA CITY'
            ],
            [
                'province_id' => 29,
                'name'        => 'LAGONOY'
            ],
            [
                'province_id' => 29,
                'name'        => 'LIBMANAN'
            ],
            [
                'province_id' => 29,
                'name'        => 'LUPI'
            ],
            [
                'province_id' => 29,
                'name'        => 'MAGARAO'
            ],
            [
                'province_id' => 29,
                'name'        => 'MILAOR'
            ],
            [
                'province_id' => 29,
                'name'        => 'MINALABAC'
            ],
            [
                'province_id' => 29,
                'name'        => 'NABUA'
            ],
            [
                'province_id' => 29,
                'name'        => 'NAGA CITY'
            ],
            [
                'province_id' => 29,
                'name'        => 'OCAMPO'
            ],
            [
                'province_id' => 29,
                'name'        => 'PAMPLONA'
            ],
            [
                'province_id' => 29,
                'name'        => 'PASACAO'
            ],
            [
                'province_id' => 29,
                'name'        => 'PILI'
            ],
            [
                'province_id' => 29,
                'name'        => 'PRESENTACION (PARUBCAN)'
            ],
            [
                'province_id' => 29,
                'name'        => 'RAGAY'
            ],
            [
                'province_id' => 29,
                'name'        => 'SAGÑAY'
            ],
            [
                'province_id' => 29,
                'name'        => 'SAN FERNANDO'
            ],
            [
                'province_id' => 29,
                'name'        => 'SAN JOSE'
            ],
            [
                'province_id' => 29,
                'name'        => 'SIPOCOT'
            ],
            [
                'province_id' => 29,
                'name'        => 'SIRUMA'
            ],
            [
                'province_id' => 29,
                'name'        => 'TIGAON'
            ],
            [
                'province_id' => 29,
                'name'        => 'TINAMBAC'
            ],
            [
                'province_id' => 30,
                'name'        => 'BAGAMANOC'
            ],
            [
                'province_id' => 30,
                'name'        => 'BARAS'
            ],
            [
                'province_id' => 30,
                'name'        => 'BATO'
            ],
            [
                'province_id' => 30,
                'name'        => 'CARAMORAN'
            ],
            [
                'province_id' => 30,
                'name'        => 'GIGMOTO'
            ],
            [
                'province_id' => 30,
                'name'        => 'PANDAN'
            ],
            [
                'province_id' => 30,
                'name'        => 'PANGANIBAN (PAYO)'
            ],
            [
                'province_id' => 30,
                'name'        => 'SAN ANDRES (CALOLBON)'
            ],
            [
                'province_id' => 30,
                'name'        => 'SAN MIGUEL'
            ],
            [
                'province_id' => 30,
                'name'        => 'VIGA'
            ],
            [
                'province_id' => 30,
                'name'        => 'VIRAC'
            ],
            [
                'province_id' => 31,
                'name'        => 'AROROY'
            ],
            [
                'province_id' => 31,
                'name'        => 'BALENO'
            ],
            [
                'province_id' => 31,
                'name'        => 'BALUD'
            ],
            [
                'province_id' => 31,
                'name'        => 'BATUAN'
            ],
            [
                'province_id' => 31,
                'name'        => 'CATAINGAN'
            ],
            [
                'province_id' => 31,
                'name'        => 'CAWAYAN'
            ],
            [
                'province_id' => 31,
                'name'        => 'CLAVERIA'
            ],
            [
                'province_id' => 31,
                'name'        => 'DIMASALANG'
            ],
            [
                'province_id' => 31,
                'name'        => 'ESPERANZA'
            ],
            [
                'province_id' => 31,
                'name'        => 'MANDAON'
            ],
            [
                'province_id' => 31,
                'name'        => 'MASBATE CITY'
            ],
            [
                'province_id' => 31,
                'name'        => 'MILAGROS'
            ],
            [
                'province_id' => 31,
                'name'        => 'MOBO'
            ],
            [
                'province_id' => 31,
                'name'        => 'MONREAL'
            ],
            [
                'province_id' => 31,
                'name'        => 'PALANAS'
            ],
            [
                'province_id' => 31,
                'name'        => 'PIO V. CORPUZ (LIMBUHAN)'
            ],
            [
                'province_id' => 31,
                'name'        => 'PLACER'
            ],
            [
                'province_id' => 31,
                'name'        => 'SAN FERNANDO'
            ],
            [
                'province_id' => 31,
                'name'        => 'SAN JACINTO'
            ],
            [
                'province_id' => 31,
                'name'        => 'SAN PASCUAL'
            ],
            [
                'province_id' => 31,
                'name'        => 'USON'
            ],
            [
                'province_id' => 32,
                'name'        => 'BARCELONA'
            ],
            [
                'province_id' => 32,
                'name'        => 'BULAN'
            ],
            [
                'province_id' => 32,
                'name'        => 'BULUSAN'
            ],
            [
                'province_id' => 32,
                'name'        => 'CASIGURAN'
            ],
            [
                'province_id' => 32,
                'name'        => 'CASTILLA'
            ],
            [
                'province_id' => 32,
                'name'        => 'DONSOL'
            ],
            [
                'province_id' => 32,
                'name'        => 'GUBAT'
            ],
            [
                'province_id' => 32,
                'name'        => 'IROSIN'
            ],
            [
                'province_id' => 32,
                'name'        => 'JUBAN'
            ],
            [
                'province_id' => 32,
                'name'        => 'MAGALLANES'
            ],
            [
                'province_id' => 32,
                'name'        => 'MATNOG'
            ],
            [
                'province_id' => 32,
                'name'        => 'PILAR'
            ],
            [
                'province_id' => 32,
                'name'        => 'PRIETO DIAZ'
            ],
            [
                'province_id' => 32,
                'name'        => 'SANTA MAGDALENA'
            ],
            [
                'province_id' => 32,
                'name'        => 'SORSOGON CITY'
            ],
            [
                'province_id' => 33,
                'name'        => 'ALTAVAS'
            ],
            [
                'province_id' => 33,
                'name'        => 'BALETE'
            ],
            [
                'province_id' => 33,
                'name'        => 'BANGA'
            ],
            [
                'province_id' => 33,
                'name'        => 'BATAN'
            ],
            [
                'province_id' => 33,
                'name'        => 'BURUANGA'
            ],
            [
                'province_id' => 33,
                'name'        => 'IBAJAY'
            ],
            [
                'province_id' => 33,
                'name'        => 'KALIBO'
            ],
            [
                'province_id' => 33,
                'name'        => 'LEZO'
            ],
            [
                'province_id' => 33,
                'name'        => 'LIBACAO'
            ],
            [
                'province_id' => 33,
                'name'        => 'MADALAG'
            ],
            [
                'province_id' => 33,
                'name'        => 'MAKATO'
            ],
            [
                'province_id' => 33,
                'name'        => 'MALAY'
            ],
            [
                'province_id' => 33,
                'name'        => 'MALINAO'
            ],
            [
                'province_id' => 33,
                'name'        => 'NABAS'
            ],
            [
                'province_id' => 33,
                'name'        => 'NEW WASHINGTON'
            ],
            [
                'province_id' => 33,
                'name'        => 'NUMANCIA'
            ],
            [
                'province_id' => 33,
                'name'        => 'TANGALAN'
            ],
            [
                'province_id' => 34,
                'name'        => 'ANINI-Y'
            ],
            [
                'province_id' => 34,
                'name'        => 'BARBAZA'
            ],
            [
                'province_id' => 34,
                'name'        => 'BELISON'
            ],
            [
                'province_id' => 34,
                'name'        => 'BUGASONG'
            ],
            [
                'province_id' => 34,
                'name'        => 'CALUYA'
            ],
            [
                'province_id' => 34,
                'name'        => 'CULASI'
            ],
            [
                'province_id' => 34,
                'name'        => 'HAMTIC'
            ],
            [
                'province_id' => 34,
                'name'        => 'LAUA-AN'
            ],
            [
                'province_id' => 34,
                'name'        => 'LIBERTAD'
            ],
            [
                'province_id' => 34,
                'name'        => 'PANDAN'
            ],
            [
                'province_id' => 34,
                'name'        => 'PATNONGON'
            ],
            [
                'province_id' => 34,
                'name'        => 'SAN JOSE'
            ],
            [
                'province_id' => 34,
                'name'        => 'SAN REMIGIO'
            ],
            [
                'province_id' => 34,
                'name'        => 'SEBASTE'
            ],
            [
                'province_id' => 34,
                'name'        => 'SIBALOM'
            ],
            [
                'province_id' => 34,
                'name'        => 'TIBIAO'
            ],
            [
                'province_id' => 34,
                'name'        => 'TOBIAS FORNIER (DAO)'
            ],
            [
                'province_id' => 34,
                'name'        => 'VALDERRAMA'
            ],
            [
                'province_id' => 35,
                'name'        => 'CUARTERO'
            ],
            [
                'province_id' => 35,
                'name'        => 'DAO'
            ],
            [
                'province_id' => 35,
                'name'        => 'DUMALAG'
            ],
            [
                'province_id' => 35,
                'name'        => 'DUMARAO'
            ],
            [
                'province_id' => 35,
                'name'        => 'IVISAN'
            ],
            [
                'province_id' => 35,
                'name'        => 'JAMINDAN'
            ],
            [
                'province_id' => 35,
                'name'        => 'MA-AYON'
            ],
            [
                'province_id' => 35,
                'name'        => 'MAMBUSAO'
            ],
            [
                'province_id' => 35,
                'name'        => 'PANAY'
            ],
            [
                'province_id' => 35,
                'name'        => 'PANITAN'
            ],
            [
                'province_id' => 35,
                'name'        => 'PILAR'
            ],
            [
                'province_id' => 35,
                'name'        => 'PONTEVEDRA'
            ],
            [
                'province_id' => 35,
                'name'        => 'PRESIDENT ROXAS'
            ],
            [
                'province_id' => 35,
                'name'        => 'ROXAS CITY'
            ],
            [
                'province_id' => 35,
                'name'        => 'SAPI-AN'
            ],
            [
                'province_id' => 35,
                'name'        => 'SIGMA'
            ],
            [
                'province_id' => 35,
                'name'        => 'TAPAZ'
            ],
            [
                'province_id' => 36,
                'name'        => 'BUENAVISTA'
            ],
            [
                'province_id' => 36,
                'name'        => 'JORDAN'
            ],
            [
                'province_id' => 36,
                'name'        => 'NUEVA VALENCIA'
            ],
            [
                'province_id' => 36,
                'name'        => 'SAN LORENZO'
            ],
            [
                'province_id' => 36,
                'name'        => 'SIBUNAG'
            ],
            [
                'province_id' => 37,
                'name'        => 'AJUY'
            ],
            [
                'province_id' => 37,
                'name'        => 'ALIMODIAN'
            ],
            [
                'province_id' => 37,
                'name'        => 'ANILAO'
            ],
            [
                'province_id' => 37,
                'name'        => 'BADIANGAN'
            ],
            [
                'province_id' => 37,
                'name'        => 'BALASAN'
            ],
            [
                'province_id' => 37,
                'name'        => 'BANATE'
            ],
            [
                'province_id' => 37,
                'name'        => 'BAROTAC NUEVO'
            ],
            [
                'province_id' => 37,
                'name'        => 'BAROTAC VIEJO'
            ],
            [
                'province_id' => 37,
                'name'        => 'BATAD'
            ],
            [
                'province_id' => 37,
                'name'        => 'BINGAWAN'
            ],
            [
                'province_id' => 37,
                'name'        => 'CABATUAN'
            ],
            [
                'province_id' => 37,
                'name'        => 'CALINOG'
            ],
            [
                'province_id' => 37,
                'name'        => 'CARLES'
            ],
            [
                'province_id' => 37,
                'name'        => 'CITY OF PASSI'
            ],
            [
                'province_id' => 37,
                'name'        => 'CONCEPCION'
            ],
            [
                'province_id' => 37,
                'name'        => 'DINGLE'
            ],
            [
                'province_id' => 37,
                'name'        => 'DUEÑAS'
            ],
            [
                'province_id' => 37,
                'name'        => 'DUMANGAS'
            ],
            [
                'province_id' => 37,
                'name'        => 'ESTANCIA'
            ],
            [
                'province_id' => 37,
                'name'        => 'GUIMBAL'
            ],
            [
                'province_id' => 37,
                'name'        => 'IGBARAS'
            ],
            [
                'province_id' => 37,
                'name'        => 'ILOILO CITY'
            ],
            [
                'province_id' => 37,
                'name'        => 'JANIUAY'
            ],
            [
                'province_id' => 37,
                'name'        => 'LAMBUNAO'
            ],
            [
                'province_id' => 37,
                'name'        => 'LEGANES'
            ],
            [
                'province_id' => 37,
                'name'        => 'LEMERY'
            ],
            [
                'province_id' => 37,
                'name'        => 'LEON'
            ],
            [
                'province_id' => 37,
                'name'        => 'MAASIN'
            ],
            [
                'province_id' => 37,
                'name'        => 'MIAGAO'
            ],
            [
                'province_id' => 37,
                'name'        => 'MINA'
            ],
            [
                'province_id' => 37,
                'name'        => 'NEW LUCENA'
            ],
            [
                'province_id' => 37,
                'name'        => 'OTON'
            ],
            [
                'province_id' => 37,
                'name'        => 'PAVIA'
            ],
            [
                'province_id' => 37,
                'name'        => 'POTOTAN'
            ],
            [
                'province_id' => 37,
                'name'        => 'SAN DIONISIO'
            ],
            [
                'province_id' => 37,
                'name'        => 'SAN ENRIQUE'
            ],
            [
                'province_id' => 37,
                'name'        => 'SAN JOAQUIN'
            ],
            [
                'province_id' => 37,
                'name'        => 'SAN MIGUEL'
            ],
            [
                'province_id' => 37,
                'name'        => 'SAN RAFAEL'
            ],
            [
                'province_id' => 37,
                'name'        => 'SANTA BARBARA'
            ],
            [
                'province_id' => 37,
                'name'        => 'SARA'
            ],
            [
                'province_id' => 37,
                'name'        => 'TIGBAUAN'
            ],
            [
                'province_id' => 37,
                'name'        => 'TUBUNGAN'
            ],
            [
                'province_id' => 37,
                'name'        => 'ZARRAGA'
            ],
            [
                'province_id' => 38,
                'name'        => 'BACOLOD CITY'
            ],
            [
                'province_id' => 38,
                'name'        => 'BAGO CITY'
            ],
            [
                'province_id' => 38,
                'name'        => 'BINALBAGAN'
            ],
            [
                'province_id' => 38,
                'name'        => 'CADIZ CITY'
            ],
            [
                'province_id' => 38,
                'name'        => 'CALATRAVA'
            ],
            [
                'province_id' => 38,
                'name'        => 'CANDONI'
            ],
            [
                'province_id' => 38,
                'name'        => 'CAUAYAN'
            ],
            [
                'province_id' => 38,
                'name'        => 'ENRIQUE B. MAGALONA (SARAVIA)'
            ],
            [
                'province_id' => 38,
                'name'        => 'ESCALANTE CITY'
            ],
            [
                'province_id' => 38,
                'name'        => 'HIMAMAYLAN CITY'
            ],
            [
                'province_id' => 38,
                'name'        => 'HINIGARAN'
            ],
            [
                'province_id' => 38,
                'name'        => 'HINOBA-AN (ASIA)'
            ],
            [
                'province_id' => 38,
                'name'        => 'ILOG'
            ],
            [
                'province_id' => 38,
                'name'        => 'ISABELA'
            ],
            [
                'province_id' => 38,
                'name'        => 'KABANKALAN CITY'
            ],
            [
                'province_id' => 38,
                'name'        => 'LA CARLOTA CITY'
            ],
            [
                'province_id' => 38,
                'name'        => 'LA CASTELLANA'
            ],
            [
                'province_id' => 38,
                'name'        => 'MANAPLA'
            ],
            [
                'province_id' => 38,
                'name'        => 'MOISES PADILLA (MAGALLON)'
            ],
            [
                'province_id' => 38,
                'name'        => 'MURCIA'
            ],
            [
                'province_id' => 38,
                'name'        => 'PONTEVEDRA'
            ],
            [
                'province_id' => 38,
                'name'        => 'PULUPANDAN'
            ],
            [
                'province_id' => 38,
                'name'        => 'SAGAY CITY'
            ],
            [
                'province_id' => 38,
                'name'        => 'SALVADOR BENEDICTO'
            ],
            [
                'province_id' => 38,
                'name'        => 'SAN CARLOS CITY'
            ],
            [
                'province_id' => 38,
                'name'        => 'SAN ENRIQUE'
            ],
            [
                'province_id' => 38,
                'name'        => 'SILAY CITY'
            ],
            [
                'province_id' => 38,
                'name'        => 'SIPALAY CITY'
            ],
            [
                'province_id' => 38,
                'name'        => 'TALISAY CITY'
            ],
            [
                'province_id' => 38,
                'name'        => 'TOBOSO'
            ],
            [
                'province_id' => 38,
                'name'        => 'VALLADOLID'
            ],
            [
                'province_id' => 38,
                'name'        => 'VICTORIAS CITY'
            ],
            [
                'province_id' => 39,
                'name'        => 'ALBURQUERQUE'
            ],
            [
                'province_id' => 39,
                'name'        => 'ALICIA'
            ],
            [
                'province_id' => 39,
                'name'        => 'ANDA'
            ],
            [
                'province_id' => 39,
                'name'        => 'ANTEQUERA'
            ],
            [
                'province_id' => 39,
                'name'        => 'BACLAYON'
            ],
            [
                'province_id' => 39,
                'name'        => 'BALILIHAN'
            ],
            [
                'province_id' => 39,
                'name'        => 'BATUAN'
            ],
            [
                'province_id' => 39,
                'name'        => 'BIEN UNIDO'
            ],
            [
                'province_id' => 39,
                'name'        => 'BILAR'
            ],
            [
                'province_id' => 39,
                'name'        => 'BUENAVISTA'
            ],
            [
                'province_id' => 39,
                'name'        => 'CALAPE'
            ],
            [
                'province_id' => 39,
                'name'        => 'CANDIJAY'
            ],
            [
                'province_id' => 39,
                'name'        => 'CARMEN'
            ],
            [
                'province_id' => 39,
                'name'        => 'CATIGBIAN'
            ],
            [
                'province_id' => 39,
                'name'        => 'CLARIN'
            ],
            [
                'province_id' => 39,
                'name'        => 'CORELLA'
            ],
            [
                'province_id' => 39,
                'name'        => 'CORTES'
            ],
            [
                'province_id' => 39,
                'name'        => 'DAGOHOY'
            ],
            [
                'province_id' => 39,
                'name'        => 'DANAO'
            ],
            [
                'province_id' => 39,
                'name'        => 'DAUIS'
            ],
            [
                'province_id' => 39,
                'name'        => 'DIMIAO'
            ],
            [
                'province_id' => 39,
                'name'        => 'DUERO'
            ],
            [
                'province_id' => 39,
                'name'        => 'GARCIA HERNANDEZ'
            ],
            [
                'province_id' => 39,
                'name'        => 'GUINDULMAN'
            ],
            [
                'province_id' => 39,
                'name'        => 'INABANGA'
            ],
            [
                'province_id' => 39,
                'name'        => 'JAGNA'
            ],
            [
                'province_id' => 39,
                'name'        => 'JETAFE'
            ],
            [
                'province_id' => 39,
                'name'        => 'LILA'
            ],
            [
                'province_id' => 39,
                'name'        => 'LOAY'
            ],
            [
                'province_id' => 39,
                'name'        => 'LOBOC'
            ],
            [
                'province_id' => 39,
                'name'        => 'LOON'
            ],
            [
                'province_id' => 39,
                'name'        => 'MABINI'
            ],
            [
                'province_id' => 39,
                'name'        => 'MARIBOJOC'
            ],
            [
                'province_id' => 39,
                'name'        => 'PANGLAO'
            ],
            [
                'province_id' => 39,
                'name'        => 'PILAR'
            ],
            [
                'province_id' => 39,
                'name'        => 'PRES. CARLOS P. GARCIA (PITOGO)'
            ],
            [
                'province_id' => 39,
                'name'        => 'SAGBAYAN (BORJA)'
            ],
            [
                'province_id' => 39,
                'name'        => 'SAN ISIDRO'
            ],
            [
                'province_id' => 39,
                'name'        => 'SAN MIGUEL'
            ],
            [
                'province_id' => 39,
                'name'        => 'SEVILLA'
            ],
            [
                'province_id' => 39,
                'name'        => 'SIERRA BULLONES'
            ],
            [
                'province_id' => 39,
                'name'        => 'SIKATUNA'
            ],
            [
                'province_id' => 39,
                'name'        => 'TAGBILARAN CITY'
            ],
            [
                'province_id' => 39,
                'name'        => 'TALIBON'
            ],
            [
                'province_id' => 39,
                'name'        => 'TRINIDAD'
            ],
            [
                'province_id' => 39,
                'name'        => 'TUBIGON'
            ],
            [
                'province_id' => 39,
                'name'        => 'UBAY'
            ],
            [
                'province_id' => 39,
                'name'        => 'VALENCIA'
            ],
            [
                'province_id' => 40,
                'name'        => 'ALCANTARA'
            ],
            [
                'province_id' => 40,
                'name'        => 'ALCOY'
            ],
            [
                'province_id' => 40,
                'name'        => 'ALEGRIA'
            ],
            [
                'province_id' => 40,
                'name'        => 'ALOGUINSAN'
            ],
            [
                'province_id' => 40,
                'name'        => 'ARGAO'
            ],
            [
                'province_id' => 40,
                'name'        => 'ASTURIAS'
            ],
            [
                'province_id' => 40,
                'name'        => 'BADIAN'
            ],
            [
                'province_id' => 40,
                'name'        => 'BALAMBAN'
            ],
            [
                'province_id' => 40,
                'name'        => 'BANTAYAN'
            ],
            [
                'province_id' => 40,
                'name'        => 'BARILI'
            ],
            [
                'province_id' => 40,
                'name'        => 'BOGO CITY'
            ],
            [
                'province_id' => 40,
                'name'        => 'BOLJOON'
            ],
            [
                'province_id' => 40,
                'name'        => 'BORBON'
            ],
            [
                'province_id' => 40,
                'name'        => 'CARCAR CITY'
            ],
            [
                'province_id' => 40,
                'name'        => 'CARMEN'
            ],
            [
                'province_id' => 40,
                'name'        => 'CATMON'
            ],
            [
                'province_id' => 40,
                'name'        => 'CEBU CITY'
            ],
            [
                'province_id' => 40,
                'name'        => 'COMPOSTELA'
            ],
            [
                'province_id' => 40,
                'name'        => 'CONSOLACION'
            ],
            [
                'province_id' => 40,
                'name'        => 'CORDOBA'
            ],
            [
                'province_id' => 40,
                'name'        => 'DAANBANTAYAN'
            ],
            [
                'province_id' => 40,
                'name'        => 'DALAGUETE'
            ],
            [
                'province_id' => 40,
                'name'        => 'DANAO CITY'
            ],
            [
                'province_id' => 40,
                'name'        => 'DUMANJUG'
            ],
            [
                'province_id' => 40,
                'name'        => 'GINATILAN'
            ],
            [
                'province_id' => 40,
                'name'        => 'LAPU-LAPU CITY (OPON)'
            ],
            [
                'province_id' => 40,
                'name'        => 'LILOAN'
            ],
            [
                'province_id' => 40,
                'name'        => 'MADRIDEJOS'
            ],
            [
                'province_id' => 40,
                'name'        => 'MALABUYOC'
            ],
            [
                'province_id' => 40,
                'name'        => 'MANDAUE CITY'
            ],
            [
                'province_id' => 40,
                'name'        => 'MEDELLIN'
            ],
            [
                'province_id' => 40,
                'name'        => 'MINGLANILLA'
            ],
            [
                'province_id' => 40,
                'name'        => 'MOALBOAL'
            ],
            [
                'province_id' => 40,
                'name'        => 'NAGA CITY'
            ],
            [
                'province_id' => 40,
                'name'        => 'OSLOB'
            ],
            [
                'province_id' => 40,
                'name'        => 'PILAR'
            ],
            [
                'province_id' => 40,
                'name'        => 'PINAMUNGAHAN'
            ],
            [
                'province_id' => 40,
                'name'        => 'PORO'
            ],
            [
                'province_id' => 40,
                'name'        => 'RONDA'
            ],
            [
                'province_id' => 40,
                'name'        => 'SAMBOAN'
            ],
            [
                'province_id' => 40,
                'name'        => 'SAN FERNANDO'
            ],
            [
                'province_id' => 40,
                'name'        => 'SAN FRANCISCO'
            ],
            [
                'province_id' => 40,
                'name'        => 'SAN REMIGIO'
            ],
            [
                'province_id' => 40,
                'name'        => 'SANTA FE'
            ],
            [
                'province_id' => 40,
                'name'        => 'SANTANDER'
            ],
            [
                'province_id' => 40,
                'name'        => 'SIBONGA'
            ],
            [
                'province_id' => 40,
                'name'        => 'SOGOD'
            ],
            [
                'province_id' => 40,
                'name'        => 'TABOGON'
            ],
            [
                'province_id' => 40,
                'name'        => 'TABUELAN'
            ],
            [
                'province_id' => 40,
                'name'        => 'TALISAY CITY'
            ],
            [
                'province_id' => 40,
                'name'        => 'TOLEDO CITY'
            ],
            [
                'province_id' => 40,
                'name'        => 'TUBURAN'
            ],
            [
                'province_id' => 40,
                'name'        => 'TUDELA'
            ],
            [
                'province_id' => 41,
                'name'        => 'AMLAN (AYUQUITAN)'
            ],
            [
                'province_id' => 41,
                'name'        => 'AYUNGON'
            ],
            [
                'province_id' => 41,
                'name'        => 'BACONG'
            ],
            [
                'province_id' => 41,
                'name'        => 'BAIS CITY'
            ],
            [
                'province_id' => 41,
                'name'        => 'BASAY'
            ],
            [
                'province_id' => 41,
                'name'        => 'BAYAWAN CITY (TULONG)'
            ],
            [
                'province_id' => 41,
                'name'        => 'BINDOY (PAYABON)'
            ],
            [
                'province_id' => 41,
                'name'        => 'CANLAON CITY'
            ],
            [
                'province_id' => 41,
                'name'        => 'DAUIN'
            ],
            [
                'province_id' => 41,
                'name'        => 'DUMAGUETE CITY'
            ],
            [
                'province_id' => 41,
                'name'        => 'GUIHULNGAN CITY'
            ],
            [
                'province_id' => 41,
                'name'        => 'JIMALALUD'
            ],
            [
                'province_id' => 41,
                'name'        => 'LA LIBERTAD'
            ],
            [
                'province_id' => 41,
                'name'        => 'MABINAY'
            ],
            [
                'province_id' => 41,
                'name'        => 'MANJUYOD'
            ],
            [
                'province_id' => 41,
                'name'        => 'PAMPLONA'
            ],
            [
                'province_id' => 41,
                'name'        => 'SAN JOSE'
            ],
            [
                'province_id' => 41,
                'name'        => 'SANTA CATALINA'
            ],
            [
                'province_id' => 41,
                'name'        => 'SIATON'
            ],
            [
                'province_id' => 41,
                'name'        => 'SIBULAN'
            ],
            [
                'province_id' => 41,
                'name'        => 'TANJAY CITY'
            ],
            [
                'province_id' => 41,
                'name'        => 'TAYASAN'
            ],
            [
                'province_id' => 41,
                'name'        => 'VALENCIA (LUZURRIAGA)'
            ],
            [
                'province_id' => 41,
                'name'        => 'VALLEHERMOSO'
            ],
            [
                'province_id' => 41,
                'name'        => 'ZAMBOANGUITA'
            ],
            [
                'province_id' => 42,
                'name'        => 'ENRIQUE VILLANUEVA'
            ],
            [
                'province_id' => 42,
                'name'        => 'LARENA'
            ],
            [
                'province_id' => 42,
                'name'        => 'LAZI'
            ],
            [
                'province_id' => 42,
                'name'        => 'MARIA'
            ],
            [
                'province_id' => 42,
                'name'        => 'SAN JUAN'
            ],
            [
                'province_id' => 42,
                'name'        => 'SIQUIJOR'
            ],
            [
                'province_id' => 43,
                'name'        => 'ALMERIA'
            ],
            [
                'province_id' => 43,
                'name'        => 'BILIRAN'
            ],
            [
                'province_id' => 43,
                'name'        => 'CABUCGAYAN'
            ],
            [
                'province_id' => 43,
                'name'        => 'CAIBIRAN'
            ],
            [
                'province_id' => 43,
                'name'        => 'CULABA'
            ],
            [
                'province_id' => 43,
                'name'        => 'KAWAYAN'
            ],
            [
                'province_id' => 43,
                'name'        => 'MARIPIPI'
            ],
            [
                'province_id' => 43,
                'name'        => 'NAVAL'
            ],
            [
                'province_id' => 44,
                'name'        => 'ARTECHE'
            ],
            [
                'province_id' => 44,
                'name'        => 'BALANGIGA'
            ],
            [
                'province_id' => 44,
                'name'        => 'BALANGKAYAN'
            ],
            [
                'province_id' => 44,
                'name'        => 'BORONGAN CITY'
            ],
            [
                'province_id' => 44,
                'name'        => 'CAN-AVID'
            ],
            [
                'province_id' => 44,
                'name'        => 'DOLORES'
            ],
            [
                'province_id' => 44,
                'name'        => 'GENERAL MACARTHUR'
            ],
            [
                'province_id' => 44,
                'name'        => 'GIPORLOS'
            ],
            [
                'province_id' => 44,
                'name'        => 'GUIUAN'
            ],
            [
                'province_id' => 44,
                'name'        => 'HERNANI'
            ],
            [
                'province_id' => 44,
                'name'        => 'JIPAPAD'
            ],
            [
                'province_id' => 44,
                'name'        => 'LAWAAN'
            ],
            [
                'province_id' => 44,
                'name'        => 'LLORENTE'
            ],
            [
                'province_id' => 44,
                'name'        => 'MASLOG'
            ],
            [
                'province_id' => 44,
                'name'        => 'MAYDOLONG'
            ],
            [
                'province_id' => 44,
                'name'        => 'MERCEDES'
            ],
            [
                'province_id' => 44,
                'name'        => 'ORAS'
            ],
            [
                'province_id' => 44,
                'name'        => 'QUINAPONDAN'
            ],
            [
                'province_id' => 44,
                'name'        => 'SALCEDO'
            ],
            [
                'province_id' => 44,
                'name'        => 'SAN JULIAN'
            ],
            [
                'province_id' => 44,
                'name'        => 'SAN POLICARPO'
            ],
            [
                'province_id' => 44,
                'name'        => 'SULAT'
            ],
            [
                'province_id' => 44,
                'name'        => 'TAFT'
            ],
            [
                'province_id' => 45,
                'name'        => 'ABUYOG'
            ],
            [
                'province_id' => 45,
                'name'        => 'ALANGALANG'
            ],
            [
                'province_id' => 45,
                'name'        => 'ALBUERA'
            ],
            [
                'province_id' => 45,
                'name'        => 'BABATNGON'
            ],
            [
                'province_id' => 45,
                'name'        => 'BARUGO'
            ],
            [
                'province_id' => 45,
                'name'        => 'BATO'
            ],
            [
                'province_id' => 45,
                'name'        => 'BAYBAY CITY'
            ],
            [
                'province_id' => 45,
                'name'        => 'BURAUEN'
            ],
            [
                'province_id' => 45,
                'name'        => 'CALUBIAN'
            ],
            [
                'province_id' => 45,
                'name'        => 'CAPOOCAN'
            ],
            [
                'province_id' => 45,
                'name'        => 'CARIGARA'
            ],
            [
                'province_id' => 45,
                'name'        => 'DAGAMI'
            ],
            [
                'province_id' => 45,
                'name'        => 'DULAG'
            ],
            [
                'province_id' => 45,
                'name'        => 'HILONGOS'
            ],
            [
                'province_id' => 45,
                'name'        => 'HINDANG'
            ],
            [
                'province_id' => 45,
                'name'        => 'INOPACAN'
            ],
            [
                'province_id' => 45,
                'name'        => 'ISABEL'
            ],
            [
                'province_id' => 45,
                'name'        => 'JARO'
            ],
            [
                'province_id' => 45,
                'name'        => 'JAVIER (BUGHO)'
            ],
            [
                'province_id' => 45,
                'name'        => 'JULITA'
            ],
            [
                'province_id' => 45,
                'name'        => 'KANANGA'
            ],
            [
                'province_id' => 45,
                'name'        => 'LA PAZ'
            ],
            [
                'province_id' => 45,
                'name'        => 'LEYTE'
            ],
            [
                'province_id' => 45,
                'name'        => 'MACARTHUR'
            ],
            [
                'province_id' => 45,
                'name'        => 'MAHAPLAG'
            ],
            [
                'province_id' => 45,
                'name'        => 'MATAG-OB'
            ],
            [
                'province_id' => 45,
                'name'        => 'MATALOM'
            ],
            [
                'province_id' => 45,
                'name'        => 'MAYORGA'
            ],
            [
                'province_id' => 45,
                'name'        => 'MERIDA'
            ],
            [
                'province_id' => 45,
                'name'        => 'ORMOC CITY'
            ],
            [
                'province_id' => 45,
                'name'        => 'PALO'
            ],
            [
                'province_id' => 45,
                'name'        => 'PALOMPON'
            ],
            [
                'province_id' => 45,
                'name'        => 'PASTRANA'
            ],
            [
                'province_id' => 45,
                'name'        => 'SAN ISIDRO'
            ],
            [
                'province_id' => 45,
                'name'        => 'SAN MIGUEL'
            ],
            [
                'province_id' => 45,
                'name'        => 'SANTA FE'
            ],
            [
                'province_id' => 45,
                'name'        => 'TABANGO'
            ],
            [
                'province_id' => 45,
                'name'        => 'TABONTABON'
            ],
            [
                'province_id' => 45,
                'name'        => 'TACLOBAN CITY'
            ],
            [
                'province_id' => 45,
                'name'        => 'TANAUAN'
            ],
            [
                'province_id' => 45,
                'name'        => 'TOLOSA'
            ],
            [
                'province_id' => 45,
                'name'        => 'TUNGA'
            ],
            [
                'province_id' => 45,
                'name'        => 'VILLABA'
            ],
            [
                'province_id' => 46,
                'name'        => 'ALLEN'
            ],
            [
                'province_id' => 46,
                'name'        => 'BIRI'
            ],
            [
                'province_id' => 46,
                'name'        => 'BOBON'
            ],
            [
                'province_id' => 46,
                'name'        => 'CAPUL'
            ],
            [
                'province_id' => 46,
                'name'        => 'CATARMAN'
            ],
            [
                'province_id' => 46,
                'name'        => 'CATUBIG'
            ],
            [
                'province_id' => 46,
                'name'        => 'GAMAY'
            ],
            [
                'province_id' => 46,
                'name'        => 'LAOANG'
            ],
            [
                'province_id' => 46,
                'name'        => 'LAPINIG'
            ],
            [
                'province_id' => 46,
                'name'        => 'LAS NAVAS'
            ],
            [
                'province_id' => 46,
                'name'        => 'LAVEZARES'
            ],
            [
                'province_id' => 46,
                'name'        => 'LOPE DE VEGA'
            ],
            [
                'province_id' => 46,
                'name'        => 'MAPANAS'
            ],
            [
                'province_id' => 46,
                'name'        => 'MONDRAGON'
            ],
            [
                'province_id' => 46,
                'name'        => 'PALAPAG'
            ],
            [
                'province_id' => 46,
                'name'        => 'PAMBUJAN'
            ],
            [
                'province_id' => 46,
                'name'        => 'ROSARIO'
            ],
            [
                'province_id' => 46,
                'name'        => 'SAN ANTONIO'
            ],
            [
                'province_id' => 46,
                'name'        => 'SAN ISIDRO'
            ],
            [
                'province_id' => 46,
                'name'        => 'SAN JOSE'
            ],
            [
                'province_id' => 46,
                'name'        => 'SAN ROQUE'
            ],
            [
                'province_id' => 46,
                'name'        => 'SAN VICENTE'
            ],
            [
                'province_id' => 46,
                'name'        => 'SILVINO LOBOS'
            ],
            [
                'province_id' => 46,
                'name'        => 'VICTORIA'
            ],
            [
                'province_id' => 47,
                'name'        => 'ALMAGRO'
            ],
            [
                'province_id' => 47,
                'name'        => 'BASEY'
            ],
            [
                'province_id' => 47,
                'name'        => 'CALBAYOG CITY'
            ],
            [
                'province_id' => 47,
                'name'        => 'CALBIGA'
            ],
            [
                'province_id' => 47,
                'name'        => 'CATBALOGAN CITY'
            ],
            [
                'province_id' => 47,
                'name'        => 'DARAM'
            ],
            [
                'province_id' => 47,
                'name'        => 'GANDARA'
            ],
            [
                'province_id' => 47,
                'name'        => 'HINABANGAN'
            ],
            [
                'province_id' => 47,
                'name'        => 'JIABONG'
            ],
            [
                'province_id' => 47,
                'name'        => 'MARABUT'
            ],
            [
                'province_id' => 47,
                'name'        => 'MATUGUINAO'
            ],
            [
                'province_id' => 47,
                'name'        => 'MOTIONG'
            ],
            [
                'province_id' => 47,
                'name'        => 'PAGSANGHAN'
            ],
            [
                'province_id' => 47,
                'name'        => 'PARANAS (WRIGHT)'
            ],
            [
                'province_id' => 47,
                'name'        => 'PINABACDAO'
            ],
            [
                'province_id' => 47,
                'name'        => 'SAN JORGE'
            ],
            [
                'province_id' => 47,
                'name'        => 'SAN JOSE DE BUAN'
            ],
            [
                'province_id' => 47,
                'name'        => 'SAN SEBASTIAN'
            ],
            [
                'province_id' => 47,
                'name'        => 'SANTA MARGARITA'
            ],
            [
                'province_id' => 47,
                'name'        => 'SANTA RITA'
            ],
            [
                'province_id' => 47,
                'name'        => 'SANTO NIÑO'
            ],
            [
                'province_id' => 47,
                'name'        => 'TAGAPUL-AN'
            ],
            [
                'province_id' => 47,
                'name'        => 'TALALORA'
            ],
            [
                'province_id' => 47,
                'name'        => 'TARANGNAN'
            ],
            [
                'province_id' => 47,
                'name'        => 'VILLAREAL'
            ],
            [
                'province_id' => 47,
                'name'        => 'ZUMARRAGA'
            ],
            [
                'province_id' => 48,
                'name'        => 'ANAHAWAN'
            ],
            [
                'province_id' => 48,
                'name'        => 'BONTOC'
            ],
            [
                'province_id' => 48,
                'name'        => 'HINUNANGAN'
            ],
            [
                'province_id' => 48,
                'name'        => 'HINUNDAYAN'
            ],
            [
                'province_id' => 48,
                'name'        => 'LIBAGON'
            ],
            [
                'province_id' => 48,
                'name'        => 'LILOAN'
            ],
            [
                'province_id' => 48,
                'name'        => 'LIMASAWA'
            ],
            [
                'province_id' => 48,
                'name'        => 'MAASIN CITY'
            ],
            [
                'province_id' => 48,
                'name'        => 'MACROHON'
            ],
            [
                'province_id' => 48,
                'name'        => 'MALITBOG'
            ],
            [
                'province_id' => 48,
                'name'        => 'PADRE BURGOS'
            ],
            [
                'province_id' => 48,
                'name'        => 'PINTUYAN'
            ],
            [
                'province_id' => 48,
                'name'        => 'SAINT BERNARD'
            ],
            [
                'province_id' => 48,
                'name'        => 'SAN FRANCISCO'
            ],
            [
                'province_id' => 48,
                'name'        => 'SAN JUAN (CABALIAN)'
            ],
            [
                'province_id' => 48,
                'name'        => 'SAN RICARDO'
            ],
            [
                'province_id' => 48,
                'name'        => 'SILAGO'
            ],
            [
                'province_id' => 48,
                'name'        => 'SOGOD'
            ],
            [
                'province_id' => 48,
                'name'        => 'TOMAS OPPUS'
            ],
            [
                'province_id' => 49,
                'name'        => 'BACUNGAN (LEON T. POSTIGO)'
            ],
            [
                'province_id' => 49,
                'name'        => 'BALIGUIAN'
            ],
            [
                'province_id' => 49,
                'name'        => 'DAPITAN CITY'
            ],
            [
                'province_id' => 49,
                'name'        => 'DIPOLOG CITY'
            ],
            [
                'province_id' => 49,
                'name'        => 'GODOD'
            ],
            [
                'province_id' => 49,
                'name'        => 'GUTALAC'
            ],
            [
                'province_id' => 49,
                'name'        => 'JOSE DALMAN (PONOT)'
            ],
            [
                'province_id' => 49,
                'name'        => 'KALAWIT'
            ],
            [
                'province_id' => 49,
                'name'        => 'KATIPUNAN'
            ],
            [
                'province_id' => 49,
                'name'        => 'LA LIBERTAD'
            ],
            [
                'province_id' => 49,
                'name'        => 'LABASON'
            ],
            [
                'province_id' => 49,
                'name'        => 'LILOY'
            ],
            [
                'province_id' => 49,
                'name'        => 'MANUKAN'
            ],
            [
                'province_id' => 49,
                'name'        => 'MUTIA'
            ],
            [
                'province_id' => 49,
                'name'        => 'PIÑAN (NEW PIÑAN)'
            ],
            [
                'province_id' => 49,
                'name'        => 'POLANCO'
            ],
            [
                'province_id' => 49,
                'name'        => 'PRES. MANUEL A. ROXAS'
            ],
            [
                'province_id' => 49,
                'name'        => 'RIZAL'
            ],
            [
                'province_id' => 49,
                'name'        => 'SALUG'
            ],
            [
                'province_id' => 49,
                'name'        => 'SERGIO OSMEÑA SR.'
            ],
            [
                'province_id' => 49,
                'name'        => 'SIAYAN'
            ],
            [
                'province_id' => 49,
                'name'        => 'SIBUCO'
            ],
            [
                'province_id' => 49,
                'name'        => 'SIBUTAD'
            ],
            [
                'province_id' => 49,
                'name'        => 'SINDANGAN'
            ],
            [
                'province_id' => 49,
                'name'        => 'SIOCON'
            ],
            [
                'province_id' => 49,
                'name'        => 'SIRAWAI'
            ],
            [
                'province_id' => 49,
                'name'        => 'TAMPILISAN'
            ],
            [
                'province_id' => 50,
                'name'        => 'AURORA'
            ],
            [
                'province_id' => 50,
                'name'        => 'BAYOG'
            ],
            [
                'province_id' => 50,
                'name'        => 'DIMATALING'
            ],
            [
                'province_id' => 50,
                'name'        => 'DINAS'
            ],
            [
                'province_id' => 50,
                'name'        => 'DUMALINAO'
            ],
            [
                'province_id' => 50,
                'name'        => 'DUMINGAG'
            ],
            [
                'province_id' => 50,
                'name'        => 'GUIPOS'
            ],
            [
                'province_id' => 50,
                'name'        => 'JOSEFINA'
            ],
            [
                'province_id' => 50,
                'name'        => 'KUMALARANG'
            ],
            [
                'province_id' => 50,
                'name'        => 'LABANGAN'
            ],
            [
                'province_id' => 50,
                'name'        => 'LAKEWOOD'
            ],
            [
                'province_id' => 50,
                'name'        => 'LAPUYAN'
            ],
            [
                'province_id' => 50,
                'name'        => 'MAHAYAG'
            ],
            [
                'province_id' => 50,
                'name'        => 'MARGOSATUBIG'
            ],
            [
                'province_id' => 50,
                'name'        => 'MIDSALIP'
            ],
            [
                'province_id' => 50,
                'name'        => 'MOLAVE'
            ],
            [
                'province_id' => 50,
                'name'        => 'PAGADIAN CITY'
            ],
            [
                'province_id' => 50,
                'name'        => 'PITOGO'
            ],
            [
                'province_id' => 50,
                'name'        => 'RAMON MAGSAYSAY (LIARGO)'
            ],
            [
                'province_id' => 50,
                'name'        => 'SAN MIGUEL'
            ],
            [
                'province_id' => 50,
                'name'        => 'SAN PABLO'
            ],
            [
                'province_id' => 50,
                'name'        => 'SOMINOT (DON MARIANO MARCOS)'
            ],
            [
                'province_id' => 50,
                'name'        => 'TABINA'
            ],
            [
                'province_id' => 50,
                'name'        => 'TAMBULIG'
            ],
            [
                'province_id' => 50,
                'name'        => 'TIGBAO'
            ],
            [
                'province_id' => 50,
                'name'        => 'TUKURAN'
            ],
            [
                'province_id' => 50,
                'name'        => 'VINCENZO A. SAGUN'
            ],
            [
                'province_id' => 50,
                'name'        => 'ZAMBOANGA CITY'
            ],
            [
                'province_id' => 51,
                'name'        => 'ALICIA'
            ],
            [
                'province_id' => 51,
                'name'        => 'BUUG'
            ],
            [
                'province_id' => 51,
                'name'        => 'DIPLAHAN'
            ],
            [
                'province_id' => 51,
                'name'        => 'IMELDA'
            ],
            [
                'province_id' => 51,
                'name'        => 'IPIL'
            ],
            [
                'province_id' => 51,
                'name'        => 'KABASALAN'
            ],
            [
                'province_id' => 51,
                'name'        => 'MABUHAY'
            ],
            [
                'province_id' => 51,
                'name'        => 'MALANGAS'
            ],
            [
                'province_id' => 51,
                'name'        => 'NAGA'
            ],
            [
                'province_id' => 51,
                'name'        => 'OLUTANGA'
            ],
            [
                'province_id' => 51,
                'name'        => 'PAYAO'
            ],
            [
                'province_id' => 51,
                'name'        => 'ROSELLER LIM'
            ],
            [
                'province_id' => 51,
                'name'        => 'SIAY'
            ],
            [
                'province_id' => 51,
                'name'        => 'TALUSAN'
            ],
            [
                'province_id' => 51,
                'name'        => 'TITAY'
            ],
            [
                'province_id' => 51,
                'name'        => 'TUNGAWAN'
            ],
            [
                'province_id' => 52,
                'name'        => 'BAUNGON'
            ],
            [
                'province_id' => 52,
                'name'        => 'CABANGLASAN'
            ],
            [
                'province_id' => 52,
                'name'        => 'CITY OF MALAYBALAY'
            ],
            [
                'province_id' => 52,
                'name'        => 'DAMULOG'
            ],
            [
                'province_id' => 52,
                'name'        => 'DANGCAGAN'
            ],
            [
                'province_id' => 52,
                'name'        => 'DON CARLOS'
            ],
            [
                'province_id' => 52,
                'name'        => 'IMPASUG-ONG'
            ],
            [
                'province_id' => 52,
                'name'        => 'KADINGILAN'
            ],
            [
                'province_id' => 52,
                'name'        => 'KALILANGAN'
            ],
            [
                'province_id' => 52,
                'name'        => 'KIBAWE'
            ],
            [
                'province_id' => 52,
                'name'        => 'KITAOTAO'
            ],
            [
                'province_id' => 52,
                'name'        => 'LANTAPAN'
            ],
            [
                'province_id' => 52,
                'name'        => 'LIBONA'
            ],
            [
                'province_id' => 52,
                'name'        => 'MALITBOG'
            ],
            [
                'province_id' => 52,
                'name'        => 'MANOLO FORTICH'
            ],
            [
                'province_id' => 52,
                'name'        => 'MARAMAG'
            ],
            [
                'province_id' => 52,
                'name'        => 'PANGANTUCAN'
            ],
            [
                'province_id' => 52,
                'name'        => 'QUEZON'
            ],
            [
                'province_id' => 52,
                'name'        => 'SAN FERNANDO'
            ],
            [
                'province_id' => 52,
                'name'        => 'SUMILAO'
            ],
            [
                'province_id' => 52,
                'name'        => 'TALAKAG'
            ],
            [
                'province_id' => 52,
                'name'        => 'VALENCIA CITY'
            ],
            [
                'province_id' => 53,
                'name'        => 'CATARMAN'
            ],
            [
                'province_id' => 53,
                'name'        => 'GUINSILIBAN'
            ],
            [
                'province_id' => 53,
                'name'        => 'MAHINOG'
            ],
            [
                'province_id' => 53,
                'name'        => 'MAMBAJAO'
            ],
            [
                'province_id' => 53,
                'name'        => 'SAGAY'
            ],
            [
                'province_id' => 54,
                'name'        => 'BACOLOD'
            ],
            [
                'province_id' => 54,
                'name'        => 'BALOI'
            ],
            [
                'province_id' => 54,
                'name'        => 'BAROY'
            ],
            [
                'province_id' => 54,
                'name'        => 'ILIGAN CITY'
            ],
            [
                'province_id' => 54,
                'name'        => 'KAPATAGAN'
            ],
            [
                'province_id' => 54,
                'name'        => 'KAUSWAGAN'
            ],
            [
                'province_id' => 54,
                'name'        => 'KOLAMBUGAN'
            ],
            [
                'province_id' => 54,
                'name'        => 'LALA'
            ],
            [
                'province_id' => 54,
                'name'        => 'LINAMON'
            ],
            [
                'province_id' => 54,
                'name'        => 'MAGSAYSAY'
            ],
            [
                'province_id' => 54,
                'name'        => 'MAIGO'
            ],
            [
                'province_id' => 54,
                'name'        => 'MATUNGAO'
            ],
            [
                'province_id' => 54,
                'name'        => 'MUNAI'
            ],
            [
                'province_id' => 54,
                'name'        => 'NUNUNGAN'
            ],
            [
                'province_id' => 54,
                'name'        => 'PANTAO RAGAT'
            ],
            [
                'province_id' => 54,
                'name'        => 'PANTAR'
            ],
            [
                'province_id' => 54,
                'name'        => 'POONA PIAGAPO'
            ],
            [
                'province_id' => 54,
                'name'        => 'SALVADOR'
            ],
            [
                'province_id' => 54,
                'name'        => 'SAPAD'
            ],
            [
                'province_id' => 54,
                'name'        => 'SULTAN NAGA DIMAPORO (KAROMATAN)'
            ],
            [
                'province_id' => 54,
                'name'        => 'TAGOLOAN'
            ],
            [
                'province_id' => 54,
                'name'        => 'TANGCAL'
            ],
            [
                'province_id' => 54,
                'name'        => 'TUBOD'
            ],
            [
                'province_id' => 55,
                'name'        => 'ALORAN'
            ],
            [
                'province_id' => 55,
                'name'        => 'BALIANGAO'
            ],
            [
                'province_id' => 55,
                'name'        => 'BONIFACIO'
            ],
            [
                'province_id' => 55,
                'name'        => 'CALAMBA'
            ],
            [
                'province_id' => 55,
                'name'        => 'CLARIN'
            ],
            [
                'province_id' => 55,
                'name'        => 'CONCEPCION'
            ],
            [
                'province_id' => 55,
                'name'        => 'DON VICTORIANO CHIONGBIAN (DON MARIANO MARCOS)'
            ],
            [
                'province_id' => 55,
                'name'        => 'JIMENEZ'
            ],
            [
                'province_id' => 55,
                'name'        => 'LOPEZ JAENA'
            ],
            [
                'province_id' => 55,
                'name'        => 'OROQUIETA CITY'
            ],
            [
                'province_id' => 55,
                'name'        => 'OZAMIS CITY'
            ],
            [
                'province_id' => 55,
                'name'        => 'PANAON'
            ],
            [
                'province_id' => 55,
                'name'        => 'PLARIDEL'
            ],
            [
                'province_id' => 55,
                'name'        => 'SAPANG DALAGA'
            ],
            [
                'province_id' => 55,
                'name'        => 'SINACABAN'
            ],
            [
                'province_id' => 55,
                'name'        => 'TANGUB CITY'
            ],
            [
                'province_id' => 55,
                'name'        => 'TUDELA'
            ],
            [
                'province_id' => 56,
                'name'        => 'ALUBIJID'
            ],
            [
                'province_id' => 56,
                'name'        => 'BALINGASAG'
            ],
            [
                'province_id' => 56,
                'name'        => 'BALINGOAN'
            ],
            [
                'province_id' => 56,
                'name'        => 'BINUANGAN'
            ],
            [
                'province_id' => 56,
                'name'        => 'CAGAYAN DE ORO CITY'
            ],
            [
                'province_id' => 56,
                'name'        => 'CLAVERIA'
            ],
            [
                'province_id' => 56,
                'name'        => 'EL SALVADOR CITY'
            ],
            [
                'province_id' => 56,
                'name'        => 'GINGOOG CITY'
            ],
            [
                'province_id' => 56,
                'name'        => 'GITAGUM'
            ],
            [
                'province_id' => 56,
                'name'        => 'INITAO'
            ],
            [
                'province_id' => 56,
                'name'        => 'JASAAN'
            ],
            [
                'province_id' => 56,
                'name'        => 'KINOGUITAN'
            ],
            [
                'province_id' => 56,
                'name'        => 'LAGONGLONG'
            ],
            [
                'province_id' => 56,
                'name'        => 'LAGUINDINGAN'
            ],
            [
                'province_id' => 56,
                'name'        => 'LIBERTAD'
            ],
            [
                'province_id' => 56,
                'name'        => 'LUGAIT'
            ],
            [
                'province_id' => 56,
                'name'        => 'MAGSAYSAY (LINUGOS)'
            ],
            [
                'province_id' => 56,
                'name'        => 'MANTICAO'
            ],
            [
                'province_id' => 56,
                'name'        => 'MEDINA'
            ],
            [
                'province_id' => 56,
                'name'        => 'NAAWAN'
            ],
            [
                'province_id' => 56,
                'name'        => 'OPOL'
            ],
            [
                'province_id' => 56,
                'name'        => 'SALAY'
            ],
            [
                'province_id' => 56,
                'name'        => 'SUGBONGCOGON'
            ],
            [
                'province_id' => 56,
                'name'        => 'TAGOLOAN'
            ],
            [
                'province_id' => 56,
                'name'        => 'TALISAYAN'
            ],
            [
                'province_id' => 56,
                'name'        => 'VILLANUEVA'
            ],
            [
                'province_id' => 57,
                'name'        => 'COMPOSTELA'
            ],
            [
                'province_id' => 57,
                'name'        => 'LAAK (SAN VICENTE)'
            ],
            [
                'province_id' => 57,
                'name'        => 'MABINI (DOÑA ALICIA)'
            ],
            [
                'province_id' => 57,
                'name'        => 'MACO'
            ],
            [
                'province_id' => 57,
                'name'        => 'MARAGUSAN (SAN MARIANO)'
            ],
            [
                'province_id' => 57,
                'name'        => 'MAWAB'
            ],
            [
                'province_id' => 57,
                'name'        => 'MONKAYO'
            ],
            [
                'province_id' => 57,
                'name'        => 'MONTEVISTA'
            ],
            [
                'province_id' => 57,
                'name'        => 'NABUNTURAN'
            ],
            [
                'province_id' => 57,
                'name'        => 'NEW BATAAN'
            ],
            [
                'province_id' => 57,
                'name'        => 'PANTUKAN'
            ],
            [
                'province_id' => 58,
                'name'        => 'ASUNCION (SAUG)'
            ],
            [
                'province_id' => 58,
                'name'        => 'BRAULIO E. DUJALI'
            ],
            [
                'province_id' => 58,
                'name'        => 'CARMEN'
            ],
            [
                'province_id' => 58,
                'name'        => 'CITY OF TAGUM'
            ],
            [
                'province_id' => 58,
                'name'        => 'ISLAND GARDEN CITY OF SAMAL'
            ],
            [
                'province_id' => 58,
                'name'        => 'KAPALONG'
            ],
            [
                'province_id' => 58,
                'name'        => 'NEW CORELLA'
            ],
            [
                'province_id' => 58,
                'name'        => 'PANABO CITY'
            ],
            [
                'province_id' => 58,
                'name'        => 'SAN ISIDRO'
            ],
            [
                'province_id' => 58,
                'name'        => 'SANTO TOMAS'
            ],
            [
                'province_id' => 58,
                'name'        => 'TALAINGOD'
            ],
            [
                'province_id' => 59,
                'name'        => 'BANSALAN'
            ],
            [
                'province_id' => 59,
                'name'        => 'DAVAO CITY'
            ],
            [
                'province_id' => 59,
                'name'        => 'DIGOS CITY'
            ],
            [
                'province_id' => 59,
                'name'        => 'HAGONOY'
            ],
            [
                'province_id' => 59,
                'name'        => 'KIBLAWAN'
            ],
            [
                'province_id' => 59,
                'name'        => 'MAGSAYSAY'
            ],
            [
                'province_id' => 59,
                'name'        => 'MALALAG'
            ],
            [
                'province_id' => 59,
                'name'        => 'MATANAO'
            ],
            [
                'province_id' => 59,
                'name'        => 'PADADA'
            ],
            [
                'province_id' => 59,
                'name'        => 'SANTA CRUZ'
            ],
            [
                'province_id' => 59,
                'name'        => 'SULOP'
            ],
            [
                'province_id' => 60,
                'name'        => 'DON MARCELINO'
            ],
            [
                'province_id' => 60,
                'name'        => 'JOSE ABAD SANTOS (TRINIDAD)'
            ],
            [
                'province_id' => 60,
                'name'        => 'MALITA'
            ],
            [
                'province_id' => 60,
                'name'        => 'SANTA MARIA'
            ],
            [
                'province_id' => 60,
                'name'        => 'SARANGANI'
            ],
            [
                'province_id' => 61,
                'name'        => 'BAGANGA'
            ],
            [
                'province_id' => 61,
                'name'        => 'BANAYBANAY'
            ],
            [
                'province_id' => 61,
                'name'        => 'BOSTON'
            ],
            [
                'province_id' => 61,
                'name'        => 'CARAGA'
            ],
            [
                'province_id' => 61,
                'name'        => 'CATEEL'
            ],
            [
                'province_id' => 61,
                'name'        => 'GOVERNOR GENEROSO'
            ],
            [
                'province_id' => 61,
                'name'        => 'LUPON'
            ],
            [
                'province_id' => 61,
                'name'        => 'MANAY'
            ],
            [
                'province_id' => 61,
                'name'        => 'MATI CITY'
            ],
            [
                'province_id' => 61,
                'name'        => 'SAN ISIDRO'
            ],
            [
                'province_id' => 61,
                'name'        => 'TARRAGONA'
            ],
            [
                'province_id' => 62,
                'name'        => 'ALAMADA'
            ],
            [
                'province_id' => 62,
                'name'        => 'ALEOSAN'
            ],
            [
                'province_id' => 62,
                'name'        => 'ANTIPAS'
            ],
            [
                'province_id' => 62,
                'name'        => 'ARAKAN'
            ],
            [
                'province_id' => 62,
                'name'        => 'BANISILAN'
            ],
            [
                'province_id' => 62,
                'name'        => 'CARMEN'
            ],
            [
                'province_id' => 62,
                'name'        => 'CITY OF KIDAPAWAN'
            ],
            [
                'province_id' => 62,
                'name'        => 'KABACAN'
            ],
            [
                'province_id' => 62,
                'name'        => 'LIBUNGAN'
            ],
            [
                'province_id' => 62,
                'name'        => 'M\'LANG'
            ],
            [
                'province_id' => 62,
                'name'        => 'MAGPET'
            ],
            [
                'province_id' => 62,
                'name'        => 'MAKILALA'
            ],
            [
                'province_id' => 62,
                'name'        => 'MATALAM'
            ],
            [
                'province_id' => 62,
                'name'        => 'MIDSAYAP'
            ],
            [
                'province_id' => 62,
                'name'        => 'PIGKAWAYAN'
            ],
            [
                'province_id' => 62,
                'name'        => 'PIKIT'
            ],
            [
                'province_id' => 62,
                'name'        => 'PRESIDENT ROXAS'
            ],
            [
                'province_id' => 62,
                'name'        => 'TULUNAN'
            ],
            [
                'province_id' => 63,
                'name'        => 'ALABEL'
            ],
            [
                'province_id' => 63,
                'name'        => 'GLAN'
            ],
            [
                'province_id' => 63,
                'name'        => 'KIAMBA'
            ],
            [
                'province_id' => 63,
                'name'        => 'MAASIM'
            ],
            [
                'province_id' => 63,
                'name'        => 'MAITUM'
            ],
            [
                'province_id' => 63,
                'name'        => 'MALAPATAN'
            ],
            [
                'province_id' => 63,
                'name'        => 'MALUNGON'
            ],
            [
                'province_id' => 64,
                'name'        => 'BANGA'
            ],
            [
                'province_id' => 64,
                'name'        => 'GENERAL SANTOS CITY (DADIANGAS)'
            ],
            [
                'province_id' => 64,
                'name'        => 'KORONADAL CITY'
            ],
            [
                'province_id' => 64,
                'name'        => 'LAKE SEBU'
            ],
            [
                'province_id' => 64,
                'name'        => 'NORALA'
            ],
            [
                'province_id' => 64,
                'name'        => 'POLOMOLOK'
            ],
            [
                'province_id' => 64,
                'name'        => 'SANTO NIÑO'
            ],
            [
                'province_id' => 64,
                'name'        => 'SURALLAH'
            ],
            [
                'province_id' => 64,
                'name'        => 'T`BOLI'
            ],
            [
                'province_id' => 64,
                'name'        => 'TAMPAKAN'
            ],
            [
                'province_id' => 64,
                'name'        => 'TANTANGAN'
            ],
            [
                'province_id' => 64,
                'name'        => 'TUPI'
            ],
            [
                'province_id' => 65,
                'name'        => 'BAGUMBAYAN'
            ],
            [
                'province_id' => 65,
                'name'        => 'COLUMBIO'
            ],
            [
                'province_id' => 65,
                'name'        => 'ESPERANZA'
            ],
            [
                'province_id' => 65,
                'name'        => 'ISULAN'
            ],
            [
                'province_id' => 65,
                'name'        => 'KALAMANSIG'
            ],
            [
                'province_id' => 65,
                'name'        => 'LAMBAYONG (MARIANO MARCOS)'
            ],
            [
                'province_id' => 65,
                'name'        => 'LEBAK'
            ],
            [
                'province_id' => 65,
                'name'        => 'LUTAYAN'
            ],
            [
                'province_id' => 65,
                'name'        => 'PALIMBANG'
            ],
            [
                'province_id' => 65,
                'name'        => 'PRESIDENT QUIRINO'
            ],
            [
                'province_id' => 65,
                'name'        => 'SEN. NINOY AQUINO'
            ],
            [
                'province_id' => 65,
                'name'        => 'TACURONG CITY'
            ],
            [
                'province_id' => 66,
                'name'        => 'BUENAVISTA'
            ],
            [
                'province_id' => 66,
                'name'        => 'BUTUAN CITY'
            ],
            [
                'province_id' => 66,
                'name'        => 'CABADBARAN CITY'
            ],
            [
                'province_id' => 66,
                'name'        => 'CARMEN'
            ],
            [
                'province_id' => 66,
                'name'        => 'JABONGA'
            ],
            [
                'province_id' => 66,
                'name'        => 'KITCHARAO'
            ],
            [
                'province_id' => 66,
                'name'        => 'LAS NIEVES'
            ],
            [
                'province_id' => 66,
                'name'        => 'MAGALLANES'
            ],
            [
                'province_id' => 66,
                'name'        => 'NASIPIT'
            ],
            [
                'province_id' => 66,
                'name'        => 'REMEDIOS T. ROMUALDEZ'
            ],
            [
                'province_id' => 66,
                'name'        => 'SANTIAGO'
            ],
            [
                'province_id' => 66,
                'name'        => 'TUBAY'
            ],
            [
                'province_id' => 67,
                'name'        => 'BAYUGAN CITY'
            ],
            [
                'province_id' => 67,
                'name'        => 'BUNAWAN'
            ],
            [
                'province_id' => 67,
                'name'        => 'ESPERANZA'
            ],
            [
                'province_id' => 67,
                'name'        => 'LA PAZ'
            ],
            [
                'province_id' => 67,
                'name'        => 'LORETO'
            ],
            [
                'province_id' => 67,
                'name'        => 'PROSPERIDAD'
            ],
            [
                'province_id' => 67,
                'name'        => 'ROSARIO'
            ],
            [
                'province_id' => 67,
                'name'        => 'SAN FRANCISCO'
            ],
            [
                'province_id' => 67,
                'name'        => 'SAN LUIS'
            ],
            [
                'province_id' => 67,
                'name'        => 'SANTA JOSEFA'
            ],
            [
                'province_id' => 67,
                'name'        => 'SIBAGAT'
            ],
            [
                'province_id' => 67,
                'name'        => 'TALACOGON'
            ],
            [
                'province_id' => 67,
                'name'        => 'TRENTO'
            ],
            [
                'province_id' => 67,
                'name'        => 'VERUELA'
            ],
            [
                'province_id' => 68,
                'name'        => 'BASILISA (RIZAL)'
            ],
            [
                'province_id' => 68,
                'name'        => 'CAGDIANAO'
            ],
            [
                'province_id' => 68,
                'name'        => 'DINAGAT'
            ],
            [
                'province_id' => 68,
                'name'        => 'LIBJO (ALBOR)'
            ],
            [
                'province_id' => 68,
                'name'        => 'LORETO'
            ],
            [
                'province_id' => 68,
                'name'        => 'SAN JOSE'
            ],
            [
                'province_id' => 68,
                'name'        => 'TUBAJON'
            ],
            [
                'province_id' => 69,
                'name'        => 'ALEGRIA'
            ],
            [
                'province_id' => 69,
                'name'        => 'BACUAG'
            ],
            [
                'province_id' => 69,
                'name'        => 'BURGOS'
            ],
            [
                'province_id' => 69,
                'name'        => 'CLAVER'
            ],
            [
                'province_id' => 69,
                'name'        => 'DAPA'
            ],
            [
                'province_id' => 69,
                'name'        => 'DEL CARMEN'
            ],
            [
                'province_id' => 69,
                'name'        => 'GENERAL LUNA'
            ],
            [
                'province_id' => 69,
                'name'        => 'GIGAQUIT'
            ],
            [
                'province_id' => 69,
                'name'        => 'MAINIT'
            ],
            [
                'province_id' => 69,
                'name'        => 'MALIMONO'
            ],
            [
                'province_id' => 69,
                'name'        => 'PILAR'
            ],
            [
                'province_id' => 69,
                'name'        => 'PLACER'
            ],
            [
                'province_id' => 69,
                'name'        => 'SAN BENITO'
            ],
            [
                'province_id' => 69,
                'name'        => 'SAN FRANCISCO (ANAO-AON)'
            ],
            [
                'province_id' => 69,
                'name'        => 'SAN ISIDRO'
            ],
            [
                'province_id' => 69,
                'name'        => 'SANTA MONICA (SAPAO)'
            ],
            [
                'province_id' => 69,
                'name'        => 'SISON'
            ],
            [
                'province_id' => 69,
                'name'        => 'SOCORRO'
            ],
            [
                'province_id' => 69,
                'name'        => 'SURIGAO CITY'
            ],
            [
                'province_id' => 69,
                'name'        => 'TAGANA-AN'
            ],
            [
                'province_id' => 69,
                'name'        => 'TUBOD'
            ],
            [
                'province_id' => 70,
                'name'        => 'BAROBO'
            ],
            [
                'province_id' => 70,
                'name'        => 'BAYABAS'
            ],
            [
                'province_id' => 70,
                'name'        => 'BISLIG CITY'
            ],
            [
                'province_id' => 70,
                'name'        => 'CAGWAIT'
            ],
            [
                'province_id' => 70,
                'name'        => 'CANTILAN'
            ],
            [
                'province_id' => 70,
                'name'        => 'CARMEN'
            ],
            [
                'province_id' => 70,
                'name'        => 'CARRASCAL'
            ],
            [
                'province_id' => 70,
                'name'        => 'CORTES'
            ],
            [
                'province_id' => 70,
                'name'        => 'HINATUAN'
            ],
            [
                'province_id' => 70,
                'name'        => 'LANUZA'
            ],
            [
                'province_id' => 70,
                'name'        => 'LIANGA'
            ],
            [
                'province_id' => 70,
                'name'        => 'LINGIG'
            ],
            [
                'province_id' => 70,
                'name'        => 'MADRID'
            ],
            [
                'province_id' => 70,
                'name'        => 'MARIHATAG'
            ],
            [
                'province_id' => 70,
                'name'        => 'SAN AGUSTIN'
            ],
            [
                'province_id' => 70,
                'name'        => 'SAN MIGUEL'
            ],
            [
                'province_id' => 70,
                'name'        => 'TAGBINA'
            ],
            [
                'province_id' => 70,
                'name'        => 'TAGO'
            ],
            [
                'province_id' => 70,
                'name'        => 'TANDAG CITY'
            ],
            [
                'province_id' => 71,
                'name'        => 'AKBAR'
            ],
            [
                'province_id' => 71,
                'name'        => 'AL-BARKA'
            ],
            [
                'province_id' => 71,
                'name'        => 'HADJI MOHAMMAD AJUL'
            ],
            [
                'province_id' => 71,
                'name'        => 'HADJI MUHTAMAD'
            ],
            [
                'province_id' => 71,
                'name'        => 'ISABELA CITY'
            ],
            [
                'province_id' => 71,
                'name'        => 'LAMITAN CITY'
            ],
            [
                'province_id' => 71,
                'name'        => 'LANTAWAN'
            ],
            [
                'province_id' => 71,
                'name'        => 'MALUSO'
            ],
            [
                'province_id' => 71,
                'name'        => 'SUMISIP'
            ],
            [
                'province_id' => 71,
                'name'        => 'TABUAN-LASA'
            ],
            [
                'province_id' => 71,
                'name'        => 'TIPO-TIPO'
            ],
            [
                'province_id' => 71,
                'name'        => 'TUBURAN'
            ],
            [
                'province_id' => 71,
                'name'        => 'UNGKAYA PUKAN'
            ],
            [
                'province_id' => 72,
                'name'        => 'AMAI MANABILANG (BUMBARAN)'
            ],
            [
                'province_id' => 72,
                'name'        => 'BACOLOD-KALAWI (BACOLOD GRANDE)'
            ],
            [
                'province_id' => 72,
                'name'        => 'BALABAGAN'
            ],
            [
                'province_id' => 72,
                'name'        => 'BALINDONG (WATU)'
            ],
            [
                'province_id' => 72,
                'name'        => 'BAYANG'
            ],
            [
                'province_id' => 72,
                'name'        => 'BINIDAYAN'
            ],
            [
                'province_id' => 72,
                'name'        => 'BUADIPOSO-BUNTONG'
            ],
            [
                'province_id' => 72,
                'name'        => 'BUBONG'
            ],
            [
                'province_id' => 72,
                'name'        => 'BUTIG'
            ],
            [
                'province_id' => 72,
                'name'        => 'CALANOGAS'
            ],
            [
                'province_id' => 72,
                'name'        => 'DITSAAN-RAMAIN'
            ],
            [
                'province_id' => 72,
                'name'        => 'GANASSI'
            ],
            [
                'province_id' => 72,
                'name'        => 'KAPAI'
            ],
            [
                'province_id' => 72,
                'name'        => 'KAPATAGAN'
            ],
            [
                'province_id' => 72,
                'name'        => 'LUMBA-BAYABAO (MAGUING)'
            ],
            [
                'province_id' => 72,
                'name'        => 'LUMBACA-UNAYAN'
            ],
            [
                'province_id' => 72,
                'name'        => 'LUMBATAN'
            ],
            [
                'province_id' => 72,
                'name'        => 'LUMBAYANAGUE'
            ],
            [
                'province_id' => 72,
                'name'        => 'MADALUM'
            ],
            [
                'province_id' => 72,
                'name'        => 'MADAMBA'
            ],
            [
                'province_id' => 72,
                'name'        => 'MAGUING'
            ],
            [
                'province_id' => 72,
                'name'        => 'MALABANG'
            ],
            [
                'province_id' => 72,
                'name'        => 'MARANTAO'
            ],
            [
                'province_id' => 72,
                'name'        => 'MARAWI CITY'
            ],
            [
                'province_id' => 72,
                'name'        => 'MAROGONG'
            ],
            [
                'province_id' => 72,
                'name'        => 'MASIU'
            ],
            [
                'province_id' => 72,
                'name'        => 'MULONDO'
            ],
            [
                'province_id' => 72,
                'name'        => 'PAGAYAWAN (TATARIKAN)'
            ],
            [
                'province_id' => 72,
                'name'        => 'PIAGAPO'
            ],
            [
                'province_id' => 72,
                'name'        => 'PICONG (SULTAN GUMANDER)'
            ],
            [
                'province_id' => 72,
                'name'        => 'POONA BAYABAO (GATA)'
            ],
            [
                'province_id' => 72,
                'name'        => 'PUALAS'
            ],
            [
                'province_id' => 72,
                'name'        => 'SAGUIARAN'
            ],
            [
                'province_id' => 72,
                'name'        => 'SULTAN DUMALONDONG'
            ],
            [
                'province_id' => 72,
                'name'        => 'TAGOLOAN'
            ],
            [
                'province_id' => 72,
                'name'        => 'TAMPARAN'
            ],
            [
                'province_id' => 72,
                'name'        => 'TARAKA'
            ],
            [
                'province_id' => 72,
                'name'        => 'TUBARAN'
            ],
            [
                'province_id' => 72,
                'name'        => 'TUGAYA'
            ],
            [
                'province_id' => 72,
                'name'        => 'WAO'
            ],
            [
                'province_id' => 73,
                'name'        => 'AMPATUAN'
            ],
            [
                'province_id' => 73,
                'name'        => 'BARIRA'
            ],
            [
                'province_id' => 73,
                'name'        => 'BULDON'
            ],
            [
                'province_id' => 73,
                'name'        => 'BULUAN'
            ],
            [
                'province_id' => 73,
                'name'        => 'COTABATO CITY'
            ],
            [
                'province_id' => 73,
                'name'        => 'DATU ABDULLAH SANGKI'
            ],
            [
                'province_id' => 73,
                'name'        => 'DATU ANGGAL MIDTIMBANG'
            ],
            [
                'province_id' => 73,
                'name'        => 'DATU BLAH T. SINSUAT'
            ],
            [
                'province_id' => 73,
                'name'        => 'DATU HOFFER AMPATUAN'
            ],
            [
                'province_id' => 73,
                'name'        => 'DATU ODIN SINSUAT (DINAIG)'
            ],
            [
                'province_id' => 73,
                'name'        => 'DATU PAGLAS'
            ],
            [
                'province_id' => 73,
                'name'        => 'DATU PIANG'
            ],
            [
                'province_id' => 73,
                'name'        => 'DATU SALIBO'
            ],
            [
                'province_id' => 73,
                'name'        => 'DATU SAUDI AMPATUAN'
            ],
            [
                'province_id' => 73,
                'name'        => 'DATU UNSAY'
            ],
            [
                'province_id' => 73,
                'name'        => 'GEN. S. K. PENDATUN'
            ],
            [
                'province_id' => 73,
                'name'        => 'GUINDULUNGAN'
            ],
            [
                'province_id' => 73,
                'name'        => 'KABUNTALAN (TUMBAO)'
            ],
            [
                'province_id' => 73,
                'name'        => 'MAMASAPANO'
            ],
            [
                'province_id' => 73,
                'name'        => 'MANGUDADATU'
            ],
            [
                'province_id' => 73,
                'name'        => 'MATANOG'
            ],
            [
                'province_id' => 73,
                'name'        => 'NORTHERN KABUNTALAN'
            ],
            [
                'province_id' => 73,
                'name'        => 'PAGAGAWAN'
            ],
            [
                'province_id' => 73,
                'name'        => 'PAGALUNGAN'
            ],
            [
                'province_id' => 73,
                'name'        => 'PAGLAT'
            ],
            [
                'province_id' => 73,
                'name'        => 'PANDAG'
            ],
            [
                'province_id' => 73,
                'name'        => 'PARANG'
            ],
            [
                'province_id' => 73,
                'name'        => 'RAJAH BUAYAN'
            ],
            [
                'province_id' => 73,
                'name'        => 'SHARIFF AGUAK (MAGANOY)'
            ],
            [
                'province_id' => 73,
                'name'        => 'SHARIFF SAYDONA MUSTAPHA'
            ],
            [
                'province_id' => 73,
                'name'        => 'SOUTH UPI'
            ],
            [
                'province_id' => 73,
                'name'        => 'SULTAN KUDARAT (NULING)'
            ],
            [
                'province_id' => 73,
                'name'        => 'SULTAN MASTURA'
            ],
            [
                'province_id' => 73,
                'name'        => 'SULTAN SA BARONGIS (LAMBAYONG)'
            ],
            [
                'province_id' => 73,
                'name'        => 'TALAYAN'
            ],
            [
                'province_id' => 73,
                'name'        => 'TALITAY'
            ],
            [
                'province_id' => 73,
                'name'        => 'UPI'
            ],
            [
                'province_id' => 74,
                'name'        => 'HADJI PANGLIMA TAHIL (MARUNGGAS)'
            ],
            [
                'province_id' => 74,
                'name'        => 'INDANAN'
            ],
            [
                'province_id' => 74,
                'name'        => 'JOLO'
            ],
            [
                'province_id' => 74,
                'name'        => 'KALINGALAN CALUANG'
            ],
            [
                'province_id' => 74,
                'name'        => 'LUGUS'
            ],
            [
                'province_id' => 74,
                'name'        => 'LUUK'
            ],
            [
                'province_id' => 74,
                'name'        => 'MAIMBUNG'
            ],
            [
                'province_id' => 74,
                'name'        => 'OLD PANAMAO'
            ],
            [
                'province_id' => 74,
                'name'        => 'OMAR'
            ],
            [
                'province_id' => 74,
                'name'        => 'PANDAMI'
            ],
            [
                'province_id' => 74,
                'name'        => 'PANGLIMA ESTINO (NEW PANAMAO)'
            ],
            [
                'province_id' => 74,
                'name'        => 'PANGUTARAN'
            ],
            [
                'province_id' => 74,
                'name'        => 'PARANG'
            ],
            [
                'province_id' => 74,
                'name'        => 'PATA'
            ],
            [
                'province_id' => 74,
                'name'        => 'PATIKUL'
            ],
            [
                'province_id' => 74,
                'name'        => 'SIASI'
            ],
            [
                'province_id' => 74,
                'name'        => 'TALIPAO'
            ],
            [
                'province_id' => 74,
                'name'        => 'TAPUL'
            ],
            [
                'province_id' => 74,
                'name'        => 'TONGKIL'
            ],
            [
                'province_id' => 75,
                'name'        => 'BONGAO'
            ],
            [
                'province_id' => 75,
                'name'        => 'LANGUYAN'
            ],
            [
                'province_id' => 75,
                'name'        => 'MAPUN (CAGAYAN DE TAWI-TAWI)'
            ],
            [
                'province_id' => 75,
                'name'        => 'PANGLIMA SUGALA (BALIMBING)'
            ],
            [
                'province_id' => 75,
                'name'        => 'SAPA-SAPA'
            ],
            [
                'province_id' => 75,
                'name'        => 'SIBUTU'
            ],
            [
                'province_id' => 75,
                'name'        => 'SIMUNUL'
            ],
            [
                'province_id' => 75,
                'name'        => 'SITANGKAI'
            ],
            [
                'province_id' => 75,
                'name'        => 'SOUTH UBIAN'
            ],
            [
                'province_id' => 75,
                'name'        => 'TANDUBAS'
            ],
            [
                'province_id' => 75,
                'name'        => 'TURTLE ISLANDS'
            ],
            [
                'province_id' => 76,
                'name'        => 'BANGUED'
            ],
            [
                'province_id' => 76,
                'name'        => 'BOLINEY'
            ],
            [
                'province_id' => 76,
                'name'        => 'BUCAY'
            ],
            [
                'province_id' => 76,
                'name'        => 'BUCLOC'
            ],
            [
                'province_id' => 76,
                'name'        => 'DAGUIOMAN'
            ],
            [
                'province_id' => 76,
                'name'        => 'DANGLAS'
            ],
            [
                'province_id' => 76,
                'name'        => 'DOLORES'
            ],
            [
                'province_id' => 76,
                'name'        => 'LA PAZ'
            ],
            [
                'province_id' => 76,
                'name'        => 'LACUB'
            ],
            [
                'province_id' => 76,
                'name'        => 'LAGANGILANG'
            ],
            [
                'province_id' => 76,
                'name'        => 'LAGAYAN'
            ],
            [
                'province_id' => 76,
                'name'        => 'LANGIDEN'
            ],
            [
                'province_id' => 76,
                'name'        => 'LICUAN-BAAY (LICUAN)'
            ],
            [
                'province_id' => 76,
                'name'        => 'LUBA'
            ],
            [
                'province_id' => 76,
                'name'        => 'MALIBCONG'
            ],
            [
                'province_id' => 76,
                'name'        => 'MANABO'
            ],
            [
                'province_id' => 76,
                'name'        => 'PEÑARRUBIA'
            ],
            [
                'province_id' => 76,
                'name'        => 'PIDIGAN'
            ],
            [
                'province_id' => 76,
                'name'        => 'PILAR'
            ],
            [
                'province_id' => 76,
                'name'        => 'SALLAPADAN'
            ],
            [
                'province_id' => 76,
                'name'        => 'SAN ISIDRO'
            ],
            [
                'province_id' => 76,
                'name'        => 'SAN JUAN'
            ],
            [
                'province_id' => 76,
                'name'        => 'SAN QUINTIN'
            ],
            [
                'province_id' => 76,
                'name'        => 'TAYUM'
            ],
            [
                'province_id' => 76,
                'name'        => 'TINEG'
            ],
            [
                'province_id' => 76,
                'name'        => 'TUBO'
            ],
            [
                'province_id' => 76,
                'name'        => 'VILLAVICIOSA'
            ],
            [
                'province_id' => 77,
                'name'        => 'CALANASAN (BAYAG)'
            ],
            [
                'province_id' => 77,
                'name'        => 'CONNER'
            ],
            [
                'province_id' => 77,
                'name'        => 'FLORA'
            ],
            [
                'province_id' => 77,
                'name'        => 'KABUGAO'
            ],
            [
                'province_id' => 77,
                'name'        => 'LUNA'
            ],
            [
                'province_id' => 77,
                'name'        => 'PUDTOL'
            ],
            [
                'province_id' => 77,
                'name'        => 'SANTA MARCELA'
            ],
            [
                'province_id' => 78,
                'name'        => 'ATOK'
            ],
            [
                'province_id' => 78,
                'name'        => 'BAGUIO CITY'
            ],
            [
                'province_id' => 78,
                'name'        => 'BAKUN'
            ],
            [
                'province_id' => 78,
                'name'        => 'BOKOD'
            ],
            [
                'province_id' => 78,
                'name'        => 'BUGUIAS'
            ],
            [
                'province_id' => 78,
                'name'        => 'ITOGON'
            ],
            [
                'province_id' => 78,
                'name'        => 'KABAYAN'
            ],
            [
                'province_id' => 78,
                'name'        => 'KAPANGAN'
            ],
            [
                'province_id' => 78,
                'name'        => 'KIBUNGAN'
            ],
            [
                'province_id' => 78,
                'name'        => 'LA TRINIDAD'
            ],
            [
                'province_id' => 78,
                'name'        => 'MANKAYAN'
            ],
            [
                'province_id' => 78,
                'name'        => 'SABLAN'
            ],
            [
                'province_id' => 78,
                'name'        => 'TUBA'
            ],
            [
                'province_id' => 78,
                'name'        => 'TUBLAY'
            ],
            [
                'province_id' => 79,
                'name'        => 'AGUINALDO'
            ],
            [
                'province_id' => 79,
                'name'        => 'ALFONSO LISTA (POTIA)'
            ],
            [
                'province_id' => 79,
                'name'        => 'ASIPULO'
            ],
            [
                'province_id' => 79,
                'name'        => 'BANAUE'
            ],
            [
                'province_id' => 79,
                'name'        => 'HINGYON'
            ],
            [
                'province_id' => 79,
                'name'        => 'HUNGDUAN'
            ],
            [
                'province_id' => 79,
                'name'        => 'KIANGAN'
            ],
            [
                'province_id' => 79,
                'name'        => 'LAGAWE'
            ],
            [
                'province_id' => 79,
                'name'        => 'LAMUT'
            ],
            [
                'province_id' => 79,
                'name'        => 'MAYOYAO'
            ],
            [
                'province_id' => 79,
                'name'        => 'TINOC'
            ],
            [
                'province_id' => 80,
                'name'        => 'BALBALAN'
            ],
            [
                'province_id' => 80,
                'name'        => 'LUBUAGAN'
            ],
            [
                'province_id' => 80,
                'name'        => 'PASIL'
            ],
            [
                'province_id' => 80,
                'name'        => 'PINUKPUK'
            ],
            [
                'province_id' => 80,
                'name'        => 'RIZAL (LIWAN)'
            ],
            [
                'province_id' => 80,
                'name'        => 'TABUK CITY'
            ],
            [
                'province_id' => 80,
                'name'        => 'TANUDAN'
            ],
            [
                'province_id' => 80,
                'name'        => 'TINGLAYAN'
            ],
            [
                'province_id' => 81,
                'name'        => 'BARLIG'
            ],
            [
                'province_id' => 81,
                'name'        => 'BAUKO'
            ],
            [
                'province_id' => 81,
                'name'        => 'BESAO'
            ],
            [
                'province_id' => 81,
                'name'        => 'BONTOC'
            ],
            [
                'province_id' => 81,
                'name'        => 'NATONIN'
            ],
            [
                'province_id' => 81,
                'name'        => 'PARACELIS'
            ],
            [
                'province_id' => 81,
                'name'        => 'SABANGAN'
            ],
            [
                'province_id' => 81,
                'name'        => 'SADANGA'
            ],
            [
                'province_id' => 81,
                'name'        => 'SAGADA'
            ],
            [
                'province_id' => 81,
                'name'        => 'TADIAN'
            ],
            [
                'province_id' => 82,
                'name'        => 'CITY OF LAS PIÑAS'
            ],
            [
                'province_id' => 82,
                'name'        => 'CITY OF MAKATI'
            ],
            [
                'province_id' => 82,
                'name'        => 'CITY OF MUNTINLUPA'
            ],
            [
                'province_id' => 82,
                'name'        => 'CITY OF PARAÑAQUE'
            ],
            [
                'province_id' => 82,
                'name'        => 'PASAY CITY'
            ],
            [
                'province_id' => 83,
                'name'        => 'BINONDO'
            ],
            [
                'province_id' => 83,
                'name'        => 'ERMITA'
            ],
            [
                'province_id' => 83,
                'name'        => 'INTRAMUROS'
            ],
            [
                'province_id' => 83,
                'name'        => 'MALATE'
            ],
            [
                'province_id' => 83,
                'name'        => 'PACO'
            ],
            [
                'province_id' => 83,
                'name'        => 'PANDACAN'
            ],
            [
                'province_id' => 83,
                'name'        => 'PORT AREA'
            ],
            [
                'province_id' => 83,
                'name'        => 'QUIAPO'
            ],
            [
                'province_id' => 83,
                'name'        => 'SAMPALOC'
            ],
            [
                'province_id' => 83,
                'name'        => 'SAN MIGUEL'
            ],
            [
                'province_id' => 83,
                'name'        => 'SAN NICOLAS'
            ],
            [
                'province_id' => 83,
                'name'        => 'SANTA ANA'
            ],
            [
                'province_id' => 83,
                'name'        => 'SANTA CRUZ'
            ],
            [
                'province_id' => 83,
                'name'        => 'TONDO'
            ],
            [
                'province_id' => 84,
                'name'        => 'CITY OF MANDALUYONG'
            ],
            [
                'province_id' => 84,
                'name'        => 'CITY OF MARIKINA'
            ],
            [
                'province_id' => 84,
                'name'        => 'CITY OF PASIG'
            ],
            [
                'province_id' => 84,
                'name'        => 'QUEZON CITY'
            ],
            [
                'province_id' => 84,
                'name'        => 'SAN JUAN CITY'
            ],
            [
                'province_id' => 85,
                'name'        => 'CALOOCAN CITY'
            ],
            [
                'province_id' => 85,
                'name'        => 'CITY OF VALENZUELA'
            ],
            [
                'province_id' => 85,
                'name'        => 'MALABON CITY'
            ],
            [
                'province_id' => 85,
                'name'        => 'NAVOTAS CITY'
            ],
            [
                'province_id' => 86,
                'name'        => 'PATEROS'
            ],
            [
                'province_id' => 86,
                'name'        => 'TAGUIG'
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
        Schema::dropIfExists('ph_muncities');
    }
}
