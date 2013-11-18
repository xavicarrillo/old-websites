<?php
/* $Id: korean.inc.php,v 1.96 2002/04/19 10:36:14 loic1 Exp $ */
/* Translated by WooSuhan <kjh@unews.co.kr> */

$charset = 'ks_c_5601-1987';
$text_dir = 'ltr';
$left_font_family = '"����", sans-serif';
$right_font_family = '"����", sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
$byteUnits = array('����Ʈ', 'KB', 'MB', 'GB');

$day_of_week = array('��', '��', 'ȭ', '��', '��', '��', '��');
$month = array('�ؿ�����', '�û���', '��������', '�ٻ���', 'Ǫ����', '������', '�߿������', 'Ÿ������', '���Ŵ�', '�ϴÿ���', '��ƴ��', '�ŵ��');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%Y�� %B %d�� %p %I:%M ';


$strAccessDenied = '������ �źεǾ����ϴ�.';
$strAction = '����';
$strAddDeleteColumn = '�ʵ� Į�� �߰�/����';
$strAddDeleteRow = 'Criteria �� �߰�/����';
$strAddNewField = '�ʵ� �߰��ϱ�';
$strAddPriv = '���� �߰��ϱ�';
$strAddPrivMessage = '�� ������ �߰��߽��ϴ�';
$strAddSearchConditions = '�˻� ���� �߰� ("where" ������ ����):';
$strAddToIndex = '%sĮ���� �ε��� �߰�';
$strAddUser = '�� ����� �߰�';
$strAddUserMessage = '�� ����ڸ� �߰��߽��ϴ�.';
$strAffectedRows = '����� ��:';
$strAfter = '%s ������';
$strAfterInsertBack = '�ǵ��ư���';
$strAfterInsertNewInsert = '�� ���ڵ�(��) �����ϱ�';
$strAll = 'All'; // To translate
$strAlterOrderBy = '���� ������� ���̺� ����(����)';
$strAnalyzeTable = '���̺� �м�';
$strAnd = '�׸���'; 
$strAnIndex = '%s �� �ε����� �ɷȽ��ϴ�';
$strAny = 'Any'; // To translate
$strAnyColumn = '�ƹ� Į��';
$strAnyDatabase = '�ƹ� �����ͺ��̽�';
$strAnyHost = '�ƹ� ȣ��Ʈ';
$strAnyTable = '�ƹ� ���̺�';
$strAnyUser = '�ƹ� �����';
$strAPrimaryKey = ' %s�� �⺻(�����̸Ӹ�)Ű�� �߰��Ǿ����ϴ�';
$strAscending = '��������'; 
$strAtBeginningOfTable = '���̺��� ó��';
$strAtEndOfTable = '���̺��� ������';
$strAttr = '����';

$strBack = '�ڷ�';
$strBinary = '���̳ʸ�';
$strBinaryDoNotEdit = ' ���̳ʸ� - ���� ���� ';
$strBookmarkDeleted = '�ϸ�ũ�� �����߽��ϴ�.';
$strBookmarkLabel = 'Label'; // To translate
$strBookmarkQuery = '�ϸ�ũ�� SQL ����';
$strBookmarkThis = '�� SQL ������ �ϸ�ũ��';
$strBookmarkView = 'View only'; // To translate
$strBrowse = '����';
$strBzip = '"bz ����"';

