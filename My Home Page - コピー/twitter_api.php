


<?php



// Twitter API設定
$apiKey = 'u8qkmqL2BWsNMmX44T5UQcqCy';
$apiSecretKey = 'mknc01xrbOtac8zMOy8vSBI7j25PGhDOJN9GFhfq9Pu4XeGUsN';
$accessToken = '1740237677642039296-lIJ8qV8YrnbS4qd8ksiclbYzhcRd2N';
$accessTokenSecret = 'z6kMYCdTvKrP3zpUjx3butgA9rxGS365NpHfKZXNoQcf4';

// キーワードやハッシュタグ
$searchQuery = 'arashi';

// Twitter APIにアクセス
$apiUrl = "https://api.twitter.com/2/tweets/search/recent?query={$searchQuery}&tweet.fields=id,text,created_at&max_results=10";
$ch = curl_init($apiUrl);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Authorization: Bearer {$accessToken}",
]);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

// レスポンスをJSONから連想配列に変換
$data = json_decode($response, true);

// 最新のツイートを表示
foreach ($data['data'] as $tweet) {
    echo "{$tweet['text']} ({$tweet['created_at']})<br>";
}



?>
