
SELECT salles.nom AS BiggestRoom, etage.nom, capacite FROM salles INNER JOIN etage ON etage.id = salles.id_etage HAVING capacite = (SELECT MAX(capacite) FROM `salles`)