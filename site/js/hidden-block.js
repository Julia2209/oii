$(document).ready(function(){
	function hiddenBlock(){
		var block = document.getElementById('hidden_block').style.display;
		document.getElementById('hidden_block').style.display = (block == 'inline') ? 'none' : 'inline';
	}
})