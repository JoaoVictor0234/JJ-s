-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25/11/2024 às 16:22
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `jjs`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cad_pessoas`
--

CREATE TABLE `cad_pessoas` (
  `id` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `senha` varchar(25) NOT NULL,
  `telefone` int(11) NOT NULL,
  `cpf` int(11) NOT NULL,
  `endereco` varchar(40) NOT NULL,
  `cep` int(11) NOT NULL,
  `dtnasc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `cad_pessoas`
--

INSERT INTO `cad_pessoas` (`id`, `nome`, `email`, `senha`, `telefone`, `cpf`, `endereco`, `cep`, `dtnasc`) VALUES
(1, 'João Pedro Ferreira Faustino', 'testealvo@gmail.com', 'testando123', 2147483647, 2147483647, 'Av Mario Testaria', 234768, '2008-01-21'),
(4, 'Lucas Souza Vieira', 'veirinha155@gmail.com', 'luquinhas155', 2147483647, 2147483647, 'Av Casa do Caralho 223', 123756, '2003-03-07'),
(6, 'jubilas  da silva pinto', 'matheusjose20078@gmail.com', 'jubilamanobraas', 43, 2147483647, 'a rua dos caralhos ', 987789, '2000-12-21'),
(12, 'Samir ', 'samirzindumal@gmail.com', 'samirzindu7', 43, 2147483647, 'rua do samir', 12334565, '2007-10-05'),
(18, 'Leonardo', 'leo@gmail.com', 'lekeko', 43, 2147483647, 'rua do leo', 56754321, '2008-12-07'),
(56, 'nata', 'nata@gmail.com', 'nata', 1212341234, 2147483647, 'rua nata', 12012240, '2001-02-20'),
(57, 'Gusttavo Lima e Você', 'gustta@gmail.com', 'gustta', 2147483647, 2147483647, 'Av kakakakaka', 12345687, '1999-10-21'),
(58, 'Leticia Feitoza', 'let@gmail.com', 'letlet', 2147483647, 2147483647, 'Av letlet 423', 12346587, '2008-12-25'),
(59, 'Matheus', 'flamengo@gmail.com', 'flasco', 2147483647, 2147483647, 'Av kakakakaka', 12346587, '2009-09-21'),
(61, 'João Victor', 'joao@gmail.com', '123', 2147483647, 2147483647, 'a rua longe', 2147483647, '1545-07-18');

-- --------------------------------------------------------

--
-- Estrutura para tabela `compras`
--

CREATE TABLE `compras` (
  `id_compra` int(11) NOT NULL,
  `nome_cliente` varchar(50) NOT NULL,
  `valor_total` decimal(10,2) NOT NULL,
  `data_compra` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `compras`
--

INSERT INTO `compras` (`id_compra`, `nome_cliente`, `valor_total`, `data_compra`) VALUES
(465, 'João Victor', 199.00, '2024-11-25 15:13:30'),
(469, 'João Victor', 796.00, '2024-11-25 15:22:05');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `categoria` varchar(700) NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `quantidade` varchar(255) NOT NULL,
  `descricao` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `categoria`, `valor`, `imagem`, `quantidade`, `descricao`) VALUES
