<?php
/**
 * Created by PhpStorm.
 * User: mc
 * Date: 12/4/18
 * Time: 1:26 PM
 */
require_once("SiteSettings.php");

$sitesettings = new SiteSettings();

//Provide your site name here
$sitesettings->SetWebsiteName('mindfulnessforlife.com.au');

//Provide the email address where you want to get notifications
$sitesettings->SetAdminEmail('ccai7@student.monash.edu');

//Provide your database login details here:
//hostname, user name, password, database name and table name
//note that the script will create the table (for example, fgusers in this case)
//by itself on submitting register.ctp.php for the first time
$sitesettings->InitDB(/*hostname*/'130.194.7.82:3306',
    /*username*/'team26',
    /*password*/'Qc52pXYyDuUm',
    /*database name*/'team26_dev',
    /*table name*/'customers');

//For better security. Get a random string from this link: http://tinyurl.com/randstr
// and put it here
$sitesettings->SetRandomKey('qSRcVS6DrTzrPvr');

?>