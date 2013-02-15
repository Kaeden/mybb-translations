<?php
/**
 * MyBB 1.6 Romanian Language Pack
 * Copyright 2011 Kaeden, All Rights Reserved
 * 
 * $Id: tools_system_health.lang.php 5497 2011-12-29 Kaeden $
 */

$l['system_health'] = "Integritate Sistem";
$l['system_health_desc'] = "Aici poți vizualiza detaliile stării sistemului tău.";
$l['utf8_conversion'] = "Conversie UTF-8";
$l['utf8_conversion_desc'] = "Momentan convertești un tabel al bazei de date la formatul UTF-8. Acest proces poate dura până la câteva ore, în funcție de dimensiunile forumului și ale tabelei selectate. La încheierea procesului, vei fi redirecționat la pagina principală a convertorului UTF-8.";
$l['utf8_conversion_desc2'] = "Această unealtă verifică tabelele bazei de date pentru a se asigura că respectă formatul UTF-8 și îți permite să corectezi tabelele care nu se încadrează.";

$l['convert_all'] = "Convertește Toate Tabelele";
$l['converting_to_utf8'] = "MyBB convertește momentan tabela \"{1}\" la formatul UTF-8 de la formatul {2}.";
$l['convert_to_utf8'] = "Ești pe cale să convertești tabela \"{1}\" la formatul UTF-8 de la formatul {2}.";
$l['convert_all_to_utf'] = "Ești pe cale să convertești TOATE tabelele la formatul UTF-8 de la formatul {1}.";
$l['please_wait'] = "Te rugăm să aștepți...";
$l['converting_table'] = "Convertire Tabelă:";
$l['convert_table'] = "Convertește Tabelă";
$l['convert_tables'] = "Convertește Toate Tabelele";
$l['convert_database_table'] = "Convertește Tabelă Bază Date";
$l['convert_database_tables'] = "Convertește Toate Tabelele Bazei De Date";
$l['table'] = "Tabelă";
$l['status'] = "Status";
$l['convert_now'] = "Convertește Acum";
$l['totals'] = "Sumar";
$l['attachments'] = "Fișiere Atașate";
$l['total_database_size'] = "Mărime integrală Bază Date";
$l['attachment_space_used'] = "Spațiu Alocat Utilizat";
$l['total_cache_size'] = "Mărime Totală Cache";
$l['estimated_attachment_bandwidth_usage'] = "Consum Lățime Bandă Estimat ";
$l['max_upload_post_size'] = "Mărime maximă Încărcare / POST";
$l['average_attachment_size'] = "Mărime Medie Fișiere Atașate";
$l['stats'] = "Statistici";
$l['task'] = "Automatizare";
$l['run_time'] = "Programare";
$l['next_3_tasks'] = "Următoarele 3 automatizări programate";
$l['backup_time'] = "Dată";
$l['no_backups'] = "Momentan nu s-au salvat copii de siguranță.";
$l['existing_db_backups'] = "Copii De Siguranță Existente";
$l['writable'] = "Modificabil";
$l['not_writable'] = "Nemodificabil";
$l['please_chmod_777'] = "Necesită CHMOD la 777.";
$l['chmod_info'] = "Te rugăm să schimbi setările CHMOD pentru fișierele specificate dedesubt. Pentru mai multe informații despre CHMOD, verifică";
$l['file'] = "Fișier";
$l['location'] = "Locație";
$l['settings_file'] = "Fișier Setări";
$l['config_file'] = "Fișier Configurare";
$l['file_upload_dir'] = "Director Conținut Încărcat";
$l['avatar_upload_dir'] = "Director Avatare Încărcate";
$l['language_files'] = "Fișiere Limbă";
$l['backup_dir'] = "Director Copii Siguranță";
$l['cache_dir'] = "Director Cache";
$l['themes_dir'] = "Director Teme Grafice";
$l['chmod_files_and_dirs'] = "CHMOD Fișiere și Directoare";

$l['notice_process_long_time'] = "Acest proces poate dura până la câteva ore, în funcție de dimensiunile forumului și ale tabelei selectate.";

$l['check_templates'] = "Verifică Șabloane";
$l['check_templates_desc'] = "Verifică toate șabloanele instalate pentru a descoperi potențiale amenințări de securitate cunoscute.";
$l['check_templates_title'] = "Verifică Securitatea Șabloanelor";
$l['check_templates_info'] = "Acest proces va verifica șabloanele tale impotriva amenințărilor de securitate care ar putea afecta atât forumul tău, cât și serverul pe care rulează. Verificarea ar putea dura mai mult, în funcție de numărul de teme instalate.
<br /><br />Pentru a începe acest proces, apasă butonul 'Confirmă' situat inferior.";
$l['check_templates_info_desc'] = "Au fost identificate potențiale amenințări de securitate în șabloanele de mai jos. Te rugăm să le verifici conținutul.";
$l['full_edit'] = "Editare Completă";

$l['error_chmod'] = "din fișierele și directoarele necesare nu au setările CHMOD optime.";
$l['error_invalid_table'] = "Tabela specificată nu există.";
$l['error_db_encoding_not_set'] = "Copia ta MyBB nu este configurată astfel încât să permită rularea acestei unelte. Te rugăm să consulți <a href=\"http://wiki.mybb.com/index.php/UTF8_Setup\">MyBB Wiki</a> pentru mai multe detalii despre configurarea acestui utilitar.";
$l['error_not_supported'] = "Suportul actual al bazei tale de date nu este compatibil cu Unealta de Convertire la formatul UTF-8.";
$l['error_invalid_input'] = "S-a produs o eroare la verificarea șabloanelor. Te rugăm să încerci din nou sau să contactezi Grupul MyBB pentru asistență.";
$l['error_master_templates_altered'] = "Șabloanele de bază au fost alterate. Te rugăm să contactezi Grupul MyBB pentru asistență.";

$l['success_templates_checked'] = "Șabloane verificate cu succes - nicio amenințare la securitate găsită!";
$l['success_all_tables_already_converted'] = "Toate tabelele au fot deja convertite sau respectă formatul UTF-8.";
$l['success_table_converted'] = "Tabela selectată \"{1}\" a fost convertită cu succes la formatul UTF-8.";
$l['success_chmod'] = "Toate fișierele și directoarele necesare au setările CHMOD optime.";
?>