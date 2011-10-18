<?php
/**
* Czech (cs) translation file.
*  
* @author Nick Korbel <lqqkout13@users.sourceforge.net>
* @translator <jindrich@natur.cuni.cz>
* @version 05-13-06
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
$charset = 'iso-8859-2';

/***
  DAY NAMES
  All of these arrays MUST start with Sunday as the first element 
   and go through the seven day week, ending on Saturday
***/
// The full day name
$days_full = array('Ned�le', 'Pond�l�', '�ter�', 'St�eda', '�tvrtek', 'P�tek', 'Sobota');
// The three letter abbreviation
$days_abbr = array('Ned', 'Pon', '�te', 'St�', '�tv', 'P�t', 'Sob');
// The two letter abbreviation
$days_two  = array('Ne', 'Po', '�t', 'St', '�t', 'P�', 'So');
// The one letter abbreviation
$days_letter = array('n', 'P', 'U', 'S', '�', 'p', 's');

/***
  MONTH NAMES
  All of these arrays MUST start with January as the first element
   and go through the twelve months of the year, ending on December
***/
// The full month name
$months_full = array('Leden', '�nor', 'B�ezen', 'Duben', 'Kv�ten', '�erven', '�ervenec', 'Srpen', 'Z���', '��jen', 'Listopad', 'Prosinec');
// The three letter month name
$months_abbr = array('Led', '�no', 'B�e', 'Dub', 'Kv�', '�en', '�ec', 'Srp', 'Z��', '��j', 'Lis', 'Pro');

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
$strings['minutes'] = 'minuty';
// The common abbreviation to hint that a user should enter the month as 2 digits
$strings['mm'] = 'mm';
// The common abbreviation to hint that a user should enter the day as 2 digits
$strings['dd'] = 'dd';
// The common abbreviation to hint that a user should enter the year as 4 digits
$strings['yyyy'] = 'rrrr';
$strings['am'] = 'am';
$strings['pm'] = 'pm';

$strings['Administrator'] = 'Administrator';
$strings['Welcome Back'] = 'V�tejte zp�t, %s';
$strings['Log Out'] = 'Odhl�sit se';
$strings['My Control Panel'] = 'M�j ��d�c� Panel';
$strings['Help'] = 'N�pov�da';
$strings['Manage Schedules'] = 'Spr�va rozvrh�';
$strings['Manage Users'] ='Spr�va u�ivatel�';
$strings['Manage Resources'] ='Spr�va zdroj�';
$strings['Manage User Training'] ='Spr�va �kolen� u�ivatel�';
$strings['Manage Reservations'] ='Spr�va rezervac�';
$strings['Email Users'] ='Email u�ivatel�m';
$strings['Export Database Data'] = 'Export dat z datab�ze';
$strings['Reset Password'] = 'Reset hesla';
$strings['System Administration'] = 'Administrace syst�mu';
$strings['Successful update'] = '�sp�n� aktualizace';
$strings['Update failed!'] = 'Aktualizace selhala!';
$strings['Manage Blackout Times'] = 'Spr�va �as� v�padk�';
$strings['Forgot Password'] = 'Heslo zapomenuto';
$strings['Manage My Email Contacts'] = 'Spr�va m�ch email kontakt�';
$strings['Choose Date'] = 'Vyberte datum';
$strings['Modify My Profile'] = 'Zm�nit m�j profil';
$strings['Register'] = 'Registrovat';
$strings['Processing Blackout'] = 'Zpracov�v�n� v�padk�';
$strings['Processing Reservation'] = 'Zpracov�v�n� rezervac�';
$strings['Online Scheduler [Read-only Mode]'] = 'Online Pl�nova�[jen ke �ten�]';
$strings['Online Scheduler'] = 'Online Pl�nova�';
$strings['phpScheduleIt Statistics'] = 'Statistika rezervac�';
$strings['User Info'] = 'Informace o u�ivateli:';

$strings['Could not determine tool'] = 'Nebylo mo�n� ur�it n�stroj. Vra�te se pros�m na v� ��d�c� panel a zkuste znovu pozd�ji.';
$strings['This is only accessable to the administrator'] = 'Toto je p��stupn� pouze pro administr�tora';
$strings['Back to My Control Panel'] = 'Zp�t na M�j ��d�c� panel';
$strings['That schedule is not available.'] = 'Tento rozvrh nen� p��stupn�.';
$strings['You did not select any schedules to delete.'] = 'Nevybral jste ��dn� rozvrh k odstran�n�.';
$strings['You did not select any members to delete.'] = 'Nevybral jste ��dn� u�ivatele k odstran�n�.';
$strings['You did not select any resources to delete.'] = 'Nevybral jste ��dn� zdroje k odstran�n�.';
$strings['Schedule title is required.'] = 'N�zev rozvrhu je vy�adov�n.';
$strings['Invalid start/end times'] = 'Neplatn� �asy za��tku/konce';
$strings['View days is required'] = 'View days je vy�adov�n';
$strings['Day offset is required'] = 'Day offset je vy�adov�n';
$strings['Admin email is required'] = 'Email administr�tora je vy�adov�n';
$strings['Resource name is required.'] = 'N�zev zdroje je vy�adov�n.';
$strings['Valid schedule must be selected'] = 'Mus� b�t vybr�n platn� rozvrh.';
$strings['Minimum reservation length must be less than or equal to maximum reservation length.'] = 'Minim�ln� d�lka rezervace mus� b�t stejn� nebo men�� ne� maxim�ln�.';
$strings['Your request was processed successfully.'] = 'V� po�adavek byl �sp�n� zpracov�n.';
$strings['Go back to system administration'] = 'Jd�te zp�t na administraci syst�mu';
$strings['Or wait to be automatically redirected there.'] = 'Nebo po�kejte dokud tam nebudete automaticky p�esm�rov�ni.';
$strings['There were problems processing your request.'] = 'P�i zpracov�n� va�eho po�adavku se vyskytly probl�my.';
$strings['Please go back and correct any errors.'] = 'Pros�m vra�te se a opravte chyby.';
$strings['Login to view details and place reservations'] = 'Zalogujte se k prohl�en� podrobnost� a zad�v�n� rezervac�';
$strings['Memberid is not available.'] = 'Memberid: %s nen� dostupn�.';

$strings['Schedule Title'] = 'N�zev rozvrhu';
$strings['Start Time'] = 'Po��te�n� �as';
$strings['End Time'] = 'Koncov� �as';
$strings['Time Span'] = '�asov� rozp�t�';
$strings['Weekday Start'] = 'Po��tek t�dne';
$strings['Admin Email'] = 'Email administr�tora';

