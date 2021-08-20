<html>
    <head>
        <title>
            Illarion Test Server Script Log (TEST_NAME)
        </title>
    </head>
    <body>
        <?php
            echo str_replace("\n", "<br><br>", str_replace("#011", "&emsp;&emsp;", str_replace("#012", "<br>", `grep -e "^[^(]*Script (info)" /var/log/illarion/test-TEST_NAME.log | uniq -c -s22 | tail -500`)));
        ?>
    </body>
</html>
