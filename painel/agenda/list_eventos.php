<?php

require_once('conexao.php');

$query_events = "SELECT id, title, color, start, end FROM evento";
$resultado_events = $conn->prepare($query_events);
$resultado_events->execute();
$resultado_events->bind_result($title,$color,$start,$end);

$result = array();

while($resultado_events->fetch()) {
        //validate using user type where user redirect

        $result[] = array('title'=>$title,'color'=>$color,'start'=>$start,'end'=>$end);
        header('Content-type: application/json');
    }

echo json_encode($events);

?>