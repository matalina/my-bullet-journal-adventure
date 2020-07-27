<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialTokens extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_tokens', function (Blueprint $table) {
            $table->id();
            
            $table->string('type'); // twitter, github, facebook, google
            $table->string('email');
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->text('token');
            $table->text('secret')->nullable();
            $table->text('refresh')->nullable();
            $table->string('expires')->nullable();
            
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
        Schema::dropIfExists('social_tokens');
    }
}
