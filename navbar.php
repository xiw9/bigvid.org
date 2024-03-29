 <?php
function print_navbar($navid){
    echo '
    <header>
        <div class="navbar navbar-material-white">
            <div class="container"> 
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/"><img src="img/bigvid.png" alt="BigVid Lab"></a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">', PHP_EOL;
                    $active='class="active"';
                    if ($navid==0){
                        echo sprintf('<li %s><a href="/">Home</a></li>', $active), PHP_EOL;
                    }else{
                        echo '<li><a href="/">Home</a></li>', PHP_EOL;
                    }
                    if ($navid==1){
                        echo sprintf('<li %s><a href="people">People</a></li>', $active), PHP_EOL;
                    }else{
                        echo '<li><a href="people">People</a></li>', PHP_EOL;
                    }
                    if ($navid==3){
                        echo sprintf('<li %s><a href="publications">Publications</a></li>', $active),PHP_EOL;
                    }else{
                        echo '<li><a href="publications">Publications</a></li>',PHP_EOL;
                    }
                    if ($navid==4){
                        echo sprintf('<li %s><a href="dataset">Dataset & Code</a></li>', $active),PHP_EOL;
                    }else{
                        echo '<li><a href="dataset">Dataset & Code</a></li>',PHP_EOL;
                    }
                    if ($navid==5){
                        echo sprintf('<li %s><a href="demo">Demo</a></li>', $active),PHP_EOL;
                    }else{
                        echo '<li><a href="demo">Demo</a></li>',PHP_EOL;
                    }                                                                                                        
                    echo '
                    </ul>
                    <form action="search" method = "get" class="navbar-form navbar-right">
                        <input type="text" name ="q" size="25" autocomplete="off" class="form-control col-lg-8" placeholder="Search"/>
                    </form>
                </div>
            </div>
        </div>';
        if ($navid==0){
        echo '
        <div class="container">
            <div class="lang-bar">
                <a href="/"><span class="flag-icon flag-icon-us"></span>&nbsp;English</a> | <a href="chinese"><span class="flag-icon flag-icon-cn"></span>&nbsp;中文</a>
            </div>
        </div>';}
        elseif ($navid==1){
        echo '
        <div class="container">
            <div class="lang-bar">
                <a href="people"><span class="flag-icon flag-icon-us"></span>&nbsp;English</a> | <a href="people-cn"><span class="flag-icon flag-icon-cn"></span>&nbsp;中文</a>
            </div>
        </div>';}
    echo '
    </header>';
}
?>