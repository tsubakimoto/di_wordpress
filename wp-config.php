<?php
/**
 * The base configurations of the WordPress.
 *
 * このファイルは、MySQL、テーブル接頭辞、秘密鍵、言語、ABSPATH の設定を含みます。
 * より詳しい情報は {@link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86 
 * wp-config.php の編集} を参照してください。MySQL の設定情報はホスティング先より入手できます。
 *
 * このファイルはインストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さず、このファイルを "wp-config.php" という名前でコピーして直接編集し値を
 * 入力してもかまいません。
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - こちらの情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'dotinstall_wordpress');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'matsumura');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'matsumura');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースのキャラクターセット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '+dBP)qD?--z06S4G>z<%SOhZJ1_cF[c66RGAHAJ|v6R$VZdX0|<m}F+$SwL,Scm<');
define('SECURE_AUTH_KEY',  'V22JESD[?L_*wn4h4Z~[Of+x agsIX-4#>&=2|}9_C|rbm|t?-WK($*,,$8[u[aU');
define('LOGGED_IN_KEY',    'Iw-3YH+]Gcy3o|*Uj&uS&8N7SYeXa:0bfZqZHUJ=tLTk?!VMH(0s<}vk=1K>NVK.');
define('NONCE_KEY',        'd`:^ .yed]y.~32$oXc29@0_Di6NRAX;d`d;bni Dz!`Sl7eKOu:!siDz^!>bEy_');
define('AUTH_SALT',        'Dlxhr>;3,UeoUdSGd 0E-ewGJoxYSvA|2p3^Jo-FS+||4*H]Vuj8Wurpi{.57-t)');
define('SECURE_AUTH_SALT', 'VQ3ID2e9F5oba.GCY)z6;~gZ@0By8]dWI){/+b@$lar0K5raW|q>Vtfx6b43+,n ');
define('LOGGED_IN_SALT',   '-)gZSf>UQqHxg2C+z3j;aS]/U[94c67j@sO _=MzHWC[!0E>-<ETN:i-8VhhUGgJ');
define('NONCE_SALT',       'L|^JZz$q-vj8~eXy>pQ-E+;Y(}uSUf<K(wA21ffR$[WUsX:690H-PKmt5+|1xpPX');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * ローカル言語 - このパッケージでは初期値として 'ja' (日本語 UTF-8) が設定されています。
 *
 * WordPress のローカル言語を設定します。設定した言語に対応する MO ファイルが
 * wp-content/languages にインストールされている必要があります。例えば de_DE.mo を
 * wp-content/languages にインストールし WPLANG を 'de_DE' に設定することでドイツ語がサポートされます。
 */
define('WPLANG', 'ja');

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
