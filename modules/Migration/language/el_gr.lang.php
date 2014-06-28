<?php
/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Public License Version 1.1.2
 * ("License"); You may not use this file except in compliance with the
 * License. You may obtain a copy of the License at http://www.sugarcrm.com/SPL
 * Software distributed under the License is distributed on an  "AS IS"  basis,
 * WITHOUT WARRANTY OF ANY KIND, either express or implied. See the License for
 * the specific language governing rights and limitations under the License.
 * The Original Code is:  SugarCRM Open Source
 * The Initial Developer of the Original Code is SugarCRM, Inc.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.;
 * All Rights Reserved.
 * Contributor(s): ______________________________________.
 ********************************************************************************/
/*********************************************************************************
GREEK TRANSLATION - LOCALISATION

 ********************************************************************************/
$mod_strings = Array(
'LBL_CRM_SETTINGS' => 'Ρυθμίσεις',
'LBL_MIGRATE_INFO'=>'Συμπληρώστε στοιχεία για την μεταφορά από <b><i> Πηγή Δεδομένων </i></b> σε <b><i> Τρέχουσα έκδοση (Τελευταία) vtigerCRM </i></b>',
'LBL_CURRENT_VT_MYSQL_EXIST'=>'Η υπάρχουσα Βάση Δεδομένων MySQL του vtiger βρίσκεται σε',
'LBL_THIS_MACHINE'=>'Αυτό τον υπολογιστή',
'LBL_DIFFERENT_MACHINE'=>'Άλλον υπολογιστή',
'LBL_CURRENT_VT_MYSQL_PATH'=>'Διαδρομή υπάρχουσας Βάσης Δεδομένων MySQL',
'LBL_SOURCE_VT_MYSQL_DUMPFILE'=>'vtiger <b>Πηγή Δεδομένων</b> Όνομα Dump',
'LBL_NOTE_TITLE'=>'Σημείωση:',
'LBL_NOTES_LIST1'=>'Εάν η υπάρχουσα βάση MySQL βρίσκεται στον ίδιο υπολογιστή τότε συμπληρώστε την πλήρη διαδρομή (Path),(ή) μπορείτε να εισάγετε το αποθηκευμένο αρχείο (Dump) που ήδη έχετε.',
'LBL_NOTES_LIST2'=>'Εάν η υπάρχουσα βάση MySQL βρίσκεται σε άλλο υπολογιστή τότε συμπληρώστε την πλήρη διαδρομή (Path) του αποθηκευμένου αρχείου (Dump).',
'LBL_NOTES_DUMP_PROCESS'=>'Για να πάρετε αντίγραφο ασφαλείας (Dump) εκτελέστε την ακόλουθη εντολή ενώ βρίσκεστε στον κατάλογο <b>mysql/bin</b> του υπολογιστή σας.
			   <br><b>mysqldump --user="το αναγνωριστικό σας για την MySQL"  --password="το συνθηματικό σας για τον MySQL" -h "Όνομα Υπολογιστή"  --port="το port του MySQL" "Όνομα Βάσης" > dump_filename</b>
			   <br>προσθέστε <b>SET FOREIGN_KEY_CHECKS = 0;</b> -- στην αρχή του Dump αρχείου.
			   <br>προσθέστε <b>SET FOREIGN_KEY_CHECKS = 1;</b> -- στο τέλος του Dump αρχείου',
'LBL_NOTES_LIST3'=>'Συμπληρώστε την διαδρομή της MySQL. Πρέπει να είναι της μορφής <b>/home/crm/vtigerCRM4_5/mysql</b>',
'LBL_NOTES_LIST4'=>'Συμπληρώστε την πλήρη διαδρομή του Dump αρχείου. Πρέπει να είναι της μορφής <b>/home/fullpath/4_2_dump.txt</b>',

'LBL_CURRENT_MYSQL_PATH_FOUND'=>'Η διαδρομή της υπάρχουσας εγκατάστασης της MySQL βρέθηκε.',
'LBL_SOURCE_HOST_NAME'=>'Όνομα υπολογιστή :',
'LBL_SOURCE_MYSQL_PORT_NO'=>'Αρ. Πόρτας MySql :',
'LBL_SOURCE_MYSQL_USER_NAME'=>'Αναγνωριστικό MySql :',
'LBL_SOURCE_MYSQL_PASSWORD'=>'Συνθηματικό MySql :',
'LBL_SOURCE_DB_NAME'=>'Όνομα Βάσης :',
'LBL_MIGRATE'=>'Μεταφορά',

//Added after 5 Beta 
'LBL_UPGRADE_VTIGER'=>'Μεταφορά Δεδομένων του Vtiger CRM',
'LBL_UPGRADE_FROM_VTIGER_423'=>'Μεταφορά Δεδομένων από Vtiger CRM 4.2.3 σε 5.0.0',
'LBL_SETTINGS'=>'Ρυθμίσεις',
'LBL_STEP'=>'Βήμα',
'LBL_SELECT_SOURCE'=>'Επιλογή πηγής δεδομένων',
'LBL_STEP1_DESC'=>'Για να ξεκινήσετε την μεταφορά, πρέπει να προσδιορίσετε τη μορφή που είναι διαθέσιμα τα υπάρχοντα δεδομένα σας',
'LBL_RADIO_BUTTON1_TEXT'=>'Έχω πρόσβαση σε υπάρχουσα εγκατάσταση του vtiger CRM',
'LBL_RADIO_BUTTON1_DESC'=>'Αυτή η επιλογή προϋποθέτει ότι έχετε τη διεύθυνση του υπολογιστή που είναι εγκατεστημένη η βάση δεδομένων και δυνατότητα πρόσβασης. Αυτή η μέθοδος λειτουργεί και σε τοπικό μηχάνημα αλλά και σε απομακρυσμένο. Κοιτάξτε στην τεκμηρίωση για βοήθεια.',
'LBL_RADIO_BUTTON2_TEXT'=>'Έχω πρόσβαση σε αποθηκευμένο αρχείο (Dump) της βάσης MySQL, του vtiger CRM',
'LBL_RADIO_BUTTON2_DESC'=>'Αυτή η επιλογή προϋποθέτει ότι έχετε αποθηκευμένο αρχείο (Dump) της βάσης MySQL, τοπικά, στο μηχάνημά που θέλετε να μεταφέρετε τα δεδομένα. Δεν μπορείτε να πάρετε αποθηκευμένο αρχείο (Dump) από άλλο υπολογιστή (remote database server). Κοιτάξτε στην τεκμηρίωση για βοήθεια.',
'LBL_RADIO_BUTTON3_TEXT'=>'Έχω μια νέα βάση με τα δεδομένα της έκδοσης 4.2.3',
'LBL_RADIO_BUTTON3_DESC'=>'Αυτή η επιλογή προϋποθέτει ότι γνωρίζετε τα στοιχεία της βάσης του vtiger CRM 4.2.3, συμπεριλαμβανομένων των: database server ID, αναγνωριστικό, και συνθηματικό. Δεν μπορείτε να πάρετε αποθηκευμένο αρχείο (Dump) από άλλο υπολογιστή (remote database server)',

'LBL_HOST_DB_ACCESS_DETAILS'=>'Στοιχεία Πρόσβασης στη Βάση Δεδομένων',
'LBL_MYSQL_HOST_NAME_IP'=>'Όνομα υπολογιστή που είναι εγκατεστημένη η MySQL 
<br>ή διεύθυνση IP : ',
'LBL_MYSQL_PORT'=>'Πόρτα MySQL : ',
'LBL_MYSQL_USER_NAME'=>'Αναγνωριστικό MySQL : ',
'LBL_MYSQL_PASSWORD'=>'Συνθηματικό MySQL : ',
'LBL_DB_NAME'=>'Όνομα Βάσης : ',

'LBL_LOCATE_DB_DUMP_FILE'=>'Εντοπισμός αποθηκευμένου αρχείου (Dump) ',
'LBL_DUMP_FILE_LOCATION'=>'Θέση αποθηκευμένου αρχείου (Dump) : ',

'LBL_RADIO_BUTTON3_PROCESS'=>'<font color="red">Παρακαλώ μην συμπληρώσετε τα στοιχεία της 4.2.3. Αυτή η επιλογή θα αντλήσει τα δεδομένα απευθείας.</font>
<br>Προτείνεται να ακολουθήσετε την παρακάτω διαδικασία.
<br>1. Πάρτε αντίγραφο ασφαλείας (dump) της παλιάς βάσης 4.2.3
<br>2. Δημιουργήστε μια νέα βάση (Προτιμότερο είναι να δημιουργήσετε τη νέα βάση στον server που βρίσκεται και η βάση του vtiger 5).
<br>3. Επαναφέρετε το αντίγραφο της 4.2.3 στην νέα βάση.
<br>Τώρα δώστε τα στοιχεία πρόσβασης της νέας βάσης. Η διαδικασία της μεταφοράς θα τροποποιήσει αυτή την βάση ώστε να ταιριάζει με το σχήμα της έκδοσης 5.
Μετά μπορείτε να ενημερώσετε το αρχείο config.inc.php με το όνομα της νέας βάσης για να την χρήσιμοποιήσετε. πχ., $dbconfig[\'όνομα βάσης\'] = \'νέο όνομα βάσης\';',

'LBL_ENTER_MYSQL_SERVER_PATH'=>'Συμπληρώστε την διαδρομή του MySQL Server',
'LBL_SERVER_PATH_DESC'=>'Διαδρομή MySQL Server πχ <b>/home/5beta/vtigerCRM5_beta/mysql/bin</b> ή <b>c:\Program Files\mysql\bin</b>',
'LBL_MYSQL_SERVER_PATH'=>'Διαδρομή MySQL Server : ',
'LBL_MIGRATE_BUTTON'=>'Μεταφορά',
'LBL_CANCEL_BUTTON'=>'Ακύρωση',
'LBL_UPGRADE_FROM_VTIGER_5X'=>'Αναβάθμιση της βάσης από vtiger CRM 5.x σε επόμενη έκδοση',
'LBL_PATCH_OR_MIGRATION'=>'πρέπει να ορίσετε την έκδοση της πηγαίας Βάσης (αναβάθμιση ή μεταφορά)',
//Added for java script alerts
'ENTER_SOURCE_HOST' => 'Παρακαλώ εισάγετε το host name του Διακομιστή Προέλευσης',
'ENTER_SOURCE_MYSQL_PORT' => 'Παρακαλώ εισάγετε τον αριθμό θύρας της MySQL προέλευσης',
'ENTER_SOURCE_MYSQL_USER' => 'Παρακαλώ εισάγετε το όνομα χρήστη της MySQL προέλευσης',
'ENTER_SOURCE_DATABASE' => 'Παρακαλώ εισάγετε το όνομα της πηγαίας Βάσης',
'ENTER_SOURCE_MYSQL_DUMP' => 'Παρακαλώ εισάγετε το όνομα του έγκυρου πηγαίου αρχείου δεδομένων εισαγωγής (MYSQL DUMP)',
'ENTER_HOST' => 'Παρακαλώ εισάγετε το όνομα του διακομιστή',
'ENTER_MYSQL_PORT' => 'Παρακαλώ εισάγετε τον αριθμό θύρας της MySQL',
'ENTER_MYSQL_USER' => 'Παρακαλώ εισάγετε το όνομα χρήστη της MySQL',
'ENTER_DATABASE' => 'Παρακαλώ εισάγετε το όνομα της Βάσης',
'SELECT_ANYONE_OPTION' => 'Παρακαλώ επιλέξτε οποιαδήποτε επιλογή',
'ENTER_CORRECT_MYSQL_PATH' => 'Παρακαλώ εισάγετε την σωστή διαδρομή αρχείων της MySQL',

);

?>
