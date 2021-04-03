<?php


// Карусель из 3-х постов
function getFeeds_carousel($url) {

    $url = "http://news.yandex.ru/gadgets.rss";
    $content = file_get_contents($url);
    $items = new SimpleXmlElement($content);
    $today = date("j. n. Y");

//    foreach($items -> channel -> item as $item) {
//        print "<li><a href = '{$item->link}' title = '$item->title'>" .
//            $item->title . "</a> - " . $item -> description . "</li>";
//    }

    for($i = 1; $i <= 3; $i++) {
        $rand = rand(100, 990);
        echo '<!-- ARTICLE -->
			<article class="article thumb-article">
				<div class="article-img">
					<img src="./img/img-lg-'.$i.'.jpg" alt="">
				</div>
				<div class="article-body">
					<ul class="article-info">
						<li class="article-category"><a href="#">News</a></li>
						<li class="article-type"><i class="fa fa-camera"></i></li>
					</ul>
					<h2 class="article-title"><a href="#">'.$items->channel->item[$i]->title.'</a></h2>
					<ul class="article-meta">
						<li><i class="fa fa-clock-o"></i> '.$today.' </li>
						<li><i class="fa fa-comments"></i> '.$rand.' </li>
					</ul>
				</div>
			</article>
			<!-- /ARTICLE -->';

    }

}

function getFeeds_popular($url) {

    $url = "http://news.yandex.ru/gadgets.rss";
    $content = file_get_contents($url);
    $items = new SimpleXmlElement($content);
    $today = date("j. n. Y");

//    foreach($items -> channel -> item as $item) {
//        print "<li><a href = '{$item->link}' title = '$item->title'>" .
//            $item->title . "</a> - " . $item -> description . "</li>";
//    }

    $first = 16;
    $end = 19;
    for ($i = $first; $i <= $end; $i++) {
        $rand = rand(100, 990);
        echo '<article class="article row-article">
							<div class="article-img">
								<a href="#">
									<img src="img/img-md-'.$i.'.jpg" alt="">
								</a>
							</div>
							<div class="article-body">
								<ul class="article-info">
									<li class="article-category"><a href="#">News</a></li>
									<li class="article-type"><i class="fa fa-file-text"></i></li>
								</ul>
								<h3 class="article-title"><a href="#">' . $items->channel->item[$i]->title . '</a></h3>
								<ul class="article-meta">
									<li><i class="fa fa-clock-o"></i> ' . $today . '</li>
									<li><i class="fa fa-comments"></i> ' . $rand . '</li>
								</ul>
								<p>' . $items->channel->item[$i]->description . '</p>
							</div>
						</article>';
    }

}
//echo getFeeds('https://news.yandex.ru/gadgets.rss');

// Трендовые ппосты 4-шт
function getFeeds_trend($url)
{

    $url = "http://news.yandex.ru/gadgets.rss";
    $content = file_get_contents($url);
    $items = new SimpleXmlElement($content);
    $today = date("j. n. Y");

//    foreach($items -> channel -> item as $item) {
//        print "<li><a href = '{$item->link}' title = '$item->title'>" .
//            $item->title . "</a> - " . $item -> description . "</li>";
//    }
    $first = 5;
    $end = 15;

    for ($i = $first; $i <= $end; $i++) {
        $rand = rand(100, 990);
        echo '<!-- Column 1 -->
		<div class="col-md-3 col-sm-6">
			<!-- ARTICLE -->
				<article class="article">
					<div class="article-img">
							<a href="#">
								<img src="./img/img-md-' . $i . '.jpg" alt="">
							</a>
						<ul class="article-info">
							<li class="article-type"><i class="fa fa-camera"></i></li>
						</ul>
						</div>
				<div class="article-body">
				<h4 class="article-title"><a href="#">' . $items->channel->item[$i]->title . '</a></h4>
				<ul class="article-meta">
					<li><i class="fa fa-clock-o"></i> ' . $today . ' </li>
					<li><i class="fa fa-comments"></i> ' . $rand . ' </li>
				</ul>
			</div>
		</article>
			<!-- /ARTICLE -->
			</div>
		<!-- /Column 1 -->';
    }
}