<?php		
/** O nome do banco de dados*/	define('DB_NAME', 'wait-er');		
/** Usuário do banco de dados MySQL */	define('DB_USER', 'cristian081');		
/** Senha do banco de dados MySQL */	define('DB_PASSWORD', '');		
/** nome do host do MySQL */	define('DB_HOST', 'localhost');		
/** caminho absoluto para a pasta do sistema **/	if ( !defined('ABSPATH') )		define('ABSPATH', dirname(__FILE__) . '/');
/** caminho para pasta imagens **/	if ( !defined('IMGPATH') )		define('IMGPATH', dirname(__FILE__) . '/inc/img');
/** caminho para pasta uploads **/	if ( !defined('UPLOADSPATH') )		define('UPLOADSPATH', dirname(__FILE__) . '/inc/img/uploads');			
/** caminho no server para o sistema **/	if ( !defined('BASEURL') )		define('BASEURL', '/ewaiter/');			
/** caminho do arquivo de banco de dados **/	if ( !defined('DBAPI') )		define('DBAPI', ABSPATH . 'inc/database.php');
/** caminhos dos templates de header e footer **/	define('HEADER_TEMPLATE', ABSPATH . 'inc/header.php');	define('FOOTER_TEMPLATE', ABSPATH . 'inc/footer.php'); define('PAGE_TEMPLATE', ABSPATH . 'inc/page.php');
/** Linkar config com database **/ require_once DBAPI;
?>
