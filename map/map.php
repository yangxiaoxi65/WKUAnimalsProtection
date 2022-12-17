<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	<style type="text/css">
		body, html{width: 100%;height: 100%;margin:0;font-family:"微软雅黑";font-size:14px;}
		#allmap {width:100%;height:500px;}
		img{width: 100%; display: block;}
	</style>
	<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=BNvwzx4vXN5L1d9wbNGgZNjXFwifBf0K"></script>
	<title>逆地址解析</title>
</head>
<body>
	
	<div id="allmap"></div>
	<p>点击地图展示详细地址</p>
	
</body>
</html>
<script type="text/javascript">
	// 百度地图API功能
	var map = new BMap.Map("allmap");
	
	var point = new BMap.Point(120.659934,27.927555);
	map.centerAndZoom(point,17);
	var geoc = new BMap.Geocoder();    
	var a;
	var b;
	
	map.addEventListener("click", function(e){        
		var pt = e.point;
		geoc.getLocation(pt, function(rs){
			var addComp = rs.addressComponents;
			alert(addComp.province + ", " + addComp.city + ", " + addComp.district + ", " + addComp.street + ", " + addComp.streetNumber);
		});        
	});
	
//##################################### 加标签 ##########################################

	var point_rong = new BMap.Point(120.659907,27.927555);
    var marker_rong = new BMap.Marker((point_rong));        // 创建标注  
	map.addOverlay(marker_rong);
	(function(){marker_rong.addEventListener("click", function(){
		this.openInfoWindow(new BMap.InfoWindow("<b>Residence Hall</b></br></br><img src='../img/wku/寝室.jpg' width: 100%>", {width: 200,height: 200,enableMessage: false}));
	}); //在图标实例上添加鼠标点击事件
	})();

	var point_CBPM = new BMap.Point(120.659386,27.925109);
    var marker_CBPM = new BMap.Marker((point_CBPM));        // 创建标注  
	map.addOverlay(marker_CBPM);
	(function(){marker_CBPM.addEventListener("click", function(){
		this.openInfoWindow(new BMap.InfoWindow("<b>CBPM</b></br></br><img src='../img/wku/商学院.jfif' width: 100%>", {width: 200,height: 200,enableMessage: false}));
	}); //在图标实例上添加鼠标点击事件
	})();	

	var point_ghk = new BMap.Point(120.660922,27.924224);
    var marker_ghk = new BMap.Marker((point_ghk));        // 创建标注  
	map.addOverlay(marker_ghk);
	(function(){marker_ghk.addEventListener("click", function(){
		this.openInfoWindow(new BMap.InfoWindow("<b>GHK</b></br></br><img src='../img/wku/ghk.jpg' width: 100%>", {width: 200,height: 200,enableMessage: false}));
	}); //在图标实例上添加鼠标点击事件
	})();	

	var point_geh = new BMap.Point(120.658721,27.923801);
    var marker_geh = new BMap.Marker((point_geh));        // 创建标注  
	map.addOverlay(marker_geh);
	(function(){marker_geh.addEventListener("click", function(){
		this.openInfoWindow(new BMap.InfoWindow("<b>GEH</b></br></br><img src='../img/wku/教学楼.jpg' width: 100%>", {width: 200,height: 200,enableMessage: false}));
	}); //在图标实例上添加鼠标点击事件
	})();
		






	setTimeout(function(){
		map.setZoom(17);   
	}, 2000); 
	map.enableScrollWheelZoom(true);
	//获取经纬度
	function get(){
			a=parent.document.getElementById('jing').value;
			b=parent.document.getElementById('wei').value;
			
		}
	get();

	var icon = new BMap.Icon('../img/happy.png', new BMap.Size(24,24), {
	    anchor: new BMap.Size(24,24),				//图标的定位点相对于图标左上角的偏移值
	    infoWindowAnchor: new BMap.Size(10, 0)		//信息窗口开启位置相对于图标左上角的偏移值
	});
	function theLocation(){
		
			map.clearOverlays(); 
			var new_point = new BMap.Point(a,b);
			// map.centerAndZoom(new_point,17);
			var marker = new BMap.Marker((new_point),{icon});  // 创建标注
			map.addOverlay(marker);              // 将标注添加到地图中
			map.panTo(new_point);      
			
	}
	theLocation();
	
</script>
