<?php
/**
* Russian (ru) translation file.
*  
* @author Nick Korbel <lqqkout13@users.sourceforge.net>
* @translator Sergey Salnikov <salnsg@gmail.com>
* @version 05-14-06
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
$charset = 'windows-1251';

/***
  DAY NAMES
  All of these arrays MUST start with Sunday as the first element 
   and go through the seven day week, ending on Saturday
***/
// The full day name
$days_full = array('�����������', '�����������', '�������', '�����', '�������', '�������', '�������');
// The three letter abbreviation
$days_abbr = array('���', '���', '���', '���', '���', '���', '���');
// The two letter abbreviation
$days_two  = array('��', '��', '��', '��', '��', '��', '��');
// The one letter abbreviation
$days_letter = array('�', '�', '�', '�', '�', '�', '�');

/***
  MONTH NAMES
  All of these arrays MUST start with January as the first element
   and go through the twelve months of the year, ending on December
***/
// The full month name
$months_full = array('������', '�������', '����', '������', '���', '����', '����', '������', '��������', '�������', '������', '�������');
// The three letter month name
$months_abbr = array('���', '���', '���', '���', '���', '���', '���', '���', '���', '���', '���', '���');

// All letters of the alphabet starting with A and ending with Z
$letters = array ('�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�' ,'�', '�', '�', '�', '�');

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
$strings['hours'] = '����';
$strings['minutes'] = '������';
// The common abbreviation to hint that a user should enter the month as 2 digits
$strings['mm'] = 'mm';
// The common abbreviation to hint that a user should enter the day as 2 digits
$strings['dd'] = 'dd';
// The common abbreviation to hint that a user should enter the year as 4 digits
$strings['yyyy'] = 'yyyy';
$strings['am'] = 'am';
$strings['pm'] = 'pm';

$strings['Administrator'] = '�����������������';
$strings['Welcome Back'] = '� ������������, %s';
$strings['Log Out'] = '�����';
$strings['My Control Panel'] = '��� ������ ����������';
$strings['Help'] = '������';
$strings['Manage Schedules'] = '���������� ������������';
$strings['Manage Users'] ='���������� ��������������';
$strings['Manage Resources'] ='���������� ���������';
$strings['Manage User Training'] ='���������� ��������� �������������';
$strings['Manage Reservations'] ='���������� ��������';
$strings['Email Users'] ='E-mail �������������';
$strings['Export Database Data'] = '��������������� ������';
$strings['Reset Password'] = '������������� ������';
$strings['System Administration'] = '��������� �����������������';
$strings['Successful update'] = '�������� ����������';
$strings['Update failed!'] = '���������� ��������!';
$strings['Manage Blackout Times'] = '���������� ��������� ����������';
$strings['Forgot Password'] = '������ ������';
$strings['Manage My Email Contacts'] = '���������� ����� E-mail ����������';
$strings['Choose Date'] = '����� ����';
$strings['Modify My Profile'] = '������ ����� �������';
$strings['Register'] = '�����������';
$strings['Processing Blackout'] = '������������ ����������';
$strings['Processing Reservation'] = '������������ �����������';
$strings['Online Scheduler [Read-only Mode]'] = '���������� ��-���� [����� ������ ��� ������]';
$strings['Online Scheduler'] = '���������� ��-����';
$strings['phpScheduleIt Statistics'] = '���������� ������� phpScheduleIt';
$strings['User Info'] = '���������������� ����������:';

$strings['Could not determine tool'] = '�������� �� ����������. ����������, ��������� � ���� ������ ���������� � ���������� ��� ��� �����.';
$strings['This is only accessable to the administrator'] = '��� �������� ������ ��������������';
$strings['Back to My Control Panel'] = '��������� �� ��� ������ ����������';
$strings['That schedule is not available.'] = '��� ���������� ����������.';
$strings['You did not select any schedules to delete.'] = '�� �� ������� ���������� ��� ��������.';
$strings['You did not select any members to delete.'] = '�� �� ������� ������ ��� ��������.';
$strings['You did not select any resources to delete.'] = '�� �� ������� �������� ��� ��������.';
$strings['Schedule title is required.'] = '��������� ���������� ����������.';
$strings['Invalid start/end times'] = '������������ ����� ������/���������';
$strings['View days is required'] = '�������� ���� ����������';
$strings['Day offset is required'] = '������� �������� ����������';
$strings['Admin email is required'] = '���������������� e-mail ����������';
$strings['Resource name is required.'] = '��� ������� �����������.';
$strings['Valid schedule must be selected'] = '���������� ���������� ������ ���� �������';
$strings['Minimum reservation length must be less than or equal to maximum reservation length.'] = '����������� ����� ������ ������ ���� �� ������ ������������ ��� �����.';
$strings['Your request was processed successfully.'] = '��� ������ ������� ���������.';
$strings['Go back to system administration'] = '������� � ���������� �����������������';
$strings['Or wait to be automatically redirected there.'] = '��� ��������� ��������������� ����������� ����.';
$strings['There were problems processing your request.'] = '������� �������� ��� ��������� ������ �������.';
$strings['Please go back and correct any errors.'] = '����������, ��������� � ��������� ������.';
$strings['Login to view details and place reservations'] = '�������������, ����� ���������� ������ � ����� �������';
$strings['Memberid is not available.'] = '��� �����: %s �� ��������.';

