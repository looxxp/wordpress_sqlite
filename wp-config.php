<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'database_name_here');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'username_here');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'password_here');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
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
define('AUTH_KEY',         ':yM2qMx*8{$DE*Xh.W5F/HP|HB%lG_/G~c_5`2QASR:%ki}28!hE/bM33{`7c|oT');
define('SECURE_AUTH_KEY',  'SkGaDHTRts&g[g=^L-Hu^mE9r=(-1Wfji.#xh:(]PCS06HWLk=Z<[`D_]Lh;FZ{^');
define('LOGGED_IN_KEY',    'S5T%Vn#%{|e==-z,q-r2d<4UXex|A_NST NH0EI|> ~q_@?cfaE90QF7([RQg$|a');
define('NONCE_KEY',        '%1vtxY]SU5&|_<b jj+Xf-af}g4&Cy3azo<hdk3-o3LAKO|UfKE$aDP]!s3r>?%t');
define('AUTH_SALT',        'eZG/LwhJCs9<46&t+=*M2Z.A0sfUP&cNGI0cOmb:@2lRzB9BatU#1,~&64U3)<F!');
define('SECURE_AUTH_SALT', 'xOo5!cdS;-E#yo8NTw++#P@|Z6+];lEMPGinaxkg?}UcTSOHM)ErMDj_1;&3elyo');
define('LOGGED_IN_SALT',   'yg(|2wyQbaM6sy}cLmpU5yX m+K3+NK+mn.|zQ#^`oIwEKAo=*Rek|5t79r?_+a}');
define('NONCE_SALT',       'DKH?YXwYZ*:7jOMz(](tC;llUdBxG`eZnz2tu&y!p,O8-Jpd:4+lJ<;a7C|b4Bdp');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
