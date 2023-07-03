<!DOCTYPE html>
<html lang="en">

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />

    <style type="text/css">
        a:hover {
            text-decoration: none !important;
        }

        .header h1 {
            color: #fff !important;
            font: normal 33px Georgia, serif;
            margin: 0;
            padding: 0;
            line-height: 33px;
        }

        .header p {
            color: #dfa575;
            font: normal 11px Georgia, serif;
            margin: 0;
            padding: 0;
            line-height: 11px;
            letter-spacing: 2px
        }

        .content h2 {
            font-weight: normal;
            margin: 0;
            padding: 0;
            font-style: italic;
            line-height: 30px;
            font-size: 30px;
            font-family: Georgia, serif;
        }

        .content p {
            color: #767676;
            font-weight: normal;
            margin: 0;
            padding: 0;
            line-height: 20px;
            font-size: 11px;
            font-family: Georgia, serif;
        }

        .content a {
            color: #d18648;
            text-decoration: none;
        }

        .footer p {
            padding: 0;
            font-size: 11px;
            color: #fff;
            margin: 0;
            font-family: Georgia, serif;
        }

        .footer a {
            color: #f7a766;
            text-decoration: none;
        }

        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
            margin: 20px 0;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            background-color: #04AA6D;
            color: white;
        }

        #customers td {
            height: 50px;
        }

        .remark-data {
            width: 13%;
            font-size: 14px;
        }

        .remark-td {
            color: #197874;
        }

        .serial-data {
            width: 3%;
            font-size: 14px;
        }

        body {
            margin: 0;
            padding: 0;
            background: #bccdd9;
        }

        .main-td {
            margin: 0;
            padding: 0;
            padding: 35px 0;
        }

        .main-font {
            font-family: Georgia, serif;
        }

        .main-heading {
            color: #fff !important;
            font: normal 33px Georgia, serif;
            margin: 0;
            padding: 0;
            line-height: 33px;
        }

        .header-td {
            font-size: 1px;
            height: 5px;
            line-height: 1px;
        }

        .body-table {
            background: #fff;
        }

        .body-td1 {
            font-size: 0px;
        }

        .body-td2 {
            background: #fff;
            padding: 0 0 10px;
        }

        .body-table2 {
            margin: 0;
            padding: 0 50px;
        }

        .body-td3 {
            padding: 0;
            margin: 0;
        }

        .body-table3 {
            color: #717171;
            font: normal 11px Georgia, serif;
            margin: 0;
            margin-bottom: 20px;
            padding: 0;
            border: 0;
        }

        .body-td4 {
            padding: 20px 20px 5px 20px;
        }

        .body-h2 {
            color: #04b2bb !important;
            text-align: center;
            margin: 5px 0 15px 0 !important;
        }

        .body-td5 {
            padding: 15px 0 15px;
        }

        .body-td6 {
            background-color: #ffffff;
        }

        .body-img {
            padding-bottom: 15px;
            padding-left: 15px;
        }

        .body-desc {
            font-size: 19px;
            line-height: 1.8;
        }

        .details {
            background: #fff;
            font-family: Georgia, serif;
        }

        .footer-table {
            line-height: 10px;
            background-color: #698291;
            border: 0;
            text-align: center;
        }

        .footer-td {
            padding: 15px 0 10px;
            font-size: 11px;
            color: #fff;
            margin: 0;
            line-height: 1.2;
            background-color: #698291;
            text-align: center;
        }

        .footer-p {
            padding: 0;
            font-size: 14px !important;
            color: #fff;
            margin: 0 0 8px 0;
        }

        .footer-span {
            color: #f7a766;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <table align="center" width="100%">
        <tr>
            <td class="main-td" align="center">

                <!-- header-->
                <table class="header" class="main-font" width="95%">
                    <tr>
                        <td bgcolor="#698291" height="115" align="center">
                            <h1 class="main-heading">
                                <span label="Title">Admission Request</span>
                            </h1>
                        </td>
                    </tr>
                    <tr>
                        <td class="header-td" height="5">&nbsp;</td>
                    </tr>
                </table>

                <!-- body -->
                <table class="body-table main-font" width="95%">
                    <tr>
                        <td class="body-td1" width="14">&nbsp;</td>

                        <td class="content" class="body-td2 main-font" width="95%" valign="top">
                            <table class="body-table2" width="100%">
                                <div>
                                    <tr>
                                        <td class="body-td3" valign="top">
                                            <table class="body-table3" width="100%">
                                                <tr>
                                                    <td class="body-td4">
                                                        <h2 class="body-h2">
                                                            <span label="Title">{{ $course }}</span>
                                                        </h2>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="body-td5" valign="top">

                                                        <div class="body-desc" label="Description">
                                                            <div class="details">
                                                                Name: {{ $first_name }} {{ $middle_name }} {{ $last_name }}
                                                            </div>

                                                            <div class="details">
                                                                Email: {{ $email }}
                                                            </div>

                                                            <div class="details">
                                                                Phone: <a href="tel:{{ $phone }}">{{ $phone }}</a>
                                                            </div>

                                                            <div class="details">
                                                                Gender: {{ $gender }}
                                                            </div>

                                                            <div class="details">
                                                                Date of Birth: {{ $dob }}
                                                            </div>

                                                            <div class="details">
                                                                Blood Group: {{ $blood }}
                                                            </div>

                                                            <div class="details">
                                                                Religion: {{ $religion }}
                                                            </div>

                                                            <div class="details">
                                                                Caste: {{ $caste }}
                                                            </div>

                                                            <div class="details">
                                                                Mother Tongue: {{ $tongue }}
                                                            </div>

                                                            <div class="details">
                                                                Aadhaar No: {{ $aadhaar }}
                                                            </div>

                                                            <div class="details">
                                                                Activities: {{ $activity }}
                                                            </div>

                                                            <div class="details">
                                                                Physically Disabled: {{ $is_disable }}
                                                            </div>

                                                            <div class="details">
                                                                Vill / City: {{ $vill }}
                                                            </div>

                                                            <div class="details">
                                                                Post Office: {{ $po }}
                                                            </div>

                                                            <div class="details">
                                                                Police Station: {{ $ps }}
                                                            </div>

                                                            <div class="details">
                                                                District: {{ $dist }}
                                                            </div>

                                                            <div class="details">
                                                                State: {{ $state }}
                                                            </div>

                                                            <div class="details">
                                                                PIN: {{ $pin }}
                                                            </div>

                                                            @if ($addr_same)
                                                                <div class="details">
                                                                    Parmanent Address: {{ $parma_addr }}
                                                                </div>
                                                            @endif

                                                            <div class="details">
                                                                Father's Name: {{ $ft_name }}
                                                            </div>

                                                            <div class="details">
                                                                Father's Occupation: {{ $ft_occup }}
                                                            </div>

                                                            <div class="details">
                                                                Mother's Name: {{ $mt_name }}
                                                            </div>

                                                            <div class="details">
                                                                Mother's Occupation: {{ $mt_occup }}
                                                            </div>

                                                            <div class="details">
                                                                Guardian's Address: {{ $guar_addr }}
                                                            </div>

                                                            <div class="details">
                                                                Guardian's PIN: {{ $guar_pin }}
                                                            </div>

                                                            <div class="details">
                                                                Guardian's Phone: {{ $guar_ph }}
                                                            </div>

                                                            <div class="details">
                                                                Payment Done:
                                                                @if ($is_pay == 1)
                                                                    Yes
                                                                @else
                                                                    No
                                                                @endif
                                                            </div>

                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </div>
                            </table>

                            <table id="customers">
                                <tr>
                                    <th class="serial-data">S.No</th>
                                    <th>Qualification</th>
                                    <th>Board</th>
                                    <th>Subject</th>
                                    <th>Percentage</th>
                                    <th>Passing Year</th>
                                    <th>Remarks</th>
                                </tr>

                                <tr>
                                    <td class="serial-data">1</td>
                                    <td>{{ $quali1 }}</td>
                                    <td>{{ $board1 }}</td>
                                    <td>{{ $sub1 }}</td>
                                    <td>{{ $percent1 }}</td>
                                    <td>{{ $passing1 }}</td>
                                    <td class="remark-data remark-td">{{ $remark1 }}</td>
                                </tr>

                                <tr>
                                    <td class="serial-data">2</td>
                                    <td>{{ $quali2 }}</td>
                                    <td>{{ $board2 }}</td>
                                    <td>{{ $sub2 }}</td>
                                    <td>{{ $percent2 }}</td>
                                    <td>{{ $passing2 }}</td>
                                    <td class="remark-data remark-td">{{ $remark2 }}</td>
                                </tr>

                                <tr>
                                    <td class="serial-data">3</td>
                                    <td>{{ $quali3 }}</td>
                                    <td>{{ $board3 }}</td>
                                    <td>{{ $sub3 }}</td>
                                    <td>{{ $percent3 }}</td>
                                    <td>{{ $passing3 }}</td>
                                    <td class="remark-data remark-td">{{ $remark3 }}</td>
                                </tr>

                                <tr>
                                    <td class="serial-data">4</td>
                                    <td>{{ $quali4 }}</td>
                                    <td>{{ $board4 }}</td>
                                    <td>{{ $sub4 }}</td>
                                    <td>{{ $percent4 }}</td>
                                    <td>{{ $passing4 }}</td>
                                    <td class="remark-data remark-td">{{ $remark4 }}</td>
                                </tr>
                            </table>
                        </td>
                        <td class="body-td6" width="16">&nbsp;</td>
                    </tr>
                </table>

                <!-- footer-->
                <table class="footer-table main-font" width="95%">
                    <tr>
                        <td class="footer-td main-font" valign="top">

                            <p class="footer-p main-font">
                                Having trouble reading this?
                                <span class="footer-span">
                                    View in browser
                                </span>.&ensp;

                                Not interested anymore? <span class="footer-span">
                                    Unsubscribe</span>.
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>
