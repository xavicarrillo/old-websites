<?
$nouhost=`echo $host|sed s/";"//g `;
echo"
<body onLoad=\"window.open('http://mundodisea.com/whois.cgi.php?domini=$nouhost','whois', 'scrollbars=yes,resizable=yes,height=655,width=495')\" bgcolor=\"black\" text=\"3fa1bf\">
";

?>
