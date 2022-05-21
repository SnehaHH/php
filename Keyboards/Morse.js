var map = [
    ["a", ".- "],
    ["b", "-... "],
    ["c", "-.-. "],
    ["d", "-.. "],
    ["e", ". "],
    ["f", "..-. "],
    ["g", "--. "],
    ["h", ".... "],
    ["i", ".. "],
    ["j", ".--- "],
    ["k", "-.- "],
    ["l", ".-.. "],
    ["m", "-- "],
    ["n", "-. "],
    ["o", "--- "],
    ["p", ".--. "],
    ["q", "--.- "],
    ["r", ".-. "],
    ["s", "... "],
    ["t", "- "],
    ["u", "..- "],
    ["v", "...- "],
    ["w", ".-- "],
    ["x", "-..- "],
    ["y", "-.-- "],
    ["z", "--.. "],
    ["1", ".---- "],
    ["2", "..--- "],
    ["3", "...-- "],
    ["4", "....- "],
    ["5", "..... "],
    ["6", "-.... "],
    ["7", "--... "],
    ["8", "---.. "],
    ["9", "----. "],
    ["0", "----- "],
    ["=", "-...- "],
    [",", "--..-- "],
    ["?", "..--.. "],
    ["'", ".----. "],
    ["!", "-.-.-- "],
    ["/", "-..-. "],
    ["(", "-.--. "],
    [")", "-.--.- "],
    ["&", ".-... "],
    [":", "---... "],
    ["+", ".-.-. "],
    ['"', ".-..-. "],
    ["@", ".--.-. "]
];

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
            else {
                document.getElementById("textfield").value += e.target.innerText;
                var l = document.getElementById("textfield").value.length;
                if (e.target.innerText === "-") {
                    document.getElementById("textfield").value = document.getElementById("textfield").value.substr(0, l - 1);
                    document.getElementById("textfield").value += "-....- ";
                    break;
                }

                if (e.target.innerText === ".") {
                    document.getElementById("textfield").value = document.getElementById("textfield").value.substr(0, l - 1);
                    document.getElementById("textfield").value += ".-.-.- ";
                    break;
                }
                for (i = 0; i < map.length; i++) {
                    document.getElementById("textfield").value = document.getElementById("textfield").value.toLowerCase().replace(map[i][0], map[i][1]);
                }
                break;
            }
        }
    }
}

function call(event) {
    var l = document.getElementById("textfield").value.length;
    if (event.keyCode === 32) {
        console.log("space");
        document.getElementById("textfield").value = document.getElementById("textfield").value.substr(0, l - 1);
    }
    else if (event.key === "Backspace") {

    }
    else if (event.key === "-") {
        document.getElementById("textfield").value = document.getElementById("textfield").value.substr(0, l - 1);
        document.getElementById("textfield").value += "-....- ";
    }

    else if (event.key === ".") {
        document.getElementById("textfield").value = document.getElementById("textfield").value.substr(0, l - 1);
        document.getElementById("textfield").value += ".-.-.- ";
    }
    else {
        for (i = 0; i < map.length; i++) {
            document.getElementById("textfield").value = document.getElementById("textfield").value.toLowerCase().replace(map[i][0], map[i][1]);
        }
    }
}

async function tocopy() {
    var copytext = document.getElementById("textfield").value;
    await navigator.clipboard.writeText(copytext);
}

async function splfunc(event) {
    var e = event;
    if (e.target.innerText === "Morse code decoder") {
        await tocopy();
        window.open(`https://morsecoder.org/morse-code-decoder`, '_blank');
    }

}




document.getElementById("textfield").addEventListener("keyup", call);
document.getElementById("fieldset").addEventListener("click", mousec);
document.getElementById("body").addEventListener("click", splfunc);
