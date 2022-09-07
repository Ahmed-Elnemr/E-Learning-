<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_course', function (Blueprint $table) {
            $table->id();
            $table->foreignId('admin_id')->constrained('admins','id') ->onUpdate('cascade')
                ->onDelete('cascade');;
            $table->foreignId('course_id')->constrained('courses','id') ->onUpdate('cascade')
                ->onDelete('cascade');;
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
        Schema::dropIfExists('admin_course');
    }
};