$strings['Default'] = 'V�choz�';
$strings['Reset'] = 'Reset';
$strings['Edit'] = 'Upravit';
$strings['Delete'] = 'Odstranit';
$strings['Cancel'] = 'Zru�it';
$strings['View'] = 'Zobrazit';
$strings['Modify'] = 'Zm�nit';
$strings['Save'] = 'Ulo�it';
$strings['Back'] = 'Zp�t';
$strings['Next'] = 'Dal��';
$strings['Close Window'] = 'Zav��t okno';
$strings['Search'] = 'Hledat';
$strings['Clear'] = 'Vymazat';

$strings['Days to Show'] = 'Uk�zat dny';
$strings['Reservation Offset'] = 'Offset rezervace';
$strings['Hidden'] = 'Skryt';
$strings['Show Summary'] = 'Uk�zat souhrn';
$strings['Add Schedule'] = 'P�idat rozvrh';
$strings['Edit Schedule'] = 'Upravit rozvrh';
$strings['No'] = 'Ne';
$strings['Yes'] = 'Ano';
$strings['Name'] = 'Jm�no';
$strings['First Name'] = 'K�estn� jm�no';
$strings['Last Name'] = 'P��jmen�';
$strings['Resource Name'] = 'N�zev zdroje';
$strings['Email'] = 'Email';
$strings['Institution'] = 'Instituce';
$strings['Phone'] = 'Telefon';
$strings['Password'] = 'Heslo';
$strings['Permissions'] = 'Opr�vn�n�';
$strings['View information about'] = 'Zobrazit informaci pro: %s %s';
$strings['Send email to'] = 'Poslat email komu: %s %s';
$strings['Reset password for'] = 'Reset hesla pro:  %s %s';
$strings['Edit permissions for'] = 'Upravit opr�vn�n� pro: %s %s';
$strings['Position'] = 'Pozice';
$strings['Password (6 char min)'] = 'Heslo (%s znak� minim�ln�)';	// @since 1.1.0
$strings['Re-Enter Password'] = 'Znovu vlo�it heslo';

$strings['Sort by descending last name'] = 'Set��dit sestupn� podle p��jmen�';
$strings['Sort by descending email address'] = 'Set��dit sestupn� podle emailu';
$strings['Sort by descending institution'] = 'Set��dit sestupn� podle instituce';
$strings['Sort by ascending last name'] = 'Set��dit vzestupn� podle p��jmen�';
$strings['Sort by ascending email address'] = 'Set��dit vzestupn� podle emailu';
$strings['Sort by ascending institution'] = 'Set��dit vzestupn� podle instituce';
$strings['Sort by descending resource name'] = 'Set��dit sestupn� podle n�zvu zdroje';
$strings['Sort by descending location'] = 'Set��dit sestupn� podle um�st�n�';
$strings['Sort by descending schedule title'] = 'Set��dit sestupn� podle n�zvu rozvrhu';
$strings['Sort by ascending resource name'] = 'Set��dit vzestupn� podle n�zvu zdroje';
$strings['Sort by ascending location'] = 'Set��dit vzestupn� podle um�st�n�';
$strings['Sort by ascending schedule title'] = 'Set��dit vzestupn� podle n�zvu rozvrhu';
$strings['Sort by descending date'] = 'Set��dit sestupn� podle data';
$strings['Sort by descending user name'] = 'Sest��dit sestupn� podle jm�na u�ivatele';
$strings['Sort by descending start time'] = 'Set��dit sestupn� podle po��te�n�ho �asu';
$strings['Sort by descending end time'] = 'Set��dit sestupn� podle koncov�ho �asu';
$strings['Sort by ascending date'] = 'Set��dit vzestupn� podle data';
$strings['Sort by ascending user name'] = 'Set��dit vzestupn� podle jm�na u�ivatele';
$strings['Sort by ascending start time'] = 'Set��dit vzestupn� podle po��te�n�ho �asu';
$strings['Sort by ascending end time'] = 'Set��dit vzestupn� podle koncov�ho �asu';
$strings['Sort by descending created time'] = 'Set��dit sestupn� podle �asu vytvo�en�';
$strings['Sort by ascending created time'] = 'Set��dit vzestupn� podle �asu vytvo�en�';
$strings['Sort by descending last modified time'] = 'Set��dit sestupn� podle �asu posledn� zm�ny';
$strings['Sort by ascending last modified time'] = 'Set��dit vzestupn� podle �asu posledn� zm�ny';

$strings['Search Users'] = 'Vyhledat u�ivatele';
$strings['Location'] = 'Um�st�n�';
$strings['Schedule'] = 'Rozvrh';
$strings['Phone'] = 'Telefon';
$strings['Notes'] = 'Pozn�mky';
$strings['Status'] = 'Stav';
$strings['All Schedules'] = 'V�echny rozvrhy';
$strings['All Resources'] = 'V�echny zdroje';
$strings['All Users'] = 'V�ichni u�ivatel�';

$strings['Edit data for'] = 'Upravit data pro: %s';
$strings['Active'] = 'Aktivn�';
$strings['Inactive'] = 'Neaktivn�';
$strings['Toggle this resource active/inactive'] = 'P�epn�te tento zdroj - aktivn�/neaktivn�';
$strings['Minimum Reservation Time'] = 'Minim�ln� doba rezervace';
$strings['Maximum Reservation Time'] = 'Maxim�ln� doba rezervace';
$strings['Auto-assign permission'] = 'Automatick� p�i�azen� opr�vn�n�';
$strings['Add Resource'] = 'P�idat zdroj';
$strings['Edit Resource'] = 'Upravit zdroj';
$strings['Allowed'] = 'Povolen';
$strings['Notify user'] = 'Uv�domit u�ivatele';
$strings['User Reservations'] = 'Reservace u�ivatele';
$strings['Date'] = 'Datum';
$strings['User'] = 'U�ivatel';
$strings['Email Users'] = 'Email u�ivatel�m';
$strings['Subject'] = 'Subjekt';
$strings['Message'] = 'Zpr�va';
$strings['Please select users'] = 'Pros�m vyberte u�ivatele';
$strings['Send Email'] = 'Poslat email';
$strings['problem sending email'] = 'Promi�te, nepoda�ilo se odeslat v� email. Zkuste to pros�m pozd�ji.';
$strings['The email sent successfully.'] = 'Email byl �sp�n� odesl�n.';
$strings['do not refresh page'] = 'Pros�m <u>neobnovujte</u> tuto str�nku. Email by byl posl�n znovu.';
$strings['Return to email management'] = 'Zp�t ke spr�v� emailu';
$strings['Please select which tables and fields to export'] = 'Pros�m vyberte tabulky a pole k exportu:';
$strings['all fields'] = '- v�echna pole -';
$strings['HTML'] = 'HTML';
$strings['Plain text'] = 'Prost� text';
$strings['XML'] = 'XML';
$strings['CSV'] = 'CSV';
$strings['Export Data'] = 'Export Dat';
$strings['Reset Password for'] = 'Reset hesla pro: %s';
$strings['Please edit your profile'] = 'Pros�m, upravte v� profil';
$strings['Please register'] = 'Pros�m, registrujte se';
$strings['Keep me logged in'] = 'Udr�ujte m� p�ihl�en�ho<br/>(vy�aduje cookies)';
$strings['Edit Profile'] = 'Upravit profil';
$strings['Register'] = 'Registrace';
$strings['Please Log In'] = 'Pros�m, p�ihla�te se';
$strings['Email address'] = 'Emailov� adresa';
$strings['Password'] = 'Heslo';
$strings['First time user'] = 'Prvn� p�ipojen?';
$strings['Click here to register'] = 'Klikn�te zde pro registraci';
$strings['Register for phpScheduleIt'] = 'Registrace pro rezervace';
$strings['Log In'] = 'P�ihl�en�';
$strings['View Schedule'] = 'Zobrazit rozvrh';
$strings['View a read-only version of the schedule'] = 'Verze rozvrhu pouze ke �ten�';
$strings['I Forgot My Password'] = 'Zapomn�l jsem sv� heslo';
$strings['Retreive lost password'] = 'Z�sk�n� ztracen�ho hesla';
$strings['Get online help'] = 'Online n�pov�da';
$strings['Language'] = 'Jazyk';
$strings['(Default)'] = '(V�choz�)';

