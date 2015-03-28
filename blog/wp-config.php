<?php
/**
 * WordPress の基本設定
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

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'blanc-neige_wp');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'blanc-neige');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'blanc_neige');

/** MySQL のホスト名 */
define('DB_HOST', 'mysql320.db.sakura.ne.jp');

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
define('AUTH_KEY',         'W$v/@}JR@^>X:%3:pOUQUX0M/ze5e+<A|RD]!>>HNP*H;vObn@M0TJX;{l-3|ObB');
define('SECURE_AUTH_KEY',  'R6n:t^*7pxY+N=GKFs+U-1w~l4<3(9IQKKa?+i8N`$-M5@(y.4S.uy$J({?K.Rqh');
define('LOGGED_IN_KEY',    '/jY>om3~g:/DZ;$$Swl)~i8h0rA;vUU;(DWEp@~Dm<=iPT-$ca: =[hSG7_SmX3]');
define('NONCE_KEY',        '30nM@f0=P6)`<+0<%s{|mo0P/,0G~|:zd!C?SuEO6&:dEW,O=h:e]rL(KJ#dy=o!');
define('AUTH_SALT',        'Q;aFz;Cg;6_N@,@-h8nI&yQcyIIa5.#rYcuFVkD%pq:lU{<P@bco_I+GVnl9+x7D');
define('SECURE_AUTH_SALT', '+?$l=]Kj3kkwo~[)2wiK%vAs3#a!?!uT|Q>NBpHz1P2!@Ha0R>/i|} hSB+QaYaD');
define('LOGGED_IN_SALT',   'hrUOPI,5t?UV8KVM -MLpyk-^kJ)=Je|U<sC0f/Qjn8}|;=uJe{$v7[q|=y#|L9V');
define('NONCE_SALT',       ';St[W[}px-kqfAJ1m&W|cUg@{pudB^o4`u5f.q|-2?e<}1e{a$DQViqi +O>kx9c');

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
 * wp-content/languages にインストールされている必要があります。たとえば de_DE.mo を
 * wp-content/languages にインストールし WPLANG を 'de_DE' に設定すると、ドイツ語がサポートされます。
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
