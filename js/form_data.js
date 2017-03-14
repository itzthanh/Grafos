$(document).ready(function(){
	//$(".checkboxsection").hide();
	var $currentGoalCounter = 1;
	$(".goals").each(function(){
		addCheckbox($currentGoalCounter, this);
		$currentGoalCounter++;
		//var $checkboxClone = $(this).find($clone);
			//$(this)
			//.attr("id", $IDcounter+1);
	});
});

function addCheckbox(goalNum, appendToContainer) {
	$("<p class=\"trial\">Trial:</p>").css({"margin-bottom":"0"}).appendTo(appendToContainer);
	var container = $("<div>", {"class": "checkboxsection"}).appendTo(appendToContainer);
	var displayGoalNum = 1;
	if (goalNum == 1){
		for (var i = 1; i <= 10; i++){
			var checkbox = $("<div>", {"class": "checkbox w-checkbox w-clearfix"}).appendTo(container);
			var checkboxInput = checkbox.append($("<input>", {"class": "display-none w-checkbox-input", "data-name":"Checkbox"+i, 
			id: "checkbox-" + i, name:"checkbox-" + i, type: "checkbox"}));
			var checkboxLabel = checkbox.append($("<label>", {"class": "checkboxstyle w-form-label", "data-ix": "checkboxinteraction", 
			for: "checkbox-" + i, text:i}));
		}
	}
	else{
		var id = $(appendToContainer).prev().find("input").last().attr("id").split("-")[1];
		for (var i = 1; i <= 10; i++){
			var checkbox = $("<div>", {"class": "checkbox w-checkbox w-clearfix"}).appendTo(container);
			var checkboxInput = checkbox.append($("<input>", {"class": "display-none w-checkbox-input", "data-name":"Checkbox"+id, 
			id: "checkbox-" + id, name:"checkbox-" + id, type: "checkbox"}));
			var checkboxLabel = checkbox.append($("<label>", {"class": "checkboxstyle w-form-label", "data-ix": "checkboxinteraction", 
			for: "checkbox-" + id, text:i}));
			id++;
		}
	}
}
			/*var checkbox = $("<div>", {"class": "checkbox w-checkbox w-clearfix"}).appendTo(container);
			var checkboxInput = checkbox.append($("<input>", {"class": "display-none w-checkbox-input", "data-name":"Checkbox"+id, 
			id: "checkbox-" + id, name:"checkbox-" + id, type: "checkbox"}));
			var checkboxLabel = checkbox.append($("<label>", {"class": "checkboxstyle w-form-label", "data-ix": "checkboxinteraction", 
			for: "checkbox-" + id, text:displayGoalNum}));
		}
		//console.log($(appendToContainer).prev().find("input").last().attr("id").split("-")[1]);
		//for (var i = appendTo.find(".checkbox").last().
	}
}




   	/*var container = $('#cblist');
   	var inputs = container.find('input');
   	var id = inputs.length+1;

   $('<input />', { type: 'checkbox', id: 'cb'+id, value: name }).appendTo(container);
   $('<label />', { 'for': 'cb'+id, text: name }).appendTo(container);
}

<div class="checkboxsection">
          <div class="checkbox w-checkbox w-clearfix">
            <input class="display-none w-checkbox-input" data-name="Checkbox" id="checkbox-00" name="checkbox-00" type="checkbox">
            <label class="checkboxstyle w-form-label" data-ix="checkboxinteraction" for="checkbox-00">1</label>
          </div>*/