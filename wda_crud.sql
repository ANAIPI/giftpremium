create database wda_crud;
use wda_crud;

CREATE TABLE customers (
  id int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
  name varchar(255) NOT NULL,
  cpf_cnpj varchar(15) NOT NULL,
  birthdate datetime NOT NULL,
  address varchar(255) NOT NULL,
  hood varchar(100) NOT NULL,
  zip_code varchar(8) NOT NULL,
  city varchar(100) NOT NULL,
  state varchar(2) NOT NULL,
  phone varchar(13) NOT NULL,
  mobile varchar(13) NOT NULL,
  ie varchar(15) NOT NULL,
  created datetime NOT NULL,
  modified datetime NOT NULL
);

INSERT INTO `customers` (`name`, `cpf_cnpj`, `birthdate`, `address`, 
`hood`, `zip_code`, `city`, `state`, `phone`, `mobile`, `ie`, `created`, `modified`) 
VALUES ('Fulano de Tal', '123.456.789-00', '1989-01-01', 'Rua da Web, 123', 
'Internet', '12345678', 'Teste', 'Teste', '15 12345678', '15987654321', '123456', 
'2016-05-24', '2016-05-24 00:00:00'),
('Cliclano de Tal', '123.456.789-00', '1989-01-01', 'Rua da Web, 123', 
'Internet', '12345678', 'Teste', 'Teste', '15 12345678', '15987654321', '123456', 
'2016-05-24', '2016-05-24 00:00:00');

CREATE TABLE product(
  id int PRIMARY KEY AUTO_INCREMENT NOT NULL,
  created datetime NOT NULL,
  modified datetime NOT NULL,
  email varchar(100) NOT NULL,
  photo varchar(20) NOT NULL,
  gift varchar(20) NOT NULL,
  preco varchar(100) NOT NULL
);

INSERT INTO `product` (`created`, `modified`, `email`, `photo`, `gift`, `preco` ) 
VALUES ('2022-09-19', '2022-09-19', 'rayssamariamastromarosa@gmail.com', 'netflix.jpg', 'Netflix', '17'),
('2022-09-19', '2022-09-19', 'estefanne.vg@outlook.com', 'spotify.jpg', 'Spotify', '300'),
('2022-09-20', '2022-09-20', 'isabellifogca8@gmail.com', 'disney.jpg', 'Disney Plus', '28'),
('2022-09-20', '2022-09-20', 'analaurafonsecasantos@gmail.com', 'amazon.jpg', 'Amazon', '50'),
('2022-09-20', '2022-09-20', 'victoriasilva47@gmail.com', 'ifood.jpg', 'Ifood', '30');

CREATE TABLE usuario(
  id int PRIMARY KEY AUTO_INCREMENT NOT NULL,
  nome varchar(50) NOT NULL,
  user varchar(30) NOT NULL,
  password varchar(100) NOT NULL,
  foto varchar (50) NULL
);

INSERT INTO `usuario`(`nome`,`user`,`password`,`foto`)
VALUES ('Zé Lele','zelele','$2a$08$Cf1f11ePArKlBJomM0F6a.L35bB6XN1Ba8KF95ewWqgGPMpAG2uF6','shaw.jpg'),
('Mary Zica','mazi','$2a$08$Cf1f11ePArKlBJomM0F6a.L35bB6XN1Ba8KF95ewWqgGPMpAG2uF6','ariana.jpg'),
('Fugiru Nakombi','fugina','$2a$08$Cf1f11ePArKlBJomM0F6a.flYQsX0UQjWb3tHbaPUkGcFlcGePIAq','jao.jpg');