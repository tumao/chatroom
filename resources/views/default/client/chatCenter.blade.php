@extends('default.main')
@section('content')
<div class="container">
	<div class="row chat_room_title">
		<h1>聊天室</h1>
	</div>
	<div class="content">
		<div class="col-md-4">
			<div class="chat_rooms">
				<div class="room_cell">
					<span class="room_name">我的聊天室1</span>
					<span class="create_date">2015-6-11</span>
				</div>
				<div class="room_cell">
					<span class="room_name">我的聊天室1</span>
					<span class="create_date">2015-6-11</span>
				</div>
				<div class="room_cell">
					<span class="room_name">我的聊天室1</span>
					<span class="create_date">2015-6-11</span>
				</div>
				<div class="room_cell">
					<span class="room_name">我的聊天室1</span>
					<span class="create_date">2015-6-11</span>
				</div>
				<div class="room_cell">
					<span class="room_name">我的聊天室1</span>
					<span class="create_date">2015-6-11</span>
				</div>
				<div class="room_cell">
					<span class="room_name">我的聊天室1</span>
					<span class="create_date">2015-6-11</span>
				</div>
				<div class="room_cell">
					<span class="room_name">我的聊天室1</span>
					<span class="create_date">2015-6-11</span>
				</div>
			</div>
			<button type="button" class=" btn-success btn-lg btn-block">创建房间</button>
		</div>
		<div class="col-md-8">
			<div class="chat_list">
				<!-- <div class="chat_cell">
					<div class="chat_cell_title">
						<span class="chat_cell_username">Mr. xxx</span>
						<span class="chat_cell_create_date">2015-6-11 21:47</span>
					</div>
					<div class="chat_cell_content">
						<span class="chat_content">据国家航天局网站2014年8月消息，公安部利用高分一号卫星数据和高分专项先期攻关成果，在黑龙江、内蒙古、河北等地发现了多处罂粟种植区；在吉林、内蒙古等地发现了建国以来最大面积的大麻种植区；在中朝边界、新疆发现数十条非法越境通道；在福建发现海上大型走私油库等。</span>
					</div>
				</div> -->
			</div>
			<div class="enter_place">
				<!-- <form class="form-inline"> -->
			  <div class="form-group">
			    <div class="input-group">
			      <input type="text" class="form-control" id="send_mess_box" placeholder="请在此处输入内容...">
			    </div>
			  </div>
			<!-- </form> -->
			<button type="submit" class="btn btn-primary btn-sm" onclick="Mess.send()">发送</button>
			</div>
		</div>

	</div>
</div>
@stop