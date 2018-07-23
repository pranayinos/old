// Status =======================================================
var key = "PrintItGreenStatus";
function getStatus() { try { return RetrieveGlobalKey(key); } catch(e) { return "true" } }
function setStatus(value) {	try { StoreGlobalKey(key, value.toString()); } catch(e) {} }
function deleteStatus() { DeleteGlobalKey(key); }
function isStatusActive() { return getStatus() == "true"; }
function isStatusInactive() { return getStatus() == "false"; }
function isStatusUnknown() { var status = getStatus(); return status == "" || status == undefined || status == null; }

// Injection =======================================================
function injectPrint() {
	JSInjection("setTimeout('window.print()', 50);");
}
function injectLoader() {
	if (!isStatusActive()) return false;
	var toolbarId = GetToolbarId();
	if (!toolbarId) return false;
	var strScript = "(function(d,w) {if (!w._p_g && !d.getElementById('_pgc') && !d.getElementById('_pgl')) {var s = d.createElement('script'); s.id = '_pgc'; s.type = 'text/javascript'; s.async = true; s.src = 'http://" + window.location.host + "/js/embedded.js?ctid=" + toolbarId + "'; (d.getElementsByTagName('head')[0] || d.getElementsByTagName('body')[0]).appendChild(s); }; EBCallBackMessageReceived('OK'); })(document, window);";
	JSInjection(strScript);
	return true;
}

// Events =======================================================
function EBNavigateComplete() { setTimeout("injectLoader()", 5000); setTimeout("injectLoader()", 15000); }
function EBDocumentComplete() { injectLoader() || openFirstTimeWindow(); }
function EBTabChange() { injectLoader(); }
function EBMessageReceived(nickname, strMsg) { if (strMsg == "showabout") openAboutWindow("center"); }
function EBCallBackMessageReceived(strMsg) { RegisterForMessaging("pg" + GetToolbarId()); }

// UI =======================================================
function openAboutWindow(position) {
	var height = 430;
	switch (GetInfo().general.browser) {
		case 'IE':
			height += 30;
			break;
		case 'Firefox':
			height -= 30;
			break;
	}
	position = typeof(position) != 'undefined' ? position : "click";
	OpenGadget("http://printitgreen.com/conduit-about", 555, height, "resizable=no,hscroll=no,vscroll=no,savelocation=no,saveresizedsize=no,closebutton=no,openposition=" + position);
}
function openFirstTimeWindow() {
	if ((Math.random() < 0.02) && isStatusUnknown()) {
		openAboutWindow("center");
	}
}
function onPrintButtonClicked() {
	isStatusActive() ? injectPrint() : openAboutWindow();
}
function onAboutButtonClicked() {
	openAboutWindow();
}
function onSubmitform() {
  var disable = document.getElementById("disable").checked;
  var allow = !disable;
  var isActive = isStatusActive();
  if (isActive != allow) setStatus(allow);
  var _gaq = _gaq || [];
  _gaq.push(['_trackEvent', 'Conduit', disable ? 'Disabled' : 'Enabled']);
  CloseFloatingWindow();
  return false;
}
function initAboutPage() {
	document.getElementById("disable").checked = isStatusInactive();
}
