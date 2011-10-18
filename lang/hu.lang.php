<?php
/**
* Hungarian (hu) translation file.
*
* @author Nick Korbel <lqqkout13@users.sourceforge.net>
* @translator Attila <atoth@cmr.sote.hu>
* @version 04-04-05
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
$days_full = array('Vas�rnap', 'H�tf�', 'Kedd', 'Szerda', 'Cs�t�rt�k', 'P�ntek', 'Szombat');
// The three letter abbreviation
$days_abbr = array('Vas', 'H�t', 'Ked', 'Sze', 'Cs�', 'P�n', 'Szo');
// The two letter abbreviation
$days_two  = array('Va', 'H�', 'Ke', 'Se', 'Cs', 'P�', 'So');
// The one letter abbreviation
$days_letter = array('V', 'H', 'K', 'S', 'C', 'P', 'Z');

/***
  MONTH NAMES
  All of these arrays MUST start with January as the first element
   and go through the twelve months of the year, ending on December
***/
// The full month name
$months_full = array('Janu�r', 'Febru�r', 'M�rcius', '�prilis', 'M�jus', 'J�nius', 'J�lius', 'Augusztus', 'Szeptember', 'Okt�ber', 'November', 'December');
// The three letter month name
$months_abbr = array('Jan', 'Feb', 'M�r', '�pr', 'M�j', 'J�n', 'J�l', 'Aug', 'Sze', 'Okt', 'Nov', 'Dec');

// All letters of the alphabet starting with A and ending with Z
$letters = array ('A', '�', 'B', 'C', 'D', 'E', '�', 'F', 'G', 'H', 'I', '�', 'J', 'K', 'L', 'M', 'N', 'O', '�', '�', '�', 'P', 'Q', 'R', 'S', 'T', 'U', '�', '�', '�', 'V', 'W', 'X', 'Y', 'Z');

/***
  DATE FORMATTING
  All of the date formatting must use the PHP strftime() syntax
  You can include any text/HTML formatting in the translation
***/
// General date formatting used for all date display unless otherwise noted
$dates['general_date'] = '%Y.%m.%d.';
// General datetime formatting used for all datetime display unless otherwise noted
// The hour:minute:second will always follow this format
$dates['general_datetime'] = '%Y.%m.%d. @';
// Date in the reservation notification popup and email
$dates['res_check'] = '%Y.%m.%d. %A';
// Date on the scheduler that appears above the resource links
$dates['schedule_daily'] = '%Y.%m.%d.<br/>%A';
// Date on top-right of each page
$dates['header'] = '%Y. %B %d. %A';
// Jump box format on bottom of the schedule page
// This must only include %m %d %Y in the proper order,
//  other specifiers will be ignored and will corrupt the jump box
$dates['jumpbox'] = '%Y.%m.%d.';

/***
  STRING TRANSLATIONS
  All of these strings should be translated from the English value (right side of the equals sign) to the new language.
  - Please keep the keys (between the [] brackets) as they are.  The keys will not always be the same as the value.
  - Please keep the sprintf formatting (%s) placeholders where they are unless you are sure it needs to be moved.
  - Please keep the HTML and punctuation as-is unless you know that you want to change it.
***/
$strings['hours'] = '�ra';
$strings['minutes'] = 'perc';
// The common abbreviation to hint that a user should enter the month as 2 digits
$strings['mm'] = 'hh';
// The common abbreviation to hint that a user should enter the day as 2 digits
$strings['dd'] = 'nn';
// The common abbreviation to hint that a user should enter the year as 4 digits
$strings['yyyy'] = '����';
$strings['am'] = 'de';
$strings['pm'] = 'du';

$strings['Administrator'] = 'Adminisztr�tor';
$strings['Welcome Back'] = '�dv�zlet, %s';
$strings['Log Out'] = 'Kil�p�s';
$strings['My Control Panel'] = 'Ir�ny�t� Pult';
$strings['Help'] = 'Seg�ts�g';
$strings['Manage Schedules'] = 'El�jegyz�s Kezel�s';
$strings['Manage Users'] ='Felhaszn�l� Kezel�s';
$strings['Manage Resources'] ='Kontingens Kezel�s';
$strings['Manage User Training'] ='Felhaszn�l� K�pz�s';
$strings['Manage Reservations'] ='Vizsg�lat Kezel�s';
$strings['Email Users'] ='K�rlev�l a Felhaszn�l�knak';
$strings['Export Database Data'] = 'Adatb�zis Adatok Export�l�sa';
$strings['Reset Password'] = 'Jelsz� Vissza�ll�t�sa';
$strings['System Administration'] = 'Rendszer Adminisztr�ci�';
$strings['Successful update'] = 'Sikeres Friss�t�s!';
$strings['Update failed!'] = 'Sikeretlen Friss�t�s!';
$strings['Manage Blackout Times'] = 'Tiltott Id�szak Kezel�s';
$strings['Forgot Password'] = 'Elfelejtett Jelsz�';
$strings['Manage My Email Contacts'] = 'Email Kapcsolat Kezel�s';
$strings['Choose Date'] = 'V�lasszon D�tumot';
$strings['Modify My Profile'] = 'Profil M�dos�t�sa';
$strings['Register'] = 'Regisztr�ci�';
$strings['Processing Blackout'] = 'Tiltott Id�szak Feldolgoz�sa';
$strings['Processing Reservation'] = 'Vizsg�lat Feldolgoz�sa';
$strings['Online Scheduler [Read-only Mode]'] = 'El�jegyz�s [Csak Olvashat� M�d]';
$strings['Online Scheduler'] = 'El�jegyz�s';
$strings['phpScheduleIt Statistics'] = 'phpScheduleIt Statisztik�k';
$strings['User Info'] = 'Felhaszn�l�i Inform�ci�:';

$strings['Could not determine tool'] = '�rv�nytelen eszk�z. T�rjen vissza a Vez�rl� Pulthoz �s pr�b�lkozzon ism�t.';
$strings['This is only accessable to the administrator'] = 'Csak az adminisztr�tor sz�m�ra el�rhet�';
$strings['Back to My Control Panel'] = 'Vissza a Vez�rl� Pulthoz';
$strings['That schedule is not available.'] = 'A v�lasztott El�jegyz�s nem el�rhet�.';
$strings['You did not select any schedules to delete.'] = 'Nem v�lasztotta ki a t�rlend� El�jegyz�st.';
$strings['You did not select any members to delete.'] = 'Nem v�lasztotta ki a t�rlend� Felhaszn�l�t.';
$strings['You did not select any resources to delete.'] = 'Nem v�lasztotta ki a t�rlend� Kontingenst.';
$strings['Schedule title is required.'] = 'Az El�jegyz�s tartalm�nak megad�sa k�telez�.';
$strings['Invalid start/end times'] = '�rv�nytelen kezd�/befejez� id�pont';
$strings['View days is required'] = 'Megjelen�tend� napok sz�m�nak megad�sa k�telez�';
$strings['Day offset is required'] = 'Az El�jegyz�s minim�lis id�beli t�vols�g�nak megad�sa k�telez�';
$strings['Admin email is required'] = 'Az Adminisztr�tor email c�m�nek megad�sa k�telez�';
$strings['Resource name is required.'] = 'A Kontingens megnevez�se k�telez�.';
$strings['Valid schedule must be selected'] = '�rv�nyes El�jegyz�s nev�nek megad�sa k�telez�';
$strings['Minimum reservation length must be less than or equal to maximum reservation length.'] = 'A legr�videbb vizsg�lati id�tartam nem haladhatja meg a maxim�lis id�tartamot.';
$strings['Your request was processed successfully.'] = 'A k�r�s�t a Rendszer sikeresen feldolgozta.';
$strings['Go back to system administration'] = 'Vissza a Rendszer Adminisztr�ci�hoz';
$strings['Or wait to be automatically redirected there.'] = 'Vagy v�rja meg, am�g automatikusan �tir�ny�t�dik.';
$strings['There were problems processing your request.'] = 'Hiba t�rt�nt a k�r�s feldolgoz�s k�zben.';
$strings['Please go back and correct any errors.'] = 'K�rem menjen vissza �s jav�tson ki minden hib�t.';
$strings['Login to view details and place reservations'] = 'A r�szletek megtekint�s�hez �s vizsg�lat el�jegyz�shez jelentkezzen be';
$strings['Memberid is not available.'] = 'Az Azonos�t�: %s nem haszn�lhat�.';

