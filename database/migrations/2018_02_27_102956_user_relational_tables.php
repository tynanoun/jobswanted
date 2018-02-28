<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserRelationalTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('degrees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('short_name')->nullable();
            $table->string('description')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        Schema::create('educations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('school_id')->nullable();
            $table->string('school_name')->nullable();
            $table->integer('from')->nullable();
            $table->integer('to')->nullable();
            $table->integer('degree_id')->nullable();
            $table->string('area')->nullable();
            $table->string('description')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
            $table->foreign('school_id')->references('id')->on('schools')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('degree_id')->references('id')->on('degrees')
                ->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::create('user_education', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('education_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('education_id')->references('id')->on('educations')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->primary(['user_id', 'education_id']);
        });


        // SKILL

        Schema::create('user_skill', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('skill_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('skill_id')->references('id')->on('skills')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->primary(['user_id', 'skill_id']);
        });

        // Additional information

        Schema::create('user_information', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('description', '5000')->nullable();
            $table->boolean('is_active');
            $table->timestamps();
        });

        Schema::create('positions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('short_name')->nullable();
            $table->string('description')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        Schema::create('experiences', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('company_name')->nullable();
            $table->integer('country_id')->unsigned();
            $table->integer('position_id')->unsigned();
            $table->timestamp('from')->nullable();
            $table->timestamp('to')->nullable();
            $table->string('description')->nullable();
            $table->boolean('is_active')->default(true);
            $table->boolean('is_current_job')->default(false);
            $table->timestamps();
        });

        Schema::create('user_experience', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('experience_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('experience_id')->references('id')->on('experiences')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->primary(['user_id', 'experience_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('user_experience');
        Schema::drop('experiences');
        Schema::drop('positions');
        Schema::drop('user_information');
        Schema::drop('user_skill');
        Schema::drop('user_education');
        Schema::drop('educations');
        Schema::drop('degrees');
    }
}
