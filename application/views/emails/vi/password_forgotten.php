<?php
/**
 * Email template.You can change the content of this template
 * @copyright  Copyright (c) 2014-2023 Webforx Technology
 * @license      http://opensource.org/licenses/AGPL-3.0 AGPL-3.0
 * @link            https://github.com/bTechnology/jorani
 * @since         0.4.5
 */
?>
<html lang="vi">
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
        <meta charset="UTF-8">
        <style>
            table {width:50%;margin:5px;border-collapse:collapse;}
            table, th, td {border: 1px solid black;}
            th, td {padding: 20px;}
            h5 {color:red;}
        </style>
    </head>
    <body>
        <h3>{Title}</h3>
        Vui lòng sử dụng những thông tin này <a href="{BaseURL}">để đăng nhập vào hệ thống</a> :
        <table border="0">
            <tr>
                <td>Đăng nhập</td><td>{Login}</td>
            </tr>
            <tr>
                <td>Mật khẩu</td><td>{Password}</td>
            </tr>            
        </table>
        Khi bạn đã kết nối, bạn có thể thay đổi mật khẩu của mình như được giải thích <a href="https://jorani.org/how-to-change-my-password.html" title="Link to documentation" target="_blank">tại đây</a>.
        <hr>
        <h5>*** Đây là tin nhắn được tạo tự động, xin đừng trả lời tin nhắn này. ***</h5>
    </body>
</html>
