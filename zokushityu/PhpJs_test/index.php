<html>
<head>
<script type="text/javascript">
function gcm(d1, d2)
{   document.write(d1, " : ", d2, "<br>");
    while(d1!=d2)
    {   if (d1>d2)  d1 = d1 - d2;
        else        d2 = d2 - d1;
    }
    document.write("GCM : ", d1, "<br>");
}
</script>
</head>

<body>
<?php
    $d1= $_GET["d1"];
    $d2= $_GET["d2"];
    print("<script type='text/javascript'>\n");
    print("gcm($d1, $d2)");
    print("</script>\n");
?>
</body>
</html>
