<html>
<head><title>frame forms</title></head>
<body bgcolor="black" text="3fa1bf">
<table>
 <tr><td><img src='/imatges/mundo_gradient.gif'>
 <td width="360"><td>

<font size="-1">

<?
$host = gethostbyaddr($REMOTE_ADDR);

echo "<center><b>IP: </b><i>$REMOTE_ADDR</i></center>";

if ($host!=$REMOTE_ADDR) {
echo "<td><font size=\"-1\"><center><b>HOST: </b><i>$host</i></center>";
}
?>

</table>

<script type="text/javascript">

function GoProxy(form)
{
   var URL = "";
   URL += form.proxy.value;
   URL += (form.url.value).replace(/ +/g, "+");
   top.location = URL;
   return false;
}

     function MM_openBrWindow(theURL,winName,features) {
         window.open(theURL,winName,features);
     }

</script>



<table border=0 width="100%" cellpadding="0" cellspacing="5">

<!--ip info -->
<tr><td align="right" width="34%">
<form method="post" action="query_ripe.php">
<input type="text" size="14" name="ip">
<td>
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

