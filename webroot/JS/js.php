<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style.css" type="text/css">
    <title>JavaScript and jQuery</title>
</head>
<style>
    li input {
        display: none;
    }
    li.edit span {
        display: none;
    }
    li.edit input {
        display: initial;
    }
</style>
<body>
<section class="java-script">
    <div class="title-block">
        <h1>This is my JavaScript file for practice !</h1>
    </div>
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/php_mysql">PHP & MySQL</a></li>
        </ul>
    </nav>

    <div class="practice-block">
        <!--		<div class="change-value">-->
        <!--			<h2>Events</h2>-->
        <!--			<hr>-->
        <!--			<p>Clik on any item in the list and change his value. <br> To change value, hit enter on click somewhere outside of the input field. :) </p>-->
        <!--			<ul id="checklist">-->
        <!--				<li>-->
        <!--					<span></span>-->
        <!--					<input type="text" value="">-->
        <!--				</li>-->
        <!--				<li>-->
        <!--					<span></span>-->
        <!--					<input type="text" value="">-->
        <!--				</li>-->
        <!--				<li>-->
        <!--					<span></span>-->
        <!--					<input type="text" value="">-->
        <!--				</li>-->
        <!--			</ul>-->
        <!--		</div>-->
        <!--		<div class="click-to--and-replace">-->
        <!--			<h1 id="our-headline">Click on item to replace this text</h1>-->
        <!--			<button id="our-button">Add new item</button>-->
        <!--			<ul id="our-list">-->
        <!--				<li>First Item</li>-->
        <!--				<li>Second Item</li>-->
        <!--				<li>Third Item</li>-->
        <!--				<li>Fourth Item</li>-->
        <!--				<li>Fifth Item</li>-->
        <!--			</ul>-->
        <!--		</div>-->
        <div class="slider" id="main-slider">
            <div class="slider-wrapper">
                <div class="slide" id="slide-1" data-image="https://placeimg.com/640/480/tech"></div>
                <div class="slide" id="slide-2" data-image="https://placeimg.com/640/480/nature"></div>
                <div class="slide" id="slide-3" data-image="https://placeimg.com/640/480/tech"></div>
                <div class="slide" id="slide-4" data-image="https://placeimg.com/640/480/tech"></div>
                <div class="slide" id="slide-5" data-image="https://placeimg.com/640/480/tech"></div>
                <div class="slide" id="slide-6" data-image="https://placeimg.com/640/480/tech"></div>
                <div class="slide" id="slide-7" data-image="https://placeimg.com/640/480/tech"></div>
                <div class="slide" id="slide-8" data-image="https://placeimg.com/640/480/tech"></div>
            </div>
            <div class="slider-nav">
                <button class="slider-previous">Previous</button>
                <button class="slider-next">Next</button>
            </div>
            <div class="slider-pagination">
                <a href="#slide-1">•</a>
                <a href="#slide-2">•</a>
                <a href="#slide-3">•</a>
                <a href="#slide-4">•</a>
                <a href="#slide-5">•</a>
                <a href="#slide-6">•</a>
                <a href="#slide-7">•</a>
                <a href="#slide-8">•</a>
            </div>
        </div>

    </div>
</section>
<script src="JS/jquery-3.3.1.min.js"></script>
<script src="JS/script.js"></script>
<script src="JS/slider.js"></script>

</body>
</html>