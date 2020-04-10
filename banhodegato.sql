-- --------------------------------------------------------
-- Versão do servidor:           5.6.47-log - MySQL Community Server (GPL)
-- OS do Servidor:               Linux
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para atlaswar_banhodegato
CREATE DATABASE IF NOT EXISTS `banhodegato` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `banhodegato`;

-- Copiando estrutura para tabela atlaswar_banhodegato.kits
CREATE TABLE IF NOT EXISTS `kits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela atlaswar_banhodegato.kits: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `kits` DISABLE KEYS */;
INSERT INTO `kits` (`id`, `descricao`) VALUES
	(1, '<div>Kits direcionados para homens, mulheres e travestis.</div><div><br></div><div>Todos esses kits de banho contém produtos básicos de higiene como: 1 sabonete, 1 shampoo, 1 condicionador, 1 creme dental, 1 aparelho de barbear e 2 preservativos. No kit para mulheres e travestis adicionamos absorventes e produtos de beleza.</div><div><br></div><div>Além de reciclarmos esses produtos, reaproveitamos os tecidos de descarte das fábricas e nossos voluntários costuram as embalagens de tecidos servindo como uma pequena toalha. Os produtos podem estar sendo deixados em alguns dos pontos de coleta, ou serem enviados pelos correios para o nosso endereço de recebimento que fica em SP.</div>');
/*!40000 ALTER TABLE `kits` ENABLE KEYS */;

-- Copiando estrutura para tabela atlaswar_banhodegato.mochila
CREATE TABLE IF NOT EXISTS `mochila` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `texto_1` text NOT NULL,
  `texto_2` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela atlaswar_banhodegato.mochila: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `mochila` DISABLE KEYS */;
INSERT INTO `mochila` (`id`, `texto_1`, `texto_2`) VALUES
	(1, 'A Mochila amiga é uma ação voltada para crianças e adolescentes que não tem condições de comprar material voltado para atividades artísticas, e recebem a mochila recheada de materiais. As matérias primas são as mesmas tendo um valor final já definido.', '<div>1 caixa de lápis de cor da Faber Castell de 24 cores,</div><div>1 pacote de sulfite com 500 folhas, 1 caixa de canetinha com</div><div>12 cores da Faber Castell, 1 caixa de massinhas,</div><div>1 caixa de giz de cera, 1 boneco articulado, 1 conjunto de pincéis,</div><div>1 conjunto de molduras para pintura, 1 caixa de apontador, 1 caixa de borrachas,</div><div>1 calculadora, 1 Livro sobre historia da arte, 1 livro sobre a cultura do Graffiti.</div>');
/*!40000 ALTER TABLE `mochila` ENABLE KEYS */;

-- Copiando estrutura para tabela atlaswar_banhodegato.postos_coleta
CREATE TABLE IF NOT EXISTS `postos_coleta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cidade` varchar(250) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `nome_local` varchar(250) NOT NULL,
  `endereco` varchar(250) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela atlaswar_banhodegato.postos_coleta: ~16 rows (aproximadamente)
/*!40000 ALTER TABLE `postos_coleta` DISABLE KEYS */;
INSERT INTO `postos_coleta` (`id`, `cidade`, `uf`, `nome_local`, `endereco`, `status`) VALUES
	(1, 'Campinas', 'SP', '', 'Rua Luiz Oliveira, 327 apartamento 71 - Parque das Flores', 0),
	(2, 'Niterói', 'RJ', '', 'Rua Joaquim Távora, 153 Apartamento 504 Icaraí', 0),
	(3, 'Santos', 'SP', '', 'Avenida Dino Bueno, 106 Apartamento 91 Ponta da Praia', 0),
	(4, 'São Bernardo do Campo', 'SP', '', 'Av. Dom Jaime, de Barros Camara, 357 Apartamento 357 Torre 3', 0),
	(5, 'São José do Rio Preto', 'SP', 'O Papa Informática', 'Av. Miguel Damha, 1220 Jardim Vista Alegre.', 0),
	(6, 'São José do Rio Preto', 'SP', 'Fonte da Vida Produtos', 'Rua Joaquim Pinheiro Castro, 1320 (Esquina com a Fe)', 0),
	(8, 'São José do Rio Preto', 'SP', 'Closet Dy Rodrigues', 'Rua Rubino Junior, 1647 - Pq. Industrial', 0),
	(9, 'São José do Rio Preto', 'SP', 'Ótica São Paulo', 'Rua Voluntários de São Paulo, 3056 - Centro', 0),
	(10, 'São José do Rio Preto', 'SP', 'CrossFit 2 Hold', 'Rua Bernardino de campos, 4282 - Redentora', 0),
	(11, 'São Paulo', 'SP', '', 'Av. Rouxinol, 837 Apartamento 165B Moema', 0),
	(12, 'São Paulo', 'SP', '', 'Rua Estela, 22 Apartamento 1107, Paraíso', 0),
	(13, 'São Paulo', 'SP', '', 'Rua Cõnego, Eugênio Leite, 594 apartamento 191, Pinheiros', 0),
	(14, 'São Paulo', 'SP', '', 'Rua Rio Grande , 477 Apartamento 202, Vila Mariana', 0),
	(15, 'Juiz de Fora', 'MG', 'Grama', 'Av. Juiz de Fora, 2005', 0),
	(16, 'Porto Alegre', 'RS', 'Fellas Bar.Bearia', 'Rua Luzitana, 109, São João', 0);
/*!40000 ALTER TABLE `postos_coleta` ENABLE KEYS */;

-- Copiando estrutura para tabela atlaswar_banhodegato.sobre_nos
CREATE TABLE IF NOT EXISTS `sobre_nos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imagem` varchar(250) NOT NULL,
  `texto` varchar(250) NOT NULL,
  `sobre_nos` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COMMENT='Tabela de dados sobre nos';

-- Copiando dados para a tabela atlaswar_banhodegato.sobre_nos: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `sobre_nos` DISABLE KEYS */;
INSERT INTO `sobre_nos` (`id`, `imagem`, `texto`, `sobre_nos`) VALUES
	(1, 'sobreNosb8f564b7cbfea913137ae0dc04a14a62.jpg', '“Acreditamos muito que um banho pode fazer a diferença na vida de uma pessoa” Lenon Volpini fundador Projeto Banho de Gato.', '<p>Focado na população em situação de rua o projeto Banho de Gato vem desde 2016 fazendo um trabalho imenso com as pessoas que vivem em situação de vulnerabilidade. Começamos com as entregas no bairro da Luz e desde então não paramos a expansão. Hoje com pontos de coletas espalhados por São Paulo e alguns estados do Brasil como Belo horizonte, Rio grande do Sul, Rio de janeiro. Coletamos produtos de banho entregues em hotel, motel, avião, separamos esses produtos e montamos em forma de kit de banho.</p><p><br></p><p>Acreditamos muito que um banho pode fazer a diferença na vida de uma pessoa, que às vezes esta há dias sem um banho!!</p><p><br></p><p>A força no trabalho que nos une e nos embeleza.</p><p><br></p>');
/*!40000 ALTER TABLE `sobre_nos` ENABLE KEYS */;

-- Copiando estrutura para tabela atlaswar_banhodegato.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(105) NOT NULL,
  `login` varchar(105) NOT NULL,
  `acesso` varchar(105) NOT NULL,
  `senha` varchar(105) NOT NULL,
  `status` int(1) NOT NULL,
  `ultimo_login` datetime NOT NULL,
  `email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela atlaswar_banhodegato.usuarios: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id`, `nome`, `login`, `acesso`, `senha`, `status`, `ultimo_login`, `email`) VALUES
	(1, 'Administrador', 'admin', 'MASTER', 'COLOQUE_SENHA_MD5', 0, '0000-00-00 00:00:00', '');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

-- Copiando estrutura para tabela atlaswar_banhodegato.voluntarios
CREATE TABLE IF NOT EXISTS `voluntarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(250) NOT NULL,
  `descricao` text NOT NULL,
  `imagem` varchar(250) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela atlaswar_banhodegato.voluntarios: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `voluntarios` DISABLE KEYS */;
