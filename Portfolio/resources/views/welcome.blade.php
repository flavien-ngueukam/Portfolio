<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>PortfolioPerfect</title>

    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes" />

    @include('layouts.style')
</head>

<body>

    @include('layouts.header')

    <div id="hero" class="hero">
        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <h1>Ngueliebou Flavien</h1>
                    <div class="page-scroll">
                        <p class="job-title">UI/UX Designer | JS Developer | Golang | Python Developer
                            | Database Administrator (junior) | Fullstack Developer </p>
                        <a href="#contact" class="btn btn-fill ">Hire me</a>
                        <div class="clearfix visible-xxs"></div>
                        <a href="#portfolio" class="btn btn-border">Explore more</a>
                    </div>
                </div>

                <div class="col-md-6 text-right">
                    <!-- <img src="assets/img/alex-vidal.png" alt="alex-vidal"> -->
                </div>

            </div>
        </div>
    </div><!-- /.hero -->

    @include('layouts.main')

    @include('layouts.footer')

    <!-- Modals -->
    <div id="portfolioItem1" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <a class="close" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></a>
                    <img class="img-res" src="assets/img/portfolio-1.jpg" alt="">
                </div>
                <div class="modal-body">
                    <h4 class="modal-title">An online E-commerce web app from scratch using PHP5</h4>
                    <p><b>1. Project overview</b> <br>This project aims to develop a fully functional e-commerce web application from scratch using PHP5. The app will enable users to:<br>
                        - Browse and purchase products from a variety of categories.<br>
                        - Create and manage user accounts.<br>
                        - Add items to a shopping cart and securely checkout.<br>
                        - Track order status and manage past purchases.<br>
                        - Utilize various payment gateways.<br>
                        - Access customer support features.<br>
                        <b>2.Key Features</b><br>
                        -<u>User Interface</u>: Modern, user-friendly, and responsive design across all devices.<br>
                        -<u>Product Catalog</u>: Comprehensive and searchable product listings with detailed descriptions, high-quality images, and customer reviews.<br>
                        -<u>Product Management</u>: Admin panel for adding, editing, and managing product information, inventory levels, and promotions.<br>
                        -<u>Shopping Cart</u>: Secure and intuitive cart system for adding, removing, and updating items.<br>
                        -<u>Checkout</u>: Streamlined checkout process with various payment options (e.g. credit card, PayPal) and secure payment processing.<br>
                        -<u>Order Management</u>: User dashboard for tracking order status, viewing past purchases, and managing returns.<br>
                        -<u>Customer Support</u>: Built-in contact forms, live chat functionality, and FAQ section.<br>
                        -<u>Admin Panel</u>: Comprehensive dashboard for managing users, orders, products, promotions, and website analytics.<br>
                        <b>3. Technical Specification</b><br>
                        -Server-side scripting language: PHP5<br>
                        -Database: MySQL
                    </p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-fill">Visit Page</a>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div id="portfolioItem2" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <a class="close" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></a>
                    <img class="img-res" src="assets/img/portfolio-10.jpg" alt="">
                </div>
                <div class="modal-body">
                    <h4 class="modal-title">Development of a Mobile app used for traffic jams prediction using ML & AI, Python django</h4>
                    <p><b>Mobile App for Traffic Jam Prediction using ML & AI in Python Django: A Brief Overview.</b><br><br>

                        <b>Objective: Develop a mobile application that leverages Machine Learning (ML) and Artificial Intelligence (AI) to predict traffic jams and provide users with real-time insights.</b><br><br>

                        <b>Tech Stack:</b><br>

                        Frontend: Flutter/React Native for cross-platform mobile app development.<br>
                        Backend: Python Django for robust API handling and data processing.<br>
                        ML/AI Model: TensorFlow/PyTorch for building and deploying the traffic prediction model.<br><br>

                        <b>Key Functionalities:</b><br>

                        1. Live Traffic Visualization: Integrate live traffic data from map APIs like Google Maps or HERE Maps to display real-time congestion levels.<br>
                        2. AI-powered Prediction: Train an ML model using historical traffic data (speed, volume, accidents, etc.) to predict upcoming jams with high accuracy.<br>
                        3. Personalized Alerts: Send users timely notifications about potential jams along their planned routes, allowing them to adjust their travel plans.<br>
                        4. ETA and Route Optimization: Suggest alternative routes with estimated travel times, considering predicted jams and user preferences (shortest, fastest, scenic).<br>
                        5. Community Reporting: Enable users to report live incidents like accidents or road closures, contributing to real-time data accuracy.<br><br>

                        <b>Implementation Steps:</b><br>

                        1. Data Acquisition: Gather historical and real-time traffic data from reliable sources.<br>
                        2. Data Preprocessing: Clean, format, and prepare the data for ML model training.<br>
                        3. Model Development: Choose and train an appropriate ML model (e.g., Recurrent Neural Networks, LSTMs) for traffic prediction.<br>
                        4. API Integration: Develop a backend API using Django to process user requests, access data, and run the prediction model.<br>
                        5. Mobile App Development: Design and build the mobile app using Flutter/React Native, integrating map visualization, user interface elements, and API calls.<br>
                        6. Deployment and Testing: Deploy the app on app stores and conduct rigorous testing to ensure functionality and accuracy.<br><br>

                        <b>Benefits:</b><br>

                        -> Reduced travel time and stress for users.<br>
                        -> Improved traffic flow and congestion management.<br>
                        -> Enhanced safety by providing real-time hazard awareness.<br>
                        -> Valuable data insights for urban planning and infrastructure development.<br>

                    </p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-fill">Visit Page</a>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div id="portfolioItem3" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <a class="close" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></a>
                    <img class="img-res" src="assets/img/portfolio-3.jpg" alt="">
                </div>
                <div class="modal-body">
                    <h4 class="modal-title">Python game using Pygame</h4>
                    <p>in progress.</p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-fill">Visit Page</a>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div id="portfolioItem4" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <a class="close" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></a>
                    <img class="img-res" src="assets/img/portfolio-4.jpg" alt="">
                </div>
                <div class="modal-body">
                    <h4 class="modal-title">Design of both web and mobile app using Adobe xd and Figma</h4>
                    <p>in progress.</p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-fill">Visit Page</a>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div id="portfolioItem5" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <a class="close" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></a>
                    <img class="img-res" src="assets/img/portfolio-8.jpg" alt="">
                </div>
                <div class="modal-body">
                    <h4 class="modal-title">Web app using Python django from client side to server side (both front-end and back-end)</h4>
                    <p>in progress.</p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-fill">Visit Page</a>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div id="portfolioItem6" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <a class="close" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></a>
                    <img class="img-res" src="assets/img/portfolio-7.jpeg" alt="">
                </div>
                <div class="modal-body">
                    <h4 class="modal-title">Web applications, Server-side Development, Distributed Services & Cloud-Native Development using Golang (Go)</h4>
                    <p>in progress.</p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-fill">Visit Page</a>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    @include('layouts.scripts')

</body>

</html>