<?php
/*
 * Template/FullCalendar/index.ctp
 * CakePHP Full Calendar Plugin
 *
 * Copyright (c) 2010 Silas Montgomery
 * http://silasmontgomery.com
 *
 * Licensed under MIT
 * http://www.opensource.org/licenses/mit-license.php
 */
?>

<div class="Calendar index">
	<div id="calendar"></div>
</div>
<?= $this->Html->css('/full_calendar/css/fullcalendar.min', ['plugin' => true]); ?>
<?= $this->Html->css('/full_calendar/css/jquery.qtip.min', ['plugin' => true]); ?>
<?= $this->Html->script('https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js') ?>
<?= $this->Html->script('/full_calendar/js/lib/moment.min.js', ['plugin' => true]); ?>
<?= $this->Html->script('/full_calendar/js/fullcalendar.js', ['plugin' => true]); ?>
<?= $this->Html->script('/full_calendar/js/jquery.qtip.min.js', ['plugin' => true]); ?>
<?= $this->Html->script('/full_calendar/js/ready.js', ['plugin' => true]); ?>
