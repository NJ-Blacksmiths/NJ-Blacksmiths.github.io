
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0//EN">
<HTML>
<HEAD>
<TITLE>NJBA Newsletter Online, Index 21 - 3</TITLE>
<META name="description" content="">
<META name="keywords" content="">
<META name="generator" content="CuteHTML">
</HEAD>
<BODY BGCOLOR="#FFFFFF" TEXT="#000000" LINK="#0000FF" VLINK="#800080">

<table align="center" width="840"><tr><td>


<table border="0" cellspacing="10"cellpadding="10">
<tr>
<td>
<img src="logo1.jpg"width="288"height="231"border="1"alt="NJBA LOGO">
</td>
<td>
<h1 align="center">New Jersey<br>Blacksmiths Association</h1>
<h4 align="center"> Larry Brown, Editor</h4>
<p align="justify">This site is to provide members and other newsletter editors with a slightly stripped down 
version of the NJBA Newsletter. It contains all the text and graphics that is in the newsletter.
To recieve a newsletter please see "Membership" below.
</td>
</tr>
</table







<HR>
<!-- People for contact links Below -->
<table cols="3" cellpadding="10" cellpadding="20" width="75%" border="2">
<tr>
<td width="190"><address><a href="mailto:lp.brown@verizon.net?subject=NJBA Newsletter">Larry Brown</a> :<br>Editor, Web Master <br>90 William Ave<br>Staten Island, NY 10308</address><br>Click on name to E-mail</td>
<td width="190"></td>
<td width="190"><address><!--<a href="mailto:drmacauley@att.net?subject=NJBA Newsletter">David Macauley</a>--><br>Chairman, <br>Demonstrator Coordinator,<br>Treasurer, These positions are now open<!--<br>Membership Coordinator--><!--<br>4 Patricia Ct.<br>Howell, NJ 07731--></address><br>
Click on name to E-mail</td>
</tr>
</table>
<hr>
<!-- Page Links Below -->
<!-- Links below -->
<hr>
<table cols="3" width="840" cellpadding="15" cellspacing="15">
<tr><td colspan="3" align="center"><a href="http://njblacksmiths.org/"> <h3>NJBA Web Site<br>www.njblacksmiths.org</h3></a></td></tr>



<tr><td colspan="3" align="center">

<?php
// Find newest newsletter
$archive = scandir("archive/");
$pdfs = preg_grep("/^njba_\d+_[1234].pdf$/", $archive);
$number = 1;
$any_good = True;
$newest_volume=0;
$newest_issue=0;

while($any_good) {
    $any_good = False;
    for($issue = 1; $issue <= 4; $issue++) {
        $fn="./njba_" . $number . "_" . $issue . ".pdf";
	if(!file_exists($fn)) {
	    continue;
        }
  	else {
	    $newest_volume = $number;
	    $newest_issue = $issue;
	    $any_good = True;
            //echo $number . "," . $issue . ";";
  	}
     }
     $number++;
}

echo "<h3>Volume &nbsp;" . $newest_volume . ", Number &nbsp;" . $newest_issue . "</h3>";

?>
 


</td></tr>



<tr>

<!--<td align="center"><a href="njba214a.pdf" target="blank">Newsletter Pages 1- 8<br> NJBA Information and reports</a></td>
<td align="center"><!--<a href="njba194.pdf" target="blank">Newsletter 19 - 4, Pages 1-20</a> - -> </td>
<td align="center"><a href="njba214b.pdf" target="blank">Newsletter Pages 9- 14<br>Tips and Techniques<br> Join up information</a></td> -->
<td align="center">
<?php
echo "<a href=\"njba_" . $newest_volume . "_" . $newest_issue . ".pdf\" target=\"blank\">Newsletter Link</a>";
?>
</td>
  
				  

</tr>
<tr><td align="center" colspan="3"><u>These Files are Now Adobe Acrobat File Format (PDF)</u><br> You need to have Adobe Acrobat Readed installed on your system to read these files on your computer.
If you do not have Acrobat reader download it here free, <a href="http://www.adobe.com/products/acrobat/readstep2.html" target="blank">ACROBAT READER</a></td></tr> 



<!--
<tr><td colspan="3">If you are using Windows 7, 64 Bit, with IE 9 you will not be able to view the PDF's in your Browser. You will have to save the files and open with Adobe Reader or copy and paste the url into a non 64 bit IE Browser available under the start menu.<br>
http://www.lightningforge.com/njba/njba193.pdf<br>
<!--http://www.lightningforge.com/njba/njba192b.pdf<br>-->
<!--http://www.lightningforge.com/njba/njba182c.pdf-->






</table> 


<!-- PUT JAVA SCRIPT BELOW HERE 


<SCRIPT SRC="jspage122.js">
</SCRIPT> 


<CENTER>
<FORM>
<SELECT NAME="SiteSelect" ONCHANGE="changePage(this.form)">
    <OPTION SELECTED>Click & Choose -- The pages you want to visit!
    <OPTION>NJBA Web Page
	<OPTION>NJBA Newsletter Index
    <OPTION>Pages 1,2 -   NJBA Information, Reports
    <OPTION>Pages 3 - 6   NJBA Information, Reports
    <OPTION>Pages 7 - 11  NJBA Information, Reports, Ladles
    <OPTION>Pages 12 - 14  Neb Tips   
    <OPTION>Pages 16 - 18  Tips and techniques
    <OPTION>Pages 19 - 20 Join NJBA and Other Area Groups
    <OPTION>Contact the editor, Larry Brown
    <OPTION>NJBA Newsletter Index
    </SELECT>
</FORM>
</CENTER> 

-->




 <tr><td colspan="2" align="center">
<a href="../archive.php"><h2>NJBA Newsletter Archive</h2></a>
</td></tr>


<tr><td colspan="2" align="center">
<a href="../"><h2> Home</h2></a>
</td></tr>

</td></tr></table>

</BODY>
</HTML>
