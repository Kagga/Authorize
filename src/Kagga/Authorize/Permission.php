<?php
/**
 * Created by PhpStorm.
 * User: jokamjohn
 * Date: 2/17/2016
 * Time: 10:46 AM
 */

namespace Kagga\Authorize;


trait Permission
{
    /**Get the permissions associated with the user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function permissions()
    {
        return $this->belongsToMany('App\Permission');
    }

    /**Assign a permission to a user.
     *
     * @param Permission $permission
     */
    public function givePermissionTo(Permission $permission)
    {
        $this->permissions()->save($permission);
    }

    /**Get the user who owns this role.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function user()
    {
        return $this->belongsToMany('App\User');
    }
}