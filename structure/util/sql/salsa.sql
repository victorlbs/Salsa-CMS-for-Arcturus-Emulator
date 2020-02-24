


CREATE TABLE `salsa_postagens` (
  `id` int(11) NOT NULL,
  `usuario` text NOT NULL,
  `mensagem` text NOT NULL,
  `look` text NOT NULL,
  `data` text NOT NULL,
  `donoperfil` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `salsa_postagens`
--
ALTER TABLE `salsa_postagens`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `salsa_postagens`
--
ALTER TABLE `salsa_postagens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;


CREATE TABLE `cms_news` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL DEFAULT '0',
  `shortstory` varchar(999) NOT NULL,
  `longstory` text NOT NULL,
  `author` varchar(100) NOT NULL DEFAULT 'CompraHabbo',
  `date` int(11) NOT NULL DEFAULT 0,
  `type` varchar(100) NOT NULL DEFAULT '1',
  `roomid` varchar(100) NOT NULL DEFAULT '1',
  `look` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cms_news`
--

INSERT INTO `cms_news` (`id`, `title`, `image`, `shortstory`, `longstory`, `author`, `date`, `type`, `roomid`, `look`) VALUES
(1, 'Teste 1', 'https://images.habbo.com/web_images/habbo-web-articles/lpromo_jan20_gen.png', 'Teste 1453453453', '<b>Apenas um teste</b>\r\n', '2', 1576926786, '1', '1', ''),
(2, 'Teste 2', 'https://images.habbo.com/web_images/habbo-web-articles/lpromo_jan20_gen.png', 'Teste 1', '<p>Apenas um teste</p>\r\n', '2', 1576926786, '1', '1', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cms_news`
--
ALTER TABLE `cms_news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cms_news`
--
ALTER TABLE `cms_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;


CREATE TABLE `salsa_posts` (
  `id` int(11) NOT NULL,
  `postagem` text NOT NULL,
  `usuario` text NOT NULL,
  `data` longtext NOT NULL,
  `staff` varchar(2) NOT NULL,
  `look` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `salsa_posts`
--

INSERT INTO `salsa_posts` (`id`, `postagem`, `usuario`, `data`, `staff`, `look`) VALUES
(5, 'Salsa CMS postagens', 'Salsa', '1579782548', '0', 'hr-115-45.hd-209-2.ch-255-76.lg-275-62.fa-1204.ca-1806-65');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `salsa_posts`
--
ALTER TABLE `salsa_posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `salsa_posts`
--
ALTER TABLE `salsa_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;


CREATE TABLE `salsa_comentarios_noticia` (
  `id` int(11) NOT NULL,
  `usuario` text NOT NULL,
  `data` text NOT NULL,
  `look` text NOT NULL,
  `mensagem` text NOT NULL,
  `noticia` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `salsa_comentarios_noticia`
--
ALTER TABLE `salsa_comentarios_noticia`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `salsa_comentarios_noticia`
--
ALTER TABLE `salsa_comentarios_noticia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;











ALTER TABLE `users` ADD `discord` TEXT NOT NULL AFTER `username`;
ALTER TABLE `users` ADD `capa` TEXT NOT NULL AFTER `discord`;
ALTER TABLE `users` ADD `ip_last` TEXT NOT NULL AFTER `home_room`;
ALTER TABLE `users` ADD `referidos` INT NOT NULL AFTER `capa`;
ALTER TABLE `users` ADD `curtidas` INT NOT NULL AFTER `referidos`;
ALTER TABLE `users` ADD `pontos_promocao` INT NOT NULL AFTER `referidos`;
ALTER TABLE `users` ADD `pontos_evento` INT NOT NULL AFTER `pontos_promocao`;
ALTER TABLE `users` ADD `post_hoje` INT NOT NULL AFTER `referidos`;
ALTER TABLE `cms_news` ADD `noticia_ativa` ENUM('0','1','','') NOT NULL AFTER `look`;
ALTER TABLE `salsa_posts` ADD `curtidas` text NOT NULL AFTER `look`;



ALTER TABLE  `users` ADD  `machine_id` VARCHAR( 64 ) NOT NULL DEFAULT  '' AFTER  `ip_current`;
