
CREATE TABLE `A001_TABEVENTO` (
  `CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `NOME_EVENTO` varchar(50) NOT NULL,
  `DESC_EVENTO` varchar(500) NOT NULL,
  `DESC_DATA` varchar(50) NOT NULL,
  `DESC_HORA` varchar(50) NOT NULL,
  `DESC_LOCAL` varchar(70) NOT NULL,
  `ATIVO` int(11) NOT NULL,
  PRIMARY KEY (`CODIGO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `A002_TABTICKET` (
  `CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `REL_EVENTO` int(11) NOT NULL,
  `REL_PAGAMENTO` int(11) NOT NULL,
  `NOME` varchar(100) NOT NULL,
  `CPF` varchar(30),
  `FONE` varchar(30),
  `EMAIL` varchar(100),
  `DATAHORA` varchar(30),
  `GEROU_PIX` int(11),
  `PAGOU` int(11),
  PRIMARY KEY (`CODIGO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `P001_TABPAGAMENTO` (
  `CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `REL_TICKET` int(11),
  `STATUS_PAG` int(11) NOT NULL COMMENT '1:Pendente-2:Aprovado-3Estornado-4Cancelado',
  `STATUS_MP` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `ID_PAG_MP` int(11) NOT NULL,
  `VALOR_PAG` double NOT NULL,
  `CREATE_PAG_DT` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `CODIGO_PIX` varchar(8000) COLLATE latin1_general_ci NOT NULL,
  `CODIGO_B64` varchar(8000) COLLATE latin1_general_ci NOT NULL,
  `ATIVOP` varchar(1) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`CODIGO`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