$strings['My Announcements'] = 'Moje ozn�men�';
$strings['My Reservations'] = 'Moje rezervace';
$strings['My Permissions'] = 'Moje opr�vn�n�';
$strings['My Quick Links'] = 'Moje rychl� odkazy';
$strings['Announcements as of'] = 'Ozn�men�: %s';
$strings['There are no announcements.'] = '��dn� ozn�men�.';
$strings['Resource'] = 'Zdroj';
$strings['Created'] = 'Vytvo�eno';
$strings['Last Modified'] = 'Posledn� zm�na';
$strings['View this reservation'] = 'Zobraz tuto rezervaci';
$strings['Modify this reservation'] = 'Zm�� tuto rezervaci';
$strings['Delete this reservation'] = 'Odstranit tuto rezervaci';
$strings['Bookings'] = 'P�ehled rezervac�';											// @since 1.2.0
$strings['Change My Profile Information/Password'] = 'Zm�nit profil';		// @since 1.2.0
$strings['Manage My Email Preferences'] = 'Nastaven� emailu';				// @since 1.2.0
$strings['Mass Email Users'] = 'Hromadn� email u�ivatel�m';
$strings['Search Scheduled Resource Usage'] = 'Hledat rezervace';		// @since 1.2.0
$strings['Export Database Content'] = 'Export obsahu datab�ze';
$strings['View System Stats'] = 'Zobrazit statistiku syst�mu';
$strings['Email Administrator'] = 'Email administr�torovi';

$strings['Email me when'] = 'Po�li mi email, kdy�:';
$strings['I place a reservation'] = 'Zad�m rezervaci';
$strings['My reservation is modified'] = 'Moje rezervace je zm�n�na';
$strings['My reservation is deleted'] = 'Moje rezervace je odstran�na';
$strings['I prefer'] = 'Up�ednost�uji:';
$strings['Your email preferences were successfully saved'] = 'Va�e emailov� nastaven� byla �sp�n� ulo�ena!';
$strings['Return to My Control Panel'] = 'Zp�t na M�j ��d�c� panel';

$strings['Please select the starting and ending times'] = 'Pros�m zvolte po��te�n� a koncov� �asy:';
$strings['Please change the starting and ending times'] = 'Pros�m zm��te po��te�n� a koncov� �asy:';
$strings['Reserved time'] = 'Reservovan� �as:';
$strings['Minimum Reservation Length'] = 'D�lka minim�ln� rezervace:';
$strings['Maximum Reservation Length'] = 'D�lka maxim�ln� rezervace:';
$strings['Reserved for'] = 'Rezervov�no pro:';
$strings['Will be reserved for'] = 'Bude rezervov�no pro:';
$strings['N/A'] = 'N/A';
$strings['Update all recurring records in group'] = 'Aktualizovat v�echny opakuj�c� se z�znamy ve skupin�?';
$strings['Delete?'] = 'Odstranit?';
$strings['Never'] = '-- Nikdy --';
$strings['Days'] = 'Dny';
$strings['Weeks'] = 'T�dny';
$strings['Months (date)'] = 'M�s�ce (datum)';
$strings['Months (day)'] = 'M�s�ce (den)';
$strings['First Days'] = 'Prvn� dny';
$strings['Second Days'] = 'Druh� dny';
$strings['Third Days'] = 'T�et� dny';
$strings['Fourth Days'] = '�tvrt� dny';
$strings['Last Days'] = 'Posledn� dny';
$strings['Repeat every'] = 'Opakuj ka�d�:';
$strings['Repeat on'] = 'Opakuj kdy:';
$strings['Repeat until date'] = 'Opakuj do data:';
$strings['Choose Date'] = 'Vyberte datum';
$strings['Summary'] = 'Souhrn';

$strings['View schedule'] = 'Zobrazit rozvrh:';
$strings['My Reservations'] = 'Moje rezervace';
$strings['My Past Reservations'] = 'Moje minul� rezervace';
$strings['Other Reservations'] = 'Dal�� rezervace';
$strings['Other Past Reservations'] = 'Dal�� minul� rezervace';
$strings['Blacked Out Time'] = 'V�padkov� �as';
$strings['Set blackout times'] = 'Nastavit v�padkov� �asy pro %s na %s'; 
$strings['Reserve on'] = 'Rezervovat %s na %s';
$strings['Prev Week'] = '&laquo; P�edchoz� t�den';
$strings['Jump 1 week back'] = 'Sko�it 1 t�den zp�t';
$strings['Prev days'] = '&#8249; P�edch. %d dny';
$strings['Previous days'] = '&#8249; P�edchoz� %d dny';
$strings['This Week'] = 'Tento t�den';
$strings['Jump to this week'] = 'Sko�it do tohoto t�dne';
$strings['Next days'] = 'Dal��ch %d dn� &#8250;';
$strings['Next Week'] = 'Dal�� t�den &raquo;';
$strings['Jump To Date'] = 'Sko�it na datum';
$strings['View Monthly Calendar'] = 'Zobrazit m�s��n� kalend��';
$strings['Open up a navigational calendar'] = 'Otev��t naviga�n� kalend��';

