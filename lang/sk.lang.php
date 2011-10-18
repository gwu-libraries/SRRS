<?php
/**
* Slovak (sk) translation file.
*
* @author Nick Korbel <lqqkout13@users.sourceforge.net>
* @translator Mari�n Mur�n <murin@netkosice.sk>
* @version 05-20-06
* @package Languages
*
* Copyright (C) 2003 - 2007 phpScheduleIt
* License: GPL, see LICENSE
*/
///////////////////////////////////////////////////////////
// INSTRUCTIONS
///////////////////////////////////////////////////////////
// This file contains all of the strings that are used throughout phpScheduleit.
// Please save the translated file as '2 letter language code'.lang.php.  For example, en.lang.php.
//
// To make phpScheduleIt available in another language, simply translate each
//  of the following strings into the appropriate one for the language.  If there
//  is no direct translation, please provide the closest translation.  Please be sure
//  to make the proper additions the /config/langs.php file (instructions are in the file).
//  Also, please add a help translation for your language using en.help.php as a base.
//
// You will probably keep all sprintf (%s) tags in their current place.  These tags
//  are there as a substitution placeholder.  Please check the output after translating
//  to be sure that the sentences make sense.
//
// + Please use single quotes ' around all $strings.  If you need to use the ' character, please enter it as \'
// + Please use double quotes " around all $email.  If you need to use the " character, please enter it as \"
//
// + For all $dates please use the PHP strftime() syntax
//    http://us2.php.net/manual/en/function.strftime.php
//
// + Non-intuitive parts of this file will be explained with comments.  If you
//    have any questions, please email lqqkout13@users.sourceforge.net
//    or post questions in the Developers forum on SourceForge
//    http://sourceforge.net/forum/forum.php?forum_id=331297
///////////////////////////////////////////////////////////

////////////////////////////////
/* Do not modify this section */
////////////////////////////////
global $strings;			  //
global $email;				  //
global $dates;				  //
global $charset;			  //
global $letters;			  //
global $days_full;			  //
global $days_abbr;			  //
global $days_two;			  //
global $days_letter;		  //
global $months_full;		  //
global $months_abbr;		  //
global $days_letter;		  //
/******************************/

// Charset for this language
// 'iso-8859-1' will work for most languages
$charset = 'windows-1250';

/***
  DAY NAMES
  All of these arrays MUST start with Sunday as the first element
   and go through the seven day week, ending on Saturday
***/
// The full day name
$days_full = array('Nede�a', 'Pondelok', 'Utorok', 'Streda', '�tvrtok', 'Piatok', 'Sobota');
// The three letter abbreviation
$days_abbr = array('Ned', 'Pon', 'Uto', 'Str', '�tv', 'Pia', 'Sob');
// The two letter abbreviation
$days_two  = array('Ne', 'Po', 'Ut', 'St', '�t', 'Pi', 'So');
// The one letter abbreviation
$days_letter = array('N', 'P', 'U', 'S', '�', 'P', 'S');

/***
  MONTH NAMES
  All of these arrays MUST start with January as the first element
   and go through the twelve months of the year, ending on December
***/
// The full month name
$months_full = array('Janu�r', 'Febru�r', 'Marec', 'Apr�l', 'M�j', 'J�n', 'J�l', 'August', 'September', 'Okt�ber', 'November', 'December');
// The three letter month name
$months_abbr = array('Jan', 'Feb', 'Mar', 'Apr', 'M�j', 'J�n', 'J�l', 'Aug', 'Sep', 'Okt', 'Nov', 'Dec');

// All letters of the alphabet starting with A and ending with Z
$letters = array ('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');

/***
  DATE FORMATTING
  All of the date formatting must use the PHP strftime() syntax
  You can include any text/HTML formatting in the translation
***/
// General date formatting used for all date display unless otherwise noted
$dates['general_date'] = '%d/%m/%Y';
// General datetime formatting used for all datetime display unless otherwise noted
// The hour:minute:second will always follow this format
$dates['general_datetime'] = '%d/%m/%Y @';
// Date in the reservation notification popup and email
$dates['res_check'] = '%A %d/%m/%Y';
// Date on the scheduler that appears above the resource links
$dates['schedule_daily'] = '%A,<br/>%d/%m/%Y';
// Date on top-right of each page
$dates['header'] = '%A, %B %d, %Y';
// Jump box format on bottom of the schedule page
// This must only include %m %d %Y in the proper order,
//  other specifiers will be ignored and will corrupt the jump box
$dates['jumpbox'] = '%d %m %Y';

/***
  STRING TRANSLATIONS
  All of these strings should be translated from the English value (right side of the equals sign) to the new language.
  - Please keep the keys (between the [] brackets) as they are.  The keys will not always be the same as the value.
  - Please keep the sprintf formatting (%s) placeholders where they are unless you are sure it needs to be moved.
  - Please keep the HTML and punctuation as-is unless you know that you want to change it.
***/
$strings['hours'] = 'hodiny';
$strings['minutes'] = 'min�ty';
// The common abbreviation to hint that a user should enter the month as 2 digits
$strings['mm'] = 'mm';
// The common abbreviation to hint that a user should enter the day as 2 digits
$strings['dd'] = 'dd';
// The common abbreviation to hint that a user should enter the year as 4 digits
$strings['yyyy'] = 'rrrr';
$strings['am'] = 'am';
$strings['pm'] = 'pm';

$strings['Administrator'] = 'Administrator';
$strings['Welcome Back'] = 'Vitajte sp�, %s';
$strings['Log Out'] = 'Odhl�si� sa';
$strings['My Control Panel'] = 'M�j Riadiaci Panel';
$strings['Help'] = 'Pomoc';
$strings['Manage Schedules'] = 'Spr�va rozvrhov';
$strings['Manage Users'] ='Spr�va u��vate�ov';
$strings['Manage Resources'] ='Spr�va zdrojov';
$strings['Manage User Training'] ='Spr�va �kolen� u��vate�ov';
$strings['Manage Reservations'] ='Spr�va rezerv�ci�';
$strings['Email Users'] ='Email u��vate�om';
$strings['Export Database Data'] = 'Export d�t z datab�zy';
$strings['Reset Password'] = 'Reset hesla';
$strings['System Administration'] = 'Adminstr�cia syst�mu';
$strings['Successful update'] = '�spe�n� aktualiz�cia';
$strings['Update failed!'] = 'Aktualiz�cia ne�spe�n�!';
$strings['Manage Blackout Times'] = 'Spr�va �asov v�padkov';
$strings['Forgot Password'] = 'Heslo zabudnut�';
$strings['Manage My Email Contacts'] = 'Spr�va mojich email kontaktov';
$strings['Choose Date'] = 'Vyberte d�tum';
$strings['Modify My Profile'] = 'Zmeni� m�j profil';
$strings['Register'] = 'Registrova�';
$strings['Processing Blackout'] = 'Spracovanie v�padkov';
$strings['Processing Reservation'] = 'Spracovanie rezerv�ci�';
$strings['Online Scheduler [Read-only Mode]'] = 'Online Pl�nova� [len na ��tanie]';
$strings['Online Scheduler'] = 'Online Pl�nova�';
$strings['phpScheduleIt Statistics'] = '�tatistika rezerv�ci�';
$strings['User Info'] = 'Inform�cie o u��vate�ovi:';

