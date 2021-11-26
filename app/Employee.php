<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    // use Notifiable;
    //
    //    /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        protected $fillable = [
            'name', 'email', 'password', 'job', 'status_id', 'birthday', 'organization', 'salary', 'SSO', 'LPH', 'IVSS',
        ];

        /**
         * The attributes that should be hidden for arrays.
         *
         * @var array
         */
        protected $hidden = [
            'password', 'remember_token',
        ];

        /**
         * The attributes that should be cast to native types.
         *
         * @var array
         */
        protected $casts = [
            'email_verified_at' => 'datetime',
        ];
}
