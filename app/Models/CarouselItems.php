<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarouselItems extends Model
{
    use HasFactory;

    // way to get data from database
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'carousel_items';

    // getting the primary key
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'carousel_item_id';

    // store the fillables
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'carousel_name',
        'image_path',
        'description',
        'user_id'
    ];
}
