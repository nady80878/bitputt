$(document).ready(function(){
	var uploadArea = document.getElementById("upload-area");

	function upload(files){
		var formData = new FormData();
		for(i=0;i<files.length;i++){
			formData.append("files[]",files[i]);
		}

		$.ajax({
			url:'http://localhost/yadawi/upload',
			type: "POST",
			data: formData,
		    processData: false,  // tell jQuery not to process the data
		    contentType: false,
		    success: function(result){
		    	result = JSON.parse(result);
		    }
		});	
	};
	uploadArea.ondrop = function(e){
		e.preventDefault();
		this.className = "upload-area";

		upload(e.dataTransfer.files);
	};
	uploadArea.ondragover = function(){
		this.className = "upload-area upload-area-drop";
		return false;
	};

	uploadArea.ondragleave = function(){
		this.className = "upload-area"
		return false;
	};
});