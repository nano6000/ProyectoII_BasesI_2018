-- -----------------------------------------------------
-- Insert Pais
-- -----------------------------------------------------
INSERT INTO `pais`(`nombrePais`) VALUES ('Costa Rica');
INSERT INTO `pais`(`nombrePais`) VALUES ('Nicaragua');
INSERT INTO `pais`(`nombrePais`) VALUES ('Colombia');
INSERT INTO `pais`(`nombrePais`) VALUES ('Estados Unidos');
INSERT INTO `pais`(`nombrePais`) VALUES ('Pánamá');

-- -----------------------------------------------------
-- Insert Provincia
-- -----------------------------------------------------
INSERT INTO `provincia`(`nombreProvincia`, `Pais_idPais`) VALUES ('San José',1);
INSERT INTO `provincia`(`nombreProvincia`, `Pais_idPais`) VALUES ('Cartago',1);
INSERT INTO `provincia`(`nombreProvincia`, `Pais_idPais`) VALUES ('Alajuela',1);
INSERT INTO `provincia`(`nombreProvincia`, `Pais_idPais`) VALUES ('Heredia',1);
INSERT INTO `provincia`(`nombreProvincia`, `Pais_idPais`) VALUES ('Limón',1);
INSERT INTO `provincia`(`nombreProvincia`, `Pais_idPais`) VALUES ('Puntarenas',1);
INSERT INTO `provincia`(`nombreProvincia`, `Pais_idPais`) VALUES ('Guanacaste',1);

-- -----------------------------------------------------
-- Insert Cantón
-- -----------------------------------------------------
INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('San José',1);
INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('Escazú',1);
INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('Desamparados',1);
INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('Puriscal',1);
INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('Tarrazú',1);
INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('Aserrí',1);
INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('Mora',1);
INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('Goicoechea',1);
INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('Santa Ana',1);
INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('Alajuelita',1);
INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('Vázquez de Coronado',1);
INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('Acosta',1);
INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('Tibas',1);
INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('Moravia',1);
INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('Montes de Oca',1);
INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('Turrubares',1);
INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('Dota',1);
INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('Curridabat',1);
INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('Perez Zeledón',1);
INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('León Cortés',1);

INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('Cartago',2);
INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('Paraíso',2);
INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('La Unión',2);
INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('Jiménez',2);
INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('Turrialba',2);
INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('Alvarado',2);
INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('Oreamuno',2);
INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('El Guarco',2);

INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('Alajuela',3);
INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('San Ramón',3);
INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('Grecia',3);
INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('San Mateo',3);
INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('Atenas',3);
INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('Naranjo',3);
INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('Palmares',3);
INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('Poás',3);
INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('Orotina',3);
INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('San Carlos',3);
INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('Zarcero',3);
INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('Valverde Vega',3);
INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('Upala',3);
INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('Los Chiles',3);
INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('Guatuso',3);

INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('Heredia',4);
INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('Barva',4);
INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('Santo Domingo',4);
INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('Santa Bárbara',4);
INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('San Rafael',4);
INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('San Isidro',4);
INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('Belén',4);
INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('Flores',4);
INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('San Pablo',4);
INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('Sarapiquí',4);

INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('Limón',5);
INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('Pococí',5);
INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('Siquirres',5);
INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('Talamanca',5);
INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('Matina',5);
INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('Guácimo',5);

INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('Liberia',6);
INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('Nicoya',6);
INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('Santa Cruz',6);
INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('Bagaces',6);
INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('Carrillo',6);
INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('Cañas',6);
INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('Abangares',6);
INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('Tilarán',6);
INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('Nandayure',6);
INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('La Cruz',6);
INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('Hojancha',6);

INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('Puntarenas',7);
INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('Esparza',7);
INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('Buenos Aires',7);
INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('Montes de Oro',7);
INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('Osa',7);
INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('Quepos',7);
INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('Golfito',7);
INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('Coto Brus',7);
INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('Parrita',7);
INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('Corredores',7);
INSERT INTO `canton`(`nombreCanton`, `Provincia_idProvincia`) VALUES ('Garabito',7);

-- -----------------------------------------------------
-- Insert Distrito
-- -----------------------------------------------------
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Carmen',1);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Pavas',1);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Hatillo',1);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('San Sebastián',1);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Uruca',1);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Zapote',1);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Escazú',2);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('San Antonio',2);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('San Rafael',2);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Desamparados',3);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('San Miguel',3);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('San Juan de Dios',3);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Santiago',4);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('San Antonio',4);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Barbacoas',4);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('San Marcos',5);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('San Lorenzo',5);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('San Carlos',5);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Aserrí',6);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Salitrillos',6);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('San Gabriel',6);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Ciudad Colón',7);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Guayabo',7);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Jaris',7);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Guadalupe',8);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Ipís',8);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Purral',8);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Santa Ana',9);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Pozos',9);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Uruca',9);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Alajuelita',10);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('San Felipe',10);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Concepción',10);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('San Isidro',11);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Patalillo',11);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('San Rafael',11);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('San Ignacuo',12);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Palmichal',12);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Guaitil',12);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('San Juan',13);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Leon XIII',13);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Colima',13);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('San Vicente',14);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('San Jerónimo',14);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Trinidad',14);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('San Pedro',15);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Sabanilla',15);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('San Rafael',15);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('San Pablo',16);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('San Pedro',16);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Carara',16);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Santa María',17);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Jardín',17);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Copey',17);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Curridabat',18);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Tirrases',18);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Granadilla',18);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('San Isidro de El General',19);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Daniel Flores',19);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('El General',19);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('San Pablo',20);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('San Antonio',20);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('San Andrés',20);

INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Oriental',21);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Agua Caliente',21);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('San Nicolás',21);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Paraíso',22);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Llanos de Santa Lucía',22);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Santiago de Paraíso',22);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Tres Ríos',23);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('San Diego',23);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Concepción',23);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Juan Viñas',24);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Tucurrique',24);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Pejibaye',24);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Turrialba',25);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('La Suiza',25);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('La Isabel',25);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Pacayas',26);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Cervantes',26);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Capellades',26);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('San Rafael',27);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Cot',27);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Cipreses',27);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Tejar',28);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('San Isidro',28);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Tobosi',28);

INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Alajuela',29);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('San José',29);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('San Rafael',29);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('San Ramón',30);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('San Juan',30);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Peñas Blancas',30);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Grecia',31);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('San Roque',31);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Puente de Piedra',31);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('San Mateo',32);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Jesús María',32);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Labrador',32);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Atenas',33);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Jesús',33);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Concepción',33);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Naranjo',34);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('San Miguel',34);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Cirrí',34);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Palmares',35);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Zaragoza',35);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Esquipulas',35);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('San Pedro',36);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Carrillos',36);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('San Rafael',36);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Orotina',37);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Coyolar',37);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Mastate',37);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Quesada',38);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Aguas Zarcas',38);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('La Fortuna',38);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Zarcero',39);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Brisas',39);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Tapezco',39);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Sarchí Norte',40);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Sarchí Sur',40);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('San Pedro',40);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Upala',41);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Pizote',41);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Delicias',41);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Los Chiles',42);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('El Amparo',42);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('San Jorge',42);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('San Rafael',43);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Río Cuarto',43);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Katira',43);

INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Heredia',44);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('San Francisco',44);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Ulloa',44);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Barva',45);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('San Pedro',45);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('San Pablo',45);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Santo Domingo',46);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Santa Rosa',46);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('San Vicente',46);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Santa Bárbara',47);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Jesús',47);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('San Juan',47);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('San Rafael',48);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('San Josecito',48);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Ángeles',48);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('San Isidro',49);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('San José',49);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('San Francisco',49);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('San Antonio',50);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('La Ribera',50);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('La Asunción',50);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('San Joaquín',51);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Barrantes',51);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Llorente',51);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('San Pablo',52);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Rincón de Sabanilla',52);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Puerto Viejo',53);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Horquetas',53);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('La Virgen',53);

INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Limón',54);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Valle La Estrella',54);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Río Blanco',54);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Guápiles',55);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Cariari',55);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('La Rita',55);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Siquirres',56);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Pacuarito',56);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Cairo',56);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Bratsi',57);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Sixaola',57);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Cahuita',57);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Matina',58);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Batán',58);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Carrandi',58);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Guácimo',59);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Río Jiménez',59);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Pocora',59);

INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Liberia',60);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Cañas Dulces',60);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Curubandé',60);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Nicoya',61);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('San Antonio',61);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Nosara',61);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Santa Cruz',62);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Veintisiete de Abril',62);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Tamarindo',62);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Bagaces',63);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Mogote',63);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('La Fortuna',63);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Filadelfia',64);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Sardinal',64);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Belén',64);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Cañas',65);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Bebedero',65);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('San Miguel',65);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Las Juntas',66);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Colorado',66);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Sierra',66);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Tilarán',67);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Quebrada Grande',67);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Arenal',67);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Carmona',68);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Bejuco',68);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('San Pablo',68);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('La Cruz',69);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Santa Cecilia',69);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Santa Elena',69);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Hojancha',70);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Puerto Carrillo',70);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Huacas',70);

INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Puntarenas',71);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Barranca',71);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Chacarita',71);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Espíritu Santo',72);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('San Juan Grande',72);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Macacona',72);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Buenos Aires',73);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Potrero Grande',73);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Volcán',73);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Miramar',74);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('La Unión',74);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('San Isidro',74);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Cortés',75);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Palmar',75);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Piedras Blancas',75);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Quepos',76);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Savegre',76);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Naranjito',76);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Golfito',77);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Guaycará',77);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Puerto Jiménez',77);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('San Vito',78);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Sabalito',78);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Aguabuena',78);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Parrita',79);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Corredor',80);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Paso Canoas',80);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Laurel',80);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Jacó',81);
INSERT INTO `distrito`(`nombreDistrito`, `Canton_idCanton`) VALUES ('Tárcoles',81);

-- -----------------------------------------------------
-- Insert Tipo Usuario
-- -----------------------------------------------------
INSERT INTO `tipousuario`(`descripcion`) VALUES ('Usuario');
INSERT INTO `tipousuario`(`descripcion`) VALUES ('EncargadoCentro');
INSERT INTO `tipousuario`(`descripcion`) VALUES ('EncargadoComercio');
INSERT INTO `tipousuario`(`descripcion`) VALUES ('SuperUsuario');

-- -----------------------------------------------------
-- Insert Equivalencia Material
-- -----------------------------------------------------
INSERT INTO `equivalenciamaterial`(`peso`, `puntos`, `nombre`) VALUES (1,1000,'Papel');
INSERT INTO `equivalenciamaterial`(`peso`, `puntos`, `nombre`) VALUES (1,800,'Carton');
INSERT INTO `equivalenciamaterial`(`peso`, `puntos`, `nombre`) VALUES (1,750,'Vidrio');
INSERT INTO `equivalenciamaterial`(`peso`, `puntos`, `nombre`) VALUES (1,850,'Aluminio');
INSERT INTO `equivalenciamaterial`(`peso`, `puntos`, `nombre`) VALUES (1,750,'Plástico');
INSERT INTO `equivalenciamaterial`(`peso`, `puntos`, `nombre`) VALUES (1,1250,'Electrónico');

