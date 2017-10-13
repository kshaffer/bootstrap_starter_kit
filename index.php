<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap Starter Kit | Kris Shaffer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="/css/bootstrap.css" media="screen">
    <link rel="stylesheet" href="/css/custom.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../bower_components/html5shiv/dist/html5shiv.js"></script>
      <script src="../bower_components/respond/dest/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <!-- navbar -->
    <?php
      include('./php_includes/navbar.html');
    ?>

    <div class="container">

      <div class="page-header" id="banner">
        <div class="row">
          <div class="col-lg-12">
            <h1>Bootstrap Starter Kit</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-9 col-md-8 col-sm-7">
            <p class="lead">Get started on a static HTML site with an out-of-the-box <a href="http://getbootstrap.com/" target="blank_">Bootstrap</a> build.</p>
            <p>Building your first website with HTML and CSS is usually a lot harder than it needs to be. Either the site is ugly, or the process of making it both functional and attractive is onerous -- both of which can be frustrating for a new developer.</p>
            <p>Bootstrap is an HTML, CSS, and JavaScript framework that promises to make it much easier to make an attractive, functional site from scratch. But I've found it difficult to collect all the right frameworks and files together, especially if you want a custom theme.</p>
            <p>In the process of helping one of my students get started with her own Bootstrap-enabled site, I collected all the files needed to get started in one ZIP file. Simply download this zip file, upload it to your web host's file manager, extract it, and start editing! No tracking down dependencies, no changing links to different folders... It's all here.</p>
            <p>You'll find two versions of Bootstrap Starter Kit. The first version is built from HTML, CSS, and a little JavaScript. This can run pretty much anywhere (including GitHub Pages), but it does require you to rewrite the HTML code for the header/footer on every page. Add a link to the navbar? You have to add it everywhere. For small sites, that may be fine, but it can get old.</p>
            <p>So I also made a version that uses a little PHP to pull the header and footer for every page from a single file. It diminishes the amount of work you have to do, especially for sites with more than two or three pages. It should work on any shared hosting environment (including Domain of One's Own). Just note that it won't work on GitHub Pages.</p>
            <p>Check out the <a href="/examples.php">examples page</a> to get some ideas of what this theme can do. Have fun!</p>
          </div>

          <div class="col-lg-3 col-lg-4 col-lg-5">
            <h2 style="margin-top: 0px; text-align:center;">Download BSK</h2>
            <hr/>
            <p class="bs-component" style="text-align: center;">
              <a href="/bootstrap_starter_kit_html.zip" class="btn btn-default btn-lg">HTML/CSS</a>
            </p>
            <p class="bs-component" style="text-align: center;">
              <a href="bootstrap_starter_kit_php.zip" class="btn btn-default btn-lg">HTML/CSS/PHP</a>
            </p>
          </div>
        </div>


        <!-- footer -->
        <?php
          include('./php_includes/footer.html');
        ?>

    </div>


    <script style="display: none !important;">!function(e,t,r,n,c,a,l){function i(t,r){return r=e.createElement('div'),r.innerHTML='<a href="'+t.replace(/"/g,'&quot;')+'"></a>',r.childNodes[0].getAttribute('href')}function o(e,t,r,n){for(r='',n='0x'+e.substr(t,2)|0,t+=2;t<e.length;t+=2)r+=String.fromCharCode('0x'+e.substr(t,2)^n);return i(r)}try{for(c=e.getElementsByTagName('a'),l='/cdn-cgi/l/email-protection#',n=0;n<c.length;n++)try{(t=(a=c[n]).href.indexOf(l))>-1&&(a.href='mailto:'+o(a.href,t+l.length))}catch(e){}for(c=e.querySelectorAll('.__cf_email__'),n=0;n<c.length;n++)try{(a=c[n]).parentNode.replaceChild(e.createTextNode(o(a.getAttribute('data-cfemail'),0)),a)}catch(e){}}catch(e){}}(document);</script><script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/custom.js"></script>
  </body>
</html>
