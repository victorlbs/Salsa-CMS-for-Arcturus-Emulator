<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script language="JavaScript" type="text/javascript">

if (document.all){}

else document.captureEvents(Event.MOUSEMOVE);

document.onmousemove=mouse;

 

function mouse(e)

{

if (navigator.appName == 'Netscape'){

xcurs = e.pageX;

ycurs = e.pageY;

} else {

xcurs = event.clientX;

ycurs = event.clientY;

}

document.getElementById('position').style.left = (xcurs+0)+'px';

document.getElementById('position').style.top = (ycurs+0)+'px';

}
$("a").attr("target", "_blank");
var links = document.links;
for (var i = 0; i < links.length; i++) {
     links[i].target = "_blank";
}


</script>

 

<style type="text/css">

<!--

#position {

background-color: #FF0000;

position: absolute;

}

-->

</style>

</head>

<body onload="mouse();">


<div id="position">
    <a href="http://google.com">testando</a></div>