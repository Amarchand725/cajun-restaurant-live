<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOurmenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ourmenus', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("menu_category_id");
            $table->string("title");
            $table->string("slug");
            $table->string("description")->nullable();
            $table->float("price")->nullable();
            $table->float("discount_price")->nullable();
            $table->boolean('status')->default(1);
            $table->string('deleted_at')->nullable();
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
        Schema::dropIfExists('ourmenus');
    }
}