$strings['Schedule Title'] = '��������� ����������';
$strings['Start Time'] = '����� ������';
$strings['End Time'] = '����� ���������';
$strings['Time Span'] = '���������� �������';
$strings['Weekday Start'] = '������������ ������';
$strings['Admin Email'] = 'E-mail ��������������';

$strings['Default'] = '�� ���������';
$strings['Reset'] = '�������������';
$strings['Edit'] = '������';
$strings['Delete'] = '��������';
$strings['Cancel'] = '�����';
$strings['View'] = '��������';
$strings['Modify'] = '������';
$strings['Save'] = '����������';
$strings['Back'] = '�����';
$strings['Next'] = '����.';
$strings['Close Window'] = '������� ����';
$strings['Search'] = '�����';
$strings['Clear'] = '�������';

$strings['Days to Show'] = '��� ������';
$strings['Reservation Offset'] = '�������� ������';
$strings['Hidden'] = '������';
$strings['Show Summary'] = '����� �����';
$strings['Add Schedule'] = '�������� ����������';
$strings['Edit Schedule'] = '������� ����������';
$strings['No'] = '���';
$strings['Yes'] = '��';
$strings['Name'] = '������������';
$strings['First Name'] = '���';
$strings['Last Name'] = '�������';
$strings['Resource Name'] = '������������ �������';
$strings['Email'] = 'E-mail';
$strings['Institution'] = '��������';
$strings['Phone'] = '�������';
$strings['Password'] = '������';
$strings['Permissions'] = '����������';
$strings['View information about'] = '�������� ���������� � %s %s';
$strings['Send email to'] = '������� e-mail ��� %s %s';
$strings['Reset password for'] = '�������������� ������ ��� %s %s';
$strings['Edit permissions for'] = '������� ���������� ��� %s %s';
$strings['Position'] = '��������������';
$strings['Password (6 char min)'] = '������ (%s �������� ����������)';	// @since 1.1.0
$strings['Re-Enter Password'] = '������ ��� ���';

$strings['Sort by descending last name'] = '����������� �� �������� �������';
$strings['Sort by descending email address'] = '����������� �� �������� ������� e-mail';
$strings['Sort by descending institution'] = '����������� �� �������� ����������';
$strings['Sort by ascending last name'] = '����������� �� ����������� �������';
$strings['Sort by ascending email address'] = '����������� �� ����������� ������� e-mail';
$strings['Sort by ascending institution'] = '����������� �� ����������� ����������';
$strings['Sort by descending resource name'] = '����������� �� �������� �������� ��������';
$strings['Sort by descending location'] = '����������� �� �������� ��������������';
$strings['Sort by descending schedule title'] = '����������� �� �������� ���������� ����������';
$strings['Sort by ascending resource name'] = '����������� �� ����������� �������� ��������';
$strings['Sort by ascending location'] = '����������� �� ����������� ��������������';
$strings['Sort by ascending schedule title'] = '���������� �� ����������� ���������� ����������';
$strings['Sort by descending date'] = '����������� �� �������� ���';
$strings['Sort by descending user name'] = '����������� �� �������� ���� �������������';
$strings['Sort by descending start time'] = '����������� �� �������� ������� ������';
$strings['Sort by descending end time'] = '����������� �� �������� ������� ���������';
$strings['Sort by ascending date'] = '����������� �� ����������� ���';
$strings['Sort by ascending user name'] = '����������� �� ����������� ���� �������������';
$strings['Sort by ascending start time'] = '����������� �� ����������� ������� ������';
$strings['Sort by ascending end time'] = '����������� �� ����������� ������� ���������';
$strings['Sort by descending created time'] = '����������� �� �������� ������� ��������';
$strings['Sort by ascending created time'] = '���������� �� ����������� ������� ��������';
$strings['Sort by descending last modified time'] = '���������� �� �������� ������� ���������� ���������';
$strings['Sort by ascending last modified time'] = '���������� �� ����������� ������� ���������� ���������';

$strings['Search Users'] = '����� �������������';
$strings['Location'] = '��������������';
$strings['Schedule'] = '����������';
$strings['Phone'] = '�������';
$strings['Notes'] = '�������';
$strings['Status'] = '������';
$strings['All Schedules'] = '��� ����������';
$strings['All Resources'] = '��� �������';
$strings['All Users'] = '��� ������������';

