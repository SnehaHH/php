var shift = 0;
var caps = 0;
var toggle = 0;
var splmap = {
	"`": ["~"], "1": ["!"], "2": ["@"], "3": ["#"], "4": ["$"], "5": ["%"], "6": ["^"], "7": ["&"], "8": ["*"], "9": ["("], "0": [")"], "-": ["_"], "=": ["+"],
	"[": ["{"], "]": ["}"], ";": [":"], "'": ['"'], ",": ["<"], ".": [">"], "/": ["?"], "\\": ["|"]
};
var splmapback = {
	"~": ["`"], "!": ["1"], "@": ["2"], "#": ["3"], "$": ["4"], "%": ["5"], "^": ["6"], "&": ["7"], "*": ["8"], "(": ["9"], ")": ["0"], "_": ["-"], "+": ["="],
	"{": ["["], "}": ["]"], ":": [";"], '"': ["'"], "<": [","], ">": ["."], "?": ["/"], "|": ["\\"]
};


function mousec(event) {
	var e = event;
	if (e.target.tagName === "BUTTON") {
		while (true) {
			if (e.target.innerText == "Space") {
				document.getElementById("textfield").value += " ";
				break;
			}
			if (e.target.innerText == "Enter") {
				document.getElementById("textfield").value += "\n";
				break;
			}

			if (e.target.innerText == "Shift") {
				if (caps === 1) {
					caps = 0;
					capsoff();
				}
				if (toggle === 1) {
					toggle = 0;
					shiftoff();

				}
				if (shift == 0) {
					shift = 1;
					shifton();
					break;
				}
				else if (shift === 1) {
					shift = 0;
					shiftoff();
					break;
				}
			}

			if (e.target.innerText == "CapsLock") {
				if (shift === 1) {
					shift = 0;
					shiftoff();
				}
				if (toggle === 1) {
					toggle = 0;
					shiftoff();
				}
				if (caps == 0) {
					caps = 1;
					capson();
					break;
				}
				else
					caps = 0;
				capsoff();
				break;
			}

			if (e.target.innerText == "Toggle") {
				if (shift === 1) {
					shift = 0;
					shiftoff();
				}
				if (caps === 1) {
					caps = 0;
					capsoff();
				}

				if (toggle == 0) {
					toggle = 1;
					shifton();
					break;
				}
				else
					toggle = 0;
				shiftoff();
				break;
			}
			if (e.target.innerText === "Backspace") {
				var l = document.getElementById("textfield").value.length;
				document.getElementById("textfield").value = document.getElementById("textfield").value.substr(0, l - 1);
				break;
			}
			if (e.target.innerText === "Tab") {
				document.getElementById("textfield").value += "\t";
				break;
			}
			if (e.target.innerText == "Copy") {
				tocopy();
				break;
			}
			if (e.target.innerText == "Select All") {
				document.getElementById("textfield").select();
				break;
			}
			if (e.target.innerText == "Clear") {
				document.getElementById("textfield").value = "";
				break;
			}

			if (shift === 1 || caps === 1) {
				document.getElementById("textfield").value += e.target.innerText.toUpperCase();
				if (shift == 1) {
					shiftoff();
					shift = 0;
				}
				break;
			}
			else
				document.getElementById("textfield").value += e.target.innerText;
			break;
		}
	}
}

function call(event) {
	var mappings = [["=a", "à"], ["+a", "á"], ["=A", "À"], ["+A", "Á"], ["=ae", "æ"], ["=AE", "Æ"], ["=c", "ç"], ["=C", "Ç"], ["=e", "è"], ["+e", "é"], ["=E", "È"], ["+E", "É"],
	["-e", "ê"], ["-E", "Ê"], ["..e", "ë"], ["..E", "Ë"], ["-i", "î"], ["-I", "Î"], ["..i", "ï"], ["..I", "Ï"], ["-o", "ô"], ["-O", "Ô"], ["..o", "ö"], ["..O", "Ö"], ["=oe", "œ"], ["=OE", "Œ"],
	["=u", "ù"], ["=U", "Ù"], ["-u", "û"], ["-U", "Û"], ["..u", "ü"], ["..U", "Ü"], ["..y", "ÿ"], ["..Y", "Ÿ"]];
	var text = document.getElementById("textfield");
	var a = event.getModifierState("CapsLock");
	if (a)
		capson();

	else if (!a)
		capsoff();

	if (event.getModifierState("Shift"))
		shifton();

	else if (event.getModifierState("Shift") != true && event.getModifierState("CapsLock") === false)
		shiftoff();

	for (i = 0; i < mappings.length; i++)
		text.value = text.value.replace(mappings[i][0], mappings[i][1]);
}

