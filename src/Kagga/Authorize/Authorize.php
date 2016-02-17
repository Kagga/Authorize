<?php
/**
 * Created by PhpStorm.
 * User: jokamjohn
 * Date: 2/17/2016
 * Time: 1:47 AM
 */

namespace Kagga\Authorize;


trait Authorize
{

    /**Check if the $role is a string or object. if string query for the role
     * in the database. If not check whether the role exists within the role collection.
     *
     * @param $role
     * @return bool
     */
    public function hasRole($role)
    {
        if (is_string($role)) {

            return $this->roles->contains('name', $role);
        }

        return !!$role->intersect($this->roles)->count();
    }

    /**Assign a role to a user.
     *
     * @param Role $role
     */
    public function assignRole(Role $role)
    {
        $this->roles()->save($role);
    }

    /**Return a list of roles attached to the user.
     *
     * @return array
     */
    public function getRoleListAttribute()
    {
        return $this->roles->lists('id')->toArray();
    }

}