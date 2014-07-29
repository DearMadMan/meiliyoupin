function area_init() {
	
	$.ajax({
		type: "post",
		cache: false,
		url: "ajax.php?act=shipping_area_region_init",
		dataType: "json",
		data: "id=" + $("#shipping_area_id").val(),
		success: function(msg) {

			if (msg.error == "ok") {

				for (var i = msg.str.length - 1; i >= 0; i--) {

					var span = $("<a></a>");
					span.addClass("badge")
						.addClass("badge-info")
						.attr("data", msg.str[i].region_id)
						.text(msg.str[i].region_name);
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

				}

			} else {
				alert(msg.error);
			}
		},
		complete: function(msg) {
			

		}



	});
}



area_init();