$strings['Schedule Title'] = 'El�jegyz�s Megnevez�se';
$strings['Start Time'] = 'Kezd� id�pont';
$strings['End Time'] = 'Befejez� id�pont';
$strings['Time Span'] = 'Id�tartam';
$strings['Weekday Start'] = 'A H�t Kezd� Napja';
$strings['Admin Email'] = 'Admin Email';

$strings['Default'] = 'Alap�rtelmezett';
$strings['Reset'] = 'Vissza�ll�t';
$strings['Edit'] = 'Szerkeszt�s';
$strings['Delete'] = 'T�rl�s';
$strings['Cancel'] = 'M�gse';
$strings['View'] = 'Megtekint';
$strings['Modify'] = 'M�dos�t�s';
$strings['Save'] = 'Ment�s';
$strings['Back'] = 'Vissza';
$strings['Next'] = 'El�re';
$strings['Close Window'] = 'Ablak Bez�r�sa';
$strings['Search'] = 'Keres�s';
$strings['Clear'] = 'Kit�rl�s';

$strings['Days to Show'] = 'Megjelen�tend� Napok Sz�ma';
$strings['Reservation Offset'] = 'El�jegyz�s minim�lis id�beli t�vols�ga';
$strings['Hidden'] = 'Rejtett';
$strings['Show Summary'] = '�sszegz�s Megjelen�t�se';
$strings['Add Schedule'] = '�j El�jegyz�s Hozz�ad�sa';
$strings['Edit Schedule'] = 'El�jegyz�s Szerkeszt�se';
$strings['No'] = 'Nem';
$strings['Yes'] = 'Igen';
$strings['Name'] = 'N�v';
$strings['First Name'] = 'Vezet�kn�v';
$strings['Last Name'] = 'Keresztn�v';
$strings['Resource Name'] = 'Kontingens Neve';
$strings['Email'] = 'Email c�m';
$strings['Institution'] = 'Int�zm�ny';
$strings['Phone'] = 'Telefon';
$strings['Password'] = 'Jelsz�';
$strings['Permissions'] = 'Jogosults�gok';
$strings['View information about'] = 'T�j�koztat� megtekint�se a k�vetkez� felhaszn�l�r�l: %s %s';
$strings['Send email to'] = 'Email k�ld�se a k�vetkez� felhaszn�l�nak: %s %s';
$strings['Reset password for'] = 'A k�vetkez� felhaszn�l� jelszav�nak �t�ll�t�sa: %s %s';
$strings['Edit permissions for'] = 'A k�vetkez� felhaszn�l� jogosults�gainak szerkeszt�se: %s %s';
$strings['Position'] = 'Beoszt�s';
$strings['Password (6 char min)'] = 'Jelsz� (minimum %s bet�)'; // @since 1.1.0
$strings['Re-Enter Password'] = 'A jelsz� ism�telt megad�sa';

$strings['Sort by descending last name'] = 'Cs�kken� sorrend a Keresztn�v alapj�n';
$strings['Sort by descending email address'] = 'Cs�kken� sorrend az Email c�m alapj�n';
$strings['Sort by descending institution'] = 'Cs�kken� sorrend az Int�zm�ny megnevez�se alapj�n';
$strings['Sort by ascending last name'] = 'Emelked� sorrend a Keresztn�v alapj�n';
$strings['Sort by ascending email address'] = 'Emelked� sorrend az Email c�m alapj�n';
$strings['Sort by ascending institution'] = 'Emelked� sorrend az Int�zm�ny megnevez�se alapj�n';
$strings['Sort by descending resource name'] = 'Cs�kken� sorrend a Kontingens neve alapj�n';
$strings['Sort by descending location'] = 'Cs�kken� sorrend Helysz�n alapj�n';
$strings['Sort by descending schedule title'] = 'Cs�kken� sorrend az El�jegyz�s megnevez�se alapj�n';
$strings['Sort by ascending resource name'] = 'Emelked� sorrend a Kontingens neve alapj�n';
$strings['Sort by ascending location'] = 'Emelked� sorrend Helysz�n alapj�n';
$strings['Sort by ascending schedule title'] = 'Emelked� sorrend az El�jegyz�s megnevez�se alapj�n';
$strings['Sort by descending date'] = 'Cs�kken� sorrend a d�tum alapj�n';
$strings['Sort by descending user name'] = 'Cs�kken� sorrend Felhaszn�l�i n�v alapj�n';
$strings['Sort by descending start time'] = 'Cs�kken� sorrend a Kezd� id�pont alapj�n';
$strings['Sort by descending end time'] = 'Cs�kken� sorrend a Befejez� id�pont alapj�n';
$strings['Sort by ascending date'] = 'Emelked� sorrend d�tum alapj�n';
$strings['Sort by ascending user name'] = 'Emelked� sorrend a Felhaszn�l� n�v alapj�n';
$strings['Sort by ascending start time'] = 'Emelked� sorrend a Kezd� id�pont alapj�n';
$strings['Sort by ascending end time'] = 'Emelked� sorrend a Befejez� id�pont alapj�n';
$strings['Sort by descending created time'] = 'Cs�kken� sorrend a L�trehoz�s d�tuma alapj�n';
$strings['Sort by ascending created time'] = 'Emelked� sorrend a L�trehoz�s d�tuma alapj�n';
$strings['Sort by descending last modified time'] = 'Cs�kken� sorrend az utols� M�dos�t�s ideje alapj�n';
$strings['Sort by ascending last modified time'] = 'Emelked� sorrend az utols� M�dos�t�s ideje alapj�n';

$strings['Search Users'] = 'Felhaszn�l� Keres�se';
$strings['Location'] = 'Helysz�n';
$strings['Schedule'] = 'El�jegyz�s';
$strings['Phone'] = 'Telefon';
$strings['Notes'] = 'Megjegyz�s';
$strings['Status'] = '�llapot';
$strings['All Schedules'] = 'Minden El�jegyz�s';
$strings['All Resources'] = 'Minden Kontingens';
$strings['All Users'] = 'Minden Felhaszn�l�';

