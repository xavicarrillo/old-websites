<?php
/* $Id: korean.inc.php,v 1.96 2002/04/19 10:36:14 loic1 Exp $ */
/* Translated by WooSuhan <kjh@unews.co.kr> */

$charset = 'ks_c_5601-1987';
$text_dir = 'ltr';
$left_font_family = '"굴림", sans-serif';
$right_font_family = '"굴림", sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
$byteUnits = array('바이트', 'KB', 'MB', 'GB');

$day_of_week = array('일', '월', '화', '수', '목', '금', '토');
$month = array('해오름달', '시샘달', '물오름달', '잎새달', '푸른달', '누리달', '견우직녀달', '타오름달', '열매달', '하늘연달', '미틈달', '매듭달');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%Y년 %B %d일 %p %I:%M ';


$strAccessDenied = '접근이 거부되었습니다.';
$strAction = '실행';
$strAddDeleteColumn = '필드 칼럼 추가/삭제';
$strAddDeleteRow = 'Criteria 열 추가/삭제';
$strAddNewField = '필드 추가하기';
$strAddPriv = '권한 추가하기';
$strAddPrivMessage = '새 권한을 추가했습니다';
$strAddSearchConditions = '검색 조건 추가 ("where" 조건의 내용):';
$strAddToIndex = '%s칼럼에 인덱스 추가';
$strAddUser = '새 사용자 추가';
$strAddUserMessage = '새 사용자를 추가했습니다.';
$strAffectedRows = '적용된 열:';
$strAfter = '%s 다음에';
$strAfterInsertBack = '되돌아가기';
$strAfterInsertNewInsert = '새 레코드(열) 삽입하기';
$strAll = 'All'; // To translate
$strAlterOrderBy = '다음 순서대로 테이블 정렬(변경)';
$strAnalyzeTable = '테이블 분석';
$strAnd = '그리고'; 
$strAnIndex = '%s 에 인덱스가 걸렸습니다';
$strAny = 'Any'; // To translate
$strAnyColumn = '아무 칼럼';
$strAnyDatabase = '아무 데이터베이스';
$strAnyHost = '아무 호스트';
$strAnyTable = '아무 테이블';
$strAnyUser = '아무 사용자';
$strAPrimaryKey = ' %s에 기본(프라이머리)키가 추가되었습니다';
$strAscending = '오름차순'; 
$strAtBeginningOfTable = '테이블의 처음';
$strAtEndOfTable = '테이블의 마지막';
$strAttr = '보기';

$strBack = '뒤로';
$strBinary = '바이너리';
$strBinaryDoNotEdit = ' 바이너리 - 편집 금지 ';
$strBookmarkDeleted = '북마크를 제거했습니다.';
$strBookmarkLabel = 'Label'; // To translate
$strBookmarkQuery = '북마크된 SQL 쿼리';
$strBookmarkThis = '이 SQL 쿼리를 북마크함';
$strBookmarkView = 'View only'; // To translate
$strBrowse = '보기';
$strBzip = '"bz 압축"';

$strCantLoadMySQL = 'MySQL 확장모듈을 불러올 수 없습니다.<br />PHP 설정을 검사하십시오..';
$strCantRenameIdxToPrimary = '인덱스 이름을 기본(프라이머리)키로 바꿀 수 없습니다!';
$strCardinality = 'Cardinality'; // To translate
$strCarriage = '캐리지 리턴: \\r';
$strChange = '변경';
$strChangePassword = '암호 변경';
$strCheckAll = '모두 체크';
$strCheckDbPriv = '데이터베이스 권한 검사';
$strCheckTable = '테이블 검사';
$strColumn = '칼럼';
$strColumnNames = '칼럼(행) 이름';
$strCompleteInserts = '완전한 INSERT문 작성';
$strConfirm = '정말로 이 작업을 하시겠습니까?';
$strCookiesRequired = '쿠키 사용이 가능해야 합니다 past this point.'; // To translate
$strCopyTable = '테이블 복사하기 (데이터베이스명<b>.</b>테이블명):';
$strCopyTableOK = '%s 테이블이 %s 으로 복사되었습니다.';
$strCreate = ' 만들기 ';
$strCreateIndex = '%s 칼럼에 인덱스 만들기 ';
$strCreateIndexTopic = '새 인덱스 만들기';
$strCreateNewDatabase = 'Create new database'; // To translate
$strCreateNewTable = '데이터베이스 %s에 새로운 테이블을 만듭니다.';
$strCriteria = 'Criteria'; // To translate

