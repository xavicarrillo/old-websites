<?php
/* $Id: greek.inc.php,v 1.47 2002/04/09 20:30:01 loic1 Exp $ */
/* Translated by Kyriakos Xagoraris <theremon at users.sourceforge.net> */

$charset = 'iso-8859-7';
$text_dir = 'ltr';
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'tahoma, verdana, helvetica, geneva, sans-serif';
$number_thousands_separator = '.';
$number_decimal_separator = ',';
$byteUnits = array('Bytes', 'KB', 'MB', 'GB');

$day_of_week = array('���', '���', '���', '���', '���', '���', '���');
$month = array('���', '���', '���', '���', '���', '����', '����', '���', '���', '���', '���', '���');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d %B %Y, ���� %I:%M %p';


$strAccessDenied = '\'������ ���������';
$strAction = '��������';
$strAddDeleteColumn = '��������/�������� ������ ������';
$strAddDeleteRow = '��������/�������� ������� ���������';
$strAddNewField = '�������� ���� ������';
$strAddPriv = '�������� ���� ���������';
$strAddPrivMessage = '���������� ��� ��������.';
$strAddSearchConditions = '�������� ���� ���� (���� ��� "where" ��������):';
$strAddToIndex = '�������� ��� ��������� &nbsp;%s&nbsp;�������(��)';
$strAddUser = '�������� ���� ������';
$strAddUserMessage = '���������� ��� ��� ������.';
$strAffectedRows = '������������� ��������:';
$strAfter = '���� �� %s';
$strAfterInsertBack = '���������';
$strAfterInsertNewInsert = '�������� ���� ��������';
$strAll = '���';
$strAlterOrderBy = '������ ����������� ������ ����';
$strAnalyzeTable = '������� ������';
$strAnd = '���';
$strAnIndex = '��� ��������� ���������� ��� %s';
$strAny = '�����������';
$strAnyColumn = '����������� �����';
$strAnyDatabase = '����������� ����';
$strAnyHost = '����������� �������';
$strAnyTable = '������������ �������';
$strAnyUser = '������������ �������';
$strAPrimaryKey = '��� �������� ������ ���������� ��� %s';
$strAscending = '�������';
$strAtBeginningOfTable = '���� ���� ��� ������';
$strAtEndOfTable = '��� ����� ��� ������';
$strAttr = '��������������';

$strBack = '����';
$strBinary = '�������';
$strBinaryDoNotEdit = '������� - ����� ���������� ������������';
$strBookmarkDeleted = '� ������� ��������.';
$strBookmarkLabel = '�������';
$strBookmarkQuery = '������������ ������ SQL';
$strBookmarkThis = '���������� ����� ��� ������ SQL';
$strBookmarkView = '���� ��������';
$strBrowse = '���������';
$strBzip = '�������� �bzip�';

$strCantLoadMySQL = '��� ������ �� �������� � �������� MySQL,<br />�������� ������� ��� ������� ��� PHP.';
$strCantRenameIdxToPrimary = '� ����������� ��� ���������� �� PRIMARY �� ����� ������!';
$strCardinality = '������������';
$strCarriage = '���������� ����������: \\r';
$strChange = '������';
$strChangePassword = '������ ������� ���������';
$strCheckAll = '������� ����';
$strCheckDbPriv = '������� ��������� �����';
$strCheckTable = '������� ������';
$strColumn = '�����';
$strColumnNames = '������� ������';
$strCompleteInserts = '������������� ���������';
$strConfirm = '���������� ������ �� �� ����������;';
$strCookiesRequired = '��� ���� �� ������ ������ �� ����� �������������� cookies.';
$strCopyTable = '��������� ������ �� (����<b>.</b>�������):';
$strCopyTableOK = '� ������� %s ����������� ��� %s.';
$strCreate = '����������';
$strCreateIndex = '���������� ���������� �� &nbsp;%s&nbsp;�����';
$strCreateIndexTopic = '���������� ���� ����������';
$strCreateNewDatabase = '���������� ���� �����';
$strCreateNewTable = '���������� ���� ������ ��� ���� %s';
$strCriteria = '��������';

