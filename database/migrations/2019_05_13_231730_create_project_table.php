<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('project')) {
            Schema::create('project', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('name');
                $table->integer('amount_worker');
                $table->timestamp('start_at')->nullable();
                $table->timestamp('finish_at')->nullable();
                $table->enum('status',['todo','doing','test','done']);
                $table->timestamps();
                $table->softDeletes();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('project')) {
            Schema::dropIfExists('project');
        }
    }
}
