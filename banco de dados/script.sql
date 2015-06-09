create table usuario(
    cpf varchar(15) not null primary key,
    rg varchar(15) not null unique,
    nome varchar(100) not null,
    email varchar(100) not null unique,
    senha varchar(32) not null,
    permissao int default 0
);

create table categoria(
	codigo int auto_increment primary key,
	categoria varchar(50) not null unique,
	valorHora double not null   
);

create table cliente(
	cpf varchar(15) not null primary key,
    rg varchar(15) not null unique,
    nome varchar(100),
    dataNascimento date,
    status bool default true
);

create table veiculo(
    placa varchar(10) not null primary key,
    cor varchar(10),
    categoria int,
    foreign key(categoria) references categoria(codigo)
);

create table gerenciador(
    veiculo varchar(10) not null,
    cliente varchar(15) not null,
    horaEntrada datetime default now(),
    status bool default true,
    valor double default 0,
    tipodecobranca int not null,
    foreign key(veiculo) references veiculo(placa),
    foreign key(cliente) references cliente(cpf),
    foreign key(tipodecobranca) references tipodecobranca(codigo)
);

create table caixa(
    data datetime default now(),
    saldoInicial double default 0.0,
    saldoFinal double,
    status bool default true
);

CREATE TABLE tipodecobranca(
	codigo int auto_increment primary key,
    	tipo varchar(20) not null
);


select g.cliente, g.veiculo, g.horaEntrada, c.categoria, c.valorHora, EXTRACT(HOUR FROM TIMEDIFF(now(), g.horaEntrada)) as horas, EXTRACT(MINUTE FROM TIMEDIFF(now(), g.horaEntrada)) as minuto, DATEDIFF(now() , g.horaEntrada) as dia from gerenciador g join veiculo v on g.veiculo = v.placa join categoria c on v.categoria = c.codigo;

---- Relatorio diario view -----

create view relatorioDiario as	
    select veiculo, cliente, date(horaEntrada) as data, time(horaEntrada) as hora, valor
    	from gerenciador where date(horaEntrada) = date(now()) and status = false;

-- fim relatorio diario --

-- Relatório caixa Diario
	create view relatorioCaixaDiario as
	select date(data) as data, time(data) as hora, saldoInicial, saldoFinal, date(now()) as dataFinal, time(now()) as horaFinal from caixa 		where date(data) = date(now());
-- Fim relatorio caixa diário


