-- Geração de Modelo físico
-- Sql ANSI 2003 - brModelo.



CREATE TABLE cad_usuario (
id_usu int NOT NULL AUTO_INCREMENT,
nome_usu varchar(30),
email_usu varchar(60),
senha_usu varchar(15),
PRIMARY KEY (id_usu)
);

CREATE TABLE cad_agendamento (
id_agendamento int(10) PRIMARY KEY,
nome_func varchar(15),
nome_servico int(10),
data_hora_agend datetime,
valor_agend double,
tip_pag int(10),
nome_usu varchar(30),
id_usu int(10),
FOREIGN KEY(id_usu) REFERENCES cad_usuario (id_usu)
)

CREATE TABLE cad_servico (
id_servico int(10) PRIMARY KEY,
nome_serv varchar(20),
valor_serv double(10),
descr_serv vachar(100)
);

CREATE TABLE cad_funcionario (
id_funcionario int NOT NULL AUTO_INCREMENT,
nome_fun varchar(30),
email_fun varchar(60),
num_end_fun varchar(10),
bairro_fun varchar(10),
cidade_fun varchar(20),
CEP_end_fun int,
senha_fun varchar(15)
PRIMARY KEY (id_funcionario)
);

CREATE TABLE cad_pagamento (
id_pagamento int(10) PRIMARY KEY,
forma_pag vachar(20)
)

CREATE TABLE tel_usu (
tel_usu varchar(14)
)

CREATE TABLE agend_servi (
id_agendamento int(10),
id_servico int(10),
FOREIGN KEY(id_agendamento) REFERENCES cad_agendamento (id_agendamento),
FOREIGN KEY(id_servico) REFERENCES cad_servico (id_servico)
)

CREATE TABLE fun_agend (
id_agendamento int(10),
id_funcionario int(10),
FOREIGN KEY(id_agendamento) REFERENCES cad_agendamento (id_agendamento),
FOREIGN KEY(id_funcionario) REFERENCES cad_funcionario (id_funcionario)
)

CREATE TABLE pag_agend (
id_pagamento int(10),
id_agendamento int(10),
FOREIGN KEY(id_pagamento) REFERENCES cad_pagamento (id_pagamento),
FOREIGN KEY(id_agendamento) REFERENCES cad_agendamento (id_agendamento)
)

