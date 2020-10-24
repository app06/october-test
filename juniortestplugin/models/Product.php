<?php namespace App06\Juniortestplugin\Models;

use Model;

/**
 * Model
 */
class Product extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'app06_juniortestplugin_products';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsTo = [
        'category' => 'App06\Juniortestplugin\Models\Category'
    ];

    public function toArray()
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'price' => $this->price,
            'category' => $this->category->title,
        ];
    }
}
