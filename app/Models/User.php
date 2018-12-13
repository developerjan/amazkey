<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * App\Models\User
 *
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @mixin \Eloquent
 * @property int $ID
 * @property string $user_login
 * @property string $user_pass
 * @property string $user_nicename
 * @property string $user_email
 * @property string $user_url
 * @property string $user_registered
 * @property string $user_activation_key
 * @property int $user_status
 * @property string $display_name
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereDisplayName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereUserActivationKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereUserEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereUserLogin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereUserNicename($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereUserPass($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereUserRegistered($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereUserStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereUserUrl($value)
 * @property string|null $remember_token
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereUpdatedAt($value)
 */
class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'wp_users';

    protected $primaryKey = 'ID';

    protected $hidden = ['password'];

	public function meta() {
		return $this->hasMany('App\Models\UserMeta');
    }

	public function delete() {
		$this->meta()->delete();
		parent::delete();
	}

}
