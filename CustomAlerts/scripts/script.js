// script.js
function customAlert(config) {
    // Creating popupBox 
    if (document.querySelectorAll("#customAlert").length > 0) {
        document.querySelectorAll("#customAlert").forEach(element => {
            element.remove();
        });
    }
    let customAlertBox = document.createElement("DIV");
        customAlertBox.classList.add("custom-alert");
        customAlertBox.setAttribute("ID","customAlert");
        let titleElement = document.createElement("H2");
        customAlertBox.appendChild(titleElement);
        let messageElement = document.createElement("P");
        customAlertBox.appendChild(messageElement);
        // Creating buttons container
        if (config.buttons) {
            let approvalButtonsRow = document.createElement("DIV");
                approvalButtonsRow.classList.add("approvalButtonsRow");
            customAlertBox.appendChild(approvalButtonsRow);
        }
        // Creating load bar
        if (config.duration) {
            let popupLoadBarDiv = document.createElement("DIV");
                popupLoadBarDiv.classList.add("loadBarContainer");
                let popupLoadBar = document.createElement("DIV");
                    popupLoadBar.classList.add("popupLoadBar");
                popupLoadBarDiv.appendChild(popupLoadBar);
            customAlertBox.appendChild(popupLoadBarDiv);
        }
        // Setting position
        if (config.position) {
            switch(config.position) {
                case 'top-left':
                    customAlertBox.style.top = "0px";
                    customAlertBox.style.left = "0px";
                    break;
                case 'top-center':
                    customAlertBox.style.top = "0px";
                    customAlertBox.style.left = "50%";
                    customAlertBox.style.transform = "translateX(-50%)";
                    break;
                case 'top-right':
                    customAlertBox.style.top = "0px";
                    customAlertBox.style.right = "0px";
                    break;
                case 'middle-left':
                    customAlertBox.style.top = "50%";
                    customAlertBox.style.left = "0px";
                    customAlertBox.style.transform = "translateY(-50%)";
                    break;
                case 'middle-center':
                    customAlertBox.style.top = "50%";
                    customAlertBox.style.left = "50%";
                    customAlertBox.style.transform = "translate(-50%, -50%)";
                    break;
                case 'middle-right':
                    customAlertBox.style.top = "50%";
                    customAlertBox.style.right = "0px";
                    customAlertBox.style.transform = "translateY(-50%)";
                    break;
                case 'bottom-left':
                    customAlertBox.style.bottom = "0px";
                    customAlertBox.style.left = "0px";
                    break;
                case 'bottom-center':
                    customAlertBox.style.bottom = "0px";
                    customAlertBox.style.left = "50%";
                    customAlertBox.style.transform = "translateX(-50%)";
                    break;
                case 'bottom-right':
                    customAlertBox.style.bottom = "0px";
                    customAlertBox.style.right = "0px";
                    break;
                default:
                    customAlertBox.style.top = "0px";
                    customAlertBox.style.left = "50%";
                    customAlertBox.style.transform = "translateX(-50%)";
                    // Show error message
                    console.error("Alert position invalid, given position: "+config.position);
            }
        }
    document.body.appendChild(customAlertBox)
    customAlertBox.style.display = 'block';
    document.body.style.overflow = 'hidden';
    // Setting title and message
    titleElement.innerText = config.title || 'No title';
    messageElement.innerText = config.message || 'No message';
    if (config.buttons) {
        let approvalButtonsRow = document.querySelector(".approvalButtonsRow");
        // Creating buttons
        config.buttons.forEach(button => {
            let currentButton = document.createElement("A");
                let str = button.color;
                let modStr = str[0].toUpperCase() + str.slice(1);
                currentButton.style.border = "2px solid " + button.color;
                currentButton.classList.add(modStr);
                currentButton.textContent = button.content;
                currentButton.setAttribute("ONCLICK", button.onclick);
                currentButton.addEventListener("click", closeAlert);
            approvalButtonsRow.appendChild(currentButton);
        });
        if (config.duration > 0) {
            // Setting timer
            setTimeout(function() {closeAlert()}, config.duration);
            // Countdown timer
            let i = 0;
            if (i == 0) {
                i = 1;
                let elem = document.querySelector(".popupLoadBar");
                let width = 100;
                let decrement = (100 / (config.duration / 10));
                let id = setInterval(frame, 10);
                function frame() {
                    if (width <= 0) {
                    clearInterval(id);
                    i = 0;
                    } else {
                    width -= decrement;
                    elem.style.width = width + "%";
                    }
                }
            }
        }
    } else {
        // Setting timer
        if (config.duration) {
            setTimeout(function() {closeAlert()}, config.duration);
            // Countdown timer
            let i = 0;
            if (i == 0) {
                i = 1;
                let elem = document.querySelector(".popupLoadBar");
                let width = 100;
                let decrement = (100 / (config.duration / 10));
                let id = setInterval(frame, 10);
                function frame() {
                    if (width <= 0) {
                    clearInterval(id);
                    i = 0;
                    } else {
                    width -= decrement;
                    elem.style.width = width + "%";
                    }
                }
            }
        }
    } 
    // Add icon if one is given
    if (config.icon) {
        let iconContainer = document.getElementById('iconContainer');
        if (!iconContainer) {
            iconContainer = document.createElement('div');
            iconContainer.setAttribute("id", "iconContainer");
            customAlertBox.insertBefore(iconContainer, customAlertBox.firstChild);
        }
        iconContainer.innerHTML = config.icon;
        iconContainer.firstChild.classList.add("popupSVG");
    }
    // Close popup
    function closeAlert() {
        customAlertBox.remove();
        document.body.style.overflow = 'auto';
    }
}

function showDemo() {
    let title = document.querySelector("#alertTitle").value;
    let message = document.querySelector("#alertMessage").value;
    let duration = document.querySelector("#alertDuration").value * 1000; // Calc miliseconds
    let position = document.querySelector("#alertPosition").value;
    let icon = document.querySelector("#alertIcon").value;

    // Swithc for icon
    switch (icon) {
        case "Succes":
            icon = succesSVG;
            break;
        case "Error":
            icon = errorSVG;
            break;
        case "Warning":
            icon = warningSVG;
            break;
        default:
            icon = "";
    }
    // Run alert function 
    customAlert({ 
            title: title,
            message: message,
            position: position,
            duration: duration, // IN MILISECONDS
            buttons: [{
                    color: 'green',
                    content: 'OK',
                    onclick: 'console.log(true)'
                },
                {
                    color: 'red',
                    content: 'Cancel',
                    onclick: 'console.log(false)'
                }],
            icon: icon
        })
}

// ---- POPUP CONFIG EXAMPLE ---- \\

// customAlert({ 
//     title: 'TEST Titel',
//     message: 'TEST Message',
//     position: 'bottom-left',
//     duration: 5000, // IN MILISECONDS | Alert stay infint with the value 0
//     buttons: [{
//             color: 'green', 
//             content: 'OK',
//             onclick: 'console.log(true)'
//         },
//         {
//             color: 'red',
//             content: 'Cancel',
//             onclick: 'console.log(false)'
//         },
//         {  
//             color: '#0000FF', 
//             content: 'coment',
//             onclick: 'console.log(true)'
//         }],
//     icon: succesSVG
// })

    