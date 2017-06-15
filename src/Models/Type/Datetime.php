<?php

declare(strict_types=1);

namespace Rinvex\Attributable\Models\Type;

use Rinvex\Attributable\Models\Value;

/**
 * Rinvex\Attributable\Models\Type\Datetime.
 *
 * @property int                                                $id
 * @property \Carbon\Carbon                                     $content
 * @property int                                                $attribute_id
 * @property int                                                $entity_id
 * @property string                                             $entity_type
 * @property \Carbon\Carbon                                     $created_at
 * @property \Carbon\Carbon                                     $updated_at
 * @property-read \Rinvex\Attributable\Models\Attribute         $attribute
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $entity
 *
 * @method static \Illuminate\Database\Query\Builder|\Rinvex\Attributable\Models\Type\Datetime whereAttributeId($value)
 * @method static \Illuminate\Database\Query\Builder|\Rinvex\Attributable\Models\Type\Datetime whereContent($value)
 * @method static \Illuminate\Database\Query\Builder|\Rinvex\Attributable\Models\Type\Datetime whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Rinvex\Attributable\Models\Type\Datetime whereEntityId($value)
 * @method static \Illuminate\Database\Query\Builder|\Rinvex\Attributable\Models\Type\Datetime whereEntityType($value)
 * @method static \Illuminate\Database\Query\Builder|\Rinvex\Attributable\Models\Type\Datetime whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Rinvex\Attributable\Models\Type\Datetime whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Datetime extends Value
{
    /**
     * {@inheritdoc}
     */
    protected $dates = ['content'];

    /**
     * Create a new Eloquent model instance.
     *
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->setTable(config('rinvex.attributable.tables.values_datetime'));
    }
}