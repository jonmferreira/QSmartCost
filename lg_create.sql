
CREATE TABLE `alert` (
  `id` int(11) NOT NULL,
  `id_data` bigint(20) NOT NULL,
  `asn` varchar(45) NOT NULL,
  `divisao` varchar(15) NOT NULL,
  `qty_defeito` int(11) NOT NULL,
  `total_qty` int(11) NOT NULL,
  `amostra` int(11) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `part_number` varchar(50) NOT NULL,
  `part_name` varchar(90) NOT NULL,
  `forncedor` varchar(50) NOT NULL,
  `comentario` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `autorizadas` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `address` varchar(80) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL,
  `type` varchar(30) NOT NULL,
  `telefone` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `calc_z_config` (
  `modelo` varchar(50) NOT NULL,
  `valor_capacidade` float NOT NULL,
  `valor_eer` float NOT NULL,
  `valor_power` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `calc_z_testes` (
  `id` int(11) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `valor_capacidade` float NOT NULL,
  `valor_eer` float NOT NULL,
  `valor_power` float NOT NULL,
  `data` datetime NOT NULL,
  `inspetor` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `count` (
  `id` int(11) NOT NULL,
  `partNumber` varchar(30) NOT NULL,
  `resultado` varchar(2) NOT NULL,
  `data` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `fornecedores` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `inspectionscontrol` (
  `id` int(11) NOT NULL,
  `item` varchar(100) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `fornecedor` varchar(100) NOT NULL,
  `method` varchar(100) NOT NULL,
  `count` int(11) NOT NULL,
  `count_date` int(11) NOT NULL,
  `persist` varchar(100) NOT NULL,
  `reason` varchar(100) NOT NULL,
  `tipo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `lar` (
  `id` int(11) NOT NULL,
  `supplier_code` varchar(15) NOT NULL,
  `supplier_name` varchar(55) NOT NULL,
  `judgement` varchar(15) NOT NULL,
  `receipt_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `lar_nw8` (
  `id` int(11) NOT NULL,
  `supplier_code` varchar(15) NOT NULL,
  `supplier_name` varchar(55) NOT NULL,
  `judgement` varchar(15) NOT NULL,
  `receipt_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE `line_audit_auditoria` (
  `id` int(11) NOT NULL,
  `data` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `line` varchar(25) NOT NULL,
  `auditor` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `line_audit_checklist` (
  `id` int(11) NOT NULL,
  `secao` varchar(100) NOT NULL,
  `item` varchar(100) NOT NULL,
  `detalhes` varchar(100) NOT NULL,
  `especificacao` text NOT NULL,
  `periodo` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



CREATE TABLE `line_audit_results` (
  `id` int(11) NOT NULL,
  `id_auditoria` int(11) NOT NULL,
  `id_checklist` int(11) NOT NULL,
  `result` varchar(5) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `obs` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `listamestra` (
  `partNumber` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `load` (
  `asn` varchar(45) NOT NULL,
  `item` varchar(45) NOT NULL,
  `item_name` varchar(45) NOT NULL,
  `judgement` varchar(45) DEFAULT NULL,
  `receipt_qty` varchar(45) NOT NULL,
  `item_type` varchar(55) DEFAULT NULL,
  `departure_date` varchar(45) DEFAULT NULL,
  `receipt_date` varchar(45) DEFAULT NULL,
  `iqc_received` varchar(45) DEFAULT NULL,
  `inicio_inspecao` datetime DEFAULT NULL,
  `fim_inspecao` datetime DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `inspetor_iqc` varchar(45) DEFAULT NULL,
  `tempo_inspecao` int(11) NOT NULL,
  `nw` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `loadtest` (
  `item` varchar(45) NOT NULL,
  `departure_date` varchar(45) NOT NULL,
  `receipt_date` varchar(45) NOT NULL,
  `id` int(11) NOT NULL,
  `inicio_inspecao` datetime DEFAULT NULL,
  `fim_inspecao` datetime DEFAULT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



CREATE TABLE `load_on` (
  `asn` varchar(45) NOT NULL,
  `item` varchar(45) NOT NULL,
  `item_name` varchar(45) NOT NULL,
  `judgement_date` varchar(45) DEFAULT NULL,
  `receipt_qty` varchar(45) NOT NULL,
  `departure_date` varchar(45) DEFAULT NULL,
  `receipt_date` varchar(45) DEFAULT NULL,
  `iqc_received` varchar(45) DEFAULT NULL,
  `inicio_inspecao` datetime DEFAULT NULL,
  `fim_inspecao` datetime DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `inspetor_iqc` varchar(45) DEFAULT NULL,
  `tempo_inspecao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `oqc_inspection` (
  `model` varchar(100) NOT NULL,
  `sufix` varchar(100) NOT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `prr` (
  `id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `fornecedor` varchar(90) NOT NULL,
  `nw` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `qcost` (
  `id` int(11) NOT NULL,
  `custo` varchar(45) NOT NULL,
  `modelo` varchar(25) NOT NULL,
  `data` date NOT NULL,
  `valor` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `qualidade` (
  `partNumber` varchar(100) NOT NULL,
  `partName` varchar(250) NOT NULL,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `reparo` (
  `id` int(11) NOT NULL,
  `item` varchar(255) DEFAULT NULL,
  `cidade` varchar(255) DEFAULT NULL,
  `estado` varchar(255) DEFAULT NULL,
  `autorizada` varchar(255) DEFAULT NULL,
  `datareparo` date DEFAULT NULL,
  `nomeproduto` varchar(255) DEFAULT NULL,
  `linhaproduto` varchar(255) DEFAULT NULL,
  `datavenda` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `tempos` (
`item_name` varchar(45)
,`item` varchar(45)
,`FORMAT(AVG(tempo_inspecao),0)` varchar(54)
,`FORMAT(AVG(tempo_inspecao)/60,0)` varchar(59)
);

CREATE TABLE `vendas` (
  `id` int(11) NOT NULL,
  `valor` int(11) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `nomeproduto` varchar(255) DEFAULT NULL,
  `linhaproduto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `user` (
   `id` int(11) NOT NULL,
   `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
   `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
   `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
   `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
   `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
   `status` smallint(6) NOT NULL DEFAULT '10',
   `created_at` int(11) NOT NULL,
   `updated_at` int(11) NOT NULL,
   `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
 ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `alert` (
  `id` int(11) NOT NULL,
  `id_data` bigint(20) NOT NULL,
  `asn` varchar(45) NOT NULL,
  `divisao` varchar(15) NOT NULL,
  `qty_defeito` int(11) NOT NULL,
  `total_qty` int(11) NOT NULL,
  `amostra` int(11) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `part_number` varchar(50) NOT NULL,
  `part_name` varchar(90) NOT NULL,
  `forncedor` varchar(50) NOT NULL,
  `comentario` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `alert`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `autorizadas`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `calc_z_config`
  ADD PRIMARY KEY (`modelo`);

ALTER TABLE `calc_z_testes`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `count`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `fornecedores`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `inspectionscontrol`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `lar`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `lar_nw8`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `line_audit_auditoria`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `line_audit_checklist`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `line_audit_results`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `listamestra`
  ADD PRIMARY KEY (`partNumber`);

 ALTER TABLE `load`
   ADD PRIMARY KEY (`asn`);

ALTER TABLE `loadtest`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item` (`departure_date`,`receipt_date`),
  ADD KEY `item_3` (`departure_date`,`receipt_date`);


 ALTER TABLE `migration`
   ADD PRIMARY KEY (`version`);

ALTER TABLE `oqc_inspection`
  ADD PRIMARY KEY (`model`);

ALTER TABLE `prr`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `qcost`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `qualidade`
  ADD PRIMARY KEY (`partNumber`);

ALTER TABLE `reparo`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

ALTER TABLE `vendas`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `alert`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

ALTER TABLE `autorizadas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

ALTER TABLE `calc_z_testes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=297;

ALTER TABLE `count`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7371;

ALTER TABLE `fornecedores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

ALTER TABLE `inspectionscontrol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71247;

ALTER TABLE `lar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19063;

ALTER TABLE `lar_nw8`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12923;

ALTER TABLE `line_audit_auditoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

ALTER TABLE `line_audit_checklist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

ALTER TABLE `line_audit_results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

ALTER TABLE `loadtest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `prr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=348;

ALTER TABLE `qcost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5068;

ALTER TABLE `reparo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39394;

ALTER TABLE `user`
 MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

ALTER TABLE `vendas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6075;