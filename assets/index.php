<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>project</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Footer-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/styles.css">
	<link rel="stylesheet" href="assets/css/Lightbox-Gallery.css">
	<link rel="stylesheet" href="assets/css/Footer-Dark-1.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/Gallery-1.css">
    <link rel="stylesheet" href="assets/css/Gallery.css">
	<link rel="stylesheet" href="assets/css/Bold-BS4-Footer-Simple.css">
</head>
<body>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-button">
        <div class="container"><a href='index.php'><img id="logo" src="assets/img/MemeGen2.png"></a><a class="navbar-brand" href="#"></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav mr-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="Profile.php">Profile</a></li>
                    <li class="nav-item" role="presentation"></li>
                </ul><span class="navbar-text actions"> <a class="login" href="login.php">Log In</a><a class="btn btn-light action-button" role="button" href="register.php">Sign Up</a></span></div>
        </div>
    </nav>
	<div>
<h1 style="text-align: center;">Welcome to MemeGen</h1>

<p style="padding: 30px;">On this website you will be able to create a meme using our top and bottom text editors. On this page, you can select a saved image from your file directory or you can select an image from our carousel. Once you select an image, you can add text into the top and bottom text boxes. Then you can select the text size to make sure it fits the canvas. After that, double-click generate. This will create your meme and it will be available for download. Thank you for using our website and make sure you check out or Terms of Service. </p>

	</div>
    <div>
        <div class="jumbotron" style="text-align: center;">
        <p>
            <textarea id="top-text"></textarea>
            Text size: <input type="range" id="top-text-size-input" min="0.05" max="0.25" value="0.15" step="0.01">
        </p>
        <p>
            <textarea id="bottom-text"></textarea>
            Text size: <input type="range" id="bottom-text-size-input" min="0.05" max="0.25" value="0.15" step="0.01">
        </p>
        <p>
            <input type="file" id="image-input" accept="image/*" style="margin-right:72px;">
        </p>
        <p>
            <button  id="generate-btn" >Generate!</button>
        </p>
        <p>
            <canvas style=" max-height: 350px; max-width: 350px;" id="meme-canvas" title="Right click -> &quot;Save image as...&quot;">
				<div class="container" style=" max-height: 350px; max-width: 350px;">
				</div>
			</canvas>
        </p>
        <script src="memegen1.js"></script>
        </div>
    </div>
    <div>
        <div class="jumbotron" style="background-color: rgb(0,0,0);">
            <h1 class="text-center" style="color: rgb(255,255,255);">Select your meme</h1>
            <div style="background-color: #000000;">
                <div class="carousel slide text-center flex-nowrap slides CarouselDiv" data-ride="carousel" id="carousel-1">
                    <div class="carousel-inner text-center d-inline-flex" role="listbox" style="width: 100%;height: auto;max-width: 500px;max-height: 500px;">
                        <div class="carousel-item active"><img class="w-100 d-block" id="limit" src="assets/img/FrustratedRowlet.jpg" onclick="generateMeme(this, topTextInput.value, bottomTextInput.value, topTextSizeInput.value, bottomTextSizeInput.value);"></div>
                        <div class="carousel-item"><img class="w-100 d-block" src="assets/img/Interesting.jpg" onclick="generateMeme(this, topTextInput.value, bottomTextInput.value, topTextSizeInput.value, bottomTextSizeInput.value);"> </div>
                        <div class="carousel-item"><img class="w-100 d-block" id="image-input" type="file" src="assets/img/kronk.jpg" onclick="generateMeme(this, topTextInput.value, bottomTextInput.value, topTextSizeInput.value, bottomTextSizeInput.value);"></div>
                        <div class="carousel-item"><img class="w-100 d-block" src="assets/img/MexicanWordOfTheDay.jpg" onclick="generateMeme(this, topTextInput.value, bottomTextInput.value, topTextSizeInput.value, bottomTextSizeInput.value);"></div>
                        <div class="carousel-item"><img class="w-100 d-block" src="assets/img/Mocking-Spongebob.jpg" onclick="generateMeme(this, topTextInput.value, bottomTextInput.value, topTextSizeInput.value, bottomTextSizeInput.value);"></div>
                        <div class="carousel-item"><img class="w-100 d-block" src="assets/img/No-Patrick.jpg" onclick="generateMeme(this, topTextInput.value, bottomTextInput.value, topTextSizeInput.value, bottomTextSizeInput.value);"></div>
                        <div class="carousel-item"><img class="w-100 d-block" src="assets/img/OfficeSpace.jpg" onclick="generateMeme(this, topTextInput.value, bottomTextInput.value, topTextSizeInput.value, bottomTextSizeInput.value);"></div>
                        <div class="carousel-item"><img class="w-100 d-block" src="assets/img/RonaldMcDonald.jpg" onclick="generateMeme(this, topTextInput.value, bottomTextInput.value, topTextSizeInput.value, bottomTextSizeInput.value);"></div>
                        <div class="carousel-item"><img class="w-100 d-block" src="assets/img/WillyWonka.jpg" onclick="generateMeme(this, topTextInput.value, bottomTextInput.value, topTextSizeInput.value, bottomTextSizeInput.value);"></div>
                        <div class="carousel-item"><img class="w-100 d-block" src="assets/img/Y-U-No.jpg" onclick="generateMeme(this, topTextInput.value, bottomTextInput.value, topTextSizeInput.value, bottomTextSizeInput.value);"></div>
                    </div>
                    <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span class="carousel-control-prev-icon" style="background-color: #000000;"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next"
                            href="#carousel-1" role="button" data-slide="next"><span class="carousel-control-next-icon" style="background-color: #000000;"></span><span class="sr-only">Next</span></a></div>
                    <ol class="carousel-indicators" style="background-color: #000000;">
                        <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-1" data-slide-to="1"></li>
                        <li data-target="#carousel-1" data-slide-to="2"></li>
                        <li data-target="#carousel-1" data-slide-to="3"></li>
                        <li data-target="#carousel-1" data-slide-to="4"></li>
                        <li data-target="#carousel-1" data-slide-to="5"></li>
                        <li data-target="#carousel-1" data-slide-to="6"></li>
                        <li data-target="#carousel-1" data-slide-to="7"></li>
                        <li data-target="#carousel-1" data-slide-to="8"></li>
                        <li data-target="#carousel-1" data-slide-to="9"></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-basic">
        <footer>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="index.php">Home</a></li>
                <li class="list-inline-item"><a href="Terms.php">Terms</a></li>
                <li class="list-inline-item"><a href="contact.php">Contact</a></li>
            </ul>
            <p class="copyright">MemeGen © 2020</p>
        </footer>
    </div>
    </div>
	<script>
function myFunction(imgs) {
	var expandImg = document.getElementById("expandedImg");
	var imgText = document.getElementById("imgtext");
	expandImg.src = imgs.src;
	imgText.innerHTML = imgs.alt;
	expandImg.parentElement.style.display = "block";
}
</script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>