<?php
$cfg['PmaAbsoluteUri'] = 'http://pma.garona/';
$cfg['blowfish_secret'] = 'V4xr8KijLvxxqnbvmg99YMRp9HXjobUT4zsLFid52';
// $cfg['PmaNoRelation_DisableWarning'] = TRUE;

$cfg['Servers'] = array();
$i = 0;

$i++;
$cfg['Servers'][$i]['verbose'] = 'Garona';
$cfg['Servers'][$i]['host'] = '127.0.0.1';
$cfg['Servers'][$i]['connect_type'] = 'tcp';
$cfg['Servers'][$i]['extension'] = 'mysqli';
$cfg['Servers'][$i]['auth_type'] = 'config';
$cfg['Servers'][$i]['user'] = 'user';
$cfg['Servers'][$i]['password'] = 'QzZVxdXS6FjIuCGWMcI';
$cfg['Servers'][$i]['hide_db'] = 'information_schema|mysql';

$cfg['MaxRows'] = 50;
$cfg['Order'] = 'DESC';
$cfg['SQLQuery']['ShowAsPHP'] = FALSE;

/*
CREATE USER 'user'@'192.168.189.78' IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON *.* TO 'user'@'192.168.189.78' IDENTIFIED BY 'password' WITH GRANT OPTION MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;

 pma_bookmark
 pma_column_info
 pma_designer_coords
 pma_history
 pma_pdf_pages
 pma_relation
 pma_table_coords
 pma_table_info
 pma_tracking
*/

#$cfg['Servers'][$i]['controluser'] = 'root';
#$cfg['Servers'][$i]['controlpass'] = 'password';

$cfg['LeftDisplayLogo'] = false;
$cfg['ShowPhpInfo'] = true;
$cfg['LeftFrameDBTree'] = false;

