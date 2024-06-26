<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('role_user', function (Blueprint $table) {
            $table->unsignedInteger('user_id');
            $table->foreign('user_id', 'user_id_fk_1156456')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedInteger('role_id');
            $table->foreign('role_id', 'role_id_fk_1156456')->references('id')->on('roles')->onDelete('cascade');
        });

    }
};