$strings['Edit data for'] = 'A k�vetkez� adatainak szerkeszt�se: %s';
$strings['Active'] = 'Akt�v';
$strings['Inactive'] = 'Inakt�v';
$strings['Toggle this resource active/inactive'] = 'A Kontingens aktiv�l�sa/inaktiv�l�sa';
$strings['Minimum Reservation Time'] = 'Minimum Vizsg�lati id�tartam';
$strings['Maximum Reservation Time'] = 'Maximum Vizsg�lati id�tartam';
$strings['Auto-assign permission'] = 'Jogosults�gok Automatikus Kioszt�sa';
$strings['Add Resource'] = 'Kontingens Hozz�ad�sa';
$strings['Edit Resource'] = 'Kontingens Szerkeszt�se';
$strings['Allowed'] = 'Enged�lyezett';
$strings['Notify user'] = 'Felhaszn�l� �rtes�t�se';
$strings['User Reservations'] = 'Felhaszn�l� Vizsg�latai';
$strings['Date'] = 'D�tum';
$strings['User'] = 'Felhaszn�l�';
$strings['Email Users'] = 'K�rlev�l k�ld�se felhaszn�l�(k)nak';
$strings['Subject'] = 'T�rgy';
$strings['Message'] = 'Sz�veg';
$strings['Please select users'] = 'V�lasszon Felhaszn�l�t';
$strings['Send Email'] = 'Email K�ld�se';
$strings['problem sending email'] = 'Probl�ma ad�dott az email k�ld�se sor�n. K�rem pr�b�lja �jra k�s�bb.';
$strings['The email sent successfully.'] = 'Az emailt siker�lt post�zni.';
$strings['do not refresh page'] = 'K�rem <u>NE</u> friss�tse ezt az oldalt, mert az email �jra elk�ld�sre ker�l.';
$strings['Return to email management'] = 'Visszat�r�s az Email Kezel�shez';
$strings['Please select which tables and fields to export'] = 'K�rem v�lassza ki, hogy melyik t�bl�t �s mez�t k�v�nja export�lni:';
$strings['all fields'] = '- minden mez� -';
$strings['HTML'] = 'HTML';
$strings['Plain text'] = 'Sima sz�veg';
$strings['XML'] = 'XML';
$strings['CSV'] = 'CSV';
$strings['Export Data'] = 'Adatok Export�l�sa';
$strings['Reset Password for'] = '%s Jelszav�nak vissza�ll�t�sa';
$strings['Please edit your profile'] = 'K�rem hajtsa v�gre Profilj�n a k�v�nt v�ltoztat�sokat';
$strings['Please register'] = 'K�rem Regisztr�ljon';
$strings['Keep me logged in'] = 'A Rendszer �rizzen meg bejelentkezett �llapotban <br/>(cookie t�mogat�s sz�ks�ges)';
$strings['Edit Profile'] = 'Profil Szerkeszt�se';
$strings['Register'] = 'Regisztr�ci�';
$strings['Please Log In'] = 'K�rem Jelentkezzen Be';
$strings['Email address'] = 'Email C�m';
$strings['Password'] = 'Jelsz�';
$strings['First time user'] = 'Els� Alkalom?';
$strings['Click here to register'] = 'Kattintson ide a regisztr�ci�hoz';
$strings['Register for phpScheduleIt'] = 'Regisztr�ci� a phpScheduleIt Rendszerbe';
$strings['Log In'] = 'Bejelentkez�s';
$strings['View Schedule'] = 'El�jegyz�sek Megtekint�se';
$strings['View a read-only version of the schedule'] = 'Megtekint�s Csak Olvashat� M�dban';
$strings['I Forgot My Password'] = 'Elfelejtett Jelsz�';
$strings['Retreive lost password'] = 'Elfelejtett jelsz� elk�r�se';
$strings['Get online help'] = 'Online Seg�ts�g';
$strings['Language'] = 'Nyelv';
$strings['(Default)'] = '(Alap�rtelmezett)';

$strings['My Announcements'] = 'Bejelent�sek';
$strings['My Reservations'] = 'Vizsg�latok';
$strings['My Permissions'] = 'Jogosults�gok';
$strings['My Quick Links'] = 'Gyors Linkek';
$strings['Announcements as of'] = 'Bejelent�sek %s';
$strings['There are no announcements.'] = 'Nincsen Bejelent�s.';
$strings['Resource'] = 'Kontingens';
$strings['Created'] = 'L�trehoz�s';
$strings['Last Modified'] = 'Utols� M�dos�t�s';
$strings['View this reservation'] = 'Vizsg�lat megtekint�se';
$strings['Modify this reservation'] = 'Vizsg�lat m�dos�t�sa';
$strings['Delete this reservation'] = 'Vizsg�lat t�rl�se';
$strings['Bookings'] = 'El�jegyz�s';
$strings['Change My Profile Information/Password'] = 'Profil Szerkeszt�s/Jelsz� V�lt�s'; // @since 1.2.0
$strings['Manage My Email Preferences'] = 'Email Be�ll�t�sok Szerkeszt�se'; // @since 1.2.0
$strings['Mass Email Users'] = 'K�remail k�ld�se';
$strings['Search Scheduled Resource Usage'] = 'Keres�s a kontingensek kihaszn�lts�gi adatai k�z�tt'; // @since 1.2.0
$strings['Export Database Content'] = 'Adatb�zis Tartalom Export�l�sa';
$strings['View System Stats'] = 'Rendszer Statisztika Megtekint�se';
$strings['Email Administrator'] = 'Email K�ld�se az Adminisztr�tornak';

$strings['Email me when'] = 'Email k�ld�se a k�vetkez� esetben:';
$strings['I place a reservation'] = 'Vizsg�lat el�jegyz�se';
$strings['My reservation is modified'] = 'El�jegyzett vizsg�lat m�dos�tt�sa';
$strings['My reservation is deleted'] = 'El�jegyzett vizsg�lat t�rl�se';
$strings['I prefer'] = 'El�nyben r�szes�tett form�tum:';
$strings['Your email preferences were successfully saved'] = 'Az email be�ll�t�sok sikeresen t�rol�sra ker�ltek!';
$strings['Return to My Control Panel'] = 'Vissza a Vez�rl� Pulthoz';

$strings['Please select the starting and ending times'] = 'V�laszthat egy kezd� �s egy befejez� id�pontot:';
$strings['Please change the starting and ending times'] = 'M�dos�thatja a kezd� �s a befejez� id�pontot:';
$strings['Reserved time'] = 'Fenntartott id�tartam:';
$strings['Minimum Reservation Length'] = 'Minimum Vizsg�lati Id�:';
$strings['Maximum Reservation Length'] = 'Maximum Vizsg�lati Id�:';
$strings['Reserved for'] = 'Fenntartva:';
$strings['Will be reserved for'] = 'Vizsg�latot el�jegyz� felhaszn�l�:';
$strings['N/A'] = 'N/A';
$strings['Update all recurring records in group'] = 'Ism�telt El�fordul�s(ok) Friss�t�se';
$strings['Delete?'] = 'T�rl�s?';
$strings['Never'] = '-- Soha --';
$strings['Days'] = 'Naponta';
$strings['Weeks'] = 'Hetenk�nt';
$strings['Months (date)'] = 'H�napban (D�tum)';
$strings['Months (day)'] = 'H�napban (Nap)';
$strings['First Days'] = 'Els� nap';
$strings['Second Days'] = 'M�sodik napon';
$strings['Third Days'] = 'Harmadik napon';
$strings['Fourth Days'] = 'Negyedik napon';
$strings['Last Days'] = 'Utols� nap';
$strings['Repeat every'] = 'Ism�telt el�fordul�s:';
$strings['Repeat on'] = 'Ism�tl�dj�n:';
$strings['Repeat until date'] = 'Ism�tl�dj�n a k�vetkez� id�pontig:';
$strings['Choose Date'] = 'V�lasszon d�tumot';
$strings['Summary'] = '�sszegz�s';

