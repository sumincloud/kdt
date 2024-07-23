<?
//뉴스 rss피드
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_URL, 
    // "http://www.seoulfn.com/rss/clickTop.xml");
    "https://news.sbs.co.kr/news/ReplayRssFeed.do?prog_cd=R5&plink=RSSREADER");
    $url_source = curl_exec($ch);
    curl_close($ch);

    echo $url_source; 
?>
