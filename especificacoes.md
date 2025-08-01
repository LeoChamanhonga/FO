
# Especificações do Sistema FOManager

## 1. Visão Geral
O **FOManager** é um sistema de gestão de obras e funcionários desenvolvido em PHP, focado no controle de projetos de construção civil. O sistema permite gerenciar obras, colaboradores, clientes e gerar relatórios detalhados.

## 2. Funcionalidades Principais

### 2.1 Gestão de Obras
- **Criação e Edição**: Adicionar novas obras e editar informações existentes
- **Controle de Status**: Gerenciar estados (ativa, finalizada, em andamento)
- **Atribuição de Colaboradores**: Vincular funcionários às obras
- **Sistema de Aprovação**: Controle de aprovação de obras
- **Relatórios**: Geração de relatórios em Excel e PDF
- **Localização**: Controle de localização das obras

### 2.2 Gestão de Colaboradores
- **Cadastro de Funcionários**: Informações pessoais e profissionais
- **Controle de Horas**: Registro de horas trabalhadas
- **Horas Extras**: Gestão de horas adicionais (desconto de almoço configurável para 2025: 1h)
- **Histórico de Trabalho**: Acompanhamento por colaborador
- **Top 10**: Ranking dos funcionários mais produtivos

### 2.3 Gestão de Clientes
- **Cadastro de Clientes**: Informações dos contratantes
- **Vinculação**: Associação de clientes às obras

### 2.4 Dashboard e Relatórios
- **Estatísticas Gerais**: Visão geral do sistema
- **Gráficos**: Obras totais, ativas e finalizadas (Chart.js)
- **Relatórios Excel**: Exportação de dados detalhados
- **Relatórios PDF**: Documentos formatados (TCPDF)
- **Controle de Obras Não Validadas**: Identificação de pendências

### 2.5 Sistema Auxiliar
- **Categorias de Trabalho**: Classificação de atividades
- **Centros de Custo**: Controle financeiro
- **Sistema de Backup**: Proteção de dados
- **Gestão de Usuários**: Diferentes níveis de acesso

## 3. Tecnologias Utilizadas

### 3.1 Backend
- **PHP**: Linguagem principal
- **MySQL**: Banco de dados relacional

### 3.2 Frontend
- **HTML5/CSS3**: Estrutura e estilo
- **JavaScript**: Interatividade
- **Bootstrap**: Framework CSS responsivo
- **jQuery**: Biblioteca JavaScript
- **Chart.js**: Gráficos interativos
- **FontAwesome**: Ícones

### 3.3 Bibliotecas Externas
- **PhpSpreadsheet**: Manipulação de planilhas Excel
- **TCPDF**: Geração de documentos PDF
- **Composer**: Gerenciador de dependências

## 4. Estrutura do Projeto

### 4.1 Organização de Diretórios
```
├── auth/           # Autenticação
├── clientes/       # Módulo de clientes
├── colaboradores/  # Módulo de colaboradores
├── obras/          # Módulo de obras
├── users/          # Gestão de usuários
├── extra/          # Funcionalidades auxiliares
├── report/         # Relatórios
├── css/            # Estilos
├── js/             # Scripts JavaScript
├── img/            # Imagens
├── db/             # Configuração de banco
├── vendor/         # Dependências Composer
└── backup/         # Arquivos de backup
```

### 4.2 Arquivos Principais
- **index.php**: Página de login
- **dashboard.php**: Painel principal
- **painel.php**: Interface administrativa
- **config.php**: Configurações do banco

## 5. Pontos de Melhoria Identificados

### 5.1 Técnicos
1. **Conexão de Banco**: Centralizar classe de conexão
2. **Formato de Datas**: Padronizar formatos no Excel
3. **Paginação**: Implementar scroll infinito
4. **Validação**: Melhorar validação de campos
5. **Separação por Ano**: Organizar obras por período

### 5.2 Funcionais
1. **Horário de Almoço**: Ajustar desconto para 1h em 2025
2. **Relatórios Dinâmicos**: Dashboard com dados em tempo real
3. **Botão Voltar**: Funcionalidade em todas as telas
4. **Duplicações**: Resolver duplicatas de obras e colaboradores
5. **Job Cards**: Melhorar organização
6. **Inativação**: Sistema para obras 2024

### 5.3 Usabilidade
1. **Fluidez**: Melhorar performance da aplicação
2. **Lançamentos**: Permitir entrada em qualquer dia
3. **Navegação**: Corrigir acesso a páginas seguintes
4. **Interface**: Design mais moderno e intuitivo

## 6. Configuração e Deployment

### 6.1 Requisitos do Sistema
- **PHP**: 7.4 ou superior
- **MySQL**: 5.7 ou superior
- **Apache/Nginx**: Servidor web
- **Composer**: Para dependências

### 6.2 Instalação
1. Clonar repositório
2. Executar `composer install`
3. Configurar banco de dados em `db/config.php`
4. Importar estrutura do banco (`db/baseDedados.sql`)
5. Configurar permissões de arquivos

### 6.3 Configurações Específicas
- **Host**: 0.0.0.0 (para acesso externo)
- **Porta**: 5000 (recomendada para desenvolvimento)
- **Timezone**: Configuração adequada para datas

## 7. Segurança
- **Autenticação**: Sistema de login obrigatório
- **Validação**: Sanitização de dados de entrada
- **Permissões**: Diferentes níveis de usuário
- **Backup**: Rotinas de backup automático

## 8. Manutenção
- **Logs**: Sistema de registro de atividades
- **Monitoramento**: Acompanhamento de performance
- **Atualizações**: Processo de deploy controlado
- **Testes**: Validação antes de produção

---

**Versão**: 1.0  
**Data**: 2025  
**Autor**: Equipe FOManager  
**Status**: Em desenvolvimento ativo
