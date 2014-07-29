var province = $("#province"),
	city = $("#city"),
	district = $("#district"),
	area = $("#area"),
	add_btn = $("#add"),
	area = $("#area");

add_btn.click(function() {
	var region_id = 0;
	var region_name = "";
	if (district.val() != 0) {
		region_id = district.val();
		region_name = $("#district option:selected").text();
	} else if (city.val() != 0) {
		region_id = city.val();
		region_name = $("#city option:selected").text();
	} else if (province.val() != 0) {
		region_id = province.val();
		region_name = $("#province option:selected").text();
	} else {
		alert("请选择配送区域");
		return false;
	}
	/*判断区域是否已经添加*/
	var str = area.val();
	var arr;
	if (str !== "") {
		arr = str.split(",");
		for (var i = 0; i < arr.length; i++) {
			if (arr[i] == region_id) {
				alert("该区域已经添加！");
				return false;
			}
		}
	}

	var span = $("<a></a>");
	span.addClass("badge")
		.addClass("badge-info")
		.attr("data", region_id)
		.text(region_name);
	span.bind("click", function() {
		if (confirm("确定要删除该区域吗?")) {
			/*去除数据ID*/
			var id_list = area.val().split(",");

			for (var i = id_list.length - 1; i >= 0; i--) {
				if (id_list[i] == $(this).attr("data")) {


					id_list.splice(i, 1);

				}

			};
			id_list = id_list.join(",");

			area.val(id_list);

			$(this).remove();
		}
		return false;
	});
	$("#regions").append(span);

	/*加入数组*/
	if (str != "") {
		area.val(area.val() + "," + region_id);
	} else {
		area.val(region_id);
	}

});


province.bind("change", function() {

	GetAreaList($(this).val(), city);
});

city.bind("change", function() {
	GetAreaList($(this).val(), district);
});

var init_str = '<option value="0" checked>请选择...</option>';


function GetAreaList(id, obj) {
	if (id == 0) return false;
	$.ajax({
		type: "post",
		cache: false,
		url: "ajax.php?act=get_shipping_region",
		dataType: "json",
		data: "id=" + id,
		success: function(msg) {

			if (msg.error == "ok") {
				obj.html("");
				obj.html(init_str);
				var temp_string = "";
				for (var i = msg.str.length - 1; i >= 0; i--) {
					temp_string = '<option value="' + msg.str[i].id + '">' + msg.str[i].region_name + '</option>';
					obj.html(obj.html() + temp_string);
				};

				if (obj == city) {
					district.html(init_str);
				}

				$("select").select2();
			} else {
				alert(msg.error);
			}
		},
		complete: function(msg) {

		}


	});
}


