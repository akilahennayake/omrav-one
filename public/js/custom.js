$(document).ready(function () {
$('.hand').click(function(){
    $(this).find('.pl i').toggleClass('fa-caret-down fa-caret-up')
}); 
$( "#dpd1,#dpd2" ).focus(function() {
	frm=document.psearch;								  
  if(frm.nationality.value=="0")
		{
		alert("Select Your Nationality First!");
		frm.nationality.focus();
		return false;
}
if(frm.people.value=="0")
		{
		alert("Select How Many Passengers!");
		frm.people.focus();
		return false;
}
  
});							
 $('#nationality,#people').on('change', function() {
if($('#dpd1,#dpd2')){
 	$("#dpd1").val("");
	$("#dpd2").val("");
}
var nat=$('#nationality').val().toLowerCase();
var pep=$('#people').val();
 if(nat=='gcc' && pep==0)
 {	
 alert("Select How Many Passengers!");
 }
 else if(nat=='gcc' && pep!=0){
 $("#dpd1").datepicker('remove');
 		$('#dpd2').attr('disabled','true');
	   var checkout = $('#dpd2').datepicker({autoclose: true,format: 'dd/mm/yyyy'});
   	   var checkin = $('#dpd1').datepicker({
	   format: 'dd/mm/yyyy',
       autoclose: true,
       startDate: "+0d",
       endDate: "+30d"
   }).on('changeDate', function(event) {
       $('#dpd2').removeAttr('disabled');
		var oldDate = new Date(event.date);
		var newDate = new Date(oldDate.getFullYear(),oldDate.getMonth(),oldDate.getDate() + 1);
       checkout.datepicker("setStartDate", newDate);
      checkout.datepicker("setEndDate", "+30d");
       $('#dpd2')[0].focus();
   });

}

else
{
	$("#dpd1").datepicker('remove');
	//$("#dpd2").datepicker('remove');
	$('#dpd2').attr('disabled','true');
	   var checkout = $('#dpd2').datepicker({autoclose: true,format: 'dd/mm/yyyy'});
       var checkin = $('#dpd1').datepicker({
	   format: 'dd/mm/yyyy',
       autoclose: true,
       startDate: "+14d",
       endDate: "+30d"
   }).on('changeDate', function(event) {
       $('#dpd2').removeAttr('disabled');
       var oldDate1 = new Date(event.date);
		var newDate1 = new Date(oldDate1.getFullYear(),oldDate1.getMonth(),oldDate1.getDate() + 1);
       checkout.datepicker("setStartDate", newDate1);
      checkout.datepicker("setEndDate", "+30d");
       $('#dpd2')[0].focus();
   });

	
}

}) 



		
/*var $range = $("#sr-3-3");
$range.ionRangeSlider({
    type: 'single',
	hide_min_max: true,
	hide_from_to: true,
    min: 0,
    max: 10,
	disable: true,
    from: 8
});
var $range = $("#sr-3-2");
$range.ionRangeSlider({
    type: 'single',
	hide_min_max: true,
	hide_from_to: true,
    min: 0,
    max: 10,
	disable: true,
    from: 8
});

var $range = $("#sr-3-1");
$range.ionRangeSlider({
    type: 'single',
	hide_min_max: true,
	hide_from_to: true,
    min: 0,
    max: 10,
	disable: true,
    from: 8
});

var $range = $("#sr-2-3");
$range.ionRangeSlider({
    type: 'single',
	hide_min_max: true,
	hide_from_to: true,
    min: 0,
    max: 10,
	disable: true,
    from: 8
});
var $range = $("#sr-2-2");
$range.ionRangeSlider({
    type: 'single',
	hide_min_max: true,
	hide_from_to: true,
    min: 0,
    max: 10,
	disable: true,
    from: 8
});

var $range = $("#sr-2-1");
$range.ionRangeSlider({
    type: 'single',
	hide_min_max: true,
	hide_from_to: true,
    min: 0,
    max: 10,
	disable: true,
    from: 8
});
var $range = $("#sr-1-3");
$range.ionRangeSlider({
    type: 'single',
	hide_min_max: true,
	hide_from_to: true,
    min: 0,
    max: 10,
	disable: true,
    from: 8
});

var $range = $("#sr-1-2");
$range.ionRangeSlider({
    type: 'single',
	hide_min_max: true,
	hide_from_to: true,
    min: 0,
    max: 10,
	disable: true,
    from: 8
});

var $range = $("#sr-1-1");
$range.ionRangeSlider({
    type: 'single',
	hide_min_max: true,
	hide_from_to: true,
    min: 0,
    max: 10,
	disable: true,
    from: 8
});




$range.on("change", function () {
	
    var $this = $(this), 
    value = $this.prop("value");
	var pclass = $this.parent().attr('id');
	pclass=pclass.slice( -3 );
	console.log(pclass);
console.log($this.parent().find('#mad-'+pclass).html(value));
console.log($this.parent().find('#mak-'+pclass).html(10 - value));
    console.log("Value: " + value);
});*/
});