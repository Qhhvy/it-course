<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Instructor;
use App\Models\Course;

class Orders extends Model
{
    use HasFactory;
    protected $table = "orders";
    public $timestamps = false;


    public function Course()
    {
        return $this->belongsTo(Course::class, 'course_id', 'id');
    }
    public function Instructor()
    {
        return $this->belongsTo(Instructor::class, 'instructor_id', 'id');
    }
    public function User()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
}
