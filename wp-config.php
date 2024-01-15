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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'site_alan' );

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
define( 'AUTH_KEY',         'xd !JQh3J7j4!d6{S|!n>J<dTt*`V;T!I?T;`$mcQf2iLVSCpB]3#AIp_F*xg/bv' );
define( 'SECURE_AUTH_KEY',  'v@N`kfSt*ARhq./]%6cN4)o:p@bauW]D,O4Ro[OI_|$xA{m5H[Q^P2A7Z!@,]l=!' );
define( 'LOGGED_IN_KEY',    'D,4]e&>f}!g0DTApXz%;[cS[(h<&iK7rzHPwuwurqJ9n$%McxCv(^[N]uvw|p{Q|' );
define( 'NONCE_KEY',        ' $n$;w{Zsd@&[BA~aA#@uCugEc>3N x?LXsA|J4O9YN^^S3b_mE[k}bQ8ux8~e<u' );
define( 'AUTH_SALT',        '=7@pD]i#da-;3Z$eCQI(dM.}Da=5KV4Co8yhTe`+q1(iz0/_GKgOu=elKdn {-[P' );
define( 'SECURE_AUTH_SALT', '[332 w)Uhr#1H,D:]gk` 8`Mc@U:a0lzj2KkV6hs&,Ay*3&OxV7ni>n3$3v,F2O7' );
define( 'LOGGED_IN_SALT',   '3fFlC<|z%BxT(@+}j4d/_]eqhMrRwZFN9QPz*+Omh0&,Z<ubQ#pHk]BS31N{.Daa' );
define( 'NONCE_SALT',       'K]]`2PD@+@M_ahSD@<x`s=%Wnl]qc&}~mWnc7D/96g@{:G8wgbKv#}:^`XyaNtXS' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