$strings['Could not determine tool'] = 'Nebolo mo�n� ur�i� n�stroj. Vr�te sa pros�m na v� riadiaci panel a skuste znovu nek�r.';
$strings['This is only accessable to the administrator'] = 'Toto je pr�stupn� len pre administr�tora';
$strings['Back to My Control Panel'] = 'Sp� na M�j riadiaci panel';
$strings['That schedule is not available.'] = 'Tento rozvrh nie je pr�stupn�.';
$strings['You did not select any schedules to delete.'] = 'Nevybrali ste �iadny rozvrh na odstr�nenie.';
$strings['You did not select any members to delete.'] = 'Nevybrali ste �iadnych u��vate�ov na odstr�nenie.';
$strings['You did not select any resources to delete.'] = 'Nevybrali ste �iadne zdroje na odstr�nenie.';
$strings['Schedule title is required.'] = 'N�zov rozvrhu je povinn�.';
$strings['Invalid start/end times'] = 'Neplatn� �asy za�iatku/konca';
$strings['View days is required'] = 'View days je povinn�';
$strings['Day offset is required'] = 'Day offset je povinn�';
$strings['Admin email is required'] = 'Email administr�tora je povinn�';
$strings['Resource name is required.'] = 'N�zov zdroja je povinn�.';
$strings['Valid schedule must be selected'] = 'Mus� by� vybran� platn� rozvrh.';
$strings['Minimum reservation length must be less than or equal to maximum reservation length.'] = 'Minim�lna d�ka rezerv�cie mus� by� rovnak� alebo men�ia ne� maxim�lna.';
$strings['Your request was processed successfully.'] = 'Va�a po�iadavka bola �spe�ne spracovan�.';
$strings['Go back to system administration'] = 'Sp� na administr�ciu syst�mu';
$strings['Or wait to be automatically redirected there.'] = 'Alebo po�kajte pokia� budete automaticky presmerovan�.';
$strings['There were problems processing your request.'] = 'Pri spracovan� va�ej po�iadavky sa vyskytli probl�my.';
$strings['Please go back and correct any errors.'] = 'Pros�m vr�te sa a opravte chyby.';
$strings['Login to view details and place reservations'] = 'Prihl�ste sa pros�m k preh�ad�vaniu podrobnost� a zad�vaniu rezerv�ci�';
$strings['Memberid is not available.'] = 'Memberid: %s nie je dostupn�.';

$strings['Schedule Title'] = 'N�zov rozvrhu';
$strings['Start Time'] = 'Po�iato�n� �as';
$strings['End Time'] = 'Koncov� �as';
$strings['Time Span'] = '�asov� rozp�tie';
$strings['Weekday Start'] = 'Za�iatok t��d�a';
$strings['Admin Email'] = 'e-mail administr�tora';

$strings['Default'] = 'Predvolen�';
$strings['Reset'] = 'Reset';
$strings['Edit'] = 'Upravi�';
$strings['Delete'] = 'Odstr�ni�';
$strings['Cancel'] = 'Zru�i�';
$strings['View'] = 'Zobrazi�';
$strings['Modify'] = 'Zmeni�';
$strings['Save'] = 'Ulo�i�';
$strings['Back'] = 'Sp�';
$strings['Next'] = '�al��';
$strings['Close Window'] = 'Zatvori� okno';
$strings['Search'] = 'H�ada�';
$strings['Clear'] = 'Vymaza�';

$strings['Days to Show'] = 'Uk�za� dni';
$strings['Reservation Offset'] = 'Posuv pre rezerv�ciu';
$strings['Hidden'] = 'Skry�';
$strings['Show Summary'] = 'Uk�za� s�hrn';
$strings['Add Schedule'] = 'Prida� rozvrh';
$strings['Edit Schedule'] = 'Upravi� rozvrh';
$strings['No'] = 'Nie';
$strings['Yes'] = '�no';
$strings['Name'] = 'M�no';
$strings['First Name'] = 'Krstn� meno';
$strings['Last Name'] = 'Priezvisko';
$strings['Resource Name'] = 'N�zov zdroja';
$strings['Email'] = 'Email';
$strings['Institution'] = 'In�tit�cia';
$strings['Phone'] = 'Telef�n';
$strings['Password'] = 'Heslo';
$strings['Permissions'] = 'Opr�vnenia';
$strings['View information about'] = 'Zobrazi� inform�ciu pre: %s %s';
$strings['Send email to'] = 'Posla� email komu: %s %s';
$strings['Reset password for'] = 'Reset hesla pre:  %s %s';
$strings['Edit permissions for'] = 'Upravi� opr�vnenia pre: %s %s';
$strings['Position'] = 'Poz�cia';
$strings['Password (6 char min)'] = 'Heslo (%s znakov minim�lne)';	// @since 1.1.0
$strings['Re-Enter Password'] = 'Znovu zvoli� heslo';

$strings['Sort by descending last name'] = 'Zoradi� zhora nadol pod�a priezviska';
$strings['Sort by descending email address'] = 'Zoradi� zhora nadol pod�a emailu';
$strings['Sort by descending institution'] = 'Zoradi� zhora nadol pod�a in�tit�cie';
$strings['Sort by ascending last name'] = 'Zoradi� zdola nahor pod�a priezviska';
$strings['Sort by ascending email address'] = 'Zoradi� zdola nahor pod�a emailu';
$strings['Sort by ascending institution'] = 'Zoradi� zdola nahor pod�a in�tit�cie';
$strings['Sort by descending resource name'] = 'Zoradi� zhora nadol pod�a n�zvu zdroja';
$strings['Sort by descending location'] = 'Zoradi� zhora nadol pod�a umiestnenia';
$strings['Sort by descending schedule title'] = 'Zoradi� zhora nadol pod�a n�zvu rozvrhu';
$strings['Sort by ascending resource name'] = 'Zoradi� zdola nahor pod�a n�zvu zdroja';
$strings['Sort by ascending location'] = 'Zoradi� zdola nahor pod�a umiestnenia';
$strings['Sort by ascending schedule title'] = 'Zoradi� zdola nahor pod�a n�zvu rozvrhu';
$strings['Sort by descending date'] = 'Zoradi� zhora nadol pod�a d�tumu';
$strings['Sort by descending user name'] = 'Zoradi� zhora nadol pod�a mena u��vate�a';
$strings['Sort by descending start time'] = 'Zoradi� zhora nadol pod�a po�iato�n�ho �asu';
$strings['Sort by descending end time'] = 'Zoradi� zhora nadol pod�a koncov�ho �asu';
$strings['Sort by ascending date'] = 'Zoradi� zdola nahor pod�a d�tumu';
$strings['Sort by ascending user name'] = 'Zoradi� zdola nahor pod�a mena u��vate�a';
$strings['Sort by ascending start time'] = 'Zoradi� zdola nahor pod�a po�iato�n�ho �asu';
$strings['Sort by ascending end time'] = 'Zoradi� zdola nahor pod�a koncov�ho �asu';
$strings['Sort by descending created time'] = 'Zoradi� zhora nadol pod�a �asu vytvorenia';
$strings['Sort by ascending created time'] = 'Zoradi� zdola nahor pod�a �asu vytvorenia';
$strings['Sort by descending last modified time'] = 'Zoradi� zhora nadol pod�a �asu poslednej zmeny';
$strings['Sort by ascending last modified time'] = 'Zoradi� zdola nahor pod�a �asu poslednej zmeny';

