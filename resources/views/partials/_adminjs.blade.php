<!-- jQuery -->
<script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<!-- Bootstrap -->
<script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Waves button ripple effects -->
<script src="vendors/bower_components/Waves/dist/waves.min.js"></script>
<!-- Select 2 - Custom Selects -->
<script src="vendors/bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- Slick Carousel - Custom Alerts -->
<script src="vendors/bower_components/slick-carousel/slick/slick.min.js"></script>
<!-- NoUiSlider -->
<script src="vendors/bower_components/nouislider/distribute/nouislider.min.js"></script>
<!-- Ion Range Slider -->
<script src="vendors/bower_components/ionrangeslider/ion.rangeSlider.js"></script>
<script language="javascript" type="text/javascript" src="vendors/bower_components/Flot/jquery.flot.js"></script>
<script language="javascript" type="text/javascript" src="vendors/bower_components/Flot/jquery.flot.pie.js"></script>
<!-- Metis Menu Plugin JavaScript -->
<script src="vendors/bower_components/metisMenu/metisMenu.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="vendors/bower_components/raphael/raphael.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="vendors/bower_components/bootstrap/dist/js/sb-admin-2.js"></script>


<script type="application/javascript">
    $(document).ready(function () {

//Pie Chart Start
        var dataset = [
            {
                label: "1st Qtr",
                data: 20,
                color:'#ed7d31'
            },
            {
                label: "2nd Qtr",
                data: 25,
                color:'#ffc000'
            }
            ,
            {
                label: "3rd Qtr",
                data: 15,
                color:'#70ad47'
            }
            ,
            {
                label: "4th Qtr",
                data: 40,
                color:'#9e480e'
            }
        ];

        var placeholder = $("#placeholder");
        placeholder.unbind();
        $.plot('#placeholder', dataset, {
            series: {
                pie: {
                    show: true
                }
            },
            legend: {
                show: false
            }
        });
        window.onresize = function(event) {
            $.plot('#placeholder', dataset, {
                series: {
                    pie: {
                        show: true
                    }
                },
                legend: {
                    show: false
                }
            });
        }
//Pie Chart End

    });

</script>
<!-- IE9 Placeholder -->
<!--[if IE 9 ]>
<script src="vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
<![endif]-->
<!-- Site functions and actions -->
<script src="js/app.min.js"></script>
<script src="js/custom.js"></script>
<!-- Demo only -->
<script src="js/demo/demo.js"></script>
<script src="vendors/bower_components/jquery.scrollbar/jquery.scrollbar.min.js"></script>
<script src="vendors/bower_components/jquery-scrollLock/jquery-scrollLock.min.js"></script>

<!--Parsley.js load-->
{!! \Collective\Html\HtmlFacade::script('js/parsley.min.js') !!}