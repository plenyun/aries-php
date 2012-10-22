<div id="fb-root"></div>
<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/id_ID/all.js#xfbml=1&appId=237436179642230";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="container_12 gradient_black" style="width:100%;">
    <div class="container_12">
        <div class="grid_12" id="header">
            <h3>
                <img src="<?= IMG_DIR ?>logo-aries.png" alt="Logo"/>
            </h3>
        </div>
    </div>
</div>
<div class="container_12 gradient_orange" style="width:100%;">
    <div class="container_12">
        <div class="grid_12">
            <br />
        </div>
    </div>
</div>
<div class="container_12">
    <div class="grid_12" id="content">
        <h3 id="horay">
            <span class="hello"><?= $horay; ?>.</span><br />
            You've successfully installed AriesPHP.<br />
            Welcome to the MVC world minus the PAIN.
        </h3>
    </div>
    <div class="grid_4">
        <h3 class="title">Where to Start</h3><br />
        This page is generated by this code:<br />
        <div class="code">
            <b>Controllers</b>: controllers/c_home.php<br />
            <b>Views</b>: views/home/v_index.php
        </div>
    </div>
    <div class="grid_4">
        <h3 class="title">Where to Look</h3><br />
        <a href="#">MVC Basic.</a><br />
        <a href="#">Insert Javascript, CSS, and Image.</a>
    </div>
    <div class="grid_4">
        <h3 class="title">Where to Like</h3><br />
            <div class="fb-like-box" data-href="https://www.facebook.com/AriesFramework" data-width="292" data-show-faces="false" data-border-color="#1d1d1d" data-stream="false" data-header="false"></div>
        </div>
    </div>
</div>
<br />
<div class="container_12" id="footerContainer">
    <div class="container_12 footer">
        <div class="grid_4 footer_item">
            <h3>Contribute</h3>
            <a href="https://github.com/freeskys/aries-php" target="_blank">Fork my Github</a>
        </div>
        <div class="grid_4 footer_item">
            <h3>Developer</h3>
            <a href="https://twitter.com/freeskys">@freeskys</a> - Project Manager and Lead Developer
            <a href="https://twitter.com/androvnugros">@androvnugros</a> - Graphic Designer
        </div>
        <div class="grid_4 footer_item">
            <h3>Framework included in Aries</h3>
            <a href="http://960.gs/" target="_blank">960 Grid System</a> by Nathan Smith<br />
            <a href="http://jquery.com/" target="_blank">jQuery</a> by The jQuery Foundation<br />
            <a href="http://underscorejs.org/" target="_blank">Underscore JS</a> by DocumentCloud Inc<br />
        </div>
    </div>
</div>
<div class="container_12 gradient_orange" id="footerContainer2">
    <div class="container_12">
        <div class="grid_12 copyright">
            <br />
            Copyright &copy; 2012 Harditya Rahmat Ramadhan | Aries Micro Framework is released under MIT License.
        </div>
    </div>
</div>