$strings['Search Users'] = 'Vyh�ada� u��vate�a';
$strings['Location'] = 'Umiestnenie';
$strings['Schedule'] = 'Rozvrh';
$strings['Phone'] = 'Telef�n';
$strings['Notes'] = 'Pozn�mky';
$strings['Status'] = 'Stav';
$strings['All Schedules'] = 'V�etky rozvrhy';
$strings['All Resources'] = 'V�etky zdroje';
$strings['All Users'] = 'V�etci u��vatelia';

$strings['Edit data for'] = 'Upravi� d�ta pre: %s';
$strings['Active'] = 'Akt�vny';
$strings['Inactive'] = 'Neakt�vny';
$strings['Toggle this resource active/inactive'] = 'Prepnite tento zdroj - akt�vny/neakt�vny';
$strings['Minimum Reservation Time'] = 'Minim�lna doba rezerv�cie';
$strings['Maximum Reservation Time'] = 'Maxim�lna doba rezerv�cie';
$strings['Auto-assign permission'] = 'Automatick� priradenie opr�vnenia';
$strings['Add Resource'] = 'Prida� zdroj';
$strings['Edit Resource'] = 'Upravi� zdroj';
$strings['Allowed'] = 'Povolen�';
$strings['Notify user'] = 'Upovedomi� u��vate�a';
$strings['User Reservations'] = 'Rezerv�cia u��vate�a';
$strings['Date'] = 'D�tum';
$strings['User'] = 'U��vate�';
$strings['Email Users'] = 'Email u��vate�om';
$strings['Subject'] = 'Subjekt';
$strings['Message'] = 'Spr�va';
$strings['Please select users'] = 'Pros�m vyberte u��vate�a';
$strings['Send Email'] = 'Posla� email';
$strings['problem sending email'] = 'Prep��te, nepodarilo sa odosla� v� email. Sk�ste to pros�m nesk�r.';
$strings['The email sent successfully.'] = 'Email bol �spe�ne odoslan�.';
$strings['do not refresh page'] = 'Pros�m <u>neobnovujte</u> t�to str�nku. Email by bol poslan� znovu.';
$strings['Return to email management'] = 'Sp� ku spr�ve emailu';
$strings['Please select which tables and fields to export'] = 'Pros�m vyberte tabu�ky a polia pre export:';
$strings['all fields'] = '- v�etky polia -';
$strings['HTML'] = 'HTML';
$strings['Plain text'] = 'Oby�ajn� text';
$strings['XML'] = 'XML';
$strings['CSV'] = 'CSV';
$strings['Export Data'] = 'Export d�t';
$strings['Reset Password for'] = 'Reset hesla pre: %s';
$strings['Please edit your profile'] = 'Pros�m, upravte v� profil';
$strings['Please register'] = 'Pros�m, zaregistrujte sa';
$strings['Keep me logged in'] = 'Udr�ujte ma prihl�sen�ho<br/>(vy�aduje cookies)';
$strings['Edit Profile'] = 'Upravi� profil';
$strings['Register'] = 'Registr�cia';
$strings['Please Log In'] = 'Pros�m, prihl�ste sa';
$strings['Email address'] = 'Emailov� adresa';
$strings['Password'] = 'Heslo';
$strings['First time user'] = 'Prv�kr�t pripojen�?';
$strings['Click here to register'] = 'Kliknite tu pre registr�ciu';
$strings['Register for phpScheduleIt'] = 'Registr�cia pre rezerv�cie';
$strings['Log In'] = 'Prihl�senie';
$strings['View Schedule'] = 'Zobrazi� rozvrh';
$strings['View a read-only version of the schedule'] = 'Verzia rozvrhu len na ��tanie';
$strings['I Forgot My Password'] = 'Zabudol som svoje heslo';
$strings['Retreive lost password'] = 'Z�skanie straten�ho hesla';
$strings['Get online help'] = 'Online pomoc';
$strings['Language'] = 'Jazyk';
$strings['(Default)'] = '(Predvolen�)';

$strings['My Announcements'] = 'Moje ozn�menia';
$strings['My Reservations'] = 'Moje rezerv�cie';
$strings['My Permissions'] = 'Moje opr�vnenia';
$strings['My Quick Links'] = 'Moje r�chle odkazy';
$strings['Announcements as of'] = 'Ozn�menia: %s';
$strings['There are no announcements.'] = '�iadne ozn�menia.';
$strings['Resource'] = 'Zdroj';
$strings['Created'] = 'Vytvoren�';
$strings['Last Modified'] = 'Posledn� zmena';
$strings['View this reservation'] = 'Zobrazi� t�to rezerv�ciu';
$strings['Modify this reservation'] = 'Zmeni� t�to rezerv�ciu';
$strings['Delete this reservation'] = 'Odstr�ni� t�to rezerv�ciu';
$strings['Bookings'] = 'Rezerv�cie';											// @since 1.2.0
$strings['Change My Profile Information/Password'] = 'Zmena profilu';		// @since 1.2.0
$strings['Manage My Email Preferences'] = 'Nastavenia Emailu';				// @since 1.2.0
$strings['Mass Email Users'] = 'Hromadn� email u��vate�om';
$strings['Search Scheduled Resource Usage'] = 'H�ada� rezerv�cie';		// @since 1.2.0
$strings['Export Database Content'] = 'Export obsahu datab�zy';
$strings['View System Stats'] = 'Zobrazi� �tatistiku syst�mu';
$strings['Email Administrator'] = 'Email administr�torovi';

$strings['Email me when'] = 'Po�li mi email, ke�:';
$strings['I place a reservation'] = 'Zad�m rezerv�ciu';
$strings['My reservation is modified'] = 'Moja rezerv�cia je zmenen�';
$strings['My reservation is deleted'] = 'Moja rezerv�cia je odstr�nen�';
$strings['I prefer'] = 'Uprednost�ujem:';
$strings['Your email preferences were successfully saved'] = 'Va�e emailov� nastavenia boli �spe�ne ulo�en�!';
$strings['Return to My Control Panel'] = 'Sp� na M�j riadiaci panel';

$strings['Please select the starting and ending times'] = 'Pros�m zvo�te po�iato�n� a koncov� �asy:';
$strings['Please change the starting and ending times'] = 'Pros�m zme�te po�iato�n� a koncov� �asy:';
$strings['Reserved time'] = 'Rezervovan� �as:';
$strings['Minimum Reservation Length'] = 'D�ka minim�lnej rezerv�cie:';
$strings['Maximum Reservation Length'] = 'D�ka maxim�lnej rezerv�cie:';
$strings['Reserved for'] = 'Rezervovan� pre:';
$strings['Will be reserved for'] = 'Bude rezervovan� pre:';
$strings['N/A'] = 'N/A';
$strings['Update all recurring records in group'] = 'Aktualizova� v�etky opakuj�ce sa z�znamy pre  skupinu?';
$strings['Delete?'] = 'Odstr�ni�?';
$strings['Never'] = '-- Nikdy --';
$strings['Days'] = 'Dni';
$strings['Weeks'] = 'T��dne';
$strings['Months (date)'] = 'Mesiace (d�tum)';
$strings['Months (day)'] = 'Mesiace (den)';
$strings['First Days'] = 'Prv� dni';
$strings['Second Days'] = 'Druh� dni';
$strings['Third Days'] = 'Tretie dni';
$strings['Fourth Days'] = '�tvrt� dni';
$strings['Last Days'] = 'Posledn� dni';
$strings['Repeat every'] = 'Opakuj ka�d�:';
$strings['Repeat on'] = 'Opakuj ke�:';
$strings['Repeat until date'] = 'Opakuj do d�tumu:';
$strings['Choose Date'] = 'Vyberte d�tum';
$strings['Summary'] = 'S�hrn';

