<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBbsTable extends Migration {
    public function up() {
        Schema::create('bbs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->float('price');
            $table->string('image');
            $table->string('category');
            $table->foreignId('user_id')->constrained()
                ->onDelete('cascade');
            $table->timestamps();
            $table->index('created_at');
        });
    }

    public function down() {
            Schema::dropIfExists('bbs');
        }
    }
