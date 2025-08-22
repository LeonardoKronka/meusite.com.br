-- Cria o banco
CREATE DATABASE IF NOT EXISTS espetaria_texas
  DEFAULT CHARACTER SET utf8mb4
  DEFAULT COLLATE utf8mb4_general_ci;
USE espetaria_texas;

-- Tabela de clientes
CREATE TABLE IF NOT EXISTS clientes (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(120) NOT NULL,
  telefone VARCHAR(20),
  email VARCHAR(120),
  criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Tabela de itens do cardápio
CREATE TABLE IF NOT EXISTS itens (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(120) NOT NULL,
  preco DECIMAL(10,2) NOT NULL DEFAULT 0.00,
  categoria VARCHAR(60),
  descricao VARCHAR(255),
  ativo TINYINT(1) NOT NULL DEFAULT 1,
  criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Itens iniciais (baseados nos seus espetos)
INSERT INTO itens (nome, preco, categoria, descricao) VALUES
('Espetinho de Boi',      10.00, 'Carne',   'Corte bovino macio'),
('Espetinho de Frango',   8.00,  'Aves',    'Peito de frango temperado'),
('Espetinho de Porco',    9.00,  'Carne',   'Corte suíno suculento'),
('Espeto de Queijo',      7.00,  'Vegetariano', 'Queijo coalho na brasa'),
('Coração',               9.00,  'Aves',    'Coraçãozinho temperado'),
('Linguiça',              8.00,  'Carne',   'Linguiça toscana'),
('Pão de Alho',           6.00,  'Acompanhamento', 'Pão com creme de alho'),
('Kafta',                 10.00, 'Carne',   'Kafta artesanal'),
('Tulipa',                9.00,  'Aves',    'Coxinha da asa'),
('Medalhão Queijo c/ Bacon', 12.00, 'Especial', 'Queijo enrolado no bacon'),
('Medalhão Frango c/ Bacon', 11.00, 'Especial', 'Frango enrolado no bacon');
