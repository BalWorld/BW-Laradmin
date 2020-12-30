<?php
$bw_title='Extract, Transform, Load'; ?>
@include('main/layouts/header')

<section class="bal1-banner-page">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-sm-8 col-md-7">
                <div class="banner-content">
                    <h1 class="heading banner-title banner-title-b">ETL</h1>
                    <p class="p banner-subtitle">Extract, Transform, Load Database functions</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pt-4 pb-4 mt-4">
    <div class="container" data-aos="fade-up" data-aos-duration="600">
        <h1 class="f-600">What is RTL ?</h1>
        <p class="pb-2">ETL is short for extract, transform, load, three database functions that are combined into one
            tool to pull data out of one database and place it into another database.</p>
        <p class="pb-2"><strong>Extract</strong> is the process of reading data from a database. In this stage, the data
            is collected, often from multiple and different types of sources.
            <br>
            <strong>Transform</strong> is the process of converting the extracted data from its previous form into the
            form it needs to be in so that it can be placed into another database. Transformation occurs by using rules
            or lookup tables or by combining the data with other data.
            <br>
            <strong>Load</strong> is the process of writing the data into the target database.
        </p>
        <h1 class="f-600 pt-4">How ETL Works ?</h1>
        <p class="pb-2">Data from one or more sources is extracted and then copied to the data warehouse. When dealing
            with large volumes of data and multiple source systems, the data is consolidated. ETL is used to migrate
            data from one database to another, and is often the specific process required to load data to and from data
            marts and data warehouses, but is a process that is also used to to large convert (transform) databases from
            one format or type to another.</p>
        <div class="d-flex justify-content-center">
            <img class="pb-4 img-fluid" src="/img/etl/etl.jpg" alt="Image">
        </div>
    </div>
</section>

<section class="bw-icon-text bg-light">
    <div class="container">
        <div class="pt-2 pb-6">
            <h1 class="f-600">What's in it for you?</h1>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="bw-icon-text-group" data-aos="fade-up" data-aos-duration="600">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-lg-6">
                            <div class="bw-icon-text_block">
                                <div class="bw-icon-text-icon">
                                    <img src="/img/etl/icon-ease.png" alt="icon">
                                </div>
                                <div class="bw-icon-text-content">
                                    <h5 class="bw-icon-text-content--title">Ease of Use through Automated Processes</h5>
                                    <p class="bw-icon-text-content--pragraph">ETL tools are easy of use. ETL Tools
                                        automatically identifies the types and formats of the data, sets the rules how
                                        the data has to be extracted and processed.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-lg-6">
                            <div class="bw-icon-text_block">
                                <div class="bw-icon-text-icon">
                                    <img src="/img/etl/icon-gui.png" alt="icon">
                                </div>
                                <div class="bw-icon-text-content">
                                    <h5 class="bw-icon-text-content--title">Visual flow</h5>
                                    <p class="bw-icon-text-content--pragraph">ETL tools are based on graphical user
                                        interface (GUI) and offer a visual flow of the system’s logic. The GUI enables
                                        you to use the drag and drop function to visualize the data process.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-lg-6">
                            <div class="bw-icon-text_block">
                                <div class="bw-icon-text-icon">
                                    <img src="/img/etl/icon-operation.png" alt="icon">
                                </div>
                                <div class="bw-icon-text-content">
                                    <h5 class="bw-icon-text-content--title">Operational resilience</h5>
                                    <p class="bw-icon-text-content--pragraph">Many data warehouses are fragile during
                                        operation. ETL tools have a built-in error handling functionality which help
                                        data engineers to develop a resilient and well instrumented ETL process.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-lg-6">
                            <div class="bw-icon-text_block">
                                <div class="bw-icon-text-icon">
                                    <img src="/img/etl/icon-roi.png" alt="icon">
                                </div>
                                <div class="bw-icon-text-content">
                                    <h5 class="bw-icon-text-content--title">High return on investment (ROI)</h5>
                                    <p class="bw-icon-text-content--pragraph">ETL tools helps business to save costs and
                                        thereby, generate higher revenues.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-lg-6">
                            <div class="bw-icon-text_block">
                                <div class="bw-icon-text-icon">
                                    <img src="/img/etl/icon-performance.png" alt="icon">
                                </div>
                                <div class="bw-icon-text-content">
                                    <h5 class="bw-icon-text-content--title">Performance</h5>
                                    <p class="bw-icon-text-content--pragraph">ETL tools simplify the process of building
                                        a high-quality data warehouse. Moreover, several ETL tools come with performance
                                        enhancing technologies.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="call-to-action">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-12 col-lg-9">
                <div class="call-to-action_content text-lg-left">
                    <h3 class="h3 cta-title">Ready To Begin Your Journey With Us ?</h3>
                    <p class="p cta-pragraph">Just submit your contact details and we will be in touch shortly. </p>
                </div>
            </div>
            <div class="col-12 col-lg-3 text-lg-right"><a data-toggle="modal" data-target="#modal-quote"
                    class="btn-basic">Contact Us</a></div>
        </div>
    </div>
</section>

@include('main/layouts/footer')
