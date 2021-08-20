<html>
    <head>
        <title>
            Illarion Test Server Script Error Log (TEST_NAME)
        </title>
    </head>
    <body>
        <?php
            echo str_replace("\n", "<br><br>", str_replace("#011", "&emsp;&emsp;", str_replace("#012", "<br>", str_replace(">", "&gt;", str_replace("<", "&lt;", `grep -e "^[^(]*Script (" /var/log/illarion/test-TEST_NAME.log | grep -v "Script (info)" | uniq -c -s22 | tail -500`)))));
        ?>
    </body>
</html>
