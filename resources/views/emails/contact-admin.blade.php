<!DOCTYPE html>
<html lang="en">

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />

    <style type="text/css">
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

        #Personal {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
            margin: 20px 0;
        }

        #Personal td,
        #Personal th {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        #Personal tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #Personal tr:hover {
            background-color: #ddd;
        }

        #Personal th {
            padding-top: 12px;
            padding-bottom: 12px;
            background-color: #279571;
            color: white;
        }

        #Personal td {
            height: 50px;
        }

        #Otherinfo {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
            margin: 20px 0;
        }

        #Otherinfo td,
        #Otherinfo th {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        #Otherinfo tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #Otherinfo tr:hover {
            background-color: #ddd;
        }

        #Otherinfo th {
            padding-top: 12px;
            padding-bottom: 12px;
            background-color: #0e7a7a;
            color: white;
        }

        #Otherinfo td {
            height: 50px;
        }

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

        .main-font {
            font-family: Georgia, serif;
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

        .body-h2 {
            color: #04b2bb !important;
            text-align: center;
            margin: 30px 0 50px 0 !important;
            font-size: 25px !important;
        }

        .td-font {
            font-size: 15px;
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
                        <td bgcolor="#698291" height="70" align="center">
                            <h1 class="main-font">
                                <span label="Title">Contact Request</span>
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

                            <h2 class="body-h2">
                                <span label="Title">{{ $purpose }}</span>
                            </h2>

                            <table id="Personal">
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                </tr>

                                <tr>
                                    <td class="td-font">{{ $name }}</td>
                                    <td class="td-font">{{ $email }}</td>
                                    <td class="td-font"><a href="tel:{{ $phone }}">{{ $phone }}</a></td>
                                </tr>
                            </table>


                            <table id="Otherinfo">
                                <tr>
                                    <th>Message</th>
                                </tr>

                                <tr>
                                    <td class="remark-data remark-td">{{ $desc }}</td>
                                </tr>
                            </table>

                        </td>
                        <td class="body-td6" width="16">&nbsp;</td>
                    </tr>
                </table>

            </td>
        </tr>
    </table>
</body>

</html>