$strData = '��������';
$strDatabase = '���� ';
$strDatabaseHasBeenDropped = '� ���� ��������� %s ��������.';
$strDatabases = '������';
$strDatabasesStats = '���������� �����';
$strDatabaseWildcard = '���� ��������� (������������ wildcards):';
$strDataOnly = '���� ��������';
$strDefault = '��������������';
$strDelete = '��������';
$strDeleted = '� ������� ���� ���������';
$strDeletedRows = '������������ ��������:';
$strDeleteFailed = '� �������� �������';
$strDeleteUserMessage = '���������� ��� ������ %s.';
$strDescending = '��������';
$strDisplay = '��������';
$strDisplayOrder = '����� ���������:';
$strDoAQuery = '�������� ��� ������� ���� ���������� (���������� ��������� "%")';
$strDocu = '����������';
$strDoYouReally = '������ ���������� �� ';
$strDrop = '��������';
$strDropDB = '�������� ����� %s';
$strDropTable = '�������� ������';
$strDumpingData = '\'�������� ��������� ��� ������';
$strDynamic = '��������';

$strEdit = '�����������';
$strEditPrivileges = '����������� ���������';
$strEffective = '���������������';
$strEmpty = '\'��������';
$strEmptyResultSet = '� MySQL ��������� ��� ����� ������ ������������� (�.�. ������ �������).';
$strEnd = '�����';
$strEnglishPrivileges = ' ��������: �� ������� ��������� ��� MySQL ����������� ��� ������� ';
$strError = '�����';
$strExtendedInserts = '����������� ���������';
$strExtra = '��������';

$strField = '�����';
$strFieldHasBeenDropped = '�� ����� %s ��������';
$strFields = '�����';
$strFieldsEmpty = ' � ���������� ��� ������ ����� ����! ';
$strFieldsEnclosedBy = '����� ��� ������������� ��';
$strFieldsEscapedBy = '�� ����� ������������� �� ��������� �������� ';
$strFieldsTerminatedBy = '����� ��� ���������� ��';
$strFixed = '��������������� ������';
$strFlushTable = '���������� ("FLUSH") ������';
$strFormat = '�����������';
$strFormEmpty = '�������� ���� ��� ����� !';
$strFullText = '����� �������';
$strFunction = '����������';

$strGenTime = '������ �����������';
$strGo = '��������';
$strGrants = '���������';
$strGzip = '�������� �gzip�';

$strHasBeenAltered = '���� ��������.';
$strHasBeenCreated = '���� ������������.';
$strHome = '�������� ������';
$strHomepageOfficial = '������� ������ ��� phpMyAdmin';
$strHomepageSourceforge = '������ ��� Sourceforge ��� ��� �������� ��� phpMyAdmin';
$strHost = '�������';
$strHostEmpty = '�� ����� ��� ���������� ����� ����!';

$strIdxFulltext = '������ �������';
$strIfYouWish = '�� ������������ �� ��������� ���� ������� ��� ��� ������ ��� ������, ��������� ��� ����� ������ ������������ �� �����.';
$strIgnore = '��������';
$strIndex = '���������';
$strIndexes = '���������';
$strIndexHasBeenDropped = '�� ��������� %s ��������';
$strIndexName = '����� ����������&nbsp;:';
$strIndexType = '����� ����������&nbsp;:';
$strInsert = '��������';
$strInsertAsNewRow = '�������� �� ��� ��������';
$strInsertedRows = '����������� ��������:';
$strInsertNewRow = '�������� ���� ��������';
$strInsertTextfiles = '�������� ������� �������� ���� ������';
$strInstructions = '�������';
$strInUse = '�� �����';
$strInvalidName = '� �%s� ����� ���������� ����, ��� �������� �� ��� ��������������� �� ����� ��� ����, ������ � �����.';

$strKeepPass = '��������� ������� ���������';
$strKeyname = '����� ��������';
$strKill = '���������';

$strLength = '�����';
$strLengthSet = '�����/�����*';
$strLimitNumRows = '���������� ��� ������';
$strLineFeed = '���������� ��������� �������: \\n';
$strLines = '�������';
$strLinesTerminatedBy = '������� ��� ���������� ��';
$strLocationTextfile = '��������� ��� ������� ��������';
$strLogin = '�������';
$strLogout = '����������';
$strLogPassword = '������� ���������:';
$strLogUsername = '����� ������:';

