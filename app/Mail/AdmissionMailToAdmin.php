<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Contracts\Queue\ShouldQueue;

class AdmissionMailToAdmin extends Mailable
{
    use Queueable, SerializesModels;

    protected $course;
    protected $first_name;
    protected $middle_name;
    protected $last_name;
    protected $phone;
    protected $email;
    protected $gender;
    protected $dob;
    protected $blood;
    protected $caste;
    protected $religion;
    protected $tongue;
    protected $aadhaar;
    protected $activity;
    protected $is_disable;
    protected $vill;
    protected $po;
    protected $ps;
    protected $dist;
    protected $state;
    protected $pin;
    protected $addr_same;
    protected $parma_addr;
    protected $ft_name;
    protected $ft_occup;
    protected $mt_name;
    protected $mt_occup;
    protected $guar_addr;
    protected $guar_pin;
    protected $guar_ph;
    protected $quali1;
    protected $board1;
    protected $sub1;
    protected $percent1;
    protected $passing1;
    protected $remark1;
    protected $quali2;
    protected $board2;
    protected $sub2;
    protected $percent2;
    protected $passing2;
    protected $remark2;
    protected $quali3;
    protected $board3;
    protected $sub3;
    protected $percent3;
    protected $passing3;
    protected $remark3;
    protected $quali4;
    protected $board4;
    protected $sub4;
    protected $percent4;
    protected $passing4;
    protected $remark4;
    protected $is_pay;
    protected $tc_photo;
    protected $usr_photo;
    protected $sgn_photo;
    protected $adr_photo;
    protected $cer_photo;
    protected $m10_photo;

    public function __construct($course, $first_name, $middle_name, $last_name, $phone, $email, $gender, $dob, $blood, $caste, $religion, $tongue, $aadhaar, $activity, $is_disable, $vill, $po, $ps, $dist, $state, $pin, $addr_same, $parma_addr, $ft_name, $ft_occup, $mt_name, $mt_occup, $guar_addr, $guar_pin, $guar_ph, $quali1, $board1, $sub1, $percent1, $passing1, $remark1, $quali2, $board2, $sub2, $percent2, $passing2, $remark2, $quali3, $board3, $sub3, $percent3, $passing3, $remark3, $quali4, $board4, $sub4, $percent4, $passing4, $remark4, $is_pay, $tc_photo, $usr_photo, $sgn_photo, $adr_photo, $cer_photo, $m10_photo,)
    {

        $this->course = $course;
        $this->first_name = $first_name;
        $this->middle_name = $middle_name;
        $this->last_name = $last_name;
        $this->phone = $phone;
        $this->email = $email;
        $this->gender = $gender;
        $this->dob = $dob;
        $this->blood = $blood;
        $this->caste = $caste;
        $this->religion = $religion;
        $this->tongue = $tongue;
        $this->aadhaar = $aadhaar;
        $this->activity = $activity;
        $this->is_disable = $is_disable;
        $this->vill = $vill;
        $this->po = $po;
        $this->ps = $ps;
        $this->dist = $dist;
        $this->state = $state;
        $this->pin = $pin;
        $this->addr_same = $addr_same;
        $this->parma_addr = $parma_addr;
        $this->ft_name = $ft_name;
        $this->ft_occup = $ft_occup;
        $this->mt_name = $mt_name;
        $this->mt_occup = $mt_occup;
        $this->guar_addr = $guar_addr;
        $this->guar_pin = $guar_pin;
        $this->guar_ph = $guar_ph;
        $this->quali1 = $quali1;
        $this->board1 = $board1;
        $this->sub1 = $sub1;
        $this->percent1 = $percent1;
        $this->passing1 = $passing1;
        $this->remark1 = $remark1;
        $this->quali2 = $quali2;
        $this->board2 = $board2;
        $this->sub2 = $sub2;
        $this->percent2 = $percent2;
        $this->passing2 = $passing2;
        $this->remark2 = $remark2;
        $this->quali3 = $quali3;
        $this->board3 = $board3;
        $this->sub3 = $sub3;
        $this->percent3 = $percent3;
        $this->passing3 = $passing3;
        $this->remark3 = $remark3;
        $this->quali4 = $quali4;
        $this->board4 = $board4;
        $this->sub4 = $sub4;
        $this->percent4 = $percent4;
        $this->passing4 = $passing4;
        $this->remark4 = $remark4;
        $this->is_pay = $is_pay;
        $this->tc_photo = $tc_photo;
        $this->usr_photo = $usr_photo;
        $this->sgn_photo = $sgn_photo;
        $this->adr_photo = $adr_photo;
        $this->cer_photo = $cer_photo;
        $this->m10_photo = $m10_photo;
    }

