<?php
/**
 * Created by PhpStorm.
 * User: jokamjohn
 * Date: 2/17/2016
 * Time: 10:49 AM
 */

namespace Kagga\Authorize;


trait Role
{
    /**Get the roles associated with this permission.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles()
    {
        return $this->belongsToMany('App\Role');
    }
}