$strCantLoadMySQL = 'MySQL Ȯ������ �ҷ��� �� �����ϴ�.<br />PHP ������ �˻��Ͻʽÿ�..';
$strCantRenameIdxToPrimary = '�ε��� �̸��� �⺻(�����̸Ӹ�)Ű�� �ٲ� �� �����ϴ�!';
$strCardinality = 'Cardinality'; // To translate
$strCarriage = 'ĳ���� ����: \\r';
$strChange = '����';
$strChangePassword = '��ȣ ����';
$strCheckAll = '��� üũ';
$strCheckDbPriv = '�����ͺ��̽� ���� �˻�';
$strCheckTable = '���̺� �˻�';
$strColumn = 'Į��';
$strColumnNames = 'Į��(��) �̸�';
$strCompleteInserts = '������ INSERT�� �ۼ�';
$strConfirm = '������ �� �۾��� �Ͻðڽ��ϱ�?';
$strCookiesRequired = '��Ű ����� �����ؾ� �մϴ� past this point.'; // To translate
$strCopyTable = '���̺� �����ϱ� (�����ͺ��̽���<b>.</b>���̺��):';
$strCopyTableOK = '%s ���̺��� %s ���� ����Ǿ����ϴ�.';
$strCreate = ' ����� ';
$strCreateIndex = '%s Į���� �ε��� ����� ';
$strCreateIndexTopic = '�� �ε��� �����';
$strCreateNewDatabase = 'Create new database'; // To translate
$strCreateNewTable = '�����ͺ��̽� %s�� ���ο� ���̺��� ����ϴ�.';
$strCriteria = 'Criteria'; // To translate

$strData = '������';
$strDatabase = '�����ͺ��̽� ';
$strDatabaseHasBeenDropped = '�����ͺ��̽� %s �� �����߽��ϴ�.';
$strDatabases = '�����ͺ��̽� ';
$strDatabasesStats = '�����ͺ��̽� ��뷮 ���';
$strDatabaseWildcard = '�����ͺ��̽� (���ϵ�ī�幮�� ��� ����):';
$strDataOnly = '�����͸�';
$strDefault = '�⺻��';
$strDelete = '����';
$strDeleted = '������ ���� ���� �Ͽ����ϴ�.';
$strDeletedRows = '������ ��:';
$strDeleteFailed = 'Deleted Failed!'; // To translate
$strDeleteUserMessage = '����� %s �� �����߽��ϴ�.';
$strDescending = '��������(����)';
$strDisplay = '����';
$strDisplayOrder = '��� ����:';
$strDoAQuery = '�������� ������ ����� (���ϵ�ī��: "%")';
$strDocu = '����';
$strDoYouReally = '������ ������ �����Ͻðڽ��ϱ�? ';
$strDrop = '����';
$strDropDB = '�����ͺ��̽� %s ����';
$strDropTable = '���̺� ����';
$strDumpingData = '���̺��� ���� ������';
$strDynamic = '����(���̳���)';

$strEdit = '����';
$strEditPrivileges = '���� ����';
$strEffective = '������';
$strEmpty = '����';
$strEmptyResultSet = '������� �����ϴ�. (�� �� ����.)';
$strEnd = '������';
$strEnglishPrivileges = ' ����: MySQL ���� �̸��� ����� ǥ��Ǿ�� �մϴ�. ';
$strError = '����';
$strExtendedInserts = 'Ȯ��� inserts';
$strExtra = '�߰�';

$strField = '�ʵ�';
$strFieldHasBeenDropped = '�ʵ� %s �� �����߽��ϴ�';
$strFields = '�ʵ�';
$strFieldsEmpty = ' �ʵ� ������ �����ϴ�! ';
$strFieldsEnclosedBy = '�ʵ� ���α�';
$strFieldsEscapedBy = '�ʵ� Ư������(escape) ó��';
$strFieldsTerminatedBy = '�ʵ� ������ ';
$strFixed = 'fixed'; // To translate
$strFlushTable = '���̺� �ݱ�("FLUSH")';
$strFormat = 'Format'; // To translate
$strFormEmpty = 'Missing value in the form !'; // To translate
$strFullText = 'Full Texts'; // To translate
$strFunction = '�Լ�';

$strGenTime = 'ó���� �ð�';
$strGo = '����';
$strGrants = '���α���';
$strGzip = 'gz ����';

$strHasBeenAltered = '��(��) �����Ͽ����ϴ�.';
$strHasBeenCreated = '��(��) �ۼ��Ͽ����ϴ�.';
$strHome = '����������';
$strHomepageOfficial = 'phpMyAdmin ���� Ȩ';
$strHomepageSourceforge = '�ҽ����� phpMyAdmin �ٿ�ε�';
$strHost = 'ȣ��Ʈ';
$strHostEmpty = 'ȣ��Ʈ���� �����ϴ�!';

