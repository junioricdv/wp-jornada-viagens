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
define( 'DB_NAME', 'jornada-viagens' );

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
define( 'AUTH_KEY',         'z8]4^|8f13w^68|&.+RP>Rr.MxsviJ:N<q554$bjwr&M8ML+Y+VBS@dx0|Q](]Oa' );
define( 'SECURE_AUTH_KEY',  'o7qlgOL8%&kGE`Wq-a]rt:$&nqj13`ZIW5G4X5PE+Tzwdu$Me>F|MpL+QbL.[=JJ' );
define( 'LOGGED_IN_KEY',    '1hCZn2Y8c%@2Q|(DXt(!utP{U9(E<9?@|wObh5jqVI*=R~8uM]`.e+%bLv!V&1N0' );
define( 'NONCE_KEY',        'CM`Y/tK{VXGNT/~,lly, C=TL863Wv4uJjsZ^kkUv`E&h_caWKC X+4ckAb^hpVV' );
define( 'AUTH_SALT',        '6bfSwfIHCmv[w?0kcs5,C*7/=6qT?qD carnrtqdgBCbB86GJG4peHxUTknD+:.k' );
define( 'SECURE_AUTH_SALT', 'GyH1235Dg+U<:-na$,jvUrPO9K}e!Vp%=%yI?GxQ%1.?6m01J.Ck_Cl=TRllq$]J' );
define( 'LOGGED_IN_SALT',   'J4<Qu2k4|(`<}oq/:^KO:yDM728k:U,a8)5,s6=2x0WlHs$j5=i(]T70QL+dQiyQ' );
define( 'NONCE_SALT',       'zEM)sj@G(pdDWm^t~mgp}V#wKClLDkx~65I6Na1BoJaPX5Y};5CTVf~p0Sw5YA%g' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'jvwp_';

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