$strings['View stats for schedule'] = 'Zobrazit statistiku pro rozvrh:';
$strings['At A Glance'] = 'Zb�n�';
$strings['Total Users'] = 'Celkov� u�ivatel�:';
$strings['Total Resources'] = 'Celkov� zdroje:';
$strings['Total Reservations'] = 'Celkov� rezervace:';
$strings['Max Reservation'] = 'Max rezervace:';
$strings['Min Reservation'] = 'Min rezervace:';
$strings['Avg Reservation'] = 'P��m�r rezervace:';
$strings['Most Active Resource'] = 'Nejaktivn�j�� zdroj:';
$strings['Most Active User'] = 'Nejaktivn�j�� u�ivatel:';
$strings['System Stats'] = 'Statistika syst�mu';
$strings['phpScheduleIt version'] = 'Verze phpScheduleIt:';
$strings['Database backend'] = 'Pou�it� datab�zov� syst�m:';
$strings['Database name'] = 'N�zev datab�ze:';
$strings['PHP version'] = 'Verze PHP:';
$strings['Server OS'] = 'OS serveru:';
$strings['Server name'] = 'N�zev serveru:';
$strings['phpScheduleIt root directory'] = 'Ko�enov� adres�� syst�mu:';
$strings['Using permissions'] = 'U��v�na opr�vn�n�:';
$strings['Using logging'] = 'U��v�no logov�n�:';
$strings['Log file'] = 'Logovac� soubor:';
$strings['Admin email address'] = 'Email administr�tora:';
$strings['Tech email address'] = 'Email technick� podpory:';
$strings['CC email addresses'] = 'CC emailov� adresy:';
$strings['Reservation start time'] = 'Po��te�n� �as rezervace:';
$strings['Reservation end time'] = 'Koncov� �as rezervace:';
$strings['Days shown at a time'] = 'Po�et najednou zobrazovan�ch dn�:';
$strings['Reservations'] = 'Rezervace';
$strings['Return to top'] = 'Zp�t na za��tek';
$strings['for'] = 'pro';

$strings['Select Search Criteria'] = 'Vyberte vyhled�v�c� krit�ria';
$strings['Schedules'] = 'Rozvrhy:';
$strings['All Schedules'] = 'V�echny rozvrhy';
$strings['Hold CTRL to select multiple'] = 'Dr�te CTRL k v�cen�sobn�mu v�b�ru';
$strings['Users'] = 'U�ivatel�:';
$strings['All Users'] = 'V�ichni u�ivatel�';
$strings['Resources'] = 'Zdroje';
$strings['All Resources'] = 'V�echny zdroje';
$strings['Starting Date'] = 'Po��te�n� datum:';
$strings['Ending Date'] = 'Koncov� datum:';
$strings['Starting Time'] = 'Po��te�n� �as:';
$strings['Ending Time'] = 'Koncov� �as:';
$strings['Output Type'] = 'Typ v�stupu:';
$strings['Manage'] = 'Spravovat';
$strings['Total Time'] = 'Cekov� �as';
$strings['Total hours'] = 'Celov� hodin:';
$strings['% of total resource time'] = '% celkov�ho �asu zdroje';
$strings['View these results as'] = 'Zobrazit tyto v�sledky jako:';
$strings['Edit this reservation'] = 'Upravit tuto rezervaci';
$strings['Search Results'] = 'Prohledat v�sledky';
$strings['Search Resource Usage'] = 'Vyhledat vyu�it� zdroje';
$strings['Search Results found'] = 'V�sledky vyhled�v�n�: %d rezervac� nalezeno';
$strings['Try a different search'] = 'Zkuste jin� vyhled�v�n�';
$strings['Search Run On'] = 'Spustit vyhled�v�n� na:';
$strings['Member ID'] = 'ID u�ivatele';
$strings['Previous User'] = '&laquo; P�edchoz� u�ivatel';
$strings['Next User'] = 'Dal�� u�ivatel &raquo;';

$strings['No results'] = '��dn� v�sledky';
$strings['That record could not be found.'] = 'Tento z�znam nebyl nalezen.';
$strings['This blackout is not recurring.'] = 'Tento v�padek nen� opakovan�.';
$strings['This reservation is not recurring.'] = 'Tato rezervace nen� opakovan�.';
$strings['There are no records in the table.'] = 'V tabulce %s nejsou ��dn� z�znamy.';
$strings['You do not have any reservations scheduled.'] = 'Nem�te napl�nov�ny ��dn� rezervace.';
$strings['You do not have permission to use any resources.'] = 'Nem�te opr�vn�n� pou��vat jak�koli zdroj.';
$strings['No resources in the database.'] = 'V datab�zi nejsou ��dn� zdroje.';
$strings['There was an error executing your query'] = 'P�i zpracov�v�n� va�eho dotazu do�lo k chyb�:';

$strings['That cookie seems to be invalid'] = 'Tento cookie je neplatn�';
$strings['We could not find that logon in our database.'] = 'Toto p�ihl�en� nebylo v na�� datab�zi nalezeno.';	// @since 1.1.0
$strings['That password did not match the one in our database.'] = 'Toto heslo se neshodovalo s t�m z na�� datab�ze.';
$strings['You can try'] = '<br />M��ete zkusit:<br />Registrovat email adresu.<br />Nebo:<br />Zkusit p�ihl�en� znovu.';
$strings['A new user has been added'] = 'Nov� u�ivatel byl p�id�n';
$strings['You have successfully registered'] = 'Byl jste �sp�n� zaregistrov�n!';
$strings['Continue'] = 'Pokra�ovat...';
$strings['Your profile has been successfully updated!'] = 'V� profil byl �sp�n� aktualizov�n!';
$strings['Please return to My Control Panel'] = 'Pros�m vr�tit na M�j ��d�c� panel';
$strings['Valid email address is required.'] = '- je vy�adov�na platn� emailov� adresa.';
$strings['First name is required.'] = '- K�estn� jm�no je vy�adov�no.';
$strings['Last name is required.'] = '- P��jmen� je vy�adov�no.';
$strings['Phone number is required.'] = '- Telefonn� ��slo je vy�adov�no.';
$strings['That email is taken already.'] = '- Tento email je ji� obsazen.<br />Pros�m zkuste znovu s rozd�lnou emailovou adresou.';
$strings['Min 6 character password is required.'] = '- Je vy�adov�no heslo s nejm�n� %s znaky.';
$strings['Passwords do not match.'] = '- Hesla se neshoduj�.';

$strings['Per page'] = 'Na str�nku:';
$strings['Page'] = 'Str�nka:';

