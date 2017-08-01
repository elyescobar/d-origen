select * from productos
INSERT INTO productos (id, codigo,nombre,presentacion, peso,unidad,precioxmenor,precioxmayor,precioxcaja,existencias,registrosanitario,descripcion,activado) values (default,'HGMV1','Mermelada de Higo','Frasco de vidrio','400','gramos','10','8','0','50','N6002117N/VAGUBI','Elaborada con ingredientes naturales','1')

INSERT INTO productos (id, codigo,nombre,presentacion, peso,unidad,precioxmenor,precioxmayor,precioxcaja,existencias,registrosanitario,descripcion,activado) VALUES (default,'HGMV2','Mermelada de Higo','Frasco de vidrio','250','gramos','8','6.5','0','50','N6002117N/VAGUBI','Elaborada con ingredientes naturales','1')

INSERT INTO productos (id, codigo,nombre,presentacion, peso,unidad,precioxmenor,precioxmayor,precioxcaja,existencias,registrosanitario,descripcion,activado) VALUES (default,'HGMB1','Mermelada de Higo','Bolsa','500','gramos','10.5','8.5','0','50','N6002117N/VAGUBI','Elaborada con ingredientes naturales','1')

INSERT INTO clientes (id, nombre_apellido,usuario, contraseña,email,telefono,movil,direccion,ciudad,dninif) VALUES (default,'Yordy Chura Chura','yordychura','yordychura','yordy@chura','963259','269353698','Augusto B leguia','tacna','45268936')

INSERT INTO clientes (id, nombre_apellido,usuario, contraseña,email,telefono,movil,direccion,ciudad,dninif) VALUES (default,'Karla Manga','karla','karla','karla@manga','452689','950268915','Alfonso ugarte','Cono sur','75869256')

INSERT INTO imagenesproducto (id, idproducto,titulo,descripcion,imagen) VALUES (default,'1','Frasco Mermelada Higo','Diferentes presentaciones','frasco_mh_1.jpg')

INSERT INTO imagenesproducto (id, idproducto,titulo,descripcion,imagen) VALUES (default,'2','Frasco Mermelada Higo','Diferentes presentaciones','frasco_mh_2.jpg')

INSERT INTO imagenesproducto (id, idproducto,titulo,descripcion,imagen) VALUES (default,'3','Bolsa Mermelada Higo','Diferentes presentaciones','bolsa_mh_1.jpg')

INSERT INTO imagenesproducto (id, idproducto,titulo,descripcion,imagen) VALUES (default,'3','Bolsa Mermelada Higo','Diferentes presentaciones','bolsa_mh_2.jpg')

,CURRENT_DATE
