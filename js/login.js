$(document).ready(function() {
	(function($) {
		$.extend({
			urlGet: function() {
				var aQuery = window.location.href.split("?"); //取得Get参数  
				var aGET = new Array();
				if(aQuery.length > 1) {
					var aBuf = aQuery[1].split("&");
					for(var i = 0, iLoop = aBuf.length; i < iLoop; i++) {
						var aTmp = aBuf[i].split("="); //分离key与Value  
						aGET[aTmp[0]] = aTmp[1];
					}
				}
				return aGET;
			}
		})
	})(jQuery);
	
	var GET=$.urlGet();
	var u=GET['u'];
	var p=GET['p'];
	
	if (u=="0") {
		alert("账号错误")
	} else if(p=="0"){
		alert("密码错误")
	}else{

	}

})