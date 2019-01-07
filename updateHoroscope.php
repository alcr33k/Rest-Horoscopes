<?php 
/**
 * begärs via put
 * kolla efter födeledatum i put-datan
 * räkna ut vilket horoskop födeledatan tillhör och uppdatera det sparde horoskopet som finns i session och skriv ut true
 * om det inte finns horoskop i session updtare inte och skriv ut false
 */
parse_str(ﬁle_get_contents("php://input"), $_PUT);

?>