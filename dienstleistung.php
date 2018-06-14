<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="de-CH">
<head>
    <?php include 'include/head.php'; ?>
    <meta name="description" content="das ist ein Test"><!-- definieren -->
</head>

<body>
    
    <?php $page = 'dienstleistung'; include 'include/header.php'; ?>
    
    <main class="main-container">
        <section class="content-team column-two">
            <h1>Advokatur</h1>
        </section>
        
        <article class="column-four accordion">
            <h3 class="nav accTitle"><span class="line">&#x0007C;</span>Zivil- und Verwaltungsrecht</h3>
            <div class="subnav-nav accList">
                <div class="tabs">
                    <ul class="tab-links">
                        <li class="active">
                            <a href="#tab1"><span class="linesub lineactivesub">&#x0007C;</span>Beschreibung</a>
                        </li>
                        <li>
                            <a href="#tab2"><span class="linesub">&#x0007C;</span>Spezialisten</a>
                        </li>
                        <li class="last">
                            <a href="#tab3"><span class="linesub">&#x0007C;</span>Fallbeispiel</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab1" class="tab active">
                            <p>Tab #1 Donec pulvinar neque sed semper lacinia. Curabitur lacinia ullamcorper nibh; quis imperdiet velit eleifend ac. Donec blandit mauris eget aliquet lacinia! Donec pulvinar massa interdum risus ornare mollis.</p>
                        </div>
                        <div id="tab2" class="tab">
                            <p>Tab #2 Donec pulvinar neque sed semper lacinia. Curabitur lacinia ullamcorper nibh; quis imperdiet velit eleifend ac. Donec blandit mauris eget aliquet lacinia! Donec pulvinar massa interdum risus ornare mollis. In hac habitasse platea dictumst. Ut euismod tempus hendrerit. Morbi ut adipiscing nisi. Etiam rutrum sodales gravida! Aliquam tellus orci, iaculis vel.</p>
                        </div>
                        <div id="tab3" class="tab">
                            <p>Tab #3 Donec pulvinar neque sed semper lacinia. Curabitur lacinia ullamcorper nibh; quis imperdiet velit eleifend ac. Donec blandit mauris eget aliquet lacinia! Donec pulvinar massa interdum ri.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <h3 class="nav accTitle"><span class="line">&#x0007C;</span>Exportkontrollrecht</h3>
            <p class="accList">Wir pflegen untereinander und mit allen unseren Ansprechpartnern einen höflichen und respektvollen Umgang. Davon weichen wir auch dann nicht ab, wenn wir einen Standpunkt oder eine Entscheidung gegen Widerstand zu vertreten haben. Von unseren Klienten erwarten wir das gleiche.</p>
            
            <h3 class="nav accTitle"><span class="line">&#x0007C;</span>Pharmarecht</h3>
            <p class="accList">Wir pflegen untereinander und mit allen unseren Ansprechpartnern einen höflichen und respektvollen Umgang. Davon weichen wir auch dann nicht ab, wenn wir einen Standpunkt oder eine Entscheidung gegen Widerstand zu vertreten haben. Von unseren Klienten erwarten wir das gleiche.</p>
            
        </article>
    </main>
    
    <?php include 'include/footer.php'; ?>
    
    
    <script src="js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
 
</body>

</html>