(1, 'Cinturão growth', 'equipamentos', 199.00, 'Cinturão Growth.png', '1 Unidade', 'Os Cinturões da Growth são um auxiliador na hora de agachar, estabilizando sua coluna e diminuindo a chance de se lesionar.'),
(22, 'Camiseta Dry Fit 2.0 Dark Lab', 'roupas', 139.00, 'Camiseta Dry Fit 2.0 Dark Lab.png', '1 Unidade', 'A Camiseta Dry Fit 2.0 Dark Lab chegou, fabricada com o tecido Dry-Fit de mais alta qualidade para se ajustar perfeitamente ao corpo, garantindo conforto e mobilidade em todos os momentos, ideal para práticas esportivas.\r\n\r\nSeu tecido de microfibras de poliéster proporciona altíssima dispersão do calor do corpo, aumentando a evaporação de suor, além de pesar aproximadamente 30% a menos que os tecidos convencionais.'),
(23, 'Pré Treino All Day', 'suplementos', 129.00, 'Pré Treino All Day.png', '300g', 'O pré-treino All Day é seu mais novo aliado para realizar treinos cada vez mais intensos!\r\nSua formulação é concentrada e é fonte dos aminoácidos beta-alanina, taurina, cafeína, arginina e tirosina, que atuam em sinergia para auxiliar ainda mais seu desempenho.\r\nPrepare-se para treinar com muito mais intensidade, concentração e resistência!'),
(24, 'Polivitamínico Growth', 'vitaminas', 39.00, 'Polivitamínico Growth.png', '120 Cápsulas', 'O polivitamínico é um suplemento alimentar que serve para suprir as necessidades de vitaminas e minerais do organismo, ajudando a melhorar a resistência do corpo contra doenças, auxiliar na absorção de proteínas e fortalecer o sistema imunológico.'),
(25, 'Galão de Água 1,8L Soldiers', 'equipamentos', 63.00, 'Galão de Água Soldiers.png', '1 Unidade', 'Com o galão de 1,8L da Soldiers, beber água nunca vai ser um problema, seu rim te agradece.'),
(26, 'Creatina Dark Lab', 'suplementos', 104.00, 'Creatina Dark Lab.png', '500g', 'A Creatina Pura Dark Lab é a escolha ideal para atletas e praticantes de musculação que desejam melhorar sua força, resistência e explosão muscular. Com 500g de creatina de alta pureza (98,1%), ela é rapidamente absorvida pelo corpo, oferecendo benefícios para atividades de alta intensidade. Produzida com a mais alta qualidade, garante resultados eficientes e é considerada uma das melhores opções no mercado brasileiro.'),
(27, 'Cropped Feminino Mith Nation', 'roupas', 189.00, 'Cropped Feminino Mith Nation.png', '1 Unidade', 'O Cropped Esportivo Feminino da Mith, uma peça que combina estilo e funcionalidade, perfeita para quem busca conforto sem abrir mão da estética.'),
(28, 'Multivitamínico Max Titanium', 'vitaminas', 69.00, 'Multivitaminico Max Titanium.png', '90 Cápsulas', 'Apesar de nos alimentar bem sempre falta algum nutriente indispensável, mas com o Multivitamínico da Max Titanium nunca irá ocorrer essa falta proporcionando uma vida mais ativa e com muito mais disposição.'),
(29, 'Shorts de Compressão Berserk Beclot', 'roupas', 109.00, 'Shorts de Compressão Berserk Beclot.png', '1 Unidade', 'Com shorts de compressão da Beclot com duas camadas, além de estiloso e durável ele irá ajudar a diminuir a vibração nos músculos durante a prática esportiva melhorando o fluxo sanguíneo de suas pernas.'),
(30, 'Faixa de joelho Growth', 'equipamentos', 149.00, 'Faixa de joelho Growth.png', '2 Unidades', 'As faixas de joelho da Growth iram auxiliar a estabilizar seus joelhos na hora do agachamento e outros exercícios que necessitam da flexão de joelho.'),
(31, 'Whey Protein Concentrado Soldiers', 'suplementos', 119.00, 'Whey Protein Concentrado Soldiers.png', '1Kg', 'O Whey Protein é um suplemento alimentar derivado do soro do leite, que é uma fonte rica em proteínas de alta qualidade. É amplamente utilizado por atletas e entusiastas de fitness para auxiliar na recuperação muscular, ganho de massa muscular e suporte nutricional.'),
(32, 'Vitamina D Ultra Growth', 'vitaminas', 39.00, 'Vitamina D Growth.png', '120 Cápsulas', 'Se você sofre de fadiga ou fraqueza muscular a Vitamina D Ultra da Growth irá te ajudar com esses problemas. Com 1000% de diferença entre a Vitamina D convencional e a Ultra. A escolha da Vitamina D Ultra são para casos de atividade física muito intensa e pessoas que não conseguem tomar 20 minutos d'),
(33, 'Whey Pro Max Titanium', 'suplementos', 109.00, 'Whey Pro Max Titanium.png', '1Kg', 'Ideal para qualquer dieta fitness e programas de treinamento, a proteína do soro do leite, em inglês Whey Protein, é a proteína em pó mais popular disponível utilizada em suplementação alimentar e esportiva.'),
(34, 'Creatina Max Titanium', 'suplementos', 139.00, 'Creatina Max Titanium.png', '300g', 'A creatina auxilia no aumento do desempenho físico durante exercícios repetidos de curta duração e alta intensidade.\r\nFormada a partir da associação de três aminoácidos de alto valor biológico (arginina, glicina e metionina), a creatina está presente naturalmente em nosso organismo, sendo que cerca de 95% do seu conteúdo é armazenado no músculo esquelético.\r\nRecomenda-se a ingestão desta substância juntamente com um carboidrato de alto índice glicêmico para facilitar o seu transporte para dentro das células musculares.'),
(35, 'Pré Treino Horus', 'suplementos', 179.00, 'Pré Treino Horus.png', '300g', 'HÓRUS é um produto para ser consumido no pré treino.\r\nPara quem se exercita com intensidade, a fadiga é um dos principais fatores que influenciam o rendimento, por isso desenvolvemos o HÓRUS: com formulação altamente tecnológica e ingredientes de altíssima qualidade, para você ter um treino com muito mais eficiência'),
(36, '100% Whey Dark Lab', 'suplementos', 119.00, 'Iso Whey Zero Low Carb.png', '900g', 'A 100% Whey Protein é o suplemento alimentar perfeito para quem busca um corpo saudável e definido! Tendo como principal componente a Proteína concentrada do soro de leite, são 21g de proteína por dose, 8,6g de aminoácidos essenciais e 4,2g de BCAA. O Whey Protein Concentrado é uma forma de Whey Protein que passa por um processo de filtragem para concentrar suas proteínas e remover carboidratos e gorduras. Ele é amplamente utilizado por atletas e praticantes de atividades físicas para ajudar no ganho de massa muscular, recuperação e fortalecimento do sistema imunológico. Com proteína concentrada de alta qualidade, nossa Whey Protein é facilmente absorvida pelo organismo, fornecendo os nutrie'),
(37, 'Pré Treino Venom', 'suplementos', 129.00, 'Pré Treino Venom.png', '300g', 'Venom é um pré-treino feito para maximizar seu treino e alcançar seus objetivos, contendo cafeína, taurina, beta-alanina e outros ingredientes que ajudam a aumentar o fluxo sanguíneo, melhorando a resistência muscular e reduzindo a fadiga. Descubra a energia explosiva do melhor e mais forte pré-treino do mercado, com uma combinação exclusiva de ingredientes, Venom proporciona uma explosão de energia e foco, melhorando a força, resistência e a intensidade dos treinos. Com Venom, você terá o suporte necessário para superar seus limites e alcançar os melhores resultados. Experimente o poder desse pré-treino e supere seus objetivos.'),
(38, 'Whey 100% Integralmedica', 'suplementos', 179.00, 'Whey Integralmedica.png', '900g', 'O Whey 100% Pure é o suplemento ideal e essencial para quem busca ganho de massa magra e recuperação muscular. Composto pela proteína concentrada do soro de leite, são 21 g de proteína por dose, 9,7 g de aminoácidos essenciais e 4,6 g de BCAA.'),
(39, 'Creatina Integralmedica', 'suplementos', 119.00, 'Creatina Integralmedica.png', '300g', 'Ganhe volume e massa muscular, aumente sua força e melhore seu desempenho e resistência durante os treinos suplementando com a Creatina Hardcore Integralmédica. Produto 100% puro, de excelente qualidade.\r\nA creatina é um composto que pode ser produzido pelo nosso organismo, através do consumo de alimentos de origem animal como carnes e peixes mas também pode se suplementada na forma de creatina mono-hidratada. Tem importante papel no fortalecimento dos ossos, melhora o metabolismo e diminui a fadiga pós treino.'),
(40, 'Pré Treino Huger Integralmedica', 'suplementos', 129.00, 'Pré Treino Huger Integralmedica.png', '320g', 'Huger é o suplemento pré-treino da Integralmédica que reúne tudo o que você precisa para alcançar maiores conquistas.\r\nInovador e ultra concentrado, o Huger te faz alcançar um maior nível de foco e desempenho nos treinos. Sua formulação é completa e conta com ingredientes que se potencializam.'),
(41, 'Creatina Soldiers', 'suplementos', 159.00, 'Creatina Soldiers.png', '500g', 'A creatina é um composto naturalmente encontrado no corpo humano e também pode ser obtida através de fontes alimentares, como carne e peixe. Ela desempenha um papel fundamental na produção de energia nas células musculares, sendo especialmente benéfica para atividades.'),
(42, 'Coqueteleira Pro 700ml Soldiers', 'equipamentos', 74.00, 'Coqueteleira Pro Soldiers.png', '1 Unidade', 'Com a coqueteleira Pro da Soldiers a praticidade é sua melhor amiga, com 700ml de capacidade podendo colocar o que você quiser para beber.'),
(43, 'Luva Growth', 'equipamentos', 74.00, 'Luva Growth.png', '2 Unidades', 'As luvas de treino da Growth iram proteger e auxiliar suas mãos na hora de seus treinos.'),
(44, 'Multi Pack', 'equipamentos', 89.00, 'Multi Pack.png', '4 Unidades', 'Na correria do dia a dia é muito difícil ficar carregando um pacote de whey entre outros suplementos, mas com organizador Multi Pack da Growth tudo fica mais fácil, podendo levar até 4 tipos de suplementos com praticidade.'),
(45, 'Sapatilha Fiber Training', 'equipamentos', 189.00, 'SAPATILHA FIBER TRAINING.PNG', '2 Unidades', 'Sapatilha Fiber Training proporciona uma experiência fenomenal de caminhada, protegendo e auxiliando nos mais diversos terrenos, além de ajudar seus pés na construção de força, saúde e consciência corporal, com mais proteção.'),
(46, 'Strap Growth', 'equipamentos', 44.00, 'Strap Growth.png', '2 Unidades', 'Strap Growth irá auxiliar em seus treinos, poupando o esforço de seus antebraços, fazendo com que sua progressão de carga seja mais rápida.'),
(47, 'Octo Maxgrip', 'equipamentos', 99.00, 'Octo Maxgrip.png', '2 Unidades', 'Octo Max é um produto para auxiliar nos seus treino de academia, fazendo com que poupe o trabalho de seus antebraços com isso você não soltando nos seus exercícios, assim conseguindo progredir mais rapidamente na academia'),
(48, 'Munhequeira Growth', 'equipamentos', 69.00, 'Munhequeira Growth.png', '2 Unidades', 'A munhequeira é um estabilizador para seus punhos, diminuindo as chances de acontecer algum tipo de lesão.'),
(49, 'Coqueteleira 600ml Growth', 'equipamentos', 24.00, 'Coqueteleira 600ml Growth.png', '1 Unidade', 'A coqueteleira de 3 partes da Growth é um grande auxiliador na vida corrida , com 3 compartimentos que podem ser usado da forma que quiser, contendo também uma mola para facilitar na homogeneização dos produtos.'),
(50, 'Garrafa de água 2L Soldiers', 'equipamentos', 139.00, 'Garrafa de água Squeeze 2L Soldiers.png', '1 Unidade', 'Com a garrafa de água Squeeze sua vida facilitará sua vida, tendo materiais de qualidade mantendo sua água fresca por bastante tempo.'),
(51, 'Vitamina C Growth', 'vitaminas', 29.00, 'Vitamina C.png', '120 Cápsulas', 'Quem nunca ficou doente? Geralmente quando adquirimos alguma gripe o erro vem de um sistema imunológico fraco, mas com a Vitamina C da Growth Suplements seu sistema imunológico irá ficar grande e forte, como você.'),
(52, 'Peptídeos de Colágeno', 'vitaminas', 77.00, 'Peptídeos de Colágeno.png', '120 Cápsulas', 'Se você sofre de queda de cabelo ou unhas fracas o Peptídeos de Colágeno é seu aliado fortalecendo e ajudando com crescimento de suas unhas.'),
(53, 'Óleo de peixe Growth', 'vitaminas', 39.00, 'Óleo de Peixe Growth.png', '75 Cápsulas', 'Se infelizmente sua família tem histórico de doenças cardiovasculares, o Óleo de peixe vai ser seu grande aliado, pois o mesmo auxilia no sistema circulatório e previne de doenças cardiovasculares.'),
(54, 'Vitamina B12 Growth', 'vitaminas', 29.00, 'Vitamina B12 Growth.png', '120 Cápsulas', 'A Vitamina B12 é muito importante para o nosso organismo, pois ela está envolvida na formação das nossas células sanguíneas e também atua diretamente sobre o sistema nervoso, ajudando na formação dos neurônios.'),
(55, 'Vitamina E Ultra Growth', 'vitaminas', 69.00, 'Vitamina E Ultra Growth.png', '120 Cápsulas', 'A Vitamina E é um micronutriente fundamental para a proteção das células e manutenção da saúde física e mental.'),
(56, 'Zma Ultra Growth', 'vitaminas', 84.00, 'Zma Ultra Growth.png', '120 Cápsulas', 'O ZMA é um suplemento que tem em sua fórmula a combinação de zinco, magnésio, cromo e vitamina B6 e busca melhorar o metabolismo e minimizar a fadiga, produzindo energia para os músculos, resultando na diminuição da gordura corporal e no aumento dos tecidos musculares.'),
(57, 'Coenzima Q10 Growth', 'vitaminas', 49.00, 'Coenzima Q10 Growth.png', '60 Cápsulas', 'A Coenzima Q10 é um ergogênico nutricional com potencial significativo para a melhora do desempenho físico, ajudando na recuperação de lesões, adaptações de treinamentos, reabilitações e neuroproteção do cérebro.'),
(58, 'Vitamina D3 Max Titanium', 'vitaminas', 69.00, 'Vitamina D3 Max Titanium.png', '60 Cápsulas', 'A Vitamina D3 da Max Titanium possui alto teor de Vitamina D por cápsula (2.000 UI), que auxilia no funcionamento do sistema imune e muscular e na absorção de cálcio e fósforo.'),
(59, 'Óleo de Cártamo Max Titanium', 'vitaminas', 89.00, 'Óleo de Cártamo Max Titanium.png', '120 Cápsulas', 'O óleo de cártamo tem uma extensa lista de benefícios que vão do aumento da saciedade à prevenção de doenças.'),
(60, 'Shorts Preto Ad Growth', 'roupas', 119.00, 'Shorts Preto Ad Growth.png', '1 Unidade', 'Shorts Ad da Growth além de estar na moda é muito confortável para não prejudicar nas suas atividades diárias.'),
(61, 'Shorts Tactel Mith', 'roupas', 209.00, 'Shorts Tactel Mith.png', '1 Unidade', 'O shorts Tactel da Mith é a escolha certa para quem busca conforto, estilo e versatilidade.'),
(62, 'Oversized Growth', 'roupas', 139.00, 'Oversized Growth.png', '1 Unidade', 'A Oversized da Growth é sua aliada se você busca qualidade, versatilidade e muito conforto.'),
(63, 'Regata Feminina Under Armour', 'roupas', 289.00, 'Regata de Trilha Feminina Under Armour.png', '1 Unidade', 'Com tecido durável e macio, respirável e leve para conforto superior e versatilidade máxima.'),
(64, 'Top Growth Beaut Soul', 'roupas', 129.00, 'Top Growth.png', '1 Unidade', 'Conforto, liberdade e movimento são nosso foco como marca e o top Beaut Soul da Growth aborda todos esses temas.'),
(65, 'Camiseta Performance Growth', 'roupas', 139.00, 'Camiseta Performance Growth.png', '1 Unidade', 'Seja na academia ou em outras atividades do seu dia, as roupas de treino da Growth oferecem o equilíbrio perfeito entre estilo e conforto. E a camiseta Performance respeita essas qualidades.'),
(66, 'Top Puma Nadador Feminino', 'roupas', 69.00, 'Top Puma Nadador Feminino.png', '1 Unidade', 'O Top Puma Nadador Sem Costura, é ideal para usar por baixo de regatas para treinos e dia a dia. Confeccionado em tecido super leve e macio, o modelo traz acabamento canelado com estampas da marca na barra, dando maior segurança.'),
(67, 'Regata Comam Frutas', 'roupas', 129.00, 'Regata Comam Frutas.png', '1 Unidade', 'A regata conta com as seguintes características: \r\n* Modelagem Ampla alongada\r\n* Tecido de Algodão com 100% de Algodão\r\n* Barra Fraldada\r\n* Barra da manga sem costura\r\n* Estampa Silk frente e costas'),
(68, 'Regata Cut Off Mith Nation', 'roupas', 109.00, 'Regata Cut Off Mith Nation.png', '1 Unidade', 'A Linha Minimalista, é a escolha certa para quem busca conforto e estilo, seguindo o conceito de “menos é mais”, seguindo tendencias atemporais e sofisticadas, as pecas da linha Mith Nation, podem sem usadas em qualquer Ocasião, tanto para treinos quanto para o dia-a-dia.');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cad_pessoas`
--
ALTER TABLE `cad_pessoas`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id_compra`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cad_pessoas`
--
ALTER TABLE `cad_pessoas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT de tabela `compras`
--
ALTER TABLE `compras`
  MODIFY `id_compra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=470;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
