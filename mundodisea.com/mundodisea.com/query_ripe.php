<?php
echo "
<html>
<table>
 <tr><td><img src='/imatges/mundo_gradient.gif'>
 <td width=\"310\"><td>
";

$host = gethostbyaddr($REMOTE_ADDR);

echo "<td align=\"left\"><center><font size=\"-1\"><b>IP: </b><i>$REMOTE_ADDR</i></center><br>";

if ($host!=$REMOTE_ADDR) {
echo "<font size=\"-1\"><center><b>HOST: </b><i>$host</i></center>";
}
?>

 <script language="JavaScript">

	function GoProxy(form)
	{
	   var URL = "";
	   URL += form.proxy.value;
	   URL += (form.url.value).replace(/ +/g, "+");
	   top.location = URL;
	   return false;
	}
 </script>

<?php

echo "
<body onLoad=\"window.open('http://www.ripe.net/perl/whois?$ip','ipinfo', 'scrollbars=yes,resizable=yes,height=655,width=495')\" bgcolor=\"black\" text=\"3fa1bf\">
";

?>


</table>
<table border=0 width="100%" cellpadding="0" cellspacing="5">

<!--ip info -->
<tr><td align="right" width="34%">
<form method="post" action="query_ripe.php">
<input type="text" size="14" name="ip">
<td>
<!--input onclick="MM_openBrWindow('query_ripe.php?form.ip.value','ip info''scrollbars=yes,resizable=yes,width=495,height=655')" type ="image" name="mod" src="/imatges/ipinfo.jpg"-->

<input type ="image" name="mod" src="/imatges/ipinfo.jpg">
</form>
<!-- ip info -->

<!--whois-->
<td align="right">
<form method="post" action="whois.php">
<input type="image" name="mod" src="/imatges/whois.jpg">
<td> <input type="text" size="17" name="host">
</form>
<!--whois-->

<!--subdimension-->
<tr> <td width="50%" align="right">
<form onSubmit="return GoProxy(this)">
  <input type="hidden" name="proxy" size="40" value="http://www.subdimension.com/cgi-bin/anonymizit/nph-startproxy.cgi/http/">
http://&nbsp;
  <input name="url" size="38" value="">
<td>
  <input type="image" src="/imatges/navegar.jpg" size="small">
</form>
<!--subdimension-->

<!-- Google -->
<td align="right">
<form method=GET action=http://www.google.com/search>
<input type=image name=sa src="/imatges/google.jpg">
<td><input TYPE=text size="17" name=q maxlength=255 value="">
</form>
<!-- Google -->
</table>

</font>
</body>
</html>

