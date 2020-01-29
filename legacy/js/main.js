this.onload = function() {
	var navi = $("naviItems").getElementsBySelector("li.main", "li.last");
	for (var i = 0; i < navi.length; i++) {
		var temp = navi[i];
		var tempItem = temp.getElementsBySelector("a.main");
		if (tempItem.length == 1) {
			var tempUl = temp.getElementsBySelector("ul");
			if (tempUl.length == 1) {
				tempItem[0].onclick = expandNaviSub;
				tempItem[0].id = "menu" + i;
				tempUl[0].id = "menu" + i + "sub";
				tempUl[0].hide();
				if (typeof expandNav!="undefined" && expandNav == i) {
					tempUl[0].show();
				}
			}
		}
	}
}

function expandNaviSub() {
	new Effect.toggle(this.id + "sub", 'blind');
}