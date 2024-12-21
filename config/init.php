<?php

// вернёт коренную папку fr.loc
define("ROOT",dirname(__DIR__));
const WWW = ROOT . '/public';
const APP = ROOT . '/app';
const CORE = ROOT . '/core';
const HELPERS = ROOT . '/helpers';
const CONFIG = ROOT . '/config';

// следуем конвенции , что наши пути не будут заканчиваться на / (слЭш)