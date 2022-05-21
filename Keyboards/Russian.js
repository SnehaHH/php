var shift = 0;
var caps = 0;
var toggle = 0;
var ctrl = 0;
var alt = 0;
var splmap = {
    "`": ["~"], "1": ["!"], "2": ["@"], "3": ["#"], "4": ["$"], "5": ["%"], "6": ["^"], "7": ["&"], "8": ["*"], "9": ["("], "0": [")"], "-": ["_"], "=": ["+"],
    "[": ["{"], "]": ["}"], ";": [":"], "'": ['"'], ",": ["<"], ".": [">"], "/": ["?"], "\\": ["|"]
};
var splmapback = {
    "~": ["`"], "!": ["1"], "@": ["2"], "#": ["3"], "$": ["4"], "%": ["5"], "^": ["6"], "&": ["7"], "*": ["8"], "(": ["9"], ")": ["0"], "_": ["-"], "+": ["="],
    "{": ["["], "}": ["]"], ":": [";"], '"': ["'"], "<": [","], ">": ["."], "?": ["/"], "|": ["\\"]
};

var ctrlmap = {
    "х": ["["],
    "ъ": ["]"],
    "ё": ['\\'],
    "ж": [';'],
    "э": ["'"],
    "б": [","],
    "ю": ["."],
};

var ctrlmapback = {
    "[": ["х"],
    "]": ["ъ"],
    "\\": ['ё'],
    ";": ['ж'],
    "'": ["э"],
    ",": ["б"],
    ".": ["ю"],
};

var altmap = {
    "х": ["{"],
    "ъ": ["}"],
    "ё": ['|'],
    "ж": [':'],
    "э": ['"'],
    "б": ["<"],
    "ю": [">"],

};

var altmapback = {
    "{": ["х"],
    "}": ["ъ"],
    "|": ['ё'],
    ":": ['ж'],
    '"': ["э"],
    "<": ["б"],
    ">": ["ю"],
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
            if (e.target.innerText == "Ctrl") {
                if (shift === 1) {
                    shift = 0;
                    shiftoff();
                }
                if (caps === 1) {
                    caps = 0;
                    capsoff();
                }
                if (toggle === 1) {
                    toggle = 0;
                    shiftoff();
                }
                if (alt === 1) {
                    alt = 0;
                    altoff();
                }
                if (ctrl == 0) {
                    ctrl = 1;
                    ctrlton();
                    break;

                }
                else if (ctrl === 1) {
                    ctrl = 0;
                    ctrloff();
                    break;
                }
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
                if (alt === 1) {
                    alt = 0;
                    altoff();
                }
                if(ctrl === 1)
                {
                    ctrl=0;
                    ctrloff();
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
                if(ctrl === 1)
                {
                    ctrl=0;
                    ctrloff();
                }
                if (alt === 1) {
                    alt = 0;
                    altoff();
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
            if (e.target.innerText == "Alt") {
                if (shift === 1) {
                    shift = 0;
                    shiftoff();
                }
                if (toggle === 1) {
                    toggle = 0;
                    shiftoff();
                }
                if(ctrl === 1)
                {
                    ctrl=0;
                    ctrloff();
                }
                if (caps == 1) {
                    caps = 0;
                    capsoff();
                }
                if (alt === 0) {
                    alt = 1;
                    alton();
                    break;
                }
                else
                    alt = 0;
                altoff();
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
                if(ctrl === 1)
                {
                    ctrl=0;
                    ctrloff();
                }
                if (alt === 1) {
                    alt = 0;
                    altoff();
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
    var mappings = [["a", "ф"], ["b", "и"], ["c", "с"], ["d", "в"], ["e", "у"], ["f", "а"], ["g", "п"], ["h", "р"], ["i", "ш"], ["j", "о"], ["k", "л"], ["l", "д"],
    ["m", "ь"], ["n", "т"], ["o", "щ"], ["p", "з"], ["q", "й"], ["r", "к"], ["s", "ы"], ["t", "е"], ["u", "г"], ["v", "м"], ["w", "ц"], ["x", "ч"], ["y", "н"], ["z", "я"]
    ];
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

    for (i = 0; i < mappings.length; i++) {
        text.value = text.value.replace(mappings[i][0], mappings[i][1]);
        text.value = text.value.replace(mappings[i][0].toUpperCase(), mappings[i][1].toUpperCase());
    }
}

var allFieldSetElements = Array.from(fieldset.elements);
chararr = document.getElementsByClassName("btnalp");
splarr = document.getElementsByClassName("btn");

function capson() {
    for (i = 0; i < chararr.length; i++) {
        chararr[i].classList.add("yellow");
        chararr[i].innerText = chararr[i].innerText.toUpperCase();
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
function ctrlton() {
    for (i = 0; i < chararr.length; i++) {

        if (ctrlmap[chararr[i].innerText] != undefined) {
            chararr[i].innerText = ctrlmap[chararr[i].innerText];
            chararr[i].classList.add("ctrl");
        }
    }
}

function ctrloff() {
    for (i = 0; i < chararr.length; i++) {

        if (ctrlmapback[chararr[i].innerText] != undefined) {
            chararr[i].innerText = ctrlmapback[chararr[i].innerText];
            chararr[i].classList.remove("ctrl");
        }
    }
}

function alton() {
    for (i = 0; i < chararr.length; i++) {

        if (altmap[chararr[i].innerText] != undefined) {
            chararr[i].innerText = altmap[chararr[i].innerText];
            chararr[i].classList.add("ctrl");
        }
    }
}
function altoff() {
    for (i = 0; i < chararr.length; i++) {

        if (altmapback[chararr[i].innerText] != undefined) {
            chararr[i].innerText = altmapback[chararr[i].innerText];
            chararr[i].classList.remove("ctrl");
        }
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
        window.open(`https://translate.google.com/?sl=ru&tl=en&text=${google}&op=translate`, '_blank');
    }
    if (e.target.innerText === "Dictionary") {
        window.open(`https://en.openrussian.org/ru/${google}`, '_blank');
    }
    if (e.target.innerText === "Google") {
        window.open(`https://www.google.com/search?q=${google}`, '_blank');
    }
    if (e.target.innerText === "Spell Check") {
        await tocopy();
        window.open(`https://www.stars21.com/spelling/russian/`, '_blank');
    }

}




document.getElementById("textfield").addEventListener("keyup", call);
document.getElementById("fieldset").addEventListener("click", mousec);
document.getElementById("body").addEventListener("click", splfunc);
