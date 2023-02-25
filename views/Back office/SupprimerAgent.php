<?php
include "../../core/AgentC.php";


$agentC=new AgentC();
$agentC->supprimerAgent($_POST["cin"]);
header('Location: AfficherAgent.php');


?><?php
