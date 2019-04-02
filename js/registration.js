

window.onload = function() {

	$('#date').daterangepicker({
		"singleDatePicker": true,
    "autoApply": true,
    "showCustomRangeLabel": false,
     "locale": {
        "format": "MM/DD/YYYY",
        "separator": " - ",
        "applyLabel": "Применить",
        "cancelLabel": "Отмена",
        "fromLabel": "От",
        "toLabel": "До",
        "customRangeLabel": "Свой",
        "daysOfWeek": [
            "Вс",
            "Пн",
            "Вт",
            "Ср",
            "Чт",
            "Пт",
            "Сб"
        ],
        "monthNames": [
            "Январь",
            "Февраль",
            "Март",
            "Апрель",
            "Май",
            "Июнь",
            "Июль",
            "Август",
            "Сентябрь",
            "Октябрь",
            "Ноябрь",
            "Декабрь"
        ],
        "firstDay": 1
    }
	});

	$("#form").submit(function() {
		$.ajax({
			type: "POST",
			url: '../includes/mail.php',
			data: $(this).serialize()
		}).done(function() {
			alert('Спасибо за заявку! Скро мы с Вами свяжемся.');
		});
		return false;
	});

}