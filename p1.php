<html>
    <head></head>
    <body>
    <?php
        $constLength = 200;
        $articleText = 'Nevertheless, beneath the radar, a lot of relationships show considerable variation from the official ideology. In private, there are a great many couples where someone is doing very little of the earning and/or very little of the ironing or dentist-appointment scheduling.';
        $articleLink = 'https://www.theschooloflife.com/thebookoflife/the-fear-of-not-being-able-to-cope-practically-on-our-own/';
        $countSp = 3;
        if (strlen($articleText) > $constLength) {
            /*обрезать строку*/
            $articleText = substr($articleText,0,$constLength).' ...';
            $textMain = $articleText;
            /*в цикле 3ий пробел с конца*/
            for($i = 1; $i <= $countSp+1; ++$i) {
                $textMain = substr($textMain,0,strrpos($textMain,' '));
            }
            /*оставляем 3 слова*/
            $textLnk = substr($articleText,strlen($textMain));
            $articlePreview = "<span>$textMain<a href = $articleLink>$textLnk</a></span>";
        	echo $articlePreview;
        }
    ?>
    </body>
</html>
