$(document).ready(function(){
	var goalScoreArray = {};
	var $currentGoalCounter = 0;
	$(".goals").each(function(){
		addScoreInputField($currentGoalCounter, this);
		addCheckbox($currentGoalCounter, this);
		$currentGoalCounter++;
	});
	for (var i=0; i<$currentGoalCounter; i++){
		goalScoreArray[i] = 0;
	}

	$(".checkboxstyle").click(function(){
		$(this).toggleClass("clicked");
		var $score = goalScoreArray[$(this).parents(".goals").attr("id").split("s")[1]];
		if ($(this).hasClass("clicked")){
			goalScoreArray[$(this).parents(".goals").attr("id").split("s")[1]] = ++$score;
		} 
		else if (!($(this).hasClass("clicked")) && $score > 0){
			goalScoreArray[$(this).parents(".goals").attr("id").split("s")[1]] = --$score;
		}
		for (var i=0; i<$currentGoalCounter; i++){
			$("#goalScore" + (i + 1)).val(goalScoreArray[i].toString());
		}
	});

	$("#exportButton").click(function(){
		(window).print();
	});



});

function addScoreInputField(goalNum, appendToContainer){
	$(appendToContainer).append("<p>Passes (out of 10): </p>");
	++goalNum;
	$("<input>", {"class": "goalScore", "id":"goalScore" + goalNum,"type":"number", "name":"GoalScores[]" + goalNum + "Score", "min":"0", "max":"10", "value":""}).appendTo(appendToContainer);
}

function addCheckbox(goalNum, appendToContainer) {
	$("<p class=\"trial\">Trial:</p>").css({"margin-bottom":"0"}).appendTo(appendToContainer);
	var container = $("<div>", {"class": "checkboxsection"}).appendTo(appendToContainer);
	if (goalNum == 0){
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
			++id;
			var checkbox = $("<div>", {"class": "checkbox w-checkbox w-clearfix"}).appendTo(container);
			var checkboxInput = checkbox.append($("<input>", {"class": "display-none w-checkbox-input", "data-name":"Checkbox"+id, 
			id: "checkbox-" + id, name:"checkbox-" + id, type: "checkbox"}));
			var checkboxLabel = checkbox.append($("<label>", {"class": "checkboxstyle w-form-label", "data-ix": "checkboxinteraction", 
			for: "checkbox-" + id, text:i}));

		}
	}
}