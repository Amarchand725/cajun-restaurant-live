<?php 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aboutuses', function (Blueprint $table) {
            $table->id();
            $table->string("title"); $table->string("short_description"); $table->text("about_us")->nullable(); $table->string("week_days_timing")->nullable(); $table->string("saturday_timing")->nullable(); $table->string("sunday_timing")->nullable(); $table->string("call_now")->nullable(); $table->binary("short_description_logo")->nullable(); $table->binary("signature")->nullable();
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
        Schema::dropIfExists('aboutuses');
    }
}