-- -----------------------------------------------------
-- Insert Localización
-- -----------------------------------------------------
INSERT INTO `localizacion`(`coordenadaX`, `coordenadaY`) VALUES (9.930221, -84.049758);
INSERT INTO `localizacion`(`coordenadaX`, `coordenadaY`) VALUES (9.924549, -84.109003);
INSERT INTO `localizacion`(`coordenadaX`, `coordenadaY`) VALUES (9.897348, -84.065587);
INSERT INTO `localizacion`(`coordenadaX`, `coordenadaY`) VALUES (9.946160, -84.133008);
INSERT INTO `localizacion`(`coordenadaX`, `coordenadaY`) VALUES (9.371212, -83.704910);
INSERT INTO `localizacion`(`coordenadaX`, `coordenadaY`) VALUES (10.012409, -84.242694);

-- -----------------------------------------------------
-- Insert Centro Acopio
-- -----------------------------------------------------
INSERT INTO `centroacopio`(`nombreCentroAcopio`, `encargado`, `contacto`, `Localizacion_codigo`, `Distrito_idDistrito`) VALUES ('Recicla Costa Rica','Daniel Prado','80096798',1,46);
INSERT INTO `centroacopio`(`nombreCentroAcopio`, `encargado`, `contacto`, `Localizacion_codigo`, `Distrito_idDistrito`) VALUES ('Reciclathon Hatillo','Valeria Diaz','27982256',2,3);
INSERT INTO `centroacopio`(`nombreCentroAcopio`, `encargado`, `contacto`, `Localizacion_codigo`, `Distrito_idDistrito`) VALUES ('Centro de Acopio de Desamparados','Arturo Marrero','87702616',3,10);
INSERT INTO `centroacopio`(`nombreCentroAcopio`, `encargado`, `contacto`, `Localizacion_codigo`, `Distrito_idDistrito`) VALUES ('Ecolones Pavas','Diego Rivas','25685693',4,2);
INSERT INTO `centroacopio`(`nombreCentroAcopio`, `encargado`, `contacto`, `Localizacion_codigo`, `Distrito_idDistrito`) VALUES ('Cuida a Perez Zeledón','Greivin Castillo','12535382',5,58);
INSERT INTO `centroacopio`(`nombreCentroAcopio`, `encargado`, `contacto`, `Localizacion_codigo`, `Distrito_idDistrito`) VALUES ('Centro de Acopio de San José','Alejandra Cruz','88985225',6,89);

-- -----------------------------------------------------
-- Insert Comercio
-- -----------------------------------------------------
INSERT INTO `comercio`(`nombreComercio`, `nombreEncargado`, `contacto`, `descripcion`) VALUES ('Los Paleteros','Enrique Artiñano','26789520','Helados a la tica');
INSERT INTO `comercio`(`nombreComercio`, `nombreEncargado`, `contacto`, `descripcion`) VALUES ('Colchones Solis','Jaime Solís','89705630','Colchones, cobijas, almohadas y mucho más');
INSERT INTO `comercio`(`nombreComercio`, `nombreEncargado`, `contacto`, `descripcion`) VALUES ('Moyo','Andrés Cordero','22305576','Helados de Yogurt con toppings');
INSERT INTO `comercio`(`nombreComercio`, `nombreEncargado`, `contacto`, `descripcion`) VALUES ('Cinemark','Alvaro Brenes','88226565','Los mejores estrenos y la mejor comida');
INSERT INTO `comercio`(`nombreComercio`, `nombreEncargado`, `contacto`, `descripcion`) VALUES ('AM PM','Andrea Mora','22723215','Tienda de conveniencia abierta 24/7');
INSERT INTO `comercio`(`nombreComercio`, `nombreEncargado`, `contacto`, `descripcion`) VALUES ('Trigo Miel','Fernando Castro','68952468','Cafetería y repostería');

