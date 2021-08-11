USE cms_s;
SELECT * FROM administrador ;
SELECT * FROM usuario ;
SELECT * FROM pagina ;

INSERT INTO administrador VALUES(
null,
'Jesús Antonio Ladino',
'ladval19@gmail.com',
aes_encrypt('12345678','-mCd!!Pm**-'),
1,
'2021-07-10 10:23:32'
);

INSERT INTO usuario VALUES(
null,
'Ynes Cortina',
'yn_cortina@diaperstack.com',
aes_encrypt('Ynes1458971','-mCd!!Pm**-'),
1,
'2021-07-10 10:39:32'
);

INSERT INTO usuario VALUES(
null,
'Gigi Geter',
'gigigeter@progressenergyinc.info',
aes_encrypt('Gigi1458971','-mCd!!Pm**-'),
1,
'2021-07-10 10:39:32'
);

INSERT INTO usuario VALUES(
null,
'Langworth Fitts',
'lan.fitts@consolidated-farm-research.net',
aes_encrypt('Langworth1458971','-mCd!!Pm**-'),
1,
'2021-07-10 10:39:32'
);

INSERT INTO usuario VALUES(
null,
'Pallavi Heflin',
'pa.hefl@arketmay.com',
aes_encrypt('Pallavi1458971','-mCd!!Pm**-'),
1,
'2021-07-10 10:39:32'
);

INSERT INTO usuario VALUES(
null,
'Bennie Jimmerson',
'benn-jimm@careful-organics.org',
aes_encrypt('Bennie1458971','-mCd!!Pm**-'),
1,
'2021-07-10 10:39:32'
);

INSERT INTO usuario VALUES(
null,
'Monro Ballesteros',
'mon_balleste@acusage.net',
aes_encrypt('Monro1458971','-mCd!!Pm**-'),
1,
'2021-07-10 10:39:32'
);

INSERT INTO usuario VALUES(
null,
'Sayed Dinapoli',
'say.dinapo@arketmay.com',
aes_encrypt('Sayed1458971','-mCd!!Pm**-'),
1,
'2021-07-10 10:39:32'
);



INSERT INTO articulo VALUES(
null,
'Where does Lorem Ipsum come from?',
'li_comefrom',
"Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of 'de Finibus Bonorum et Malorum' (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, 'Lorem ipsum dolor sit amet..', comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from 'de Finibus Bonorum et Malorum' by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.",
'https://weburbanist.com/wp-content/uploads/2011/11/gangsta-lorem-ipsum.jpg',
'Datos curiosos',
'2021-07-10 10:52:32',
'help@lipsum',
1,
1
);

INSERT INTO comentario VALUES(
null,
'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias',
'2021-07-10 11:28:12',
1,
1,
4
);


-- Simular login 
SELECT uid, nombre 
FROM usuario
WHERE
email = 'say.dinapo@arketmay.com' AND
clave = aes_encrypt('Sayed1458971','-mCd!!Pm**-') AND 
estado = 1;

SELECT aid, nombre
FROM administrador
WHERE
email = 'ladval19@gmail.com' AND 
clave = aes_encrypt('12345678','-mCd!!Pm**-') AND 
estado = 1;

-- Mostrar administrador con la clave --
SELECT aid, nombre, email, estado, fecha_creacion, 
CAST(aes_decrypt(clave,'-mCd!!Pm**-') AS CHAR) AS 'clave'
FROM administrador;

-- Crear usuarios --
INSERT INTO usuario VALUES(
null,
'Carlos Perez',
'cper2diaz@gmail.com',
aes_encrypt('cper189','-mCd!!Pm**-'),
1,
now()
);

-- Mostrar usuarios --
SELECT * FROM usuario;

-- Crear pagina --
INSERT INTO pagina VALUES(
null,
'Lorem Ipsum',
'loremipsum',
"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
'https://weburbanist.com/wp-content/uploads/2011/11/gangsta-lorem-ipsum.jpg',
null,
1,
'2021-07-10 10:42:32',
1
);

SELECT * FROM pagina; 

-- Resumen de la pagina con el nombre del administrador --

SELECT 
p.pid,
p.titulo,
p.slug,
p.estado,
p.fecha_creacion,
a.nombre AS 'administrador'
FROM pagina p
INNER JOIN administrador a ON p.aid = a.aid; 

-- Resumen de los comentarios con el nombre del usuario y el título del articulo --

SELECT 
c.cid,
c.texto,
c.fecha_creacion,
c.estado,
ar.titulo AS 'titulo_articulo',
u.nombre AS 'nombre_usuario'
FROM comentario c
INNER JOIN articulo ar ON c.arid = ar.arid 
INNER JOIN usuario u ON c.uid = u.uid;








