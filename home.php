<html>
<head>

</head>
<style>
    /* #Resets
–––––––––––––––––––––––––––––––––––––––––––––––––– */
    html {box-sizing: border-box;}
    *, *:before, *:after {box-sizing: inherit;  }



    /* #Universal and Default Styles
    –––––––––––––––––––––––––––––––––––––––––––––––––– */
    body {
        background: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/323039/black-wood-small.jpg);
        color: #ddd;
        font-family: "Open Sans", sans-serif;
        font-size: 14px;
        line-height: 1;
        margin: 0;
        padding: 0;
        text-align: center;
    }
    a {text-decoration: none;}
    h1 {
        font-size: 40px;
        font-weight: 700;
        margin-bottom: 20px;
        margin-top: 20px;
    }
    h2 {
        font-size: 15px;
        font-weight: 600;
        margin-bottom: 30px;
        margin-top: 10px;
    }
    .container {
        margin: auto;
        width: 940px;
    }
    .ul-reset {
        padding-left: 0;
        margin-top: 0;
        margin-bottom: 0;
        list-style: none;
    }



    /* #Navigation Styles
    –––––––––––––––––––––––––––––––––––––––––––––––––– */
    nav {
        background: #424242;
        font-size: 0;
        position: relative;
    }
    nav > ul > li {
        display: inline-block;
        font-size: 14px;
        padding: 0 15px;
        position: relative;
    }
    nav > ul > li:first-child {padding-left: 0;}
    nav > ul > li:last-child {padding-right: 0;}
    nav > ul > li > a {
        color: #fff;
        display: block;
        position: relative;
        padding: 20px 0;
        border-bottom: 3px solid transparent;
    }
    nav > ul > li:hover > a {
        color: #69aae0;
        border-bottom: 3px solid #69aae0;
    }



    /* #Mega Menu Styles
    –––––––––––––––––––––––––––––––––––––––––––––––––– */
    .mega-menu {
        background: #f0f0f0;
        display: none;
        left: 0;
        position: absolute;
        text-align: left;
        width: 100%;
    }
    .mega-menu h3 {color: #444;}
    .mega-menu ul {
        float: left;
        margin-bottom: 20px;
        margin-right: 40px;
        width: 205px;
    }
    .mega-menu ul:last-child {margin-right: 0;}
    .mega-menu a {
        border-bottom: 1px solid #ddd;
        color: #4ea3d8;
        display: block;
        padding: 10px 0;
    }
    .mega-menu a:hover {color: #2d6a91;}



    /* #Droppable Class Styles
    –––––––––––––––––––––––––––––––––––––––––––––––––– */
    .droppable {position: static;}
    .droppable > a:after {
        content: "\f107";
        font-family: FontAwesome;
        font-size: 12px;
        padding-left: 6px;
        position: relative;
        top: -1px;
    }
    .droppable:hover .mega-menu {display: block;}



    /* #Browser Clearfix
    –––––––––––––––––––––––––––––––––––––––––––––––––– */
    .cf:before,
    .cf:after {
        content: " "; /* 1 */
        display: table; /* 2 */
    }
    .cf:after {clear: both;}
</style>
<body>
<section class="container">
    <h1>Health Me Plus +</h1>
    <h2>Exercise For People of All Age!</h2>
</section><!-- .container -->

<nav>
    <ul class="container ul-reset">
        <li><a href='index.php '>Creat Profile</a></li>
        <li class='droppable'>
            <a href='#'>Exercise Content</a>
            <div class='mega-menu'>
                <div class="container cf">
                    <ul class="ul-reset">
                        <li><a href='#'>Maximum Heart Rate</a></li>
                        <li><a href='warm.php'>Warm</a></li>
                        <li><a href='#'>......</a></li>
                        <li><a href='#'>......</a></li>
                        <li><a href='#'>......</a></li>
                    </ul><!-- .ul-reset -->
                </div><!-- .container -->
            </div><!-- .mega-menu -->
        <li><a href='#'>Calculate value MHR</a></li>
        <li><a href='#'>Contact</a></li>
    </ul><!-- .container .ul-reset -->
</nav>
</body>
</html>