$strIdxFulltext = 'Fulltext'; // To translate
$strIfYouWish = '���̺� ��(�ݷ�)�� �����͸� �߰��� ���� �ʵ� ����Ʈ�� �޸��� ������ �ֽʽÿ�. ';
$strIgnore = 'Ignore';
$strIndex = '�ε���';
$strIndexes = '�ε���';
$strIndexHasBeenDropped = '�ε��� %s �� �����߽��ϴ�';
$strIndexName = '�ε��� �̸�:';
$strIndexType = '�ε��� ����:';
$strInsert = '�߰�';
$strInsertAsNewRow = '�� ���� �����մϴ�';
$strInsertedRows = '���Ե� ��:';
$strInsertNewRow = '�� ���� ����';
$strInsertTextfiles = '�ؽ�Ʈ������ �о ���̺� ������ ����';
$strInstructions = '����';
$strInUse = '�����';
$strInvalidName = '"%s" �� ����� �ܾ��̹Ƿ� �����ͺ��̽�, ���̺�, �ʵ�� ����� �� �����ϴ�.';

$strKeepPass = '��ȣ�� �������� ����';
$strKeyname = 'Ű �̸�';
$strKill = 'Kill';

$strLength = '����';
$strLengthSet = '����/��*';
$strLimitNumRows = '�������� ���ڵ� ��';
$strLineFeed = '�ٹٲ� ����: \\n';
$strLines = '��(��)';
$strLinesTerminatedBy = '��(��) ������';
$strLocationTextfile = 'SQL �ؽ�Ʈ������ ��ġ';
$strLogin = '�α���';
$strLogout = '�α׾ƿ�';
$strLogPassword = '��ȣ:';
$strLogUsername = '����ڸ�:';

$strModifications = '������ ������ ����Ǿ����ϴ�.';
$strModify = '����';
$strModifyIndexTopic = '�ε��� ����';
$strMoveTable = '���̺� �ű�� (�����ͺ��̽���<b>.</b>���̺��):';
$strMoveTableOK = '���̺� %s �� %s �� �Ű���ϴ�.';
$strMySQLReloaded = 'MySQL�� ��õ��߽��ϴ�.';
$strMySQLSaid = 'MySQL �޽���: ';
$strMySQLServerProcess = '%pma_s2% (MySQL %pma_s1%)�� %pma_s3% �������� ���Խ��ϴ�.';
$strMySQLShowProcess = 'MySQL ���μ��� ����';
$strMySQLShowStatus = 'MySQL ��Ÿ�� ���� ����';
$strMySQLShowVars = 'MySQL �ý��� ȯ�溯�� ����';

$strName = '�̸�';
$strNbRecords = '��(���ڵ�) ����';
$strNext = '����';
$strNo = ' �ƴϿ� ';
$strNoDatabases = 'No databases'; // To translate
$strNoDropDatabases = '"DROP DATABASE" ������ ������� �ʽ��ϴ�.';
$strNoFrames = 'phpMyAdmin �� <b>�������� �� �� �ִ�</b> ���������� �� ���Դϴ�.';
$strNoIndex = '�ε����� �������� �ʾҽ��ϴ�!';
$strNoIndexPartsDefined = 'No index parts defined!'; // To translate
$strNoModification = '��ȭ ����';
$strNone = 'None';
$strNoPassword = '��ȣ ����';
$strNoPrivileges = '���� ����';
$strNoQuery = 'SQL ���� ����!';
$strNoRights = '��� �����̾��? ���� ���� ���� ������ �����ϴ�!';
$strNoTablesFound = '�����ͺ��̽��� ���̺��� �����ϴ�.';
$strNotNumber = '�� ����(��ȣ)�� �ƴմϴ�!';
$strNotValidNumber = '�� �ùٸ� �� ��ȣ�� �ƴմϴ�!';
$strNoUsersFound = '����ڰ� �����ϴ�.';
$strNull = 'Null'; // To translate

