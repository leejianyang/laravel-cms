/**
 * 封装layer弹层组件
 */
var dialog = {
    // 页面弹出iframe层
    iFrame : function (title, content, width, height, endCallback=null) {
        layer.open({
            type: 2,
            title: title,
            area: [width, height],
            shadeClose: true,
            shade: 0.8,
            content: content,
            end: endCallback
        });
    }
};
