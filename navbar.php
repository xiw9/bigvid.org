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
                    if ($navid==2){
                        echo sprintf('<li %s><a href="research">Research</a></li>', $active),PHP_EOL;
                    }else{
                        echo '<li><a href="research">Research</a></li>',PHP_EOL;
                    }
                    if ($navid==3){
                        echo sprintf('<li %s><a href="publication">Publications</a></li>', $active),PHP_EOL;
                    }else{
                        echo '<li><a href="publications">Publications</a></li>',PHP_EOL;
                    }
                    if ($navid==4){
                        echo sprintf('<li %s><a href="dataset">Dataset</a></li>', $active),PHP_EOL;
                    }else{
                        echo '<li><a href="dataset">Dataset</a></li>',PHP_EOL;
                    }                                                                                
                    echo '
                    </ul>
                    <form action="search" method = "get" class="navbar-form navbar-right">
                        <input type="text" name ="q" size="25" autocomplete="off" class="form-control col-lg-8" placeholder="Search"/>
                    </form>
                </div>
            </div>
        </div>
    </header>';
}
?>