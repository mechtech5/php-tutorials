<?php

require 'Collection.php';

$c = new Collection();

$c->add('foo');
$c->add('bar');

echo $c->jsonSerialize();
