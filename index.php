<!doctype html>
<html>
<head>
	<title>Meu Localhost</title>
	<style type="text/css">
	/* Resets e HTML 5 */
		html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, ieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video {margin: 0;padding: 0;border: 0;font-size: 100%;font: inherit;vertical-align: baseline;}
		article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section {display: block;}
		ol, ul {list-style: none;}
		blockquote, q {quotes: none;}
		blockquote:before, blockquote:after, q:before, q:after {content: none;}
		table {border-collapse: collapse; border-spacing: 0;}
		a {text-decoration:none;}
		input[type=number]::-webkit-inner-spin-button, input[type=number]::-webkit-outer-spin-button {-webkit-appearance: none;margin: 0;}

	/* GERAL */
		html {overflow-x: hidden;}
		body {background: #eeebed;line-height: 1; font-size:1.3em; color:#666666;padding: 3.5em;}
		h1 {font-size: 4em;margin: 10px;color: #444444;}
		h2 {font-size: 1.7em;margin: 10px;color: #999999;}
		h3 {font-size: 1.5em;margin: 10px;}
		p {margin: 10px;}
	
	/* CSS */
	.my-repos {margin-left: 20px;}
	li {margin: 5px 20px;}
	</style>
</head>
<body>
	
	<h1> 127.0.0.1 sweet 127.0.0.1 </h1>
	<h2> Bem vindo a /opt/lampp/htdocs/public_html ! </h2>
	
	<br>

<?php
	$path = __DIR__;
	$diretorio = dir($path);

	echo '<div class="my-repos">';
    
	echo "<strong>Seus repositórios:</strong> <ul>";    
	while($arquivo = $diretorio -> read()){
   		if (is_dir($arquivo) && $arquivo != ".." && $arquivo != ".") {
   			echo "<li><a href='".$arquivo."'>".$arquivo."</a>";
			$arquivo = $arquivo.'/.git';
   			
   			if (is_dir($arquivo)) {
   				echo "  [GIT]";
   			}
   		echo "</li>";
   		}
	}
	$diretorio -> close();

	echo '</ul></div>';
?>

	<br><br><p>Bom trabalho!</p>

</body>
</html>