define(['jquery', 'bootstrap', 'backend', 'table', 'form'], function ($, undefined, Backend, Table, Form) {

    var Controller = {
        index: function () {
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    index_url: 'mask/index',
                    add_url: 'mask/add',
                    edit_url: 'mask/edit',
                    del_url: 'mask/del',
                    multi_url: 'mask/multi',
                    dragsort_url: 'ajax/weigh',
                    table: 'mask',
                }
            });


            var table = $("#table");
            var tableOptions = {
                url: $.fn.bootstrapTable.defaults.extend.index_url,
                escape: false,
                pk: 'id',
                sortName: 'weigh',
                pagination: false,
                commonSearch: false,
                columns: [
                    [
                        // {checkbox: true},
                        // {field: 'id', title: __('Id')},
                        // {field: 'type', title: __('Type')},
                        // {field: 'name', title: __('Name'), align: 'left'},
                        // {field: 'nickname', title: __('Nickname')},
                        // {field: 'flag', title: __('Flag'), operate: false, formatter: Table.api.formatter.flag},
                        // {field: 'image', title: __('Image'), operate: false, formatter: Table.api.formatter.image},
                        // {field: 'weigh', title: __('Weigh')},
                        // {field: 'status', title: __('Status'), operate: false, formatter: Table.api.formatter.status},
                        // {field: 'operate', title: __('Operate'), table: table, events: Table.api.events.operate, formatter: Table.api.formatter.operate}

                        {checkbox: true},
                        {field: 'id', title: __('Id')},
                        {field: 'logo', title: __('Image'), operate: false, formatter: Table.api.formatter.image},
                        {field: 'status', title: __('Status')},
                        {field: 'createtime', title: __('Create time')},
                        {field: 'updatetime', title: __('Update time')},
                        {field: 'operate', title: __('Operate'), table: table, events: Table.api.events.operate, formatter: Table.api.formatter.operate}
                    ]
                ]
            };
            // 初始化表格
            table.bootstrapTable(tableOptions);

            // 为表格绑定事件
            Table.api.bindevent(table);

            //绑定TAB事件
            $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
                // var options = table.bootstrapTable(tableOptions);
                var typeStr = $(this).attr("href").replace('#','');
                var options = table.bootstrapTable('getOptions');
                options.pageNumber = 1;
                options.queryParams = function (params) {
                    // params.filter = JSON.stringify({type: typeStr});
                    params.type = typeStr;

                    return params;
                };
                table.bootstrapTable('refresh', {});
                return false;

            });

            //必须默认触发shown.bs.tab事件
            // $('ul.nav-tabs li.active a[data-toggle="tab"]').trigger("shown.bs.tab");

        },
        add: function () {
            Form.api.bindevent("form[role=form]", function(data, ret){
                if(ret.code == 1){
                    Fast.api.close()
                }else{
                    return false;
                }
            });
        },
        edit: function () {
            Form.api.bindevent("form[role=form]", function(data, ret){
               if(ret.code == 1){
                   Fast.api.close()
               }else{
                   return false;
               }
            });
        },
        api: {
            bindevent: function () {
                $(document).on("change", "#c-type", function () {
                    $("#c-pid option[data-type='all']").prop("selected", true);
                    $("#c-pid option").removeClass("hide");
                    $("#c-pid option[data-type!='" + $(this).val() + "'][data-type!='all']").addClass("hide");
                    $("#c-pid").selectpicker("refresh");
                });
                Form.api.bindevent($("form[role=form]"));
            }
        }
    };
    return Controller;
});