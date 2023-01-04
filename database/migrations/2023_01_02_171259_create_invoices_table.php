<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('s_name', 100);
            $table->string('s_father', 100);
            $table->string('s_cnic', 100);
            $table->string('s_phone', 100);
            $table->string('s_address', 100);

            $table->string('b_name', 100);
            $table->string('b_father', 100);
            $table->string('b_cnic', 100);
            $table->string('b_phone', 100);
            $table->string('b_address', 100);

            $table->string('reg_no', 100);
            $table->string('chassis_no', 100);
            $table->string('engine_no', 100);
            $table->string('mark', 100);
            $table->string('hp', 100);
            $table->string('model', 100);
            $table->string('kota', 100);
            $table->string('post_office', 100);
            $table->string('reg_book', 100);
            $table->string('reg_file', 100);
            $table->string('file_pg', 100);
            $table->string('no_plate', 100);
            $table->string('car_color', 100);
            $table->float('amount');
            $table->string('amount_words', 100);

            $table->string('w1_name', 100)->nullable();
            $table->string('w1_father', 100)->nullable();
            $table->string('w1_phone', 100)->nullable();
            $table->string('w1_address', 100)->nullable();

            $table->string('w2_name', 100)->nullable();
            $table->string('w2_father', 100)->nullable();
            $table->string('w2_phone', 100)->nullable();
            $table->string('w2_address', 100)->nullable();

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
        Schema::dropIfExists('invoices');
    }
}
