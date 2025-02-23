<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jqueryui.css">
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <title>@yield('title')</title>
</head>

<body>
    <div class="container">
        <div class="gfx"><span></span></div>
        <div class="top">
            <div class="navigation"> <a href="#" id="selected">home</a> <a href="#">the journey</a> <a
                    href="#">characters</a> <a href="#">image gallery</a> <a href="#">history</a>
            </div>
            <div class="pattern"><span></span></div>
            <div class="header">
                <h1>The Hobbit</h1>
                <p>Adventures of Bilbo Baggins</p>
            </div>
            <div class="pattern"><span></span></div>
        </div>
        <div class="content">
            <div class="spacer"></div>
            <div class="item">
                <div class="title">@yield('title')</div>
                <div class="metadata">Jun 13, 2006 by Vulputate</div>
                <div class="body">
                    @yield('content')
                </div>
            </div>
            <div class="spacer"></div>
            <div class="item">
                <div class="title">Porttitor posuere</div>
                <div class="metadata">Jun 13, 2006 by Vulputate</div>
                <div class="body">
                    <p>In hac habitasse platea dictumst. Duis porttitor. Sed vulputate elementum nisl. Vivamus et mi at
                        arcu mattis iaculis. Nullam posuere tristique tortor. Aenean ornare, <a href="#">nunc eget
                            pretium</a> porttitor, sem est pretium leo.</p>
                    <img class="left" src="/web-template/img/map.jpg" width="180" height="152" alt="sample image" />
                    <p>Aliquam risus justo, mollis in, laoreet a, consectetuer nec, risus. Nunc blandit sodales lacus.
                        Nam luctus semper mi. In eu diam. Aliquam risus justo, mollis in, laoreet a, consectetuer nec,
                        risus. Nunc blandit sodales lacus. Nam luctus semper mi. In eu diam. Aliquam risus justo, mollis
                        in, laoreet a, consectetuer nec, risus. Nunc blandit sodales lacus. Nam luctus semper mi. In eu
                        diam.</p>
                    <p>Fusce porta pede nec eros. Maecenas ipsum sem, interdum non, aliquam vitae, interdum nec, metus.
                        Maecenas ornare lobortis risus. Etiam placerat varius mauris. Maecenas viverra. Sed feugiat.
                        Donec mattis <a href="#">quam aliquam</a> risus. Nulla non felis sollicitudin urna blandit
                        egestas. Integer et libero varius pede tristique ultricies. Cras nisl. Proin quis massa semper
                        felis euismod ultricies. </p>
                </div>
            </div>
            <div class="divider"><span></span></div>
            <div class="item">
                <div class="title">Adipiscing</div>
                <div class="metadata">Jun 11, 2006 by Laoreet</div>
                <div class="body">
                    <p>Aliquam risus justo, mollis in, laoreet a, consectetuer nec, risus. Nunc blandit sodales lacus.
                        Nam luctus semper mi.</p>
                    <h2>Justo Elit</h2>
                    <p>In hac habitasse platea dictumst. Duis porttitor. Sed vulputate elementum nisl. Vivamus et mi at
                        arcu mattis iaculis. Nullam posuere tristique tortor. In bibendum. Aenean ornare, nunc eget
                        pretium porttitor, sem est pretium leo</p>
                    <h2>Non Euismod Nulla</h2>
                    <p>Dui non diam. Pellentesque dictum faucibus leo. Vestibulum ac ante. Sed in est. Sed sodales nisl
                        sit amet augue. Donec ultrices, augue ullamcorper posuere laoreet, turpis massa tristique justo,
                        sed egestas metus magna sed purus. Fusce eleifend, dui ut posuere auctor, justo elit posuere
                        sapien, at blandit enim quam fringilla mi.</p>
                </div>
            </div>
            <div class="divider"><span></span></div>
            <div class="item">
                <div class="title">Donec dictum</div>
                <div class="metadata">Jun 6, 2006 by Ultrices</div>
                <div class="body">
                    <p>In hac habitasse platea dictumst. Duis porttitor. Sed vulputate elementum nisl. Vivamus et mi at
                        arcu mattis iaculis. <a href="#">Nullam</a> posuere tristique tortor.</p>
                    <h1>Tristique</h1>
                    <p>In bibendum. Aenean ornare, nunc eget pretium porttitor, sem est pretium leo, non euismod nulla
                        dui non diam. Pellentesque dictum faucibus leo. Vestibulum ac ante. Sed in est.</p>
                    <ul>
                        <li>Tristique</li>
                        <li>Aenean</li>
                        <li>Pretium</li>
                    </ul>
                    <p>Aliquam risus justo, mollis in, laoreet a, <a href="#">consectetuer nec</a> risus. Nunc
                        blandit sodales lacus. Nam luctus semper mi. Sed sodales nisl sit amet augue. Donec ultrices,
                        augue ullamcorper posuere laoreet, turpis massa tristique justo.</p>
                </div>
            </div>
            <div class="divider"><span></span></div>
            <div class="item">
                <div class="title">Ultrices</div>
                <div class="metadata">May 29, 2006 by Feugiat</div>
                <div class="body">
                    <p>Integer porta. Fusce nibh. Curabitur pellentesque, lectus at <a href="#">volutpat
                            interdum</a>. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur
                        ridiculus mus. Pellentesque a nibh quis nunc volutpat aliquam</p>
                    <blockquote>
                        <p>A box without thines, key or lid, Yet a golden treasure inside is hid.</p>
                    </blockquote>
                    <p>Sem justo placerat elit, eget feugiat est leo tempor quam. Ut quis neque convallis magna
                        consequat molestie. Nullam semper massa eget ligula. Fusce accumsan enim et arcu. Duis sagittis
                        libero at lacus. Suspendisse lacinia nulla eget urna.</p>
                    <blockquote>
                        <p>Alive without breath, As cold as death; Never thirsty, ever drinking, All in mail never
                            clinking.</p>
                    </blockquote>
                    <p>Eget feugiat est leo tempor quam. Ut quis neque convallis magna consequat molestie. Donec varius
                        tincidunt nisi.</p>
                </div>
            </div>
        </div>
        <div class="footer"> &copy; 2006 <a href="#">Website.com</a>. Valid <a
                href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> &amp; <a
                href="http://validator.w3.org/check?uri=referer">XHTML</a>. Template design by <a
                href="http://arcsin.se">Arcsin</a> </div>
    </div>
</body>

</html>
