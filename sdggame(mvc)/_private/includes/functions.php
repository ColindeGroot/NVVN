<?php
// Dit bestand hoort bij de router, en bevat nog een aantal extra functies je kunt gebruiken
// Lees meer: https://github.com/skipperbent/simple-php-router#helper-functions
require_once __DIR__ . '/route_helpers.php';

// Hieronder kun je al je eigen functies toevoegen die je nodig hebt
// Maar... alle functies die gegevens ophalen uit de database horen in het Model PHP bestand

/**
 * Verbinding maken met de database
 * @return \PDO
 */
function dbConnect()
{

	$config = get_config('DB');

	try {
		$dsn = 'mysql:host=' . $config['HOSTNAME'] . ';dbname=' . $config['DATABASE'] . ';port=' . $config['PORT'] . ';charset=utf8';

		$connection = new PDO($dsn, $config['USER'], $config['PASSWORD']);
		$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

		return $connection;
	} catch (\PDOException $e) {
		echo 'Fout bij maken van database verbinding: ' . $e->getMessage();
		exit;
	}
}

/**
 * Geeft de juiste URL terug: relatief aan de website root url
 * Bijvoorbeeld voor de homepage: echo url('/');
 *
 * @param $path
 *
 * @return string
 */
function site_url($path = '')
{
	return get_config('BASE_URL') . $path;
}

function get_config($name)
{
	$config = require __DIR__ . '/config.php';
	$name   = strtoupper($name);

	if (isset($config[$name])) {
		return $config[$name];
	}

	throw new \InvalidArgumentException('Er bestaat geen instelling met de key: ' . $name);
}

/**
 * Hier maken we de template engine en vertellen de template engine waar de templates/views staan
 * @return \League\Plates\Engine
 */
function get_template_engine()
{

	$templates_path = get_config('PRIVATE') . '/views';

	$template_engine = new League\Plates\Engine($templates_path);
	$template_engine->addFolder('layouts', $templates_path . '/layouts');

	return $template_engine;
}

/**
 * Geef de naam (name) van de route aan deze functie, en de functie geeft
 * terug of dat de route is waar je nu bent
 *
 * @param $name
 *
 * @return bool
 */
function current_route_is($name)
{
	$route = request()->getLoadedRoute();

	if ($route) {
		return $route->hasName($name);
	}

	return false;
}
function validateRegistrationData($data)
{
	$errors = [];

	// Checks: valideren of mail echt een geldig email is
	$gebruikersnaam	= trim($data["gebruikersnaam"]);

	$wachtwoord	= trim($data["wachtwoord"]);


	if (strlen($gebruikersnaam) == 0) {
		$errors['gebruikersnaam'] = '(geen geldig gebruikersnaam moet ingevuld worden)';
	}



	// Checks: wachtwoord minimaal 6 tekens bevat
	if (strlen($wachtwoord) < 6) {
		$errors['wachtwoord'] = '(geen geldig wachtwoord minimaal 6 tekens)';
	}

	// Resultaat array
	$data = [
		'gebruikersnaam' => $data['gebruikersnaam'],
		'wachtwoord' => $wachtwoord
	];

	return [
		'data' => $data,
		'errors' => $errors
	];
}
function userNotRegistered($gebruikersnaam)
{
	$connection = dbConnect();
	$sql = "SELECT * FROM `gebruikers` WHERE `gebruikersnaam` = :gebruikersnaam";

	$statement = $connection->prepare($sql);

	$statement->execute(['gebruikersnaam' => $gebruikersnaam]);
	
	$num_rows = $statement->rowCount();

	return ($num_rows === 0); // True of false
}

function loginUser($user){
	$_SESSION['user_id'] = $user['id'];
}
function logoutUser(){
	unset($_SESSION['user_id']);
}
function isLoggedIn(){
	return !empty($_SESSION['user_id']);
}
function loginCheck(){
	if ( ! isLoggedIn()){
		$login_url = url('login.form');
		redirect( $login_url );
}
}

function getLoggedInUserName() {
	$gebruikersnaam = "Niet ingelogd.";

	if(!isLoggedIn()){
		return $gebruikersnaam;
	}

	$gebruiker_id = $_SESSION['user_id'];
	$gebruiker = getUserById($gebruiker_id);

	if($gebruiker){
		$gebruikersnaam = $gebruiker['gebruikersnaam'];
	}

	return $gebruikersnaam;
}

function validateBerichtData($data, Pecee\Http\Input\InputFile $afbeelding)
{
	$errors = [];

	$onderwerp	= trim($data["onderwerp"]);
	$beschrijving	= trim($data["beschrijving"]);

	if($afbeelding->hasError()){
		$errors['afbeelding'] = 'Oeps, je bent vergeten om een afbeelding te kiezen!';
	}else{
		if($afbeelding->getMime() !== 'image/jpeg' && $afbeelding->getMime() !== 'image/jpg'  && $afbeelding->getMime() !== 'image/png' ){
			$errors['afbeelding'] = 'Oeps, je mag alleen PNG of JPEG type bestanden uploaden';
		}
	}

	$data = [
		'onderwerp' => $onderwerp,
		'beschrijving' => $beschrijving,
		'afbeelding' => $afbeelding
	];

	return [
		'data' => $data,
		'errors' => $errors
	];
}