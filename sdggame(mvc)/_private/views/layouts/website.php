<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo site_url( '/css/main.css' ) ?>" media="all">
        <?php if ( $this->section( 'css' ) ): ?>
            <?php echo $this->section( 'css' ) ?>
        <?php endif; ?>
</head>
<body>
    <!-- laadt navbar in -->
    <nav class="nav_container" >
		<?php if ( $this->section( 'navigation' ) ): ?>
			<?php echo $this->section( 'navigation' ) ?>
		<?php else: ?>
			<?php echo $this->fetch( '_navigation' ) ?>
		<?php endif ?>
    </nav>

    <!-- laadt content in -->
	<?php echo $this->section( 'content' ) ?>

    <!-- laadt footer in -->
    <footer class="footer_container">
        <?php if ($this->section( 'footer' ) ): ?>
            <?php echo $this->section( 'footer' ) ?>
        <?php else: ?>
            <?php echo $this->fetch( '_footer' ) ?>
        <?php endif ?>
    </footer>
<?php $this->start( 'javascript' ) ?>
<?php $this->stop(); ?>
</body>
</html>