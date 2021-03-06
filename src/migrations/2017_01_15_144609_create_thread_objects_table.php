<?php

use Cmgmyr\Messenger\Models\Models;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThreadObjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thread_objects', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('thread_id')->unsigned();
            $table->string('object_type');
            $table->integer('object_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('thread_id')->references('id')->on('threads');
            $table->index('object_type', 'object_type_thread_object_index');
            $table->index('object_id', 'object_id_thread_object_index');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop(Models::table('thread_objects'));
    }
}
