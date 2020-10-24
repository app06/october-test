<?php namespace App06\Juniortestplugin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateApp06JuniortestpluginProducts extends Migration
{
    public function up()
    {
        Schema::create('app06_juniortestplugin_products', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->integer('price')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('app06_juniortestplugin_categories')->onUpdate('cascade')->onDelete('cascade');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('app06_juniortestplugin_products');
    }
}
