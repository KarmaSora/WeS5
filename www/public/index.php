<?php

$pass = password_hash('12345', PASSWORD_DEFAULT);
echo('pass för 12345: '. $pass);




/*
UPP3

a) SELECT Name FROM city WHERE Name LIKE '%land'


b) SELECT count(Name) AS Num FROM city WHERE Name LIKE '%land'

c)  SELECT sum(Population) AS Sum FROM city


d)  SELECT * FROM city WHERE CountryCode ='SWE' OR CountryCode = 'FIN' ORDER BY Name;

e)  SELECT Name,Population,SurfaceArea FROM country WHERE SurfaceArea >500 AND SurfaceArea <1000 ORDER BY SurfaceArea DESC

f) tar bor alla länder som börjar med A



upp 5
a) rätt lösning:         SELECT * FROM egytalk WHERE uid = "94e4c092-74b2-11ed-bff6-0242ac150004"

b)      SELECT * FROM comment WHERE pid = 3;


*/ 


?>
