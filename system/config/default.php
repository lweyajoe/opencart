<?php
// Site
$_['site_url']             = 'macplace.heroku.app';

// Language
$_['language_code']        = 'en-gb';

// Date
$_['date_timezone']        = 'UTC';

// Database
$_['db_autostart']         = false;
$_['db_engine']            = 'mysqli'; // mysqli, pdo or pgsql
$_['db_hostname']          = '197.248.5.4';
$_['db_username']          = 'easymacb_admin';
$_['db_password']          = 'Lee@Joe2022!';
$_['db_database']          = 'easymacb_joe';
$_['db_port']              = 3306;

// Mail
$_['mail_engine']          = 'mail'; // mail or smtp
$_['mail_from']            = 'admin@datalytika.org'; // Your E-Mail
$_['mail_sender']          = 'easymacbook'; // Your name or company name
$_['mail_reply_to']        = 'admin@datalytika.org'; // Reply to E-Mail
$_['mail_smtp_hostname']   = '';
$_['mail_smtp_username']   = '';
$_['mail_smtp_password']   = '';
$_['mail_smtp_port']       = 25;
$_['mail_smtp_timeout']    = 5;
$_['mail_verp']            = false;
$_['mail_parameter']       = '';

// Cache
$_['cache_engine']         = 'file'; // apc, file, mem, memcached or redis
$_['cache_expire']         = 3600;

// Session
$_['session_autostart']    = false;
$_['session_engine']       = 'file'; // db or file
$_['session_name']         = 'OCSESSID';
$_['session_domain']       = '';
$_['session_path']         = '/';
$_['session_expire']       = 999999999;
$_['session_probability']  = 1;
$_['session_divisor']      = 5;
$_['session_samesite']     = 'Strict';

// Template
$_['template_engine']      = 'twig';
$_['template_extension']   = '.twig';

// Error
$_['error_display']        = false; // You need to change this to false on a live site.
$_['error_log']            = true;
$_['error_filename']       = 'error.log';
$_['error_page']           = 'error.html';

// Response
$_['response_header']      = ['Content-Type: text/html; charset=utf-8'];
$_['response_compression'] = 0;

// Actions
$_['action_default']       = 'common/home';
$_['action_error']         = 'error/not_found';
$_['action_pre_action']    = [];
$_['action_post_action']   = [];
$_['action_event']         = [];