$strings['View schedule'] = 'Zobrazi� rozvrh:';
$strings['My Reservations'] = 'Moje rezerv�cie';
$strings['My Past Reservations'] = 'Moje minul� rezerv�cie';
$strings['Other Reservations'] = '�al�ie rezerv�cie';
$strings['Other Past Reservations'] = '�al�ie minul� rezerv�cie';
$strings['Blacked Out Time'] = 'V�padkov� �as';
$strings['Set blackout times'] = 'Nastavi� v�padkov� �asy pre %s na %s';
$strings['Reserve on'] = 'Rezervova� %s na %s';
$strings['Prev Week'] = '&laquo; Predch�dzaj�ci t��de�';
$strings['Jump 1 week back'] = 'Sko�it 1 t��de� sp�';
$strings['Prev days'] = '&#8249; Predch. %d dni';
$strings['Previous days'] = '&#8249; Predch�dzaj�ce %d dni';
$strings['This Week'] = 'Tento t��de�';
$strings['Jump to this week'] = 'Sko�i� do tohto t��d�a';
$strings['Next days'] = '�al��ch %d dn� &#8250;';
$strings['Next Week'] = '�al�� t��de� &raquo;';
$strings['Jump To Date'] = 'Sko�i� na d�tum';
$strings['View Monthly Calendar'] = 'Zobrazi� mesa�n� kalend�r';
$strings['Open up a navigational calendar'] = 'Otvori� naviga�n� kalend�r';

$strings['View stats for schedule'] = 'Zobrazi� �tatistiku pre rozvrh:';
$strings['At A Glance'] = 'Zbe�ne';
$strings['Total Users'] = 'Celkovo u��vatelia:';
$strings['Total Resources'] = 'Celkovo zdroje:';
$strings['Total Reservations'] = 'Celkovo rezerv�cie:';
$strings['Max Reservation'] = 'Max rezerv�cie:';
$strings['Min Reservation'] = 'Min rezerv�cie:';
$strings['Avg Reservation'] = 'Priemern� rezerv�cie:';
$strings['Most Active Resource'] = 'Najakt�vnej�� zdroj:';
$strings['Most Active User'] = 'Najakt�vnej�� u��vate�:';
$strings['System Stats'] = '�tatistika syst�mu';
$strings['phpScheduleIt version'] = 'Verzia phpScheduleIt:';
$strings['Database backend'] = 'Pou�it� datab�zov� syst�m:';
$strings['Database name'] = 'N�zov datab�zy:';
$strings['PHP version'] = 'Verzia PHP:';
$strings['Server OS'] = 'OS serveru:';
$strings['Server name'] = 'N�zov serveru:';
$strings['phpScheduleIt root directory'] = 'Kore�ov� adres�r syst�mu:';
$strings['Using permissions'] = 'Pou��van� opr�vnenia:';
$strings['Using logging'] = 'Pou��van� logovania:';
$strings['Log file'] = 'Logovac� s�bor:';
$strings['Admin email address'] = 'Email administr�tora:';
$strings['Tech email address'] = 'Email technickej podpory:';
$strings['CC email addresses'] = 'CC emailov� adresy:';
$strings['Reservation start time'] = 'Po�iato�n� �as rezerv�cie:';
$strings['Reservation end time'] = 'Koncov� �as rezerv�cie:';
$strings['Days shown at a time'] = 'Po�et naraz zobrazovan�ch dn�:';
$strings['Reservations'] = 'Rezerv�cie';
$strings['Return to top'] = 'Sp� na za�iatok';
$strings['for'] = 'pre';

$strings['Select Search Criteria'] = 'Vyberte vyh�ad�vacie krit�ri�';
$strings['Schedules'] = 'Rozvrhy:';
$strings['All Schedules'] = 'V�etky rozvrhy';
$strings['Hold CTRL to select multiple'] = 'Dr�te CTRL k viacn�sobn�mu v�beru';
$strings['Users'] = 'U��vatelia:';
$strings['All Users'] = 'V�etci u��vatelia';
$strings['Resources'] = 'Zdroje';
$strings['All Resources'] = 'V�etky zdroje';
$strings['Starting Date'] = 'Po�iato�n� d�tum:';
$strings['Ending Date'] = 'Koncov� d�tum:';
$strings['Starting Time'] = 'Po�iato�n� �as:';
$strings['Ending Time'] = 'Koncov� �as:';
$strings['Output Type'] = 'Typ v�stupu:';
$strings['Manage'] = 'Spravova�';
$strings['Total Time'] = 'Celkov� �as';
$strings['Total hours'] = 'Spolu hod�n:';
$strings['% of total resource time'] = '% celkov�ho �asu zdroja';
$strings['View these results as'] = 'Zobrazi� tieto v�sledky ako:';
$strings['Edit this reservation'] = 'Upravi� t�to rezerv�ciu';
$strings['Search Results'] = 'Preh�ada� v�sledky';
$strings['Search Resource Usage'] = 'Vyh�ada� vyu�itie zdroja';
$strings['Search Results found'] = 'V�sledky vyh�ad�vania: %d rezerv�cii n�jden�ch';
$strings['Try a different search'] = 'Sk�ste in� vyh�ad�vanie';
$strings['Search Run On'] = 'Spusti� vyh�ad�vanie na:';
$strings['Member ID'] = 'ID u��vate�a';
$strings['Previous User'] = '&laquo; Predch�dzaj�ci u��vate�';
$strings['Next User'] = 'Dal�� u��vate� &raquo;';

$strings['No results'] = '�iadne v�sledky';
$strings['That record could not be found.'] = 'Tento z�znam sa nena�iel.';
$strings['This blackout is not recurring.'] = 'Tento v�padok nie je opakovan�.';
$strings['This reservation is not recurring.'] = 'T�to rezerv�cia nie je opakovan�.';
$strings['There are no records in the table.'] = 'V tabu�ke %s nie s� �iadne z�znamy.';
$strings['You do not have any reservations scheduled.'] = 'Nem�te napl�novan� �iadne rezerv�cie.';
$strings['You do not have permission to use any resources.'] = 'Nem�te opr�vnenie pou��va� ak�ko�vek zdroj.';
$strings['No resources in the database.'] = 'V datab�ze nie s� �iadne zdroje.';
$strings['There was an error executing your query'] = 'Pri spracov�van� va�ej po�iadavky do�lo k  chybe:';