$strModifications = '�� ������� �������������';
$strModify = '�����������';
$strModifyIndexTopic = '������ ���� ����������';
$strMoveTable = '�������� ������ �� (����<b>.</b>�������):';
$strMoveTableOK = '� ������� %s ����������� ��� %s.';
$strMySQLReloaded = '� MySQL ��������������.';
$strMySQLSaid = '� MySQL ��������� �� ������: ';
$strMySQLServerProcess = '� MySQL %pma_s1% ���������� �� %pma_s2% �� %pma_s3%';
$strMySQLShowProcess = '�������� ����������';
$strMySQLShowStatus = '�������� ���������� ��������� ��� MySQL';
$strMySQLShowVars = '�������� ���������� ��� MySQL';

$strName = '�����';
$strNbRecords = '������� ��������';
$strNext = '�������';
$strNo = '���';
$strNoDatabases = '��� �������� ������ ���������';
$strNoDropDatabases = '�� ������� �DROP DATABASE� ����� ���������������.';
$strNoFrames = '�� phpMyAdmin ����� ��� ������ �� ���� browser <b>��� ����������� frames</b>.';
$strNoIndex = '��� �������� ���������!';
$strNoIndexPartsDefined = '��� ��������� �� �������� ��� ����������!';
$strNoModification = '����� ������';
$strNone = '������';
$strNoPassword = '����� ������ ���������';
$strNoPrivileges = '����� ��������';
$strNoQuery = '��� ������� ������ SQL!';
$strNoRights = '��� ����� ������ ���������� �� ������� ��� ����!';
$strNoTablesFound = '��� �������� ������� ��� ����.';
$strNotNumber = '���� ��� ����� �������!';
$strNotValidNumber = ' ��� ����� �������� ������� ��������!';
$strNoUsersFound = '��� �������� �������.';
$strNull = '����';

$strOftenQuotation = '����� ����������. �� OPTIONALLY �������� ��� ���� �� ����� char ��� varchar ������������� �� ��� ��������� ���������������� ����.';
$strOptimizeTable = '�������������� ������';
$strOptionalControls = '�����������. �������� ��� �� ������� � �������� ��� � ������� ������� ����������.';
$strOptionally = '�����������';
$strOr = '�';
$strOverhead = '����������';

$strPartialText = '��������� �������';
$strPassword = '������� ���������';
$strPasswordEmpty = '� ������� ��������� ����� �����!';
$strPasswordNotSame = '�� ������� ��������� ��� ����� �����!';
$strPHPVersion = '������ PHP';
$strPmaDocumentation = '���������� phpMyAdmin';
$strPmaUriError = '� ������ <tt>$cfgPmaAbsoluteUri</tt> ������ �� ������� ��� ������ �����������!';
$strPos1 = '����';
$strPrevious = '�����������';
$strPrimary = '��������';
$strPrimaryKey = '�������� ������';
$strPrimaryKeyHasBeenDropped = '�� �������� ������ ��������';
$strPrimaryKeyName = '�� ����� ��� ����������� �������� ������ �� �����... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>������</b> �� ����� �� ����� ��� ����������� �������� ��� <b>���� �����</b> !)';
$strPrintView = '�������� ��� ��������';
$strPrivileges = '��������';
$strProperties = '���������';

$strQBE = '������ ���� ����������';
$strQBEDel = '��������';
$strQBEIns = '��������';
$strQueryOnDb = '������ SQL ��� ���� <b>%s</b>:';

$strRecords = '��������';
$strReferentialIntegrity = '������� ������������ �������:';
$strReloadFailed = '� ����������� ��� MySQL �������.';
$strReloadMySQL = '����������� ��� MySQL';
$strRememberReload = '�������� ��� ������������ ��� ����������.';
$strRenameTable = '����������� ������ ��';
$strRenameTableOK = '� ������� %s ������������� �� %s';
$strRepairTable = '����������� ������';
$strReplace = '�������������';
$strReplaceTable = '������������� ��������� ������ �� �� ������';
$strReset = '���������';
$strReType = '�������������';
$strRevoke = '��������';
$strRevokeGrant = '�������� �����������';
$strRevokeGrantMessage = '����������� �� �������� ����������� ��� %s';
$strRevokeMessage = '����������� �� �������� ��� %s';
$strRevokePriv = '�������� ����������';
$strRowLength = '������� �������';
$strRows = '��������';
$strRowsFrom = '�������� ��� �������� ���';
$strRowSize = ' ������� �������� ';
$strRowsModeHorizontal = '���������';
$strRowsModeOptions = '�� %s ����� �� ��������� ������������ ��� %s �����';
$strRowsModeVertical = '������';
$strRowsStatistic = '���������� ��������';
$strRunning = '��� ������ ��� %s';
$strRunQuery = '������� ����������';
$strRunSQLQuery = '�������� �������/������� SQL ��� ���� ��������� %s';