$strData = '데이터';
$strDatabase = '데이터베이스 ';
$strDatabaseHasBeenDropped = '데이터베이스 %s 를 제거했습니다.';
$strDatabases = '데이터베이스 ';
$strDatabasesStats = '데이터베이스 사용량 통계';
$strDatabaseWildcard = '데이터베이스 (와일드카드문자 사용 가능):';
$strDataOnly = '데이터만';
$strDefault = '기본값';
$strDelete = '삭제';
$strDeleted = '선택한 열을 삭제 하였습니다.';
$strDeletedRows = '지워진 열:';
$strDeleteFailed = 'Deleted Failed!'; // To translate
$strDeleteUserMessage = '사용자 %s 를 삭제했습니다.';
$strDescending = '내림차순(역순)';
$strDisplay = '보기';
$strDisplayOrder = '출력 순서:';
$strDoAQuery = '다음으로 쿼리를 만들기 (와일드카드: "%")';
$strDocu = '도움말';
$strDoYouReally = '정말로 다음을 실행하시겠습니까? ';
$strDrop = '삭제';
$strDropDB = '데이터베이스 %s 제거';
$strDropTable = '테이블 제거';
$strDumpingData = '테이블의 덤프 데이터';
$strDynamic = '동적(다이내믹)';

$strEdit = '수정';
$strEditPrivileges = '권한 수정';
$strEffective = '실제량';
$strEmpty = '비우기';
$strEmptyResultSet = '결과값이 없습니다. (빈 열 리턴.)';
$strEnd = '마지막';
$strEnglishPrivileges = ' 주의: MySQL 권한 이름은 영어로 표기되어야 합니다. ';
$strError = '오류';
$strExtendedInserts = '확장된 inserts';
$strExtra = '추가';

$strField = '필드';
$strFieldHasBeenDropped = '필드 %s 를 제거했습니다';
$strFields = '필드';
$strFieldsEmpty = ' 필드 갯수가 없습니다! ';
$strFieldsEnclosedBy = '필드 감싸기';
$strFieldsEscapedBy = '필드 특수문자(escape) 처리';
$strFieldsTerminatedBy = '필드 구분자 ';
$strFixed = 'fixed'; // To translate
$strFlushTable = '테이블 닫기("FLUSH")';
$strFormat = 'Format'; // To translate
$strFormEmpty = 'Missing value in the form !'; // To translate
$strFullText = 'Full Texts'; // To translate
$strFunction = '함수';

$strGenTime = '처리한 시간';
$strGo = '실행';
$strGrants = '승인권한';
$strGzip = 'gz 압축';

$strHasBeenAltered = '을(를) 변경하였습니다.';
$strHasBeenCreated = '을(를) 작성하였습니다.';
$strHome = '시작페이지';
$strHomepageOfficial = 'phpMyAdmin 공식 홈';
$strHomepageSourceforge = '소스포지 phpMyAdmin 다운로드';
$strHost = '호스트';
$strHostEmpty = '호스트명이 없습니다!';

$strIdxFulltext = 'Fulltext'; // To translate
$strIfYouWish = '테이블 열(콜럼)에 데이터를 추가할 때는 필드 리스트를 콤마로 구분해 주십시요. ';
$strIgnore = 'Ignore';
$strIndex = '인덱스';
$strIndexes = '인덱스';
$strIndexHasBeenDropped = '인덱스 %s 를 제거했습니다';
$strIndexName = '인덱스 이름:';
$strIndexType = '인덱스 종류:';
$strInsert = '추가';
$strInsertAsNewRow = '새 열을 삽입합니다';
$strInsertedRows = '삽입된 열:';
$strInsertNewRow = '새 열을 삽입';
$strInsertTextfiles = '텍스트파일을 읽어서 테이블에 데이터 삽입';
$strInstructions = '설명서';
$strInUse = '사용중';
$strInvalidName = '"%s" 는 예약된 단어이므로 데이터베이스, 테이블, 필드명에 사용할 수 없습니다.';

$strKeepPass = '암호를 변경하지 않음';
$strKeyname = '키 이름';
$strKill = 'Kill';

$strLength = '길이';
$strLengthSet = '길이/값*';
$strLimitNumRows = '페이지당 레코드 수';
$strLineFeed = '줄바꿈 문자: \\n';
$strLines = '줄(行)';
$strLinesTerminatedBy = '줄(열) 구분자';
$strLocationTextfile = 'SQL 텍스트파일의 위치';
$strLogin = '로그인';
$strLogout = '로그아웃';
$strLogPassword = '암호:';
$strLogUsername = '사용자명:';

