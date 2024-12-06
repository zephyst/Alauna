let input = document.getElementById('quantity');
const minus = document.getElementById('minus');
function setQuantity (n) {
    input.value = parseInt(input.value )+ n;
    if (input.value <= 1) {
        minus.setAttribute('disabled','true');
    } else {
        minus.removeAttribute('disabled');
    }
}