<?php
/**
 * @file
 * User has successfully authenticated with Twitter. Access tokens saved to session and DB.
 */

/* Load required lib files. */
require_once('twitteroauth/twitteroauth.php');
define('CONSUMER_KEY', '-----');
define('CONSUMER_SECRET', '-----');

define('OAUTH_TOKEN', '-----');
define('OAUTH_TOKEN_SECRET', '-----');



/* Create a TwitterOauth object with consumer/user tokens. */
$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET,OAUTH_TOKEN, OAUTH_TOKEN_SECRET);

/* If method is set change API call made. Test is called by default. */
$content = $connection->get('account/verify_credentials');

/* Some example calls */
$connection->get('statuses/user_timeline', array('screen_name' => '- Enter Screen Name -')) ;


//$connection->post('statuses/update', array('status' => date(DATE_RFC822)));
//$connection->post('statuses/destroy', array('id' => 5437877770));
//$connection->post('friendships/create', array('id' => 9436992));
//$connection->post('friendships/destroy', array('id' => 9436992));

/* Include HTML to display on the page */
//include('html.inc');
