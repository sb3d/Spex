<?php

function spex() {

	return wire('modules')->get('Spex');
}

/**
 * Identical to $spex->includeScript();
 */
function includeScripts() {

	return call_user_func_array(array(spex(), __METHOD__), func_get_args());
}

function setLayout() {
	
	return call_user_func_array(array(spex(), __METHOD__), func_get_args());
}

function partial() {

	return call_user_func_array(array(spex(), __METHOD__), func_get_args());	
}

function addTemplateVar() {

	return call_user_func_array(array(spex(), __METHOD__), func_get_args());
}

function includeHeadScripts() {

	return call_user_func_array(array(spex(), __METHOD__), func_get_args());
}

function addScript() {

	return call_user_func_array(array(spex(), __METHOD__), func_get_args());
}

function addStyle() {

	return call_user_func_array(array(spex(), __METHOD__), func_get_args());	
}

function includeStyles() {

	return call_user_func_array(array(spex(), __METHOD__), func_get_args());	
}

function includeDocReady() {

	return call_user_func_array(array(spex(), __METHOD__), func_get_args());
}

function docReady() {

	return call_user_func_array(array(spex(), __METHOD__), func_get_args());
}

function hasSlot() {

	return call_user_func_array(array(spex(), __METHOD__), func_get_args());
}

function slot() {

	return call_user_func_array(array(spex(), __METHOD__), func_get_args());
}

function catpureSlot() {

	return call_user_func_array(array(spex(), __METHOD__), func_get_args());
}

function addImage() {

	return call_user_func_array(array(spex(), __METHOD__), func_get_args());
}

function lateLoad() {

	return call_user_func_array(array(spex(), __METHOD__), func_get_args());
}