$strings['Your reservation was successfully created'] = 'Va�e rezervace byla �sp�n� vytvo�ena';
$strings['Your reservation was successfully modified'] = 'Va�e rezervace byla �sp�n� zm�n�na';
$strings['Your reservation was successfully deleted'] = 'Va�e rezervace byla �sp�n� odstran�na';
$strings['Your blackout was successfully created'] = 'V� v�padek byl �sp�n� vytvo�en';
$strings['Your blackout was successfully modified'] = 'V� v�padek byl �sp�n� zm�n�n';
$strings['Your blackout was successfully deleted'] = 'V� v�padek byl �sp�n� odstran�n';
$strings['for the follwing dates'] = 'pro n�sleduj�c� data:';
$strings['Start time must be less than end time'] = 'Po��te�n� �as mus� b�t men�� ne� koncov� �as.';
$strings['Current start time is'] = 'Aktu�ln� po��te�n� �as je:';
$strings['Current end time is'] = 'Aktu�ln� koncov� �as je:';
$strings['Reservation length does not fall within this resource\'s allowed length.'] = 'D�lka rezervace je nen� v intervalu povolen� d�lky pro tento zdroj.';
$strings['Your reservation is'] = 'Va�e rezervace je:';
$strings['Minimum reservation length'] = 'Minim�ln� d�lka rezervace:';
$strings['Maximum reservation length'] = 'Maxim�ln� d�lka rezervace:';
$strings['You do not have permission to use this resource.'] = 'Nem�te opr�vn�n� k pou�it� tohoto zdroje.';
$strings['reserved or unavailable'] = '%s a� %s je rezervov�n nebo nep��stupn�.';	// @since 1.1.0
$strings['Reservation created for'] = 'Rezervace vytvo�ena pro %s';
$strings['Reservation modified for'] = 'Rezervace zm�n�na pro %s';
$strings['Reservation deleted for'] = 'Rezervace odstran�na pro %s';
$strings['created'] = 'vytvo�eno';
$strings['modified'] = 'zm�n�no';
$strings['deleted'] = 'odstran�no';
$strings['Reservation #'] = 'Rezervace #';
$strings['Contact'] = 'Kontakt';
$strings['Reservation created'] = 'Rezervace vytvo�ena';
$strings['Reservation modified'] = 'Rezervace zm�n�na';
$strings['Reservation deleted'] = 'Rezervace odstran�na';

$strings['Reservations by month'] = 'Rezervace po m�s�c�ch';
$strings['Reservations by day of the week'] = 'Rezervace po dnech v t�dnu';
$strings['Reservations per month'] = 'Rezervace po dnech v m�s�ci';
$strings['Reservations per user'] = 'Rezervace na u�ivatele';
$strings['Reservations per resource'] = 'Rezervace na zdroj';
$strings['Reservations per start time'] = 'Rezervace podle po��te�n�ho �asu';
$strings['Reservations per end time'] = 'Rezervace podle koncov�ho �asu';
$strings['[All Reservations]'] = '[V�echny rezervace]';

$strings['Permissions Updated'] = 'Opr�vn�n� aktualizov�na';
$strings['Your permissions have been updated'] = 'Va�e %s opr�vn�n� byla aktualizov�na';
$strings['You now do not have permission to use any resources.'] = 'Nyn� nem�te opr�vn�n� k pou�it� ��dn�ho zdroje.';
$strings['You now have permission to use the following resources'] = 'Nyn� m�te opr�vn�n� k pou�it� n�sleduj�c� zdroje:';
$strings['Please contact with any questions.'] = 'Pros�m kontaktujte %s s jak�mkoli dotazem.';
$strings['Password Reset'] = 'Reset hesla';

$strings['This will change your password to a new, randomly generated one.'] = 'Toto zm�n� va�e heslo na nov�, n�hodn� vygenerovan�.';
$strings['your new password will be set'] = 'Po vlo�en� va�eho emailu a kliknut� na "Zm�nit heslo", nastav� v�m syst�m nastav� nov� heslo a za�le ho emailem.';
$strings['Change Password'] = 'Zm�nit heslo';
$strings['Sorry, we could not find that user in the database.'] = 'Promi�te, nemohli jsme naj�t tohoto u�ivatele v datab�zi.';
$strings['Your New Password'] = 'Va�e nov� %s heslo';
$strings['Your new passsword has been emailed to you.'] = '�sp�ch!<br />'
    			. 'Va�e nov� heslo v�m bylo zasl�no emailem.<br />'
    			. 'Pros�m pod�vejte se do va�� emailov� schr�nky na nov� heslo, pak se <a href="index.php">p�ihla�te</a>'
    			. ' s t�mto nov�m heslem a urychlen� ho zm��te kliknut�m na odkaz &quot;Zm�nit m�j profil/heslo&quot;'
    			. ' v M�m ��d�c�m panelu.';

$strings['You are not logged in!'] = 'Nejste p�ihl�en!';

$strings['Setup'] = 'Setup';
$strings['Please log into your database'] = 'Pros�m p�ihla�te se do va�� datab�ze';
$strings['Enter database root username'] = 'Vlo�te u�ivatelsk� jm�no adminitr�tora datab�ze:';
$strings['Enter database root password'] = 'Vlo�te heslo administr�tora datab�ze:';
$strings['Login to database'] = 'P�ihl�en� do datab�ze';
$strings['Root user is not required. Any database user who has permission to create tables is acceptable.'] = 'Administr�torsk� pr�va <b>nejsou vy�adov�na</b>. Kter�koli u�ivatel datab�ze s pr�vem vytv��et tabulky posta�uje.';
$strings['This will set up all the necessary databases and tables for phpScheduleIt.'] = 'Toto nastav� nezbytn� datab�ze a tabulky pro phpScheduleIt.';
$strings['It also populates any required tables.'] = 'Vypn� rovn� pot�ebn� tabulky.';
$strings['Warning: THIS WILL ERASE ALL DATA IN PREVIOUS phpScheduleIt DATABASES!'] = 'Varov�n�: TOTO ODSTRAN� V�ECHNA DATA V P�EDCHOZ�CH DATAB�Z�CH phpScheduleIt!';
$strings['Not a valid database type in the config.php file.'] = 'Neplatn� typ datab�ze v souboru config.php.';
$strings['Database user password is not set in the config.php file.'] = 'Heslo pro u�ivatele datab�ze nen� nastaveno v souboru config.php.';
$strings['Database name not set in the config.php file.'] = 'N�zev datab�ze nen� nastaven v souboru config.php.';
$strings['Successfully connected as'] = '�sp�n� p�ipojen jako';
$strings['Create tables'] = 'Vytvo�it tabulky &gt;';
$strings['There were errors during the install.'] = 'B�hem instalace se vyskytly chyby. Je mo�n�, �e phpScheduleIt bude it tak fungovat, pokud chyby nebyly z�va�n�.<br/><br/>'
	. 'Prost�m vzneste jak�koli dotazy v diskuzn�ch f�rech na <a href="http://sourceforge.net/forum/?group_id=95547">SourceForge</a>.';
