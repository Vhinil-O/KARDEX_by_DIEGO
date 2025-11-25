<?php
$sqlNiveles = "SELECT * FROM niveles WHERE estado = '1';";
$queryNiveles = $pdo->prepare($sqlNiveles);
$queryNiveles->execute();
$niveles = $queryNiveles->fetchAll(PDO::FETCH_ASSOC);
