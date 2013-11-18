<?php
/* $Id: serbian-win1250.inc.php,v 1.2 2002/04/05 19:10:11 loic1 Exp $ */

/**
 * Translated by:
 *     Igor Mladenovic <mligor@zimco.com>
 *     David Trajkovic <tdavid@ptt.yu>
 */


$charset = 'windows-1250';
$text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
$byteUnits = array('Bajtova', 'KB', 'MB', 'GB');

$day_of_week = array('Ned', 'Pon', 'Uto', 'Sre', '�et', 'Pet', 'Sub');
$month = array('Jan', 'Feb', 'Mar', 'Apr', 'Maj', 'Jun', 'Jul', 'Avg', 'Sep', 'Okt', 'Nov', 'Dec');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d. %B %Y. u %H:%M';

$strAccessDenied = 'Pristup odbijen';
$strAction = 'Akcija';
$strAddDeleteColumn = 'Dodaj/Obri�i Kolonu';  
$strAddDeleteRow = 'Dodaj/Obri�i polje za kriterujum'; 
$strAddNewField = 'Dodaj novo polje';
$strAddPriv = 'Dodaj novu privilegiju';
$strAddPrivMessage = 'Upravo ste dodali privilegiju.';
$strAddSearchConditions = 'Dodaj uslov pretra�ivanja (deo "where" upita):';
$strAddToIndex = 'Dodaj klju�';
$strAddUser = 'Dodaj novog korisnika';
$strAddUserMessage = 'Upravo ste dodali korisnika.';
$strAffectedRows = 'Obuhva�eni rekordi:';
$strAfter = 'Posle %s';
$strAfterInsertBack = 'Nazad na prethodnu stranu';
$strAfterInsertNewInsert = 'Dodaj jos jedan red';
$strAll = 'Sve';
$strAlterOrderBy = 'Promeni redosled u tabeli';
$strAnalyzeTable = 'Analiziraj tabelu';
$strAnd = 'i';
$strAnIndex = 'Klju� je upravo dodat %s';
$strAny = 'Bilo koji';
$strAnyColumn = 'Bilo koja kolona';
$strAnyDatabase = 'Bilo koja baza podataka';
$strAnyHost = 'Bilo koji host';
$strAnyTable = 'Bilo koja tabela';
$strAnyUser = 'Bilo koji korisnik';
$strAPrimaryKey = 'Primarni klju� je upravo dodat %s';
$strAscending = 'Rastu�i';
$strAtBeginningOfTable = 'Na po�etku tabele';
$strAtEndOfTable = 'Na kraju tabele';
$strAttr = 'Atributi';

$strBack = 'Nazad';
$strBinary = 'Binarni';
$strBinaryDoNotEdit = 'Binarni - ne memenjaj';
$strBookmarkDeleted = 'Obeleziva� je upravo obrisan.';
$strBookmarkLabel = 'Naziv';
$strBookmarkQuery = 'Obele�en SQL-upit';
$strBookmarkThis = 'Obele�i SQL-upit';
$strBookmarkView = 'Vidi samo';
$strBrowse = 'Pregled';
$strBzip = '"bzip-ovano"';

$strCantLoadMySQL = 'Ne mogu da u�itam MySql ekstenziju,<br /> molim pogledajte PHP koniguraciju.';
$strCantRenameIdxToPrimary = 'Ne mogu da promenim klju� u PRIMARY (primarni) !';
$strCardinality = 'Kardinalnost';
$strCarriage = 'Prenos je vratio: \\r';
$strChange = 'Promeni';
$strChangePassword = 'Promeni �ifru';
$strCheckAll = 'Markiraj sve';
$strCheckDbPriv = 'Proveri privilegije baze podataka';
$strCheckTable = 'Proveri tabelu';
$strColumn = 'Kolona';
$strColumnNames = 'Imena kolona';
$strCompleteInserts = 'Kompletan INSERT (sa imenima polja)';
$strConfirm = 'Da li stvarno �elite da to uradite?';
$strCookiesRequired = 'Kukiji (Cookies) moraju u ovom slu�aju biti aktivni.';
$strCopyTable = 'Kopiram tabelu u (baza<b>.</b>tabela):';
$strCopyTableOK = 'Tabela %s je upravo kopirana u %s.';
$strCreate = 'Kreiraj';
$strCreateIndex = 'Kreiraj klju� sa&nbsp;%s&nbsp;kolonom(e)';
$strCreateIndexTopic = 'Kreiraj novi klju�';
$strCreateNewDatabase = 'Kreiraj bazu podataka';
$strCreateNewTable = 'Kreiraj novu tabelu u bazi %s';
$strCriteria = 'Kriterijum';

