function setupLabel(){var e=".checkbox";var t=e+" input[type='checkbox']";var n="checked";var r="disabled";var i=".radio";var s=i+" input[type='radio']";var o="checked";var u="disabled";if($(t).length){$(e).each(function(){$(this).removeClass(n)});$(t+":checked").each(function(){$(this).parent(e).addClass(n)});$(t+":disabled").each(function(){$(this).parent(e).addClass(r)})}if($(s).length){$(i).each(function(){$(this).removeClass(o)});$(s+":checked").each(function(){$(this).parent(i).addClass(o)});$(s+":disabled").each(function(){$(this).parent(i).addClass(u)})}}$(document).ready(function(){$("html").addClass("has-js");$(".checkbox, .radio").prepend("<span class='icon'></span><span class='icon-to-fade'></span>");$(".checkbox, .radio").click(function(){setupLabel()});setupLabel()})