$strings['Edit data for'] = '������ ������ ��� %s';
$strings['Active'] = '�������������';
$strings['Inactive'] = '��-�������������';
$strings['Toggle this resource active/inactive'] = '����������� ���� ������ �����������/��-�����������';
$strings['Minimum Reservation Time'] = '����������� ����� ������';
$strings['Maximum Reservation Time'] = '������������ ����� ������';
$strings['Auto-assign permission'] = '��������� ��������������';
$strings['Add Resource'] = '�������� ������';
$strings['Edit Resource'] = '������� ������';
$strings['Allowed'] = '���������';
$strings['Notify user'] = '��������� ������������';
$strings['User Reservations'] = '������ ������������';
$strings['Date'] = '����';
$strings['User'] = '������������';
$strings['Email Users'] = 'E-mail �������������';
$strings['Subject'] = '����';
$strings['Message'] = '���������';
$strings['Please select users'] = '����������, �������� �������������';
$strings['Send Email'] = '������� E-mail';
$strings['problem sending email'] = '��������, �������� �������� � �������� ������ e-mail. ����������, ���������� ��� ��� �����.';
$strings['The email sent successfully.'] = '������ e-mail ������� �������.';
$strings['do not refresh page'] = '���������� <u>��</u> ���������� ��� ��������. ��� �������� � ��������� �������� ������.';
$strings['Return to email management'] = '������� � ���������� e-mail';
$strings['Please select which tables and fields to export'] = '����������, �������� ����� ������� � ���� ����� ����������������:';
$strings['all fields'] = '- ��� ���� -';
$strings['HTML'] = 'HTML';
$strings['Plain text'] = '������� �����';
$strings['XML'] = 'XML';
$strings['CSV'] = 'CSV';
$strings['Export Data'] = '������ ��������';
$strings['Reset Password for'] = '�������������� ������ ��� %s';
$strings['Please edit your profile'] = '����������, ������������� ��� �������';
$strings['Please register'] = '����������, �����������������';
$strings['Keep me logged in'] = '��������� ��� ����������� <br/>(������� ����)';
$strings['Edit Profile'] = '������ �������';
$strings['Register'] = '�����������';
$strings['Please Log In'] = '����������, �������������';
$strings['Email address'] = '����� e-mail';
$strings['Password'] = '������';
$strings['First time user'] = '���������� ������������?';
$strings['Click here to register'] = '������ ����� ��� �����������';
$strings['Register for phpScheduleIt'] = '����������� ��� ������� phpScheduleIt';
$strings['Log In'] = '�����������';
$strings['View Schedule'] = '�������� ����������';
$strings['View a read-only version of the schedule'] = '�������� ������ ������� ���������� ������-���-������';
$strings['I Forgot My Password'] = '� ����� ��� ������';
$strings['Retreive lost password'] = '�������������� ���������� ������';
$strings['Get online help'] = '�������� ������ ��-����';
$strings['Language'] = '����';
$strings['(Default)'] = '(��-���������)';

$strings['My Announcements'] = '��� �����������';
$strings['My Reservations'] = '��� ������';
$strings['My Permissions'] = '��� ����������';
$strings['My Quick Links'] = '��� ������� ������';
$strings['Announcements as of'] = '����������� �� %s';
$strings['There are no announcements.'] = '��� �����������.';
$strings['Resource'] = '������';
$strings['Created'] = '�������';
$strings['Last Modified'] = '��������� �����������';
$strings['View this reservation'] = '�������� ���� �����';
$strings['Modify this reservation'] = '������� ���� �����';
$strings['Delete this reservation'] = '������� ���� �����';
$strings['Bookings'] = 'Bookings';											// @since 1.2.0
$strings['Change My Profile Information/Password'] = 'Change Profile';		// @since 1.2.0
$strings['Manage My Email Preferences'] = 'Email Preferences';				// @since 1.2.0
$strings['Mass Email Users'] = '����� ������������� E-mail';
$strings['Search Scheduled Resource Usage'] = 'Search Reservations';		// @since 1.2.0
$strings['Export Database Content'] = '������� �������� ��';
$strings['View System Stats'] = '�������� ���������� �������';
$strings['Email Administrator'] = 'E-mail ��������������';

$strings['Email me when'] = 'E-mail ���, �����:';
$strings['I place a reservation'] = '� ������� �����';
$strings['My reservation is modified'] = '��� ����� �������������';
$strings['My reservation is deleted'] = '��� ����� ������';
$strings['I prefer'] = '� �����������:';
$strings['Your email preferences were successfully saved'] = '���� ��������� e-mail ������� ����������!';
$strings['Return to My Control Panel'] = '��������� � ���� ������ ����������';

$strings['Please select the starting and ending times'] = '����������, �������� ����� ������ � ���������:';
$strings['Please change the starting and ending times'] = '����������, �������� ����� ������ � ���������:';
$strings['Reserved time'] = '����������������� �����:';
$strings['Minimum Reservation Length'] = '����������� ����� ������:';
$strings['Maximum Reservation Length'] = '������������ ����� ������:';
$strings['Reserved for'] = '��������������� ���:';
$strings['Will be reserved for'] = '����� ��������������� ���:';
$strings['N/A'] = '�/�';
$strings['Update all recurring records in group'] = '�������� ��� ������������� ������ � ������?';
$strings['Delete?'] = '�������?';
$strings['Never'] = '-- ������� --';
$strings['Days'] = '���';
$strings['Weeks'] = '������';
$strings['Months (date)'] = '������ (����)';
$strings['Months (day)'] = '������ (����)';
$strings['First Days'] = '������ ���';
$strings['Second Days'] = '������ ���';
$strings['Third Days'] = '������ ���';
$strings['Fourth Days'] = '��������� ���';
$strings['Last Days'] = '��������� ���';
$strings['Repeat every'] = '��������� ������:';
$strings['Repeat on'] = '��������� �:';
$strings['Repeat until date'] = '��������� �� ����:';
$strings['Choose Date'] = '�������� ����';
$strings['Summary'] = '����';

$strings['View schedule'] = '�������� ����������:';
$strings['My Reservations'] = '��� ������';
$strings['My Past Reservations'] = '��� ��������� ������';
$strings['Other Reservations'] = '������ ������';
$strings['Other Past Reservations'] = '������ ��������� ������';
$strings['Blacked Out Time'] = '������� ����������';
$strings['Set blackout times'] = '���������� ������� ���������� ��� %s � %s'; 
$strings['Reserve on'] = '��������������� %s � %s';
$strings['Prev Week'] = '&laquo; ����. ������';
$strings['Jump 1 week back'] = '��������� �� 1 ������ �����';
$strings['Prev days'] = '&#8249; ����. %d ����';
$strings['Previous days'] = '&#8249; ����. %d ����';
$strings['This Week'] = '��� ������';
$strings['Jump to this week'] = '������������ �� ��� ������';
$strings['Next days'] = '����. %d ���� &#8250;';
$strings['Next Week'] = '����. ������ &raquo;';
$strings['Jump To Date'] = '�������� �� ����';
$strings['View Monthly Calendar'] = '�������� ����������� ���������';
$strings['Open up a navigational calendar'] = '������� ������������� ���������';

