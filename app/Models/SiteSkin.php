<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\SiteSkin
 *
 * @property int $id
 * @property int $site_type_id
 * @property string $name
 * @property string $icon
 * @property string $style
 * @property-read \App\Models\SiteType $site_type
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SiteSkin whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SiteSkin whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SiteSkin whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SiteSkin whereSiteTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SiteSkin whereStyle($value)
 * @mixin \Eloquent
 */
class SiteSkin extends Model
{
	protected $table = 'wp_siteskins';

	protected $primaryKey = 'id';

	public function site_type() {
		return $this->belongsTo('App\Models\SiteType', 'site_type_id', 'id');
    }
}
