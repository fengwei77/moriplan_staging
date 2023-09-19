<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateSpaceContactInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        if (!Schema::hasTable('space_contact_info')) {
            Schema::create('space_contact_info', function (Blueprint $table) {
                $table->collation = 'utf8mb4_unicode_ci';
                $table->increments('id');
                $table->string('address', 255)->nullable();
                $table->string('tel', 50);
                $table->string('fax', 50);
                $table->string('email', 255);
                $table->string('open_date', 50);
                $table->string('open_time', 50);
                $table->string('file_name', 255)->nullable();
                $table->string('fb_link', 255);
                $table->string('ig_link', 255);
                $table->string('line_link', 255);
                $table->integer('enable')->default(0);
                $table->timestamp('start_date')->default(DB::raw('CURRENT_TIMESTAMP'));
                $table->timestamp('end_date')->default(DB::raw('CURRENT_TIMESTAMP'));
                $table->integer('order_number')->default(0);
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
        Schema::dropIfExists('space_contact_info');
    }
}