$strings['That cookie seems to be invalid'] = 'Tento cookie je neplatn�';
$strings['We could not find that logon in our database.'] = 'Toto prihl�senie sa v na�ej datab�ze nena�lo.';	// @since 1.1.0
$strings['That password did not match the one in our database.'] = 'Toto heslo sa nezhodovalo s heslom z na�ej datab�zy.';
$strings['You can try'] = '<br />M��ete vysk��a�:<br />Registrova� email adresu.<br />Alebo:<br />Sk�ste prihl�senie znovu.';
$strings['A new user has been added'] = 'Nov� u��vate� bol pridan�';
$strings['You have successfully registered'] = '�spe�ne ste sa zaregistrovali!';
$strings['Continue'] = 'Pokra�ova�...';
$strings['Your profile has been successfully updated!'] = 'V� profil bol �spe�ne zmenen�!';
$strings['Please return to My Control Panel'] = 'Pros�m vr�te sa na M�j riadiaci panel';
$strings['Valid email address is required.'] = '- je po�adovan� platn� emailov� adresa.';
$strings['First name is required.'] = '- Krstn� meno je po�adovan�.';
$strings['Last name is required.'] = '- Priezvisko je po�adovan�.';
$strings['Phone number is required.'] = '- Telef�nne ��slo je po�adovan�.';
$strings['That email is taken already.'] = '- T�to emailov� adresa u� existuje.<br />Pros�m zadajte in� emailov� adresu.';
$strings['Min 6 character password is required.'] = '- Je po�adovan� heslo s minim�lne %s znakmi.';
$strings['Passwords do not match.'] = '- Hesl� sa nezhoduj�.';

$strings['Per page'] = 'Na str�nku:';
$strings['Page'] = 'Str�nka:';

$strings['Your reservation was successfully created'] = 'Va�a rezerv�cia bola �spe�ne vytvoren�';
$strings['Your reservation was successfully modified'] = 'Va�a rezerv�cia bola �spe�ne zmenen�';
$strings['Your reservation was successfully deleted'] = 'Va�a rezerv�cia bola �spe�ne odstr�nen�';
$strings['Your blackout was successfully created'] = 'V� v�padok bol �spe�ne vytvoren�';
$strings['Your blackout was successfully modified'] = 'V� v�padok bol �spe�ne zmenen�';
$strings['Your blackout was successfully deleted'] = 'V� v�padok bol �spe�ne odstr�nen�';
$strings['for the follwing dates'] = 'pre nasleduj�ce d�ta:';
$strings['Start time must be less than end time'] = 'Po�iato�n� �as mus� by� men�� ne� koncov� �as.';
$strings['Current start time is'] = 'Aktu�lny po�iato�n� �as je:';
$strings['Current end time is'] = 'Aktu�lny koncov� �as je:';
$strings['Reservation length does not fall within this resource\'s allowed length.'] = 'D�ka rezerv�cie nie je v intervale povolenej d�ky pre tento zdroj.';
$strings['Your reservation is'] = 'Va�a rezerv�cia je:';
$strings['Minimum reservation length'] = 'Minim�lna d�ka rezerv�cie:';
$strings['Maximum reservation length'] = 'Maxim�lna d�ka rezerv�cie:';
$strings['You do not have permission to use this resource.'] = 'Nem�te opr�vnenie k pou��vaniu tohto zdroja.';
$strings['reserved or unavailable'] = '%s a� %s je rezervovan� alebo nepr�stupn�.';	// @since 1.1.0
$strings['Reservation created for'] = 'Rezerv�cia vytvoren� pre %s';
$strings['Reservation modified for'] = 'Rezerv�cia zmenen� pre %s';
$strings['Reservation deleted for'] = 'Rezerv�cia odstr�nen� pre %s';
$strings['created'] = 'vytvoren�';
$strings['modified'] = 'zmenen�';
$strings['deleted'] = 'odstr�nen�';
$strings['Reservation #'] = 'Rezerv�cia #';
$strings['Contact'] = 'Kontakt';
$strings['Reservation created'] = 'Rezerv�cia vytvoren�';
$strings['Reservation modified'] = 'Rezerv�cia zmenen�';
$strings['Reservation deleted'] = 'Rezerv�cia odstr�nen�';

$strings['Reservations by month'] = 'Rezerv�cie po mesiacoch';
$strings['Reservations by day of the week'] = 'Rezerv�cie po d�och v t��dni';
$strings['Reservations per month'] = 'Rezerv�cie po d�och v mesiaci';
$strings['Reservations per user'] = 'Rezerv�cie na u��vate�a';
$strings['Reservations per resource'] = 'Rezerv�cie na zdroj';
$strings['Reservations per start time'] = 'Rezerv�cie pod�a po�iato�n�ho �asu';
$strings['Reservations per end time'] = 'Rezerv�cie pod�a koncov�ho �asu';
$strings['[All Reservations]'] = '[V�etky rezerv�cie]';

$strings['Permissions Updated'] = 'Opr�vnenia aktualizovan�';
$strings['Your permissions have been updated'] = 'Va�e %s opr�vnenia boli aktualizovan�';
$strings['You now do not have permission to use any resources.'] = 'Teraz nem�te opr�vnenie k pou�itiu �iadneho zdroja.';
$strings['You now have permission to use the following resources'] = 'Teraz m�te opr�vnenie k pou�itiu n�sleduj�ceho zdroja:';
$strings['Please contact with any questions.'] = 'Pros�m kontaktujte %s s �ubovo�nou po�iadavkou.';
$strings['Password Reset'] = 'Reset hesla';

$strings['This will change your password to a new, randomly generated one.'] = 'Toto zmen� va�e heslo na nov�, n�hodne vygenerovan�.';
$strings['your new password will be set'] = 'Po vlo�en� v�ho emailu a kliknut� na "Zmeni� heslo" v�m syst�m nastav� nov� heslo a za�le ho emailom.';
$strings['Change Password'] = 'Zmeni� heslo';
$strings['Sorry, we could not find that user in the database.'] = 'Prep��te, tohoto u��vate�a sme nena�li v datab�ze.';
$strings['Your New Password'] = 'Va�e nov� %s heslo';
$strings['Your new passsword has been emailed to you.'] = '�spech!<br />'
    			. 'Va�e nov� heslo v�m bolo poslan� emailom.<br />'
    			. 'Pros�m skontrolujte si va�u emailov� schr�nku, kde bude nov� heslo, potom sa <a href="index.php">prihl�ste</a>'
    			. ' s t�mto nov�m heslom a ur�chlene ho zme�te kliknut�m na odkaz &quot;Zmeni� m�j profil/heslo&quot;'
    			. ' v oblasti M�j riadiaci panel.';

$strings['You are not logged in!'] = 'Nie ste prihl�sen�!';

