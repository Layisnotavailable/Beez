<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'oyl *i^H]V%epI2%)2f#eapTTG4OY7y&v]r;4sC]cssj5Up%7zR<Jm}rW`qd`%!+' );
define( 'SECURE_AUTH_KEY',  'W1Nc%`g|f|ZG`rx{/(]s7@H4auu^4l:; q(Id_8gvNO5~?L~^Z?zp1RGJjA;E82z' );
define( 'LOGGED_IN_KEY',    '%s`~F&Eed_SvNrIL><AHk@NB]3rq, $jj>C~cr3lQ{)4|fUsVx7zM[,1tLN?iyj_' );
define( 'NONCE_KEY',        'E7xASrR~(z_rbHpI>j0^sfZ+Uv6Abd,[V5?~m nj@%m5kmG>g=/!Nwn.;EslB/V7' );
define( 'AUTH_SALT',        'z&h{dmt(+I].{k.dgC>k7Ya:8zc-%nszrc?ZOR@yTSE>~OLW$?;3nDj<z(f#k,eY' );
define( 'SECURE_AUTH_SALT', '-Ml^Cui!&h%~}A+c&k<<lYzTnlw!nQ5o+agwLm$D[sAz<2VN`Evv~=h$uUUD!hf+' );
define( 'LOGGED_IN_SALT',   '8w}oK@2Yv5!)RD9d%XLiY=n(<LQmV(n{hEzD>aq6biY?.ze[e&`X4S[COA|LW|zA' );
define( 'NONCE_SALT',       '#*dF6h,|3avdn:faluaO_88=/)CrKj4srSV;pg[2?CC9J:KQzXeRF(iE5lBURH}>' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
