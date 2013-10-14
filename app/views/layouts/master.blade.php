<html>

	<head>
	
		<title>cubeupload system status</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=10" />
		<meta name="viewport" content="width=device-width, maximum-scale=1.0, user-scalable=yes" />
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

		<style>
		
		html, body, div, span, applet, object, iframe,
		h1, h2, h3, h4, h5, h6, p, blockquote, pre,
		a, abbr, acronym, address, big, cite, code,
		del, dfn, em, img, ins, kbd, q, s, samp,
		small, strike, strong, sub, sup, tt, var,
		b, u, i, center,
		dl, dt, dd, ol, ul, li,
		fieldset, form, label, legend,
		table, caption, tbody, tfoot, thead, tr, th, td,
		article, aside, canvas, details, embed, 
		figure, figcaption, footer, header, hgroup, 
		menu, nav, output, ruby, section, summary,
		time, mark, audio, video {
			margin: 0;
			padding: 0;
			border: 0;
			font-size: 100%;
			font: inherit;
			vertical-align: baseline;
		}
		/* HTML5 display-role reset for older browsers */
		article, aside, details, figcaption, figure, 
		footer, header, hgroup, menu, nav, section {
			display: block;
		}
		body {
			line-height: 1;
		}
		ol, ul {
			list-style: none;
		}
		blockquote, q {
			quotes: none;
		}
		blockquote:before, blockquote:after,
		q:before, q:after {
			content: '';
			content: none;
		}
		table {
			border-collapse: collapse;
			border-spacing: 0;
		}
				
		body { 
			background: #807EBA;
			color: white;
			font-family: 'Roboto', sans-serif;
			font-weight: 300;
		}
		
		#wrap {
			display: table;
			width: 100%;
			height: 100%;
			text-align: center;
		}
		
		#content {
			display: table-cell;
			vertical-align: middle;
			width: 240px;
			padding: 10px;
		}
		
		#inner {
			width: 240px;
			margin: 0 auto;
		}
		
		a {
			color: #d2ffa0;
			font-size: 12px;
		}
		
		ul {
			margin: 25px 0 55px;
		}
		
		ul li {
			list-style: none;
			text-align: left;
			margin: 0 0 15px 0;
		}
		
		li:before {
		    content: "•";
			color: #D2FFA0;
			padding-right: 7px;
			font-size: 37px;
			line-height: 18px;
			float: left;
		}
		
		li.softError:before {
			color: #FFE3A6;
		}
		
		li.hardError:before {
			color: #FF5959;
		}
				
		ul li p {
			font-size: 12px;
			color: #CFCEF1;
			padding: 3px 0 0 3px;
		}
		
		</style>
		
		
	</head>
	
	<body>
	
		<div id="wrap">
		
			<div id="content">
			
				<div id="inner">	
						
					<img alt="cubeupload" src="data:image/png;base64,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" />
					
					@yield('content')
					
					<a href="/report">Report an Issue</a>
				
				</div>

			</div>
		
		</div>

			
	</body>
	
	

</html>