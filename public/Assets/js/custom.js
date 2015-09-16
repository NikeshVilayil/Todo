$(function(){
	$("#add").click(function(){
		$("#myModal").modal('show');
	});
	$("#submit").click(function(){
		var fname=$("#fname").val();
		var lname=$("#lname").val();
		var email=$("#email").val();
		var address=$("#address").val();
		var password=$("#password").val();
		var password_confirmation=$("#password_confirmation").val();
			$.ajax({
					url : regUrl,
					data :{},
					datatype : 'JSON',
					method : 'POST',
					success : function(response){

					}
			})''
	});
});