$strings['View schedule'] = 'El�jegyz�s megtekint�se:';
$strings['My Reservations'] = 'Saj�t Vizsg�lat';
$strings['My Past Reservations'] = 'Lej�rt Saj�t Vizsg�lat';
$strings['Other Reservations'] = 'Egy�b Vizsg�lat';
$strings['Other Past Reservations'] = 'Lej�rt Egy�b Vizsg�lat';
$strings['Blacked Out Time'] = 'Tiltott Id�pont';
$strings['Set blackout times'] = 'Id�pont Tilt�sa %s %s';
$strings['Reserve on'] = 'Reserve %s on %s';
$strings['Prev Week'] = '&laquo; El�z� H�t';
$strings['Jump 1 week back'] = '1 H�ttel Vissza';
$strings['Prev days'] = '&#8249; El�z� %d nap';
$strings['Previous days'] = '&#8249; El�z� %d nap';
$strings['This Week'] = 'Aktu�lis H�t';
$strings['Jump to this week'] = 'Ugr�s erre a h�tre';
$strings['Next days'] = 'K�vetkez� %d nap &#8250;';
$strings['Next Week'] = 'K�vetkez� h�t &raquo;';
$strings['Jump To Date'] = 'Ugr�s erre a napra';
$strings['View Monthly Calendar'] = 'Napt�r Megtekint�se Havi Bont�sban';
$strings['Open up a navigational calendar'] = 'Navig�l� napt�r megnyit�sa';

$strings['View stats for schedule'] = 'El�jegyz�s statisztik�inak megjelen�t�se:';
$strings['At A Glance'] = 'Egy Pillantra';
$strings['Total Users'] = '�sszes Felhaszn�l�:';
$strings['Total Resources'] = '�sszes Kontingens:';
$strings['Total Reservations'] = '�sszes Vizsg�lat:';
$strings['Max Reservation'] = 'Maximum Vizsg�lat:';
$strings['Min Reservation'] = 'Minimum Vizsg�lat:';
$strings['Avg Reservation'] = '�tlagos Vizsg�lat:';
$strings['Most Active Resource'] = 'Legakt�vabb Kontingens:';
$strings['Most Active User'] = 'Legakt�vabb Felhaszn�l�:';
$strings['System Stats'] = 'Rendszer Statisztika';
$strings['phpScheduleIt version'] = 'phpScheduleIt verzi�:';
$strings['Database backend'] = 'Adatb�zis backend:';
$strings['Database name'] = 'Adatb�zis n�v:';
$strings['PHP version'] = 'PHP verzi�sz�m:';
$strings['Server OS'] = 'Szerver OS:';
$strings['Server name'] = 'Szerver n�v:';
$strings['phpScheduleIt root directory'] = 'phpScheduleIt gy�k�r k�nyvt�r:';
$strings['Using permissions'] = 'Jogosults�g kezel�s haszn�lata:';
$strings['Using logging'] = 'Napl�z�s haszn�lata:';
$strings['Log file'] = 'Napl� f�jl:';
$strings['Admin email address'] = 'Adminisztr�tor email c�me:';
$strings['Tech email address'] = 'Technikai t�mogat�s email c�me:';
$strings['CC email addresses'] = 'CC email c�m:';
$strings['Reservation start time'] = 'Vizsg�lat kezd� id�pont:';
$strings['Reservation end time'] = 'Vizsg�lat befejez� id�pont:';
$strings['Days shown at a time'] = 'Egyszerre megjeln�tett napok:';
$strings['Reservations'] = 'Vizsg�lati el�jegyz�s';
$strings['Return to top'] = 'Vissza a tetej�re';
$strings['for'] = ':';

$strings['Select Search Criteria'] = 'Keres�si Felt�tel Kiv�laszt�sa';
$strings['Schedules'] = 'El�jegyz�sek:';
$strings['All Schedules'] = '�sszes El�jegyz�s';
$strings['Hold CTRL to select multiple'] = 'T�bbsz�r�s v�laszt�shoz tartsa lenyomva a CTRL-t';
$strings['Users'] = 'Felhaszn�l�k:';
$strings['All Users'] = '�sszes Felhaszn�l�';
$strings['Resources'] = 'Kontingens:'; // @since 1.2.0
$strings['All Resources'] = '�sszes Kontingens';
$strings['Starting Date'] = 'Kezd� D�tum:';
$strings['Ending Date'] = 'Befejez� D�tum:';
$strings['Starting Time'] = 'Kezd� Id�pont:';
$strings['Ending Time'] = 'Befejez� Id�pont:';
$strings['Output Type'] = 'Kijelz�si M�d:';
$strings['Manage'] = 'Kezel�s';
$strings['Total Time'] = '�sszes�tett Id�tartam';
$strings['Total hours'] = '�sszes�tett �r�k:';
$strings['% of total resource time'] = '%-a az �sszes Vizsg�lati Id�nek';
$strings['View these results as'] = 'Az eredm�nyek megtekint�se a k�vetkez�k�ppen:';
$strings['Edit this reservation'] = 'A Vizsg�lat szerkeszt�se';
$strings['Search Results'] = 'Keres�s Eredm�nye';
$strings['Search Resource Usage'] = 'Kontingens Kihaszn�lts�g szerinti keres�s';
$strings['Search Results found'] = 'Keres�s Eredm�nye: %d Tal�lat';
$strings['Try a different search'] = 'M�sik keres�s';
$strings['Search Run On'] = 'Keres�s a K�vetkez�n Futott:';
$strings['Member ID'] = 'Felhaszn�l�i Azonos�t�';
$strings['Previous User'] = '&laquo; El�z� Felhaszn�l�';
$strings['Next User'] = 'K�vetkez� Felhaszn�l� &raquo;';

$strings['No results'] = 'Nincs Tal�lat';
$strings['That record could not be found.'] = 'Ilyen Bejegyz�s nem tal�lhat�..';
$strings['This blackout is not recurring.'] = 'A Tiltott Id�pont nem ism�tl�dik.';
$strings['This reservation is not recurring.'] = 'A Vizsg�lat nem ism�tl�dik.';
$strings['There are no records in the table.'] = 'Nincs egy Bejegyz�s sem a k�vetkez� T�bl�ban: %s.';
$strings['You do not have any reservations scheduled.'] = 'Nem tal�lhat� �n �ltal el�jegyzett Vizsg�lat.';
$strings['You do not have permission to use any resources.'] = '�nnek egyik Kontingens haszn�lat�hoz sincs joga.';
$strings['No resources in the database.'] = 'Nincs Kontingens az adatb�zisban.';
$strings['There was an error executing your query'] = 'Hiba t�rt�nt a k�r�s feldolgoz�sa k�zben:';

$strings['That cookie seems to be invalid'] = 'A Cookie �rv�nytelennek t�nik';
$strings['We could not find that logon in our database.'] = 'Nem tal�lhat� ilyen El�r�s az adatb�zisban.';	// @since 1.1.0
$strings['That password did not match the one in our database.'] = 'A megadott Jelsz� �s/vagy Azonos�t� nem egyezik az adatb�zisban szerepl�vel.';
$strings['You can try'] = '<br />Regisztr�ljon mag�t az<br />el�jegyz�si rendszerhez,<br />vagy pr�b�ljon meg<br />�jb�l bejelentkezni.';
$strings['A new user has been added'] = 'Az �j Felhaszn�l� bejegyz�sre ker�lt';
$strings['You have successfully registered'] = 'Sikeres Regisztr�ci�!';
$strings['Continue'] = 'Folytat�s...';
$strings['Your profile has been successfully updated!'] = 'A Profil sikeresen friss�t�sre ker�lt!';
$strings['Please return to My Control Panel'] = 'K�rem t�rjen vissza a Vez�rl� Pulthoz';
$strings['Valid email address is required.'] = '- Val�s email c�m megad�sa sz�ks�ges.';
$strings['First name is required.'] = '- Vezet�kn�v megad�sa k�telez�.';
$strings['Last name is required.'] = '- Keresztn�v megad�sa k�telez�.';
$strings['Phone number is required.'] = '- Telefonsz�m megad�sa k�telez�.';
$strings['That email is taken already.'] = '- A megadott email c�m foglalt.<br />K�rem v�lasszon egy m�sikat.';
$strings['Min 6 character password is required.'] = '- Min %s bet� hossz� jelsz� megad�sa sz�ks�ges.';
$strings['Passwords do not match.'] = '- A jelsz� nem egyezik.';

