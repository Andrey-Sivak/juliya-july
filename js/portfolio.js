
window.onload = function() {

	const cat = document.getElementsByClassName('categories')[0];
	const btnIndivid = document.getElementById('individ');
	const btnFamilyes = document.getElementById('familyes');
	const btnOther = document.getElementById('other');
	const btnAll = document.getElementById('all');


	cat.addEventListener('click', function(e) {
		e.preventDefault();
		switch(e.target) {
			case btnIndivid: 
				console.log(1);
				break;
			case btnFamilyes:
				console.log(2);
				break;
			case btnOther:
				console.log(3);
				break;
			case btnAll:
				console.log(123);
				break;
		}
	});

	(function() {

		const masonry = new Macy({

			container: '.wrap',
			columns: 6,
			margin: {
				x: '3%',
				y: 15
			},
			mobileFirst: true,
			breakAt: {}

		})

	})()

}