-- -----------------------------------------------------
-- Insert Producto
-- -----------------------------------------------------
INSERT INTO `producto`(`foto`, `precio`, `descripcion`) VALUES (LOAD_FILE('C:\Users\luisg\Desktop\Alejandro\TEC\2018\V Semestre\Bases de Datos I\Progra II\ProyectoII_BasesI_2018\Imagenes\a.png'),1500,'Churchileta');
INSERT INTO `producto`(`foto`, `precio`, `descripcion`) VALUES (LOAD_FILE('C:\Users\luisg\Desktop\Alejandro\TEC\2018\V Semestre\Bases de Datos I\Progra II\ProyectoII_BasesI_2018\Imagenes\a.png'),1250,'Paleta de menta con chocolate');
INSERT INTO `producto`(`foto`, `precio`, `descripcion`) VALUES (LOAD_FILE('C:\Users\luisg\Desktop\Alejandro\TEC\2018\V Semestre\Bases de Datos I\Progra II\ProyectoII_BasesI_2018\Imagenes\a.png'),1000,'Paleta de coco');

INSERT INTO `producto`(`foto`, `precio`, `descripcion`) VALUES (LOAD_FILE('C:\Users\luisg\Desktop\Alejandro\TEC\2018\V Semestre\Bases de Datos I\Progra II\ProyectoII_BasesI_2018\Imagenes\a.png'),12500,'Set de sabanas');
INSERT INTO `producto`(`foto`, `precio`, `descripcion`) VALUES (LOAD_FILE('C:\Users\luisg\Desktop\Alejandro\TEC\2018\V Semestre\Bases de Datos I\Progra II\ProyectoII_BasesI_2018\Imagenes\a.png'),10000,'Almohada ortopedica');
INSERT INTO `producto`(`foto`, `precio`, `descripcion`) VALUES (LOAD_FILE('C:\Users\luisg\Desktop\Alejandro\TEC\2018\V Semestre\Bases de Datos I\Progra II\ProyectoII_BasesI_2018\Imagenes\a.png'),7500,'Cobija térmica');

INSERT INTO `producto`(`foto`, `precio`, `descripcion`) VALUES (LOAD_FILE('C:\Users\luisg\Desktop\Alejandro\TEC\2018\V Semestre\Bases de Datos I\Progra II\ProyectoII_BasesI_2018\Imagenes\a.png'),2000,'Helado sabor Moyo con toppings');
INSERT INTO `producto`(`foto`, `precio`, `descripcion`) VALUES (LOAD_FILE('C:\Users\luisg\Desktop\Alejandro\TEC\2018\V Semestre\Bases de Datos I\Progra II\ProyectoII_BasesI_2018\Imagenes\a.png'),2100,'Helado sabor del mes con toppings');
INSERT INTO `producto`(`foto`, `precio`, `descripcion`) VALUES (LOAD_FILE('C:\Users\luisg\Desktop\Alejandro\TEC\2018\V Semestre\Bases de Datos I\Progra II\ProyectoII_BasesI_2018\Imagenes\a.png'),1600,'Helado sabor del mes sin toppings');

INSERT INTO `producto`(`foto`, `precio`, `descripcion`) VALUES (LOAD_FILE('C:\Users\luisg\Desktop\Alejandro\TEC\2018\V Semestre\Bases de Datos I\Progra II\ProyectoII_BasesI_2018\Imagenes\a.png'),1500,'Entrada individual');
INSERT INTO `producto`(`foto`, `precio`, `descripcion`) VALUES (LOAD_FILE('C:\Users\luisg\Desktop\Alejandro\TEC\2018\V Semestre\Bases de Datos I\Progra II\ProyectoII_BasesI_2018\Imagenes\a.png'),2800,'Entrada Doble');
INSERT INTO `producto`(`foto`, `precio`, `descripcion`) VALUES (LOAD_FILE('C:\Users\luisg\Desktop\Alejandro\TEC\2018\V Semestre\Bases de Datos I\Progra II\ProyectoII_BasesI_2018\Imagenes\a.png'),2500,'Combo Palomitas grandes y 2 refrescos');