$strings['Per page'] = 'Oldalank�nt:';
$strings['Page'] = 'Oldal:';

$strings['Your reservation was successfully created'] = 'A Vizsg�lat sikeresen bejegyz�sre ker�lt';
$strings['Your reservation was successfully modified'] = 'A Vizsg�lat sikeresen m�dos�t�sra ker�lt';
$strings['Your reservation was successfully deleted'] = 'A Vizsg�lat sikeresen t�rl�sre ker�lt';
$strings['Your blackout was successfully created'] = 'A Tiltott Id�pont sikeresen bejegyz�sre ker�lt';
$strings['Your blackout was successfully modified'] = 'A Tiltott Id�pont sikeresen m�dos�t�sra ker�lt';
$strings['Your blackout was successfully deleted'] = 'A Tiltott Id�pont sikeresen t�rl�sre ker�lt';
$strings['for the follwing dates'] = 'az al�bbi id�pont(ok)ban:';
$strings['Start time must be less than end time'] = 'A Kezd� Id�pontnak kor�bbinak kell lenni a Befejez� Id�pontn�l';
$strings['Current start time is'] = 'Aktu�lis Kezd� Id�pont:';
$strings['Current end time is'] = 'Aktu�lis Befejez� Id�pont:';
$strings['Reservation length does not fall within this resource\'s allowed length.'] = 'A Vizsg�lat megadott hossza nem teljes�ti az id�tartammal kapcsolatban\ meghat�rozott felt�teleket.';
$strings['Your reservation is'] = 'Az �n Vizsg�lata:';
$strings['Minimum reservation length'] = 'Minim�lis Vizsg�lati Id�tartam:';
$strings['Maximum reservation length'] = 'Maxim�lis Vizsg�lati Id�tartam:';
$strings['You do not have permission to use this resource.'] = 'Nincs Jogosults�ga az adott Kontingens haszn�lat�hoz.';
$strings['reserved or unavailable'] = 'az %s %s foglalt, vagy nem haszn�lhat�.';	// @since 1.1.0
$strings['Reservation created for'] = 'Vizsg�lat l�trehozva %s';
$strings['Reservation modified for'] = 'Vizsg�lat m�dos�tva %s';
$strings['Reservation deleted for'] = 'Vizsg�lat t�r�lve %s';
$strings['created'] = 'l�trehozta';
$strings['modified'] = 'm�dos�totta';
$strings['deleted'] = 't�r�lte';
$strings['Reservation #'] = 'Vizsg�lat #';
$strings['Contact'] = 'Kapcsolat';
$strings['Reservation created'] = 'Vizsg�lat l�trehozva';
$strings['Reservation modified'] = 'Vizsg�lat m�dos�tva';
$strings['Reservation deleted'] = 'Vizsg�lat t�r�lve';

$strings['Reservations by month'] = 'Vizsg�latok H�napos Bont�sban';
$strings['Reservations by day of the week'] = 'Vizsg�latok Napos Bont�sban';
$strings['Reservations per month'] = 'Vizsg�latok H�naponk�nt';
$strings['Reservations per user'] = 'Vizsg�latok Felhaszn�l�nk�nt';
$strings['Reservations per resource'] = 'Vizsg�latok Kontingensenk�nt';
$strings['Reservations per start time'] = 'Vizsg�latok Kezd� Id�pont Alapj�n';
$strings['Reservations per end time'] = 'Vizsg�latok Befejez� Id�pont Alapj�n';
$strings['[All Reservations]'] = '[Minden Vizsg�lat]';

$strings['Permissions Updated'] = 'Friss�ltek a Jogosults�gok';
$strings['Your permissions have been updated'] = '%s Jogosult�sgok friss�t�sre ker�ltek';
$strings['You now do not have permission to use any resources.'] = 'Egy Kontingens haszn�lat�hoz sincs Jogosults�ga.';
$strings['You now have permission to use the following resources'] = 'Mostant�l Jogosults�ggal rendelkezik a k�vetkez� Kontingens(ek) haszn�lat�hoz:';
$strings['Please contact with any questions.'] = 'K�rd�s eset�n k�rem vegye fel a kapcsolatot a k�vetkez�vel: %s.';
$strings['Password Reset'] = 'Jelsz� Vissza�ll�tva';

$strings['This will change your password to a new, randomly generated one.'] = 'Ezzel Jelszava v�letlenszer�re fog v�ltozni.';
$strings['your new password will be set'] = 'Miut�n megadta az Email c�m�t �s a "Jelsz� Megv�ltoztat�sa" gombra kattint, az �jdons�lt Jelszav�t a rendszer regisztr�lja �s elk�ldi �nnek Email-ben.';
$strings['Change Password'] = 'Jelsz� Megv�ltoztat�sa';
$strings['Sorry, we could not find that user in the database.'] = 'Sajnos a megadott Felhaszn�l� nem tal�lhat� meg az adatb�zisban.';
$strings['Your New Password'] = 'Az �n �j %s Jelszava';
$strings['Your new passsword has been emailed to you.'] = 'Elk�sz�lt!<br />'
    			. 'Az �jdons�lt Jelszav�t a Rendszer elk�ldte �nnek.<br />'
    			. 'K�rem ellen�rizze postafi�kj�t �s a ny�t�lapon Kattintson a <a href="index.php">Bejelentkez�s</a> linkre.'
    			. ' Haszn�lja az �j Jelszav�t �s v�ltoztassa meg azonnal a &quot;Profil Szerkeszt�se/Jelsz� Megv�ltoztat�sa&quot;'
    			. ' men�pont alatt a Vez�rl� Pultban.';

$strings['You are not logged in!'] = 'Nincs Bejelentkezve!';

$strings['Setup'] = 'Telep�t�s';
$strings['Please log into your database'] = 'K�rem jelentkezzen be az adatb�zisba';
$strings['Enter database root username'] = 'Adja meg az adatb�zis felhaszn�l�j�nak azonos�t�j�t:';
$strings['Enter database root password'] = 'Adja meg az adatb�zis felhaszn�l�j�nak jelszav�t:';
$strings['Login to database'] = 'Bejelentkez�s az adatb�zisba';
$strings['Root user is not required. Any database user who has permission to create tables is acceptable.'] = 'Az adatb�zis root felhaszn�l�j�nak megad�sa <b>nem</b> sz�ks�ges. B�rmely adatb�zis felhaszn�l� megfelel, amelynek van jogosults�ga a t�bl�k l�trehoz�s�ra.';
$strings['This will set up all the necessary databases and tables for phpScheduleIt.'] = 'Ezzel telep�t�sre ker�l minden sz�ks�ges phpScheduleIt Adatb�zis �s T�bla.';
$strings['It also populates any required tables.'] = 'Valamint felt�lti a sz�ks�ges T�bl�kat.';
$strings['Warning: THIS WILL ERASE ALL DATA IN PREVIOUS phpScheduleIt DATABASES!'] = 'Figyelmeztet�s: MINDEN KOR�BBI ADAT T�RL�SRE KER�L A phpScheduleIt ADATB�ZISB�L!';
$strings['Not a valid database type in the config.php file.'] = '�rv�nytelen adatb�zis t�pus szerepel a config.php f�jlban.';
$strings['Database user password is not set in the config.php file.'] = 'Az adatb�zis felhaszn�l�j�nak jelszava nincs megadva a config.php f�jlban.';
$strings['Database name not set in the config.php file.'] = 'Az adatb�zis neve nincs megadva config.php f�jlban.';
$strings['Successfully connected as'] = 'Sikeres kapcsol�d�s a k�vetkez� n�ven';
$strings['Create tables'] = 'T�bl�k l�trehoz�sa &gt;';
$strings['There were errors during the install.'] = 'Hiba t�rt�nt a telep�t�s sor�n. Elk�pzelhet�, hogy a phpScheduleIt m�gis m�k�dni fog, amennyiben ez csak kis jelent�s�g� volt.<br/><br/>'
	. 'K�rd�sekkel keresse fel a projekt f�rum�t a <a href="http://sourceforge.net/forum/?group_id=95547">SourceForge</a>-on.';
