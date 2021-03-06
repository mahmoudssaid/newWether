<?php include "./header.tpl"?>
<!-- =================================== main section ================================= -->
<section class="main-section">
    <div class="container">
        <div class="search-div">
            <input type="text" class="form-control" placeholder="Find your location...">
            <button class="btn btn-primary">Find</button>
        </div>
        <div class="row items">
            <div class="col-md-4 p-0">
                <div class="itemDay" data-mh="hi">
                    <div class="head-top">
                        <span class="day">friday</span>
                        <span class="date">30April</span>
                    </div>
                    <div class="body-item">
                        <p class="city">Cairo</p>
                        <div class="temp">
                            <h2>22 <sup>o</sup> C</h2>
                            <img src="./assets/images/113 (1).png" alt="">
                        </div>
                        <p class="text-primary">Clear</p>
                        <div class="details-temp">
                            <div>
                                <img src="./assets/images/icon-umberella.png" alt="">
                                <p>20%</p>
                            </div>
                            <div>
                                <img src="./assets/images/icon-wind.png" alt="">
                                <p>18km/h</p>
                            </div>
                            <div>
                                <img src="./assets/images/icon-compass.png" alt="">
                                <p>East%</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 p-0">
                <div class="itemDay item-center" data-mh="hi">
                    <div class="head-top-next">
                        <span class="nex-day">friday</span>
                    </div>
                    <div class="body-item-next">
                        <img src="./assets/images/116.png" alt="">
                        <div class="temp">
                            <h2>39.9 <sup>o</sup> C</h2>
                            <h6>24.9 <sup>o</sup> C</h6>
                        </div>
                        <p class="text-primary">Partly cloudy</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 p-0">
                <div class="itemDay" data-mh="hi">
                    <div class="head-top-next">
                        <span class="nex-day">friday</span>
                    </div>
                    <div class="body-item-next">
                        <img src="./assets/images/113.png" alt="">
                        <div class="temp">
                            <h2>39.9 <sup>o</sup> C</h2>
                            <h6>24.9 <sup>o</sup> C</h6>
                        </div>
                        <p class="text-primary">Sunny</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include "./footer.tpl"?>