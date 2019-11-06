<?php

$char = readline();
echo preg_match('~^\p{Lu}~u', $char) ? 'upper-case' : 'lower-case';
