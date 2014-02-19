<?php

/*
 * This file is part of the Predis package.
 *
 * (c) Daniele Alessandri <suppakilla@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

require 'Predis/Autoloader.php';

Predis\Autoloader::register();

require 'SharedConfigurations.php';

/* $options = array(
    'cluster' => function () {
        $distributor = new NaiveDistributionStrategy();
        $cluster = new PredisCluster($distributor);

        return $cluster;
    },
); */

// $client = new Predis\Client($multiple_servers, array('cluster' => 'redis'));
$client = new Predis\Client($single_server);

$client->set('kopi', 'kapalapi');
$retval = $client->get('kopi');

if ($retval == "") {
	$retval = "nil";
}
	
echo "\n ".$retval;