$strings['View stats for schedule'] = '�������� ���������� ��� ����������:';
$strings['At A Glance'] = '� ������� �������';
$strings['Total Users'] = '����� �������������:';
$strings['Total Resources'] = '����� ��������:';
$strings['Total Reservations'] = '����� �������:';
$strings['Max Reservation'] = '������������ �����:';
$strings['Min Reservation'] = '����������� �����:';
$strings['Avg Reservation'] = '������� �����:';
$strings['Most Active Resource'] = '����� �������� ������:';
$strings['Most Active User'] = '����� �������� ������������:';
$strings['System Stats'] = '��������� ����������';
$strings['phpScheduleIt version'] = '������ ������� phpScheduleIt:';
$strings['Database backend'] = '���������� ���� ������:';
$strings['Database name'] = '��� ��:';
$strings['PHP version'] = '������ PHP:';
$strings['Server OS'] = '�� �������:';
$strings['Server name'] = '��� �������:';
$strings['phpScheduleIt root directory'] = '�������� ���������� ������� phpScheduleIt:';
$strings['Using permissions'] = '���������� �������������:';
$strings['Using logging'] = '���������������� �����������:';
$strings['Log file'] = 'Log-����:';
$strings['Admin email address'] = '����� e-mail ��������������:';
$strings['Tech email address'] = '����������� e-mail:';
$strings['CC email addresses'] = 'CC e-mail:';
$strings['Reservation start time'] = '����� ������ �������:';
$strings['Reservation end time'] = '����� ��������� �������:';
$strings['Days shown at a time'] = '����, ������������ �� �������:';
$strings['Reservations'] = '������';
$strings['Return to top'] = '��������� ������';
$strings['for'] = '���';

$strings['Select Search Criteria'] = '����� �������� ������';
$strings['Schedules'] = '����������:';
$strings['All Schedules'] = '��� ����������';
$strings['Hold CTRL to select multiple'] = '������� CTRL ��� ������������';
$strings['Users'] = '������������:';
$strings['All Users'] = '��� ������������';
$strings['Resources'] = '�������';
$strings['All Resources'] = '��� �������';
$strings['Starting Date'] = '���� ������:';
$strings['Ending Date'] = '���� ���������:';
$strings['Starting Time'] = '����� ������:';
$strings['Ending Time'] = '����� ���������:';
$strings['Output Type'] = '��� ������:';
$strings['Manage'] = '����������';
$strings['Total Time'] = '����� �����';
$strings['Total hours'] = '���� �����:';
$strings['% of total resource time'] = '% �� ������ ������� �������';
$strings['View these results as'] = '�������� ��� ���������� ���:';
$strings['Edit this reservation'] = '������ ������� ������';
$strings['Search Results'] = '����� �����������';
$strings['Search Resource Usage'] = '����� ������������� ��������';
$strings['Search Results found'] = '���������� ������: %d ������� ������';
$strings['Try a different search'] = '���������� �������� ���';
$strings['Search Run On'] = '����� ������� ���:';
$strings['Member ID'] = '��� �����';
$strings['Previous User'] = '&laquo; ����. ������������';
$strings['Next User'] = '����. ������������ &raquo;';

$strings['No results'] = '��� �����������';
$strings['That record could not be found.'] = '����� ������ �� �������.';
$strings['This blackout is not recurring.'] = '����� ���������� �� �����������.';
$strings['This reservation is not recurring.'] = '����� ����� �� �����������.';
$strings['There are no records in the table.'] = '��� ������� � %s �������.';
$strings['You do not have any reservations scheduled.'] = '� ��� �� ��������� ������� �������.';
$strings['You do not have permission to use any resources.'] = '� ��� ��� ���� �� ������������ ��������.';
$strings['No resources in the database.'] = '��� �������� � ��.';
$strings['There was an error executing your query'] = '������ ��� ������� ������ �������:';

$strings['That cookie seems to be invalid'] = '��� ���� �������� �������������';
$strings['We could not find that logon in our database.'] = '�� �� ����� ������ ������ � ��.';	// @since 1.1.0
$strings['That password did not match the one in our database.'] = '���� ������ �� ������������� �� ������ ������������ � ����� ��.';
$strings['You can try'] = '<br />�� ������ �����������:<br />���������������� ����� e-mail.<br />���:<br />����������� �������������� ��� ���.';
$strings['A new user has been added'] = '����� ������������ ��������';
$strings['You have successfully registered'] = '�� ������� ������������������!';
$strings['Continue'] = '�����������...';
$strings['Your profile has been successfully updated!'] = '��� ������� ������� ��������!';
$strings['Please return to My Control Panel'] = '���������� ��������� � ����� ������ ����������';
$strings['Valid email address is required.'] = '- ��������� ����� e-mail ����������.';
$strings['First name is required.'] = '- ��� �����������.';
$strings['Last name is required.'] = '- ������� �����������.';
$strings['Phone number is required.'] = '- ����� �������� ����������.';
$strings['That email is taken already.'] = '- ����� e-mail ��� ������������.<br />����������, ���������� ��� ��� � ������ ������� e-mail.';
$strings['Min 6 character password is required.'] = '- ������� %s �������� � ������ �����������.';
$strings['Passwords do not match.'] = '- ������ �� �������������.';

