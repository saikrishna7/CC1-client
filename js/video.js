var video;
$(document).ready(function(){
	var timeBuffered = 0;
	var timer;
	var checkInterval = 100;	
	var isBuffering = false;
	var lastPlayerPos = 0;
	var bufferingStartTime = 0;
	var bufferingEndTime = 0;
	video = $("#main-video")[0];
	setInterval(checkBuffering,checkInterval);
	function checkBuffering(){
		currentPlayerPos = video.currentTime;
		var offset = 1/checkInterval;
		if(!isBuffering && currentPlayerPos < (lastPlayerPos + offset)&& !video.paused){
		bufferingStartTime = currentPlayerPos;
		isBuffering = true;
		//timer=setInterval(function(){incrementBufferedTime();},10); 	
	}
		if(isBuffering && currentPlayerPos > (lastPlayerPos + offset) &&!video.paused){
	//clearInterval(timer);
	isBuffering =false;
	bufferingEndTime = currentPlayerPos;
	reportBuffering(bufferingStartTime,bufferingEndTime);
	bufferingStartTime = 0;
	bufferingEndTime = 0;
	timeBuffered = 0;
}
	lastPlayerPos = currentPlayerPos;
	};

	function reportBuffering(bufferingStartTime,bufferingEndTime){
		console.log("time buffered:"+timeBuffered+ " start: "+bufferingStartTime+" end: "+bufferingEndTime);
		$.ajax({
		  method: "POST",
		  url: "server.php",
		  data:{"startTime":bufferingStartTime,"endTime":bufferingEndTime},
		  success:function(response){
		  	console.log(response);
		  },
		  error:function(response){
			console.log(response);
			}
		});
	}
});
