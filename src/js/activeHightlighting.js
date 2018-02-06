		var url = location.href.split("/");
		var navLinks = document.getElementsByClassName("nav-link");

		var currentPage = url[url.length - 1];

		if (currentPage == "") {

			currentPage = "index.php";

		}

		for (var i = 0; i < navLinks.length; i++) {

			var parts = navLinks[i].href.split("/");

			if (parts[parts.length - 1] == currentPage) {

				navLinks[i].className += " active";

			}

		}
