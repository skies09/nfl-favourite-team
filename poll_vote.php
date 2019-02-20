<?php
$vote = $_REQUEST['vote'];

//This get content of textfile
$filename = "poll_result.txt";
$content = file($filename);

//put content in array

$array = explode("||", $content[0]);
$gbp = $array[0];
$ps = $array[1];
$kcc = $array[2];
$nep = $array[3];
$bb = $array[4];
$cp = $array[5];
$ss = $array[6];
$ic = $array[7];
$ac = $array[8];
$br = $array[9];
$ht = $array[10];
$nos = $array[11];
$pe = $array[12];
$db = $array[13];
$dl = $array[14];
$mv = $array[15];
$nyg = $array[16];
$af = $array[17];
$dc = $array[18];
$jj = $array[19];
$md = $array[20];
$cben = $array[21];
$or = $array[22];
$tbb = $array[23];
$lar = $array[24];
$cbear = $array[25];
$cbrown = $array[26];
$sdc = $array[27];
$sf = $array[28];
$nyj = $array[29];
$wr = $array[30];
$tt = $array[31];

//tally the array

if ($vote == 0) {
  $gbp = $gbp + 1;
}
if ($vote == 1) {
  $ps = $ps + 1;
}
if ($vote == 2) {
  $kcc = $kcc + 1;
}
if ($vote == 3) {
  $nep = $nep + 1;
}
if ($vote == 4) {
  $bb = $bb + 1;
}
if ($vote == 5) {
  $cp = $cp + 1;
}
if ($vote == 6) {
  $ss = $ss + 1;
}
if ($vote == 7) {
  $ic = $ic + 1;
}
if ($vote == 8) {
  $ac = $ac + 1;
}
if ($vote == 9) {
  $br = $br + 1;
}
if ($vote == 10) {
  $ht = $ht + 1;
}
if ($vote == 11) {
  $nos = $nos + 1;
}
if ($vote == 12) {
  $pe = $pe + 1;
}
if ($vote == 13) {
  $db = $db + 1;
}
if ($vote == 14) {
  $dl = $dl + 1;
}
if ($vote == 15) {
  $mv = $mv + 1;
}
if ($vote == 16) {
  $nyg = $nyg + 1;
}
if ($vote == 17) {
  $af = $af + 1;
}
if ($vote == 18) {
  $dc = $dc + 1;
}
if ($vote == 19) {
  $jj = $jj + 1;
}
if ($vote == 20) {
  $md = $md + 1;
}
if ($vote == 21) {
  $cben = $cben + 1;
}
if ($vote == 22) {
  $or = $or + 1;
}
if ($vote == 23) {
  $tbb = $tbb + 1;
}
if ($vote == 24) {
  $lar = $lar + 1;
}
if ($vote == 25) {
  $cbear = $cbear + 1;
}
if ($vote == 26) {
  $cbrown = $cbrown + 1;
}
if ($vote == 27) {
  $sdc = $sdc + 1;
}
if ($vote == 28) {
  $sf = $sf + 1;
}
if ($vote == 29) {
  $nyj = $nyj + 1;
}
if ($vote == 30) {
  $wr = $wr + 1;
}
if ($vote == 31) {
  $tt = $tt + 1;
}
$total=$gbp+$ps+$kcc+$nep+$bb+$cp+$ss+$ic+$ac+$br+$ht+$nos+$pe+$db+$dl+$mv+$nyg+$af+$dc+$jj+$md+$cben+$or+$tbb+$lar+$cbear+$cbrown+$sdc+$sf+$nyj+$wr+$tt;;


//This inserts votes to txt file
$insertvote = $gbp."||".$ps."||".$kcc."||".$nep."||".$bb."||".$cp."||".$ss."||".$ic."||".$ac."||".$br."||".$ht."||".$nos."||".$pe."||".$db."||".$dl."||".$mv."||".$nyg."||".$af."||".$dc."||".$jj."||".$md."||".$cben."||".$or."||".$tbb."||".$lar."||".$cbear."||".$cbrown."||".$sdc."||".$sf."||".$nyj."||".$wr."||".$tt;;
$fp = fopen($filename,"w");
fputs($fp,$insertvote);
fclose($fp);
?>

<!--The results table-->

