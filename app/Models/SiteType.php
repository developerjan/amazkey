<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\SiteType
 *
 * @property int $id
 * @property string $type_name
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\SiteSkin[] $skins
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SiteType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SiteType whereTypeName($value)
 * @mixin \Eloquent
 */
class SiteType extends Model
{

	protected $table = 'wp_sitetypes';

	protected $primaryKey = 'id';

	public function skins() {
		return $this->hasMany('App\Models\SiteSkin');
    }
}