$strings['You have successfully finished setting up phpScheduleIt and are ready to begin using it.'] = '�s�p�n� jste dokon�ili nastaven� phpScheduleIt a m��ete ho za��t pou��vat.';
$strings['Thank you for using phpScheduleIt'] = 'Pros�m zajist�te �PLN� ODSTRAN�N� ADRES��E \'install\' .'
	. ' To je velmi d�le�it�, proto�e obsahuje hesla do datab�ze a dal�� citliv� informace.'
	. ' Pokud to neprovedete, nech�te zcela otev�en� dve�e komukoli k proniknut� do va�� datab�ze!'
	. '<br /><br />'
	. 'D�kujeme v�m, �e pou��v�te phpScheduleIt!';
$strings['There is no way to undo this action'] = 'Tuto akci nen� ��dn�m zp�sobem mo�n� vr�tit zp�t!';
$strings['Click to proceed'] = 'Klikn�te pro pokra�ov�n�';
$strings['Please delete this file.'] = 'Pros�m odstra�te tento soubor.';
$strings['Successful update'] = 'Aktualizace prob�hla naprosto v po��dku';
$strings['Patch completed successfully'] = 'Z�plata byla �sp�n� aplikov�na';

// @since 1.0.0 RC1
$strings['If no value is specified, the default password set in the config file will be used.'] = 'Pokud nen� uvedena ��dn� hodnota, bude pou�ito heslo uveden� v konfigura�n�m souboru.';
$strings['Notify user that password has been changed?'] = 'Uv�domit u�ivatele, �e bylo heslo zm�n�no?';

// @since 1.1.0
$strings['This system requires that you have an email address.'] = 'Tento syst�m vy�aduje, abyste m�li emailovou adresu.';
$strings['Invalid User Name/Password.'] = 'Neplatn� u�ivatelsk� jm�no/heslo.';
$strings['Pending User Reservations'] = 'Nevy��zen� u�ivatelsk� rezervace';
$strings['Approve'] = 'Schv�lit';
$strings['Approve this reservation'] = 'Schv�lit tuto rezervaci';
$strings['Approve Reservations'] ='Schv�lit rezervace';

$strings['Announcement'] = 'Ozn�men�';
$strings['Number'] = '��slo';
$strings['Add Announcement'] = 'P�idat ozn�men�';
$strings['Edit Announcement'] = 'Upravit ozn�men�';
$strings['All Announcements'] = 'V�echna ozn�men�';
$strings['Delete Announcements'] = 'Odstranit ozn�men�';
$strings['Use start date/time?'] = 'Pou��t po��te�n� datum/�as?';
$strings['Use end date/time?'] = 'Pou��t koncov� datum/�as?';
$strings['Announcement text is required.'] = 'Text ozn�men� je vy�adov�n.';
$strings['Announcement number is required.'] = '��slo ozn�men� je vy�adov�no.';

$strings['Pending Approval'] = 'Nevy��zen� schv�len�';
$strings['My reservation is approved'] = 'Moje rezervace je schv�lena';
$strings['This reservation must be approved by the administrator.'] = 'Tato rezervace mus� b�t schv�lena administr�torem.';
$strings['Approval Required'] = 'Schv�len� je vy�adov�no';
$strings['No reservations requiring approval'] = '��dn� rezervace vy�aduj�c� schv�len�';
$strings['Your reservation was successfully approved'] = 'Va�e rezervace byla �sp�n� schv�lena';
$strings['Reservation approved for'] = 'Rezervace schv�lena pro %s';
$strings['approved'] = 'schv�leno';
$strings['Reservation approved'] = 'Rezervace schv�lena';

$strings['Valid username is required'] = 'Je vy�adov�no platn� u�ivatelsk� jm�no';
$strings['That logon name is taken already.'] = 'Toto p�ihla�ovac� jm�no je ji� pou��v�no.';
$strings['this will be your login'] = '(toto bude va�e p�ihla�ovac� jm�no)';
$strings['Logon name'] = 'P�ihla�ovac� jm�no';
$strings['Your logon name is'] = 'Va�e p�ihla�ovac� jm�no je %s';

$strings['Start'] = 'Po��tek';
$strings['End'] = 'Konec';
$strings['Start date must be less than or equal to end date'] = 'Po��te�n� datum mus� b�t men�� ne� nebo rovno koncov�mu datu';
$strings['That starting date has already passed'] = 'Po��te�n� datum ji� ub�hlo';
$strings['Basic'] = 'Z�kladn�';
$strings['Participants'] = '��astn�ci';
$strings['Close'] = 'Zav��t';
$strings['Start Date'] = 'Po��te�n� datum';
$strings['End Date'] = 'Koncov� datum';
$strings['Minimum'] = 'Od';
$strings['Maximum'] = 'Do';
$strings['Allow Multiple Day Reservations'] = 'Povolit rezervaci v�ce dn�';
$strings['Invited Users'] = 'Pozvan� u�ivatel�';
$strings['Invite Users'] = 'Pozvat u�ivatele';
$strings['Remove Participants'] = 'Odstranit ��astn�ky';
$strings['Reservation Invitation'] = 'Pozv�n� rezervace';
$strings['Manage Invites'] = 'Spr�va pozv�nek';
$strings['No invite was selected'] = 'Nebyly vybr�ny ��dn� pozv�nky';
$strings['reservation accepted'] = '%s Va�e pozv�n� na %s p�ijato';
$strings['reservation declined'] = '%s Va�o pozv�n� na %s zam�tnuto';
$strings['Login to manage all of your invitiations'] = 'P�ihla�te se ke spr�v� v�ech Va�ich pozv�n�';
$strings['Reservation Participation Change'] = 'Zm�na ��asti na rezervaci';
$strings['My Invitations'] = 'Moje pozv�n�';
$strings['Accept'] = 'P�ijmout';
$strings['Decline'] = 'Zam�tnout';
$strings['Accept or decline this reservation'] = 'P�ijmout nebo zam�tnout tuto rezervaci';
$strings['My Reservation Participation'] = 'Moje ��ast na rezervaci';
$strings['End Participation'] = 'Konec ��asti';
$strings['Owner'] = 'Vlastn�k';
$strings['Particpating Users'] = '��astn�c� se u�ivatel�';
$strings['No advanced options available'] = '��dn� pokro�il� volby nejsou p��stupn�';
$strings['Confirm reservation participation'] = 'Potvr�te ��ast na rezervaci';
$strings['Confirm'] = 'Potvrdit';
$strings['Do for all reservations in the group?'] = 'Prov�st pro v�echny rezervace ve skupin�?';

