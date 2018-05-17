function con(){
 $("#msg_ai").html("");
 $.ajax({
      type: "POST",
      url: "json.php",
      data:{
        msg:$("#msg_human").val()
      },
      dataType: 'json',
      success: function(obj){
        //alert(obj.txt);
        $("#msg_ai").html(obj.aiman);
        $("#source").html(obj.aiman);
        con_tsu();
      }
  });
}
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-71682075-1', 'auto');
ga('send', 'pageview');