$strings['Per page'] = '�� ��������:';
$strings['Page'] = '��������:';

$strings['Your reservation was successfully created'] = '��� ����� ������� ������';
$strings['Your reservation was successfully modified'] = '��� ����� ������� �������������';
$strings['Your reservation was successfully deleted'] = '��� ����� ������� ������';
$strings['Your blackout was successfully created'] = '���� ���������� ������� �������';
$strings['Your blackout was successfully modified'] = '���� ���������� ������� ��������������';
$strings['Your blackout was successfully deleted'] = '���� ���������� ������� �������';
$strings['for the follwing dates'] = '��� ��������� ���:';
$strings['Start time must be less than end time'] = '����� ������ ������ ���� ������ ������� ���������.';
$strings['Current start time is'] = '������� ����� ������:';
$strings['Current end time is'] = '������� ����� ���������:';
$strings['Reservation length does not fall within this resource\'s allowed length.'] = '����� ������ �� �������� � ������� ��������� ����� ��� ����� �������.';
$strings['Your reservation is'] = '��� �����:';
$strings['Minimum reservation length'] = '����������� ����� ������:';
$strings['Maximum reservation length'] = '������������ ����� ������:';
$strings['You do not have permission to use this resource.'] = '� ��� ��� ���� �� ������������� ����� �������.';
$strings['reserved or unavailable'] = '%s �� %s ��������������� ��� ����������.';	// @since 1.1.0
$strings['Reservation created for'] = '����� ������ ��� %s';
$strings['Reservation modified for'] = '����� ������������� ��� %s';
$strings['Reservation deleted for'] = '����� ������ ��� %s';
$strings['created'] = '�������';
$strings['modified'] = '��������������';
$strings['deleted'] = '�������';
$strings['Reservation #'] = '����� �';
$strings['Contact'] = '�������';
$strings['Reservation created'] = '����� ������';
$strings['Reservation modified'] = '����� �������������';
$strings['Reservation deleted'] = '����� ������';

$strings['Reservations by month'] = '������ ���������';
$strings['Reservations by day of the week'] = '������ �� ���� ������';
$strings['Reservations per month'] = '������ �� �����';
$strings['Reservations per user'] = '������ �� ������������';
$strings['Reservations per resource'] = '������ �� ��������';
$strings['Reservations per start time'] = '������ �� ������� ������';
$strings['Reservations per end time'] = '������ �� ������� ���������';
$strings['[All Reservations]'] = '[��� ������]';

$strings['Permissions Updated'] = '���������� ���������';
$strings['Your permissions have been updated'] = '���� %s ����� ���������';
$strings['You now do not have permission to use any resources.'] = '� ��� ��� ������ ���� ������������ �����-���� �������.';
$strings['You now have permission to use the following resources'] = '� ��� ���� ������ ����� ������������ ��������� �������:';
$strings['Please contact with any questions.'] = '����������, ��������� %s ��� ������������� ����� ��������.';
$strings['Password Reset'] = '������������� ������';

$strings['This will change your password to a new, randomly generated one.'] = '��� ������� ��� ������ �� �����, �������� ���������������.';
$strings['your new password will be set'] = '����� ����� ������ ������ e-mail � ������� "�������� ������", ��� ����� ������ ����� ���������� � ������� � ����� ������ e-maile ��� ���.';
$strings['Change Password'] = '�������� ������';
$strings['Sorry, we could not find that user in the database.'] = '��������, �� �� ����� ������ ������������ � ����� ��.';
$strings['Your New Password'] = '��� ����� %s ������';
$strings['Your new passsword has been emailed to you.'] = '�����!<br />'
    			. '��� ����� ������ ��������� ��� �� e-mail.<br />'
    			. '����������, �������� ������ � ����� �������, ����� <a href="index.php">�������������</a>'
    			. ' � ����� ������� � ������ �������� ��� ����� �� ������ &quot;�������� ��� ���������� ����������/������&quot;'
    			. ' � ����� ������ ����������.';

$strings['You are not logged in!'] = '�� �� ��������������!';

$strings['Setup'] = '���������';
$strings['Please log into your database'] = '����������, �������������� � ����� ��';
$strings['Enter database root username'] = '������� ��� ��������� ������������ ��:';
$strings['Enter database root password'] = '������� �������� ������ ��:';
$strings['Login to database'] = '���������� � ��';
$strings['Root user is not required. Any database user who has permission to create tables is acceptable.'] = '�������� ������������ <b>��</b> ����������. �������� ����� ������������, ������� ����� ����� �� �������� ������.';
$strings['This will set up all the necessary databases and tables for phpScheduleIt.'] = '��� ��������� ��� ����������� �� � ������� ��� ������� phpScheduleIt.';
$strings['It also populates any required tables.'] = '��� ����� �������� ����������� �������.';
$strings['Warning: THIS WILL ERASE ALL DATA IN PREVIOUS phpScheduleIt DATABASES!'] = '��������������: ��� ���Ш� ��� ������ ���������� ������ ������� phpScheduleIt!';
$strings['Not a valid database type in the config.php file.'] = '��� ����������� ���� �� � ����� config.php.';
$strings['Database user password is not set in the config.php file.'] = '������ ������������ �� �� ���������� � ����� config.php.';
$strings['Database name not set in the config.php file.'] = '��� �� �� ����������� � ����� config.php.';
$strings['Successfully connected as'] = '�������� ����������';
$strings['Create tables'] = '�������� ������ &gt;';
$strings['There were errors during the install.'] = '��������� ������ ��� �����������. ��������� ������� phpScheduleIt �� �� ����� ��������, ���� ������ ����������.<br/><br/>'
	. '����������, ��������� ���� ������� �� ������ <a href="http://sourceforge.net/forum/?group_id=95547">SourceForge</a>.';
