<?php
$instant=gettimeofday();
$timenow=$instant["sec"];//Start Time

//timeloop(e.g. for security_save after 30 min)
while (1) { echo "<b></b>";//Useless (only to quickload next
                                    //or same Site when do a switch)
flush();                          //giveout buffer
$instant=gettimeofday();
$timeactual=$instant["sec"]; //get Actual Time in Secs
$flag=(($timeactual>$timenow+$diff)? 1:0);//$diff=switchTime
if ($flag) { what_do_at_switch_Time();//Sec.Save etc.etc.
$timenow=$timeactual; } //Set new Start Time
sleep(5); //Or so...(Important)
}; //End of while-Loop
?>