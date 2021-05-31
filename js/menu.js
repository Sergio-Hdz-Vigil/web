/*eslint-env browser*/
var btnMenu = document.getElementById('btnmenu');
var nav = document.getElementById('nave');

document.getElementById('btnmenu').addEventListener('click', function () {
    "use strict";
    document.getElementById('nave').classList.toggle('mostrar');
});