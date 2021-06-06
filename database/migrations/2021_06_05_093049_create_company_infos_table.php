<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_infos', function (Blueprint $table) {
            $table->id();
            $table->string('name',50)->default('บริษัท เอ็นพีซีโซลูชั่นแอนด์เซอร์วิส จำกัด');
            $table->string('address',250)->default('เลขที่ 105 หมู่ที่ 8 ตำบลเหมืองง่า อำเภอเมือง จังหวัดลำพูน 51000');
            $table->char('vatno',15)->default('0515558000967');
            $table->char('phone',15)->nullable();
            $table->char('fax',15)->nullable();
            $table->string('email',50)->default('contact@npcsolution.com');
            $table->string('workday',50)->default('จันทร์-เสาร์');
            $table->string('worktime',50)->default('08.00-16.00');
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
        Schema::dropIfExists('company_infos');
    }
}
