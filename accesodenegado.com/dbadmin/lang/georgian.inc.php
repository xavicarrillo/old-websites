<?php
/* $Id: georgian.inc.php,v 1.2 2002/04/19 21:42:39 loic1 Exp $ */

/**
 * Translation by Lasha Altunashvili <lasha_al at hotmail.com>
 *
 * It requires some special font faces that can downloaded at
 * http://www.geo-win.com/
 */

$charset = 'x-user-defined';
$text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)
$left_font_family = '"Geo_Arial", "Geo_Times", sans-serif';
$right_font_family = '"Geo_Arial", "Geo_Times", sans-serif';
$number_thousands_separator = ' ';
$number_decimal_separator = ',';
$byteUnits = array('�����', 'KB', 'MB', 'GB');

$day_of_week = array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');
$month = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%B %d, %Y at %I:%M %p';


$strAccessDenied = '����������';
$strAction = '���������';
$strAddNewField = '����� ����� ��������.';
$strAddPriv = '����� ����������� ��������.';
$strAddPrivMessage = '����� �������� ����� ����������.';
$strAddSearchConditions = '������ ������������ �������� ("where" ������� ����):';
$strAddUser = '����� ������������ ��������.';
$strAddUserMessage = '����� �������� ����� ������������.';
$strAll = '�����';
$strAlterOrderBy = '�������� ������ �����������';
$strAnalyzeTable = '������� �������';
$strAnd = '��';
$strAnIndex = '������� ����������� ����� %s';
$strAny = '����������.';
$strAnyColumn = '���������� �����';
$strAnyDatabase = '���������� ��������� ����';
$strAnyHost = '���������� �����';
$strAnyTable = '���������� ������';
$strAnyUser = '���������� ������������';
$strAPrimaryKey = '��������� �������� ����������� ����� %s';
$strAtBeginningOfTable = '������� ����������';
$strAtEndOfTable = '������� ����������';
$strAttr = '����������';

$strBack = '����';
$strBookmarkLabel = '���';
$strBookmarkView = '������ ������������';
$strBrowse = '�����';

$strCarriage = '�������� ��������: \\r';
$strChange = '������';
$strCheckAll = '������� �����';
$strCheckDbPriv = '��������� ��������� ����� ������������';
$strCheckTable = '������� ���������';
$strColumn = '�����';
$strColumnNames = '������ ��������';
$strConfirm = '����� ������������ ���� ��� ������ ���� ��������?';
$strCopyTableOK = '������ %s ����������� %s �������.';
$strCreate = '������';
$strCreateNewDatabase = '����� ��������� ����� ������';
$strCreateNewTable = '��������� ������ ����� ������� ������ %s';

$strData = '����������';
$strDatabase = '��������� ���� ';
$strDatabases = '������';
$strDataOnly = '������ ����������';
$strDefault = '���� �����������';
$strDelete = '�����';
$strDeleted = '�������� �������';
$strDeleteFailed = '������� ����!';
$strDeleteUserMessage = '����� ������� ������������ %s.';
$strDisplay = '������';
$strDoAQuery = '�������� "�������� ��������� ��������" (���������� �������� ������������: "%")';
$strDocu = '������������';
$strDoYouReally = '������������ ����, ��� ������ ';
$strDrop = '�����';
$strDropDB = '������ ��������� ���� %s';
$strDumpingData = '���������� ��������� ';
$strDynamic = '���������';

$strEdit = '���������';
$strEditPrivileges = '������������� �����������';
$strEffective = 'Effective';
$strEmpty = '�������';
$strEmptyResultSet = 'MySQL-�� ���� ������������ ����������� ���������� 0.';
$strEnd = '���������';
$strError = '�������';
$strExtra = '����';

$strField = '����';
$strFields = '������';
$strFixed = '����������';
$strFormat = '�������';
$strFunction = '�������';

$strGenTime = '����������� ���';
$strGo = '���������';

$strHasBeenAltered = '��������.';
$strHasBeenCreated = '�������.';
$strHome = '���������';
$strHost = '�����';
$strHostEmpty = '������ ������ ��������!';

