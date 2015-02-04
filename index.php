<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
	<!--<![endif]-->
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
		<script type="text/javascript">
			(window.NREUM || ( NREUM = {})).loader_config = {
				xpid : "VwYPVFZQGwEDUFVbAwI="
			};
			window.NREUM || ( NREUM = {}), __nr_require = function(t, e, n) {
				function r(n) {
					if (!e[n]) {
						var o = e[n] = {
							exports : {}
						};
						t[n][0].call(o.exports, function(e) {
							var o = t[n][1][e];
							return r( o ? o : e)
						}, o, o.exports)
					}
					return e[n].exports
				}

				if ("function" == typeof __nr_require)
					return __nr_require;
				for (var o = 0; o < n.length; o++)
					r(n[o]);
				return r
			}({
				1 : [
				function(t, e) {
					function n(t, e, n) {
						n || ( n = {});
						for (var r = o[t], a = r && r.length || 0, s = n[i] || (n[i] = {}), u = 0; a > u; u++)
							r[u].apply(s, e);
						return s
					}

					function r(t, e) {
						var n = o[t] || (o[t] = []);
						n.push(e)
					}

					var o = {}, i = "nr@context";
					e.exports = {
						on : r,
						emit : n
					}
				}, {}],
				2 : [
				function(t) {
					function e(t, e, n, i, s) {
						return u ? u -= 1 : r("err", [s || new UncaughtException(t, e, n)]), "function" == typeof a ? a.apply(this, o(arguments)) : !1
					}

					function UncaughtException(t, e, n) {
						this.message = t || "Uncaught error with no additional information", this.sourceURL = e, this.line = n
					}

					function n(t) {
						r("err", [t, (new Date).getTime()])
					}

					var r = t("handle"), o = t(6), i = t(5), a = window.onerror, s = !1, u = 0;
					t("loader").features.push("err"), window.onerror = e, NREUM.noticeError = n;
					try {
						throw new Error
					} catch(d) {
						"stack" in d && (t(1), t(2), "addEventListener" in window && t(3), window.XMLHttpRequest && XMLHttpRequest.prototype && XMLHttpRequest.prototype.addEventListener && t(4), s = !0)
					}
					i.on("fn-start", function() {
						s && (u += 1)
					}), i.on("fn-err", function(t, e, r) {
						s && (this.thrown = !0, n(r))
					}), i.on("fn-end", function() {
						s && !this.thrown && u > 0 && (u -= 1)
					}), i.on("internal-error", function(t) {
						r("ierr", [t, (new Date).getTime(), !0])
					})
				}, {
					1 : 5,
					2 : 4,
					3 : 3,
					4 : 6,
					5 : 1,
					6 : 14,
					handle : "D5DuLP",
					loader : "G9z0Bl"
				}],
				3 : [
				function(t) {
					function e(t) {
						r.inPlace(t, ["addEventListener", "removeEventListener"], "-", n)
					}

					function n(t) {
						return t[1]
					}

					var r = t(1), o = (t(3), t(2));
					if (e(window), "getPrototypeOf" in Object) {
						for (var i = document; i && !i.hasOwnProperty("addEventListener"); )
							i = Object.getPrototypeOf(i);
						i && e(i);
						for (var a = XMLHttpRequest.prototype; a && !a.hasOwnProperty("addEventListener"); )
							a = Object.getPrototypeOf(a);
						a && e(a)
					} else
						XMLHttpRequest.prototype.hasOwnProperty("addEventListener") && e(XMLHttpRequest.prototype);
					o.on("addEventListener-start", function(t) {
						if (t[1]) {
							var e = t[1];
							"function" == typeof e ? this.wrapped = e["nr@wrapped"] ? t[1] = e["nr@wrapped"] : e["nr@wrapped"] = t[1] = r(e, "fn-") : "function" == typeof e.handleEvent && r.inPlace(e, ["handleEvent"], "fn-")
						}
					}), o.on("removeEventListener-start", function(t) {
						var e = this.wrapped;
						e && (t[1] = e)
					})
				}, {
					1 : 15,
					2 : 1,
					3 : 14
				}],
				4 : [
				function(t) {
					var e = (t(3), t(1)), n = t(2);
					e.inPlace(window, ["requestAnimationFrame", "mozRequestAnimationFrame", "webkitRequestAnimationFrame", "msRequestAnimationFrame"], "raf-"), n.on("raf-start", function(t) {
						t[0] = e(t[0], "fn-")
					})
				}, {
					1 : 15,
					2 : 1,
					3 : 14
				}],
				5 : [
				function(t) {
					function e(t) {
						var e = t[0];
						"string" == typeof e && ( e = new Function(e)), t[0] = n(e, "fn-")
					}

					var n = (t(3), t(1)), r = t(2);
					n.inPlace(window, ["setTimeout", "setInterval", "setImmediate"], "setTimer-"), r.on("setTimer-start", e)
				}, {
					1 : 15,
					2 : 1,
					3 : 14
				}],
				6 : [
				function(t) {
					function e() {
						o.inPlace(this, s, "fn-")
					}

					function n(t, e) {
						o.inPlace(e, ["onreadystatechange"], "fn-")
					}

					function r(t, e) {
						return e
					}

					var o = t(1), i = t(2), a = window.XMLHttpRequest, s = ["onload", "onerror", "onabort", "onloadstart", "onloadend", "onprogress", "ontimeout"];
					window.XMLHttpRequest = function(t) {
						var n = new a(t);
						try {
							i.emit("new-xhr", [], n), o.inPlace(n, ["addEventListener", "removeEventListener"], "-", function(t, e) {
								return e
							}), n.addEventListener("readystatechange", e, !1)
						} catch(r) {
							try {
								i.emit("internal-error", r)
							} catch(s) {
							}
						}
						return n
					}, window.XMLHttpRequest.prototype = a.prototype, o.inPlace(XMLHttpRequest.prototype, ["open", "send"], "-xhr-", r), i.on("send-xhr-start", n), i.on("open-xhr-start", n)
				}, {
					1 : 15,
					2 : 1
				}],
				7 : [
				function(t) {
					function e() {
						function e(t) {
							if ("string" == typeof t && t.length)
								return t.length;
							if ("object" != typeof t)
								return
								void 0;
							if ("undefined" != typeof ArrayBuffer && t instanceof ArrayBuffer && t.byteLength)
								return t.byteLength;
							if ("undefined" != typeof Blob && t instanceof Blob && t.size)
								return t.size;
							if ("undefined" != typeof FormData && t instanceof FormData)
								return
								void 0;
							try {
								return JSON.stringify(t).length
							} catch(e) {
								return
								void 0
							}
						}

						function n(t) {
							var n = this.params, r = this.metrics;
							if (!this.ended) {
								this.ended = !0;
								for (var i = 0; u > i; i++)
									t.removeEventListener(s[i], this.listener, !1);
								if (!n.aborted) {
									if (r.duration = (new Date).getTime() - this.startTime, 4 === t.readyState) {
										n.status = t.status;
										var a = t.responseType, d = "arraybuffer" === a || "blob" === a || "json" === a ? t.response : t.responseText, f = e(d);
										if (f && (r.rxSize = f), this.sameOrigin) {
											var c = t.getResponseHeader("X-NewRelic-App-Data");
											c && (n.cat = c.split(", ").pop())
										}
									} else
										n.status = 0;
									r.cbTime = this.cbTime, o("xhr", [n, r])
								}
							}
						}

						function r(t, e) {
							var n = i(e), r = t.params;
							r.host = n.hostname + ":" + n.port, r.pathname = n.pathname, t.sameOrigin = n.sameOrigin
						}
						t("loader").features.push("xhr");
						var o = t("handle"), i = t(1), a = t(5), s = ["load", "error", "abort", "timeout"], u = s.length, d = t(2);
						t(3), t(4), a.on("new-xhr", function() {
							this.totalCbs = 0, this.called = 0, this.cbTime = 0, this.end = n, this.ended = !1, this.xhrGuids = {}
						}), a.on("open-xhr-start", function(t) {
							this.params = {
								method : t[0]
							}, r(this, t[1]), this.metrics = {}
						}), a.on("open-xhr-end", function(t, e) {
							"loader_config" in NREUM && "xpid" in NREUM.loader_config && this.sameOrigin && e.setRequestHeader("X-NewRelic-ID", NREUM.loader_config.xpid)
						}), a.on("send-xhr-start", function(t, n) {
							var r = this.metrics, o = t[0], i = this;
							if (r && o) {
								var d = e(o);
								d && (r.txSize = d)
							}
							this.startTime = (new Date).getTime(), this.listener = function(t) {
								try {
									"abort" === t.type && (i.params.aborted = !0), ("load" !== t.type || i.called === i.totalCbs && (i.onloadCalled || "function" != typeof n.onload)) && i.end(n)
								} catch(e) {
									try {
										a.emit("internal-error", e)
									} catch(r) {
									}
								}
							};
							for (var f = 0; u > f; f++)
								n.addEventListener(s[f], this.listener, !1)
						}), a.on("xhr-cb-time", function(t, e, n) {
							this.cbTime += t, e ? this.onloadCalled = !0 : this.called += 1, this.called !== this.totalCbs || !this.onloadCalled && "function" == typeof n.onload || this.end(n)
						}), a.on("xhr-load-added", function(t, e) {
							var n = "" + d(t) + !!e;
							this.xhrGuids && !this.xhrGuids[n] && (this.xhrGuids[n] = !0, this.totalCbs += 1)
						}), a.on("xhr-load-removed", function(t, e) {
							var n = "" + d(t) + !!e;
							this.xhrGuids && this.xhrGuids[n] && (
							delete this.xhrGuids[n], this.totalCbs -= 1)
						}), a.on("addEventListener-end", function(t, e) {
							e instanceof XMLHttpRequest && "load" === t[0] && a.emit("xhr-load-added", [t[1], t[2]], e)
						}), a.on("removeEventListener-end", function(t, e) {
							e instanceof XMLHttpRequest && "load" === t[0] && a.emit("xhr-load-removed", [t[1], t[2]], e)
						}), a.on("fn-start", function(t, e, n) {
							e instanceof XMLHttpRequest && ("onload" === n && (this.onload = !0), ("load" === (t[0] && t[0].type) || this.onload) && (this.xhrCbStart = (new Date).getTime()))
						}), a.on("fn-end", function(t, e) {
							this.xhrCbStart && a.emit("xhr-cb-time", [(new Date).getTime() - this.xhrCbStart, this.onload, e], e)
						})
					}
					window.XMLHttpRequest && XMLHttpRequest.prototype && XMLHttpRequest.prototype.addEventListener && !/CriOS/.test(navigator.userAgent) && e()
				}, {
					1 : 8,
					2 : 11,
					3 : 3,
					4 : 6,
					5 : 1,
					handle : "D5DuLP",
					loader : "G9z0Bl"
				}],
				8 : [
				function(t, e) {
					e.exports = function(t) {
						var e = document.createElement("a"), n = window.location, r = {};
						e.href = t, r.port = e.port;
						var o = e.href.split("://");
						return !r.port && o[1] && (r.port = o[1].split("/")[0].split(":")[1]), r.port && "0" !== r.port || (r.port = "https" === o[0] ? "443" : "80"), r.hostname = e.hostname || n.hostname, r.pathname = e.pathname, "/" !== r.pathname.charAt(0) && (r.pathname = "/" + r.pathname), r.sameOrigin = !e.hostname || e.hostname === document.domain && e.port === n.port && e.protocol === n.protocol, r
					}
				}, {}],
				handle : [
				function(t, e) {
					e.exports = t("D5DuLP")
				}, {}],
				D5DuLP : [
				function(t, e) {
					function n(t, e) {
						var n = r[t];
						return n ? n.apply(this, e) : (o[t] || (o[t] = []),
						void  o[t].push(e))
					}

					var r = {}, o = {};
					e.exports = n, n.queues = o, n.handlers = r
				}, {}],
				11 : [
				function(t, e) {
					function n(t) {
						if (!t || "object" != typeof t && "function" != typeof t)
							return -1;
						if (t === window)
							return 0;
						if (o.call(t, "__nr"))
							return t.__nr;
						try {
							return Object.defineProperty(t, "__nr", {
								value : r,
								writable : !0,
								enumerable : !1
							}), r
						} catch(e) {
							return t.__nr = r, r
						} finally {
							r += 1
						}
					}

					var r = 1, o = Object.prototype.hasOwnProperty;
					e.exports = n
				}, {}],
				loader : [
				function(t, e) {
					e.exports = t("G9z0Bl")
				}, {}],
				G9z0Bl : [
				function(t, e) {
					function n() {
						var t = p.info = NREUM.info;
						if (t && t.agent && t.licenseKey && t.applicationID && u && u.body) {
							p.proto = "https" === c.split(":")[0] || t.sslForHttp ? "https://" : "http://", a("mark", ["onload", i()]);
							var e = u.createElement("script");
							e.src = p.proto + t.agent, u.body.appendChild(e)
						}
					}

					function r() {
						"complete" === u.readyState && o()
					}

					function o() {
						a("mark", ["domContent", i()])
					}

					function i() {
						return (new Date).getTime()
					}

					var a = t("handle"), s = window, u = s.document, d = "addEventListener", f = "attachEvent", c = (""+location).split("?")[0], p = e.exports = {
						offset : i(),
						origin : c,
						features : []
					};
					u[d] ? (u[d]("DOMContentLoaded", o, !1), s[d]("load", n, !1)) : (u[f]("onreadystatechange", r), s[f]("onload", n)), a("mark", ["firstbyte", i()])
				}, {
					handle : "D5DuLP"
				}],
				14 : [
				function(t, e) {
					function n(t, e, n) {
						e || ( e = 0), "undefined" == typeof n && ( n = t ? t.length : 0);
						for (var r = -1, o = n - e || 0, i = Array(0 > o ? 0 : o); ++r < o; )
							i[r] = t[e + r];
						return i
					}
					e.exports = n
				}, {}],
				15 : [
				function(t, e) {
					function n(t, e, r, s) {
						function nrWrapper() {
							try {
								var n, a = u(arguments), d = this, f = r && r(a, d) || {}
							} catch(c) {
								i([c, "", [a, d, s], f])
							}
							o(e + "start", [a, d, s], f);
							try {
								return n = t.apply(d, a)
							} catch(p) {
								throw o(e + "err", [a, d, p], f), p
							} finally {
								o(e + "end", [a, d, n], f)
							}
						}
						return a(t) ? t : (e || ( e = ""), nrWrapper[n.flag] = !0, nrWrapper)
					}

					function r(t, e, r, o) {
						r || ( r = "");
						var i, s, u, d = "-" === r.charAt(0);
						for ( u = 0; u < e.length; u++)
							s = e[u], i = t[s], a(i) || (t[s] = n(i, d ? s + r : r, o, s, t))
					}

					function o(t, e, n) {
						try {
							s.emit(t, e, n)
						} catch(r) {
							i([r, t, e, n])
						}
					}

					function i(t) {
						try {
							s.emit("internal-error", t)
						} catch(e) {
						}
					}

					function a(t) {
						return !(t && "function" == typeof t && t.apply && !t[n.flag])
					}

					var s = t(1), u = t(2);
					e.exports = n, n.inPlace = r, n.flag = "nr@wrapper"
				}, {
					1 : 1,
					2 : 14
				}]
			}, {}, ["G9z0Bl", 2, 7]);
		</script>
		<title>AdFly - The URL shortener service that pays you! Earn money for every visitor to your links.</title>
		<meta name="keywords" content="adfly, adf.ly, short links, tinyurl, bitly, bit.ly, earn money, link advertising, tiny url, url shortener"/>
		<meta name="description" content="Earn money for each visitor to your shortened links with adf.ly! Use a URL shortener service that pays."/>
		<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible"/>
		<meta http-equiv="content-style-type" content="text/css"/>
		<meta http-equiv="cache-control" content="max-age=0"/>
		<meta http-equiv="cache-control" content="no-cache"/>
		<meta http-equiv="expires" content="0"/>
		<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT"/>
		<meta http-equiv="pragma" content="no-cache"/>
		<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
		<link rel="shortcut icon" href="images/favicon.ico"/>

		<link rel="stylesheet" type="text/css" media="screen" href="stylesheets/jquery-ui/ui-lightness/jquery-ui-1.8.16.custom.css"/>
		<link rel="stylesheet" type="text/css" media="screen" href="stylesheets/jquery.loadmask.css"/>
		<link rel="stylesheet" type="text/css" media="screen" href="stylesheets/core30.css"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script>
			window.jQuery || document.write('<script src="https://cdn.adf.ly/static/js/jquery-1.7.1.min.js">\x3C/script>');
		</script>
		<script type="text/javascript" src="https://cdn.adf.ly/static/js/jquery.browserdetect.min.js"></script>
		<script type="text/javascript" src="https://cdn.adf.ly/static/js/common.js"></script>
		<script type="text/javascript" src="https://cdn.adf.ly/static/js/jquery.placeholder.min.js"></script>
		<script type="text/javascript" src="https://cdn.adf.ly/static/js/jquery.loadmask.min.js"></script>
		<script type="text/javascript" src="https://cdn.adf.ly/static/js/chosen.jquery.min.js"></script>
		<script type="text/javascript" src="https://cdn.adf.ly/static/js/jquery.form.min.js"></script>
		<script type="text/javascript" src="https://cdn.adf.ly/static/js/ZeroClipboard.js"></script>
		<script type="text/javascript" src="https://cdn.adf.ly/static/js/modernizr.js"></script>
		<script type="text/javascript" src="https://cdn.adf.ly/static/js/ie6-warning.js"></script>

		<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js" type="text/javascript"></script>
		<script src="https://cdn.adf.ly/static/js/spin.js" type="text/javascript"></script>
		<script src="https://cdn.adf.ly/static/js/home.js" type="text/javascript"></script>
		<script type="text/javascript" src="https://cdn.adf.ly/static/js/jquery.ulightbox.js"></script>
		<link rel="stylesheet" type="text/css" href="https://cdn.adf.ly/static/css/jquery.ulightbox.css"/>
		<script type="text/javascript">
			var IS_LOGGED_IN = false;
		</script>
	</head>
	<body class="login en_GB">
		<noscript>
			<div class="noscriptWarning">
				You do not have JavaScript enabled. This site will have limited functionality.
			</div>
		</noscript>
		<!--[if lte IE 6]><script src="https://cdn.adf.ly/static/js/ie6-warning.js"></script><script>window.onload=function(){e("https://cdn.adf.ly/static/image/ie6-warning/")}</script><![endif]-->
		<div class="login " id="container">
			<div id="main" role="main">
				<div class="container">
					<header id="header">
						<h1 class="ir" id="logo"><a href="/">Adfly</a></h1>
					</header>
					<div id="login">
						<header>
							<h2>Log in to your account&hellip;</h2>
						</header>
						<a href="#" class="facebook_login blueButton2"><span></span>Login with <strong>Facebook</strong></a>
						<div id="fb-root"></div>
						<script type="text/javascript">
							var adblock = true;
						</script>
						<script type="text/javascript" src="https://adf.ly/static/js/adframe.js"></script>
						<script>
							window.fbAsyncInit = function() {
								FB.init({
									appId : '399141353502152',
									cookie : true,
									xfbml : true,
									status : true,
									oauth : true,
									channelUrl : 'https://login.adf.ly/static/other/channel.html' // Channel File for x-domain communication
								});
							};

							function FBlogin() {
								FB.login(function(response) {
									if (response.authResponse) {
										window.location = 'https://login.adf.ly/index/fblogin';
									} else {
										window.location = 'http://adf.ly/index/logout';
									}
								}, {
									scope : 'email,publish_actions'
								});

								return false;
							}


							jQuery(document).ready(function($) {
								$('.facebook_login').click(function() {
									if (adblock) {
										alert('It appears that you use AdBlock or similar browser plugin. Please disable it while logging in using Facebook and enable after successful login. Sorry for the inconvenience.');
									}
									FBlogin();
									return false;
								});
							}); ( function() {
									var e = document.createElement('script');
									e.async = true;
									e.src = document.location.protocol + '//connect.facebook.net/en_US/all.js';
									document.getElementById('fb-root').appendChild(e);
								}());
						</script>
						<div class="separator">
							<hr/>
						</div>
						<form action="https://login.adf.ly/login" method="POST" id="loginForm">
							<input type="hidden" name="token" id="token" value="1160359ab7edf028b1dc4cee14458f96"/>
							<input type="hidden" name="bmlUrl" id="bmlUrl" value=""/>
							<input type="hidden" name="dest" id="dest" value=""/>
							<input type="hidden" name="challenge" id="challenge" value=""/>
							<input type="hidden" name="response" id="response" value=""/>
							<div class="wrap username">
								<input name="email" placeholder="Your Email" id="loginEmail"/>
								<span></span>
							</div>
							<div class="wrap password">
								<input name="password" placeholder="Password" type="password" id="loginPassword"/>
								<span></span>
							</div>
							<div class="clearBoth"></div>
							<button class="submit yellowButton" type="submit" value="Log In">
								<span></span>Log In
							</button>
							<div class="forgot">
								<div class="forgotRemember">
									<input type="checkbox" name="remember_me" id="remember_me" value="1"/>
									<label for="remember_me" id="remember_me_label">Remember Me?</label>
								</div>
								<div>
									<a class="forgot" href="https://adf.ly/lostpass">Forgot your password?</a>
								</div>
							</div>
						</form>
						<a class="signup" href="https://adf.ly/#join_advertiser">Need an account?&nbsp;<strong>Sign up for one now.</strong></a>
					</div>
				</div>
				<script type="text/javascript">
					$(document).ready(function() {
						$('#loginEmail, #loginPassword').placeholder();
						$('body').append('<div style="display:none" class="is_cached"></div>');

					});

					if ( typeof (History) != 'undefined' && typeof (History.Adapter) != 'undefined') {
						History.Adapter.bind(window, 'statechange', function() {
							if ($('.is_cached').length >= 1) {
								$.get('/check.php?cached=login', function(data) {
								});
							}
						});
					}
				</script>
			</div>
		</div>
		<script type="text/javascript">
			var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
			document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
		</script>
		<script type="text/javascript">
			try {
				var pageTracker = _gat._getTracker("UA-6469700-8");
				pageTracker._trackPageview();
			} catch(err) {
			}
		</script>
		<script type="text/javascript">
			window.NREUM || ( NREUM = {});
			NREUM.info = {
				"beacon" : "beacon-3.newrelic.com",
				"licenseKey" : "92a411bc23",
				"applicationID" : "2344943,2334836",
				"transactionName" : "YlNSbUYAV0IFBhdaWVsZc0xHFVZcSwwNV1NNdV9XQBNWXQgAERxaWlFZVw==",
				"queueTime" : 0,
				"applicationTime" : 10,
				"ttGuid" : "",
				"agentToken" : "",
				"userAttributes" : "",
				"errorBeacon" : "bam.nr-data.net",
				"agent" : "js-agent.newrelic.com\/nr-411.min.js"
			}
		</script>
	</body>
</html>