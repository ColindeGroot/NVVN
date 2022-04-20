<?php $this->layout('layouts::website');?>

<title>404 Not Found</title>


<style>

.content {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 93vh;
}

a {
    color: var(--primary);
}

</style>

<?php if(isLoggedIn()): ?>
    <h1 style="text-align: center;"><span style="font-size: 1.2em; font-weight: 800;" class="blauw">Oeps!</span> De pagina die hebt je bezocht, bestaat niet. Keer <a href="<?php echo url( 'feed' ) ?>"<?php if ( current_route_is( 'feed' ) ): ?> <?php endif ?>>hier</a> terug naar de homepage</h1>
<?php else: ?>
    <h1 style="text-align: center;"><span style="font-size: 1.2em; font-weight: 800;" class="blauw">Oeps!</span> De pagina die hebt je bezocht, bestaat niet. Keer <a href="<?php echo url( 'home' ) ?>"<?php if ( current_route_is( 'home' ) ): ?> <?php endif ?>>hier</a> terug naar de homepage</h1>
<?php endif; ?>