<?php
/********New version**********/


add_filter( 'vc_iconpicker-type-fontawesome', 'virgo_tweak_vc_iconpicker_type_fontawesome2' );


function virgo_tweak_vc_iconpicker_type_fontawesome2( $icons ) {
	// Add custom icons to array
	$icons[esc_html__( 'virgo et line icons', 'virgo' )] = array(
		array( " icon ion-alert" => esc_html__( "alert", "virgo" ) ),
		array( " icon ion-alert-circled" => esc_html__( "alert circled", "virgo" ) ),
		array( " icon ion-android-add" => esc_html__( "android add", "virgo" ) ),
		array( " icon ion-android-add-circle" => esc_html__( "android add circle", "virgo" ) ),
		array( " icon ion-android-alarm-clock" => esc_html__( "android alarm clock", "virgo" ) ),
		array( " icon ion-android-alert" => esc_html__( "android alert", "virgo" ) ),
		array( " icon ion-android-apps" => esc_html__( "android apps", "virgo" ) ),
		array( " icon ion-android-archive" => esc_html__( "android archive", "virgo" ) ),
		array( " icon ion-android-arrow-back" => esc_html__( "android arrow back", "virgo" ) ),
		array( " icon ion-android-arrow-down" => esc_html__( "android arrow down", "virgo" ) ),
		array( " icon ion-android-arrow-dropdown" => esc_html__( "android arrow dropdown", "virgo" ) ),
		array( " icon ion-android-arrow-dropdown-circle" => esc_html__( "android arrow dropdown circle", "virgo" ) ),
		array( " icon ion-android-arrow-dropleft" => esc_html__( "android arrow dropleft", "virgo" ) ),
		array( " icon ion-android-arrow-dropleft-circle" => esc_html__( "android arrow dropleft circle", "virgo" ) ),
		array( " icon ion-android-arrow-dropright" => esc_html__( "android arrow dropright", "virgo" ) ),
		array( " icon ion-android-arrow-dropright-circle" => esc_html__( "android arrow dropright circle", "virgo" ) ),
		array( " icon ion-android-arrow-dropup" => esc_html__( "android arrow dropup", "virgo" ) ),
		array( " icon ion-android-arrow-dropup-circle" => esc_html__( "android arrow dropup circle", "virgo" ) ),
		array( " icon ion-android-arrow-forward" => esc_html__( "android arrow forward", "virgo" ) ),
		array( " icon ion-android-arrow-up" => esc_html__( "android arrow up", "virgo" ) ),
		array( " icon ion-android-attach" => esc_html__( "android attach", "virgo" ) ),
		array( " icon ion-android-bar" => esc_html__( "android bar", "virgo" ) ),
		array( " icon ion-android-bicycle" => esc_html__( "android bicycle", "virgo" ) ),
		array( " icon ion-android-boat" => esc_html__( "android boat", "virgo" ) ),
		array( " icon ion-android-bookmark" => esc_html__( "android bookmark", "virgo" ) ),
		array( " icon ion-android-bulb" => esc_html__( "android bulb", "virgo" ) ),
		array( " icon ion-android-bus" => esc_html__( "android bus", "virgo" ) ),
		array( " icon ion-android-calendar" => esc_html__( "android calendar", "virgo" ) ),
		array( " icon ion-android-call" => esc_html__( "android call", "virgo" ) ),
		array( " icon ion-android-camera" => esc_html__( "android camera", "virgo" ) ),
		array( " icon ion-android-cancel" => esc_html__( "android cancel", "virgo" ) ),
		array( " icon ion-android-car" => esc_html__( "android car", "virgo" ) ),
		array( " icon ion-android-cart" => esc_html__( "android cart", "virgo" ) ),
		array( " icon ion-android-chat" => esc_html__( "android chat", "virgo" ) ),
		array( " icon ion-android-checkbox" => esc_html__( "android checkbox", "virgo" ) ),
		array( " icon ion-android-checkbox-blank" => esc_html__( "android checkbox blank", "virgo" ) ),
		array( " icon ion-android-checkbox-outline" => esc_html__( "android checkbox outline", "virgo" ) ),
		array( " icon ion-android-checkbox-outline-blank" => esc_html__( "android checkbox outline blank", "virgo" ) ),
		array( " icon ion-android-checkmark-circle" => esc_html__( "android checkmark circle", "virgo" ) ),
		array( " icon ion-android-clipboard" => esc_html__( "android clipboard", "virgo" ) ),
		array( " icon ion-android-close" => esc_html__( "android close", "virgo" ) ),
		array( " icon ion-android-cloud" => esc_html__( "android cloud", "virgo" ) ),
		array( " icon ion-android-cloud-circle" => esc_html__( "android cloud circle", "virgo" ) ),
		array( " icon ion-android-cloud-done" => esc_html__( "android cloud done", "virgo" ) ),
		array( " icon ion-android-cloud-outline" => esc_html__( "android cloud outline", "virgo" ) ),
		array( " icon ion-android-color-palette" => esc_html__( "android color palette", "virgo" ) ),
		array( " icon ion-android-compass" => esc_html__( "android compass", "virgo" ) ),
		array( " icon ion-android-contact" => esc_html__( "android contact", "virgo" ) ),
		array( " icon ion-android-contacts" => esc_html__( "android contacts", "virgo" ) ),
		array( " icon ion-android-contract" => esc_html__( "android contract", "virgo" ) ),
		array( " icon ion-android-create" => esc_html__( "android create", "virgo" ) ),
		array( " icon ion-android-delete" => esc_html__( "android delete", "virgo" ) ),
		array( " icon ion-android-desktop" => esc_html__( "android desktop", "virgo" ) ),
		array( " icon ion-android-document" => esc_html__( "android document", "virgo" ) ),
		array( " icon ion-android-done" => esc_html__( "android done", "virgo" ) ),
		array( " icon ion-android-done-all" => esc_html__( "android done all", "virgo" ) ),
		array( " icon ion-android-download" => esc_html__( "android download", "virgo" ) ),
		array( " icon ion-android-drafts" => esc_html__( "android drafts", "virgo" ) ),
		array( " icon ion-android-exit" => esc_html__( "android exit", "virgo" ) ),
		array( " icon ion-android-expand" => esc_html__( "android expand", "virgo" ) ),
		array( " icon ion-android-favorite" => esc_html__( "android favorite", "virgo" ) ),
		array( " icon ion-android-favorite-outline" => esc_html__( "android favorite outline", "virgo" ) ),
		array( " icon ion-android-film" => esc_html__( "android film", "virgo" ) ),
		array( " icon ion-android-folder" => esc_html__( "android folder", "virgo" ) ),
		array( " icon ion-android-folder-open" => esc_html__( "android folder open", "virgo" ) ),
		array( " icon ion-android-funnel" => esc_html__( "android funnel", "virgo" ) ),
		array( " icon ion-android-globe" => esc_html__( "android globe", "virgo" ) ),
		array( " icon ion-android-hand" => esc_html__( "android hand", "virgo" ) ),
		array( " icon ion-android-hangout" => esc_html__( "android hangout", "virgo" ) ),
		array( " icon ion-android-happy" => esc_html__( "android happy", "virgo" ) ),
		array( " icon ion-android-home" => esc_html__( "android home", "virgo" ) ),
		array( " icon ion-android-image" => esc_html__( "android image", "virgo" ) ),
		array( " icon ion-android-laptop" => esc_html__( "android laptop", "virgo" ) ),
		array( " icon ion-android-list" => esc_html__( "android list", "virgo" ) ),
		array( " icon ion-android-locate" => esc_html__( "android locate", "virgo" ) ),
		array( " icon ion-android-lock" => esc_html__( "android lock", "virgo" ) ),
		array( " icon ion-android-mail" => esc_html__( "android mail", "virgo" ) ),
		array( " icon ion-android-map" => esc_html__( "android map", "virgo" ) ),
		array( " icon ion-android-menu" => esc_html__( "android menu", "virgo" ) ),
		array( " icon ion-android-microphone" => esc_html__( "android microphone", "virgo" ) ),
		array( " icon ion-android-microphone-off" => esc_html__( "android microphone off", "virgo" ) ),
		array( " icon ion-android-more-horizontal" => esc_html__( "android more horizontal", "virgo" ) ),
		array( " icon ion-android-more-vertical" => esc_html__( "android more vertical", "virgo" ) ),
		array( " icon ion-android-navigate" => esc_html__( "android navigate", "virgo" ) ),
		array( " icon ion-android-notifications" => esc_html__( "android notifications", "virgo" ) ),
		array( " icon ion-android-notifications-none" => esc_html__( "android notifications none", "virgo" ) ),
		array( " icon ion-android-notifications-off" => esc_html__( "android notifications off", "virgo" ) ),
		array( " icon ion-android-open" => esc_html__( "android open", "virgo" ) ),
		array( " icon ion-android-options" => esc_html__( "android options", "virgo" ) ),
		array( " icon ion-android-people" => esc_html__( "android people", "virgo" ) ),
		array( " icon ion-android-person" => esc_html__( "android person", "virgo" ) ),
		array( " icon ion-android-person-add" => esc_html__( "android person add", "virgo" ) ),
		array( " icon ion-android-phone-landscape" => esc_html__( "android phone landscape", "virgo" ) ),
		array( " icon ion-android-phone-portrait" => esc_html__( "android phone portrait", "virgo" ) ),
		array( " icon ion-android-pin" => esc_html__( "android pin", "virgo" ) ),
		array( " icon ion-android-plane" => esc_html__( "android plane", "virgo" ) ),
		array( " icon ion-android-playstore" => esc_html__( "android playstore", "virgo" ) ),
		array( " icon ion-android-print" => esc_html__( "android print", "virgo" ) ),
		array( " icon ion-android-radio-button-off" => esc_html__( "android radio button off", "virgo" ) ),
		array( " icon ion-android-radio-button-on" => esc_html__( "android radio button on", "virgo" ) ),
		array( " icon ion-android-refresh" => esc_html__( "android refresh", "virgo" ) ),
		array( " icon ion-android-remove" => esc_html__( "android remove", "virgo" ) ),
		array( " icon ion-android-remove-circle" => esc_html__( "android remove circle", "virgo" ) ),
		array( " icon ion-android-restaurant" => esc_html__( "android restaurant", "virgo" ) ),
		array( " icon ion-android-sad" => esc_html__( "android sad", "virgo" ) ),
		array( " icon ion-android-search" => esc_html__( "android search", "virgo" ) ),
		array( " icon ion-android-send" => esc_html__( "android send", "virgo" ) ),
		array( " icon ion-android-settings" => esc_html__( "android settings", "virgo" ) ),
		array( " icon ion-android-share" => esc_html__( "android share", "virgo" ) ),
		array( " icon ion-android-share-alt" => esc_html__( "android share alt", "virgo" ) ),
		array( " icon ion-android-star" => esc_html__( "android star", "virgo" ) ),
		array( " icon ion-android-star-half" => esc_html__( "android star half", "virgo" ) ),
		array( " icon ion-android-star-outline" => esc_html__( "android star outline", "virgo" ) ),
		array( " icon ion-android-stopwatch" => esc_html__( "android stopwatch", "virgo" ) ),
		array( " icon ion-android-subway" => esc_html__( "android subway", "virgo" ) ),
		array( " icon ion-android-sunny" => esc_html__( "android sunny", "virgo" ) ),
		array( " icon ion-android-sync" => esc_html__( "android sync", "virgo" ) ),
		array( " icon ion-android-textsms" => esc_html__( "android textsms", "virgo" ) ),
		array( " icon ion-android-time" => esc_html__( "android time", "virgo" ) ),
		array( " icon ion-android-train" => esc_html__( "android train", "virgo" ) ),
		array( " icon ion-android-unlock" => esc_html__( "android unlock", "virgo" ) ),
		array( " icon ion-android-upload" => esc_html__( "android upload", "virgo" ) ),
		array( " icon ion-android-volume-down" => esc_html__( "android volume down", "virgo" ) ),
		array( " icon ion-android-volume-mute" => esc_html__( "android volume mute", "virgo" ) ),
		array( " icon ion-android-volume-off" => esc_html__( "android volume off", "virgo" ) ),
		array( " icon ion-android-volume-up" => esc_html__( "android volume up", "virgo" ) ),
		array( " icon ion-android-walk" => esc_html__( "android walk", "virgo" ) ),
		array( " icon ion-android-warning" => esc_html__( "android warning", "virgo" ) ),
		array( " icon ion-android-watch" => esc_html__( "android watch", "virgo" ) ),
		array( " icon ion-android-wifi" => esc_html__( "android wifi", "virgo" ) ),
		array( " icon ion-aperture" => esc_html__( "aperture", "virgo" ) ),
		array( " icon ion-archive" => esc_html__( "archive", "virgo" ) ),
		array( " icon ion-arrow-down-a" => esc_html__( "arrow down a", "virgo" ) ),
		array( " icon ion-arrow-down-b" => esc_html__( "arrow down b", "virgo" ) ),
		array( " icon ion-arrow-down-c" => esc_html__( "arrow down c", "virgo" ) ),
		array( " icon ion-arrow-expand" => esc_html__( "arrow expand", "virgo" ) ),
		array( " icon ion-arrow-graph-down-left" => esc_html__( "arrow graph down left", "virgo" ) ),
		array( " icon ion-arrow-graph-down-right" => esc_html__( "arrow graph down right", "virgo" ) ),
		array( " icon ion-arrow-graph-up-left" => esc_html__( "arrow graph up left", "virgo" ) ),
		array( " icon ion-arrow-graph-up-right" => esc_html__( "arrow graph up right", "virgo" ) ),
		array( " icon ion-arrow-left-a" => esc_html__( "arrow left a", "virgo" ) ),
		array( " icon ion-arrow-left-b" => esc_html__( "arrow left b", "virgo" ) ),
		array( " icon ion-arrow-left-c" => esc_html__( "arrow left c", "virgo" ) ),
		array( " icon ion-arrow-move" => esc_html__( "arrow move", "virgo" ) ),
		array( " icon ion-arrow-resize" => esc_html__( "arrow resize", "virgo" ) ),
		array( " icon ion-arrow-return-left" => esc_html__( "arrow return left", "virgo" ) ),
		array( " icon ion-arrow-return-right" => esc_html__( "arrow return right", "virgo" ) ),
		array( " icon ion-arrow-right-a" => esc_html__( "arrow right a", "virgo" ) ),
		array( " icon ion-arrow-right-b" => esc_html__( "arrow right b", "virgo" ) ),
		array( " icon ion-arrow-right-c" => esc_html__( "arrow right c", "virgo" ) ),
		array( " icon ion-arrow-shrink" => esc_html__( "arrow shrink", "virgo" ) ),
		array( " icon ion-arrow-swap" => esc_html__( "arrow swap", "virgo" ) ),
		array( " icon ion-arrow-up-a" => esc_html__( "arrow up a", "virgo" ) ),
		array( " icon ion-arrow-up-b" => esc_html__( "arrow up b", "virgo" ) ),
		array( " icon ion-arrow-up-c" => esc_html__( "arrow up c", "virgo" ) ),
		array( " icon ion-asterisk" => esc_html__( "asterisk", "virgo" ) ),
		array( " icon ion-at" => esc_html__( "at", "virgo" ) ),
		array( " icon ion-backspace" => esc_html__( "backspace", "virgo" ) ),
		array( " icon ion-backspace-outline" => esc_html__( "backspace outline", "virgo" ) ),
		array( " icon ion-bag" => esc_html__( "bag", "virgo" ) ),
		array( " icon ion-battery-charging" => esc_html__( "battery charging", "virgo" ) ),
		array( " icon ion-battery-empty" => esc_html__( "battery empty", "virgo" ) ),
		array( " icon ion-battery-full" => esc_html__( "battery full", "virgo" ) ),
		array( " icon ion-battery-half" => esc_html__( "battery half", "virgo" ) ),
		array( " icon ion-battery-low" => esc_html__( "battery low", "virgo" ) ),
		array( " icon ion-beaker" => esc_html__( "beaker", "virgo" ) ),
		array( " icon ion-beer" => esc_html__( "beer", "virgo" ) ),
		array( " icon ion-bluetooth" => esc_html__( "bluetooth", "virgo" ) ),
		array( " icon ion-bonfire" => esc_html__( "bonfire", "virgo" ) ),
		array( " icon ion-bookmark" => esc_html__( "bookmark", "virgo" ) ),
		array( " icon ion-bowtie" => esc_html__( "bowtie", "virgo" ) ),
		array( " icon ion-briefcase" => esc_html__( "briefcase", "virgo" ) ),
		array( " icon ion-bug" => esc_html__( "bug", "virgo" ) ),
		array( " icon ion-calculator" => esc_html__( "calculator", "virgo" ) ),
		array( " icon ion-calendar" => esc_html__( "calendar", "virgo" ) ),
		array( " icon ion-camera" => esc_html__( "camera", "virgo" ) ),
		array( " icon ion-card" => esc_html__( "card", "virgo" ) ),
		array( " icon ion-cash" => esc_html__( "cash", "virgo" ) ),
		array( " icon ion-chatbox" => esc_html__( "chatbox", "virgo" ) ),
		array( " icon ion-chatbox-working" => esc_html__( "chatbox working", "virgo" ) ),
		array( " icon ion-chatboxes" => esc_html__( "chatboxes", "virgo" ) ),
		array( " icon ion-chatbubble" => esc_html__( "chatbubble", "virgo" ) ),
		array( " icon ion-chatbubble-working" => esc_html__( "chatbubble working", "virgo" ) ),
		array( " icon ion-chatbubbles" => esc_html__( "chatbubbles", "virgo" ) ),
		array( " icon ion-checkmark" => esc_html__( "checkmark", "virgo" ) ),
		array( " icon ion-checkmark-circled" => esc_html__( "checkmark circled", "virgo" ) ),
		array( " icon ion-checkmark-round" => esc_html__( "checkmark round", "virgo" ) ),
		array( " icon ion-chevron-down" => esc_html__( "chevron down", "virgo" ) ),
		array( " icon ion-chevron-left" => esc_html__( "chevron left", "virgo" ) ),
		array( " icon ion-chevron-right" => esc_html__( "chevron right", "virgo" ) ),
		array( " icon ion-chevron-up" => esc_html__( "chevron up", "virgo" ) ),
		array( " icon ion-clipboard" => esc_html__( "clipboard", "virgo" ) ),
		array( " icon ion-clock" => esc_html__( "clock", "virgo" ) ),
		array( " icon ion-close" => esc_html__( "close", "virgo" ) ),
		array( " icon ion-close-circled" => esc_html__( "close circled", "virgo" ) ),
		array( " icon ion-close-round" => esc_html__( "close round", "virgo" ) ),
		array( " icon ion-closed-captioning" => esc_html__( "closed captioning", "virgo" ) ),
		array( " icon ion-cloud" => esc_html__( "cloud", "virgo" ) ),
		array( " icon ion-code" => esc_html__( "code", "virgo" ) ),
		array( " icon ion-code-download" => esc_html__( "code download", "virgo" ) ),
		array( " icon ion-code-working" => esc_html__( "code working", "virgo" ) ),
		array( " icon ion-coffee" => esc_html__( "coffee", "virgo" ) ),
		array( " icon ion-compass" => esc_html__( "compass", "virgo" ) ),
		array( " icon ion-compose" => esc_html__( "compose", "virgo" ) ),
		array( " icon ion-connection-bars" => esc_html__( "connection bars", "virgo" ) ),
		array( " icon ion-contrast" => esc_html__( "contrast", "virgo" ) ),
		array( " icon ion-crop" => esc_html__( "crop", "virgo" ) ),
		array( " icon ion-cube" => esc_html__( "cube", "virgo" ) ),
		array( " icon ion-disc" => esc_html__( "disc", "virgo" ) ),
		array( " icon ion-document" => esc_html__( "document", "virgo" ) ),
		array( " icon ion-document-text" => esc_html__( "document text", "virgo" ) ),
		array( " icon ion-drag" => esc_html__( "drag", "virgo" ) ),
		array( " icon ion-earth" => esc_html__( "earth", "virgo" ) ),
		array( " icon ion-easel" => esc_html__( "easel", "virgo" ) ),
		array( " icon ion-edit" => esc_html__( "edit", "virgo" ) ),
		array( " icon ion-egg" => esc_html__( "egg", "virgo" ) ),
		array( " icon ion-eject" => esc_html__( "eject", "virgo" ) ),
		array( " icon ion-email" => esc_html__( "email", "virgo" ) ),
		array( " icon ion-email-unread" => esc_html__( "email unread", "virgo" ) ),
		array( " icon ion-erlenmeyer-flask" => esc_html__( "erlenmeyer flask", "virgo" ) ),
		array( " icon ion-erlenmeyer-flask-bubbles" => esc_html__( "erlenmeyer flask bubbles", "virgo" ) ),
		array( " icon ion-eye" => esc_html__( "eye", "virgo" ) ),
		array( " icon ion-eye-disabled" => esc_html__( "eye disabled", "virgo" ) ),
		array( " icon ion-female" => esc_html__( "female", "virgo" ) ),
		array( " icon ion-filing" => esc_html__( "filing", "virgo" ) ),
		array( " icon ion-film-marker" => esc_html__( "film marker", "virgo" ) ),
		array( " icon ion-fireball" => esc_html__( "fireball", "virgo" ) ),
		array( " icon ion-flag" => esc_html__( "flag", "virgo" ) ),
		array( " icon ion-flame" => esc_html__( "flame", "virgo" ) ),
		array( " icon ion-flash" => esc_html__( "flash", "virgo" ) ),
		array( " icon ion-flash-off" => esc_html__( "flash off", "virgo" ) ),
		array( " icon ion-folder" => esc_html__( "folder", "virgo" ) ),
		array( " icon ion-fork" => esc_html__( "fork", "virgo" ) ),
		array( " icon ion-fork-repo" => esc_html__( "fork repo", "virgo" ) ),
		array( " icon ion-forward" => esc_html__( "forward", "virgo" ) ),
		array( " icon ion-funnel" => esc_html__( "funnel", "virgo" ) ),
		array( " icon ion-gear-a" => esc_html__( "gear a", "virgo" ) ),
		array( " icon ion-gear-b" => esc_html__( "gear b", "virgo" ) ),
		array( " icon ion-grid" => esc_html__( "grid", "virgo" ) ),
		array( " icon ion-hammer" => esc_html__( "hammer", "virgo" ) ),
		array( " icon ion-happy" => esc_html__( "happy", "virgo" ) ),
		array( " icon ion-happy-outline" => esc_html__( "happy outline", "virgo" ) ),
		array( " icon ion-headphone" => esc_html__( "headphone", "virgo" ) ),
		array( " icon ion-heart" => esc_html__( "heart", "virgo" ) ),
		array( " icon ion-heart-broken" => esc_html__( "heart broken", "virgo" ) ),
		array( " icon ion-help" => esc_html__( "help", "virgo" ) ),
		array( " icon ion-help-buoy" => esc_html__( "help buoy", "virgo" ) ),
		array( " icon ion-help-circled" => esc_html__( "help circled", "virgo" ) ),
		array( " icon ion-home" => esc_html__( "home", "virgo" ) ),
		array( " icon ion-icecream" => esc_html__( "icecream", "virgo" ) ),
		array( " icon ion-image" => esc_html__( "image", "virgo" ) ),
		array( " icon ion-images" => esc_html__( "images", "virgo" ) ),
		array( " icon ion-information" => esc_html__( "information", "virgo" ) ),
		array( " icon ion-information-circled" => esc_html__( "information circled", "virgo" ) ),
		array( " icon ion-ionic" => esc_html__( "ionic", "virgo" ) ),
		array( " icon ion-ios-alarm" => esc_html__( "ios alarm", "virgo" ) ),
		array( " icon ion-ios-alarm-outline" => esc_html__( "ios alarm outline", "virgo" ) ),
		array( " icon ion-ios-albums" => esc_html__( "ios albums", "virgo" ) ),
		array( " icon ion-ios-albums-outline" => esc_html__( "ios albums outline", "virgo" ) ),
		array( " icon ion-ios-americanfootball" => esc_html__( "ios americanfootball", "virgo" ) ),
		array( " icon ion-ios-americanfootball-outline" => esc_html__( "ios americanfootball outline", "virgo" ) ),
		array( " icon ion-ios-analytics" => esc_html__( "ios analytics", "virgo" ) ),
		array( " icon ion-ios-analytics-outline" => esc_html__( "ios analytics outline", "virgo" ) ),
		array( " icon ion-ios-arrow-back" => esc_html__( "ios arrow back", "virgo" ) ),
		array( " icon ion-ios-arrow-down" => esc_html__( "ios arrow down", "virgo" ) ),
		array( " icon ion-ios-arrow-forward" => esc_html__( "ios arrow forward", "virgo" ) ),
		array( " icon ion-ios-arrow-left" => esc_html__( "ios arrow left", "virgo" ) ),
		array( " icon ion-ios-arrow-right" => esc_html__( "ios arrow right", "virgo" ) ),
		array( " icon ion-ios-arrow-thin-down" => esc_html__( "ios arrow thin down", "virgo" ) ),
		array( " icon ion-ios-arrow-thin-left" => esc_html__( "ios arrow thin left", "virgo" ) ),
		array( " icon ion-ios-arrow-thin-right" => esc_html__( "ios arrow thin right", "virgo" ) ),
		array( " icon ion-ios-arrow-thin-up" => esc_html__( "ios arrow thin up", "virgo" ) ),
		array( " icon ion-ios-arrow-up" => esc_html__( "ios arrow up", "virgo" ) ),
		array( " icon ion-ios-at" => esc_html__( "ios at", "virgo" ) ),
		array( " icon ion-ios-at-outline" => esc_html__( "ios at outline", "virgo" ) ),
		array( " icon ion-ios-barcode" => esc_html__( "ios barcode", "virgo" ) ),
		array( " icon ion-ios-barcode-outline" => esc_html__( "ios barcode outline", "virgo" ) ),
		array( " icon ion-ios-baseball" => esc_html__( "ios baseball", "virgo" ) ),
		array( " icon ion-ios-baseball-outline" => esc_html__( "ios baseball outline", "virgo" ) ),
		array( " icon ion-ios-basketball" => esc_html__( "ios basketball", "virgo" ) ),
		array( " icon ion-ios-basketball-outline" => esc_html__( "ios basketball outline", "virgo" ) ),
		array( " icon ion-ios-bell" => esc_html__( "ios bell", "virgo" ) ),
		array( " icon ion-ios-bell-outline" => esc_html__( "ios bell outline", "virgo" ) ),
		array( " icon ion-ios-body" => esc_html__( "ios body", "virgo" ) ),
		array( " icon ion-ios-body-outline" => esc_html__( "ios body outline", "virgo" ) ),
		array( " icon ion-ios-bolt" => esc_html__( "ios bolt", "virgo" ) ),
		array( " icon ion-ios-bolt-outline" => esc_html__( "ios bolt outline", "virgo" ) ),
		array( " icon ion-ios-book" => esc_html__( "ios book", "virgo" ) ),
		array( " icon ion-ios-book-outline" => esc_html__( "ios book outline", "virgo" ) ),
		array( " icon ion-ios-bookmarks" => esc_html__( "ios bookmarks", "virgo" ) ),
		array( " icon ion-ios-bookmarks-outline" => esc_html__( "ios bookmarks outline", "virgo" ) ),
		array( " icon ion-ios-box" => esc_html__( "ios box", "virgo" ) ),
		array( " icon ion-ios-box-outline" => esc_html__( "ios box outline", "virgo" ) ),
		array( " icon ion-ios-briefcase" => esc_html__( "ios briefcase", "virgo" ) ),
		array( " icon ion-ios-briefcase-outline" => esc_html__( "ios briefcase outline", "virgo" ) ),
		array( " icon ion-ios-browsers" => esc_html__( "ios browsers", "virgo" ) ),
		array( " icon ion-ios-browsers-outline" => esc_html__( "ios browsers outline", "virgo" ) ),
		array( " icon ion-ios-calculator" => esc_html__( "ios calculator", "virgo" ) ),
		array( " icon ion-ios-calculator-outline" => esc_html__( "ios calculator outline", "virgo" ) ),
		array( " icon ion-ios-calendar" => esc_html__( "ios calendar", "virgo" ) ),
		array( " icon ion-ios-calendar-outline" => esc_html__( "ios calendar outline", "virgo" ) ),
		array( " icon ion-ios-camera" => esc_html__( "ios camera", "virgo" ) ),
		array( " icon ion-ios-camera-outline" => esc_html__( "ios camera outline", "virgo" ) ),
		array( " icon ion-ios-cart" => esc_html__( "ios cart", "virgo" ) ),
		array( " icon ion-ios-cart-outline" => esc_html__( "ios cart outline", "virgo" ) ),
		array( " icon ion-ios-chatboxes" => esc_html__( "ios chatboxes", "virgo" ) ),
		array( " icon ion-ios-chatboxes-outline" => esc_html__( "ios chatboxes outline", "virgo" ) ),
		array( " icon ion-ios-chatbubble" => esc_html__( "ios chatbubble", "virgo" ) ),
		array( " icon ion-ios-chatbubble-outline" => esc_html__( "ios chatbubble outline", "virgo" ) ),
		array( " icon ion-ios-checkmark" => esc_html__( "ios checkmark", "virgo" ) ),
		array( " icon ion-ios-checkmark-empty" => esc_html__( "ios checkmark empty", "virgo" ) ),
		array( " icon ion-ios-checkmark-outline" => esc_html__( "ios checkmark outline", "virgo" ) ),
		array( " icon ion-ios-circle-filled" => esc_html__( "ios circle filled", "virgo" ) ),
		array( " icon ion-ios-circle-outline" => esc_html__( "ios circle outline", "virgo" ) ),
		array( " icon ion-ios-clock" => esc_html__( "ios clock", "virgo" ) ),
		array( " icon ion-ios-clock-outline" => esc_html__( "ios clock outline", "virgo" ) ),
		array( " icon ion-ios-close" => esc_html__( "ios close", "virgo" ) ),
		array( " icon ion-ios-close-empty" => esc_html__( "ios close empty", "virgo" ) ),
		array( " icon ion-ios-close-outline" => esc_html__( "ios close outline", "virgo" ) ),
		array( " icon ion-ios-cloud" => esc_html__( "ios cloud", "virgo" ) ),
		array( " icon ion-ios-cloud-download" => esc_html__( "ios cloud download", "virgo" ) ),
		array( " icon ion-ios-cloud-download-outline" => esc_html__( "ios cloud download outline", "virgo" ) ),
		array( " icon ion-ios-cloud-outline" => esc_html__( "ios cloud outline", "virgo" ) ),
		array( " icon ion-ios-cloud-upload" => esc_html__( "ios cloud upload", "virgo" ) ),
		array( " icon ion-ios-cloud-upload-outline" => esc_html__( "ios cloud upload outline", "virgo" ) ),
		array( " icon ion-ios-cloudy" => esc_html__( "ios cloudy", "virgo" ) ),
		array( " icon ion-ios-cloudy-night" => esc_html__( "ios cloudy night", "virgo" ) ),
		array( " icon ion-ios-cloudy-night-outline" => esc_html__( "ios cloudy night outline", "virgo" ) ),
		array( " icon ion-ios-cloudy-outline" => esc_html__( "ios cloudy outline", "virgo" ) ),
		array( " icon ion-ios-cog" => esc_html__( "ios cog", "virgo" ) ),
		array( " icon ion-ios-cog-outline" => esc_html__( "ios cog outline", "virgo" ) ),
		array( " icon ion-ios-color-filter" => esc_html__( "ios color filter", "virgo" ) ),
		array( " icon ion-ios-color-filter-outline" => esc_html__( "ios color filter outline", "virgo" ) ),
		array( " icon ion-ios-color-wand" => esc_html__( "ios color wand", "virgo" ) ),
		array( " icon ion-ios-color-wand-outline" => esc_html__( "ios color wand outline", "virgo" ) ),
		array( " icon ion-ios-compose" => esc_html__( "ios compose", "virgo" ) ),
		array( " icon ion-ios-compose-outline" => esc_html__( "ios compose outline", "virgo" ) ),
		array( " icon ion-ios-contact" => esc_html__( "ios contact", "virgo" ) ),
		array( " icon ion-ios-contact-outline" => esc_html__( "ios contact outline", "virgo" ) ),
		array( " icon ion-ios-copy" => esc_html__( "ios copy", "virgo" ) ),
		array( " icon ion-ios-copy-outline" => esc_html__( "ios copy outline", "virgo" ) ),
		array( " icon ion-ios-crop" => esc_html__( "ios crop", "virgo" ) ),
		array( " icon ion-ios-crop-strong" => esc_html__( "ios crop strong", "virgo" ) ),
		array( " icon ion-ios-download" => esc_html__( "ios download", "virgo" ) ),
		array( " icon ion-ios-download-outline" => esc_html__( "ios download outline", "virgo" ) ),
		array( " icon ion-ios-drag" => esc_html__( "ios drag", "virgo" ) ),
		array( " icon ion-ios-email" => esc_html__( "ios email", "virgo" ) ),
		array( " icon ion-ios-email-outline" => esc_html__( "ios email outline", "virgo" ) ),
		array( " icon ion-ios-eye" => esc_html__( "ios eye", "virgo" ) ),
		array( " icon ion-ios-eye-outline" => esc_html__( "ios eye outline", "virgo" ) ),
		array( " icon ion-ios-fastforward" => esc_html__( "ios fastforward", "virgo" ) ),
		array( " icon ion-ios-fastforward-outline" => esc_html__( "ios fastforward outline", "virgo" ) ),
		array( " icon ion-ios-filing" => esc_html__( "ios filing", "virgo" ) ),
		array( " icon ion-ios-filing-outline" => esc_html__( "ios filing outline", "virgo" ) ),
		array( " icon ion-ios-film" => esc_html__( "ios film", "virgo" ) ),
		array( " icon ion-ios-film-outline" => esc_html__( "ios film outline", "virgo" ) ),
		array( " icon ion-ios-flag" => esc_html__( "ios flag", "virgo" ) ),
		array( " icon ion-ios-flag-outline" => esc_html__( "ios flag outline", "virgo" ) ),
		array( " icon ion-ios-flame" => esc_html__( "ios flame", "virgo" ) ),
		array( " icon ion-ios-flame-outline" => esc_html__( "ios flame outline", "virgo" ) ),
		array( " icon ion-ios-flask" => esc_html__( "ios flask", "virgo" ) ),
		array( " icon ion-ios-flask-outline" => esc_html__( "ios flask outline", "virgo" ) ),
		array( " icon ion-ios-flower" => esc_html__( "ios flower", "virgo" ) ),
		array( " icon ion-ios-flower-outline" => esc_html__( "ios flower outline", "virgo" ) ),
		array( " icon ion-ios-folder" => esc_html__( "ios folder", "virgo" ) ),
		array( " icon ion-ios-folder-outline" => esc_html__( "ios folder outline", "virgo" ) ),
		array( " icon ion-ios-football" => esc_html__( "ios football", "virgo" ) ),
		array( " icon ion-ios-football-outline" => esc_html__( "ios football outline", "virgo" ) ),
		array( " icon ion-ios-game-controller-a" => esc_html__( "ios game controller a", "virgo" ) ),
		array( " icon ion-ios-game-controller-a-outline" => esc_html__( "ios game controller a outline", "virgo" ) ),
		array( " icon ion-ios-game-controller-b" => esc_html__( "ios game controller b", "virgo" ) ),
		array( " icon ion-ios-game-controller-b-outline" => esc_html__( "ios game controller b outline", "virgo" ) ),
		array( " icon ion-ios-gear" => esc_html__( "ios gear", "virgo" ) ),
		array( " icon ion-ios-gear-outline" => esc_html__( "ios gear outline", "virgo" ) ),
		array( " icon ion-ios-glasses" => esc_html__( "ios glasses", "virgo" ) ),
		array( " icon ion-ios-glasses-outline" => esc_html__( "ios glasses outline", "virgo" ) ),
		array( " icon ion-ios-grid-view" => esc_html__( "ios grid view", "virgo" ) ),
		array( " icon ion-ios-grid-view-outline" => esc_html__( "ios grid view outline", "virgo" ) ),
		array( " icon ion-ios-heart" => esc_html__( "ios heart", "virgo" ) ),
		array( " icon ion-ios-heart-outline" => esc_html__( "ios heart outline", "virgo" ) ),
		array( " icon ion-ios-help" => esc_html__( "ios help", "virgo" ) ),
		array( " icon ion-ios-help-empty" => esc_html__( "ios help empty", "virgo" ) ),
		array( " icon ion-ios-help-outline" => esc_html__( "ios help outline", "virgo" ) ),
		array( " icon ion-ios-home" => esc_html__( "ios home", "virgo" ) ),
		array( " icon ion-ios-home-outline" => esc_html__( "ios home outline", "virgo" ) ),
		array( " icon ion-ios-infinite" => esc_html__( "ios infinite", "virgo" ) ),
		array( " icon ion-ios-infinite-outline" => esc_html__( "ios infinite outline", "virgo" ) ),
		array( " icon ion-ios-information" => esc_html__( "ios information", "virgo" ) ),
		array( " icon ion-ios-information-empty" => esc_html__( "ios information empty", "virgo" ) ),
		array( " icon ion-ios-information-outline" => esc_html__( "ios information outline", "virgo" ) ),
		array( " icon ion-ios-ionic-outline" => esc_html__( "ios ionic outline", "virgo" ) ),
		array( " icon ion-ios-keypad" => esc_html__( "ios keypad", "virgo" ) ),
		array( " icon ion-ios-keypad-outline" => esc_html__( "ios keypad outline", "virgo" ) ),
		array( " icon ion-ios-lightbulb" => esc_html__( "ios lightbulb", "virgo" ) ),
		array( " icon ion-ios-lightbulb-outline" => esc_html__( "ios lightbulb outline", "virgo" ) ),
		array( " icon ion-ios-list" => esc_html__( "ios list", "virgo" ) ),
		array( " icon ion-ios-list-outline" => esc_html__( "ios list outline", "virgo" ) ),
		array( " icon ion-ios-location" => esc_html__( "ios location", "virgo" ) ),
		array( " icon ion-ios-location-outline" => esc_html__( "ios location outline", "virgo" ) ),
		array( " icon ion-ios-locked" => esc_html__( "ios locked", "virgo" ) ),
		array( " icon ion-ios-locked-outline" => esc_html__( "ios locked outline", "virgo" ) ),
		array( " icon ion-ios-loop" => esc_html__( "ios loop", "virgo" ) ),
		array( " icon ion-ios-loop-strong" => esc_html__( "ios loop strong", "virgo" ) ),
		array( " icon ion-ios-medical" => esc_html__( "ios medical", "virgo" ) ),
		array( " icon ion-ios-medical-outline" => esc_html__( "ios medical outline", "virgo" ) ),
		array( " icon ion-ios-medkit" => esc_html__( "ios medkit", "virgo" ) ),
		array( " icon ion-ios-medkit-outline" => esc_html__( "ios medkit outline", "virgo" ) ),
		array( " icon ion-ios-mic" => esc_html__( "ios mic", "virgo" ) ),
		array( " icon ion-ios-mic-off" => esc_html__( "ios mic off", "virgo" ) ),
		array( " icon ion-ios-mic-outline" => esc_html__( "ios mic outline", "virgo" ) ),
		array( " icon ion-ios-minus" => esc_html__( "ios minus", "virgo" ) ),
		array( " icon ion-ios-minus-empty" => esc_html__( "ios minus empty", "virgo" ) ),
		array( " icon ion-ios-minus-outline" => esc_html__( "ios minus outline", "virgo" ) ),
		array( " icon ion-ios-monitor" => esc_html__( "ios monitor", "virgo" ) ),
		array( " icon ion-ios-monitor-outline" => esc_html__( "ios monitor outline", "virgo" ) ),
		array( " icon ion-ios-moon" => esc_html__( "ios moon", "virgo" ) ),
		array( " icon ion-ios-moon-outline" => esc_html__( "ios moon outline", "virgo" ) ),
		array( " icon ion-ios-more" => esc_html__( "ios more", "virgo" ) ),
		array( " icon ion-ios-more-outline" => esc_html__( "ios more outline", "virgo" ) ),
		array( " icon ion-ios-musical-note" => esc_html__( "ios musical note", "virgo" ) ),
		array( " icon ion-ios-musical-notes" => esc_html__( "ios musical notes", "virgo" ) ),
		array( " icon ion-ios-navigate" => esc_html__( "ios navigate", "virgo" ) ),
		array( " icon ion-ios-navigate-outline" => esc_html__( "ios navigate outline", "virgo" ) ),
		array( " icon ion-ios-nutrition" => esc_html__( "ios nutrition", "virgo" ) ),
		array( " icon ion-ios-nutrition-outline" => esc_html__( "ios nutrition outline", "virgo" ) ),
		array( " icon ion-ios-paper" => esc_html__( "ios paper", "virgo" ) ),
		array( " icon ion-ios-paper-outline" => esc_html__( "ios paper outline", "virgo" ) ),
		array( " icon ion-ios-paperplane" => esc_html__( "ios paperplane", "virgo" ) ),
		array( " icon ion-ios-paperplane-outline" => esc_html__( "ios paperplane outline", "virgo" ) ),
		array( " icon ion-ios-partlysunny" => esc_html__( "ios partlysunny", "virgo" ) ),
		array( " icon ion-ios-partlysunny-outline" => esc_html__( "ios partlysunny outline", "virgo" ) ),
		array( " icon ion-ios-pause" => esc_html__( "ios pause", "virgo" ) ),
		array( " icon ion-ios-pause-outline" => esc_html__( "ios pause outline", "virgo" ) ),
		array( " icon ion-ios-paw" => esc_html__( "ios paw", "virgo" ) ),
		array( " icon ion-ios-paw-outline" => esc_html__( "ios paw outline", "virgo" ) ),
		array( " icon ion-ios-people" => esc_html__( "ios people", "virgo" ) ),
		array( " icon ion-ios-people-outline" => esc_html__( "ios people outline", "virgo" ) ),
		array( " icon ion-ios-person" => esc_html__( "ios person", "virgo" ) ),
		array( " icon ion-ios-person-outline" => esc_html__( "ios person outline", "virgo" ) ),
		array( " icon ion-ios-personadd" => esc_html__( "ios personadd", "virgo" ) ),
		array( " icon ion-ios-personadd-outline" => esc_html__( "ios personadd outline", "virgo" ) ),
		array( " icon ion-ios-photos" => esc_html__( "ios photos", "virgo" ) ),
		array( " icon ion-ios-photos-outline" => esc_html__( "ios photos outline", "virgo" ) ),
		array( " icon ion-ios-pie" => esc_html__( "ios pie", "virgo" ) ),
		array( " icon ion-ios-pie-outline" => esc_html__( "ios pie outline", "virgo" ) ),
		array( " icon ion-ios-pint" => esc_html__( "ios pint", "virgo" ) ),
		array( " icon ion-ios-pint-outline" => esc_html__( "ios pint outline", "virgo" ) ),
		array( " icon ion-ios-play" => esc_html__( "ios play", "virgo" ) ),
		array( " icon ion-ios-play-outline" => esc_html__( "ios play outline", "virgo" ) ),
		array( " icon ion-ios-plus" => esc_html__( "ios plus", "virgo" ) ),
		array( " icon ion-ios-plus-empty" => esc_html__( "ios plus empty", "virgo" ) ),
		array( " icon ion-ios-plus-outline" => esc_html__( "ios plus outline", "virgo" ) ),
		array( " icon ion-ios-pricetag" => esc_html__( "ios pricetag", "virgo" ) ),
		array( " icon ion-ios-pricetag-outline" => esc_html__( "ios pricetag outline", "virgo" ) ),
		array( " icon ion-ios-pricetags" => esc_html__( "ios pricetags", "virgo" ) ),
		array( " icon ion-ios-pricetags-outline" => esc_html__( "ios pricetags outline", "virgo" ) ),
		array( " icon ion-ios-printer" => esc_html__( "ios printer", "virgo" ) ),
		array( " icon ion-ios-printer-outline" => esc_html__( "ios printer outline", "virgo" ) ),
		array( " icon ion-ios-pulse" => esc_html__( "ios pulse", "virgo" ) ),
		array( " icon ion-ios-pulse-strong" => esc_html__( "ios pulse strong", "virgo" ) ),
		array( " icon ion-ios-rainy" => esc_html__( "ios rainy", "virgo" ) ),
		array( " icon ion-ios-rainy-outline" => esc_html__( "ios rainy outline", "virgo" ) ),
		array( " icon ion-ios-recording" => esc_html__( "ios recording", "virgo" ) ),
		array( " icon ion-ios-recording-outline" => esc_html__( "ios recording outline", "virgo" ) ),
		array( " icon ion-ios-redo" => esc_html__( "ios redo", "virgo" ) ),
		array( " icon ion-ios-redo-outline" => esc_html__( "ios redo outline", "virgo" ) ),
		array( " icon ion-ios-refresh" => esc_html__( "ios refresh", "virgo" ) ),
		array( " icon ion-ios-refresh-empty" => esc_html__( "ios refresh empty", "virgo" ) ),
		array( " icon ion-ios-refresh-outline" => esc_html__( "ios refresh outline", "virgo" ) ),
		array( " icon ion-ios-reload" => esc_html__( "ios reload", "virgo" ) ),
		array( " icon ion-ios-reverse-camera" => esc_html__( "ios reverse camera", "virgo" ) ),
		array( " icon ion-ios-reverse-camera-outline" => esc_html__( "ios reverse camera outline", "virgo" ) ),
		array( " icon ion-ios-rewind" => esc_html__( "ios rewind", "virgo" ) ),
		array( " icon ion-ios-rewind-outline" => esc_html__( "ios rewind outline", "virgo" ) ),
		array( " icon ion-ios-rose" => esc_html__( "ios rose", "virgo" ) ),
		array( " icon ion-ios-rose-outline" => esc_html__( "ios rose outline", "virgo" ) ),
		array( " icon ion-ios-search" => esc_html__( "ios search", "virgo" ) ),
		array( " icon ion-ios-search-strong" => esc_html__( "ios search strong", "virgo" ) ),
		array( " icon ion-ios-settings" => esc_html__( "ios settings", "virgo" ) ),
		array( " icon ion-ios-settings-strong" => esc_html__( "ios settings strong", "virgo" ) ),
		array( " icon ion-ios-shuffle" => esc_html__( "ios shuffle", "virgo" ) ),
		array( " icon ion-ios-shuffle-strong" => esc_html__( "ios shuffle strong", "virgo" ) ),
		array( " icon ion-ios-skipbackward" => esc_html__( "ios skipbackward", "virgo" ) ),
		array( " icon ion-ios-skipbackward-outline" => esc_html__( "ios skipbackward outline", "virgo" ) ),
		array( " icon ion-ios-skipforward" => esc_html__( "ios skipforward", "virgo" ) ),
		array( " icon ion-ios-skipforward-outline" => esc_html__( "ios skipforward outline", "virgo" ) ),
		array( " icon ion-ios-snowy" => esc_html__( "ios snowy", "virgo" ) ),
		array( " icon ion-ios-speedometer" => esc_html__( "ios speedometer", "virgo" ) ),
		array( " icon ion-ios-speedometer-outline" => esc_html__( "ios speedometer outline", "virgo" ) ),
		array( " icon ion-ios-star" => esc_html__( "ios star", "virgo" ) ),
		array( " icon ion-ios-star-half" => esc_html__( "ios star half", "virgo" ) ),
		array( " icon ion-ios-star-outline" => esc_html__( "ios star outline", "virgo" ) ),
		array( " icon ion-ios-stopwatch" => esc_html__( "ios stopwatch", "virgo" ) ),
		array( " icon ion-ios-stopwatch-outline" => esc_html__( "ios stopwatch outline", "virgo" ) ),
		array( " icon ion-ios-sunny" => esc_html__( "ios sunny", "virgo" ) ),
		array( " icon ion-ios-sunny-outline" => esc_html__( "ios sunny outline", "virgo" ) ),
		array( " icon ion-ios-telephone" => esc_html__( "ios telephone", "virgo" ) ),
		array( " icon ion-ios-telephone-outline" => esc_html__( "ios telephone outline", "virgo" ) ),
		array( " icon ion-ios-tennisball" => esc_html__( "ios tennisball", "virgo" ) ),
		array( " icon ion-ios-tennisball-outline" => esc_html__( "ios tennisball outline", "virgo" ) ),
		array( " icon ion-ios-thunderstorm" => esc_html__( "ios thunderstorm", "virgo" ) ),
		array( " icon ion-ios-thunderstorm-outline" => esc_html__( "ios thunderstorm outline", "virgo" ) ),
		array( " icon ion-ios-time" => esc_html__( "ios time", "virgo" ) ),
		array( " icon ion-ios-time-outline" => esc_html__( "ios time outline", "virgo" ) ),
		array( " icon ion-ios-timer" => esc_html__( "ios timer", "virgo" ) ),
		array( " icon ion-ios-timer-outline" => esc_html__( "ios timer outline", "virgo" ) ),
		array( " icon ion-ios-toggle" => esc_html__( "ios toggle", "virgo" ) ),
		array( " icon ion-ios-toggle-outline" => esc_html__( "ios toggle outline", "virgo" ) ),
		array( " icon ion-ios-trash" => esc_html__( "ios trash", "virgo" ) ),
		array( " icon ion-ios-trash-outline" => esc_html__( "ios trash outline", "virgo" ) ),
		array( " icon ion-ios-undo" => esc_html__( "ios undo", "virgo" ) ),
		array( " icon ion-ios-undo-outline" => esc_html__( "ios undo outline", "virgo" ) ),
		array( " icon ion-ios-unlocked" => esc_html__( "ios unlocked", "virgo" ) ),
		array( " icon ion-ios-unlocked-outline" => esc_html__( "ios unlocked outline", "virgo" ) ),
		array( " icon ion-ios-upload" => esc_html__( "ios upload", "virgo" ) ),
		array( " icon ion-ios-upload-outline" => esc_html__( "ios upload outline", "virgo" ) ),
		array( " icon ion-ios-videocam" => esc_html__( "ios videocam", "virgo" ) ),
		array( " icon ion-ios-videocam-outline" => esc_html__( "ios videocam outline", "virgo" ) ),
		array( " icon ion-ios-volume-high" => esc_html__( "ios volume high", "virgo" ) ),
		array( " icon ion-ios-volume-low" => esc_html__( "ios volume low", "virgo" ) ),
		array( " icon ion-ios-wineglass" => esc_html__( "ios wineglass", "virgo" ) ),
		array( " icon ion-ios-wineglass-outline" => esc_html__( "ios wineglass outline", "virgo" ) ),
		array( " icon ion-ios-world" => esc_html__( "ios world", "virgo" ) ),
		array( " icon ion-ios-world-outline" => esc_html__( "ios world outline", "virgo" ) ),
		array( " icon ion-ipad" => esc_html__( "ipad", "virgo" ) ),
		array( " icon ion-iphone" => esc_html__( "iphone", "virgo" ) ),
		array( " icon ion-ipod" => esc_html__( "ipod", "virgo" ) ),
		array( " icon ion-jet" => esc_html__( "jet", "virgo" ) ),
		array( " icon ion-key" => esc_html__( "key", "virgo" ) ),
		array( " icon ion-knife" => esc_html__( "knife", "virgo" ) ),
		array( " icon ion-laptop" => esc_html__( "laptop", "virgo" ) ),
		array( " icon ion-leaf" => esc_html__( "leaf", "virgo" ) ),
		array( " icon ion-levels" => esc_html__( "levels", "virgo" ) ),
		array( " icon ion-lightbulb" => esc_html__( "lightbulb", "virgo" ) ),
		array( " icon ion-link" => esc_html__( "link", "virgo" ) ),
		array( " icon ion-load-a" => esc_html__( "load a", "virgo" ) ),
		array( " icon ion-load-b" => esc_html__( "load b", "virgo" ) ),
		array( " icon ion-load-c" => esc_html__( "load c", "virgo" ) ),
		array( " icon ion-load-d" => esc_html__( "load d", "virgo" ) ),
		array( " icon ion-location" => esc_html__( "location", "virgo" ) ),
		array( " icon ion-lock-combination" => esc_html__( "lock combination", "virgo" ) ),
		array( " icon ion-locked" => esc_html__( "locked", "virgo" ) ),
		array( " icon ion-log-in" => esc_html__( "log in", "virgo" ) ),
		array( " icon ion-log-out" => esc_html__( "log out", "virgo" ) ),
		array( " icon ion-loop" => esc_html__( "loop", "virgo" ) ),
		array( " icon ion-magnet" => esc_html__( "magnet", "virgo" ) ),
		array( " icon ion-male" => esc_html__( "male", "virgo" ) ),
		array( " icon ion-man" => esc_html__( "man", "virgo" ) ),
		array( " icon ion-map" => esc_html__( "map", "virgo" ) ),
		array( " icon ion-medkit" => esc_html__( "medkit", "virgo" ) ),
		array( " icon ion-merge" => esc_html__( "merge", "virgo" ) ),
		array( " icon ion-mic-a" => esc_html__( "mic a", "virgo" ) ),
		array( " icon ion-mic-b" => esc_html__( "mic b", "virgo" ) ),
		array( " icon ion-mic-c" => esc_html__( "mic c", "virgo" ) ),
		array( " icon ion-minus" => esc_html__( "minus", "virgo" ) ),
		array( " icon ion-minus-circled" => esc_html__( "minus circled", "virgo" ) ),
		array( " icon ion-minus-round" => esc_html__( "minus round", "virgo" ) ),
		array( " icon ion-model-s" => esc_html__( "model s", "virgo" ) ),
		array( " icon ion-monitor" => esc_html__( "monitor", "virgo" ) ),
		array( " icon ion-more" => esc_html__( "more", "virgo" ) ),
		array( " icon ion-mouse" => esc_html__( "mouse", "virgo" ) ),
		array( " icon ion-music-note" => esc_html__( "music note", "virgo" ) ),
		array( " icon ion-navicon" => esc_html__( "navicon", "virgo" ) ),
		array( " icon ion-navicon-round" => esc_html__( "navicon round", "virgo" ) ),
		array( " icon ion-navigate" => esc_html__( "navigate", "virgo" ) ),
		array( " icon ion-network" => esc_html__( "network", "virgo" ) ),
		array( " icon ion-no-smoking" => esc_html__( "no smoking", "virgo" ) ),
		array( " icon ion-nuclear" => esc_html__( "nuclear", "virgo" ) ),
		array( " icon ion-outlet" => esc_html__( "outlet", "virgo" ) ),
		array( " icon ion-paintbrush" => esc_html__( "paintbrush", "virgo" ) ),
		array( " icon ion-paintbucket" => esc_html__( "paintbucket", "virgo" ) ),
		array( " icon ion-paper-airplane" => esc_html__( "paper airplane", "virgo" ) ),
		array( " icon ion-paperclip" => esc_html__( "paperclip", "virgo" ) ),
		array( " icon ion-pause" => esc_html__( "pause", "virgo" ) ),
		array( " icon ion-person" => esc_html__( "person", "virgo" ) ),
		array( " icon ion-person-add" => esc_html__( "person add", "virgo" ) ),
		array( " icon ion-person-stalker" => esc_html__( "person stalker", "virgo" ) ),
		array( " icon ion-pie-graph" => esc_html__( "pie graph", "virgo" ) ),
		array( " icon ion-pin" => esc_html__( "pin", "virgo" ) ),
		array( " icon ion-pinpoint" => esc_html__( "pinpoint", "virgo" ) ),
		array( " icon ion-pizza" => esc_html__( "pizza", "virgo" ) ),
		array( " icon ion-plane" => esc_html__( "plane", "virgo" ) ),
		array( " icon ion-planet" => esc_html__( "planet", "virgo" ) ),
		array( " icon ion-play" => esc_html__( "play", "virgo" ) ),
		array( " icon ion-playstation" => esc_html__( "playstation", "virgo" ) ),
		array( " icon ion-plus" => esc_html__( "plus", "virgo" ) ),
		array( " icon ion-plus-circled" => esc_html__( "plus circled", "virgo" ) ),
		array( " icon ion-plus-round" => esc_html__( "plus round", "virgo" ) ),
		array( " icon ion-podium" => esc_html__( "podium", "virgo" ) ),
		array( " icon ion-pound" => esc_html__( "pound", "virgo" ) ),
		array( " icon ion-power" => esc_html__( "power", "virgo" ) ),
		array( " icon ion-pricetag" => esc_html__( "pricetag", "virgo" ) ),
		array( " icon ion-pricetags" => esc_html__( "pricetags", "virgo" ) ),
		array( " icon ion-printer" => esc_html__( "printer", "virgo" ) ),
		array( " icon ion-pull-request" => esc_html__( "pull request", "virgo" ) ),
		array( " icon ion-qr-scanner" => esc_html__( "qr scanner", "virgo" ) ),
		array( " icon ion-quote" => esc_html__( "quote", "virgo" ) ),
		array( " icon ion-radio-waves" => esc_html__( "radio waves", "virgo" ) ),
		array( " icon ion-record" => esc_html__( "record", "virgo" ) ),
		array( " icon ion-refresh" => esc_html__( "refresh", "virgo" ) ),
		array( " icon ion-reply" => esc_html__( "reply", "virgo" ) ),
		array( " icon ion-reply-all" => esc_html__( "reply all", "virgo" ) ),
		array( " icon ion-ribbon-a" => esc_html__( "ribbon a", "virgo" ) ),
		array( " icon ion-ribbon-b" => esc_html__( "ribbon b", "virgo" ) ),
		array( " icon ion-sad" => esc_html__( "sad", "virgo" ) ),
		array( " icon ion-sad-outline" => esc_html__( "sad outline", "virgo" ) ),
		array( " icon ion-scissors" => esc_html__( "scissors", "virgo" ) ),
		array( " icon ion-search" => esc_html__( "search", "virgo" ) ),
		array( " icon ion-settings" => esc_html__( "settings", "virgo" ) ),
		array( " icon ion-share" => esc_html__( "share", "virgo" ) ),
		array( " icon ion-shuffle" => esc_html__( "shuffle", "virgo" ) ),
		array( " icon ion-skip-backward" => esc_html__( "skip backward", "virgo" ) ),
		array( " icon ion-skip-forward" => esc_html__( "skip forward", "virgo" ) ),
		array( " icon ion-social-android" => esc_html__( "social android", "virgo" ) ),
		array( " icon ion-social-android-outline" => esc_html__( "social android outline", "virgo" ) ),
		array( " icon ion-social-angular" => esc_html__( "social angular", "virgo" ) ),
		array( " icon ion-social-angular-outline" => esc_html__( "social angular outline", "virgo" ) ),
		array( " icon ion-social-apple" => esc_html__( "social apple", "virgo" ) ),
		array( " icon ion-social-apple-outline" => esc_html__( "social apple outline", "virgo" ) ),
		array( " icon ion-social-bitcoin" => esc_html__( "social bitcoin", "virgo" ) ),
		array( " icon ion-social-bitcoin-outline" => esc_html__( "social bitcoin outline", "virgo" ) ),
		array( " icon ion-social-buffer" => esc_html__( "social buffer", "virgo" ) ),
		array( " icon ion-social-buffer-outline" => esc_html__( "social buffer outline", "virgo" ) ),
		array( " icon ion-social-chrome" => esc_html__( "social chrome", "virgo" ) ),
		array( " icon ion-social-chrome-outline" => esc_html__( "social chrome outline", "virgo" ) ),
		array( " icon ion-social-codepen" => esc_html__( "social codepen", "virgo" ) ),
		array( " icon ion-social-codepen-outline" => esc_html__( "social codepen outline", "virgo" ) ),
		array( " icon ion-social-css3" => esc_html__( "social css3", "virgo" ) ),
		array( " icon ion-social-css3-outline" => esc_html__( "social css3 outline", "virgo" ) ),
		array( " icon ion-social-designernews" => esc_html__( "social designernews", "virgo" ) ),
		array( " icon ion-social-designernews-outline" => esc_html__( "social designernews outline", "virgo" ) ),
		array( " icon ion-social-dribbble" => esc_html__( "social dribbble", "virgo" ) ),
		array( " icon ion-social-dribbble-outline" => esc_html__( "social dribbble outline", "virgo" ) ),
		array( " icon ion-social-dropbox" => esc_html__( "social dropbox", "virgo" ) ),
		array( " icon ion-social-dropbox-outline" => esc_html__( "social dropbox outline", "virgo" ) ),
		array( " icon ion-social-euro" => esc_html__( "social euro", "virgo" ) ),
		array( " icon ion-social-euro-outline" => esc_html__( "social euro outline", "virgo" ) ),
		array( " icon ion-social-facebook" => esc_html__( "social facebook", "virgo" ) ),
		array( " icon ion-social-facebook-outline" => esc_html__( "social facebook outline", "virgo" ) ),
		array( " icon ion-social-foursquare" => esc_html__( "social foursquare", "virgo" ) ),
		array( " icon ion-social-foursquare-outline" => esc_html__( "social foursquare outline", "virgo" ) ),
		array( " icon ion-social-freebsd-devil" => esc_html__( "social freebsd devil", "virgo" ) ),
		array( " icon ion-social-github" => esc_html__( "social github", "virgo" ) ),
		array( " icon ion-social-github-outline" => esc_html__( "social github outline", "virgo" ) ),
		array( " icon ion-social-google" => esc_html__( "social google", "virgo" ) ),
		array( " icon ion-social-google-outline" => esc_html__( "social google outline", "virgo" ) ),
		array( " icon ion-social-googleplus" => esc_html__( "social googleplus", "virgo" ) ),
		array( " icon ion-social-googleplus-outline" => esc_html__( "social googleplus outline", "virgo" ) ),
		array( " icon ion-social-hackernews" => esc_html__( "social hackernews", "virgo" ) ),
		array( " icon ion-social-hackernews-outline" => esc_html__( "social hackernews outline", "virgo" ) ),
		array( " icon ion-social-html5" => esc_html__( "social html5", "virgo" ) ),
		array( " icon ion-social-html5-outline" => esc_html__( "social html5 outline", "virgo" ) ),
		array( " icon ion-social-instagram" => esc_html__( "social instagram", "virgo" ) ),
		array( " icon ion-social-instagram-outline" => esc_html__( "social instagram outline", "virgo" ) ),
		array( " icon ion-social-javascript" => esc_html__( "social javascript", "virgo" ) ),
		array( " icon ion-social-javascript-outline" => esc_html__( "social javascript outline", "virgo" ) ),
		array( " icon ion-social-linkedin" => esc_html__( "social linkedin", "virgo" ) ),
		array( " icon ion-social-linkedin-outline" => esc_html__( "social linkedin outline", "virgo" ) ),
		array( " icon ion-social-markdown" => esc_html__( "social markdown", "virgo" ) ),
		array( " icon ion-social-nodejs" => esc_html__( "social nodejs", "virgo" ) ),
		array( " icon ion-social-octocat" => esc_html__( "social octocat", "virgo" ) ),
		array( " icon ion-social-pinterest" => esc_html__( "social pinterest", "virgo" ) ),
		array( " icon ion-social-pinterest-outline" => esc_html__( "social pinterest outline", "virgo" ) ),
		array( " icon ion-social-python" => esc_html__( "social python", "virgo" ) ),
		array( " icon ion-social-reddit" => esc_html__( "social reddit", "virgo" ) ),
		array( " icon ion-social-reddit-outline" => esc_html__( "social reddit outline", "virgo" ) ),
		array( " icon ion-social-rss" => esc_html__( "social rss", "virgo" ) ),
		array( " icon ion-social-rss-outline" => esc_html__( "social rss outline", "virgo" ) ),
		array( " icon ion-social-sass" => esc_html__( "social sass", "virgo" ) ),
		array( " icon ion-social-skype" => esc_html__( "social skype", "virgo" ) ),
		array( " icon ion-social-skype-outline" => esc_html__( "social skype outline", "virgo" ) ),
		array( " icon ion-social-snapchat" => esc_html__( "social snapchat", "virgo" ) ),
		array( " icon ion-social-snapchat-outline" => esc_html__( "social snapchat outline", "virgo" ) ),
		array( " icon ion-social-tumblr" => esc_html__( "social tumblr", "virgo" ) ),
		array( " icon ion-social-tumblr-outline" => esc_html__( "social tumblr outline", "virgo" ) ),
		array( " icon ion-social-tux" => esc_html__( "social tux", "virgo" ) ),
		array( " icon ion-social-twitch" => esc_html__( "social twitch", "virgo" ) ),
		array( " icon ion-social-twitch-outline" => esc_html__( "social twitch outline", "virgo" ) ),
		array( " icon ion-social-twitter" => esc_html__( "social twitter", "virgo" ) ),
		array( " icon ion-social-twitter-outline" => esc_html__( "social twitter outline", "virgo" ) ),
		array( " icon ion-social-usd" => esc_html__( "social usd", "virgo" ) ),
		array( " icon ion-social-usd-outline" => esc_html__( "social usd outline", "virgo" ) ),
		array( " icon ion-social-vimeo" => esc_html__( "social vimeo", "virgo" ) ),
		array( " icon ion-social-vimeo-outline" => esc_html__( "social vimeo outline", "virgo" ) ),
		array( " icon ion-social-whatsapp" => esc_html__( "social whatsapp", "virgo" ) ),
		array( " icon ion-social-whatsapp-outline" => esc_html__( "social whatsapp outline", "virgo" ) ),
		array( " icon ion-social-windows" => esc_html__( "social windows", "virgo" ) ),
		array( " icon ion-social-windows-outline" => esc_html__( "social windows outline", "virgo" ) ),
		array( " icon ion-social-wordpress" => esc_html__( "social wordpress", "virgo" ) ),
		array( " icon ion-social-wordpress-outline" => esc_html__( "social wordpress outline", "virgo" ) ),
		array( " icon ion-social-yahoo" => esc_html__( "social yahoo", "virgo" ) ),
		array( " icon ion-social-yahoo-outline" => esc_html__( "social yahoo outline", "virgo" ) ),
		array( " icon ion-social-yen" => esc_html__( "social yen", "virgo" ) ),
		array( " icon ion-social-yen-outline" => esc_html__( "social yen outline", "virgo" ) ),
		array( " icon ion-social-youtube" => esc_html__( "social youtube", "virgo" ) ),
		array( " icon ion-social-youtube-outline" => esc_html__( "social youtube outline", "virgo" ) ),
		array( " icon ion-soup-can" => esc_html__( "soup can", "virgo" ) ),
		array( " icon ion-soup-can-outline" => esc_html__( "soup can outline", "virgo" ) ),
		array( " icon ion-speakerphone" => esc_html__( "speakerphone", "virgo" ) ),
		array( " icon ion-speedometer" => esc_html__( "speedometer", "virgo" ) ),
		array( " icon ion-spoon" => esc_html__( "spoon", "virgo" ) ),
		array( " icon ion-star" => esc_html__( "star", "virgo" ) ),
		array( " icon ion-stats-bars" => esc_html__( "stats bars", "virgo" ) ),
		array( " icon ion-steam" => esc_html__( "steam", "virgo" ) ),
		array( " icon ion-stop" => esc_html__( "stop", "virgo" ) ),
		array( " icon ion-thermometer" => esc_html__( "thermometer", "virgo" ) ),
		array( " icon ion-thumbsdown" => esc_html__( "thumbsdown", "virgo" ) ),
		array( " icon ion-thumbsup" => esc_html__( "thumbsup", "virgo" ) ),
		array( " icon ion-toggle" => esc_html__( "toggle", "virgo" ) ),
		array( " icon ion-toggle-filled" => esc_html__( "toggle filled", "virgo" ) ),
		array( " icon ion-transgender" => esc_html__( "transgender", "virgo" ) ),
		array( " icon ion-trash-a" => esc_html__( "trash a", "virgo" ) ),
		array( " icon ion-trash-b" => esc_html__( "trash b", "virgo" ) ),
		array( " icon ion-trophy" => esc_html__( "trophy", "virgo" ) ),
		array( " icon ion-tshirt" => esc_html__( "tshirt", "virgo" ) ),
		array( " icon ion-tshirt-outline" => esc_html__( "tshirt outline", "virgo" ) ),
		array( " icon ion-umbrella" => esc_html__( "umbrella", "virgo" ) ),
		array( " icon ion-university" => esc_html__( "university", "virgo" ) ),
		array( " icon ion-unlocked" => esc_html__( "unlocked", "virgo" ) ),
		array( " icon ion-upload" => esc_html__( "upload", "virgo" ) ),
		array( " icon ion-usb" => esc_html__( "usb", "virgo" ) ),
		array( " icon ion-videocamera" => esc_html__( "videocamera", "virgo" ) ),
		array( " icon ion-volume-high" => esc_html__( "volume high", "virgo" ) ),
		array( " icon ion-volume-low" => esc_html__( "volume low", "virgo" ) ),
		array( " icon ion-volume-medium" => esc_html__( "volume medium", "virgo" ) ),
		array( " icon ion-volume-mute" => esc_html__( "volume mute", "virgo" ) ),
		array( " icon ion-wand" => esc_html__( "wand", "virgo" ) ),
		array( " icon ion-waterdrop" => esc_html__( "waterdrop", "virgo" ) ),
		array( " icon ion-wifi" => esc_html__( "wifi", "virgo" ) ),
		array( " icon ion-wineglass" => esc_html__( "wineglass", "virgo" ) ),
		array( " icon ion-woman" => esc_html__( "woman", "virgo" ) ),
		array( " icon ion-wrench" => esc_html__( "wrench", "virgo" ) ),
		array( " icon ion-xbox" => esc_html__( "xbox", "virgo" ) ),
		array( " icon ion-alert" => esc_html__( "alert", "virgo" ) ),
		array( " icon ion-alert-circled" => esc_html__( "alert circled", "virgo" ) ),
		array( " icon ion-android-add" => esc_html__( "android add", "virgo" ) ),
		array( " icon ion-android-add-circle" => esc_html__( "android add circle", "virgo" ) ),
		array( " icon ion-android-alarm-clock" => esc_html__( "android alarm clock", "virgo" ) ),
		array( " icon ion-android-alert" => esc_html__( "android alert", "virgo" ) ),
		array( " icon ion-android-apps" => esc_html__( "android apps", "virgo" ) ),
		array( " icon ion-android-archive" => esc_html__( "android archive", "virgo" ) ),
		array( " icon ion-android-arrow-back" => esc_html__( "android arrow back", "virgo" ) ),
		array( " icon ion-android-arrow-down" => esc_html__( "android arrow down", "virgo" ) ),
		array( " icon ion-android-arrow-dropdown" => esc_html__( "android arrow dropdown", "virgo" ) ),
		array( " icon ion-android-arrow-dropdown-circle" => esc_html__( "android arrow dropdown circle", "virgo" ) ),
		array( " icon ion-android-arrow-dropleft" => esc_html__( "android arrow dropleft", "virgo" ) ),
		array( " icon ion-android-arrow-dropleft-circle" => esc_html__( "android arrow dropleft circle", "virgo" ) ),
		array( " icon ion-android-arrow-dropright" => esc_html__( "android arrow dropright", "virgo" ) ),
		array( " icon ion-android-arrow-dropright-circle" => esc_html__( "android arrow dropright circle", "virgo" ) ),
		array( " icon ion-android-arrow-dropup" => esc_html__( "android arrow dropup", "virgo" ) ),
		array( " icon ion-android-arrow-dropup-circle" => esc_html__( "android arrow dropup circle", "virgo" ) ),
		array( " icon ion-android-arrow-forward" => esc_html__( "android arrow forward", "virgo" ) ),
		array( " icon ion-android-arrow-up" => esc_html__( "android arrow up", "virgo" ) ),
		array( " icon ion-android-attach" => esc_html__( "android attach", "virgo" ) ),
		array( " icon ion-android-bar" => esc_html__( "android bar", "virgo" ) ),
		array( " icon ion-android-bicycle" => esc_html__( "android bicycle", "virgo" ) ),
		array( " icon ion-android-boat" => esc_html__( "android boat", "virgo" ) ),
		array( " icon ion-android-bookmark" => esc_html__( "android bookmark", "virgo" ) ),
		array( " icon ion-android-bulb" => esc_html__( "android bulb", "virgo" ) ),
		array( " icon ion-android-bus" => esc_html__( "android bus", "virgo" ) ),
		array( " icon ion-android-calendar" => esc_html__( "android calendar", "virgo" ) ),
		array( " icon ion-android-call" => esc_html__( "android call", "virgo" ) ),
		array( " icon ion-android-camera" => esc_html__( "android camera", "virgo" ) ),
		array( " icon ion-android-cancel" => esc_html__( "android cancel", "virgo" ) ),
		array( " icon ion-android-car" => esc_html__( "android car", "virgo" ) ),
		array( " icon ion-android-cart" => esc_html__( "android cart", "virgo" ) ),
		array( " icon ion-android-chat" => esc_html__( "android chat", "virgo" ) ),
		array( " icon ion-android-checkbox" => esc_html__( "android checkbox", "virgo" ) ),
		array( " icon ion-android-checkbox-blank" => esc_html__( "android checkbox blank", "virgo" ) ),
		array( " icon ion-android-checkbox-outline" => esc_html__( "android checkbox outline", "virgo" ) ),
		array( " icon ion-android-checkbox-outline-blank" => esc_html__( "android checkbox outline blank", "virgo" ) ),
		array( " icon ion-android-checkmark-circle" => esc_html__( "android checkmark circle", "virgo" ) ),
		array( " icon ion-android-clipboard" => esc_html__( "android clipboard", "virgo" ) ),
		array( " icon ion-android-close" => esc_html__( "android close", "virgo" ) ),
		array( " icon ion-android-cloud" => esc_html__( "android cloud", "virgo" ) ),
		array( " icon ion-android-cloud-circle" => esc_html__( "android cloud circle", "virgo" ) ),
		array( " icon ion-android-cloud-done" => esc_html__( "android cloud done", "virgo" ) ),
		array( " icon ion-android-cloud-outline" => esc_html__( "android cloud outline", "virgo" ) ),
		array( " icon ion-android-color-palette" => esc_html__( "android color palette", "virgo" ) ),
		array( " icon ion-android-compass" => esc_html__( "android compass", "virgo" ) ),
		array( " icon ion-android-contact" => esc_html__( "android contact", "virgo" ) ),
		array( " icon ion-android-contacts" => esc_html__( "android contacts", "virgo" ) ),
		array( " icon ion-android-contract" => esc_html__( "android contract", "virgo" ) ),
		array( " icon ion-android-create" => esc_html__( "android create", "virgo" ) ),
		array( " icon ion-android-delete" => esc_html__( "android delete", "virgo" ) ),
		array( " icon ion-android-desktop" => esc_html__( "android desktop", "virgo" ) ),
		array( " icon ion-android-document" => esc_html__( "android document", "virgo" ) ),
		array( " icon ion-android-done" => esc_html__( "android done", "virgo" ) ),
		array( " icon ion-android-done-all" => esc_html__( "android done all", "virgo" ) ),
		array( " icon ion-android-download" => esc_html__( "android download", "virgo" ) ),
		array( " icon ion-android-drafts" => esc_html__( "android drafts", "virgo" ) ),
		array( " icon ion-android-exit" => esc_html__( "android exit", "virgo" ) ),
		array( " icon ion-android-expand" => esc_html__( "android expand", "virgo" ) ),
		array( " icon ion-android-favorite" => esc_html__( "android favorite", "virgo" ) ),
		array( " icon ion-android-favorite-outline" => esc_html__( "android favorite outline", "virgo" ) ),
		array( " icon ion-android-film" => esc_html__( "android film", "virgo" ) ),
		array( " icon ion-android-folder" => esc_html__( "android folder", "virgo" ) ),
		array( " icon ion-android-folder-open" => esc_html__( "android folder open", "virgo" ) ),
		array( " icon ion-android-funnel" => esc_html__( "android funnel", "virgo" ) ),
		array( " icon ion-android-globe" => esc_html__( "android globe", "virgo" ) ),
		array( " icon ion-android-hand" => esc_html__( "android hand", "virgo" ) ),
		array( " icon ion-android-hangout" => esc_html__( "android hangout", "virgo" ) ),
		array( " icon ion-android-happy" => esc_html__( "android happy", "virgo" ) ),
		array( " icon ion-android-home" => esc_html__( "android home", "virgo" ) ),
		array( " icon ion-android-image" => esc_html__( "android image", "virgo" ) ),
		array( " icon ion-android-laptop" => esc_html__( "android laptop", "virgo" ) ),
		array( " icon ion-android-list" => esc_html__( "android list", "virgo" ) ),
		array( " icon ion-android-locate" => esc_html__( "android locate", "virgo" ) ),
		array( " icon ion-android-lock" => esc_html__( "android lock", "virgo" ) ),
		array( " icon ion-android-mail" => esc_html__( "android mail", "virgo" ) ),
		array( " icon ion-android-map" => esc_html__( "android map", "virgo" ) ),
		array( " icon ion-android-menu" => esc_html__( "android menu", "virgo" ) ),
		array( " icon ion-android-microphone" => esc_html__( "android microphone", "virgo" ) ),
		array( " icon ion-android-microphone-off" => esc_html__( "android microphone off", "virgo" ) ),
		array( " icon ion-android-more-horizontal" => esc_html__( "android more horizontal", "virgo" ) ),
		array( " icon ion-android-more-vertical" => esc_html__( "android more vertical", "virgo" ) ),
		array( " icon ion-android-navigate" => esc_html__( "android navigate", "virgo" ) ),
		array( " icon ion-android-notifications" => esc_html__( "android notifications", "virgo" ) ),
		array( " icon ion-android-notifications-none" => esc_html__( "android notifications none", "virgo" ) ),
		array( " icon ion-android-notifications-off" => esc_html__( "android notifications off", "virgo" ) ),
		array( " icon ion-android-open" => esc_html__( "android open", "virgo" ) ),
		array( " icon ion-android-options" => esc_html__( "android options", "virgo" ) ),
		array( " icon ion-android-people" => esc_html__( "android people", "virgo" ) ),
		array( " icon ion-android-person" => esc_html__( "android person", "virgo" ) ),
		array( " icon ion-android-person-add" => esc_html__( "android person add", "virgo" ) ),
		array( " icon ion-android-phone-landscape" => esc_html__( "android phone landscape", "virgo" ) ),
		array( " icon ion-android-phone-portrait" => esc_html__( "android phone portrait", "virgo" ) ),
		array( " icon ion-android-pin" => esc_html__( "android pin", "virgo" ) ),
		array( " icon ion-android-plane" => esc_html__( "android plane", "virgo" ) ),
		array( " icon ion-android-playstore" => esc_html__( "android playstore", "virgo" ) ),
		array( " icon ion-android-print" => esc_html__( "android print", "virgo" ) ),
		array( " icon ion-android-radio-button-off" => esc_html__( "android radio button off", "virgo" ) ),
		array( " icon ion-android-radio-button-on" => esc_html__( "android radio button on", "virgo" ) ),
		array( " icon ion-android-refresh" => esc_html__( "android refresh", "virgo" ) ),
		array( " icon ion-android-remove" => esc_html__( "android remove", "virgo" ) ),
		array( " icon ion-android-remove-circle" => esc_html__( "android remove circle", "virgo" ) ),
		array( " icon ion-android-restaurant" => esc_html__( "android restaurant", "virgo" ) ),
		array( " icon ion-android-sad" => esc_html__( "android sad", "virgo" ) ),
		array( " icon ion-android-search" => esc_html__( "android search", "virgo" ) ),
		array( " icon ion-android-send" => esc_html__( "android send", "virgo" ) ),
		array( " icon ion-android-settings" => esc_html__( "android settings", "virgo" ) ),
		array( " icon ion-android-share" => esc_html__( "android share", "virgo" ) ),
		array( " icon ion-android-share-alt" => esc_html__( "android share alt", "virgo" ) ),
		array( " icon ion-android-star" => esc_html__( "android star", "virgo" ) ),
		array( " icon ion-android-star-half" => esc_html__( "android star half", "virgo" ) ),
		array( " icon ion-android-star-outline" => esc_html__( "android star outline", "virgo" ) ),
		array( " icon ion-android-stopwatch" => esc_html__( "android stopwatch", "virgo" ) ),
		array( " icon ion-android-subway" => esc_html__( "android subway", "virgo" ) ),
		array( " icon ion-android-sunny" => esc_html__( "android sunny", "virgo" ) ),
		array( " icon ion-android-sync" => esc_html__( "android sync", "virgo" ) ),
		array( " icon ion-android-textsms" => esc_html__( "android textsms", "virgo" ) ),
		array( " icon ion-android-time" => esc_html__( "android time", "virgo" ) ),
		array( " icon ion-android-train" => esc_html__( "android train", "virgo" ) ),
		array( " icon ion-android-unlock" => esc_html__( "android unlock", "virgo" ) ),
		array( " icon ion-android-upload" => esc_html__( "android upload", "virgo" ) ),
		array( " icon ion-android-volume-down" => esc_html__( "android volume down", "virgo" ) ),
		array( " icon ion-android-volume-mute" => esc_html__( "android volume mute", "virgo" ) ),
		array( " icon ion-android-volume-off" => esc_html__( "android volume off", "virgo" ) ),
		array( " icon ion-android-volume-up" => esc_html__( "android volume up", "virgo" ) ),
		array( " icon ion-android-walk" => esc_html__( "android walk", "virgo" ) ),
		array( " icon ion-android-warning" => esc_html__( "android warning", "virgo" ) ),
		array( " icon ion-android-watch" => esc_html__( "android watch", "virgo" ) ),
		array( " icon ion-android-wifi" => esc_html__( "android wifi", "virgo" ) ),
		array( " icon ion-aperture" => esc_html__( "aperture", "virgo" ) ),
		array( " icon ion-archive" => esc_html__( "archive", "virgo" ) ),
		array( " icon ion-arrow-down-a" => esc_html__( "arrow down a", "virgo" ) ),
		array( " icon ion-arrow-down-b" => esc_html__( "arrow down b", "virgo" ) ),
		array( " icon ion-arrow-down-c" => esc_html__( "arrow down c", "virgo" ) ),
		array( " icon ion-arrow-expand" => esc_html__( "arrow expand", "virgo" ) ),
		array( " icon ion-arrow-graph-down-left" => esc_html__( "arrow graph down left", "virgo" ) ),
		array( " icon ion-arrow-graph-down-right" => esc_html__( "arrow graph down right", "virgo" ) ),
		array( " icon ion-arrow-graph-up-left" => esc_html__( "arrow graph up left", "virgo" ) ),
		array( " icon ion-arrow-graph-up-right" => esc_html__( "arrow graph up right", "virgo" ) ),
		array( " icon ion-arrow-left-a" => esc_html__( "arrow left a", "virgo" ) ),
		array( " icon ion-arrow-left-b" => esc_html__( "arrow left b", "virgo" ) ),
		array( " icon ion-arrow-left-c" => esc_html__( "arrow left c", "virgo" ) ),
		array( " icon ion-arrow-move" => esc_html__( "arrow move", "virgo" ) ),
		array( " icon ion-arrow-resize" => esc_html__( "arrow resize", "virgo" ) ),
		array( " icon ion-arrow-return-left" => esc_html__( "arrow return left", "virgo" ) ),
		array( " icon ion-arrow-return-right" => esc_html__( "arrow return right", "virgo" ) ),
		array( " icon ion-arrow-right-a" => esc_html__( "arrow right a", "virgo" ) ),
		array( " icon ion-arrow-right-b" => esc_html__( "arrow right b", "virgo" ) ),
		array( " icon ion-arrow-right-c" => esc_html__( "arrow right c", "virgo" ) ),
		array( " icon ion-arrow-shrink" => esc_html__( "arrow shrink", "virgo" ) ),
		array( " icon ion-arrow-swap" => esc_html__( "arrow swap", "virgo" ) ),
		array( " icon ion-arrow-up-a" => esc_html__( "arrow up a", "virgo" ) ),
		array( " icon ion-arrow-up-b" => esc_html__( "arrow up b", "virgo" ) ),
		array( " icon ion-arrow-up-c" => esc_html__( "arrow up c", "virgo" ) ),
		array( " icon ion-asterisk" => esc_html__( "asterisk", "virgo" ) ),
		array( " icon ion-at" => esc_html__( "at", "virgo" ) ),
		array( " icon ion-backspace" => esc_html__( "backspace", "virgo" ) ),
		array( " icon ion-backspace-outline" => esc_html__( "backspace outline", "virgo" ) ),
		array( " icon ion-bag" => esc_html__( "bag", "virgo" ) ),
		array( " icon ion-battery-charging" => esc_html__( "battery charging", "virgo" ) ),
		array( " icon ion-battery-empty" => esc_html__( "battery empty", "virgo" ) ),
		array( " icon ion-battery-full" => esc_html__( "battery full", "virgo" ) ),
		array( " icon ion-battery-half" => esc_html__( "battery half", "virgo" ) ),
		array( " icon ion-battery-low" => esc_html__( "battery low", "virgo" ) ),
		array( " icon ion-beaker" => esc_html__( "beaker", "virgo" ) ),
		array( " icon ion-beer" => esc_html__( "beer", "virgo" ) ),
		array( " icon ion-bluetooth" => esc_html__( "bluetooth", "virgo" ) ),
		array( " icon ion-bonfire" => esc_html__( "bonfire", "virgo" ) ),
		array( " icon ion-bookmark" => esc_html__( "bookmark", "virgo" ) ),
		array( " icon ion-bowtie" => esc_html__( "bowtie", "virgo" ) ),
		array( " icon ion-briefcase" => esc_html__( "briefcase", "virgo" ) ),
		array( " icon ion-bug" => esc_html__( "bug", "virgo" ) ),
		array( " icon ion-calculator" => esc_html__( "calculator", "virgo" ) ),
		array( " icon ion-calendar" => esc_html__( "calendar", "virgo" ) ),
		array( " icon ion-camera" => esc_html__( "camera", "virgo" ) ),
		array( " icon ion-card" => esc_html__( "card", "virgo" ) ),
		array( " icon ion-cash" => esc_html__( "cash", "virgo" ) ),
		array( " icon ion-chatbox" => esc_html__( "chatbox", "virgo" ) ),
		array( " icon ion-chatbox-working" => esc_html__( "chatbox working", "virgo" ) ),
		array( " icon ion-chatboxes" => esc_html__( "chatboxes", "virgo" ) ),
		array( " icon ion-chatbubble" => esc_html__( "chatbubble", "virgo" ) ),
		array( " icon ion-chatbubble-working" => esc_html__( "chatbubble working", "virgo" ) ),
		array( " icon ion-chatbubbles" => esc_html__( "chatbubbles", "virgo" ) ),
		array( " icon ion-checkmark" => esc_html__( "checkmark", "virgo" ) ),
		array( " icon ion-checkmark-circled" => esc_html__( "checkmark circled", "virgo" ) ),
		array( " icon ion-checkmark-round" => esc_html__( "checkmark round", "virgo" ) ),
		array( " icon ion-chevron-down" => esc_html__( "chevron down", "virgo" ) ),
		array( " icon ion-chevron-left" => esc_html__( "chevron left", "virgo" ) ),
		array( " icon ion-chevron-right" => esc_html__( "chevron right", "virgo" ) ),
		array( " icon ion-chevron-up" => esc_html__( "chevron up", "virgo" ) ),
		array( " icon ion-clipboard" => esc_html__( "clipboard", "virgo" ) ),
		array( " icon ion-clock" => esc_html__( "clock", "virgo" ) ),
		array( " icon ion-close" => esc_html__( "close", "virgo" ) ),
		array( " icon ion-close-circled" => esc_html__( "close circled", "virgo" ) ),
		array( " icon ion-close-round" => esc_html__( "close round", "virgo" ) ),
		array( " icon ion-closed-captioning" => esc_html__( "closed captioning", "virgo" ) ),
		array( " icon ion-cloud" => esc_html__( "cloud", "virgo" ) ),
		array( " icon ion-code" => esc_html__( "code", "virgo" ) ),
		array( " icon ion-code-download" => esc_html__( "code download", "virgo" ) ),
		array( " icon ion-code-working" => esc_html__( "code working", "virgo" ) ),
		array( " icon ion-coffee" => esc_html__( "coffee", "virgo" ) ),
		array( " icon ion-compass" => esc_html__( "compass", "virgo" ) ),
		array( " icon ion-compose" => esc_html__( "compose", "virgo" ) ),
		array( " icon ion-connection-bars" => esc_html__( "connection bars", "virgo" ) ),
		array( " icon ion-contrast" => esc_html__( "contrast", "virgo" ) ),
		array( " icon ion-crop" => esc_html__( "crop", "virgo" ) ),
		array( " icon ion-cube" => esc_html__( "cube", "virgo" ) ),
		array( " icon ion-disc" => esc_html__( "disc", "virgo" ) ),
		array( " icon ion-document" => esc_html__( "document", "virgo" ) ),
		array( " icon ion-document-text" => esc_html__( "document text", "virgo" ) ),
		array( " icon ion-drag" => esc_html__( "drag", "virgo" ) ),
		array( " icon ion-earth" => esc_html__( "earth", "virgo" ) ),
		array( " icon ion-easel" => esc_html__( "easel", "virgo" ) ),
		array( " icon ion-edit" => esc_html__( "edit", "virgo" ) ),
		array( " icon ion-egg" => esc_html__( "egg", "virgo" ) ),
		array( " icon ion-eject" => esc_html__( "eject", "virgo" ) ),
		array( " icon ion-email" => esc_html__( "email", "virgo" ) ),
		array( " icon ion-email-unread" => esc_html__( "email unread", "virgo" ) ),
		array( " icon ion-erlenmeyer-flask" => esc_html__( "erlenmeyer flask", "virgo" ) ),
		array( " icon ion-erlenmeyer-flask-bubbles" => esc_html__( "erlenmeyer flask bubbles", "virgo" ) ),
		array( " icon ion-eye" => esc_html__( "eye", "virgo" ) ),
		array( " icon ion-eye-disabled" => esc_html__( "eye disabled", "virgo" ) ),
		array( " icon ion-female" => esc_html__( "female", "virgo" ) ),
		array( " icon ion-filing" => esc_html__( "filing", "virgo" ) ),
		array( " icon ion-film-marker" => esc_html__( "film marker", "virgo" ) ),
		array( " icon ion-fireball" => esc_html__( "fireball", "virgo" ) ),
		array( " icon ion-flag" => esc_html__( "flag", "virgo" ) ),
		array( " icon ion-flame" => esc_html__( "flame", "virgo" ) ),
		array( " icon ion-flash" => esc_html__( "flash", "virgo" ) ),
		array( " icon ion-flash-off" => esc_html__( "flash off", "virgo" ) ),
		array( " icon ion-folder" => esc_html__( "folder", "virgo" ) ),
		array( " icon ion-fork" => esc_html__( "fork", "virgo" ) ),
		array( " icon ion-fork-repo" => esc_html__( "fork repo", "virgo" ) ),
		array( " icon ion-forward" => esc_html__( "forward", "virgo" ) ),
		array( " icon ion-funnel" => esc_html__( "funnel", "virgo" ) ),
		array( " icon ion-gear-a" => esc_html__( "gear a", "virgo" ) ),
		array( " icon ion-gear-b" => esc_html__( "gear b", "virgo" ) ),
		array( " icon ion-grid" => esc_html__( "grid", "virgo" ) ),
		array( " icon ion-hammer" => esc_html__( "hammer", "virgo" ) ),
		array( " icon ion-happy" => esc_html__( "happy", "virgo" ) ),
		array( " icon ion-happy-outline" => esc_html__( "happy outline", "virgo" ) ),
		array( " icon ion-headphone" => esc_html__( "headphone", "virgo" ) ),
		array( " icon ion-heart" => esc_html__( "heart", "virgo" ) ),
		array( " icon ion-heart-broken" => esc_html__( "heart broken", "virgo" ) ),
		array( " icon ion-help" => esc_html__( "help", "virgo" ) ),
		array( " icon ion-help-buoy" => esc_html__( "help buoy", "virgo" ) ),
		array( " icon ion-help-circled" => esc_html__( "help circled", "virgo" ) ),
		array( " icon ion-home" => esc_html__( "home", "virgo" ) ),
		array( " icon ion-icecream" => esc_html__( "icecream", "virgo" ) ),
		array( " icon ion-image" => esc_html__( "image", "virgo" ) ),
		array( " icon ion-images" => esc_html__( "images", "virgo" ) ),
		array( " icon ion-information" => esc_html__( "information", "virgo" ) ),
		array( " icon ion-information-circled" => esc_html__( "information circled", "virgo" ) ),
		array( " icon ion-ionic" => esc_html__( "ionic", "virgo" ) ),
		array( " icon ion-ios-alarm" => esc_html__( "ios alarm", "virgo" ) ),
		array( " icon ion-ios-alarm-outline" => esc_html__( "ios alarm outline", "virgo" ) ),
		array( " icon ion-ios-albums" => esc_html__( "ios albums", "virgo" ) ),
		array( " icon ion-ios-albums-outline" => esc_html__( "ios albums outline", "virgo" ) ),
		array( " icon ion-ios-americanfootball" => esc_html__( "ios americanfootball", "virgo" ) ),
		array( " icon ion-ios-americanfootball-outline" => esc_html__( "ios americanfootball outline", "virgo" ) ),
		array( " icon ion-ios-analytics" => esc_html__( "ios analytics", "virgo" ) ),
		array( " icon ion-ios-analytics-outline" => esc_html__( "ios analytics outline", "virgo" ) ),
		array( " icon ion-ios-arrow-back" => esc_html__( "ios arrow back", "virgo" ) ),
		array( " icon ion-ios-arrow-down" => esc_html__( "ios arrow down", "virgo" ) ),
		array( " icon ion-ios-arrow-forward" => esc_html__( "ios arrow forward", "virgo" ) ),
		array( " icon ion-ios-arrow-left" => esc_html__( "ios arrow left", "virgo" ) ),
		array( " icon ion-ios-arrow-right" => esc_html__( "ios arrow right", "virgo" ) ),
		array( " icon ion-ios-arrow-thin-down" => esc_html__( "ios arrow thin down", "virgo" ) ),
		array( " icon ion-ios-arrow-thin-left" => esc_html__( "ios arrow thin left", "virgo" ) ),
		array( " icon ion-ios-arrow-thin-right" => esc_html__( "ios arrow thin right", "virgo" ) ),
		array( " icon ion-ios-arrow-thin-up" => esc_html__( "ios arrow thin up", "virgo" ) ),
		array( " icon ion-ios-arrow-up" => esc_html__( "ios arrow up", "virgo" ) ),
		array( " icon ion-ios-at" => esc_html__( "ios at", "virgo" ) ),
		array( " icon ion-ios-at-outline" => esc_html__( "ios at outline", "virgo" ) ),
		array( " icon ion-ios-barcode" => esc_html__( "ios barcode", "virgo" ) ),
		array( " icon ion-ios-barcode-outline" => esc_html__( "ios barcode outline", "virgo" ) ),
		array( " icon ion-ios-baseball" => esc_html__( "ios baseball", "virgo" ) ),
		array( " icon ion-ios-baseball-outline" => esc_html__( "ios baseball outline", "virgo" ) ),
		array( " icon ion-ios-basketball" => esc_html__( "ios basketball", "virgo" ) ),
		array( " icon ion-ios-basketball-outline" => esc_html__( "ios basketball outline", "virgo" ) ),
		array( " icon ion-ios-bell" => esc_html__( "ios bell", "virgo" ) ),
		array( " icon ion-ios-bell-outline" => esc_html__( "ios bell outline", "virgo" ) ),
		array( " icon ion-ios-body" => esc_html__( "ios body", "virgo" ) ),
		array( " icon ion-ios-body-outline" => esc_html__( "ios body outline", "virgo" ) ),
		array( " icon ion-ios-bolt" => esc_html__( "ios bolt", "virgo" ) ),
		array( " icon ion-ios-bolt-outline" => esc_html__( "ios bolt outline", "virgo" ) ),
		array( " icon ion-ios-book" => esc_html__( "ios book", "virgo" ) ),
		array( " icon ion-ios-book-outline" => esc_html__( "ios book outline", "virgo" ) ),
		array( " icon ion-ios-bookmarks" => esc_html__( "ios bookmarks", "virgo" ) ),
		array( " icon ion-ios-bookmarks-outline" => esc_html__( "ios bookmarks outline", "virgo" ) ),
		array( " icon ion-ios-box" => esc_html__( "ios box", "virgo" ) ),
		array( " icon ion-ios-box-outline" => esc_html__( "ios box outline", "virgo" ) ),
		array( " icon ion-ios-briefcase" => esc_html__( "ios briefcase", "virgo" ) ),
		array( " icon ion-ios-briefcase-outline" => esc_html__( "ios briefcase outline", "virgo" ) ),
		array( " icon ion-ios-browsers" => esc_html__( "ios browsers", "virgo" ) ),
		array( " icon ion-ios-browsers-outline" => esc_html__( "ios browsers outline", "virgo" ) ),
		array( " icon ion-ios-calculator" => esc_html__( "ios calculator", "virgo" ) ),
		array( " icon ion-ios-calculator-outline" => esc_html__( "ios calculator outline", "virgo" ) ),
		array( " icon ion-ios-calendar" => esc_html__( "ios calendar", "virgo" ) ),
		array( " icon ion-ios-calendar-outline" => esc_html__( "ios calendar outline", "virgo" ) ),
		array( " icon ion-ios-camera" => esc_html__( "ios camera", "virgo" ) ),
		array( " icon ion-ios-camera-outline" => esc_html__( "ios camera outline", "virgo" ) ),
		array( " icon ion-ios-cart" => esc_html__( "ios cart", "virgo" ) ),
		array( " icon ion-ios-cart-outline" => esc_html__( "ios cart outline", "virgo" ) ),
		array( " icon ion-ios-chatboxes" => esc_html__( "ios chatboxes", "virgo" ) ),
		array( " icon ion-ios-chatboxes-outline" => esc_html__( "ios chatboxes outline", "virgo" ) ),
		array( " icon ion-ios-chatbubble" => esc_html__( "ios chatbubble", "virgo" ) ),
		array( " icon ion-ios-chatbubble-outline" => esc_html__( "ios chatbubble outline", "virgo" ) ),
		array( " icon ion-ios-checkmark" => esc_html__( "ios checkmark", "virgo" ) ),
		array( " icon ion-ios-checkmark-empty" => esc_html__( "ios checkmark empty", "virgo" ) ),
		array( " icon ion-ios-checkmark-outline" => esc_html__( "ios checkmark outline", "virgo" ) ),
		array( " icon ion-ios-circle-filled" => esc_html__( "ios circle filled", "virgo" ) ),
		array( " icon ion-ios-circle-outline" => esc_html__( "ios circle outline", "virgo" ) ),
		array( " icon ion-ios-clock" => esc_html__( "ios clock", "virgo" ) ),
		array( " icon ion-ios-clock-outline" => esc_html__( "ios clock outline", "virgo" ) ),
		array( " icon ion-ios-close" => esc_html__( "ios close", "virgo" ) ),
		array( " icon ion-ios-close-empty" => esc_html__( "ios close empty", "virgo" ) ),
		array( " icon ion-ios-close-outline" => esc_html__( "ios close outline", "virgo" ) ),
		array( " icon ion-ios-cloud" => esc_html__( "ios cloud", "virgo" ) ),
		array( " icon ion-ios-cloud-download" => esc_html__( "ios cloud download", "virgo" ) ),
		array( " icon ion-ios-cloud-download-outline" => esc_html__( "ios cloud download outline", "virgo" ) ),
		array( " icon ion-ios-cloud-outline" => esc_html__( "ios cloud outline", "virgo" ) ),
		array( " icon ion-ios-cloud-upload" => esc_html__( "ios cloud upload", "virgo" ) ),
		array( " icon ion-ios-cloud-upload-outline" => esc_html__( "ios cloud upload outline", "virgo" ) ),
		array( " icon ion-ios-cloudy" => esc_html__( "ios cloudy", "virgo" ) ),
		array( " icon ion-ios-cloudy-night" => esc_html__( "ios cloudy night", "virgo" ) ),
		array( " icon ion-ios-cloudy-night-outline" => esc_html__( "ios cloudy night outline", "virgo" ) ),
		array( " icon ion-ios-cloudy-outline" => esc_html__( "ios cloudy outline", "virgo" ) ),
		array( " icon ion-ios-cog" => esc_html__( "ios cog", "virgo" ) ),
		array( " icon ion-ios-cog-outline" => esc_html__( "ios cog outline", "virgo" ) ),
		array( " icon ion-ios-color-filter" => esc_html__( "ios color filter", "virgo" ) ),
		array( " icon ion-ios-color-filter-outline" => esc_html__( "ios color filter outline", "virgo" ) ),
		array( " icon ion-ios-color-wand" => esc_html__( "ios color wand", "virgo" ) ),
		array( " icon ion-ios-color-wand-outline" => esc_html__( "ios color wand outline", "virgo" ) ),
		array( " icon ion-ios-compose" => esc_html__( "ios compose", "virgo" ) ),
		array( " icon ion-ios-compose-outline" => esc_html__( "ios compose outline", "virgo" ) ),
		array( " icon ion-ios-contact" => esc_html__( "ios contact", "virgo" ) ),
		array( " icon ion-ios-contact-outline" => esc_html__( "ios contact outline", "virgo" ) ),
		array( " icon ion-ios-copy" => esc_html__( "ios copy", "virgo" ) ),
		array( " icon ion-ios-copy-outline" => esc_html__( "ios copy outline", "virgo" ) ),
		array( " icon ion-ios-crop" => esc_html__( "ios crop", "virgo" ) ),
		array( " icon ion-ios-crop-strong" => esc_html__( "ios crop strong", "virgo" ) ),
		array( " icon ion-ios-download" => esc_html__( "ios download", "virgo" ) ),
		array( " icon ion-ios-download-outline" => esc_html__( "ios download outline", "virgo" ) ),
		array( " icon ion-ios-drag" => esc_html__( "ios drag", "virgo" ) ),
		array( " icon ion-ios-email" => esc_html__( "ios email", "virgo" ) ),
		array( " icon ion-ios-email-outline" => esc_html__( "ios email outline", "virgo" ) ),
		array( " icon ion-ios-eye" => esc_html__( "ios eye", "virgo" ) ),
		array( " icon ion-ios-eye-outline" => esc_html__( "ios eye outline", "virgo" ) ),
		array( " icon ion-ios-fastforward" => esc_html__( "ios fastforward", "virgo" ) ),
		array( " icon ion-ios-fastforward-outline" => esc_html__( "ios fastforward outline", "virgo" ) ),
		array( " icon ion-ios-filing" => esc_html__( "ios filing", "virgo" ) ),
		array( " icon ion-ios-filing-outline" => esc_html__( "ios filing outline", "virgo" ) ),
		array( " icon ion-ios-film" => esc_html__( "ios film", "virgo" ) ),
		array( " icon ion-ios-film-outline" => esc_html__( "ios film outline", "virgo" ) ),
		array( " icon ion-ios-flag" => esc_html__( "ios flag", "virgo" ) ),
		array( " icon ion-ios-flag-outline" => esc_html__( "ios flag outline", "virgo" ) ),
		array( " icon ion-ios-flame" => esc_html__( "ios flame", "virgo" ) ),
		array( " icon ion-ios-flame-outline" => esc_html__( "ios flame outline", "virgo" ) ),
		array( " icon ion-ios-flask" => esc_html__( "ios flask", "virgo" ) ),
		array( " icon ion-ios-flask-outline" => esc_html__( "ios flask outline", "virgo" ) ),
		array( " icon ion-ios-flower" => esc_html__( "ios flower", "virgo" ) ),
		array( " icon ion-ios-flower-outline" => esc_html__( "ios flower outline", "virgo" ) ),
		array( " icon ion-ios-folder" => esc_html__( "ios folder", "virgo" ) ),
		array( " icon ion-ios-folder-outline" => esc_html__( "ios folder outline", "virgo" ) ),
		array( " icon ion-ios-football" => esc_html__( "ios football", "virgo" ) ),
		array( " icon ion-ios-football-outline" => esc_html__( "ios football outline", "virgo" ) ),
		array( " icon ion-ios-game-controller-a" => esc_html__( "ios game controller a", "virgo" ) ),
		array( " icon ion-ios-game-controller-a-outline" => esc_html__( "ios game controller a outline", "virgo" ) ),
		array( " icon ion-ios-game-controller-b" => esc_html__( "ios game controller b", "virgo" ) ),
		array( " icon ion-ios-game-controller-b-outline" => esc_html__( "ios game controller b outline", "virgo" ) ),
		array( " icon ion-ios-gear" => esc_html__( "ios gear", "virgo" ) ),
		array( " icon ion-ios-gear-outline" => esc_html__( "ios gear outline", "virgo" ) ),
		array( " icon ion-ios-glasses" => esc_html__( "ios glasses", "virgo" ) ),
		array( " icon ion-ios-glasses-outline" => esc_html__( "ios glasses outline", "virgo" ) ),
		array( " icon ion-ios-grid-view" => esc_html__( "ios grid view", "virgo" ) ),
		array( " icon ion-ios-grid-view-outline" => esc_html__( "ios grid view outline", "virgo" ) ),
		array( " icon ion-ios-heart" => esc_html__( "ios heart", "virgo" ) ),
		array( " icon ion-ios-heart-outline" => esc_html__( "ios heart outline", "virgo" ) ),
		array( " icon ion-ios-help" => esc_html__( "ios help", "virgo" ) ),
		array( " icon ion-ios-help-empty" => esc_html__( "ios help empty", "virgo" ) ),
		array( " icon ion-ios-help-outline" => esc_html__( "ios help outline", "virgo" ) ),
		array( " icon ion-ios-home" => esc_html__( "ios home", "virgo" ) ),
		array( " icon ion-ios-home-outline" => esc_html__( "ios home outline", "virgo" ) ),
		array( " icon ion-ios-infinite" => esc_html__( "ios infinite", "virgo" ) ),
		array( " icon ion-ios-infinite-outline" => esc_html__( "ios infinite outline", "virgo" ) ),
		array( " icon ion-ios-information" => esc_html__( "ios information", "virgo" ) ),
		array( " icon ion-ios-information-empty" => esc_html__( "ios information empty", "virgo" ) ),
		array( " icon ion-ios-information-outline" => esc_html__( "ios information outline", "virgo" ) ),
		array( " icon ion-ios-ionic-outline" => esc_html__( "ios ionic outline", "virgo" ) ),
		array( " icon ion-ios-keypad" => esc_html__( "ios keypad", "virgo" ) ),
		array( " icon ion-ios-keypad-outline" => esc_html__( "ios keypad outline", "virgo" ) ),
		array( " icon ion-ios-lightbulb" => esc_html__( "ios lightbulb", "virgo" ) ),
		array( " icon ion-ios-lightbulb-outline" => esc_html__( "ios lightbulb outline", "virgo" ) ),
		array( " icon ion-ios-list" => esc_html__( "ios list", "virgo" ) ),
		array( " icon ion-ios-list-outline" => esc_html__( "ios list outline", "virgo" ) ),
		array( " icon ion-ios-location" => esc_html__( "ios location", "virgo" ) ),
		array( " icon ion-ios-location-outline" => esc_html__( "ios location outline", "virgo" ) ),
		array( " icon ion-ios-locked" => esc_html__( "ios locked", "virgo" ) ),
		array( " icon ion-ios-locked-outline" => esc_html__( "ios locked outline", "virgo" ) ),
		array( " icon ion-ios-loop" => esc_html__( "ios loop", "virgo" ) ),
		array( " icon ion-ios-loop-strong" => esc_html__( "ios loop strong", "virgo" ) ),
		array( " icon ion-ios-medical" => esc_html__( "ios medical", "virgo" ) ),
		array( " icon ion-ios-medical-outline" => esc_html__( "ios medical outline", "virgo" ) ),
		array( " icon ion-ios-medkit" => esc_html__( "ios medkit", "virgo" ) ),
		array( " icon ion-ios-medkit-outline" => esc_html__( "ios medkit outline", "virgo" ) ),
		array( " icon ion-ios-mic" => esc_html__( "ios mic", "virgo" ) ),
		array( " icon ion-ios-mic-off" => esc_html__( "ios mic off", "virgo" ) ),
		array( " icon ion-ios-mic-outline" => esc_html__( "ios mic outline", "virgo" ) ),
		array( " icon ion-ios-minus" => esc_html__( "ios minus", "virgo" ) ),
		array( " icon ion-ios-minus-empty" => esc_html__( "ios minus empty", "virgo" ) ),
		array( " icon ion-ios-minus-outline" => esc_html__( "ios minus outline", "virgo" ) ),
		array( " icon ion-ios-monitor" => esc_html__( "ios monitor", "virgo" ) ),
		array( " icon ion-ios-monitor-outline" => esc_html__( "ios monitor outline", "virgo" ) ),
		array( " icon ion-ios-moon" => esc_html__( "ios moon", "virgo" ) ),
		array( " icon ion-ios-moon-outline" => esc_html__( "ios moon outline", "virgo" ) ),
		array( " icon ion-ios-more" => esc_html__( "ios more", "virgo" ) ),
		array( " icon ion-ios-more-outline" => esc_html__( "ios more outline", "virgo" ) ),
		array( " icon ion-ios-musical-note" => esc_html__( "ios musical note", "virgo" ) ),
		array( " icon ion-ios-musical-notes" => esc_html__( "ios musical notes", "virgo" ) ),
		array( " icon ion-ios-navigate" => esc_html__( "ios navigate", "virgo" ) ),
		array( " icon ion-ios-navigate-outline" => esc_html__( "ios navigate outline", "virgo" ) ),
		array( " icon ion-ios-nutrition" => esc_html__( "ios nutrition", "virgo" ) ),
		array( " icon ion-ios-nutrition-outline" => esc_html__( "ios nutrition outline", "virgo" ) ),
		array( " icon ion-ios-paper" => esc_html__( "ios paper", "virgo" ) ),
		array( " icon ion-ios-paper-outline" => esc_html__( "ios paper outline", "virgo" ) ),
		array( " icon ion-ios-paperplane" => esc_html__( "ios paperplane", "virgo" ) ),
		array( " icon ion-ios-paperplane-outline" => esc_html__( "ios paperplane outline", "virgo" ) ),
		array( " icon ion-ios-partlysunny" => esc_html__( "ios partlysunny", "virgo" ) ),
		array( " icon ion-ios-partlysunny-outline" => esc_html__( "ios partlysunny outline", "virgo" ) ),
		array( " icon ion-ios-pause" => esc_html__( "ios pause", "virgo" ) ),
		array( " icon ion-ios-pause-outline" => esc_html__( "ios pause outline", "virgo" ) ),
		array( " icon ion-ios-paw" => esc_html__( "ios paw", "virgo" ) ),
		array( " icon ion-ios-paw-outline" => esc_html__( "ios paw outline", "virgo" ) ),
		array( " icon ion-ios-people" => esc_html__( "ios people", "virgo" ) ),
		array( " icon ion-ios-people-outline" => esc_html__( "ios people outline", "virgo" ) ),
		array( " icon ion-ios-person" => esc_html__( "ios person", "virgo" ) ),
		array( " icon ion-ios-person-outline" => esc_html__( "ios person outline", "virgo" ) ),
		array( " icon ion-ios-personadd" => esc_html__( "ios personadd", "virgo" ) ),
		array( " icon ion-ios-personadd-outline" => esc_html__( "ios personadd outline", "virgo" ) ),
		array( " icon ion-ios-photos" => esc_html__( "ios photos", "virgo" ) ),
		array( " icon ion-ios-photos-outline" => esc_html__( "ios photos outline", "virgo" ) ),
		array( " icon ion-ios-pie" => esc_html__( "ios pie", "virgo" ) ),
		array( " icon ion-ios-pie-outline" => esc_html__( "ios pie outline", "virgo" ) ),
		array( " icon ion-ios-pint" => esc_html__( "ios pint", "virgo" ) ),
		array( " icon ion-ios-pint-outline" => esc_html__( "ios pint outline", "virgo" ) ),
		array( " icon ion-ios-play" => esc_html__( "ios play", "virgo" ) ),
		array( " icon ion-ios-play-outline" => esc_html__( "ios play outline", "virgo" ) ),
		array( " icon ion-ios-plus" => esc_html__( "ios plus", "virgo" ) ),
		array( " icon ion-ios-plus-empty" => esc_html__( "ios plus empty", "virgo" ) ),
		array( " icon ion-ios-plus-outline" => esc_html__( "ios plus outline", "virgo" ) ),
		array( " icon ion-ios-pricetag" => esc_html__( "ios pricetag", "virgo" ) ),
		array( " icon ion-ios-pricetag-outline" => esc_html__( "ios pricetag outline", "virgo" ) ),
		array( " icon ion-ios-pricetags" => esc_html__( "ios pricetags", "virgo" ) ),
		array( " icon ion-ios-pricetags-outline" => esc_html__( "ios pricetags outline", "virgo" ) ),
		array( " icon ion-ios-printer" => esc_html__( "ios printer", "virgo" ) ),
		array( " icon ion-ios-printer-outline" => esc_html__( "ios printer outline", "virgo" ) ),
		array( " icon ion-ios-pulse" => esc_html__( "ios pulse", "virgo" ) ),
		array( " icon ion-ios-pulse-strong" => esc_html__( "ios pulse strong", "virgo" ) ),
		array( " icon ion-ios-rainy" => esc_html__( "ios rainy", "virgo" ) ),
		array( " icon ion-ios-rainy-outline" => esc_html__( "ios rainy outline", "virgo" ) ),
		array( " icon ion-ios-recording" => esc_html__( "ios recording", "virgo" ) ),
		array( " icon ion-ios-recording-outline" => esc_html__( "ios recording outline", "virgo" ) ),
		array( " icon ion-ios-redo" => esc_html__( "ios redo", "virgo" ) ),
		array( " icon ion-ios-redo-outline" => esc_html__( "ios redo outline", "virgo" ) ),
		array( " icon ion-ios-refresh" => esc_html__( "ios refresh", "virgo" ) ),
		array( " icon ion-ios-refresh-empty" => esc_html__( "ios refresh empty", "virgo" ) ),
		array( " icon ion-ios-refresh-outline" => esc_html__( "ios refresh outline", "virgo" ) ),
		array( " icon ion-ios-reload" => esc_html__( "ios reload", "virgo" ) ),
		array( " icon ion-ios-reverse-camera" => esc_html__( "ios reverse camera", "virgo" ) ),
		array( " icon ion-ios-reverse-camera-outline" => esc_html__( "ios reverse camera outline", "virgo" ) ),
		array( " icon ion-ios-rewind" => esc_html__( "ios rewind", "virgo" ) ),
		array( " icon ion-ios-rewind-outline" => esc_html__( "ios rewind outline", "virgo" ) ),
		array( " icon ion-ios-rose" => esc_html__( "ios rose", "virgo" ) ),
		array( " icon ion-ios-rose-outline" => esc_html__( "ios rose outline", "virgo" ) ),
		array( " icon ion-ios-search" => esc_html__( "ios search", "virgo" ) ),
		array( " icon ion-ios-search-strong" => esc_html__( "ios search strong", "virgo" ) ),
		array( " icon ion-ios-settings" => esc_html__( "ios settings", "virgo" ) ),
		array( " icon ion-ios-settings-strong" => esc_html__( "ios settings strong", "virgo" ) ),
		array( " icon ion-ios-shuffle" => esc_html__( "ios shuffle", "virgo" ) ),
		array( " icon ion-ios-shuffle-strong" => esc_html__( "ios shuffle strong", "virgo" ) ),
		array( " icon ion-ios-skipbackward" => esc_html__( "ios skipbackward", "virgo" ) ),
		array( " icon ion-ios-skipbackward-outline" => esc_html__( "ios skipbackward outline", "virgo" ) ),
		array( " icon ion-ios-skipforward" => esc_html__( "ios skipforward", "virgo" ) ),
		array( " icon ion-ios-skipforward-outline" => esc_html__( "ios skipforward outline", "virgo" ) ),
		array( " icon ion-ios-snowy" => esc_html__( "ios snowy", "virgo" ) ),
		array( " icon ion-ios-speedometer" => esc_html__( "ios speedometer", "virgo" ) ),
		array( " icon ion-ios-speedometer-outline" => esc_html__( "ios speedometer outline", "virgo" ) ),
		array( " icon ion-ios-star" => esc_html__( "ios star", "virgo" ) ),
		array( " icon ion-ios-star-half" => esc_html__( "ios star half", "virgo" ) ),
		array( " icon ion-ios-star-outline" => esc_html__( "ios star outline", "virgo" ) ),
		array( " icon ion-ios-stopwatch" => esc_html__( "ios stopwatch", "virgo" ) ),
		array( " icon ion-ios-stopwatch-outline" => esc_html__( "ios stopwatch outline", "virgo" ) ),
		array( " icon ion-ios-sunny" => esc_html__( "ios sunny", "virgo" ) ),
		array( " icon ion-ios-sunny-outline" => esc_html__( "ios sunny outline", "virgo" ) ),
		array( " icon ion-ios-telephone" => esc_html__( "ios telephone", "virgo" ) ),
		array( " icon ion-ios-telephone-outline" => esc_html__( "ios telephone outline", "virgo" ) ),
		array( " icon ion-ios-tennisball" => esc_html__( "ios tennisball", "virgo" ) ),
		array( " icon ion-ios-tennisball-outline" => esc_html__( "ios tennisball outline", "virgo" ) ),
		array( " icon ion-ios-thunderstorm" => esc_html__( "ios thunderstorm", "virgo" ) ),
		array( " icon ion-ios-thunderstorm-outline" => esc_html__( "ios thunderstorm outline", "virgo" ) ),
		array( " icon ion-ios-time" => esc_html__( "ios time", "virgo" ) ),
		array( " icon ion-ios-time-outline" => esc_html__( "ios time outline", "virgo" ) ),
		array( " icon ion-ios-timer" => esc_html__( "ios timer", "virgo" ) ),
		array( " icon ion-ios-timer-outline" => esc_html__( "ios timer outline", "virgo" ) ),
		array( " icon ion-ios-toggle" => esc_html__( "ios toggle", "virgo" ) ),
		array( " icon ion-ios-toggle-outline" => esc_html__( "ios toggle outline", "virgo" ) ),
		array( " icon ion-ios-trash" => esc_html__( "ios trash", "virgo" ) ),
		array( " icon ion-ios-trash-outline" => esc_html__( "ios trash outline", "virgo" ) ),
		array( " icon ion-ios-undo" => esc_html__( "ios undo", "virgo" ) ),
		array( " icon ion-ios-undo-outline" => esc_html__( "ios undo outline", "virgo" ) ),
		array( " icon ion-ios-unlocked" => esc_html__( "ios unlocked", "virgo" ) ),
		array( " icon ion-ios-unlocked-outline" => esc_html__( "ios unlocked outline", "virgo" ) ),
		array( " icon ion-ios-upload" => esc_html__( "ios upload", "virgo" ) ),
		array( " icon ion-ios-upload-outline" => esc_html__( "ios upload outline", "virgo" ) ),
		array( " icon ion-ios-videocam" => esc_html__( "ios videocam", "virgo" ) ),
		array( " icon ion-ios-videocam-outline" => esc_html__( "ios videocam outline", "virgo" ) ),
		array( " icon ion-ios-volume-high" => esc_html__( "ios volume high", "virgo" ) ),
		array( " icon ion-ios-volume-low" => esc_html__( "ios volume low", "virgo" ) ),
		array( " icon ion-ios-wineglass" => esc_html__( "ios wineglass", "virgo" ) ),
		array( " icon ion-ios-wineglass-outline" => esc_html__( "ios wineglass outline", "virgo" ) ),
		array( " icon ion-ios-world" => esc_html__( "ios world", "virgo" ) ),
		array( " icon ion-ios-world-outline" => esc_html__( "ios world outline", "virgo" ) ),
		array( " icon ion-ipad" => esc_html__( "ipad", "virgo" ) ),
		array( " icon ion-iphone" => esc_html__( "iphone", "virgo" ) ),
		array( " icon ion-ipod" => esc_html__( "ipod", "virgo" ) ),
		array( " icon ion-jet" => esc_html__( "jet", "virgo" ) ),
		array( " icon ion-key" => esc_html__( "key", "virgo" ) ),
		array( " icon ion-knife" => esc_html__( "knife", "virgo" ) ),
		array( " icon ion-laptop" => esc_html__( "laptop", "virgo" ) ),
		array( " icon ion-leaf" => esc_html__( "leaf", "virgo" ) ),
		array( " icon ion-levels" => esc_html__( "levels", "virgo" ) ),
		array( " icon ion-lightbulb" => esc_html__( "lightbulb", "virgo" ) ),
		array( " icon ion-link" => esc_html__( "link", "virgo" ) ),
		array( " icon ion-load-a" => esc_html__( "load a", "virgo" ) ),
		array( " icon ion-load-b" => esc_html__( "load b", "virgo" ) ),
		array( " icon ion-load-c" => esc_html__( "load c", "virgo" ) ),
		array( " icon ion-load-d" => esc_html__( "load d", "virgo" ) ),
		array( " icon ion-location" => esc_html__( "location", "virgo" ) ),
		array( " icon ion-lock-combination" => esc_html__( "lock combination", "virgo" ) ),
		array( " icon ion-locked" => esc_html__( "locked", "virgo" ) ),
		array( " icon ion-log-in" => esc_html__( "log in", "virgo" ) ),
		array( " icon ion-log-out" => esc_html__( "log out", "virgo" ) ),
		array( " icon ion-loop" => esc_html__( "loop", "virgo" ) ),
		array( " icon ion-magnet" => esc_html__( "magnet", "virgo" ) ),
		array( " icon ion-male" => esc_html__( "male", "virgo" ) ),
		array( " icon ion-man" => esc_html__( "man", "virgo" ) ),
		array( " icon ion-map" => esc_html__( "map", "virgo" ) ),
		array( " icon ion-medkit" => esc_html__( "medkit", "virgo" ) ),
		array( " icon ion-merge" => esc_html__( "merge", "virgo" ) ),
		array( " icon ion-mic-a" => esc_html__( "mic a", "virgo" ) ),
		array( " icon ion-mic-b" => esc_html__( "mic b", "virgo" ) ),
		array( " icon ion-mic-c" => esc_html__( "mic c", "virgo" ) ),
		array( " icon ion-minus" => esc_html__( "minus", "virgo" ) ),
		array( " icon ion-minus-circled" => esc_html__( "minus circled", "virgo" ) ),
		array( " icon ion-minus-round" => esc_html__( "minus round", "virgo" ) ),
		array( " icon ion-model-s" => esc_html__( "model s", "virgo" ) ),
		array( " icon ion-monitor" => esc_html__( "monitor", "virgo" ) ),
		array( " icon ion-more" => esc_html__( "more", "virgo" ) ),
		array( " icon ion-mouse" => esc_html__( "mouse", "virgo" ) ),
		array( " icon ion-music-note" => esc_html__( "music note", "virgo" ) ),
		array( " icon ion-navicon" => esc_html__( "navicon", "virgo" ) ),
		array( " icon ion-navicon-round" => esc_html__( "navicon round", "virgo" ) ),
		array( " icon ion-navigate" => esc_html__( "navigate", "virgo" ) ),
		array( " icon ion-network" => esc_html__( "network", "virgo" ) ),
		array( " icon ion-no-smoking" => esc_html__( "no smoking", "virgo" ) ),
		array( " icon ion-nuclear" => esc_html__( "nuclear", "virgo" ) ),
		array( " icon ion-outlet" => esc_html__( "outlet", "virgo" ) ),
		array( " icon ion-paintbrush" => esc_html__( "paintbrush", "virgo" ) ),
		array( " icon ion-paintbucket" => esc_html__( "paintbucket", "virgo" ) ),
		array( " icon ion-paper-airplane" => esc_html__( "paper airplane", "virgo" ) ),
		array( " icon ion-paperclip" => esc_html__( "paperclip", "virgo" ) ),
		array( " icon ion-pause" => esc_html__( "pause", "virgo" ) ),
		array( " icon ion-person" => esc_html__( "person", "virgo" ) ),
		array( " icon ion-person-add" => esc_html__( "person add", "virgo" ) ),
		array( " icon ion-person-stalker" => esc_html__( "person stalker", "virgo" ) ),
		array( " icon ion-pie-graph" => esc_html__( "pie graph", "virgo" ) ),
		array( " icon ion-pin" => esc_html__( "pin", "virgo" ) ),
		array( " icon ion-pinpoint" => esc_html__( "pinpoint", "virgo" ) ),
		array( " icon ion-pizza" => esc_html__( "pizza", "virgo" ) ),
		array( " icon ion-plane" => esc_html__( "plane", "virgo" ) ),
		array( " icon ion-planet" => esc_html__( "planet", "virgo" ) ),
		array( " icon ion-play" => esc_html__( "play", "virgo" ) ),
		array( " icon ion-playstation" => esc_html__( "playstation", "virgo" ) ),
		array( " icon ion-plus" => esc_html__( "plus", "virgo" ) ),
		array( " icon ion-plus-circled" => esc_html__( "plus circled", "virgo" ) ),
		array( " icon ion-plus-round" => esc_html__( "plus round", "virgo" ) ),
		array( " icon ion-podium" => esc_html__( "podium", "virgo" ) ),
		array( " icon ion-pound" => esc_html__( "pound", "virgo" ) ),
		array( " icon ion-power" => esc_html__( "power", "virgo" ) ),
		array( " icon ion-pricetag" => esc_html__( "pricetag", "virgo" ) ),
		array( " icon ion-pricetags" => esc_html__( "pricetags", "virgo" ) ),
		array( " icon ion-printer" => esc_html__( "printer", "virgo" ) ),
		array( " icon ion-pull-request" => esc_html__( "pull request", "virgo" ) ),
		array( " icon ion-qr-scanner" => esc_html__( "qr scanner", "virgo" ) ),
		array( " icon ion-quote" => esc_html__( "quote", "virgo" ) ),
		array( " icon ion-radio-waves" => esc_html__( "radio waves", "virgo" ) ),
		array( " icon ion-record" => esc_html__( "record", "virgo" ) ),
		array( " icon ion-refresh" => esc_html__( "refresh", "virgo" ) ),
		array( " icon ion-reply" => esc_html__( "reply", "virgo" ) ),
		array( " icon ion-reply-all" => esc_html__( "reply all", "virgo" ) ),
		array( " icon ion-ribbon-a" => esc_html__( "ribbon a", "virgo" ) ),
		array( " icon ion-ribbon-b" => esc_html__( "ribbon b", "virgo" ) ),
		array( " icon ion-sad" => esc_html__( "sad", "virgo" ) ),
		array( " icon ion-sad-outline" => esc_html__( "sad outline", "virgo" ) ),
		array( " icon ion-scissors" => esc_html__( "scissors", "virgo" ) ),
		array( " icon ion-search" => esc_html__( "search", "virgo" ) ),
		array( " icon ion-settings" => esc_html__( "settings", "virgo" ) ),
		array( " icon ion-share" => esc_html__( "share", "virgo" ) ),
		array( " icon ion-shuffle" => esc_html__( "shuffle", "virgo" ) ),
		array( " icon ion-skip-backward" => esc_html__( "skip backward", "virgo" ) ),
		array( " icon ion-skip-forward" => esc_html__( "skip forward", "virgo" ) ),
		array( " icon ion-social-android" => esc_html__( "social android", "virgo" ) ),
		array( " icon ion-social-android-outline" => esc_html__( "social android outline", "virgo" ) ),
		array( " icon ion-social-angular" => esc_html__( "social angular", "virgo" ) ),
		array( " icon ion-social-angular-outline" => esc_html__( "social angular outline", "virgo" ) ),
		array( " icon ion-social-apple" => esc_html__( "social apple", "virgo" ) ),
		array( " icon ion-social-apple-outline" => esc_html__( "social apple outline", "virgo" ) ),
		array( " icon ion-social-bitcoin" => esc_html__( "social bitcoin", "virgo" ) ),
		array( " icon ion-social-bitcoin-outline" => esc_html__( "social bitcoin outline", "virgo" ) ),
		array( " icon ion-social-buffer" => esc_html__( "social buffer", "virgo" ) ),
		array( " icon ion-social-buffer-outline" => esc_html__( "social buffer outline", "virgo" ) ),
		array( " icon ion-social-chrome" => esc_html__( "social chrome", "virgo" ) ),
		array( " icon ion-social-chrome-outline" => esc_html__( "social chrome outline", "virgo" ) ),
		array( " icon ion-social-codepen" => esc_html__( "social codepen", "virgo" ) ),
		array( " icon ion-social-codepen-outline" => esc_html__( "social codepen outline", "virgo" ) ),
		array( " icon ion-social-css3" => esc_html__( "social css3", "virgo" ) ),
		array( " icon ion-social-css3-outline" => esc_html__( "social css3 outline", "virgo" ) ),
		array( " icon ion-social-designernews" => esc_html__( "social designernews", "virgo" ) ),
		array( " icon ion-social-designernews-outline" => esc_html__( "social designernews outline", "virgo" ) ),
		array( " icon ion-social-dribbble" => esc_html__( "social dribbble", "virgo" ) ),
		array( " icon ion-social-dribbble-outline" => esc_html__( "social dribbble outline", "virgo" ) ),
		array( " icon ion-social-dropbox" => esc_html__( "social dropbox", "virgo" ) ),
		array( " icon ion-social-dropbox-outline" => esc_html__( "social dropbox outline", "virgo" ) ),
		array( " icon ion-social-euro" => esc_html__( "social euro", "virgo" ) ),
		array( " icon ion-social-euro-outline" => esc_html__( "social euro outline", "virgo" ) ),
		array( " icon ion-social-facebook" => esc_html__( "social facebook", "virgo" ) ),
		array( " icon ion-social-facebook-outline" => esc_html__( "social facebook outline", "virgo" ) ),
		array( " icon ion-social-foursquare" => esc_html__( "social foursquare", "virgo" ) ),
		array( " icon ion-social-foursquare-outline" => esc_html__( "social foursquare outline", "virgo" ) ),
		array( " icon ion-social-freebsd-devil" => esc_html__( "social freebsd devil", "virgo" ) ),
		array( " icon ion-social-github" => esc_html__( "social github", "virgo" ) ),
		array( " icon ion-social-github-outline" => esc_html__( "social github outline", "virgo" ) ),
		array( " icon ion-social-google" => esc_html__( "social google", "virgo" ) ),
		array( " icon ion-social-google-outline" => esc_html__( "social google outline", "virgo" ) ),
		array( " icon ion-social-googleplus" => esc_html__( "social googleplus", "virgo" ) ),
		array( " icon ion-social-googleplus-outline" => esc_html__( "social googleplus outline", "virgo" ) ),
		array( " icon ion-social-hackernews" => esc_html__( "social hackernews", "virgo" ) ),
		array( " icon ion-social-hackernews-outline" => esc_html__( "social hackernews outline", "virgo" ) ),
		array( " icon ion-social-html5" => esc_html__( "social html5", "virgo" ) ),
		array( " icon ion-social-html5-outline" => esc_html__( "social html5 outline", "virgo" ) ),
		array( " icon ion-social-instagram" => esc_html__( "social instagram", "virgo" ) ),
		array( " icon ion-social-instagram-outline" => esc_html__( "social instagram outline", "virgo" ) ),
		array( " icon ion-social-javascript" => esc_html__( "social javascript", "virgo" ) ),
		array( " icon ion-social-javascript-outline" => esc_html__( "social javascript outline", "virgo" ) ),
		array( " icon ion-social-linkedin" => esc_html__( "social linkedin", "virgo" ) ),
		array( " icon ion-social-linkedin-outline" => esc_html__( "social linkedin outline", "virgo" ) ),
		array( " icon ion-social-markdown" => esc_html__( "social markdown", "virgo" ) ),
		array( " icon ion-social-nodejs" => esc_html__( "social nodejs", "virgo" ) ),
		array( " icon ion-social-octocat" => esc_html__( "social octocat", "virgo" ) ),
		array( " icon ion-social-pinterest" => esc_html__( "social pinterest", "virgo" ) ),
		array( " icon ion-social-pinterest-outline" => esc_html__( "social pinterest outline", "virgo" ) ),
		array( " icon ion-social-python" => esc_html__( "social python", "virgo" ) ),
		array( " icon ion-social-reddit" => esc_html__( "social reddit", "virgo" ) ),
		array( " icon ion-social-reddit-outline" => esc_html__( "social reddit outline", "virgo" ) ),
		array( " icon ion-social-rss" => esc_html__( "social rss", "virgo" ) ),
		array( " icon ion-social-rss-outline" => esc_html__( "social rss outline", "virgo" ) ),
		array( " icon ion-social-sass" => esc_html__( "social sass", "virgo" ) ),
		array( " icon ion-social-skype" => esc_html__( "social skype", "virgo" ) ),
		array( " icon ion-social-skype-outline" => esc_html__( "social skype outline", "virgo" ) ),
		array( " icon ion-social-snapchat" => esc_html__( "social snapchat", "virgo" ) ),
		array( " icon ion-social-snapchat-outline" => esc_html__( "social snapchat outline", "virgo" ) ),
		array( " icon ion-social-tumblr" => esc_html__( "social tumblr", "virgo" ) ),
		array( " icon ion-social-tumblr-outline" => esc_html__( "social tumblr outline", "virgo" ) ),
		array( " icon ion-social-tux" => esc_html__( "social tux", "virgo" ) ),
		array( " icon ion-social-twitch" => esc_html__( "social twitch", "virgo" ) ),
		array( " icon ion-social-twitch-outline" => esc_html__( "social twitch outline", "virgo" ) ),
		array( " icon ion-social-twitter" => esc_html__( "social twitter", "virgo" ) ),
		array( " icon ion-social-twitter-outline" => esc_html__( "social twitter outline", "virgo" ) ),
		array( " icon ion-social-usd" => esc_html__( "social usd", "virgo" ) ),
		array( " icon ion-social-usd-outline" => esc_html__( "social usd outline", "virgo" ) ),
		array( " icon ion-social-vimeo" => esc_html__( "social vimeo", "virgo" ) ),
		array( " icon ion-social-vimeo-outline" => esc_html__( "social vimeo outline", "virgo" ) ),
		array( " icon ion-social-whatsapp" => esc_html__( "social whatsapp", "virgo" ) ),
		array( " icon ion-social-whatsapp-outline" => esc_html__( "social whatsapp outline", "virgo" ) ),
		array( " icon ion-social-windows" => esc_html__( "social windows", "virgo" ) ),
		array( " icon ion-social-windows-outline" => esc_html__( "social windows outline", "virgo" ) ),
		array( " icon ion-social-wordpress" => esc_html__( "social wordpress", "virgo" ) ),
		array( " icon ion-social-wordpress-outline" => esc_html__( "social wordpress outline", "virgo" ) ),
		array( " icon ion-social-yahoo" => esc_html__( "social yahoo", "virgo" ) ),
		array( " icon ion-social-yahoo-outline" => esc_html__( "social yahoo outline", "virgo" ) ),
		array( " icon ion-social-yen" => esc_html__( "social yen", "virgo" ) ),
		array( " icon ion-social-yen-outline" => esc_html__( "social yen outline", "virgo" ) ),
		array( " icon ion-social-youtube" => esc_html__( "social youtube", "virgo" ) ),
		array( " icon ion-social-youtube-outline" => esc_html__( "social youtube outline", "virgo" ) ),
		array( " icon ion-soup-can" => esc_html__( "soup can", "virgo" ) ),
		array( " icon ion-soup-can-outline" => esc_html__( "soup can outline", "virgo" ) ),
		array( " icon ion-speakerphone" => esc_html__( "speakerphone", "virgo" ) ),
		array( " icon ion-speedometer" => esc_html__( "speedometer", "virgo" ) ),
		array( " icon ion-spoon" => esc_html__( "spoon", "virgo" ) ),
		array( " icon ion-star" => esc_html__( "star", "virgo" ) ),
		array( " icon ion-stats-bars" => esc_html__( "stats bars", "virgo" ) ),
		array( " icon ion-steam" => esc_html__( "steam", "virgo" ) ),
		array( " icon ion-stop" => esc_html__( "stop", "virgo" ) ),
		array( " icon ion-thermometer" => esc_html__( "thermometer", "virgo" ) ),
		array( " icon ion-thumbsdown" => esc_html__( "thumbsdown", "virgo" ) ),
		array( " icon ion-thumbsup" => esc_html__( "thumbsup", "virgo" ) ),
		array( " icon ion-toggle" => esc_html__( "toggle", "virgo" ) ),
		array( " icon ion-toggle-filled" => esc_html__( "toggle filled", "virgo" ) ),
		array( " icon ion-transgender" => esc_html__( "transgender", "virgo" ) ),
		array( " icon ion-trash-a" => esc_html__( "trash a", "virgo" ) ),
		array( " icon ion-trash-b" => esc_html__( "trash b", "virgo" ) ),
		array( " icon ion-trophy" => esc_html__( "trophy", "virgo" ) ),
		array( " icon ion-tshirt" => esc_html__( "tshirt", "virgo" ) ),
		array( " icon ion-tshirt-outline" => esc_html__( "tshirt outline", "virgo" ) ),
		array( " icon ion-umbrella" => esc_html__( "umbrella", "virgo" ) ),
		array( " icon ion-university" => esc_html__( "university", "virgo" ) ),
		array( " icon ion-unlocked" => esc_html__( "unlocked", "virgo" ) ),
		array( " icon ion-upload" => esc_html__( "upload", "virgo" ) ),
		array( " icon ion-usb" => esc_html__( "usb", "virgo" ) ),
		array( " icon ion-videocamera" => esc_html__( "videocamera", "virgo" ) ),
		array( " icon ion-volume-high" => esc_html__( "volume high", "virgo" ) ),
		array( " icon ion-volume-low" => esc_html__( "volume low", "virgo" ) ),
		array( " icon ion-volume-medium" => esc_html__( "volume medium", "virgo" ) ),
		array( " icon ion-volume-mute" => esc_html__( "volume mute", "virgo" ) ),
		array( " icon ion-wand" => esc_html__( "wand", "virgo" ) ),
		array( " icon ion-waterdrop" => esc_html__( "waterdrop", "virgo" ) ),
		array( " icon ion-wifi" => esc_html__( "wifi", "virgo" ) ),
		array( " icon ion-wineglass" => esc_html__( "wineglass", "virgo" ) ),
		array( " icon ion-woman" => esc_html__( "woman", "virgo" ) ),
		array( " icon ion-wrench" => esc_html__( "wrench", "virgo" ) ),
		array( " icon ion-xbox" => esc_html__( "xbox", "virgo" ) ),
		array( " icon ion-alert" => esc_html__( "alert", "virgo" ) ),
		array( " icon ion-alert-circled" => esc_html__( "alert circled", "virgo" ) ),
		array( " icon ion-android-add" => esc_html__( "android add", "virgo" ) ),
		array( " icon ion-android-add-circle" => esc_html__( "android add circle", "virgo" ) ),
		array( " icon ion-android-alarm-clock" => esc_html__( "android alarm clock", "virgo" ) ),
		array( " icon ion-android-alert" => esc_html__( "android alert", "virgo" ) ),
		array( " icon ion-android-apps" => esc_html__( "android apps", "virgo" ) ),
		array( " icon ion-android-archive" => esc_html__( "android archive", "virgo" ) ),
		array( " icon ion-android-arrow-back" => esc_html__( "android arrow back", "virgo" ) ),
		array( " icon ion-android-arrow-down" => esc_html__( "android arrow down", "virgo" ) ),
		array( " icon ion-android-arrow-dropdown" => esc_html__( "android arrow dropdown", "virgo" ) ),
		array( " icon ion-android-arrow-dropdown-circle" => esc_html__( "android arrow dropdown circle", "virgo" ) ),
		array( " icon ion-android-arrow-dropleft" => esc_html__( "android arrow dropleft", "virgo" ) ),
		array( " icon ion-android-arrow-dropleft-circle" => esc_html__( "android arrow dropleft circle", "virgo" ) ),
		array( " icon ion-android-arrow-dropright" => esc_html__( "android arrow dropright", "virgo" ) ),
		array( " icon ion-android-arrow-dropright-circle" => esc_html__( "android arrow dropright circle", "virgo" ) ),
		array( " icon ion-android-arrow-dropup" => esc_html__( "android arrow dropup", "virgo" ) ),
		array( " icon ion-android-arrow-dropup-circle" => esc_html__( "android arrow dropup circle", "virgo" ) ),
		array( " icon ion-android-arrow-forward" => esc_html__( "android arrow forward", "virgo" ) ),
		array( " icon ion-android-arrow-up" => esc_html__( "android arrow up", "virgo" ) ),
		array( " icon ion-android-attach" => esc_html__( "android attach", "virgo" ) ),
		array( " icon ion-android-bar" => esc_html__( "android bar", "virgo" ) ),
		array( " icon ion-android-bicycle" => esc_html__( "android bicycle", "virgo" ) ),
		array( " icon ion-android-boat" => esc_html__( "android boat", "virgo" ) ),
		array( " icon ion-android-bookmark" => esc_html__( "android bookmark", "virgo" ) ),
		array( " icon ion-android-bulb" => esc_html__( "android bulb", "virgo" ) ),
		array( " icon ion-android-bus" => esc_html__( "android bus", "virgo" ) ),
		array( " icon ion-android-calendar" => esc_html__( "android calendar", "virgo" ) ),
		array( " icon ion-android-call" => esc_html__( "android call", "virgo" ) ),
		array( " icon ion-android-camera" => esc_html__( "android camera", "virgo" ) ),
		array( " icon ion-android-cancel" => esc_html__( "android cancel", "virgo" ) ),
		array( " icon ion-android-car" => esc_html__( "android car", "virgo" ) ),
		array( " icon ion-android-cart" => esc_html__( "android cart", "virgo" ) ),
		array( " icon ion-android-chat" => esc_html__( "android chat", "virgo" ) ),
		array( " icon ion-android-checkbox" => esc_html__( "android checkbox", "virgo" ) ),
		array( " icon ion-android-checkbox-blank" => esc_html__( "android checkbox blank", "virgo" ) ),
		array( " icon ion-android-checkbox-outline" => esc_html__( "android checkbox outline", "virgo" ) ),
		array( " icon ion-android-checkbox-outline-blank" => esc_html__( "android checkbox outline blank", "virgo" ) ),
		array( " icon ion-android-checkmark-circle" => esc_html__( "android checkmark circle", "virgo" ) ),
		array( " icon ion-android-clipboard" => esc_html__( "android clipboard", "virgo" ) ),
		array( " icon ion-android-close" => esc_html__( "android close", "virgo" ) ),
		array( " icon ion-android-cloud" => esc_html__( "android cloud", "virgo" ) ),
		array( " icon ion-android-cloud-circle" => esc_html__( "android cloud circle", "virgo" ) ),
		array( " icon ion-android-cloud-done" => esc_html__( "android cloud done", "virgo" ) ),
		array( " icon ion-android-cloud-outline" => esc_html__( "android cloud outline", "virgo" ) ),
		array( " icon ion-android-color-palette" => esc_html__( "android color palette", "virgo" ) ),
		array( " icon ion-android-compass" => esc_html__( "android compass", "virgo" ) ),
		array( " icon ion-android-contact" => esc_html__( "android contact", "virgo" ) ),
		array( " icon ion-android-contacts" => esc_html__( "android contacts", "virgo" ) ),
		array( " icon ion-android-contract" => esc_html__( "android contract", "virgo" ) ),
		array( " icon ion-android-create" => esc_html__( "android create", "virgo" ) ),
		array( " icon ion-android-delete" => esc_html__( "android delete", "virgo" ) ),
		array( " icon ion-android-desktop" => esc_html__( "android desktop", "virgo" ) ),
		array( " icon ion-android-document" => esc_html__( "android document", "virgo" ) ),
		array( " icon ion-android-done" => esc_html__( "android done", "virgo" ) ),
		array( " icon ion-android-done-all" => esc_html__( "android done all", "virgo" ) ),
		array( " icon ion-android-download" => esc_html__( "android download", "virgo" ) ),
		array( " icon ion-android-drafts" => esc_html__( "android drafts", "virgo" ) ),
		array( " icon ion-android-exit" => esc_html__( "android exit", "virgo" ) ),
		array( " icon ion-android-expand" => esc_html__( "android expand", "virgo" ) ),
		array( " icon ion-android-favorite" => esc_html__( "android favorite", "virgo" ) ),
		array( " icon ion-android-favorite-outline" => esc_html__( "android favorite outline", "virgo" ) ),
		array( " icon ion-android-film" => esc_html__( "android film", "virgo" ) ),
		array( " icon ion-android-folder" => esc_html__( "android folder", "virgo" ) ),
		array( " icon ion-android-folder-open" => esc_html__( "android folder open", "virgo" ) ),
		array( " icon ion-android-funnel" => esc_html__( "android funnel", "virgo" ) ),
		array( " icon ion-android-globe" => esc_html__( "android globe", "virgo" ) ),
		array( " icon ion-android-hand" => esc_html__( "android hand", "virgo" ) ),
		array( " icon ion-android-hangout" => esc_html__( "android hangout", "virgo" ) ),
		array( " icon ion-android-happy" => esc_html__( "android happy", "virgo" ) ),
		array( " icon ion-android-home" => esc_html__( "android home", "virgo" ) ),
		array( " icon ion-android-image" => esc_html__( "android image", "virgo" ) ),
		array( " icon ion-android-laptop" => esc_html__( "android laptop", "virgo" ) ),
		array( " icon ion-android-list" => esc_html__( "android list", "virgo" ) ),
		array( " icon ion-android-locate" => esc_html__( "android locate", "virgo" ) ),
		array( " icon ion-android-lock" => esc_html__( "android lock", "virgo" ) ),
		array( " icon ion-android-mail" => esc_html__( "android mail", "virgo" ) ),
		array( " icon ion-android-map" => esc_html__( "android map", "virgo" ) ),
		array( " icon ion-android-menu" => esc_html__( "android menu", "virgo" ) ),
		array( " icon ion-android-microphone" => esc_html__( "android microphone", "virgo" ) ),
		array( " icon ion-android-microphone-off" => esc_html__( "android microphone off", "virgo" ) ),
		array( " icon ion-android-more-horizontal" => esc_html__( "android more horizontal", "virgo" ) ),
		array( " icon ion-android-more-vertical" => esc_html__( "android more vertical", "virgo" ) ),
		array( " icon ion-android-navigate" => esc_html__( "android navigate", "virgo" ) ),
		array( " icon ion-android-notifications" => esc_html__( "android notifications", "virgo" ) ),
		array( " icon ion-android-notifications-none" => esc_html__( "android notifications none", "virgo" ) ),
		array( " icon ion-android-notifications-off" => esc_html__( "android notifications off", "virgo" ) ),
		array( " icon ion-android-open" => esc_html__( "android open", "virgo" ) ),
		array( " icon ion-android-options" => esc_html__( "android options", "virgo" ) ),
		array( " icon ion-android-people" => esc_html__( "android people", "virgo" ) ),
		array( " icon ion-android-person" => esc_html__( "android person", "virgo" ) ),
		array( " icon ion-android-person-add" => esc_html__( "android person add", "virgo" ) ),
		array( " icon ion-android-phone-landscape" => esc_html__( "android phone landscape", "virgo" ) ),
		array( " icon ion-android-phone-portrait" => esc_html__( "android phone portrait", "virgo" ) ),
		array( " icon ion-android-pin" => esc_html__( "android pin", "virgo" ) ),
		array( " icon ion-android-plane" => esc_html__( "android plane", "virgo" ) ),
		array( " icon ion-android-playstore" => esc_html__( "android playstore", "virgo" ) ),
		array( " icon ion-android-print" => esc_html__( "android print", "virgo" ) ),
		array( " icon ion-android-radio-button-off" => esc_html__( "android radio button off", "virgo" ) ),
		array( " icon ion-android-radio-button-on" => esc_html__( "android radio button on", "virgo" ) ),
		array( " icon ion-android-refresh" => esc_html__( "android refresh", "virgo" ) ),
		array( " icon ion-android-remove" => esc_html__( "android remove", "virgo" ) ),
		array( " icon ion-android-remove-circle" => esc_html__( "android remove circle", "virgo" ) ),
		array( " icon ion-android-restaurant" => esc_html__( "android restaurant", "virgo" ) ),
		array( " icon ion-android-sad" => esc_html__( "android sad", "virgo" ) ),
		array( " icon ion-android-search" => esc_html__( "android search", "virgo" ) ),
		array( " icon ion-android-send" => esc_html__( "android send", "virgo" ) ),
		array( " icon ion-android-settings" => esc_html__( "android settings", "virgo" ) ),
		array( " icon ion-android-share" => esc_html__( "android share", "virgo" ) ),
		array( " icon ion-android-share-alt" => esc_html__( "android share alt", "virgo" ) ),
		array( " icon ion-android-star" => esc_html__( "android star", "virgo" ) ),
		array( " icon ion-android-star-half" => esc_html__( "android star half", "virgo" ) ),
		array( " icon ion-android-star-outline" => esc_html__( "android star outline", "virgo" ) ),
		array( " icon ion-android-stopwatch" => esc_html__( "android stopwatch", "virgo" ) ),
		array( " icon ion-android-subway" => esc_html__( "android subway", "virgo" ) ),
		array( " icon ion-android-sunny" => esc_html__( "android sunny", "virgo" ) ),
		array( " icon ion-android-sync" => esc_html__( "android sync", "virgo" ) ),
		array( " icon ion-android-textsms" => esc_html__( "android textsms", "virgo" ) ),
		array( " icon ion-android-time" => esc_html__( "android time", "virgo" ) ),
		array( " icon ion-android-train" => esc_html__( "android train", "virgo" ) ),
		array( " icon ion-android-unlock" => esc_html__( "android unlock", "virgo" ) ),
		array( " icon ion-android-upload" => esc_html__( "android upload", "virgo" ) ),
		array( " icon ion-android-volume-down" => esc_html__( "android volume down", "virgo" ) ),
		array( " icon ion-android-volume-mute" => esc_html__( "android volume mute", "virgo" ) ),
		array( " icon ion-android-volume-off" => esc_html__( "android volume off", "virgo" ) ),
		array( " icon ion-android-volume-up" => esc_html__( "android volume up", "virgo" ) ),
		array( " icon ion-android-walk" => esc_html__( "android walk", "virgo" ) ),
		array( " icon ion-android-warning" => esc_html__( "android warning", "virgo" ) ),
		array( " icon ion-android-watch" => esc_html__( "android watch", "virgo" ) ),
		array( " icon ion-android-wifi" => esc_html__( "android wifi", "virgo" ) ),
		array( " icon ion-aperture" => esc_html__( "aperture", "virgo" ) ),
		array( " icon ion-archive" => esc_html__( "archive", "virgo" ) ),
		array( " icon ion-arrow-down-a" => esc_html__( "arrow down a", "virgo" ) ),
		array( " icon ion-arrow-down-b" => esc_html__( "arrow down b", "virgo" ) ),
		array( " icon ion-arrow-down-c" => esc_html__( "arrow down c", "virgo" ) ),
		array( " icon ion-arrow-expand" => esc_html__( "arrow expand", "virgo" ) ),
		array( " icon ion-arrow-graph-down-left" => esc_html__( "arrow graph down left", "virgo" ) ),
		array( " icon ion-arrow-graph-down-right" => esc_html__( "arrow graph down right", "virgo" ) ),
		array( " icon ion-arrow-graph-up-left" => esc_html__( "arrow graph up left", "virgo" ) ),
		array( " icon ion-arrow-graph-up-right" => esc_html__( "arrow graph up right", "virgo" ) ),
		array( " icon ion-arrow-left-a" => esc_html__( "arrow left a", "virgo" ) ),
		array( " icon ion-arrow-left-b" => esc_html__( "arrow left b", "virgo" ) ),
		array( " icon ion-arrow-left-c" => esc_html__( "arrow left c", "virgo" ) ),
		array( " icon ion-arrow-move" => esc_html__( "arrow move", "virgo" ) ),
		array( " icon ion-arrow-resize" => esc_html__( "arrow resize", "virgo" ) ),
		array( " icon ion-arrow-return-left" => esc_html__( "arrow return left", "virgo" ) ),
		array( " icon ion-arrow-return-right" => esc_html__( "arrow return right", "virgo" ) ),
		array( " icon ion-arrow-right-a" => esc_html__( "arrow right a", "virgo" ) ),
		array( " icon ion-arrow-right-b" => esc_html__( "arrow right b", "virgo" ) ),
		array( " icon ion-arrow-right-c" => esc_html__( "arrow right c", "virgo" ) ),
		array( " icon ion-arrow-shrink" => esc_html__( "arrow shrink", "virgo" ) ),
		array( " icon ion-arrow-swap" => esc_html__( "arrow swap", "virgo" ) ),
		array( " icon ion-arrow-up-a" => esc_html__( "arrow up a", "virgo" ) ),
		array( " icon ion-arrow-up-b" => esc_html__( "arrow up b", "virgo" ) ),
		array( " icon ion-arrow-up-c" => esc_html__( "arrow up c", "virgo" ) ),
		array( " icon ion-asterisk" => esc_html__( "asterisk", "virgo" ) ),
		array( " icon ion-at" => esc_html__( "at", "virgo" ) ),
		array( " icon ion-backspace" => esc_html__( "backspace", "virgo" ) ),
		array( " icon ion-backspace-outline" => esc_html__( "backspace outline", "virgo" ) ),
		array( " icon ion-bag" => esc_html__( "bag", "virgo" ) ),
		array( " icon ion-battery-charging" => esc_html__( "battery charging", "virgo" ) ),
		array( " icon ion-battery-empty" => esc_html__( "battery empty", "virgo" ) ),
		array( " icon ion-battery-full" => esc_html__( "battery full", "virgo" ) ),
		array( " icon ion-battery-half" => esc_html__( "battery half", "virgo" ) ),
		array( " icon ion-battery-low" => esc_html__( "battery low", "virgo" ) ),
		array( " icon ion-beaker" => esc_html__( "beaker", "virgo" ) ),
		array( " icon ion-beer" => esc_html__( "beer", "virgo" ) ),
		array( " icon ion-bluetooth" => esc_html__( "bluetooth", "virgo" ) ),
		array( " icon ion-bonfire" => esc_html__( "bonfire", "virgo" ) ),
		array( " icon ion-bookmark" => esc_html__( "bookmark", "virgo" ) ),
		array( " icon ion-bowtie" => esc_html__( "bowtie", "virgo" ) ),
		array( " icon ion-briefcase" => esc_html__( "briefcase", "virgo" ) ),
		array( " icon ion-bug" => esc_html__( "bug", "virgo" ) ),
		array( " icon ion-calculator" => esc_html__( "calculator", "virgo" ) ),
		array( " icon ion-calendar" => esc_html__( "calendar", "virgo" ) ),
		array( " icon ion-camera" => esc_html__( "camera", "virgo" ) ),
		array( " icon ion-card" => esc_html__( "card", "virgo" ) ),
		array( " icon ion-cash" => esc_html__( "cash", "virgo" ) ),
		array( " icon ion-chatbox" => esc_html__( "chatbox", "virgo" ) ),
		array( " icon ion-chatbox-working" => esc_html__( "chatbox working", "virgo" ) ),
		array( " icon ion-chatboxes" => esc_html__( "chatboxes", "virgo" ) ),
		array( " icon ion-chatbubble" => esc_html__( "chatbubble", "virgo" ) ),
		array( " icon ion-chatbubble-working" => esc_html__( "chatbubble working", "virgo" ) ),
		array( " icon ion-chatbubbles" => esc_html__( "chatbubbles", "virgo" ) ),
		array( " icon ion-checkmark" => esc_html__( "checkmark", "virgo" ) ),
		array( " icon ion-checkmark-circled" => esc_html__( "checkmark circled", "virgo" ) ),
		array( " icon ion-checkmark-round" => esc_html__( "checkmark round", "virgo" ) ),
		array( " icon ion-chevron-down" => esc_html__( "chevron down", "virgo" ) ),
		array( " icon ion-chevron-left" => esc_html__( "chevron left", "virgo" ) ),
		array( " icon ion-chevron-right" => esc_html__( "chevron right", "virgo" ) ),
		array( " icon ion-chevron-up" => esc_html__( "chevron up", "virgo" ) ),
		array( " icon ion-clipboard" => esc_html__( "clipboard", "virgo" ) ),
		array( " icon ion-clock" => esc_html__( "clock", "virgo" ) ),
		array( " icon ion-close" => esc_html__( "close", "virgo" ) ),
		array( " icon ion-close-circled" => esc_html__( "close circled", "virgo" ) ),
		array( " icon ion-close-round" => esc_html__( "close round", "virgo" ) ),
		array( " icon ion-closed-captioning" => esc_html__( "closed captioning", "virgo" ) ),
		array( " icon ion-cloud" => esc_html__( "cloud", "virgo" ) ),
		array( " icon ion-code" => esc_html__( "code", "virgo" ) ),
		array( " icon ion-code-download" => esc_html__( "code download", "virgo" ) ),
		array( " icon ion-code-working" => esc_html__( "code working", "virgo" ) ),
		array( " icon ion-coffee" => esc_html__( "coffee", "virgo" ) ),
		array( " icon ion-compass" => esc_html__( "compass", "virgo" ) ),
		array( " icon ion-compose" => esc_html__( "compose", "virgo" ) ),
		array( " icon ion-connection-bars" => esc_html__( "connection bars", "virgo" ) ),
		array( " icon ion-contrast" => esc_html__( "contrast", "virgo" ) ),
		array( " icon ion-crop" => esc_html__( "crop", "virgo" ) ),
		array( " icon ion-cube" => esc_html__( "cube", "virgo" ) ),
		array( " icon ion-disc" => esc_html__( "disc", "virgo" ) ),
		array( " icon ion-document" => esc_html__( "document", "virgo" ) ),
		array( " icon ion-document-text" => esc_html__( "document text", "virgo" ) ),
		array( " icon ion-drag" => esc_html__( "drag", "virgo" ) ),
		array( " icon ion-earth" => esc_html__( "earth", "virgo" ) ),
		array( " icon ion-easel" => esc_html__( "easel", "virgo" ) ),
		array( " icon ion-edit" => esc_html__( "edit", "virgo" ) ),
		array( " icon ion-egg" => esc_html__( "egg", "virgo" ) ),
		array( " icon ion-eject" => esc_html__( "eject", "virgo" ) ),
		array( " icon ion-email" => esc_html__( "email", "virgo" ) ),
		array( " icon ion-email-unread" => esc_html__( "email unread", "virgo" ) ),
		array( " icon ion-erlenmeyer-flask" => esc_html__( "erlenmeyer flask", "virgo" ) ),
		array( " icon ion-erlenmeyer-flask-bubbles" => esc_html__( "erlenmeyer flask bubbles", "virgo" ) ),
		array( " icon ion-eye" => esc_html__( "eye", "virgo" ) ),
		array( " icon ion-eye-disabled" => esc_html__( "eye disabled", "virgo" ) ),
		array( " icon ion-female" => esc_html__( "female", "virgo" ) ),
		array( " icon ion-filing" => esc_html__( "filing", "virgo" ) ),
		array( " icon ion-film-marker" => esc_html__( "film marker", "virgo" ) ),
		array( " icon ion-fireball" => esc_html__( "fireball", "virgo" ) ),
		array( " icon ion-flag" => esc_html__( "flag", "virgo" ) ),
		array( " icon ion-flame" => esc_html__( "flame", "virgo" ) ),
		array( " icon ion-flash" => esc_html__( "flash", "virgo" ) ),
		array( " icon ion-flash-off" => esc_html__( "flash off", "virgo" ) ),
		array( " icon ion-folder" => esc_html__( "folder", "virgo" ) ),
		array( " icon ion-fork" => esc_html__( "fork", "virgo" ) ),
		array( " icon ion-fork-repo" => esc_html__( "fork repo", "virgo" ) ),
		array( " icon ion-forward" => esc_html__( "forward", "virgo" ) ),
		array( " icon ion-funnel" => esc_html__( "funnel", "virgo" ) ),
		array( " icon ion-gear-a" => esc_html__( "gear a", "virgo" ) ),
		array( " icon ion-gear-b" => esc_html__( "gear b", "virgo" ) ),
		array( " icon ion-grid" => esc_html__( "grid", "virgo" ) ),
		array( " icon ion-hammer" => esc_html__( "hammer", "virgo" ) ),
		array( " icon ion-happy" => esc_html__( "happy", "virgo" ) ),
		array( " icon ion-happy-outline" => esc_html__( "happy outline", "virgo" ) ),
		array( " icon ion-headphone" => esc_html__( "headphone", "virgo" ) ),
		array( " icon ion-heart" => esc_html__( "heart", "virgo" ) ),
		array( " icon ion-heart-broken" => esc_html__( "heart broken", "virgo" ) ),
		array( " icon ion-help" => esc_html__( "help", "virgo" ) ),
		array( " icon ion-help-buoy" => esc_html__( "help buoy", "virgo" ) ),
		array( " icon ion-help-circled" => esc_html__( "help circled", "virgo" ) ),
		array( " icon ion-home" => esc_html__( "home", "virgo" ) ),
		array( " icon ion-icecream" => esc_html__( "icecream", "virgo" ) ),
		array( " icon ion-image" => esc_html__( "image", "virgo" ) ),
		array( " icon ion-images" => esc_html__( "images", "virgo" ) ),
		array( " icon ion-information" => esc_html__( "information", "virgo" ) ),
		array( " icon ion-information-circled" => esc_html__( "information circled", "virgo" ) ),
		array( " icon ion-ionic" => esc_html__( "ionic", "virgo" ) ),
		array( " icon ion-ios-alarm" => esc_html__( "ios alarm", "virgo" ) ),
		array( " icon ion-ios-alarm-outline" => esc_html__( "ios alarm outline", "virgo" ) ),
		array( " icon ion-ios-albums" => esc_html__( "ios albums", "virgo" ) ),
		array( " icon ion-ios-albums-outline" => esc_html__( "ios albums outline", "virgo" ) ),
		array( " icon ion-ios-americanfootball" => esc_html__( "ios americanfootball", "virgo" ) ),
		array( " icon ion-ios-americanfootball-outline" => esc_html__( "ios americanfootball outline", "virgo" ) ),
		array( " icon ion-ios-analytics" => esc_html__( "ios analytics", "virgo" ) ),
		array( " icon ion-ios-analytics-outline" => esc_html__( "ios analytics outline", "virgo" ) ),
		array( " icon ion-ios-arrow-back" => esc_html__( "ios arrow back", "virgo" ) ),
		array( " icon ion-ios-arrow-down" => esc_html__( "ios arrow down", "virgo" ) ),
		array( " icon ion-ios-arrow-forward" => esc_html__( "ios arrow forward", "virgo" ) ),
		array( " icon ion-ios-arrow-left" => esc_html__( "ios arrow left", "virgo" ) ),
		array( " icon ion-ios-arrow-right" => esc_html__( "ios arrow right", "virgo" ) ),
		array( " icon ion-ios-arrow-thin-down" => esc_html__( "ios arrow thin down", "virgo" ) ),
		array( " icon ion-ios-arrow-thin-left" => esc_html__( "ios arrow thin left", "virgo" ) ),
		array( " icon ion-ios-arrow-thin-right" => esc_html__( "ios arrow thin right", "virgo" ) ),
		array( " icon ion-ios-arrow-thin-up" => esc_html__( "ios arrow thin up", "virgo" ) ),
		array( " icon ion-ios-arrow-up" => esc_html__( "ios arrow up", "virgo" ) ),
		array( " icon ion-ios-at" => esc_html__( "ios at", "virgo" ) ),
		array( " icon ion-ios-at-outline" => esc_html__( "ios at outline", "virgo" ) ),
		array( " icon ion-ios-barcode" => esc_html__( "ios barcode", "virgo" ) ),
		array( " icon ion-ios-barcode-outline" => esc_html__( "ios barcode outline", "virgo" ) ),
		array( " icon ion-ios-baseball" => esc_html__( "ios baseball", "virgo" ) ),
		array( " icon ion-ios-baseball-outline" => esc_html__( "ios baseball outline", "virgo" ) ),
		array( " icon ion-ios-basketball" => esc_html__( "ios basketball", "virgo" ) ),
		array( " icon ion-ios-basketball-outline" => esc_html__( "ios basketball outline", "virgo" ) ),
		array( " icon ion-ios-bell" => esc_html__( "ios bell", "virgo" ) ),
		array( " icon ion-ios-bell-outline" => esc_html__( "ios bell outline", "virgo" ) ),
		array( " icon ion-ios-body" => esc_html__( "ios body", "virgo" ) ),
		array( " icon ion-ios-body-outline" => esc_html__( "ios body outline", "virgo" ) ),
		array( " icon ion-ios-bolt" => esc_html__( "ios bolt", "virgo" ) ),
		array( " icon ion-ios-bolt-outline" => esc_html__( "ios bolt outline", "virgo" ) ),
		array( " icon ion-ios-book" => esc_html__( "ios book", "virgo" ) ),
		array( " icon ion-ios-book-outline" => esc_html__( "ios book outline", "virgo" ) ),
		array( " icon ion-ios-bookmarks" => esc_html__( "ios bookmarks", "virgo" ) ),
		array( " icon ion-ios-bookmarks-outline" => esc_html__( "ios bookmarks outline", "virgo" ) ),
		array( " icon ion-ios-box" => esc_html__( "ios box", "virgo" ) ),
		array( " icon ion-ios-box-outline" => esc_html__( "ios box outline", "virgo" ) ),
		array( " icon ion-ios-briefcase" => esc_html__( "ios briefcase", "virgo" ) ),
		array( " icon ion-ios-briefcase-outline" => esc_html__( "ios briefcase outline", "virgo" ) ),
		array( " icon ion-ios-browsers" => esc_html__( "ios browsers", "virgo" ) ),
		array( " icon ion-ios-browsers-outline" => esc_html__( "ios browsers outline", "virgo" ) ),
		array( " icon ion-ios-calculator" => esc_html__( "ios calculator", "virgo" ) ),
		array( " icon ion-ios-calculator-outline" => esc_html__( "ios calculator outline", "virgo" ) ),
		array( " icon ion-ios-calendar" => esc_html__( "ios calendar", "virgo" ) ),
		array( " icon ion-ios-calendar-outline" => esc_html__( "ios calendar outline", "virgo" ) ),
		array( " icon ion-ios-camera" => esc_html__( "ios camera", "virgo" ) ),
		array( " icon ion-ios-camera-outline" => esc_html__( "ios camera outline", "virgo" ) ),
		array( " icon ion-ios-cart" => esc_html__( "ios cart", "virgo" ) ),
		array( " icon ion-ios-cart-outline" => esc_html__( "ios cart outline", "virgo" ) ),
		array( " icon ion-ios-chatboxes" => esc_html__( "ios chatboxes", "virgo" ) ),
		array( " icon ion-ios-chatboxes-outline" => esc_html__( "ios chatboxes outline", "virgo" ) ),
		array( " icon ion-ios-chatbubble" => esc_html__( "ios chatbubble", "virgo" ) ),
		array( " icon ion-ios-chatbubble-outline" => esc_html__( "ios chatbubble outline", "virgo" ) ),
		array( " icon ion-ios-checkmark" => esc_html__( "ios checkmark", "virgo" ) ),
		array( " icon ion-ios-checkmark-empty" => esc_html__( "ios checkmark empty", "virgo" ) ),
		array( " icon ion-ios-checkmark-outline" => esc_html__( "ios checkmark outline", "virgo" ) ),
		array( " icon ion-ios-circle-filled" => esc_html__( "ios circle filled", "virgo" ) ),
		array( " icon ion-ios-circle-outline" => esc_html__( "ios circle outline", "virgo" ) ),
		array( " icon ion-ios-clock" => esc_html__( "ios clock", "virgo" ) ),
		array( " icon ion-ios-clock-outline" => esc_html__( "ios clock outline", "virgo" ) ),
		array( " icon ion-ios-close" => esc_html__( "ios close", "virgo" ) ),
		array( " icon ion-ios-close-empty" => esc_html__( "ios close empty", "virgo" ) ),
		array( " icon ion-ios-close-outline" => esc_html__( "ios close outline", "virgo" ) ),
		array( " icon ion-ios-cloud" => esc_html__( "ios cloud", "virgo" ) ),
		array( " icon ion-ios-cloud-download" => esc_html__( "ios cloud download", "virgo" ) ),
		array( " icon ion-ios-cloud-download-outline" => esc_html__( "ios cloud download outline", "virgo" ) ),
		array( " icon ion-ios-cloud-outline" => esc_html__( "ios cloud outline", "virgo" ) ),
		array( " icon ion-ios-cloud-upload" => esc_html__( "ios cloud upload", "virgo" ) ),
		array( " icon ion-ios-cloud-upload-outline" => esc_html__( "ios cloud upload outline", "virgo" ) ),
		array( " icon ion-ios-cloudy" => esc_html__( "ios cloudy", "virgo" ) ),
		array( " icon ion-ios-cloudy-night" => esc_html__( "ios cloudy night", "virgo" ) ),
		array( " icon ion-ios-cloudy-night-outline" => esc_html__( "ios cloudy night outline", "virgo" ) ),
		array( " icon ion-ios-cloudy-outline" => esc_html__( "ios cloudy outline", "virgo" ) ),
		array( " icon ion-ios-cog" => esc_html__( "ios cog", "virgo" ) ),
		array( " icon ion-ios-cog-outline" => esc_html__( "ios cog outline", "virgo" ) ),
		array( " icon ion-ios-color-filter" => esc_html__( "ios color filter", "virgo" ) ),
		array( " icon ion-ios-color-filter-outline" => esc_html__( "ios color filter outline", "virgo" ) ),
		array( " icon ion-ios-color-wand" => esc_html__( "ios color wand", "virgo" ) ),
		array( " icon ion-ios-color-wand-outline" => esc_html__( "ios color wand outline", "virgo" ) ),
		array( " icon ion-ios-compose" => esc_html__( "ios compose", "virgo" ) ),
		array( " icon ion-ios-compose-outline" => esc_html__( "ios compose outline", "virgo" ) ),
		array( " icon ion-ios-contact" => esc_html__( "ios contact", "virgo" ) ),
		array( " icon ion-ios-contact-outline" => esc_html__( "ios contact outline", "virgo" ) ),
		array( " icon ion-ios-copy" => esc_html__( "ios copy", "virgo" ) ),
		array( " icon ion-ios-copy-outline" => esc_html__( "ios copy outline", "virgo" ) ),
		array( " icon ion-ios-crop" => esc_html__( "ios crop", "virgo" ) ),
		array( " icon ion-ios-crop-strong" => esc_html__( "ios crop strong", "virgo" ) ),
		array( " icon ion-ios-download" => esc_html__( "ios download", "virgo" ) ),
		array( " icon ion-ios-download-outline" => esc_html__( "ios download outline", "virgo" ) ),
		array( " icon ion-ios-drag" => esc_html__( "ios drag", "virgo" ) ),
		array( " icon ion-ios-email" => esc_html__( "ios email", "virgo" ) ),
		array( " icon ion-ios-email-outline" => esc_html__( "ios email outline", "virgo" ) ),
		array( " icon ion-ios-eye" => esc_html__( "ios eye", "virgo" ) ),
		array( " icon ion-ios-eye-outline" => esc_html__( "ios eye outline", "virgo" ) ),
		array( " icon ion-ios-fastforward" => esc_html__( "ios fastforward", "virgo" ) ),
		array( " icon ion-ios-fastforward-outline" => esc_html__( "ios fastforward outline", "virgo" ) ),
		array( " icon ion-ios-filing" => esc_html__( "ios filing", "virgo" ) ),
		array( " icon ion-ios-filing-outline" => esc_html__( "ios filing outline", "virgo" ) ),
		array( " icon ion-ios-film" => esc_html__( "ios film", "virgo" ) ),
		array( " icon ion-ios-film-outline" => esc_html__( "ios film outline", "virgo" ) ),
		array( " icon ion-ios-flag" => esc_html__( "ios flag", "virgo" ) ),
		array( " icon ion-ios-flag-outline" => esc_html__( "ios flag outline", "virgo" ) ),
		array( " icon ion-ios-flame" => esc_html__( "ios flame", "virgo" ) ),
		array( " icon ion-ios-flame-outline" => esc_html__( "ios flame outline", "virgo" ) ),
		array( " icon ion-ios-flask" => esc_html__( "ios flask", "virgo" ) ),
		array( " icon ion-ios-flask-outline" => esc_html__( "ios flask outline", "virgo" ) ),
		array( " icon ion-ios-flower" => esc_html__( "ios flower", "virgo" ) ),
		array( " icon ion-ios-flower-outline" => esc_html__( "ios flower outline", "virgo" ) ),
		array( " icon ion-ios-folder" => esc_html__( "ios folder", "virgo" ) ),
		array( " icon ion-ios-folder-outline" => esc_html__( "ios folder outline", "virgo" ) ),
		array( " icon ion-ios-football" => esc_html__( "ios football", "virgo" ) ),
		array( " icon ion-ios-football-outline" => esc_html__( "ios football outline", "virgo" ) ),
		array( " icon ion-ios-game-controller-a" => esc_html__( "ios game controller a", "virgo" ) ),
		array( " icon ion-ios-game-controller-a-outline" => esc_html__( "ios game controller a outline", "virgo" ) ),
		array( " icon ion-ios-game-controller-b" => esc_html__( "ios game controller b", "virgo" ) ),
		array( " icon ion-ios-game-controller-b-outline" => esc_html__( "ios game controller b outline", "virgo" ) ),
		array( " icon ion-ios-gear" => esc_html__( "ios gear", "virgo" ) ),
		array( " icon ion-ios-gear-outline" => esc_html__( "ios gear outline", "virgo" ) ),
		array( " icon ion-ios-glasses" => esc_html__( "ios glasses", "virgo" ) ),
		array( " icon ion-ios-glasses-outline" => esc_html__( "ios glasses outline", "virgo" ) ),
		array( " icon ion-ios-grid-view" => esc_html__( "ios grid view", "virgo" ) ),
		array( " icon ion-ios-grid-view-outline" => esc_html__( "ios grid view outline", "virgo" ) ),
		array( " icon ion-ios-heart" => esc_html__( "ios heart", "virgo" ) ),
		array( " icon ion-ios-heart-outline" => esc_html__( "ios heart outline", "virgo" ) ),
		array( " icon ion-ios-help" => esc_html__( "ios help", "virgo" ) ),
		array( " icon ion-ios-help-empty" => esc_html__( "ios help empty", "virgo" ) ),
		array( " icon ion-ios-help-outline" => esc_html__( "ios help outline", "virgo" ) ),
		array( " icon ion-ios-home" => esc_html__( "ios home", "virgo" ) ),
		array( " icon ion-ios-home-outline" => esc_html__( "ios home outline", "virgo" ) ),
		array( " icon ion-ios-infinite" => esc_html__( "ios infinite", "virgo" ) ),
		array( " icon ion-ios-infinite-outline" => esc_html__( "ios infinite outline", "virgo" ) ),
		array( " icon ion-ios-information" => esc_html__( "ios information", "virgo" ) ),
		array( " icon ion-ios-information-empty" => esc_html__( "ios information empty", "virgo" ) ),
		array( " icon ion-ios-information-outline" => esc_html__( "ios information outline", "virgo" ) ),
		array( " icon ion-ios-ionic-outline" => esc_html__( "ios ionic outline", "virgo" ) ),
		array( " icon ion-ios-keypad" => esc_html__( "ios keypad", "virgo" ) ),
		array( " icon ion-ios-keypad-outline" => esc_html__( "ios keypad outline", "virgo" ) ),
		array( " icon ion-ios-lightbulb" => esc_html__( "ios lightbulb", "virgo" ) ),
		array( " icon ion-ios-lightbulb-outline" => esc_html__( "ios lightbulb outline", "virgo" ) ),
		array( " icon ion-ios-list" => esc_html__( "ios list", "virgo" ) ),
		array( " icon ion-ios-list-outline" => esc_html__( "ios list outline", "virgo" ) ),
		array( " icon ion-ios-location" => esc_html__( "ios location", "virgo" ) ),
		array( " icon ion-ios-location-outline" => esc_html__( "ios location outline", "virgo" ) ),
		array( " icon ion-ios-locked" => esc_html__( "ios locked", "virgo" ) ),
		array( " icon ion-ios-locked-outline" => esc_html__( "ios locked outline", "virgo" ) ),
		array( " icon ion-ios-loop" => esc_html__( "ios loop", "virgo" ) ),
		array( " icon ion-ios-loop-strong" => esc_html__( "ios loop strong", "virgo" ) ),
		array( " icon ion-ios-medical" => esc_html__( "ios medical", "virgo" ) ),
		array( " icon ion-ios-medical-outline" => esc_html__( "ios medical outline", "virgo" ) ),
		array( " icon ion-ios-medkit" => esc_html__( "ios medkit", "virgo" ) ),
		array( " icon ion-ios-medkit-outline" => esc_html__( "ios medkit outline", "virgo" ) ),
		array( " icon ion-ios-mic" => esc_html__( "ios mic", "virgo" ) ),
		array( " icon ion-ios-mic-off" => esc_html__( "ios mic off", "virgo" ) ),
		array( " icon ion-ios-mic-outline" => esc_html__( "ios mic outline", "virgo" ) ),
		array( " icon ion-ios-minus" => esc_html__( "ios minus", "virgo" ) ),
		array( " icon ion-ios-minus-empty" => esc_html__( "ios minus empty", "virgo" ) ),
		array( " icon ion-ios-minus-outline" => esc_html__( "ios minus outline", "virgo" ) ),
		array( " icon ion-ios-monitor" => esc_html__( "ios monitor", "virgo" ) ),
		array( " icon ion-ios-monitor-outline" => esc_html__( "ios monitor outline", "virgo" ) ),
		array( " icon ion-ios-moon" => esc_html__( "ios moon", "virgo" ) ),
		array( " icon ion-ios-moon-outline" => esc_html__( "ios moon outline", "virgo" ) ),
		array( " icon ion-ios-more" => esc_html__( "ios more", "virgo" ) ),
		array( " icon ion-ios-more-outline" => esc_html__( "ios more outline", "virgo" ) ),
		array( " icon ion-ios-musical-note" => esc_html__( "ios musical note", "virgo" ) ),
		array( " icon ion-ios-musical-notes" => esc_html__( "ios musical notes", "virgo" ) ),
		array( " icon ion-ios-navigate" => esc_html__( "ios navigate", "virgo" ) ),
		array( " icon ion-ios-navigate-outline" => esc_html__( "ios navigate outline", "virgo" ) ),
		array( " icon ion-ios-nutrition" => esc_html__( "ios nutrition", "virgo" ) ),
		array( " icon ion-ios-nutrition-outline" => esc_html__( "ios nutrition outline", "virgo" ) ),
		array( " icon ion-ios-paper" => esc_html__( "ios paper", "virgo" ) ),
		array( " icon ion-ios-paper-outline" => esc_html__( "ios paper outline", "virgo" ) ),
		array( " icon ion-ios-paperplane" => esc_html__( "ios paperplane", "virgo" ) ),
		array( " icon ion-ios-paperplane-outline" => esc_html__( "ios paperplane outline", "virgo" ) ),
		array( " icon ion-ios-partlysunny" => esc_html__( "ios partlysunny", "virgo" ) ),
		array( " icon ion-ios-partlysunny-outline" => esc_html__( "ios partlysunny outline", "virgo" ) ),
		array( " icon ion-ios-pause" => esc_html__( "ios pause", "virgo" ) ),
		array( " icon ion-ios-pause-outline" => esc_html__( "ios pause outline", "virgo" ) ),
		array( " icon ion-ios-paw" => esc_html__( "ios paw", "virgo" ) ),
		array( " icon ion-ios-paw-outline" => esc_html__( "ios paw outline", "virgo" ) ),
		array( " icon ion-ios-people" => esc_html__( "ios people", "virgo" ) ),
		array( " icon ion-ios-people-outline" => esc_html__( "ios people outline", "virgo" ) ),
		array( " icon ion-ios-person" => esc_html__( "ios person", "virgo" ) ),
		array( " icon ion-ios-person-outline" => esc_html__( "ios person outline", "virgo" ) ),
		array( " icon ion-ios-personadd" => esc_html__( "ios personadd", "virgo" ) ),
		array( " icon ion-ios-personadd-outline" => esc_html__( "ios personadd outline", "virgo" ) ),
		array( " icon ion-ios-photos" => esc_html__( "ios photos", "virgo" ) ),
		array( " icon ion-ios-photos-outline" => esc_html__( "ios photos outline", "virgo" ) ),
		array( " icon ion-ios-pie" => esc_html__( "ios pie", "virgo" ) ),
		array( " icon ion-ios-pie-outline" => esc_html__( "ios pie outline", "virgo" ) ),
		array( " icon ion-ios-pint" => esc_html__( "ios pint", "virgo" ) ),
		array( " icon ion-ios-pint-outline" => esc_html__( "ios pint outline", "virgo" ) ),
		array( " icon ion-ios-play" => esc_html__( "ios play", "virgo" ) ),
		array( " icon ion-ios-play-outline" => esc_html__( "ios play outline", "virgo" ) ),
		array( " icon ion-ios-plus" => esc_html__( "ios plus", "virgo" ) ),
		array( " icon ion-ios-plus-empty" => esc_html__( "ios plus empty", "virgo" ) ),
		array( " icon ion-ios-plus-outline" => esc_html__( "ios plus outline", "virgo" ) ),
		array( " icon ion-ios-pricetag" => esc_html__( "ios pricetag", "virgo" ) ),
		array( " icon ion-ios-pricetag-outline" => esc_html__( "ios pricetag outline", "virgo" ) ),
		array( " icon ion-ios-pricetags" => esc_html__( "ios pricetags", "virgo" ) ),
		array( " icon ion-ios-pricetags-outline" => esc_html__( "ios pricetags outline", "virgo" ) ),
		array( " icon ion-ios-printer" => esc_html__( "ios printer", "virgo" ) ),
		array( " icon ion-ios-printer-outline" => esc_html__( "ios printer outline", "virgo" ) ),
		array( " icon ion-ios-pulse" => esc_html__( "ios pulse", "virgo" ) ),
		array( " icon ion-ios-pulse-strong" => esc_html__( "ios pulse strong", "virgo" ) ),
		array( " icon ion-ios-rainy" => esc_html__( "ios rainy", "virgo" ) ),
		array( " icon ion-ios-rainy-outline" => esc_html__( "ios rainy outline", "virgo" ) ),
		array( " icon ion-ios-recording" => esc_html__( "ios recording", "virgo" ) ),
		array( " icon ion-ios-recording-outline" => esc_html__( "ios recording outline", "virgo" ) ),
		array( " icon ion-ios-redo" => esc_html__( "ios redo", "virgo" ) ),
		array( " icon ion-ios-redo-outline" => esc_html__( "ios redo outline", "virgo" ) ),
		array( " icon ion-ios-refresh" => esc_html__( "ios refresh", "virgo" ) ),
		array( " icon ion-ios-refresh-empty" => esc_html__( "ios refresh empty", "virgo" ) ),
		array( " icon ion-ios-refresh-outline" => esc_html__( "ios refresh outline", "virgo" ) ),
		array( " icon ion-ios-reload" => esc_html__( "ios reload", "virgo" ) ),
		array( " icon ion-ios-reverse-camera" => esc_html__( "ios reverse camera", "virgo" ) ),
		array( " icon ion-ios-reverse-camera-outline" => esc_html__( "ios reverse camera outline", "virgo" ) ),
		array( " icon ion-ios-rewind" => esc_html__( "ios rewind", "virgo" ) ),
		array( " icon ion-ios-rewind-outline" => esc_html__( "ios rewind outline", "virgo" ) ),
		array( " icon ion-ios-rose" => esc_html__( "ios rose", "virgo" ) ),
		array( " icon ion-ios-rose-outline" => esc_html__( "ios rose outline", "virgo" ) ),
		array( " icon ion-ios-search" => esc_html__( "ios search", "virgo" ) ),
		array( " icon ion-ios-search-strong" => esc_html__( "ios search strong", "virgo" ) ),
		array( " icon ion-ios-settings" => esc_html__( "ios settings", "virgo" ) ),
		array( " icon ion-ios-settings-strong" => esc_html__( "ios settings strong", "virgo" ) ),
		array( " icon ion-ios-shuffle" => esc_html__( "ios shuffle", "virgo" ) ),
		array( " icon ion-ios-shuffle-strong" => esc_html__( "ios shuffle strong", "virgo" ) ),
		array( " icon ion-ios-skipbackward" => esc_html__( "ios skipbackward", "virgo" ) ),
		array( " icon ion-ios-skipbackward-outline" => esc_html__( "ios skipbackward outline", "virgo" ) ),
		array( " icon ion-ios-skipforward" => esc_html__( "ios skipforward", "virgo" ) ),
		array( " icon ion-ios-skipforward-outline" => esc_html__( "ios skipforward outline", "virgo" ) ),
		array( " icon ion-ios-snowy" => esc_html__( "ios snowy", "virgo" ) ),
		array( " icon ion-ios-speedometer" => esc_html__( "ios speedometer", "virgo" ) ),
		array( " icon ion-ios-speedometer-outline" => esc_html__( "ios speedometer outline", "virgo" ) ),
		array( " icon ion-ios-star" => esc_html__( "ios star", "virgo" ) ),
		array( " icon ion-ios-star-half" => esc_html__( "ios star half", "virgo" ) ),
		array( " icon ion-ios-star-outline" => esc_html__( "ios star outline", "virgo" ) ),
		array( " icon ion-ios-stopwatch" => esc_html__( "ios stopwatch", "virgo" ) ),
		array( " icon ion-ios-stopwatch-outline" => esc_html__( "ios stopwatch outline", "virgo" ) ),
		array( " icon ion-ios-sunny" => esc_html__( "ios sunny", "virgo" ) ),
		array( " icon ion-ios-sunny-outline" => esc_html__( "ios sunny outline", "virgo" ) ),
		array( " icon ion-ios-telephone" => esc_html__( "ios telephone", "virgo" ) ),
		array( " icon ion-ios-telephone-outline" => esc_html__( "ios telephone outline", "virgo" ) ),
		array( " icon ion-ios-tennisball" => esc_html__( "ios tennisball", "virgo" ) ),
		array( " icon ion-ios-tennisball-outline" => esc_html__( "ios tennisball outline", "virgo" ) ),
		array( " icon ion-ios-thunderstorm" => esc_html__( "ios thunderstorm", "virgo" ) ),
		array( " icon ion-ios-thunderstorm-outline" => esc_html__( "ios thunderstorm outline", "virgo" ) ),
		array( " icon ion-ios-time" => esc_html__( "ios time", "virgo" ) ),
		array( " icon ion-ios-time-outline" => esc_html__( "ios time outline", "virgo" ) ),
		array( " icon ion-ios-timer" => esc_html__( "ios timer", "virgo" ) ),
		array( " icon ion-ios-timer-outline" => esc_html__( "ios timer outline", "virgo" ) ),
		array( " icon ion-ios-toggle" => esc_html__( "ios toggle", "virgo" ) ),
		array( " icon ion-ios-toggle-outline" => esc_html__( "ios toggle outline", "virgo" ) ),
		array( " icon ion-ios-trash" => esc_html__( "ios trash", "virgo" ) ),
		array( " icon ion-ios-trash-outline" => esc_html__( "ios trash outline", "virgo" ) ),
		array( " icon ion-ios-undo" => esc_html__( "ios undo", "virgo" ) ),
		array( " icon ion-ios-undo-outline" => esc_html__( "ios undo outline", "virgo" ) ),
		array( " icon ion-ios-unlocked" => esc_html__( "ios unlocked", "virgo" ) ),
		array( " icon ion-ios-unlocked-outline" => esc_html__( "ios unlocked outline", "virgo" ) ),
		array( " icon ion-ios-upload" => esc_html__( "ios upload", "virgo" ) ),
		array( " icon ion-ios-upload-outline" => esc_html__( "ios upload outline", "virgo" ) ),
		array( " icon ion-ios-videocam" => esc_html__( "ios videocam", "virgo" ) ),
		array( " icon ion-ios-videocam-outline" => esc_html__( "ios videocam outline", "virgo" ) ),
		array( " icon ion-ios-volume-high" => esc_html__( "ios volume high", "virgo" ) ),
		array( " icon ion-ios-volume-low" => esc_html__( "ios volume low", "virgo" ) ),
		array( " icon ion-ios-wineglass" => esc_html__( "ios wineglass", "virgo" ) ),
		array( " icon ion-ios-wineglass-outline" => esc_html__( "ios wineglass outline", "virgo" ) ),
		array( " icon ion-ios-world" => esc_html__( "ios world", "virgo" ) ),
		array( " icon ion-ios-world-outline" => esc_html__( "ios world outline", "virgo" ) ),
		array( " icon ion-ipad" => esc_html__( "ipad", "virgo" ) ),
		array( " icon ion-iphone" => esc_html__( "iphone", "virgo" ) ),
		array( " icon ion-ipod" => esc_html__( "ipod", "virgo" ) ),
		array( " icon ion-jet" => esc_html__( "jet", "virgo" ) ),
		array( " icon ion-key" => esc_html__( "key", "virgo" ) ),
		array( " icon ion-knife" => esc_html__( "knife", "virgo" ) ),
		array( " icon ion-laptop" => esc_html__( "laptop", "virgo" ) ),
		array( " icon ion-leaf" => esc_html__( "leaf", "virgo" ) ),
		array( " icon ion-levels" => esc_html__( "levels", "virgo" ) ),
		array( " icon ion-lightbulb" => esc_html__( "lightbulb", "virgo" ) ),
		array( " icon ion-link" => esc_html__( "link", "virgo" ) ),
		array( " icon ion-load-a" => esc_html__( "load a", "virgo" ) ),
		array( " icon ion-load-b" => esc_html__( "load b", "virgo" ) ),
		array( " icon ion-load-c" => esc_html__( "load c", "virgo" ) ),
		array( " icon ion-load-d" => esc_html__( "load d", "virgo" ) ),
		array( " icon ion-location" => esc_html__( "location", "virgo" ) ),
		array( " icon ion-lock-combination" => esc_html__( "lock combination", "virgo" ) ),
		array( " icon ion-locked" => esc_html__( "locked", "virgo" ) ),
		array( " icon ion-log-in" => esc_html__( "log in", "virgo" ) ),
		array( " icon ion-log-out" => esc_html__( "log out", "virgo" ) ),
		array( " icon ion-loop" => esc_html__( "loop", "virgo" ) ),
		array( " icon ion-magnet" => esc_html__( "magnet", "virgo" ) ),
		array( " icon ion-male" => esc_html__( "male", "virgo" ) ),
		array( " icon ion-man" => esc_html__( "man", "virgo" ) ),
		array( " icon ion-map" => esc_html__( "map", "virgo" ) ),
		array( " icon ion-medkit" => esc_html__( "medkit", "virgo" ) ),
		array( " icon ion-merge" => esc_html__( "merge", "virgo" ) ),
		array( " icon ion-mic-a" => esc_html__( "mic a", "virgo" ) ),
		array( " icon ion-mic-b" => esc_html__( "mic b", "virgo" ) ),
		array( " icon ion-mic-c" => esc_html__( "mic c", "virgo" ) ),
		array( " icon ion-minus" => esc_html__( "minus", "virgo" ) ),
		array( " icon ion-minus-circled" => esc_html__( "minus circled", "virgo" ) ),
		array( " icon ion-minus-round" => esc_html__( "minus round", "virgo" ) ),
		array( " icon ion-model-s" => esc_html__( "model s", "virgo" ) ),
		array( " icon ion-monitor" => esc_html__( "monitor", "virgo" ) ),
		array( " icon ion-more" => esc_html__( "more", "virgo" ) ),
		array( " icon ion-mouse" => esc_html__( "mouse", "virgo" ) ),
		array( " icon ion-music-note" => esc_html__( "music note", "virgo" ) ),
		array( " icon ion-navicon" => esc_html__( "navicon", "virgo" ) ),
		array( " icon ion-navicon-round" => esc_html__( "navicon round", "virgo" ) ),
		array( " icon ion-navigate" => esc_html__( "navigate", "virgo" ) ),
		array( " icon ion-network" => esc_html__( "network", "virgo" ) ),
		array( " icon ion-no-smoking" => esc_html__( "no smoking", "virgo" ) ),
		array( " icon ion-nuclear" => esc_html__( "nuclear", "virgo" ) ),
		array( " icon ion-outlet" => esc_html__( "outlet", "virgo" ) ),
		array( " icon ion-paintbrush" => esc_html__( "paintbrush", "virgo" ) ),
		array( " icon ion-paintbucket" => esc_html__( "paintbucket", "virgo" ) ),
		array( " icon ion-paper-airplane" => esc_html__( "paper airplane", "virgo" ) ),
		array( " icon ion-paperclip" => esc_html__( "paperclip", "virgo" ) ),
		array( " icon ion-pause" => esc_html__( "pause", "virgo" ) ),
		array( " icon ion-person" => esc_html__( "person", "virgo" ) ),
		array( " icon ion-person-add" => esc_html__( "person add", "virgo" ) ),
		array( " icon ion-person-stalker" => esc_html__( "person stalker", "virgo" ) ),
		array( " icon ion-pie-graph" => esc_html__( "pie graph", "virgo" ) ),
		array( " icon ion-pin" => esc_html__( "pin", "virgo" ) ),
		array( " icon ion-pinpoint" => esc_html__( "pinpoint", "virgo" ) ),
		array( " icon ion-pizza" => esc_html__( "pizza", "virgo" ) ),
		array( " icon ion-plane" => esc_html__( "plane", "virgo" ) ),
		array( " icon ion-planet" => esc_html__( "planet", "virgo" ) ),
		array( " icon ion-play" => esc_html__( "play", "virgo" ) ),
		array( " icon ion-playstation" => esc_html__( "playstation", "virgo" ) ),
		array( " icon ion-plus" => esc_html__( "plus", "virgo" ) ),
		array( " icon ion-plus-circled" => esc_html__( "plus circled", "virgo" ) ),
		array( " icon ion-plus-round" => esc_html__( "plus round", "virgo" ) ),
		array( " icon ion-podium" => esc_html__( "podium", "virgo" ) ),
		array( " icon ion-pound" => esc_html__( "pound", "virgo" ) ),
		array( " icon ion-power" => esc_html__( "power", "virgo" ) ),
		array( " icon ion-pricetag" => esc_html__( "pricetag", "virgo" ) ),
		array( " icon ion-pricetags" => esc_html__( "pricetags", "virgo" ) ),
		array( " icon ion-printer" => esc_html__( "printer", "virgo" ) ),
		array( " icon ion-pull-request" => esc_html__( "pull request", "virgo" ) ),
		array( " icon ion-qr-scanner" => esc_html__( "qr scanner", "virgo" ) ),
		array( " icon ion-quote" => esc_html__( "quote", "virgo" ) ),
		array( " icon ion-radio-waves" => esc_html__( "radio waves", "virgo" ) ),
		array( " icon ion-record" => esc_html__( "record", "virgo" ) ),
		array( " icon ion-refresh" => esc_html__( "refresh", "virgo" ) ),
		array( " icon ion-reply" => esc_html__( "reply", "virgo" ) ),
		array( " icon ion-reply-all" => esc_html__( "reply all", "virgo" ) ),
		array( " icon ion-ribbon-a" => esc_html__( "ribbon a", "virgo" ) ),
		array( " icon ion-ribbon-b" => esc_html__( "ribbon b", "virgo" ) ),
		array( " icon ion-sad" => esc_html__( "sad", "virgo" ) ),
		array( " icon ion-sad-outline" => esc_html__( "sad outline", "virgo" ) ),
		array( " icon ion-scissors" => esc_html__( "scissors", "virgo" ) ),
		array( " icon ion-search" => esc_html__( "search", "virgo" ) ),
		array( " icon ion-settings" => esc_html__( "settings", "virgo" ) ),
		array( " icon ion-share" => esc_html__( "share", "virgo" ) ),
		array( " icon ion-shuffle" => esc_html__( "shuffle", "virgo" ) ),
		array( " icon ion-skip-backward" => esc_html__( "skip backward", "virgo" ) ),
		array( " icon ion-skip-forward" => esc_html__( "skip forward", "virgo" ) ),
		array( " icon ion-social-android" => esc_html__( "social android", "virgo" ) ),
		array( " icon ion-social-android-outline" => esc_html__( "social android outline", "virgo" ) ),
		array( " icon ion-social-angular" => esc_html__( "social angular", "virgo" ) ),
		array( " icon ion-social-angular-outline" => esc_html__( "social angular outline", "virgo" ) ),
		array( " icon ion-social-apple" => esc_html__( "social apple", "virgo" ) ),
		array( " icon ion-social-apple-outline" => esc_html__( "social apple outline", "virgo" ) ),
		array( " icon ion-social-bitcoin" => esc_html__( "social bitcoin", "virgo" ) ),
		array( " icon ion-social-bitcoin-outline" => esc_html__( "social bitcoin outline", "virgo" ) ),
		array( " icon ion-social-buffer" => esc_html__( "social buffer", "virgo" ) ),
		array( " icon ion-social-buffer-outline" => esc_html__( "social buffer outline", "virgo" ) ),
		array( " icon ion-social-chrome" => esc_html__( "social chrome", "virgo" ) ),
		array( " icon ion-social-chrome-outline" => esc_html__( "social chrome outline", "virgo" ) ),
		array( " icon ion-social-codepen" => esc_html__( "social codepen", "virgo" ) ),
		array( " icon ion-social-codepen-outline" => esc_html__( "social codepen outline", "virgo" ) ),
		array( " icon ion-social-css3" => esc_html__( "social css3", "virgo" ) ),
		array( " icon ion-social-css3-outline" => esc_html__( "social css3 outline", "virgo" ) ),
		array( " icon ion-social-designernews" => esc_html__( "social designernews", "virgo" ) ),
		array( " icon ion-social-designernews-outline" => esc_html__( "social designernews outline", "virgo" ) ),
		array( " icon ion-social-dribbble" => esc_html__( "social dribbble", "virgo" ) ),
		array( " icon ion-social-dribbble-outline" => esc_html__( "social dribbble outline", "virgo" ) ),
		array( " icon ion-social-dropbox" => esc_html__( "social dropbox", "virgo" ) ),
		array( " icon ion-social-dropbox-outline" => esc_html__( "social dropbox outline", "virgo" ) ),
		array( " icon ion-social-euro" => esc_html__( "social euro", "virgo" ) ),
		array( " icon ion-social-euro-outline" => esc_html__( "social euro outline", "virgo" ) ),
		array( " icon ion-social-facebook" => esc_html__( "social facebook", "virgo" ) ),
		array( " icon ion-social-facebook-outline" => esc_html__( "social facebook outline", "virgo" ) ),
		array( " icon ion-social-foursquare" => esc_html__( "social foursquare", "virgo" ) ),
		array( " icon ion-social-foursquare-outline" => esc_html__( "social foursquare outline", "virgo" ) ),
		array( " icon ion-social-freebsd-devil" => esc_html__( "social freebsd devil", "virgo" ) ),
		array( " icon ion-social-github" => esc_html__( "social github", "virgo" ) ),
		array( " icon ion-social-github-outline" => esc_html__( "social github outline", "virgo" ) ),
		array( " icon ion-social-google" => esc_html__( "social google", "virgo" ) ),
		array( " icon ion-social-google-outline" => esc_html__( "social google outline", "virgo" ) ),
		array( " icon ion-social-googleplus" => esc_html__( "social googleplus", "virgo" ) ),
		array( " icon ion-social-googleplus-outline" => esc_html__( "social googleplus outline", "virgo" ) ),
		array( " icon ion-social-hackernews" => esc_html__( "social hackernews", "virgo" ) ),
		array( " icon ion-social-hackernews-outline" => esc_html__( "social hackernews outline", "virgo" ) ),
		array( " icon ion-social-html5" => esc_html__( "social html5", "virgo" ) ),
		array( " icon ion-social-html5-outline" => esc_html__( "social html5 outline", "virgo" ) ),
		array( " icon ion-social-instagram" => esc_html__( "social instagram", "virgo" ) ),
		array( " icon ion-social-instagram-outline" => esc_html__( "social instagram outline", "virgo" ) ),
		array( " icon ion-social-javascript" => esc_html__( "social javascript", "virgo" ) ),
		array( " icon ion-social-javascript-outline" => esc_html__( "social javascript outline", "virgo" ) ),
		array( " icon ion-social-linkedin" => esc_html__( "social linkedin", "virgo" ) ),
		array( " icon ion-social-linkedin-outline" => esc_html__( "social linkedin outline", "virgo" ) ),
		array( " icon ion-social-markdown" => esc_html__( "social markdown", "virgo" ) ),
		array( " icon ion-social-nodejs" => esc_html__( "social nodejs", "virgo" ) ),
		array( " icon ion-social-octocat" => esc_html__( "social octocat", "virgo" ) ),
		array( " icon ion-social-pinterest" => esc_html__( "social pinterest", "virgo" ) ),
		array( " icon ion-social-pinterest-outline" => esc_html__( "social pinterest outline", "virgo" ) ),
		array( " icon ion-social-python" => esc_html__( "social python", "virgo" ) ),
		array( " icon ion-social-reddit" => esc_html__( "social reddit", "virgo" ) ),
		array( " icon ion-social-reddit-outline" => esc_html__( "social reddit outline", "virgo" ) ),
		array( " icon ion-social-rss" => esc_html__( "social rss", "virgo" ) ),
		array( " icon ion-social-rss-outline" => esc_html__( "social rss outline", "virgo" ) ),
		array( " icon ion-social-sass" => esc_html__( "social sass", "virgo" ) ),
		array( " icon ion-social-skype" => esc_html__( "social skype", "virgo" ) ),
		array( " icon ion-social-skype-outline" => esc_html__( "social skype outline", "virgo" ) ),
		array( " icon ion-social-snapchat" => esc_html__( "social snapchat", "virgo" ) ),
		array( " icon ion-social-snapchat-outline" => esc_html__( "social snapchat outline", "virgo" ) ),
		array( " icon ion-social-tumblr" => esc_html__( "social tumblr", "virgo" ) ),
		array( " icon ion-social-tumblr-outline" => esc_html__( "social tumblr outline", "virgo" ) ),
		array( " icon ion-social-tux" => esc_html__( "social tux", "virgo" ) ),
		array( " icon ion-social-twitch" => esc_html__( "social twitch", "virgo" ) ),
		array( " icon ion-social-twitch-outline" => esc_html__( "social twitch outline", "virgo" ) ),
		array( " icon ion-social-twitter" => esc_html__( "social twitter", "virgo" ) ),
		array( " icon ion-social-twitter-outline" => esc_html__( "social twitter outline", "virgo" ) ),
		array( " icon ion-social-usd" => esc_html__( "social usd", "virgo" ) ),
		array( " icon ion-social-usd-outline" => esc_html__( "social usd outline", "virgo" ) ),
		array( " icon ion-social-vimeo" => esc_html__( "social vimeo", "virgo" ) ),
		array( " icon ion-social-vimeo-outline" => esc_html__( "social vimeo outline", "virgo" ) ),
		array( " icon ion-social-whatsapp" => esc_html__( "social whatsapp", "virgo" ) ),
		array( " icon ion-social-whatsapp-outline" => esc_html__( "social whatsapp outline", "virgo" ) ),
		array( " icon ion-social-windows" => esc_html__( "social windows", "virgo" ) ),
		array( " icon ion-social-windows-outline" => esc_html__( "social windows outline", "virgo" ) ),
		array( " icon ion-social-wordpress" => esc_html__( "social wordpress", "virgo" ) ),
		array( " icon ion-social-wordpress-outline" => esc_html__( "social wordpress outline", "virgo" ) ),
		array( " icon ion-social-yahoo" => esc_html__( "social yahoo", "virgo" ) ),
		array( " icon ion-social-yahoo-outline" => esc_html__( "social yahoo outline", "virgo" ) ),
		array( " icon ion-social-yen" => esc_html__( "social yen", "virgo" ) ),
		array( " icon ion-social-yen-outline" => esc_html__( "social yen outline", "virgo" ) ),
		array( " icon ion-social-youtube" => esc_html__( "social youtube", "virgo" ) ),
		array( " icon ion-social-youtube-outline" => esc_html__( "social youtube outline", "virgo" ) ),
		array( " icon ion-soup-can" => esc_html__( "soup can", "virgo" ) ),
		array( " icon ion-soup-can-outline" => esc_html__( "soup can outline", "virgo" ) ),
		array( " icon ion-speakerphone" => esc_html__( "speakerphone", "virgo" ) ),
		array( " icon ion-speedometer" => esc_html__( "speedometer", "virgo" ) ),
		array( " icon ion-spoon" => esc_html__( "spoon", "virgo" ) ),
		array( " icon ion-star" => esc_html__( "star", "virgo" ) ),
		array( " icon ion-stats-bars" => esc_html__( "stats bars", "virgo" ) ),
		array( " icon ion-steam" => esc_html__( "steam", "virgo" ) ),
		array( " icon ion-stop" => esc_html__( "stop", "virgo" ) ),
		array( " icon ion-thermometer" => esc_html__( "thermometer", "virgo" ) ),
		array( " icon ion-thumbsdown" => esc_html__( "thumbsdown", "virgo" ) ),
		array( " icon ion-thumbsup" => esc_html__( "thumbsup", "virgo" ) ),
		array( " icon ion-toggle" => esc_html__( "toggle", "virgo" ) ),
		array( " icon ion-toggle-filled" => esc_html__( "toggle filled", "virgo" ) ),
		array( " icon ion-transgender" => esc_html__( "transgender", "virgo" ) ),
		array( " icon ion-trash-a" => esc_html__( "trash a", "virgo" ) ),
		array( " icon ion-trash-b" => esc_html__( "trash b", "virgo" ) ),
		array( " icon ion-trophy" => esc_html__( "trophy", "virgo" ) ),
		array( " icon ion-tshirt" => esc_html__( "tshirt", "virgo" ) ),
		array( " icon ion-tshirt-outline" => esc_html__( "tshirt outline", "virgo" ) ),
		array( " icon ion-umbrella" => esc_html__( "umbrella", "virgo" ) ),
		array( " icon ion-university" => esc_html__( "university", "virgo" ) ),
		array( " icon ion-unlocked" => esc_html__( "unlocked", "virgo" ) ),
		array( " icon ion-upload" => esc_html__( "upload", "virgo" ) ),
		array( " icon ion-usb" => esc_html__( "usb", "virgo" ) ),
		array( " icon ion-videocamera" => esc_html__( "videocamera", "virgo" ) ),
		array( " icon ion-volume-high" => esc_html__( "volume high", "virgo" ) ),
		array( " icon ion-volume-low" => esc_html__( "volume low", "virgo" ) ),
		array( " icon ion-volume-medium" => esc_html__( "volume medium", "virgo" ) ),
		array( " icon ion-volume-mute" => esc_html__( "volume mute", "virgo" ) ),
		array( " icon ion-wand" => esc_html__( "wand", "virgo" ) ),
		array( " icon ion-waterdrop" => esc_html__( "waterdrop", "virgo" ) ),
		array( " icon ion-wifi" => esc_html__( "wifi", "virgo" ) ),
		array( " icon ion-wineglass" => esc_html__( "wineglass", "virgo" ) ),
		array( " icon ion-woman" => esc_html__( "woman", "virgo" ) ),
		array( " icon ion-wrench" => esc_html__( "wrench", "virgo" ) ),
		array( " icon ion-xbox" => esc_html__( "xbox", "virgo" ) ),
		array( " icon ion-alert" => esc_html__( "alert", "virgo" ) ),
		array( " icon ion-alert-circled" => esc_html__( "alert circled", "virgo" ) ),
		array( " icon ion-android-add" => esc_html__( "android add", "virgo" ) ),
		array( " icon ion-android-add-circle" => esc_html__( "android add circle", "virgo" ) ),
		array( " icon ion-android-alarm-clock" => esc_html__( "android alarm clock", "virgo" ) ),
		array( " icon ion-android-alert" => esc_html__( "android alert", "virgo" ) ),
		array( " icon ion-android-apps" => esc_html__( "android apps", "virgo" ) ),
		array( " icon ion-android-archive" => esc_html__( "android archive", "virgo" ) ),
		array( " icon ion-android-arrow-back" => esc_html__( "android arrow back", "virgo" ) ),
		array( " icon ion-android-arrow-down" => esc_html__( "android arrow down", "virgo" ) ),
		array( " icon ion-android-arrow-dropdown" => esc_html__( "android arrow dropdown", "virgo" ) ),
		array( " icon ion-android-arrow-dropdown-circle" => esc_html__( "android arrow dropdown circle", "virgo" ) ),
		array( " icon ion-android-arrow-dropleft" => esc_html__( "android arrow dropleft", "virgo" ) ),
		array( " icon ion-android-arrow-dropleft-circle" => esc_html__( "android arrow dropleft circle", "virgo" ) ),
		array( " icon ion-android-arrow-dropright" => esc_html__( "android arrow dropright", "virgo" ) ),
		array( " icon ion-android-arrow-dropright-circle" => esc_html__( "android arrow dropright circle", "virgo" ) ),
		array( " icon ion-android-arrow-dropup" => esc_html__( "android arrow dropup", "virgo" ) ),
		array( " icon ion-android-arrow-dropup-circle" => esc_html__( "android arrow dropup circle", "virgo" ) ),
		array( " icon ion-android-arrow-forward" => esc_html__( "android arrow forward", "virgo" ) ),
		array( " icon ion-android-arrow-up" => esc_html__( "android arrow up", "virgo" ) ),
		array( " icon ion-android-attach" => esc_html__( "android attach", "virgo" ) ),
		array( " icon ion-android-bar" => esc_html__( "android bar", "virgo" ) ),
		array( " icon ion-android-bicycle" => esc_html__( "android bicycle", "virgo" ) ),
		array( " icon ion-android-boat" => esc_html__( "android boat", "virgo" ) ),
		array( " icon ion-android-bookmark" => esc_html__( "android bookmark", "virgo" ) ),
		array( " icon ion-android-bulb" => esc_html__( "android bulb", "virgo" ) ),
		array( " icon ion-android-bus" => esc_html__( "android bus", "virgo" ) ),
		array( " icon ion-android-calendar" => esc_html__( "android calendar", "virgo" ) ),
		array( " icon ion-android-call" => esc_html__( "android call", "virgo" ) ),
		array( " icon ion-android-camera" => esc_html__( "android camera", "virgo" ) ),
		array( " icon ion-android-cancel" => esc_html__( "android cancel", "virgo" ) ),
		array( " icon ion-android-car" => esc_html__( "android car", "virgo" ) ),
		array( " icon ion-android-cart" => esc_html__( "android cart", "virgo" ) ),
		array( " icon ion-android-chat" => esc_html__( "android chat", "virgo" ) ),
		array( " icon ion-android-checkbox" => esc_html__( "android checkbox", "virgo" ) ),
		array( " icon ion-android-checkbox-blank" => esc_html__( "android checkbox blank", "virgo" ) ),
		array( " icon ion-android-checkbox-outline" => esc_html__( "android checkbox outline", "virgo" ) ),
		array( " icon ion-android-checkbox-outline-blank" => esc_html__( "android checkbox outline blank", "virgo" ) ),
		array( " icon ion-android-checkmark-circle" => esc_html__( "android checkmark circle", "virgo" ) ),
		array( " icon ion-android-clipboard" => esc_html__( "android clipboard", "virgo" ) ),
		array( " icon ion-android-close" => esc_html__( "android close", "virgo" ) ),
		array( " icon ion-android-cloud" => esc_html__( "android cloud", "virgo" ) ),
		array( " icon ion-android-cloud-circle" => esc_html__( "android cloud circle", "virgo" ) ),
		array( " icon ion-android-cloud-done" => esc_html__( "android cloud done", "virgo" ) ),
		array( " icon ion-android-cloud-outline" => esc_html__( "android cloud outline", "virgo" ) ),
		array( " icon ion-android-color-palette" => esc_html__( "android color palette", "virgo" ) ),
		array( " icon ion-android-compass" => esc_html__( "android compass", "virgo" ) ),
		array( " icon ion-android-contact" => esc_html__( "android contact", "virgo" ) ),
		array( " icon ion-android-contacts" => esc_html__( "android contacts", "virgo" ) ),
		array( " icon ion-android-contract" => esc_html__( "android contract", "virgo" ) ),
		array( " icon ion-android-create" => esc_html__( "android create", "virgo" ) ),
		array( " icon ion-android-delete" => esc_html__( "android delete", "virgo" ) ),
		array( " icon ion-android-desktop" => esc_html__( "android desktop", "virgo" ) ),
		array( " icon ion-android-document" => esc_html__( "android document", "virgo" ) ),
		array( " icon ion-android-done" => esc_html__( "android done", "virgo" ) ),
		array( " icon ion-android-done-all" => esc_html__( "android done all", "virgo" ) ),
		array( " icon ion-android-download" => esc_html__( "android download", "virgo" ) ),
		array( " icon ion-android-drafts" => esc_html__( "android drafts", "virgo" ) ),
		array( " icon ion-android-exit" => esc_html__( "android exit", "virgo" ) ),
		array( " icon ion-android-expand" => esc_html__( "android expand", "virgo" ) ),
		array( " icon ion-android-favorite" => esc_html__( "android favorite", "virgo" ) ),
		array( " icon ion-android-favorite-outline" => esc_html__( "android favorite outline", "virgo" ) ),
		array( " icon ion-android-film" => esc_html__( "android film", "virgo" ) ),
		array( " icon ion-android-folder" => esc_html__( "android folder", "virgo" ) ),
		array( " icon ion-android-folder-open" => esc_html__( "android folder open", "virgo" ) ),
		array( " icon ion-android-funnel" => esc_html__( "android funnel", "virgo" ) ),
		array( " icon ion-android-globe" => esc_html__( "android globe", "virgo" ) ),
		array( " icon ion-android-hand" => esc_html__( "android hand", "virgo" ) ),
		array( " icon ion-android-hangout" => esc_html__( "android hangout", "virgo" ) ),
		array( " icon ion-android-happy" => esc_html__( "android happy", "virgo" ) ),
		array( " icon ion-android-home" => esc_html__( "android home", "virgo" ) ),
		array( " icon ion-android-image" => esc_html__( "android image", "virgo" ) ),
		array( " icon ion-android-laptop" => esc_html__( "android laptop", "virgo" ) ),
		array( " icon ion-android-list" => esc_html__( "android list", "virgo" ) ),
		array( " icon ion-android-locate" => esc_html__( "android locate", "virgo" ) ),
		array( " icon ion-android-lock" => esc_html__( "android lock", "virgo" ) ),
		array( " icon ion-android-mail" => esc_html__( "android mail", "virgo" ) ),
		array( " icon ion-android-map" => esc_html__( "android map", "virgo" ) ),
		array( " icon ion-android-menu" => esc_html__( "android menu", "virgo" ) ),
		array( " icon ion-android-microphone" => esc_html__( "android microphone", "virgo" ) ),
		array( " icon ion-android-microphone-off" => esc_html__( "android microphone off", "virgo" ) ),
		array( " icon ion-android-more-horizontal" => esc_html__( "android more horizontal", "virgo" ) ),
		array( " icon ion-android-more-vertical" => esc_html__( "android more vertical", "virgo" ) ),
		array( " icon ion-android-navigate" => esc_html__( "android navigate", "virgo" ) ),
		array( " icon ion-android-notifications" => esc_html__( "android notifications", "virgo" ) ),
		array( " icon ion-android-notifications-none" => esc_html__( "android notifications none", "virgo" ) ),
		array( " icon ion-android-notifications-off" => esc_html__( "android notifications off", "virgo" ) ),
		array( " icon ion-android-open" => esc_html__( "android open", "virgo" ) ),
		array( " icon ion-android-options" => esc_html__( "android options", "virgo" ) ),
		array( " icon ion-android-people" => esc_html__( "android people", "virgo" ) ),
		array( " icon ion-android-person" => esc_html__( "android person", "virgo" ) ),
		array( " icon ion-android-person-add" => esc_html__( "android person add", "virgo" ) ),
		array( " icon ion-android-phone-landscape" => esc_html__( "android phone landscape", "virgo" ) ),
		array( " icon ion-android-phone-portrait" => esc_html__( "android phone portrait", "virgo" ) ),
		array( " icon ion-android-pin" => esc_html__( "android pin", "virgo" ) ),
		array( " icon ion-android-plane" => esc_html__( "android plane", "virgo" ) ),
		array( " icon ion-android-playstore" => esc_html__( "android playstore", "virgo" ) ),
		array( " icon ion-android-print" => esc_html__( "android print", "virgo" ) ),
		array( " icon ion-android-radio-button-off" => esc_html__( "android radio button off", "virgo" ) ),
		array( " icon ion-android-radio-button-on" => esc_html__( "android radio button on", "virgo" ) ),
		array( " icon ion-android-refresh" => esc_html__( "android refresh", "virgo" ) ),
		array( " icon ion-android-remove" => esc_html__( "android remove", "virgo" ) ),
		array( " icon ion-android-remove-circle" => esc_html__( "android remove circle", "virgo" ) ),
		array( " icon ion-android-restaurant" => esc_html__( "android restaurant", "virgo" ) ),
		array( " icon ion-android-sad" => esc_html__( "android sad", "virgo" ) ),
		array( " icon ion-android-search" => esc_html__( "android search", "virgo" ) ),
		array( " icon ion-android-send" => esc_html__( "android send", "virgo" ) ),
		array( " icon ion-android-settings" => esc_html__( "android settings", "virgo" ) ),
		array( " icon ion-android-share" => esc_html__( "android share", "virgo" ) ),
		array( " icon ion-android-share-alt" => esc_html__( "android share alt", "virgo" ) ),
		array( " icon ion-android-star" => esc_html__( "android star", "virgo" ) ),
		array( " icon ion-android-star-half" => esc_html__( "android star half", "virgo" ) ),
		array( " icon ion-android-star-outline" => esc_html__( "android star outline", "virgo" ) ),
		array( " icon ion-android-stopwatch" => esc_html__( "android stopwatch", "virgo" ) ),
		array( " icon ion-android-subway" => esc_html__( "android subway", "virgo" ) ),
		array( " icon ion-android-sunny" => esc_html__( "android sunny", "virgo" ) ),
		array( " icon ion-android-sync" => esc_html__( "android sync", "virgo" ) ),
		array( " icon ion-android-textsms" => esc_html__( "android textsms", "virgo" ) ),
		array( " icon ion-android-time" => esc_html__( "android time", "virgo" ) ),
		array( " icon ion-android-train" => esc_html__( "android train", "virgo" ) ),
		array( " icon ion-android-unlock" => esc_html__( "android unlock", "virgo" ) ),
		array( " icon ion-android-upload" => esc_html__( "android upload", "virgo" ) ),
		array( " icon ion-android-volume-down" => esc_html__( "android volume down", "virgo" ) ),
		array( " icon ion-android-volume-mute" => esc_html__( "android volume mute", "virgo" ) ),
		array( " icon ion-android-volume-off" => esc_html__( "android volume off", "virgo" ) ),
		array( " icon ion-android-volume-up" => esc_html__( "android volume up", "virgo" ) ),
		array( " icon ion-android-walk" => esc_html__( "android walk", "virgo" ) ),
		array( " icon ion-android-warning" => esc_html__( "android warning", "virgo" ) ),
		array( " icon ion-android-watch" => esc_html__( "android watch", "virgo" ) ),
		array( " icon ion-android-wifi" => esc_html__( "android wifi", "virgo" ) ),
		array( " icon ion-aperture" => esc_html__( "aperture", "virgo" ) ),
		array( " icon ion-archive" => esc_html__( "archive", "virgo" ) ),
		array( " icon ion-arrow-down-a" => esc_html__( "arrow down a", "virgo" ) ),
		array( " icon ion-arrow-down-b" => esc_html__( "arrow down b", "virgo" ) ),
		array( " icon ion-arrow-down-c" => esc_html__( "arrow down c", "virgo" ) ),
		array( " icon ion-arrow-expand" => esc_html__( "arrow expand", "virgo" ) ),
		array( " icon ion-arrow-graph-down-left" => esc_html__( "arrow graph down left", "virgo" ) ),
		array( " icon ion-arrow-graph-down-right" => esc_html__( "arrow graph down right", "virgo" ) ),
		array( " icon ion-arrow-graph-up-left" => esc_html__( "arrow graph up left", "virgo" ) ),
		array( " icon ion-arrow-graph-up-right" => esc_html__( "arrow graph up right", "virgo" ) ),
		array( " icon ion-arrow-left-a" => esc_html__( "arrow left a", "virgo" ) ),
		array( " icon ion-arrow-left-b" => esc_html__( "arrow left b", "virgo" ) ),
		array( " icon ion-arrow-left-c" => esc_html__( "arrow left c", "virgo" ) ),
		array( " icon ion-arrow-move" => esc_html__( "arrow move", "virgo" ) ),
		array( " icon ion-arrow-resize" => esc_html__( "arrow resize", "virgo" ) ),
		array( " icon ion-arrow-return-left" => esc_html__( "arrow return left", "virgo" ) ),
		array( " icon ion-arrow-return-right" => esc_html__( "arrow return right", "virgo" ) ),
		array( " icon ion-arrow-right-a" => esc_html__( "arrow right a", "virgo" ) ),
		array( " icon ion-arrow-right-b" => esc_html__( "arrow right b", "virgo" ) ),
		array( " icon ion-arrow-right-c" => esc_html__( "arrow right c", "virgo" ) ),
		array( " icon ion-arrow-shrink" => esc_html__( "arrow shrink", "virgo" ) ),
		array( " icon ion-arrow-swap" => esc_html__( "arrow swap", "virgo" ) ),
		array( " icon ion-arrow-up-a" => esc_html__( "arrow up a", "virgo" ) ),
		array( " icon ion-arrow-up-b" => esc_html__( "arrow up b", "virgo" ) ),
		array( " icon ion-arrow-up-c" => esc_html__( "arrow up c", "virgo" ) ),
		array( " icon ion-asterisk" => esc_html__( "asterisk", "virgo" ) ),
		array( " icon ion-at" => esc_html__( "at", "virgo" ) ),
		array( " icon ion-backspace" => esc_html__( "backspace", "virgo" ) ),
		array( " icon ion-backspace-outline" => esc_html__( "backspace outline", "virgo" ) ),
		array( " icon ion-bag" => esc_html__( "bag", "virgo" ) ),
		array( " icon ion-battery-charging" => esc_html__( "battery charging", "virgo" ) ),
		array( " icon ion-battery-empty" => esc_html__( "battery empty", "virgo" ) ),
		array( " icon ion-battery-full" => esc_html__( "battery full", "virgo" ) ),
		array( " icon ion-battery-half" => esc_html__( "battery half", "virgo" ) ),
		array( " icon ion-battery-low" => esc_html__( "battery low", "virgo" ) ),
		array( " icon ion-beaker" => esc_html__( "beaker", "virgo" ) ),
		array( " icon ion-beer" => esc_html__( "beer", "virgo" ) ),
		array( " icon ion-bluetooth" => esc_html__( "bluetooth", "virgo" ) ),
		array( " icon ion-bonfire" => esc_html__( "bonfire", "virgo" ) ),
		array( " icon ion-bookmark" => esc_html__( "bookmark", "virgo" ) ),
		array( " icon ion-bowtie" => esc_html__( "bowtie", "virgo" ) ),
		array( " icon ion-briefcase" => esc_html__( "briefcase", "virgo" ) ),
		array( " icon ion-bug" => esc_html__( "bug", "virgo" ) ),
		array( " icon ion-calculator" => esc_html__( "calculator", "virgo" ) ),
		array( " icon ion-calendar" => esc_html__( "calendar", "virgo" ) ),
		array( " icon ion-camera" => esc_html__( "camera", "virgo" ) ),
		array( " icon ion-card" => esc_html__( "card", "virgo" ) ),
		array( " icon ion-cash" => esc_html__( "cash", "virgo" ) ),
		array( " icon ion-chatbox" => esc_html__( "chatbox", "virgo" ) ),
		array( " icon ion-chatbox-working" => esc_html__( "chatbox working", "virgo" ) ),
		array( " icon ion-chatboxes" => esc_html__( "chatboxes", "virgo" ) ),
		array( " icon ion-chatbubble" => esc_html__( "chatbubble", "virgo" ) ),
		array( " icon ion-chatbubble-working" => esc_html__( "chatbubble working", "virgo" ) ),
		array( " icon ion-chatbubbles" => esc_html__( "chatbubbles", "virgo" ) ),
		array( " icon ion-checkmark" => esc_html__( "checkmark", "virgo" ) ),
		array( " icon ion-checkmark-circled" => esc_html__( "checkmark circled", "virgo" ) ),
		array( " icon ion-checkmark-round" => esc_html__( "checkmark round", "virgo" ) ),
		array( " icon ion-chevron-down" => esc_html__( "chevron down", "virgo" ) ),
		array( " icon ion-chevron-left" => esc_html__( "chevron left", "virgo" ) ),
		array( " icon ion-chevron-right" => esc_html__( "chevron right", "virgo" ) ),
		array( " icon ion-chevron-up" => esc_html__( "chevron up", "virgo" ) ),
		array( " icon ion-clipboard" => esc_html__( "clipboard", "virgo" ) ),
		array( " icon ion-clock" => esc_html__( "clock", "virgo" ) ),
		array( " icon ion-close" => esc_html__( "close", "virgo" ) ),
		array( " icon ion-close-circled" => esc_html__( "close circled", "virgo" ) ),
		array( " icon ion-close-round" => esc_html__( "close round", "virgo" ) ),
		array( " icon ion-closed-captioning" => esc_html__( "closed captioning", "virgo" ) ),
		array( " icon ion-cloud" => esc_html__( "cloud", "virgo" ) ),
		array( " icon ion-code" => esc_html__( "code", "virgo" ) ),
		array( " icon ion-code-download" => esc_html__( "code download", "virgo" ) ),
		array( " icon ion-code-working" => esc_html__( "code working", "virgo" ) ),
		array( " icon ion-coffee" => esc_html__( "coffee", "virgo" ) ),
		array( " icon ion-compass" => esc_html__( "compass", "virgo" ) ),
		array( " icon ion-compose" => esc_html__( "compose", "virgo" ) ),
		array( " icon ion-connection-bars" => esc_html__( "connection bars", "virgo" ) ),
		array( " icon ion-contrast" => esc_html__( "contrast", "virgo" ) ),
		array( " icon ion-crop" => esc_html__( "crop", "virgo" ) ),
		array( " icon ion-cube" => esc_html__( "cube", "virgo" ) ),
		array( " icon ion-disc" => esc_html__( "disc", "virgo" ) ),
		array( " icon ion-document" => esc_html__( "document", "virgo" ) ),
		array( " icon ion-document-text" => esc_html__( "document text", "virgo" ) ),
		array( " icon ion-drag" => esc_html__( "drag", "virgo" ) ),
		array( " icon ion-earth" => esc_html__( "earth", "virgo" ) ),
		array( " icon ion-easel" => esc_html__( "easel", "virgo" ) ),
		array( " icon ion-edit" => esc_html__( "edit", "virgo" ) ),
		array( " icon ion-egg" => esc_html__( "egg", "virgo" ) ),
		array( " icon ion-eject" => esc_html__( "eject", "virgo" ) ),
		array( " icon ion-email" => esc_html__( "email", "virgo" ) ),
		array( " icon ion-email-unread" => esc_html__( "email unread", "virgo" ) ),
		array( " icon ion-erlenmeyer-flask" => esc_html__( "erlenmeyer flask", "virgo" ) ),
		array( " icon ion-erlenmeyer-flask-bubbles" => esc_html__( "erlenmeyer flask bubbles", "virgo" ) ),
		array( " icon ion-eye" => esc_html__( "eye", "virgo" ) ),
		array( " icon ion-eye-disabled" => esc_html__( "eye disabled", "virgo" ) ),
		array( " icon ion-female" => esc_html__( "female", "virgo" ) ),
		array( " icon ion-filing" => esc_html__( "filing", "virgo" ) ),
		array( " icon ion-film-marker" => esc_html__( "film marker", "virgo" ) ),
		array( " icon ion-fireball" => esc_html__( "fireball", "virgo" ) ),
		array( " icon ion-flag" => esc_html__( "flag", "virgo" ) ),
		array( " icon ion-flame" => esc_html__( "flame", "virgo" ) ),
		array( " icon ion-flash" => esc_html__( "flash", "virgo" ) ),
		array( " icon ion-flash-off" => esc_html__( "flash off", "virgo" ) ),
		array( " icon ion-folder" => esc_html__( "folder", "virgo" ) ),
		array( " icon ion-fork" => esc_html__( "fork", "virgo" ) ),
		array( " icon ion-fork-repo" => esc_html__( "fork repo", "virgo" ) ),
		array( " icon ion-forward" => esc_html__( "forward", "virgo" ) ),
		array( " icon ion-funnel" => esc_html__( "funnel", "virgo" ) ),
		array( " icon ion-gear-a" => esc_html__( "gear a", "virgo" ) ),
		array( " icon ion-gear-b" => esc_html__( "gear b", "virgo" ) ),
		array( " icon ion-grid" => esc_html__( "grid", "virgo" ) ),
		array( " icon ion-hammer" => esc_html__( "hammer", "virgo" ) ),
		array( " icon ion-happy" => esc_html__( "happy", "virgo" ) ),
		array( " icon ion-happy-outline" => esc_html__( "happy outline", "virgo" ) ),
		array( " icon ion-headphone" => esc_html__( "headphone", "virgo" ) ),
		array( " icon ion-heart" => esc_html__( "heart", "virgo" ) ),
		array( " icon ion-heart-broken" => esc_html__( "heart broken", "virgo" ) ),
		array( " icon ion-help" => esc_html__( "help", "virgo" ) ),
		array( " icon ion-help-buoy" => esc_html__( "help buoy", "virgo" ) ),
		array( " icon ion-help-circled" => esc_html__( "help circled", "virgo" ) ),
		array( " icon ion-home" => esc_html__( "home", "virgo" ) ),
		array( " icon ion-icecream" => esc_html__( "icecream", "virgo" ) ),
		array( " icon ion-image" => esc_html__( "image", "virgo" ) ),
		array( " icon ion-images" => esc_html__( "images", "virgo" ) ),
		array( " icon ion-information" => esc_html__( "information", "virgo" ) ),
		array( " icon ion-information-circled" => esc_html__( "information circled", "virgo" ) ),
		array( " icon ion-ionic" => esc_html__( "ionic", "virgo" ) ),
		array( " icon ion-ios-alarm" => esc_html__( "ios alarm", "virgo" ) ),
		array( " icon ion-ios-alarm-outline" => esc_html__( "ios alarm outline", "virgo" ) ),
		array( " icon ion-ios-albums" => esc_html__( "ios albums", "virgo" ) ),
		array( " icon ion-ios-albums-outline" => esc_html__( "ios albums outline", "virgo" ) ),
		array( " icon ion-ios-americanfootball" => esc_html__( "ios americanfootball", "virgo" ) ),
		array( " icon ion-ios-americanfootball-outline" => esc_html__( "ios americanfootball outline", "virgo" ) ),
		array( " icon ion-ios-analytics" => esc_html__( "ios analytics", "virgo" ) ),
		array( " icon ion-ios-analytics-outline" => esc_html__( "ios analytics outline", "virgo" ) ),
		array( " icon ion-ios-arrow-back" => esc_html__( "ios arrow back", "virgo" ) ),
		array( " icon ion-ios-arrow-down" => esc_html__( "ios arrow down", "virgo" ) ),
		array( " icon ion-ios-arrow-forward" => esc_html__( "ios arrow forward", "virgo" ) ),
		array( " icon ion-ios-arrow-left" => esc_html__( "ios arrow left", "virgo" ) ),
		array( " icon ion-ios-arrow-right" => esc_html__( "ios arrow right", "virgo" ) ),
		array( " icon ion-ios-arrow-thin-down" => esc_html__( "ios arrow thin down", "virgo" ) ),
		array( " icon ion-ios-arrow-thin-left" => esc_html__( "ios arrow thin left", "virgo" ) ),
		array( " icon ion-ios-arrow-thin-right" => esc_html__( "ios arrow thin right", "virgo" ) ),
		array( " icon ion-ios-arrow-thin-up" => esc_html__( "ios arrow thin up", "virgo" ) ),
		array( " icon ion-ios-arrow-up" => esc_html__( "ios arrow up", "virgo" ) ),
		array( " icon ion-ios-at" => esc_html__( "ios at", "virgo" ) ),
		array( " icon ion-ios-at-outline" => esc_html__( "ios at outline", "virgo" ) ),
		array( " icon ion-ios-barcode" => esc_html__( "ios barcode", "virgo" ) ),
		array( " icon ion-ios-barcode-outline" => esc_html__( "ios barcode outline", "virgo" ) ),
		array( " icon ion-ios-baseball" => esc_html__( "ios baseball", "virgo" ) ),
		array( " icon ion-ios-baseball-outline" => esc_html__( "ios baseball outline", "virgo" ) ),
		array( " icon ion-ios-basketball" => esc_html__( "ios basketball", "virgo" ) ),
		array( " icon ion-ios-basketball-outline" => esc_html__( "ios basketball outline", "virgo" ) ),
		array( " icon ion-ios-bell" => esc_html__( "ios bell", "virgo" ) ),
		array( " icon ion-ios-bell-outline" => esc_html__( "ios bell outline", "virgo" ) ),
		array( " icon ion-ios-body" => esc_html__( "ios body", "virgo" ) ),
		array( " icon ion-ios-body-outline" => esc_html__( "ios body outline", "virgo" ) ),
		array( " icon ion-ios-bolt" => esc_html__( "ios bolt", "virgo" ) ),
		array( " icon ion-ios-bolt-outline" => esc_html__( "ios bolt outline", "virgo" ) ),
		array( " icon ion-ios-book" => esc_html__( "ios book", "virgo" ) ),
		array( " icon ion-ios-book-outline" => esc_html__( "ios book outline", "virgo" ) ),
		array( " icon ion-ios-bookmarks" => esc_html__( "ios bookmarks", "virgo" ) ),
		array( " icon ion-ios-bookmarks-outline" => esc_html__( "ios bookmarks outline", "virgo" ) ),
		array( " icon ion-ios-box" => esc_html__( "ios box", "virgo" ) ),
		array( " icon ion-ios-box-outline" => esc_html__( "ios box outline", "virgo" ) ),
		array( " icon ion-ios-briefcase" => esc_html__( "ios briefcase", "virgo" ) ),
		array( " icon ion-ios-briefcase-outline" => esc_html__( "ios briefcase outline", "virgo" ) ),
		array( " icon ion-ios-browsers" => esc_html__( "ios browsers", "virgo" ) ),
		array( " icon ion-ios-browsers-outline" => esc_html__( "ios browsers outline", "virgo" ) ),
		array( " icon ion-ios-calculator" => esc_html__( "ios calculator", "virgo" ) ),
		array( " icon ion-ios-calculator-outline" => esc_html__( "ios calculator outline", "virgo" ) ),
		array( " icon ion-ios-calendar" => esc_html__( "ios calendar", "virgo" ) ),
		array( " icon ion-ios-calendar-outline" => esc_html__( "ios calendar outline", "virgo" ) ),
		array( " icon ion-ios-camera" => esc_html__( "ios camera", "virgo" ) ),
		array( " icon ion-ios-camera-outline" => esc_html__( "ios camera outline", "virgo" ) ),
		array( " icon ion-ios-cart" => esc_html__( "ios cart", "virgo" ) ),
		array( " icon ion-ios-cart-outline" => esc_html__( "ios cart outline", "virgo" ) ),
		array( " icon ion-ios-chatboxes" => esc_html__( "ios chatboxes", "virgo" ) ),
		array( " icon ion-ios-chatboxes-outline" => esc_html__( "ios chatboxes outline", "virgo" ) ),
		array( " icon ion-ios-chatbubble" => esc_html__( "ios chatbubble", "virgo" ) ),
		array( " icon ion-ios-chatbubble-outline" => esc_html__( "ios chatbubble outline", "virgo" ) ),
		array( " icon ion-ios-checkmark" => esc_html__( "ios checkmark", "virgo" ) ),
		array( " icon ion-ios-checkmark-empty" => esc_html__( "ios checkmark empty", "virgo" ) ),
		array( " icon ion-ios-checkmark-outline" => esc_html__( "ios checkmark outline", "virgo" ) ),
		array( " icon ion-ios-circle-filled" => esc_html__( "ios circle filled", "virgo" ) ),
		array( " icon ion-ios-circle-outline" => esc_html__( "ios circle outline", "virgo" ) ),
		array( " icon ion-ios-clock" => esc_html__( "ios clock", "virgo" ) ),
		array( " icon ion-ios-clock-outline" => esc_html__( "ios clock outline", "virgo" ) ),
		array( " icon ion-ios-close" => esc_html__( "ios close", "virgo" ) ),
		array( " icon ion-ios-close-empty" => esc_html__( "ios close empty", "virgo" ) ),
		array( " icon ion-ios-close-outline" => esc_html__( "ios close outline", "virgo" ) ),
		array( " icon ion-ios-cloud" => esc_html__( "ios cloud", "virgo" ) ),
		array( " icon ion-ios-cloud-download" => esc_html__( "ios cloud download", "virgo" ) ),
		array( " icon ion-ios-cloud-download-outline" => esc_html__( "ios cloud download outline", "virgo" ) ),
		array( " icon ion-ios-cloud-outline" => esc_html__( "ios cloud outline", "virgo" ) ),
		array( " icon ion-ios-cloud-upload" => esc_html__( "ios cloud upload", "virgo" ) ),
		array( " icon ion-ios-cloud-upload-outline" => esc_html__( "ios cloud upload outline", "virgo" ) ),
		array( " icon ion-ios-cloudy" => esc_html__( "ios cloudy", "virgo" ) ),
		array( " icon ion-ios-cloudy-night" => esc_html__( "ios cloudy night", "virgo" ) ),
		array( " icon ion-ios-cloudy-night-outline" => esc_html__( "ios cloudy night outline", "virgo" ) ),
		array( " icon ion-ios-cloudy-outline" => esc_html__( "ios cloudy outline", "virgo" ) ),
		array( " icon ion-ios-cog" => esc_html__( "ios cog", "virgo" ) ),
		array( " icon ion-ios-cog-outline" => esc_html__( "ios cog outline", "virgo" ) ),
		array( " icon ion-ios-color-filter" => esc_html__( "ios color filter", "virgo" ) ),
		array( " icon ion-ios-color-filter-outline" => esc_html__( "ios color filter outline", "virgo" ) ),
		array( " icon ion-ios-color-wand" => esc_html__( "ios color wand", "virgo" ) ),
		array( " icon ion-ios-color-wand-outline" => esc_html__( "ios color wand outline", "virgo" ) ),
		array( " icon ion-ios-compose" => esc_html__( "ios compose", "virgo" ) ),
		array( " icon ion-ios-compose-outline" => esc_html__( "ios compose outline", "virgo" ) ),
		array( " icon ion-ios-contact" => esc_html__( "ios contact", "virgo" ) ),
		array( " icon ion-ios-contact-outline" => esc_html__( "ios contact outline", "virgo" ) ),
		array( " icon ion-ios-copy" => esc_html__( "ios copy", "virgo" ) ),
		array( " icon ion-ios-copy-outline" => esc_html__( "ios copy outline", "virgo" ) ),
		array( " icon ion-ios-crop" => esc_html__( "ios crop", "virgo" ) ),
		array( " icon ion-ios-crop-strong" => esc_html__( "ios crop strong", "virgo" ) ),
		array( " icon ion-ios-download" => esc_html__( "ios download", "virgo" ) ),
		array( " icon ion-ios-download-outline" => esc_html__( "ios download outline", "virgo" ) ),
		array( " icon ion-ios-drag" => esc_html__( "ios drag", "virgo" ) ),
		array( " icon ion-ios-email" => esc_html__( "ios email", "virgo" ) ),
		array( " icon ion-ios-email-outline" => esc_html__( "ios email outline", "virgo" ) ),
		array( " icon ion-ios-eye" => esc_html__( "ios eye", "virgo" ) ),
		array( " icon ion-ios-eye-outline" => esc_html__( "ios eye outline", "virgo" ) ),
		array( " icon ion-ios-fastforward" => esc_html__( "ios fastforward", "virgo" ) ),
		array( " icon ion-ios-fastforward-outline" => esc_html__( "ios fastforward outline", "virgo" ) ),
		array( " icon ion-ios-filing" => esc_html__( "ios filing", "virgo" ) ),
		array( " icon ion-ios-filing-outline" => esc_html__( "ios filing outline", "virgo" ) ),
		array( " icon ion-ios-film" => esc_html__( "ios film", "virgo" ) ),
		array( " icon ion-ios-film-outline" => esc_html__( "ios film outline", "virgo" ) ),
		array( " icon ion-ios-flag" => esc_html__( "ios flag", "virgo" ) ),
		array( " icon ion-ios-flag-outline" => esc_html__( "ios flag outline", "virgo" ) ),
		array( " icon ion-ios-flame" => esc_html__( "ios flame", "virgo" ) ),
		array( " icon ion-ios-flame-outline" => esc_html__( "ios flame outline", "virgo" ) ),
		array( " icon ion-ios-flask" => esc_html__( "ios flask", "virgo" ) ),
		array( " icon ion-ios-flask-outline" => esc_html__( "ios flask outline", "virgo" ) ),
		array( " icon ion-ios-flower" => esc_html__( "ios flower", "virgo" ) ),
		array( " icon ion-ios-flower-outline" => esc_html__( "ios flower outline", "virgo" ) ),
		array( " icon ion-ios-folder" => esc_html__( "ios folder", "virgo" ) ),
		array( " icon ion-ios-folder-outline" => esc_html__( "ios folder outline", "virgo" ) ),
		array( " icon ion-ios-football" => esc_html__( "ios football", "virgo" ) ),
		array( " icon ion-ios-football-outline" => esc_html__( "ios football outline", "virgo" ) ),
		array( " icon ion-ios-game-controller-a" => esc_html__( "ios game controller a", "virgo" ) ),
		array( " icon ion-ios-game-controller-a-outline" => esc_html__( "ios game controller a outline", "virgo" ) ),
		array( " icon ion-ios-game-controller-b" => esc_html__( "ios game controller b", "virgo" ) ),
		array( " icon ion-ios-game-controller-b-outline" => esc_html__( "ios game controller b outline", "virgo" ) ),
		array( " icon ion-ios-gear" => esc_html__( "ios gear", "virgo" ) ),
		array( " icon ion-ios-gear-outline" => esc_html__( "ios gear outline", "virgo" ) ),
		array( " icon ion-ios-glasses" => esc_html__( "ios glasses", "virgo" ) ),
		array( " icon ion-ios-glasses-outline" => esc_html__( "ios glasses outline", "virgo" ) ),
		array( " icon ion-ios-grid-view" => esc_html__( "ios grid view", "virgo" ) ),
		array( " icon ion-ios-grid-view-outline" => esc_html__( "ios grid view outline", "virgo" ) ),
		array( " icon ion-ios-heart" => esc_html__( "ios heart", "virgo" ) ),
		array( " icon ion-ios-heart-outline" => esc_html__( "ios heart outline", "virgo" ) ),
		array( " icon ion-ios-help" => esc_html__( "ios help", "virgo" ) ),
		array( " icon ion-ios-help-empty" => esc_html__( "ios help empty", "virgo" ) ),
		array( " icon ion-ios-help-outline" => esc_html__( "ios help outline", "virgo" ) ),
		array( " icon ion-ios-home" => esc_html__( "ios home", "virgo" ) ),
		array( " icon ion-ios-home-outline" => esc_html__( "ios home outline", "virgo" ) ),
		array( " icon ion-ios-infinite" => esc_html__( "ios infinite", "virgo" ) ),
		array( " icon ion-ios-infinite-outline" => esc_html__( "ios infinite outline", "virgo" ) ),
		array( " icon ion-ios-information" => esc_html__( "ios information", "virgo" ) ),
		array( " icon ion-ios-information-empty" => esc_html__( "ios information empty", "virgo" ) ),
		array( " icon ion-ios-information-outline" => esc_html__( "ios information outline", "virgo" ) ),
		array( " icon ion-ios-ionic-outline" => esc_html__( "ios ionic outline", "virgo" ) ),
		array( " icon ion-ios-keypad" => esc_html__( "ios keypad", "virgo" ) ),
		array( " icon ion-ios-keypad-outline" => esc_html__( "ios keypad outline", "virgo" ) ),
		array( " icon ion-ios-lightbulb" => esc_html__( "ios lightbulb", "virgo" ) ),
		array( " icon ion-ios-lightbulb-outline" => esc_html__( "ios lightbulb outline", "virgo" ) ),
		array( " icon ion-ios-list" => esc_html__( "ios list", "virgo" ) ),
		array( " icon ion-ios-list-outline" => esc_html__( "ios list outline", "virgo" ) ),
		array( " icon ion-ios-location" => esc_html__( "ios location", "virgo" ) ),
		array( " icon ion-ios-location-outline" => esc_html__( "ios location outline", "virgo" ) ),
		array( " icon ion-ios-locked" => esc_html__( "ios locked", "virgo" ) ),
		array( " icon ion-ios-locked-outline" => esc_html__( "ios locked outline", "virgo" ) ),
		array( " icon ion-ios-loop" => esc_html__( "ios loop", "virgo" ) ),
		array( " icon ion-ios-loop-strong" => esc_html__( "ios loop strong", "virgo" ) ),
		array( " icon ion-ios-medical" => esc_html__( "ios medical", "virgo" ) ),
		array( " icon ion-ios-medical-outline" => esc_html__( "ios medical outline", "virgo" ) ),
		array( " icon ion-ios-medkit" => esc_html__( "ios medkit", "virgo" ) ),
		array( " icon ion-ios-medkit-outline" => esc_html__( "ios medkit outline", "virgo" ) ),
		array( " icon ion-ios-mic" => esc_html__( "ios mic", "virgo" ) ),
		array( " icon ion-ios-mic-off" => esc_html__( "ios mic off", "virgo" ) ),
		array( " icon ion-ios-mic-outline" => esc_html__( "ios mic outline", "virgo" ) ),
		array( " icon ion-ios-minus" => esc_html__( "ios minus", "virgo" ) ),
		array( " icon ion-ios-minus-empty" => esc_html__( "ios minus empty", "virgo" ) ),
		array( " icon ion-ios-minus-outline" => esc_html__( "ios minus outline", "virgo" ) ),
		array( " icon ion-ios-monitor" => esc_html__( "ios monitor", "virgo" ) ),
		array( " icon ion-ios-monitor-outline" => esc_html__( "ios monitor outline", "virgo" ) ),
		array( " icon ion-ios-moon" => esc_html__( "ios moon", "virgo" ) ),
		array( " icon ion-ios-moon-outline" => esc_html__( "ios moon outline", "virgo" ) ),
		array( " icon ion-ios-more" => esc_html__( "ios more", "virgo" ) ),
		array( " icon ion-ios-more-outline" => esc_html__( "ios more outline", "virgo" ) ),
		array( " icon ion-ios-musical-note" => esc_html__( "ios musical note", "virgo" ) ),
		array( " icon ion-ios-musical-notes" => esc_html__( "ios musical notes", "virgo" ) ),
		array( " icon ion-ios-navigate" => esc_html__( "ios navigate", "virgo" ) ),
		array( " icon ion-ios-navigate-outline" => esc_html__( "ios navigate outline", "virgo" ) ),
		array( " icon ion-ios-nutrition" => esc_html__( "ios nutrition", "virgo" ) ),
		array( " icon ion-ios-nutrition-outline" => esc_html__( "ios nutrition outline", "virgo" ) ),
		array( " icon ion-ios-paper" => esc_html__( "ios paper", "virgo" ) ),
		array( " icon ion-ios-paper-outline" => esc_html__( "ios paper outline", "virgo" ) ),
		array( " icon ion-ios-paperplane" => esc_html__( "ios paperplane", "virgo" ) ),
		array( " icon ion-ios-paperplane-outline" => esc_html__( "ios paperplane outline", "virgo" ) ),
		array( " icon ion-ios-partlysunny" => esc_html__( "ios partlysunny", "virgo" ) ),
		array( " icon ion-ios-partlysunny-outline" => esc_html__( "ios partlysunny outline", "virgo" ) ),
		array( " icon ion-ios-pause" => esc_html__( "ios pause", "virgo" ) ),
		array( " icon ion-ios-pause-outline" => esc_html__( "ios pause outline", "virgo" ) ),
		array( " icon ion-ios-paw" => esc_html__( "ios paw", "virgo" ) ),
		array( " icon ion-ios-paw-outline" => esc_html__( "ios paw outline", "virgo" ) ),
		array( " icon ion-ios-people" => esc_html__( "ios people", "virgo" ) ),
		array( " icon ion-ios-people-outline" => esc_html__( "ios people outline", "virgo" ) ),
		array( " icon ion-ios-person" => esc_html__( "ios person", "virgo" ) ),
		array( " icon ion-ios-person-outline" => esc_html__( "ios person outline", "virgo" ) ),
		array( " icon ion-ios-personadd" => esc_html__( "ios personadd", "virgo" ) ),
		array( " icon ion-ios-personadd-outline" => esc_html__( "ios personadd outline", "virgo" ) ),
		array( " icon ion-ios-photos" => esc_html__( "ios photos", "virgo" ) ),
		array( " icon ion-ios-photos-outline" => esc_html__( "ios photos outline", "virgo" ) ),
		array( " icon ion-ios-pie" => esc_html__( "ios pie", "virgo" ) ),
		array( " icon ion-ios-pie-outline" => esc_html__( "ios pie outline", "virgo" ) ),
		array( " icon ion-ios-pint" => esc_html__( "ios pint", "virgo" ) ),
		array( " icon ion-ios-pint-outline" => esc_html__( "ios pint outline", "virgo" ) ),
		array( " icon ion-ios-play" => esc_html__( "ios play", "virgo" ) ),
		array( " icon ion-ios-play-outline" => esc_html__( "ios play outline", "virgo" ) ),
		array( " icon ion-ios-plus" => esc_html__( "ios plus", "virgo" ) ),
		array( " icon ion-ios-plus-empty" => esc_html__( "ios plus empty", "virgo" ) ),
		array( " icon ion-ios-plus-outline" => esc_html__( "ios plus outline", "virgo" ) ),
		array( " icon ion-ios-pricetag" => esc_html__( "ios pricetag", "virgo" ) ),
		array( " icon ion-ios-pricetag-outline" => esc_html__( "ios pricetag outline", "virgo" ) ),
		array( " icon ion-ios-pricetags" => esc_html__( "ios pricetags", "virgo" ) ),
		array( " icon ion-ios-pricetags-outline" => esc_html__( "ios pricetags outline", "virgo" ) ),
		array( " icon ion-ios-printer" => esc_html__( "ios printer", "virgo" ) ),
		array( " icon ion-ios-printer-outline" => esc_html__( "ios printer outline", "virgo" ) ),
		array( " icon ion-ios-pulse" => esc_html__( "ios pulse", "virgo" ) ),
		array( " icon ion-ios-pulse-strong" => esc_html__( "ios pulse strong", "virgo" ) ),
		array( " icon ion-ios-rainy" => esc_html__( "ios rainy", "virgo" ) ),
		array( " icon ion-ios-rainy-outline" => esc_html__( "ios rainy outline", "virgo" ) ),
		array( " icon ion-ios-recording" => esc_html__( "ios recording", "virgo" ) ),
		array( " icon ion-ios-recording-outline" => esc_html__( "ios recording outline", "virgo" ) ),
		array( " icon ion-ios-redo" => esc_html__( "ios redo", "virgo" ) ),
		array( " icon ion-ios-redo-outline" => esc_html__( "ios redo outline", "virgo" ) ),
		array( " icon ion-ios-refresh" => esc_html__( "ios refresh", "virgo" ) ),
		array( " icon ion-ios-refresh-empty" => esc_html__( "ios refresh empty", "virgo" ) ),
		array( " icon ion-ios-refresh-outline" => esc_html__( "ios refresh outline", "virgo" ) ),
		array( " icon ion-ios-reload" => esc_html__( "ios reload", "virgo" ) ),
		array( " icon ion-ios-reverse-camera" => esc_html__( "ios reverse camera", "virgo" ) ),
		array( " icon ion-ios-reverse-camera-outline" => esc_html__( "ios reverse camera outline", "virgo" ) ),
		array( " icon ion-ios-rewind" => esc_html__( "ios rewind", "virgo" ) ),
		array( " icon ion-ios-rewind-outline" => esc_html__( "ios rewind outline", "virgo" ) ),
		array( " icon ion-ios-rose" => esc_html__( "ios rose", "virgo" ) ),
		array( " icon ion-ios-rose-outline" => esc_html__( "ios rose outline", "virgo" ) ),
		array( " icon ion-ios-search" => esc_html__( "ios search", "virgo" ) ),
		array( " icon ion-ios-search-strong" => esc_html__( "ios search strong", "virgo" ) ),
		array( " icon ion-ios-settings" => esc_html__( "ios settings", "virgo" ) ),
		array( " icon ion-ios-settings-strong" => esc_html__( "ios settings strong", "virgo" ) ),
		array( " icon ion-ios-shuffle" => esc_html__( "ios shuffle", "virgo" ) ),
		array( " icon ion-ios-shuffle-strong" => esc_html__( "ios shuffle strong", "virgo" ) ),
		array( " icon ion-ios-skipbackward" => esc_html__( "ios skipbackward", "virgo" ) ),
		array( " icon ion-ios-skipbackward-outline" => esc_html__( "ios skipbackward outline", "virgo" ) ),
		array( " icon ion-ios-skipforward" => esc_html__( "ios skipforward", "virgo" ) ),
		array( " icon ion-ios-skipforward-outline" => esc_html__( "ios skipforward outline", "virgo" ) ),
		array( " icon ion-ios-snowy" => esc_html__( "ios snowy", "virgo" ) ),
		array( " icon ion-ios-speedometer" => esc_html__( "ios speedometer", "virgo" ) ),
		array( " icon ion-ios-speedometer-outline" => esc_html__( "ios speedometer outline", "virgo" ) ),
		array( " icon ion-ios-star" => esc_html__( "ios star", "virgo" ) ),
		array( " icon ion-ios-star-half" => esc_html__( "ios star half", "virgo" ) ),
		array( " icon ion-ios-star-outline" => esc_html__( "ios star outline", "virgo" ) ),
		array( " icon ion-ios-stopwatch" => esc_html__( "ios stopwatch", "virgo" ) ),
		array( " icon ion-ios-stopwatch-outline" => esc_html__( "ios stopwatch outline", "virgo" ) ),
		array( " icon ion-ios-sunny" => esc_html__( "ios sunny", "virgo" ) ),
		array( " icon ion-ios-sunny-outline" => esc_html__( "ios sunny outline", "virgo" ) ),
		array( " icon ion-ios-telephone" => esc_html__( "ios telephone", "virgo" ) ),
		array( " icon ion-ios-telephone-outline" => esc_html__( "ios telephone outline", "virgo" ) ),
		array( " icon ion-ios-tennisball" => esc_html__( "ios tennisball", "virgo" ) ),
		array( " icon ion-ios-tennisball-outline" => esc_html__( "ios tennisball outline", "virgo" ) ),
		array( " icon ion-ios-thunderstorm" => esc_html__( "ios thunderstorm", "virgo" ) ),
		array( " icon ion-ios-thunderstorm-outline" => esc_html__( "ios thunderstorm outline", "virgo" ) ),
		array( " icon ion-ios-time" => esc_html__( "ios time", "virgo" ) ),
		array( " icon ion-ios-time-outline" => esc_html__( "ios time outline", "virgo" ) ),
		array( " icon ion-ios-timer" => esc_html__( "ios timer", "virgo" ) ),
		array( " icon ion-ios-timer-outline" => esc_html__( "ios timer outline", "virgo" ) ),
		array( " icon ion-ios-toggle" => esc_html__( "ios toggle", "virgo" ) ),
		array( " icon ion-ios-toggle-outline" => esc_html__( "ios toggle outline", "virgo" ) ),
		array( " icon ion-ios-trash" => esc_html__( "ios trash", "virgo" ) ),
		array( " icon ion-ios-trash-outline" => esc_html__( "ios trash outline", "virgo" ) ),
		array( " icon ion-ios-undo" => esc_html__( "ios undo", "virgo" ) ),
		array( " icon ion-ios-undo-outline" => esc_html__( "ios undo outline", "virgo" ) ),
		array( " icon ion-ios-unlocked" => esc_html__( "ios unlocked", "virgo" ) ),
		array( " icon ion-ios-unlocked-outline" => esc_html__( "ios unlocked outline", "virgo" ) ),
		array( " icon ion-ios-upload" => esc_html__( "ios upload", "virgo" ) ),
		array( " icon ion-ios-upload-outline" => esc_html__( "ios upload outline", "virgo" ) ),
		array( " icon ion-ios-videocam" => esc_html__( "ios videocam", "virgo" ) ),
		array( " icon ion-ios-videocam-outline" => esc_html__( "ios videocam outline", "virgo" ) ),
		array( " icon ion-ios-volume-high" => esc_html__( "ios volume high", "virgo" ) ),
		array( " icon ion-ios-volume-low" => esc_html__( "ios volume low", "virgo" ) ),
		array( " icon ion-ios-wineglass" => esc_html__( "ios wineglass", "virgo" ) ),
		array( " icon ion-ios-wineglass-outline" => esc_html__( "ios wineglass outline", "virgo" ) ),
		array( " icon ion-ios-world" => esc_html__( "ios world", "virgo" ) ),
		array( " icon ion-ios-world-outline" => esc_html__( "ios world outline", "virgo" ) ),
		array( " icon ion-ipad" => esc_html__( "ipad", "virgo" ) ),
		array( " icon ion-iphone" => esc_html__( "iphone", "virgo" ) ),
		array( " icon ion-ipod" => esc_html__( "ipod", "virgo" ) ),
		array( " icon ion-jet" => esc_html__( "jet", "virgo" ) ),
		array( " icon ion-key" => esc_html__( "key", "virgo" ) ),
		array( " icon ion-knife" => esc_html__( "knife", "virgo" ) ),
		array( " icon ion-laptop" => esc_html__( "laptop", "virgo" ) ),
		array( " icon ion-leaf" => esc_html__( "leaf", "virgo" ) ),
		array( " icon ion-levels" => esc_html__( "levels", "virgo" ) ),
		array( " icon ion-lightbulb" => esc_html__( "lightbulb", "virgo" ) ),
		array( " icon ion-link" => esc_html__( "link", "virgo" ) ),
		array( " icon ion-load-a" => esc_html__( "load a", "virgo" ) ),
		array( " icon ion-load-b" => esc_html__( "load b", "virgo" ) ),
		array( " icon ion-load-c" => esc_html__( "load c", "virgo" ) ),
		array( " icon ion-load-d" => esc_html__( "load d", "virgo" ) ),
		array( " icon ion-location" => esc_html__( "location", "virgo" ) ),
		array( " icon ion-lock-combination" => esc_html__( "lock combination", "virgo" ) ),
		array( " icon ion-locked" => esc_html__( "locked", "virgo" ) ),
		array( " icon ion-log-in" => esc_html__( "log in", "virgo" ) ),
		array( " icon ion-log-out" => esc_html__( "log out", "virgo" ) ),
		array( " icon ion-loop" => esc_html__( "loop", "virgo" ) ),
		array( " icon ion-magnet" => esc_html__( "magnet", "virgo" ) ),
		array( " icon ion-male" => esc_html__( "male", "virgo" ) ),
		array( " icon ion-man" => esc_html__( "man", "virgo" ) ),
		array( " icon ion-map" => esc_html__( "map", "virgo" ) ),
		array( " icon ion-medkit" => esc_html__( "medkit", "virgo" ) ),
		array( " icon ion-merge" => esc_html__( "merge", "virgo" ) ),
		array( " icon ion-mic-a" => esc_html__( "mic a", "virgo" ) ),
		array( " icon ion-mic-b" => esc_html__( "mic b", "virgo" ) ),
		array( " icon ion-mic-c" => esc_html__( "mic c", "virgo" ) ),
		array( " icon ion-minus" => esc_html__( "minus", "virgo" ) ),
		array( " icon ion-minus-circled" => esc_html__( "minus circled", "virgo" ) ),
		array( " icon ion-minus-round" => esc_html__( "minus round", "virgo" ) ),
		array( " icon ion-model-s" => esc_html__( "model s", "virgo" ) ),
		array( " icon ion-monitor" => esc_html__( "monitor", "virgo" ) ),
		array( " icon ion-more" => esc_html__( "more", "virgo" ) ),
		array( " icon ion-mouse" => esc_html__( "mouse", "virgo" ) ),
		array( " icon ion-music-note" => esc_html__( "music note", "virgo" ) ),
		array( " icon ion-navicon" => esc_html__( "navicon", "virgo" ) ),
		array( " icon ion-navicon-round" => esc_html__( "navicon round", "virgo" ) ),
		array( " icon ion-navigate" => esc_html__( "navigate", "virgo" ) ),
		array( " icon ion-network" => esc_html__( "network", "virgo" ) ),
		array( " icon ion-no-smoking" => esc_html__( "no smoking", "virgo" ) ),
		array( " icon ion-nuclear" => esc_html__( "nuclear", "virgo" ) ),
		array( " icon ion-outlet" => esc_html__( "outlet", "virgo" ) ),
		array( " icon ion-paintbrush" => esc_html__( "paintbrush", "virgo" ) ),
		array( " icon ion-paintbucket" => esc_html__( "paintbucket", "virgo" ) ),
		array( " icon ion-paper-airplane" => esc_html__( "paper airplane", "virgo" ) ),
		array( " icon ion-paperclip" => esc_html__( "paperclip", "virgo" ) ),
		array( " icon ion-pause" => esc_html__( "pause", "virgo" ) ),
		array( " icon ion-person" => esc_html__( "person", "virgo" ) ),
		array( " icon ion-person-add" => esc_html__( "person add", "virgo" ) ),
		array( " icon ion-person-stalker" => esc_html__( "person stalker", "virgo" ) ),
		array( " icon ion-pie-graph" => esc_html__( "pie graph", "virgo" ) ),
		array( " icon ion-pin" => esc_html__( "pin", "virgo" ) ),
		array( " icon ion-pinpoint" => esc_html__( "pinpoint", "virgo" ) ),
		array( " icon ion-pizza" => esc_html__( "pizza", "virgo" ) ),
		array( " icon ion-plane" => esc_html__( "plane", "virgo" ) ),
		array( " icon ion-planet" => esc_html__( "planet", "virgo" ) ),
		array( " icon ion-play" => esc_html__( "play", "virgo" ) ),
		array( " icon ion-playstation" => esc_html__( "playstation", "virgo" ) ),
		array( " icon ion-plus" => esc_html__( "plus", "virgo" ) ),
		array( " icon ion-plus-circled" => esc_html__( "plus circled", "virgo" ) ),
		array( " icon ion-plus-round" => esc_html__( "plus round", "virgo" ) ),
		array( " icon ion-podium" => esc_html__( "podium", "virgo" ) ),
		array( " icon ion-pound" => esc_html__( "pound", "virgo" ) ),
		array( " icon ion-power" => esc_html__( "power", "virgo" ) ),
		array( " icon ion-pricetag" => esc_html__( "pricetag", "virgo" ) ),
		array( " icon ion-pricetags" => esc_html__( "pricetags", "virgo" ) ),
		array( " icon ion-printer" => esc_html__( "printer", "virgo" ) ),
		array( " icon ion-pull-request" => esc_html__( "pull request", "virgo" ) ),
		array( " icon ion-qr-scanner" => esc_html__( "qr scanner", "virgo" ) ),
		array( " icon ion-quote" => esc_html__( "quote", "virgo" ) ),
		array( " icon ion-radio-waves" => esc_html__( "radio waves", "virgo" ) ),
		array( " icon ion-record" => esc_html__( "record", "virgo" ) ),
		array( " icon ion-refresh" => esc_html__( "refresh", "virgo" ) ),
		array( " icon ion-reply" => esc_html__( "reply", "virgo" ) ),
		array( " icon ion-reply-all" => esc_html__( "reply all", "virgo" ) ),
		array( " icon ion-ribbon-a" => esc_html__( "ribbon a", "virgo" ) ),
		array( " icon ion-ribbon-b" => esc_html__( "ribbon b", "virgo" ) ),
		array( " icon ion-sad" => esc_html__( "sad", "virgo" ) ),
		array( " icon ion-sad-outline" => esc_html__( "sad outline", "virgo" ) ),
		array( " icon ion-scissors" => esc_html__( "scissors", "virgo" ) ),
		array( " icon ion-search" => esc_html__( "search", "virgo" ) ),
		array( " icon ion-settings" => esc_html__( "settings", "virgo" ) ),
		array( " icon ion-share" => esc_html__( "share", "virgo" ) ),
		array( " icon ion-shuffle" => esc_html__( "shuffle", "virgo" ) ),
		array( " icon ion-skip-backward" => esc_html__( "skip backward", "virgo" ) ),
		array( " icon ion-skip-forward" => esc_html__( "skip forward", "virgo" ) ),
		array( " icon ion-social-android" => esc_html__( "social android", "virgo" ) ),
		array( " icon ion-social-android-outline" => esc_html__( "social android outline", "virgo" ) ),
		array( " icon ion-social-angular" => esc_html__( "social angular", "virgo" ) ),
		array( " icon ion-social-angular-outline" => esc_html__( "social angular outline", "virgo" ) ),
		array( " icon ion-social-apple" => esc_html__( "social apple", "virgo" ) ),
		array( " icon ion-social-apple-outline" => esc_html__( "social apple outline", "virgo" ) ),
		array( " icon ion-social-bitcoin" => esc_html__( "social bitcoin", "virgo" ) ),
		array( " icon ion-social-bitcoin-outline" => esc_html__( "social bitcoin outline", "virgo" ) ),
		array( " icon ion-social-buffer" => esc_html__( "social buffer", "virgo" ) ),
		array( " icon ion-social-buffer-outline" => esc_html__( "social buffer outline", "virgo" ) ),
		array( " icon ion-social-chrome" => esc_html__( "social chrome", "virgo" ) ),
		array( " icon ion-social-chrome-outline" => esc_html__( "social chrome outline", "virgo" ) ),
		array( " icon ion-social-codepen" => esc_html__( "social codepen", "virgo" ) ),
		array( " icon ion-social-codepen-outline" => esc_html__( "social codepen outline", "virgo" ) ),
		array( " icon ion-social-css3" => esc_html__( "social css3", "virgo" ) ),
		array( " icon ion-social-css3-outline" => esc_html__( "social css3 outline", "virgo" ) ),
		array( " icon ion-social-designernews" => esc_html__( "social designernews", "virgo" ) ),
		array( " icon ion-social-designernews-outline" => esc_html__( "social designernews outline", "virgo" ) ),
		array( " icon ion-social-dribbble" => esc_html__( "social dribbble", "virgo" ) ),
		array( " icon ion-social-dribbble-outline" => esc_html__( "social dribbble outline", "virgo" ) ),
		array( " icon ion-social-dropbox" => esc_html__( "social dropbox", "virgo" ) ),
		array( " icon ion-social-dropbox-outline" => esc_html__( "social dropbox outline", "virgo" ) ),
		array( " icon ion-social-euro" => esc_html__( "social euro", "virgo" ) ),
		array( " icon ion-social-euro-outline" => esc_html__( "social euro outline", "virgo" ) ),
		array( " icon ion-social-facebook" => esc_html__( "social facebook", "virgo" ) ),
		array( " icon ion-social-facebook-outline" => esc_html__( "social facebook outline", "virgo" ) ),
		array( " icon ion-social-foursquare" => esc_html__( "social foursquare", "virgo" ) ),
		array( " icon ion-social-foursquare-outline" => esc_html__( "social foursquare outline", "virgo" ) ),
		array( " icon ion-social-freebsd-devil" => esc_html__( "social freebsd devil", "virgo" ) ),
		array( " icon ion-social-github" => esc_html__( "social github", "virgo" ) ),
		array( " icon ion-social-github-outline" => esc_html__( "social github outline", "virgo" ) ),
		array( " icon ion-social-google" => esc_html__( "social google", "virgo" ) ),
		array( " icon ion-social-google-outline" => esc_html__( "social google outline", "virgo" ) ),
		array( " icon ion-social-googleplus" => esc_html__( "social googleplus", "virgo" ) ),
		array( " icon ion-social-googleplus-outline" => esc_html__( "social googleplus outline", "virgo" ) ),
		array( " icon ion-social-hackernews" => esc_html__( "social hackernews", "virgo" ) ),
		array( " icon ion-social-hackernews-outline" => esc_html__( "social hackernews outline", "virgo" ) ),
		array( " icon ion-social-html5" => esc_html__( "social html5", "virgo" ) ),
		array( " icon ion-social-html5-outline" => esc_html__( "social html5 outline", "virgo" ) ),
		array( " icon ion-social-instagram" => esc_html__( "social instagram", "virgo" ) ),
		array( " icon ion-social-instagram-outline" => esc_html__( "social instagram outline", "virgo" ) ),
		array( " icon ion-social-javascript" => esc_html__( "social javascript", "virgo" ) ),
		array( " icon ion-social-javascript-outline" => esc_html__( "social javascript outline", "virgo" ) ),
		array( " icon ion-social-linkedin" => esc_html__( "social linkedin", "virgo" ) ),
		array( " icon ion-social-linkedin-outline" => esc_html__( "social linkedin outline", "virgo" ) ),
		array( " icon ion-social-markdown" => esc_html__( "social markdown", "virgo" ) ),
		array( " icon ion-social-nodejs" => esc_html__( "social nodejs", "virgo" ) ),
		array( " icon ion-social-octocat" => esc_html__( "social octocat", "virgo" ) ),
		array( " icon ion-social-pinterest" => esc_html__( "social pinterest", "virgo" ) ),
		array( " icon ion-social-pinterest-outline" => esc_html__( "social pinterest outline", "virgo" ) ),
		array( " icon ion-social-python" => esc_html__( "social python", "virgo" ) ),
		array( " icon ion-social-reddit" => esc_html__( "social reddit", "virgo" ) ),
		array( " icon ion-social-reddit-outline" => esc_html__( "social reddit outline", "virgo" ) ),
		array( " icon ion-social-rss" => esc_html__( "social rss", "virgo" ) ),
		array( " icon ion-social-rss-outline" => esc_html__( "social rss outline", "virgo" ) ),
		array( " icon ion-social-sass" => esc_html__( "social sass", "virgo" ) ),
		array( " icon ion-social-skype" => esc_html__( "social skype", "virgo" ) ),
		array( " icon ion-social-skype-outline" => esc_html__( "social skype outline", "virgo" ) ),
		array( " icon ion-social-snapchat" => esc_html__( "social snapchat", "virgo" ) ),
		array( " icon ion-social-snapchat-outline" => esc_html__( "social snapchat outline", "virgo" ) ),
		array( " icon ion-social-tumblr" => esc_html__( "social tumblr", "virgo" ) ),
		array( " icon ion-social-tumblr-outline" => esc_html__( "social tumblr outline", "virgo" ) ),
		array( " icon ion-social-tux" => esc_html__( "social tux", "virgo" ) ),
		array( " icon ion-social-twitch" => esc_html__( "social twitch", "virgo" ) ),
		array( " icon ion-social-twitch-outline" => esc_html__( "social twitch outline", "virgo" ) ),
		array( " icon ion-social-twitter" => esc_html__( "social twitter", "virgo" ) ),
		array( " icon ion-social-twitter-outline" => esc_html__( "social twitter outline", "virgo" ) ),
		array( " icon ion-social-usd" => esc_html__( "social usd", "virgo" ) ),
		array( " icon ion-social-usd-outline" => esc_html__( "social usd outline", "virgo" ) ),
		array( " icon ion-social-vimeo" => esc_html__( "social vimeo", "virgo" ) ),
		array( " icon ion-social-vimeo-outline" => esc_html__( "social vimeo outline", "virgo" ) ),
		array( " icon ion-social-whatsapp" => esc_html__( "social whatsapp", "virgo" ) ),
		array( " icon ion-social-whatsapp-outline" => esc_html__( "social whatsapp outline", "virgo" ) ),
		array( " icon ion-social-windows" => esc_html__( "social windows", "virgo" ) ),
		array( " icon ion-social-windows-outline" => esc_html__( "social windows outline", "virgo" ) ),
		array( " icon ion-social-wordpress" => esc_html__( "social wordpress", "virgo" ) ),
		array( " icon ion-social-wordpress-outline" => esc_html__( "social wordpress outline", "virgo" ) ),
		array( " icon ion-social-yahoo" => esc_html__( "social yahoo", "virgo" ) ),
		array( " icon ion-social-yahoo-outline" => esc_html__( "social yahoo outline", "virgo" ) ),
		array( " icon ion-social-yen" => esc_html__( "social yen", "virgo" ) ),
		array( " icon ion-social-yen-outline" => esc_html__( "social yen outline", "virgo" ) ),
		array( " icon ion-social-youtube" => esc_html__( "social youtube", "virgo" ) ),
		array( " icon ion-social-youtube-outline" => esc_html__( "social youtube outline", "virgo" ) ),
		array( " icon ion-soup-can" => esc_html__( "soup can", "virgo" ) ),
		array( " icon ion-soup-can-outline" => esc_html__( "soup can outline", "virgo" ) ),
		array( " icon ion-speakerphone" => esc_html__( "speakerphone", "virgo" ) ),
		array( " icon ion-speedometer" => esc_html__( "speedometer", "virgo" ) ),
		array( " icon ion-spoon" => esc_html__( "spoon", "virgo" ) ),
		array( " icon ion-star" => esc_html__( "star", "virgo" ) ),
		array( " icon ion-stats-bars" => esc_html__( "stats bars", "virgo" ) ),
		array( " icon ion-steam" => esc_html__( "steam", "virgo" ) ),
		array( " icon ion-stop" => esc_html__( "stop", "virgo" ) ),
		array( " icon ion-thermometer" => esc_html__( "thermometer", "virgo" ) ),
		array( " icon ion-thumbsdown" => esc_html__( "thumbsdown", "virgo" ) ),
		array( " icon ion-thumbsup" => esc_html__( "thumbsup", "virgo" ) ),
		array( " icon ion-toggle" => esc_html__( "toggle", "virgo" ) ),
		array( " icon ion-toggle-filled" => esc_html__( "toggle filled", "virgo" ) ),
		array( " icon ion-transgender" => esc_html__( "transgender", "virgo" ) ),
		array( " icon ion-trash-a" => esc_html__( "trash a", "virgo" ) ),
		array( " icon ion-trash-b" => esc_html__( "trash b", "virgo" ) ),
		array( " icon ion-trophy" => esc_html__( "trophy", "virgo" ) ),
		array( " icon ion-tshirt" => esc_html__( "tshirt", "virgo" ) ),
		array( " icon ion-tshirt-outline" => esc_html__( "tshirt outline", "virgo" ) ),
		array( " icon ion-umbrella" => esc_html__( "umbrella", "virgo" ) ),
		array( " icon ion-university" => esc_html__( "university", "virgo" ) ),
		array( " icon ion-unlocked" => esc_html__( "unlocked", "virgo" ) ),
		array( " icon ion-upload" => esc_html__( "upload", "virgo" ) ),
		array( " icon ion-usb" => esc_html__( "usb", "virgo" ) ),
		array( " icon ion-videocamera" => esc_html__( "videocamera", "virgo" ) ),
		array( " icon ion-volume-high" => esc_html__( "volume high", "virgo" ) ),
		array( " icon ion-volume-low" => esc_html__( "volume low", "virgo" ) ),
		array( " icon ion-volume-medium" => esc_html__( "volume medium", "virgo" ) ),
		array( " icon ion-volume-mute" => esc_html__( "volume mute", "virgo" ) ),
		array( " icon ion-wand" => esc_html__( "wand", "virgo" ) ),
		array( " icon ion-waterdrop" => esc_html__( "waterdrop", "virgo" ) ),
		array( " icon ion-wifi" => esc_html__( "wifi", "virgo" ) ),
		array( " icon ion-wineglass" => esc_html__( "wineglass", "virgo" ) ),
		array( " icon ion-woman" => esc_html__( "woman", "virgo" ) ),
		array( " icon ion-wrench" => esc_html__( "wrench", "virgo" ) ),
		array( " icon ion-xbox" => esc_html__( "xbox", "virgo" ) )
	);

	// Return icons
	return $icons;
}


/*
* virgo_slider
*/

$slider_arr = array( 'Select alias' => '' );
if ( class_exists( 'RevSlider' ) ) {
	$sld = new RevSlider();
	$sliders = $sld->getArrSliders();
	if ( !empty( $sliders ) ) {
		foreach ( $sliders as $slider ) {
			//get alias all slider
			$slider_arr = array_merge( $slider_arr, array( $slider->getTitle() => $slider->getParam( 'alias', 'false' ) ) );


		}
	}


}

vc_map( array(
	'name' => esc_html__( 'Virgo Revolution slider Header', 'virgo' ),
	'base' => 'virgo_header_slider',
	'icon' => plugins_url( '/icon/logo_small.png', __FILE__ ), // Simply pass url to your icon here
	'show_settings_on_create' => true,
	'category' => esc_html__( 'virgo', 'virgo' ),
	'description' => esc_html__( 'Site header', 'virgo' ),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'virgo' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
		),
		array(
			'type' => 'dropdown',
			'heading' => esc_html__( 'Select Slider Revolution alias', 'virgo' ),
			'param_name' => 'alias_slider',
			'description' => esc_html__( 'select the alias of the slider', 'virgo' ),
			'value' => $slider_arr
		),
	),

	array(
		'type' => 'css_editor',
		'heading' => esc_html__( 'Css', 'virgo' ),
		'param_name' => 'css',
		'group' => esc_html__( 'Design options', 'virgo' ),
	),


) );


/*
* virgo_slider white
*/

$slider_arr = array( 'Select alias' => '' );
if ( class_exists( 'RevSlider' ) ) {
	$sld = new RevSlider();
	$sliders = $sld->getArrSliders();
	if ( !empty( $sliders ) ) {
		foreach ( $sliders as $slider ) {
			//get alias all slider
			$slider_arr = array_merge( $slider_arr, array( $slider->getTitle() => $slider->getParam( 'alias', 'false' ) ) );


		}
	}


}

vc_map( array(
	'name' => esc_html__( 'Virgo Revolution slider Header White', 'virgo' ),
	'base' => 'virgo_header_slider_white',
	'icon' => plugins_url( '/icon/logo_small.png', __FILE__ ), // Simply pass url to your icon here
	'show_settings_on_create' => true,
	'category' => esc_html__( 'virgo', 'virgo' ),
	'description' => esc_html__( 'Site header', 'virgo' ),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'virgo' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
		),
		array(
			'type' => 'dropdown',
			'heading' => esc_html__( 'Select Slider Revolution alias', 'virgo' ),
			'param_name' => 'alias_slider',
			'description' => esc_html__( 'select the alias of the slider', 'virgo' ),
			'value' => $slider_arr
		),
	),
	array(
		'type' => 'css_editor',
		'heading' => esc_html__( 'Css', 'virgo' ),
		'param_name' => 'css',
		'group' => esc_html__( 'Design options', 'virgo' ),
	),


) );


/*
* virgo_header
*/
vc_map( array(
	'name' => esc_html__( 'virgo header', 'virgo' ),
	'base' => 'virgo_header',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'virgo', 'virgo' ),
	'description' => esc_html__( '', 'virgo' ),
	'icon' => get_template_directory_uri() . '/icon/add-image.png', // Simply pass url to your icon here


	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'virgo' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Text header', 'virgo' ),
			'param_name' => 'title',
			'description' => esc_html__( 'insert text ', 'virgo' ),
			'value' => 'Welcome to our<br> digital world.',
			'virgo',
		),
		array(
			'type' => 'textarea',
			'heading' => esc_html__( 'Text description', 'virgo' ),
			'param_name' => 'desc',
			'description' => esc_html__( 'insert text ', 'virgo' ),
			'value' => esc_html__( 'We receive result combining marketing, a creative and industry experience.', 'virgo' ),
		),


		array(
			'type' => 'attach_image',
			'heading' => esc_html__( 'Image', 'virgo' ),
			'param_name' => 'images',
			'description' => esc_html__( 'Select images from media library.', 'virgo' ),
		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Video', 'virgo' ),
			'param_name' => 'video',
			'value' => 'http://www.youtube.com/watch?v=ANwf8AE3_d0',
			'description' => esc_html__( 'insert url ', 'virgo' ),
			'group' => esc_html__( 'Button options', 'virgo' ),

		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Scroll text', 'virgo' ),
			'param_name' => 'scroll_text',
			'value' => 'scroll down',
			'description' => esc_html__( 'insert text ', 'virgo' ),
			'group' => esc_html__( 'Scroll options', 'virgo' ),

		),


		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'virgo' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'virgo' ),
		),

	)


) );


/*
* virgo_header image
*/
vc_map( array(
	'name' => esc_html__( 'virgo image header', 'virgo' ),
	'base' => 'virgo_header_image',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'virgo', 'virgo' ),
	'description' => esc_html__( '', 'virgo' ),
	'icon' => get_template_directory_uri() . '/icon/add-image.png', // Simply pass url to your icon here


	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'virgo' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Text header', 'virgo' ),
			'param_name' => 'title',
			'description' => esc_html__( 'insert text ', 'virgo' ),
			'value' => esc_html__( 'Make Your Product Alive', 'virgo' ),
		),

		array(
			"type" => "textarea_html",
			"holder" => "div",
			"class" => "",
			"heading" => __( "Content", "virgo" ),
			"param_name" => "content",
			"value" => __( "We receive result combining marketing,<br > a creative and industry experience.", "virgo" ),
			"description" => __( "Enter your content.", "virgo" )
		),


		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Text description', 'virgo' ),
			'param_name' => 'desc',
			'description' => esc_html__( 'insert text ', 'virgo' ),
			'value' => esc_html__( 'We receive result combining marketing, a creative and industry experience.', 'virgo' ),
		),


		array(
			'type' => 'attach_image',
			'heading' => esc_html__( 'Image', 'virgo' ),
			'param_name' => 'images',
			'description' => esc_html__( 'Select images from media library.', 'virgo' ),
		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Video', 'virgo' ),
			'param_name' => 'video',
			'value' => esc_html__( 'http://www.youtube.com/watch?v=ANwf8AE3_d0', 'virgo' ),
			'description' => esc_html__( 'insert url ', 'virgo' ),
			'group' => esc_html__( 'Button options', 'virgo' ),

		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Scroll text', 'virgo' ),
			'param_name' => 'scroll_text',
			'value' => 'scroll down',
			'description' => esc_html__( 'insert text ', 'virgo' ),
			'group' => esc_html__( 'Scroll options', 'virgo' ),

		),


		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'virgo' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'virgo' ),
		),

	)


) );


/*
* virgo_contact_header
*/
vc_map( array(
	'name' => esc_html__( 'virgo contact header', 'virgo' ),
	'base' => 'virgo_contact_header',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'virgo', 'virgo' ),
	'description' => esc_html__( '', 'virgo' ),
	'icon' => get_template_directory_uri() . '/icon/add-image.png', // Simply pass url to your icon here


	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'virgo' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Text header', 'virgo' ),
			'param_name' => 'title',
			'description' => esc_html__( 'insert text ', 'virgo' ),
			'value' => 'Let\'s contact',
			'virgo',
		),
		array(
			'type' => 'textarea',
			'heading' => esc_html__( 'Text description', 'virgo' ),
			'param_name' => 'desc',
			'description' => esc_html__( 'insert text ', 'virgo' ),
			'value' => esc_html__( 'We receive result combining marketing, a creative and industry experience.', 'virgo' ),
		),


		array(
			'type' => 'attach_image',
			'heading' => esc_html__( 'Image', 'virgo' ),
			'param_name' => 'images',
			'description' => esc_html__( 'Select images from media library.', 'virgo' ),
		),

		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'virgo' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'virgo' ),
		),

	)


) );


/*
* virgo_contact_header
*/
vc_map( array(
	'name' => esc_html__( 'virgo shortcode header', 'virgo' ),
	'base' => 'virgo_shortcode_header',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'virgo', 'virgo' ),
	'description' => esc_html__( '', 'virgo' ),
	'icon' => get_template_directory_uri() . '/icon/add-image.png', // Simply pass url to your icon here


	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'virgo' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Text header', 'virgo' ),
			'param_name' => 'title',
			'description' => esc_html__( 'insert text ', 'virgo' ),
			'value' => esc_html__( 'Shortcodes', 'virgo' ),
		),

		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'virgo' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'virgo' ),
		),

	)


) );


/*
* virgo_comming_header
*/
vc_map( array(
	'name' => esc_html__( 'virgo comming soon header', 'virgo' ),
	'base' => 'virgo_comming_header',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'virgo', 'virgo' ),
	'description' => esc_html__( '', 'virgo' ),
	'icon' => get_template_directory_uri() . '/icon/add-image.png', // Simply pass url to your icon here


	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'virgo' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Text header', 'virgo' ),
			'param_name' => 'title',
			'description' => esc_html__( 'insert text ', 'virgo' ),
			'value' => 'Comming Soon...',
			'virgo',
		),
		array(
			'type' => 'textarea',
			'heading' => esc_html__( 'Text description', 'virgo' ),
			'param_name' => 'desc',
			'description' => esc_html__( 'insert text ', 'virgo' ),
			'value' => esc_html__( 'We receive result combining marketing, a creative and industry experience.', 'virgo' ),
		),


		array(
			'type' => 'attach_image',
			'heading' => esc_html__( 'Image', 'virgo' ),
			'param_name' => 'images',
			'description' => esc_html__( 'Select images from media library.', 'virgo' ),
		),

		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'virgo' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'virgo' ),
		),

	)


) );


/*
* virgo_about_header
*/
vc_map( array(
	'name' => esc_html__( 'virgo about header', 'virgo' ),
	'base' => 'virgo_about_header',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'virgo', 'virgo' ),
	'description' => esc_html__( '', 'virgo' ),
	'icon' => get_template_directory_uri() . '/icon/add-image.png', // Simply pass url to your icon here


	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'virgo' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Text header', 'virgo' ),
			'param_name' => 'title',
			'description' => esc_html__( 'insert text ', 'virgo' ),
			'value' => 'Let’s get closer.',
			'virgo',
		),
		array(
			'type' => 'textarea',
			'heading' => esc_html__( 'Text description', 'virgo' ),
			'param_name' => 'desc',
			'description' => esc_html__( 'insert text ', 'virgo' ),
			'value' => esc_html__( 'We receive result combining marketing, a creative and industry experience.', 'virgo' ),
		),


		array(
			'type' => 'attach_image',
			'heading' => esc_html__( 'Image', 'virgo' ),
			'param_name' => 'images',
			'description' => esc_html__( 'Select images from media library.', 'virgo' ),
		),

		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'virgo' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'virgo' ),
		),

	)


) );


/*
* virgo_404_header
*/
vc_map( array(
	'name' => esc_html__( 'virgo 404 header', 'virgo' ),
	'base' => 'virgo_404_header',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'virgo', 'virgo' ),
	'description' => esc_html__( '', 'virgo' ),
	'icon' => get_template_directory_uri() . '/icon/add-image.png', // Simply pass url to your icon here


	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'virgo' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Text header', 'virgo' ),
			'param_name' => 'title',
			'description' => esc_html__( 'insert text ', 'virgo' ),
			'value' => 'Oops... You got lost.',
			'virgo',
		),
		array(
			'type' => 'textarea',
			'heading' => esc_html__( 'Text description', 'virgo' ),
			'param_name' => 'desc',
			'description' => esc_html__( 'insert text ', 'virgo' ),
			'value' => esc_html__( 'We receive result combining marketing, a creative and industry experience.', 'virgo' ),
		),


		array(
			'type' => 'attach_image',
			'heading' => esc_html__( 'Image', 'virgo' ),
			'param_name' => 'images',
			'description' => esc_html__( 'Select images from media library.', 'virgo' ),
		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Link text', 'virgo' ),
			'param_name' => 'link_text',
			'value' => 'back home',
			'description' => esc_html__( 'insert text ', 'virgo' ),

		),


		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Link url', 'virgo' ),
			'param_name' => 'link_url',
			'value' => 'back home',
			'description' => esc_html__( '/', 'virgo' ),

		),

		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'virgo' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'virgo' ),
		),

	)


) );

/*
*  About
*/

vc_map( array(
	'name' => esc_html__( 'virgo About', 'virgo' ),
	'base' => 'virgo_about',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'virgo', 'virgo' ),
	'description' => esc_html__( '', 'virgo' ),
	'icon' => get_template_directory_uri() . '/icon/about.png', // Simply pass url to your icon here
	'custom_markup' => '{{title}}<div class="vc_btn3-container"><h4 class="team-name"></h4></div>',
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'virgo' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
		),


		array(
			'type' => 'textfield',
			'holder' => 'div',
			'class' => '',
			'heading' => esc_html__( 'Title', 'virgo' ),
			'param_name' => 'title1',
			'value' => esc_html__( 'We create own history.', 'virgo' ),
			'description' => esc_html__( 'Insert title', 'virgo' ),
		),

		array(
			"type" => "textarea_html",
			"holder" => "div",
			"class" => "",
			"heading" => __( "Content", "virgo" ),
			"param_name" => "content",
			"value" => __( "In efforts to expand our horizons, we welcome every investment-minded individual to join us in the Condotel Investment Opportunity.", "virgo" ),
			"description" => __( "Enter your content.", "virgo" )
		),


		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'virgo' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'virgo' ),
		),

	),

) );


/*
*  About
*/

vc_map( array(
	'name' => esc_html__( 'virgo Sturtup ', 'virgo' ),
	'base' => 'virgo_about_sturtup',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'virgo', 'virgo' ),
	'description' => esc_html__( '', 'virgo' ),
	'icon' => get_template_directory_uri() . '/icon/about.png', // Simply pass url to your icon here
	'custom_markup' => '{{title}}<div class="vc_btn3-container"><h4 class="team-name"></h4></div>',
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'virgo' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
		),


		array(
			'type' => 'textfield',
			'holder' => 'div',
			'class' => '',
			'heading' => esc_html__( 'Title', 'virgo' ),
			'param_name' => 'title1',
			'value' => esc_html__( 'We create own history.', 'virgo' ),
			'description' => esc_html__( 'Insert title', 'virgo' ),
		),

		array(
			"type" => "textarea_html",
			"holder" => "div",
			"class" => "",
			"heading" => __( "Content", "virgo" ),
			"param_name" => "content",
			"value" => __( "In efforts to expand our horizons, we welcome every investment-minded individual to join us in the Condotel Investment Opportunity.You can also freely advertise with us, exchange links.", "virgo" ),
			"description" => __( "Enter your content.", "virgo" )
		),


		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'virgo' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'virgo' ),
		),

	),

) );


/*
*  About Business
*/

vc_map( array(
	'name' => esc_html__( 'virgo About Business', 'virgo' ),
	'base' => 'virgo_about_business',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'virgo', 'virgo' ),
	'description' => esc_html__( '', 'virgo' ),
	'icon' => get_template_directory_uri() . '/icon/about.png', // Simply pass url to your icon here
	'custom_markup' => '{{title}}<div class="vc_btn3-container"><h4 class="team-name"></h4></div>',
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'virgo' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
		),

		array(
			'type' => 'attach_image',
			'heading' => esc_html__( 'Image', 'virgo' ),
			'param_name' => 'image',
			'holder' => 'img',
			'description' => esc_html__( 'Select images from media library.', 'virgo' ),
		),

		array(
			'type' => 'textfield',
			'holder' => 'div',
			'class' => '',
			'heading' => esc_html__( 'Title', 'virgo' ),
			'param_name' => 'title',
			'value' => esc_html__( 'Investment is a key', 'virgo' ) . '<br>' . esc_html__( 'to long-term wealth', 'virgo' ),
			'description' => esc_html__( 'Insert title', 'virgo' ),
		),

		array(
			'type' => 'textfield',
			'holder' => 'div',
			'class' => '',
			'heading' => esc_html__( 'Title', 'virgo' ),
			'param_name' => 'desc',
			'value' => esc_html__( '– Hector Bellerin', 'virgo' ) . '<br>' . esc_html__( 'CEO of Virgo', 'virgo' ),
			'description' => esc_html__( 'Insert title', 'virgo' ),
		),

		array(
			'type' => 'textfield',
			'holder' => 'div',
			'class' => '',
			'heading' => esc_html__( 'Title secondary', 'virgo' ),
			'param_name' => 'main_title',
			'value' => esc_html__( 'We are Virgo', 'virgo' ) . '<br>' . esc_html__( ' and we solve business problems', 'virgo' ),
			'description' => esc_html__( 'Insert secondary title', 'virgo' ),
		),


		array(
			'type' => 'textarea_html',
			'heading' => esc_html__( 'Text description', 'virgo' ),
			'param_name' => 'content',
			'value' => '',
			'description' => esc_html__( 'insert text ', 'virgo' ),
		),


		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'virgo' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'virgo' ),
		),

	),

) );


/*
* Startup features
*/
vc_map( array(
	'name' => esc_html__( 'virgo startup features', 'virgo' ),
	'base' => 'virgo_startup_features',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'virgo', 'virgo' ),
	'description' => esc_html__( '', 'virgo' ),
	'custom_markup' => '{{title}}<div class="vc_btn3-container"><h4 class="team-name"></h4></div>',
	'icon' => get_template_directory_uri() . '/icon/mind.png', // Simply pass url to your icon here
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'virgo' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
		),


		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => esc_html__( 'Text header', 'virgo' ),
			'param_name' => 't',
			'value' => 'Our core values.',
			'description' => esc_html__( 'insert text', 'virgo' )
		),
		array(
			'type' => 'textarea',
			'class' => '',
			'heading' => esc_html__( 'Desciption', 'virgo' ),
			'param_name' => 'content',
			'description' => esc_html__( 'insert text', 'virgo' )
		),


		array(
			'type' => 'param_group',
			'heading' => esc_html__( 'Features item', 'virgo' ),
			'param_name' => 'items',
			'group' => esc_html__( 'Item values', 'virgo' ),
			'params' => array(


				array(
					'type' => 'iconpicker',
					'heading' => esc_html__( 'The icons 1 ', 'virgo' ),
					'param_name' => 'icon',
					'value' => '',
					'description' => esc_html__( 'insert icon', 'virgo' ),
					'settings' => array(
						'emptyIcon' => false,
						'iconsPerPage' => 4000,
					)
				),
				array(
					'type' => 'textfield',
					'holder' => 'div',
					'class' => '',
					'heading' => esc_html__( 'Title', 'virgo' ),
					'param_name' => 'ts',
					'value' => esc_html__( 'WEB DESIGN', 'virgo' ),
					'description' => esc_html__( 'insert text', 'virgo' )
				),
				array(
					'type' => 'textarea',
					'holder' => 'div',
					'class' => '',
					'heading' => esc_html__( 'Description', 'virgo' ),
					'param_name' => 'ds',
					'value' => esc_html__( 'Ever wondered how some graphic designers always manage to produce beautiful looking designs for their brochures, website designs.', 'virgo' ),
					'description' => esc_html__( 'insert text', 'virgo' )
				),


			),

		),
		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'virgo' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'virgo' ),
		),
	),

) );


/*
* About features
*/
vc_map( array(
	'name' => esc_html__( 'virgo about features', 'virgo' ),
	'base' => 'virgo_about_features',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'virgo', 'virgo' ),
	'description' => esc_html__( '', 'virgo' ),
	'custom_markup' => '{{title}}<div class="vc_btn3-container"><h4 class="team-name"></h4></div>',
	'icon' => get_template_directory_uri() . '/icon/mind.png', // Simply pass url to your icon here
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'virgo' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
		),


		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => esc_html__( 'Text header', 'virgo' ),
			'param_name' => 't',
			'value' => 'Services',
			'description' => esc_html__( 'insert text', 'virgo' )
		),


		array(
			'type' => 'param_group',
			'heading' => esc_html__( 'Features item', 'virgo' ),
			'param_name' => 'items',
			'group' => esc_html__( 'Item values', 'virgo' ),
			'params' => array(


				array(
					'type' => 'iconpicker',
					'heading' => esc_html__( 'The icons 1 ', 'virgo' ),
					'param_name' => 'icon',
					'value' => '',
					'description' => esc_html__( 'insert icon', 'virgo' ),
					'settings' => array(
						'emptyIcon' => false,
						'iconsPerPage' => 4000,
					)
				),
				array(
					'type' => 'textfield',
					'holder' => 'div',
					'class' => '',
					'heading' => esc_html__( 'Title', 'virgo' ),
					'param_name' => 'ts',
					'value' => esc_html__( 'WEB DESIGN', 'virgo' ),
					'description' => esc_html__( 'insert text', 'virgo' )
				),
				array(
					'type' => 'textarea',
					'holder' => 'div',
					'class' => '',
					'heading' => esc_html__( 'Description', 'virgo' ),
					'param_name' => 'ds',
					'value' => esc_html__( 'Ever wondered how some graphic designers always manage to produce beautiful looking designs for their brochures, website designs.', 'virgo' ),
					'description' => esc_html__( 'insert text', 'virgo' )
				),


			),

		),
		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'virgo' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'virgo' ),
		),
	),

) );


/*
* About features
*/
vc_map( array(
	'name' => esc_html__( 'virgo services features new', 'virgo' ),
	'base' => 'virgo_services_features_new',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'virgo', 'virgo' ),
	'description' => esc_html__( '', 'virgo' ),
	'custom_markup' => '{{title}}<div class="vc_btn3-container"><h4 class="team-name"></h4></div>',
	'icon' => get_template_directory_uri() . '/icon/mind.png', // Simply pass url to your icon here
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'virgo' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
		),


		array(
			'type' => 'param_group',
			'heading' => esc_html__( 'Features item', 'virgo' ),
			'param_name' => 'items',
			'group' => esc_html__( 'Item values', 'virgo' ),
			'params' => array(


				array(
					'type' => 'iconpicker',
					'heading' => esc_html__( 'The icons 1 ', 'virgo' ),
					'param_name' => 'icon',
					'value' => '',
					'description' => esc_html__( 'insert icon', 'virgo' ),
					'settings' => array(
						'emptyIcon' => false,
						'iconsPerPage' => 4000,
					)
				),
				array(
					'type' => 'textfield',
					'holder' => 'div',
					'class' => '',
					'heading' => esc_html__( 'Title', 'virgo' ),
					'param_name' => 'ts',
					'value' => esc_html__( 'WEB DESIGN', 'virgo' ),
					'description' => esc_html__( 'insert text', 'virgo' )
				),
				array(
					'type' => 'textarea',
					'holder' => 'div',
					'class' => '',
					'heading' => esc_html__( 'Description', 'virgo' ),
					'param_name' => 'ds',
					'value' => esc_html__( 'Ever wondered how some graphic designers always manage to produce beautiful looking designs for their brochures, website designs.', 'virgo' ),
					'description' => esc_html__( 'insert text', 'virgo' )
				),


			),

		),
		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'virgo' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'virgo' ),
		),
	),

) );


/*
* About features dark
*/
vc_map( array(
	'name' => esc_html__( 'virgo about features dark', 'virgo' ),
	'base' => 'virgo_about_features_dark',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'virgo', 'virgo' ),
	'description' => esc_html__( '', 'virgo' ),
	'custom_markup' => '{{title}}<div class="vc_btn3-container"><h4 class="team-name"></h4></div>',
	'icon' => get_template_directory_uri() . '/icon/mind.png', // Simply pass url to your icon here
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'virgo' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
		),


		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => esc_html__( 'Text header', 'virgo' ),
			'param_name' => 't',
			'value' => 'Services',
			'description' => esc_html__( 'insert text', 'virgo' )
		),


		array(
			'type' => 'param_group',
			'heading' => esc_html__( 'Features item', 'virgo' ),
			'param_name' => 'items',
			'group' => esc_html__( 'Item values', 'virgo' ),
			'params' => array(


				array(
					'type' => 'iconpicker',
					'heading' => esc_html__( 'The icons 1 ', 'virgo' ),
					'param_name' => 'icon',
					'value' => '',
					'description' => esc_html__( 'insert icon', 'virgo' ),
					'settings' => array(
						'emptyIcon' => false,
						'iconsPerPage' => 4000,
					)
				),
				array(
					'type' => 'textfield',
					'holder' => 'div',
					'class' => '',
					'heading' => esc_html__( 'Title', 'virgo' ),
					'param_name' => 'ts',
					'value' => esc_html__( 'WEB DESIGN', 'virgo' ),
					'description' => esc_html__( 'insert text', 'virgo' )
				),
				array(
					'type' => 'textarea',
					'holder' => 'div',
					'class' => '',
					'heading' => esc_html__( 'Description', 'virgo' ),
					'param_name' => 'ds',
					'value' => esc_html__( 'Ever wondered how some graphic designers always manage to produce beautiful looking designs for their brochures, website designs.', 'virgo' ),
					'description' => esc_html__( 'insert text', 'virgo' )
				),


			),

		),
		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'virgo' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'virgo' ),
		),
	),

) );


/*
* Agency features dark
*/
vc_map( array(
	'name' => esc_html__( 'virgo agency features dark', 'virgo' ),
	'base' => 'virgo_agency_features_dark',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'virgo', 'virgo' ),
	'description' => esc_html__( '', 'virgo' ),
	'custom_markup' => '{{title}}<div class="vc_btn3-container"><h4 class="team-name"></h4></div>',
	'icon' => get_template_directory_uri() . '/icon/mind.png', // Simply pass url to your icon here
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'virgo' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
		),


		array(
			'type' => 'param_group',
			'heading' => esc_html__( 'Features item', 'virgo' ),
			'param_name' => 'items',
			'group' => esc_html__( 'Item values', 'virgo' ),
			'params' => array(


				array(
					'type' => 'iconpicker',
					'heading' => esc_html__( 'The icons 1 ', 'virgo' ),
					'param_name' => 'icon',
					'value' => '',
					'description' => esc_html__( 'insert icon', 'virgo' ),
					'settings' => array(
						'emptyIcon' => false,
						'iconsPerPage' => 4000,
					)
				),
				array(
					'type' => 'textfield',
					'holder' => 'div',
					'class' => '',
					'heading' => esc_html__( 'Title', 'virgo' ),
					'param_name' => 'ts',
					'value' => esc_html__( 'WEB DESIGN', 'virgo' ),
					'description' => esc_html__( 'insert text', 'virgo' )
				),
				array(
					'type' => 'textarea',
					'holder' => 'div',
					'class' => '',
					'heading' => esc_html__( 'Description', 'virgo' ),
					'param_name' => 'ds',
					'value' => esc_html__( 'Ever wondered how some graphic designers always manage to produce beautiful looking designs for their brochures, website designs.', 'virgo' ),
					'description' => esc_html__( 'insert text', 'virgo' )
				),


			),

		),
		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'virgo' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'virgo' ),
		),
	),

) );


/*
* Services features
*/
vc_map( array(
	'name' => esc_html__( 'Virgo Services features', 'virgo' ),
	'base' => 'virgo_services_features',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'virgo', 'virgo' ),
	'description' => esc_html__( '', 'virgo' ),
	'custom_markup' => '{{title}}<div class="vc_btn3-container"><h4 class="team-name"></h4></div>',
	'icon' => get_template_directory_uri() . '/icon/mind.png', // Simply pass url to your icon here
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'virgo' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
		),


		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Title', 'virgo' ),
			'param_name' => 'title',
			'value' => esc_html__( 'Services', 'virgo' ),
			'description' => esc_html__( 'Add title', 'virgo' ),
		),


		array(
			'type' => 'param_group',
			'heading' => esc_html__( 'Features item', 'virgo' ),
			'param_name' => 'items',
			'group' => esc_html__( 'Item values', 'virgo' ),
			'params' => array(


				array(
					'type' => 'iconpicker',
					'heading' => esc_html__( 'The icons 1 ', 'virgo' ),
					'param_name' => 'icon',
					'value' => '',
					'description' => esc_html__( 'insert icon', 'virgo' ),
					'settings' => array(
						'emptyIcon' => false,
						'iconsPerPage' => 4000,
					)
				),

				array(
					'type' => 'attach_image',
					'heading' => esc_html__( 'Image', 'virgo' ),
					'param_name' => 'image',
					'description' => esc_html__( 'Select images from media library.', 'virgo' ),
				),

				array(
					'type' => 'textfield',
					'holder' => 'div',
					'class' => '',
					'heading' => esc_html__( 'Title', 'virgo' ),
					'param_name' => 'ts',
					'value' => esc_html__( 'WEB DESIGN', 'virgo' ),
					'description' => esc_html__( 'insert text', 'virgo' )
				),
				array(
					'type' => 'textarea',
					'holder' => 'div',
					'class' => '',
					'heading' => esc_html__( 'Description', 'virgo' ),
					'param_name' => 'ds',
					'value' => esc_html__( 'Ever wondered how some graphic designers always manage to produce beautiful looking designs for their brochures, website designs.', 'virgo' ),
					'description' => esc_html__( 'insert text', 'virgo' )
				),


			),

		),
		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'virgo' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'virgo' ),
		),
	),

) );


/*
* virgo mission 2
*/
vc_map( array(
	'name' => esc_html__( 'virgo mission 2', 'virgo' ),
	'base' => 'virgo_mission_2',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'virgo', 'virgo' ),
	'description' => esc_html__( '', 'virgo' ),
	'custom_markup' => '{{title}}<div class="vc_btn3-container"><h4 class="team-name"></h4></div>',
	'icon' => get_template_directory_uri() . '/icon/mind.png', // Simply pass url to your icon here
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'virgo' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
		),


		array(
			'type' => 'dropdown',
			'heading' => esc_html__( 'Animation', 'virgo' ),
			'param_name' => 'animation',
			'description' => esc_html__( 'Animation style', 'virgo' ),
			'value' => array(
				esc_html__( 'none', 'virgo' ) => '',
				esc_html__( 'fadeInUp', 'virgo' ) => 'wow fadeInUp',
			),
		),


		array(
			'type' => 'attach_image',
			'heading' => esc_html__( 'Images', 'virgo' ),
			'param_name' => 'images',

			'description' => esc_html__( 'Select images from media library.', 'virgo' ),
		),

		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => esc_html__( 'Text header', 'virgo' ),
			'param_name' => 't',
			'value' => 'Our services.',
			'description' => esc_html__( 'insert text', 'virgo' )
		),


		array(
			'type' => 'param_group',
			'heading' => esc_html__( 'Features item', 'virgo' ),
			'param_name' => 'items',
			'group' => esc_html__( 'Item values', 'virgo' ),
			'params' => array(


				array(
					'type' => 'iconpicker',
					'heading' => esc_html__( 'The icons 1 ', 'virgo' ),
					'param_name' => 'icon',
					'value' => '',
					'description' => esc_html__( 'insert icon', 'virgo' ),
					'settings' => array(
						'emptyIcon' => false,
						'iconsPerPage' => 4000,
					)
				),
				array(
					'type' => 'textfield',
					'holder' => 'div',
					'class' => '',
					'heading' => esc_html__( 'Title', 'virgo' ),
					'param_name' => 'ts',
					'value' => esc_html__( 'WEB DESIGN', 'virgo' ),
					'description' => esc_html__( 'insert text', 'virgo' )
				),

				array(
					'type' => 'textfield',
					'holder' => 'div',
					'class' => '',
					'heading' => esc_html__( 'Animation delay', 'virgo' ),
					'param_name' => 'anim_delay',
					'value' => esc_html__( '', 'virgo' ),
					'description' => esc_html__( 'Like 0.2', 'virgo' )
				),

			),

		),
		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'virgo' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'virgo' ),
		),
	),

) );


/*
* video header
*/
vc_map( array(
	'name' => esc_html__( 'virgo Video Header', 'virgo' ),
	'base' => 'virgo_header_video',
	'icon' => get_template_directory_uri() . '/icon/circled-play.png', // Simply pass url to your icon here
	'show_settings_on_create' => true,
	'category' => esc_html__( 'virgo', 'virgo' ),
	'description' => esc_html__( 'Site header', 'virgo' ),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'virgo' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
		),
		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => esc_html__( 'Text header', 'virgo' ),
			'param_name' => 'h',
			'value' => esc_html__( 'Make Your Product Alive', 'virgo' ),
			'description' => esc_html__( 'insert text', 'virgo' )
		),
		array(
			'type' => 'textarea',
			'heading' => esc_html__( 'Text description', 'virgo' ),
			'param_name' => 'desc',
			'description' => esc_html__( 'insert text ', 'virgo' ),
			'value' => esc_html__( 'We receive result combining marketing, a creative and industry experience.', 'virgo' ),
		),


		array(
			'type' => 'textarea',
			'heading' => esc_html__( 'Scroll description', 'virgo' ),
			'param_name' => 'scroll_text',
			'description' => esc_html__( 'insert text ', 'virgo' ),
			'value' => esc_html__( 'Scroll Down', 'virgo' ),
		),

		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => esc_html__( 'Text button', 'virgo' ),
			'param_name' => 'tb',
			'value' => esc_html__( 'Get virgo', 'virgo' ),
			'description' => esc_html__( 'insert text', 'virgo' )
		),

		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => esc_html__( 'Url button', 'virgo' ),
			'param_name' => 'tb_u',
			'admin_label' => 'false',
			'value' => '#request',
			'description' => esc_html__( 'insert text', 'virgo' )
		),
		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => esc_html__( 'Video url mp4', 'virgo' ),
			'param_name' => 'v_mp4',
			'value' => get_template_directory_uri() . '/video/video.mp4',
			'description' => esc_html__( 'insert video url in mp4 format', 'virgo' )
		),

		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => esc_html__( 'Video url webm', 'virgo' ),
			'param_name' => 'v_webm',
			'value' => get_template_directory_uri() . '/video/video.webm',
			'description' => esc_html__( 'insert video url in webm format', 'virgo' )
		),

		array(
			'type' => 'attach_image',
			"holder" => "img",
			'heading' => esc_html__( 'Video poster Image', 'virgo' ),
			'param_name' => 'img_src',
			'value' => '',
			'description' => esc_html__( 'Select images from media library.', 'virgo' ),
		),
		array(
			'type' => 'colorpicker',
			'heading' => esc_html__( 'title color', 'virgo' ),
			'param_name' => 'title_color',
			'description' => esc_html__( 'select title color', 'virgo' ),
			'group' => esc_html__( 'Color Options', 'virgo' ),
		),


		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'url', 'virgo' ),
			'param_name' => 'video2',
			'value' => 'http://www.youtube.com/watch?v=ANwf8AE3_d0',
			'description' => esc_html__( 'insert url ', 'virgo' ),

		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Playlist text', 'virgo' ),
			'param_name' => 'video_btn',
			'value' => '',
			'description' => esc_html__( 'Insert text ', 'virgo' ),

		),

		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'virgo' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'virgo' ),
		),


	),


) );


/*
* video header elegant
*/
vc_map( array(
	'name' => esc_html__( 'virgo Video Header elegant', 'virgo' ),
	'base' => 'virgo_header_video_elegant',
	'icon' => get_template_directory_uri() . '/icon/circled-play.png', // Simply pass url to your icon here
	'show_settings_on_create' => true,
	'category' => esc_html__( 'virgo', 'virgo' ),
	'description' => esc_html__( 'Site header', 'virgo' ),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'virgo' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
		),
		array(
			'type' => 'textarea',
			'heading' => esc_html__( 'Text description', 'virgo' ),
			'param_name' => 'desc',
			'description' => esc_html__( 'insert text ', 'virgo' ),
			'value' => esc_html__( 'We receive result combining marketing, a creative and industry experience.', 'virgo' ),
		),


		array(
			'type' => 'textarea',
			'heading' => esc_html__( 'Scroll description', 'virgo' ),
			'param_name' => 'scroll_text',
			'description' => esc_html__( 'insert text ', 'virgo' ),
			'value' => esc_html__( 'Scroll Down', 'virgo' ),
		),
		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => esc_html__( 'Video url mp4', 'virgo' ),
			'param_name' => 'v_mp4',
			'value' => get_template_directory_uri() . '/video/video2.mp4',
			'description' => esc_html__( 'insert video url in mp4 format', 'virgo' )
		),

		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => esc_html__( 'Video url webm', 'virgo' ),
			'param_name' => 'v_webm',
			'value' => get_template_directory_uri() . '/video/video22.webm',
			'description' => esc_html__( 'insert video url in webm format', 'virgo' )
		),

		array(
			'type' => 'attach_image',
			"holder" => "img",
			'heading' => esc_html__( 'Video poster Image', 'virgo' ),
			'param_name' => 'img_src',
			'value' => '',
			'description' => esc_html__( 'Select images from media library.', 'virgo' ),
		),


		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'url', 'virgo' ),
			'param_name' => 'video2',
			'value' => 'http://www.youtube.com/watch?v=ANwf8AE3_d0',
			'description' => esc_html__( 'insert url ', 'virgo' ),

		),

		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'virgo' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'virgo' ),
		),


	),


) );


/*
* Partners
*/
vc_map( array(
	'name' => esc_html__( 'virgo Partners', 'virgo' ),
	'base' => 'virgo_partners',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'virgo', 'virgo' ),
	'description' => esc_html__( '', 'virgo' ),
	'icon' => get_template_directory_uri() . '/icon/helping-hand.png', // Simply pass url to your icon here
	'custom_markup' => '{{title}}<div class="vc_btn3-container"><h4 class="team-name"></h4></div>',
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'virgo' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
		),

		array(
			'type' => 'attach_images',
			'heading' => esc_html__( 'Images', 'virgo' ),
			'param_name' => 'images',
			'value' => '',
			'description' => esc_html__( 'Select images from media library.', 'virgo' ),
		),

		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'virgo' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'virgo' ),
		),
	),


) );


/*
*  services
*/
vc_map( array(
	'name' => esc_html__( 'virgo Services', 'virgo' ),
	'base' => 'virgo_services',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'virgo', 'virgo' ),
	'description' => esc_html__( '', 'virgo' ),
	'custom_markup' => '{{title}}<div class="vc_btn3-container"><h4 class="team-name"></h4></div>',
	'icon' => get_template_directory_uri() . '/icon/logout-rounded.png', // Simply pass url to your icon here
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'virgo' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
		),


		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => esc_html__( 'Text header', 'virgo' ),
			'param_name' => 't',
			'value' => 'Services',
			'description' => esc_html__( 'insert text', 'virgo' )
		),

		array(
			'type' => 'textarea',
			'class' => '',
			'heading' => esc_html__( 'Description', 'virgo' ),
			'param_name' => 'd',
			'value' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 'virgo' ),
			'description' => esc_html__( 'insert text', 'virgo' )
		),


		array(
			'type' => 'param_group',
			'heading' => esc_html__( 'Services item', 'virgo' ),
			'param_name' => 'items',
			'group' => esc_html__( 'Item values', 'virgo' ),
			'params' => array(


				array(
					'type' => 'iconpicker',
					'heading' => esc_html__( 'The icons 1 ', 'virgo' ),
					'param_name' => 'icon',
					'value' => '',
					'description' => esc_html__( 'insert icon', 'virgo' ),
					'settings' => array(
						'emptyIcon' => false,
						'iconsPerPage' => 4000,
					)
				),
				array(
					'type' => 'textfield',
					'holder' => 'div',
					'class' => '',
					'heading' => esc_html__( 'Title', 'virgo' ),
					'param_name' => 'ts',
					'value' => esc_html__( 'Bootstrap 3x', 'virgo' ),
					'description' => esc_html__( 'insert text', 'virgo' )
				),
				array(
					'type' => 'textarea',
					'holder' => 'div',
					'class' => '',
					'heading' => esc_html__( 'Description', 'virgo' ),
					'param_name' => 'ds',
					'value' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'virgo' ),
					'description' => esc_html__( 'insert text', 'virgo' )
				),


			),

		),
		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'virgo' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'virgo' ),
		),
	),

) );


/*
*  virgo_projects
*/
vc_map( array(
	'name' => esc_html__( 'virgo projects', 'virgo' ),
	'base' => 'virgo_projects',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'virgo', 'virgo' ),
	'description' => esc_html__( '', 'virgo' ),
	'custom_markup' => '{{title}}<div class="vc_btn3-container"><h4 class="team-name"></h4></div>',
	'icon' => get_template_directory_uri() . '/icon/logout-rounded.png', // Simply pass url to your icon here
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'virgo' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
		),


		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => esc_html__( 'Text header', 'virgo' ),
			'param_name' => 't',
			'value' => 'Project Name',
			'description' => esc_html__( 'insert text', 'virgo' )
		),


		array(
			'type' => 'param_group',
			'heading' => esc_html__( 'Services item', 'virgo' ),
			'param_name' => 'items',
			'group' => esc_html__( 'Item values', 'virgo' ),
			'params' => array(


				array(
					'type' => 'iconpicker',
					'heading' => esc_html__( 'The icons 1 ', 'virgo' ),
					'param_name' => 'icon',
					'value' => '',
					'description' => esc_html__( 'insert icon', 'virgo' ),
					'settings' => array(
						'emptyIcon' => false,
						'iconsPerPage' => 4000,
					)
				),
				array(
					'type' => 'textfield',
					'holder' => 'div',
					'class' => '',
					'heading' => esc_html__( 'Title', 'virgo' ),
					'param_name' => 'ts',
					'value' => esc_html__( 'CATEGORY', 'virgo' ),
					'description' => esc_html__( 'insert text', 'virgo' )
				),
				array(
					'type' => 'textarea',
					'holder' => 'div',
					'class' => '',
					'heading' => esc_html__( 'Description', 'virgo' ),
					'param_name' => 'ds',
					'value' => esc_html__( 'Branding Digital', 'virgo' ),
					'description' => esc_html__( 'insert text', 'virgo' )
				),


			),

		),
		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'virgo' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'virgo' ),
		),
	),

) );


/*
* product
*/
vc_map( array(
	'name' => esc_html__( 'virgo product', 'virgo' ),
	'base' => 'virgo_product',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'virgo', 'virgo' ),
	'description' => esc_html__( '', 'virgo' ),
	'icon' => get_template_directory_uri() . '/icon/piercing.png', // Simply pass url to your icon here
	'custom_markup' => '{{title}}<div class="vc_btn3-container"><h4 class="team-name"></h4></div>',
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'virgo' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
		),

		array(
			'type' => 'attach_image',
			'heading' => esc_html__( 'Images', 'virgo' ),
			'param_name' => 'images',
			'description' => esc_html__( 'Select images from media library.', 'virgo' ),
		),

		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'virgo' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'virgo' ),
		),

	)

) );


/*
*  virgo_video_section
*/
vc_map( array(
	'name' => esc_html__( 'virgo Video Section', 'virgo' ),
	'base' => 'virgo_video_section',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'virgo', 'virgo' ),
	'description' => esc_html__( '', 'virgo' ),
	'icon' => get_template_directory_uri() . '/icon/video-playlist.png', // Simply pass url to your icon here


	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'virgo' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
		),

		array(
			'type' => 'attach_image',
			'heading' => esc_html__( 'Image', 'virgo' ),
			'param_name' => 'images',
			'description' => esc_html__( 'Select images from media library.', 'virgo' ),
		),
		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => esc_html__( 'Title', 'virgo' ),
			'param_name' => 'title1',
			'value' => esc_html__( 'Available anytime', 'virgo' ),
			'description' => esc_html__( 'Available anytime', 'virgo' ),
		),
		array(
			'type' => 'textarea',
			'class' => '',
			'heading' => esc_html__( 'Description', 'virgo' ),
			'param_name' => 'desc1',
			'value' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 'virgo' ),
			'description' => esc_html__( 'insert text', 'virgo' )
		),


		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'video', 'virgo' ),
			'param_name' => 'video',
			'description' => esc_html__( 'insert url ', 'virgo' ),
			'group' => esc_html__( 'Video options', 'virgo' ),

		),
		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'virgo' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'virgo' ),
		),


	)


) );

/*
* Features 1
*/
vc_map( array(
	'name' => esc_html__( 'virgo Features1', 'virgo' ),
	'base' => 'virgo_features_1',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'virgo', 'virgo' ),
	'description' => esc_html__( '', 'virgo' ),
	'icon' => get_template_directory_uri() . '/icon/mind.png', // Simply pass url to your icon here
	'custom_markup' => '{{title}}<div class="vc_btn3-container"><h4 class="team-name"></h4></div>',
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'virgo' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
		),
		array(
			'type' => 'dropdown',
			'param_name' => 'class',
			'value' => array(
				esc_html__( 'fadeInLeft', 'virgo' ) => 'fadeInLeft',
				esc_html__( 'fadeInUp', 'virgo' ) => 'fadeInUp col-md-push-7',


			),
			'std' => '',
			'heading' => esc_html__( 'display style ', 'virgo' ),
			'description' => esc_html__( 'Select display style.', 'virgo' ),


		),

		array(
			'type' => 'attach_image',
			'heading' => esc_html__( 'Images', 'virgo' ),
			'param_name' => 'images',
			'description' => esc_html__( 'Select images from media library.', 'virgo' ),
		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Title', 'virgo' ),
			'param_name' => 'title',
			'description' => esc_html__( 'Accomplish more, <br /> every day.', 'virgo' ),
		),
		array(
			'type' => 'textarea',
			'heading' => esc_html__( 'Description', 'virgo' ),
			'param_name' => 'description',
			'description' => esc_html__( 'Add Your Description', 'virgo' ),
		),
		array(
			'type' => 'param_group',
			'holder' => 'div',
			'heading' => esc_html__( 'Features items', 'virgo' ),
			'group' => esc_html__( 'Features items', 'virgo' ),
			'param_name' => 'items',
			'params' => array(

				array(
					'type' => 'textfield',
					'class' => '',
					'heading' => esc_html__( 'Title', 'virgo' ),
					'param_name' => 't',
					'value' => esc_html__( 'Ionicons', 'virgo' ),
					'description' => esc_html__( 'insert text', 'virgo' )
				),
				array(
					'type' => 'textfield',
					'class' => '',
					'heading' => esc_html__( 'Description', 'virgo' ),
					'param_name' => 'd',
					'value' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas harum, hic officiis commodi', 'virgo' ),
					'description' => esc_html__( 'insert text', 'virgo' )
				),

				array(
					'type' => 'textfield',
					'class' => '',
					'heading' => esc_html__( 'Number', 'virgo' ),
					'param_name' => 'number',
					'value' => esc_html__( '4K', 'virgo' ),
					'description' => esc_html__( 'insert text', 'virgo' )
				)

			)
		),
		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'virgo' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'virgo' ),
		),


	),


) );
/*
* Features 2
*/
vc_map( array(
	'name' => esc_html__( 'virgo Features2', 'virgo' ),
	'base' => 'virgo_features_2',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'virgo', 'virgo' ),
	'description' => esc_html__( '', 'virgo' ),
	'icon' => get_template_directory_uri() . '/icon/mind-map.png', // Simply pass url to your icon here
	'custom_markup' => '{{title}}<div class="vc_btn3-container"><h4 class="team-name"></h4></div>',
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'virgo' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
		),
		array(
			'type' => 'dropdown',
			'param_name' => 'class',
			'value' => array(
				esc_html__( 'fadeInLeft', 'virgo' ) => 'fadeInLeft',
				esc_html__( 'fadeInUp', 'virgo' ) => 'fadeInUp col-md-push-7',


			),
			'std' => '',
			'heading' => esc_html__( 'display style ', 'virgo' ),
			'description' => esc_html__( 'Select display style.', 'virgo' ),


		),

		array(
			'type' => 'attach_image',
			'heading' => esc_html__( 'Images', 'virgo' ),
			'param_name' => 'images',
			'description' => esc_html__( 'Select images from media library.', 'virgo' ),
		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Title', 'virgo' ),
			'param_name' => 'title',
			'description' => esc_html__( 'We like to make things easy and fun.', 'virgo' ),
		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Description', 'virgo' ),
			'param_name' => 'description',
			'description' => esc_html__( 'Add Your Description', 'virgo' ),
		),
		array(
			'type' => 'param_group',
			'holder' => 'div',
			'heading' => esc_html__( 'Features items', 'virgo' ),
			'param_name' => 'items',
			'group' => esc_html__( 'Features items', 'virgo' ),
			'params' => array(

				array(
					'type' => 'textfield',
					'class' => '',
					'heading' => esc_html__( 'Title', 'virgo' ),
					'param_name' => 't',
					'value' => esc_html__( 'Bootstrap 3x', 'virgo' ),
					'description' => esc_html__( 'insert text', 'virgo' )
				),
				array(
					'type' => 'textfield',
					'class' => '',
					'heading' => esc_html__( 'Description', 'virgo' ),
					'param_name' => 'd',
					'value' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'virgo' ),
					'description' => esc_html__( 'insert text', 'virgo' )
				),

				array(
					'type' => 'iconpicker',
					'heading' => esc_html__( 'The icons', 'virgo' ),
					'param_name' => 'icon',
					'value' => 'fa-rss',
					'description' => esc_html__( 'insert icon', 'virgo' ),
					'settings' => array(
						'emptyIcon' => false,
						'iconsPerPage' => 4000,
					)

				)
			),


		),

		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'virgo' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'virgo' ),
		),
	)

) );


/*
* Features 3
*/
vc_map( array(
	'name' => esc_html__( 'virgo Features3', 'virgo' ),
	'base' => 'virgo_features_3',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'virgo', 'virgo' ),
	'description' => esc_html__( '', 'virgo' ),
	'icon' => get_template_directory_uri() . '/icon/mind.png', // Simply pass url to your icon here
	'custom_markup' => '{{title}}<div class="vc_btn3-container"><h4 class="team-name"></h4></div>',
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'virgo' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
		),

		array(
			'type' => 'attach_image',
			'heading' => esc_html__( 'Images', 'virgo' ),
			'param_name' => 'images',
			'description' => esc_html__( 'Select images from media library.', 'virgo' ),
		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Title', 'virgo' ),
			'param_name' => 'title',
			'description' => esc_html__( 'insert title', 'virgo' ),
		),
		array(
			'type' => 'textarea',
			'heading' => esc_html__( 'Description', 'virgo' ),
			'param_name' => 'description',
			'description' => esc_html__( 'insert description', 'virgo' ),
		),

		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'virgo' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'virgo' ),
		),


	),


) );


/*
* Mission 1
*/
vc_map( array(
	'name' => esc_html__( 'virgo Mission 1', 'virgo' ),
	'base' => 'virgo_mission_1',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'virgo', 'virgo' ),
	'description' => esc_html__( '', 'virgo' ),
	'icon' => get_template_directory_uri() . '/icon/mind.png', // Simply pass url to your icon here
	'custom_markup' => '{{title}}<div class="vc_btn3-container"><h4 class="team-name"></h4></div>',
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'virgo' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
		),

		array(
			'type' => 'attach_image',
			'heading' => esc_html__( 'Images', 'virgo' ),
			'param_name' => 'images',

			'description' => esc_html__( 'Select images from media library.', 'virgo' ),
		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Title', 'virgo' ),
			'param_name' => 'title',
			'description' => esc_html__( 'insert title', 'virgo' ),
		),
		array(
			'type' => 'textarea_html',
			'heading' => esc_html__( 'Description', 'virgo' ),
			"param_name" => "content",
			"value" => __( "<p>In efforts to expand our horizons, we welcome every investment-minded individual to join us in the Condotel Investment Opportunity.</p><p>You can also freely advertise with us, exchange links with us, or be a member of our webring when you register. When you get to be a part of our webring, you get free exposure/traffic as visitors click on the other member sites of the webring. You can advertise your properties for sale or lease with us..</p>", "virgo" ),
			'description' => esc_html__( 'insert description', 'virgo' ),
		),

		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'virgo' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'virgo' ),
		),


	),


) );


/*
*  banner
*/
vc_map( array(
	'name' => esc_html__( 'virgo Banner', 'virgo' ),
	'base' => 'virgo_banner',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'virgo', 'virgo' ),
	'description' => esc_html__( '', 'virgo' ),
	'icon' => get_template_directory_uri() . '/icon/banner.png', // Simply pass url to your icon here
	'params' => array(

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'virgo' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
		),


		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => esc_html__( 'Title', 'virgo' ),
			'param_name' => 'title',
			'value' => esc_html__( 'Offer your project to Virgo team.', 'virgo' ),

			'description' => esc_html__( 'insert text', 'virgo' )
		),


		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => esc_html__( 'Text button', 'virgo' ),
			'param_name' => 'tb',
			'value' => esc_html__( 'Let\'s talk', 'virgo' ),
			'description' => esc_html__( 'insert text', 'virgo' )
		),

		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => esc_html__( 'Text url', 'virgo' ),
			'param_name' => 't_url',
			'value' => esc_html__( '#request', 'virgo' ),
			'description' => esc_html__( 'insert url', 'virgo' )
		),

		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'virgo' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'virgo' ),
		),

	),

) );


/*
*  banner white
*/
vc_map( array(
	'name' => esc_html__( 'Virgo Banner White', 'virgo' ),
	'base' => 'virgo_banner_white',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'virgo', 'virgo' ),
	'description' => esc_html__( '', 'virgo' ),
	'icon' => get_template_directory_uri() . '/icon/banner.png', // Simply pass url to your icon here
	'params' => array(

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'virgo' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
		),


		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => esc_html__( 'Title', 'virgo' ),
			'param_name' => 'title',
			'value' => esc_html__( 'Offer your project to Virgo team.', 'virgo' ),

			'description' => esc_html__( 'insert text', 'virgo' )
		),

		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => esc_html__( 'Text button', 'virgo' ),
			'param_name' => 'tb',
			'value' => esc_html__( 'Let\'s talk', 'virgo' ),
			'description' => esc_html__( 'insert text', 'virgo' )
		),

		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => esc_html__( 'Text url', 'virgo' ),
			'param_name' => 't_url',
			'value' => esc_html__( '#request', 'virgo' ),
			'description' => esc_html__( 'insert url', 'virgo' )
		),

		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'virgo' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'virgo' ),
		),

	),

) );


/*
*  Resume
*/
vc_map( array(
	'name' => esc_html__( 'virgo Resume', 'virgo' ),
	'base' => 'virgo_resume',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'virgo', 'virgo' ),
	'description' => esc_html__( '', 'virgo' ),
	'icon' => get_template_directory_uri() . '/icon/banner.png', // Simply pass url to your icon here
	'params' => array(

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'virgo' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
		),


		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => esc_html__( 'Title', 'virgo' ),
			'param_name' => 'title',
			'value' => esc_html__( 'View my resume', 'virgo' ),

			'description' => esc_html__( 'insert text', 'virgo' )
		),

		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => esc_html__( 'Description', 'virgo' ),
			'param_name' => 'desc',
			'value' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 'virgo' ),
			'description' => esc_html__( 'insert text', 'virgo' )
		),

		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => esc_html__( 'Text button', 'virgo' ),
			'param_name' => 'tb',
			'value' => esc_html__( 'Download CV', 'virgo' ),
			'description' => esc_html__( 'insert text', 'virgo' )
		),

		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => esc_html__( 'Text url', 'virgo' ),
			'param_name' => 't_url',
			'value' => esc_html__( '#', 'virgo' ),
			'description' => esc_html__( 'insert url', 'virgo' )
		),

		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'virgo' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'virgo' ),
		),

	),

) );


/*
* Reviews
*/
vc_map( array(
	'name' => esc_html__( 'virgo Reviews', 'virgo' ),
	'base' => 'virgo_review_carousel',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'virgo', 'virgo' ),
	'description' => esc_html__( '', 'virgo' ),
	'icon' => get_template_directory_uri() . '/icon/people.png', // Simply pass url to your icon here
	'custom_markup' => '{{title}}<div class="vc_btn3-container"><h4 class="team-name"></h4></div>',
	'params' => array(

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'virgo' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
		),
		array(
			'type' => 'textfield',
			'holder' => 'div',
			'heading' => esc_html__( 'Insert title', 'virgo' ),
			'param_name' => 'title',
			'value' => esc_html__( 'Clients about us..', 'virgo' ),
			'description' => esc_html__( 'insert  title ', 'virgo' )
		),
		array(
			"type" => "textarea_html",
			"holder" => "div",
			"class" => "",
			"heading" => __( "Content", "virgo" ),
			"param_name" => "content",
			"value" => __( "Our team of experts has competences of different <br> branches and specializations.", "virgo" ),
			"description" => __( "Enter your content.", "virgo" )
		),

		array(
			'type' => 'param_group',
			'holder' => 'div',
			'heading' => esc_html__( 'Reviews item', 'virgo' ),
			'param_name' => 'items',
			'group' => esc_html__( 'Reviews item', 'virgo' ),
			'params' => array(
				array(
					'type' => 'textfield',
					'holder' => 'div',
					'heading' => esc_html__( 'Insert name', 'virgo' ),
					'param_name' => 'name',
					'value' => esc_html__( 'Calum Chambers ', 'virgo' ),
					'description' => esc_html__( 'insert name', 'virgo' )
				),

				array(
					'type' => 'textfield',
					'holder' => 'div',
					'heading' => esc_html__( 'Insert position', 'virgo' ),
					'param_name' => 'position',
					'value' => esc_html__( 'Adobe sales manager', 'virgo' ),
					'description' => esc_html__( 'insert position', 'virgo' )
				),


				array(
					'type' => 'textarea',
					'holder' => 'div',
					'heading' => esc_html__( 'Text header', 'virgo' ),
					'param_name' => 'desc',
					'description' => esc_html__( 'insert text ', 'virgo' ),
					'value' => esc_html__( 'Do you want to be even more successful? 
                        Learn to love learning and growth. The more effort you put into improving your skills, 
                        the bigger the payoff you will get. Realize that things will be hard at first, but rewards worth it.', 'virgo' ),
				),

			),
		),
		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'virgo' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'virgo' ),
		),

	)


) );


/*
* Reviews
*/
vc_map( array(
	'name' => esc_html__( 'virgo Team', 'virgo' ),
	'base' => 'virgo_team',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'virgo', 'virgo' ),
	'description' => esc_html__( '', 'virgo' ),
	'icon' => get_template_directory_uri() . '/icon/people.png', // Simply pass url to your icon here
	'custom_markup' => '{{title}}<div class="vc_btn3-container"><h4 class="team-name"></h4></div>',
	'params' => array(

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'virgo' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
		),
		array(
			'type' => 'textfield',
			'holder' => 'div',
			'heading' => esc_html__( 'Insert Description', 'virgo' ),
			'param_name' => 'title',
			'value' => esc_html__( 'Our magic team.', 'virgo' ),
			'description' => esc_html__( 'insert  title ', 'virgo' )
		),


		array(
			"type" => "textarea_html",
			"holder" => "div",
			"class" => "",
			"heading" => __( "Description", "virgo" ),
			"param_name" => "content",
			"value" => __( "Our team of experts has competences of different<br> branches and specializations.", "virgo" ),
			"description" => __( "Enter your description.", "virgo" )
		),

		array(
			'type' => 'param_group',
			'holder' => 'div',
			'heading' => esc_html__( 'Reviews item', 'virgo' ),
			'param_name' => 'items',
			'group' => esc_html__( 'Reviews item', 'virgo' ),
			'params' => array(
				array(
					'type' => 'attach_image',
					'heading' => esc_html__( 'Images', 'virgo' ),
					'param_name' => 'images',

					'description' => esc_html__( 'Select images from media library.', 'virgo' ),
				),
				array(
					'type' => 'textfield',
					'holder' => 'div',
					'heading' => esc_html__( 'Insert name', 'virgo' ),
					'param_name' => 'name',
					'value' => esc_html__( 'Jack Wilshere', 'virgo' ),
					'description' => esc_html__( 'Insert name', 'virgo' )
				),
				array(
					'type' => 'textfield',
					'holder' => 'div',
					'heading' => esc_html__( 'Insert status', 'virgo' ),
					'param_name' => 'desc',
					'description' => esc_html__( 'Insert status', 'virgo' ),
					'value' => esc_html__( 'CEO / Founder ', 'virgo' ),
				),

				array(
					'type' => 'param_group',
					'holder' => 'div',
					'heading' => esc_html__( 'Soc Links', 'virgo' ),
					'param_name' => 'itemin',
					'params' => array(

						array(
							'type' => 'textfield',
							'holder' => 'div',
							'heading' => esc_html__( 'Insert Soc link', 'virgo' ),
							'param_name' => 'url',
							'description' => esc_html__( 'Insert link', 'virgo' ),
							'value' => esc_html__( 'https://www.facebook.com/', 'virgo' ),
						),

						array(
							'type' => 'iconpicker',
							'heading' => esc_html__( 'The icons', 'virgo' ),
							'param_name' => 'icon',
							'value' => 'fa-facebook',
							'description' => esc_html__( 'insert icon', 'virgo' ),
							'settings' => array(
								'emptyIcon' => false,
								'iconsPerPage' => 4000,
							)

						),
					),
				),
			),
			array(
				'type' => 'css_editor',
				'heading' => esc_html__( 'Css', 'virgo' ),
				'param_name' => 'css',
				'group' => esc_html__( 'Design options', 'virgo' ),
			),
		),
	)
) );


/**
 * Prices
 */
vc_map( array(
	'name' => esc_html__( 'virgo Prices', 'virgo' ),
	'base' => 'virgo_tariff_plan',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'virgo', 'virgo' ),
	'description' => esc_html__( '', 'virgo' ),
	'icon' => get_template_directory_uri() . '/icon/check.png', // Simply pass url to your icon here
	'custom_markup' => '{{title}}<div class="vc_btn3-container"><h4 class="team-name"></h4></div>',

	'params' => array(

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'virgo' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
		),
		array(
			'type' => 'textfield',

			'heading' => esc_html__( 'Text', 'virgo' ),
			'param_name' => 'title1',
			'description' => esc_html__( 'insert text', 'virgo' )
		),
		array(
			'type' => 'textfield',

			'heading' => esc_html__( 'Description', 'virgo' ),
			'param_name' => 'description',
			'description' => esc_html__( 'insert description', 'virgo' )
		),

		array(
			'type' => 'param_group',
			'heading' => esc_html__( 'Price tables', 'virgo' ),
			'param_name' => 'items',
			'group' => esc_html__( 'Price  tables', 'virgo' ),
			'params' => array(

				array(
					'type' => 'dropdown',
					'param_name' => 'class',
					'value' => array(
						esc_html__( 'fadeInLeft', 'virgo' ) => 'fadeInLeft',
						esc_html__( 'fadeInRight', 'virgo' ) => 'fadeInRight',
						esc_html__( 'ADVANCED', 'virgo' ) => 'ADVANCED',


					),
					'std' => '',
					'heading' => esc_html__( 'display style ', 'virgo' ),
					'description' => esc_html__( 'Select display style.', 'virgo' ),
				),


				array(
					'type' => 'textfield',
					'holder' => 'div',
					'heading' => esc_html__( 'Text big', 'virgo' ),
					'param_name' => 'h',
					'description' => esc_html__( 'insert text ', 'virgo' )
				),

				array(
					'type' => 'textfield',
					'holder' => 'div',
					'heading' => esc_html__( 'currency', 'virgo' ),
					'param_name' => 'currency',
					'value' => esc_html__( '$', 'virgo' ),
					'description' => esc_html__( 'insert currency ', 'virgo' )
				),

				array(
					'type' => 'textfield',
					'heading' => esc_html__( 'separator', 'virgo' ),
					'param_name' => 'separator',
					'value' => esc_html__( '/', 'virgo' ),
					'description' => esc_html__( 'insert price delimiter ', 'virgo' )
				),

				array(
					'type' => 'textfield',
					'holder' => 'div',
					'heading' => esc_html__( 'period', 'virgo' ),
					'param_name' => 'period',
					'value' => esc_html__( 'mo', 'virgo' ),
					'description' => esc_html__( 'insert period', 'virgo' )
				),
				array(
					'type' => 'textfield',
					'holder' => 'div',
					'heading' => esc_html__( 'insert price', 'virgo' ),
					'param_name' => 'price',
					'description' => esc_html__( 'insert price', 'virgo' )
				),
				array(
					'type' => 'textfield',
					'holder' => 'div',
					'heading' => esc_html__( 'Text button', 'virgo' ),
					'param_name' => 'tb',
					'value' => esc_html__( 'Select plan', 'virgo' ),
					'description' => esc_html__( 'insert text', 'virgo' )
				),


				array(
					'type' => 'textfield',
					'class' => '',
					'heading' => esc_html__( 'Url button', 'virgo' ),
					'param_name' => 'pr_url',
					'admin_label' => 'false',
					'value' => '#request',
					'description' => esc_html__( 'insert text', 'virgo' )
				),


				array(
					'type' => 'textfield',
					'holder' => 'div',
					'heading' => esc_html__( 'Text button hover', 'virgo' ),
					'param_name' => 'tbh',
					'value' => esc_html__( 'Select plan', 'virgo' ),
					'description' => esc_html__( 'insert text', 'virgo' )
				),
				array(
					'type' => 'param_group',
					'holder' => 'div',
					'heading' => esc_html__( 'Other Details', 'virgo' ),
					'param_name' => 'items',
					'params' => array(

						array(
							'type' => 'textfield',
							'holder' => 'div',
							'heading' => esc_html__( 'Text', 'virgo' ),
							'param_name' => 'title',
							'description' => esc_html__( 'insert text', 'virgo' )
						),

					),
				),
			),
		),
		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'virgo' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'virgo' ),
		),


	),


) );


/*
 * Portfolio
 */
vc_map( array(
		'name' => esc_html__( 'virgo portfolio new', 'virgo' ),
		'base' => 'virgo_portfolio_new_update',
		'show_settings_on_create' => true,
		'icon' => plugins_url( '/icon/dossier.png', __FILE__ ),
		// Simply pass url to your icon here
		'category' => esc_html__( 'virgo', 'virgo' ),
		"as_parent" => array( 'only' => 'virgo_accordion_item' ),
		// Use only|except attributes to limit child shortcodes (separate multiple values with comma)
		"content_element" => true,
		'params' => array(
			array(
				'type' => 'dropdown',
				'heading' => esc_html__( 'Menu visibility', 'virgo' ),
				'param_name' => 'menu_visibility',
				'description' => esc_html__( 'Show or hide menu', 'virgo' ),
				'value' => array(
					esc_html__( 'Show', 'virgo' ) => '1',
					esc_html__( 'Hide', 'virgo' ) => '2',
				),
			),

			array(
				'type' => 'dropdown',
				'class' => '',
				'heading' => esc_html__( 'Filter class', 'virgo' ),
				'param_name' => 'filter',
				'value' => array(
					esc_html__( 'none', 'virgo' ) => '',
					esc_html__( ' filter-top', 'virgo' ) => ' filter filter-top ',


				),

			),
			array(
				'type' => 'dropdown',
				'class' => '',
				'heading' => esc_html__( 'Class', 'virgo' ),
				'param_name' => 'class',
				'description' => esc_html__( 'Class that sets the top and bottom margins', 'virgo' ),
				'value' => array(
					esc_html__( 'none', 'virgo' ) => '',
					esc_html__( 'section ', 'virgo' ) => ' section  ',
				),
			),
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Heading', 'virgo' ),
				'param_name' => 'heading',
				'description' => esc_html__( 'Add Your Heading', 'virgo' ),
				'value' => esc_html__( 'Recent works', 'virgo' ),
			),

			array(
				'type' => 'dropdown',
				'class' => '',
				'heading' => esc_html__( 'Portfolio view', 'virgo' ),
				'param_name' => 'col',
				'value' => array(
					esc_html__( 'none', 'virgo' ) => '',
					esc_html__( 'padding ', 'virgo' ) => ' isotope-padding ',
					esc_html__( 'col-3 ', 'virgo' ) => 'col-3 isotope-padding ',
					esc_html__( 'col-2 ', 'virgo' ) => 'col-2 ',


				),
			),

			array(
				'type' => 'param_group',
				'heading' => esc_html__( 'Portfolio item', 'virgo' ),
				'group' => esc_html__( 'Portfolio items', 'virgo' ),
				'param_name' => 'items',
				'params' => array(
					array(
						'type' => 'textfield',
						'class' => '',
						'heading' => esc_html__( 'Category', 'virgo' ),
						'param_name' => 'cat',
						'description' => esc_html__( 'Insert category', 'virgo' )
					),

					array(
						'type' => 'textfield',
						'class' => '',
						'heading' => esc_html__( 'Category slug', 'virgo' ),
						'param_name' => 'slug',
						'description' => esc_html__( 'Insert category slug', 'virgo' )
					),


					array(
						'type' => 'textfield',
						'class' => '',
						'heading' => esc_html__( 'Title', 'virgo' ),
						'param_name' => 'title',
						'description' => esc_html__( 'Insert title', 'virgo' )
					),

					array(
						'type' => 'param_group',
						'heading' => esc_html__( 'Image item', 'virgo' ),
						'group' => esc_html__( 'Image items', 'virgo' ),
						'param_name' => 'image_items',
						'params' => array(

							array(
								'type' => 'attach_image',
								'heading' => esc_html__( 'Image', 'virgo' ),
								"holder" => "img",
								'param_name' => 'img_src',
								'description' => esc_html__( 'Select images from media library.', 'virgo' ),
							),

							array(
								'type' => 'dropdown',
								'class' => '',
								'heading' => esc_html__( 'Image size', 'virgo' ),
								'param_name' => 'size',
								'value' => array(
									esc_html__( 'normal', 'virgo' ) => '',
									esc_html__( 'big ', 'virgo' ) => ' w66 ',


								),

							),


						),

					),

				),

			),
			array(
				'type' => 'css_editor',
				'heading' => esc_html__( 'Css', 'virgo' ),
				'param_name' => 'css',
				'group' => esc_html__( 'Design options', 'virgo' ),
			),
		),


	)
);


/*
 * Portfolio 3-rd style
 */
vc_map( array(
		'name' => esc_html__( 'virgo portfolio 3-rd style', 'virgo' ),
		'base' => 'virgo_portfolio_two',
		'show_settings_on_create' => true,
		'icon' => plugins_url( '/icon/dossier.png', __FILE__ ),
		// Simply pass url to your icon here
		'category' => esc_html__( 'virgo', 'virgo' ),
		"as_parent" => array( 'only' => 'virgo_accordion_item' ),
		// Use only|except attributes to limit child shortcodes (separate multiple values with comma)
		"content_element" => true,
		'params' => array(

			array(
				'type' => 'dropdown',
				'class' => '',
				'heading' => esc_html__( 'Filter class', 'virgo' ),
				'param_name' => 'filter',
				'value' => array(
					esc_html__( 'none', 'virgo' ) => '',
					esc_html__( ' filter-top', 'virgo' ) => ' filter filter-top ',


				),

			),
			array(
				'type' => 'dropdown',
				'class' => '',
				'heading' => esc_html__( 'Class', 'virgo' ),
				'param_name' => 'class',
				'description' => esc_html__( 'Class that sets the top and bottom margins', 'virgo' ),
				'value' => array(
					esc_html__( 'none', 'virgo' ) => '',
					esc_html__( 'section ', 'virgo' ) => ' section  ',
				),
			),
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Heading', 'virgo' ),
				'param_name' => 'heading',
				'description' => esc_html__( 'Add Your Heading', 'virgo' ),
				'value' => esc_html__( 'Recent works', 'virgo' ),
			),

			array(
				'type' => 'dropdown',
				'class' => '',
				'heading' => esc_html__( 'Portfolio view', 'virgo' ),
				'param_name' => 'col',
				'value' => array(
					esc_html__( 'none', 'virgo' ) => '',
					esc_html__( 'padding ', 'virgo' ) => ' isotope-padding ',
					esc_html__( 'col-3 ', 'virgo' ) => 'col-3 isotope-padding ',
					esc_html__( 'col-2 ', 'virgo' ) => 'col-2 ',


				),
			),

			array(
				'type' => 'param_group',
				'heading' => esc_html__( 'Portfolio item', 'virgo' ),
				'group' => esc_html__( 'Portfolio items', 'virgo' ),
				'param_name' => 'items',
				'params' => array(
					array(
						'type' => 'textfield',
						'class' => '',
						'heading' => esc_html__( 'Category', 'virgo' ),
						'param_name' => 'cat',
						'description' => esc_html__( 'Insert category', 'virgo' )
					),

					array(
						'type' => 'textfield',
						'class' => '',
						'heading' => esc_html__( 'Category slug', 'virgo' ),
						'param_name' => 'slug',
						'description' => esc_html__( 'Insert category slug', 'virgo' )
					),


					array(
						'type' => 'textfield',
						'class' => '',
						'heading' => esc_html__( 'Title', 'virgo' ),
						'param_name' => 'title',
						'description' => esc_html__( 'Insert title', 'virgo' )
					),

					array(
						'type' => 'param_group',
						'heading' => esc_html__( 'Image item', 'virgo' ),
						'group' => esc_html__( 'Image items', 'virgo' ),
						'param_name' => 'image_items',
						'params' => array(

							array(
								'type' => 'attach_image',
								'heading' => esc_html__( 'Image', 'virgo' ),
								"holder" => "img",
								'param_name' => 'img_src',
								'description' => esc_html__( 'Select images from media library.', 'virgo' ),
							),

							array(
								'type' => 'dropdown',
								'class' => '',
								'heading' => esc_html__( 'Image size', 'virgo' ),
								'param_name' => 'size',
								'value' => array(
									esc_html__( 'normal', 'virgo' ) => '',
									esc_html__( 'big ', 'virgo' ) => ' w2 ',


								),

							),


						),

					),

				),

			),
		),

		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'virgo' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'virgo' ),
		),


	)
);


/*
 * Portfolio 4-th style
 */
vc_map( array(
		'name' => esc_html__( 'virgo portfolio 4-th style', 'virgo' ),
		'base' => 'virgo_portfolio_three',
		'show_settings_on_create' => true,
		'icon' => plugins_url( '/icon/dossier.png', __FILE__ ),
		// Simply pass url to your icon here
		'category' => esc_html__( 'virgo', 'virgo' ),
		"as_parent" => array( 'only' => 'virgo_accordion_item' ),
		// Use only|except attributes to limit child shortcodes (separate multiple values with comma)
		"content_element" => true,
		'params' => array(

			array(
				'type' => 'dropdown',
				'class' => '',
				'heading' => esc_html__( 'Filter class', 'virgo' ),
				'param_name' => 'filter',
				'value' => array(
					esc_html__( 'none', 'virgo' ) => '',
					esc_html__( ' filter-top', 'virgo' ) => ' filter filter-top ',


				),

			),
			array(
				'type' => 'dropdown',
				'class' => '',
				'heading' => esc_html__( 'Class', 'virgo' ),
				'param_name' => 'class',
				'description' => esc_html__( 'Class that sets the top and bottom margins', 'virgo' ),
				'value' => array(
					esc_html__( 'none', 'virgo' ) => '',
					esc_html__( 'section ', 'virgo' ) => ' section  ',
				),
			),
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Heading', 'virgo' ),
				'param_name' => 'heading',
				'description' => esc_html__( 'Add Your Heading', 'virgo' ),
				'value' => esc_html__( 'Recent works', 'virgo' ),
			),

			array(
				'type' => 'dropdown',
				'class' => '',
				'heading' => esc_html__( 'Portfolio view', 'virgo' ),
				'param_name' => 'col',
				'value' => array(
					esc_html__( 'none', 'virgo' ) => '',
					esc_html__( 'padding ', 'virgo' ) => ' isotope-padding ',
					esc_html__( 'col-3 ', 'virgo' ) => 'col-3 isotope-padding ',
					esc_html__( 'col-2 ', 'virgo' ) => 'col-2 ',


				),
			),

			array(
				'type' => 'param_group',
				'heading' => esc_html__( 'Portfolio item', 'virgo' ),
				'group' => esc_html__( 'Portfolio items', 'virgo' ),
				'param_name' => 'items',
				'params' => array(
					array(
						'type' => 'textfield',
						'class' => '',
						'heading' => esc_html__( 'Category', 'virgo' ),
						'param_name' => 'cat',
						'description' => esc_html__( 'Insert category', 'virgo' )
					),

					array(
						'type' => 'textfield',
						'class' => '',
						'heading' => esc_html__( 'Category slug', 'virgo' ),
						'param_name' => 'slug',
						'description' => esc_html__( 'Insert category slug', 'virgo' )
					),


					array(
						'type' => 'textfield',
						'class' => '',
						'heading' => esc_html__( 'Title', 'virgo' ),
						'param_name' => 'title',
						'description' => esc_html__( 'Insert title', 'virgo' )
					),

					array(
						'type' => 'param_group',
						'heading' => esc_html__( 'Image item', 'virgo' ),
						'group' => esc_html__( 'Image items', 'virgo' ),
						'param_name' => 'image_items',
						'params' => array(

							array(
								'type' => 'attach_image',
								'heading' => esc_html__( 'Image', 'virgo' ),
								"holder" => "img",
								'param_name' => 'img_src',
								'description' => esc_html__( 'Select images from media library.', 'virgo' ),
							),

							array(
								'type' => 'dropdown',
								'class' => '',
								'heading' => esc_html__( 'Image size', 'virgo' ),
								'param_name' => 'size',
								'value' => array(
									esc_html__( 'normal', 'virgo' ) => '',
									esc_html__( 'big ', 'virgo' ) => ' w2 ',


								),

							),


						),

					),

				),

			),
		),

		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'virgo' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'virgo' ),
		),


	)
);


/**
 * Portfoplio automat
 */
vc_map( array(
	'name' => esc_html__( 'Virgo Portfolio automat', 'virgo' ),
	'base' => 'virgo_portfolio_automat',
	'icon' => plugins_url( '/icon/dossier.png', __FILE__ ), // Simply pass url to your icon here
	'category' => esc_html__( 'virgo', 'virgo' ),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'virgo' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
		),

		array(
			'type' => 'dropdown',
			'param_name' => 'type_l',
			'value' => array(
				esc_html__( 'Portfolio list link to project', 'virgo' ) => '1',
				esc_html__( 'Open project image in popup', 'virgo' ) => '2',

			),
			'std' => '1',
			'heading' => esc_html__( 'Enable popup or disable ', 'virgo' ),
			'description' => esc_html__( 'Select display style.', 'virgo' ),


		),


		array(
			'type' => 'dropdown',
			'param_name' => 'type_m',
			'value' => array(
				esc_html__( 'Portfolio block no padding', 'virgo' ) => '1',
				esc_html__( 'Portfolio block padding', 'virgo' ) => '2',

			),
			'std' => '1',
			'heading' => esc_html__( 'Select style', 'virgo' ),
			'description' => esc_html__( 'Select display style.', 'virgo' ),


		),


		array(
			'type' => 'dropdown',
			'param_name' => 'type_c',
			'value' => array(
				esc_html__( 'Portfolio list style no padding', 'virgo' ) => '1',
				esc_html__( 'Portfolio list style  padding', 'virgo' ) => '2',

			),
			'std' => '1',
			'heading' => esc_html__( 'Select style', 'virgo' ),
			'description' => esc_html__( 'Select display style.', 'virgo' ),


		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Title', 'virgo' ),
			'param_name' => 'heading',
			'description' => esc_html__( 'Add Your Title', 'virgo' ),
		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Slogan', 'virgo' ),
			'param_name' => 'slogan',
			'description' => esc_html__( 'Add Your slogan', 'virgo' ),
		),
		array(
			'type' => 'textarea',
			'heading' => esc_html__( 'description', 'virgo' ),
			'param_name' => 'description',
			'description' => esc_html__( 'Add Your description', 'virgo' ),
		),


		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Portfolio Count', 'architect' ),
			'param_name' => 'posts',
			'description' => esc_html__( 'You can control with number your portfolio posts', 'architect' ),
		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'order', 'architect' ),
			'param_name' => 'order',
			'description' => esc_html__( 'Enter portfolio item order. DESC or ASC', 'architect' ),
		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'orderby', 'architect' ),
			'param_name' => 'orderby',
			'description' => esc_html__( 'Enter post orderby. Default is : date', 'architect' ),
		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Category', 'virgo' ),
			'param_name' => 'portfolio_category',
			'description' => esc_html__( 'Enter Portfolio category or write all', 'virgo' ),
		),
		array(
			'type' => 'colorpicker',
			'heading' => esc_html__( 'heading text color', 'virgo' ),
			'param_name' => 'headingcolor',
			'description' => esc_html__( 'select heading text color', 'virgo' ),
			'group' => esc_html__( 'Color Options', 'virgo' ),
		),
		array(
			'type' => 'colorpicker',
			'heading' => esc_html__( 'Slogan color', 'virgo' ),
			'param_name' => 'aftercolor',
			'description' => esc_html__( 'select Slogan color', 'virgo' ),
			'group' => esc_html__( 'Color Options', 'virgo' ),
		),
		array(
			'type' => 'colorpicker',
			'heading' => esc_html__( 'description / paragraph color', 'virgo' ),
			'param_name' => 'descriptioncolor',
			'description' => esc_html__( 'select description / paragraph color', 'virgo' ),
			'group' => esc_html__( 'Color Options', 'virgo' ),
		),

		array(
			'type' => 'colorpicker',
			'heading' => esc_html__( 'filter color', 'virgo' ),
			'param_name' => 'filtercolor',
			'description' => esc_html__( 'select filter color', 'virgo' ),
			'group' => esc_html__( 'Color Options', 'virgo' ),
		),
		array(
			'type' => 'colorpicker',
			'heading' => esc_html__( 'active filter before point color', 'virgo' ),
			'param_name' => 'filterpointcolor',
			'description' => esc_html__( 'select active filter before point color', 'virgo' ),
			'group' => esc_html__( 'Color Options', 'virgo' ),
		),

		array(
			'type' => 'colorpicker',
			'heading' => esc_html__( 'filter hover color', 'virgo' ),
			'param_name' => 'filterhovercolor',
			'description' => esc_html__( 'select filter hover color', 'virgo' ),
			'group' => esc_html__( 'Color Options', 'virgo' ),
		),

		array(
			'type' => 'colorpicker',
			'heading' => esc_html__( 'work title color', 'virgo' ),
			'param_name' => 'worktitlecolor',
			'description' => esc_html__( 'select work title color', 'virgo' ),
			'group' => esc_html__( 'Color Options', 'virgo' ),
		),


		array(
			'type' => 'colorpicker',
			'heading' => esc_html__( 'work  image mask color', 'virgo' ),
			'param_name' => 'workmaskcolor',
			'description' => esc_html__( 'select image mask color', 'virgo' ),
			'group' => esc_html__( 'Color Options', 'virgo' ),
		),

		array(
			'type' => 'colorpicker',
			'heading' => esc_html__( 'work description color', 'virgo' ),
			'param_name' => 'workdes',
			'description' => esc_html__( 'select image mask color', 'virgo' ),
			'group' => esc_html__( 'Color Options', 'virgo' ),
		),

		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'virgo' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Background options', 'virgo' ),
		),
	)
) );


/**
 * Portfoplio automat style three
 */
vc_map( array(
	'name' => esc_html__( 'Virgo Portfolio automat style three', 'virgo' ),
	'base' => 'virgo_portfolio_automat_three',
	'icon' => plugins_url( '/icon/dossier.png', __FILE__ ), // Simply pass url to your icon here
	'category' => esc_html__( 'virgo', 'virgo' ),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'virgo' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
		),

		array(
			'type' => 'dropdown',
			'param_name' => 'type_l',
			'value' => array(
				esc_html__( 'Portfolio list link to project', 'virgo' ) => '1',
				esc_html__( 'Open project image in popup', 'virgo' ) => '2',

			),
			'std' => '1',
			'heading' => esc_html__( 'Enable popup or disable ', 'virgo' ),
			'description' => esc_html__( 'Select display style.', 'virgo' ),


		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Title', 'virgo' ),
			'param_name' => 'heading',
			'description' => esc_html__( 'Add Your Title', 'virgo' ),
		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Slogan', 'virgo' ),
			'param_name' => 'slogan',
			'description' => esc_html__( 'Add Your slogan', 'virgo' ),
		),
		array(
			'type' => 'textarea',
			'heading' => esc_html__( 'description', 'virgo' ),
			'param_name' => 'description',
			'description' => esc_html__( 'Add Your description', 'virgo' ),
		),


		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Portfolio Count', 'architect' ),
			'param_name' => 'posts',
			'description' => esc_html__( 'You can control with number your portfolio posts', 'architect' ),
		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'order', 'architect' ),
			'param_name' => 'order',
			'description' => esc_html__( 'Enter portfolio item order. DESC or ASC', 'architect' ),
		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'orderby', 'architect' ),
			'param_name' => 'orderby',
			'description' => esc_html__( 'Enter post orderby. Default is : date', 'architect' ),
		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Category', 'virgo' ),
			'param_name' => 'portfolio_category',
			'description' => esc_html__( 'Enter Portfolio category or write all', 'virgo' ),
		),
		array(
			'type' => 'colorpicker',
			'heading' => esc_html__( 'heading text color', 'virgo' ),
			'param_name' => 'headingcolor',
			'description' => esc_html__( 'select heading text color', 'virgo' ),
			'group' => esc_html__( 'Color Options', 'virgo' ),
		),
		array(
			'type' => 'colorpicker',
			'heading' => esc_html__( 'Slogan color', 'virgo' ),
			'param_name' => 'aftercolor',
			'description' => esc_html__( 'select Slogan color', 'virgo' ),
			'group' => esc_html__( 'Color Options', 'virgo' ),
		),
		array(
			'type' => 'colorpicker',
			'heading' => esc_html__( 'description / paragraph color', 'virgo' ),
			'param_name' => 'descriptioncolor',
			'description' => esc_html__( 'select description / paragraph color', 'virgo' ),
			'group' => esc_html__( 'Color Options', 'virgo' ),
		),

		array(
			'type' => 'colorpicker',
			'heading' => esc_html__( 'filter color', 'virgo' ),
			'param_name' => 'filtercolor',
			'description' => esc_html__( 'select filter color', 'virgo' ),
			'group' => esc_html__( 'Color Options', 'virgo' ),
		),
		array(
			'type' => 'colorpicker',
			'heading' => esc_html__( 'active filter before point color', 'virgo' ),
			'param_name' => 'filterpointcolor',
			'description' => esc_html__( 'select active filter before point color', 'virgo' ),
			'group' => esc_html__( 'Color Options', 'virgo' ),
		),

		array(
			'type' => 'colorpicker',
			'heading' => esc_html__( 'filter hover color', 'virgo' ),
			'param_name' => 'filterhovercolor',
			'description' => esc_html__( 'select filter hover color', 'virgo' ),
			'group' => esc_html__( 'Color Options', 'virgo' ),
		),

		array(
			'type' => 'colorpicker',
			'heading' => esc_html__( 'work title color', 'virgo' ),
			'param_name' => 'worktitlecolor',
			'description' => esc_html__( 'select work title color', 'virgo' ),
			'group' => esc_html__( 'Color Options', 'virgo' ),
		),


		array(
			'type' => 'colorpicker',
			'heading' => esc_html__( 'work  image mask color', 'virgo' ),
			'param_name' => 'workmaskcolor',
			'description' => esc_html__( 'select image mask color', 'virgo' ),
			'group' => esc_html__( 'Color Options', 'virgo' ),
		),

		array(
			'type' => 'colorpicker',
			'heading' => esc_html__( 'work description color', 'virgo' ),
			'param_name' => 'workdes',
			'description' => esc_html__( 'select image mask color', 'virgo' ),
			'group' => esc_html__( 'Color Options', 'virgo' ),
		),

		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'virgo' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Background options', 'virgo' ),
		),
	)
) );


/**
 * Portfoplio automat style four
 */
vc_map( array(
	'name' => esc_html__( 'Virgo Portfolio automat style four', 'virgo' ),
	'base' => 'virgo_portfolio_automat_four',
	'icon' => plugins_url( '/icon/dossier.png', __FILE__ ), // Simply pass url to your icon here
	'category' => esc_html__( 'virgo', 'virgo' ),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'virgo' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
		),

		array(
			'type' => 'dropdown',
			'param_name' => 'type_l',
			'value' => array(
				esc_html__( 'Portfolio list link to project', 'virgo' ) => '1',
				esc_html__( 'Open project image in popup', 'virgo' ) => '2',

			),
			'std' => '1',
			'heading' => esc_html__( 'Enable popup or disable ', 'virgo' ),
			'description' => esc_html__( 'Select display style.', 'virgo' ),


		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Title', 'virgo' ),
			'param_name' => 'heading',
			'description' => esc_html__( 'Add Your Title', 'virgo' ),
		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Slogan', 'virgo' ),
			'param_name' => 'slogan',
			'description' => esc_html__( 'Add Your slogan', 'virgo' ),
		),
		array(
			'type' => 'textarea',
			'heading' => esc_html__( 'description', 'virgo' ),
			'param_name' => 'description',
			'description' => esc_html__( 'Add Your description', 'virgo' ),
		),


		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Portfolio Count', 'architect' ),
			'param_name' => 'posts',
			'description' => esc_html__( 'You can control with number your portfolio posts', 'architect' ),
		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'order', 'architect' ),
			'param_name' => 'order',
			'description' => esc_html__( 'Enter portfolio item order. DESC or ASC', 'architect' ),
		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'orderby', 'architect' ),
			'param_name' => 'orderby',
			'description' => esc_html__( 'Enter post orderby. Default is : date', 'architect' ),
		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Category', 'virgo' ),
			'param_name' => 'portfolio_category',
			'description' => esc_html__( 'Enter Portfolio category or write all', 'virgo' ),
		),
		array(
			'type' => 'colorpicker',
			'heading' => esc_html__( 'heading text color', 'virgo' ),
			'param_name' => 'headingcolor',
			'description' => esc_html__( 'select heading text color', 'virgo' ),
			'group' => esc_html__( 'Color Options', 'virgo' ),
		),
		array(
			'type' => 'colorpicker',
			'heading' => esc_html__( 'Slogan color', 'virgo' ),
			'param_name' => 'aftercolor',
			'description' => esc_html__( 'select Slogan color', 'virgo' ),
			'group' => esc_html__( 'Color Options', 'virgo' ),
		),
		array(
			'type' => 'colorpicker',
			'heading' => esc_html__( 'description / paragraph color', 'virgo' ),
			'param_name' => 'descriptioncolor',
			'description' => esc_html__( 'select description / paragraph color', 'virgo' ),
			'group' => esc_html__( 'Color Options', 'virgo' ),
		),

		array(
			'type' => 'colorpicker',
			'heading' => esc_html__( 'filter color', 'virgo' ),
			'param_name' => 'filtercolor',
			'description' => esc_html__( 'select filter color', 'virgo' ),
			'group' => esc_html__( 'Color Options', 'virgo' ),
		),
		array(
			'type' => 'colorpicker',
			'heading' => esc_html__( 'active filter before point color', 'virgo' ),
			'param_name' => 'filterpointcolor',
			'description' => esc_html__( 'select active filter before point color', 'virgo' ),
			'group' => esc_html__( 'Color Options', 'virgo' ),
		),

		array(
			'type' => 'colorpicker',
			'heading' => esc_html__( 'filter hover color', 'virgo' ),
			'param_name' => 'filterhovercolor',
			'description' => esc_html__( 'select filter hover color', 'virgo' ),
			'group' => esc_html__( 'Color Options', 'virgo' ),
		),

		array(
			'type' => 'colorpicker',
			'heading' => esc_html__( 'work title color', 'virgo' ),
			'param_name' => 'worktitlecolor',
			'description' => esc_html__( 'select work title color', 'virgo' ),
			'group' => esc_html__( 'Color Options', 'virgo' ),
		),


		array(
			'type' => 'colorpicker',
			'heading' => esc_html__( 'work  image mask color', 'virgo' ),
			'param_name' => 'workmaskcolor',
			'description' => esc_html__( 'select image mask color', 'virgo' ),
			'group' => esc_html__( 'Color Options', 'virgo' ),
		),

		array(
			'type' => 'colorpicker',
			'heading' => esc_html__( 'work description color', 'virgo' ),
			'param_name' => 'workdes',
			'description' => esc_html__( 'select image mask color', 'virgo' ),
			'group' => esc_html__( 'Color Options', 'virgo' ),
		),

		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'virgo' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Background options', 'virgo' ),
		),
	)
) );


/*
 * Portfolio details
 */
vc_map( array(
		'name' => esc_html__( 'virgo portfolio details', 'virgo' ),
		'base' => 'virgo_portfolio_details',
		'show_settings_on_create' => true,
		'icon' => plugins_url( '/icon/dossier.png', __FILE__ ),
		// Simply pass url to your icon here
		'category' => esc_html__( 'virgo', 'virgo' ),
		"as_parent" => array( 'only' => 'virgo_accordion_item' ),
		// Use only|except attributes to limit child shortcodes (separate multiple values with comma)
		"content_element" => true,
		'params' => array(

			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Section ID', 'virgo' ),
				'param_name' => 'section_id',
				'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
			),

			array(
				'type' => 'param_group',
				'heading' => esc_html__( 'Portfolio item', 'virgo' ),
				'group' => esc_html__( 'Portfolio items', 'virgo' ),
				'param_name' => 'items',
				'params' => array(

					array(
						'type' => 'attach_image',
						'heading' => esc_html__( 'Image', 'virgo' ),
						"holder" => "img",
						'param_name' => 'image',
						'description' => esc_html__( 'Select images from media library.', 'virgo' ),
					),

					array(
						'type' => 'dropdown',
						'param_name' => 'class',
						'value' => array(
							esc_html__( '50', 'virgo' ) => '50',
							esc_html__( '100', 'virgo' ) => '100',
						),
						'std' => '',
						'heading' => esc_html__( 'display style ', 'virgo' ),
						'description' => esc_html__( 'Select display style.', 'virgo' ),
					),


				),

			),
		),

		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'virgo' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'virgo' ),
		),


	)
);


/*
 * Portfolio details two
 */
vc_map( array(
		'name' => esc_html__( 'virgo portfolio details style two', 'virgo' ),
		'base' => 'virgo_portfolio_details_two',
		'show_settings_on_create' => true,
		'icon' => plugins_url( '/icon/dossier.png', __FILE__ ),
		// Simply pass url to your icon here
		'category' => esc_html__( 'virgo', 'virgo' ),
		"as_parent" => array( 'only' => 'virgo_accordion_item' ),
		// Use only|except attributes to limit child shortcodes (separate multiple values with comma)
		"content_element" => true,
		'params' => array(

			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Section ID', 'virgo' ),
				'param_name' => 'section_id',
				'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
			),

			array(
				'type' => 'param_group',
				'heading' => esc_html__( 'Portfolio details item', 'virgo' ),
				'group' => esc_html__( 'Portfolio items', 'virgo' ),
				'param_name' => 'items',
				'params' => array(

					array(
						'type' => 'attach_image',
						'heading' => esc_html__( 'Image', 'virgo' ),
						"holder" => "img",
						'param_name' => 'image',
						'description' => esc_html__( 'Select images from media library.', 'virgo' ),
					),

					array(
						'type' => 'textfield',
						'heading' => esc_html__( 'Text portfolio', 'virgo' ),
						'param_name' => 'some_text',
						'description' => esc_html__( 'Add Your Text', 'virgo' ),
					),


				),

			),
		),

		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'virgo' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'virgo' ),
		),


	)
);


/*
 * Portfolio details content
 */
vc_map( array(
		'name' => esc_html__( 'virgo portfolio details style content', 'virgo' ),
		'base' => 'virgo_portfolio_details_content',
		'show_settings_on_create' => true,
		'icon' => plugins_url( '/icon/dossier.png', __FILE__ ),
		// Simply pass url to your icon here
		'category' => esc_html__( 'virgo', 'virgo' ),
		"as_parent" => array( 'only' => 'virgo_accordion_item' ),
		// Use only|except attributes to limit child shortcodes (separate multiple values with comma)
		"content_element" => true,
		'params' => array(

			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Section ID', 'virgo' ),
				'param_name' => 'section_id',
				'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
			),

			array(
				'type' => 'attach_image',
				'heading' => esc_html__( 'Image', 'virgo' ),
				'param_name' => 'images',
				'description' => esc_html__( 'Select images from media library.', 'virgo' ),
			),

			array(
				"type" => "textarea_html",
				"holder" => "div",
				"class" => "",
				"heading" => __( "Content", "virgo" ),
				"param_name" => "content",
				"value" => __( "Why read motivational sayings? For motivation! You might need a bit, if you can use last year’s list of goals this year because it’s as good as new. All of us can benefit from inspirational thoughts, so here are ten great ones. “Be more concerned with your character than with your reputation. Your character is what you really are while your reputation is merely what others think you are.” – Dale Carnegie", "virgo" ),
				"description" => __( "Enter your content.", "virgo" )
			),
		),

		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'virgo' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'virgo' ),
		),


	)
);


/**
 * subscribe
 */


vc_map( array(
	'name' => esc_html__( 'virgo Subscribe ', 'virgo' ),
	'base' => 'virgo_subscribe_form',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'virgo', 'virgo' ),
	'description' => esc_html__( '', 'virgo' ),
	'icon' => get_template_directory_uri() . '/icon/purchase.png', // Simply pass url to your icon here
	'params' => array(

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'virgo' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
		),
		array(
			'type' => 'textfield',

			'heading' => esc_html__( 'Text', 'virgo' ),
			'param_name' => 'title',
			'description' => esc_html__( 'insert text', 'virgo' ),
			'value' => esc_html__( 'Subscribe', 'virgo' ),
		),
		array(
			'type' => 'textfield',
			'value' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur' ),

			'heading' => esc_html__( 'Description', 'virgo' ),
			'param_name' => 'desc',
			'description' => esc_html__( 'insert text', 'virgo' )
		),

		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => esc_html__( 'placeholder', 'virgo' ),
			'param_name' => 'placeholder',
			'value' => esc_html__( 'Email address', 'virgo' ),
			'description' => esc_html__( 'insert text', 'virgo' ),
			'group' => esc_html__( 'Subscribe values', 'virgo' ),
		),
		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => esc_html__( 'text button', 'virgo' ),
			'param_name' => 't',
			'value' => esc_html__( 'Subscribe', 'virgo' ),
			'description' => esc_html__( 'insert text', 'virgo' ),
			'group' => esc_html__( 'Subscribe values', 'virgo' ),
		),


		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'virgo' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'virgo' ),
		),

	),

) );

/*
* Contact
*/

vc_map( array(

	'name' => esc_html__( 'virgo Contact', 'virgo' ),
	'base' => 'virgo_address_item',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'virgo', 'virgo' ),
	'description' => esc_html__( '', 'virgo' ),
	'icon' => get_template_directory_uri() . '/icon/message.png', // Simply pass url to your icon here
	'custom_markup' => '{{title}}<div class="vc_btn3-container"><h4 class="team-name"></h4></div>',
	'params' => array(

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'virgo' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
		),

		array(
			'type' => 'textfield',
			'value' => esc_html__( 'Name ', 'virgo' ),

			'heading' => esc_html__( 'Text', 'virgo' ),
			'param_name' => 'field_first',
			'description' => esc_html__( 'insert value by contact form field', 'virgo' )
		),

		array(
			'type' => 'textfield',
			'value' => esc_html__( 'Email ', 'virgo' ),

			'heading' => esc_html__( 'Text', 'virgo' ),
			'param_name' => 'field_second',
			'description' => esc_html__( 'insert value by contact form field', 'virgo' )
		),

		array(
			'type' => 'textfield',
			'value' => esc_html__( 'Message ', 'virgo' ),

			'heading' => esc_html__( 'Text', 'virgo' ),
			'param_name' => 'field_three',
			'description' => esc_html__( 'insert value by contact form field', 'virgo' )
		),

		array(
			'type' => 'textfield',
			'value' => esc_html__( 'Submit ', 'virgo' ),

			'heading' => esc_html__( 'Text', 'virgo' ),
			'param_name' => 'field_fourth',
			'description' => esc_html__( 'insert value by contact form field', 'virgo' )
		),


		array(
			'type' => 'textarea_html',
			'value' => '',
			'virgo',
			'heading' => esc_html__( 'Shortcode', 'virgo' ),
			'param_name' => 'content',
			'description' => esc_html__( 'insert CF7 shortcode', 'virgo' )
		),

		array(
			'type' => 'dropdown',
			'heading' => esc_html__( 'Contact map visibility', 'virgo' ),
			'param_name' => 'map_visibility',
			'description' => esc_html__( 'Show or hide map', 'virgo' ),
			'value' => array(
				esc_html__( 'Show', 'virgo' ) => '1',
				esc_html__( 'Hide', 'virgo' ) => '2',
			),
			'group' => esc_html__( 'Map', 'virgo' ),
		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Map marker text', 'virgo' ),
			'param_name' => 'map_text',
			'value' => '',
			'description' => esc_html__( 'Add your map marker text', 'virgo' ),
			'group' => esc_html__( 'Map', 'virgo' ),
		),

		array(
			'type' => 'textfield',
			'holder' => 'div',
			'heading' => esc_html__( 'insert url ', 'virgo' ),
			'param_name' => 'url',
			'description' => esc_html__( 'url ', 'virgo' ),
			'group' => esc_html__( 'Map', 'virgo' ),

		),
		array(
			'type' => 'textfield',
			'holder' => 'div',
			'heading' => esc_html__( 'insert text url ', 'virgo' ),
			'param_name' => 'url_t',
			'description' => esc_html__( ' text url  ', 'virgo' ),
			'group' => esc_html__( 'Map', 'virgo' ),

		),
		/*************************/

		array(
			'type' => 'textfield',
			'holder' => 'div',
			'heading' => esc_html__( 'insert lat coordinates ', 'virgo' ),
			'param_name' => 'lat',
			'description' => esc_html__( 'insert lat for example -45.200 ', 'virgo' ),
			'value' => esc_html__( '-45.200', 'virgo' ),
			'group' => esc_html__( 'Map', 'virgo' ),
		),
		array(
			'type' => 'textfield',
			'holder' => 'div',
			'heading' => esc_html__( 'insert lng coordinates ', 'virgo' ),
			'param_name' => 'lng',
			'description' => esc_html__( 'insert lng for example -72.4310 ', 'virgo' ),
			'value' => esc_html__( '-72.4310', 'virgo' ),
			'group' => esc_html__( 'Map', 'virgo' ),
		),
		array(
			'type' => 'textfield',
			'holder' => 'div',
			'heading' => esc_html__( 'insert zooms ', 'virgo' ),
			'param_name' => 'zoom',
			'description' => esc_html__( 'insert zoom for example 8', 'virgo' ),
			'value' => 8,
			'group' => esc_html__( 'Map', 'virgo' ),
		),


		/******************/
		array(
			'type' => 'param_group',
			'holder' => 'div',
			'heading' => esc_html__( 'Map info values', 'virgo' ),
			'param_name' => 'map_items',
			'group' => esc_html__( 'Map', 'virgo' ),
			'params' => array(
				array(
					'type' => 'iconpicker',
					'heading' => esc_html__( 'The icons', 'virgo' ),
					'param_name' => 'icon',
					'value' => '',
					'description' => esc_html__( 'insert icon', 'virgo' ),
					'settings' => array(
						'emptyIcon' => false,
						'iconsPerPage' => 4000,
					)

				),
				array(
					'type' => 'textarea',
					'heading' => esc_html__( 'Description ', 'virgo' ),
					'param_name' => 'content',
					'description' => esc_html__( 'insert text', 'virgo' ),

				),

			),
		),


		/******************/

		array(
			'type' => 'param_group',
			'holder' => 'div',
			'heading' => esc_html__( 'Items values', 'virgo' ),
			'group' => esc_html__( 'Contact items', 'virgo' ),
			'param_name' => 'items',
			'params' => array(
				array(
					'type' => 'iconpicker',
					'heading' => esc_html__( 'The icons', 'virgo' ),
					'param_name' => 'icon',
					'value' => 'fa-rss',
					'description' => esc_html__( 'insert icon', 'virgo' ),
					'settings' => array(
						'emptyIcon' => false,
						'iconsPerPage' => 4000,
					)

				),
				array(
					'type' => 'textfield',
					'heading' => esc_html__( 'Title ', 'virgo' ),
					'param_name' => 't',
					'description' => esc_html__( 'insert text', 'virgo' ),

				),
				array(
					'type' => 'textarea',
					'heading' => esc_html__( 'Description ', 'virgo' ),
					'param_name' => 'content',
					'description' => 'insert text',
					'virgo',

				),

			),
		),

		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'virgo' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'virgo' ),
		),


	),


) );


/*
* Contact style two
*/

vc_map( array(

	'name' => esc_html__( 'virgo Contact style 2', 'virgo' ),
	'base' => 'virgo_address_item_two',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'virgo', 'virgo' ),
	'description' => esc_html__( '', 'virgo' ),
	'icon' => get_template_directory_uri() . '/icon/message.png', // Simply pass url to your icon here
	'custom_markup' => '{{title}}<div class="vc_btn3-container"><h4 class="team-name"></h4></div>',
	'params' => array(

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'virgo' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
		),

		array(
			'type' => 'textfield',
			'value' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.', 'virgo' ),

			'heading' => esc_html__( 'Text', 'virgo' ),
			'param_name' => 'info',
			'description' => esc_html__( 'insert address info', 'virgo' )
		),

		array(
			'type' => 'textfield',
			'value' => esc_html__( 'Name ', 'virgo' ),

			'heading' => esc_html__( 'Text', 'virgo' ),
			'param_name' => 'field_first',
			'description' => esc_html__( 'insert value by contact form field', 'virgo' )
		),

		array(
			'type' => 'textfield',
			'value' => esc_html__( 'Email ', 'virgo' ),

			'heading' => esc_html__( 'Text', 'virgo' ),
			'param_name' => 'field_second',
			'description' => esc_html__( 'insert value by contact form field', 'virgo' )
		),

		array(
			'type' => 'textfield',
			'value' => esc_html__( 'Message ', 'virgo' ),

			'heading' => esc_html__( 'Text', 'virgo' ),
			'param_name' => 'field_three',
			'description' => esc_html__( 'insert value by contact form field', 'virgo' )
		),

		array(
			'type' => 'textfield',
			'value' => esc_html__( 'Submit ', 'virgo' ),

			'heading' => esc_html__( 'Text', 'virgo' ),
			'param_name' => 'field_fourth',
			'description' => esc_html__( 'insert value by contact form field', 'virgo' )
		),


		array(
			'type' => 'textarea_html',
			'value' => '',
			'virgo',
			'heading' => esc_html__( 'Shortcode', 'virgo' ),
			'param_name' => 'content',
			'description' => esc_html__( 'insert CF7 shortcode', 'virgo' )
		),


		/******************/
		array(
			'type' => 'param_group',
			'holder' => 'div',
			'heading' => esc_html__( 'Social links', 'virgo' ),
			'param_name' => 'social_items',
			'params' => array(
				array(
					'type' => 'iconpicker',
					'heading' => esc_html__( 'The icons', 'virgo' ),
					'param_name' => 'icon',
					'value' => '',
					'description' => esc_html__( 'insert icon', 'virgo' ),
					'settings' => array(
						'emptyIcon' => false,
						'iconsPerPage' => 4000,
					)

				),
				array(
					'type' => 'textfield',
					'heading' => esc_html__( 'Url ', 'virgo' ),
					'param_name' => 's_url',
					'description' => esc_html__( 'insert url', 'virgo' ),

				),

			),
		),


		array(
			'type' => 'dropdown',
			'heading' => esc_html__( 'Contact map visibility', 'virgo' ),
			'param_name' => 'map_visibility',
			'description' => esc_html__( 'Show or hide map', 'virgo' ),
			'value' => array(
				esc_html__( 'Show', 'virgo' ) => '1',
				esc_html__( 'Hide', 'virgo' ) => '2',
			),
			'group' => esc_html__( 'Map', 'virgo' ),
		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Map marker text', 'virgo' ),
			'param_name' => 'map_text',
			'value' => '',
			'description' => esc_html__( 'Add your map marker text', 'virgo' ),
			'group' => esc_html__( 'Map', 'virgo' ),
		),

		array(
			'type' => 'textfield',
			'holder' => 'div',
			'heading' => esc_html__( 'insert url ', 'virgo' ),
			'param_name' => 'url',
			'description' => esc_html__( 'url ', 'virgo' ),
			'group' => esc_html__( 'Map', 'virgo' ),

		),
		array(
			'type' => 'textfield',
			'holder' => 'div',
			'heading' => esc_html__( 'insert text url ', 'virgo' ),
			'param_name' => 'url_t',
			'description' => esc_html__( ' text url  ', 'virgo' ),
			'group' => esc_html__( 'Map', 'virgo' ),

		),
		/*************************/

		array(
			'type' => 'textfield',
			'holder' => 'div',
			'heading' => esc_html__( 'insert lat coordinates ', 'virgo' ),
			'param_name' => 'lat',
			'description' => esc_html__( 'insert lat for example -45.200 ', 'virgo' ),
			'value' => esc_html__( '-45.200', 'virgo' ),
			'group' => esc_html__( 'Map', 'virgo' ),
		),
		array(
			'type' => 'textfield',
			'holder' => 'div',
			'heading' => esc_html__( 'insert lng coordinates ', 'virgo' ),
			'param_name' => 'lng',
			'description' => esc_html__( 'insert lng for example -72.4310 ', 'virgo' ),
			'value' => esc_html__( '-72.4310', 'virgo' ),
			'group' => esc_html__( 'Map', 'virgo' ),
		),
		array(
			'type' => 'textfield',
			'holder' => 'div',
			'heading' => esc_html__( 'insert zooms ', 'virgo' ),
			'param_name' => 'zoom',
			'description' => esc_html__( 'insert zoom for example 8', 'virgo' ),
			'value' => 8,
			'group' => esc_html__( 'Map', 'virgo' ),
		),


		/******************/
		array(
			'type' => 'param_group',
			'holder' => 'div',
			'heading' => esc_html__( 'Map info values', 'virgo' ),
			'param_name' => 'map_items',
			'group' => esc_html__( 'Map', 'virgo' ),
			'params' => array(
				array(
					'type' => 'iconpicker',
					'heading' => esc_html__( 'The icons', 'virgo' ),
					'param_name' => 'icon',
					'value' => '',
					'description' => esc_html__( 'insert icon', 'virgo' ),
					'settings' => array(
						'emptyIcon' => false,
						'iconsPerPage' => 4000,
					)

				),
				array(
					'type' => 'textarea',
					'heading' => esc_html__( 'Description ', 'virgo' ),
					'param_name' => 'content',
					'description' => esc_html__( 'insert text', 'virgo' ),

				),

			),
		),


		/******************/

		array(
			'type' => 'param_group',
			'holder' => 'div',
			'heading' => esc_html__( 'Items values', 'virgo' ),
			'group' => esc_html__( 'Contact items', 'virgo' ),
			'param_name' => 'items',
			'params' => array(
				array(
					'type' => 'iconpicker',
					'heading' => esc_html__( 'The icons', 'virgo' ),
					'param_name' => 'icon',
					'value' => 'fa-rss',
					'description' => esc_html__( 'insert icon', 'virgo' ),
					'settings' => array(
						'emptyIcon' => false,
						'iconsPerPage' => 4000,
					)

				),
				array(
					'type' => 'textfield',
					'heading' => esc_html__( 'Title ', 'virgo' ),
					'param_name' => 't',
					'description' => esc_html__( 'insert text', 'virgo' ),

				),
				array(
					'type' => 'textarea',
					'heading' => esc_html__( 'Description ', 'virgo' ),
					'param_name' => 'content',
					'description' => 'insert text',
					'virgo',

				),

			),
		),

		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'virgo' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'virgo' ),
		),


	),


) );


/*
* Contact style three
*/

vc_map( array(

	'name' => esc_html__( 'virgo Contact style 3', 'virgo' ),
	'base' => 'virgo_address_item_three',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'virgo', 'virgo' ),
	'description' => esc_html__( '', 'virgo' ),
	'icon' => get_template_directory_uri() . '/icon/message.png', // Simply pass url to your icon here
	'custom_markup' => '{{title}}<div class="vc_btn3-container"><h4 class="team-name"></h4></div>',
	'params' => array(

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'virgo' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
		),

		array(
			'type' => 'textfield',
			'value' => esc_html__( 'Name ', 'virgo' ),

			'heading' => esc_html__( 'Text', 'virgo' ),
			'param_name' => 'field_first',
			'description' => esc_html__( 'insert value by contact form field', 'virgo' )
		),

		array(
			'type' => 'textfield',
			'value' => esc_html__( 'Email ', 'virgo' ),

			'heading' => esc_html__( 'Text', 'virgo' ),
			'param_name' => 'field_second',
			'description' => esc_html__( 'insert value by contact form field', 'virgo' )
		),

		array(
			'type' => 'textfield',
			'value' => esc_html__( 'Message ', 'virgo' ),

			'heading' => esc_html__( 'Text', 'virgo' ),
			'param_name' => 'field_three',
			'description' => esc_html__( 'insert value by contact form field', 'virgo' )
		),

		array(
			'type' => 'textfield',
			'value' => esc_html__( 'submit ', 'virgo' ),

			'heading' => esc_html__( 'Text', 'virgo' ),
			'param_name' => 'field_fourth',
			'description' => esc_html__( 'insert value by contact form field', 'virgo' )
		),


		array(
			'type' => 'textarea_html',
			'value' => '',
			'virgo',
			'heading' => esc_html__( 'Shortcode', 'virgo' ),
			'param_name' => 'content',
			'description' => esc_html__( 'insert CF7 shortcode', 'virgo' )
		),

		array(
			'type' => 'dropdown',
			'heading' => esc_html__( 'Contact map visibility', 'virgo' ),
			'param_name' => 'map_visibility',
			'description' => esc_html__( 'Show or hide map', 'virgo' ),
			'value' => array(
				esc_html__( 'Show', 'virgo' ) => '1',
				esc_html__( 'Hide', 'virgo' ) => '2',
			),
			'group' => esc_html__( 'Map', 'virgo' ),
		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Map marker text', 'virgo' ),
			'param_name' => 'map_text',
			'value' => '',
			'description' => esc_html__( 'Add your map marker text', 'virgo' ),
			'group' => esc_html__( 'Map', 'virgo' ),
		),

		array(
			'type' => 'textfield',
			'holder' => 'div',
			'heading' => esc_html__( 'insert url ', 'virgo' ),
			'param_name' => 'url',
			'description' => esc_html__( 'url ', 'virgo' ),
			'group' => esc_html__( 'Map', 'virgo' ),

		),
		array(
			'type' => 'textfield',
			'holder' => 'div',
			'heading' => esc_html__( 'insert text url ', 'virgo' ),
			'param_name' => 'url_t',
			'description' => esc_html__( ' text url  ', 'virgo' ),
			'group' => esc_html__( 'Map', 'virgo' ),

		),
		/*************************/

		array(
			'type' => 'textfield',
			'holder' => 'div',
			'heading' => esc_html__( 'insert lat coordinates ', 'virgo' ),
			'param_name' => 'lat',
			'description' => esc_html__( 'insert lat for example 45.200 ', 'virgo' ),
			'value' => esc_html__( '-45.200', 'virgo' ),
			'group' => esc_html__( 'Map', 'virgo' ),
		),
		array(
			'type' => 'textfield',
			'holder' => 'div',
			'heading' => esc_html__( 'insert lng coordinates ', 'virgo' ),
			'param_name' => 'lng',
			'description' => esc_html__( 'insert lng for example -72.4310 ', 'virgo' ),
			'value' => esc_html__( '-72.4310', 'virgo' ),
			'group' => esc_html__( 'Map', 'virgo' ),
		),
		array(
			'type' => 'textfield',
			'holder' => 'div',
			'heading' => esc_html__( 'insert zooms ', 'virgo' ),
			'param_name' => 'zoom',
			'description' => esc_html__( 'insert zoom for example 8', 'virgo' ),
			'value' => 8,
			'group' => esc_html__( 'Map', 'virgo' ),
		),


		/******************/
		array(
			'type' => 'param_group',
			'holder' => 'div',
			'heading' => esc_html__( 'Map info values', 'virgo' ),
			'param_name' => 'map_items',
			'group' => esc_html__( 'Map', 'virgo' ),
			'params' => array(
				array(
					'type' => 'iconpicker',
					'heading' => esc_html__( 'The icons', 'virgo' ),
					'param_name' => 'icon',
					'value' => '',
					'description' => esc_html__( 'insert icon', 'virgo' ),
					'settings' => array(
						'emptyIcon' => false,
						'iconsPerPage' => 4000,
					)

				),
				array(
					'type' => 'textarea',
					'heading' => esc_html__( 'Description ', 'virgo' ),
					'param_name' => 'content',
					'description' => esc_html__( 'insert text', 'virgo' ),

				),

			),
		),


		/******************/

		array(
			'type' => 'param_group',
			'holder' => 'div',
			'heading' => esc_html__( 'Items values', 'virgo' ),
			'group' => esc_html__( 'Contact items', 'virgo' ),
			'param_name' => 'items',
			'params' => array(

				array(
					'type' => 'dropdown',
					'param_name' => 'class',
					'value' => array(
						esc_html__( 'bg-primary', 'virgo' ) => 'bg-primary',
						esc_html__( 'bg-light', 'virgo' ) => 'bg-light',
						esc_html__( 'bg-dark', 'virgo' ) => 'bg-dark',


					),
					'std' => '',
					'heading' => esc_html__( 'display style ', 'virgo' ),
					'description' => esc_html__( 'Select display style.', 'virgo' ),
				),


				array(
					'type' => 'iconpicker',
					'heading' => esc_html__( 'The icons', 'virgo' ),
					'param_name' => 'icon',
					'value' => 'fa-rss',
					'description' => esc_html__( 'insert icon', 'virgo' ),
					'settings' => array(
						'emptyIcon' => false,
						'iconsPerPage' => 4000,
					)

				),
				array(
					'type' => 'textfield',
					'heading' => esc_html__( 'Title ', 'virgo' ),
					'param_name' => 't',
					'description' => esc_html__( 'insert text', 'virgo' ),

				),
				array(
					'type' => 'textarea',
					'heading' => esc_html__( 'Description ', 'virgo' ),
					'param_name' => 'content',
					'description' => 'insert text',
					'virgo',

				),

			),
		),

		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'virgo' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'virgo' ),
		),


	),


) );


//virgo_item_menu


vc_map( array(
	'name' => esc_html__( 'virgo item menu', 'virgo' ),
	'base' => 'virgo_item_menu',
	'icon' => 'vc_general vc_element-icon icon-wpb-row', // Simply pass url to your icon here
	'is_container' => true,
	'show_settings_on_create' => true,
	'category' => esc_html__( 'virgo', 'virgo' ),
	'description' => esc_html__( 'Collapsible content panels', 'virgo' ),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'virgo' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
		),
		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'virgo' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'virgo' ),
		),


	),
	'js_view' => 'VcColumnView',

) );


/*   Freelance DARK   */


/*
* freelance dark
*/
vc_map( array(
	'name' => esc_html__( 'virgo freelance dark header', 'virgo' ),
	'base' => 'virgo_dark_header',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'virgo', 'virgo' ),
	'description' => esc_html__( '', 'virgo' ),
	'icon' => get_template_directory_uri() . '/icon/add-image.png', // Simply pass url to your icon here


	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'virgo' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
		),

		array(
			"type" => "textarea_html",
			"holder" => "div",
			"class" => "",
			"heading" => __( "Title", "virgo" ),
			"param_name" => "content",
			"value" => __( "", "virgo" ),
			"description" => __( "Enter your Title.", "virgo" )
		),

		array(
			'type' => 'attach_image',
			'heading' => esc_html__( 'Image', 'virgo' ),
			'param_name' => 'images',
			'description' => esc_html__( 'Select images from media library.', 'virgo' ),
		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Scroll text', 'virgo' ),
			'param_name' => 'scroll_text',
			'value' => 'scroll down',
			'description' => esc_html__( 'insert text ', 'virgo' ),
			'group' => esc_html__( 'Scroll options', 'virgo' ),

		),


		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'virgo' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'virgo' ),
		),

	)


) );


/**
 * Portfoplio automat
 */
vc_map( array(
	'name' => esc_html__( 'Virgo Freelance daerk automat portfolio', 'virgo' ),
	'base' => 'virgo_portfolio_automat_dark',
	'icon' => plugins_url( '/icon/dossier.png', __FILE__ ), // Simply pass url to your icon here
	'category' => esc_html__( 'virgo', 'virgo' ),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'virgo' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
		),

		array(
			'type' => 'dropdown',
			'param_name' => 'type_l',
			'value' => array(
				esc_html__( 'Portfolio list link to project', 'virgo' ) => '1',
				esc_html__( 'Open project image in popup', 'virgo' ) => '2',

			),
			'std' => '1',
			'heading' => esc_html__( 'Enable popup or disable ', 'virgo' ),
			'description' => esc_html__( 'Select display style.', 'virgo' ),


		),


		array(
			'type' => 'dropdown',
			'param_name' => 'type_c',
			'value' => array(
				esc_html__( 'Portfolio list style no padding', 'virgo' ) => '1',
				esc_html__( 'Portfolio list style  padding', 'virgo' ) => '2',

			),
			'std' => '1',
			'heading' => esc_html__( 'Select style', 'virgo' ),
			'description' => esc_html__( 'Select display style.', 'virgo' ),


		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Title', 'virgo' ),
			'param_name' => 'heading',
			'description' => esc_html__( 'Add Your Title', 'virgo' ),
		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Slogan', 'virgo' ),
			'param_name' => 'slogan',
			'description' => esc_html__( 'Add Your slogan', 'virgo' ),
		),
		array(
			'type' => 'textarea',
			'heading' => esc_html__( 'description', 'virgo' ),
			'param_name' => 'description',
			'description' => esc_html__( 'Add Your description', 'virgo' ),
		),


		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Portfolio Count', 'architect' ),
			'param_name' => 'posts',
			'description' => esc_html__( 'You can control with number your portfolio posts', 'architect' ),
		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'order', 'architect' ),
			'param_name' => 'order',
			'description' => esc_html__( 'Enter portfolio item order. DESC or ASC', 'architect' ),
		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'orderby', 'architect' ),
			'param_name' => 'orderby',
			'description' => esc_html__( 'Enter post orderby. Default is : date', 'architect' ),
		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Category', 'virgo' ),
			'param_name' => 'portfolio_category',
			'description' => esc_html__( 'Enter Portfolio category or write all', 'virgo' ),
		),
		array(
			'type' => 'colorpicker',
			'heading' => esc_html__( 'heading text color', 'virgo' ),
			'param_name' => 'headingcolor',
			'description' => esc_html__( 'select heading text color', 'virgo' ),
			'group' => esc_html__( 'Color Options', 'virgo' ),
		),
		array(
			'type' => 'colorpicker',
			'heading' => esc_html__( 'Slogan color', 'virgo' ),
			'param_name' => 'aftercolor',
			'description' => esc_html__( 'select Slogan color', 'virgo' ),
			'group' => esc_html__( 'Color Options', 'virgo' ),
		),
		array(
			'type' => 'colorpicker',
			'heading' => esc_html__( 'description / paragraph color', 'virgo' ),
			'param_name' => 'descriptioncolor',
			'description' => esc_html__( 'select description / paragraph color', 'virgo' ),
			'group' => esc_html__( 'Color Options', 'virgo' ),
		),

		array(
			'type' => 'colorpicker',
			'heading' => esc_html__( 'filter color', 'virgo' ),
			'param_name' => 'filtercolor',
			'description' => esc_html__( 'select filter color', 'virgo' ),
			'group' => esc_html__( 'Color Options', 'virgo' ),
		),
		array(
			'type' => 'colorpicker',
			'heading' => esc_html__( 'active filter before point color', 'virgo' ),
			'param_name' => 'filterpointcolor',
			'description' => esc_html__( 'select active filter before point color', 'virgo' ),
			'group' => esc_html__( 'Color Options', 'virgo' ),
		),

		array(
			'type' => 'colorpicker',
			'heading' => esc_html__( 'filter hover color', 'virgo' ),
			'param_name' => 'filterhovercolor',
			'description' => esc_html__( 'select filter hover color', 'virgo' ),
			'group' => esc_html__( 'Color Options', 'virgo' ),
		),

		array(
			'type' => 'colorpicker',
			'heading' => esc_html__( 'work title color', 'virgo' ),
			'param_name' => 'worktitlecolor',
			'description' => esc_html__( 'select work title color', 'virgo' ),
			'group' => esc_html__( 'Color Options', 'virgo' ),
		),


		array(
			'type' => 'colorpicker',
			'heading' => esc_html__( 'work  image mask color', 'virgo' ),
			'param_name' => 'workmaskcolor',
			'description' => esc_html__( 'select image mask color', 'virgo' ),
			'group' => esc_html__( 'Color Options', 'virgo' ),
		),

		array(
			'type' => 'colorpicker',
			'heading' => esc_html__( 'work description color', 'virgo' ),
			'param_name' => 'workdes',
			'description' => esc_html__( 'select image mask color', 'virgo' ),
			'group' => esc_html__( 'Color Options', 'virgo' ),
		),

		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'virgo' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Background options', 'virgo' ),
		),
	)
) );


/*
* Contact
*/

vc_map( array(

	'name' => esc_html__( 'virgo Contact Dark', 'virgo' ),
	'base' => 'virgo_dark_contact',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'virgo', 'virgo' ),
	'description' => esc_html__( '', 'virgo' ),
	'icon' => get_template_directory_uri() . '/icon/message.png', // Simply pass url to your icon here
	'custom_markup' => '{{title}}<div class="vc_btn3-container"><h4 class="team-name"></h4></div>',
	'params' => array(

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'virgo' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
		),

		array(
			'type' => 'textfield',
			'value' => esc_html__( 'Name ', 'virgo' ),
			'heading' => esc_html__( 'Text', 'virgo' ),
			'param_name' => 'field_first',
			'description' => esc_html__( 'insert value by contact form field', 'virgo' )
		),

		array(
			'type' => 'textfield',
			'value' => esc_html__( 'Email ', 'virgo' ),

			'heading' => esc_html__( 'Text', 'virgo' ),
			'param_name' => 'field_second',
			'description' => esc_html__( 'insert value by contact form field', 'virgo' )
		),

		array(
			'type' => 'textfield',
			'value' => esc_html__( 'Message ', 'virgo' ),
			'heading' => esc_html__( 'Text', 'virgo' ),
			'param_name' => 'field_three',
			'description' => esc_html__( 'insert value by contact form field', 'virgo' )
		),

		array(
			'type' => 'textfield',
			'value' => esc_html__( 'Submit ', 'virgo' ),

			'heading' => esc_html__( 'Text', 'virgo' ),
			'param_name' => 'field_fourth',
			'description' => esc_html__( 'insert value by contact form field', 'virgo' )
		),


		array(
			'type' => 'textarea_html',
			'value' => '',
			'virgo',
			'heading' => esc_html__( 'Shortcode', 'virgo' ),
			'param_name' => 'content',
			'description' => esc_html__( 'insert CF7 shortcode', 'virgo' )
		),

		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'virgo' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'virgo' ),
		),


	),


) );

/*
*  About
*/

vc_map( array(
	'name' => esc_html__( 'virgo About Dark', 'virgo' ),
	'base' => 'virgo_about_dark',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'virgo', 'virgo' ),
	'description' => esc_html__( '', 'virgo' ),
	'icon' => get_template_directory_uri() . '/icon/about.png', // Simply pass url to your icon here
	'custom_markup' => '{{title}}<div class="vc_btn3-container"><h4 class="team-name"></h4></div>',
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'virgo' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
		),


		array(
			'type' => 'textfield',
			'holder' => 'div',
			'class' => '',
			'heading' => esc_html__( 'Title', 'virgo' ),
			'param_name' => 'title1',
			'value' => esc_html__( 'We create own history.', 'virgo' ),
			'description' => esc_html__( 'Insert title', 'virgo' ),
		),


		array(
			'type' => 'textarea_html',
			'heading' => esc_html__( 'Text description', 'virgo' ),
			'param_name' => 'content',
			'description' => esc_html__( 'insert text ', 'virgo' ),
			'value' => '',
			'virgo',
		),


		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'virgo' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'virgo' ),
		),

	),

) );


/*
* Partners
*/
vc_map( array(
	'name' => esc_html__( 'virgo Partners Dark', 'virgo' ),
	'base' => 'virgo_partners_dark',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'virgo', 'virgo' ),
	'description' => esc_html__( '', 'virgo' ),
	'icon' => get_template_directory_uri() . '/icon/helping-hand.png', // Simply pass url to your icon here
	'custom_markup' => '{{title}}<div class="vc_btn3-container"><h4 class="team-name"></h4></div>',
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'virgo' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
		),

		array(
			'type' => 'attach_images',
			'heading' => esc_html__( 'Images', 'virgo' ),
			'param_name' => 'images',
			'value' => '',
			'description' => esc_html__( 'Select images from media library.', 'virgo' ),
		),

		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'virgo' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'virgo' ),
		),
	),


) );


/*
*  services
*/
vc_map( array(
	'name' => esc_html__( 'virgo Services Dark', 'virgo' ),
	'base' => 'virgo_services_dark',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'virgo', 'virgo' ),
	'description' => esc_html__( '', 'virgo' ),
	'custom_markup' => '{{title}}<div class="vc_btn3-container"><h4 class="team-name"></h4></div>',
	'icon' => get_template_directory_uri() . '/icon/logout-rounded.png', // Simply pass url to your icon here
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'virgo' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
		),


		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => esc_html__( 'Text header', 'virgo' ),
			'param_name' => 't',
			'value' => 'Services',
			'description' => esc_html__( 'insert text', 'virgo' )
		),

		array(
			'type' => 'textarea',
			'class' => '',
			'heading' => esc_html__( 'Description', 'virgo' ),
			'param_name' => 'd',
			'value' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 'virgo' ),
			'description' => esc_html__( 'insert text', 'virgo' )
		),


		array(
			'type' => 'param_group',
			'heading' => esc_html__( 'Services item', 'virgo' ),
			'param_name' => 'items',
			'group' => esc_html__( 'Item values', 'virgo' ),
			'params' => array(


				array(
					'type' => 'iconpicker',
					'heading' => esc_html__( 'The icons 1 ', 'virgo' ),
					'param_name' => 'icon',
					'value' => '',
					'description' => esc_html__( 'insert icon', 'virgo' ),
					'settings' => array(
						'emptyIcon' => false,
						'iconsPerPage' => 4000,
					)
				),
				array(
					'type' => 'textfield',
					'holder' => 'div',
					'class' => '',
					'heading' => esc_html__( 'Title', 'virgo' ),
					'param_name' => 'ts',
					'value' => esc_html__( 'Bootstrap 3x', 'virgo' ),
					'description' => esc_html__( 'insert text', 'virgo' )
				),
				array(
					'type' => 'textarea',
					'holder' => 'div',
					'class' => '',
					'heading' => esc_html__( 'Description', 'virgo' ),
					'param_name' => 'ds',
					'value' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'virgo' ),
					'description' => esc_html__( 'insert text', 'virgo' )
				),


			),

		),
		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'virgo' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'virgo' ),
		),
	),

) );


/*
* Contact
*/

vc_map( array(

	'name' => esc_html__( 'virgo Contact Dark', 'virgo' ),
	'base' => 'virgo_address_item_dark',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'virgo', 'virgo' ),
	'description' => esc_html__( '', 'virgo' ),
	'icon' => get_template_directory_uri() . '/icon/message.png', // Simply pass url to your icon here
	'custom_markup' => '{{title}}<div class="vc_btn3-container"><h4 class="team-name"></h4></div>',
	'params' => array(

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'virgo' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
		),

		array(
			'type' => 'textfield',
			'value' => esc_html__( 'Name ', 'virgo' ),
			'heading' => esc_html__( 'Text', 'virgo' ),
			'param_name' => 'field_first',
			'description' => esc_html__( 'insert value by contact form field', 'virgo' )
		),

		array(
			'type' => 'textfield',
			'value' => esc_html__( 'Email ', 'virgo' ),

			'heading' => esc_html__( 'Text', 'virgo' ),
			'param_name' => 'field_second',
			'description' => esc_html__( 'insert value by contact form field', 'virgo' )
		),

		array(
			'type' => 'textfield',
			'value' => esc_html__( 'Message ', 'virgo' ),
			'heading' => esc_html__( 'Text', 'virgo' ),
			'param_name' => 'field_three',
			'description' => esc_html__( 'insert value by contact form field', 'virgo' )
		),

		array(
			'type' => 'textfield',
			'value' => esc_html__( 'Submit ', 'virgo' ),
			'heading' => esc_html__( 'Text', 'virgo' ),
			'param_name' => 'field_fourth',
			'description' => esc_html__( 'insert value by contact form field', 'virgo' )
		),


		array(
			'type' => 'textarea_html',
			'value' => '',
			'virgo',
			'heading' => esc_html__( 'Shortcode', 'virgo' ),
			'param_name' => 'content',
			'description' => esc_html__( 'insert CF7 shortcode', 'virgo' )
		),

		array(
			'type' => 'dropdown',
			'heading' => esc_html__( 'Contact map visibility', 'virgo' ),
			'param_name' => 'map_visibility',
			'description' => esc_html__( 'Show or hide map', 'virgo' ),
			'value' => array(
				esc_html__( 'Show', 'virgo' ) => '1',
				esc_html__( 'Hide', 'virgo' ) => '2',
			),
			'group' => esc_html__( 'Map', 'virgo' ),
		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Map marker text', 'virgo' ),
			'param_name' => 'map_text',
			'value' => '',
			'description' => esc_html__( 'Add your map marker text', 'virgo' ),
			'group' => esc_html__( 'Map', 'virgo' ),
		),

		array(
			'type' => 'textfield',
			'holder' => 'div',
			'heading' => esc_html__( 'insert url ', 'virgo' ),
			'param_name' => 'url',
			'description' => esc_html__( 'url ', 'virgo' ),
			'group' => esc_html__( 'Map', 'virgo' ),

		),
		array(
			'type' => 'textfield',
			'holder' => 'div',
			'heading' => esc_html__( 'insert text url ', 'virgo' ),
			'param_name' => 'url_t',
			'description' => esc_html__( ' text url  ', 'virgo' ),
			'group' => esc_html__( 'Map', 'virgo' ),

		),
		/*************************/

		array(
			'type' => 'textfield',
			'holder' => 'div',
			'heading' => esc_html__( 'insert lat coordinates ', 'virgo' ),
			'param_name' => 'lat',
			'description' => esc_html__( 'insert lat for example -45.200 ', 'virgo' ),
			'value' => esc_html__( '-45.200', 'virgo' ),
			'group' => esc_html__( 'Map', 'virgo' ),
		),
		array(
			'type' => 'textfield',
			'holder' => 'div',
			'heading' => esc_html__( 'insert lng coordinates ', 'virgo' ),
			'param_name' => 'lng',
			'description' => esc_html__( 'insert lng for example -72.4310 ', 'virgo' ),
			'value' => esc_html__( '-72.4310', 'virgo' ),
			'group' => esc_html__( 'Map', 'virgo' ),
		),
		array(
			'type' => 'textfield',
			'holder' => 'div',
			'heading' => esc_html__( 'insert zooms ', 'virgo' ),
			'param_name' => 'zoom',
			'description' => esc_html__( 'insert zoom for example 8', 'virgo' ),
			'value' => 8,
			'group' => esc_html__( 'Map', 'virgo' ),
		),


		/******************/
		array(
			'type' => 'param_group',
			'holder' => 'div',
			'heading' => esc_html__( 'Map info values', 'virgo' ),
			'param_name' => 'map_items',
			'group' => esc_html__( 'Map', 'virgo' ),
			'params' => array(
				array(
					'type' => 'iconpicker',
					'heading' => esc_html__( 'The icons', 'virgo' ),
					'param_name' => 'icon',
					'value' => '',
					'description' => esc_html__( 'insert icon', 'virgo' ),
					'settings' => array(
						'emptyIcon' => false,
						'iconsPerPage' => 4000,
					)

				),
				array(
					'type' => 'textfield',
					'heading' => esc_html__( 'Description ', 'virgo' ),
					'param_name' => 'description',
					'description' => esc_html__( 'insert text', 'virgo' ),

				),

			),
		),


		/******************/

		array(
			'type' => 'param_group',
			'holder' => 'div',
			'heading' => esc_html__( 'Items values', 'virgo' ),
			'group' => esc_html__( 'Contact items', 'virgo' ),
			'param_name' => 'items',
			'params' => array(
				array(
					'type' => 'iconpicker',
					'heading' => esc_html__( 'The icons', 'virgo' ),
					'param_name' => 'icon',
					'value' => 'fa-rss',
					'description' => esc_html__( 'insert icon', 'virgo' ),
					'settings' => array(
						'emptyIcon' => false,
						'iconsPerPage' => 4000,
					)

				),
				array(
					'type' => 'textfield',
					'heading' => esc_html__( 'Title ', 'virgo' ),
					'param_name' => 't',
					'description' => esc_html__( 'insert text', 'virgo' ),

				),
				array(
					'type' => 'textarea',
					'heading' => esc_html__( 'Description ', 'virgo' ),
					'param_name' => 'content',
					'description' => 'insert text',
					'virgo',

				),

			),
		),

		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'virgo' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'virgo' ),
		),


	),


) );


/*   Freelance Light   */

/*
* freelance light
*/
vc_map( array(
	'name' => esc_html__( 'virgo freelance light header', 'virgo' ),
	'base' => 'virgo_light_header',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'virgo', 'virgo' ),
	'description' => esc_html__( '', 'virgo' ),
	'icon' => get_template_directory_uri() . '/icon/add-image.png', // Simply pass url to your icon here


	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'virgo' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
		),

		array(
			"type" => "textarea_html",
			"holder" => "div",
			"class" => "",
			"heading" => __( "Title", "virgo" ),
			"param_name" => "content",
			"value" => __( "", "virgo" ),
			"description" => __( "Enter your title.", "virgo" )
		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Scroll text', 'virgo' ),
			'param_name' => 'scroll_text',
			'value' => 'scroll down',
			'description' => esc_html__( 'insert text ', 'virgo' ),
			'group' => esc_html__( 'Scroll options', 'virgo' ),

		),


		array(
			'type' => 'attach_image',
			'heading' => esc_html__( 'Icon scroll', 'virgo' ),
			'param_name' => 'images',
			'description' => esc_html__( 'Select images from media library.', 'virgo' ),
			'group' => esc_html__( 'Scroll options', 'virgo' ),
		),


		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'virgo' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'virgo' ),
		),

	)


) );


/*
 * Portfolio dark
 */
vc_map( array(
		'name' => esc_html__( 'virgo portfolio new dark', 'virgo' ),
		'base' => 'virgo_portfolio_new_dark_update',
		'show_settings_on_create' => true,
		'icon' => plugins_url( '/icon/dossier.png', __FILE__ ),
		// Simply pass url to your icon here
		'category' => esc_html__( 'virgo', 'virgo' ),
		"as_parent" => array( 'only' => 'virgo_accordion_item' ),
		// Use only|except attributes to limit child shortcodes (separate multiple values with comma)
		"content_element" => true,
		'params' => array(
			array(
				'type' => 'dropdown',
				'heading' => esc_html__( 'Menu visibility', 'virgo' ),
				'param_name' => 'menu_visibility',
				'description' => esc_html__( 'Show or hide menu', 'virgo' ),
				'value' => array(
					esc_html__( 'Show', 'virgo' ) => '1',
					esc_html__( 'Hide', 'virgo' ) => '2',
				),
			),

			array(
				'type' => 'dropdown',
				'class' => '',
				'heading' => esc_html__( 'Filter class', 'virgo' ),
				'param_name' => 'filter',
				'value' => array(
					esc_html__( 'none', 'virgo' ) => '',
					esc_html__( ' filter-top', 'virgo' ) => ' filter filter-top ',


				),

			),
			array(
				'type' => 'dropdown',
				'class' => '',
				'heading' => esc_html__( 'Class', 'virgo' ),
				'param_name' => 'class',
				'description' => esc_html__( 'Class that sets the top and bottom margins', 'virgo' ),
				'value' => array(
					esc_html__( 'none', 'virgo' ) => '',
					esc_html__( 'section ', 'virgo' ) => ' section  ',
				),
			),
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Heading', 'virgo' ),
				'param_name' => 'heading',
				'description' => esc_html__( 'Add Your Heading', 'virgo' ),
				'value' => esc_html__( 'Recent works', 'virgo' ),
			),

			array(
				'type' => 'dropdown',
				'class' => '',
				'heading' => esc_html__( 'Portfolio view', 'virgo' ),
				'param_name' => 'col',
				'value' => array(
					esc_html__( 'none', 'virgo' ) => '',
					esc_html__( 'padding ', 'virgo' ) => ' isotope-padding ',
					esc_html__( 'col-3 ', 'virgo' ) => 'col-3 isotope-padding ',
					esc_html__( 'col-2 ', 'virgo' ) => 'col-2 ',


				),
			),

			array(
				'type' => 'param_group',
				'heading' => esc_html__( 'Portfolio item', 'virgo' ),
				'group' => esc_html__( 'Portfolio items', 'virgo' ),
				'param_name' => 'items',
				'params' => array(
					array(
						'type' => 'textfield',
						'class' => '',
						'heading' => esc_html__( 'Category', 'virgo' ),
						'param_name' => 'cat',
						'description' => esc_html__( 'Insert category', 'virgo' )
					),

					array(
						'type' => 'textfield',
						'class' => '',
						'heading' => esc_html__( 'Category slug', 'virgo' ),
						'param_name' => 'slug',
						'description' => esc_html__( 'Insert category slug', 'virgo' )
					),


					array(
						'type' => 'textfield',
						'class' => '',
						'heading' => esc_html__( 'Title', 'virgo' ),
						'param_name' => 'title',
						'description' => esc_html__( 'Insert title', 'virgo' )
					),

					array(
						'type' => 'param_group',
						'heading' => esc_html__( 'Image item', 'virgo' ),
						'group' => esc_html__( 'Image items', 'virgo' ),
						'param_name' => 'image_items',
						'params' => array(

							array(
								'type' => 'attach_image',
								'heading' => esc_html__( 'Image', 'virgo' ),
								"holder" => "img",
								'param_name' => 'img_src',
								'description' => esc_html__( 'Select images from media library.', 'virgo' ),
							),

							array(
								'type' => 'dropdown',
								'class' => '',
								'heading' => esc_html__( 'Image size', 'virgo' ),
								'param_name' => 'size',
								'value' => array(
									esc_html__( 'normal', 'virgo' ) => '',
									esc_html__( 'big ', 'virgo' ) => ' w66 ',


								),

							),


						),

					),

				),

			),
			array(
				'type' => 'css_editor',
				'heading' => esc_html__( 'Css', 'virgo' ),
				'param_name' => 'css',
				'group' => esc_html__( 'Design options', 'virgo' ),
			),
		),


	)
);


/*  AGENCY FEATURES */


/*
* Agency features
*/
vc_map( array(
	'name' => esc_html__( 'virgo agency features', 'virgo' ),
	'base' => 'virgo_agency_features',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'virgo', 'virgo' ),
	'description' => esc_html__( '', 'virgo' ),
	'custom_markup' => '{{title}}<div class="vc_btn3-container"><h4 class="team-name"></h4></div>',
	'icon' => get_template_directory_uri() . '/icon/mind.png', // Simply pass url to your icon here
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'virgo' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
		),


		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => esc_html__( 'Text header', 'virgo' ),
			'param_name' => 't',
			'value' => 'Services',
			'description' => esc_html__( 'insert text', 'virgo' )
		),


		array(
			'type' => 'param_group',
			'heading' => esc_html__( 'Features item', 'virgo' ),
			'param_name' => 'items',
			'group' => esc_html__( 'Item values', 'virgo' ),
			'params' => array(


				array(
					'type' => 'iconpicker',
					'heading' => esc_html__( 'The icons 1 ', 'virgo' ),
					'param_name' => 'icon',
					'value' => '',
					'description' => esc_html__( 'insert icon', 'virgo' ),
					'settings' => array(
						'emptyIcon' => false,
						'iconsPerPage' => 4000,
					)
				),
				array(
					'type' => 'textfield',
					'holder' => 'div',
					'class' => '',
					'heading' => esc_html__( 'Title', 'virgo' ),
					'param_name' => 'ts',
					'value' => esc_html__( 'WEB DESIGN', 'virgo' ),
					'description' => esc_html__( 'insert text', 'virgo' )
				),
				array(
					'type' => 'textarea',
					'holder' => 'div',
					'class' => '',
					'heading' => esc_html__( 'Description', 'virgo' ),
					'param_name' => 'ds',
					'value' => esc_html__( 'Ever wondered how some graphic designers always manage to produce beautiful looking designs for their brochures, website designs.', 'virgo' ),
					'description' => esc_html__( 'insert text', 'virgo' )
				),


			),

		),


		array(
			'type' => 'param_group',
			'heading' => esc_html__( 'Banner item', 'virgo' ),
			'param_name' => 'banner',
			'group' => esc_html__( 'Banner values', 'virgo' ),
			'params' => array(

				array(
					'type' => 'attach_image',
					'heading' => esc_html__( 'Image', 'virgo' ),
					'param_name' => 'image',
					'description' => esc_html__( 'Select images from media library.', 'virgo' ),
				),

				array(
					'type' => 'textfield',
					'class' => '',
					'heading' => esc_html__( 'Title', 'virgo' ),
					'param_name' => 'title',
					'value' => esc_html__( 'We are always<br> looking for talents!', 'virgo' ),

					'description' => esc_html__( 'insert text', 'virgo' )
				),

				array(
					'type' => 'textfield',
					'class' => '',
					'heading' => esc_html__( 'Text button', 'virgo' ),
					'param_name' => 'tb',
					'value' => esc_html__( 'Let\'s talk', 'virgo' ),
					'description' => esc_html__( 'insert text', 'virgo' )
				),

				array(
					'type' => 'textfield',
					'class' => '',
					'heading' => esc_html__( 'Text url', 'virgo' ),
					'param_name' => 't_url',
					'value' => esc_html__( '#request', 'virgo' ),
					'description' => esc_html__( 'insert url', 'virgo' )
				),

			),

		),


		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'virgo' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'virgo' ),
		),
	),

) );


/*
*  About agency
*/

vc_map( array(
	'name' => esc_html__( 'virgo About Agency', 'virgo' ),
	'base' => 'virgo_about_agency',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'virgo', 'virgo' ),
	'description' => esc_html__( '', 'virgo' ),
	'icon' => get_template_directory_uri() . '/icon/about.png', // Simply pass url to your icon here
	'custom_markup' => '{{title}}<div class="vc_btn3-container"><h4 class="team-name"></h4></div>',
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'virgo' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
		),

		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => esc_html__( 'Description first', 'virgo' ),
			'param_name' => 'desc1',
			'value' => esc_html__( 'We are  —', 'virgo' ),

			'description' => esc_html__( 'insert text', 'virgo' )
		),
		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => esc_html__( 'Description background', 'virgo' ),
			'param_name' => 'descBg',
			'value' => esc_html__( 'We are', 'virgo' ),

			'description' => esc_html__( 'insert text', 'virgo' )
		),

		array(
			"type" => "textarea_html",
			"holder" => "div",
			"class" => "",
			"heading" => __( "Content", "virgo" ),
			"param_name" => "content",
			"value" => __( "First-class digital, strategy, <br > product design agency.", "virgo" ),
			"description" => __( "Enter your content.", "virgo" )
		),
		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => esc_html__( 'Description third ', 'virgo' ),
			'param_name' => 'desc3',
			'value' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi', 'virgo' ),

			'description' => esc_html__( 'insert text', 'virgo' )
		),

		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => esc_html__( 'Description fourth ', 'virgo' ),
			'param_name' => 'desc4',
			'value' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat', 'virgo' ),

			'description' => esc_html__( 'insert text', 'virgo' )
		),


		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'virgo' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'virgo' ),
		),

	),

) );


/*
*  Statisticts
*/

vc_map( array(
	'name' => esc_html__( 'virgo Statisticts', 'virgo' ),
	'base' => 'virgo_statistics',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'virgo', 'virgo' ),
	'description' => esc_html__( '', 'virgo' ),
	'icon' => get_template_directory_uri() . '/icon/about.png', // Simply pass url to your icon here
	'custom_markup' => '{{title}}<div class="vc_btn3-container"><h4 class="team-name"></h4></div>',
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'virgo' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
		),


		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => esc_html__( 'Title', 'virgo' ),
			'param_name' => 'title1',
			'value' => esc_html__( 'Meet Virgo', 'virgo' ),
			'description' => esc_html__( 'Insert title', 'virgo' ),
		),

		array(
			'type' => 'dropdown',
			'class' => '',
			'heading' => esc_html__( 'bg style', 'virgo' ),
			'param_name' => 'class',
			'value' => array(
				esc_html__( 'bg light', 'virgo' ) => '1',
				esc_html__( 'none', 'virgo' ) => '2',


			),

		),


		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Text description', 'virgo' ),
			'param_name' => 'description',
			'description' => esc_html__( 'insert text ', 'virgo' ),
			'value' => esc_html__( 'Look at our projects. We presented just a part of works. Our team of experts has competences of different branches and specializations.', 'virgo' ),
		),


		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Text description second', 'virgo' ),
			'param_name' => 'desc',
			'description' => esc_html__( 'insert text ', 'virgo' ),
			'value' => esc_html__( 'We love what we do, and we strive to provide the best services for our clients. The aim is to become part of your team, and with the help of our developers and designers create meaningful digital experiences.', 'virgo' ),
		),


		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Button text', 'virgo' ),
			'param_name' => 't_btn',
			'description' => esc_html__( 'insert text ', 'virgo' ),
			'value' => esc_html__( 'Get virgo', 'virgo' ),
		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Button url', 'virgo' ),
			'param_name' => 'b_url',
			'description' => esc_html__( 'insert url ', 'virgo' ),
			'value' => esc_html__( '#request', 'virgo' ),
		),


		array(
			'type' => 'param_group',
			'holder' => 'div',
			'heading' => esc_html__( 'Chart  value', 'virgo' ),
			'param_name' => 'items',
			'group' => esc_html__( 'Charts  items', 'virgo' ),
			'params' => array(


				array(
					'type' => 'textfield',
					'holder' => 'div',
					'class' => '',
					'heading' => esc_html__( 'chart title', 'virgo' ),
					'param_name' => 'title',
					'value' => '',
					'description' => esc_html__( 'insert text  ( example DESIGN )', 'virgo' )
				),

				array(
					'type' => 'textfield',
					'holder' => 'div',
					'class' => '',
					'heading' => esc_html__( 'chart number', 'virgo' ),
					'param_name' => 'number',
					'value' => '',
					'description' => esc_html__( 'insert number ( example 80 )', 'virgo' )
				),


			),
		),
		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'virgo' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'virgo' ),
		),

	),

) );


/*
 * Portfolio agency
 */
vc_map( array(
		'name' => esc_html__( 'virgo portfolio agency', 'virgo' ),
		'base' => 'virgo_portfolio_agency',
		'show_settings_on_create' => true,
		'icon' => plugins_url( '/icon/dossier.png', __FILE__ ),
		// Simply pass url to your icon here
		'category' => esc_html__( 'virgo', 'virgo' ),
		"as_parent" => array( 'only' => 'virgo_accordion_item' ),
		// Use only|except attributes to limit child shortcodes (separate multiple values with comma)
		"content_element" => true,
		'params' => array(

			array(
				'type' => 'dropdown',
				'class' => '',
				'heading' => esc_html__( 'Filter class', 'virgo' ),
				'param_name' => 'filter',
				'value' => array(
					esc_html__( 'none', 'virgo' ) => '',
					esc_html__( ' filter-top', 'virgo' ) => ' filter filter-top ',


				),

			),
			array(
				'type' => 'dropdown',
				'class' => '',
				'heading' => esc_html__( 'Class', 'virgo' ),
				'param_name' => 'class',
				'description' => esc_html__( 'Class that sets the top and bottom margins', 'virgo' ),
				'value' => array(
					esc_html__( 'none', 'virgo' ) => '',
					esc_html__( 'section ', 'virgo' ) => ' section  ',
				),
			),
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Heading', 'virgo' ),
				'param_name' => 'heading',
				'description' => esc_html__( 'Add Your Heading', 'virgo' ),
				'value' => esc_html__( 'Look what we do best.', 'virgo' ),
			),

			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Description', 'virgo' ),
				'param_name' => 'desc',
				'description' => esc_html__( 'Add Your description', 'virgo' ),
				'value' => esc_html__( 'Look at our projects. We presented just a part of works. Our team of experts has competences of different branches and specializations.', 'virgo' ),
			),


			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Button text', 'virgo' ),
				'param_name' => 't_btn',
				'description' => esc_html__( 'insert text ', 'virgo' ),
				'value' => esc_html__( 'See all projects', 'virgo' ),
			),

			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Button url', 'virgo' ),
				'param_name' => 'b_url',
				'description' => esc_html__( 'insert url ', 'virgo' ),
				'value' => esc_html__( '#', 'virgo' ),
			),

			array(
				'type' => 'dropdown',
				'class' => '',
				'heading' => esc_html__( 'Portfolio view', 'virgo' ),
				'param_name' => 'col',
				'value' => array(
					esc_html__( 'none', 'virgo' ) => '',
					esc_html__( 'padding ', 'virgo' ) => ' isotope-padding ',
					esc_html__( 'col-3 ', 'virgo' ) => 'col-3 isotope-padding ',
					esc_html__( 'col-2 ', 'virgo' ) => 'col-2 ',


				),
			),

			array(
				'type' => 'param_group',
				'heading' => esc_html__( 'Portfolio item', 'virgo' ),
				'group' => esc_html__( 'Portfolio items', 'virgo' ),
				'param_name' => 'items',
				'params' => array(
					array(
						'type' => 'textfield',
						'class' => '',
						'heading' => esc_html__( 'Category', 'virgo' ),
						'param_name' => 'cat',
						'description' => esc_html__( 'Insert category', 'virgo' )
					),

					array(
						'type' => 'textfield',
						'class' => '',
						'heading' => esc_html__( 'Category slug', 'virgo' ),
						'param_name' => 'slug',
						'description' => esc_html__( 'Insert category slug', 'virgo' )
					),


					array(
						'type' => 'textfield',
						'class' => '',
						'heading' => esc_html__( 'Title', 'virgo' ),
						'param_name' => 'title',
						'description' => esc_html__( 'Insert title', 'virgo' )
					),

					array(
						'type' => 'param_group',
						'heading' => esc_html__( 'Image item', 'virgo' ),
						'group' => esc_html__( 'Image items', 'virgo' ),
						'param_name' => 'image_items',
						'params' => array(

							array(
								'type' => 'attach_image',
								'heading' => esc_html__( 'Image', 'virgo' ),
								"holder" => "img",
								'param_name' => 'img_src',
								'description' => esc_html__( 'Select images from media library.', 'virgo' ),
							),

							array(
								'type' => 'dropdown',
								'class' => '',
								'heading' => esc_html__( 'Image size', 'virgo' ),
								'param_name' => 'size',
								'value' => array(
									esc_html__( 'normal', 'virgo' ) => '',
									esc_html__( 'big ', 'virgo' ) => ' w2 ',


								),

							),


						),

					),

				),

			),
			array(
				'type' => 'css_editor',
				'heading' => esc_html__( 'Css', 'virgo' ),
				'param_name' => 'css',
				'group' => esc_html__( 'Design options', 'virgo' ),
			),
		),


	)
);


/*
*  Upcoming events
*/
vc_map( array(
	'name' => esc_html__( 'virgo Upcoming events', 'virgo' ),
	'base' => 'virgo_events',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'virgo', 'virgo' ),
	'description' => esc_html__( '', 'virgo' ),
	'icon' => get_template_directory_uri() . '/icon/banner.png', // Simply pass url to your icon here
	'params' => array(

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'virgo' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
		),


		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => esc_html__( 'Title', 'virgo' ),
			'param_name' => 'title',
			'value' => esc_html__( 'Upcoming events', 'virgo' ),

			'description' => esc_html__( 'insert title', 'virgo' )
		),

		array(
			'type' => 'param_group',
			'heading' => esc_html__( 'Portfolio item', 'virgo' ),
			'group' => esc_html__( 'Portfolio items', 'virgo' ),
			'param_name' => 'items',
			'params' => array(

				array(
					'type' => 'textfield',
					'class' => '',
					'heading' => esc_html__( 'Event title', 'virgo' ),
					'param_name' => 'e_title',
					'value' => esc_html__( 'Upcoming events', 'virgo' ),

					'description' => esc_html__( 'insert text', 'virgo' )
				),

				array(
					'type' => 'textfield',
					'class' => '',
					'heading' => esc_html__( 'Date', 'virgo' ),
					'param_name' => 'date',
					'value' => esc_html__( 'Upcoming date', 'virgo' ),
					'description' => esc_html__( 'insert text', 'virgo' )
				),

				array(
					'type' => 'textfield',
					'class' => '',
					'heading' => esc_html__( 'Insert Url', 'virgo' ),
					'param_name' => 'url',
					'value' => esc_html__( '#', 'virgo' ),
					'description' => esc_html__( 'insert url', 'virgo' )
				),


				array(
					'type' => 'dropdown',
					'param_name' => 'class',
					'value' => array(
						esc_html__( 'Violet', 'virgo' ) => 'bg-violet',
						esc_html__( 'Dark blue', 'virgo' ) => 'bg-dark-blue',
						esc_html__( 'Yellow', 'virgo' ) => 'bg-yellow',
					),
					'std' => '',
					'heading' => esc_html__( 'display style ', 'virgo' ),
					'description' => esc_html__( 'Select display style.', 'virgo' ),
				),


			),

		),

		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'virgo' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'virgo' ),
		),

	),

) );


/*
*  banner
*/
vc_map( array(
	'name' => esc_html__( 'virgo Banner Agency', 'virgo' ),
	'base' => 'virgo_banner_agency',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'virgo', 'virgo' ),
	'description' => esc_html__( '', 'virgo' ),
	'icon' => get_template_directory_uri() . '/icon/banner.png', // Simply pass url to your icon here
	'params' => array(

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'virgo' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
		),


		array(
			'type' => 'attach_image',
			'heading' => esc_html__( 'Image', 'virgo' ),
			'param_name' => 'image',
			'description' => esc_html__( 'Select images from media library.', 'virgo' ),
		),

		array(
			"type" => "textarea_html",
			"holder" => "div",
			"class" => "",
			"heading" => __( "Title", "virgo" ),
			"param_name" => "content",
			"value" => __( "We are always <br > looking for talents!", "virgo" ),
			"description" => __( "Enter your title.", "virgo" )
		),


		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => esc_html__( 'Title main', 'virgo' ),
			'param_name' => 'title_main',
			'value' => esc_html__( 'Banners', 'virgo' ),

			'description' => esc_html__( 'insert text', 'virgo' )
		),

		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => esc_html__( 'Text button', 'virgo' ),
			'param_name' => 'tb',
			'value' => esc_html__( 'Let\'s talk', 'virgo' ),
			'description' => esc_html__( 'insert text', 'virgo' )
		),


		array(
			'type' => 'dropdown',
			'param_name' => 'class',
			'value' => array(
				esc_html__( 'Dark blue', 'virgo' ) => 'banner-dark-blue',
				esc_html__( 'Blue', 'virgo' ) => 'banner-blue',
			),
			'std' => '',
			'heading' => esc_html__( 'display style ', 'virgo' ),
			'description' => esc_html__( 'Select display style.', 'virgo' ),
		),


		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => esc_html__( 'Text url', 'virgo' ),
			'param_name' => 't_url',
			'value' => esc_html__( '#request', 'virgo' ),
			'description' => esc_html__( 'insert url', 'virgo' )
		),

	),

) );


/**
 * virgo_blog_recent
 */
vc_map( array(
	'name' => esc_html__( 'Virgo Blog recent posts', 'virgo' ),
	'base' => 'virgo_blog_recent',
	'icon' => plugins_url( '/icon/dossier.png', __FILE__ ), // Simply pass url to your icon here
	'category' => esc_html__( 'virgo', 'virgo' ),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'virgo' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
		),


		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Title', 'virgo' ),
			'param_name' => 'heading',
			'value' => esc_html__( 'Latest from blog.', 'virgo' ),
			'description' => esc_html__( 'Add Your Title', 'virgo' ),
		),

		array(
			'type' => 'dropdown',
			'param_name' => 'type_m',
			'value' => array(
				esc_html__( 'Blog block padding bottom none', 'virgo' ) => '1',
				esc_html__( 'Blog block padding top none', 'virgo' ) => '2',
				esc_html__( 'padding', 'virgo' ) => '3',

			),
			'std' => '1',
			'heading' => esc_html__( 'Select style', 'virgo' ),
			'description' => esc_html__( 'Select display style.', 'virgo' ),


		),


		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Post Count', 'virgo' ),
			'param_name' => 'posts',
			'description' => esc_html__( 'You can control with number your blog posts', 'virgo' ),
		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'order', 'virgo' ),
			'param_name' => 'order',
			'description' => esc_html__( 'Enter post item order. DESC or ASC', 'virgo' ),
		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'orderby', 'virgo' ),
			'param_name' => 'orderby',
			'description' => esc_html__( 'Enter post orderby. Default is : date', 'virgo' ),
		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Category', 'virgo' ),
			'param_name' => 'portfolio_category',
			'description' => esc_html__( 'Enter Portfolio category or write all', 'virgo' ),
		),

		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'virgo' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Background options', 'virgo' ),
		),
	)
) );


/*  Shortcodes   */


/*
* virgo_contact_header
*/
vc_map( array(
	'name' => esc_html__( 'virgo shortcode - Tags', 'virgo' ),
	'base' => 'virgo_shortcode_tags',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'virgo', 'virgo' ),
	'description' => esc_html__( '', 'virgo' ),
	'icon' => get_template_directory_uri() . '/icon/add-image.png', // Simply pass url to your icon here


	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'virgo' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
		),

		array(
			'type' => 'textarea_html',
			'heading' => esc_html__( 'Tags styles', 'virgo' ),
			'param_name' => 'content',
			'description' => esc_html__( 'insert tags ', 'virgo' ),
			'value' => esc_html__( '', 'virgo' ),
		),

		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'virgo' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'virgo' ),
		),

	)


) );


/*
* virgo_shortcode_buttons
*/
vc_map( array(
	'name' => esc_html__( 'virgo shortcode - Buttons', 'virgo' ),
	'base' => 'virgo_shortcode_buttons',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'virgo', 'virgo' ),
	'description' => esc_html__( '', 'virgo' ),
	'icon' => get_template_directory_uri() . '/icon/add-image.png', // Simply pass url to your icon here


	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'virgo' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Text title', 'virgo' ),
			'param_name' => 'title',
			'description' => esc_html__( 'insert text ', 'virgo' ),
			'value' => 'Button',
			'virgo',
		),

		array(
			'type' => 'textarea_html',
			'heading' => esc_html__( 'Button styles', 'virgo' ),
			'param_name' => 'content',
			'description' => esc_html__( 'insert button ', 'virgo' ),
			'value' => esc_html__( '', 'virgo' ),
		),

		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'virgo' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'virgo' ),
		),

	)


) );


/**
 * virgo_blog_recent_rows
 */
vc_map( array(
	'name' => esc_html__( 'Virgo Blog recent posts rows', 'virgo' ),
	'base' => 'virgo_blog_recent_rows',
	'icon' => plugins_url( '/icon/dossier.png', __FILE__ ), // Simply pass url to your icon here
	'category' => esc_html__( 'virgo', 'virgo' ),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'virgo' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
		),


		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Title', 'virgo' ),
			'param_name' => 'heading',
			'value' => esc_html__( 'Blog rows', 'virgo' ),
			'description' => esc_html__( 'Add Your Title', 'virgo' ),
		),


		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Post Count', 'virgo' ),
			'param_name' => 'posts',
			'description' => esc_html__( 'You can control with number your blog posts', 'virgo' ),
		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'order', 'virgo' ),
			'param_name' => 'order',
			'description' => esc_html__( 'Enter post item order. DESC or ASC', 'virgo' ),
		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'orderby', 'virgo' ),
			'param_name' => 'orderby',
			'description' => esc_html__( 'Enter post orderby. Default is : date', 'virgo' ),
		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Category', 'virgo' ),
			'param_name' => 'portfolio_category',
			'description' => esc_html__( 'Enter category slug (example blog)', 'virgo' ),
		),

		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'virgo' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Background options', 'virgo' ),
		),
	)
) );


/*
*  Statisticts shortcodes
*/

vc_map( array(
	'name' => esc_html__( 'virgo Statisticts shortcodes', 'virgo' ),
	'base' => 'virgo_statistics_shortcodes',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'virgo', 'virgo' ),
	'description' => esc_html__( '', 'virgo' ),
	'icon' => get_template_directory_uri() . '/icon/about.png', // Simply pass url to your icon here
	'custom_markup' => '{{title}}<div class="vc_btn3-container"><h4 class="team-name"></h4></div>',
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'virgo' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
		),


		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => esc_html__( 'Title', 'virgo' ),
			'param_name' => 'title1',
			'value' => esc_html__( 'Statistics white', 'virgo' ),
			'description' => esc_html__( 'Insert title', 'virgo' ),
		),

		array(
			'type' => 'dropdown',
			'param_name' => 'class',
			'value' => array(
				esc_html__( 'White', 'virgo' ) => '',
				esc_html__( 'Dark', 'virgo' ) => 'dark bg-dark',
			),
			'std' => '',
			'heading' => esc_html__( 'display style ', 'virgo' ),
			'description' => esc_html__( 'Select display style.', 'virgo' ),
		),


		array(
			'type' => 'param_group',
			'holder' => 'div',
			'heading' => esc_html__( 'Chart  value', 'virgo' ),
			'param_name' => 'items',
			'group' => esc_html__( 'Charts  items', 'virgo' ),
			'params' => array(


				array(
					'type' => 'textfield',
					'holder' => 'div',
					'class' => '',
					'heading' => esc_html__( 'chart title', 'virgo' ),
					'param_name' => 'title',
					'value' => '',
					'description' => esc_html__( 'insert text  ( example DESIGN )', 'virgo' )
				),

				array(
					'type' => 'textfield',
					'holder' => 'div',
					'class' => '',
					'heading' => esc_html__( 'chart number', 'virgo' ),
					'param_name' => 'number',
					'value' => '',
					'description' => esc_html__( 'insert number ( example 80 )', 'virgo' )
				),


			),
		),
		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'virgo' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'virgo' ),
		),

	),

) );


/*
*  Statisticts shortcodes
*/

vc_map( array(
	'name' => esc_html__( 'virgo Shortcodes Title section', 'virgo' ),
	'base' => 'virgo_shortcodes_title',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'virgo', 'virgo' ),
	'description' => esc_html__( '', 'virgo' ),
	'icon' => get_template_directory_uri() . '/icon/about.png', // Simply pass url to your icon here
	'custom_markup' => '{{title}}<div class="vc_btn3-container"><h4 class="team-name"></h4></div>',
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'virgo' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
		),


		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => esc_html__( 'Title', 'virgo' ),
			'param_name' => 'title',
			'value' => esc_html__( 'Section  title', 'virgo' ),
			'description' => esc_html__( 'Insert title', 'virgo' ),
		),

		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'virgo' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'virgo' ),
		),

	),

) );


/*
*  Statisticts shortcodes
*/

vc_map( array(
	'name' => esc_html__( 'virgo Shortcodes show Footer light', 'virgo' ),
	'base' => 'virgo_shortcodes_footer',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'virgo', 'virgo' ),
	'description' => esc_html__( '', 'virgo' ),
	'icon' => get_template_directory_uri() . '/icon/about.png', // Simply pass url to your icon here
	'custom_markup' => '{{title}}<div class="vc_btn3-container"><h4 class="team-name"></h4></div>',
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'virgo' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
		),

		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'virgo' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'virgo' ),
		),

	),

) );


/**
 * Project automat
 */
vc_map( array(
	'name' => esc_html__( 'Virgo Project automat', 'virgo' ),
	'base' => 'virgo_project_automat',
	'icon' => plugins_url( '/icon/dossier.png', __FILE__ ), // Simply pass url to your icon here
	'category' => esc_html__( 'virgo', 'virgo' ),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'virgo' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
		),

		array(
			'type' => 'dropdown',
			'param_name' => 'type_l',
			'value' => array(
				esc_html__( 'Project list link to project', 'virgo' ) => '1',
				esc_html__( 'Open project image in popup', 'virgo' ) => '2',

			),
			'std' => '1',
			'heading' => esc_html__( 'Enable popup or disable ', 'virgo' ),
			'description' => esc_html__( 'Select display style.', 'virgo' ),


		),


		array(
			'type' => 'dropdown',
			'param_name' => 'type_c',
			'value' => array(
				esc_html__( 'Project list style no padding', 'virgo' ) => '1',
				esc_html__( 'Project list style  padding', 'virgo' ) => '2',

			),
			'std' => '1',
			'heading' => esc_html__( 'Select style', 'virgo' ),
			'description' => esc_html__( 'Select display style.', 'virgo' ),


		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Title', 'virgo' ),
			'param_name' => 'heading',
			'description' => esc_html__( 'Add Your Title', 'virgo' ),
		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Slogan', 'virgo' ),
			'param_name' => 'slogan',
			'description' => esc_html__( 'Add Your slogan', 'virgo' ),
		),
		array(
			'type' => 'textarea',
			'heading' => esc_html__( 'description', 'virgo' ),
			'param_name' => 'description',
			'description' => esc_html__( 'Add Your description', 'virgo' ),
		),


		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Project Count', 'virgo' ),
			'param_name' => 'posts',
			'description' => esc_html__( 'You can control with number your project posts', 'virgo' ),
		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'order', 'virgo' ),
			'param_name' => 'order',
			'description' => esc_html__( 'Enter project item order. DESC or ASC', 'virgo' ),
		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'orderby', 'virgo' ),
			'param_name' => 'orderby',
			'description' => esc_html__( 'Enter post orderby. Default is : date', 'virgo' ),
		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Category', 'virgo' ),
			'param_name' => 'project_category',
			'description' => esc_html__( 'Enter Project category or write all', 'virgo' ),
		),


		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'virgo' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Background options', 'virgo' ),
		),
	)
) );


/*
* Partners
*/
vc_map( array(
	'name' => esc_html__( 'virgo Partners style two', 'virgo' ),
	'base' => 'virgo_partners_style_two',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'virgo', 'virgo' ),
	'description' => esc_html__( '', 'virgo' ),
	'icon' => get_template_directory_uri() . '/icon/helping-hand.png', // Simply pass url to your icon here
	'custom_markup' => '{{title}}<div class="vc_btn3-container"><h4 class="team-name"></h4></div>',
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'virgo' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
		),

		array(
			'type' => 'attach_images',
			'heading' => esc_html__( 'Images', 'virgo' ),
			'param_name' => 'images',
			'value' => '',
			'description' => esc_html__( 'Select images from media library.', 'virgo' ),
		),

		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'virgo' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'virgo' ),
		),
	),


) );


/*
* Elegant features dark
*/
vc_map( array(
	'name' => esc_html__( 'virgo elegant features dark', 'virgo' ),
	'base' => 'virgo_elegant_features_dark',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'virgo', 'virgo' ),
	'description' => esc_html__( '', 'virgo' ),
	'custom_markup' => '{{title}}<div class="vc_btn3-container"><h4 class="team-name"></h4></div>',
	'icon' => get_template_directory_uri() . '/icon/mind.png', // Simply pass url to your icon here
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'virgo' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
		),


		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => esc_html__( 'Text header', 'virgo' ),
			'param_name' => 't',
			'value' => 'Services',
			'description' => esc_html__( 'insert text', 'virgo' )
		),


		array(
			'type' => 'param_group',
			'heading' => esc_html__( 'Features item', 'virgo' ),
			'param_name' => 'items',
			'group' => esc_html__( 'Item values', 'virgo' ),
			'params' => array(
				array(
					'type' => 'textfield',
					'holder' => 'div',
					'class' => '',
					'heading' => esc_html__( 'Title', 'virgo' ),
					'param_name' => 'ts',
					'value' => esc_html__( 'WEB DESIGN', 'virgo' ),
					'description' => esc_html__( 'insert text', 'virgo' )
				),
				array(
					'type' => 'textarea',
					'holder' => 'div',
					'class' => '',
					'heading' => esc_html__( 'Description', 'virgo' ),
					'param_name' => 'ds',
					'value' => esc_html__( 'Ever wondered how some graphic designers always manage to produce beautiful looking designs for their brochures, website designs.', 'virgo' ),
					'description' => esc_html__( 'insert text', 'virgo' )
				),


			),

		),
		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'virgo' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'virgo' ),
		),
	),

) );


/*
* About features dark
*/
vc_map( array(
	'name' => esc_html__( 'virgo architecture features dark', 'virgo' ),
	'base' => 'virgo_architecture_features_dark',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'virgo', 'virgo' ),
	'description' => esc_html__( '', 'virgo' ),
	'custom_markup' => '{{title}}<div class="vc_btn3-container"><h4 class="team-name"></h4></div>',
	'icon' => get_template_directory_uri() . '/icon/mind.png', // Simply pass url to your icon here
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'virgo' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
		),


		array(
			'type' => 'dropdown',
			'heading' => esc_html__( 'Animation', 'virgo' ),
			'param_name' => 'animation',
			'description' => esc_html__( 'Animation style', 'virgo' ),
			'value' => array(
				esc_html__( 'none', 'virgo' ) => '',
				esc_html__( 'fadeInUp', 'virgo' ) => 'wow fadeInUp',
			),
		),


		array(
			'type' => 'param_group',
			'heading' => esc_html__( 'Features item', 'virgo' ),
			'param_name' => 'items',
			'group' => esc_html__( 'Item values', 'virgo' ),
			'params' => array(


				array(
					'type' => 'iconpicker',
					'heading' => esc_html__( 'The icons 1 ', 'virgo' ),
					'param_name' => 'icon',
					'value' => '',
					'description' => esc_html__( 'insert icon', 'virgo' ),
					'settings' => array(
						'emptyIcon' => false,
						'iconsPerPage' => 4000,
					)
				),
				array(
					'type' => 'textfield',
					'holder' => 'div',
					'class' => '',
					'heading' => esc_html__( 'Title', 'virgo' ),
					'param_name' => 'ts',
					'value' => esc_html__( 'WEB DESIGN', 'virgo' ),
					'description' => esc_html__( 'insert text', 'virgo' )
				),
				array(
					'type' => 'textarea',
					'holder' => 'div',
					'class' => '',
					'heading' => esc_html__( 'Description', 'virgo' ),
					'param_name' => 'ds',
					'value' => esc_html__( 'Ever wondered how some graphic designers always manage to produce beautiful looking designs for their brochures, website designs.', 'virgo' ),
					'description' => esc_html__( 'insert text', 'virgo' )
				),

				array(
					'type' => 'textfield',
					'holder' => 'div',
					'class' => '',
					'heading' => esc_html__( 'Animation delay', 'virgo' ),
					'param_name' => 'anim_delay',
					'value' => esc_html__( '', 'virgo' ),
					'description' => esc_html__( 'Like 0.2', 'virgo' )
				),


			),

		),
		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'virgo' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'virgo' ),
		),
	),

) );


/*
* Business features dark
*/
vc_map( array(
	'name' => esc_html__( 'virgo business features dark', 'virgo' ),
	'base' => 'virgo_business_features_dark',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'virgo', 'virgo' ),
	'description' => esc_html__( '', 'virgo' ),
	'custom_markup' => '{{title}}<div class="vc_btn3-container"><h4 class="team-name"></h4></div>',
	'icon' => get_template_directory_uri() . '/icon/mind.png', // Simply pass url to your icon here
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'virgo' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
		),


		array(
			'type' => 'dropdown',
			'heading' => esc_html__( 'Animation', 'virgo' ),
			'param_name' => 'animation',
			'description' => esc_html__( 'Animation style', 'virgo' ),
			'value' => array(
				esc_html__( 'none', 'virgo' ) => '',
				esc_html__( 'fadeInUp', 'virgo' ) => 'wow fadeInUp',
			),
		),


		array(
			'type' => 'param_group',
			'heading' => esc_html__( 'Features item', 'virgo' ),
			'param_name' => 'items',
			'group' => esc_html__( 'Item values', 'virgo' ),
			'params' => array(


				array(
					'type' => 'iconpicker',
					'heading' => esc_html__( 'The icons 1 ', 'virgo' ),
					'param_name' => 'icon',
					'value' => '',
					'description' => esc_html__( 'insert icon', 'virgo' ),
					'settings' => array(
						'emptyIcon' => false,
						'iconsPerPage' => 4000,
					)
				),
				array(
					'type' => 'textfield',
					'holder' => 'div',
					'class' => '',
					'heading' => esc_html__( 'Title', 'virgo' ),
					'param_name' => 'ts',
					'value' => esc_html__( 'WEB DESIGN', 'virgo' ),
					'description' => esc_html__( 'insert text', 'virgo' )
				),


				array(
					'type' => 'textarea',
					'holder' => 'div',
					'class' => '',
					'heading' => esc_html__( 'Description', 'virgo' ),
					'param_name' => 'ds',
					'value' => esc_html__( 'Ever wondered how some graphic designers always manage to produce beautiful looking designs for their brochures, website designs.', 'virgo' ),
					'description' => esc_html__( 'insert text', 'virgo' )
				),

				array(
					'type' => 'textfield',
					'holder' => 'div',
					'class' => '',
					'heading' => esc_html__( 'Animation delay', 'virgo' ),
					'param_name' => 'anim_delay',
					'value' => esc_html__( '', 'virgo' ),
					'description' => esc_html__( 'Like 0.2', 'virgo' )
				),


			),

		),
		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'virgo' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'virgo' ),
		),
	),

) );


/*
 * Portfolio
 */
vc_map( array(
		'name' => esc_html__( 'virgo portfolio architecture', 'virgo' ),
		'base' => 'virgo_portfolio_architecture',
		'show_settings_on_create' => true,
		'icon' => plugins_url( '/icon/dossier.png', __FILE__ ),
		// Simply pass url to your icon here
		'category' => esc_html__( 'virgo', 'virgo' ),
		"as_parent" => array( 'only' => 'virgo_accordion_item' ),
		// Use only|except attributes to limit child shortcodes (separate multiple values with comma)
		"content_element" => true,
		'params' => array(
			array(
				'type' => 'dropdown',
				'heading' => esc_html__( 'Menu visibility', 'virgo' ),
				'param_name' => 'menu_visibility',
				'description' => esc_html__( 'Show or hide menu', 'virgo' ),
				'value' => array(
					esc_html__( 'Show', 'virgo' ) => '1',
					esc_html__( 'Hide', 'virgo' ) => '2',
				),
			),

			array(
				'type' => 'dropdown',
				'class' => '',
				'heading' => esc_html__( 'Filter class', 'virgo' ),
				'param_name' => 'filter',
				'value' => array(
					esc_html__( 'none', 'virgo' ) => '',
					esc_html__( ' filter-top', 'virgo' ) => ' filter filter-top ',
				),

			),
			array(
				'type' => 'dropdown',
				'class' => '',
				'heading' => esc_html__( 'Class', 'virgo' ),
				'param_name' => 'class',
				'description' => esc_html__( 'Class that sets the top and bottom margins', 'virgo' ),
				'value' => array(
					esc_html__( 'none', 'virgo' ) => '',
					esc_html__( 'section ', 'virgo' ) => ' section  ',
				),
			),
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Heading', 'virgo' ),
				'param_name' => 'heading',
				'description' => esc_html__( 'Add Your Heading', 'virgo' ),
				'value' => esc_html__( 'Recent works', 'virgo' ),
			),

			array(
				'type' => 'dropdown',
				'class' => '',
				'heading' => esc_html__( 'Portfolio view', 'virgo' ),
				'param_name' => 'col',
				'value' => array(
					esc_html__( 'none', 'virgo' ) => '',
					esc_html__( 'padding ', 'virgo' ) => ' isotope-padding ',
					esc_html__( 'col-3 ', 'virgo' ) => 'col-3 isotope-padding ',
					esc_html__( 'col-2 ', 'virgo' ) => 'col-2 ',


				),
			),

			array(
				'type' => 'param_group',
				'heading' => esc_html__( 'Portfolio item', 'virgo' ),
				'group' => esc_html__( 'Portfolio items', 'virgo' ),
				'param_name' => 'items',
				'params' => array(
					array(
						'type' => 'textfield',
						'class' => '',
						'heading' => esc_html__( 'Category', 'virgo' ),
						'param_name' => 'cat',
						'description' => esc_html__( 'Insert category', 'virgo' )
					),

					array(
						'type' => 'textfield',
						'class' => '',
						'heading' => esc_html__( 'Category slug', 'virgo' ),
						'param_name' => 'slug',
						'description' => esc_html__( 'Insert category slug', 'virgo' )
					),


					array(
						'type' => 'textfield',
						'class' => '',
						'heading' => esc_html__( 'Title', 'virgo' ),
						'param_name' => 'title',
						'description' => esc_html__( 'Insert title', 'virgo' )
					),

					array(
						'type' => 'param_group',
						'heading' => esc_html__( 'Image item', 'virgo' ),
						'group' => esc_html__( 'Image items', 'virgo' ),
						'param_name' => 'image_items',
						'params' => array(

							array(
								'type' => 'attach_image',
								'heading' => esc_html__( 'Image', 'virgo' ),
								"holder" => "img",
								'param_name' => 'img_src',
								'description' => esc_html__( 'Select images from media library.', 'virgo' ),
							),

							array(
								'type' => 'dropdown',
								'class' => '',
								'heading' => esc_html__( 'Image size', 'virgo' ),
								'param_name' => 'size',
								'value' => array(
									esc_html__( 'normal', 'virgo' ) => '',
									esc_html__( 'big ', 'virgo' ) => ' w66 ',


								),

							),


						),

					),

				),

			),
			array(
				'type' => 'css_editor',
				'heading' => esc_html__( 'Css', 'virgo' ),
				'param_name' => 'css',
				'group' => esc_html__( 'Design options', 'virgo' ),
			),
		),


	)
);


/*
* Team
*/
vc_map( array(
	'name' => esc_html__( 'virgo Team architect', 'virgo' ),
	'base' => 'virgo_team_architect',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'virgo', 'virgo' ),
	'description' => esc_html__( '', 'virgo' ),
	'icon' => get_template_directory_uri() . '/icon/people.png', // Simply pass url to your icon here
	'custom_markup' => '{{title}}<div class="vc_btn3-container"><h4 class="team-name"></h4></div>',
	'params' => array(

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'virgo' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
		),
		array(
			'type' => 'textfield',
			'holder' => 'div',
			'heading' => esc_html__( 'Insert Description', 'virgo' ),
			'param_name' => 'title',
			'value' => esc_html__( 'Our magic team.', 'virgo' ),
			'description' => esc_html__( 'insert  title ', 'virgo' )
		),


		array(
			"type" => "textarea_html",
			"holder" => "div",
			"class" => "",
			"heading" => __( "Description", "virgo" ),
			"param_name" => "content",
			"value" => __( "Our team of experts has competences of different<br> branches and specializations.", "virgo" ),
			"description" => __( "Enter your description.", "virgo" )
		),

		array(
			'type' => 'param_group',
			'holder' => 'div',
			'heading' => esc_html__( 'Reviews item', 'virgo' ),
			'param_name' => 'items',
			'group' => esc_html__( 'Reviews item', 'virgo' ),
			'params' => array(
				array(
					'type' => 'attach_image',
					'heading' => esc_html__( 'Images', 'virgo' ),
					'param_name' => 'images',

					'description' => esc_html__( 'Select images from media library.', 'virgo' ),
				),
				array(
					'type' => 'textfield',
					'holder' => 'div',
					'heading' => esc_html__( 'Insert name', 'virgo' ),
					'param_name' => 'name',
					'value' => esc_html__( 'Jack Wilshere', 'virgo' ),
					'description' => esc_html__( 'Insert name', 'virgo' )
				),
				array(
					'type' => 'textfield',
					'holder' => 'div',
					'heading' => esc_html__( 'Insert status', 'virgo' ),
					'param_name' => 'desc',
					'description' => esc_html__( 'Insert status', 'virgo' ),
					'value' => esc_html__( 'CEO / Founder ', 'virgo' ),
				),

				array(
					'type' => 'param_group',
					'holder' => 'div',
					'heading' => esc_html__( 'Soc Links', 'virgo' ),
					'param_name' => 'itemin',
					'params' => array(

						array(
							'type' => 'textfield',
							'holder' => 'div',
							'heading' => esc_html__( 'Insert Soc link', 'virgo' ),
							'param_name' => 'url',
							'description' => esc_html__( 'Insert link', 'virgo' ),
							'value' => esc_html__( 'https://www.facebook.com/', 'virgo' ),
						),

						array(
							'type' => 'iconpicker',
							'heading' => esc_html__( 'The icons', 'virgo' ),
							'param_name' => 'icon',
							'value' => 'fa-facebook',
							'description' => esc_html__( 'insert icon', 'virgo' ),
							'settings' => array(
								'emptyIcon' => false,
								'iconsPerPage' => 4000,
							)

						),
					),
				),
			),
			array(
				'type' => 'css_editor',
				'heading' => esc_html__( 'Css', 'virgo' ),
				'param_name' => 'css',
				'group' => esc_html__( 'Design options', 'virgo' ),
			),
		),
	)
) );


/*
* Reviews
*/
vc_map( array(
	'name' => esc_html__( 'virgo Reviews Architect', 'virgo' ),
	'base' => 'virgo_review_architect',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'virgo', 'virgo' ),
	'description' => esc_html__( '', 'virgo' ),
	'icon' => get_template_directory_uri() . '/icon/people.png', // Simply pass url to your icon here
	'custom_markup' => '{{title}}<div class="vc_btn3-container"><h4 class="team-name"></h4></div>',
	'params' => array(

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'virgo' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
		),
		array(
			'type' => 'textfield',
			'holder' => 'div',
			'heading' => esc_html__( 'Insert title', 'virgo' ),
			'param_name' => 'title',
			'value' => esc_html__( 'Clients about us..', 'virgo' ),
			'description' => esc_html__( 'insert  title ', 'virgo' )
		),
		array(
			"type" => "textarea_html",
			"holder" => "div",
			"class" => "",
			"heading" => __( "Content", "virgo" ),
			"param_name" => "content",
			"value" => __( "Our team of experts has competences of different <br> branches and specializations.", "virgo" ),
			"description" => __( "Enter your content.", "virgo" )
		),

		array(
			'type' => 'param_group',
			'holder' => 'div',
			'heading' => esc_html__( 'Reviews item', 'virgo' ),
			'param_name' => 'items',
			'group' => esc_html__( 'Reviews item', 'virgo' ),
			'params' => array(
				array(
					'type' => 'textfield',
					'holder' => 'div',
					'heading' => esc_html__( 'Insert name', 'virgo' ),
					'param_name' => 'name',
					'value' => esc_html__( 'Calum Chambers ', 'virgo' ),
					'description' => esc_html__( 'insert name', 'virgo' )
				),

				array(
					'type' => 'textfield',
					'holder' => 'div',
					'heading' => esc_html__( 'Insert position', 'virgo' ),
					'param_name' => 'position',
					'value' => esc_html__( 'Adobe sales manager', 'virgo' ),
					'description' => esc_html__( 'insert position', 'virgo' )
				),


				array(
					'type' => 'textarea',
					'holder' => 'div',
					'heading' => esc_html__( 'Text header', 'virgo' ),
					'param_name' => 'desc',
					'description' => esc_html__( 'insert text ', 'virgo' ),
					'value' => esc_html__( 'Do you want to be even more successful? 
                        Learn to love learning and growth. The more effort you put into improving your skills, 
                        the bigger the payoff you will get. Realize that things will be hard at first, but rewards worth it.', 'virgo' ),
				),

			),
		),
		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'virgo' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'virgo' ),
		),

	)


) );


/*
* Partners
*/
vc_map( array(
	'name' => esc_html__( 'virgo Partners Architecture', 'virgo' ),
	'base' => 'virgo_partners_architect',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'virgo', 'virgo' ),
	'description' => esc_html__( '', 'virgo' ),
	'icon' => get_template_directory_uri() . '/icon/helping-hand.png', // Simply pass url to your icon here
	'custom_markup' => '{{title}}<div class="vc_btn3-container"><h4 class="team-name"></h4></div>',
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'virgo' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
		),

		array(
			'type' => 'attach_images',
			'heading' => esc_html__( 'Images', 'virgo' ),
			'param_name' => 'images',
			'value' => '',
			'description' => esc_html__( 'Select images from media library.', 'virgo' ),
		),

		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'virgo' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'virgo' ),
		),
	),


) );


/*
*  banner
*/
vc_map( array(
	'name' => esc_html__( 'virgo Banner Architect', 'virgo' ),
	'base' => 'virgo_banner_architect',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'virgo', 'virgo' ),
	'description' => esc_html__( '', 'virgo' ),
	'icon' => get_template_directory_uri() . '/icon/banner.png', // Simply pass url to your icon here
	'params' => array(

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'virgo' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
		),


		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => esc_html__( 'Title', 'virgo' ),
			'param_name' => 'title',
			'value' => esc_html__( 'Offer your project to Virgo team.', 'virgo' ),

			'description' => esc_html__( 'insert text', 'virgo' )
		),

		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => esc_html__( 'Text button', 'virgo' ),
			'param_name' => 'tb',
			'value' => esc_html__( 'Let\'s talk', 'virgo' ),
			'description' => esc_html__( 'insert text', 'virgo' )
		),

		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => esc_html__( 'Text url', 'virgo' ),
			'param_name' => 't_url',
			'value' => esc_html__( '#request', 'virgo' ),
			'description' => esc_html__( 'insert url', 'virgo' )
		),

		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'virgo' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'virgo' ),
		),

	),

) );


/*
 * Portfolio
 */
vc_map( array(
		'name' => esc_html__( 'virgo portfolio interior', 'virgo' ),
		'base' => 'virgo_portfolio_interior',
		'show_settings_on_create' => true,
		'icon' => plugins_url( '/icon/dossier.png', __FILE__ ),
		// Simply pass url to your icon here
		'category' => esc_html__( 'virgo', 'virgo' ),
		"as_parent" => array( 'only' => 'virgo_accordion_item' ),
		// Use only|except attributes to limit child shortcodes (separate multiple values with comma)
		"content_element" => true,
		'params' => array(
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Heading', 'virgo' ),
				'param_name' => 'heading',
				'description' => esc_html__( 'Add Your Heading', 'virgo' ),
				'value' => esc_html__( 'Look what we do best.', 'virgo' ),
			),


			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Description', 'virgo' ),
				'param_name' => 'description',
				'description' => esc_html__( 'Add Your description', 'virgo' ),
				'value' => esc_html__( 'Look at our projects. We presented just a part of works. Our team of experts has competences of different branches and specializations.', 'virgo' ),
			),

			array(
				'type' => 'param_group',
				'heading' => esc_html__( 'Portfolio item', 'virgo' ),
				'group' => esc_html__( 'Portfolio items', 'virgo' ),
				'param_name' => 'items',
				'params' => array(
					array(
						'type' => 'textfield',
						'class' => '',
						'heading' => esc_html__( 'Category', 'virgo' ),
						'param_name' => 'cat',
						'description' => esc_html__( 'Insert category', 'virgo' )
					),

					array(
						'type' => 'textfield',
						'class' => '',
						'heading' => esc_html__( 'Category slug', 'virgo' ),
						'param_name' => 'slug',
						'description' => esc_html__( 'Insert category slug', 'virgo' )
					),


					array(
						'type' => 'textfield',
						'class' => '',
						'heading' => esc_html__( 'Title', 'virgo' ),
						'param_name' => 'title',
						'description' => esc_html__( 'Insert title', 'virgo' )
					),

					array(
						'type' => 'param_group',
						'heading' => esc_html__( 'Image item', 'virgo' ),
						'group' => esc_html__( 'Image items', 'virgo' ),
						'param_name' => 'image_items',
						'params' => array(

							array(
								'type' => 'attach_image',
								'heading' => esc_html__( 'Image', 'virgo' ),
								"holder" => "img",
								'param_name' => 'img_src',
								'description' => esc_html__( 'Select images from media library.', 'virgo' ),
							),

							array(
								'type' => 'dropdown',
								'class' => '',
								'heading' => esc_html__( 'Image size', 'virgo' ),
								'param_name' => 'size',
								'value' => array(
									esc_html__( 'normal', 'virgo' ) => '',
									esc_html__( 'big ', 'virgo' ) => ' w66 ',


								),

							),
						),

					),

				),

			),
			array(
				'type' => 'css_editor',
				'heading' => esc_html__( 'Css', 'virgo' ),
				'param_name' => 'css',
				'group' => esc_html__( 'Design options', 'virgo' ),
			),
		),


	)
);


/*
* Team
*/
vc_map( array(
	'name' => esc_html__( 'virgo Team interior', 'virgo' ),
	'base' => 'virgo_team_interior',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'virgo', 'virgo' ),
	'description' => esc_html__( '', 'virgo' ),
	'icon' => get_template_directory_uri() . '/icon/people.png', // Simply pass url to your icon here
	'custom_markup' => '{{title}}<div class="vc_btn3-container"><h4 class="team-name"></h4></div>',
	'params' => array(

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'virgo' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
		),
		array(
			'type' => 'textfield',
			'holder' => 'div',
			'heading' => esc_html__( 'Insert Description', 'virgo' ),
			'param_name' => 'title',
			'value' => esc_html__( 'Our magic team.', 'virgo' ),
			'description' => esc_html__( 'insert  title ', 'virgo' )
		),


		array(
			"type" => "textarea_html",
			"holder" => "div",
			"class" => "",
			"heading" => __( "Description", "virgo" ),
			"param_name" => "content",
			"value" => __( "Our team of experts has competences of different<br> branches and specializations.", "virgo" ),
			"description" => __( "Enter your description.", "virgo" )
		),

		array(
			'type' => 'param_group',
			'holder' => 'div',
			'heading' => esc_html__( 'Reviews item', 'virgo' ),
			'param_name' => 'items',
			'group' => esc_html__( 'Reviews item', 'virgo' ),
			'params' => array(
				array(
					'type' => 'attach_image',
					'heading' => esc_html__( 'Images', 'virgo' ),
					'param_name' => 'images',

					'description' => esc_html__( 'Select images from media library.', 'virgo' ),
				),
				array(
					'type' => 'textfield',
					'holder' => 'div',
					'heading' => esc_html__( 'Insert name', 'virgo' ),
					'param_name' => 'name',
					'value' => esc_html__( 'Jack Wilshere', 'virgo' ),
					'description' => esc_html__( 'Insert name', 'virgo' )
				),
				array(
					'type' => 'textfield',
					'holder' => 'div',
					'heading' => esc_html__( 'Insert status', 'virgo' ),
					'param_name' => 'desc',
					'description' => esc_html__( 'Insert status', 'virgo' ),
					'value' => esc_html__( 'CEO / Founder ', 'virgo' ),
				),

				array(
					'type' => 'param_group',
					'holder' => 'div',
					'heading' => esc_html__( 'Soc Links', 'virgo' ),
					'param_name' => 'itemin',
					'params' => array(

						array(
							'type' => 'textfield',
							'holder' => 'div',
							'heading' => esc_html__( 'Insert Soc link', 'virgo' ),
							'param_name' => 'url',
							'description' => esc_html__( 'Insert link', 'virgo' ),
							'value' => esc_html__( 'https://www.facebook.com/', 'virgo' ),
						),

						array(
							'type' => 'iconpicker',
							'heading' => esc_html__( 'The icons', 'virgo' ),
							'param_name' => 'icon',
							'value' => 'fa-facebook',
							'description' => esc_html__( 'insert icon', 'virgo' ),
							'settings' => array(
								'emptyIcon' => false,
								'iconsPerPage' => 4000,
							)

						),
					),
				),
			),
			array(
				'type' => 'css_editor',
				'heading' => esc_html__( 'Css', 'virgo' ),
				'param_name' => 'css',
				'group' => esc_html__( 'Design options', 'virgo' ),
			),
		),
	)
) );


/*
* About interior dark
*/
vc_map( array(
	'name' => esc_html__( 'virgo interior features', 'virgo' ),
	'base' => 'virgo_interior_features',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'virgo', 'virgo' ),
	'description' => esc_html__( '', 'virgo' ),
	'custom_markup' => '{{title}}<div class="vc_btn3-container"><h4 class="team-name"></h4></div>',
	'icon' => get_template_directory_uri() . '/icon/mind.png', // Simply pass url to your icon here
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'virgo' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
		),


		array(
			'type' => 'dropdown',
			'heading' => esc_html__( 'Animation', 'virgo' ),
			'param_name' => 'animation',
			'description' => esc_html__( 'Animation style', 'virgo' ),
			'value' => array(
				esc_html__( 'none', 'virgo' ) => '',
				esc_html__( 'fadeInUp', 'virgo' ) => 'wow fadeInUp',
			),
		),


		array(
			'type' => 'param_group',
			'heading' => esc_html__( 'Features item', 'virgo' ),
			'param_name' => 'items',
			'group' => esc_html__( 'Item values', 'virgo' ),
			'params' => array(


				array(
					'type' => 'iconpicker',
					'heading' => esc_html__( 'The icons 1 ', 'virgo' ),
					'param_name' => 'icon',
					'value' => '',
					'description' => esc_html__( 'insert icon', 'virgo' ),
					'settings' => array(
						'emptyIcon' => false,
						'iconsPerPage' => 4000,
					)
				),
				array(
					'type' => 'textfield',
					'holder' => 'div',
					'class' => '',
					'heading' => esc_html__( 'Title', 'virgo' ),
					'param_name' => 'ts',
					'value' => esc_html__( 'WEB DESIGN', 'virgo' ),
					'description' => esc_html__( 'insert text', 'virgo' )
				),
				array(
					'type' => 'textarea',
					'holder' => 'div',
					'class' => '',
					'heading' => esc_html__( 'Description', 'virgo' ),
					'param_name' => 'ds',
					'value' => esc_html__( 'Ever wondered how some graphic designers always manage to produce beautiful looking designs for their brochures, website designs.', 'virgo' ),
					'description' => esc_html__( 'insert text', 'virgo' )
				),

				array(
					'type' => 'textfield',
					'holder' => 'div',
					'class' => '',
					'heading' => esc_html__( 'Animation delay', 'virgo' ),
					'param_name' => 'anim_delay',
					'value' => esc_html__( '', 'virgo' ),
					'description' => esc_html__( 'Like 0.2', 'virgo' )
				),


			),

		),
		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'virgo' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'virgo' ),
		),
	),

) );


/**
 * virgo_blog_recent_interior
 */
vc_map( array(
	'name' => esc_html__( 'Virgo Blog recent posts interior', 'virgo' ),
	'base' => 'virgo_blog_recent_interior',
	'icon' => plugins_url( '/icon/dossier.png', __FILE__ ), // Simply pass url to your icon here
	'category' => esc_html__( 'virgo', 'virgo' ),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'virgo' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
		),


		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Title', 'virgo' ),
			'param_name' => 'heading',
			'value' => esc_html__( 'Latest from blog.', 'virgo' ),
			'description' => esc_html__( 'Add Your Title', 'virgo' ),
		),


		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Post Count', 'architect' ),
			'param_name' => 'posts',
			'description' => esc_html__( 'You can control with number your blog posts', 'architect' ),
		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'order', 'architect' ),
			'param_name' => 'order',
			'description' => esc_html__( 'Enter post item order. DESC or ASC', 'architect' ),
		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'orderby', 'architect' ),
			'param_name' => 'orderby',
			'description' => esc_html__( 'Enter post orderby. Default is : date', 'architect' ),
		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Category', 'virgo' ),
			'param_name' => 'portfolio_category',
			'description' => esc_html__( 'Enter category slug', 'virgo' ),
		),

		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'virgo' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Background options', 'virgo' ),
		),
	)
) );

/*
*  banner
*/
vc_map( array(
	'name' => esc_html__( 'virgo Banner Interior', 'virgo' ),
	'base' => 'virgo_banner_interior',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'virgo', 'virgo' ),
	'description' => esc_html__( '', 'virgo' ),
	'icon' => get_template_directory_uri() . '/icon/banner.png', // Simply pass url to your icon here
	'params' => array(

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'virgo' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
		),


		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => esc_html__( 'Title', 'virgo' ),
			'param_name' => 'title',
			'value' => esc_html__( 'Offer your project to Virgo team.', 'virgo' ),

			'description' => esc_html__( 'insert text', 'virgo' )
		),


		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => esc_html__( 'Text button', 'virgo' ),
			'param_name' => 'tb',
			'value' => esc_html__( 'Let\'s talk', 'virgo' ),
			'description' => esc_html__( 'insert text', 'virgo' )
		),

		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => esc_html__( 'Text url', 'virgo' ),
			'param_name' => 't_url',
			'value' => esc_html__( '#request', 'virgo' ),
			'description' => esc_html__( 'insert url', 'virgo' )
		),

		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'virgo' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'virgo' ),
		),

	),

) );


/*
* Contact interior
*/

vc_map( array(

	'name' => esc_html__( 'virgo Contact Interior', 'virgo' ),
	'base' => 'virgo_interior_contact',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'virgo', 'virgo' ),
	'description' => esc_html__( '', 'virgo' ),
	'icon' => get_template_directory_uri() . '/icon/message.png', // Simply pass url to your icon here
	'custom_markup' => '{{title}}<div class="vc_btn3-container"><h4 class="team-name"></h4></div>',
	'params' => array(

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'virgo' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
		),

		array(
			'type' => 'textfield',
			'value' => esc_html__( 'Name ', 'virgo' ),
			'heading' => esc_html__( 'Text', 'virgo' ),
			'param_name' => 'field_first',
			'description' => esc_html__( 'insert value by contact form field', 'virgo' )
		),

		array(
			'type' => 'textfield',
			'value' => esc_html__( 'Email ', 'virgo' ),

			'heading' => esc_html__( 'Text', 'virgo' ),
			'param_name' => 'field_second',
			'description' => esc_html__( 'insert value by contact form field', 'virgo' )
		),

		array(
			'type' => 'textfield',
			'value' => esc_html__( 'Message ', 'virgo' ),
			'heading' => esc_html__( 'Text', 'virgo' ),
			'param_name' => 'field_three',
			'description' => esc_html__( 'insert value by contact form field', 'virgo' )
		),

		array(
			'type' => 'textfield',
			'value' => esc_html__( 'Submit ', 'virgo' ),

			'heading' => esc_html__( 'Text', 'virgo' ),
			'param_name' => 'field_fourth',
			'description' => esc_html__( 'insert value by contact form field', 'virgo' )
		),


		array(
			'type' => 'textarea_html',
			'value' => '',
			'virgo',
			'heading' => esc_html__( 'Shortcode', 'virgo' ),
			'param_name' => 'content',
			'description' => esc_html__( 'insert CF7 shortcode', 'virgo' )
		),

		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'virgo' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'virgo' ),
		),


	),


) );


/**
 * Prices
 */
vc_map( array(
	'name' => esc_html__( 'virgo Prices', 'virgo' ),
	'base' => 'virgo_tariff_plan',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'virgo', 'virgo' ),
	'description' => esc_html__( '', 'virgo' ),
	'icon' => get_template_directory_uri() . '/icon/check.png', // Simply pass url to your icon here
	'custom_markup' => '{{title}}<div class="vc_btn3-container"><h4 class="team-name"></h4></div>',

	'params' => array(

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'virgo' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'virgo' ),
		),
		array(
			'type' => 'textfield',

			'heading' => esc_html__( 'Text', 'virgo' ),
			'param_name' => 'title1',
			'description' => esc_html__( 'insert text', 'virgo' )
		),
		array(
			'type' => 'textfield',

			'heading' => esc_html__( 'Description', 'virgo' ),
			'param_name' => 'description',
			'description' => esc_html__( 'insert description', 'virgo' )
		),

		array(
			'type' => 'param_group',
			'heading' => esc_html__( 'Price tables', 'virgo' ),
			'param_name' => 'items',
			'group' => esc_html__( 'Price  tables', 'virgo' ),
			'params' => array(

				array(
					'type' => 'dropdown',
					'param_name' => 'class',
					'value' => array(
						esc_html__( 'fadeInLeft', 'virgo' ) => 'fadeInLeft',
						esc_html__( 'fadeInRight', 'virgo' ) => 'fadeInRight',
						esc_html__( 'ADVANCED', 'virgo' ) => 'ADVANCED',


					),
					'std' => '',
					'heading' => esc_html__( 'display style ', 'virgo' ),
					'description' => esc_html__( 'Select display style.', 'virgo' ),
				),


				array(
					'type' => 'textfield',
					'holder' => 'div',
					'heading' => esc_html__( 'Text big', 'virgo' ),
					'param_name' => 'h',
					'description' => esc_html__( 'insert text ', 'virgo' )
				),

				array(
					'type' => 'textfield',
					'holder' => 'div',
					'heading' => esc_html__( 'currency', 'virgo' ),
					'param_name' => 'currency',
					'value' => esc_html__( '$', 'virgo' ),
					'description' => esc_html__( 'insert currency ', 'virgo' )
				),

				array(
					'type' => 'textfield',
					'heading' => esc_html__( 'separator', 'virgo' ),
					'param_name' => 'separator',
					'value' => esc_html__( '/', 'virgo' ),
					'description' => esc_html__( 'insert price delimiter ', 'virgo' )
				),

				array(
					'type' => 'textfield',
					'holder' => 'div',
					'heading' => esc_html__( 'period', 'virgo' ),
					'param_name' => 'period',
					'value' => esc_html__( 'mo', 'virgo' ),
					'description' => esc_html__( 'insert period', 'virgo' )
				),
				array(
					'type' => 'textfield',
					'holder' => 'div',
					'heading' => esc_html__( 'insert price', 'virgo' ),
					'param_name' => 'price',
					'description' => esc_html__( 'insert price', 'virgo' )
				),
				array(
					'type' => 'textfield',
					'holder' => 'div',
					'heading' => esc_html__( 'Text button', 'virgo' ),
					'param_name' => 'tb',
					'value' => esc_html__( 'Select plan', 'virgo' ),
					'description' => esc_html__( 'insert text', 'virgo' )
				),


				array(
					'type' => 'textfield',
					'class' => '',
					'heading' => esc_html__( 'Url button', 'virgo' ),
					'param_name' => 'pr_url',
					'admin_label' => 'false',
					'value' => '#request',
					'description' => esc_html__( 'insert text', 'virgo' )
				),


				array(
					'type' => 'textfield',
					'holder' => 'div',
					'heading' => esc_html__( 'Text button hover', 'virgo' ),
					'param_name' => 'tbh',
					'value' => esc_html__( 'Select plan', 'virgo' ),
					'description' => esc_html__( 'insert text', 'virgo' )
				),
				array(
					'type' => 'param_group',
					'holder' => 'div',
					'heading' => esc_html__( 'Other Details', 'virgo' ),
					'param_name' => 'items',
					'params' => array(

						array(
							'type' => 'textfield',
							'holder' => 'div',
							'heading' => esc_html__( 'Text', 'virgo' ),
							'param_name' => 'title',
							'description' => esc_html__( 'insert text', 'virgo' )
						),

					),
				),
			),
		),
		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'virgo' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'virgo' ),
		),


	),


) );