$strings['My Calendar'] = 'M�j kalend��';
$strings['View My Calendar'] = 'Zobrazi M�j kalend��';
$strings['Participant'] = '��astn�k';
$strings['Recurring'] = 'Opakuj�c� se';
$strings['Multiple Day'] = 'V�ce dn�';
$strings['[today]'] = '[dnes]';
$strings['Day View'] = 'Zobrazen� dne';
$strings['Week View'] = 'Zobrazen� t�dne';
$strings['Month View'] = 'Zobrazen� m�s�ce';
$strings['Resource Calendar'] = 'Kalend�� zdroj�';
$strings['View Resource Calendar'] = 'Kalend�� rozvrh�';	// @since 1.2.0
$strings['Signup View'] = 'Zobrazen� registrace';

$strings['Select User'] = 'Vybrat u�ivatele';
$strings['Change'] = 'Zm�nit';

$strings['Update'] = 'Aktualizovat';
$strings['phpScheduleIt Update is only available for versions 1.0.0 or later'] = 'Aktualizace phpScheduleIt je dostupn� pouze pro verze 1.0.0 a pozd�j��';
$strings['phpScheduleIt is already up to date'] = 'phpScheduleIt je ji� aktualizov�n';
$strings['Migrating reservations'] = 'Migruj�c� rezervace';

$strings['Admin'] = 'Admin';
$strings['Manage Announcements'] = 'Spr�va ozn�men�';
$strings['There are no announcements'] = 'Nejsou ��dn� ozn�men�';
// end since 1.1.0

// @since 1.2.0
$strings['Maximum Participant Capacity'] = 'Maxim�ln� kapacita ��astn�k�';
$strings['Leave blank for unlimited'] = 'Nechte pr�zdn� pro bez omezen�';
$strings['Maximum of participants'] = 'Tento zdroj m� maxim�ln� kapacitu %s u�astn�k�';
$strings['That reservation is at full capacity.'] = 'Tato rezervace je zcela zapln�na.';
$strings['Allow registered users to join?'] = 'Umo�nit p�ipojit se registrovn�m u�ivatel�m?';
$strings['Allow non-registered users to join?'] = 'Umo�nit p�ipojit se neregistrovan�m u�ivatel�m?';
$strings['Join'] = 'P�ipojit se';
$strings['My Participation Options'] = 'M� ��astn�ck� nastaven�';
$strings['Join Reservation'] = 'P�ipojit se k rezervac�m';
$strings['Join All Recurring'] = 'P�ipojit se ke v�em opakovan�m';
$strings['You are not participating on the following reservation dates because they are at full capacity.'] = 'Ne��astn�te se n�sleduj�c�ch rezervac�, proto�e maj� zapln�nou kapacitu.';
$strings['You are already invited to this reservation. Please follow participation instructions previously sent to your email.'] = 'K t�to rezervaci jste ji� byl pozv�n. Pros�m dr�te se instrukc� pro u�astn�ky zaslan� emailem.';
$strings['Additional Tools'] = 'Dal�� n�stroje';
$strings['Create User'] = 'Vytvo�it u�ivatele';
$strings['Check Availability'] = 'Zjisti dostupnost';
$strings['Manage Additional Resources'] = 'Nasatevn� dodate�n�ch zdroj�';
$strings['All Additional Resources'] = 'V�echny dodate�n� zdroje';
$strings['Number Available'] = 'Po�et dostupn�ch';
$strings['Unlimited'] = 'Neomezen�';
$strings['Add Additional Resource'] = 'P�idat dodate�n� zdroj';
$strings['Edit Additional Resource'] = 'Upravit dodate�n� zdroj';
$strings['Checking'] = 'Checking';
$strings['You did not select anything to delete.'] = 'Nebylo nic vybr�no ke smaz�n�';
$strings['Added Resources'] = 'P�idan� zdroje';
$strings['Additional resource is reserved'] = 'Dodate�n� zdroj %s je dostupn� pouze v po�tu %s';
$strings['All Groups'] = 'V�echny skupiny';
$strings['Group Name'] = 'N�zev skupiny';
$strings['Delete Groups'] = 'Smazat skupiny';
$strings['Manage Groups'] = 'Spr�va skupin';
$strings['None'] = '��dn�';
$strings['Group name is required.'] = 'N�zev skupiny je vy�adov�n.';
$strings['Groups'] = 'Skupiny';
$strings['Current Groups'] = 'Aktu�ln� skupiny';
$strings['Group Administration'] = 'Spr�va skupin';
$strings['Reminder Subject'] = 'P�ipom�nka rezervace - %s, %s %s';
$strings['Reminder'] = 'P�ipom�nka';
$strings['before reservation'] = 'p�ed rezervac�';
$strings['My Participation'] = 'Moje ��ast';
$strings['My Past Participation'] = 'Moje minul� ��ast';
$strings['Timezone'] = '�asov� z�na';
$strings['Export'] = 'Export';
$strings['Select reservations to export'] = 'Vyberte rezervace pro export';
$strings['Export Format'] = 'Form�t pro export';
$strings['This resource cannot be reserved less than x hours in advance'] = 'Tento zdroj nem��e b�t rezervov�n m�n� ne� %s hodin p�edem';
$strings['This resource cannot be reserved more than x hours in advance'] = 'Tento zdroj nem��e b�t rezervov�n v�ce ne� %s hodin p�edem';
$strings['Minimum Booking Notice'] = 'Ozn�men� o za��tku rezervace';
$strings['Maximum Booking Notice'] = 'Ozn�men� o konci rezervace';
$strings['hours prior to the start time'] = 'hodin p�ed za��tkem';
$strings['hours from the current time'] = 'hodin od aktu�ln�ho �asu';
$strings['Contains'] = 'Obsahuje';
$strings['Begins with'] = 'Za��n� na';
$strings['Minimum booking notice is required.'] = 'Ozn�men� o po��tku rezervaci je vy�adov�no.';
$strings['Maximum booking notice is required.'] = 'Ozn�men� o konci rezervace je vy�adov�no.';
$strings['Accessory Name'] = 'N�zev dopl�ku';
$strings['Accessories'] = 'Dopl�ky';
$strings['All Accessories'] = 'V�echny dopl�ky';
$strings['Added Accessories'] = 'P�idan� dopl�ky';
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
				. "Byl jste �sp�n� registrov�n s n�sleduj�c�mi �daji:\r\n"
				. "P�ihla�ovac� jm�no: %s\r\n"
				. "Jm�no: %s %s \r\n"
				. "Telefon: %s \r\n"
				. "Instituce: %s \r\n"
				. "Pozice: %s \r\n\r\n"
				. "Pros�m p�ihla�te se k Pl�nova�i na t�to adrese:\r\n"
				. "%s \r\n\r\n"
				. "Upravit sv�j profil a naj�t odkazy na online Pl�nova� m��ete v sekci M�j ��d�c� panel.\r\n\r\n"
				. "Pros�m po�lete jak�koli dotazy ohledn� zdroj� nebo rezervac� na adresu %s";

