<!DOCTYPE html>
<html>
  <head>
  
    <meta charset="utf-8">
		
		<title>Pruebas Iframe</title>

		<!-- description text that displays below the link in google search results -->
		<meta name="description" content="Description of site" /> 

        <style type="text/css">

            header:after,
            nav:after,
            footer:after,
            .module-block:after,
            .gallery:after,
            .social:after {
              content: ".";
              display: block;
                height: 0;
                clear: both;
                visibility: hidden;
            }
            
            
            * {
                /* Universal reset: */
                margin:0;
                padding:0;
            }
            
            
            body {
                font-size: 16px;
                line-height: 1.5;
                font-family: 'Josefin Sans', sans-serif;
                color: #272727;
                background: rgb(247,251,252);
                background: -moz-linear-gradient(top,  rgba(247,251,252,1) 0%, rgba(217,237,242,1) 40%, rgba(173,217,228,1) 100%);
                background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(247,251,252,1)), color-stop(40%,rgba(217,237,242,1)), color-stop(100%,rgba(173,217,228,1)));
                background: -webkit-linear-gradient(top,  rgba(247,251,252,1) 0%,rgba(217,237,242,1) 40%,rgba(173,217,228,1) 100%);
                background: -o-linear-gradient(top,  rgba(247,251,252,1) 0%,rgba(217,237,242,1) 40%,rgba(173,217,228,1) 100%);
                background: -ms-linear-gradient(top,  rgba(247,251,252,1) 0%,rgba(217,237,242,1) 40%,rgba(173,217,228,1) 100%);
                background: linear-gradient(top,  rgba(247,251,252,1) 0%,rgba(217,237,242,1) 40%,rgba(173,217,228,1) 100%);
            }
            
            header, footer, article, section, nav, {
                /* Giving a display value to the HTML5 rendered elements: */
                display:block;
            }
            
            img { 
                border-radius: 100%; 
                max-width: 100%; 
                display: block;
            }
            
            a {
                color:#D24655;
                text-decoration:none;
                -webkit-transition: all .3s ease-in-out;
                -moz-transition: all .3s ease-in-out;
                -o-transition: all .3s ease-in-out;
                transition: all .3s ease-in-out;
            }
            
            a:hover, a:focus { /* when you declare a hover state, make sure you declare a focus state as well */
                color: #000;
            }
            
            a img {
                border:none;
            }
            
            
            h1 {
                font-size: 50px;
                 margin: 0;
                color: #000;
                font-weight: normal; 
                line-height: 1;
            }
            
            h2 {
                font-size: 24px;
                letter-spacing:2px;
                text-transform: uppercase;
                font-weight: normal; 
                margin: 0 0 24px; 
                line-height: 1;
            }
            
            
            h3 {
                font-size: 30px;
                font-weight: normal; 
                margin: 0 0 24px; 
                line-height: 1;
            }
            
            p {
                font-family: 'Vollkorn', serif;
                margin-bottom: 24px;
            }
            
            
            
            /*-------------------------------------------
            
                    Header
            -------------------------------------------*/
            header { margin: 20px 40px 60px; }
            
            header div { 
                margin-top: 40px; 
                width: 60%; 
                float: left; 
            }
            
            header p { 
                color: #272727; 
                font-size: 18px;
                margin: 0;
                font-family: 'Josefin Sans', sans-serif;
            }
            
            nav { 
                float: right; 
                width: 40%;
            }
            
            
            nav ul { float: right; }
            
            nav li {
                float: left;
                list-style: none;
                padding: 4px 0;
            }
            
            nav a {
                color:#565656;
                display: block;
                font-size:12px;
                margin:5px 2px;
                padding:10px 10px 8px;
                text-transform:uppercase;
                font-weight: bold;
                letter-spacing: 1px;
                border-right: 1px dashed rgba(0, 0, 0, .3);
            }
            
            nav li:last-child a { border-right: none; }
            
            
            nav a:hover, nav a:focus {
                text-decoration:none;
                background-color:#f0f0f0;
                border-color: transparent;
            }
            
            
            /*-------------------------------------------
            
                    Footer
            -------------------------------------------*/
            
            footer {
                padding: 40px;
                background: #fff;
            }
            
            .col { 
                float: left;
                width: 21%;
                margin: 0 5% 40px 0;
            }
            
            .col:last-of-type { 
                margin-right: 0;
            }
            
            footer h2 { font-size: 18px; margin-bottom: 40px;}
            
            footer h3 { 
                margin-bottom: 10px;
                padding-bottom: 10px;
                border-bottom: 1px dashed rgba(0,0,0,.3);
                font-size: 18px;
            }
            
            footer  ul {
                margin-left: 20px;
            }
            
            footer  li { 
                color: rgba(0,0,0,.1); /* border color */
            }
            
            footer a { font-size: 14px; }
            
            footer p {
                margin-bottom: 0;
                clear: both;
                font-family: 'Josefin Sans', sans-serif;
                text-align: center;
            }
            
            .up {
                margin-top: 50px; 
            }
            
            .up a { 
                background: rgba(0, 0, 0, .25);
                font-size: 30px;
                padding: 12px 10px;
                border-radius: 10px;
                text-shadow: 1px 1px 2px #fff;
            }
            
            .up a:hover, .up a:focus { 
                color: rgba(0, 0, 0, .45);
                text-decoration: none;
            
            }
            
            
            
            /*-------------------------------------------
            
                    ABOUT
            -------------------------------------------*/
            
            img.right {
                float: right;
                margin: 0 0 20px 20px;
            }
            
            .social li { 
                float: left;
                list-style: none;
            }
            
            
            .social a { 
                display: block;
                font-size:12px;
                margin:5px 2px;
                padding:10px 10px 8px;
                text-transform:uppercase;
                font-weight: bold;
                letter-spacing: 1px;
                border-right: 1px dashed rgba(0, 0, 0, .1); 
            }
            
            .social li:last-child a { border: none; }
            
            
            
            /*-------------------------------------------
            
                    Posts
            -------------------------------------------*/
            
            .post { 
                position: relative;
                margin-bottom: 50px;
                padding-left: 24%;
            }
            
            .post h3 { 
                margin-bottom: 10px;
            }
            
            .post img { 
                width: 20%; 
                position: absolute;
                left: 0;
                top: 0;
                border-radius: 0;
            }
            
            .date { 
                display: block; 
                margin-bottom: 10px; 
            }
            
            
            /*-------------------------------------------
            
                    Gallery
            -------------------------------------------*/
            
            .gallery li {
                float: left;
                list-style: none;
                width: 21%;
                margin: 0 5.3333% 20px 0;
            }
            
            .gallery li:nth-child(4n) {
                margin-right: 0;
            }
            
            .gallery a {
                 display: block;	
            }
            
            .gallery a img { 
              -webkit-transition: all 0.5s ease-in-out; 
                 -moz-transition: all 0.5s ease-in-out; 
                  -ms-transition: all 0.5s ease-in-out; 
                   -o-transition: all 0.5s ease-in-out; 
                      transition: all 0.5s ease-in-out;
            
            }
            
            .gallery a:hover img, .gallery a:focus img { 
                -webkit-transform: scale(1.1);  /* Saf3.1+, Chrome */
                 -moz-transform: scale(1.1);  /* FF3.5+ */
                  -ms-transform: scale(1.1);  /* IE9 */
                   -o-transform: scale(1.1);  /* Opera 10.5+ */
                      transform: scale(1.1);
            }
            
            
            
            /*-------------------------------------------
            
                    General
            -------------------------------------------*/
            
            .page-wrap {
                max-width:960px;
                padding: 0 20px; 
                margin:0 auto; /* center the content by defining a width and using this margin value */
            }
            
            .module-block {
                background-color: #fff;
                margin:0 0 70px 0;
                padding: 40px;
                -webkit-box-shadow: inset 0px 0px 13px rgba(68, 68, 68, 0.1); 
                -moz-box-shadow: inset 0px 0px 13px rgba(68, 68, 68, 0.1); 
                box-shadow: inset 0px 0px 13px rgba(68, 68, 68, 0.1);
                border: 1px solid rgba(0, 0, 0, .1);
            }
            
            .module-block h2 { 
                padding-bottom: 30px;
                margin-bottom: 30px;
                border-bottom: 1px dashed rgba(0,0,0,.3);
            }
            
        </style>
	</head>
	
	<body>
		
		<section class="page-wrap">

	
			<header> <!-- Defining the header section of the page with the appropriate tag -->
				
				<div>
					<h1>Testeando IFRAME</h1>
					<p>A subhead goes here.</p>
				</div>

				<nav> <!-- The nav link semantically marks your main site navigation -->
					<ul>
						<li><a href="#block1">Nav 1</a></li>
						<li><a href="#block2">Nav 2</a></li>
						<li><a href="#block3">Nav 3</a></li>
					</ul>
				</nav>


			</header>

	  
			<article id="block1" class="module-block">
                <h2>Incrustación del sitio base suregido (no funcionan búsqeudas ni links):</h2>
                <!-- <iframe src="" height="500" width="900"></iframe>  -->
                <iframe src="scrapedcontent.php" height="500" width="900"></iframe>
				
				<img class="right" src="http://placehold.it/150" alt="" />

				<p> Cupcake ipsum dolor. Sit amet sweet roll icing cupcake ice cream sugar plum. Danish I love biscuit carrot cake tart jelly beans candy. Chupa chups chocolate bar I love pie ice cream brownie gummi bears. Soufflé cookie I love gummi bears faworki sweet sweet tart croissant. Muffin bonbon danish wafer candy macaroon I love dessert. Muffin pudding danish chupa chups. Halvah lollipop applicake icing. Brownie I love cupcake. I love gingerbread cheesecake gummi bears powder candy toffee icing. Pastry jelly beans candy canes dragée croissant I love halvah jujubes. Cotton candy icing wafer caramels applicake.</p>

				<ul class="social">

					<li><a href="#">Link 1</a></li>
					
					<li><a href="#">Link 2</a></li>
					
					<li><a href="#">Link 3</a></li>
				
				</ul>
	
			</article>
			

		   
			<section id="block2" class="module-block">

				<h2>Incrustación IFRAME mediante mapa, VUELOS:</h2>
                <div><iframe src="https://es.flightaware.com/about/link.rvt" width="675" height="410" frameborder="0" marginheight="0" marginwidth="0"></iframe><br /><div style="font-size: x-small;"><a href="https://flightaware.com/">Flight Tracker courtesy of FlightAware.com</a></div></div> 

				
			   	<article class="post">
					
					<h3>
						<a href="#">
							Article Title
							<img src="http://placehold.it/200" alt="" />
						</a>
					</h3>
					
					<strong class="date">1.01.2012</strong>
					
					<p>Cupcake ipsum dolor. Sit amet sweet roll icing cupcake ice cream sugar plum. Danish I love biscuit carrot cake tart jelly beans candy. Chupa chups chocolate bar I love pie ice cream brownie gummi bears. Soufflé cookie I love gummi bears faworki sweet sweet tart croissant. Muffin bonbon danish wafer candy macaroon I love dessert. Muffin pudding danish chupa chups. Halvah lollipop applicake icing. Brownie I love cupcake. I love gingerbread cheesecake gummi bears powder candy toffee icing. Pastry jelly beans candy canes dragée croissant I love halvah jujubes. Cotton candy icing wafer caramels applicake. <a href="#">Read full article &rarr;</a></p>
				
				</article>

				<article class="post">						
					
					<h3>
						<a href="#">
							Article Title 
							<img src="http://placehold.it/200" alt="" />
						</a>
					</h3>
					
					<strong class="date">01.01.2012</strong>
					
					<p>Cupcake ipsum dolor. Sit amet sweet roll icing cupcake ice cream sugar plum. Danish I love biscuit carrot cake tart jelly beans candy. Chupa chups chocolate bar I love pie ice cream brownie gummi bears. Soufflé cookie I love gummi bears faworki sweet sweet tart croissant. Muffin bonbon danish wafer candy macaroon I love dessert. Muffin pudding danish chupa chups. Halvah lollipop applicake icing. Brownie I love cupcake. I love gingerbread cheesecake gummi bears powder candy toffee icing. Pastry jelly beans candy canes dragée croissant I love halvah jujubes. Cotton candy icing wafer caramels applicake.. <a href="#">Read full article &rarr;</a></p>
				
				</article>
			
			</section>

			
			<section id="block3" class="module-block">
				
				<h2>Opción #3 inrustación a través de formulario</h2>
                <div data-skyscanner-widget="SearchWidget"></div>
                <script src="https://widgets.skyscanner.net/widget-server/js/loader.js" async></script>                
			  
				<ul class="gallery">

					<li>
						<a href="#">
							<img alt="" src="http://placehold.it/200"/>
						</a>
					</li>
					<li>
						<a href="#">
							<img alt="" src="http://placehold.it/200"/>
						</a>
					</li>

					<li>
						<a href="#">
							<img alt="" src="http://placehold.it/200"/>
						</a>
					</li>

					<li>
						<a href="#">
							<img alt="" src="http://placehold.it/200"/>
						</a>
					</li>

					<li>
						<a href="#">
							<img alt="" src="http://placehold.it/200"/>
						</a>
					</li>

					<li>
						<a href="#">
							<img alt="" src="http://placehold.it/200"/>
						</a>
					</li>

					<li>
						<a href="#">
							<img alt="" src="http://placehold.it/200"/>
						</a>
					</li>

					<li>
						<a href="#">
							<img alt="" src="http://placehold.it/200"/>
						</a>
					</li>

					<li>
						<a href="#">
							<img alt="" src="http://placehold.it/200"/>
						</a>
					</li>

					<li>
						<a href="#">
							<img alt="" src="http://placehold.it/200"/>
						</a>
					</li>

					<li>
						<a href="#">
							<img alt="" src="http://placehold.it/200"/>
						</a>
					</li>

					<li>
						<a href="#">
							<img alt="" src="http://placehold.it/200"/>
						</a>
					</li>

					<li>
						<a href="#">
							<img alt="" src="http://placehold.it/200"/>
						</a>
					</li>

					<li>
						<a href="#">
							<img alt="" src="http://placehold.it/200"/>
						</a>
					</li>

					<li>
						<a href="#">
							<img alt="" src="http://placehold.it/200"/>
						</a>
					</li>

				</ul>

			</section>
			
		</section><!-- page-wrap -->
			

		<footer> 

			<section class="page-wrap">

				<h2>2nd Level Heading</h2>
				
				<section class="col">

					<h3>3rd Level Heading</h3>

					<ul>
						<li><a href="#">Link</a></li>
						<li><a href="#">Link</a></li>
						<li><a href="#">Link</a></li>
						<li><a href="#">Link</a></li>
						<li><a href="#">Link</a></li>
						<li><a href="#">Link</a></li>
					</ul>

				</section>

				<section class="col">

					<h3>3rd Level Heading</h3>

					<ul>
						<li><a href="#">Link</a></li>
						<li><a href="#">Link</a></li>
						<li><a href="#">Link</a></li>
						<li><a href="#">Link</a></li>
						<li><a href="#">Link</a></li>
						<li><a href="#">Link</a></li>
					</ul>

				</section>

				<section class="col">

					<h3>3rd Level Heading</h3>

					<ul>
						<li><a href="#">Link</a></li>
						<li><a href="#">Link</a></li>
						<li><a href="#">Link</a></li>
						<li><a href="#">Link</a></li>
						<li><a href="#">Link</a></li>
						<li><a href="#">Link</a></li>
					</ul>

				</section>

				<section class="col">

					<h3>3rd Level Heading</h3>

					<ul>
						<li><a href="#">Link</a></li>
						<li><a href="#">Link</a></li>
						<li><a href="#">Link</a></li>
						<li><a href="#">Link</a></li>
						<li><a href="#">Link</a></li>
						<li><a href="#">Link</a></li>
					</ul>

				</section>
	 		
			</section>

			<p>Copyright 2012 - <a href="mailto:">Your Name</a></p>
			<p class="up"><a href="#">Go Up ⇪</a></p>

		</footer>
	



	</body>
</html>
