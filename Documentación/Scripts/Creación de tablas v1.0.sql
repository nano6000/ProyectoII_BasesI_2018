-- MySQL Script generated by MySQL Workbench
-- Wed May 30 17:30:06 2018
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`Localizacion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Localizacion` (
  `codigo` INT NOT NULL,
  `coordenadaX` FLOAT NOT NULL,
  `coordenadaY` FLOAT NOT NULL,
  PRIMARY KEY (`codigo`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`centroAcopio`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`centroAcopio` (
  `idcentroAcopio` INT NOT NULL,
  `nombreCentroAcopio` VARCHAR(45) NOT NULL,
  `encargado` VARCHAR(45) NOT NULL,
  `contacto` VARCHAR(45) NOT NULL,
  `Localizacion_codigo` INT NOT NULL,
  PRIMARY KEY (`idcentroAcopio`, `Localizacion_codigo`),
  INDEX `fk_centroAcopio_Localizacion1_idx` (`Localizacion_codigo` ASC),
  CONSTRAINT `fk_centroAcopio_Localizacion1`
    FOREIGN KEY (`Localizacion_codigo`)
    REFERENCES `mydb`.`Localizacion` (`codigo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Distrito`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Distrito` (
  `idDistrito` INT NOT NULL,
  `nombreDistrito` VARCHAR(45) NOT NULL,
  `direccionExacta` VARCHAR(45) NULL,
  `centroAcopio_idcentroAcopio` INT NOT NULL,
  PRIMARY KEY (`idDistrito`, `centroAcopio_idcentroAcopio`),
  INDEX `fk_Distrito_centroAcopio1_idx` (`centroAcopio_idcentroAcopio` ASC),
  CONSTRAINT `fk_Distrito_centroAcopio1`
    FOREIGN KEY (`centroAcopio_idcentroAcopio`)
    REFERENCES `mydb`.`centroAcopio` (`idcentroAcopio`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Canton`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Canton` (
  `idCanton` INT NOT NULL,
  `nombreCanton` VARCHAR(45) NOT NULL,
  `Distrito_idDistrito` INT NOT NULL,
  PRIMARY KEY (`idCanton`, `Distrito_idDistrito`),
  INDEX `fk_Canton_Distrito1_idx` (`Distrito_idDistrito` ASC),
  CONSTRAINT `fk_Canton_Distrito1`
    FOREIGN KEY (`Distrito_idDistrito`)
    REFERENCES `mydb`.`Distrito` (`idDistrito`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Provincia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Provincia` (
  `idProvincia` INT NOT NULL,
  `nombreProvincia` VARCHAR(45) NOT NULL,
  `Canton_idCanton` INT NOT NULL,
  PRIMARY KEY (`idProvincia`, `Canton_idCanton`),
  INDEX `fk_Provincia_Canton1_idx` (`Canton_idCanton` ASC),
  CONSTRAINT `fk_Provincia_Canton1`
    FOREIGN KEY (`Canton_idCanton`)
    REFERENCES `mydb`.`Canton` (`idCanton`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Pais`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Pais` (
  `idPais` INT NOT NULL,
  `nombrePais` VARCHAR(45) NOT NULL,
  `Provincia_idProvincia` INT NOT NULL,
  PRIMARY KEY (`idPais`, `Provincia_idProvincia`),
  INDEX `fk_Pais_Provincia1_idx` (`Provincia_idProvincia` ASC),
  CONSTRAINT `fk_Pais_Provincia1`
    FOREIGN KEY (`Provincia_idProvincia`)
    REFERENCES `mydb`.`Provincia` (`idProvincia`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = PBXT;


-- -----------------------------------------------------
-- Table `mydb`.`category`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`category` (
  `category_id` INT NOT NULL,
  `name` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`category_id`));


-- -----------------------------------------------------
-- Table `mydb`.`telefonosXpesona`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`telefonosXpesona` (
  `idtelefonosXpesona` INT UNSIGNED NOT NULL,
  `telefono` VARCHAR(45) NULL,
  PRIMARY KEY (`idtelefonosXpesona`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`correosXpersona`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`correosXpersona` (
  `idCorreo` INT NOT NULL AUTO_INCREMENT,
  `correo` VARCHAR(45) NULL,
  PRIMARY KEY (`idCorreo`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Persona`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Persona` (
  `cedula` INT NOT NULL,
  `nombrePersona` VARCHAR(45) NOT NULL,
  `primerApellidoPesona` VARCHAR(45) NOT NULL,
  `segundoApellidoPersona` VARCHAR(45) NOT NULL,
  `telefonosXpesona_idtelefonosXpesona` INT NOT NULL,
  `correosXpersona_idCorreo` INT NOT NULL,
  `Pais_idPais` INT NOT NULL,
  `Pais_Provincia_idProvincia` INT NOT NULL,
  PRIMARY KEY (`cedula`, `telefonosXpesona_idtelefonosXpesona`, `correosXpersona_idCorreo`, `Pais_idPais`, `Pais_Provincia_idProvincia`),
  INDEX `fk_Persona_telefonosXpesona1_idx` (`telefonosXpesona_idtelefonosXpesona` ASC),
  INDEX `fk_Persona_correosXpersona1_idx` (`correosXpersona_idCorreo` ASC),
  INDEX `fk_Persona_Pais1_idx` (`Pais_idPais` ASC, `Pais_Provincia_idProvincia` ASC),
  CONSTRAINT `fk_Persona_telefonosXpesona1`
    FOREIGN KEY (`telefonosXpesona_idtelefonosXpesona`)
    REFERENCES `mydb`.`telefonosXpesona` (`idtelefonosXpesona`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Persona_correosXpersona1`
    FOREIGN KEY (`correosXpersona_idCorreo`)
    REFERENCES `mydb`.`correosXpersona` (`idCorreo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Persona_Pais1`
    FOREIGN KEY (`Pais_idPais` , `Pais_Provincia_idProvincia`)
    REFERENCES `mydb`.`Pais` (`idPais` , `Provincia_idProvincia`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Producto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Producto` (
  `idProducto` INT NOT NULL AUTO_INCREMENT,
  `foto` BLOB NULL,
  `precio` DECIMAL NOT NULL,
  `descripcion` VARCHAR(45) NULL,
  PRIMARY KEY (`idProducto`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`tipoUsuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`tipoUsuario` (
  `idtipoUsuario` INT NOT NULL,
  `descripcion` VARCHAR(45) NULL,
  PRIMARY KEY (`idtipoUsuario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Puntos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Puntos` (
  `idPuntos` INT NOT NULL,
  `idTipoPuntos` INT NOT NULL,
  `cantidad` VARCHAR(45) NOT NULL,
  `fechaHoraTransaccionPuntos` DATETIME NOT NULL,
  PRIMARY KEY (`idPuntos`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Usuario` (
  `nombreUsuario` VARCHAR(45) NOT NULL,
  `contrasena` VARCHAR(45) NOT NULL,
  `puntosActuales` VARCHAR(45) NULL,
  `puntosGastados` VARCHAR(45) NULL,
  `puntosTotales` VARCHAR(45) NULL,
  `tipoUsuario_idtipoUsuario` INT NOT NULL,
  `Persona_cedula` INT NOT NULL,
  `Persona_telefonosXpesona_idtelefonosXpesona` INT NOT NULL,
  `Persona_correosXpersona_idCorreo` INT NOT NULL,
  `Puntos_idPuntos` INT NOT NULL,
  PRIMARY KEY (`nombreUsuario`, `tipoUsuario_idtipoUsuario`, `Persona_cedula`, `Persona_telefonosXpesona_idtelefonosXpesona`, `Persona_correosXpersona_idCorreo`, `Puntos_idPuntos`),
  UNIQUE INDEX `nombreUsuario_UNIQUE` (`nombreUsuario` ASC),
  INDEX `fk_Usuario_tipoUsuario1_idx` (`tipoUsuario_idtipoUsuario` ASC),
  INDEX `fk_Usuario_Persona1_idx` (`Persona_cedula` ASC, `Persona_telefonosXpesona_idtelefonosXpesona` ASC, `Persona_correosXpersona_idCorreo` ASC),
  INDEX `fk_Usuario_Puntos1_idx` (`Puntos_idPuntos` ASC),
  CONSTRAINT `fk_Usuario_tipoUsuario1`
    FOREIGN KEY (`tipoUsuario_idtipoUsuario`)
    REFERENCES `mydb`.`tipoUsuario` (`idtipoUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Usuario_Persona1`
    FOREIGN KEY (`Persona_cedula` , `Persona_telefonosXpesona_idtelefonosXpesona` , `Persona_correosXpersona_idCorreo`)
    REFERENCES `mydb`.`Persona` (`cedula` , `telefonosXpesona_idtelefonosXpesona` , `correosXpersona_idCorreo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Usuario_Puntos1`
    FOREIGN KEY (`Puntos_idPuntos`)
    REFERENCES `mydb`.`Puntos` (`idPuntos`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`EquivalenciaMaterial`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`EquivalenciaMaterial` (
  `idTipo` INT NOT NULL,
  `peso` VARCHAR(45) NOT NULL,
  `puntos` VARCHAR(45) NOT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idTipo`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Comercio`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Comercio` (
  `idComercio` INT NOT NULL AUTO_INCREMENT,
  `nombreComercio` VARCHAR(45) NOT NULL,
  `nombreEncargado` VARCHAR(45) NOT NULL,
  `contacto` VARCHAR(45) NULL,
  `descripcion` VARCHAR(45) NULL,
  PRIMARY KEY (`idComercio`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Producto_has_Usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Producto_has_Usuario` (
  `Producto_idProducto` INT NOT NULL,
  `Usuario_nombreUsuario` VARCHAR(45) NOT NULL,
  `Usuario_tipoUsuario_idtipoUsuario` INT NOT NULL,
  `Usuario_Persona_cedula` INT NOT NULL,
  `Usuario_Persona_telefonosXpesona_idtelefonosXpesona` INT NOT NULL,
  `Usuario_Persona_correosXpersona_idCorreo` INT NOT NULL,
  PRIMARY KEY (`Producto_idProducto`, `Usuario_nombreUsuario`, `Usuario_tipoUsuario_idtipoUsuario`, `Usuario_Persona_cedula`, `Usuario_Persona_telefonosXpesona_idtelefonosXpesona`, `Usuario_Persona_correosXpersona_idCorreo`),
  INDEX `fk_Producto_has_Usuario_Usuario1_idx` (`Usuario_nombreUsuario` ASC, `Usuario_tipoUsuario_idtipoUsuario` ASC, `Usuario_Persona_cedula` ASC, `Usuario_Persona_telefonosXpesona_idtelefonosXpesona` ASC, `Usuario_Persona_correosXpersona_idCorreo` ASC),
  INDEX `fk_Producto_has_Usuario_Producto1_idx` (`Producto_idProducto` ASC),
  CONSTRAINT `fk_Producto_has_Usuario_Producto1`
    FOREIGN KEY (`Producto_idProducto`)
    REFERENCES `mydb`.`Producto` (`idProducto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Producto_has_Usuario_Usuario1`
    FOREIGN KEY (`Usuario_nombreUsuario` , `Usuario_tipoUsuario_idtipoUsuario` , `Usuario_Persona_cedula` , `Usuario_Persona_telefonosXpesona_idtelefonosXpesona` , `Usuario_Persona_correosXpersona_idCorreo`)
    REFERENCES `mydb`.`Usuario` (`nombreUsuario` , `tipoUsuario_idtipoUsuario` , `Persona_cedula` , `Persona_telefonosXpesona_idtelefonosXpesona` , `Persona_correosXpersona_idCorreo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Producto_has_Comercio`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Producto_has_Comercio` (
  `Producto_idProducto` INT NOT NULL,
  `Comercio_idComercio` INT NOT NULL,
  PRIMARY KEY (`Producto_idProducto`, `Comercio_idComercio`),
  INDEX `fk_Producto_has_Comercio_Comercio1_idx` (`Comercio_idComercio` ASC),
  INDEX `fk_Producto_has_Comercio_Producto1_idx` (`Producto_idProducto` ASC),
  CONSTRAINT `fk_Producto_has_Comercio_Producto1`
    FOREIGN KEY (`Producto_idProducto`)
    REFERENCES `mydb`.`Producto` (`idProducto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Producto_has_Comercio_Comercio1`
    FOREIGN KEY (`Comercio_idComercio`)
    REFERENCES `mydb`.`Comercio` (`idComercio`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
