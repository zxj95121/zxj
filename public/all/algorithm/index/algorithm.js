$('tr[data-id]').click(function () {
    window.location.href = '/algorithm/question/'+$(this).attr('data-id');
})

$('.easy-pie-chart-4').easyPieChart({
    easing: 'easeOutBounce',
    barColor : '#3BAFDA',
    lineWidth: 20,
    onStep: function(from, to, percent) {
        $(this.el).find('.percent').text(Math.round(percent));
    }
});


/**
 * Theme: Velonic Admin Template
 * Author: Coderthemes
 * Code Editors pages
 */

!function($) {
    "use strict";

    var CodeEditor = function() {};

    CodeEditor.prototype.getSelectedRange = function(editor) {
        return { from: editor.getCursor(true), to: editor.getCursor(false) };
    },
        CodeEditor.prototype.autoFormatSelection = function(editor) {
            var range = this.getSelectedRange(editor);
            editor.autoFormatRange(range.from, range.to);
        },
        CodeEditor.prototype.commentSelection = function(isComment, editor) {
            var range = this.getSelectedRange(editor);
            editor.commentRange(isComment, range.from, range.to);
        },
        CodeEditor.prototype.init = function() {
            var $this = this;

            //example 2
            var doc = CodeMirror.fromTextArea(document.getElementById("code2"), {
                mode: {name: "javascript"},
                lineNumbers: true,
                theme: 'ambiance',
                indentUnit: 4
            });
            doc.setValue('<?php' + "\n    //" +
                "作者:"+account+"\n" +
                "    //题目:1003 电话连线\n" +
                "    $str = $_POST['str'];//$_POST['str']获取程序输入，提交时必备，本地测试可注释。\n?>");
            $('#codeBtn').click(function(){
                alert(12);
            })
            //binding controlls
            $('.autoformat').click(function(){
                $this.autoFormatSelection(editor);
            });

            $('.comment').click(function(){
                $this.commentSelection(true, editor);
            });

            $('.uncomment').click(function(){
                $this.commentSelection(false, editor);
            });
        },
        //init
        $.CodeEditor = new CodeEditor, $.CodeEditor.Constructor = CodeEditor
}(window.jQuery),

//initializing
    function($) {
        "use strict";
        $.CodeEditor.init()
    }(window.jQuery);