$strIfYouWish = '�� ����� ������ ���������� ������ ����������� ���������, �������� ��������� ���������� ������� �����������.';
$strIndex = '�����������';
$strIndexes = '���������';
$strInsert = '��������';
$strInsertAsNewRow = '�������� ���� ���������';
$strInsertNewRow = '������� ����� ��������';

$strKeyname = 'Keyname';
$strKill = 'Kill';

$strLength = '������';
$strLineFeed = '����� ����: \\n';
$strLines = '����������(����������) ';
$strLocationTextfile = '�������� �������� ������ ����������';

$strModifications = '���������� ���������';
$strMySQLSaid = 'MySQL-�� ����: ';
$strMySQLShowProcess = '���������� �������';
$strMySQLShowStatus = 'MySQL ��������� ����� ������������ �������';
$strMySQLShowVars = 'MySQL ��������� ����� ��������� ��������';

$strName = '������';
$strNext = '�������';
$strNo = '���';
$strNoPassword = '�� ���� ������';
$strNoPrivileges = '�� ���� ������������';
$strNoTablesFound = '��������� ���� �� ������� ��������.';
$strNoUsersFound = '������������ �� ���� �������.';
$strNull = '����';

$strOftenQuotation = '������� ������������� ���������� �� ����������� OPTIONALLY ������� ��� ������ char �� varchar ����� ������� ������������� ���������� ��������� �����������.';
$strOptimizeTable = '������� �����������';
$strOptionalControls = '��������������. ������������ ����� ���� ����� �������� �� ��������� ���������� ����������.';
$strOr = '��';

$strPasswordEmpty = '������ ��������!';
$strPasswordNotSame = '�������� ������������!';
$strPHPVersion = 'PHP ������';
$strPos1 = '���������';
$strPrevious = '����';
$strPrimary = '���������';
$strPrimaryKey = '��������� ����';
$strPrintView = '�����������';
$strProperties = '���������';

$strQBE = '�������� ��������� ��������';

$strRecords = '����������';
$strReloadFailed = 'MySQL reload failed.';
$strReloadMySQL = 'MySQL-�� �����������';
$strRenameTable = '������� ������';
$strRepairTable = '������� �������';
$strReplace = '������';
$strReplaceTable = '������� ������ ����������� ������� ��������';
$strReset = '������� �������������';
$strRowLength = '��������� ������ ';
$strRowSize = ' ��������� ���� ';
$strRows = '����������';
$strRowsFrom = '��������. ������� ��������:';
$strRunning = '���������� ������ %s';
$strRunSQLQuery = '�������� SQL ��������/���������� ��������� ������ %s';

$strSave = '�������';
$strSelect = '��������';
$strSelectFields = '������� ������ (������� ���� �����):';
$strSelectNumRows = '����������';
$strServerVersion = '�������� ������';
$strShow = '���������';
$strShowingRecords = '���������� ���������� ';
$strSize = '����';
$strSpaceUsage = '������������ ������';
$strSQLQuery = 'SQL-��������';
$strStatement = '������';
$strStrucCSV = 'CSV ����������';
$strStrucData = '��������� �� ����������';
$strStrucDrop = '��������� ����� �� ��������';
$strStrucOnly = '������ ���������';
$strSubmit = '��������';
$strSuccess = '������ SQL �������� ���������� ��������';
$strSum = '����';

$strTable = '������ ';
$strTableComments = '��������� �������';
$strTableEmpty = '������� ������ ��� ���� ����������!';
$strTableMaintenance = '������� �����������';
$strTableStructure = '������� ���������. ������:';
$strTableType = '������� ����';
$strTextAreaLength = ' ���� ������� ����,<br /> �� ���� �������� �� ���� ������������� ';
$strTheContent = '������ ���������� ��������� ����.';
$strTheContents = '������� �� ����������, ��������� ������� �������� ��������� �� ��������� �������� ��������� ������ �����������.';
$strTheTerminator = '������� �����������.';
$strTotal = '��� �������';
$strType = '����';

