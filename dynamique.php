<?php
    include_once "./pages/head_var.inc.php";
    /* header */
    include_once "./pages/head.inc.php";
?>

<body>
	<!--cours https://hackmd.io/iNktz6XzRyu7gGmKvPpXfQ?view-->
	<header>
		<h1>
            <?php
            print title." version ".$_version
            ?>
        </h1>
	</header>
	<main>
        <?php
            include_once "./pages/opérations.inc.php";
        ?>
        <figure>
            <img src="./asset/a.png" alt="cover php">
            <figcaption>
                <h2>
                    PHP version <?php $_version."\n" ?>
                </h2>
            </figcaption>
        </figure>
        <section><?php include_once "./pages/article.inc.php" ?></section>
		<section>
			<h2>Nous sommes le : <?php print $_date."\n" ?></h2>
			<p>
				Votre navigateur est : <?php print $_navigateur ?><br>
				Votre adress IP est le : <?php print $_addr_ip ?>
				<br>Signature serveur :
				
			</p>
			<?php print $_sign_server ?>
		</section>
        <section>
            <h2>Zone de test</h2>
            <ul>
                <?php include_once "./pages/table.inc.php" ?>
            </ul>
        </section>
	</main>
	<!-- <pre>
	</pre> -->
    <?php
        include_once "./pages/footer.inc.php";
    ?>
	<script src="js/app.js"></script>
</body>
</html>