// Email message the admin gets after a new user registers
$email['register_admin'] = "Administr�tor,\r\n\r\n"
					. "Byl registrov�n nov� u�ivatel s n�sleduj�c�mi �daji:\r\n"
					. "Email: %s \r\n"
					. "Jm�no: %s %s \r\n"
					. "Telefon: %s \r\n"
					. "Instituce: %s \r\n"
					. "Pozice: %s \r\n\r\n";

// First part of the email that a user gets after they create/modify/delete a reservation
// 'reservation_activity_1' through 'reservation_activity_6' are all part of one email message
//  that needs to be assembled depending on different options.  Please translate all of them.
// @since 1.1.0
$email['reservation_activity_1'] = "%s,\r\n<br />"
			. "M�te �sp�nou %s rezervaci #%s.\r\n\r\n<br/><br/>"
			. "Pros�m pou��vejte toto ��slo rezervace p�i kontaktu administr�tora s jakoukoli ot�zkou.\r\n\r\n<br/><br/>"
			. "Rezervace mezi %s %s a %s %s pro %s"
			. " v m�st� %s byla %s.\r\n\r\n<br/><br/>";
$email['reservation_activity_2'] = "Tato rezervace se opakuje v n�sleduj�c� dny:\r\n<br/>";
$email['reservation_activity_3'] = "V�echny opakuj�c� se rezervace v t�to skupin� byly tak� %s.\r\n\r\n<br/><br/>";
$email['reservation_activity_4'] = "Pro tuto rezervaci byl poskytnut n�sleduj�c� souhrn :\r\n<br/>%s\r\n\r\n<br/><br/>";
$email['reservation_activity_5'] = "Pokud se jedn� o chybu, pros�m kontaktujte administr�tora na: %s"
			. " nebo volejte  %s.\r\n\r\n<br/><br/>"
			. "Informace o va�� rezervaci m��ete prohl�et nebo m�nit kdykoli po"
			. " p�ihl�en� do %s na adrese:\r\n<br/>"
			. "<a href=\"%s\" target=\"_blank\">%s</a>.\r\n\r\n<br/><br/>";
$email['reservation_activity_6'] = "Pros�m sm��ujte v�echny technick� dotazy na <a href=\"mailto:%s\">%s</a>.\r\n\r\n<br/><br/>";
// @since 1.1.0
$email['reservation_activity_7'] = "%s,\r\n<br />"
			. "Rezervace #%s byla schv�lena.\r\n\r\n<br/><br/>"
			. "Pros�m pou��vejte toto ��slo rezervace p�i kontaktu administr�tora s jak�mkoli dotazem.\r\n\r\n<br/><br/>"
			. "Rezervace mezi %s %s a %s %s pro %s"
			. " um�st�n� v %s byla %s.\r\n\r\n<br/><br/>";

// Email that the user gets when the administrator changes their password
$email['password_reset'] = "Va�e %s heslo bylo resetov�no administr�torem.\r\n\r\n"
			. "Va�e do�asn� heslo je:\r\n\r\n %s\r\n\r\n"
			. "Pros�m pou�ijte toto do�asn� heslo (k zaji�t�n� spr�vnosti pou�ijte funkce �pravy | Kop�rovat a Vlo�it) pro p�ihl�en� do %s na %s"
			. " a okam�it� ho zm��te pomoc� odkazu 'Zm�nit M�j profil/Heslo' z tabulky Moje rychl� odkazy.\r\n\r\n"
			. "Pros�m, kontaktujte %s s jak�mkoli dotazem.";

// Email that the user gets when they change their lost password using the 'Password Reset' form
$email['new_password'] = "%s,\r\n"
            . "Va�e nov� heslo pro v� %s ��et je:\r\n\r\n"
            . "%s\r\n\r\n"
            . "Pros�m, p�ihla�te se na %s "
            . "s t�mto heslem "
            . "(k zaji�t�n� spr�vnosti pou�ijte funkce �pravy | Kop�rovat a Vlo�it) "
            . "a okam�it� zm��te va�e heslo kliknut�m na "
            . "odkaz Zm�nit M�j profil/Heslo "
            . "v sekci M�j ��d�c� panel.\r\n\r\n"
            . "Pros�m, sm��ujte jak�koli dotazy na %s.";

// @since 1.1.0
// Email that is sent to invite users to a reservation
$email['reservation_invite'] = "%s v�s pozval k ��asti na n�sleduj�c� rezervaci:\r\n\r\n"
		. "Zdroj: %s\r\n"
		. "Po��te�n� datum: %s\r\n"
		. "Po��te�n� �as: %s\r\n"
		. "Koncov� datum: %s\r\n"
		. "Koncov� �as: %s\r\n"
		. "Souhrn: %s\r\n"
		. "Opakovan� data (pokud jsou p��tomna): %s\r\n\r\n"
		. "Pro p�ijet� t�to pozv�nky klikn�te na tento odkaz (Kop�rujte a Vlo�te, pokud nen� zv�razn�n) %s\r\n"
		. "Pro odm�tnut� t�to pozv�nky klikn�te na tento link (Kop�rujte a Vlo�te, pokud nen� zv�razn�n) %s\r\n"
		. "Pro p�ijet� vybran�ch dat nebo spr�vu pozv�nek pozd�ji se p�ihla�to do %s na %s";

// @since 1.1.0
// Email that is sent when a user is removed from a reservation
$email['reservation_removal'] = "Byl jste odstran�n z n�sleduj�c�ch rezervace:\r\n\r\n"
		. "Zdroj: %s\r\n"
		. "Po��te�n� datum: %s\r\n"
		. "Po��te�n� �as: %s\r\n"
		. "Koncov� datum: %s\r\n"
		. "Koncov� �as: %s\r\n"
		. "Souhrn: %s\r\n"
		. "Opakovan� data (pokud jsou p��tomna): %s\r\n\r\n";
		
// @since 1.2.0
// Email body that is sent for reminders
$email['Reminder Body'] = "Va�e rezervace na %s od %s %s do %s %s se bl��.";
?>