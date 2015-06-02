<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('content', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('Set Null');
            $table->integer('parent_id')->unaigned();
            // Content Data
            $table->smallInteger('content_type');
            $table->string('title',300);
            $table->string('slug',300);
            $table->text('content_text');
            $table->text('content_text_parsed');
            $table->string('excerpt',500)->nullable();
            // Dates
            $table->timestamp('published_at');
            $table->softDeletes();
			$table->timestamps();
            // Options
            $table->smallInteger('published');              // 0 = No, 1 = Yes, 2 = Moderated
            $table->smallInteger('featured');               // 0 = No, 1 = Yes
            $table->smallInteger('flagged');                // 0 = No, 1 = Yes
            $table->smallInteger('open');                   // 0 = Closed, 1 = Open
            $table->string('reason',255);                   // Status Reason.
		});


        Schema::create('content_types', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('title',300);
            $table->string('slug',300);
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
		Schema::drop('content');
        Schema::drop('content_types');
	}

}
