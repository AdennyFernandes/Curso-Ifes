CREATE TABLE providers (
  id numeric PRIMARY KEY,
  name varchar(50),
  street varchar(50),
  city varchar(50)
  state char(2)
);

INSERT INTO customers (id, name, street, city, state)
VALUES

id	name                street	        city	        state	
  (1,	'Henrique',	        'Av Brasil',	    'Rio de Janeiro',	'RJ'),	
  (2, 'Marcelo Augusto',	    'Rua Imigrantes',	'Belo Horizonte',	'MG'),
  (3,	'Caroline Silva',	    'Av São Paulo',	'Salvador',	    'BA'),	
  (4,	'Guilerme Staff',      'Rua Central',	    'Porto Alegre',	'RS'),	
  (5,	'Isabela Moraes',	    'Av Juiz Grande',	'Curitiba',	    'PR'),	
  (6,	'Francisco Accerr',	'Av Paulista',	'São Paulo',	        'SP'), 