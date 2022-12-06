# BurgerEditor の設置方法

## Web サーバへの設置

購入もしくはダウンロードした BurgerEditor のプラグインファイルを対象サイトのプラグインフォルダに配置します。

基本的な設置場所は

```
[公開ディレクトリ]/app/Plugin
```

が対象ディレクトリとなります。

---

## 管理画面へのアクセス

baserCMS がインストールされたサイトの管理画面へブラウザを利用してアクセスします。

---

## プラグインの有効化

1. 管理画面上部のメニュー「プラグイン管理」へ移動します。
2. プラグイン一覧より BurgerEditor を有効化します。

※ 有効化方法は baserCMS 公式サイトの[プラグインのインストール](http://basercms.net/manuals/3/introductions/install_plugin)を御覧ください。

---

## エディタの設定

-   インストール時点で自動的に有効になります。
-   通常のエディタに戻したい場合などは「システム管理」>「エディタ関連設定 - エディタタイプ」を変更してください。

---

## 有効な場所について

-   固定ページ
-   ブログの記事

上記の詳細編集画面で有効になります。

---

## スタイルシートの変更方法

ダウンロードしたフォルダの `stylesheet/README.md` を御覧ください。

## 外部プラグインでブロックやタイプを追加する

外部プラグインを作成し、直下に `BurgerAddon` をいう名称でフォルダを作ると、BurgerEditor のアドオン用のディレクトリとして認識させることができます。
追加したブロックを、 `/BurgerAddon/block/category.php` に定義するとエディタで読み込むことができます。