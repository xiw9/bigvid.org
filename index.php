<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'header.php'; print_header('BigVid Lab - Lab for Big Video Data Analytics'); ?>
</head>
<body>
    <?php include 'navbar.php'; print_navbar(0); ?>
    <div class="container">
        <div class="row">
            <div class="col-xs-8">
                <div id="carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="item active">
                            <a href="http://yugangjiang.info/"><img src="img/header-2.jpg" alt="Scenery of Shanghai"></a>
                            <div class="container">
                                <div class="carousel-caption">
                                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="img/header-3.jpg" alt="Shanghai International Convention Center" >
                            <div class="container">
                                <div class="carousel-caption">
                                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="img/header-1.jpg" alt="Scenery of Shanghai" >
                            <div class="container">
                                <div class="carousel-caption">
                                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="left carousel-control" href="#carousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                    <a class="right carousel-control" href="#carousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                </div>
                <div class="well">
                    <h2>Descriptions</h2>
                    <hr>
                    <p>Research in our lab lies in the areas of multimedia content analysis and
                        computer vision. We are particularly interested in the development of novel 
                        algorithms and systems to understand and utilize big video data. With the 
                        ultimate goal of devising computational approaches that can fully understand the 
                        semantics in videos, our research outcomes can be deployed in many realistic 
                        and important applications such as Web video management and retrieval, 
                        surveillance video analysis, etc. Our work is also closely related to machine 
                        learning, data mining, information retrieval and CHI.
                    </p>
                    <p>We are currently working on the following problems: (1) video categorization 
                        using deep neural networks; (2) large-scale partial copy detection in Web videos; 
                        (3) aerial video analysis; (4) object and face recognition; and (5) creating 
                        benchmarks for video data analytics.
                    </p>                 
                </div>
            </div>
            <div class="col-xs-4">
                <div class="well">
                    <h2>News & Events</h2>
                    <hr>
                    <div class="list-group list-news">
                        <div class="list-group-item">
                            <div class="row-content">
                                <div class="least-content">11/2014</div>
                                <p class="list-group-item-text"><a href="http://www.yugangjiang.info/publication/mm14-videosearch.pdf">Our paper</a> received best poster award at ACM Multimedia 2014.</p>
                            </div>
                        </div>
                        <div class="list-group-separator"></div>
                        <div class="list-group-item">
                            <div class="row-content">
                                <div class="least-content">08/2014</div>
                                <p class="list-group-item-text"><a href="http://www.icmr2015.org/" >The website of ACM ICMR 2015</a> (June 23-26, Shanghai, China) is online.</p>
                            </div>
                        </div>
                        <div class="list-group-separator"></div>
                        <div class="list-group-item">
                            <div class="row-content">
                                <div class="least-content">08/2014</div>
                                <p class="list-group-item-text"><a href="research/VCDB/index.html" >We have released VCDB</a>, the largest public dataset with manually annotated <b>real</b> partial video copies.</p>
                            </div>
                        </div>
                        <div class="list-group-separator"></div>
                        <div class="list-group-item">
                            <div class="row-content">
                                <div class="least-content">08/2014</div>
                                <p class="list-group-item-text"><a href="http://crcv.ucf.edu/THUMOS14/home.html" >The workshop of the 2nd THUMOS Action Recognition Challenge</a> will be held in conjunction with ECCV 2014.</p>
                            </div>
                        </div>
                        <div class="list-group-separator"></div>                        
                        <div class="list-group-item">
                            <div class="row-content">
                                <div class="least-content">07/2014</div>
                                <p class="list-group-item-text"> One full paper and two short papers accepted to ACM Multimedia 2014. </p>
                            </div>
                        </div>
                        <div class="list-group-separator"></div>
                        <div class="list-group-item">
                            <div class="row-content">
                                <div class="least-content">06/2014</div>
                                <p class="list-group-item-text">Two papers accepted to ECCV 2014 - <a href="publications">check the publication page for pdf</a>.</p>
                            </div>
                        </div>
                        <div class="list-group-separator"></div>
                        <div class="list-group-item">
                            <div class="row-content">
                                <div class="least-content">12/2013</div>
                                <p class="list-group-item-text">Signed a new 2-year technical collaboration contract with <a href="http://www.huawei.com">Huawei Technologies</a>, focusing on UGC video summarization and search.</p>
                            </div>
                        </div>
                    </div>                
                </div>
            </div>
        </div>  
        <div class="row index-sponser">
            <p class="text-center">We gratefully acknowledge the funding support from NSF China, Ministry of Science & Technology, Ministry of Education, Shanghai Government, Huawei Technologies, ZTE Corporation and NTT.</p>
        </div>  
    </div>    
    <?php include 'footer.php' ?>

</body>
</html>
