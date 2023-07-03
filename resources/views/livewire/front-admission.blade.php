@push('title')
    Admission Form
@endpush

@push('style')
    <style>
        @import url('https://fonts.googleapis.com/css?family=Roboto');

        body {
            font-family: 'Roboto', sans-serif;
        }

        * {
            margin: 0;
            padding: 0;
        }

        i {
            margin-right: 10px;
        }

        /*------------------------*/
        input:focus,
        button:focus,
        .form-control:focus {
            outline: none;
            box-shadow: none;
        }

        .form-control:disabled,
        .form-control[readonly] {
            background-color: #fff;
        }

        .swal2-content {
            font-size: 1.4rem;
        }

        /*----------step-wizard------------*/
        .d-flex {
            display: flex;
        }

        .justify-content-center {
            justify-content: center;
        }

        .align-items-center {
            align-items: center;
        }

        /*---------signup-step-------------*/
        .bg-color {
            background-color: #333;
        }

        .signup-step-container {
            padding: 80px 0px;
            padding-bottom: 60px;
        }

        .wizard .nav-tabs {
            position: relative;
            margin-bottom: 0;
            border-bottom-color: transparent;
        }

        .wizard>div.wizard-inner {
            position: relative;
            margin-bottom: 20px;
            text-align: center;
        }

        .connecting-line {
            height: 2px;
            background: #e0e0e0;
            position: absolute;
            width: 75%;
            margin: 0 auto;
            left: 0;
            right: 0;
            top: 15px;
            z-index: 1;
        }

        .wizard .nav-tabs>li.active>a,
        .wizard .nav-tabs>li.active>a:hover,
        .wizard .nav-tabs>li.active>a:focus {
            color: #555555;
            cursor: default;
            border: 0;
            border-bottom-color: transparent;
        }

        span.round-tab {
            width: 30px;
            height: 30px;
            line-height: 30px;
            display: inline-block;
            border-radius: 50%;
            background: #fff;
            z-index: 2;
            position: absolute;
            left: 0;
            text-align: center;
            font-size: 16px;
            color: #0e214b;
            font-weight: 500;
            border: 1px solid #ddd;
        }

        span.round-tab i {
            color: #555555;
        }

        .wizard li.active span.round-tab {
            background: #0db02b;
            color: #fff;
            border-color: #0db02b;
        }

        .wizard li.active span.round-tab i {
            color: #5bc0de;
        }

        .wizard .nav-tabs>li.active>a i {
            color: #0db02b;
        }

        .wizard .nav-tabs>li {
            width: 25%;
        }

        .wizard li:after {
            content: " ";
            position: absolute;
            left: 46%;
            opacity: 0;
            margin: 0 auto;
            bottom: 0px;
            border: 5px solid transparent;
            border-bottom-color: red;
            transition: 0.1s ease-in-out;
        }

        .wizard .nav-tabs>li a {
            width: 30px;
            height: 30px;
            margin: 20px auto;
            border-radius: 100%;
            padding: 0;
            background-color: transparent;
            position: relative;
            top: 0;
        }

        .wizard .nav-tabs>li a i {
            position: absolute;
            top: -15px;
            font-style: normal;
            font-weight: 400;
            white-space: nowrap;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 12px;
            font-weight: 700;
            color: #000;
        }

        .wizard .nav-tabs>li a:hover {
            background: transparent;
        }

        .wizard .tab-pane {
            position: relative;
            padding-top: 20px;
        }


        .wizard h3 {
            margin-top: 0;
        }

        .prev-step,
        .next-step {
            font-size: 13px;
            padding: 8px 24px;
            border: none;
            border-radius: 4px;
            margin-top: 30px;
            color: white;
        }

        .bg-loading {
            background-color: #5f5f5f !important;
        }

        .reset-btn {
            font-size: 13px;
            padding: 8px 24px;
            border: none;
            border-radius: 4px;
            margin-top: 30px;
            background-color: #dfdfdf;
            color: rgb(207, 23, 9);
        }

        .empty-btn {
            font-size: 13px;
            padding: 4px 17px;
            border: none;
            border-radius: 4px;
            margin-top: 6px;
            background-color: #d42f1296;
            color: white;
        }

        .reset-btn:hover {
            background-color: #d3320ae3;
            color: white;
        }

        .empty-btn:hover {
            background-color: #d3320ae3;
        }

        .next-step {
            background-color: #0db02b;
        }

        .prev-step {
            background-color: #7fb00d;
        }

        .submit-disabled {
            background-color: #d5d0d0 !important;
            color: rgb(112, 112, 112) !important;
        }

        .next-step:hover {
            background-color: #017575;
        }

        .prev-step:hover {
            background-color: #5b5d5e;
        }

        .step-head {
            font-size: 20px;
            text-align: center;
            font-weight: 500;
            margin-bottom: 20px;
        }

        .term-check {
            font-size: 14px;
            font-weight: 400;
        }

        .custom-file {
            position: relative;
            display: inline-block;
            width: 100%;
            height: 40px;
            margin-bottom: 0;
        }

        .custom-file-input {
            position: relative;
            z-index: 2;
            width: 100%;
            height: 40px;
            margin: 0;
            opacity: 0;
        }

        .custom-file-label {
            position: absolute;
            top: 0;
            right: 0;
            left: 0;
            z-index: 1;
            height: 40px;
            padding: .375rem .75rem;
            font-weight: 400;
            line-height: 2;
            color: #495057;
            background-color: #fff;
            border: 1px solid #ced4da;
            border-radius: .25rem;
        }

        .custom-file-label::after {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            z-index: 3;
            display: block;
            height: 38px;
            padding: .375rem .75rem;
            line-height: 2;
            color: #495057;
            content: "Browse";
            background-color: #e9ecef;
            border-left: inherit;
            border-radius: 0 .25rem .25rem 0;
        }

        .footer-link {
            margin-top: 30px;
        }

        .all-info-container {}

        .list-content {
            margin-bottom: 10px;
        }

        .list-content a {
            padding: 10px 15px;
            width: 100%;
            display: inline-block;
            background-color: #edecec;
            position: relative;
            color: #04b0b9;
            font-size: 1.5rem;
            font-weight: 800;
            border-radius: 4px;
            text-decoration: none;
        }

        .list-content a:hover {
            color: #05c46b;
            text-decoration: none;
        }

        .list-content a[aria-expanded="true"] i {
            transform: rotate(180deg);
        }

        .list-content a i {
            text-align: right;
            position: absolute;
            top: 15px;
            right: 10px;
            transition: 0.5s;
        }

        .form-control[disabled],
        .form-control[readonly],
        fieldset[disabled] .form-control {
            background-color: #fdfdfd;
        }

        .table-th {
            font-size: 1.5rem;
        }

        .table-td {
            text-align: center";

        }

        .list-box {
            padding: 10px;
            margin-top: 25px;
        }

        .signup-logo-header .logo_area {
            width: 200px;
        }

        .signup-logo-header .nav>li {
            padding: 0;
        }

        .signup-logo-header .header-flex {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .list-inline li {
            display: inline-block;
        }

        .pull-right {
            float: right;
        }

        /*-----------custom-checkbox-----------*/
        /*----------Custom-Checkbox---------*/
        label {
            font-size: 1.3rem;
            color: #046070
        }

        input[type="text"] {
            font-size: 1.5rem;
        }

        input[type="email"] {
            font-size: 1.5rem;
        }

        input[type="file"] {
            font-size: 1.5rem;
            padding: .4rem .3rem;
        }

        input[type="date"] {
            font-size: 1.5rem;
        }

        input[type="checkbox"] {
            position: relative;
            display: inline-block;
            margin-right: 5px;
        }

        input[type="checkbox"]::before,
        input[type="checkbox"]::after {
            position: absolute;
            content: "";
            display: inline-block;
        }

        input[type="checkbox"]::before {
            height: 16px;
            width: 16px;
            border: 1px solid #999;
            left: 0px;
            top: 0px;
            background-color: #fff;
            border-radius: 2px;
        }

        input[type="checkbox"]::after {
            height: 5px;
            width: 9px;
            left: 4px;
            top: 4px;
        }

        input[type="checkbox"]:checked::after {
            content: "";
            border-left: 1px solid #fff;
            border-bottom: 1px solid #fff;
            transform: rotate(-45deg);
        }

        input[type="checkbox"]:checked::before {
            background-color: #18ba60;
            border-color: #18ba60;
        }

        .requied-input {
            color: #da0b20;
        }

        .error-text {
            font-size: 1.2rem;
            color: #dc3545;
        }

        .error-color {
            color: #d80e22;
        }

        .loading-text {
            color: #00ff0d;
            font-size: 16px;
            font-weight: 600;
        }

        @media (max-width: 767px) {
            .sign-content h3 {
                font-size: 40px;
            }

            .wizard .nav-tabs>li a i {
                display: none;
            }

            .signup-logo-header .navbar-toggle {
                margin: 0;
                margin-top: 8px;
            }

            .signup-logo-header .logo_area {
                margin-top: 0;
            }

            .signup-logo-header .header-flex {
                display: block;
            }
        }
    </style>
@endpush

<section class="signup-step-container">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <div class="wizard">
                    <div class="wizard-inner">
                        <div class="connecting-line"></div>
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="active" role="presentation" wire:ignore.self>
                                <a data-toggle="tab" href="#step1" role="tab" aria-controls="step1" aria-expanded="true">
                                    <span class="round-tab">1 </span>
                                    @if (
                                        $errors->first('course_id') ||
                                            $errors->first('first_name') ||
                                            $errors->first('last_name') ||
                                            $errors->first('email') ||
                                            $errors->first('phone') ||
                                            $errors->first('gender') ||
                                            $errors->first('dob') ||
                                            $errors->first('religion') ||
                                            $errors->first('caste') ||
                                            $errors->first('tongue') ||
                                            $errors->first('aadhaar') ||
                                            $errors->first('is_disable') ||
                                            $errors->first('vill') ||
                                            $errors->first('po') ||
                                            $errors->first('ps') ||
                                            $errors->first('dist') ||
                                            $errors->first('state') ||
                                            $errors->first('parma_addr') ||
                                            $errors->first('pin') ||
                                            $errors->first('ft_name') ||
                                            $errors->first('ft_occup') ||
                                            $errors->first('mt_name') ||
                                            $errors->first('mt_occup') ||
                                            $errors->first('guar_addr') ||
                                            $errors->first('guar_pin') ||
                                            $errors->first('guar_ph'))
                                        <i><span class="error-color">Basic Details</span></i>
                                    @else
                                        <i>Basic Details</i>
                                    @endif
                                </a>
                            </li>
                            <li class="disabled" role="presentation" wire:ignore.self>
                                <a data-toggle="tab" href="#step2" role="tab" aria-controls="step2" aria-expanded="false"><span
                                        class="round-tab">2</span>
                                    @if (
                                        $errors->first('quali1') ||
                                            $errors->first('board1') ||
                                            $errors->first('sub1') ||
                                            $errors->first('percent1') ||
                                            $errors->first('passing1') ||
                                            $errors->first('remark1'))
                                        <i><span class="error-color">Qualification</span></i>
                                    @else
                                        <i>Qualification</i>
                                    @endif
                                </a>
                            </li>
                            <li class="disabled" role="presentation" wire:ignore.self>
                                <a data-toggle="tab" href="#step3" role="tab" aria-controls="step3"><span class="round-tab">3</span>
                                    @if ($errors->first('tc_photo') || $errors->first('is_pay'))
                                        <i><span class="error-color">Payment</span></i>
                                    @else
                                        <i>Payment</i>
                                    @endif
                                </a>
                            </li>
                            <li class="disabled" role="presentation" wire:ignore.self>
                                <a data-toggle="tab" href="#step4" role="tab" aria-controls="step4"><span class="round-tab">4</span>
                                    @if (
                                        $errors->first('usr_photo') ||
                                            $errors->first('sgn_photo') ||
                                            $errors->first('adr_photo') ||
                                            $errors->first('cer_photo') ||
                                            $errors->first('is_accept') ||
                                            $errors->first('m10_photo'))
                                        <i><span class="error-color">Upload Files</span></i>
                                    @else
                                        <i>Upload Files</i>
                                    @endif
                                </a>
                            </li>
                        </ul>
                    </div>

                    <form class="login-box" wire:submit.prevent="admissionSubmit">
                        <!-- steaps start here -->
                        <div class="tab-content" id="main_form">
                            <!-- details step -->
                            <div class="tab-pane active" id="step1" role="tabpanel" wire:ignore.self>

                                <div class="all-info-container">
                                    <!-- course info -->
                                    <div class="list-content">
                                        <a data-toggle="collapse" href="#courseinfo" aria-expanded="false" aria-controls="courseinfo">
                                            @if ($errors->first('course'))
                                                <span class="error-color">Course for Admission</span>
                                            @else
                                                <span>Course for Admission</span>
                                            @endif
                                            <i class="fa fa-chevron-down"></i>
                                        </a>
                                        <div class="collapse" id="courseinfo" wire:ignore.self>
                                            <div class="list-box">

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <select class="form-control" style="height: 3.5rem; font-size: 1.5rem;"
                                                                wire:model="course">
                                                                <option style="font-size: 1.5rem; line-height: 2; color: rgba(0, 0, 0, 0.425)">
                                                                    Select Course
                                                                </option>
                                                                @foreach ($courses as $course)
                                                                    <option value="{{ $course->title }}" style="font-size: 1.5rem; line-height: 2;">
                                                                        {{ $course->title }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                            @error('course')
                                                                <div class="error-text">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <!-- student info -->
                                    <div class="list-content">
                                        <a data-toggle="collapse" href="#stuinfo" aria-expanded="true" aria-controls="stuinfo">
                                            @if ($errors->first('first_name') || $errors->first('last_name') || $errors->first('email') || $errors->first('phone') || $errors->first('gender'))
                                                <span class="error-color">Student Information</span>
                                            @else
                                                <span>Student Information</span>
                                            @endif
                                            <i class="fa fa-chevron-down"></i>
                                        </a>
                                        <div class="show in collapse" id="stuinfo" wire:ignore.self>
                                            <div class="list-box">

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="first_name">First Name <span class="requied-input">*</span></label>
                                                            <input class="form-control" id="first_name" type="text" wire:model.lazy="first_name">
                                                            @error('first_name')
                                                                <div class="error-text">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="middle_name">Middle Name</label>
                                                            <input class="form-control" id="middle_name" type="text" wire:model.lazy="middle_name">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="last_name">Last Name <span class="requied-input">*</span></label>
                                                            <input class="form-control" id="last_name" type="text" wire:model.lazy="last_name">
                                                            @error('last_name')
                                                                <div class="error-text">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="email">Email Address <span class="requied-input">*</span></label>
                                                            <input class="form-control" id="email" type="email" wire:model.lazy="email">
                                                            @error('email')
                                                                <div class="error-text">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="phone">Phone Number <span class="requied-input">*</span></label>
                                                            <input class="form-control" id="phone" type="text" wire:model.lazy="phone">
                                                            @error('phone')
                                                                <div class="error-text">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="gender">Gender <span class="requied-input">*</span></label>
                                                            <select class="form-control" id="gender" style="height: 3.5rem; font-size: 1.5rem;"
                                                                wire:model.lazy="gender">
                                                                <option style="font-size: 1.5rem; line-height: 2; color: rgba(0, 0, 0, 0.425)">
                                                                    Select Gender
                                                                </option>
                                                                <option style="font-size: 1.5rem; line-height: 2;">
                                                                    Male</option>
                                                                <option style="font-size: 1.5rem; line-height: 2;">
                                                                    Female</option>
                                                                <option style="font-size: 1.5rem; line-height: 2;">
                                                                    Other</option>
                                                            </select>
                                                            @error('gender')
                                                                <div class="error-text">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <!-- other info -->
                                    <div class="list-content">
                                        <a data-toggle="collapse" href="#otherinfo" aria-expanded="false" aria-controls="otherinfo">
                                            @if (
                                                $errors->first('dob') ||
                                                    $errors->first('religion') ||
                                                    $errors->first('caste') ||
                                                    $errors->first('tongue') ||
                                                    $errors->first('aadhaar') ||
                                                    $errors->first('is_disable'))
                                                <span class="error-color">Other Information</span>
                                            @else
                                                <span>Other Information</span>
                                            @endif
                                            <i class="fa fa-chevron-down"></i>
                                        </a>
                                        <div class="collapse" id="otherinfo" wire:ignore.self>
                                            <div class="list-box">

                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="dob">Date of Birth <span class="requied-input">*</span></label>
                                                            <input class="form-control" id="dob" type="date" wire:model.lazy="dob">
                                                            @error('dob')
                                                                <div class="error-text">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="blood">Blood Group</label>
                                                            <input class="form-control" id="blood" type="text" wire:model.lazy="blood">
                                                            @error('blood')
                                                                <div class="error-text">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="religion">Religion <span class="requied-input">*</span></label>
                                                            <select class="form-control" id="religion" style="height: 3.5rem; font-size: 1.5rem;"
                                                                wire:model.lazy="religion">
                                                                <option style="font-size: 1.5rem; line-height: 2; color: rgba(0, 0, 0, 0.425)">
                                                                    Select Religion
                                                                </option>
                                                                <option value="Hinduism" style="font-size: 1.5rem; line-height: 2;">
                                                                    Hinduism</option>
                                                                <option value="Islam" style="font-size: 1.5rem; line-height: 2;">
                                                                    Islam</option>
                                                                <option value="Christianity" style="font-size: 1.5rem; line-height: 2;">
                                                                    Christianity</option>
                                                                <option value="Judaism" style="font-size: 1.5rem; line-height: 2;">
                                                                    Judaism</option>
                                                                <option value="Buddhism" style="font-size: 1.5rem; line-height: 2;">
                                                                    Buddhism</option>
                                                                <option value="Jainism" style="font-size: 1.5rem; line-height: 2;">
                                                                    Jainism</option>
                                                                <option value="Sikhism" style="font-size: 1.5rem; line-height: 2;">
                                                                    Sikhism</option>
                                                            </select>
                                                            @error('religion')
                                                                <div class="error-text">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="caste">Caste <span class="requied-input">*</span></label>
                                                            <select class="form-control" id="caste" style="height: 3.5rem; font-size: 1.5rem;"
                                                                wire:model.lazy="caste">
                                                                <option style="font-size: 1.5rem; line-height: 2; color: rgba(0, 0, 0, 0.425)">
                                                                    Select Caste
                                                                </option>
                                                                <option value="General" style="font-size: 1.5rem; line-height: 2;">
                                                                    General</option>
                                                                <option value="OBC-A" style="font-size: 1.5rem; line-height: 2;">
                                                                    OBC-A</option>
                                                                <option value="OBC-B" style="font-size: 1.5rem; line-height: 2;">
                                                                    OBC-B</option>
                                                                <option value="SC" style="font-size: 1.5rem; line-height: 2;">
                                                                    SC</option>
                                                                <option value="ST" style="font-size: 1.5rem; line-height: 2;">
                                                                    ST</option>
                                                            </select>
                                                            @error('caste')
                                                                <div class="error-text">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="tongue">Mother Tongue <span class="requied-input">*</span></label>
                                                            <input class="form-control" id="tongue" type="text" wire:model.lazy="tongue">
                                                            @error('tongue')
                                                                <div class="error-text">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-8">
                                                        <div class="form-group">
                                                            <label for="aadhaar">Aadhaar Card Number <span class="requied-input">*</span></label>
                                                            <input class="form-control" id="aadhaar" type="text" wire:model.lazy="aadhaar">
                                                            @error('aadhaar')
                                                                <div class="error-text">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="is_disable">Physically Disabled <span class="requied-input">*</span></label>
                                                            <select class="form-control" id="is_disable" style="height: 3.5rem; font-size: 1.5rem;"
                                                                wire:model.lazy="is_disable">
                                                                <option style="font-size: 1.5rem; line-height: 2; color: rgba(0, 0, 0, 0.425)">
                                                                    Select
                                                                </option>
                                                                <option value="Yes" style="font-size: 1.5rem; line-height: 2;">
                                                                    Yes</option>
                                                                <option value="No" style="font-size: 1.5rem; line-height: 2;">
                                                                    No</option>
                                                            </select>
                                                            @error('is_disable')
                                                                <div class="error-text">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-8">
                                                        <div class="form-group">
                                                            <label for="activity">Extra-Curricular Activities</label>
                                                            <input class="form-control" id="activity" type="text" wire:model.lazy="activity">
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <!-- address -->
                                    <div class="list-content">
                                        <a data-toggle="collapse" href="#addinfo" aria-expanded="false" aria-controls="addinfo">
                                            @if (
                                                $errors->first('vill') ||
                                                    $errors->first('po') ||
                                                    $errors->first('ps') ||
                                                    $errors->first('dist') ||
                                                    $errors->first('state') ||
                                                    $errors->first('parma_addr') ||
                                                    $errors->first('pin'))
                                                <span class="error-color">Current Address</span>
                                            @else
                                                <span>Current Address</span>
                                            @endif
                                            <i class="fa fa-chevron-down"></i>
                                        </a>
                                        <div class="collapse" id="addinfo" wire:ignore.self>
                                            <div class="list-box">

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="vill">Vill / City <span class="requied-input">*</span></label>
                                                            <input class="form-control" id="vill" type="text" wire:model.lazy="vill">
                                                            @error('vill')
                                                                <div class="error-text">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="po">Post Office <span class="requied-input">*</span></label>
                                                            <input class="form-control" id="po" type="text" wire:model.lazy="po">
                                                            @error('po')
                                                                <div class="error-text">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="ps">Police Station <span class="requied-input">*</span></label>
                                                            <input class="form-control" id="ps" type="text" wire:model.lazy="ps">
                                                            @error('ps')
                                                                <div class="error-text">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="dist">District <span class="requied-input">*</span></label>
                                                            <input class="form-control" id="dist" type="text" wire:model.lazy="dist">
                                                            @error('dist')
                                                                <div class="error-text">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="state">State <span class="requied-input">*</span></label>
                                                            <input class="form-control" id="state" type="text" wire:model.lazy="state">
                                                            @error('state')
                                                                <div class="error-text">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="pin">PIN <span class="requied-input">*</span></label>
                                                            <input class="form-control" id="pin" type="text" wire:model.lazy="pin">
                                                            @error('pin')
                                                                <div class="error-text">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <div class="form-check" style="margin: 20px 0; padding-left:0;">
                                                                <input class="form-check-input" id="addr_same" type="checkbox"
                                                                    wire:model.lazy="addr_same">
                                                                <label class="form-check-label" for="addr_same">
                                                                    Parmanent Address is same as Current Address
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    @if (!$addr_same)
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="parma_addr">Parmanent Address <span
                                                                        class="requied-input">*</span></label>
                                                                <textarea class="form-control" id="parma_addr" style="font-size: 1.5rem; line-height: 2;" rows="3" wire:model.lazy="parma_addr"></textarea>
                                                                @error('parma_addr')
                                                                    <div class="error-text">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    @endif
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <!-- guardian info -->
                                    <div class="list-content">
                                        <a data-toggle="collapse" href="#guarinfo" aria-expanded="false" aria-controls="guarinfo">
                                            @if (
                                                $errors->first('ft_name') ||
                                                    $errors->first('ft_occup') ||
                                                    $errors->first('mt_name') ||
                                                    $errors->first('mt_occup') ||
                                                    $errors->first('guar_addr') ||
                                                    $errors->first('guar_pin') ||
                                                    $errors->first('guar_ph'))
                                                <span class="error-color">Guardian Information</span>
                                            @else
                                                <span>Guardian Information</span>
                                            @endif
                                            <i class="fa fa-chevron-down"></i>
                                        </a>
                                        <div class="collapse" id="guarinfo" wire:ignore.self>
                                            <div class="list-box">

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="ft_name">Father's Name <span class="requied-input">*</span></label>
                                                            <input class="form-control" id="ft_name" type="text" wire:model.lazy="ft_name">
                                                            @error('ft_name')
                                                                <div class="error-text">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="ft_occup">Father's Occupation <span class="requied-input">*</span></label>
                                                            <input class="form-control" id="ft_occup" type="text" wire:model.lazy="ft_occup">
                                                            @error('ft_occup')
                                                                <div class="error-text">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="mt_name">Mother's Name <span class="requied-input">*</span></label>
                                                            <input class="form-control" id="mt_name" type="text" wire:model.lazy="mt_name">
                                                            @error('mt_name')
                                                                <div class="error-text">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="mt_occup">Mother's Occupation <span class="requied-input">*</span></label>
                                                            <input class="form-control" id="mt_occup" type="text" wire:model.lazy="mt_occup">
                                                            @error('mt_occup')
                                                                <div class="error-text">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="guar_addr">Correspondence Address <span
                                                                    class="requied-input">*</span></label>
                                                            <textarea class="form-control" id="guar_addr" style="font-size: 1.5rem; line-height: 2;" rows="3" wire:model.lazy="guar_addr"></textarea>
                                                            @error('guar_addr')
                                                                <div class="error-text">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="guar_pin">PIN <span class="requied-input">*</span></label>
                                                            <input class="form-control" id="guar_pin" type="text" wire:model.lazy="guar_pin">
                                                            @error('guar_pin')
                                                                <div class="error-text">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="guar_ph">Phone Number <span class="requied-input">*</span></label>
                                                            <input class="form-control" id="guar_ph" type="text" wire:model.lazy="guar_ph">
                                                            @error('guar_ph')
                                                                <div class="error-text">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- buttons -->
                                <ul class="list-inline pull-right">
                                    <li>
                                        <button class="default-btn reset-btn" type="button" wire:click.prevent="resetDetail()">Reset</button>
                                    </li>
                                    <li>
                                        <button class="default-btn next-step" type="button">Continue</button>
                                    </li>
                                </ul>

                            </div>

                            <!-- qualification step -->
                            <div class="tab-pane" id="step2" role="tabpanel" wire:ignore.self>

                                <div class="all-info-container">
                                    <!-- qualification 1 -->
                                    <div class="list-content">
                                        <a data-toggle="collapse" href="#qualify1" aria-expanded="true" aria-controls="qualify1">
                                            @if (
                                                $errors->first('quali1') ||
                                                    $errors->first('board1') ||
                                                    $errors->first('sub1') ||
                                                    $errors->first('percent1') ||
                                                    $errors->first('passing1') ||
                                                    $errors->first('remark1'))
                                                <span class="error-color">Qualification 1</span>
                                            @else
                                                <span>Qualification 1</span>
                                            @endif
                                            <span class="requied-input">(Required)</span>
                                            <i class="fa fa-chevron-down"></i>
                                        </a>

                                        <div class="show in collapse" id="qualify1" wire:ignore.self>
                                            <div class="list-box">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="quali1">Qualification <span class="requied-input">*</span></label>
                                                            <input class="form-control" id="quali1" type="text" wire:model.lazy="quali1">
                                                            @error('quali1')
                                                                <div class="error-text">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="board1">School / College <span class="requied-input">*</span></label>
                                                            <input class="form-control" id="board1" type="text" wire:model.lazy="board1">
                                                            @error('board1')
                                                                <div class="error-text">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-7">
                                                        <div class="form-group">
                                                            <label for="sub1">Subject <span class="requied-input">*</span></label>
                                                            <input class="form-control" id="sub1" type="text" wire:model.lazy="sub1">
                                                            @error('sub1')
                                                                <div class="error-text">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="percent1">Percentage <span class="requied-input">*</span></label>
                                                            <input class="form-control" id="percent1" type="text" wire:model.lazy="percent1">
                                                            @error('percent1')
                                                                <div class="error-text">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="passing1">Year of Passing <span class="requied-input">*</span></label>
                                                            <input class="form-control" id="passing1" type="text" wire:model.lazy="passing1">
                                                            @error('passing1')
                                                                <div class="error-text">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="remark1">Remarks</label>
                                                            <textarea class="form-control" id="remark1" style="font-size: 1.5rem;" rows="3" wire:model.lazy="remark1"></textarea>
                                                            @error('remark1')
                                                                <div class="error-text">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <div class="form-check" style="margin: 20px 0; padding-left:0;">
                                                                <input class="form-check-input" id="is_quali2" type="checkbox"
                                                                    wire:model.lazy="is_quali2">
                                                                <label class="form-check-label" for="is_quali2">
                                                                    I have more qualification
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- qualification 2 -->
                                    @if ($is_quali2 == true)
                                        <div class="list-content">
                                            <a data-toggle="collapse" href="#qualify2" aria-expanded="false" aria-controls="qualify2">
                                                Qualification 2 <i class="fa fa-chevron-down"></i>
                                            </a>
                                            <div class="collapse" id="qualify2" wire:ignore.self>
                                                <div class="list-box">
                                                    <div class="row">

                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="quali2">Qualification <span class="requied-input">*</span></label>
                                                                <input class="form-control" id="quali2" type="text"
                                                                    wire:model.lazy="quali2">
                                                                @error('quali2')
                                                                    <div class="error-text">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>


                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="board2">School / College <span class="requied-input">*</span></label>
                                                                <input class="form-control" id="board2" type="text"
                                                                    wire:model.lazy="board2">
                                                                @error('board2')
                                                                    <div class="error-text">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>


                                                        <div class="col-md-7">
                                                            <div class="form-group">
                                                                <label for="sub2">Subject <span class="requied-input">*</span></label>
                                                                <input class="form-control" id="sub2" type="text"
                                                                    wire:model.lazy="sub2">
                                                                @error('sub2')
                                                                    <div class="error-text">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <label for="percent2">Percentage <span class="requied-input">*</span></label>
                                                                <input class="form-control" id="percent2" type="text"
                                                                    wire:model.lazy="percent2">
                                                                @error('percent2')
                                                                    <div class="error-text">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="passing2">Year of Passing <span class="requied-input">*</span></label>
                                                                <input class="form-control" id="passing2" type="text"
                                                                    wire:model.lazy="passing2">
                                                                @error('passing2')
                                                                    <div class="error-text">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="remark2">Remarks</label>
                                                                <textarea class="form-control" id="remark2" style="font-size: 1.5rem;" rows="3" wire:model.lazy="remark2"></textarea>
                                                                @error('remark2')
                                                                    <div class="error-text">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <div class="form-check" style="margin: 20px 0; padding-left:0;">
                                                                    <input class="form-check-input" id="is_quali3" type="checkbox"
                                                                        wire:model.lazy="is_quali3">
                                                                    <label class="form-check-label" for="is_quali3">
                                                                        I have more qualification
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                    <!-- qualification 3 -->
                                    @if ($is_quali2 == true && $is_quali3 == true)
                                        <div class="list-content">
                                            <a data-toggle="collapse" href="#qualify3" aria-expanded="false"
                                                aria-controls="qualify3">Qualification 3
                                                <i class="fa fa-chevron-down"></i></a>
                                            <div class="collapse" id="qualify3" wire:ignore.self>
                                                <div class="list-box">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="quali3">Qualification <span class="requied-input">*</span></label>
                                                                <input class="form-control" id="quali3" type="text"
                                                                    wire:model.lazy="quali3">
                                                                @error('quali3')
                                                                    <div class="error-text">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="board3">School / College <span class="requied-input">*</span></label>
                                                                <input class="form-control" id="board3" type="text"
                                                                    wire:model.lazy="board3">
                                                                @error('board3')
                                                                    <div class="error-text">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-md-7">
                                                            <div class="form-group">
                                                                <label for="sub3">Subject <span class="requied-input">*</span></label>
                                                                <input class="form-control" id="sub3" type="text"
                                                                    wire:model.lazy="sub3">
                                                                @error('sub3')
                                                                    <div class="error-text">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <label for="percent3">Percentage <span class="requied-input">*</span></label>
                                                                <input class="form-control" id="percent3" type="text"
                                                                    wire:model.lazy="percent3">
                                                                @error('percent3')
                                                                    <div class="error-text">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="passing3">Year of Passing <span class="requied-input">*</span></label>
                                                                <input class="form-control" id="passing3" type="text"
                                                                    wire:model.lazy="passing3">
                                                                @error('passing3')
                                                                    <div class="error-text">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="remark3">Remarks</label>
                                                                <textarea class="form-control" id="remark3" style="font-size: 1.5rem;" rows="3" wire:model.lazy="remark3"></textarea>
                                                                @error('remark3')
                                                                    <div class="error-text">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <div class="form-check" style="margin: 20px 0; padding-left:0;">
                                                                    <input class="form-check-input" id="is_quali4" type="checkbox"
                                                                        wire:model.lazy="is_quali4">
                                                                    <label class="form-check-label" for="is_quali4">
                                                                        I have more qualification
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                    <!-- qualification 4 -->
                                    @if ($is_quali2 == true && $is_quali3 == true && $is_quali4 == true)
                                        <div class="list-content">
                                            <a data-toggle="collapse" href="#qualify4" aria-expanded="false"
                                                aria-controls="qualify4">Qualification 4
                                                <i class="fa fa-chevron-down"></i></a>
                                            <div class="collapse" id="qualify4" wire:ignore.self>
                                                <div class="list-box">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="quali4">Qualification <span class="requied-input">*</span></label>
                                                                <input class="form-control" id="quali4" type="text"
                                                                    wire:model.lazy="quali4">
                                                                @error('quali4')
                                                                    <div class="error-text">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="board4">School / College <span class="requied-input">*</span></label>
                                                                <input class="form-control" id="board4" type="text"
                                                                    wire:model.lazy="board4">
                                                                @error('board4')
                                                                    <div class="error-text">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-md-7">
                                                            <div class="form-group">
                                                                <label for="sub4">Subject <span class="requied-input">*</span></label>
                                                                <input class="form-control" id="sub4" type="text"
                                                                    wire:model.lazy="sub4">
                                                                @error('sub4')
                                                                    <div class="error-text">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <label for="percent4">Percentage <span class="requied-input">*</span></label>
                                                                <input class="form-control" id="percent4" type="text"
                                                                    wire:model.lazy="percent4">
                                                                @error('percent4')
                                                                    <div class="error-text">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="passing4">Year of Passing <span class="requied-input">*</span></label>
                                                                <input class="form-control" id="passing4" type="text"
                                                                    wire:model.lazy="passing4">
                                                                @error('passing4')
                                                                    <div class="error-text">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="remark4">Remarks</label>
                                                                <textarea class="form-control" id="remark4" style="font-size: 1.5rem;" rows="3" wire:model.lazy="remark4"></textarea>
                                                                @error('remark4')
                                                                    <div class="error-text">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>

                                <!-- buttons -->
                                <ul class="list-inline pull-right">
                                    <li>
                                        <button class="default-btn prev-step" type="button">Back</button>
                                    </li>
                                    <li>
                                        <button class="default-btn reset-btn" type="button"
                                            wire:click.prevent="resetQualification()">Reset</button>
                                    </li>
                                    <li>
                                        <button class="default-btn next-step" type="button">Continue</button>
                                    </li>
                                </ul>
                            </div>

                            <!-- payment step -->
                            <div class="tab-pane" id="step3" role="tabpanel" wire:ignore.self>

                                <h4 class="text-center" style="margin-bottom: 50px;">
                                    <a href="#">Click Here to finish your Payment</a>
                                </h4>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="form-check" style="margin: 20px 0;">
                                                <input class="form-check-input" id="is_pay" type="checkbox" wire:model.lazy="is_pay">
                                                <label class="form-check-label" for="is_pay">
                                                    I Want to Pay Now
                                                </label>
                                            </div>
                                            @error('is_pay')
                                                <div class="error-text">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    @if ($is_pay)
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="tc_photo">Transaction Copy <span class="requied-input">*</span></label>
                                                        <input class="form-control" id="tc_photo" type="file" wire:model.lazy="tc_photo">
                                                        <div class="loading-text" wire:loading wire:target="tc_photo">Uploading...</div>
                                                        @error('tc_photo')
                                                            <div class="error-text">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    @if ($tc_photo)
                                                        <div class="my-auto mx-4">
                                                            <div class="m-2">
                                                                <img src="{{ $tc_photo->temporaryUrl() }}" width="80px" />
                                                            </div>
                                                        </div>
                                                        <button class="default-btn empty-btn" type="button"
                                                            wire:click.prevent="resetTc()">Remove</button>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>

                                <!-- buttons -->
                                <ul class="list-inline pull-right">
                                    <li>
                                        <button class="default-btn prev-step" type="button">Back</button>
                                    </li>
                                    <li>
                                        <button class="default-btn reset-btn" type="button" wire:click.prevent="resetPayment()">Reset</button>
                                    </li>
                                    <li>
                                        <button class="default-btn next-step" type="button">Continue</button>
                                    </li>
                                </ul>
                            </div>

                            <!-- upload step -->
                            <div class="tab-pane" id="step4" role="tabpanel" wire:ignore.self>

                                <div class="row">
                                    <div class="col-md-12" style="padding: 10px;">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="usr_photo">Student's Photo <span class="requied-input">*</span></label>
                                                    <input class="form-control" id="usr_photo" type="file" wire:model.lazy="usr_photo">
                                                    <div class="loading-text" wire:loading wire:target="usr_photo">Uploading...</div>
                                                    @error('usr_photo')
                                                        <div class="error-text">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                @if ($usr_photo)
                                                    <div class="my-auto mx-4">
                                                        <div class="m-2">
                                                            <img src="{{ $usr_photo->temporaryUrl() }}" width="80px" />
                                                        </div>
                                                    </div>
                                                    <button class="default-btn empty-btn" type="button"
                                                        wire:click.prevent="resetPhoto()">Remove</button>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12" style="padding: 10px;">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="sgn_photo">Student's Sign <span class="requied-input">*</span></label>
                                                    <input class="form-control" id="sgn_photo" type="file" wire:model.lazy="sgn_photo">
                                                    <div class="loading-text" wire:loading wire:target="sgn_photo">Uploading...</div>
                                                    @error('sgn_photo')
                                                        <div class="error-text">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                @if ($sgn_photo)
                                                    <div class="my-auto mx-4">
                                                        <div class="m-2">
                                                            <img src="{{ $sgn_photo->temporaryUrl() }}" width="80px" />
                                                        </div>
                                                    </div>
                                                    <button class="default-btn empty-btn" type="button"
                                                        wire:click.prevent="resetSign()">Remove</button>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12" style="padding: 10px;">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="adr_photo">Aadhaar Image <span class="requied-input">*</span></label>
                                                    <input class="form-control" id="adr_photo" type="file" wire:model.lazy="adr_photo">
                                                    <div class="loading-text" wire:loading wire:target="adr_photo">Uploading...</div>
                                                    @error('adr_photo')
                                                        <div class="error-text">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                @if ($adr_photo)
                                                    <div class="my-auto mx-4">
                                                        <div class="m-2">
                                                            <img src="{{ $adr_photo->temporaryUrl() }}" width="80px" />
                                                        </div>
                                                    </div>
                                                    <button class="default-btn empty-btn" type="button"
                                                        wire:click.prevent="resetAadhaar()">Remove</button>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    @if ($caste != 'General')
                                        <div class="col-md-12" style="padding: 10px;">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="cer_photo">Caste Certificate <span class="requied-input">*</span></label>
                                                        <input class="form-control" id="cer_photo" type="file" wire:model.lazy="cer_photo">
                                                        <div class="loading-text" wire:loading wire:target="cer_photo">Uploading...</div>
                                                        @error('cer_photo')
                                                            <div class="error-text">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    @if ($cer_photo)
                                                        <div class="my-auto mx-4">
                                                            <div class="m-2">
                                                                <img src="{{ $cer_photo->temporaryUrl() }}" width="80px" />
                                                            </div>
                                                        </div>
                                                        <button class="default-btn empty-btn" type="button"
                                                            wire:click.prevent="resetCaste()">Remove</button>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                    <div class="col-md-12" style="padding: 10px;">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="m10_photo">Class-10 Marksheet <span class="requied-input">*</span></label>
                                                    <input class="form-control" id="m10_photo" type="file" wire:model.lazy="m10_photo">
                                                    <div class="loading-text" wire:loading wire:target="m10_photo">Uploading...</div>
                                                    @error('m10_photo')
                                                        <div class="error-text">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                @if ($m10_photo)
                                                    <div class="my-auto mx-4">
                                                        <div class="m-2">
                                                            <img src="{{ $m10_photo->temporaryUrl() }}" width="80px" />
                                                        </div>
                                                    </div>
                                                    <button class="default-btn empty-btn" type="button"
                                                        wire:click.prevent="resetSheet()">Remove</button>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-check" style="margin: 20px 0;">
                                        <input class="form-check-input" id="is_accept" type="checkbox" wire:model.lazy="is_accept">
                                        <label class="form-check-label" for="is_accept">
                                            I accept the <a href="{{ route('terms.show') }}">Terms</a> and <a
                                                href="{{ route('policy.show') }}">Policy</a>
                                        </label>
                                    </div>
                                    @error('is_accept')
                                        <div class="error-text">{{ $message }}</div>
                                    @enderror
                                </div>

                                @if ($errors->any())
                                    <div>
                                        <h4 class="text-danger text-center">Error Occured</h4>
                                    </div>
                                @endif

                                <!-- buttons -->
                                <ul class="list-inline pull-right">
                                    <li>
                                        <button class="default-btn prev-step" type="button">Back</button>
                                    </li>

                                    <li>
                                        <button class="default-btn next-step {{ $is_accept ? '' : 'submit-disabled' }}" type="submit"
                                            {{ $is_accept ? '' : 'disabled' }} wire:loading.attr="disabled">Submit</button>
                                    </li>
                                </ul>
                            </div>

                            <div class="clearfix"></div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@push('script')
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script>
        // ------------step-wizard-------------
        $(document).ready(function() {
            $('.nav-tabs > li a[title]').tooltip();

            //Wizard
            $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {

                var target = $(e.target);

                if (target.parent().hasClass('disabled')) {
                    return false;
                }
            });

            $(".next-step").click(function(e) {

                var active = $('.wizard .nav-tabs li.active');
                active.next().removeClass('disabled');
                nextTab(active);

            });
            $(".prev-step").click(function(e) {

                var active = $('.wizard .nav-tabs li.active');
                prevTab(active);

            });
        });

        function nextTab(elem) {
            $(elem).next().find('a[data-toggle="tab"]').click();
        }

        function prevTab(elem) {
            $(elem).prev().find('a[data-toggle="tab"]').click();
        }


        $('.nav-tabs').on('click', 'li', function() {
            $('.nav-tabs li.active').removeClass('active');
            $(this).addClass('active');
        });
    </script>

    <script>
        window.addEventListener('added', event => {
            Swal.fire(
                event.detail.message,
                'You will receive a confirmation email from us within 24 hours',
                'success'
            )
        })
    </script>
@endpush
