### Create p inside div inside body
```
//Place inside
var element = document.getElementById("mainheader");

//Create div element
var mydiv = document.createElement('div');

//Give id
mydiv.id = 'mydiv';

//Create p element
var myparagraph = document.createElement('p');

//Create text to p
var mytext = document.createTextNode('My text');

//Append text to p
myparagraph.appendChild(mytext);

//Apend p to div
mydiv.appendChild(myparagraph);

//Place inside
element.appendChild(mydiv);

//Styling
mydiv.style.position = 'absolute';
mydiv.style.top = '15px';
mydiv.style.left = '15px';

//OR document.getElementById('mydiv').style.position = "absolute";
//OR document.getElementById('mydiv').style.top = "15px";
//OR document.getElementById('mydiv').style.left = "15px";
```
### Quick syntax
`$("p").css("background-color", "yellow");`
`$("div").animate({left: '250px'});`
`$("#test1").text("Hello world!");`
`$("#test2").html("<b>Hello world!</b>");`
`$("h1, h2, p").addClass("blue");`

### Amabro stamp
```
function amabro(){
jQuery('<div/>', {id: 'amabro',}).appendTo('body');
jQuery('<p/>', {text: 'Hosted by '}).appendTo('#amabro');
jQuery('<a/>', {href: 'http://amagerbromedia.se',text: '| amagerbromedia.se'}).appendTo('#amabro');
$("#amabro").css("display", "flex");
$("body").css("position", "relative");
$("#amabro").css("position", "absolute");
$("#amabro").css("text-shadow", "2px 2px 2px black");
$("#amabro a").css("color", "white");
$("#amabro a").css("text-decoration", "none");
$("#amabro a").css("text-shadow", "1px 1px 1px white");
$("#amabro").css("bottom", "10px");
$("#amabro").css("right", "10px");
$("#amabro p, #amabro a").css("margin", "0");
$("#amabro p, #amabro a").css("padding", "0");
$("#amabro p, #amabro a").css("font-family", "'Open Sans', sans-serif");
$("#amabro p, #amabro a").css("font-size", "12px");
} 
```

### Read if microsoft browser is used
```
//if(microsoft edge OR microsoft explorer){alert}
if (/Edge/.test(navigator.userAgent)||/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) {
alert('Microsoft browser is used');
});
```
