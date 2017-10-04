<?php
$ip_a='127.0.0.1';
$ip_b='42.42';
if (filter_var($ip_a,FILTER_VALIDATE_IP)){
    echo "This (ip_a) IP adress is considered valid.";
}
if (filter_var($ip_b,FILTER_VALIDATE_IP)){
    echo "This (ip_b) IP adress is considered valid.";
}
/*
 * FILTER_FLAG_IPV4 - The value must be a valid IPv4 address
FILTER_FLAG_IPV6 - The value must be a valid IPv6 address
FILTER_FLAG_NO_PRIV_RANGE - The value must not be within a private range
FILTER_FLAG_NO_RES_RANGE - The value must not be within a reserved range
 */