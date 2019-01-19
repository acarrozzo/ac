<footer>
	<section>
		<h3>Hey look at that</h3>
		<h4>You've reached the footer</h4>

		<p>Acarrozzo.com began in the 90's where it originally was a fun place for me and my friends to share goofy photoshop stuff, post photos and chat. It has since evolved to become a proper portfolio of my professional work, and remains a creative outlet for whatever I want.</p>
		<p>Throughout the years I have worked as a designer at a handful of equally amazing jobs and I currently work as a Senior Developer for Newsday. I have past experience in retail marketing as well as brand identity. I also enjoy music production, photography, & game creation. Feel free to contact me with anything.</p>
		<span class="cImg">
			<img src="img/intro/anthony-carrozzo-square2.jpg" width="360" height="360" alt="Anthony L Carrozzo"/>
		</span>
			<p><strong>contact: </strong><a href="mailto:acarrozzo@gmail.com">acarrozzo@gmail.com</a></p>
		<ul>
			<?php
            echo '<li><a '; if ($page=='index.php') {
                echo 'class="active"';
            } echo ' href="/">Home</a></li>';
            echo '<li><a '; if ($page=='design.php') {
                echo 'class="active"';
            } echo ' href="design.php">Design</a></li>';
            echo '<li><a '; if ($page=='code.php') {
                echo 'class="active"';
            } echo ' href="code.php">Code</a></li>';
            echo '<li><a '; if ($page=='photo.php') {
                echo 'class="active"';
            } echo ' href="photo.php">Photo</a></li>';
            echo '<li><a '; if ($page=='music.php') {
                echo 'class="active"';
            } echo ' href="music.php">Music</a></li>';
            echo '<li><a '; if ($page=='word.php') {
                echo 'class="active"';
            } echo ' href="word.php">Word</a></li>';
            echo '<li><a '; if ($page=='game.php') {
                echo 'class="active"';
            } echo ' href="game.php">Game</a></li>';
            ?>
		</ul>
	</section>
	<p class="smallText"> ©2018 acarrozzo. All Rights Reserved. <a href="/">Take Me Home</a>
	</p>
</footer>
