<html>
<head>
<!-- Meta Tags -->
<title>Filtering Concept Through Jqeury</title>
<meta charset="utf-8">
<meta name="keywords" content="">
<meta name="description" content=" ">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="http://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet" type="text/css">

<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body cz-shortcut-listen="true">
<div id="page-wrapper">
    <div class="page-title-container">
        <div class="container">
            <div class="page-title pull-left">
                <h2 class="entry-title">Flight Search Results</h2>
            </div>
           
        </div>
    </div>
    <section id="content">
        <div class="container">
            <div id="main">
                <div class="row">
                    <div class="flight-requirement type_1">
                		<div class="flight-req-div">
                			<div class="flight-req">
                				<label class="fl-label">From</label>
                				<label class="fl-value">HYD</label>
                			</div>
                		</div>
                		<div class="flight-req-div">
                			<div class="flight-req">
                				<label class="fl-label">To</label>
                				<label class="fl-value">DEL</label>
                			</div>
                		</div>
                		<div class="flight-req-div">
                			<div class="flight-req">
                				<label class="fl-label">OneWay</label>
                				<label class="fl-value">Jan 31, 2019</label>
                			</div>
                		</div>
                		<div class="flight-req-div">
                			<div class="flight-req">
                				<label class="fl-label">Adult</label>
                				<label class="fl-value">1</label>
                			</div>
                		</div>
                		<div class="flight-req-div">
                			<div class="flight-req">
                				<label class="fl-label">Kids</label>
                				<label class="fl-value">0</label>
                			</div>
                		</div>
                		<div class="flight-req-div">
                			<div class="flight-req">
                				<label class="fl-label">Infants</label>
                				<label class="fl-value">0</label>
                			</div>
                		</div>
                		<div class="clearfix"></div>
                	</div>  
                    <div class="col-sm-4 col-md-3 Oneway">  
                        <h4 class="search-results-title">
                            <i class="soap-icon-search"></i>
                            <span id="filtertext" style="font-size: 14px;"> 96 results found.</span>
                        </h4>
                        <div class="toggle-container filters-container">
                            <div class="panel style1 arrow-right">
                                <h4 class="panel-title">
                                    <a>Flight Times</a>
                                </h4>
                                <div id="flight-times-filter">
                                    <div class="panel-content">
                                        <!-- <div id="flight-times" class="slider-color-yellow"></div>
                                        <br />
                                        <span class="start-time-label pull-left"></span>
                                        <span class="end-time-label pull-right"></span>
                                        <div class="clearer"></div> -->
                                        <ul class="check-square filters-option">
                                            <li class="time_filter_li" data-id-min="240" data-id-max="660"><a>Morning [4 AM - 11 AM] </a></li>
                                            <li class="time_filter_li" data-id-min="660" data-id-max="960"><a>AfterNoon [11 AM - 4 PM]</a></li>
                                            <li class="time_filter_li" data-id-min="960" data-id-max="1260"><a>Evening [4 PM - 9 PM]</a></li>
                                            <li class="time_filter_li" data-id-min="1260" data-id-max="240"><a>Night [9 PM - 4 AM]</a></li>
                                        </ul>
                                    </div><!-- end content -->
                                </div>
                            </div>
                            <div class="panel style1 arrow-right">
                                <h4 class="panel-title">
                                    <a>Flight Stops</a>
                                </h4>
                                <div id="flight-stops-filter">
                                    <div class="panel-content">
                                        <ul class="check-square filters-option">
                                            <li class="stops_filter_li" data-id="0"><a>Non Stop</a></li>
                                            <li class="stops_filter_li" data-id="1"><a>1 Stop</a>
                                            </li>
                                            <li class="stops_filter_li" data-id="2"><a>2 &amp; more Stops</a>
                                            </li> 
                                        </ul> 
                                    </div>
                                </div>
                            </div>
                            <div class="panel style1 arrow-right">
                                <h4 class="panel-title">
                                    <a>Airlines</a>
                                </h4>
                                <div id="airlines-filter">
                                    <div class="panel-content">
                                        <ul class="check-square filters-option">
                                            <li class="airline_filter_li" data-id="G8"><a>GoAir</a></li>
                                            <li class="airline_filter_li" data-id="6E"><a>Indigo</a></li>
                                            <li class="airline_filter_li" data-id="SG"><a>SpiceJet</a></li>
                                            <li class="airline_filter_li" data-id="AI"><a>Air India</a></li>
                                            <li class="airline_filter_li" data-id="UK"><a>Air Vistara</a></li>
                                            <li class="airline_filter_li" data-id="I5"><a>Air Asia</a></li>
                                            <li class="airline_filter_li" data-id="9W"><a>Jet Airways</a></li>
                                         </ul> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="col-sm-8 col-md-9"> 
                        <!-- <h4 class="sort-by-title block-sm">Sort results by:</h4> -->
                        <div class="sort-by-section clearfix box">
                            <ul class="sort-bar clearfix block-sm">
                                <li class="sort-by-x sort-by-depart active ascend" data-id=".filter_dep_time"><a class="sort-by-container"><span class="sorttxt">Departure</span></a></li>
                                <li class="sort-by-x sort-by-arrival" data-id=".filter_arr_time"><a class="sort-by-container"><span class="sorttxt">Arrival</span></a></li>
                                <li class="sort-by-x sort-by-duration" data-id=".filter_duration"><a class="sort-by-container"><span>Duration</span></a></li>
                                <li class="sort-by-x sort-by-price" data-id=".filter_price"><a class="sort-by-container"><span class="sorttxt">Price</span></a></li>
                            </ul> 
                        </div>
                        <div class="totalFlightsInformation">
                            <div id="preloader" style="display: none;">
                                <div id="status">&nbsp;</div>
                            </div>
                            <div class="flight-list listing-style3 flight" id="allFlightList">
								<p id="filter_no_results" style="text-align: center;background: #fff;padding: 15px;font-size: 16px;display: none"></p>
                                <?php include("includes/loop.php") ?>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Javascript -->
<style>
.details.col-sm-7.col-md-8 p {text-align: justify !important;}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>