$strings['Setup'] = 'Nastavenie';
$strings['Please log into your database'] = 'Pros�m prihl�ste sa do va�ej datab�zy';
$strings['Enter database root username'] = 'Vlo�te u��vate�sk� meno administr�tora datab�zy:';
$strings['Enter database root password'] = 'Vlo�te heslo administr�tora datab�zy:';
$strings['Login to database'] = 'Prihl�senie do datab�zy';
$strings['Root user is not required. Any database user who has permission to create tables is acceptable.'] = 'Administr�torsk� pr�va <b>nie s� potrebn�</b>. Ktor�ko�vek u��vate� datab�zy s pr�vom vytv�ra� tabu�ky posta�uje.';
$strings['This will set up all the necessary databases and tables for phpScheduleIt.'] = 'Toto nastav� potrebn� datab�zy a tabu�ky pre phpScheduleIt.';
$strings['It also populates any required tables.'] = 'Toto tie� vypln� potrebn� tabu�ky.';
$strings['Warning: THIS WILL ERASE ALL DATA IN PREVIOUS phpScheduleIt DATABASES!'] = 'Varovanie: TOTO ODSTR�NI V�ETKY D�TA V PREDCH�DZAJ�CICH DATAB�ZACH phpScheduleIt!';
$strings['Not a valid database type in the config.php file.'] = 'Neplatn� typ datab�zy v s�bore config.php.';
$strings['Database user password is not set in the config.php file.'] = 'Heslo pre u��vate�a datab�zy nie je nastaven� v s�bore config.php.';
$strings['Database name not set in the config.php file.'] = 'N�zov datab�zy nie je nastaven� v s�bore config.php.';
$strings['Successfully connected as'] = '�spe�ne pripojen� ako';
$strings['Create tables'] = 'Vytvori� tabu�ky &gt;';
$strings['There were errors during the install.'] = 'Behom in�tal�cie sa vyskytly chyby. Je mo�n�, �e phpScheduleIt bude aj tak fungova�, pokia� chyby neboli z�va�n�.<br/><br/>'
	. 'Pros�m ak�ko�vek dotazy uv�dzajte v diskusn�ch f�rach na <a href="http://sourceforge.net/forum/?group_id=95547">SourceForge</a>.';
$strings['You have successfully finished setting up phpScheduleIt and are ready to begin using it.'] = '�spe�ne ste dokon�ili nastavenie phpScheduleIt a m��ete ho za�a� pou��va�.';
$strings['Thank you for using phpScheduleIt'] = 'Pros�m zabezpe�te �PLN� ODSTR�NENIE ADRES�RA \'install\' .'
	. ' To je ve�mi d�le�it�, preto�e obsahuje hesl� do datab�zy a �al�ie citliv� inform�cie.'
	. ' Pokia� to nezabezpe��te, nech�te tak otvoren� dvere k preniknutiu do va�ej datab�zy!'
	. '<br /><br />'
	. '�akujeme v�m, �e pou��vate phpScheduleIt!';
$strings['There is no way to undo this action'] = 'T�to akciu nie je mo�n� vr�ti� sp�!';
$strings['Click to proceed'] = 'Kliknite pre pokra�ovanie';
$strings['Please delete this file.'] = 'Pros�m odstr��te tento s�bor.';
$strings['Successful update'] = 'Aktualiz�cia prebehla vporiadku';
$strings['Patch completed successfully'] = 'Z�plata bola �spe�ne aplikovan�';

// @since 1.0.0 RC1
$strings['If no value is specified, the default password set in the config file will be used.'] = 'Pokia� nie je uveden� �iadna hodnota, bude pou�it� heslo uveden� v konfigura�nom s�bore.';
$strings['Notify user that password has been changed?'] = 'Upovedomi� u��vate�a, �e heslo bolo zmenen�?';

// @since 1.1.0
$strings['This system requires that you have an email address.'] = 'Tento syst�m vy�aduje, aby ste mali emailov� adresu.';
$strings['Invalid User Name/Password.'] = 'Neplatn� u��vate�sk� meno/heslo.';
$strings['Pending User Reservations'] = 'Nevybaven� u��vate�sk� rezerv�cie';
$strings['Approve'] = 'Schv�li�';
$strings['Approve this reservation'] = 'Schv�li� t�to rezerv�ciu';
$strings['Approve Reservations'] ='Schv�li� rezerv�cie';

$strings['Announcement'] = 'Ozn�menie';
$strings['Number'] = '��slo';
$strings['Add Announcement'] = 'Prida� ozn�menie';
$strings['Edit Announcement'] = 'Upravi� ozn�menie';
$strings['All Announcements'] = 'V�etky ozn�menia';
$strings['Delete Announcements'] = 'Odstr�ni� ozn�menia';
$strings['Use start date/time?'] = 'Pou�i� po�iato�n� d�tum/�as?';
$strings['Use end date/time?'] = 'Pou�i� koncov� d�tum/�as?';
$strings['Announcement text is required.'] = 'Text ozn�menia je po�adovan�.';
$strings['Announcement number is required.'] = '��slo ozn�menia je po�adovan�.';

$strings['Pending Approval'] = 'Nevybaven� schv�lenie';
$strings['My reservation is approved'] = 'Moja rezerv�cia je schv�len�';
$strings['This reservation must be approved by the administrator.'] = 'T�to rezerv�cia mus� by� schv�len� administr�torom.';
$strings['Approval Required'] = 'Schv�lenie je po�adovan�';
$strings['No reservations requiring approval'] = '�iadne rezerv�cie na schv�lenie';
$strings['Your reservation was successfully approved'] = 'Va�a rezerv�cia bola �spe�ne schv�len�';
$strings['Reservation approved for'] = 'Rezerv�cia schv�len� pre %s';
$strings['approved'] = 'schv�len�';
$strings['Reservation approved'] = 'Rezerv�cia schv�len�';

$strings['Valid username is required'] = 'Je po�adovan� platn� u��vate�sk� meno';
$strings['That logon name is taken already.'] = 'Toto prihlasovacie meno je u� pou��van�.';
$strings['this will be your login'] = '(toto bude va�e prihlasovacie meno)';
$strings['Logon name'] = 'Prihlasovacie meno';
$strings['Your logon name is'] = 'Va�e prihlasovacie meno je %s';

$strings['Start'] = 'Za�iatok';
$strings['End'] = 'Koniec';
$strings['Start date must be less than or equal to end date'] = 'Po�iato�n� d�tum mus� by� men�� alebo rovn� koncov�mu d�tumu';
$strings['That starting date has already passed'] = 'Po�iato�n� d�tum u� uplynul';
$strings['Basic'] = 'Z�kladn�';
$strings['Participants'] = '��astn�ci';
$strings['Close'] = 'Zatvori�';
$strings['Start Date'] = 'Po�iato�n� d�tum';
$strings['End Date'] = 'Koncov� d�tum';
$strings['Minimum'] = 'Minimum';
$strings['Maximum'] = 'Maximum';
$strings['Allow Multiple Day Reservations'] = 'Povoli� viacd�ov� rezerv�cie';
$strings['Invited Users'] = 'Pozvan� u��vatelia';
$strings['Invite Users'] = 'Pozva� u��vate�ov';
$strings['Remove Participants'] = 'Odstr�ni� ��astn�kov';
$strings['Reservation Invitation'] = 'Pozvanie Rezerv�cie';
$strings['Manage Invites'] = 'Spr�va pozv�nok';
$strings['No invite was selected'] = 'Neboli vybran� �iadne pozv�nky';
$strings['reservation accepted'] = '%s Va�e pozvanie na %s prijat�';
$strings['reservation declined'] = '%s Va�e pozvanie na %s zamietnut�';
$strings['Login to manage all of your invitiations'] = 'Prihl�ste sa ku spr�ve v�etk�ch Va�ich pozvan�';
$strings['Reservation Participation Change'] = 'Zmena ��asti na rezerv�cii';
$strings['My Invitations'] = 'Moje pozvania';
$strings['Accept'] = 'Prija�';
$strings['Decline'] = 'Zamietnu�';
$strings['Accept or decline this reservation'] = 'Prija� alebo zamietnu� t�to rezerv�ciu';
$strings['My Reservation Participation'] = 'Moja ��as� na rezerv�cii';
$strings['End Participation'] = 'Koniec ��asti';
$strings['Owner'] = 'Vlastn�k';
$strings['Particpating Users'] = 'Z��astnen� u��vatelia';
$strings['No advanced options available'] = '�iadne pokro�il� vo�by nie s� pr�stupn�';
$strings['Confirm reservation participation'] = 'Potvr�te ��as� na rezerv�cii';
$strings['Confirm'] = 'Potvrdi�';
$strings['Do for all reservations in the group?'] = 'Vykona� pre v�etky rezerv�cie v skupine?';

