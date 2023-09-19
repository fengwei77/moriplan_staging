<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpaceWorkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('space_work')) {
            Schema::create('space_work', function (Blueprint $table) {
                $table->collation = 'utf8mb4_unicode_ci';
                $table->increments('id');
                $table->string('position', 50)->nullable();
                $table->string('title', 255);
                $table->string('url', 255);
                $table->string('alt_txt', 255);
                $table->string('title_txt', 255);
                $table->string('before_file_name', 255)->nullable();
                $table->string('after_file_name', 255)->nullable();
                $table->integer('enable')->default(0);
                $table->timestamp('start_date')->default(DB::raw('CURRENT_TIMESTAMP'));
                $table->timestamp('end_date')->default(DB::raw('CURRENT_TIMESTAMP'));
                $table->unsignedTinyInteger('order_number');
                $table->softDeletes();
                $table->timestamps();
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
        Schema::table('space_work', function (Blueprint $table) {
            //
        });
    }
}
