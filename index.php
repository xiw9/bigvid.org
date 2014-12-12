<?php include 'header.php'; print_header('BigVid Lab'); ?>
<body>
    <?php include 'navbar.php'; print_navbar(0); ?>
    <div class="container">
        <div class="row">
            <div class="col-xs-8">
                <div id="carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="img/header-2.jpg" alt="Scenery of Shanghai">
                            <div class="container">
                                <div class="carousel-caption">
                                    <p><a href="http://yugangjiang.info/">Cras justo odio, dapibus ac facilisis in, egestas eget quam.</a></p>
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
                    <div class="list-group">
                        <div class="list-group-item">
                            <div class="row-content">
                                <div class="least-content">11/2014</div>
                                <p class="list-group-item-text">Our paper received best poster award at ACM Multimedia 2014.</p>
                            </div>
                        </div>
                        <div class="list-group-separator"></div>
                        <div class="list-group-item">
                            <div class="row-content">
                                <div class="least-content">08/2014</div>
                                <p class="list-group-item-text">The website of ACM ICMR 2015 (June 23-26, Shanghai, China) is online.</p>
                            </div>
                        </div>
                        <div class="list-group-separator"></div>
                        <div class="list-group-item">
                            <div class="row-content">
                                <div class="least-content">08/2014</div>
                                <p class="list-group-item-text">We have released VCDB, the largest public dataset with manually annotated real partial video copies. </p>
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
                                <p class="list-group-item-text">Two papers accepted to ECCV 2014 - check the publication page for pdf.</p>
                            </div>
                        </div>
                        <div class="list-group-separator"></div>
                        <div class="list-group-item">
                            <div class="row-content">
                                <div class="least-content">01/2014</div>
                                <p class="list-group-item-text">The violent scenes detection dataset used in MediaEval 2013 is available online, jointly provided by Technicolor, Fudan, and UIT Vietnam</p>
                            </div>
                        </div>
                        <div class="list-group-separator"></div>
                        <div class="list-group-item">
                            <div class="row-content">
                                <div class="least-content">12/2013</div>
                                <p class="list-group-item-text">Signed a new 2-year technical collaboration contract with Huawei Technologies, focusing on UGC video summarization and search. </p>
                            </div>
                        </div>
                    </div>                
                </div>
            </div>
        </div>    
    </div>    
    <?php include 'footer.php' ?>

</body>
</html>
