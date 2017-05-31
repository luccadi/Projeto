/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  felipe
 * Created: 12/03/2017
 */
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


CREATE TABLE IF NOT EXISTS `usuario` (
   `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigoFuncional` varchar(30)  NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cpf` varchar(15)  NOT NULL,
  `endereco` varchar(200) NOT NULL,
  `contaBancaria` varchar(50) NOT NULL,
  `tipoUsuario` int(11) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1' COMMENT '1=Active, 0=Inactive',
    PRIMARY KEY (`id`)
);


CREATE TABLE IF NOT EXISTS `categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50),
   PRIMARY KEY (`id`)
);