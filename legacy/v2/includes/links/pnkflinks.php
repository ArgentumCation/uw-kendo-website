<?php

	$links = array("http://www.alaskakendo.org/",
					"http://www.kendo-pnw.org/bellevue/bellevue.htm",
					"http://www.cascadekendokai.org/",
					"http://www.kendo-pnw.org/everett/index.phtml/",
					"http://www.kendo-pnw.org/highline/highline.htm/",
					"http://www.obukan.com/",
					"http://oregonstate.edu/groups/kendo/",
					"http://www.kendo-pnw.org/renton.htm/",
					"http://www.kendo-pnw.org/sno-king/sno-king.htm",
					"http://www.spokanekendo.com/",
					"http://www.tacomakendo.com/",
					"http://www.idaho-kendo.com/",
					"http://www.nwkendo.com/",
					"http://www.seattlekendokai.org/",
					"http://cub.wsu.edu/wsukendo/",
					"http://willamette.edu/org/wukendo/index.htm");

	$linktitles = array("Alaska Kendo Club",
						"Bellevue Kendo Club",
						"Cascade Kendo Kai",
						"Everett Kendo & Iaido Club",
						"Highline Kendo Club",
						"Obukan Kendo Club",
						"Oregon State University Kendo Club",
						"Renton-Kent Kendo Club",
						"Sno-King Kendo Club",
						"Spokane Kendo Club",
						"Tacoma Kendo & Iaido Club",
						"Idaho Kendo Kai",
						"Northwest Kendo Club",
						"Seattle Kendo Kai",
						"Kendo Club at Washington State University",
						"Willamette University Kendo Club");

	$imagenames = array("logos/alaska.gif",
						"logos/bellevue.gif",
						"logos/cascade.gif",
						"logos/everett.gif",
						"logos/highline.gif",
						"logos/obukan.gif",
						"logos/osu.gif",
						"logos/renton-kent.gif",
						"logos/snoking.gif",
						"logos/spokane.gif",
						"logos/tacoma.gif");

	printLinkTable("Pacific Northwest Kendo Federation Dojos", $imagenames, 3, $links, $linktitles);
?>