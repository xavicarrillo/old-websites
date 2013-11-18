<?php
/* $Id: portuguese.inc.php,v 1.113 2002/04/20 09:54:10 loic1 Exp $ */

/**
 * Portuguese language file by
 *   Ant�nio Raposo <Antonio.Raposo at CFMsoft.JazzNet.pt>
 *   Lopo Pizarro <lopopizarro@users.sourceforge.net>
 */

$charset = 'iso-8859-1';
$text_dir = 'ltr';
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
$byteUnits = array('Bytes', 'KB', 'MB', 'GB');

$day_of_week = array('Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab');
$month = array('Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d-%B-%Y �s %H:%M';


$strAPrimaryKey = 'Uma chave prim�ria foi adicionada a %s';
$strAccessDenied = 'Acesso Negado';
$strAction = 'Ac��es';
$strAddDeleteColumn = 'Adicionar/Remover Campos';
$strAddDeleteRow = 'Adicionar/Remover Crit�rios';
$strAddNewField = 'Adiciona novo campo';
$strAddPriv = 'Acrescenta um novo Privil�gio';
$strAddPrivMessage = 'Acrescentou um novo privil�gio.';
$strAddSearchConditions = 'Condi��o de Pesquisa (Complemento da clausula "where"):';
$strAddToIndex = 'Adicionar ao �ndice &nbsp;%s&nbsp;coluna(s)';
$strAddUser = 'Acrescenta um utilizador';
$strAddUserMessage = 'Acrescentou um novo utilizador.';
$strAffectedRows = 'Linhas afectadas:';
$strAfter = 'Depois %s';
$strAfterInsertBack = 'Voltar atr�s';
$strAfterInsertNewInsert = 'Inserir novo registo';
$strAll = 'Todas';
$strAlterOrderBy = 'Alterar a ordem da tabela por';
$strAnIndex = 'Um ind�ce foi adicionado a %s';
$strAnalyzeTable = 'Analizar tabela';
$strAnd = 'E';
$strAny = 'Todos';
$strAnyColumn = 'Qualquer coluna';
$strAnyDatabase = 'Qualquer base de dados';
$strAnyHost = 'Qualquer m�quina';
$strAnyTable = 'Qualquer tabela';
$strAnyUser = 'Qualquer utilizador';
$strAscending = 'Ascendente';
$strAtBeginningOfTable = 'No In�cio da Tabela';
$strAtEndOfTable = 'No Fim da Tabela';
$strAttr = 'Atributos';

$strBack = 'Voltar';
$strBinary = ' Bin�rio ';
$strBinaryDoNotEdit = ' Bin�rio - n�o editar ';
$strBookmarkDeleted = 'Marcador apagado com sucesso.';
$strBookmarkLabel = 'Etiqueta';
$strBookmarkQuery = 'Comandos SQL marcados';
$strBookmarkThis = 'Marcar este comando SQL';
$strBookmarkView = 'Ver apenas';
$strBrowse = 'Visualiza';
$strBzip = '"Compress�o bzip"';

$strCantLoadMySQL = 'n�o foi poss�vel carregar a extens�o MySQL,<br />por favor verifique a configura��o do PHP.';
$strCantRenameIdxToPrimary = 'Imposs�vel renomear �ndice para PRIMARY!';
$strCardinality = 'Quantidade';
$strCarriage = 'Fim de linha: \\r';
$strChange = 'Muda';
$strChangePassword = 'Alterar a senha';
$strCheckAll = 'Todos';
$strCheckDbPriv = 'Visualiza os Privil�gios da Base de Dados';
$strCheckTable = 'Verificar tabela';
$strColumn = 'Campo';
$strColumnNames = 'Nome dos Campos';
$strCompleteInserts = 'Instruc��es de inser��o completas';
$strConfirm = 'Confirma a sua op��o?';
$strCookiesRequired = 'O mecanismo de "Cookies" tem de estar ligado a partir deste ponto.';
$strCopyTable = 'Copia tabela para (base-de-dados<b>.</b>tabela):';
$strCopyTableOK = 'Tabela %s copiada para %s.';
$strCreate = 'Criar';
$strCreateIndex = 'Criar um �ndice com&nbsp;%s&nbsp;coluna(s)';
$strCreateIndexTopic = 'Criar um novo �ndice';
$strCreateNewDatabase = 'Criar nova base de dados';
$strCreateNewTable = 'Criar nova tabela na base de dados %s';
$strCriteria = 'Crit�rios';

$strData = 'Dados';
$strDataOnly = 'Apenas dados';
$strDatabase = 'Base de Dados ';
$strDatabaseHasBeenDropped = 'A base de dados %s foi eliminada.';
$strDatabases = 'Base de Dados';
$strDatabasesStats = 'Estat�sticas das bases de dados';
$strDatabaseWildcard = 'Base de Dados (aceita caracteres universais):';
$strDefault = 'Defeito';
$strDelete = 'Apagar';
$strDeleteFailed = 'Erro ao apagar!';
$strDeleteUserMessage = 'Apagou o utilizador %s.';
$strDeleted = 'Registo eliminado';
$strDeletedRows = 'Linhas apagadas:';
$strDescending = 'Descendente';
$strDisplay = 'Mostra';
$strDisplayOrder = 'Ordem de visualiza��o:';
$strDoAQuery = 'Fa�a uma "pesquisa por formul�rio" (caractere universal: "%")';
$strDoYouReally = 'Confirma : ';
$strDocu = 'Documenta��o';
$strDrop = 'Elimina';
$strDropDB = 'Elimina a base de dados %s';
$strDropTable = 'Elimina tabela';
$strDumpingData = 'Extraindo dados da tabela';
$strDynamic = 'din�mico';

$strEdit = 'Edita';
$strEditPrivileges = 'Alterar Privilegios';
$strEffective = 'Em uso';
$strEmpty = 'Limpa';
$strEmptyResultSet = 'MySQL n�o retornou nenum registo.';
$strEnd = 'Fim';
$strEnglishPrivileges = ' Nota: os nomes dos privil�gios do MySQL s�o em Ingl�s ';
$strError = 'Erro';
$strExtendedInserts = 'Instruc��es de inser��o m�ltiplas';
$strExtra = 'Extra'; // written the same in portuguese

$strField = 'Campo';
$strFieldHasBeenDropped = 'O campo %s foi eliminado';
$strFields = 'Qtd Campos';
$strFieldsEmpty = ' N�mero de campos inv�lido! ';
$strFieldsEnclosedBy = 'Campos delimitados por';
$strFieldsEscapedBy = 'Campos precedidos por';
$strFieldsTerminatedBy = 'Campos terminados por';
$strFixed = 'fixo';
$strFlushTable = 'Fecha a tabela ("FLUSH")';
$strFormEmpty = 'N� de dados insuficiente!\nPreencha todas as op��es!';
$strFormat = 'Formato';
$strFullText = 'Texto inteiro';
$strFunction = 'Fun��es';

$strGenTime = 'Data de Cria��o';
$strGo = 'Executa';
$strGrants = 'Autoriza��es';
$strGzip = '"Compress�o gzip"';

$strHasBeenAltered = 'foi alterado(a).';
$strHasBeenCreated = 'foi criado(a).';
$strHome = 'In�cio';
$strHomepageOfficial = 'P�gina Oficial do phpMyAdmin';
$strHomepageSourceforge = 'Sourceforge phpMyAdmin - P�gina de Download';
$strHost = 'M�quina';
$strHostEmpty = 'O nome da m�quina est� vazio!';

$strIdxFulltext = 'Texto Completo';
$strIfYouWish = 'Para carregar apenas algumas colunas da tabela, fa�a uma lista separada por virgula.';
$strIgnore = 'Ignora';
$strInUse = 'em uso';
$strIndex = '�ndice';
$strIndexHasBeenDropped = 'O �ndice %s foi eliminado';
$strIndexName = 'Nome do �ndice&nbsp;:';
$strIndexType = 'Tipo de �ndice&nbsp;:';
$strIndexes = '�ndices';
$strInsert = 'Insere';
$strInsertAsNewRow = 'Insere como novo registo';
$strInsertedRows = 'Registos inseridos :';
$strInsertNewRow = 'Insere novo registo';
$strInsertTextfiles = 'Insere arquivo texto na tabela';
$strInstructions = 'Instru��es';
$strInvalidName = '"%s" � uma palavra reservada, n�o pode usar como nome de base de dados/tabela/campo.';

$strKeepPass = 'Sem alterar senha';
$strKeyname = 'Nome do �ndice';
$strKill = 'Termina';

$strLength = 'Comprimento';
$strLengthSet = 'Tamanho/Valores*';
$strLimitNumRows = 'N�mero de registos por p�gina';
$strLineFeed = 'Mudan�a de linha: \\n';
$strLines = 'Linhas';
$strLinesTerminatedBy = 'Linhas terminadas por';
$strLocationTextfile = 'Localiza��o do arquivo de texto';
$strLogPassword = 'Senha&nbsp;:';
$strLogUsername = 'Utilizador&nbsp;:';
$strLogin = 'Entrada';
$strLogout = 'Sair';

$strModifications = 'Modifica��es foram Guardadas';
$strModify = 'Modifica';
$strModifyIndexTopic = 'Modificar um �ndice';
$strMoveTable = 'Move tabela para (base de dados<b>.</b>tabela):';
$strMoveTableOK = 'A tabela %s foi movida para %s.';
$strMySQLReloaded = 'MySQL reiniciado.';
$strMySQLSaid = 'Mensagens do MySQL : ';
$strMySQLServerProcess = 'MySQL %pma_s1% a correr em %pma_s2% como %pma_s3%';
$strMySQLShowProcess = 'Mostra os Processos';
$strMySQLShowStatus = 'Mostra informa��o do estado do MySQL';
$strMySQLShowVars = 'Mostra as vari�veis de sistema do MySQL';

$strName = 'Nome';
$strNbRecords = 'n. de registos';
$strNext = 'Pr�ximo';
$strNo = 'N�o';
$strNoDatabases = 'Sem bases de dados';
$strNoDropDatabases = 'Os comandos "DROP DATABASE" est�o inibidos.';
$strNoFrames = 'O phpMyAdmin torna-se mais agrad�vel se usado num browser que suporte <b>frames</b>.';
$strNoIndex = 'Nenhum ind�ce definido!';
$strNoIndexPartsDefined = 'Nenhuma parte do �ndice definida!';
$strNoModification = 'Sem altera��es';
$strNoPassword = 'Sem Senha';
$strNoPrivileges = 'Sem Privil�gios';
$strNoQuery = 'Nenhum comando SQL encontrado!';
$strNoRights = 'N�o tem permiss�es suficientes para aceder aqui, neste momento!';
$strNoTablesFound = 'Nenhuma tabela encontrada na base de dados';
$strNoUsersFound = 'Nenhum utilizador encontrado.';
$strNone = 'Nenhum';
$strNotNumber = 'Isto n�o � um n�mero!';
$strNotValidNumber = ' n�o � um n�mero de registo v�lido!';
$strNull = 'Nulo';

$strOftenQuotation = 'Normalmente aspas. OPTIONALLY significa que apenas os campos "char" e "varchar" s�o delimitados pelo caractere delimitador.';
$strOptimizeTable = 'Optimizar tabela';
$strOptionalControls = 'Opcional. Comanda o modo de escrita e leitura dos caracteres especiais.';
$strOptionally = 'OPCIONAL';
$strOr = 'Ou';
$strOverhead = 'Suspenso';

$strPHPVersion = 'vers�o do PHP';
$strPartialText = 'Texto parcial';
$strPassword = 'Senha';
$strPasswordEmpty = 'Indique a Senha!';
$strPasswordNotSame = 'As senhas s�o diferentes!\nLembre-se de confirmar a senha!';
$strPmaDocumentation = 'Documenta��o do phpMyAdmin';
$strPmaUriError = 'A directiva <tt>$cfgPmaAbsoluteUri</tt> TEM que ser definida no ficheiro de configura��o!';
$strPos1 = 'Inicio';
$strPrevious = 'Anterior';
$strPrimary = 'Prim�ria';
$strPrimaryKey = 'Chave Prim�ria';
$strPrimaryKeyHasBeenDropped = 'A chave prim�ria foi eliminada';
$strPrimaryKeyName = 'O nome da chave prim�ria tem de ser... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>tem</b> de ser o nome de e <b>apenas de</b> uma chave prim�ria!)';
$strPrintView = 'Vista de impress�o';
$strPrivileges = 'Privil�gios';
$strProperties = 'Propriedades';

$strQBE = 'Pesquisa por formul�rio';
$strQBEDel = 'Elim.';
$strQBEIns = 'Ins.';
$strQueryOnDb = 'Comando SQL na base de dados <b>%s</b>:';

$strReType = 'Confirma';
$strRecords = 'Registos';
$strReferentialIntegrity = 'Verificar Integridade referencial:';
$strReloadFailed = 'Reinicia��o do MySQL falhou.';
$strReloadMySQL = 'Reiniciar o MySQL';
$strRememberReload = 'Lembre-se de reiniciar o servidor.';
$strRenameTable = 'Renomeia a tabela para ';
$strRenameTableOK = 'Tabela %s renomeada para %s';
$strRepairTable = 'Reparar tabela';
$strReplace = 'Substituir';
$strReplaceTable = 'Substituir os dados da tabela pelos do arquivo';
$strReset = 'Limpa';
$strRevoke = 'Anula';
$strRevokeGrant = 'Anula Autoriza��o';
$strRevokeGrantMessage = 'Anulou a autoriza��o para %s';
$strRevokeMessage = 'Anulou os privil�gios para %s';
$strRevokePriv = 'Anula Privil�gios';
$strRowLength = 'Comprim. dos reg.';
$strRowSize = ' Tamanho dos reg.';
$strRows = 'Registos';
$strRowsFrom = 'registos come�ando em';
$strRowsModeHorizontal = 'horizontal';  // written the same in portuguese!
$strRowsModeOptions = 'em modo %s com cabe�alhos repetidos a cada %s c�lulas';
$strRowsModeVertical = 'vertical';  // written the same in portuguese!
$strRowsStatistic = 'Estat�sticas dos registos';
$strRunQuery = 'Executa Comando SQL';
$strRunSQLQuery = 'Executa comando(s) SQL na base de dados %s';
$strRunning = 'a correr em %s';

$strSQLQuery = 'Comando SQL';
$strSave = 'Guarda';
$strSelect = 'Selecciona';
$strSelectADb = 'Por favor seleccione uma base de dados';
$strSelectAll = 'Selecciona Todas';
$strSelectFields = 'Seleccione os campos (no m�nimo 1)';
$strSelectNumRows = 'na pesquisa';
$strSend = 'envia';
$strServerChoice = 'Escolha do Servidor';
$strServerVersion = 'Vers�o do servidor';
$strSetEnumVal = 'Se o tipo de campo � "enum" ou "set", por favor introduza os valores no seguinte formato: \'a\',\'b\',\'c\'...<br />Se precisar de colocar uma barra invertida ("\") ou um ap�strofe ("\'") entre esses valores, coloque uma barra invertida antes (por exemplo \'\\\\xyz\' ou \'a\\\'b\').';
$strShow = 'Mostra';
$strShowAll = 'Mostrar tudo';
$strShowCols = 'Mostra Colunas';
$strShowPHPInfo = 'Mostra informa��o do PHP';
$strShowTables = 'Mostra tabelas';
$strShowThisQuery = ' Mostrar de novo aqui este comando ';
$strShowingRecords = 'Mostrando registos ';
$strSingly = '(A refazer ap�s inserir/eliminar)';
$strSize = 'Tamanho';
$strSort = 'Ordena��o';
$strSpaceUsage = 'Espa�o ocupado';
$strStartingRecord = 'Registo inicial';
$strStatement = 'Itens';
$strStrucCSV = 'Dados CSV';
$strStrucData = 'Estrutura e dados';
$strStrucDrop = 'Adiciona \'drop table\'';
$strStrucExcelCSV = 'dados CSV para Ms Excel';
$strStrucOnly = 'Somente estrutura';
$strSubmit = 'Submete';
$strSuccess = 'O seu comando SQL foi executado com sucesso';
$strSum = 'Soma';

$strTable = 'tabela ';
$strTableComments = 'Coment�rios da tabela';
$strTableEmpty = 'O nome da tabela est� vazio!';
$strTableHasBeenDropped = 'A tabela %s foi eliminada';
$strTableHasBeenEmptied = 'A tabela %s foi limpa';
$strTableHasBeenFlushed = 'A tabela %s foi fechada';
$strTableMaintenance = 'Manuten��o da tabela';
$strTableStructure = 'Estrutura da tabela';
$strTableType = 'Tipo de tabela';
$strTables = '%s tabela(s)';
$strTextAreaLength = ' Devido ao seu tamanho,<br /> este campo pode n�o ser edit�vel ';
$strTheContent = 'O conte�do do seu arquivo foi inserido';
$strTheContents = 'O conte�do do arquivo substituiu o conte�do da tabela que tinha a mesma chave prim�ria ou �nica';
$strTheTerminator = 'Terminador de campos.';
$strTotal = 'total';
$strType = 'Tipo';

$strUncheckAll = 'Nenhum';
$strUnique = '�nico';
$strUnselectAll = 'Limpa Todas as Selec��es';
$strUpdatePrivMessage = 'Actualizou os privil�gios de %s.';
$strUpdateProfile = 'Actualiza o prefil:';
$strUpdateProfileMessage = 'O prefil foi actualizado.';
$strUpdateQuery = 'Actualiza Comando SQL';
$strUsage = 'Utiliza��o';
$strUseBackquotes = 'Usar ap�strofes com os nomes das tabelas e campos';
$strUseTables = 'Usar Tabelas';
$strUser = 'Utilizador';
$strUserEmpty = 'O nome do utilizador est� vazio!';
$strUserName = 'Nome do Utilizador';
$strUsers = 'Utilizadores';

$strValue = 'Valor';
$strViewDump = 'Ver o esquema da tabela';
$strViewDumpDB = 'Ver o esquema da base de dados';

$strWelcome = 'Bemvindo ao %s';
$strWithChecked = 'Com os seleccionados:';
$strWrongUser = 'Utilizador ou Senha errada. Acesso Negado.';

$strYes = 'Sim';

$strZip = '"Compress�o zip"';


// To translate
?>
