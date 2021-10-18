<?php
$date_diff = date_diff(new DateTime(strval($_SESSION['time'])), new DateTime());
echo "Sie sind seit " . $date_diff->i . " Minuten und " . $date_diff->s . " Sekunden hier und haben sich " . $pages . " Seiten angesehen.";