<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('bw_job_name');
            $table->string('bw_job_title');
            $table->string('bw_job_description');
            $table->string('bw_job_pskills');
            $table->string('bw_job_sskills');
            $table->string('bw_job_oskills');
            $table->string('bw_job_location');

            $table->string('bw_job_minexp');
            $table->string('bw_job_maxexp');

            $table->string('bw_job_sal');
            $table->string('bw_job_type');
            $table->string('bw_job_wlocation');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
