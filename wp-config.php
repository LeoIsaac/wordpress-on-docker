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
 * @link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'wordpress');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'isaac');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'pass');

/** MySQL のホスト名 */
define('DB_HOST', 'mysql');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '4A@)3S&bvec0w-_mi%HaN+^h$]vkRj[PJ&m` 5ai~LAI+tp2Q !~Q1A/At/Gl;Hf');
define('SECURE_AUTH_KEY',  'j@,tg*D875DOj<V3v%OG6tIRl/V,-y)ld7>c)Mh64$aa&!AV1@m#Eu~,XP/rMu{C');
define('LOGGED_IN_KEY',    '_:pWsR#4 S2(>4chg7l+l57Cls5_lePQ~@*%]^e/}wT$AsqKL@*Pe5mJP)$ws|f.');
define('NONCE_KEY',        '(CQW;d?H}:cvK0d +`Q:r,H2Eitg:J@{l=l=,DDd.o5i}7.]rA`NqC&.{%3oTLDU');
define('AUTH_SALT',        'ke-f-_hc/8 ?Po.4KRuW+tI.]sF(7agn5~h%0^9 Vv~?n<}bK/+ z<KQN~<>P1Da');
define('SECURE_AUTH_SALT', '<uZBhGcR2 ZE%AF/7YF&(mYmmDIP0]G*-Qz2PI)IW*%J( ]45sA&R.hhb;]x@lx%');
define('LOGGED_IN_SALT',   '7+QZ)=hZ#*Zg?DlKd[aBHd>|xH#-kWF0%I,$cSO-BSZH}p{=8g1H.8GC1@W;Vb,M');
define('NONCE_SALT',       'QkpQ,dHKiu])wPGl@/k5zH]Ri=:@w3Z`rSp)te^S!]AY%5I58 Pj,3:ikP@pIg4O');

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
