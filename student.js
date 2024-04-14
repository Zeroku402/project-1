let cookieCount = 0;
let clickCount = 0;
let clickValue = 1;

function clickCookie() {
    cookieCount += clickValue;
    clickCount++;
    document.getElementById('cookie-count').innerText = cookieCount;
    document.getElementById('click-count').innerText = clickCount;
}

function buyUpgrade(multiplier, cost) {
    if (cookieCount >= cost) {
        cookieCount -= cost;
        clickValue *= multiplier;
        document.getElementById('cookie-count').innerText = cookieCount;
    } else {
        alert("You don't have enough cookies to buy this upgrade!");
    }
}