$strOftenQuotation = 'Often quotation marks. �ɼ�(OPTIONALLY)�� char �� varchar �ʵ尡 "enclosed by"-character�� �����ٴ� ���� ���մϴ�.';  // To translate
$strOptimizeTable = '���̺� ����ȭ';
$strOptionalControls = 'Ư������ �б�/���� �ɼ�';
$strOptionally = '�ɼ��Դϴ�.';
$strOr = '�Ǵ�';
$strOverhead = '�δ�';

$strPartialText = 'Partial Texts'; // To translate
$strPassword = '��ȣ';
$strPasswordEmpty = '��ȣ�� ������ϴ�!';
$strPasswordNotSame = '��ȣ�� �������� �ʽ��ϴ�!';
$strPHPVersion = 'PHP ����';
$strPmaDocumentation = 'phpMyAdmin ����';
$strPmaUriError = 'ȯ�漳�� ���Ͽ��� <tt>$cfgPmaAbsoluteUri</tt> �ּҸ� �����Ͻʽÿ�!';
$strPos1 = 'ó��';
$strPrevious = '����';
$strPrimary = '�⺻';
$strPrimaryKey = '�⺻(�����̸Ӹ�) Ű';
$strPrimaryKeyHasBeenDropped = '�⺻(�����̸Ӹ�)Ű�� �����߽��ϴ�';
$strPrimaryKeyName = '�⺻(�����̸Ӹ�)Ű�� �̸��� �ݵ�� PRIMARY���� �մϴ�!';
$strPrimaryKeyWarning = '("PRIMARY"�� <b>�ݵ��</b> �⺻(�����̸Ӹ�)Ű�� <b>������</b> �̸��̾�� �մϴ�!)';
$strPrintView = '�μ�� ����';
$strPrivileges = '����';
$strProperties = '�Ӽ�';

$strQBE = '��(��)���� ���� ����';
$strQBEDel = '����';
$strQBEIns = '����';
$strQueryOnDb = '�����ͺ��̽� <b>%s</b>�� SQL ����:';

$strRecords = '���ڵ��';
$strReferentialIntegrity = 'referential integrity �˻�:';
$strReloadFailed = 'MySQL ��õ��� �����Ͽ����ϴ�.';
$strReloadMySQL = 'MySQL ��õ�';
$strRememberReload = '������ ��õ��ϴ� ���� ����������.';
$strRenameTable = '���̺� �̸� �����ϱ�';
$strRenameTableOK = '���̺� %s��(��) %s(��)�� �����Ͽ����ϴ�.';
$strRepairTable = '���̺� ����';
$strReplace = '��ġ(Replace)';
$strReplaceTable = '���Ϸ� ���̺� ��ġ�ϱ�';
$strReset = '����Ʈ';
$strReType = '���Է�';
$strRevoke = '����';
$strRevokeGrant = '���� ����';
$strRevokeGrantMessage = '%s�� ���� ������ �����߽��ϴ�.';
$strRevokeMessage = '%s�� ������ �����߽��ϴ�.';
$strRevokePriv = '���� ����';
$strRowLength = '�� ����';
$strRows = '��';
$strRowsFrom = '��. ����(��)��ġ';
$strRowSize = ' Row size ';
$strRowsModeHorizontal = '����(����)';
$strRowsModeOptions = ' %s ���� (%s ĭ�� ������ ��� �ݺ�)';
$strRowsModeVertical = '����(����)';
$strRowsStatistic = '�� ���';
$strRunning = '�Դϴ�. (%s)';
$strRunQuery = '���� ����'; 
$strRunSQLQuery = '�����ͺ��̽� %s�� SQL ������ ����';