$strings['My Calendar'] = 'M�j kalend�r';
$strings['View My Calendar'] = 'Zobrazi� M�j kalend�r';
$strings['Participant'] = '��astn�k';
$strings['Recurring'] = 'Opakuj�ci sa';
$strings['Multiple Day'] = 'Viacej dn�';
$strings['[today]'] = '[dnes]';
$strings['Day View'] = 'Zobrazenie d�a';
$strings['Week View'] = 'Zobrazenie t��d�a';
$strings['Month View'] = 'Zobrazenie mesiaca';
$strings['Resource Calendar'] = 'Kalend�r zdrojov';
$strings['View Resource Calendar'] = 'Pl�novac� kalend�r';	// @since 1.2.0
$strings['Signup View'] = 'Zobrazenie registr�cie';

$strings['Select User'] = 'Vybra� u��vate�a';
$strings['Change'] = 'Zmeni�';

$strings['Update'] = 'Aktualizova�';
$strings['phpScheduleIt Update is only available for versions 1.0.0 or later'] = 'Aktualiz�cia  phpScheduleIt je dostupn� len pre verziu 1.0.0 a vy��ie';
$strings['phpScheduleIt is already up to date'] = 'phpScheduleIt je aktualizovan�';
$strings['Migrating reservations'] = 'Migruj�ce rezerv�cie';

$strings['Admin'] = 'Admin';
$strings['Manage Announcements'] = 'Spravovanie ozn�men�';
$strings['There are no announcements'] = 'Nie s� �iadne ozn�menia';
// end since 1.1.0

// @since 1.2.0
$strings['Maximum Participant Capacity'] = 'Maxim�lna kapacita ��astn�kov';
$strings['Leave blank for unlimited'] = 'Nevypl�ajte pre neobmedzen� po�et';
$strings['Maximum of participants'] = 'Tento zdroj m� maxim�lnu kapacitu %s ��astn�kov';
$strings['That reservation is at full capacity.'] = 'T�to rezerv�cia je obsaden�.';
$strings['Allow registered users to join?'] = 'Umo�ni� pridanie pre registrovan�ch u��vate�ov?';
$strings['Allow non-registered users to join?'] = 'Umo�ni� pridanie pre neregistrovan�ch u��vate�ov?';
$strings['Join'] = 'Prida� sa';
$strings['My Participation Options'] = 'Nastavenia pre moju ��as�';
$strings['Join Reservation'] = 'Prida� sa k rezerv�cii';
$strings['Join All Recurring'] = 'Prida� sa ku v�etk�m opakuj�cim';
$strings['You are not participating on the following reservation dates because they are at full capacity.'] = 'Nie ste ��astn�kom nasleduj�cich rezerva�n�ch term�nov, preto�e s� obsaden�.';
$strings['You are already invited to this reservation. Please follow participation instructions previously sent to your email.'] = 'U� ste boli pozvan� k tejto rezerv�cii. Pozrite si pros�m in�trukcie pre ��as�, ktor� boli poslan� na Va�u emailov� adresu.';
$strings['Additional Tools'] = 'Doplnkov� n�stroje';
$strings['Create User'] = 'Vytvori� u��vate�a';
$strings['Check Availability'] = 'Skontrolova� dostupnos�';
$strings['Manage Additional Resources'] = 'Spr�va dodatocn�ch zdrojov';
$strings['Number Available'] = 'Po�et dostupn�ch';
$strings['Unlimited'] = 'Neobmedzen�';
$strings['Add Additional Resource'] = 'Pridat dodatocn� zdroj';
$strings['Edit Additional Resource'] = 'Zmenit dodatocn� zdroj';
$strings['Checking'] = 'Overenie';
$strings['You did not select anything to delete.'] = 'Nevybrali ste ni� na zmazanie.';
$strings['Added Resources'] = 'Pridan� zdroje';
$strings['Additional resource is reserved'] = 'Dodato�n� zdroj %s m� dostupn�ch len %s v tomto �ase';
$strings['All Groups'] = 'V�etky skupiny';
$strings['Group Name'] = 'Meno skupiny';
$strings['Delete Groups'] = 'Zmaza� skupiny';
$strings['Manage Groups'] = 'Spravovanie skup�n';
$strings['None'] = '�iadny';
$strings['Group name is required.'] = 'Je po�adovan� meno skupiny.';
$strings['Groups'] = 'Skupiny';
$strings['Current Groups'] = 'Aktu�lne skupiny';
$strings['Group Administration'] = 'Skupinov� administr�cia';
$strings['Reminder Subject'] = 'Pripomienkova� pre rezerv�ciu- %s, %s %s';
$strings['Reminder'] = 'Pripomienkova�';
$strings['before reservation'] = 'pred rezerv�ciou';
$strings['My Participation'] = 'Moja ��as�';
$strings['My Past Participation'] = 'Moja posledn� ��as�';
$strings['Timezone'] = '�asov� p�smo';
$strings['Export'] = 'Export';
$strings['Select reservations to export'] = 'Vyberte rezerv�cie na export';
$strings['Export Format'] = 'Form�t exportu';
$strings['This resource cannot be reserved less than x hours in advance'] = 'Tento zdroj nesmie by� rezervovan� menej ne� %s hod�n vopred';
$strings['This resource cannot be reserved more than x hours in advance'] = 'Tento zdroj nesmie by� rezervovan� viac ne� %s hod�n vopred';
$strings['Minimum Booking Notice'] = 'Minim�lny po�et oznamov pre rezerv�ciu';
$strings['Maximum Booking Notice'] = 'Maxim�lny po�et oznamov pre rezerv�ciu';
$strings['hours prior to the start time'] = 'hod�n pred po�iato�n�m �asom';
$strings['hours from the current time'] = 'hod�n od aktu�lneho �asu';
$strings['Contains'] = 'Obsahuje';
$strings['Begins with'] = 'Za��na s';
$strings['Minimum booking notice is required.'] = 'Minim�lny po�et oznamov pre rezerv�ciu je po�adovan�.';
$strings['Maximum booking notice is required.'] = 'Maxim�lny po�et oznamov pre rezerv�ciu je po�adovan�.';
$strings['Accessory Name'] = 'Meno doplnku';
$strings['Accessories'] = 'Doplnky';
$strings['All Accessories'] = 'V�etky doplnky';
$strings['Added Accessories'] = 'Pridan� doplnky';
// end since 1.2.0