$strUncheckAll = 'Uncheck All';
$strUnique = '���������';
$strUsage = '��������';
$strUser = '������������';
$strUserEmpty = '������������ ������ ��������!';
$strUsers = '�������������';

$strValue = '�����������';
$strViewDump = '�������� �����';
$strViewDumpDB = '��������� ����� �����';

$strWelcome = '������ ���� ������ ���������� %s';
$strWrongUser = '�������� username/password. �������� ������������';

$strYes = '��';


// To translate
$strAddDeleteColumn = 'Add/Delete Field Columns';
$strAddDeleteRow = 'Add/Delete Criteria Row';
$strAffectedRows = 'Affected rows:';
$strAfter = 'After %s';
$strAfterInsertBack = 'Go back to previous page';
$strAfterInsertNewInsert = 'Insert another new row';
$strAscending = 'Ascending';
$strBinary = 'Binary';
$strBinaryDoNotEdit = 'Binary - do not edit';
$strBookmarkDeleted = 'The bookmark has been deleted.';
$strBookmarkQuery = 'Bookmarked SQL-query';
$strBookmarkThis = 'Bookmark this SQL-query';
$strBzip = '"bzipped"';
$strCantLoadMySQL = 'cannot load MySQL extension,<br />please check PHP Configuration.';
$strChangePassword = 'Change password';
$strCompleteInserts = 'Complete inserts';
$strCookiesRequired = 'Cookies must be enabled past this point.';
$strCopyTable = 'Copy table to (database<b>.</b>table):';
$strCriteria = 'Criteria';
$strDatabaseHasBeenDropped = 'Database %s has been dropped.';
$strDatabasesStats = 'Databases statistics';
$strDatabaseWildcard = 'Database (wildcards allowed):';
$strDeletedRows = 'Deleted rows:';
$strDescending = 'Descending';
$strDisplayOrder = 'Display order:';
$strDropTable = 'Drop table';
$strEnglishPrivileges = ' Note: MySQL privilege names are expressed in English ';
$strExtendedInserts = 'Extended inserts';
$strFieldHasBeenDropped = 'Field %s has been dropped';
$strFieldsEmpty = ' The field count is empty! ';
$strFieldsEnclosedBy = 'Fields enclosed by';
$strFieldsEscapedBy = 'Fields escaped by';
$strFieldsTerminatedBy = 'Fields terminated by';
$strFlushTable = 'Flush the table ("FLUSH")';
$strFormEmpty = 'Missing value in the form !';
$strFullText = 'Full Texts';
$strGrants = 'Grants';
$strGzip = '"gzipped"';
$strHomepageOfficial = 'Official phpMyAdmin Homepage';
$strHomepageSourceforge = 'Sourceforge phpMyAdmin Download Page';
$strIgnore = 'Ignore';
$strInsertedRows = 'Inserted rows:';
$strInsertTextfiles = 'Insert data from a textfile into table';
$strInstructions = 'Instructions';
$strInUse = 'in use';
$strInvalidName = '"%s" is a reserved word, you can\'t use it as a database/table/field name.';
$strKeepPass = 'Do not change the password';
$strLengthSet = 'Length/Values*';
$strLimitNumRows = 'Number of rows per page';
$strLinesTerminatedBy = 'Lines terminated by';
$strLogin = 'Login';
$strLogout = 'Log out';
$strLogPassword = 'Password:';
$strLogUsername = 'Username:';
$strModify = 'Modify';
$strMoveTable = 'Move table to (database<b>.</b>table):';
$strMoveTableOK = 'Table %s has been moved to %s.';
$strMySQLReloaded = 'MySQL reloaded.';
$strMySQLServerProcess = 'MySQL %pma_s1% running on %pma_s2% as %pma_s3%';
$strNbRecords = 'Number of rows';
$strNoDatabases = 'No databases';
$strNoDropDatabases = '"DROP DATABASE" statements are disabled.';
$strNoFrames = 'phpMyAdmin is more friendly with a <b>frames-capable</b> browser.';
$strNoModification = 'No change';
$strNone = 'None';
$strNoQuery = 'No SQL query!';
$strNoRights = 'You don\'t have enough rights to be here right now!';
$strNotNumber = 'This is not a number!';
$strNotValidNumber = ' is not a valid row number!';
$strOptionally = 'OPTIONALLY';
$strOverhead = 'Overhead';
$strPartialText = 'Partial Texts';
$strPassword = 'Password';
$strPmaDocumentation = 'phpMyAdmin documentation';
$strPmaUriError = 'The <tt>$cfgPmaAbsoluteUri</tt> directive MUST be set in your configuration file!';
$strPrivileges = 'Privileges';
$strQBEDel = 'Del';
$strQBEIns = 'Ins';
$strQueryOnDb = 'SQL-query on database <b>%s</b>:';
$strReferentialIntegrity = 'Check referential integrity:';
$strRememberReload = 'Remember reload the server.';
$strRenameTableOK = 'Table %s has been renamed to %s';
$strReType = 'Re-type';
$strRevoke = 'Revoke';
$strRevokeGrant = 'Revoke Grant';
$strRevokeGrantMessage = 'You have revoked the Grant privilege for %s';
$strRevokeMessage = 'You have revoked the privileges for %s';
$strRevokePriv = 'Revoke Privileges';
$strRowsModeHorizontal = 'horizontal';
$strRowsModeOptions = 'in %s mode and repeat headers after %s cells';
$strRowsModeVertical = 'vertical';
$strRowsStatistic = 'Row Statistic';
$strRunQuery = 'Submit Query';
$strSelectADb = 'Please select a database';
$strSelectAll = 'Select All';
$strSend = 'Save as file';
$strServerChoice = 'Server Choice';
$strSetEnumVal = 'If field type is "enum" or "set", please enter the values using this format: \'a\',\'b\',\'c\'...<br />If you ever need to put a backslash ("\") or a single quote ("\'") amongst those values, backslashes it (for example \'\\\\xyz\' or \'a\\\'b\').';
$strShowAll = 'Show all';
$strShowCols = 'Show columns';
$strShowPHPInfo = 'Show PHP information';
$strShowTables = 'Show tables';
$strShowThisQuery = ' Show this query here again ';
$strSingly = '(singly)';
$strSort = 'Sort';
$strStartingRecord = 'Starting row';
$strStrucExcelCSV = 'CSV for Ms Excel data';
$strTableHasBeenDropped = 'Table %s has been dropped';
$strTableHasBeenEmptied = 'Table %s has been emptied';
$strTableHasBeenFlushed = 'Table %s has been flushed';
$strTables = '%s table(s)';
$strUnselectAll = 'Unselect All';
$strUpdatePrivMessage = 'You have updated the privileges for %s.';
$strUpdateProfile = 'Update profile:';
$strUpdateProfileMessage = 'The profile has been updated.';
$strUpdateQuery = 'Update Query';
$strUseBackquotes = 'Enclose table and field names with backquotes';
$strUserName = 'User name';
$strUseTables = 'Use Tables';
$strWithChecked = 'With selected:';
$strZip = '"zipped"';

// For indexes
$strAddToIndex = 'Add to index &nbsp;%s&nbsp;column(s)';
$strCantRenameIdxToPrimary = 'Can\'t rename index to PRIMARY!';
$strCardinality = 'Cardinality';
$strCreateIndex = 'Create an index on&nbsp;%s&nbsp;columns';
$strCreateIndexTopic = 'Create a new index';
$strIdxFulltext = 'Fulltext';
$strIndexHasBeenDropped = 'Index %s has been dropped';
$strIndexName = 'Index name&nbsp;:';
$strIndexType = 'Index type&nbsp;:';
$strModifyIndexTopic = 'Modify an index';
$strNoIndex = 'No index defined!';
$strNoIndexPartsDefined = 'No index parts defined!';
$strPrimaryKeyHasBeenDropped = 'The primary key has been dropped';
$strPrimaryKeyName = 'The name of the primary key must be... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>must</b> be the name of and <b>only of</b> a primary key!)';
?>
