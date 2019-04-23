<?php
/**
 * Created by IntelliJ IDEA.
 * User: rohitsid
 * Date: 23/4/19
 * Time: 6:15 PM
 */

include_once "CronClass.php";

$cronClassObj = new CronClass();
echo $cronClassObj->execute($_GET['ts']);