

<?php
echo "hoje é dia ".date('d/m/y')."<br>";
echo " Agora são ".date('h:i:s');

// Exibe alguma coisa como: Agora são 10:32:11Sunday
echo date("l")."<br>";

// Exibe alguma coisa como: Monday 8th of August 2005 03:12:46 PM
echo date('l jS \of F Y h:i:s A')."<br>";

// Exibe: July 1, 2000 is on a Saturday
echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000))."<br>";

/* utiliza as constantes do parâmetro de formato */
// Exibe alguma coisa como: Mon, 15 Aug 2005 15:12:46 UTC
echo date(DATE_RFC822)."<br>";

// Exibe alguma coisa como: 2000-07-01T00:00:00+00:00
echo date(DATE_ATOM, mktime(0, 0, 0, 7, 1, 2000))."<br>";
?>