$strings['You have successfully finished setting up phpScheduleIt and are ready to begin using it.'] = 'A phpScheduleIt telep�t�se sikeresen befejez�d�tt �s a Rendszer haszn�latra k�sz.';
$strings['Thank you for using phpScheduleIt'] = 'K�rem bizonyosodjon meg r�la, hogy a \'install\' K�NYVT�RAT TELJESEN ELT�VOL�TOTTA.'
	. ' A k�nyvt�r t�rl�se alapvet� biztons�gi k�rd�s, mert bizalmas inform�ci�kat (adatb�zis jelsz�) tartalmaz.'
	. ' Elmulaszt�sa sz�les biztons�gi r�st hagy nyitva, melyen �t b�rmikor bet�rhetnek az adatb�zisba!'
	. '<br /><br />'
	. 'K�sz�net, ami�rt a phpScheduleIt-et v�lasztotta!';
$strings['There is no way to undo this action'] = 'A k�vetkez� beavatkoz�s vissza�ll�t�s�ra nincs lehet�s�g!';
$strings['Click to proceed'] = 'Kattintson a tov�bbl�p�shez';
$strings['Please delete this file.'] = 'K�rem t�r�lje ezt a f�jlt.';
$strings['Successful update'] = 'A Korszer�s�t�s sikerrel j�rt';
$strings['Patch completed successfully'] = 'A foltoz�s sikeresen befejez�d�tt';

// @since 1.0.0 RC1
$strings['If no value is specified, the default password set in the config file will be used.'] = 'Ha nincs megadva jelsz�, akkor a rendszer konfigur�ci�s f�jlban t�rolt alap�rtelmezett jelsz�t fogja haszn�lni.';
$strings['Notify user that password has been changed?'] = 'Kapjon �rtes�t�st a felhaszn�l� a jelsz� v�ltoz�sr�l?';

// @since 1.1.0
$strings['This system requires that you have an email address.'] = 'A rendszer haszn�lat�nak el�felt�tele, hogy legyen egy email c�me.';
$strings['Invalid User Name/Password.'] = '�rv�nytelen Felhaszn�l� N�v/Jelsz�.';
$strings['Pending User Reservations'] = 'Az Vizsg�lat(ok) bejegyz�se a j�v�hagy�s(uk)ig felf�ggeszt�sre ker�lt';
$strings['Approve'] = 'J�v�hagy�s';
$strings['Approve this reservation'] = 'A vizsg�lat j�v�hagy�sa';
$strings['Approve Reservations'] ='Vizsg�lat(ok) j�v�hagy�sa';

$strings['Announcement'] = 'Bejelent�s';
$strings['Number'] = 'Sz�m';
$strings['Add Announcement'] = 'Bejelent�s Hozz�ad�sa';
$strings['Edit Announcement'] = 'Bejelent�s Szerkeszt�se';
$strings['All Announcements'] = 'Minden Bejelent�s';
$strings['Delete Announcements'] = 'Bejelent�s T�rl�se';
$strings['Use start date/time?'] = 'Haszn�ljon kezd� d�tumot/id�pontot?';
$strings['Use end date/time?'] = 'Haszn�ljon befejez� d�tumot/id�pontot?';
$strings['Announcement text is required.'] = 'A Bejelent�s sz�veg�nek megad�sa k�telez�.';
$strings['Announcement number is required.'] = 'A Bejelent�s sz�m�nak megad�sa k�telez�.';

$strings['Pending Approval'] = 'A J�v�hagy�s f�gg�ben van';
$strings['My reservation is approved'] = 'A vizsg�lata j�v�hagy�sra ker�lt';
$strings['This reservation must be approved by the administrator.'] = 'A vizsg�latot az Adminisztr�tornak j�v� kell hagynia.';
$strings['Approval Required'] = 'J�v�hagy�s Sz�ks�ges';
$strings['No reservations requiring approval'] = 'Nincsen olyan vizsg�lat, amely j�v�hagy�sra v�r';
$strings['Your reservation was successfully approved'] = 'A vizsg�lat�t sikeresen j�v�hagyt�k';
$strings['Reservation approved for'] = 'A vizsg�lat j�v�hagy�sra ker�lt a k�vetkez� sz�m�ra: %s';
$strings['approved'] = 'J�v�hagyva';
$strings['Reservation approved'] = 'Vizsg�lat j�v�hagyva.';

$strings['Valid username is required'] = '�rv�nyes Felhaszn�l� N�v sz�ks�ges';
$strings['That logon name is taken already.'] = 'A Felhaszn�l� N�v m�r foglalt.';
$strings['this will be your login'] = '(ez lesz a Felhaszn�l� Neve)';
$strings['Logon name'] = 'Felhaszn�l� N�v';
$strings['Your logon name is'] = 'Az �n Felhaszn�l� Neve %s';

$strings['Start'] = 'Kezd�s';
$strings['End'] = 'Befejez�s';
$strings['Start date must be less than or equal to end date'] = 'A Kezd� id�pontnak kor�bbinak kell lennie a Befejez� id�pontn�l';
$strings['That starting date has already passed'] = 'A Kezd� id�pont m�r elm�lt';
$strings['Basic'] = 'Alap';
$strings['Participants'] = 'R�sztvev�k';
$strings['Close'] = 'Bez�r�s';
$strings['Start Date'] = 'Kezd� d�tum';
$strings['End Date'] = 'Befejez� d�tum';
$strings['Minimum'] = 'Minimum';
$strings['Maximum'] = 'Maximum';
$strings['Allow Multiple Day Reservations'] = 'T�bbnapos Vizsg�latok eneged�lyez�se';
$strings['Invited Users'] = 'Megh�vott Felhaszn�l�k';
$strings['Invite Users'] = 'Felhaszn�l�(k) Megh�v�sa';
$strings['Remove Participants'] = 'R�sztvev�(k) Elt�vol�t�sa';
$strings['Reservation Invitation'] = 'Megh�v�sos Vizsg�lat';
$strings['Manage Invites'] = 'Megh�v�sok kezel�se';
$strings['No invite was selected'] = 'Nem jel�lt ki Megh�v�st';
$strings['reservation accepted'] = '%s elfogadta a Megh�v�s�t a k�vetkez�re: %s';
$strings['reservation declined'] = '%s visszautas�totta a Megh�v�s�t a k�vetkez�re: %s';
$strings['Login to manage all of your invitiations'] = 'L�pjen be a Rendszerbe Megh�v�sai kezel�s�hez';
$strings['Reservation Participation Change'] = 'R�szv�tel Megv�ltoztat�sa';
$strings['My Invitations'] = 'Megh�v�sok';
$strings['Accept'] = 'Elfogad�s';
$strings['Decline'] = 'Visszautas�t�s';
$strings['Accept or decline this reservation'] = 'Fogadja el, vagy utas�tsa vissza a Megh�v�st';
$strings['My Reservation Participation'] = 'R�szv�telek';
$strings['End Participation'] = 'R�szv�tel V�ge';
$strings['Owner'] = 'Tulajdonos';
$strings['Particpating Users'] = 'R�sztvev� Felhaszn�l�k';
$strings['No advanced options available'] = 'Nincs el�rhet� tov�bbi opci�';
$strings['Confirm reservation participation'] = 'Vizsg�lati el�jegyz�sben val� r�szv�tel meger�s�t�se';
$strings['Confirm'] = 'Meger�s�t�s';
$strings['Do for all reservations in the group?'] = 'Alkalmazza a csoportban szerepl� �sszes vizsg�latra?';