$strModifications = '수정된 내용이 저장되었습니다.';
$strModify = '수정';
$strModifyIndexTopic = '인덱스 수정';
$strMoveTable = '테이블 옮기기 (데이터베이스명<b>.</b>테이블명):';
$strMoveTableOK = '테이블 %s 을 %s 로 옮겼습니다.';
$strMySQLReloaded = 'MySQL을 재시동했습니다.';
$strMySQLSaid = 'MySQL 메시지: ';
$strMySQLServerProcess = '%pma_s2% (MySQL %pma_s1%)에 %pma_s3% 계정으로 들어왔습니다.';
$strMySQLShowProcess = 'MySQL 프로세스 보기';
$strMySQLShowStatus = 'MySQL 런타임 상태 보기';
$strMySQLShowVars = 'MySQL 시스템 환경변수 보기';

$strName = '이름';
$strNbRecords = '열(레코드) 갯수';
$strNext = '다음';
$strNo = ' 아니오 ';
$strNoDatabases = 'No databases'; // To translate
$strNoDropDatabases = '"DROP DATABASE" 구문은 허락되지 않습니다.';
$strNoFrames = 'phpMyAdmin 은 <b>프레임을 쓸 수 있는</b> 브라우저에서 잘 보입니다.';
$strNoIndex = '인덱스가 설정되지 않았습니다!';
$strNoIndexPartsDefined = 'No index parts defined!'; // To translate
$strNoModification = '변화 없음';
$strNone = 'None';
$strNoPassword = '암호 없음';
$strNoPrivileges = '권한 없음';
$strNoQuery = 'SQL 쿼리 없음!';
$strNoRights = '어떻게 들어오셨어요? 지금 여기 있을 권한이 없습니다!';
$strNoTablesFound = '데이터베이스에 테이블이 없습니다.';
$strNotNumber = '은 숫자(번호)가 아닙니다!';
$strNotValidNumber = '은 올바른 열 번호가 아닙니다!';
$strNoUsersFound = '사용자가 없습니다.';
$strNull = 'Null'; // To translate

$strOftenQuotation = 'Often quotation marks. 옵션(OPTIONALLY)은 char 및 varchar 필드가 "enclosed by"-character로 닫힌다는 것을 뜻합니다.';  // To translate
$strOptimizeTable = '테이블 최적화';
$strOptionalControls = '특수문자 읽기/쓰기 옵션';
$strOptionally = '옵션입니다.';
$strOr = '또는';
$strOverhead = '부담';

$strPartialText = 'Partial Texts'; // To translate
$strPassword = '암호';
$strPasswordEmpty = '암호가 비었습니다!';
$strPasswordNotSame = '암호가 동일하지 않습니다!';
$strPHPVersion = 'PHP 버전';
$strPmaDocumentation = 'phpMyAdmin 설명서';
$strPmaUriError = '환경설정 파일에서 <tt>$cfgPmaAbsoluteUri</tt> 주소를 기입하십시오!';
$strPos1 = '처음';
$strPrevious = '이전';
$strPrimary = '기본';
$strPrimaryKey = '기본(프라이머리) 키';
$strPrimaryKeyHasBeenDropped = '기본(프라이머리)키를 제거했습니다';
$strPrimaryKeyName = '기본(프라이머리)키의 이름은 반드시 PRIMARY여야 합니다!';
$strPrimaryKeyWarning = '("PRIMARY"는 <b>반드시</b> 기본(프라이머리)키의 <b>유일한</b> 이름이어야 합니다!)';
$strPrintView = '인쇄용 보기';
$strPrivileges = '권한';
$strProperties = '속성';

$strQBE = '예(例)에서 쿼리 실행';
$strQBEDel = '삭제';
$strQBEIns = '삽입';
$strQueryOnDb = '데이터베이스 <b>%s</b>에 SQL 쿼리:';

$strRecords = '레코드수';
$strReferentialIntegrity = 'referential integrity 검사:';
$strReloadFailed = 'MySQL 재시동에 실패하였습니다.';
$strReloadMySQL = 'MySQL 재시동';
$strRememberReload = '서버를 재시동하는 것을 잊지마세요.';
$strRenameTable = '테이블 이름 변경하기';
$strRenameTableOK = '테이블 %s을(를) %s(으)로 변경하였습니다.';
$strRepairTable = '테이블 복구';
$strReplace = '대치(Replace)';
$strReplaceTable = '파일로 테이블 대치하기';
$strReset = '리세트';
$strReType = '재입력';
$strRevoke = '제거';
$strRevokeGrant = '승인 제거';
$strRevokeGrantMessage = '%s의 승인 권한을 제거했습니다.';
$strRevokeMessage = '%s의 권한을 제거했습니다.';
$strRevokePriv = '권한 제거';
$strRowLength = '열 길이';
$strRows = '열';
$strRowsFrom = '열. 시작(열)위치';
$strRowSize = ' Row size ';
$strRowsModeHorizontal = '수평(가로)';
$strRowsModeOptions = ' %s 정렬 (%s 칸이 넘으면 헤더 반복)';
$strRowsModeVertical = '수직(세로)';
$strRowsStatistic = '열 통계';
$strRunning = '입니다. (%s)';
$strRunQuery = '쿼리 실행'; 
$strRunSQLQuery = '데이터베이스 %s에 SQL 쿼리를 실행';

