define(['jquery', 'bootstrap', 'backend', 'table', 'form'], function ($, undefined, Backend, Table, Form) {

    var Controller = {
        index: function () {
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    index_url: 'mydir/carouseimglist/index',
                    add_url: 'mydir/carouseimglist/add',
                    edit_url: 'mydir/carouseimglist/edit',
                    del_url: 'mydir/carouseimglist/del',
                    multi_url: 'mydir/carouseimglist/multi',
                    table: 'carouseimglist',
                }
            });

            var table = $("#table");

            // 初始化表格
            table.bootstrapTable({
                url: $.fn.bootstrapTable.defaults.extend.index_url,
                pk: 'id',
                sortName: 'id',
                columns: [
                    [
                        {checkbox: true},
                        {field: 'id', title: __('Id')},
                        {field: 'name', title: __('Name')},
                        // {field: 'path', title: __('Path')},
                        {field: 'path', title: __('Path'), formatter: Table.api.formatter.images},
                        {field: 'deleted', title: __('Deleted')},
                        {field: 'updatetime', title: __('Updatetime')},
                        {field: 'createtime', title: __('Createtime')},
                        {field: 'des1', title: __('Des1')},
                        {field: 'des2', title: __('Des2')},
                        {field: 'title', title: __('Title')},
                        {field: 'hreftitle', title: __('Hreftitle')},
                        {field: 'hrefa', title: __('Hrefa')},
                        {field: 'name2', title: __('Name2')},
                        {field: 'path2', title: __('Path2')},
                        {field: 'operate', title: __('Operate'), table: table, events: Table.api.events.operate, formatter: Table.api.formatter.operate}
                    ]
                ]
            });

            // 为表格绑定事件
            Table.api.bindevent(table);
        },
        add: function () {
            Controller.api.bindevent();
        },
        edit: function () {
            Controller.api.bindevent();
        },
        api: {
            bindevent: function () {
                Form.api.bindevent($("form[role=form]"));
            }
        }
    };
    return Controller;
});