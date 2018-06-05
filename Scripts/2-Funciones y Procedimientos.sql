-- -----------------------------------------------------
-- function checkPassword
-- -----------------------------------------------------

USE `mydb`;
DROP function IF EXISTS `mydb`.`checkPassword`;

DELIMITER $$
USE `mydb`$$
CREATE FUNCTION `checkPassword` (`pUser` VARCHAR(45), `pPass` VARCHAR(45)) 
	RETURNS BOOLEAN
    NOT DETERMINISTIC
    READS SQL DATA
    SQL SECURITY DEFINER
BEGIN
	RETURN EXISTS(SELECT tipoUsuario_idtipoUsuario 
                   FROM `Usuario` 
                   WHERE nombreUsuario = pUser AND contrasena = pPass);
END$$

DELIMITER ;

-- -----------------------------------------------------
-- procedure obtenerLocalizacion
-- -----------------------------------------------------

USE `mydb`;
DROP procedure IF EXISTS `mydb`.`obtenerLocalizacion`;

DELIMITER $$
USE `mydb`$$
CREATE PROCEDURE `obtenerLocalizacion` ()
	NOT DETERMINISTIC
    READS SQL DATA
    SQL SECURITY DEFINER
BEGIN
	SELECT coordenadaX, coordenadaY
    FROM `localizacion`;
END$$

DELIMITER ;

-- -----------------------------------------------------
-- function tipoUsuario
-- -----------------------------------------------------

USE `mydb`;
DROP function IF EXISTS `mydb`.`tipoUsuario`;

DELIMITER $$
USE `mydb`$$
CREATE FUNCTION `tipoUsuario` (`pUser` VARCHAR(45))
	RETURNS INT(1)
    NOT DETERMINISTIC
    READS SQL DATA
    SQL SECURITY DEFINER
BEGIN
	RETURN (SELECT tipoUsuario_idtipoUsuario 
			FROM `usuario` 
            WHERE nombreUsuario = pUser);
END$$

DELIMITER ;
