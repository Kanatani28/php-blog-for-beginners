<?php
define("ARTICLES_PATH", "../privacy/articles.csv");

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
    $articles = get_articles();
    for($i = 0; $i < count($articles); $i++) {
        $article = $articles[$i];
        $article_id = $article[0];
        if($article_id == $id) {
            return $article;
        }
    }
}

/**
 * 記事を更新する
 */
function update_article($id, $title, $body) {
    $articles = get_articles();
    $data = "id,title,body";
    for($i = 0; $i < count($articles); $i++) {
        $article = $articles[$i];
        $article_id = $article[0];
        if($article_id == $id) {
            $article[1] = $title;
            $article[2] = $body;
        }
        $data = $data . PHP_EOL .  $article_id . "," . $article[1] . "," . $article[2];
    }
    file_put_contents(ARTICLES_PATH, $data);
}

/**
 * 記事を作成する
 */
function create_article($title, $body) {
    $articles = get_articles();
    $max_id = 0;
    for($i = 0; $i < count($articles); $i++) {
        $article = $articles[$i];
        $article_id = $article[0];
        if($max_id < $article_id) {
            $max_id = $article_id;
        }
    }
    $id = $max_id + 1;
    $data = PHP_EOL . "$id,$title,$body";
    file_put_contents(ARTICLES_PATH, $data, FILE_APPEND);
}

/**
 * 記事を削除する
 */
function delete_article($id) {
    $articles = get_articles();
    $data = "id,title,body";
    
    for($i = 0; $i < count($articles); $i++) {
        $article = $articles[$i];
        $article_id = $article[0];
        if($article_id != $id) {
            $title = $article[1];
            $body = $article[2];
            $data = $data . PHP_EOL .  $article_id . "," . $title . "," . $body;    
        }
    
    }
    file_put_contents(ARTICLES_PATH, $data);
}