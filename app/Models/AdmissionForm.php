<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdmissionForm extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'first_name',
        'middle_name',
        'last_name',
        'phone',
        'email',
        'gender',
        'dob',
        'blood',
        'caste',
        'religion',
        'tongue',
        'aadhaar',
        'activity',
        'is_disable',
        'vill',
        'po',
        'ps',
        'dist',
        'state',
        'pin',
        'addr_same',
        'parma_addr',
        'ft_name',
        'ft_occup',
        'mt_name',
        'mt_occup',
        'guar_addr',
        'guar_pin',
        'guar_ph',
        'quali1',
        'board1',
        'sub1',
        'percent1',
        'passing1',
        'remark1',
        'quali2',
        'board2',
        'sub2',
        'percent2',
        'passing2',
        'remark2',
        'quali3',
        'board3',
        'sub3',
        'percent3',
        'passing3',
        'remark3',
        'quali4',
        'board4',
        'sub4',
        'percent4',
        'passing4',
        'remark4',
        'is_pay',
        'tc_photo',
        'usr_photo',
        'sgn_photo',
        'adr_photo',
        'cer_photo',
        'm10_photo',
        'doc',
    ];

    protected $table = "admission_forms";
}