$strData = 'Podaci';
$strDatabase = 'Baza podataka ';
$strDatabaseHasBeenDropped = 'Baza %s je obrisana.';
$strDatabases = 'baze';
$strDatabasesStats = 'Statistika baze';
$strDatabaseWildcard = 'Baza (d�oker karakteri dozvoljeni):';
$strDataOnly = 'Samo podaci';
$strDefault = 'Default';
$strDelete = 'Obri�i';
$strDeleted = 'Red je obrisan';
$strDeletedRows = 'Obrisani redovi:';
$strDeleteFailed = 'Brisanje nije uspelo!';
$strDeleteUserMessage = 'Upravo ste obrisali korisnika: %s.';
$strDescending = 'Opadaju��i';
$strDisplay = 'Prika�i';
$strDisplayOrder = 'Redosled prikaza:';
$strDoAQuery = 'Napravi "upit po primeru" (d�oker: "%")';
$strDocu = 'Dokumentacija';
$strDoYouReally = 'Da li stvarno ho�ete da ';
$strDrop = 'Obri�i';
$strDropDB = 'Obri�i bazu %s';
$strDropTable = 'Obri�i tabelu';
$strDumpingData = 'Backup podataka za tabelu';
$strDynamic = 'dynamic';

$strEdit = 'Promeni';
$strEditPrivileges = 'Promeni privilegije';
$strEffective = 'Efektivne';
$strEmpty = 'Izprazni';
$strEmptyResultSet = 'MySQL je vratio prazan rezultat (nula redova).';
$strEnd = 'Kraj';
$strEnglishPrivileges = ' Info: MySQL imena privilegija moraju da budu na engleskom ';
$strError = 'Greska';
$strExtendedInserts = 'Pro�ireni INSERT';
$strExtra = 'Dodatno';

$strField = 'Polje';
$strFieldHasBeenDropped = 'Polje %s obrisano';
$strFields = 'Broj Polja';
$strFieldsEmpty = ' Broj polja je nula! ';
$strFieldsEnclosedBy = 'Podaci ograni�eni sa';
$strFieldsEscapedBy = 'Escape karakter &nbsp; &nbsp; &nbsp;';
$strFieldsTerminatedBy = 'Podaci razdvojeni sa';
$strFixed = 'sredjeno';
$strFlushTable = 'Refre�uj tabelu ("FLUSH")';
$strFormat = 'Format';
$strFormEmpty = 'Nedostaje vrednost u formi !';
$strFullText = 'Pun tekst';
$strFunction = 'Funkcija';

$strGenTime = 'Vreme kreiranja';
$strGo = 'Start';
$strGrants = 'Omoguci';
$strGzip = '"gzip-ovano"';

$strHasBeenAltered = 'je promenjen.';
$strHasBeenCreated = 'je kreiran.';
$strHome = 'Po�etna strana';
$strHomepageOfficial = 'phpMyAdmin WEB sajt';
$strHomepageSourceforge = 'Sourceforge phpMyAdmin Download Stranica';
$strHost = 'Host (domen)';
$strHostEmpty = 'Ime domena je prazno!';

$strIdxFulltext = 'Tekst klju�';
$strIfYouWish = 'Ako zelite da izlistate samo neke kolone\nu tebeli, navedite ih razdvojene zarezom';
$strIgnore = 'Ignori�i';
$strIndex = 'Klju�';
$strIndexes = 'Klju�evi';
$strIndexHasBeenDropped = 'Klju� %s je obrisan';
$strIndexName = 'Ime klju�a&nbsp;:';
$strIndexType = 'Tip klju�a&nbsp;:';
$strInsert = 'Novi rekord';
$strInsertAsNewRow = 'Unesi kao novi rekord';
$strInsertedRows = 'Uneseni rekordi:';
$strInsertNewRow = 'Unesi novi rekord';
$strInsertTextfiles = 'Importuj podatke iz tekstualne datoteke';
$strInstructions = 'Uputstva';
$strInUse = 'se koristi';
$strInvalidName = '"%s" je rezervisana rec, \nne mo�ete je koristiti kao ime polja, tabele ili baze.';

$strKeepPass = 'Nemoj da menjas sifru';
$strKeyname = 'Ime Klju�a';
$strKill = 'Stopiraj';

$strLength = 'Duzina';
$strLengthSet = 'Duzina/Vrednost*';
$strLimitNumRows = 'Broj rekorda po strani';
$strLineFeed = 'Karakter za liniju: \\n';
$strLines = 'Linije';
$strLinesTerminatedBy = 'Linije se zavr�avaju sa';
$strLocationTextfile = 'Lokacija tekstualnog fajla';
$strLogin = 'Logovanje';
$strLogout = 'Izlogivanje';
$strLogPassword = 'Password:';
$strLogUsername = 'Username:';

