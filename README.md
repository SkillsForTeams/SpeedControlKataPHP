# Speed Control Kata

This is the Speed Control Kata from my PHP Unit course

German Language on Udemy 
https://t.co/4vjBvBkp4L


PHP Profi Paket with all my PHP Courses in German 
https://skills-for-teams.com/l/php-profipaket/

## Install and Execute

# Checkout Composer

´composer install

Installing dependencies 

´composer test 
Run PHP Unit Tests 


## Your Task 
Your task is to create a php class calculating the fee for driving too fast. 


Greate a class where you input Allowed Speed, Actual Speed and if it was inside a city 
to calculate your fine 


Data For Germany 
https://www.kba.de/DE/Fahreignungs_Bewertungssystem/Punktekatalog/geschwindigkeiten_pkw_motorrad.html

Zulässige Höchstgeschwindigkeit überschritten mit anderen Kraftfahrzeugen
(zum Beispiel: PKW, Motorrad)	   	   	   	   


BKat-Nr. *)	Delikt	                                             Punkte EURO Fahrverbot
11.3.4	21 - 25 km/h  -  innerhalb geschlossener Ortschaften	1 P	A	80	nein
11.3.4	21 - 25 km/h  -  außerhalb geschlossener Ortschaften	1 P	A	70	nein
11.3.5	26 - 30 km/h   -  innerhalb geschlossener Ortschaften	1 P	A	100	nein / ja ***)
11.3.5	26 - 30 km/h   -  außerhalb geschlossener Ortschaften	1 P	A	80	nein / ja ***)
11.3.6	31 - 40 km/h   -  innerhalb geschlossener Ortschaften	2 P	A	160	ja
11.3.6	31 - 40 km/h   -  außerhalb geschlossener Ortschaften	1 P	A	120	nein / ja ***)
11.3.7	41 - 50 km/h   -  innerhalb geschlossener Ortschaften	2 P	A	200	ja
11.3.7	41 - 50 km/h   -  außerhalb geschlossener Ortschaften	2 P	A	160	ja
11.3.8	51 - 60 km/h   -  innerhalb geschlossener Ortschaften	2 P	A	280	ja
11.3.8	51 - 60 km/h   -  außerhalb geschlossener Ortschaften	2 P	A	240	ja
11.3.9	61 - 70 km/h   -  innerhalb geschlossener Ortschaften	2 P	A	480	ja
11.3.9	61 - 70 km/h   -  außerhalb geschlossener Ortschaften	2 P	A	440	ja
11.3.10	über 70 km/h   -  innerhalb geschlossener Ortschaften	2 P	A	680	ja
11.3.10	über 70 km/h   -  außerhalb geschlossener Ortschaften	2 P	A	600	ja

