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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            // $table->string('email')->nullable();
            $table->string('location');
            $table->string('slug');
            $table->longText('description');
            $table->date('start_at');
            $table->date('deadline');
            $table->double('salary');
            $table->string('companyName')->nullable();
            $table->string('companyDescription')->nullable();
            $table->foreignId('customer_id')->constrained();
            $table->foreignId('status_id')->constrained();
            $table->foreignId('state_id')->constrained();
            $table->foreignId('category_id')->constrained();
            $table->SoftDeletes();
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
        Schema::dropIfExists('jobs');
    }
};
