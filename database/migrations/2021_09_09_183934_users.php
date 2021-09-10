<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;



Schema::table('users', function (Blueprint $table) {
    $table->enum('role',  ['user','user_nipponia','user_eccity', 'manager', 'admin'])->default('user');
});