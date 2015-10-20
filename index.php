
<!DOCTYPE html>
    <html>
        <head lang="en">
            <meta charset="UTF-8">
            <title>Deployment  Test</title>
        </head>
        <body>
            <h1> It's ALIVE!!! FUU  </h1>
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
                    $numberOfHobbits = 5;
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
            <div>
                <?php
                    $myage2 = 21;
                if (($myage2 >= 16) && ($myage2 == 17)) {
                    print " You are qualify to buy SPECS!";
                }
                ELSEIF (($myage2 >= 18) && ($myage2 <= 20)) {
                    print " You are qualify to buy MUGS! ";
                }
                ELSEIF ($myage2 >= 21) {
                    print " You are qualify to buy Sausages Rollzo ";
                }
                ELSE {
                    print "GO HOME";
                }
                ?>
            </div><br><hr>
            <div><br>
                <?php
                    $wantedgood = "mugs";
                SWITCH ($wantedgood) {
                    CASE 1:
                        IF ($wantedgood = "mugs");
                        print "You have to be 18 to buy mugs";
                        BREAK;
                    CASE 2:
                        IF ($wantedgood = "specs");
                        print "You have to be 16 to buy specs";
                        BREAK;
                    CASE 3:
                        IF ($wantedgood = "Sausages Rolls");
                        print "You have to be over 21 to buy Sausages Rolls";
                        BREAK;
                }
                ?>
            </div>
        </body><hr><br>
    </html>