$strings['You have successfully finished setting up phpScheduleIt and are ready to begin using it.'] = 'You have successfully finished setting up phpScheduleIt and are ready to begin using it.';
$strings['Thank you for using phpScheduleIt'] = '���������� ���������, ��� �� ��������� ������� \'install\' ����������.'
	. ' ��� ��������, ��� ��� ��� �������� ������ �� � ������ �������������� ����������.'
	. ' ����� �� ������� �������� ��������� ������ �������� ����� ������ ��� ������� ����� ��!'
	. '<br /><br />'
	. '������� �� ������������� ������� phpScheduleIt!';
$strings['There is no way to undo this action'] = '��� ������� �������� ��� ��������!';
$strings['Click to proceed'] = '������ ��� �����������';
$strings['Please delete this file.'] = '����������, ������� ���� ����.';
$strings['Successful update'] = '���������� ��������� �������';
$strings['Patch completed successfully'] = '���� �������� �������';

// @since 1.0.0 RC1
$strings['If no value is specified, the default password set in the config file will be used.'] = '���� �� ����� ������� ��������, �� ����� �������������� ������ �� ��������� �� ����������������� �����.';
$strings['Notify user that password has been changed?'] = '��������� ������������, ��� ������ ��� �������?';

// @since 1.1.0
$strings['This system requires that you have an email address.'] = '��� ������� �������, ����� �� ����� ����� e-mail.';
$strings['Invalid User Name/Password.'] = '������������ ��� ������������/������.';
$strings['Pending User Reservations'] = '��������� ������ ������������';
$strings['Approve'] = '��������';
$strings['Approve this reservation'] = '�������� ���� �����';
$strings['Approve Reservations'] ='�������� ������';

$strings['Announcement'] = '���������';
$strings['Number'] = '�����';
$strings['Add Announcement'] = '���������� ���������';
$strings['Edit Announcement'] = '������ ���������';
$strings['All Announcements'] = '���� ���������';
$strings['Delete Announcements'] = '�������� ���������';
$strings['Use start date/time?'] = '������������ ����/����� ������?';
$strings['Use end date/time?'] = '������������ ����/����� ���������?';
$strings['Announcement text is required.'] = '����� ��������� ����������.';
$strings['Announcement number is required.'] = '����� ��������� ����������.';

$strings['Pending Approval'] = '�������� ���������';
$strings['My reservation is approved'] = '��� ����� �������';
$strings['This reservation must be approved by the administrator.'] = '���� ����� ������ ���� ������� ���������������.';
$strings['Approval Required'] = '��������� �����������';
$strings['No reservations requiring approval'] = '��� ������� � ������������ ����������';
$strings['Your reservation was successfully approved'] = '��� ����� ������� �������';
$strings['Reservation approved for'] = '����� ������� ��� %s';
$strings['approved'] = '��������';
$strings['Reservation approved'] = '����� �������';

$strings['Valid username is required'] = '���������� ��� ������������ �����������';
$strings['That logon name is taken already.'] = '���� ����� ��� ������������.';
$strings['this will be your login'] = '(��� ����� ��� �����)';
$strings['Logon name'] = '���� �����';
$strings['Your logon name is'] = '���� ��������� ��� %s';

$strings['Start'] = '������';
$strings['End'] = '�����';
$strings['Start date must be less than or equal to end date'] = '���� ������ ������ ���� �� ������ ���� �����';
$strings['That starting date has already passed'] = '����� ����� ������ ��� ������';
$strings['Basic'] = '��������';
$strings['Participants'] = '���������';
$strings['Close'] = '�������';
$strings['Start Date'] = '���� ������';
$strings['End Date'] = '���� ���������';
$strings['Minimum'] = '�������';
$strings['Maximum'] = '��������';
$strings['Allow Multiple Day Reservations'] = '��������� ������������� ������';
$strings['Invited Users'] = '������������ ������������';
$strings['Invite Users'] = '���������� �������������';
$strings['Remove Participants'] = '������ ����������';
$strings['Reservation Invitation'] = '����������� ������';
$strings['Manage Invites'] = '���������� �������������';
$strings['No invite was selected'] = '����������� �� �������';
$strings['reservation accepted'] = '%s ������ ���� ����������� �� %s';
$strings['reservation declined'] = '%s �������� ���� ����������� �� %s';
$strings['Login to manage all of your invitiations'] = '������������� ��� ���������� ����� ������ �������������';
$strings['Reservation Participation Change'] = '��������� ���������� ������';
$strings['My Invitations'] = '��� �����������';
$strings['Accept'] = '�����������';
$strings['Decline'] = '���������';
$strings['Accept or decline this reservation'] = '����������� ��� ��������� ���� �����';
$strings['My Reservation Participation'] = '��� �������� � ������';
$strings['End Participation'] = '��������� �������';
$strings['Owner'] = '��������';
$strings['Particpating Users'] = '����������� ������������';
$strings['No advanced options available'] = '�������������� ����� ����������';
$strings['Confirm reservation participation'] = '����������� ������� ������';
$strings['Confirm'] = '�����������';
$strings['Do for all reservations in the group?'] = '������� ��� ���� ������� � ���� ������?';

