<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubDepartmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_department', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('sub_depart_id');
            $table->string('subdepart_name_eng',100);
            $table->string('subdepart_name_arab',100);
           $table->integer('department_id')->references('department_id')->on('departments');
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
        Schema::dropIfExists('sub_department');
    }
}
