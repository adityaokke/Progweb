<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en"> 
	<head> 
		<title>Textshortening and ellipsis with only CSS</title>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" /> 
 
		<style type="text/css">
			p {
				width: 220px;
				line-height: 18px;
				height: 18px;
				overflow: hidden;
			}
			p span.shorten{
				display: block;
				height: auto;
				padding-right: 20px;
 
				/*
					NOTE: The image is supposed to contain a number of "rows"
					stacked on top of each other. All but the last would
					contain an ellipsis. The row height must match the height
					of the parent element, in this case 18 pixels.
 
					Like this:
 
					+---+
					|...|
					|...|
					|...|
					|...|
					|...|
					|...|
					|...|
					|   | - No ellipsis on the last row.
					+---+
					
				*/
				background: url(ellipsis.gif) no-repeat right bottom;
			}
		</style>
 
	</head> 
	
	<body>
 
 
 
		<p><span class="shorten">This text is shortened to fit in a limited space.</span></p>
		<p><span class="shorten">The technique used is very handy, since it won't cut your words in half randomly.</span></p>
		<p><span class="shorten">It also doesn't need any scripting, server or client-side.</span></p>
		<p><span class="shorten">Short line.</span></p>
 


<?php
$lowestYear = 1980;
$highestYear = 2010;
?>

Month:
<select name="month">
<?php foreach(range(1,12) as $month): ?> 
<option value="<?php echo $month;?>"><?php echo date("F",strtotime("0000-$month"));?></option>
<?php endforeach ?>
</select>


Day:
<select name="day">
<?php foreach(range(1,31)as $day): ?>
<option value="<?php echo $day;?>"><?php echo $day;?></option> 
<?php endforeach ?>
</select>


Year:
<select name="year">
<?php foreach (range($lowestYear,$highestYear) as $year):?>
<option value="<?php echo $year;?>"><?php echo $year;?></option>
<?php endforeach?>
</select>

Hour:
<select name="hour">
<?php foreach (range(0,23) as $hour):?>
<option value="<?php echo $hour;?>"><?php echo $hour;?></option>
<?php endforeach?>
</select>

Minute:
<select name="minute">
<?php foreach (range(0,50) as $minute):?>
<option value="<?php echo $minute;?>"><?php echo $minute;?></option>
<?php endforeach?>
</select> 


	</body>
</html>

