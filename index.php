
<!DOCTYPE html>
    <html>
        <head lang="en">
            <meta charset="UTF-8">
            <title>Deployment  Test</title>
        </head>
        <body>
            <h1> It's ALIVE!!!  </h1>
            <div>
                <?php
                    echo "<h1> Hello WORLD</h1><hr><br>";
                    echo " Hello, " . " " . " World " . " ! ";
                    $myname =  "Bla bla";
                    $myage = 111;
                    $mynamesaad = " Saad Alm ";
                    echo " My name is " . $myname . "<br> and I am " . $myage;
                    echo " Hey ";
                    echo " Atashi wa " . $mynamesaad . " desu ";
                ?><br><hr>
                <?php
                    $name = "Edgar";

                if ($name == "Simon") {
                    print "I know you";
                }
                else {
                    print "Teme dari desuka?";
                }
                ?>
            </div>
            <div>
                <?php
                    $numberOfHobbits = 3;
                SWITCH ($numberOfHobbits) {
                    CASE 1:
                        ECHO "1 sad hobbit";
                        BREAK;
                    CASE 2:
                        ECHO "2 happy hobbits";
                        BREAK;
                    CASE 3:
                        ECHO "3 hobbits are a crowd";
                        BREAK;
                    DEFAULT:
                        ECHO "All the hobbits have gone home";
                }
                ?>
            </div>
        </body><hr><br>
    </html>