$strings['My Calendar'] = '��� ���������';
$strings['View My Calendar'] = '�������� ��� ���������';
$strings['Participant'] = '��������';
$strings['Recurring'] = '�������������';
$strings['Multiple Day'] = '������������';
$strings['[today]'] = '[�������]';
$strings['Day View'] = '�������� ���';
$strings['Week View'] = '�������� ������';
$strings['Month View'] = '�������� ������';
$strings['Resource Calendar'] = '��������� ���������';
$strings['View Resource Calendar'] = 'Schedule Calendar';	// @since 1.2.0
$strings['Signup View'] = '��������� ��������';

$strings['Select User'] = '����� ������������';
$strings['Change'] = '���������';

$strings['Update'] = '����������';
$strings['phpScheduleIt Update is only available for versions 1.0.0 or later'] = '���������� ������� phpScheduleIt �������� ������ ��� ������ 1.0.0 ��� ����� �������';
$strings['phpScheduleIt is already up to date'] = 'phpScheduleIt is already up to date';
$strings['Migrating reservations'] = '�������� �������';

$strings['Admin'] = '�����������������';
$strings['Manage Announcements'] = '���������� �����������';
$strings['There are no announcements'] = '��� ���������';
// end since 1.1.0

// @since 1.2.0
$strings['Maximum Participant Capacity'] = 'Maximum Participant Capacity';
$strings['Leave blank for unlimited'] = 'Leave blank for unlimited';
$strings['Maximum of participants'] = 'This resource has a maximum capacity of %s participants';
$strings['That reservation is at full capacity.'] = 'That reservation is at full capacity.';
$strings['Allow registered users to join?'] = 'Allow registered users to join?';
$strings['Allow non-registered users to join?'] = 'Allow non-registered users to join?';
$strings['Join'] = 'Join';
$strings['My Participation Options'] = 'My Participation Options';
$strings['Join Reservation'] = 'Join Reservation';
$strings['Join All Recurring'] = 'Join All Recurring';
$strings['You are not participating on the following reservation dates because they are at full capacity.'] = 'You are not participating on the following reservation dates because they are at full capacity.';
$strings['You are already invited to this reservation. Please follow participation instructions previously sent to your email.'] = 'You are already invited to this reservation. Please follow participation instructions previously sent to your email.';
$strings['Additional Tools'] = 'Additional Tools';
$strings['Create User'] = 'Create User';
$strings['Check Availability'] = 'Check Availability';
$strings['Manage Additional Resources'] = 'Manage Additional Resources';
$strings['All Additional Resources'] = 'All Additional Resources';
$strings['Number Available'] = 'Number Available';
$strings['Unlimited'] = 'Unlimited';
$strings['Add Additional Resource'] = 'Add Additional Resource';
$strings['Edit Additional Resource'] = 'Edit Additional Resource';
$strings['Checking'] = 'Checking';
$strings['You did not select anything to delete.'] = 'You did not select anything to delete.';
$strings['Added Resources'] = 'Added Resources';
$strings['Additional resource is reserved'] = 'The additional resource %s only has %s available at a time';
$strings['All Groups'] = 'All Groups';
$strings['Group Name'] = 'Group Name';
$strings['Delete Groups'] = 'Delete Groups';
$strings['Manage Groups'] = 'Manage Groups';
$strings['None'] = 'None';
$strings['Group name is required.'] = 'Group name is required.';
$strings['Groups'] = 'Groups';
$strings['Current Groups'] = 'Current Groups';
$strings['Group Administration'] = 'Group Administration';
$strings['Reminder Subject'] = 'Reservation reminder- %s, %s %s';
$strings['Reminder'] = 'Reminder';
$strings['before reservation'] = 'before reservation';
$strings['My Participation'] = 'My Participation';
$strings['My Past Participation'] = 'My Past Participation';
$strings['Timezone'] = 'Timezone';
$strings['Export'] = 'Export';
$strings['Select reservations to export'] = 'Select reservations to export';
$strings['Export Format'] = 'Export Format';
$strings['This resource cannot be reserved less than x hours in advance'] = 'This resource cannot be reserved less than %s hours in advance';
$strings['This resource cannot be reserved more than x hours in advance'] = 'This resource cannot be reserved more than %s hours in advance';
$strings['Minimum Booking Notice'] = 'Minimum Booking Notice';
$strings['Maximum Booking Notice'] = 'Maximum Booking Notice';
$strings['hours prior to the start time'] = 'hours prior to the start time';
$strings['hours from the current time'] = 'hours from the current time';
$strings['Contains'] = 'Contains';
$strings['Begins with'] = 'Begins with';
$strings['Minimum booking notice is required.'] = 'Minimum booking notice is required.';
$strings['Maximum booking notice is required.'] = 'Maximum booking notice is required.';
$strings['Accessory Name'] = 'Accessory Name';
$strings['Accessories'] = 'Accessories';
$strings['All Accessories'] = 'All Accessories';
$strings['Added Accessories'] = 'Added Accessories';
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
				. "�� ������� ������������������ �� ��������� �����������:\r\n"
				. "����: %s\r\n"
				. "���: %s %s \r\n"
				. "�������: %s \r\n"
				. "��������: %s \r\n"
				. "��������������: %s \r\n\r\n"
				. "����������, ������������� ��� ���������� �:\r\n"
				. "%s \r\n\r\n"
				. "�� ������ ����� ������ �� ���������� ��-���� � ������� ��� ������� � ����� ������ ����������.\r\n\r\n"
				. "����������, ����������� ����� ������� �� �������� ��� ������� �� %s";

