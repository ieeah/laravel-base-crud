<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Comic;

class CreateComicsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comics', function (Blueprint $table) {
			$table->id();
			$table->string('title', 100);
			$table->text('description');
			$table->string('thumb');
			$table->float('price', 10, 2);
			$table->string('series');
			$table->date('sale_date');
			$table->string('type', 30);
			$table->string('slug');
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
		Schema::dropIfExists('comics');
	}
}