$strModifications = 'Izmene su snimljene';
$strModify = 'Promeni';
$strModifyIndexTopic = 'Izmeni klju�';
$strMoveTable = 'Pomeri tabelu u (baza<b>.</b>tabela):';
$strMoveTableOK = 'Tabela %s je pomereno u %s.';
$strMySQLReloaded = 'MySQL resetovan (reload).';
$strMySQLSaid = 'MySQL rece: ';
$strMySQLServerProcess = 'MySQL %pma_s1% startovan na %pma_s2%, ulogovan kao %pma_s3%';
$strMySQLShowProcess = 'Prika�i listu procesa';
$strMySQLShowStatus = 'Prika�i MySQL runtime informacije';
$strMySQLShowVars = 'Prika�i MySQL sistemske promenljive';

$strName = 'Ime';
$strNbRecords = 'Broj rekorda';
$strNext = 'Slede�i';
$strNo = 'Ne';
$strNoDatabases = 'Baza ne postoji';
$strNoDropDatabases = '"DROP DATABASE" komanda je onemogucena.';
$strNoFrames = 'phpMyAdmin vise voli da radi za <b>frames-capable</b> browser-ima.';
$strNoIndex = 'Klju� nije definisan!';
$strNoIndexPartsDefined = 'Deo za klju� nije definisan!';
$strNoModification = 'Nema nikakvih promena';
$strNone = 'Ni�ta';
$strNoPassword = 'Nema sifre';
$strNoPrivileges = 'Nema privilegija';
$strNoQuery = 'Nema SQL upita!';  //to translate
$strNoRights = 'Vama nije dozvoljeno da budete ovde!';
$strNoTablesFound = 'Tabela nije pronadjena u bazi.';
$strNotNumber = 'Ovo nije broj!';
$strNotValidNumber = ' nije odgovarajuci broj rekorda!';
$strNoUsersFound = 'Korisnik(ci) nije nadjen.';
$strNull = 'Null';

$strOftenQuotation = 'Navodnici koji se koriste. OPCIONO se misli da neka polja mogu, ali ne moraju da budu pod znacima navoda.'; 
$strOptimizeTable = 'Optimizuj tabelu';
$strOptionalControls = 'Opciono. Karakter koji prethodi specijalnim karakterima.'; 
$strOptionally = 'OPCIONO'; 
$strOr = 'ili';
$strOverhead = 'Prekora�enje';

$strPartialText = 'Deo teksta';
$strPassword = 'Sifra';
$strPasswordEmpty = 'Sifra je prazna!';
$strPasswordNotSame = 'Sifra nije identicna!';
$strPHPVersion = 'verzija PHP-a';
$strPmaDocumentation = 'phpMyAdmin dokumentacija';
$strPmaUriError = '<tt>$cfgPmaAbsoluteUri</tt> deo MORA biti setovan u konfiguracijonom fajlu!';
$strPos1 = 'Pocetak';
$strPrevious = 'Prethodna';
$strPrimary = 'Primarni klju�';
$strPrimaryKey = 'Primarni klju�';
$strPrimaryKeyHasBeenDropped = 'Primarni klju� je izbrisan';
$strPrimaryKeyName = 'Ime za primarni klju� mora da bude... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>mo�e i mora</b> da bude ime i <b>samo</b> ime primarnog klju�a!)';
$strPrintView = 'Za �tampu';
$strPrivileges = 'Privilegije';
$strProperties = 'Informacije';

$strQBE = 'Upit po primeru';
$strQBEDel = 'Del';
$strQBEIns = 'Ins';
$strQueryOnDb = 'SQL upit na bazi <b>%s</b>:';

$strRecords = 'Polja';
$strReferentialIntegrity = 'Proveri validnost linkova:'; 
$strReloadFailed = 'restartovanje MySQL-a neuspesno.';
$strReloadMySQL = 'resetuj MySQL (reload)';
$strRememberReload = 'Ne zaboravi da restartujes (reload) server.';
$strRenameTable = 'Promeni ime tabele u ';
$strRenameTableOK = 'Tabeli %s promenjeno ime u %s';
$strRepairTable = 'Popravi tabelu';
$strReplace = 'Zameni';
$strReplaceTable = 'Zameni podatke u tabeli sa fajlom'; 
$strReset = 'Resetuj';
$strReType = 'Ponovite unos';
$strRevoke = 'Zabrani';
$strRevokeGrant = 'Zabrani Grant';
$strRevokeGrantMessage = 'Zabranili ste Grant privilegije za  %s';
$strRevokeMessage = 'Zabranili ste privilegije za %s';
$strRevokePriv = 'Zabrani privilegije';
$strRowLength = 'Veli�ina rekorda';
$strRows = 'Rekordi';
$strRowsFrom = 'pocni od rekorda';
$strRowSize = ' Veli�ina Rekorda ';
$strRowsModeHorizontal = 'horinzontalnom';
$strRowsModeOptions = 'u %s modu i ponovi zaglavlje posle svakog %s reda';
$strRowsModeVertical = 'vertikalnom';
$strRowsStatistic = 'Statistika Rekorda';
$strRunning = 'startovana na %s';
$strRunQuery = 'Izvr�i SQL Upit';
$strRunSQLQuery = 'Izvr�i SQL upit/upite na bazi %s';