// Email message the admin gets after a new user registers
$email['register_admin'] = "�������������,\r\n\r\n"
					. "���������������� ����� ������������ �� ��������� �����������:\r\n"
					. "E-mail: %s \r\n"
					. "���: %s %s \r\n"
					. "�������: %s \r\n"
					. "��������: %s \r\n"
					. "��������������: %s \r\n\r\n";

// First part of the email that a user gets after they create/modify/delete a reservation
// 'reservation_activity_1' through 'reservation_activity_6' are all part of one email message
//  that needs to be assembled depending on different options.  Please translate all of them.
// @since 1.1.0
$email['reservation_activity_1'] = "%s,\r\n<br />"
			. "�� ������ �������� %s ����� #%s.\r\n\r\n<br/><br/>"
			. "����������, ����������� ���� ����� ������, ��� �������� � ��������������� �� ����� ��������.\r\n\r\n<br/><br/>"
			. "����� ����� %s %s � %s %s ��� %s"
			. " ������������� �� %s ����� %s.\r\n\r\n<br/><br/>";
$email['reservation_activity_2'] = "���� ����� ����� �������� � ��������� ����:\r\n<br/>";
$email['reservation_activity_3'] = "��� ������������� ������ � ���� ������ ����� %s.\r\n\r\n<br/><br/>";
$email['reservation_activity_4'] = "��������� ������ ���������� ��� ���� �������:\r\n<br/>%s\r\n\r\n<br/><br/>";
$email['reservation_activity_5'] = "���� ��� ������, ���������� ��������� � ���������������: %s"
			. " ��� �� �������� %s.\r\n\r\n<br/><br/>"
			. "�� ������ ����������� ��� �������������� ���� ���������� �� ������ � ����� �����"
			. " ����������� � %s ���:\r\n<br/>"
			. "<a href=\"%s\" target=\"_blank\">%s</a>.\r\n\r\n<br/><br/>";
$email['reservation_activity_6'] = "����������, ����������� ��� ����������� ������� � <a href=\"mailto:%s\">%s</a>.\r\n\r\n<br/><br/>";
// @since 1.1.0
$email['reservation_activity_7'] = "%s,\r\n<br />"
			. "����� #%s �������.\r\n\r\n<br/><br/>"
			. "����������, ����������� ���� ��� ������ ��� �������� � ��������������� �� ����� ��������.\r\n\r\n<br/><br/>"
			. "����� ����� %s %s � %s %s ��� %s"
			. " �������� �� %s ��� %s.\r\n\r\n<br/><br/>";

// Email that the user gets when the administrator changes their password
$email['password_reset'] = "��� %s ������ ��������������� ���������������.\r\n\r\n"
			. "��� ��������� ������:\r\n\r\n %s\r\n\r\n"
			. "����������, ����������� ���� ��������� ������ (���������� � ��������, ����� ���� ��������� � ������������) ��� ����� � %s �� %s"
			. " � ����� �� �������� ���, ��������� ������ '�������� ��� ���������� ����������/������' �� ������ ��� ������� ������.\r\n\r\n"
			. "����������, ��������� � %s � ������ ���������.";

// Email that the user gets when they change their lost password using the 'Password Reset' form
$email['new_password'] = "%s,\r\n"
            . "��� ����� ������ ��� ������ %s �����:\r\n\r\n"
            . "%s\r\n\r\n"
            . "����������, ������������� � %s "
            . "� ���� ����� ������� "
            . "(���������� � ��������, ����� ���� ��������� � ������������) "
            . "� ������ �������� ��� ����� �� ������ "
            . "�������� ��� ���������� ����������/������ "
            . "�� ����� ������ ����������.\r\n\r\n"
            . "����������, ����������� ����� ������� � %s.";

// @since 1.1.0
// Email that is sent to invite users to a reservation
$email['reservation_invite'] = "%s ���������� ��� ����������� � ��������� ������:\r\n\r\n"
		. "������: %s\r\n"
		. "���� ������: %s\r\n"
		. "����� ������: %s\r\n"
		. "���� ���������: %s\r\n"
		. "����� ���������: %s\r\n"
		. "������: %s\r\n"
		. "���� ������� (���� ������������): %s\r\n\r\n"
		. "����� ������� ��� ���������� ������� �� ��� ������ (���������� � ��������, ���� ��� �� ��������) %s\r\n"
		. "����� ��������� ��� ����������� ������� �� ��� ������ (���������� � ��������, ���� ��� �� ��������) %s\r\n"
		. "��� �������� ��������� ��� ��� ���������� ������ ������������� � �����������, ����������, ������������� � %s ��� %s";

// @since 1.1.0
// Email that is sent when a user is removed from a reservation
$email['reservation_removal'] = "�� ������ �� ���������� ������:\r\n\r\n"
		. "������: %s\r\n"
		. "���� ������: %s\r\n"
		. "����� ������: %s\r\n"
		. "���� ���������: %s\r\n"
		. "����� ���������: %s\r\n"
		. "������: %s\r\n"
		. "���� ������� (���� ������������): %s\r\n\r\n";	

// @since 1.2.0
// Email body that is sent for reminders
$email['Reminder Body'] = "Your reservation for %s from %s %s to %s %s is approaching.";
?>