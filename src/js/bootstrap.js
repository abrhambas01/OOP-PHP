import Vue from 'vue';
import $ from 'jquery';

$(function(){
	console.log("JQuery already runs..");

	$("#registerAccount").on('click',function(evt){
		console.log(evt);
	});


	$("#loginForm").hide();

});
