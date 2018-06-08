
DROP EVENT IF EXISTS `topUsuarioDia`;

CREATE EVENT `topUsuarioDia` ON SCHEDULE EVERY 24 HOUR 
	STARTS '2018-06-08 05:03:27' 
	ON COMPLETION PRESERVE ENABLE DO 
	INSERT INTO topusuarioxdia(Usuario_nombreUsuario, peso,centroacopio_idCentroacopio) 
	VALUES((SELECT p.Usuario_nombreUsuario 
			FROM puntos p 
			WHERE DAY(p.fecCreacion) = DAY(NOW()) 
			GROUP BY p.Usuario_nombreUsuario 
			ORDER BY SUM(p.peso) DESC 
			LIMIT 1), 
			(SELECT SUM(p.peso) 
			FROM puntos p 
			WHERE DAY(p.fecCreacion) = DAY(NOW()) 
			GROUP BY p.Usuario_nombreUsuario 
			ORDER BY SUM(p.peso) DESC 
			LIMIT 1), 
			(SELECT p.centroAcopio_idcentroAcopio FROM puntos p 
			WHERE DAY(p.fecCreacion) = DAY(NOW()) 
			GROUP BY p.Usuario_nombreUsuario 
			ORDER BY SUM(p.peso) DESC 
			LIMIT 1));

SET GLOBAL event_scheduler = ON;