    public function envelope()
    {
        return new Envelope(
            subject: 'Admission-Request',
        );
    }

    public function content()
    {
        return new Content(
            view: 'emails.admission-admin',

            with: [
                'course' => $this->course,
                'first_name' => $this->first_name,
                'middle_name' => $this->middle_name,
                'last_name' => $this->last_name,
                'phone' => $this->phone,
                'email' => $this->email,
                'gender' => $this->gender,
                'dob' => $this->dob,
                'blood' => $this->blood,
                'caste' => $this->caste,
                'religion' => $this->religion,
                'tongue' => $this->tongue,
                'aadhaar' => $this->aadhaar,
                'activity' => $this->activity,
                'is_disable' => $this->is_disable,
                'vill' => $this->vill,
                'po' => $this->po,
                'ps' => $this->ps,
                'dist' => $this->dist,
                'state' => $this->state,
                'pin' => $this->pin,
                'addr_same' => $this->addr_same,
                'parma_addr' => $this->parma_addr,
                'ft_name' => $this->ft_name,
                'ft_occup' => $this->ft_occup,
                'mt_name' => $this->mt_name,
                'mt_occup' => $this->mt_occup,
                'guar_addr' => $this->guar_addr,
                'guar_pin' => $this->guar_pin,
                'guar_ph' => $this->guar_ph,
                'quali1' => $this->quali1,
                'board1' => $this->board1,
                'sub1' => $this->sub1,
                'percent1' => $this->percent1,
                'passing1' => $this->passing1,
                'remark1' => $this->remark1,
                'quali2' => $this->quali2,
                'board2' => $this->board2,
                'sub2' => $this->sub2,
                'percent2' => $this->percent2,
                'passing2' => $this->passing2,
                'remark2' => $this->remark2,
                'quali3' => $this->quali3,
                'board3' => $this->board3,
                'sub3' => $this->sub3,
                'percent3' => $this->percent3,
                'passing3' => $this->passing3,
                'remark3' => $this->remark3,
                'quali4' => $this->quali4,
                'board4' => $this->board4,
                'sub4' => $this->sub4,
                'percent4' => $this->percent4,
                'passing4' => $this->passing4,
                'remark4' => $this->remark4,
                'is_pay' => $this->is_pay,
                'tc_photo' => $this->tc_photo,
                'usr_photo' => $this->usr_photo,
                'sgn_photo' => $this->sgn_photo,
                'adr_photo' => $this->adr_photo,
                'cer_photo' => $this->cer_photo,
                'm10_photo' => $this->m10_photo,
            ],
        );
    }

    public function attachments()
    {
        if ($this->caste === 'General') {
            return [
                Attachment::fromPath('storage/' . $this->tc_photo)
                    ->as('transaction.jpg'),
                Attachment::fromPath('storage/' . $this->usr_photo)
                    ->as('photo.jpg'),
                Attachment::fromPath('storage/' . $this->sgn_photo)
                    ->as('sign.jpg'),
                Attachment::fromPath('storage/' . $this->adr_photo)
                    ->as('aadhaar.jpg'),
                Attachment::fromPath('storage/' . $this->m10_photo)
                    ->as('marksheet.jpg'),
            ];
        } else {
            return [
                Attachment::fromPath('storage/' . $this->tc_photo)
                    ->as('transaction.jpg'),
                Attachment::fromPath('storage/' . $this->usr_photo)
                    ->as('photo.jpg'),
                Attachment::fromPath('storage/' . $this->sgn_photo)
                    ->as('sign.jpg'),
                Attachment::fromPath('storage/' . $this->adr_photo)
                    ->as('aadhaar.jpg'),
                Attachment::fromPath('storage/' . $this->cer_photo)
                    ->as('certificate.jpg'),
                Attachment::fromPath('storage/' . $this->m10_photo)
                    ->as('marksheet.jpg'),
            ];
        }
    }
}
