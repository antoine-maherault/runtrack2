
-- Selectionner ensemble des champs de la table etudiants

SELECT * FROM etudiants WHERE `naissance` < CURDATE() - INTERVAL 18 YEAR;