<footer>
	<section>
		<h3>Hey look at that</h3>
		<h4 class="red">You've reached the footer</h4>

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
                        echo '<li><a '; if ($page=='game.php') {
                            echo 'class="active"';
                        } echo ' href="game.php">Game</a></li>';
                        echo '<li><a '; if ($page=='about.php') {
                            echo 'class="active"';
                        } echo ' href="about.php">About</a></li>';
                        ?>
		</ul>

		<p>This site began in the 90's where it originally was a fun place for me and my friends to share hilarious photoshop stuff, post photos and chat. It has since evolved to become a proper portfolio of my professional work, and remains a creative outlet for anything I feel like sharing. Feel free to contact me with anything.</p>
		<span class="cImg">
			<img src="img/intro/anthony-carrozzo-square2.jpg" width="360" height="360" alt="Anthony L Carrozzo"/>
		</span>
			<p class="no-click"><strong>contact: </strong> <span class="red">acarrozzo@gmail.com</span></p>

	</section>
	<p class="smallText"> ©1998 - 2021 acarrozzo. All Rights Reserved. <a href="/">Take Me Home</a>
	</p>
</footer>