/*
$cfg['PmaAbsoluteUri'] = '';
$cfg['SuhosinDisableWarning'] = false;
$cfg['McryptDisableWarning'] = false;
$cfg['AllowThirdPartyFraming'] = false;
$cfg['blowfish_secret'] = '';
$i = 1;
$cfg['Servers'][$i]['host'] = 'localhost';
$cfg['Servers'][$i]['port'] = '';
$cfg['Servers'][$i]['socket'] = '';
$cfg['Servers'][$i]['ssl'] = false;
$cfg['Servers'][$i]['connect_type'] = 'tcp';
$cfg['Servers'][$i]['extension'] = 'mysql';
$cfg['Servers'][$i]['bs_garbage_threshold'] = '';
$cfg['Servers'][$i]['bs_repository_threshold'] = '';
$cfg['Servers'][$i]['bs_temp_blob_timeout'] = '';
$cfg['Servers'][$i]['bs_temp_log_threshold'] = '';
$cfg['Servers'][$i]['compress'] = false;
$cfg['Servers'][$i]['controluser'] = '';
$cfg['Servers'][$i]['controlpass'] = '';
$cfg['Servers'][$i]['auth_type'] = 'cookie';
$cfg['Servers'][$i]['auth_swekey_config'] = '';
$cfg['Servers'][$i]['user'] = 'root';
$cfg['Servers'][$i]['password'] = '';
$cfg['Servers'][$i]['SignonSession'] = '';
$cfg['Servers'][$i]['SignonURL'] = '';
$cfg['Servers'][$i]['LogoutURL'] = '';
$cfg['Servers'][$i]['nopassword'] = false;
$cfg['Servers'][$i]['only_db'] = '';
$cfg['Servers'][$i]['hide_db'] = '';
$cfg['Servers'][$i]['verbose'] = '';
$cfg['Servers'][$i]['pmadb'] = '';
$cfg['Servers'][$i]['bookmarktable'] = '';
$cfg['Servers'][$i]['relation'] = '';
$cfg['Servers'][$i]['table_info'] = '';
$cfg['Servers'][$i]['table_coords'] = '';
$cfg['Servers'][$i]['pdf_pages'] = '';
$cfg['Servers'][$i]['column_info'] = '';
$cfg['Servers'][$i]['history'] = '';
$cfg['Servers'][$i]['verbose_check'] = true;
$cfg['Servers'][$i]['AllowRoot'] = true;
$cfg['Servers'][$i]['AllowNoPassword'] = false;
$cfg['Servers'][$i]['AllowDeny']['order'] = '';
$cfg['Servers'][$i]['AllowDeny']['rules'] = array();
$cfg['Servers'][$i]['DisableIS'] = true;
$cfg['Servers'][$i]['ShowDatabasesCommand'] = 'SHOW DATABASES';
$cfg['Servers'][$i]['CountTables'] = true;
$cfg['Servers'][$i]['tracking_version_auto_create'] = false;
$cfg['Servers'][$i]['tracking_default_statements'] = 'CREATE TABLE,ALTER TABLE,DROP TABLE,RENAME TABLE,' . 'CREATE INDEX,DROP INDEX,' . 'INSERT,UPDATE,DELETE,TRUNCATE,REPLACE,' . 'CREATE VIEW,ALTER VIEW,DROP VIEW,' . 'CREATE DATABASE,ALTER DATABASE,DROP DATABASE';
$cfg['Servers'][$i]['tracking_add_drop_view'] = true;
$cfg['Servers'][$i]['tracking_add_drop_table'] = true;
$cfg['Servers'][$i]['tracking_add_drop_database'] = true;
$cfg['Servers'][$i]['tracking_version_drop_database'] = true;
$cfg['ServerDefault'] = 1;
$cfg['MaxDbList'] = 100;
$cfg['MaxTableList'] = 250;
$cfg['MaxCharactersInDisplayedSQL'] = 1000;
$cfg['OBGzip'] = 'auto';
$cfg['PersistentConnections'] = false;
$cfg['ForceSSL'] = false;
$cfg['ExecTimeLimit'] = 300;
$cfg['MemoryLimit'] = '0';
$cfg['SkipLockedTables'] = false;
$cfg['ShowSQL'] = true;
$cfg['AllowUserDropDatabase'] = false;
$cfg['Confirm'] = true;
$cfg['LoginCookieRecall'] = true;
$cfg['LoginCookieValidity'] = 1440;
$cfg['LoginCookieStore'] = 0;
$cfg['LoginCookieDeleteAll'] = true;
$cfg['UseDbSearch'] = true;
$cfg['IgnoreMultiSubmitErrors'] = false;
$cfg['VerboseMultiSubmit'] = true;
$cfg['AllowArbitraryServer'] = false;
$cfg['Error_Handler'] = array();
$cfg['Error_Handler']['display'] = false;
$cfg['Error_Handler']['gather'] = false;
$cfg['LeftFrameLight'] = true;
$cfg['LeftFrameDBSeparator'] = '_';
$cfg['LeftFrameTableSeparator']= '__';
$cfg['LeftFrameTableLevel'] = 1;
$cfg['ShowTooltip'] = true;
$cfg['ShowTooltipAliasDB'] = false;
$cfg['ShowTooltipAliasTB'] = false;
$cfg['LeftDisplayLogo'] = true;
$cfg['LeftLogoLink'] = 'main.php';
$cfg['LeftLogoLinkWindow'] = 'main';
$cfg['LeftDisplayServers'] = false;
$cfg['DisplayServersList'] = false;
$cfg['DisplayDatabasesList'] = 'auto';
$cfg['LeftDefaultTabTable'] = 'tbl_structure.php';
$cfg['ShowStats'] = true;
$cfg['ShowPhpInfo'] = false;
$cfg['ShowServerInfo'] = true;
$cfg['ShowChgPassword'] = true;
$cfg['ShowCreateDb'] = true;
$cfg['SuggestDBName'] = true;
$cfg['NavigationBarIconic'] = true;
$cfg['ShowAll'] = false;
$cfg['DisplayBinaryAsHex'] = true;
$cfg['ProtectBinary'] = 'blob';
$cfg['ShowFunctionFields'] = true;
$cfg['CharEditing'] = 'input';
$cfg['InsertRows'] = 2;
$cfg['ForeignKeyDropdownOrder'] = array('content-id', 'id-content');
$cfg['ForeignKeyMaxLimit'] = 100;
$cfg['ZipDump'] = true;
$cfg['GZipDump'] = true;
$cfg['BZipDump'] = true;
$cfg['CompressOnFly'] = true;
$cfg['LightTabs'] = false;
$cfg['PropertiesIconic'] = true;
$cfg['PropertiesNumColumns'] = 1;
$cfg['DefaultTabServer'] = 'main.php';
$cfg['DefaultTabDatabase'] = 'db_structure.php';
$cfg['DefaultTabTable'] = 'sql.php';
$cfg['DefaultTabTranslationMapping'] = array( 'tbl_structure.php' => 'strStructure', 'tbl_sql.php' => 'strSQL', 'tbl_select.php' => 'strSearch', 'tbl_change.php' => 'strInsert', 'sql.php' => 'strBrowse', 'db_structure.php' => 'strStructure', 'db_sql.php' => 'strSQL', 'db_search.php' => 'strSearch', 'db_operations.php' => 'strOperations', );
$cfg['Export'] = array();
$cfg['Export']['format'] = 'sql';
$cfg['Export']['compression'] = 'none';
$cfg['Export']['asfile'] = true;
$cfg['Export']['charset'] = '';
$cfg['Export']['onserver'] = false;
$cfg['Export']['onserver_overwrite'] = false;
$cfg['Export']['remember_file_template'] = true;
$cfg['Export']['file_template_table'] = '__TABLE__';
$cfg['Export']['file_template_database'] = '__DB__';
$cfg['Export']['file_template_server'] = '__SERVER__';
$cfg['Export']['ods_columns'] = false;
$cfg['Export']['ods_null'] = 'NULL';
$cfg['Export']['odt_structure'] = true;
$cfg['Export']['odt_data'] = true;
$cfg['Export']['odt_columns'] = true;
$cfg['Export']['odt_relation'] = true;
$cfg['Export']['odt_comments'] = true;
$cfg['Export']['odt_mime'] = true;
$cfg['Export']['odt_null'] = 'NULL';
$cfg['Export']['htmlword_structure'] = true;
$cfg['Export']['htmlword_data'] = true;
$cfg['Export']['htmlword_columns'] = false;
$cfg['Export']['htmlword_null'] = 'NULL';
$cfg['Export']['texytext_structure'] = TRUE;
$cfg['Export']['texytext_data'] = TRUE;
$cfg['Export']['texytext_columns'] = FALSE;
$cfg['Export']['texytext_null'] = 'NULL';
$cfg['Export']['xls_columns'] = false;
$cfg['Export']['xls_null'] = 'NULL';
$cfg['Export']['xlsx_columns'] = false;
$cfg['Export']['xlsx_null'] = 'NULL';
$cfg['Export']['csv_columns'] = false;
$cfg['Export']['csv_null'] = 'NULL';
$cfg['Export']['csv_separator'] = ';
;
$cfg['Export']['csv_enclosed'] = '"';
$cfg['Export']['csv_escaped'] = '\\';
$cfg['Export']['csv_terminated'] = 'AUTO';
$cfg['Export']['excel_columns'] = false;
$cfg['Export']['excel_null'] = 'NULL';
$cfg['Export']['excel_edition'] = 'win';
$cfg['Export']['latex_structure'] = true;
$cfg['Export']['latex_data'] = true;
$cfg['Export']['latex_columns'] = true;
$cfg['Export']['latex_relation'] = true;
$cfg['Export']['latex_comments'] = true;
$cfg['Export']['latex_mime'] = true;
$cfg['Export']['latex_null'] = '\textit{NULL}';
$cfg['Export']['latex_caption'] = true;
$cfg['Export']['latex_structure_caption'] = 'strLatexStructure';
$cfg['Export']['latex_structure_continued_caption'] = 'strLatexStructure strLatexContinued';
$cfg['Export']['latex_data_caption'] = 'strLatexContent';
$cfg['Export']['latex_data_continued_caption'] = 'strLatexContent strLatexContinued';
$cfg['Export']['latex_data_label'] = 'tab:__TABLE__-data';
$cfg['Export']['latex_structure_label'] = 'tab:__TABLE__-structure';
$cfg['Export']['sql_structure'] = true;
$cfg['Export']['sql_data'] = true;
$cfg['Export']['sql_compatibility'] = 'NONE';
$cfg['Export']['sql_include_comments'] = true;
$cfg['Export']['sql_disable_fk'] = false;
$cfg['Export']['sql_use_transaction'] = false;
$cfg['Export']['sql_drop_database'] = false;
$cfg['Export']['sql_drop_table'] = false;
$cfg['Export']['sql_if_not_exists'] = true;
$cfg['Export']['sql_procedure_function'] = false;
$cfg['Export']['sql_auto_increment'] = true;
$cfg['Export']['sql_backquotes'] = true;
$cfg['Export']['sql_dates'] = false;
$cfg['Export']['sql_relation'] = false;
$cfg['Export']['sql_columns'] = true;
$cfg['Export']['sql_delayed'] = false;
$cfg['Export']['sql_ignore'] = false;
$cfg['Export']['sql_hex_for_blob'] = true;
$cfg['Export']['sql_type'] = 'insert';
$cfg['Export']['sql_extended'] = true;
$cfg['Export']['sql_max_query_size'] = 50000;
$cfg['Export']['sql_comments'] = false;
$cfg['Export']['sql_mime'] = false;
$cfg['Export']['sql_header_comment'] = '';
$cfg['Export']['pdf_structure'] = false;
$cfg['Export']['pdf_data'] = true;
$cfg['Export']['pdf_report_title'] = '';
$cfg['Export']['xml_export_struc'] = true;
$cfg['Export']['xml_export_functions'] = true;
$cfg['Export']['xml_export_procedures'] = true;
$cfg['Export']['xml_export_tables'] = true;
$cfg['Export']['xml_export_triggers'] = true;
$cfg['Export']['xml_export_views'] = true;
$cfg['Export']['xml_export_contents'] = true;
$cfg['Import'] = array();
$cfg['Import']['format'] = 'sql';
$cfg['Import']['charset'] = '';
$cfg['Import']['allow_interrupt'] = true;
$cfg['Import']['skip_queries'] = '0';
$cfg['Import']['sql_compatibility'] = 'NONE';
$cfg['Import']['sql_no_auto_value_on_zero'] = true;
$cfg['Import']['csv_replace'] = false;
$cfg['Import']['csv_terminated'] = ';
;
$cfg['Import']['csv_enclosed'] = '"';
$cfg['Import']['csv_escaped'] = '\\';
$cfg['Import']['csv_new_line'] = 'auto';
$cfg['Import']['csv_columns'] = '';
$cfg['Import']['csv_col_names'] = false;
$cfg['Import']['ldi_replace'] = false;
$cfg['Import']['ldi_terminated'] = ';
;
$cfg['Import']['ldi_enclosed'] = '"';
$cfg['Import']['ldi_escaped'] = '\\';
$cfg['Import']['ldi_new_line'] = 'auto';
$cfg['Import']['ldi_columns'] = '';
$cfg['Import']['ldi_local_option'] = 'auto';
$cfg['Import']['ods_col_names'] = false;
$cfg['Import']['ods_empty_rows'] = true;
$cfg['Import']['ods_recognize_percentages'] = true;
$cfg['Import']['ods_recognize_currency'] = true;
$cfg['Import']['xls_col_names'] = false;
$cfg['Import']['xls_empty_rows'] = true;
$cfg['MySQLManualBase'] = 'http://dev.mysql.com/doc/refman';
$cfg['MySQLManualType'] = 'viewable';
$cfg['PDFPageSizes'] = array('A3', 'A4', 'A5', 'letter', 'legal');
$cfg['PDFDefaultPageSize'] = 'A4';
$cfg['DefaultLang'] = 'en-utf-8';
$cfg['DefaultConnectionCollation'] = 'utf8_general_ci';
$cfg['FilterLanguages'] = '';
$cfg['DefaultCharset'] = 'utf-8';
$cfg['AllowAnywhereRecoding'] = false;
$cfg['RecodingEngine'] = 'auto';
$cfg['IconvExtraParams'] = '//TRANSLIT';
$cfg['AvailableCharsets'] = array( 'iso-8859-1', 'iso-8859-2', 'iso-8859-3', 'iso-8859-4', 'iso-8859-5', 'iso-8859-6', 'iso-8859-7', 'iso-8859-8', 'iso-8859-9', 'iso-8859-10', 'iso-8859-11', 'iso-8859-12', 'iso-8859-13', 'iso-8859-14', 'iso-8859-15', 'windows-1250', 'windows-1251', 'windows-1252', 'windows-1256', 'windows-1257', 'koi8-r', 'big5', 'gb2312', 'utf-16', 'utf-8', 'utf-7', 'x-user-defined', 'euc-jp', 'ks_c_5601-1987', 'tis-620', 'SHIFT_JIS' );
$cfg['LeftPointerEnable'] = true;
$cfg['BrowsePointerEnable'] = true;
$cfg['BrowseMarkerEnable'] = true;
$cfg['TextareaCols'] = 40;
$cfg['TextareaRows'] = 15;
$cfg['LongtextDoubleTextarea'] = true;
$cfg['TextareaAutoSelect'] = false;
$cfg['CharTextareaCols'] = 40;
$cfg['CharTextareaRows'] = 2;
$cfg['CtrlArrowsMoving'] = true;
$cfg['LimitChars'] = 50;
$cfg['ModifyDeleteAtLeft'] = true;
$cfg['ModifyDeleteAtRight'] = false;
$cfg['DefaultDisplay'] = 'horizontal';
$cfg['DefaultPropDisplay'] = 3;
$cfg['HeaderFlipType'] = 'css';
$cfg['ShowBrowseComments'] = true;
$cfg['ShowPropertyComments']= true;
$cfg['RepeatCells'] = 100;
$cfg['EditInWindow'] = true;
$cfg['QueryWindowWidth'] = 550;
$cfg['QueryWindowHeight'] = 310;
$cfg['QueryHistoryDB'] = false;
$cfg['QueryWindowDefTab'] = 'sql';
$cfg['QueryHistoryMax'] = 25;
$cfg['BrowseMIME'] = true;
$cfg['MaxExactCount'] = 20000;
$cfg['MaxExactCountViews'] = 0;
$cfg['WYSIWYG-PDF'] = true;
$cfg['NaturalOrder'] = true;
$cfg['InitialSlidersState'] = 'closed';
$cfg['TitleTable'] = '@HTTP_HOST@ / @VSERVER@ / @DATABASE@ / @TABLE@ | @PHPMYADMIN@';
$cfg['TitleDatabase'] = '@HTTP_HOST@ / @VSERVER@ / @DATABASE@ | @PHPMYADMIN@';
$cfg['TitleServer'] = '@HTTP_HOST@ / @VSERVER@ | @PHPMYADMIN@';
$cfg['TitleDefault'] = '@HTTP_HOST@ | @PHPMYADMIN@';
$cfg['ErrorIconic'] = true;
$cfg['MainPageIconic'] = true;
$cfg['ReplaceHelpImg'] = true;
$cfg['ThemePath'] = './themes';
$cfg['ThemeManager'] = true;
$cfg['ThemeDefault'] = 'original';
$cfg['ThemePerServer'] = false;
$cfg['DefaultQueryTable'] = 'SELECT * FROM %t WHERE 1';
$cfg['DefaultQueryDatabase'] = '';
$cfg['SQLQuery'] = array();
$cfg['SQLQuery']['Edit'] = true;
$cfg['SQLQuery']['Explain'] = true;
$cfg['SQLQuery']['ShowAsPHP'] = false;
$cfg['SQLQuery']['Validate'] = false;
$cfg['SQLQuery']['Refresh'] = true;
$cfg['UploadDir'] = '';
$cfg['SaveDir'] = '';
$cfg['TempDir'] = '';
$cfg['GD2Available'] = 'auto';
$cfg['TrustedProxies'] = array();
$cfg['CheckConfigurationPermissions'] = true;
$cfg['LinkLengthLimit'] = 1000;
$cfg['SQP'] = array();
$cfg['SQP']['fmtType'] = 'html';
$cfg['SQP']['fmtInd'] = '1';
$cfg['SQP']['fmtIndUnit'] = 'em';
$cfg['SQLValidator'] = array();
$cfg['SQLValidator']['use'] = false;
$cfg['SQLValidator']['username'] = '';
$cfg['SQLValidator']['password'] = '';
$cfg['DBG'] = array();
$cfg['DBG']['sql'] = false;
$cfg['DBG']['php'] = false;
$cfg['DBG']['profile']['enable'] = false;
$cfg['DBG']['profile']['threshold'] = 0.5;
*/
