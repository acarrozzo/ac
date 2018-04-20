<?php include 'inc/top.php'; ?>

<div id="center">
<div class="collapser">
		<h2>AC Collapser | click me</h2>
	</div>
	<div class="collapserContent">
		<section>
			<p>On every page I am using a custom function to help manage all my content in collapsable columns. You simply click the top headline or arrow and it will display/hide the content within. You can use it on your page if you like, here is the code. </p>
			<h5>HTML:</h5> 
			<p>Two divs with the following classes:</p>
			<pre>
<code>&lt;div class=&quot;collapser&quot;&gt;<br/>	&lt;h2&gt;AC Collapser&lt;/h2&gt;<br/>&lt;/div&gt;<br/>&lt;div class=&quot;collapserContent&quot;&gt;<br/>	&lt;p&gt;Content goes here. &lt;/p&gt;<br/>&lt;/div&gt;</code>
</pre>
		
			<h5>JS:</h5>
			<p> Make sure you have jquery on your page.</p>
			<pre>
<code>$(&quot;.collapser&quot;).on(&quot;click&quot;, function () {<br/>	if ($(this).is('.expanded')) {<br/>		$(this).next('.collapserContent').slideUp();<br/>	} <br/>	else {<br/>		$(this).next('.collapserContent').slideDown();<br/>	}<br/>	$(this).toggleClass(&quot;expanded&quot;);<br/>});</code>
</pre>
		

			<h5>CSS:</h5>
			<p> The content is hidden by default. the JS makes it visible. I am also using font awesome for the arrows.</p>
			<pre>
<code>.collapser {<br/> overflow: hidden;<br/> position: relative;<br/> cursor: pointer; <br/>}<br/>.collapser:before {<br/> content: &quot;\f107&quot;;<br/> font-family: FontAwesome;<br/> position: absolute;<br/> color: #DC6B64;<br/> right: 20px;<br/> top: 20px;<br/> line-height: 1em;<br/> font-size: 24px; <br/>}<br/>.collapser.expanded:before {<br/> content: &quot;\f106&quot;;<br/>}<br/>.collapserContent {<br/> display: none;<br/>}</code>
</pre>
		
		</section>


	</div>	
	
	
	
	<div class="collapser expanded">
		<h2>Stickman</h2>
	</div>
	<div class="collapserContent">
		<section>
			<?php include 'code/stickman.php'; ?>
			<p>Stickman was a project I gave myself to mess around with css transitions. Click some buttons. All animation you see is powered by css. I simply use jquery to swap a class on the top level div and style handles the rest. I eventually want to use something like this to display characters in Light Gray RPG.</p>
		</section>
	</div>
	<div class="collapser justMobile">
		<h2>AC Pop</h2>
	</div>
	<div class="collapserContent">
		<section>
			<figure class="gal right" data-pop>
				<img src="img/photo/macro/IMG_3665.JPG" width="1410" height="940" alt="code example ac pop watch sample coding"/ >
				<figcaption>AC Pop | click me</figcaption>
			</figure>

			<p>All over this site I am using a custom pop up function I created.</p>

			<p>Feel free to use this simple pop up on your site. Just use the markup below and add the CSS and JS to your site.</p>
			<h5>HTML:</h5>
			<p> the 'data-pop' attribute activates the magic</p>
			<pre>
<code>&lt;figure class=&quot;gal&quot; data-pop&gt;
	&lt;img src=&quot;img/photo/macro/IMG_3665.JPG&quot;&gt;
&lt;/figure&gt;</code>
</pre>
		
			<h5>JS:</h5>
			<p> This function toggles the .full class when clicked. Make sure you have jquery on your page.</p>
			<pre>
<code>$('[data-pop]').on(&quot;click&quot;, function () {<br/>	$(this).toggleClass(&quot;full&quot;);<br/>});</code>
</pre>
		

			<h5>CSS:</h5>
			<p> This makes the figure and image full screen when .full is applied</p>
			<pre>
<code>[data-pop].full {<br/>	width: 100%;<br/>	height: 100%;<br/>	position: fixed;<br/>	top: 0;<br/>	left: 0;<br/>	right: 0;<br/>	margin: 0;<br/>	padding: 0;<br/>	background: #111;<br/>	text-align: center;<br/>	z-index: 1; <br/>}<br/>[data-pop].full img {<br/>	position: relative;<br/>	top: 50%;<br/>	-webkit-transform: translateY(-50%);<br/>	-ms-transform: translateY(-50%);<br/>	transform: translateY(-50%);<br/>	max-width: 100%;<br/>	max-height: 100%;<br/>	width: auto;<br/>	height: auto; <br/>}</code>
</pre>
		


			<p>So there it is, a super simple, super light pop up that always keeps the full screen image at max size without any cropping. There are optional features I have baked in like caption display and gallery support with next and previous buttons. Feel free to view all the source and add those in if you like.</p>

		</section>
	</div>

</div>



	

	





<?php include 'inc/bottom.php'; ?>