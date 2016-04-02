<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Validator;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password', 'firstname', 'lastname', 'birthday'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password'
    ];

    public $rules = [
        'register' => [
            'username' => 'required|max:50|unique:users,username',
            'password' => 'required',
            'email' => 'required|email|unique:users,email',
            'firstname' => 'required|max:50',
            'lastname' => 'required|max:50',
            'birthday' => 'required|regex:/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/'
        ],
        'login' => [
            'username' => 'required|max:50',
            'password' => 'required'
        ]
    ];

    public $ageRange = [
        [50],
        [36, 50],
        [25, 35],
        [19, 24],
        [13, 18],
        [7, 12]
    ];

    public function validate($data, $context = 'login')
    {
        $validator = Validator::make($data, $this->rules[$context]);
        if ($validator->fails())
            return $validator->messages()->getMessages();
        return true;
    }

    public function ageInRange()
    {
        $birthday = new \DateTime($this->birthday);
        $nowDate = new \DateTime();
        $diffDate = $nowDate->diff($birthday);
        foreach ($this->ageRange as $range) {
            if($diffDate->y >= $range[0]) {
                return $range;
            }
        }

        return null;
    }
}
