<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Profile</title>
</head>
<body>
    <table width="100%" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td style="width:100%;margin:0;padding:0;background-color:#f2f4f6" align="center">
                    <table width="100%" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                                <td style="padding:25px 0;text-align:center">
                                <a href="{{ url('').'/Account_Verification/'.$data['token'] }}" style="display:inline-block;text-decoration:none">
                                    <img src="" style="border:none;height:auto;width:auto;max-width:190px!important">
                                </a>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:100%;margin:0;padding:0;border-top:1px solid #edeff2;border-bottom:1px solid #edeff2;background-color:#fff" width="100%">
                                    <table style="width:auto;max-width:570px;margin:0 auto;padding:0" align="center" width="570" cellpadding="0" cellspacing="0">
                                        <tbody>
                                        <tr>
                                            <td style="font-family:Arial,'Helvetica Neue',Helvetica,sans-serif;padding:35px"><span class="im">  
                                                <h1 style="margin-top:0;color:#2f3133;font-size:19px;font-weight:bold;text-align:left">
                                                    Cảm ơn bạn đã đăng nhập vào My Profile
                                                </h1>
                                                <p style="margin-top:0;color:#74787e;font-size:16px;line-height:1.5em">
                                                <a href='{{ url('').'/Account_Verification/'.$data['token'] }}'>Nhấp vào đây</a> để xác nhận email của bạn
                                                </p>
                                                </span><p style="margin-top:0">
                                                </p>
                                                <p style="margin-top:0;color:#74787e;font-size:16px;line-height:1.5em">
                                                    Trân trọng,<br>My Profile
                                                </p>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table style="width:auto;max-width:570px;margin:0 auto;padding:0;text-align:center" align="center" width="570" cellpadding="0" cellspacing="0">
                                        <tbody>
                                            <tr>
                                                <td style="font-family:Arial,'Helvetica Neue',Helvetica,sans-serif;color:#aeaeae;padding:35px;text-align:center">
                                                    <p style="margin-top:0;color:#74787e;font-size:12px;line-height:1.5em">
                                                        © 2022 bản quyền thuộc Myprofile.info
                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>