INSERT INTO `producto`(`foto`, `precio`, `descripcion`) VALUES (LOAD_FILE('C:\Users\luisg\Desktop\Alejandro\TEC\2018\V Semestre\Bases de Datos I\Progra II\ProyectoII_BasesI_2018\Imagenes\a.png'),500,'Yuquitas');
INSERT INTO `producto`(`foto`, `precio`, `descripcion`) VALUES (LOAD_FILE('C:\Users\luisg\Desktop\Alejandro\TEC\2018\V Semestre\Bases de Datos I\Progra II\ProyectoII_BasesI_2018\Imagenes\a.png'),750,'Coca-Cola');
INSERT INTO `producto`(`foto`, `precio`, `descripcion`) VALUES (LOAD_FILE('C:\Users\luisg\Desktop\Alejandro\TEC\2018\V Semestre\Bases de Datos I\Progra II\ProyectoII_BasesI_2018\Imagenes\a.png'),1200,'Ensalada Cesár');

INSERT INTO `producto`(`foto`, `precio`, `descripcion`) VALUES (LOAD_FILE('C:\Users\luisg\Desktop\Alejandro\TEC\2018\V Semestre\Bases de Datos I\Progra II\ProyectoII_BasesI_2018\Imagenes\a.png'),500,'Café');
INSERT INTO `producto`(`foto`, `precio`, `descripcion`) VALUES (LOAD_FILE('C:\Users\luisg\Desktop\Alejandro\TEC\2018\V Semestre\Bases de Datos I\Progra II\ProyectoII_BasesI_2018\Imagenes\a.png'),700,'Café Mocha');
INSERT INTO `producto`(`foto`, `precio`, `descripcion`) VALUES (LOAD_FILE('C:\Users\luisg\Desktop\Alejandro\TEC\2018\V Semestre\Bases de Datos I\Progra II\ProyectoII_BasesI_2018\Imagenes\a.png'),500,'Pan Baguette');

-- -----------------------------------------------------
-- Insert ProductoXComercio
-- -----------------------------------------------------
INSERT INTO `productoxcomercio`(`Producto_idProducto`, `Comercio_idComercio`) VALUES (1,1);
INSERT INTO `productoxcomercio`(`Producto_idProducto`, `Comercio_idComercio`) VALUES (2,1);
INSERT INTO `productoxcomercio`(`Producto_idProducto`, `Comercio_idComercio`) VALUES (3,1);
INSERT INTO `productoxcomercio`(`Producto_idProducto`, `Comercio_idComercio`) VALUES (4,2);
INSERT INTO `productoxcomercio`(`Producto_idProducto`, `Comercio_idComercio`) VALUES (5,2);
INSERT INTO `productoxcomercio`(`Producto_idProducto`, `Comercio_idComercio`) VALUES (6,2);
INSERT INTO `productoxcomercio`(`Producto_idProducto`, `Comercio_idComercio`) VALUES (7,3);
INSERT INTO `productoxcomercio`(`Producto_idProducto`, `Comercio_idComercio`) VALUES (8,3);
INSERT INTO `productoxcomercio`(`Producto_idProducto`, `Comercio_idComercio`) VALUES (9,3);
INSERT INTO `productoxcomercio`(`Producto_idProducto`, `Comercio_idComercio`) VALUES (10,4);
INSERT INTO `productoxcomercio`(`Producto_idProducto`, `Comercio_idComercio`) VALUES (11,4);
INSERT INTO `productoxcomercio`(`Producto_idProducto`, `Comercio_idComercio`) VALUES (12,4);
INSERT INTO `productoxcomercio`(`Producto_idProducto`, `Comercio_idComercio`) VALUES (13,5);
INSERT INTO `productoxcomercio`(`Producto_idProducto`, `Comercio_idComercio`) VALUES (14,5);
INSERT INTO `productoxcomercio`(`Producto_idProducto`, `Comercio_idComercio`) VALUES (15,5);
INSERT INTO `productoxcomercio`(`Producto_idProducto`, `Comercio_idComercio`) VALUES (16,6);
INSERT INTO `productoxcomercio`(`Producto_idProducto`, `Comercio_idComercio`) VALUES (17,6);
INSERT INTO `productoxcomercio`(`Producto_idProducto`, `Comercio_idComercio`) VALUES (18,6);