$strSave = '����';
$strSelect = '����';
$strSelectADb = '�����ͺ��̽��� �����ϼ���';
$strSelectAll = '��� ����';
$strSelectFields = '�ʵ� ���� (�ϳ� �̻�):';
$strSelectNumRows = '����(in query)';
$strSend = '���Ϸ� ����';
$strServerChoice = '���� ����';
$strServerVersion = '���� ����';
$strSetEnumVal = '�ʵ� ������ "enum"�̳� "set"�̸�, ������ ���� �������� ���� �Է��Ͻʽÿ�: \'a\',\'b\',\'c\'...<br />�� ���� ��������("\")�� ��������ǥ("\'")�� �־�� �Ѵٸ�, �������ø� ����Ͻʽÿ�. (��: \'\\\\xyz\' �Ǵ� \'a\\\'b\').';
$strShow = '����';
$strShowAll = '��� ����'; 
$strShowCols = 'Į��(��) ����';
$strShowingRecords = '���ڵ�(��) ����';
$strShowPHPInfo = 'PHP ���� ����';
$strShowTables = '���̺� ����';
$strShowThisQuery = ' �� ������ �ٽ� ������ ';
$strSingly = '(singly)';
$strSize = 'ũ��';
$strSort = 'Sort'; // To translate
$strSpaceUsage = '���� ��뷮';
$strSQLQuery = 'SQL ����';
$strStartingRecord = '���� ��ġ(��)';
$strStatement = '��';
$strStrucCSV = 'CSV ������';
$strStrucData = '������ ������';
$strStrucDrop = '\'DROP TABLE\'�� �߰�';
$strStrucExcelCSV = 'MS���� CSV ������';
$strStrucOnly = '������';
$strSubmit = 'Ȯ��';
$strSuccess = 'SQL ������ �ٸ��� ����Ǿ����ϴ�.';
$strSum = '��';

$strTable = '���̺� ';
$strTableComments = '���̺� ����';
$strTableEmpty = '���̺���� �����ϴ�!';
$strTableHasBeenDropped = '���̺� %s �� �����߽��ϴ�.';
$strTableHasBeenEmptied = '���̺� %s �� ������ϴ�';
$strTableHasBeenFlushed = '���̺� %s �� �ݾҽ��ϴ�(flushed)';
$strTableMaintenance = '���̺� ��������';
$strTables = '���̺� %s ��';
$strTableStructure = '���̺� ����';
$strTableType = '���̺� ����';
$strTextAreaLength = ' �ʵ��� ���� ������,<br />�� �ʵ带 ������ �� �����ϴ� ';
$strTheContent = '���� ������ �����Ͽ����ϴ�.';
$strTheContents = '���� ������ ������ ���̺��� �����̸Ӹ� Ȥ�� ������ Ű�� ��ġ�ϴ� ���� ��ġ(����)��Ű�ڽ��ϴ�.';
$strTheTerminator = '�ʵ� ���� ��ȣ.';
$strTotal = '�հ�';
$strType = '����';

$strUncheckAll = '��� üũ����';
$strUnique = '������';
$strUnselectAll = '��� ���þ���';
$strUpdatePrivMessage = '%s �� ������ ������Ʈ�߽��ϴ�.';
$strUpdateProfile = '�������� ������Ʈ:';
$strUpdateProfileMessage = '���������� ������Ʈ�߽��ϴ�.';
$strUpdateQuery = '���� ������Ʈ';
$strUsage = '����(��)';
$strUseBackquotes = '���̺�, �ʵ�� ������(`) ���';
$strUser = '�����';
$strUserEmpty = '����ڸ��� �����ϴ�!';
$strUserName = '����ڸ�';
$strUsers = '����ڵ�';
$strUseTables = 'Use Tables';

$strValue = '��';
$strViewDump = '���̺��� ����(��Ű��) ������ ����';
$strViewDumpDB = '�����ͺ��̽��� ����(��Ű��) ������ ����';

$strWelcome = '%s�� ���̽��ϴ�';
$strWithChecked = '������ ����:';
$strWrongUser = '����ڸ�/��ȣ�� Ʋ�Ƚ��ϴ�. ������ �źεǾ����ϴ�.';

$strYes = ' �� ';

$strZip = 'zip ����';

// To translate
?>
