<?php
function autoloader($clase)
{
  require_once($clase . ".php");
}
spl_autoload_register("autoloader");
