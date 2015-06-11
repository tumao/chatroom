$(document).ready(function(){
	// $(".form-control").focus();

});

$(document).keypress(function(e){
	if(e.which == 13){
		// alert('this is enter');
		Mess.send();
	}
});

var conn = new WebSocket('ws://192.168.1.10:9999');
conn.onopen = function(e) {
    console.log("Connection established!");
};

conn.onmessage = function(e) {
    var content = '<div class="chat_cell">';
    content += '<div class="chat_cell_title">';
    content += '<span class="chat_cell_username">Mr. xxx</span>';
    content += '<span class="chat_cell_create_date">2015-6-11 21:47</span>';
    content += '</div>';
    content += '<div class="chat_cell_content">';
    content += '<span class="chat_content">'+e.data+'</span>';
    content += '</div></div>';
    $('.chat_list').append(content);

};

var Mess = {
	send : function(){
		// var content = $('#send_mess_box').value();
		var inputBoxCont = document.getElementById('send_mess_box').value;
		if(inputBoxCont != '')
		{
			 var content = '<div class="chat_cell">';
		    content += '<div class="chat_cell_title">';
		    content += '<span class="chat_cell_username">Mr. xxx</span>';
		    content += '<span class="chat_cell_create_date">2015-6-11 21:47</span>';
		    content += '</div>';
		    content += '<div class="chat_cell_content">';
		    content += '<span class="chat_content">'+inputBoxCont+'</span>';
		    content += '</div></div>';
		    $('.chat_list').append(content);
			conn.send(inputBoxCont);
		}
		// conn.send('');
		document.getElementById('send_mess_box').value ='';
	}
}

