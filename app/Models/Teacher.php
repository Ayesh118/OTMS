<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    private static $teacher, $imageUrl;

    public static function newTeacher($request)
    {
        self::$teacher=new Teacher();
        self::$teacher->teacher_category        =$request->teacher_category;
        self::$teacher->teacher_name            =$request->teacher_name;
        self::$teacher->teacher_email           =$request->teacher_email;
        self::$teacher->teacher_password        =$request->teacher_password;
        self::$teacher->teacher_mobile          =$request->teacher_mobile;
        self::$teacher->teacher_address         =$request->teacher_address;
        self::$teacher->teacher_nid             =$request->teacher_nid;
        self::$teacher->teacher_bloodGroup      =$request->teacher_bloodGroup;
        self::$teacher->teacher_dob             =$request->teacher_dob;
        self::$teacher->save();
    }
}