$strings['My Calendar'] = 'Saj�t Napt�r';
$strings['View My Calendar'] = 'Saj�t Napt�r Megtekint�se';
$strings['Participant'] = 'R�sztvev�(k)';
$strings['Recurring'] = 'Ism�tl�d�';
$strings['Multiple Day'] = 'T�bbnapos';
$strings['[today]'] = '[ma]';
$strings['Day View'] = 'Napi Bont�s';
$strings['Week View'] = 'Heti Bont�s';
$strings['Month View'] = 'Havi Bont�s';
$strings['Resource Calendar'] = 'Kontingens Napt�r';
$strings['View Resource Calendar'] = 'Kontingens Napt�r Megtekint�se';
$strings['Signup View'] = 'Lista N�zet';

$strings['Select User'] = 'Felhaszn�l� Kiv�laszt�sa';
$strings['Change'] = 'M�dos�t�s';

$strings['Update'] = 'Friss�t�s';
$strings['phpScheduleIt Update is only available for versions 1.0.0 or later'] = 'phpScheduleIt Korszer�s�t�s csak 1.0.0 vagy k�s�bbi v�ltozathoz el�rhet�';
$strings['phpScheduleIt is already up to date'] = 'A phpScheduleIt naprak�sz �llapotban van';
$strings['Migrating reservations'] = 'Vizsg�latok �tv�tele';

$strings['Admin'] = 'Adminisztr�tor';
$strings['Manage Announcements'] = 'Bejelent�s Kezel�s';
$strings['There are no announcements'] = 'Nincs �rv�nyes Bejelent�s';
// end since 1.1.0

// @since 1.2.0
$strings['Maximum Participant Capacity'] = 'R�sztvev�k Maxim�lis Sz�ma';
$strings['Leave blank for unlimited'] = 'Hagyja szabadon korl�tlan sz�m� R�sztvev�h�z';
$strings['Maximum of participants'] = 'A vizsg�lati el�jegyz�snek maximum %s r�sztvev�je lehet';
$strings['That reservation is at full capacity.'] = 'A vizsg�lati el�jegyz�s el�rte a maxim�lis r�sztvev� sz�mot.';
$strings['Allow registered users to join?'] = 'Enged�lyezi regisztr�lt felhaszn�l�k r�szv�tel�t?';
$strings['Allow non-registered users to join?'] = 'Enged�lyezi nem regisztr�lt felhaszn�l�k r�szv�tel�t?';
$strings['Join'] = 'Csatlakoz�s';
$strings['My Participation Options'] = 'R�szv�teli Be�ll�t�sok';
$strings['Join Reservation'] = 'Csatlakoz�s a vizsg�lati el�jegyz�shez';
$strings['Join All Recurring'] = 'Csatlakoz�s Minden Ism�tl�d�h�z';
$strings['You are not participating on the following reservation dates because they are at full capacity.'] = 'Nem csatlakozhat a k�vetkez� vizsg�lati el�jegyz�s(ek)hez a r�sztvev�k maxim�lis sz�ma miatt.';
$strings['You are already invited to this reservation. Please follow participation instructions previously sent to your email.'] = 'M�r meghivt�k ehhez a vizsg�lati el�jegyz�shez. K�rem k�vesse a r�szv�teli utas�t�sokat, melyeket kor�bban emailben kapott.';
$strings['Additional Tools'] = 'Tov�bbi Eszk�z�k';
$strings['Create User'] = 'Felhaszn�l� L�trehoz�sa';
$strings['Check Availability'] = 'El�rhet�s�g ellen�rz�se';
$strings['Manage Additional Resources'] = 'Kieg�sz�t� Hozz�ad�sa';
$strings['Number Available'] = 'Sz�m� El�rhet�';
$strings['Unlimited'] = 'Korl�tlan';
$strings['Add Additional Resource'] = 'Kieg�sz�t� Kontingens Hozz�ad�sa';
$strings['Edit Additional Resource'] = 'Kieg�sz�t� Szerkeszt�se';
$strings['Checking'] = 'Ellen�rz�s';
$strings['You did not select anything to delete.'] = 'Nem v�lasztott ki semmi t�rlend�t.';
$strings['Added Resources'] = 'Hozz�adott Kontingensek';
$strings['Additional resource is reserved'] = 'A(z) %s kieg�sz�t� kontingensb�l egyszerre csak %s �rhet� el';
$strings['All Groups'] = 'Minden Csoport';
$strings['Group Name'] = 'Csoport N�v';
$strings['Delete Groups'] = 'Csoport T�rl�se';
$strings['Manage Groups'] = 'Csoport Kezel�s';
$strings['None'] = 'Nincs';
$strings['Group name is required.'] = 'Csoport nev�nek megad�sa sz�ks�geltetik.';
$strings['Groups'] = 'Csoportok';
$strings['Current Groups'] = 'Aktu�lis Csoportok';
$strings['Group Administration'] = 'Csoport Karbantart�s';
$strings['Reminder Subject'] = 'Vizsg�lati el�jegyz�s eml�keztet� - %s, %s %s';
$strings['Reminder'] = 'Eml�keztet�';
$strings['before reservation'] = 'el�jegyzett vizsg�lat el�tt';
$strings['My Participation'] = 'R�szv�tel';
$strings['My Past Participation'] = 'Kor�bbi R�szv�tel';
$strings['Timezone'] = 'Id�z�na';
$strings['Export'] = 'Export�l�s';
$strings['Select reservations to export'] = 'V�lassza ki az export�lni k�v�nt vizsg�latot';
$strings['Export Format'] = 'Export form�tum';
$strings['This resource cannot be reserved more than x hours in advance'] = 'Ebbe a kontingensbe nem jegyezhet el� %s �r�val kor�bban';
$strings['Minimum Booking Notice'] = 'Legkor�bbi El�jegyz�s �rtes�t�';
$strings['Maximum Booking Notice'] = 'Legk�s�bbi El�jegyz�s �rtes�t�';
$strings['hours prior to the start time'] = '�r�nyira a kezd� id�pontig';
$strings['hours from the current time'] = '�r�nyira mostant�l';
$strings['Contains'] = 'Tartalmazza';
$strings['Begins with'] = 'Kezd�dik';
$strings['Minimum booking notice is required.'] = 'Minimum el�jegyz�si figyelmeztet�s sz�ks�ges.';
$strings['Maximum booking notice is required.'] = 'Maximum el�jegyz�si figyelmeztet�s sz�ks�ges.';
$strings['Accessory Name'] = 'Kieg�sz�t� Neve';
$strings['Accessories'] = 'Kieg�sz�t�k';
$strings['All Accessories'] = '�sszes Kieg�sz�t�';
$strings['Added Accessories'] = 'Hozz�adott Kieg�sz�t�(k)';
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
				. "Sikeresen regisztr�lt a k�vetkez� inform�ci�kkal:\r\n"
				. "Felhaszn�l� n�v: %s\r\n"
				. "N�v: %s %s \r\n"
				. "Telefon: %s \r\n"
				. "Int�zm�ny: %s \r\n"
				. "Beoszt�s: %s \r\n\r\n"
				. "K�rem jelentkezzen be a Rendszerbe a k�vetkez� helyen:\r\n"
				. "%s \r\n\r\n"
				. "Az Online El�jegyz�shez �s a Profil Szerkeszt�s�hez vezet� linket az Ir�ny�t� Pulton tal�l.\r\n\r\n"
				. "Kontingessel �s el�jegyz�ssel kapcsolatos k�rd�seivel forduljon a k�vetkez�h�z: %s";

