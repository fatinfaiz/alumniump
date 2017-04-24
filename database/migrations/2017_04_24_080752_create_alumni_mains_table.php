<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumniMainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumni_mains', function (Blueprint $table) {
            $table->increments('id');
            $table->string('alumni_ic_no',12);
            $table->string('alumni_full_name',50);
            $table->text('alumni_home_address',200);
            $table->string('alumni_position',50);
            $table->string('alumni_company_name',50)->nullable();
            $table->text('alumni_company_address',50)->nullable();
            $table->string('alumni_employment_status');->nullable();
            $table->string('alumni_phone',20)->nullable();
            $table->string('alumni_email_address',50)->nullable();
            $table->string('alumni_ref_no')->nullable;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumni_mains');
    }
}