$strSave = 'Snimi';
$strSelect = 'Selektuj';
$strSelectADb = 'Izaberite bazu';
$strSelectAll = 'Selektuj sve';
$strSelectFields = 'Izaberi polja (najmanje jedno)';
$strSelectNumRows = 'u upitu';
$strSend = 'Snimi kao fajl';
$strServerChoice = 'Izbor servera';
$strServerVersion = 'Verzija server';
$strSetEnumVal = 'Ako je polje "enum" ili "set", unesite vrednosti u formatu: \'a\',\'b\',\'c\'...<br />Ako vam treba mozda obrnuta kosa crta ("\") ili jednostruki znak navoda ("\'") koristite ih u eskepovanom obliku (na primer \'\\\\xyz\' ili \'a\\\'b\').';
$strShow = 'Prika�i';
$strShowAll = 'Prika�i sve';
$strShowCols = 'Prika�i kolone';
$strShowingRecords = 'Prikaz rekorda';
$strShowPHPInfo = 'Prika�i informacije o PHP-u';
$strShowTables = 'Prika�i tabele';
$strShowThisQuery = ' Prika�i ovaj upit ponovo ';
$strSingly = '(po jednom polju)'; 
$strSize = 'Veli�ina';
$strSort = 'Sortiranje';
$strSpaceUsage = 'Zauze�e';
$strSQLQuery = 'SQL upit';
$strStartingRecord = 'Po�etni rekord';
$strStatement = 'Ime';
$strStrucCSV = 'CSV format';
$strStrucData = 'Struktura i podaci';
$strStrucDrop = 'Dodaj \'drop table\'';
$strStrucExcelCSV = 'CSV za MS Excel';
$strStrucOnly = 'Samo Struktura';
$strSubmit = 'Startuj';
$strSuccess = 'Vas SQL upit je uspesno izvrsen';
$strSum = 'Ukupno';

$strTable = 'tabela ';
$strTableComments = 'Komentar tabele';
$strTableEmpty = 'Ima tabele je prazno!';
$strTableHasBeenDropped = 'Tabela %s je obrisana';
$strTableHasBeenEmptied = 'Tabela %s je ispraznjena';
$strTableHasBeenFlushed = 'Tabela %s je refresovana';
$strTableMaintenance = 'Akcije na tabeli'; 
$strTables = '%s tabela/tabele';
$strTableStructure = 'Struktura tabele';
$strTableType = 'Tip tabele';
$strTextAreaLength = ' Zbog veli�ine ovog polja,<br /> polje necete moci da editujete ';
$strTheContent = 'Sadrzaj datoteke je dodat u vasu bazu.';
$strTheContents = 'Sadrzaj tabele zameni sa sadrzajem fajla sa identicnim primarnim i jedinstvenim (unique) klju�em.';
$strTheTerminator = 'Separator polja u datoteci.';
$strTotal = 'ukupno';
$strType = 'Tip';

$strUncheckAll = 'Demarkiraj sve';
$strUnique = 'Jedinstveni klju�';
$strUnselectAll = 'Deselektuj sve';
$strUpdatePrivMessage = 'Promenili ste privilegije za %s.';
$strUpdateProfile = 'Promeni profil:';
$strUpdateProfileMessage = 'Profil je promenjen.';
$strUpdateQuery = 'Update SQL Upit';
$strUsage = 'Zauze�e';
$strUseBackquotes = 'Koristi \' za ograni�avanje imena polja';
$strUser = 'Korisnik';
$strUserEmpty = 'Ime korisnika je prazno!';
$strUserName = 'Ime korisnika';
$strUsers = 'Korisnici';
$strUseTables = 'Koristi tabele';

$strValue = 'Vrednost';
$strViewDump = 'Prika�i dump (shemu) tabele';
$strViewDumpDB = 'Prika�i dump (shemu) baze';

$strWelcome = 'Dobrodo�li na %s';
$strWithChecked = 'Na selektovanim:';
$strWrongUser = 'Pogresno korisnicko ime/sifra. Pristup odbijen.';

$strYes = 'Da';

$strZip = '"zip-ovano"';

// To translate
?>