/***
  EMAIL MESSAGES
  Please translate these email messages into your language.  You should keep the sprintf (%s) placeholders
   in their current position unless you know you need to move them.
  All email messages should be surrounded by double quotes "
  Each email message will be described below.
***/
// @since 1.1.0
// Email message that a user gets after they register
$email['register'] = "%s, %s \r\n"
				. "Boli ste �spe�ne zaregistrovan� s n�sledujuc�mi �dajmi:\r\n"
				. "Prihlasovacie meno: %s\r\n"
				. "Meno: %s %s \r\n"
				. "Telef�n: %s \r\n"
				. "In�tit�cia: %s \r\n"
				. "Poz�cia: %s \r\n\r\n"
				. "Pros�m prihl�ste sa pre vyu��vanie Pl�nova�a na tejto adrese:\r\n"
				. "%s \r\n\r\n"
				. "Upravi� svoj profil a n�js� odkazy na online Pl�nova� m��ete v sekcii M�j riadiaci panel.\r\n\r\n"
				. "Po�lite pros�m ak�ko�vek ot�zky oh�adom zdrojov alebo rezerv�ci� na adresu %s";

// Email message the admin gets after a new user registers
$email['register_admin'] = "Administr�tor,\r\n\r\n"
					. "Bol zaregistrovan� nov� u��vate� s nasleduj�cimi �dajmi:\r\n"
					. "Email: %s \r\n"
					. "Meno: %s %s \r\n"
					. "Telef�n: %s \r\n"
					. "In�tit�cia: %s \r\n"
					. "Poz�cia: %s \r\n\r\n";

// First part of the email that a user gets after they create/modify/delete a reservation
// 'reservation_activity_1' through 'reservation_activity_6' are all part of one email message
//  that needs to be assembled depending on different options.  Please translate all of them.
// @since 1.1.0
$email['reservation_activity_1'] = "%s,\r\n<br />"
			. "M�te �spe�n� %s rezerv�ciu #%s.\r\n\r\n<br/><br/>"
			. "Pou��vajte pros�m toto ��slo rezerv�cie pri kontakte administr�tora s akouko�vek  ot�zkou.\r\n\r\n<br/><br/>"
			. "Rezerv�cia medzi %s %s a %s %s pre %s"
			. " v mieste %s bola %s.\r\n\r\n<br/><br/>";
$email['reservation_activity_2'] = "T�to rezerv�cia sa opakuje v nasleduj�ce dni:\r\n<br/>";
$email['reservation_activity_3'] = "V�etky opakuj�ce sa rezerv�cie v tejto skupine boli tak� %s.\r\n\r\n<br/><br/>";
$email['reservation_activity_4'] = "Pre t�to rezerv�ciu bol poskytnut� nasleduj�ci s�hrn :\r\n<br/>%s\r\n\r\n<br/><br/>";
$email['reservation_activity_5'] = "Pokia� ide o chybu, kontaktujte pros�m administr�tora na: %s"
			. " alebo volajte  %s.\r\n\r\n<br/><br/>"
			. "Inform�cie o va�ej rezerv�cii m��ete prezera� alebo meni� kedyko�vek po"
			. " prihl�sen� do %s na adrese:\r\n<br/>"
			. "<a href=\"%s\" target=\"_blank\">%s</a>.\r\n\r\n<br/><br/>";
$email['reservation_activity_6'] = "V�etky technick� ot�zky smerujte na <a href=\"mailto:%s\">%s</a>.\r\n\r\n<br/><br/>";
// @since 1.1.0
$email['reservation_activity_7'] = "%s,\r\n<br />"
			. "Rezerv�cia #%s bola schv�len�.\r\n\r\n<br/><br/>"
			. "Pros�m pou��vajte toto ��slo rezerv�cie pri kontakte administr�tora s akouko�vek  ot�zkou.\r\n\r\n<br/><br/>"
			. "Rezerv�cia medzi %s %s a %s %s pre %s"
			. " umiestnen� v %s bola %s.\r\n\r\n<br/><br/>";

// Email that the user gets when the administrator changes their password
$email['password_reset'] = "Va�e %s heslo bolo resetovan� administr�torom.\r\n\r\n"
			. "Va�e do�asn� heslo je:\r\n\r\n %s\r\n\r\n"
			. "Pros�m pou�ijte toto do�asn� heslo (k zabezpe�eniu spr�vnosti pou�ijte funkciu �pravy | Kop�rova� a Vlo�it) pre prihl�senie do %s na %s"
			. " a okam�ite ho zme�te pomocou odkazu 'Zmeni� M�j profil/Heslo' z tabu�ky Moje r�chle odkazy.\r\n\r\n"
			. "Pros�m, kontaktujte %s s akouko�vek po�iadavkou.";

// Email that the user gets when they change their lost password using the 'Password Reset' form
$email['new_password'] = "%s,\r\n"
            . "Va�e nov� heslo pre v� %s ��et je:\r\n\r\n"
            . "%s\r\n\r\n"
            . "Pros�m, prihl�ste se na %s "
            . "s t�mto heslom "
            . "(k zabezpe�eniu spr�vnosti pou�ijte funkciu �pravy | Kop�rova� a Vlo�i�) "
            . "a okam�ite zme�te va�e heslo kliknut�m na "
            . "odkaz Zmeni� M�j profil/Heslo "
            . "v sekcii M�j riadiaci panel.\r\n\r\n"
            . "Pros�m, ak�ko�vek po�iadavky smerujte na %s.";

// @since 1.1.0
// Email that is sent to invite users to a reservation
$email['reservation_invite'] = "%s v�s pozval k ��asti pre n�sleduj�cu rezerv�ciu:\r\n\r\n"
		. "Zdroj: %s\r\n"
		. "Po�iato�n� d�tum: %s\r\n"
		. "Po�iato�n� �as: %s\r\n"
		. "Koncov� d�tum: %s\r\n"
		. "Koncov� �as: %s\r\n"
		. "S�hrn: %s\r\n"
		. "Opakovan� d�ta (pokia� s� dostupn�): %s\r\n\r\n"
		. "Pre prijatie tejto pozv�nky kliknite na tento odkaz (Kop�rujte a Vlo�te, pokia� nie je zv�raznen�) %s\r\n"
		. "Pre odmietnutie tejto pozv�nky kliknite na tento link (Kop�rujte a Vlo�te, pokia� nie je zv�raznen�) %s\r\n"
		. "Pre neskor�ie prijatie vybran�ch d�t alebo spr�vu pozv�nok sa prihlaste do %s na %s";

// @since 1.1.0
// Email that is sent when a user is removed from a reservation
$email['reservation_removal'] = "Boli ste odstr�nen� z n�sleduj�cej rezerv�cie:\r\n\r\n"
		. "Zdroj: %s\r\n"
		. "Po�iato�n� d�tum: %s\r\n"
		. "Po�iato�n� �as: %s\r\n"
		. "Koncov� d�tum: %s\r\n"
		. "Koncov� �as: %s\r\n"
		. "S�hrn: %s\r\n"
		. "Opakovan� d�ta (pokia� s� dostupn�): %s\r\n\r\n";

// @since 1.2.0
// Email body that is sent for reminders
$email['Reminder Body'] = "Va�a rezerv�cia pre %s od %s %s do %s %s sa bl�i.";
?>