$(function () {
    $.fn.possuiRegistros = function () {
        if ($("tbody", this).children().length == 0) {
            var rowNum = 0;
            $("thead tr th", this).each(function () {
                rowNum++;
            });
            $("tbody", this).append("<tr><td colspan='" + rowNum + "' style='text-align: center'>Nenhum registro para exibição</td></tr>");
        }
    };
});