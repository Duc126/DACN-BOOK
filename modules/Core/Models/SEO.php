<?php
namespace Modules\Core\Models;

use Modules\Booking\Models\Bookable;

class SEO extends Bookable
{
    protected $table    = 'bravo_seo';
    protected $fillable = [
        'seo_index',
        'seo_title',
        'seo_desc',
        'seo_image',
        'seo_share',
    ];

    protected $casts = [
        'seo_share'  => 'array',
    ];

    public function fill(array $attributes)
    {
        if(!empty($attributes)){
            foreach ( $this->fillable as $item ){
                $attributes[$item] = $attributes[$item] ?? null;
            }
        }
        return parent::fill($attributes); // TODO: Change the autogenerated stub
    }

}