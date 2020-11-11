<?php

namespace App\Policies;

use App\Produto;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProdutoPolicy
{
    use HandlesAuthorization;

  
    /**
     * Determine whether the user can view any produtos.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can create produtos.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->is_admin == "1";
    }

    /**
     * Determine whether the user can update the produto.
     *
     * @param  \App\User  $user
     * @param  \App\Produto  $produto
     * @return mixed
     */
    public function update(User $user, Produto $produto)
    {
        return $user->is_admin;
    }

    /**
     * Determine whether the user can delete the produto.
     *
     * @param  \App\User  $user
     * @param  \App\Produto  $produto
     * @return mixed
     */
    public function delete(User $user, Produto $produto)
    {
        return $user->is_admin;
    }
    public function nome(User $user){
        return $user->is_admin;
    }
}