var allFieldSetElements = Array.from(fieldset.elements);
chararr = [];
splarr = [];
for (i = 0; i < allFieldSetElements.length; i++) {
	if (allFieldSetElements[i].tagName === "BUTTON" &&
		((allFieldSetElements[i].innerText.charCodeAt() <= 122) && (allFieldSetElements[i].innerText.charCodeAt() >= 97)) ||
		allFieldSetElements[i].innerText == "à" || allFieldSetElements[i].innerText == "á" || allFieldSetElements[i].innerText == "æ" ||
		allFieldSetElements[i].innerText == "ç" || allFieldSetElements[i].innerText == "è" || allFieldSetElements[i].innerText == "é" ||
		allFieldSetElements[i].innerText == "ê" || allFieldSetElements[i].innerText == "ë" || allFieldSetElements[i].innerText == "î" ||
		allFieldSetElements[i].innerText == "ï" || allFieldSetElements[i].innerText == "ô" || allFieldSetElements[i].innerText == "ö" ||
		allFieldSetElements[i].innerText == "œ" || allFieldSetElements[i].innerText == "ù" || allFieldSetElements[i].innerText == "û" ||
		allFieldSetElements[i].innerText == "ü" || allFieldSetElements[i].innerText == "ÿ")
		chararr.push(allFieldSetElements[i]);
	else
		splarr.push(allFieldSetElements[i]);
}

function capson() {
	for (i = 0; i < chararr.length; i++) {
		chararr[i].innerText = chararr[i].innerText.toUpperCase();
		chararr[i].classList.add("yellow");
	}
}
function shifton() {
	capson();
	for (i = 0; i < splarr.length; i++) {

		if (splmap[splarr[i].innerText] != undefined)
			splarr[i].innerText = splmap[splarr[i].innerText][0];
		splarr[i].classList.add("green");

	}
}

function capsoff() {

	for (i = 0; i < chararr.length; i++) {
		chararr[i].innerText = chararr[i].innerText.toLowerCase();
		chararr[i].classList.remove("yellow");
	}
}
function shiftoff() {
	capsoff();
	for (i = 0; i < splarr.length; i++) {
		if (splmapback[splarr[i].innerText] != undefined)
			splarr[i].innerText = splmapback[splarr[i].innerText][0];
		splarr[i].classList.remove("green");
	}
}
async function tocopy() {
	var copytext = document.getElementById("textfield").value;
	await navigator.clipboard.writeText(copytext);
}

async function splfunc(event) {
	var e = event;
	var google = document.getElementById("textfield").value.replace(" ", "%20");
	if (e.target.innerText === "Google Translate") {
		window.open(`https://translate.google.com/?sl=fr&tl=en&text=${google}&op=translate`, '_blank');
	}
	if (e.target.innerText === "Dictionary") {
		window.open(`https://www.wordreference.com/enfr/${google}`, '_blank');
	}
	if (e.target.innerText === "Google") {
		window.open(`https://www.google.com/search?q=${google}`, '_blank');
	}
	if (e.target.innerText === "Spell Check") {
		await tocopy();
		window.open(`https://www.reverso.net/spell-checker/french-spelling-grammar/`, '_blank');
	}

}




document.getElementById("textfield").addEventListener("keyup", call);
document.getElementById("fieldset").addEventListener("click", mousec);
document.getElementById("body").addEventListener("click", splfunc);
