<?php

namespace App\Policies;

use App\Categoria;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CategoriaPolicy
{
    use HandlesAuthorization;

  
    /**
     * Determine whether the user can view any categorias.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can create categorias.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->is_admin == "1";
    }

    /**
     * Determine whether the user can update the categoria.
     *
     * @param  \App\User  $user
     * @param  \App\Categoria  $categoria
     * @return mixed
     */
    public function update(User $user, Categoria $categoria)
    {
        return $user->is_admin;
    }

    /**
     * Determine whether the user can delete the categoria.
     *
     * @param  \App\User  $user
     * @param  \App\Categoria  $categoria
     * @return mixed
     */
    public function delete(User $user, Categoria $categoria)
    {
        return $user->is_admin;
    }
    public function nome(User $user){
        return $user->is_admin;
    }
}