// Email message the admin gets after a new user registers
$email['register_admin'] = "Adminisztrátor,\r\n\r\n"
					. "Egy �j Felhaszn�l� regisztr�lt �s az al�bbi inform�ci�kat adta meg:\r\n"
					. "Email c�m: %s \r\n"
					. "N�v: %s %s \r\n"
					. "Telefon: %s \r\n"
					. "Int�zm�ny: %s \r\n"
					. "Beoszt�s: %s \r\n\r\n";

// First part of the email that a user gets after they create/modify/delete a reservation
// 'reservation_activity_1' through 'reservation_activity_6' are all part of one email message
//  that needs to be assembled depending on different options.  Please translate all of them.
// @since 1.1.0
$email['reservation_activity_1'] = "%s,\r\n<br />"
			. "�n sikeresen %s a(z) #%s sz�m� el�jeygz�st.\r\n\r\n<br/><br/>"
			. "K�rem hivatkozzon a megadott sz�mra, ha kapcsolatba k�v�n l�pni az Adminsztr�torral.\r\n\r\n<br/><br/>"
			. "A %s %s �s %s %s k�z�tti %s el�jegyz�s, amely"
			. " a k�vetkez� helyen tal�lhat�: %s, %s.\r\n\r\n<br/><br/>";
$email['reservation_activity_2'] = "A Vizsg�lat a k�vetkez� napokon fog ism�tl�dni:\r\n<br/>";
$email['reservation_activity_3'] = "A csoportban el�fordul� �sszes ism�tl�d� Vizsg�lat szint�n %s.\r\n\r\n<br/><br/>";
$email['reservation_activity_4'] = "A k�vetkez� �sszegz�st adt�k meg a Vizsg�lat el�jegyz�sekor:\r\n<br/>%s\r\n\r\n<br/><br/>";
$email['reservation_activity_5'] = "Amennyiben ez egy t�ved�s, k�rem �rtes�tse az Adminisztr�tort: %s"
			. " vagy telefon�ljon a k�vetkez� sz�mra: %s.\r\n\r\n<br/><br/>"
			. "Az el�jegyzett Vizsg�lat r�szleteit b�rmikor megn�zheti vagy m�dos�thatja, ha"
			. " Bejelentkezik %s Rendszerbe a k�vetkez� helyen:\r\n<br/>"
			. "<a href=\"%s\" target=\"_blank\">%s</a>.\r\n\r\n<br/><br/>";
$email['reservation_activity_6'] = "A technikai jelleg� k�rd�sekkel forduljon a k�vetkez�h�z: <a href=\"mailto:%s\">%s</a>.\r\n\r\n<br/><br/>";
// @since 1.1.0
$email['reservation_activity_7'] = "%s,\r\n<br />"
			. "#%s sz�m� El�jegyz�s Elfogad�sra ker�lt.\r\n\r\n<br/><br/>"
			. "K�rem hivatkozzon a megadott sz�mra, ha kapcsolatba k�v�n l�pni az Adminsztr�torral.\r\n\r\n<br/><br/>"
			. "A %s %s �s %s %s k�z�tti %s el�jegyz�s, amely"
			. " a k�vetkez� helyen tal�lhat�: %s, %s.\r\n\r\n<br/><br/>";

// Email that the user gets when the administrator changes their password
$email['password_reset'] = "Az �n %s Jelszav�t az Adminisztr�tor Vissza�ll�totta.\r\n\r\n"
			. "Az �n ideiglenes jelszava:\r\n\r\n %s\r\n\r\n"
			. "K�rem haszn�lja ezt (m�solja �s illessze be, hogy biztosan helyes legyen) a Bel�p�shez %s a k�vetkez� helyen: %s"
			. " �s v�ltoztassa meg nyomban a Vez�rl� Pult 'Profil Szerkeszt�se/Jelsz� Megv�ltoztat�sa' men�pontj�ban.\r\n\r\n"
			. "K�rd�seivel k�rem keresse meg a k�vetkez�t: %s.";

// Email that the user gets when they change their lost password using the 'Password Reset' form
$email['new_password'] = "%s,\r\n"
            . "Az �n �j Jelszava az %s El�r�s�hez a k�vetkez�:\r\n\r\n"
            . "%s\r\n\r\n"
            . "K�rem jelentkezzen be a k�vetkez� helyen: %s"
            . "�s haszn�lja az �jdons�lt Jelszav�t "
            . "(m�solja �s illessze be, hogy biztosan hib�tlanul ker�lj�n bevitelre) "
            . "majd a jelsz� azonnali megv�ltoztat�s�hoz keresse fel a "
            . "Profil Szerkeszt�se/Jelsz� Megv�ltoztat�sa men�pontot "
            . "a Vez�rl� Pultban.\r\n\r\n"
            . "K�rd�seivel forduljon a k�vetkez�h�z: %s.";

// @since 1.1.0
// Email that is sent to invite users to a reservation
$email['reservation_invite'] = "%s Megh�vta �nt R�sztvev�nek a k�vetkez� El�jegyz�sbe:\r\n\r\n"
		. "Kontingens: %s\r\n"
		. "Kezd� D�tum: %s\r\n"
		. "Kezd� Id�pont: %s\r\n"
		. "Befejez� D�tum: %s\r\n"
		. "Befejez� Id�pont: %s\r\n"
		. "�sszegz�s: %s\r\n"
		. "Ism�telt El�fordul�s (amennyiben �rv�nyes): %s\r\n\r\n"
		. "A Megh�v�s Elfogad�s�hoz kattintson a k�vetkez� linkre (m�solja �s illessze be, ha nem m�k�dik) %s\r\n"
		. "A Megh�v�s Visszautas�t�s�hoz k�vesse a k�vetkez� linket (m�solja �s illesze be, ha nem m�k�dik) %s\r\n"
		. "Tov�bbi m�veletekhez jelentkezzen be a %s Rendszerbe a k�vetkez� c�men: %s";

// @since 1.1.0
// Email that is sent when a user is removed from a reservation
$email['reservation_removal'] = "Az �n k�vetkez� El�jegyz�se elt�vol�t�sra ker�lt a Rendszerb�l:\r\n\r\n"
		. "Kontingens: %s\r\n"
		. "Kezd� D�tum: %s\r\n"
		. "Kezd� Id�pont: %s\r\n"
		. "Befejez� D�tum: %s\r\n"
		. "Befejez� Id�pont: %s\r\n"
		. "�sszegz�s: %s\r\n"
		. "Ism�telt El�fordul�s (amennyiben �rv�nyes): %s\r\n\r\n";

// @since 1.2.0
// Email body that is sent for reminders
$email['Reminder Body'] = "A k�vetkez� vizsg�lati el�jegyz�s ideje k�zeleg: %s, %s %s - %s %s.";
?>