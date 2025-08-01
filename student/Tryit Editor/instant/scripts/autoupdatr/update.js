/*  All rights reserved.

Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:

	1. Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.
	2. Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.

THIS SOFTWARE IS PROVIDED BY Kevin Zhou "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE FREEBSD PROJECT OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE. */
if (localStorage.resources == null || localStorage.resources == "") {
	localStorage.resources = "";
}
if (localStorage.version == null) {
	localStorage.version = 0;
}
if (navigator.onLine || manifest) {
	if (manifest.version > localStorage.version) {
		localStorage.resources = "";
		for (var i = 0; i < manifest.files.length; i++) {
			var ele = document.createElement("script");
			ele.src = manifest.updatePath + manifest.files[i].path;
			ele.type = "text/javascript";
			document.head.appendChild(ele);
		}
		window.onload = function() {
			for (var i = 0; i < manifest.files.length; i++) {
				localStorage[manifest.files[i].name] = window[manifest.files[i].name];
				localStorage.resources += manifest.files[i].name + ";";
			}
			localStorage.version = manifest.version;
			alert("Tryit Editor was updated. The page will now reload.");
			location.reload();
		}
	}
}