<h2>Results</h2>
<table>
<tr>
<td>Green Bay Packers:</td>
<td>
<img src="/images/poll.gif"
width='<?php echo(100*round($gbp/($total),2)); ?>'
height='15'>
<?php echo(100*round($gbp/($total),2)); ?>%
</td>
</tr>
<tr>
<td>Pittsburg Steelers:</td>
<td>
<img src="/images/poll.gif"
width='<?php echo(100*round($ps/($total),2)); ?>'
height='15'>
<?php echo(100*round($ps/($total),2)); ?>%
</td>
</tr>
<tr>
<td>Kansas City Chiefs:</td>
<td>
<img src="/images/poll.gif"
width='<?php echo(100*round($kcc/($total),2)); ?>'
height='15'>
<?php echo(100*round($kcc/($total),2)); ?>%
</td>
</tr>
<tr>
<td>New England Patriots:</td>
<td>
<img src="/images/poll.gif"
width='<?php echo(100*round($nep/($total),2)); ?>'
height='15'>
<?php echo(100*round($nep/($total),2)); ?>%
</td>
</tr>
<tr>
<td>Buffalo Bills:</td>
<td>
<img src="/images/poll.gif"
width='<?php echo(100*round($bb/($total),2)); ?>'
height='15'>
<?php echo(100*round($bb/($total),2)); ?>%
</td>
</tr>
<tr>
<td>Carolina Panthers:</td>
<td>
<img src="/images/poll.gif"
width='<?php echo(100*round($cp/($total),2)); ?>'
height='15'>
<?php echo(100*round($cp/($total),2)); ?>%
</td>
</tr>
<tr>
<td>Seattle Seahawks:</td>
<td>
<img src="/images/poll.gif"
width='<?php echo(100*round($ss/($total),2)); ?>'
height='15'>
<?php echo(100*round($ss/($total),2)); ?>%
</td>
</tr>
<tr>
<td>Indianapolis Colts:</td>
<td>
<img src="/images/poll.gif"
width='<?php echo(100*round($ic/($total),2)); ?>'
height='15'>
<?php echo(100*round($ic/($total),2)); ?>%
</td>
</tr>
<tr>
<td>Arizona Cardinals:</td>
<td>
<img src="/images/poll.gif"
width='<?php echo(100*round($ac/($total),2)); ?>'
height='15'>
<?php echo(100*round($ac/($total),2)); ?>%
</td>
</tr>
<tr>
<td>Baltimore Ravens:</td>
<td>
<img src="/images/poll.gif"
width='<?php echo(100*round($br/($total),2)); ?>'
height='15'>
<?php echo(100*round($br/($total),2)); ?>%
</td>
</tr>
<tr>
<td>Houston Texans:</td>
<td>
<img src="/images/poll.gif"
width='<?php echo(100*round($ht/($total),2)); ?>'
height='15'>
<?php echo(100*round($ht/($total),2)); ?>%
</td>
</tr>
<tr>
<td>New Orleans Saints:</td>
<td>
<img src="/images/poll.gif"
width='<?php echo(100*round($nos/($total),2)); ?>'
height='15'>
<?php echo(100*round($nos/($total),2)); ?>%
</td>
</tr>
<tr>
<td>Philadelphia Eagles:</td>
<td>
<img src="/images/poll.gif"
width='<?php echo(100*round($pe/($total),2)); ?>'
height='15'>
<?php echo(100*round($pe/($total),2)); ?>%
</td>
</tr>
<tr>
<td>Denver Broncos:</td>
<td>
<img src="/images/poll.gif"
width='<?php echo(100*round($db/($total),2)); ?>'
height='15'>
<?php echo(100*round($db/($total),2)); ?>%
</td>
</tr>
<tr>
<td>Detroit Lions:</td>
<td>
<img src="/images/poll.gif"
width='<?php echo(100*round($dl/($total),2)); ?>'
height='15'>
<?php echo(100*round($dl/($total),2)); ?>%
</td>
</tr>
<tr>
<td>Minnesota Vikings:</td>
<td>
<img src="/images/poll.gif"
width='<?php echo(100*round($mv/($total),2)); ?>'
height='15'>
<?php echo(100*round($mv/($total),2)); ?>%
</td>
</tr>
<tr>
<td>New York Giants:</td>
<td>
<img src="/images/poll.gif"
width='<?php echo(100*round($nyg/($total),2)); ?>'
height='15'>
<?php echo(100*round($nyg/($total),2)); ?>%
</td>
</tr>
<tr>
<td>Atlanta Falcons:</td>
<td>
<img src="/images/poll.gif"
width='<?php echo(100*round($af/($total),2)); ?>'
height='15'>
<?php echo(100*round($af/($total),2)); ?>%
</td>
</tr>
<tr>
<td>Dallas Cowboys:</td>
<td>
<img src="/images/poll.gif"
width='<?php echo(100*round($dc/($total),2)); ?>'
height='15'>
<?php echo(100*round($dc/($total),2)); ?>%
</td>
</tr>
<tr>
<td>Jacksonville Jaguars:</td>
<td>
<img src="/images/poll.gif"
width='<?php echo(100*round($jj/($total),2)); ?>'
height='15'>
<?php echo(100*round($jj/($total),2)); ?>%
</td>
</tr>
<tr>
<td>Miami Dolphins:</td>
<td>
<img src="/images/poll.gif"
width='<?php echo(100*round($md/($total),2)); ?>'
height='15'>
<?php echo(100*round($md/($total),2)); ?>%
</td>
</tr>
<tr>
<td>Cincinnati Bengals:</td>
<td>
<img src="/images/poll.gif"
width='<?php echo(100*round($cben/($total),2)); ?>'
height='15'>
<?php echo(100*round($cben/($total),2)); ?>%
</td>
</tr>
<tr>
<td>Oakland Raiders:</td>
<td>
<img src="/images/poll.gif"
width='<?php echo(100*round($or/($total),2)); ?>'
height='15'>
<?php echo(100*round($or/($total),2)); ?>%
</td>
</tr>
<tr>
<td>Tampa Bay Buccaneers:</td>
<td>
<img src="/images/poll.gif"
width='<?php echo(100*round($tbb/($total),2)); ?>'
height='15'>
<?php echo(100*round($tbb/($total),2)); ?>%
</td>
</tr>
<tr>
<td>Los Angeles Rams:</td>
<td>
<img src="/images/poll.gif"
width='<?php echo(100*round($lar/($total),2)); ?>'
height='15'>
<?php echo(100*round($lar/($total),2)); ?>%
</td>
</tr>
<tr>
<td>Chicago Bears:</td>
<td>
<img src="/images/poll.gif"
width='<?php echo(100*round($cbear/($total),2)); ?>'
height='15'>
<?php echo(100*round($cbear/($total),2)); ?>%
</td>
</tr>
<tr>
<td>Cleveland Browns:</td>
<td>
<img src="/images/poll.gif"
width='<?php echo(100*round($cbrown/($total),2)); ?>'
height='15'>
<?php echo(100*round($cbrown/($total),2)); ?>%
</td>
</tr>
<tr>
<td>San Diego Chargers:</td>
<td>
<img src="/images/poll.gif"
width='<?php echo(100*round($sdc/($total),2)); ?>'
height='15'>
<?php echo(100*round($sdc/($total),2)); ?>%
</td>
</tr>
<tr>
<td>San Francisco 49ers:</td>
<td>
<img src="/images/poll.gif"
width='<?php echo(100*round($sf/($total),2)); ?>'
height='15'>
<?php echo(100*round($sf/($total),2)); ?>%
</td>
</tr>
<tr>
<td>New York Jets:</td>
<td>
<img src="/images/poll.gif"
width='<?php echo(100*round($nyj/($total),2)); ?>'
height='15'>
<?php echo(100*round($nyj/($total),2)); ?>%
</td>
</tr>
<tr>
<td>Washington Redskins:</td>
<td>
<img src="/images/poll.gif"
width='<?php echo(100*round($wr/($total),2)); ?>'
height='15'>
<?php echo(100*round($wr/($total),2)); ?>%
</td>
</tr>
<tr>
<td>Tennessee Titans:</td>
<td>
<img src="/images/poll.gif"
width='<?php echo(100*round($tt/($total),2)); ?>'
height='15'>
<?php echo(100*round($tt/($total),2)); ?>%
</td>
</tr>
</table>