$strSave = '보존';
$strSelect = '선택';
$strSelectADb = '데이터베이스를 선택하세요';
$strSelectAll = '모두 선택';
$strSelectFields = '필드 선택 (하나 이상):';
$strSelectNumRows = '쿼리(in query)';
$strSend = '파일로 저장';
$strServerChoice = '서버 선택';
$strServerVersion = '서버 버전';
$strSetEnumVal = '필드 종류가 "enum"이나 "set"이면, 다음과 같은 형식으로 값을 입력하십시오: \'a\',\'b\',\'c\'...<br />이 값에 역슬래시("\")나 작은따옴표("\'")가 넣어야 한다면, 역슬래시를 사용하십시오. (예: \'\\\\xyz\' 또는 \'a\\\'b\').';
$strShow = '보기';
$strShowAll = '모두 보기'; 
$strShowCols = '칼럼(행) 보기';
$strShowingRecords = '레코드(열) 보기';
$strShowPHPInfo = 'PHP 정보 보기';
$strShowTables = '테이블 보기';
$strShowThisQuery = ' 이 쿼리를 다시 보여줌 ';
$strSingly = '(singly)';
$strSize = '크기';
$strSort = 'Sort'; // To translate
$strSpaceUsage = '공간 사용량';
$strSQLQuery = 'SQL 쿼리';
$strStartingRecord = '시작 위치(열)';
$strStatement = '명세';
$strStrucCSV = 'CSV 데이터';
$strStrucData = '구조와 데이터';
$strStrucDrop = '\'DROP TABLE\'문 추가';
$strStrucExcelCSV = 'MS엑셀 CSV 데이터';
$strStrucOnly = '구조만';
$strSubmit = '확인';
$strSuccess = 'SQL 쿼리가 바르게 실행되었습니다.';
$strSum = '계';

$strTable = '테이블 ';
$strTableComments = '테이블 설명';
$strTableEmpty = '테이블명이 없습니다!';
$strTableHasBeenDropped = '테이블 %s 을 제거했습니다.';
$strTableHasBeenEmptied = '테이블 %s 을 비웠습니다';
$strTableHasBeenFlushed = '테이블 %s 을 닫았습니다(flushed)';
$strTableMaintenance = '테이블 유지보수';
$strTables = '테이블 %s 개';
$strTableStructure = '테이블 구조';
$strTableType = '테이블 종류';
$strTextAreaLength = ' 필드의 길이 때문에,<br />이 필드를 편집할 수 없습니다 ';
$strTheContent = '파일 내용을 삽입하였습니다.';
$strTheContents = '파일 내용이 선택한 테이블의 프라이머리 혹은 고유값 키와 일치하는 열을 대치(代置)시키겠습니다.';
$strTheTerminator = '필드 종료 기호.';
$strTotal = '합계';
$strType = '종류';

$strUncheckAll = '모두 체크안함';
$strUnique = '고유값';
$strUnselectAll = '모두 선택안함';
$strUpdatePrivMessage = '%s 의 권한을 업데이트했습니다.';
$strUpdateProfile = '프로파일 업데이트:';
$strUpdateProfileMessage = '프로파일을 업데이트했습니다.';
$strUpdateQuery = '쿼리 업데이트';
$strUsage = '사용법(량)';
$strUseBackquotes = '테이블, 필드명에 백쿼터(`) 사용';
$strUser = '사용자';
$strUserEmpty = '사용자명이 없습니다!';
$strUserName = '사용자명';
$strUsers = '사용자들';
$strUseTables = 'Use Tables';

$strValue = '값';
$strViewDump = '테이블의 덤프(스키마) 데이터 보기';
$strViewDumpDB = '데이터베이스의 덤프(스키마) 데이터 보기';

$strWelcome = '%s에 오셨습니다';
$strWithChecked = '선택한 것을:';
$strWrongUser = '사용자명/암호가 틀렸습니다. 접근이 거부되었습니다.';

$strYes = ' 예 ';

$strZip = 'zip 압축';

// To translate
?>
