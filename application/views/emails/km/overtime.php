<?php
/**
 * Email template.You can change the content of this template
 * @copyright  Copyright (c) 2014-2023 Webforx Technology
 * @license      http://opensource.org/licenses/AGPL-3.0 AGPL-3.0
 * @link            https://github.com/bTechnology/jorani
 * @since         0.1.0
 */
?>
<html lang="km">
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
        <meta charset="UTF-8">
    </head>
    <body>
        <h3>{Title}</h3>
        {Firstname} {Lastname} ស្នើសុំថែមមួយម៉ោង។ ខាងក្រោមជាពត៏មានលម្អិត :
        <table border="0">
            <tr>
                <td>កាលបរិច្ឆេទ &nbsp;</td><td>{Date}</td>
            </tr>
            <tr>
                <td>រយៈពេល &nbsp;</td><td>{Duration}</td>
            </tr>
            <tr>
                <td>មូលហេតុ &nbsp;</td><td>{Cause}</td>
            </tr>
        </table>
        <a href="{UrlAccept}">ទទួលយកបាន</a>
        <a href="{UrlReject}">បដិសេធចោល</a>
    </body>
</html>