$strSave = '����������';
$strSelect = '�������';
$strSelectADb = '�������� �������� ��� ���� ���������';
$strSelectAll = '������� ����';
$strSelectFields = '������� ������ (����������� ���):';
$strSelectNumRows = '���� ������';
$strSend = '��������';
$strServerChoice = '������� ����������';
$strServerVersion = '������ ����������';
$strSetEnumVal = '�� � ����� ��� ������ ����� �enum� � �set�, �������� �������� ��� ����� ��������������� ��� ���� �����������: \'�\',\'�\',\'�\'...<br /> �� ���������� �� �������� ��� ������� ������ ("\") � ���� ���������� ("\'"), �������� �� �� ������� ������ ���� ���� (��� ���������� \'\\\\���\' � \'�\\\'�\').';
$strShow = '��������';
$strShowAll = '�������� ����';
$strShowCols = '�������� ������';
$strShowingRecords = '�������� �������� ';
$strShowPHPInfo = '�������� ����������� PHP';
$strShowTables = '�������� �������';
$strShowThisQuery = ' �������� ��� ���� ����� ��� ������ ';
$strSingly = '(��������)';
$strSize = '�������';
$strSort = '����������';
$strSpaceUsage = '����� �����';
$strSQLQuery = '������ SQL';
$strStartingRecord = '������ �������';
$strStatement = '��������';
$strStrucCSV = '�������� CSV';
$strStrucData = '���� ��� ��������';
$strStrucDrop = '�������� �drop table�';
$strStrucExcelCSV = '����� CSV ��� �������� Ms Excel';
$strStrucOnly = '���� � ����';
$strSubmit = '��������';
$strSuccess = '� SQL ������ ��� ����������� ��������';
$strSum = '������';

$strTable = '������� ';
$strTableComments = '������ ������';
$strTableEmpty = '�� ����� ��� ������ ����� ����!';
$strTableHasBeenDropped = '� ������� %s ��������';
$strTableHasBeenEmptied = '� ������� %s �������';
$strTableHasBeenFlushed = '� ������� %s ������������� ("FLUSH")';
$strTableMaintenance = '��������� ������';
$strTables = '%s �������/�������';
$strTableStructure = '���� ������ ��� ��� ������';
$strTableType = '����� ������';
$strTextAreaLength = ' �������� ��� ������� ���,<br /> ���� �� ����� ������ �� �� ������ �� ��������� ';
$strTheContent = '�� ����������� ��� ������� ��� ����� ���������.';
$strTheContents = '�� ����������� ��� ������� ������������� �� ����������� ��� ����������� ������ ��� ������� �� ���� �������� � �������� ������.';
$strTheTerminator = '� ���������� ���������� ��� ������.';
$strTotal = '��������';
$strType = '�����';

$strUncheckAll = '��������� ����';
$strUnique = '��������';
$strUnselectAll = '��������� ����';
$strUpdatePrivMessage = '�� �������� ��� ������ %s ������������.';
$strUpdateProfile = '��������� ���������:';
$strUpdateProfileMessage = '�� �������� �����������.';
$strUpdateQuery = '��������� ��� �������';
$strUsage = '�����';
$strUseBackquotes = '�������������� ������� ���������� �� �� ������� ��� ������� ��� ��� ������';
$strUser = '�������';
$strUserEmpty = '�� ����� ��� ������ ����� ����!';
$strUserName = '����� ������';
$strUsers = '�������';
$strUseTables = '����� �������';

$strValue = '����';
$strViewDump = '�������� (schema) ��� ������';
$strViewDumpDB = '�������� (schema) ��� �����';

$strWelcome = '����������� ��� %s';
$strWithChecked = '�� �������:';
$strWrongUser = '���������� ����� ������/������� ���������. \'������ ���������.';

$strYes = '���';

$strZip = '�������� �zip�';

// To translate
?>