INSERT INTO `voluntarios` (`id`, `nome`, `descricao`, `imagem`, `status`) VALUES
	(1, 'Mariana Lacerda', 'Conheci o Projeto Banho de Gato quando me tornei booker do Lenon. Fazer trabalho voluntário sempre foi um dos objetivos da minha vida, e hoje me sinto muito feliz em participar de um grupo que ajuda tanta gente e vem crescendo cada dia mais.', 'Mariana-Lacerda.jpeg', 0),
	(2, 'Mariana Alves', 'Desde que o Lenon comentou a respeito do projeto há alguns anos, eu tive a certeza que queria contribuir de alguma maneira. A gente fica longe do voluntariado, ainda mais das pessoas das ruas, por serem marginalizadas, são esquecidas. Contribuir um pouquinho para ajudá-las a ter sua dignidade, é muito humano! Convido a todos a conhecerem e participarem da causa.', 'Mariana-Alves.jpeg', 0),
	(3, 'Marcela Alves', 'Soube do projeto por amigos em comum com o Lenon e quis ajudar sendo um ponto de coleta na minha cidade, que ainda não fazia parte do projeto. Contribuir para uma sociedade mais justa e levar o mínimo de dignidade e amor para uma parte da população que infelizmente é invisível para muitos, nos torna mais humanos. Através de pequenas e grandiosas atitudes, podemos ser agentes transformadores da nossa própria realidade.', 'Marcela-Alves.jpeg', 0),
	(4, 'Giovanna Furtado', 'O Projeto Banho de Gato tem o objetivo de mudar a vida de vários moradores de rua, fazendo com que essas pessoas tenham uma vida mais íntegra e humana. É muito gratificante saber que existem pessoas que se preocupam com esse tipo de ação e que estão dispostas a ajudar, faz a gente acreditar que o mundo ainda pode ser um lugar bonito pra todos nós, e no final de tudo, saber o olhar pra dor do outro e enxergar também um ser humano é o que faz valer a pena viver e continuar fazendo parte desse Projeto.', 'Giovana-Furtado.jpeg', 0),
	(5, 'Ana Júlia', 'Quando conheci o projeto percebi que atitudes tão simples e pequenas podem mudar o dia de alguém , pode trazer dignidade à alguém que muitas vezes no nosso dia a dia passamos reto . Sou voluntária do bairro da Vila Mariana e recebo doações em minha casa e entrego ao Lenon que faz a distribuição , o meu trabalho è apenas uma migalha mas sem dúvidas já faço parte da mudança graças à esse projeto.', 'Ana-Julia.jpeg', 0),
	(6, 'Lídia Queiroz', 'O projeto sempre tocou meu coração, pois além da doação de produtos básicos de higiene que são de muitíssima importância para as pessoas em situação de rua, nós doamos um pouquinho de amor, de tempo, e de atenção. Mesmo de longe qualquer um pode contribuir de alguma forma, espalhando cada vez mais esse lindo projeto!', 'Lidia-Queiroz.jpeg', 0),
	(7, 'Daniela Mancuso', 'Acredito que o projeto ajuda a alertar a precariedade e a carência de quem vive nas ruas e o quanto a força do coletivo pode mudar essa triste realidade, mesmo que minimamente. Esses dias entreguei um kit e recebi um poema em troca, me mostrando mais uma vez a beleza do voluntariado.', 'Daniela-Mancuso.jpeg', 0);
/*!40000 ALTER TABLE `voluntarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
