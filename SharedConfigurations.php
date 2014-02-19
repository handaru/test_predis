<?php
/*
 * This file is part of the Predis package.
 *
 * (c) Daniele Alessandri <suppakilla@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/* $single_server = array(
    'host'     => '54.254.23.22',
    'port'     => 6379,
    'database' => 0,
    'password' => 'rahasiahati12345'
); */

/* $single_server = array(
    'host'     => 'pub-redis-10019.us-east-1-3.1.ec2.garantiadata.com',
    'port'     => 10019,
    'database' => 0,
    'password' => 'terserah1234'
); */

$single_server = array(
    'host'     => 'ec2-46-137-228-31.ap-southeast-1.compute.amazonaws.com',
    'port'     => 6379,
    'database' => 0,
    'password' => 'rahasiahati12345'
);

$multiple_servers = array(
    array(
       'host'     => 'ec2-46-137-228-31.ap-southeast-1.compute.amazonaws.com',
       'port'     => 7000,
       'database' => 0
    ),
    array(
       'host'     => 'ec2-46-137-228-31.ap-southeast-1.compute.amazonaws.com',
       'port'     => 7001,
       'database' => 0
    ),
    array(
       'host'     => 'ec2-46-137-228-31.ap-southeast-1.compute.amazonaws.com',
       'port'     => 7002,
       'database' => 0
    ),
    array(
       'host'     => 'ec2-46-137-228-31.ap-southeast-1.compute.amazonaws.com',
       'port'     => 7003,
       'database' => 0
    ),
    array(
       'host'     => 'ec2-46-137-228-31.ap-southeast-1.compute.amazonaws.com',
       'port'     => 7004,
       'database' => 0
    ),
    array(
       'host'     => 'ec2-46-137-228-31.ap-southeast-1.compute.amazonaws.com',
       'port'     => 7005,
       'database' => 0
    ),
    /* array(
        'host'     => 'ec2-46-137-228-31.ap-southeast-1.compute.amazonaws.com',
        'port'     => 7006,
        'database' => 0
    ),
    array(
        'host'     => 'ec2-46-137-228-31.ap-southeast-1.compute.amazonaws.com',
        'port'     => 7007,
        'database' => 0
    ) */
);