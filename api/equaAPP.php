<!DOCTYPE PHP >
<?php
      if(isset($_POST['submit']))
{

include_once('config.php');

$Sigla = ($_POST['Sigla']);
$Nome = ($_POST['Nome']);
$Como_Escrever = ($_POST['Como_Escrever']);
$Descricao = ($_POST['Descricao']);

$result = mysqli_query($conexao, "INSERT INTO testetab(Sigla,Nome,Como_Escrever,Descricao) 
VALUES ('$Sigla','$Nome','$Como_Escrever','$Descricao')");
}
{
include_once('config.php');	
	
$sql = "SELECT * FROM testetab ORDER BY id DESC";

$result1 = $conexao->query($sql);



$result2 = $conexao->query($sql);


}
?>
<!DOCTYPE PHP >
<!DOCTYPE HTML>
<html id="black1" lang="pt-br" dir="ltr" type="text/css">
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<title>Matemática NOW</title>


	
<!--    Equação     !-->

<!--    Link para o MathJax     !-->
<script>
MathJax = {
  loader: {load: ['input/asciimath', 'output/chtml', 'ui/menu']},
};
</script>
<script type="text/javascript" id="MathJax-script" async
  src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/startup.js">
</script>
<!--    Link para o MathJax     !-->	
	
	

<!--    Script da Equação     !-->
	<script src="media/template/gzip3a19.js?jquery.min-953da80f.js" type="text/javascript" defer="defer"></script>
	<script src="media/template/gzip9ae1.js?jquery-noconflict-d298a39f.js" type="text/javascript" defer="defer"></script>
	<script src="media/template/gzip180c.js?jquery-migrate.min-1d5dc76f.js" type="text/javascript" defer="defer"></script>
	<script src="media/template/gzip2650.js?theme-ed4ff597.js" defer="defer" type="text/javascript"></script>
	<script src="media/template/gzip4954.js?caret-22348a3f.js" defer="defer" type="text/javascript"></script>
	<script src="media/template/gzipb07f.js?equacoes-0f6ec552.js" defer="defer" type="text/javascript"></script>
<!--    Script da Equação     !-->



<!--    Fonte     !-->
<script src="ASCIIMathML.js"></script>
<!--    Fonte     !-->

<!--    CSS     !-->
        <link rel="stylesheet" href="css/uikit.min.css"/>
        <script src="js/uikit.min.js"></script>
        <script src="js/uikit-icons.js"></script>
        <script src="js/uikit-icons.min.js"></script>
<!--    CSS     !-->

<!--    Equação     !-->



    <script src="gzipdd81.js?jquery.min-8e44806d.js" type="text/javascript"></script>
	<script src="gzip8252.js?jquery-noconflict-c7582c42.js" type="text/javascript"></script>
	<script src="gzip8049.js?jquery-migrate.min-68e4b78f.js" type="text/javascript"></script>
	<script src="gzipe0f1.js?jcookie-652f0218.js" defer="defer" type="text/javascript"></script>
	<script src="gzipea95.js?theme-615dccbd.js"></script>
	



<style type="text/css">
.hidden{
display:none ;
}

input{
display:block;
}

</style>


<script>
function mudatema1(el) {
        var backgroundColor = document.getElementById(el).style.backgroundColor;
        if(backgroundColor == "rgb(124, 123, 121)")
            document.getElementById(el).style.backgroundColor = 'rgb(226, 226, 226)';
        else
            document.getElementById(el).style.backgroundColor = 'rgb(124, 123, 121)';
			}
</script>

<script>	
 function mudatema2(el) {
        var backgroundColor = document.getElementById(el).style.backgroundColor;
        if(backgroundColor == "rgb(48, 48, 48)")
            document.getElementById(el).style.backgroundColor = 'rgb(249, 249, 249)';
        else
            document.getElementById(el).style.backgroundColor = 'rgb(48, 48, 48)';
			}
</script>

<script>	
 function mudatema3(el) {
        var color = document.getElementById(el).style.color;
        if(color == "rgb(255, 255, 255)")
            document.getElementById(el).style.color = 'rgb(85, 85, 85)';
        else
            document.getElementById(el).style.color = 'rgb(255, 255, 255)';
			}
</script>

<script>	
 function mudaicon(el) {
        var fill = document.getElementById(el).style.fill;
        if(fill == "rgb(255, 255, 255)")
            document.getElementById(el).style.fill = 'rgb(85, 85, 85)';
        else
            document.getElementById(el).style.fill = 'rgb(255, 255, 255)';
			}
</script>

<script>	
 function mudaicon2(el) {
        var stroke = document.getElementById(el).style.stroke;
        if(stroke == "rgb(255, 255, 255)")
            document.getElementById(el).style.stroke = 'rgb(187 187 187)';
        else
            document.getElementById(el).style.stroke = 'rgb(255, 255, 255)';
			}
</script>

<style>
.subtitulo{font-size:19px}.pdlf{ margin:15px;color:#fff;font-size:22px}.branco{color:#e8e8e8} .hover:hover{background-color:#e8e8e8}.branco 
a{color:#fff}.inline{display:inline}.just{text-align:justify}#topnav{overflow:hidden}#topnav
a{float:right;display:block;color:#f2f2f2;text-align:center;padding:14px
16px;text-decoration:none;border-radius:6px}#topnav a:hover{background-color:#ddd;color:#000}#content{width:auto;background-color:#fff;margin:0px
auto;border-radius:6px;box-shadow:10px 10px 30px 1px rgba(0, 0, 0, 0.2);padding:30px
15px}#tophead{max-width:1050px;margin:20px
auto;margin-top:40px;border-radius:10px}.azul{color:#00A3E0}.comandos{border-collapse:separate;margin:6px
0px 0px 0px;width:100%;height:36px;background:#f7f7f7;color:#444;border:1px
solid rgba(0, 0, 0, 0.1);border-bottom-color:rgba(0, 0, 0, 0.3);border-radius:4px;background-origin:border-box;background-image:-webkit-linear-gradient(top, #fff, #f9f9f9);background-image:linear-gradient(to bottom, #fff, #f9f9f9)}.comandos
td{text-align:center;cursor:pointer;border:none;width:11.11%}.comandos td:hover{background:#009dd8;color:#fff;box-shadow:inset 0 2px 4px rgba(0, 0, 0, 0.2);border-radius:4px}.comandos td:active{background-color:#fff}.painel{width:auto;height:80px;border:1px
solid #c4c4c4;padding:12px
0px 10px 0px;margin:9px

0px 6px 0px;border-radius:4px;background-origin:border-box;background-image:-webkit-linear-gradient(top, #fff, #f9f9f9);background-image:linear-gradient(to bottom,#fff,#f9f9f9)}.subpainel{width:100%;text-align:right;padding:px 0px 0px 0px;margin:5px
0px 0px 0px}#TIExp{border:none;box-shadow:none;height:30px;padding:6px;width:97%;font-size:30px;color:#555;background:transparent}#TIExp:focus{border:none;outline:none}.calculadora{width:100%;overflow:none;font-size:16px}.calculadoradesk

td{width:12.5%;text-align:center}.calculadoramobi
td{width:20%;text-align:center}.bt{line-height:35px;cursor:pointer;border:1px

solid #aaa;border-radius:4px;color:#444;position:relative;margin:0.5px}.bt:hover{background:#009dd8;color:#fff;box-shadow:inset 0 2px 4px rgba(0,0,0,0.2)}.bt:active{background-color:#fff;color:#444}.calcenv{background-color:#e2e2e2;position:relative;z-index:1; margin:0px;padding:10px;border-radius:4px;border:1px
solid #e4e1e1;box-shadow:0px 1px 10px 1px rgba(0,0,0,0.2)}.bt1{background-color:#FFFFFF}.bt2{background-color:#00A3E021}.bt3{background-color:#F9D37921}.bt4{background-color:#E0000014}.bt5{background-color:#51935821}.bt6{background-color:#00A3E021}.bt7{background-color:#28F9C82E}.bt8{background-color:#BCC2C02E}.bt5a{background-color:#C5DEF9}.bt3a{background-color:#3276CC0F}.bt4a{background-color:#1A4FCC24}.bt7a{background-color:#28DCF93D}.bt1l{background-color:#FFFFFF}.bt2l{background-color:#E000B321}.bt5l{background-color:#F9E9F3}.bt3l{background-color:#BD48CE3D}.bt4l{background-color:#5E0BD738}.bt7l{background-color:#E000B30F}.direit{text-align:right;width:100%;margin-top:5px;font-size:13px;color:#777}.quadf,.quade,.quadt,.quada,.quadl{display:inline-block;width:20px;height:14px;border-radius:4px;border:1px
solid #e4e1e1;position:relative;top:3px}.boxmais{margin:0px;padding:20px
0px 10px 0px;border-radius:4px;border:1px
solid #F9F9F9;line-height:35px;color:#47677C;background-image:-webkit-linear-gradient(top, #fff, #f9f9f9);background-image:linear-gradient(to bottom, #fff, #f9f9f9)}.boxmais
a{font-size:14px;color:#444}.spacoacima{margin-top:30px}.spaco{padding:10px}#rodape{text-align:center;color:#fff;margin:30px
0px 20px 0px;line-height:30px}#rodape
a{color:#fff}#LBSubResu{padding:10px 
0px 0px 8px}.floatd{float:right}.mtab{margin-right:10px;margin-bottom:10px;margin-top:10px;line-height:20px;vertical-align:middle !important}.mtab
input{width:100%}.liso{list-style-type:none}.botslin{width:100%;text-align:left;margin-bottom:5px}.botslin
a{color:#444}.subtitm{padding-top:10px;padding-bottom:10px;font-size:15px}.cemp{background-color:#ecf4f7;height:25px;padding:5px;border:1px
solid #b9b8b8;border-radius:5px;width:100%}.cemp:focus{background-color:#ddf6ff;border:1px
solid #4b89ff;outline:none}.boxresult{width:auto;max-height:400px;overflow-y:auto;overflow-x:hidden}.resultado{width:auto;padding:10px;border-radius:5px;margin:5px
3px 0px 0px;background-color:#def0f7;border:1px
solid #b8bfce}.tbresultado{width:100%;margin-left:2px}.tbresultado input[type=text]{background:transparent;border:none;outline:none;padding-left:2px;font-size:16px;width:98%;position:relative;top:-2px}.pontador{cursor:pointer}.resu2l1i{font-weight:bold}.subtit{font-weight:bolder;font-size:18px}#painelConv{width:auto;display:none;border:1px
solid #c4c4c4;padding:10px;margin:9px
 
0px 6px 0px;border-radius:4px;background-origin:border-box;background-image:-webkit-linear-gradient(top, #fff, #f9f9f9);background-image:linear-gradient(to bottom,#fff,#f9f9f9);color:#555;height:auto}.tbresusubtb{width:100%}.italico{font-style:italic}.uk-nav-navbar2>li>a{color:#555;font-size:14px}.uk-nav-navbar2>li>a:hover,.uk-nav-navbar2>li>a:focus{background:#009dd8;color:#fff;outline:none;box-shadow:inset 0 2px 4px rgba(0, 0, 0, 0.2);text-shadow:0 -1px 0 rgba(0, 0, 0, 0.2)}.uk-nav-navbar2 .uk-nav-header{color:#999}.uk-nav-navbar2 .uk-nav-divider{border-top:1px solid #ddd}.uk-nav-navbar2 ul
a{color:#07D}.uk-nav-navbar2 ul a:hover{color:#059}.uk-navbar2{background:#f7f7f7;color:#444;border:1px
solid rgba(0, 0, 0, 0.1);border-bottom-color:rgba(0, 0, 0, 0.3);border-radius:4px;background-origin:border-box;background-image:-webkit-linear-gradient(top, #fff, #eee);background-image:linear-gradient(to bottom,#fff,#eee)}.uk-navbar2:before,.uk-navbar2:after{content:"";display:table}.uk-navbar2:after{clear:both}.uk-navbar2-nav{margin:0;padding:0;list-style:none;float:left}.uk-navbar2-nav>li{float:left;position:relative}.uk-navbar2-nav>li>a{display:block;box-sizing:border-box;text-decoration:none;height:40px;padding:0
3.9px;line-height:40px;color:#555;font-size:9px;font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-weight:normal}.uk-navbar2-nav>li>a[href='#']{cursor:text}.uk-navbar2-nav>li:hover>a,.uk-navbar2-nav>li>a:focus,.uk-navbar2-nav>li.uk-open>a{background-color:#f5f5f5;color:#555;outline:none}.uk-navbar2-nav>li>a:active{background-color:#ddd;color:#555}.uk-navbar2-nav>li.uk-active>a{background-color:#f5f5f5;color:#555}.uk-navbar2-nav .uk-navbar2-nav-subtitle{line-height:28px}.uk-navbar2-nav-subtitle>div{margin-top:-6px;font-size:10px;line-height:12px}.uk-navbar2-content,.uk-navbar2-brand,.uk-navbar2-toggle{box-sizing:border-box;display:block;height:40px;padding:0
15px;float:left}.uk-navbar2-content:before,.uk-navbar2-brand:before,.uk-navbar2-toggle:before{content:'';display:inline-block;height:100%;vertical-align:middle}.uk-navbar2-content+.uk-navbar2-content:not(.uk-navbar2-center){padding-left:0}.uk-navbar2-content>a:not([class]){color:#555}.uk-navbar2-content>a:not([class]):hover{color:#555}.uk-navbar2-brand{font-size:18px;color:#555;text-decoration:none}.uk-navbar2-brand:hover,.uk-navbar2-brand:focus{color:#555;text-decoration:none;outline:none}.uk-navbar2-toggle{font-size:18px;color:#555;text-decoration:none}.uk-navbar2-toggle:hover,.uk-navbar2-toggle:focus{color:#555;text-decoration:none;outline:none}.uk-navbar2-toggle:after{content:"\f0c9";font-family:FontAwesome;vertical-align:middle}.uk-navbar2-toggle-alt:after{content:"\f0c9"}.uk-navbar2-center{float:none;text-align:center;max-width:50%;margin-left:auto;margin-right:auto}.uk-navbar2-flip{float:right}uk-dropdown-navbar2{margin-top:0;background:#f5f5f5;color:#555;border:1px
solid #ccc}.uk-open>.uk-dropdown-navbar2{-webkit-animation:uk-slide-top-fixed 0.2s ease-in-out;animation:uk-slide-top-fixed 0.2s ease-in-out}.stldp{font-size:14px!important}@media (max-width: 800px){.calc-hidden-small{display:none !important}}@media (min-width: 801px){.calc-visible-small{display:none !important}}
</style>

<style>
@import 'https://fonts.googleapis.com/css?family=Abel';
.sprocket-mosaic-image-container{background-color:rgb(0, 0, 0)}.sprocket-mosaic-image-container
a{display:block;overflow:hidden}.sprocket-mosaic-image-container
a{-webkit-transition:-webkit-transform 0.5s ease;-moz-transition:-moz-transform 0.5s ease;transition:transform 0.5s ease;opacity:1;display:block;overflow:hidden}.sprocket-mosaic-image-container a:hover{-webkit-transform:scale(1.3);-moz-transform:scale(1.3);-o-transform:scale(1.3);transform:scale(1.3);opacity: .7;display:block}.sprocket-mosaic-image-container
.view{color:fff;margin:0
auto;margin-top:-6px;position:absolute;text-align:center;top:50%;left:0;right:0;width:40px;height:40px;opacity:0;display:block}.sprocket-mosaic-image-container:hover
.view{opacity:1;font-size:40px}ul.sprocket-mosaic-tags{display:none}img.hover-effect{-webkit-transition:-webkit-transform 0.5s ease;-moz-transition:-moz-transform 0.5s ease;transition:transform 0.5s ease}img.hover-effect:hover{-webkit-transform:scale(1.5);-moz-transform:scale(1.5);-o-transform:scale(1.5);transform:scale(1.5)}[class^="icon-"], [class*=" icon-"]{height:auto;line-height:1.7!important;width:auto}.no-space{padding-top:0!important;padding-bottom:0!important}#jp-left{z-index:99;height:100%;position:fixed}#jp-left
.inner{height:auto;margin:0
auto;margin-top:0;padding:0;text-align:left;max-width:100%;float:left}#jp-right{height:100%;position:relative}span.border{border-top:1px dotted #fff;border-bottom:1px dotted #fff;padding:10px
20px}.toolbar-outer{background-color:#fff;width:100%}.tm-toolbar{margin:0!important;padding-top:10px !important;padding-bottom:10px !important}.tm-toolbar
ul{margin:0!important}.tm-toolbar
li{margin-top:0}.logo-style{margin:0
auto}.logo{display:block;margin:0
auto}.logo,
.logo-style
p{margin:0!important}a.tm-logo:hover{border:none;text-decoration:none}.demo-logo{height:99px;line-height:99px;font-size:50px;padding:20px;color:#fff;text-align:center}.tm-logo-small{display:inline-block;letter-spacing:normal!important}.menu-inner{float:left;margin-right:0;margin-top:20px}#menu-outer{z-index:980;position:relative}.uk-navbar-content{height:auto !important}.uk-navbar-nav{padding-right:0!important;width:100%}.uk-navbar-nav>li{position:relative;width:100%}.uk-navbar-nav > li
li{text-align:left}.uk-navbar-nav>li>a{text-transform:uppercase}.uk-dropdown-navbar{top:0!important}.tm-navbar{margin:0!important;padding:0!important}.uk-navbar-content{height:auto !important;padding:0
15px}.uk-navbar-nav li a
i{margin-right:6px}#offcanvas a[href="#"]{cursor:none}h3.uk-panel-title{border-bottom:1px solid rgba(0,0,0,0.1);margin-bottom:20px;padding-bottom:10px;position:relative}h3.uk-panel-title::after{bottom:0;content:"";height:3px;left:0;position:absolute;width:30px}h1.uk-article-title{border-bottom:1px solid rgba(0,0,0,0.1);margin-bottom:20px;margin-top:20px;padding-bottom:10px;position:relative}h1.uk-article-title::after{bottom:0;content:"";height:3px;left:0;position:absolute;width:30px}.tm-footer{margin:0!important;padding:20px
0;font-size:12px;color:#999}.tm-footer a:hover{color:#777!important}.tm-footer .uk-subnav{display:inline-flex!important}.shadow{box-shadow:0 -4px 15px rgba(0, 0, 0, 0.1);border:1px
solid #fff}.shadow-img{box-shadow:0 -4px 25px rgba(0,0,0,0.3)}.uk-panel-box-border{background:none!important;border:1px
solid #eee}.uk-panel-box-shadow{-webkit-box-shadow:0px 0px 5px 0px rgba(204,204,204,0.6);-moz-box-shadow:0px 0px 5px 0px rgba(204,204,204,0.6);box-shadow:0px 0px 5px 0px rgba(204,204,204,0.6)}.round{-webkit-border-top-left-radius:20px;-webkit-border-bottom-right-radius:20px;-moz-border-radius-topleft:20px;-moz-border-radius-bottomright:20px;border-top-left-radius:20px;border-bottom-right-radius:20px}.uk-panel-box-title-background{}.headline-border h3.uk-panel-title{overflow:hidden;text-align:center;font-size:200%;padding:20px
0;border-bottom:none}.headline-border h3.uk-panel-title:before,
.headline-border h3.uk-panel-title:after{background-color:#eee;content:"";display:inline-block;height:1px;position:relative;vertical-align:middle;width:50%}.headline-border h3.uk-panel-title:before{right:0.5em;margin-left:-50%}.headline-border h3.uk-panel-title:after{left:0.5em;margin-right:-50%}span.ico{-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;padding:10%;display:block;font-family:FontAwesome;font-size:60px;height:60px;line-height:60px;margin:0
auto 12px;width:100px;text-align:center;transition:all 0.3s ease-in-out 0s;-webkit-transition:all 0.3s ease-in-out 0s;-moz-transition:all 0.3s ease-in-out 0s}span.ico:hover{-webkit-border-radius:50%;-moz-border-radius:50%;border-radius:50%}hr.style1{border-top:1px solid #8c8b8b}hr.style2{border-top:3px double #8c8b8b}hr.style3{border-top:1px dashed #8c8b8b}hr.style4{border-top:1px dotted #8c8b8b}hr.style5{background-color:#fff;border-top:2px dashed #8c8b8b}hr.style6{background-color:#fff;border-top:2px dotted #8c8b8b}hr.style7{border-top:1px solid #8c8b8b;border-bottom:1px solid #fff}hr.style8{border-top:1px solid #8c8b8b;border-bottom:1px solid #fff}hr.style8:after{content:'';display:block;margin-top:2px;border-top:1px solid #8c8b8b;border-bottom:1px solid #fff}hr.style9{border-top:1px dashed #8c8b8b;border-bottom:1px dashed #fff}hr.style10{border-top:1px dotted #8c8b8b;border-bottom:1px dotted #fff}hr.style13{height:10px;border:0;box-shadow:0 10px 10px -10px #8c8b8b inset}hr.style14{border:0;height:1px;background-image:-webkit-linear-gradient(left,#f0f0f0,#8c8b8b,#f0f0f0);background-image:-moz-linear-gradient(left,#f0f0f0,#8c8b8b,#f0f0f0);background-image:-ms-linear-gradient(left,#f0f0f0,#8c8b8b,#f0f0f0);background-image:-o-linear-gradient(left,#f0f0f0,#8c8b8b,#f0f0f0)}hr.style15{border-top:4px double #8c8b8b;text-align:center}hr.style15:after{content:'\002665';display:inline-block;position:relative;top:-15px;padding:0
10px;background:#f0f0f0;color:#8c8b8b;font-size:18px}hr.style16{border-top:1px dashed #8c8b8b}hr.style16:after{content:'\002702';display:inline-block;position:relative;top:-12px;left:40px;padding:0
3px;background:#f0f0f0;color:#8c8b8b;font-size:18px}hr.style17{border-top:1px solid #8c8b8b;text-align:center}hr.style17:after{content:'ยง';display:inline-block;position:relative;top:-14px;padding:0
10px;background:#f0f0f0;color:#8c8b8b;font-size:18px;-webkit-transform:rotate(60deg);-moz-transform:rotate(60deg);transform:rotate(60deg)}hr.style18{height:30px;border-style:solid;border-color:#8c8b8b;border-width:1px 0 0 0;border-radius:20px}hr.style18:before{display:block;content:"";height:30px;margin-top:-31px;border-style:solid;border-color:#8c8b8b;border-width:0 0 1px 0;border-radius:20px}hr.style19{border:0;height:1px;margin:10px
0;background-color:none;background-image:-webkit-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.1),rgba(0,0,0,0));background-image:-moz-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.1),rgba(0,0,0,0));background-image:-ms-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.1),rgba(0,0,0,0));background-image:-o-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.1),rgba(0,0,0,0))}hr.style20{padding:0;border:none;border-top:medium double #ededed;color:#ddd;text-align:center;margin:40px
0}hr.style20:after{content:"v";display:inline-block;position:relative;top:-0.7em;font-size:1.5em;padding:0
0.25em;background:white}hr.style21{padding:5px
0;border:none;border-bottom:solid 3px pink;font-weight:bold;position:relative;margin-bottom:8px;width:200px;margin:0
auto;margin-bottom:50px;margin-top:30px}hr.style21:after{content:'';border-bottom:solid 3px blue;width:100px;position:absolute;bottom:-20px;left:0;right:0;margin:0
auto}@media (max-width: 1607px){#prop_fora{display:none}}@media (min-width: 1608px){#prop_dentro{display:none}}.logo1{font-family:Abel;font-size:18px;color:#555;font-weight:bold}.logo2{font-family:Abel;font-size:18px;color:#00A3E0;font-weight:bold}.logo3{font-family:Abel;font-size:14px;color:#666;margin-left:6px}.logocalc{background-color:rgba(255,255,255,0.1);color:#fff;height:70px;line-height:20px;font-family:Abel;font-size:22px;font-weight:bold;line-height:70px;text-align:center}.logocalcaz{color:#74D9FF}.cpft{width:95px;height:20px;text-align:center;display:inline-block;background-color:#729fcf;padding:3px;margin:5px
5px 10px 0px;border-radius:4px}.cptw{width:95px;height:20px;text-align:center;display:inline-block;background-color:#059ff5;padding:3px;margin:5px
5px 10px 0px;border-radius:4px}.cpfb{width:120px;height:20px;text-align:center;display:inline-block;background-color:#0486cc;padding:3px;margin:5px
5px 10px 0px;border-radius:4px}.cpft
a{color:#fff}.cptw
a{color:#fff}.cpfb
a{color:#fff}.cpft a:hover{color:#fff;text-decoration:none}.cptw a:hover{color:#fff;text-decoration:none}.cpfb a:hover{color:#fff;text-decoration:none}.cxvm{margin-bottom:10px;margin-top:10px;text-align:center;border-radius:10px;border:1px
solid #ddd;padding:25px
0px 20px 0px;width:98%}.cxvmd{margin-top:5px;color:#47677}.pdbtn{margin:10px
0px 15px 5px}.cem{margin-top:5px}.blocodf{margin:10px
0px;padding:20px
10px;background-color:rgb(249, 249, 249);border-radius:8px}.blocodfi{margin:10px
0px 0px 0px;padding:20px
10px;background-color:#fafafa;border-radius:8px;text-align:center}.txtcentro{text-align:center!important}.chartdivgraf{width:100%;height:500px}.inputsconvtdv{width:100%;text-align:center;margin-bottom:30px}.blocoibc{display:inline-block;text-align:center}.flotlftblue{background-color:#2794BD21}.flotlftgreen{background-color:#51935821}.flotlftdgreen{background-color:#3bd3612e}.flotlftclear{background-color:#C8858521}.flotlftdclear{background-color:#B9AC8321}.flotlft{font-size:16px;line-height:30px;cursor:pointer;border:1px
solid #aaa;border-radius:4px;color:#444;position:inherit;margin:3px
0.5px;display:inline-block;text-align:center;width:95%}.flotlft:hover{background:#009dd8;color:#fff;box-shadow:inset 0 2px 4px rgba(0,0,0,0.2);border-radius:4px}#previewasc{width:100%;text-align:center;margin-top:30px;height:50px;font-size:18px}.quad{display:inline-block;width:20px;height:14px;border-radius:4px;border:1px
solid #e4e1e1;position:inherit;top:3px}.resqst{background-color:#f7fbf9!important;text-align:center;font-size:large;color:#444!important}.divpalchav{width:100%;text-align:center;margin-top:20px}.esp_up{margin-top:10px!important}.text13{font-size:13px}.uk-datepicker{z-index:1050;width:300px;-webkit-animation:uk-fade .2s ease-in-out;animation:uk-fade .2s ease-in-out;-webkit-transform-origin:0 0;transform-origin:0 0
margin-top:6px;background:#fff;color:#666;left:-1px;box-shadow:0 2px 5px rgba(0,0,0,.1);width:290px !important}.uk-datepicker-nav{margin-bottom:15px;text-align:center;line-height:20px}.uk-datepicker-nav:after,.uk-datepicker-nav:before{content:"";display:table}.uk-datepicker-nav:after{clear:both}.uk-datepicker-nav
a{color:#666;text-decoration:none}.uk-datepicker-nav a:hover{color:#666}.uk-datepicker-previous{float:left}.uk-datepicker-next{float:right}.uk-datepicker-next:after,.uk-datepicker-previous:after{width:20px;font-family:FontAwesome}.uk-datepicker-previous:after{content:"\f053"}.uk-datepicker-next:after{content:"\f054"}.uk-datepicker-table{width:100%}.uk-datepicker-table td,
.uk-datepicker-table
th{padding:2px}.uk-datepicker-table
th{font-size:12px}.uk-datepicker-table
a{display:block;width:26px;line-height:24px;text-align:center;color:#666;text-decoration:none;border:1px
solid transparent;border-radius:4px;background-origin:border-box}a.uk-datepicker-table-muted{color:#999}.uk-datepicker-table a:focus,
.uk-datepicker-table a:hover{background-color:#fafafa;color:#666;outline:0;border-color:rgba(0,0,0,.2);border-bottom-color:rgba(0,0,0,.3);text-shadow:0 1px 0 #fff}.uk-datepicker-table a:active{background-color:#f5f5f5;color:#666;border-color:rgba(0,0,0,.2);border-top-color:rgba(0,0,0,.3);background-image:none;box-shadow:inset 0 2px 4px rgba(0,0,0,.1)}.uk-datepicker-table a.uk-active{background:#009dd8;color:#fff;border:1px
solid rgba(0,0,0,.2);border-bottom-color:rgba(0,0,0,.4);background-origin:border-box;background-image:-webkit-linear-gradient(top,#00b4f5,#008dc5);background-image:linear-gradient(to bottom,#00b4f5,#008dc5);text-shadow:0 -1px 0 rgba(0,0,0,.2)}
html{font:normal 14px / 20px opensans,helvetica,arial,sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;background:rgb(226, 226, 226);color:#555}body{margin:0}a{background:transparent}a:active,a:hover{outline:0}a,.uk-link{color:#3f6488;text-decoration:none;cursor:pointer}a:hover,.uk-link:hover{color:#222;text-decoration:underline}abbr[title]{border-bottom:1px dotted}b,strong{font-weight:bold}:not(pre)>code,:not(pre)>kbd,:not(pre)>samp{font-size:12px;font-family:Consolas,monospace,serif;color:#d05;white-space:nowrap}em{color:#d05}ins{background:#ffa;color:#555;text-decoration:none}mark{background:#ffa;color:#555}q{font-style:italic}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:inherit;vertical-align:baseline}sup{top:-0.5em}sub{bottom:-0.25em}audio,canvas,iframe,img,svg,video{vertical-align:middle}audio,canvas,img,svg,video{max-width:85%;height:auto;box-sizing:border-box;}.uk-img-preserve,
.uk-img-preserve audio,
.uk-img-preserve canvas,
.uk-img-preserve img,
.uk-img-preserve svg,
.uk-img-preserve
video{max-width:none}img{border:0}svg:not(:root){overflow:hidden}blockquote,figure{margin:0}p,ul,ol,dl,blockquote,pre,address,fieldset,figure{margin:0
0 5px 0}*+p,*+ul,*+ol,*+dl,*+blockquote,*+pre,*+address,*+fieldset,*+figure{margin-top:15px}h1,h2,h3,h4,h5,h6{margin:0
0 15px 0;font-family:'Abel';font-weight:normal;color:#000;text-transform:none}*+h1,*+h2,*+h3,*+h4,*+h5,*+h6{margin-top:25px}h1,.uk-h1{font-size:46px;line-height:58px}h2,.uk-h2{font-size:20px;line-height:40px}h3,.uk-h3{font-size:24px;line-height:30px}h4,.uk-h4{font-size:18px;line-height:24px}h5,.uk-h5{font-size:14px;line-height:20px}h6,.uk-h6{font-size:12px;line-height:18px}ul,ol{padding-left:30px}ul>li>ul,ul>li>ol,ol>li>ol,ol>li>ul{margin:0}dt{font-weight:bold}dd{margin-left:0}hr{box-sizing:content-box;height:0;margin:20px
0;border:0;border-top:1px solid #ddd}address{font-style:normal}blockquote{padding-left:15px;border-left:5px solid #ddd;font-size:16px;line-height:22px;font-style:italic}pre{padding:10px;background:#f5f5f5;font:12px / 18px Consolas,monospace,serif;color:#555;-moz-tab-size:4;tab-size:4;overflow:auto}::-moz-selection{background:#39f;color:#fff;text-shadow:none}::selection{background:#39f;color:#fff;text-shadow:none}article,aside,details,figcaption,figure,footer,header,main,nav,section,summary{display:block}progress{vertical-align:baseline}audio:not([controls]){display:none}[hidden],template{display:none}iframe{border:0}@media screen and (max-width: 400px){@-ms-viewport{width:device-width}}.uk-grid{display:-ms-flexbox;display:-webkit-flex;display:flex;-ms-flex-wrap:wrap;-webkit-flex-wrap:wrap;flex-wrap:wrap;margin:0;padding:0;list-style:none}.uk-grid:before,.uk-grid:after{content:"";display:block;overflow:hidden}.uk-grid:after{clear:both}.uk-grid>*{-ms-flex:none;-webkit-flex:none;flex:none;margin:0;float:left}.uk-grid>*>:last-child{margin-bottom:0}.uk-grid{margin-left:-25px}.uk-grid>*{padding-left:25px}.uk-grid+.uk-grid,.uk-grid-margin,.uk-grid>*>.uk-panel+.uk-panel{margin-top:25px}@media (min-width: 1280px){.uk-grid{margin-left:-35px}.uk-grid>*{padding-left:35px}.uk-grid+.uk-grid,.uk-grid-margin,.uk-grid>*>.uk-panel+.uk-panel{margin-top:35px}}.uk-grid-collapse{margin-left:0}.uk-grid-collapse>*{padding-left:0}.uk-grid-collapse+.uk-grid-collapse,.uk-grid-collapse>.uk-grid-margin,.uk-grid-collapse>*>.uk-panel+.uk-panel{margin-top:0}.uk-grid-small{margin-left:-10px}.uk-grid-small>*{padding-left:10px}.uk-grid-small+.uk-grid-small,.uk-grid-small>.uk-grid-margin,.uk-grid-small>*>.uk-panel+.uk-panel{margin-top:10px}.uk-grid-medium{margin-left:-25px}.uk-grid-medium>*{padding-left:25px}.uk-grid-medium+.uk-grid-medium,.uk-grid-medium>.uk-grid-margin,.uk-grid-medium>*>.uk-panel+.uk-panel{margin-top:25px}@media (min-width: 1280px){.uk-grid-large{margin-left:-35px}.uk-grid-large>*{padding-left:35px}.uk-grid-large+.uk-grid-large,.uk-grid-large-margin,.uk-grid-large>*>.uk-panel+.uk-panel{margin-top:35px}}@media (min-width: 1280px){.uk-grid-large{margin-left:-50px}.uk-grid-large>*{padding-left:50px}.uk-grid-large+.uk-grid-large,.uk-grid-large-margin,.uk-grid-large>*>.uk-panel+.uk-panel{margin-top:50px}}.uk-grid-divider:not(:empty){margin-left:-25px;margin-right:-25px}.uk-grid-divider>*{padding-left:25px;padding-right:25px}.uk-grid-divider>[class*='uk-width-1-']:not(.uk-width-1-1):nth-child(n+2),.uk-grid-divider>[class*='uk-width-2-']:nth-child(n+2),.uk-grid-divider>[class*='uk-width-3-']:nth-child(n+2),.uk-grid-divider>[class*='uk-width-4-']:nth-child(n+2),.uk-grid-divider>[class*='uk-width-5-']:nth-child(n+2),.uk-grid-divider>[class*='uk-width-6-']:nth-child(n+2),.uk-grid-divider>[class*='uk-width-7-']:nth-child(n+2),.uk-grid-divider>[class*='uk-width-8-']:nth-child(n+2),.uk-grid-divider>[class*='uk-width-9-']:nth-child(n+2){border-left:1px solid #ddd}@media (min-width: 1024px){.uk-grid-divider>[class*='uk-width-medium-']:not(.uk-width-medium-1-1):nth-child(n+2){border-left:1px solid #ddd}}@media (min-width: 1280px){.uk-grid-divider>[class*='uk-width-large-']:not(.uk-width-large-1-1):nth-child(n+2){border-left:1px solid #ddd}}@media (min-width: 1280px){.uk-grid-divider:not(:empty){margin-left:-35px;margin-right:-35px}.uk-grid-divider>*{padding-left:35px;padding-right:35px}.uk-grid-divider:empty{margin-top:35px;margin-bottom:35px}}.uk-grid-divider:empty{margin-top:25px;margin-bottom:25px;border-top:1px solid #ddd}.uk-grid-match>*{display:-ms-flexbox;display:-webkit-flex;display:flex;-ms-flex-wrap:wrap;-webkit-flex-wrap:wrap;flex-wrap:wrap}.uk-grid-match>*>*{-ms-flex:none;-webkit-flex:none;flex:none;box-sizing:border-box;width:100%}[class*='uk-grid-width']>*{box-sizing:border-box;width:100%}.uk-grid-width-1-2>*{width:50%}.uk-grid-width-1-3>*{width:33.333%}.uk-grid-width-1-4>*{width:25%}.uk-grid-width-1-5>*{width:20%}.uk-grid-width-1-6>*{width:16.666%}.uk-grid-width-1-10>*{width:10%}.uk-grid-width-auto>*{width:auto}@media (min-width: 480px){.uk-grid-width-small-1-1>*{width:100%}.uk-grid-width-small-1-2>*{width:50%}.uk-grid-width-small-1-3>*{width:33.333%}.uk-grid-width-small-1-4>*{width:25%}.uk-grid-width-small-1-5>*{width:20%}.uk-grid-width-small-1-6>*{width:16.666%}.uk-grid-width-small-1-10>*{width:10%}}@media (min-width: 1024px){.uk-grid-width-medium-1-1>*{width:100%}.uk-grid-width-medium-1-2>*{width:50%}.uk-grid-width-medium-1-3>*{width:33.333%}.uk-grid-width-medium-1-4>*{width:25%}.uk-grid-width-medium-1-5>*{width:20%}.uk-grid-width-medium-1-6>*{width:16.666%}.uk-grid-width-medium-1-10>*{width:10%}}@media (min-width: 1280px){.uk-grid-width-large-1-1>*{width:100%}.uk-grid-width-large-1-2>*{width:50%}.uk-grid-width-large-1-3>*{width:33.333%}.uk-grid-width-large-1-4>*{width:25%}.uk-grid-width-large-1-5>*{width:20%}.uk-grid-width-large-1-6>*{width:16.666%}.uk-grid-width-large-1-10>*{width:10%}}@media (min-width: 1280px){.uk-grid-width-xlarge-1-1>*{width:100%}.uk-grid-width-xlarge-1-2>*{width:50%}.uk-grid-width-xlarge-1-3>*{width:33.333%}.uk-grid-width-xlarge-1-4>*{width:25%}.uk-grid-width-xlarge-1-5>*{width:20%}.uk-grid-width-xlarge-1-6>*{width:16.666%}.uk-grid-width-xlarge-1-10>*{width:10%}}[class*='uk-width']{box-sizing:border-box;width:100%}.uk-width-1-1{width:100%}.uk-width-1-2,.uk-width-2-4,.uk-width-3-6,.uk-width-5-10{width:50%}.uk-width-1-3,.uk-width-2-6{width:33.333%}.uk-width-2-3,.uk-width-4-6{width:66.666%}.uk-width-1-4{width:25%}.uk-width-3-4{width:75%}.uk-width-1-5,.uk-width-2-10{width:20%}.uk-width-2-5,.uk-width-4-10{width:40%}.uk-width-3-5,.uk-width-6-10{width:60%}.uk-width-4-5,.uk-width-8-10{width:80%}.uk-width-1-6{width:16.666%}.uk-width-5-6{width:83.333%}.uk-width-1-10{width:10%}.uk-width-3-10{width:30%}.uk-width-7-10{width:70%}.uk-width-9-10{width:90%}@media (min-width: 480px){.uk-width-small-1-1{width:100%}.uk-width-small-1-2,.uk-width-small-2-4,.uk-width-small-3-6,.uk-width-small-5-10{width:50%}.uk-width-small-1-3,.uk-width-small-2-6{width:33.333%}.uk-width-small-2-3,.uk-width-small-4-6{width:66.666%}.uk-width-small-1-4{width:25%}.uk-width-small-3-4{width:75%}.uk-width-small-1-5,.uk-width-small-2-10{width:20%}.uk-width-small-2-5,.uk-width-small-4-10{width:40%}.uk-width-small-3-5,.uk-width-small-6-10{width:60%}.uk-width-small-4-5,.uk-width-small-8-10{width:80%}.uk-width-small-1-6{width:16.666%}.uk-width-small-5-6{width:83.333%}.uk-width-small-1-10{width:10%}.uk-width-small-3-10{width:30%}.uk-width-small-7-10{width:70%}.uk-width-small-9-10{width:90%}}@media (min-width: 1024px){.uk-width-medium-1-1{width:100%}.uk-width-medium-1-2,.uk-width-medium-2-4,.uk-width-medium-3-6,.uk-width-medium-5-10{width:50%}.uk-width-medium-1-3,.uk-width-medium-2-6{width:33.333%}.uk-width-medium-2-3,.uk-width-medium-4-6{width:66.666%}.uk-width-medium-1-4{width:25%}.uk-width-medium-3-4{width:75%}.uk-width-medium-1-5,.uk-width-medium-2-10{width:20%}.uk-width-medium-2-5,.uk-width-medium-4-10{width:40%}.uk-width-medium-3-5,.uk-width-medium-6-10{width:60%}.uk-width-medium-4-5,.uk-width-medium-8-10{width:80%}.uk-width-medium-1-6{width:16.666%}.uk-width-medium-5-6{width:83.333%}.uk-width-medium-1-10{width:10%}.uk-width-medium-3-10{width:30%}.uk-width-medium-7-10{width:70%}.uk-width-medium-9-10{width:90%}}@media (min-width: 1280px){.uk-width-large-1-1{width:100%}.uk-width-large-1-2,.uk-width-large-2-4,.uk-width-large-3-6,.uk-width-large-5-10{width:50%}.uk-width-large-1-3,.uk-width-large-2-6{width:33.333%}.uk-width-large-2-3,.uk-width-large-4-6{width:66.666%}.uk-width-large-1-4{width:25%}.uk-width-large-3-4{width:75%}.uk-width-large-1-5,.uk-width-large-2-10{width:20%}.uk-width-large-2-5,.uk-width-large-4-10{width:40%}.uk-width-large-3-5,.uk-width-large-6-10{width:60%}.uk-width-large-4-5,.uk-width-large-8-10{width:80%}.uk-width-large-1-6{width:16.666%}.uk-width-large-5-6{width:83.333%}.uk-width-large-1-10{width:10%}.uk-width-large-3-10{width:30%}.uk-width-large-7-10{width:70%}.uk-width-large-9-10{width:90%}}@media (min-width: 1280px){.uk-width-xlarge-1-1{width:100%}.uk-width-xlarge-1-2,.uk-width-xlarge-2-4,.uk-width-xlarge-3-6,.uk-width-xlarge-5-10{width:50%}.uk-width-xlarge-1-3,.uk-width-xlarge-2-6{width:33.333%}.uk-width-xlarge-2-3,.uk-width-xlarge-4-6{width:66.666%}.uk-width-xlarge-1-4{width:25%}.uk-width-xlarge-3-4{width:75%}.uk-width-xlarge-1-5,.uk-width-xlarge-2-10{width:20%}.uk-width-xlarge-2-5,.uk-width-xlarge-4-10{width:40%}.uk-width-xlarge-3-5,.uk-width-xlarge-6-10{width:60%}.uk-width-xlarge-4-5,.uk-width-xlarge-8-10{width:80%}.uk-width-xlarge-1-6{width:16.666%}.uk-width-xlarge-5-6{width:83.333%}.uk-width-xlarge-1-10{width:10%}.uk-width-xlarge-3-10{width:30%}.uk-width-xlarge-7-10{width:70%}.uk-width-xlarge-9-10{width:90%}}@media (min-width: 1024px){[class*='uk-push-'],[class*='uk-pull-']{position:relative}.uk-push-1-2,.uk-push-2-4,.uk-push-3-6,.uk-push-5-10{left:50%}.uk-push-1-3,.uk-push-2-6{left:33.333%}.uk-push-2-3,.uk-push-4-6{left:66.666%}.uk-push-1-4{left:25%}.uk-push-3-4{left:75%}.uk-push-1-5,.uk-push-2-10{left:20%}.uk-push-2-5,.uk-push-4-10{left:40%}.uk-push-3-5,.uk-push-6-10{left:60%}.uk-push-4-5,.uk-push-8-10{left:80%}.uk-push-1-6{left:16.666%}.uk-push-5-6{left:83.333%}.uk-push-1-10{left:10%}.uk-push-3-10{left:30%}.uk-push-7-10{left:70%}.uk-push-9-10{left:90%}.uk-pull-1-2,.uk-pull-2-4,.uk-pull-3-6,.uk-pull-5-10{left:-50%}.uk-pull-1-3,.uk-pull-2-6{left:-33.333%}.uk-pull-2-3,.uk-pull-4-6{left:-66.666%}.uk-pull-1-4{left:-25%}.uk-pull-3-4{left:-75%}.uk-pull-1-5,.uk-pull-2-10{left:-20%}.uk-pull-2-5,.uk-pull-4-10{left:-40%}.uk-pull-3-5,.uk-pull-6-10{left:-60%}.uk-pull-4-5,.uk-pull-8-10{left:-80%}.uk-pull-1-6{left:-16.666%}.uk-pull-5-6{left:-83.333%}.uk-pull-1-10{left:-10%}.uk-pull-3-10{left:-30%}.uk-pull-7-10{left:-70%}.uk-pull-9-10{left:-90%}}.uk-panel{display:block;position:relative}.uk-panel,.uk-panel:hover{text-decoration:none}.uk-panel:before,.uk-panel:after{content:"";display:table}.uk-panel:after{clear:both}.uk-panel>:not(.uk-panel-title):last-child{margin-bottom:0}.uk-panel-title{margin-top:0;margin-bottom:10px;font-size:24px;line-height:32px;font-weight:normal;text-transform:none;color:#000}.uk-panel-badge{position:absolute;top:0;right:0;z-index:1}.uk-panel-teaser{margin-bottom:10px}.uk-panel-body{padding:30px}.uk-panel-box{padding:30px;background:#fff;color:#000}.uk-panel-box-hover:hover{color:#000}.uk-panel-box .uk-panel-title{color:#000}.uk-panel-box .uk-panel-badge{top:10px;right:10px}.uk-panel-box>.uk-panel-teaser{margin-top:-30px;margin-left:-30px;margin-right:-30px}.uk-panel-box>.uk-nav-side{margin:0
-30px}.uk-panel-box-primary{background-color:#39f;color:#fff}.uk-panel-box-primary-hover:hover{color:#fff}.uk-panel-box-primary .uk-panel-title{color:#fff}.uk-panel-box-secondary{background-color:#222;color:#fff}.uk-panel-box-secondary-hover:hover{color:#fff}.uk-panel-box-secondary .uk-panel-title{color:#fff}.uk-panel-hover{padding:15px;color:#fff}.uk-panel-hover:hover{background:#f5f5f5;color:#fff}.uk-panel-hover .uk-panel-badge{top:10px;right:10px}.uk-panel-hover>.uk-panel-teaser{margin-top:-15px;margin-left:-15px;margin-right:-15px}.uk-panel-header .uk-panel-title{padding-bottom:10px;border-bottom:1px solid #ddd;color:#555}.uk-panel-space{padding:30px}.uk-panel-space .uk-panel-badge{top:30px;right:30px}.uk-panel+.uk-panel-divider{margin-top:50px !important}.uk-panel+.uk-panel-divider:before{content:"";display:block;position:absolute;top:-25px;left:0;right:0;border-top:1px solid #ddd}@media (min-width: 1280px){.uk-panel+.uk-panel-divider{margin-top:70px !important}.uk-panel+.uk-panel-divider:before{top:-35px}}.uk-block{position:relative;box-sizing:border-box;padding-top:20px;padding-bottom:20px}@media (min-width: 1024px){.uk-block{padding-top:50px;padding-bottom:50px}}.uk-block:before,.uk-block:after{content:"";display:table}.uk-block:after{clear:both}.uk-block>:last-child{margin-bottom:0}.uk-block-large{padding-top:20px;padding-bottom:20px}@media (min-width: 1024px){.uk-block-large{padding-top:50px;padding-bottom:50px}}@media (min-width: 1280px){.uk-block-large{padding-top:100px;padding-bottom:100px}}.uk-block-default{background:#f2f2f2}.uk-block-muted{background:#f9f9f9}.uk-block-primary{background:#00a8e6}.uk-block-secondary{background:#222}.uk-block-default+.uk-block-default,.uk-block-muted+.uk-block-muted,.uk-block-primary+.uk-block-primary,.uk-block-secondary+.uk-block-secondary{padding-top:0}.uk-article:before,.uk-article:after{content:"";display:table}.uk-article:after{clear:both}.uk-article>:last-child{margin-bottom:0}.uk-article+.uk-article{margin-top:25px}.uk-article-title{font-size:36px;line-height:42px;font-weight:normal;text-transform:none}.uk-article-title
a{color:inherit;text-decoration:none}.uk-article-meta{font-size:12px;line-height:18px;color:#999}.uk-article-lead{color:#555;font-size:18px;line-height:24px;font-weight:normal}.uk-article-divider{margin-bottom:25px;border-color:#ddd}*+.uk-article-divider{margin-top:25px}.uk-comment-header{margin-bottom:15px}.uk-comment-header:before,.uk-comment-header:after{content:"";display:table}.uk-comment-header:after{clear:both}.uk-comment-avatar{margin-right:15px;float:left}.uk-comment-title{margin:5px
0 0 0;font-size:16px;line-height:22px}.uk-comment-meta{margin:2px
0 0 0;font-size:11px;line-height:16px;color:#999}.uk-comment-body>:last-child{margin-bottom:0}.uk-comment-list{padding:0;list-style:none}.uk-comment-list .uk-comment+ul{margin:15px
0 0 0;list-style:none}.uk-comment-list > li:nth-child(n+2),
.uk-comment-list .uk-comment+ul>li:nth-child(n+2){margin-top:15px}@media (min-width: 1024px){.uk-comment-list .uk-comment+ul{padding-left:100px}}.uk-cover-background{background-position:50% 50%;background-size:cover;background-repeat:no-repeat}.uk-cover{overflow:hidden}.uk-cover-object{width:auto;height:auto;min-width:100%;min-height:100%;max-width:none;position:relative;left:50%;top:50%;-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%)}[data-uk-cover]{position:relative;left:50%;top:50%;-webkit-transform:translate(-50%, -50%);transform:translate(-50%, -50%)}.uk-nav,


.uk-nav
ul{margin:0;padding:0;list-style:none}.uk-nav li>a{display:block;text-decoration:none}.uk-nav>li>a{padding:10px
20px}.uk-nav
ul{padding-left:15px}.uk-nav ul
a{padding:2px
10px}.uk-nav li>a>div{font-size:12px;line-height:18px}.uk-nav-header{padding:0
20px;text-transform:none;font-weight:normal;font-size:12px}.uk-nav-header:not(:first-child){margin-top:0}.uk-nav-divider{margin:2px
20px}ul.uk-nav-sub{padding:5px
0 5px 20px}.uk-nav-parent-icon>.uk-parent>a:after{content:"\f104";width:20px;margin-right:-10px;float:right;font-family:FontAwesome;text-align:center}.uk-nav-parent-icon>.uk-parent.uk-open>a:after{content:"\f107"}.uk-nav-side>li>a{color:#555}.uk-nav-side>li>a:hover,.uk-nav-side>li>a:focus{background:rgba(0,0,0,0.05);color:#555;outline:none}.uk-nav-side>li.uk-active>a{background:#39f;color:#fff}.uk-nav-side .uk-nav-header{color:#555}.uk-nav-side .uk-nav-divider{border-top:1px solid #ddd}.uk-nav-side ul
a{color:#3f6488}.uk-nav-side ul a:hover{color:#777}.uk-nav-dropdown>li>a{color:#555}.uk-nav-dropdown>li>a:hover,.uk-nav-dropdown>li>a:focus{background:#39f;color:#fff;outline:none}.uk-nav-dropdown .uk-nav-header{color:#999}.uk-nav-dropdown .uk-nav-divider{border-top:1px solid #ddd}.uk-nav-dropdown ul
a{color:#3f6488}.uk-nav-dropdown ul a:hover{color:#777}.uk-nav-navbar>li>a{color:#555}.uk-nav-navbar>li>a:hover,.uk-nav-navbar>li>a:focus{background:#39f;color:#fff;outline:none}.uk-nav-navbar .uk-nav-header{color:#999}.uk-nav-navbar .uk-nav-divider{border-top:1px solid #ddd}.uk-nav-navbar ul
a{color:#3f6488}.uk-nav-navbar ul a:hover{color:#777}.uk-nav-offcanvas>li>a{color:#ccc;padding:10px
15px}.uk-nav-offcanvas > .uk-open > a,
html:not(.uk-touch) .uk-nav-offcanvas > li > a:hover,
html:not(.uk-touch) .uk-nav-offcanvas>li>a:focus{background:rgba(13, 13, 13, 0.7);color:#fff;outline:none}html .uk-nav.uk-nav-offcanvas>li.uk-active>a{background:rgba(0, 0, 0, 0.7);color:#fff}.uk-nav-offcanvas .uk-nav-header{color:#777}.uk-nav-offcanvas .uk-nav-divider{border-top:1px solid rgba(0, 0, 0, 0.7)}.uk-nav-offcanvas ul
a{color:#ccc}html:not(.uk-touch) .uk-nav-offcanvas ul a:hover{color:#fff}.uk-navbar{background:#255879;color:#555}.uk-navbar:before,.uk-navbar:after{content:"";display:table}.uk-navbar:after{clear:both}.uk-navbar-nav{margin:0;padding:0;list-style:none;float:left}.uk-navbar-nav>li{float:left;position:relative}.uk-navbar-nav>li>a{display:block;box-sizing:border-box;text-decoration:none;height:50px;padding:0
40px;line-height:50px;color:#fff;font-size:14px;font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-weight:300}.uk-navbar-nav>li>a[href='#']{cursor:text}.uk-navbar-nav>li:hover>a,.uk-navbar-nav>li>a:focus,.uk-navbar-nav>li.uk-open>a{background-color:rgba(255,255,255,0.1);color:#fff;outline:none}.uk-navbar-nav>li>a:active{background-color:rgba(253,201,83,0);color:#555}.uk-navbar-nav>li.uk-active>a{background-color:rgba(255, 255, 255, 0.1);color:#fff}.uk-navbar-nav .uk-navbar-nav-subtitle{line-height:38px}.uk-navbar-nav-subtitle>div{margin-top:-11px;font-size:10px;line-height:12px}.uk-navbar-content,.uk-navbar-brand,.uk-navbar-toggle{box-sizing:border-box;display:block;height:50px;padding:0
40px;float:left}.uk-navbar-content:before,.uk-navbar-brand:before,.uk-navbar-toggle:before{content:'';display:inline-block;height:100%;vertical-align:middle}.uk-navbar-content+.uk-navbar-content:not(.uk-navbar-center){padding-left:0}.uk-navbar-content>a:not([class]){color:#3f6488}.uk-navbar-content>a:not([class]):hover{color:#777}.uk-navbar-brand{font-size:18px;color:#000;text-decoration:none}.uk-navbar-brand:hover,.uk-navbar-brand:focus{color:#555;text-decoration:none;outline:none}.uk-navbar-toggle{font-size:18px;color:#555;text-decoration:none}.uk-navbar-toggle:hover,.uk-navbar-toggle:focus{color:#555;text-decoration:none;outline:none}.uk-navbar-toggle:after{content:"\f0c9";font-family:FontAwesome;vertical-align:middle}.uk-navbar-toggle-alt:after{content:"\f002"}.uk-navbar-center{float:none;text-align:center;max-width:50%;margin-left:auto;margin-right:auto}.uk-navbar-flip{float:right}.uk-subnav{display:-ms-flexbox;display:-webkit-flex;display:flex;-ms-flex-wrap:wrap;-webkit-flex-wrap:wrap;flex-wrap:wrap;margin-left:-10px;margin-top:-10px;padding:0;list-style:none}.uk-subnav>*{-ms-flex:none;-webkit-flex:none;flex:none;padding-left:10px;margin-top:10px;position:relative}.uk-subnav:before,.uk-subnav:after{content:"";display:block;overflow:hidden}.uk-subnav:after{clear:both}.uk-subnav>*{float:left}.uk-subnav>*>*{display:inline-block;color:#555}.uk-subnav>*>:hover,.uk-subnav>*>:focus{color:#3f6488;text-decoration:none}.uk-subnav>.uk-active>*{color:#3f6488}.uk-subnav-line>:before{content:"";display:inline-block;height:10px;vertical-align:middle}.uk-subnav-line>:nth-child(n+2):before{margin-right:10px;border-left:1px solid #ddd}.uk-subnav-pill>*>*{padding:3px
9px}.uk-subnav-pill>*>:hover,.uk-subnav-pill>*>:focus{background:#eee;color:#555;text-decoration:none;outline:none}.uk-subnav-pill>.uk-active>*{background:#39f;color:#fff}.uk-subnav>.uk-disabled>*{background:none;color:#999;text-decoration:none;cursor:text}.uk-breadcrumb{padding:0;list-style:none;font-size:0.001px}.uk-breadcrumb>li{font-size:1rem;vertical-align:top}.uk-breadcrumb>li,.uk-breadcrumb>li>a,.uk-breadcrumb>li>span{display:inline-block}.uk-breadcrumb>li:nth-child(n+2):before{content:"/";display:inline-block;margin:0
8px}.uk-breadcrumb>li:not(.uk-active)>span{color:#999}.uk-pagination{padding:0;list-style:none;text-align:center;font-size:0.001px}.uk-pagination:before,.uk-pagination:after{content:"";display:table}.uk-pagination:after{clear:both}.uk-pagination>li{display:inline-block;font-size:1rem;vertical-align:top}.uk-pagination>li:nth-child(n+2){margin-left:5px}.uk-pagination>li>a,.uk-pagination>li>span{display:inline-block;min-width:16px;padding:3px
5px;line-height:20px;text-decoration:none;box-sizing:content-box;text-align:center}.uk-pagination>li>a{background:#eee;color:#555}.uk-pagination>li>a:hover,.uk-pagination>li>a:focus{background-color:#f5f5f5;color:#555;outline:none}.uk-pagination>li>a:active{background-color:#ddd;color:#555}.uk-pagination>.uk-active>span{background:#39f;color:#fff}.uk-pagination>.uk-disabled>span{background-color:#f5f5f5;color:#999}.uk-pagination-previous{float:left}.uk-pagination-next{float:right}.uk-pagination-left{text-align:left}.uk-pagination-right{text-align:right}.uk-tab{margin:0;padding:0;list-style:none;border-bottom:1px solid #ddd}.uk-tab:before,.uk-tab:after{content:"";display:table}.uk-tab:after{clear:both}.uk-tab>li{margin-bottom:-1px;float:left;position:relative}.uk-tab>li>a{display:block;padding:8px
12px 8px 12px;border:1px
solid transparent;border-bottom-width:0;color:#3f6488;text-decoration:none}.uk-tab>li:nth-child(n+2)>a{margin-left:5px}.uk-tab>li>a:hover,.uk-tab>li>a:focus,.uk-tab>li.uk-open>a{border-color:#f5f5f5;background:#f5f5f5;color:#777;outline:none}.uk-tab>li:not(.uk-active)>a:hover,.uk-tab>li:not(.uk-active)>a:focus,.uk-tab>li.uk-open:not(.uk-active)>a{margin-bottom:1px;padding-bottom:7px}.uk-tab>li.uk-active>a{border-color:#ddd;border-bottom-color:transparent;background:#f2f2f2;color:#555}.uk-tab>li.uk-disabled>a{color:#999;cursor:text}.uk-tab>li.uk-disabled>a:hover,.uk-tab>li.uk-disabled>a:focus,.uk-tab>li.uk-disabled.uk-active>a{background:none;border-color:transparent}.uk-tab-flip>li{float:right}.uk-tab-flip>li:nth-child(n+2)>a{margin-left:0;margin-right:5px}.uk-tab>li.uk-tab-responsive>a{margin-left:0;margin-right:0}.uk-tab-responsive>a:before{content:"\f0c9\00a0";font-family:FontAwesome}.uk-tab-center{border-bottom:1px solid #ddd}.uk-tab-center-bottom{border-bottom:none;border-top:1px solid #ddd}.uk-tab-center:before,.uk-tab-center:after{content:"";display:table}.uk-tab-center:after{clear:both}.uk-tab-center .uk-tab{position:relative;right:50%;border:none;float:right}.uk-tab-center .uk-tab>li{position:relative;right:-50%}.uk-tab-center .uk-tab>li>a{text-align:center}.uk-tab-bottom{border-top:1px solid #ddd;border-bottom:none}.uk-tab-bottom>li{margin-top:-1px;margin-bottom:0}.uk-tab-bottom>li>a{padding-top:8px;padding-bottom:8px;border-bottom-width:1px;border-top-width:0}.uk-tab-bottom>li:not(.uk-active)>a:hover,.uk-tab-bottom>li:not(.uk-active)>a:focus,.uk-tab-bottom>li.uk-open:not(.uk-active)>a{margin-bottom:0;margin-top:1px;padding-bottom:8px;padding-top:7px}.uk-tab-bottom>li.uk-active>a{border-top-color:transparent;border-bottom-color:#ddd}.uk-tab-grid{margin-left:-5px;border-bottom:none;position:relative;z-index:0}.uk-tab-grid:before{display:block;position:absolute;left:5px;right:0;bottom:-1px;border-top:1px solid #ddd;z-index:-1}.uk-tab-grid>li:first-child>a{margin-left:5px}.uk-tab-grid>li>a{text-align:center}.uk-tab-grid.uk-tab-bottom{border-top:none}.uk-tab-grid.uk-tab-bottom:before{top:-1px;bottom:auto}@media (min-width: 1024px){.uk-tab-left,.uk-tab-right{border-bottom:none}.uk-tab-left>li,.uk-tab-right>li{margin-bottom:0;float:none}.uk-tab-left>li>a,.uk-tab-right>li>a{padding-top:8px;padding-bottom:8px}.uk-tab-left>li:nth-child(n+2)>a,.uk-tab-right>li:nth-child(n+2)>a{margin-left:0;margin-top:5px}.uk-tab-left>li.uk-active>a,.uk-tab-right>li.uk-active>a{border-color:#ddd}.uk-tab-left{border-right:1px solid #ddd}.uk-tab-left>li{margin-right:-1px}.uk-tab-left>li>a{border-bottom-width:1px;border-right-width:0}.uk-tab-left>li:not(.uk-active)>a:hover,.uk-tab-left>li:not(.uk-active)>a:focus{margin-bottom:0;margin-right:1px;padding-bottom:8px;padding-right:11px}.uk-tab-left>li.uk-active>a{border-right-color:transparent}.uk-tab-right{border-left:1px solid #ddd}.uk-tab-right>li{margin-left:-1px}.uk-tab-right>li>a{border-bottom-width:1px;border-left-width:0}.uk-tab-right>li:not(.uk-active)>a:hover,.uk-tab-right>li:not(.uk-active)>a:focus{margin-bottom:0;margin-left:1px;padding-bottom:8px;padding-left:11px}.uk-tab-right>li.uk-active>a{border-left-color:transparent}}.uk-thumbnav{display:-ms-flexbox;display:-webkit-flex;display:flex;-ms-flex-wrap:wrap;-webkit-flex-wrap:wrap;flex-wrap:wrap;margin-left:-10px;margin-top:-10px;padding:0;list-style:none}.uk-thumbnav>*{-ms-flex:none;-webkit-flex:none;flex:none;padding-left:10px;margin-top:10px}.uk-thumbnav:before,.uk-thumbnav:after{content:"";display:block;overflow:hidden}.uk-thumbnav:after{clear:both}.uk-thumbnav>*{float:left}.uk-thumbnav>*>*{display:block;background:#fff}.uk-thumbnav>*>*>img{opacity:0.7;-webkit-transition:opacity 0.15s linear;transition:opacity 0.15s linear}.uk-thumbnav>*>:hover>img,.uk-thumbnav>*>:focus>img{opacity:1}.uk-thumbnav>.uk-active>*>img{opacity:1}.uk-list{padding:0;list-style:none}.uk-list>li:before,.uk-list>li:after{content:"";display:table}.uk-list>li:after{clear:both}.uk-list>li>:last-child{margin-bottom:0}.uk-list
ul{margin:0;padding-left:20px;list-style:none}.uk-list-line>li:nth-child(n+2){margin-top:5px;padding-top:5px;border-top:1px solid #ddd}.uk-list-striped>li{padding:5px
5px}.uk-list-striped>li:nth-of-type(odd){background:#f5f5f5}.uk-list-space>li:nth-child(n+2){margin-top:10px}@media (min-width: 1024px){.uk-description-list-horizontal{overflow:hidden}.uk-description-list-horizontal>dt{width:160px;float:left;clear:both;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.uk-description-list-horizontal>dd{margin-left:180px}}.uk-description-list-line>dt{font-weight:normal}.uk-description-list-line>dt:nth-child(n+2){margin-top:5px;padding-top:5px;border-top:1px solid #ddd}.uk-description-list-line>dd{color:#999}.uk-table{border-collapse:collapse;border-spacing:0;width:100%;margin-bottom:15px}*+.uk-table{margin-top:15px}.uk-table th,




.uk-table
td{padding:8px
8px}.uk-table
th{text-align:left}.uk-table
td{vertical-align:top}.uk-table thead
th{vertical-align:bottom}.uk-table caption,
.uk-table
tfoot{font-size:12px;font-style:italic}.uk-table
caption{text-align:left;color:#999}.uk-table tbody tr.uk-active{background:#eee}.uk-table-middle,
.uk-table-middle
td{vertical-align:middle !important}.uk-table-striped tbody  tr:nth-of-type(odd){background:#f5f5f5}.uk-table-condensed
td{padding:4px
8px}.uk-table-hover tbody tr:hover{background:#eee}.uk-form input,
.uk-form select,
.uk-form
textarea{box-sizing:border-box;margin:0;border-radius:0;font:inherit;color:inherit}.uk-form
select{text-transform:none}.uk-form
optgroup{font:inherit;font-weight:bold}.uk-form input::-moz-focus-inner{border:0;padding:0}.uk-form input[type="checkbox"],
.uk-form input[type="radio"]{padding:0}.uk-form input[type="checkbox"]:not(:disabled),
.uk-form input[type="radio"]:not(:disabled){cursor:pointer}.uk-form textarea,
.uk-form input:not([type]),
.uk-form input[type="text"],
.uk-form input[type="password"],
.uk-form input[type="email"],
.uk-form input[type="url"],
.uk-form input[type="search"],
.uk-form input[type="tel"],
.uk-form input[type="number"],
.uk-form input[type="datetime"]{-webkit-appearance:none}.uk-form input[type="search"]::-webkit-search-cancel-button,
.uk-form input[type="search"]::-webkit-search-decoration{-webkit-appearance:none}.uk-form input[type="number"]::-webkit-inner-spin-button,
.uk-form input[type="number"]::-webkit-outer-spin-button{height:auto}.uk-form
fieldset{border:none;margin:0;padding:0}.uk-form
textarea{overflow:auto;vertical-align:top}.uk-form ::-moz-placeholder{opacity:1}.uk-form :invalid{box-shadow:none}.uk-form input:not([type="radio"]):not([type="checkbox"]),
.uk-form
select{vertical-align:middle}.uk-form>:last-child{margin-bottom:0}.uk-form select,
.uk-form textarea,
.uk-form input:not([type]),
.uk-form input[type="text"],
.uk-form input[type="password"],
.uk-form input[type="datetime"],
.uk-form input[type="datetime-local"],
.uk-form input[type="date"],
.uk-form input[type="month"],
.uk-form input[type="time"],
.uk-form input[type="week"],
.uk-form input[type="number"],
.uk-form input[type="email"],
.uk-form input[type="url"],
.uk-form input[type="search"],
.uk-form input[type="tel"],
.uk-form input[type="color"]{height:20px;max-width:100%;padding:4px
6px;border:1px
solid #ddd;background:#f2f2f2;color:#555;-webkit-transition:all 0.2s linear;-webkit-transition-property:border, background, color, box-shadow, padding;transition:all 0.2s linear;transition-property:border, background, color, box-shadow, padding}.uk-form select:focus,
.uk-form textarea:focus,
.uk-form input:not([type]):focus,
.uk-form input[type="text"]:focus,
.uk-form input[type="password"]:focus,
.uk-form input[type="datetime"]:focus,
.uk-form input[type="datetime-local"]:focus,
.uk-form input[type="date"]:focus,
.uk-form input[type="month"]:focus,
.uk-form input[type="time"]:focus,
.uk-form input[type="week"]:focus,
.uk-form input[type="number"]:focus,
.uk-form input[type="email"]:focus,
.uk-form input[type="url"]:focus,
.uk-form input[type="search"]:focus,
.uk-form input[type="tel"]:focus,
.uk-form input[type="color"]:focus{border-color:#99baca;outline:0;background:#f5fbfe;color:#555}.uk-form select:disabled,
.uk-form textarea:disabled,
.uk-form input:not([type]):disabled,
.uk-form input[type="text"]:disabled,
.uk-form input[type="password"]:disabled,
.uk-form input[type="datetime"]:disabled,
.uk-form input[type="datetime-local"]:disabled,
.uk-form input[type="date"]:disabled,
.uk-form input[type="month"]:disabled,
.uk-form input[type="time"]:disabled,
.uk-form input[type="week"]:disabled,
.uk-form input[type="number"]:disabled,
.uk-form input[type="email"]:disabled,
.uk-form input[type="url"]:disabled,
.uk-form input[type="search"]:disabled,
.uk-form input[type="tel"]:disabled,
.uk-form input[type="color"]:disabled{border-color:#ddd;background-color:#f5f5f5;color:#999}.uk-form :-ms-input-placeholder{color:#999 !important}.uk-form ::-moz-placeholder{color:#999}.uk-form ::-webkit-input-placeholder{color:#999}.uk-form :disabled:-ms-input-placeholder{color:#999 !important}.uk-form :disabled::-moz-placeholder{color:#999}.uk-form :disabled::-webkit-input-placeholder{color:#999}.uk-form
legend{width:100%;border:0;padding:0;padding-bottom:15px;font-size:18px;line-height:30px}.uk-form legend:after{content:"";display:block;border-bottom:1px solid #ddd;width:100%}select.uk-form-small,textarea.uk-form-small,input[type].uk-form-small,input:not([type]).uk-form-small{height:25px;padding:3px
3px;font-size:12px}select.uk-form-large,textarea.uk-form-large,input[type].uk-form-large,input:not([type]).uk-form-large{height:40px;padding:8px
6px;font-size:16px}.uk-form textarea,
.uk-form select[multiple],
.uk-form select[size]{height:auto}.uk-form-danger{border-color:#dc8d99 !important;background:#fff7f8 !important;color:#d85030 !important}.uk-form-success{border-color:#8ec73b !important;background:#fafff2 !important;color:#659f13 !important}.uk-form-blank{border-color:transparent !important;border-style:dashed !important;background:none !important}.uk-form-blank:focus{border-color:#ddd !important}input.uk-form-width-mini{width:40px}select.uk-form-width-mini{width:65px}.uk-form-width-small{width:130px}.uk-form-width-medium{width:200px}.uk-form-width-large{width:500px}.uk-form-row:before,.uk-form-row:after{content:"";display:table}.uk-form-row:after{clear:both}.uk-form-row+.uk-form-row{margin-top:15px}.uk-form-help-inline{display:inline-block;margin:0
0 0 10px}.uk-form-help-block{margin:5px
0 0 0}.uk-form-controls>:first-child{margin-top:0}.uk-form-controls>:last-child{margin-bottom:0}.uk-form-controls-condensed{margin:5px
0}.uk-form-stacked .uk-form-label{display:block;margin-bottom:5px;font-weight:bold}@media (max-width: 1279px){.uk-form-horizontal .uk-form-label{display:block;margin-bottom:5px;font-weight:bold}}@media (min-width: 1280px){.uk-form-horizontal .uk-form-label{width:200px;margin-top:5px;float:left}.uk-form-horizontal .uk-form-controls{margin-left:215px}.uk-form-horizontal .uk-form-controls-text{padding-top:5px}}.uk-form-icon{display:inline-block;position:relative;max-width:100%}.uk-form-icon>[class*='uk-icon-']{position:absolute;top:50%;width:30px;margin-top:-7px;font-size:14px;color:#999;text-align:center;pointer-events:none}.uk-form-icon:not(.uk-form-icon-flip)>input{padding-left:30px !important}.uk-form-icon-flip>[class*='uk-icon-']{right:0}.uk-form-icon-flip>input{padding-right:30px !important}.uk-button::-moz-focus-inner{border:0;padding:0}.uk-button{-webkit-appearance:none;margin:0;border:none;overflow:visible;font:inherit;color:#fff;text-transform:none;display:inline-block;box-sizing:border-box;padding:0
12px;background:#39f;vertical-align:middle;line-height:30px;min-height:30px;font-size:1rem;text-decoration:none;text-align:center}.uk-button:not(:disabled){cursor:pointer}.uk-button:hover,.uk-button:focus{background-color:#222;color:#fff;outline:none;text-decoration:none}.uk-button:active,.uk-button.uk-active{background-color:#222;color:#555}.uk-button-primary{background-color:#39f;color:#fff}.uk-button-primary:hover,.uk-button-primary:focus{background-color:#000;color:#fff}.uk-button-primary:active,.uk-button-primary.uk-active{background-color:#359ac4;color:#fff}.uk-button-success{background-color:#8cc14c;color:#fff}.uk-button-success:hover,.uk-button-success:focus{background-color:#8ec73b;color:#fff}.uk-button-success:active,.uk-button-success.uk-active{background-color:#72ae41;color:#fff}.uk-button-danger{background-color:#da314b;color:#fff}.uk-button-danger:hover,.uk-button-danger:focus{background-color:#e4354f;color:#fff}.uk-button-danger:active,.uk-button-danger.uk-active{background-color:#c91032;color:#fff}.uk-button:disabled{background-color:#f5f5f5;color:#999}.uk-button-link,.uk-button-link:hover,.uk-button-link:focus,.uk-button-link:active,.uk-button-link.uk-active,.uk-button-link:disabled{border-color:transparent;background:none}.uk-button-link{color:#3f6488}.uk-button-link:hover,.uk-button-link:focus,.uk-button-link:active,.uk-button-link.uk-active{color:#777;text-decoration:underline}.uk-button-link:disabled{color:#999}.uk-button-link:focus{outline:1px
dotted}.uk-button-mini{min-height:20px;padding:0
6px;line-height:20px;font-size:11px}.uk-button-small{min-height:25px;padding:0
10px;line-height:25px;font-size:12px}.uk-button-large{min-height:40px;padding:0
15px;line-height:40px;font-size:16px}.uk-button-group{display:inline-block;vertical-align:middle;position:relative;font-size:0.001px;white-space:nowrap}.uk-button-group>*{display:inline-block}.uk-button-group .uk-button{vertical-align:top}.uk-button-dropdown{display:inline-block;vertical-align:middle;position:relative}@font-face{font-family:'FontAwesome';src:url("../../templates/jp-hello/warp/vendor/uikit/fonts/fontawesome-webfont.woff2") format('woff2'), url("../../templates/jp-hello/warp/vendor/uikit/fonts/fontawesome-webfont.woff") format("woff"), url("../../templates/jp-hello/warp/vendor/uikit/fonts/fontawesome-webfont.ttf") format("truetype");font-weight:normal;font-style:normal}[class*='uk-icon-']{font-family:FontAwesome;display:inline-block;font-weight:normal;font-style:normal;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;vertical-align:-15%}[class*='uk-icon-'],[class*='uk-icon-']:hover,[class*='uk-icon-']:focus{text-decoration:none}.uk-icon-small{font-size:150%;vertical-align:-10%}.uk-icon-medium{font-size:200%;vertical-align:-16%}.uk-icon-large{font-size:500%;vertical-align:-22%}.uk-icon-justify{width:1em;text-align:center}.uk-icon-spin{display:inline-block;-webkit-animation:uk-rotate 2s infinite linear;animation:uk-rotate 2s infinite linear}.uk-icon-hover{color:#999}.uk-icon-hover:hover{color:#555}.uk-icon-button{box-sizing:border-box;display:inline-block;width:35px;height:35px;border-radius:100%;background:#39f;line-height:35px;color:#fff;font-size:18px;text-align:center}.uk-icon-button:hover,.uk-icon-button:focus{background-color:#f5f5f5;color:#777;outline:none}.uk-icon-button:active{background-color:#ddd;color:#555}.uk-icon-long-arrow-down:before{content:"\f175"}.uk-icon-long-arrow-up:before{content:"\f176"}.uk-icon-th-large:before{content:"\f009"}.uk-icon-arrows-v:before{content:"\f07d"}.uk-icon-circle-o:before{content:"\f10c"}.uk-icon-caret-up:before{content:"\f0d8"}.uk-icon-thumbs-o-up:before{content:"\f087"}.uk-icon-calculator:before{content:"\f1ec"}.uk-icon-money:before{content:"\f0d6"}.uk-icon-plus:before{content:"\f067"}.uk-icon-star-o:before{content:"\f006"}.uk-icon-tasks:before{content:"\e000"}.uk-icon-percent:before{content:"\f295"}.uk-icon-line-chart:before{content:"\f201"}.uk-icon-area-chart:before{content:"\f1fe"}.uk-icon-clock-o:before{content:"\f017"}.uk-icon-minus:before{content:"\f068"}.uk-icon-chevron-left:before{content:"\f053"}.uk-icon-chevron-right:before{content:"\f054"}.uk-icon-barcode:before{content:"\f02a"}.uk-icon-gamepad:before{content:"\f11b"}.uk-icon-calendar:before{content:"\f073"}.uk-icon-smile-o:before{content:"\f118"}.uk-icon-child:before{content:"\f1ae"}.uk-icon-stethoscope:before{content:"\f0f1"}.uk-icon-user:before{content:"\f007"}.uk-icon-tree:before{content:"\f1bb"}.uk-icon-gift:before{content:"\f06b"}.uk-icon-book:before{content:"\f02d"}.uk-icon-search:before{content:"\f002"}.uk-icon-twitter:before{content:"\f099"}.uk-icon-filter:before{content:"\f0b0"}.uk-icon-upload:before{content:"\f0ee"}.uk-icon-download:before{content:"\f019"}.uk-icon-level-up:before{content:"\f148"}.uk-icon-exclamation:before{content:"\f12a"}.uk-icon-home:before{content:"\f015"}.uk-icon-at:before{content:"\f1fa"}.uk-icon-wrench:before{content:"\f0ad"}.uk-icon-balance-scale:before{content:"\f24e"}.uk-icon-hdd-o:before{content:"\f0a0"}.uk-icon-random:before{content:"\f074"}.uk-icon-refresh:before{content:"\f021"}.uk-icon-remove:before,.uk-icon-close:before,.uk-icon-times:before{content:"\f00d"}.uk-icon-gear:before,.uk-icon-cog:before{content:"\f013"}.uk-icon-gears:before,.uk-icon-cogs:before{content:"\f085"}.uk-icon-edit:before,.uk-icon-pencil-square-o:before{content:"\f044"}.uk-icon-mail-forward:before,.uk-icon-share:before{content:"\f064"}.uk-icon-bar-chart-o:before,.uk-icon-bar-chart:before{content:"\f080"}.uk-icon-facebook-f:before,.uk-icon-facebook:before{content:"\f09a"}.uk-icon-copy:before,.uk-icon-files-o:before{content:"\f0c5"}.uk-icon-navicon:before,.uk-icon-reorder:before,.uk-icon-bars:before{content:"\f0c9"}.uk-icon-flash:before,.uk-icon-bolt:before{content:"\f0e7"}.uk-icon-mail-reply:before,.uk-icon-reply:before{content:"\f112"}.uk-icon-dollar:before,.uk-icon-usd:before{content:"\f155"}.uk-icon-bitcoin:before,.uk-icon-btc:before{content:"\f15a"}.uk-icon-font-awesome:before,.uk-icon-fa:before{content:"\f2b4"}.uk-icon-sign-language:before,.uk-icon-signing:before{content:"\f2a7"}.uk-close::-moz-focus-inner{border:0;padding:0}.uk-close{-webkit-appearance:none;margin:0;border:none;overflow:visible;font:inherit;color:inherit;text-transform:none;padding:0;background:transparent;display:inline-block;box-sizing:content-box;width:20px;line-height:20px;text-align:center;vertical-align:middle;opacity:0.3}.uk-close:after{display:block;content:"\f00d";font-family:FontAwesome}.uk-close:hover,.uk-close:focus{opacity:0.5;outline:none;color:inherit;text-decoration:none;cursor:pointer}.uk-close-alt{padding:2px;border-radius:50%;background:#eee;opacity:1}.uk-close-alt:hover,.uk-close-alt:focus{opacity:1}.uk-close-alt:after{opacity:0.5}.uk-close-alt:hover:after,.uk-close-alt:focus:after{opacity:0.8}.uk-badge{display:inline-block;padding:0
5px;background:#39f;font-size:11px;font-weight:normal;line-height:15px;color:#fff;text-align:center;vertical-align:middle;text-transform:none}a.uk-badge:hover{color:#fff}.uk-badge-notification{box-sizing:border-box;min-width:18px;border-radius:500px;font-size:12px;line-height:18px}.uk-badge-success{background-color:#8cc14c}.uk-badge-warning{background-color:#faa732}.uk-badge-danger{background-color:#da314b}.uk-alert{margin-bottom:15px;padding:10px;background:#ebf7fd;color:#2d7091}*+.uk-alert{margin-top:15px}.uk-alert>:last-child{margin-bottom:0}.uk-alert h1,
.uk-alert h2,
.uk-alert h3,
.uk-alert h4,
.uk-alert h5,
.uk-alert
h6{color:inherit}.uk-alert>.uk-close:first-child{float:right}.uk-alert>.uk-close:first-child+*{margin-top:0}.uk-alert-success{background:#f2fae3;color:#659f13}.uk-alert-warning{background:#fffceb;color:#e28327}.uk-alert-danger{background:#fff1f0;color:#d85030}.uk-alert-large{padding:20px}.uk-alert-large>.uk-close:first-child{margin:-10px -10px 0 0}.uk-thumbnail{display:inline-block;max-width:100%;box-sizing:border-box;margin:0;padding:4px;border:1px
solid #ddd;background:#fff}a.uk-thumbnail:hover,a.uk-thumbnail:focus{border-color:#aaa;background-color:#f2f2f2;text-decoration:none;outline:none}.uk-thumbnail-caption{padding-top:4px;text-align:center;color:#555}.uk-thumbnail-mini{width:150px}.uk-thumbnail-small{width:200px}.uk-thumbnail-medium{width:300px}.uk-thumbnail-large{width:400px}.uk-thumbnail-expand,.uk-thumbnail-expand>img{width:100%}.uk-overlay{display:inline-block;position:relative;max-width:100%;vertical-align:middle;overflow:hidden;-webkit-transform:translateZ(0);margin:0}.uk-overlay.uk-border-circle{-webkit-mask-image:-webkit-radial-gradient(circle, #fff 100%, #000 100%)}.uk-overlay>:first-child{margin-bottom:0}.uk-overlay-panel{position:absolute;top:0;bottom:0;left:0;right:0;padding:20px;color:#fff}.uk-overlay-panel>:last-child,.uk-overlay-panel.uk-flex>*>:last-child{margin-bottom:0}.uk-overlay-panel h1,
.uk-overlay-panel h2,
.uk-overlay-panel h3,
.uk-overlay-panel h4,
.uk-overlay-panel h5,
.uk-overlay-panel
h6{color:inherit}.uk-overlay-panel a:not([class]){color:inherit;text-decoration:underline}.uk-overlay-panel a[class*='uk-icon-']:not(.uk-icon-button){color:inherit}.uk-overlay-hover:not(:hover):not(.uk-hover) .uk-overlay-panel:not(.uk-ignore){opacity:0}.uk-overlay-active :not(.uk-active)>.uk-overlay-panel:not(.uk-ignore){opacity:0}.uk-overlay-background{background:rgba(0,0,0,0.5)}.uk-overlay-image{padding:0}.uk-overlay-top{bottom:auto}.uk-overlay-bottom{top:auto}.uk-overlay-left{right:auto}.uk-overlay-right{left:auto}.uk-overlay-icon:before{content:"\f002";position:absolute;top:50%;left:50%;width:50px;height:50px;margin-top:-25px;margin-left:-25px;font-size:50px;line-height:1;font-family:FontAwesome;text-align:center;color:#fff}.uk-overlay-fade,.uk-overlay-scale,.uk-overlay-spin,.uk-overlay-grayscale,.uk-overlay-blur,[class*='uk-overlay-slide']{transition-duration:0.3s;transition-timing-function:ease-out;transition-property:opacity, transform, filter}.uk-overlay-active .uk-overlay-fade,
.uk-overlay-active .uk-overlay-scale,
.uk-overlay-active .uk-overlay-spin,
.uk-overlay-active [class*='uk-overlay-slide']{transition-duration:0.8s}.uk-overlay-fade{opacity:0.7}.uk-overlay-hover:hover .uk-overlay-fade,
.uk-overlay-hover.uk-hover .uk-overlay-fade,
.uk-overlay-active .uk-active>.uk-overlay-fade{opacity:1}.uk-overlay-scale{-webkit-transform:scale(1);transform:scale(1)}.uk-overlay-hover:hover .uk-overlay-scale,
.uk-overlay-hover.uk-hover .uk-overlay-scale,
.uk-overlay-active .uk-active>.uk-overlay-scale{-webkit-transform:scale(1.1);transform:scale(1.1)}.uk-overlay-spin{-webkit-transform:scale(1) rotate(0deg);transform:scale(1) rotate(0deg)}.uk-overlay-hover:hover .uk-overlay-spin,
.uk-overlay-hover.uk-hover .uk-overlay-spin,
.uk-overlay-active .uk-active>.uk-overlay-spin{-webkit-transform:scale(1.1) rotate(3deg);transform:scale(1.1) rotate(3deg)}.uk-overlay-grayscale{-webkit-filter:grayscale(100%);filter:grayscale(100%)}.uk-overlay-hover:hover .uk-overlay-grayscale,
.uk-overlay-hover.uk-hover .uk-overlay-grayscale,
.uk-overlay-active .uk-active>.uk-overlay-grayscale{-webkit-filter:grayscale(0%);filter:grayscale(0%)}[class*='uk-overlay-slide']{opacity:0}.uk-overlay-slide-top{-webkit-transform:translateY(-100%);transform:translateY(-100%)}.uk-overlay-slide-bottom{-webkit-transform:translateY(100%);transform:translateY(100%)}.uk-overlay-slide-left{-webkit-transform:translateX(-100%);transform:translateX(-100%)}.uk-overlay-slide-right{-webkit-transform:translateX(100%);transform:translateX(100%)}.uk-overlay-hover:hover [class*='uk-overlay-slide'],
.uk-overlay-hover.uk-hover [class*='uk-overlay-slide'],
.uk-overlay-active .uk-active>[class*='uk-overlay-slide']{opacity:1;-webkit-transform:translateX(0) translateY(0);transform:translateX(0) translateY(0)}.uk-overlay-area{position:absolute;top:0;bottom:0;left:0;right:0;background:rgba(0, 0, 0, 0.3);opacity:0;-webkit-transition:opacity 0.15s linear;transition:opacity 0.15s linear;-webkit-transform:translate3d(0, 0, 0)}.uk-overlay:hover .uk-overlay-area,
.uk-overlay.uk-hover .uk-overlay-area,
.uk-overlay-toggle:hover .uk-overlay-area,
.uk-overlay-toggle.uk-hover .uk-overlay-area{opacity:1}.uk-overlay-area:empty:before{content:"\f002";position:absolute;top:50%;left:50%;width:50px;height:50px;margin-top:-25px;margin-left:-25px;font-size:50px;line-height:1;font-family:FontAwesome;text-align:center;color:#fff}.uk-overlay-area:not(:empty){font-size:0.001px}.uk-overlay-area:not(:empty):before{content:'';display:inline-block;height:100%;vertical-align:middle}.uk-overlay-area-content{display:inline-block;box-sizing:border-box;width:100%;vertical-align:middle;font-size:1rem;text-align:center;padding:0
15px;color:#fff}.uk-overlay-area-content>:last-child{margin-bottom:0}.uk-overlay-area-content a:not([class]),
.uk-overlay-area-content a:not([class]):hover{color:inherit}.uk-overlay-caption{position:absolute;bottom:0;left:0;right:0;padding:15px;background:rgba(0, 0, 0, 0.5);color:#fff;opacity:0;-webkit-transition:opacity 0.15s linear;transition:opacity 0.15s linear;-webkit-transform:translate3d(0, 0, 0)}.uk-overlay:hover .uk-overlay-caption,
.uk-overlay.uk-hover .uk-overlay-caption,
.uk-overlay-toggle:hover .uk-overlay-caption,
.uk-overlay-toggle.uk-hover .uk-overlay-caption{opacity:1}[class*='uk-column-']{-webkit-column-gap:25px;-moz-column-gap:25px;column-gap:25px}.uk-column-1-2{-webkit-column-count:2;-moz-column-count:2;column-count:2}.uk-column-1-3{-webkit-column-count:3;-moz-column-count:3;column-count:3}.uk-column-1-4{-webkit-column-count:4;-moz-column-count:4;column-count:4}.uk-column-1-5{-webkit-column-count:5;-moz-column-count:5;column-count:5}.uk-column-1-6{-webkit-column-count:6;-moz-column-count:6;column-count:6}@media (min-width: 480px){.uk-column-small-1-2{-webkit-column-count:2;-moz-column-count:2;column-count:2}.uk-column-small-1-3{-webkit-column-count:3;-moz-column-count:3;column-count:3}.uk-column-small-1-4{-webkit-column-count:4;-moz-column-count:4;column-count:4}.uk-column-small-1-5{-webkit-column-count:5;-moz-column-count:5;column-count:5}.uk-column-small-1-6{-webkit-column-count:6;-moz-column-count:6;column-count:6}}@media (min-width: 1024px){.uk-column-medium-1-2{-webkit-column-count:2;-moz-column-count:2;column-count:2}.uk-column-medium-1-3{-webkit-column-count:3;-moz-column-count:3;column-count:3}.uk-column-medium-1-4{-webkit-column-count:4;-moz-column-count:4;column-count:4}.uk-column-medium-1-5{-webkit-column-count:5;-moz-column-count:5;column-count:5}.uk-column-medium-1-6{-webkit-column-count:6;-moz-column-count:6;column-count:6}}@media (min-width: 1280px){.uk-column-large-1-2{-webkit-column-count:2;-moz-column-count:2;column-count:2}.uk-column-large-1-3{-webkit-column-count:3;-moz-column-count:3;column-count:3}.uk-column-large-1-4{-webkit-column-count:4;-moz-column-count:4;column-count:4}.uk-column-large-1-5{-webkit-column-count:5;-moz-column-count:5;column-count:5}.uk-column-large-1-6{-webkit-column-count:6;-moz-column-count:6;column-count:6}}@media (min-width: 1280px){.uk-column-xlarge-1-2{-webkit-column-count:2;-moz-column-count:2;column-count:2}.uk-column-xlarge-1-3{-webkit-column-count:3;-moz-column-count:3;column-count:3}.uk-column-xlarge-1-4{-webkit-column-count:4;-moz-column-count:4;column-count:4}.uk-column-xlarge-1-5{-webkit-column-count:5;-moz-column-count:5;column-count:5}.uk-column-xlarge-1-6{-webkit-column-count:6;-moz-column-count:6;column-count:6}}[class*='uk-animation-']{-webkit-animation-duration:0.5s;animation-duration:0.5s;-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out;-webkit-animation-fill-mode:both;animation-fill-mode:both}@media
screen{[data-uk-scrollspy*='uk-animation-']:not([data-uk-scrollspy*='target']){opacity:0}}.uk-animation-fade{-webkit-animation-name:uk-fade;animation-name:uk-fade;-webkit-animation-duration:0.8s;animation-duration:0.8s;-webkit-animation-timing-function:linear !important;animation-timing-function:linear !important}.uk-animation-scale-up{-webkit-animation-name:uk-fade-scale-02;animation-name:uk-fade-scale-02}.uk-animation-scale-down{-webkit-animation-name:uk-fade-scale-18;animation-name:uk-fade-scale-18}.uk-animation-slide-top{-webkit-animation-name:uk-fade-top;animation-name:uk-fade-top}.uk-animation-slide-bottom{-webkit-animation-name:uk-fade-bottom;animation-name:uk-fade-bottom}.uk-animation-slide-left{-webkit-animation-name:uk-fade-left;animation-name:uk-fade-left}.uk-animation-slide-right{-webkit-animation-name:uk-fade-right;animation-name:uk-fade-right}.uk-animation-scale{-webkit-animation-name:uk-scale-12;animation-name:uk-scale-12}.uk-animation-shake{-webkit-animation-name:uk-shake;animation-name:uk-shake}.uk-animation-reverse{-webkit-animation-direction:reverse;animation-direction:reverse;-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}.uk-animation-15{-webkit-animation-duration:15s;animation-duration:15s}.uk-animation-top-left{-webkit-transform-origin:0 0;transform-origin:0 0}.uk-animation-top-center{-webkit-transform-origin:50% 0;transform-origin:50% 0}.uk-animation-top-right{-webkit-transform-origin:100% 0;transform-origin:100% 0}.uk-animation-middle-left{-webkit-transform-origin:0 50%;transform-origin:0 50%}.uk-animation-middle-right{-webkit-transform-origin:100% 50%;transform-origin:100% 50%}.uk-animation-bottom-left{-webkit-transform-origin:0 100%;transform-origin:0 100%}.uk-animation-bottom-center{-webkit-transform-origin:50% 100%;transform-origin:50% 100%}.uk-animation-bottom-right{-webkit-transform-origin:100% 100%;transform-origin:100% 100%}.uk-animation-hover:not(:hover),
.uk-animation-hover:not(:hover) [class*='uk-animation-'],
.uk-touch .uk-animation-hover:not(.uk-hover),
.uk-touch .uk-animation-hover:not(.uk-hover) [class*='uk-animation-']{-webkit-animation-name:none;animation-name:none}@-webkit-keyframes uk-fade{0%{opacity:0}100%{opacity:1}}@keyframes uk-fade{0%{opacity:0}100%{opacity:1}}@-webkit-keyframes uk-fade-top{0%{opacity:0;-webkit-transform:translateY(-100%)}100%{opacity:1;-webkit-transform:translateY(0)}}@keyframes uk-fade-top{0%{opacity:0;transform:translateY(-100%)}100%{opacity:1;transform:translateY(0)}}@-webkit-keyframes uk-fade-bottom{0%{opacity:0;-webkit-transform:translateY(100%)}100%{opacity:1;-webkit-transform:translateY(0)}}@keyframes uk-fade-bottom{0%{opacity:0;transform:translateY(100%)}100%{opacity:1;transform:translateY(0)}}@-webkit-keyframes uk-fade-left{0%{opacity:0;-webkit-transform:translateX(-100%)}100%{opacity:1;-webkit-transform:translateX(0)}}@keyframes uk-fade-left{0%{opacity:0;transform:translateX(-100%)}100%{opacity:1;transform:translateX(0)}}@-webkit-keyframes uk-fade-right{0%{opacity:0;-webkit-transform:translateX(100%)}100%{opacity:1;-webkit-transform:translateX(0)}}@keyframes uk-fade-right{0%{opacity:0;transform:translateX(100%)}100%{opacity:1;transform:translateX(0)}}@-webkit-keyframes uk-fade-scale-02{0%{opacity:0;-webkit-transform:scale(0.2)}100%{opacity:1;-webkit-transform:scale(1)}}@keyframes uk-fade-scale-02{0%{opacity:0;transform:scale(0.2)}100%{opacity:1;transform:scale(1)}}@-webkit-keyframes uk-fade-scale-15{0%{opacity:0;-webkit-transform:scale(1.5)}100%{opacity:1;-webkit-transform:scale(1)}}@keyframes uk-fade-scale-15{0%{opacity:0;transform:scale(1.5)}100%{opacity:1;transform:scale(1)}}@-webkit-keyframes uk-fade-scale-18{0%{opacity:0;-webkit-transform:scale(1.8)}100%{opacity:1;-webkit-transform:scale(1)}}@keyframes uk-fade-scale-18{0%{opacity:0;transform:scale(1.8)}100%{opacity:1;transform:scale(1)}}@-webkit-keyframes uk-slide-left{0%{-webkit-transform:translateX(-100%)}100%{-webkit-transform:translateX(0)}}@keyframes uk-slide-left{0%{transform:translateX(-100%)}100%{transform:translateX(0)}}@-webkit-keyframes uk-slide-right{0%{-webkit-transform:translateX(100%)}100%{-webkit-transform:translateX(0)}}@keyframes uk-slide-right{0%{transform:translateX(100%)}100%{transform:translateX(0)}}@-webkit-keyframes uk-slide-left-33{0%{-webkit-transform:translateX(33%)}100%{-webkit-transform:translateX(0)}}@keyframes uk-slide-left-33{0%{transform:translateX(33%)}100%{transform:translateX(0)}}@-webkit-keyframes uk-slide-right-33{0%{-webkit-transform:translateX(-33%)}100%{-webkit-transform:translateX(0)}}@keyframes uk-slide-right-33{0%{transform:translateX(-33%)}100%{transform:translateX(0)}}@-webkit-keyframes uk-scale-12{0%{-webkit-transform:scale(1.2)}100%{-webkit-transform:scale(1)}}@keyframes uk-scale-12{0%{transform:scale(1.2)}100%{transform:scale(1)}}@-webkit-keyframes uk-rotate{0%{-webkit-transform:rotate(0deg)}100%{-webkit-transform:rotate(359deg)}}@keyframes uk-rotate{0%{transform:rotate(0deg)}100%{transform:rotate(359deg)}}@-webkit-keyframes uk-shake{0%,100%{-webkit-transform:translateX(0)}10%{-webkit-transform:translateX(-9px)}20%{-webkit-transform:translateX(8px)}30%{-webkit-transform:translateX(-7px)}40%{-webkit-transform:translateX(6px)}50%{-webkit-transform:translateX(-5px)}60%{-webkit-transform:translateX(4px)}70%{-webkit-transform:translateX(-3px)}80%{-webkit-transform:translateX(2px)}90%{-webkit-transform:translateX(-1px)}}@keyframes uk-shake{0%,100%{transform:translateX(0)}10%{transform:translateX(-9px)}20%{transform:translateX(8px)}30%{transform:translateX(-7px)}40%{transform:translateX(6px)}50%{transform:translateX(-5px)}60%{transform:translateX(4px)}70%{transform:translateX(-3px)}80%{transform:translateX(2px)}90%{transform:translateX(-1px)}}@-webkit-keyframes uk-slide-top-fixed{0%{opacity:0;-webkit-transform:translateY(-10px)}100%{opacity:1;-webkit-transform:translateY(0)}}@keyframes uk-slide-top-fixed{0%{opacity:0;transform:translateY(-10px)}100%{opacity:1;transform:translateY(0)}}@-webkit-keyframes uk-slide-bottom-fixed{0%{opacity:0;-webkit-transform:translateY(10px)}100%{opacity:1;-webkit-transform:translateY(0)}}@keyframes uk-slide-bottom-fixed{0%{opacity:0;transform:translateY(10px)}100%{opacity:1;transform:translateY(0)}}.uk-dropdown,.uk-dropdown-blank{display:none;position:absolute;z-index:1020;box-sizing:border-box;width:240px;box-shadow:5px 5px 20px #888;border-radius:4px;line-height:20px}.uk-dropdown{padding:10px;background:#fff;color:#555;font-size:14px;vertical-align:top}.uk-dropdown:focus{outline:none}.uk-open>.uk-dropdown,.uk-open>.uk-dropdown-blank{display:block;-webkit-animation:uk-slide-top-fixed 0.2s ease-in-out;animation:uk-slide-top-fixed 0.2s ease-in-out;-webkit-transform-origin:0 0;transform-origin:0 0}.uk-dropdown-top{margin-top:-5px}.uk-dropdown-bottom{margin-top:5px}.uk-dropdown-left{margin-left:-5px}.uk-dropdown-right{margin-left:5px}.uk-dropdown .uk-nav{margin:0
-10px}.uk-grid .uk-dropdown-grid+.uk-dropdown-grid{margin-top:10px}.uk-dropdown-grid>[class*='uk-width-']>.uk-panel+.uk-panel{margin-top:10px}@media (min-width: 1024px){.uk-dropdown:not(.uk-dropdown-stack)>.uk-dropdown-grid{margin-left:-10px;margin-right:-10px}.uk-dropdown:not(.uk-dropdown-stack)>.uk-dropdown-grid>[class*='uk-width-']{padding-left:10px;padding-right:10px}.uk-dropdown:not(.uk-dropdown-stack)>.uk-dropdown-grid>[class*='uk-width-']:nth-child(n+2){border-left:1px solid #ddd}.uk-dropdown-width-2:not(.uk-dropdown-stack){width:480px}.uk-dropdown-width-3:not(.uk-dropdown-stack){width:720px}.uk-dropdown-width-4:not(.uk-dropdown-stack){width:960px}.uk-dropdown-width-5:not(.uk-dropdown-stack){width:1200px}}@media {.uk-dropdown-grid>[class*='uk-width-']{width:100%}.uk-dropdown-grid>[class*='uk-width-']:nth-child(n+2){margin-top:10px}}.uk-dropdown-stack>.uk-dropdown-grid>[class*='uk-width-']{width:100%}.uk-dropdown-stack>.uk-dropdown-grid>[class*='uk-width-']:nth-child(n+2){margin-top:10px}.uk-dropdown-small{min-width:150px;width:auto;padding:5px;white-space:nowrap}.uk-dropdown-small .uk-nav{margin:0
-5px}.uk-dropdown-navbar{margin-top:0;background:#f8f8f8;color:#555}.uk-open>.uk-dropdown-navbar{-webkit-animation:uk-fade 0.2s ease-in-out;animation:uk-fade 0.2s ease-in-out}.uk-dropdown-scrollable{overflow-y:auto;max-height:200px}.uk-modal{display:none;position:fixed;top:0;right:0;bottom:0;left:0;z-index:1010;overflow-y:auto;-webkit-overflow-scrolling:touch;background:rgba(0, 0, 0, 0.6);opacity:0;-webkit-transition:opacity 0.15s linear;transition:opacity 0.15s linear;touch-action:cross-slide-y pinch-zoom double-tap-zoom;-webkit-transform:translateZ(0);transform:translateZ(0)}.uk-modal.uk-open{opacity:1}.uk-modal-page,
.uk-modal-page



body{overflow:hidden}.uk-modal-dialog{position:relative;box-sizing:border-box;margin:50px
auto;padding:20px;width:600px;max-width:100%;max-width:calc(100% - 20px);background:#f2f2f2;opacity:0;-webkit-transform:translateY(-100px);transform:translateY(-100px);-webkit-transition:opacity 0.3s linear, -webkit-transform 0.3s ease-out;transition:opacity 0.3s linear, transform 0.3s ease-out}@media (max-width: 1023px){.uk-modal-dialog{width:auto;margin:10px
auto}}.uk-open .uk-modal-dialog{opacity:1;-webkit-transform:translateY(0);transform:translateY(0)}.uk-modal-dialog>:not([class*='uk-modal-']):last-child{margin-bottom:0}.uk-modal-dialog>.uk-close:first-child{margin:-10px -10px 0 0;float:right}.uk-modal-dialog>.uk-close:first-child+:not([class*='uk-modal-']){margin-top:0}.uk-modal-dialog-lightbox{margin:15px
auto;padding:0;max-width:95%;max-width:calc(100% - 30px);min-height:50px}.uk-modal-dialog-lightbox>.uk-close:first-child{position:absolute;top:-12px;right:-12px;margin:0;float:none}@media (max-width: 1333px){.uk-modal-dialog-lightbox>.uk-close:first-child{top:-7px;right:-7px}}.uk-modal-dialog-blank{margin:0;padding:0;width:100%;max-width:100%;-webkit-transition:opacity 0.3s linear;transition:opacity 0.3s linear}.uk-modal-dialog-blank>.uk-close:first-child{position:absolute;top:20px;right:20px;z-index:1;margin:0;float:none}@media (min-width: 1024px){.uk-modal-dialog-large{width:930px}}@media (min-width: 1280px){.uk-modal-dialog-large{width:1130px}}.uk-modal-header{margin-bottom:15px}.uk-modal-footer{margin-top:15px}.uk-modal-header>:last-child,.uk-modal-footer>:last-child{margin-bottom:0}.uk-modal-caption{position:absolute;left:0;right:0;bottom:-20px;margin-bottom:-10px;color:#fff;text-align:center;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.uk-modal-spinner{position:absolute;top:50%;left:50%;-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%);font-size:25px;color:#ddd}.uk-modal-spinner:after{content:"\f110";display:block;font-family:FontAwesome;-webkit-animation:uk-rotate 2s infinite linear;animation:uk-rotate 2s infinite linear}.uk-offcanvas{display:none;position:fixed;top:0;right:0;bottom:0;left:0;z-index:1000;touch-action:none;background:rgba(0,0,0,0.1)}.uk-offcanvas.uk-active{display:block}.uk-offcanvas-page{position:fixed;-webkit-transition:margin-left 0.3s ease-in-out;transition:margin-left 0.3s ease-in-out;margin-left:0}.uk-offcanvas-bar{position:fixed;top:10%;bottom:0;left:0;-webkit-transform:translateX(-100%);transform:translateX(-100%);z-index:1001;width:1000px;max-width:100%;background:#303030;overflow-y:auto;-webkit-overflow-scrolling:touch;-webkit-transition:-webkit-transform 0.3s ease-in-out;transition:transform 0.3s ease-in-out;-ms-scroll-chaining:none}.uk-offcanvas.uk-active .uk-offcanvas-bar.uk-offcanvas-bar-show{-webkit-transform:translateX(0%);transform:translateX(0%)}.uk-offcanvas-bar-flip{left:auto;right:0;-webkit-transform:translateX(100%);transform:translateX(100%)}.uk-offcanvas-bar[mode='none']{-webkit-transition:none;transition:none}.uk-offcanvas-bar[mode='reveal']{-webkit-transform:translateX(0%);transform:translateX(0%);clip:rect(0, 0, 100vh, 0);-webkit-transition:-webkit-transform 0.3s ease-in-out, clip 0.3s ease-in-out;transition:transform 0.3s ease-in-out, clip 0.3s ease-in-out}.uk-offcanvas-bar-flip[mode='reveal']{clip:none;-webkit-transform:translateX(100%);transform:translateX(100%)}.uk-offcanvas-bar-flip[mode='reveal']>*{-webkit-transform:translateX(-100%);transform:translateX(-100%);-webkit-transition:-webkit-transform 0.3s ease-in-out;transition:transform 0.3s ease-in-out}.uk-offcanvas.uk-active .uk-offcanvas-bar-flip[mode='reveal'].uk-offcanvas-bar-show>*{-webkit-transform:translateX(0%);transform:translateX(0%)}.uk-offcanvas .uk-panel{margin:20px
15px;color:#777}.uk-offcanvas .uk-panel-title{color:#ccc}.uk-offcanvas .uk-panel a:not([class]){color:#ccc}.uk-offcanvas .uk-panel a:not([class]):hover{color:#fff}.uk-switcher{margin:0;padding:0;list-style:none;touch-action:cross-slide-y pinch-zoom double-tap-zoom}.uk-switcher>:not(.uk-active){display:none}.uk-text-small{font-size:11px;line-height:16px}.uk-text-large{font-size:18px;line-height:24px;font-weight:normal}.uk-text-bold{font-weight:bold}.uk-text-muted{color:#999 !important}.uk-text-primary{color:#2d7091 !important}.uk-text-success{color:#659f13 !important}.uk-text-warning{color:#e28327 !important}.uk-text-danger{color:#d85030 !important}.uk-text-contrast{color:#fff !important}.uk-text-left{text-align:left !important}.uk-text-right{text-align:right !important}.uk-text-center{text-align:center !important}.uk-text-justify{text-align:justify !important}.uk-text-top{vertical-align:top !important}.uk-text-middle{vertical-align:middle !important}.uk-text-bottom{vertical-align:bottom !important}@media (max-width: 1279px){.uk-text-center-medium{text-align:center !important}.uk-text-left-medium{text-align:left !important}}@media (max-width: 1023px){.uk-text-center-small{text-align:center !important}.uk-text-left-small{text-align:left !important}}.uk-text-nowrap{white-space:nowrap}.uk-text-truncate{overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.uk-text-break{word-wrap:break-word;-webkit-hyphens:auto;-ms-hyphens:auto;-moz-hyphens:auto;hyphens:auto}.uk-text-capitalize{text-transform:capitalize !important}.uk-text-lowercase{text-transform:lowercase !important}.uk-text-uppercase{text-transform:uppercase !important}.uk-container{box-sizing:border-box;max-width:1280px;padding:0
25px}@media (min-width: 1280px){.uk-container{max-width:1300px;padding:0
35px}}.uk-container:before,.uk-container:after{content:"";display:table}.uk-container:after{clear:both}.uk-container-center{margin-left:auto;margin-right:auto}.uk-clearfix:before{content:"";display:table-cell}.uk-clearfix:after{content:"";display:table;clear:both}.uk-nbfc{overflow:hidden}.uk-nbfc-alt{display:table-cell;width:10000px}.uk-float-left{float:left}.uk-float-right{float:right}[class*='uk-float-']{max-width:100%}[class*='uk-align-']{display:block;margin-bottom:15px}.uk-align-left{margin-right:15px;float:left}.uk-align-right{margin-left:15px;float:right}@media (min-width: 1024px){.uk-align-medium-left{margin-right:15px;float:left}.uk-align-medium-right{margin-left:15px;float:right}}.uk-align-center{margin-left:auto;margin-right:auto}.uk-vertical-align{font-size:0.001px}.uk-vertical-align:before{content:'';display:inline-block;height:100%;vertical-align:middle}.uk-vertical-align-middle,.uk-vertical-align-bottom{display:inline-block;max-width:100%;font-size:1rem}.uk-vertical-align-middle{vertical-align:middle}.uk-vertical-align-bottom{vertical-align:bottom}[class*='uk-height']{box-sizing:border-box}.uk-height-1-1{height:100%}.uk-height-viewport{height:100vh;min-height:600px}.uk-responsive-width,.uk-responsive-height{box-sizing:border-box}.uk-responsive-width{max-width:100% !important;height:auto}.uk-responsive-height{max-height:100%;width:auto}.uk-margin{margin-bottom:15px}*+.uk-margin{margin-top:15px}.uk-margin-top{margin-top:15px !important}.uk-margin-bottom{margin-bottom:15px !important}.uk-margin-left{margin-left:15px !important}.uk-margin-right{margin-right:15px !important}.uk-margin-large{margin-bottom:50px}*+.uk-margin-large{margin-top:50px}.uk-margin-large-top{margin-top:50px !important}.uk-margin-large-bottom{margin-bottom:50px !important}.uk-margin-large-left{margin-left:50px !important}.uk-margin-large-right{margin-right:50px !important}.uk-margin-small{margin-bottom:5px}*+.uk-margin-small{margin-top:5px}.uk-margin-small-top{margin-top:5px !important}.uk-margin-small-bottom{margin-bottom:5px !important}.uk-margin-small-left{margin-left:5px !important}.uk-margin-small-right{margin-right:5px !important}.uk-margin-remove{margin:0
!important}.uk-margin-top-remove{margin-top:0 !important}.uk-margin-bottom-remove{margin-bottom:0 !important}.uk-padding-remove{padding:0
!important}.uk-padding-top-remove{padding-top:0 !important}.uk-padding-bottom-remove{padding-bottom:0 !important}.uk-padding-vertical-remove{padding-top:0 !important;padding-bottom:0 !important}.uk-border-circle{border-radius:50%}.uk-border-rounded{border-radius:5px}.uk-heading-large{font-size:36px;line-height:42px}@media (min-width: 1024px){.uk-heading-large{font-size:52px;line-height:64px}}.uk-link-muted,
.uk-link-muted



a{color:#555}.uk-link-muted:hover,
.uk-link-muted a:hover{color:#555}.uk-link-reset,
.uk-link-reset a,
.uk-link-reset:hover,
.uk-link-reset a:hover,
.uk-link-reset:focus,
.uk-link-reset a:focus{color:inherit;text-decoration:none}.uk-scrollable-text{height:300px;overflow-y:scroll;-webkit-overflow-scrolling:touch;resize:both}.uk-scrollable-box{box-sizing:border-box;height:170px;padding:10px;border:1px
solid #ddd;overflow:auto;-webkit-overflow-scrolling:touch;resize:both}.uk-scrollable-box>:last-child{margin-bottom:0}.uk-overflow-hidden{overflow:hidden}.uk-overflow-container{overflow:auto;-webkit-overflow-scrolling:touch}.uk-overflow-container>:last-child{margin-bottom:0}.uk-position-absolute,[class*='uk-position-top'],[class*='uk-position-bottom']{position:absolute !important}.uk-position-top{top:0;left:0;right:0}.uk-position-bottom{bottom:0;left:0;right:0}.uk-position-top-left{top:0;left:0}.uk-position-top-right{top:0;right:0}.uk-position-bottom-left{bottom:0;left:0}.uk-position-bottom-right{bottom:0;right:0}.uk-position-cover{position:absolute;top:0;bottom:0;left:0;right:0}.uk-position-relative{position:relative !important}.uk-position-z-index{z-index:1}.uk-display-block{display:block !important}.uk-display-inline{display:inline !important}.uk-display-inline-block{display:inline-block !important;max-width:100%}@media (min-width: 1280px){.uk-visible-small{display:none !important}.uk-visible-medium{display:none !important}.uk-hidden-large{display:none !important}}@media (min-width: 1024px) and (max-width: 1279px){.uk-visible-small{display:none !important}.uk-visible-large{display:none !important }.uk-hidden-medium{display:none !important}}@media (max-width: 102px){.uk-visible-medium{display:none !important}.uk-visible-large{display:none !important}.uk-hidden-small{display:none !important}}.uk-hidden{display:none !important;visibility:hidden !important}.uk-invisible{visibility:hidden !important}.uk-visible-hover:hover .uk-hidden,
.uk-visible-hover:hover .uk-invisible{display:block !important;visibility:visible !important}.uk-visible-hover-inline:hover .uk-hidden,
.uk-visible-hover-inline:hover .uk-invisible{display:inline-block !important;visibility:visible !important}.uk-touch .uk-hidden-touch,
.uk-notouch .uk-hidden-notouch{display:none !important}.uk-flex{display:-ms-flexbox;display:-webkit-flex;display:flex}.uk-flex-inline{display:-ms-inline-flexbox;display:-webkit-inline-flex;display:inline-flex}.uk-flex>*,.uk-flex-inline>*{-ms-flex-negative:1}.uk-flex-top{-ms-flex-align:start;-webkit-align-items:flex-start;align-items:flex-start}.uk-flex-middle{-ms-flex-align:center;-webkit-align-items:center;align-items:center}.uk-flex-bottom{-ms-flex-align:end;-webkit-align-items:flex-end;align-items:flex-end}.uk-flex-center{-ms-flex-pack:center;-webkit-justify-content:center;justify-content:center}.uk-flex-right{-ms-flex-pack:end;-webkit-justify-content:flex-end;justify-content:flex-end}.uk-flex-space-between{-ms-flex-pack:justify;-webkit-justify-content:space-between;justify-content:space-between}.uk-flex-space-around{-ms-flex-pack:distribute;-webkit-justify-content:space-around;justify-content:space-around}.uk-flex-row-reverse{-ms-flex-direction:row-reverse;-webkit-flex-direction:row-reverse;flex-direction:row-reverse}.uk-flex-column{-ms-flex-direction:column;-webkit-flex-direction:column;flex-direction:column}.uk-flex-column-reverse{-ms-flex-direction:column-reverse;-webkit-flex-direction:column-reverse;flex-direction:column-reverse}.uk-flex-nowrap{-ms-flex-wrap:nowrap;-webkit-flex-wrap:nowrap;flex-wrap:nowrap}.uk-flex-wrap{-ms-flex-wrap:wrap;-webkit-flex-wrap:wrap;flex-wrap:wrap}.uk-flex-wrap-reverse{-ms-flex-wrap:wrap-reverse;-webkit-flex-wrap:wrap-reverse;flex-wrap:wrap-reverse}.uk-flex-wrap-top{-ms-flex-line-pack:start;-webkit-align-content:flex-start;align-content:flex-start}.uk-flex-wrap-middle{-ms-flex-line-pack:center;-webkit-align-content:center;align-content:center}.uk-flex-wrap-bottom{-ms-flex-line-pack:end;-webkit-align-content:flex-end;align-content:flex-end}.uk-flex-wrap-space-between{-ms-flex-line-pack:justify;-webkit-align-content:space-between;align-content:space-between}.uk-flex-wrap-space-around{-ms-flex-line-pack:distribute;-webkit-align-content:space-around;align-content:space-around}.uk-flex-order-first{-ms-flex-order:-1;-webkit-order:-1;order:-1}.uk-flex-order-last{-ms-flex-order:99;-webkit-order:99;order:99}@media (min-width: 480px){.uk-flex-order-first-small{-ms-flex-order:-1;-webkit-order:-1;order:-1}.uk-flex-order-last-small{-ms-flex-order:99;-webkit-order:99;order:99}}@media (min-width: 1024px){.uk-flex-order-first-medium{-ms-flex-order:-1;-webkit-order:-1;order:-1}.uk-flex-order-last-medium{-ms-flex-order:99;-webkit-order:99;order:99}}@media (min-width: 1280px){.uk-flex-order-first-large{-ms-flex-order:-1;-webkit-order:-1;order:-1}.uk-flex-order-last-large{-ms-flex-order:99;-webkit-order:99;order:99}}@media (min-width: 1280px){.uk-flex-order-first-xlarge{-ms-flex-order:-1;-webkit-order:-1;order:-1}.uk-flex-order-last-xlarge{-ms-flex-order:99;-webkit-order:99;order:99}}.uk-flex-item-none{-ms-flex:none;-webkit-flex:none;flex:none}.uk-flex-item-auto{-ms-flex:auto;-webkit-flex:auto;flex:auto;-ms-flex-negative:1}.uk-flex-item-1{-ms-flex:1;-webkit-flex:1;flex:1}.uk-contrast{color:#fff}.uk-contrast a:not([class]),
.uk-contrast .uk-link{color:rgba(255, 255, 255, 0.7);text-decoration:none}.uk-contrast a:not([class]):hover,
.uk-contrast .uk-link:hover{color:#fff;text-decoration:underline}.uk-contrast :not(pre) > code,
.uk-contrast :not(pre) > kbd,
.uk-contrast :not(pre)>samp{color:#fff}.uk-contrast
em{color:#fff}.uk-contrast h1,
.uk-contrast h2,
.uk-contrast h3,
.uk-contrast h4,
.uk-contrast h5,
.uk-contrast
h6{color:#fff}.uk-contrast
hr{border-top-color:rgba(255, 255, 255, 0.2)}.uk-contrast .uk-nav li > a,
.uk-contrast .uk-nav li>a:hover{text-decoration:none}.uk-contrast .uk-nav-side>li>a{color:#fff}.uk-contrast .uk-nav-side > li > a:hover,
.uk-contrast .uk-nav-side>li>a:focus{background:rgba(255, 255, 255, 0.1);color:#fff}.uk-contrast .uk-nav-side>li.uk-active>a{background:#fff;color:#444}.uk-contrast .uk-nav-side .uk-nav-header{color:#fff}.uk-contrast .uk-nav-side .uk-nav-divider{border-top-color:rgba(255, 255, 255, 0.2)}.uk-contrast .uk-nav-side ul
a{color:rgba(255, 255, 255, 0.7)}.uk-contrast .uk-nav-side ul a:hover{color:#fff}.uk-contrast .uk-subnav>*>a{color:rgba(255, 255, 255, 0.7);text-decoration:none}.uk-contrast .uk-subnav > * > a:hover,
.uk-contrast .uk-subnav>*>a:focus{color:#fff;text-decoration:none}.uk-contrast .uk-subnav>.uk-active>a{color:#fff}.uk-contrast .uk-subnav-line>:nth-child(n+2):before{border-left-color:rgba(255, 255, 255, 0.2)}.uk-contrast .uk-subnav-pill > * > a:hover,
.uk-contrast .uk-subnav-pill>*>a:focus{background:rgba(255, 255, 255, 0.7);color:#444;text-decoration:none}.uk-contrast .uk-subnav-pill>.uk-active>a{background:#fff;color:#444}.uk-contrast .uk-tab{border-bottom-color:rgba(255, 255, 255, 0.2)}.uk-contrast .uk-tab>li>a{border-color:transparent;color:rgba(255, 255, 255, 0.7)}.uk-contrast .uk-tab > li > a:hover,
.uk-contrast .uk-tab > li > a:focus,
.uk-contrast .uk-tab>li.uk-open>a{border-color:rgba(255, 255, 255, 0.7);background:rgba(255, 255, 255, 0.7);color:#444;text-decoration:none}.uk-contrast .uk-tab>li.uk-active>a{border-color:rgba(255, 255, 255, 0.2);border-bottom-color:transparent;background:#fff;color:#444}.uk-contrast .uk-tab-center{border-bottom-color:rgba(255, 255, 255, 0.2)}.uk-contrast .uk-tab-grid:before{border-top-color:rgba(255, 255, 255, 0.2)}.uk-contrast .uk-list-line>li:nth-child(n+2){border-top-color:rgba(255, 255, 255, 0.2)}.uk-contrast .uk-form select,
.uk-contrast .uk-form textarea,
.uk-contrast .uk-form input:not([type]),
.uk-contrast .uk-form input[type="text"],
.uk-contrast .uk-form input[type="password"],
.uk-contrast .uk-form input[type="datetime"],
.uk-contrast .uk-form input[type="datetime-local"],
.uk-contrast .uk-form input[type="date"],
.uk-contrast .uk-form input[type="month"],
.uk-contrast .uk-form input[type="time"],
.uk-contrast .uk-form input[type="week"],
.uk-contrast .uk-form input[type="number"],
.uk-contrast .uk-form input[type="email"],
.uk-contrast .uk-form input[type="url"],
.uk-contrast .uk-form input[type="search"],
.uk-contrast .uk-form input[type="tel"],
.uk-contrast .uk-form input[type="color"]{border-color:rgba(255, 255, 255, 0.8);background:rgba(255, 255, 255, 0.8);color:#444;background-clip:padding-box}.uk-contrast .uk-form select:focus,
.uk-contrast .uk-form textarea:focus,
.uk-contrast .uk-form input:not([type]):focus,
.uk-contrast .uk-form input[type="text"]:focus,
.uk-contrast .uk-form input[type="password"]:focus,
.uk-contrast .uk-form input[type="datetime"]:focus,
.uk-contrast .uk-form input[type="datetime-local"]:focus,
.uk-contrast .uk-form input[type="date"]:focus,
.uk-contrast .uk-form input[type="month"]:focus,
.uk-contrast .uk-form input[type="time"]:focus,
.uk-contrast .uk-form input[type="week"]:focus,
.uk-contrast .uk-form input[type="number"]:focus,
.uk-contrast .uk-form input[type="email"]:focus,
.uk-contrast .uk-form input[type="url"]:focus,
.uk-contrast .uk-form input[type="search"]:focus,
.uk-contrast .uk-form input[type="tel"]:focus,
.uk-contrast .uk-form input[type="color"]:focus{border-color:#fff;background:#fff;color:#444}.uk-contrast .uk-form :-ms-input-placeholder{color:rgba(68, 68, 68, 0.7) !important}.uk-contrast .uk-form ::-moz-placeholder{color:rgba(68, 68, 68, 0.7)}.uk-contrast .uk-form ::-webkit-input-placeholder{color:rgba(68, 68, 68, 0.7)}.uk-contrast .uk-button{color:#444;background:#fff}.uk-contrast .uk-button:hover,
.uk-contrast .uk-button:focus{background-color:rgba(255, 255, 255, 0.8);color:#444}.uk-contrast .uk-button:active,
.uk-contrast .uk-button.uk-active{background-color:rgba(255, 255, 255, 0.7);color:#444}.uk-contrast .uk-button-primary{background-color:#00a8e6;color:#fff}.uk-contrast .uk-button-primary:hover,
.uk-contrast .uk-button-primary:focus{background-color:#35b3ee;color:#fff}.uk-contrast .uk-button-primary:active,
.uk-contrast .uk-button-primary.uk-active{background-color:#0091ca;color:#fff}.uk-contrast .uk-icon-hover{color:rgba(255, 255, 255, 0.7)}.uk-contrast .uk-icon-hover:hover{color:#fff}.uk-contrast .uk-icon-button{background:#fff;color:#444}.uk-contrast .uk-icon-button:hover,
.uk-contrast .uk-icon-button:focus{background-color:rgba(255, 255, 255, 0.8);color:#444}.uk-contrast .uk-icon-button:active{background-color:rgba(255, 255, 255, 0.7);color:#444}.uk-contrast .uk-text-muted{color:rgba(255, 255, 255, 0.6) !important}.uk-contrast .uk-text-primary{color:#2d7091 !important}@media
print{*,*:before,*:after{background:transparent !important;color:black !important;box-shadow:none !important;text-shadow:none !important}a,a:visited{text-decoration:underline}pre,blockquote{border:1px
solid #999;page-break-inside:avoid}thead{display:table-header-group}tr,img{page-break-inside:avoid}img{max-width:100% !important}@page{margin:0.5cm}p,h2,h3{orphans:3;widows:3}h2,h3{page-break-after:avoid}}.uk-dotnav{display:-ms-flexbox;display:-webkit-flex;display:flex;-ms-flex-wrap:wrap;-webkit-flex-wrap:wrap;flex-wrap:wrap;margin-left:-15px;margin-top:-15px;padding:0;list-style:none}.uk-dotnav>*{-ms-flex:none;-webkit-flex:none;flex:none;padding-left:15px;margin-top:15px}.uk-dotnav:before,.uk-dotnav:after{content:"";display:block;overflow:hidden}.uk-dotnav:after{clear:both}.uk-dotnav>*{float:left}.uk-dotnav>*>*{display:block;box-sizing:content-box;width:20px;height:20px;border-radius:50%;background:rgba(50,50,50,0.1);text-indent:100%;overflow:hidden;white-space:nowrap}.uk-dotnav>*>:hover,.uk-dotnav>*>:focus{background:rgba(50,50,50,0.4);outline:none}.uk-dotnav>*>:active{background:rgba(50,50,50,0.6)}.uk-dotnav>.uk-active>*{background:rgba(50,50,50,0.4)}.uk-dotnav-contrast>*>*{background:rgba(255,255,255,0.4)}.uk-dotnav-contrast>*>:hover,.uk-dotnav-contrast>*>:focus{background:rgba(255,255,255,0.7)}.uk-dotnav-contrast>*>:active{background:rgba(255,255,255,0.9)}.uk-dotnav-contrast>.uk-active>*{background:rgba(255,255,255,0.9)}.uk-dotnav-vertical{-ms-flex-direction:column;-webkit-flex-direction:column;flex-direction:column}.uk-dotnav-vertical>*{float:none}.uk-slidenav{display:inline-block;box-sizing:border-box;width:60px;height:60px;line-height:60px;color:rgba(50,50,50,0.4);font-size:60px;text-align:center}.uk-slidenav:hover,.uk-slidenav:focus{outline:none;text-decoration:none;color:rgba(50,50,50,0.7);cursor:pointer}.uk-slidenav:active{color:rgba(50,50,50,0.9)}.uk-slidenav-previous:before{content:"\f104";font-family:FontAwesome}.uk-slidenav-next:before{content:"\f105";font-family:FontAwesome}.uk-slidenav-position{position:relative}.uk-slidenav-position .uk-slidenav{display:none;position:absolute;top:50%;z-index:1;margin-top:-30px}.uk-slidenav-position:hover .uk-slidenav{display:block}.uk-slidenav-position .uk-slidenav-previous{left:20px}.uk-slidenav-position .uk-slidenav-next{right:20px}.uk-slidenav-contrast{color:rgba(255,255,255,0.5)}.uk-slidenav-contrast:hover,.uk-slidenav-contrast:focus{color:rgba(255,255,255,0.7)}.uk-slidenav-contrast:active{color:rgba(255,255,255,0.9)}.uk-progress{box-sizing:border-box;height:20px;margin-bottom:15px;background:#eee;overflow:hidden;line-height:20px}*+.uk-progress{margin-top:15px}.uk-progress-bar{width:0;height:100%;background:#39f;float:left;-webkit-transition:width 0.6s ease;transition:width 0.6s ease;font-size:12px;color:#fff;text-align:center}.uk-progress-mini{height:6px}.uk-progress-small{height:12px}.uk-progress-success .uk-progress-bar{background-color:#8cc14c}.uk-progress-warning .uk-progress-bar{background-color:#faa732}.uk-progress-danger .uk-progress-bar{background-color:#da314b}.uk-progress-striped .uk-progress-bar{background-image:-webkit-linear-gradient(-45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);background-image:linear-gradient(-45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);background-size:30px 30px}.uk-progress-striped.uk-active .uk-progress-bar{-webkit-animation:uk-progress-bar-stripes 2s linear infinite;animation:uk-progress-bar-stripes 2s linear infinite}@-webkit-keyframes uk-progress-bar-stripes{0%{background-position:0 0}100%{background-position:30px 0}}@keyframes uk-progress-bar-stripes{0%{background-position:0 0}100%{background-position:30px 0}}.uk-accordion-title{margin-top:0;margin-bottom:15px;padding:5px
15px;background:#eee;font-size:18px;line-height:24px;cursor:pointer}.uk-accordion-content{padding:0
15px 15px 15px}.uk-accordion-content:before,.uk-accordion-content:after{content:"";display:table}.uk-accordion-content:after{clear:both}.uk-accordion-content>:last-child{margin-bottom:0}[data-uk-slider]{direction:ltr}html[dir="rtl"] .uk-slider>*{direction:rtl}.uk-slider{position:relative;z-index:0;touch-action:pan-y}.uk-slider:not(.uk-grid){margin:0;padding:0;list-style:none}.uk-slider>*{position:absolute;top:0;left:0}.uk-slider-container{overflow:hidden}.uk-slider:not(.uk-drag){-webkit-transition:-webkit-transform 200ms linear;transition:transform 200ms linear}.uk-slider.uk-drag{cursor:col-resize;-moz-user-select:none;-webkit-user-select:none;-ms-user-select:none;user-select:none}.uk-slider a,
.uk-slider
img{-webkit-user-drag:none;user-drag:none;-webkit-touch-callout:none}.uk-slider
img{pointer-events:none}.uk-slider-fullscreen,.uk-slider-fullscreen>li{height:100vh}.uk-slideshow{position:relative;z-index:0;width:100%;margin:0;padding:0;list-style:none;overflow:hidden;touch-action:pan-y}.uk-slideshow>li{position:absolute;top:0;left:0;width:100%;opacity:0}.uk-slideshow>.uk-active{z-index:10;opacity:1}.uk-slideshow>li>img{visibility:hidden}[data-uk-slideshow-slide]{cursor:pointer}.uk-slideshow-fullscreen,.uk-slideshow-fullscreen>li{height:100vh}.uk-slideshow-fade-in{-webkit-animation:uk-fade 0.5s linear;animation:uk-fade 0.5s linear}.uk-slideshow-fade-out{-webkit-animation:uk-fade 0.5s linear reverse;animation:uk-fade 0.5s linear reverse}.uk-slideshow-scroll-forward-in{-webkit-animation:uk-slide-right 0.5s ease-in-out;animation:uk-slide-right 0.5s ease-in-out}.uk-slideshow-scroll-forward-out{-webkit-animation:uk-slide-left 0.5s ease-in-out reverse;animation:uk-slide-left 0.5s ease-in-out reverse}.uk-slideshow-scroll-backward-in{-webkit-animation:uk-slide-left 0.5s ease-in-out;animation:uk-slide-left 0.5s ease-in-out}.uk-slideshow-scroll-backward-out{-webkit-animation:uk-slide-right 0.5s ease-in-out reverse;animation:uk-slide-right 0.5s ease-in-out reverse}.uk-slideshow-scale-out{-webkit-animation:uk-fade-scale-15 0.5s ease-in-out reverse;animation:uk-fade-scale-15 0.5s ease-in-out reverse}.uk-slideshow-swipe-forward-in{-webkit-animation:uk-slide-left-33 0.5s ease-in-out;animation:uk-slide-left-33 0.5s ease-in-out}.uk-slideshow-swipe-forward-out{-webkit-animation:uk-slide-left 0.5s ease-in-out reverse;animation:uk-slide-left 0.5s ease-in-out reverse}.uk-slideshow-swipe-backward-in{-webkit-animation:uk-slide-right-33 0.5s ease-in-out;animation:uk-slide-right-33 0.5s ease-in-out}.uk-slideshow-swipe-backward-out{-webkit-animation:uk-slide-right 0.5s ease-in-out reverse;animation:uk-slide-right 0.5s ease-in-out reverse}.uk-slideshow-swipe-forward-in:before,.uk-slideshow-swipe-backward-in:before{content:'';position:absolute;top:0;bottom:0;left:0;right:0;z-index:1;background:rgba(0, 0, 0, 0.6);-webkit-animation:uk-fade 0.5s ease-in-out reverse;animation:uk-fade 0.5s ease-in-out reverse}.uk-search{display:inline-block;position:relative;margin:0}.uk-search:before{content:"\f002";position:absolute;top:0;left:0;width:30px;line-height:30px;text-align:center;font-family:FontAwesome;font-size:14px;color:rgba(0,0,0,0.2)}.uk-search-field::-moz-focus-inner{border:0;padding:0}.uk-search-field::-webkit-search-cancel-button,.uk-search-field::-webkit-search-decoration{-webkit-appearance:none}.uk-search-field::-ms-clear{display:none}.uk-search-field::-moz-placeholder{opacity:1}.uk-search-field{box-sizing:border-box;margin:0;border-radius:0;font:inherit;color:#555;-webkit-appearance:none;width:200px;height:30px;padding:0
0 0 30px;border:1px
solid #eee;background:#fff;-webkit-transition:all 0.2s linear;transition:all 0.2s linear;vertical-align:middle}.uk-search-field:-ms-input-placeholder{color:#999 !important}.uk-search-field::-moz-placeholder{color:#999}.uk-search-field::-webkit-input-placeholder{color:#999}.uk-search-field:focus{outline:0}.uk-search-field:focus,
.uk-search.uk-active .uk-search-field{width:220px}.uk-dropdown-search{width:300px;margin-top:0;background:#fff;color:#555}.uk-open>.uk-dropdown-search{-webkit-animation:uk-slide-bottom-fixed 0.2s ease-in-out;animation:uk-slide-bottom-fixed 0.2s ease-in-out}.uk-navbar-flip .uk-dropdown-search{margin-top:5px;margin-right:-15px}.uk-nav-search>li>a{color:#555}.uk-nav-search>li.uk-active>a{background:#39f;color:#fff;outline:none}.uk-nav-search .uk-nav-header{color:#999}.uk-nav-search .uk-nav-divider{border-top:1px solid #ddd}.uk-nav-search ul
a{color:#3f6488}.uk-nav-search ul a:hover{color:#777}.uk-offcanvas .uk-search{display:block;margin:20px
15px}.uk-offcanvas .uk-search:before{color:#777}.uk-offcanvas .uk-search-field{width:100%;border-color:rgba(0, 0, 0, 0);background:#1a1a1a;color:#ccc}.uk-offcanvas .uk-search-field:-ms-input-placeholder{color:#777 !important}.uk-offcanvas .uk-search-field::-moz-placeholder{color:#777}.uk-offcanvas .uk-search-field::-webkit-input-placeholder{color:#777}.uk-tooltip{display:none;position:absolute;z-index:1030;box-sizing:border-box;max-width:250px;padding:10px
8px;background:#255879e6;color:#fff;font-size:14px;line-height:18px;border-radius:4px}.uk-tooltip:after{content:"";display:block;position:absolute;width:0;height:0;border:5px
dashed #333}.uk-tooltip-top:after,.uk-tooltip-top-left:after,.uk-tooltip-top-right:after{bottom:-5px;border-top-style:solid;border-bottom:none;border-left-color:transparent;border-right-color:transparent;border-top-color:#333}.uk-tooltip-bottom:after,.uk-tooltip-bottom-left:after,.uk-tooltip-bottom-right:after{top:-5px;border-bottom-style:solid;border-top:none;border-left-color:transparent;border-right-color:transparent;border-bottom-color:#333}.uk-tooltip-top:after,.uk-tooltip-bottom:after{left:50%;margin-left:-5px}.uk-tooltip-top-left:after,.uk-tooltip-bottom-left:after{left:10px}.uk-tooltip-top-right:after,.uk-tooltip-bottom-right:after{right:10px}.uk-tooltip-left:after{right:-5px;top:50%;margin-top:-5px;border-left-style:solid;border-right:none;border-top-color:transparent;border-bottom-color:transparent;border-left-color:#333}.uk-tooltip-right:after{left:-5px;top:50%;margin-top:-5px;border-right-style:solid;border-left:none;border-top-color:transparent;border-bottom-color:transparent;border-right-color:#333}#toolbar{margin-bottom:35px}.tm-toolbar{background-color:#fff;padding:10px
30px;margin-top:30px}.tm-toolbar
a{color:#222}.tm-toolbar,
.tm-toolbar h1,
.tm-toolbar h2,
.tm-toolbar h3,
.tm-toolbar h4,
.tm-toolbar h5,
.tm-toolbar
h6{color:#222}.tm-content{background:#fff}#top-a,#top-b,#top-c,#top-d{margin-bottom:35px}#bottom-a,#bottom-b,#bottom-c,#bottom-d{margin-top:35px}#jp-right{padding-left:35px}#jp-left{background-color:#255879}.tm-footer{margin-top:25px !important}.tm-footer .uk-panel{margin:0
!important}.demo-logo{background-color:rgba(255,255,255,0.1);text-decoration:none;color:#fff}a.demo-logo{text-decoration:none !important}@media all and (max-width: 1024px){#jp-left{position:relative!important;width:100%!important;height:auto}#jp-left
.inner{position:relative;margin:0
0 20px 0;width:100%;padding:0;text-align:left;height:auto;float:none !important}#jp-right{position:relative;width:100%;margin:0px
auto!important;height:auto;padding-left:0 !important}}.uk-navbar-toggle{color:#fff}.uk-dropdown-navbar{border:1px
solid #eee}.uk-icon,.uk-icon-small,.uk-icon-medium,.uk-icon-large{color:#255879 !important}.uk-icon-button{background:#39f !important}span.ico{background:#39f;color:#fff}.uk-icon-hover{color:#fff}.uk-navbar-nav>li.uk-parent>a:after{display:none}.uk-navbar-toggle:after{content:"\f039";font-family:FontAwesome;vertical-align:middle}.uk-navbar-toggle-alt:after{content:"\f039"}h1.uk-article-title::after,h3.uk-panel-title::after{background-color:#39f}.uk-bg-title .uk-panel-title{background-color:#39f;margin-top:-30px;margin-left:-30px;margin-right:-30px;padding:10px
30px;color:#fff}.sprocket-grids-b-readon{padding:4px
8px;background-color:#39f;color:#fff}.sprocket-grids-b-title a:hover{text-decoration:none;color:#39f}.sprocket-mosaic .sprocket-mosaic-tags li,
#main .sprocket-mosaic ul.sprocket-mosaic-tags
li{background:#39f;color:#fff}.sprocket-strips-c .sprocket-strips-c-image{border-color:#39f}hr{margin:20px
0 !important}.uk-panel-box-primary
a{color:#fff}.uk-panel-box-secondary
a{color:#fff}*+p,*+hr,*+ul,*+ol,*+dl,*+blockquote,*+pre,*+address,*+fieldset,*+figure,h1,h2,h3,h4,h5,h6{margin:10px
0 4px 0}.uk-text-large{margin:20px
0}.uk-open>.uk-dropdown{display:block;-webkit-animation:uk-slide-top-fixed 0.8s ease-in-out;animation:uk-slide-top-fixed 0.8s ease-in-out;-webkit-transform-origin:0 0;transform-origin:0 0}.uk-navbar-nav>li:hover>a,.uk-navbar-nav>li>a:focus,.uk-navbar-nav>li.uk-open>a{-webkit-animation:uk-slide-top-fixed 0.3s fade-in-out;animation:uk-slide-top-fixed 0.3s fade-in-out;-webkit-transform-origin:0 0;transform-origin:0 0}@media (max-width: 800px){.tm-content{padding:10px}}@media (min-width: 801px){.tm-content{padding:25px}}.uk-dropdown-navbar{background:#fff}html{overflow-y:scroll}.tm-toolbar,.tm-headerbar,.tm-navbar,.tm-footer{margin-top:35px;margin-bottom:35px}@media (max-width: 480px){.tm-navbar{margin:0
-25px 25px -25px;border-width:0 0 1px 0}.tm-logo-small:hover{text-decoration:none}.tm-navbar:not(.uk-navbar-attached){border-radius:0}}.tm-logo-small{letter-spacing:-0.31em}.tm-toolbar .uk-float-left .uk-panel{margin:0
25px 0 0;float:left}.tm-toolbar .uk-float-right .uk-panel{margin:0
0 0 25px;float:right}.tm-headerbar .tm-logo{float:left}.tm-headerbar .uk-panel{max-width:100%;margin-right:0;float:right}.tm-main>:nth-child(n+2){margin-top:25px}.tm-content>:last-child{margin-bottom:0}.tm-footer{position:relative;text-align:center}.tm-footer .uk-panel+.uk-panel{margin-top:25px}.tm-totop-scroller{display:block;position:absolute;top:0;right:0;z-index:1000;width:20px;height:20px;line-height:20px;font-size:14px;color:#555;text-align:center;-webkit-transition:all linear 0.05s;transition:all linear 0.05s}.tm-totop-scroller:after{content:"\f077";font-family:"FontAwesome"}.tm-totop-scroller:hover,.tm-totop-scroller:focus{color:#888;font-size:16px;outline:none;text-decoration:none}.tm-totop-scroller:active{color:#222;font-size:11px}.tm-leading-article .uk-article:last-child{padding-bottom:25px;border-bottom:1px solid #ddd}.tm-error-icon{font-size:250px}.tm-error-headline{font-size:100px}.tm-offline{width:300px}.tm-socialbuttons>div{margin-right:10px;float:left}.tm-totop-scroller{color:#444;display:block;font-size:14px;height:20px;line-height:20px;position:fixed;right:20px;text-align:center;bottom:20px;transition:all 0.05s linear 0s;width:20px;z-index:1000;top:inherit}.alignleft{display:block;margin-right:15px;float:left}.alignright{display:block;margin-left:15px;float:right}.aligncenter{display:block;margin-left:auto;margin-right:auto}
.off-font {font-size:20px; }
.topnav {
  overflow: hidden;
  background-color: #333;
  position: relative;
}

.topnav #myLinks {
  display: none;
}

.topnav a {
  color: white;
  text-decoration: none;
  font-size: 17px;
  display: block;
}

.topnav a.icon-top-menu {
  background: black;
  display: block;
  position: absolute;
  right: 0;
  top: 0;
}

.topnav a:hover {
  color: black;
}

.active1 {
  background-color: #000;
  color: white;
}
.active2 {
  background-color: #303030;
  
}
.histnone {
 display:none;
}
</style>
<!-- Coração !-->
<style>

:root {
  --grey: #CCC;
  --magenta: #F06; 
}

p > span {
  color: var(--magenta);
}

#container {
  display: flex; 
  justify-content: center; 
  align-items: center; 
}

#heart {
  width: 22px;  
  stroke: var(--magenta);
  fill: var(--grey);
  stroke-dasharray: 54;
  stroke-dashoffset: 54; 
}

#heart.like {
  animation: 2s ease-in forwards like, 
  0.8s linear 2s 2 forwards beat;
}

#heart.unlike {
  animation: 2s ease-out forwards unlike; 
}

@keyframes like {
  0% {
    stroke-dashoffset: 54;
    fill: var(--grey);
  }

  70% {
    stroke-dashoffset: 0;
    fill: var(--grey);
  }

  100% {
    stroke-dashoffset: 0;
    fill: var(--magenta);
  }
}

@keyframes unlike {
  0% {
    stroke-dashoffset: 0;
    fill: var(--magenta); 
  }
  
  30% {
    stroke-dashoffset: 0;
    fill: var(--grey);
  }
  
  100% {
    stroke-dashoffset: 54;
    fill: var(--grey);
  }
}
</style>
<!-- Coração !-->
<style>
.tabela {
  width: 100%;
}

.tabela th td tbody {
  text-align: left;
  padding: 8px;
  
}

.tabelhinha{
  font-size: 9px;
  position: absolute; 
  height: 230px;
  width: auto;
  overflow-y: auto;
  overflow-x: hidden;
}
.star{
  position: absolute;
  float: left;
  top: 520px;
  left: -55%;
}
.tabfavo{
width:70px;	
}

.tabela tr:nth-child(even) {
	background-color: #d5d5d580;
	}

.overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  transition: opacity 500ms;
  visibility: hidden;
  opacity: 0;
}
.overlay:target {
  visibility: visible;
  opacity: 1;
}

.popup {
  margin: 70px auto;
  padding: 20px;
  background: #fff;
  border-radius: 5px;
  width: 90%;
  position: relative;
  transition: all 5s ease-in-out;
  height: 550px;
}

.popup h2 {
  margin-top: 0;
  color: #333;
  font-family: Tahoma, Arial, sans-serif;
}
.popup .close {
  position: absolute;
  top: 20px;
  right: 30px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
}
.popup .close:hover {
  color: #FF0000;
}
.close1 {
  position: absolute;
  top: 20px;
  right: 60px;
  transition: all 200ms;
  width: 16px;
  font-weight: bold;
  text-decoration: none;
  transform: rotate(270deg);
}
.popup .content {
  max-height: 30%;
  overflow: auto;
}

@media screen and (max-width: 700px){
  .box{
    width: 70%;
  }
}
</style>
<style>
.topnavdw {
  overflow: hidden;
  background-color: #333;
  position: inherit;
  max-height:60px;
}

.topnavdw #myLinks {
  display: none;
}

.topnavdw a {
  color: white;
  text-decoration: none;
  font-size: 17px;
}

.topnavdw a.icon-top-menu {
  background: white;
  display: block;
  position: absolute;
  right: 0;
  top: 1000;
}

.topnavdw a:hover {
  color: white;
}

.imgmenudw {
 width:16%;
}
</style>

<style>
.ocultar{
cursor:pointer;
position:relative;
left:90%;
top:0px;
width:16px;
}

.preto-equa{
background-color:rgb(250, 250, 250);
width:100%;
height:100%;
padding:20px;
}
</style>


<style>
/* latin */
@font-face {
  font-family: 'Abel';
  font-style: normal;
  font-weight: 400;
  src: url(https://fonts.gstatic.com/s/abel/v12/MwQ5bhbm2POE2V9BPQ.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
mjx-mstyle{
border:1px solid rgb(85, 85, 85);
border-radius:4px;
padding:7px;
}

</style>

<style>
.btn-toggle{
    display: none;
}
#navbar{
    width: 100%;
    background: #444;
    padding: 10px;
}

#navbar ul li{
    list-style: none;
    display: inline;
}

#navbar ul li a{
    color: #FFF;
    padding: 10px;
    text-decoration: none;
}

@media (max-width: 1024px) {
  #navbar{display: none;}
  .btn-toggle{display: block;}
}
</style>

<style>

.active,
.demo:hover {
  opacity: 1;
}

img.hover-shadow {
  transition: 0.3s;
}

.hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
</style>

<style>

#mySearch {
  width: -webkit-fill-available;
  font-size: 12px;
  padding: 11px;
  border: 1px solid #ddd;
}

/* Style the navigation menu inside the left column */
#myMenu {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

#myMenu li a {
  padding: 12px;
  text-decoration: none;
  color: black;
  display: block
}

#myMenu li a:hover {
  background-color: #eee;
}
</style>
<style>

.mySearch2 {
  width: -webkit-fill-available;
  font-size: 12px;
  padding: 11px;
  border: 1px solid #ddd;
}

/* Style the navigation menu inside the left column */
.myMenu2 {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

.myMenu2 li a {
  padding: 12px;
  text-decoration: none;
  color: black;
  display: block
}

.myMenu2 li a:hover {
  background-color: #eee;
}
</style>


</head>
<body class="tm-isblog">


<style type="text/css">
	#jp-left {
		width: 250px;
	}
	#jp-right {
		margin-left: 250px;
		width: auto;
	}
	.uk-dropdown-navbar {
		left: 250px!important;
	}
</style>
<style type="text/css">
.tm-toolbar,.tm-content{
	-webkit-box-shadow: 0px 0px 5px 0px rgba(204,204,204,0.6);
	-moz-box-shadow: 0px 0px 5px 0px rgba(204,204,204,0.6);
	box-shadow: 0px 0px 5px 0px rgba(204,204,204,0.6);
}
</style>
<!-- Left 50% -->
<div style="padding:0 !important" class="uk-container ">
<!-- Left 50% -->
</div>

<!-- Menu da Calcu !-->

<div class="topnav">
  <a href="#home" class="active1"><img src="imagens/logo2.png" width="25%"> </a>
  <div id="myLinks">
    <a href="#news">News</a>
    <a href="#contact">Contact</a>
    <a href="#about">About</a>
  </div>
  <a  class="icon-top-menu" href="#offmenu" class="btn-toggle" class="uk-margin-small-right uk-icon" class="uk-icon menu" data-uk-offcanvas="{mode:'slide'}"  >
    <i class="fa fa-bars" >  <img  href="#offmenu" src="imagens/branco/Prancheta1copia17.png" width="50px"></i> 
  </a>
</div>
<!-- Menu da Calcu !-->

<div id="offmenu" class="uk-offcanvas">
	<div class="uk-offcanvas-bar spaco">		
    	<ul class="uk-list branco ">
        	<li>
            	<a class="off-font" href="C:\Users\vini_\OneDrive\Área de Trabalho\IndexApp\indexApp1.html"><i class="uk-icon-caret-down"> <img src="imagens/branco/Prancheta1copia2.png" width="60px"> </i> Modos de Calculo</a>
    			<div>
                	<ul>
                     	<li id="textmenu1" style="display:none;"><a onclick="UIkit.offcanvas.hide();menuescolhido(1)" style="color:#F0F285">Assistido</a> - <a onclick="UIkit.offcanvas.hide();menuescolhido(3)" style="color:#CC7675">Expressão</a> - <a onclick="UIkit.offcanvas.hide();menuescolhido(2)" style="color:#83C377">Convencional</a></li>                   
    				</ul>
    			</div>
    		</li>
    		<li >
    			<a class="off-font" href="C:\Users\vini_\OneDrive\Área de Trabalho\IndexApp\indexApp1.html"><i class="uk-icon-caret-down"> <img src="imagens/branco/Prancheta1copia8.png" width="60px"></i> Funções</a>
    		    <div>
                	<ul>
                     	<li id="textmenu2" style="display:none;"><a onclick="UIkit.offcanvas.hide();MudarestadoCAL('calcuPDR')" style="color:#25E8E8">Padrão</a> - <a onclick="UIkit.offcanvas.hide();MudarestadoCAL('calcuTRI')" style="color:#83C377">Triogonometria</a> - <a onclick="UIkit.offcanvas.hide();MudarestadoCAL('calcuEST')" style="color:#CC7675">Estatística</a> - <a onclick="UIkit.offcanvas.hide();MudarestadoCAL('calcuFIN')" style="color:#F0F285"> Financeira</a></li>                   
    				</ul>
    			</div>
			</li>
    		<li>
    			<a class="off-font" href="C:\Users\vini_\OneDrive\Área de Trabalho\IndexApp\indexApp1.html"><i class="uk-icon-caret-down"> <img src="imagens/branco/Prancheta1copia5.png" width="60px"></i> Arredondamento</a>
               <div>
                	<ul>
                     	<li id="textmenu3" style="display:none;"><a onclick="UIkit.offcanvas.hide();menuescolhido(4)" >Sem Arredondamento</a> - <a onclick="UIkit.offcanvas.hide();menuescolhido(5)">1 casa decimal</a> - <a onclick="UIkit.offcanvas.hide();menuescolhido(6)">2 casa decimal</a> - <a onclick="UIkit.offcanvas.hide();menuescolhido(7)">3 casa decimal</a> - <a onclick="UIkit.offcanvas.hide();menuescolhido(8)" >4 casa decimal</a> - <a onclick="UIkit.offcanvas.hide();menuescolhido(9)" >5 casa decimal</a></li>                   
    				</ul>
    			</div>
    		</li>
			<li>
    			<a class="off-font" href="C:\Users\vini_\OneDrive\Área de Trabalho\IndexApp\indexApp1.html"><i class="uk-icon-caret-down"> <img src="imagens/branco/Prancheta1copia10.png" width="60px"></i> Programação</a>
    		    <div>
                	<ul>
                     	<li id="textmenu4" style="display:none;"><a onclick="UIkit.offcanvas.hide();menuescolhido(27)" >Funções Programadas...</a> - <a onclick="UIkit.offcanvas.hide();menuescolhido(15)" >Expressões...</a> - <a onclick="UIkit.offcanvas.hide();menuescolhido(16)" >Salvar Expressão</a></li>                   
    				</ul>
    			</div>
			</li>
    		<li>
    			<a class="off-font" href="C:\Users\vini_\OneDrive\Área de Trabalho\IndexApp\indexApp1.html"><i class="uk-icon-caret-down"> <img src="imagens/branco/Prancheta1copia4.png" width="60px"></i> Histórico</a>
    		    <div>
                	<ul>
                     	<li id="textmenu5" style="display:none;"><a onclick="UIkit.offcanvas.hide();menuescolhido(17)" >Salvar</a> - <a onclick="UIkit.offcanvas.hide();menuescolhido(18)" >Limpar</a> </li>                   
    				</ul>
    			</div>
			</li>
			<li>
    			<a class="off-font" href="C:\Users\vini_\OneDrive\Área de Trabalho\IndexApp\indexApp1.html"><i class="uk-icon-caret-down"> <img src="imagens/branco/Prancheta1copia14.png" width="60px"></i> Memória</a>
    		    <div>
                	<ul>
                     	<li id="textmenu6" style="display:none;"><a onclick="UIkit.offcanvas.hide();menuescolhido(19)" >Mostar</a> - <a onclick="UIkit.offcanvas.hide();menuescolhido(20)" >Inserir</a> - <a onclick="UIkit.offcanvas.hide();menuescolhido(21)" >Gravar</a>- <a onclick="UIkit.offcanvas.hide();menuescolhido(22)" >Limpar</a></li>                   
    				</ul>
    			</div>
			</li>
			<li>
    			<a class="off-font" onclick="Mudarestado('textmenu7')"><i class="uk-icon-caret-down"> <img src="imagens/branco/Prancheta1copia13.png" width="60px"></i> Tema</a>
    		    <div>
                	<ul>
                     	<li id="textmenu7" style="display:none;"><a onclick="UIkit.offcanvas.hide();mudatema1('black1');mudatema2('black2');mudatema3('black1');mudaicon('pergunta');mudatema1('black3');mudatema1('black4');mudatema1('black5');mudatema2('popup');mudatema2('popup2');mudatema2('popup4');mudatema3('h4');mudatema3('h4-2');mudatema3('h2-1');mudatema3('h2-2');mudaicon2('mais');" >Mudar Tema</a>               
    				</ul>
    			</div>
			</li>
			<li>
    			<a class="off-font" onclick="Mudarestado('textmenu8')"><i class="uk-icon-caret-down"> <img src="imagens/branco/Prancheta1copia.png" width="60px"></i> Idioma</a>
    		    <div>
                	<ul>
                     	<li id="textmenu8" style="display:none;"><a onclick="UIkit.offcanvas.hide();menuescolhido(1)" >Portugûes</a> - <a onclick="UIkit.offcanvas.hide();menuescolhido(3)">English</a> - <a onclick="UIkit.offcanvas.hide();menuescolhido(2)" >Español</a></li>                   
    				</ul>
    			</div>
			</li>
			<li>
    			<a class="off-font"><i class="uk-icon-caret-down"> <img src="imagens/branco/Prancheta1copia12.png" width="60px"></i> Sobre</a>
			</li>
			<li>
    			<a class="off-font"><i class="uk-icon-caret-down"> <img src="imagens/branco/Prancheta1copia9.png" width="60px"></i> Feedback</a>
    		</li>
			<li>
    			<a class="off-font" onclick="share()"><i class="uk-icon-caret-down"> <img src="imagens/branco/Prancheta1copia7.png" width="60px"></i> Compartilhar</a>
    		</li>
    	</ul> 
	</div>
</div>


<!-- Área de Construção !-->

 <div>

    <article>
			<main>
		
				  <div>
	
	<!--    Equacoes   !-->
	
	
	<div class="blocodf" id="black2">

	 <div style="width:100%;text-align:center;margin:30px 0px;height:80px;font-size:18px" id="previewasc"></div>
   
    <div class="uk-form uk-form-stacked"  id="frm" style="margin-top:20px" method="POST" action="" onsubmit="javascript:if(valida()==false) event.preventDefault();">
        <div class="uk-grid">
            <div class="uk-width-1-1">
			
            	<label class="uk-form-label" >Escreva a Equação a ser calculada: <a href="#popup02"> <svg  width="800px" id="mais" height="800px" viewBox="0 0 24 24"  xmlns="http://www.w3.org/2000/svg" style="float:right;width:20px;stroke:rgb(187 187 187)"><a href="#popup1"> </a>
<path d="M12 7V17M7 12H17M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
</a>





<a href="#popup1"> <svg width="800px" id="pergunta" height="800px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="float:right;width:20px;fill:rgb(85, 85, 85)";> 
<path d="M12 3C7.04 3 3 7.04 3 12C3 16.96 7.04 21 12 21C16.96 21 21 16.96 21 12C21 7.04 16.96 3 12 3ZM12 19.5C7.86 19.5 4.5 16.14 4.5 12C4.5 7.86 7.86 4.5 12 4.5C16.14 4.5 19.5 7.86 19.5 12C19.5 16.14 16.14 19.5 12 19.5ZM14.3 7.7C14.91 8.31 15.25 9.13 15.25 10C15.25 10.87 14.91 11.68 14.3 12.3C13.87 12.73 13.33 13.03 12.75 13.16V13.5C12.75 13.91 12.41 14.25 12 14.25C11.59 14.25 11.25 13.91 11.25 13.5V12.5C11.25 12.09 11.59 11.75 12 11.75C12.47 11.75 12.91 11.57 13.24 11.24C13.57 10.91 13.75 10.47 13.75 10C13.75 9.53 13.57 9.09 13.24 8.76C12.58 8.1 11.43 8.1 10.77 8.76C10.44 9.09 10.26 9.53 10.26 10C10.26 10.41 9.92 10.75 9.51 10.75C9.1 10.75 8.76 10.41 8.76 10C8.76 9.13 9.1 8.32 9.71 7.7C10.94 6.47 13.08 6.47 14.31 7.7H14.3ZM13 16.25C13 16.8 12.55 17.25 12 17.25C11.45 17.25 11 16.8 11 16.25C11 15.7 11.45 15.25 12 15.25C12.55 15.25 13 15.7 13 16.25Z"/>
</svg></a></label> 
 <!--    Popup Criador     !-->  
<div id="popup02" class="overlay">
	<div id="popup2" class="popup">
		<h2 id="h2-2">Escreva as suas ou use da comunidade</h2>
		<a class="close" href="#">×</a>
		
	<div class="uk-overflow-container" style="padding: 5px; max-height: 753px;"><div style="text-align:right;width:100%"> </div><div style="margin-top:30px;text-align:justify"><blockquote style="font-size:9px"><div class="left" >

<table style="width:100%;text-align:left;margin-top:10px" ><tbody>
<h4 id="h4-2">Escreva as suas funções</h4>
<tr>
      <th>Sigla</th> 
      <th>Nome</th>
      <th>Como escrever</th>
      <th>Descrição</th>
</tr>
   <form action="equaAPP.php"  method="POST" >
<td> <input name="Sigla" id="Sigla" type="text" maxlength="8" class="cemp" style="width:90%" placeholder="FMBK " onblur="atzarrayf();verifnfunc(this)" onkeypress="alphanum(event)" required> </td>
<td> <input name="Nome" id="Nome" type="text" maxlength="50"  class="cemp" style="width:90%" placeholder="Bhaskara" onblur="atzarrayf()required" required> </td> 
<td> <input name="Como_Escrever" id="Como_Escrever" maxlength="150" type="text" class="cemp" style="width:90%" placeholder="(-b+raiz(b^2-4*a*c))/(2*a)" onblur="atzarrayf();verifnfunc(this)" onkeypress="alphanum(event)" required> </td>
<td> <input name="Descricao" id="Descricao" type="text" maxlength="50" class="cemp" style="width:90%" placeholder="Fórmula de Bhaskara" onblur="atzarrayf();verifnfunc(this)" onkeypress="alphanum(event)" required> </td> 
<tr>
<td><input type="reset" title="Limpar Formulário" value="Apagar" style="float:left;cursor:pointer;width:60px;background-color:#a9a9a95c;" class="cemp" ></td>
</tr>
<input type="submit" style="cursor:pointer;width:60px;background-color: #a9a9a95c;" id="submit" name="submit" title="Salvar" Salvar> 
   </form>
</table>




<h4 id="h4">Busque funções de outros usuários</h4>
  <div class="left" style="background-color:#bbb;">
    <input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Procurar Equações" title="Type in a category">

  </div>
  <table class="tabela" id="myMenu">
   <tbody class="tabelhinha">
    <tr>
	  <th>Sigla</th>
      <th>Nome</th>
      <th>Como escrever</th>
      <th>Descrição</th>
    </tr>
	<!DOCTYPE PHP >
	<?php
	while($user_data = mysqli_fetch_assoc($result1))
	{
		echo "<tr>";
		echo "<td><a style='display:none;'>".$user_data['Nome']."</a>".$user_data['Sigla']."</td>";
		echo "<td><a style='display:none;'>".$user_data['Nome']."</a>".$user_data['Nome']."</td>";
		echo "<td><a style='display:none;'>".$user_data['Nome']."</a>".$user_data['Como_Escrever']."</td>";
		echo "<td><a style='display:none;'>".$user_data['Nome']."</a>".$user_data['Descricao']."</td>";
		echo "<td><a style='display:none;'>".$user_data['Nome']."</a>"; 
		echo "<a style='cursor:pointer;' title='Copiar resultado para área de expressão' onclick='cp_exp(&#34;".$user_data['Como_Escrever']."&#34;);'> <img src='imagens/Icon/curved-up-arrow.png'> </a>";echo "</td>";
		echo "<td><a style='display:none;'>".$user_data['Nome']."</a><div id='container'> <a style='cursor:pointer' onclick='favoritos(&#34;".$user_data['Sigla']."&#34;)' title='Favoritar'><svg xmlns='http://www.w3.org/2000/svg' id='heart' viewBox='0 0 24 24'><path d='M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z' /></svg></div></a></td>"; 
		echo "</tr>";
	}
	?>
	<!DOCTYPE PHP >
	<!--"<a style='cursor:pointer;' title='Copiar resultado para área de expressão' onclick='UIkit.offcanvas.hide();cp_exp('.$user_data['Como_Escrever'].');'>" "</a>" !-->
	
    <tr  id="black3">
      <td> <a style="display:none;" href="#">Bhaskara </a> FMBK </td>
      <td> <a style="display:none;" href="#">Bhaskara </a> Bhaskara</td>
      <td> <a style="display:none;" href="#">Bhaskara </a>(-b+raiz(b^2-4*a*c))/(2*a)</td>
      <td> <a style="display:none;" href="#">Bhaskara </a>Fórmula de Bhaskara   </td> 
      <td> <a style="display:none;" href="#">Bhaskara </a><a  style="cursor:pointer;" title="Copiar resultado para área de expressão" onclick="UIkit.offcanvas.hide();cp_exp('(-b+raiz(b^2-4*a*c))/(2*a)');"><img src="imagens/Icon/curved-up-arrow.png"></a></td>
	</tr>
    <tr>
      <td> <a style="display:none;" href="#">Segundo Grau </a> FSG</td>
      <td> <a style="display:none;" href="#">Segundo Grau </a> Segundo Grau</td>
      <td> <a style="display:none;" href="#">Segundo Grau </a>(-b+raiz(Delta))/2×a</td>
      <td> <a style="display:none;" href="#">Segundo Grau </a>Fórmula de Segundo Grau </td>
      <td> <a style="display:none;" href="#">Segundo Grau </a><a  style="cursor:pointer;" title="Copiar resultado para área de expressão" onclick="UIkit.offcanvas.hide();cp_exp('(-b+raiz(Delta))/2×a');"><img src="imagens/Icon/curved-up-arrow.png"></a></td>
    </tr>
    <tr id="black4">
      <td> <a style="display:none;" href="#">Teorema de Pitágoras </a>FTPG</td>
      <td> <a style="display:none;" href="#">Teorema de Pitágoras </a>Teorema de Pitágoras</td>
      <td> <a style="display:none;" href="#">Teorema de Pitágoras </a>x2(a) = x2(b)x2(c)</td>
      <td> <a style="display:none;" href="#">Teorema de Pitágoras </a>Teorema de Pitágoras </td> 
      <td> <a style="display:none;" href="#">Teorema de Pitágoras </a><a  style="cursor:pointer;" title="Copiar resultado para área de expressão" onclick="UIkit.offcanvas.hide();cp_exp('x2(a) = x2(b)x2(c)');"><img src="imagens/Icon/curved-up-arrow.png"></a></td>
	</tr>
	<tr>
      <td> <a style="display:none;" href="#">Delta </a>DLA</td>
      <td> <a style="display:none;" href="#">Delta </a>Delta</td>
      <td> <a style="display:none;" href="#">Delta </a>Delta = x2(b) - 4*a*c</td>
      <td> <a style="display:none;" href="#">Delta </a>Fórmula de Primeiro </td> 
      <td> <a style="display:none;" href="#">Delta </a><a  style="cursor:pointer;" title="Copiar resultado para área de expressão" onclick="UIkit.offcanvas.hide();cp_exp('x2(b) - 4*a*c');"><img src="imagens/Icon/curved-up-arrow.png"></a></td>
	</tr>
	<tr id="black5">
      <td> <a style="display:none;" href="#">Equação da Elipse </a>EDQP</td>
      <td> <a style="display:none;" href="#">Equação da Elipse </a>Equação da Elipse</td>
      <td> <a style="display:none;" href="#">Equação da Elipse </a>(x-h/a)^2+(y-k/b)^2</td>
      <td> <a style="display:none;" href="#">Equação da Elipse </a>Equação da Elipse </td> 
      <td> <a style="display:none;" href="#">Equação da Elipse </a><a  style="cursor:pointer;" title="Copiar resultado para área de expressão" onclick="UIkit.offcanvas.hide();cp_exp('(x-h/a)^2+(y-k/b)^2');"><img src="imagens/Icon/curved-up-arrow.png"></a></td>
	</tr>
	<tr>
      <td> <a style="display:none;" href="#">Distância entre dois Pontos </a>DEDP</td>
      <td> <a style="display:none;" href="#">Distância entre dois Pontos </a>Distância entre dois Pontos</td>
      <td> <a style="display:none;" href="#">Distância entre dois Pontos </a>(x+x2)/2+(y+y2)/2</td>
      <td> <a style="display:none;" href="#">Distância entre dois Pontos </a>Distância entre dois Pontos </td> 
      <td> <a style="display:none;" href="#">Distância entre dois Pontos </a><a style="cursor:pointer;" title="Copiar resultado para área de expressão" onclick="UIkit.offcanvas.hide();cp_exp('(x+x2)/2+(y+y2)/2');"><img src="imagens/Icon/curved-up-arrow.png"></a></td>
	</tr>
   </tbody>
  </table>
  
 	 <a href="#popup3" class="star"> <svg width="800px" height="40px" viewBox="0 -0.5 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M16.0005 0L21.4392 9.27275L32.0005 11.5439L24.8005 19.5459L25.889 30.2222L16.0005 25.895L6.11194 30.2222L7.20049 19.5459L0.000488281 11.5439L10.5618 9.27275L16.0005 0Z" fill="#FFCB45"/>
</svg></a> 

</div>


      </div>
     </div>	
	</div>
   </div>
 <!--    Popup Criador     !-->   


<div id="popup1" class="overlay">
	<div id="popup" class="popup">
		<h2>Aprenda a Escrever Equações</h2>
		<a class="close" href="#">×</a>
		<center><video autoplay="" loop="" controls="" style="width:80%;" class="hover-shadow cursor"> <source src="videos/Equa/Equacao.webm" type="video/webm">  </video></center>
	<div class="uk-overflow-container" style="padding: 5px; max-height: 753px;"><div style="text-align:right;width:100%"> </div><div style="margin-top:30px;text-align:justify"><blockquote style="font-size:9px"> <p>Escreva a função atribuindo um nome seguido de parênteses contendo uma ou mais variáveis separadas por ponto e vírgula (;). No segundo campo, escreva o que a função deve calcular utilizando operadores, funções nativas da calculadora ou outras funções criadas por você. </p>
    
	<div class="left" style="background-color:#bbb;">
    <input type="text" class="mySearch2" id="mySearch2" onkeyup="myFunction2()" placeholder="Procurar Equações" title="Type in a category">

  </div>
  <!--    Popup Interrogação     !-->
  <table class="tabela" id="myMenu2">
   <tbody class="tabelhinha">
    <tr>
      <th>Sigla</th>
      <th>Nome</th>
      <th>Como escrever</th>
      <th>Descrição</th>
    </tr>
    <tr id="black3">
      <td> <a style="display:none;" href="#">Bhaskara </a> FMBK </td>
      <td> <a style="display:none;" href="#">Bhaskara </a> Bhaskara</td>
      <td> <a style="display:none;" href="#">Bhaskara </a>(-b+raiz(b^2-4*a*c))/(2*a)</td>
      <td> <a style="display:none;" href="#">Bhaskara </a>Fórmula de Bhaskara   </td> 
      <td> <a style="display:none;" href="#">Bhaskara </a><a  style="cursor:pointer;" title="Copiar resultado para área de expressão" onclick="UIkit.offcanvas.hide();cp_exp('(-b+raiz(b^2-4*a*c))/(2*a)');"><img src="imagens/Icon/curved-up-arrow.png"></a></td>
	</tr>
    <tr>
      <td> <a style="display:none;" href="#">Segundo Grau </a> FSG</td>
      <td> <a style="display:none;" href="#">Segundo Grau </a> Segundo Grau</td>
      <td> <a style="display:none;" href="#">Segundo Grau </a>(-b+raiz(Delta))/2×a</td>
      <td> <a style="display:none;" href="#">Segundo Grau </a>Fórmula de Segundo Grau </td>
      <td> <a style="display:none;" href="#">Segundo Grau </a><a  style="cursor:pointer;" title="Copiar resultado para área de expressão" onclick="UIkit.offcanvas.hide();cp_exp('(-b+raiz(Delta))/2×a');"><img src="imagens/Icon/curved-up-arrow.png"></a></td>
    </tr>
    <tr id="black4">
      <td> <a style="display:none;" href="#">Teorema de Pitágoras </a>FTPG</td>
      <td> <a style="display:none;" href="#">Teorema de Pitágoras </a>Teorema de Pitágoras</td>
      <td> <a style="display:none;" href="#">Teorema de Pitágoras </a>x2(a) = x2(b)x2(c)</td>
      <td> <a style="display:none;" href="#">Teorema de Pitágoras </a>Teorema de Pitágoras </td> 
      <td> <a style="display:none;" href="#">Teorema de Pitágoras </a><a  style="cursor:pointer;" title="Copiar resultado para área de expressão" onclick="UIkit.offcanvas.hide();cp_exp('x2(a) = x2(b)x2(c)');"><img src="imagens/Icon/curved-up-arrow.png"></a></td>
	</tr>
	<tr>
      <td> <a style="display:none;" href="#">Delta </a>DLA</td>
      <td> <a style="display:none;" href="#">Delta </a>Delta</td>
      <td> <a style="display:none;" href="#">Delta </a>Delta = x2(b) - 4*a*c</td>
      <td> <a style="display:none;" href="#">Delta </a>Fórmula de Primeiro </td> 
      <td> <a style="display:none;" href="#">Delta </a><a  style="cursor:pointer;" title="Copiar resultado para área de expressão" onclick="UIkit.offcanvas.hide();cp_exp('x2(b) - 4*a*c');"><img src="imagens/Icon/curved-up-arrow.png"></a></td>
	</tr>
	<tr id="black5">
      <td> <a style="display:none;" href="#">Equação da Elipse </a>EDQP</td>
      <td> <a style="display:none;" href="#">Equação da Elipse </a>Equação da Elipse</td>
      <td> <a style="display:none;" href="#">Equação da Elipse </a>(x-h/a)^2+(y-k/b)^2</td>
      <td> <a style="display:none;" href="#">Equação da Elipse </a>Equação da Elipse </td> 
      <td> <a style="display:none;" href="#">Equação da Elipse </a><a  style="cursor:pointer;" title="Copiar resultado para área de expressão" onclick="UIkit.offcanvas.hide();cp_exp('(x-h/a)^2+(y-k/b)^2');"><img src="imagens/Icon/curved-up-arrow.png"></a></td>
	</tr>
	<tr>
      <td> <a style="display:none;" href="#">Distância entre dois Pontos </a>DEDP</td>
      <td> <a style="display:none;" href="#">Distância entre dois Pontos </a>Distância entre dois Pontos</td>
      <td> <a style="display:none;" href="#">Distância entre dois Pontos </a>(x+x2)/2+(y+y2)/2</td>
      <td> <a style="display:none;" href="#">Distância entre dois Pontos </a>Distância entre dois Pontos </td> 
      <td> <a style="display:none;" href="#">Distância entre dois Pontos </a><a style="cursor:pointer;" title="Copiar resultado para área de expressão" onclick="UIkit.offcanvas.hide();cp_exp('(x+x2)/2+(y+y2)/2');"><img src="imagens/Icon/curved-up-arrow.png"></a></td>
	</tr>
   </tbody>
  </table>
</div></div></div>
	</div>
	</div>
	<div id="popup3" class="overlay">
	<div id="popup4" class="popup">
		<h2 id="h2-1">Favoritos</h2>
		<a class="close" href="#">×</a>
<a href="#popup02" class="close1" title="Voltar" ><img src="imagens/Icon/curved-up-arrow.png"></a>	
	<div class="uk-overflow-container" style="padding: 5px; max-height: 753px;"><div style="text-align:right;width:100%"> </div><div style="margin-top:30px;text-align:justify"><blockquote style="font-size:16px"><div class="left" ><p>Aqui onde ficara salva suas funções <strong>Favoritas</strong></p>
    <input type="text" class="mySearch2" id="mySearch3" onkeyup="myFunction3()" placeholder="Procurar Equações" title="Procure Pelo Nome">

  </div>
  <!--    Popup Interrogação     !-->
<table class="tabela" id="myMenu3">
   <tbody id="tbody" class="tabelhinha">
	<tr>
      <th>Sigla</th>
      <th>Nome</th>
      <th>Como escrever</th>
      <th>Descrição</th>
    </tr>
		<!DOCTYPE PHP >
		<?php
	while($user_data = mysqli_fetch_assoc($result2))
	{
		echo "<tr style='display:none' id='".$user_data['Sigla']."'>";
		echo "<td class='tabfavo'><a style='display:none;'>".$user_data['Nome']."</a>".$user_data['Sigla']."</td>";
		echo "<td class='tabfavo'><a style='display:none;'>".$user_data['Nome']."</a>".$user_data['Nome']."</td>";
		echo "<td class='tabfavo'><a style='display:none;'>".$user_data['Nome']."</a>".$user_data['Como_Escrever']."</td>";
		echo "<td class='tabfavo'><a style='display:none;'>".$user_data['Nome']."</a>".$user_data['Descricao']."</td>";
		echo "<td class='tabfavo'><a style='display:none;'>".$user_data['Nome']."</a>"; 
		echo "<a style='cursor:pointer;' title='Copiar resultado para área de expressão' onclick='cp_exp(&#34;".$user_data['Como_Escrever']."&#34;);'> <img src='imagens/Icon/curved-up-arrow.png'> </a>";echo "</td>";
		echo "<td class='tabfavo'><a style='display:none;'>".$user_data['Nome']."</a><div id='container'> <a style='cursor:pointer' onclick='favoritos(&#34;".$user_data['Sigla']."&#34;)' title='Favoritar'><svg xmlns='http://www.w3.org/2000/svg' id='heart' viewBox='0 0 24 24'><path d='M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z' /></svg></div></a></td>"; 
		echo "</tr>";
	}
	?>
		<!DOCTYPE PHP >	
	</tbody>
	</table>
</div></div></div>
	</div>
	</div>
  <!--    Popup Interrogação     !-->	
            	<input type="text" class="uk-form-large uk-width-1-1,input" class="input" placeholder="" name="formula"  id="formula" onchange="mostraprev()" onkeyup="mostraprev()" onblur="setcarret()"/>
            	            
            </div>
	</div>
            <div class="uk-width-1-1">&nbsp;</div>
            <div class="uk-width-1-1" style="text-align:center">
		    
		    <input type="button"  id="execCopy" style="color:white" class="uk-button" title="Mudar para modo Projetor de Equação" accesskey="13" value="Copiar" >
		    
            </div>
        </div>
    </div>



<div id="resultado" class="uk-overflow-container" style="margin-top:20px,text" method="POST" action="">&nbsp;</div>

<center>
	<div class="calc-visible-small" id="painelcalcmobi">

	<table class='calculadora calculadoradesk'>
	
	<tr>
	
	<td><div class="flotlft flotlftblue" data-uk-tooltip title="Parêntese de arbetura" onclick="insere('(')">
        (
    </div></td>
	<td><div class="flotlft flotlftblue" data-uk-tooltip title="Parêntese de fechamento" onclick="insere(')')">
        )
    </div></td>
   
   <td> <div class="flotlft flotlftblue" data-uk-tooltip title="Multiplicação" onclick="insere('*')">
        *
    </div></td>
    <td><div class="flotlft flotlftblue" data-uk-tooltip title="Divisão" onclick="insere('/')">
        &#247;
    </div> </td>
   <td> <div class="flotlft flotlftblue" data-uk-tooltip title="Pi" onclick="insere('π')">
    	π        
    </div></td>
	</tr>
	
	<tr>
    <td><div class="flotlft flotlftblue" data-uk-tooltip title="Ao quadrado" onclick="insere('x^2')">
        x<sup>2</sup>
    </div></td>
   <td> <div class="flotlft flotlftblue" data-uk-tooltip title="Exponencial" onclick="insere('x^n')">
        x<sup>n</sup>
    </div></td>
   <td> <div class="flotlft flotlftblue" data-uk-tooltip title="Raiz quadrada" onclick="insere('raiz(x)')">
        √
    </div></td>
	
    <td><div class="flotlft flotlftblue" data-uk-tooltip title="Raiz cúbica" onclick="insere('raizn(3;x)')">
        <sup>3</sup>√
    </div></td>
   <td> <div class="flotlft flotlftblue" data-uk-tooltip title="Raiz enésima" onclick="insere('raizn(n;x)')">
        <sup>n</sup>√
    </div></td>
	</tr>
		 <tr>
	 
    <td><div class="flotlft flotlftdclear" data-uk-tooltip title="Arco seno hiperbólico" onclick="insere('asenh(x)')">
        senh<sup>-1</sup>(x)
    </div></td>
    <td><div class="flotlft flotlftgreen" data-uk-tooltip title="Tangente" onclick="insere('tg(x)')">
        tg(x)
    </div></td>
    <td><div class="flotlft flotlftgreen" data-uk-tooltip title="Seno"  onclick="insere('sen(x)')">
        sen(x)
    </div></td>
    <td><div class="flotlft flotlftgreen" data-uk-tooltip title="Cosseno" onclick="insere('cos(x)')">
        cos(x)
    </div></td>
    <td><div class="flotlft flotlftblue" data-uk-tooltip title="Logaritmo natural" onclick="insere('ln(x)')">
        ln x
    </div></td>
	</tr>
	
	<tr>
	
    <td><div class="flotlft flotlftblue" data-uk-tooltip title="Logaritmo" onclick="insere('log(b;x)')">
        log <sub>b</sub><sup>x</sup>
    </div></td>
        <td><div class="flotlft flotlftwhite" data-uk-tooltip title="9" onclick="insere('9')">
       9
    </div></td>
	<td><div class="flotlft flotlftwhite" data-uk-tooltip title="8"  onclick="insere('8')">
        8
    </div></td>
    <td><div class="flotlft flotlftwhite" data-uk-tooltip title="7" onclick="insere('7')">
        7
    </div></td>
    <td> <div class="flotlft flotlftblue" data-uk-tooltip title="Adição" onclick="insere('+')">
        +
    </div></td>
    
	</tr>
	
	<tr>
	
    <td><div class="flotlft flotlftgreen" data-uk-tooltip title="Cotange" onclick="insere('cotg(x)')">
        cotg(x)
    </div></td>
     <td><div class="flotlft flotlftwhite" data-uk-tooltip title="6" onclick="insere('6')">
       6
    </div></td>
	<td><div class="flotlft flotlftwhite" data-uk-tooltip title="5"  onclick="insere('5')">
        5
    </div></td>
    <td><div class="flotlft flotlftwhite" data-uk-tooltip title="4" onclick="insere('4')">
        4
    </div></td>
    <td> <div class="flotlft flotlftblue" data-uk-tooltip title="Subtração" onclick="insere('-')">
        -
    </div></td>
	</tr>
	
	<tr>
	
    <td><div class="flotlft flotlftdgreen" data-uk-tooltip title="Arco tangente" onclick="insere('atg(x)')">
        tg<sup>-1</sup>(x)
    </div></td>
    <td><div class="flotlft flotlftwhite" data-uk-tooltip title="3" onclick="insere('3')">
       3
    </div></td>
	<td><div class="flotlft flotlftwhite" data-uk-tooltip title="2"  onclick="insere('2')">
        2
    </div></td>
    <td><div class="flotlft flotlftwhite" data-uk-tooltip title="1" onclick="insere('1')">
        1
    </div></td>
    <td> <div class="flotlft flotlftblue" data-uk-tooltip title="Multiplicação" onclick="insere('*')">
        x
    </div></td>
	</tr>
	
	<tr>
	
    <td><div class="flotlft flotlftclear" data-uk-tooltip title="Cosseno hiperbólico" onclick="insere('cosh(x)')">
        cosh(x)
    </div></td>
   <td><div class="flotlft flotlftwhite" data-uk-tooltip title="0" onclick="insere('0')">
       0
    </div></td>
	<td><div class="flotlft flotlfwhitw" data-uk-tooltip title=","  onclick="insere(',')">
        ,
    </div></td>
    <td><input type="button" class="flotlft flotlftwhite" value="←" data-uk-tooltip title="Apagar" name="apaga"    style="background-color: #e1e1e170";
>
        
    </td>
    <td> <div class="flotlft flotlftblue" data-uk-tooltip title="Divisão" onclick="insere('/')">
        ÷
    </div></td>
     </tr>
	 
	
       </table>

</div>
</center>
	 
</div>

<div id="prop_dentro">
	
</article>
			</main>
			
					</div>
		
								</div>
	 <script>
        function favoritos(el) {
        var display = document.getElementById(el).style.display;
        if(display == "none")
            document.getElementById(el).style.display = 'block';
        else
            document.getElementById(el).style.display = 'none';
    }  </script>									

<script>
window.addEventListener('DOMContentLoaded', () => {
  const heart = document.getElementById('heart'); 
  const para = document.getElementById('text');
  const likeUnlikePost = function() {
    if(heart.classList.contains('like')) {
      heart.classList.remove('like');
      heart.classList.add('unlike');
    } else {
      heart.classList.remove('unlike');
      heart.classList.add('like');
    }
  }

  heart.addEventListener('click', likeUnlikePost); 
});
</script>

	<script>
        function Mudarestado(el) {
        var display = document.getElementById(el).style.display;
        if(display == "none")
            document.getElementById(el).style.display = 'block';
        else
            document.getElementById(el).style.display = 'none';
    }  </script>	
		
<script>	
	var input = document.getElementById('formula');
	input.addEventListener("keyup", function(event) {
        event.preventDefault();
        if (event.keyCode === 13) {
        document.getElementById('execCopy').click('copy');
      }
    });
</script>

  <script type="text/javascript">
document.getElementById('execCopy').addEventListener('click', execCopy);
function execCopy() {
  document.getElementById("formula").select();
  document.execCommand("copy");
} 
    </script>	
	
	<script>
function myFunction() {
  var input, filter, tr, td, a, i;
  input = document.getElementById("mySearch");
  filter = input.value.toUpperCase();
  tr = document.getElementById("myMenu");
  td = tr.getElementsByTagName("td");
  for (i = 0; i < td.length; i++) {
    a = td[i].getElementsByTagName("a")[0];
    if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
      td[i].style.display = "";
    } else {
      td[i].style.display = "none";
    }
  }
}
</script>

	<script>
function myFunction2() {
  var input, filter, tr, td, a, i;
  input = document.getElementById("mySearch2");
  filter = input.value.toUpperCase();
  tr = document.getElementById("myMenu2");
  td = tr.getElementsByTagName("td");
  for (i = 0; i < td.length; i++) {
    a = td[i].getElementsByTagName("a")[0];
    if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
      td[i].style.display = "";
    } else {
      td[i].style.display = "none";
    }
  }
}
</script>
<script>
function myFunction3() {
  var input, filter, tr, td, a, i;
  input = document.getElementById("mySearch3");
  filter = input.value.toUpperCase();
  tr = document.getElementById("myMenu3");
  td = tr.getElementsByTagName("td");
  for (i = 0; i < td.length; i++) {
    a = td[i].getElementsByTagName("a")[0];
    if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
      td[i].style.display = "";
    } else {
      td[i].style.display = "none";
    }
  }
}
</script>


<!-- Área de Construção !-->

	
	<!-- Icons !-->	
	<center>
		
<div class="topnavdw">
<a href="" > 
<img class="imgmenudw" data-uk-tooltip="{pos:'top'}" title="Língua" src="imagens/branco/Prancheta1copia.png">
</a>
<a href="https://matnowof.github.io/AppMN/indexApp.html" > 
<img class="imgmenudw" data-uk-tooltip="{pos:'top'}" title="Vídeos" src="imagens/branco/Prancheta1copia3.png">
</a>
<a href="file:///D:/User/%C3%81rea%20de%20Trabalho/AppMN/indexApp.html">  
<img class="imgmenudw" data-uk-tooltip="{pos:'top'}" title="Mudar de Calculadora" src="imagens/branco/Prancheta1copia2.png">
</a>
<a href="javascript:void(0);" onclick="share()" > 
<img class="imgmenudw" data-uk-tooltip="{pos:'top'}" title="Compartilhar" src="imagens/branco/Prancheta1copia7.png">
</a>
<a  onclick="https://matnowof.github.io/AppMN/indexApp.html" > 
<img class="imgmenudw" data-uk-tooltip="{pos:'top'}" title="Histórico" src="imagens/branco/Prancheta1copia4.png">
</a>

 </center>
  <a href="javascript:void(0);" class="icon-top-menu" onclick="myFunction()" >
    <i class="fa fa-bars" >  </i> 
  </a>
</div>	
<!-- Icons !-->		
		

<script type="text/javascript">
	
	
	
let wrapper = document.getElementById('jp-left');
	const observer = new MutationObserver(function (mutations, observer) {
	  wrapper.style.height = ''
	  wrapper.style.minHeight = ''
	})
	observer.observe(wrapper, {
	  attributes: true,
	  attributeFilter: ['style']
	})	

</script>
	
	
<script>
	function share(){
	if (navigator.share !== undefined) {
		navigator.share({
			title: 'O título da sua página',
			text: 'Um texto de resumo',
			url: 'https://www.matematicanow.com.br',
		})
		.then(() => console.log('Successful share'))
		.catch((error) => console.log('Error sharing', error));
	}
}
</script>

</body>
</html>
