<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::create('bootcamps', function (Blueprint $table) {
            $table->id();
            $table->string('registered_for');
            $table->string('motivation', 501);
            $table->string('goals', 501);
            $table->string('prior_experience', 501);
            $table->string('proficiency', 501);
            $table->string('expectation', 501);
            $table->text('previous_work')->nullable();
            $table->string('commit_hour', 501);
            $table->string('job_title', 501)->nullable();
            $table->string('work_experience', 501);
            $table->string('education_level', 501);
            $table->string('study_field', 501);
            $table->string('name', 501);
            $table->string('email', 255)->unique(); // Assuming a standard email length
            $table->string('phone', 501);
            $table->string('location', 501);
            $table->timestamps();
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('bootcamps');
    }
};
