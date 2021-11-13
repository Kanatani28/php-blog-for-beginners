<?php
define("ARTICLES_PATH", "./privacy/articles.csv");

/**
 * 画面遷移する
 */
function redirect($url) {
    header("Location: $url"); 
}

/**
 * 記事の一覧を返す
 * 
 * ex. 
 * [
 *   [
 *      1,
 *      "PHP Study",
 *      "Hello World!!!!!!!!"
 *   ],
 *   [
 *     2,
 *     "HTML Study", 
 *     "h1 tag Hello HTML."
 *   ]
 *   ...
 * ]
 */
function get_articles() {
    $lines = file_get_contents(ARTICLES_PATH);
    $lines = explode(PHP_EOL, $lines);
    $result = [];
    for($i = 1; $i < count($lines); $i++) {
        $line = $lines[$i];
        $article = explode(",", $line);
        $result[] = $article;
    }
    return $result;
}

/**
 * 記事を一件取得する
 * 
 * ex. 
 * [
 *    1,
 *    "PHP Study",
 *    "Hello World!!!!!!!!"
 * ]
 */
function get_article($id) {

}

/**
 * 記事を更新する
 */
function update_article($id) {

}

/**
 * 記事を作成する
 */
function create_article($id, $title, $body) {

}

/**
 * 記事を削除する
 */
function delete_article($id) {

}