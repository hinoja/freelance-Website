<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>A simple, clean, and responsive HTML invoice template</title>

    <style>
    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        padding-bottom: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }

    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }

    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }

    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }

    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }

    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }

    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }

    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
        text-align: center;
    }

    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }

    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
        text-align: left;
    }

    .invoice-box table tr.item.last td {
        border-bottom: none;
    }

    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }

    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }

        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }

    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }

    .rtl table {
        text-align: right;
    }

    .rtl table tr td:nth-child(2) {
        text-align: left;
    }
    </style>
</head>

<body style="margin-bottom: 20px;">
    <div class="invoice-box" style="margin-bottom: 0px;">
        <table cellpadding="0" cellspacing="0" style="margin-bottom: 0px;">
            <tr class="top">
                <td colspan="4">
                    <table>
                        <tr>
                            <td class="title">
                                <h2>
                                    <img src="{{ public_path("Assets/images/logo.png") }}" alt="" style="width: 100%; max-width: 600px; height: auto; margin: auto; display: block;">
                                </h2>
                            </td>


                            <td class="heading" >

                                Date : <strong>{{ now()->format('m d,Y ') }}</strong> <br>
                                Hour : <strong>{{ now()->format('H: i: s ') }}</strong>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                    <td class="title" colspan="4"> <h2 style="text-align: center;margin:auto;">Freelance Appliers</h2></td>
            </tr>
            <tr> <td class="title" colspan="4">  </td>
            </tr>
            <tr class="information">
                <td colspan="4">
                    <table>

                        <tr>
                            <td >
                               Job's name :  <strong style="color:rgb(10, 145, 10)">{{ $job->title }}</strong><br>

                            </td>

                            {{-- <td style="color: green">
                                <strong>{{ $job->customer->user->name }}</strong> <br>
                                <a href="mailto:{{ $job->customer->user->email }}">{{ $job->customer->user->email }}</a>
                            </td> --}}
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="heading" style="width: 100%" >
                <td>N°</td>
                <td>
                    Freelance's name
                </td>

                <td>
                    Freelance's email
                </td>
            </tr>
            @foreach ($job->freelances  as  $freelance)

                <tr class="details" style="width: 100%">
                    <td style="width: 20%;text-align: center;">{{ $loop->index }}</td>
                    <td style="text-align: center;">
                        {{ $freelance->user->name }}
                    </td>

                    <td style="text-align: center;">
                        <a href="mailto:{{ $freelance->user->emal }}" target="_blank">{{ $freelance->user->email }}</a>
                    </td>
                </tr>
            @endforeach
            <tr>
                <td colspan="4">
                     <div style="text-align:center;margin-bottom: 0px;padding-bottom:0px;width:100%;backgroud:rgb(71, 67, 67);height:50px;">
                         <p style="text-align:center;color:black;">Copyright@JanohiCorporation at {{ now()->format('Y') }}</p>

                    </div></td>
            </tr>


        </table>
        <br> <br>



    </div>


</body>
</html>
