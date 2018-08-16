<?php
/**
 * Configuração geral
 */

// Caminho para a raiz
define( 'ABSPATH', dirname( __FILE__ ) );

// Caminho para a pasta de uploads
define( 'UP_ABSPATH', ABSPATH . '/views/_uploads' );

// URL da home
define( 'HOME_URI', 'http://fandradetecinfo-001-site1.itempurl.com/crud/' );

// Nome do host da base de dados
define( 'HOSTNAME', 'mysql7001.site4now.net' );

// Nome do DB
define( 'DB_NAME', 'db_a3f268_myasp' );

// Usuário do DB
define( 'DB_USER', 'a3f268_myasp' );

// Senha do DB
define( 'DB_PASSWORD', base64_decode('UnVuYmpqMSFt') );

// Charset da conexão PDO
define( 'DB_CHARSET', 'utf8' );

// Se você estiver desenvolvendo, modifique o valor para true
define( 'DEBUG', true );

/**
 * Não edite daqui em diante
 */

// Carrega o loader, que vai carregar a aplicação inteira
require_once ABSPATH . '/loader.php';
?>