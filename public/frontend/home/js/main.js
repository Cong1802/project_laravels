
$('.tab-profile').click(function(){
	$('.tab-profile').each(function(){
		$(this).removeClass("is-active");
	})
	$('.card-section').each(function(){
		$(this).removeClass("is-active");
	})
	$(this).addClass("is-active");
	var data = $(this).attr('data-section');
	$(data).addClass('is-active');
	$(".card").attr('data-state', data);
	if(data == '#about')
	{
		$(".card").removeClass('is-active');
	}
	else
	{
		$(".card").addClass('is-active');
	}

})


