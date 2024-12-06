
function setQuantity (n, idGoodie) {
    let input = document.querySelector(`.input-${idGoodie}`);
    const minus = document.getElementById(`minus-${idGoodie}`);
    input.value = parseInt(input.value )+ n;
    if (input.value <= 1) {
        minus.setAttribute('disabled','true');
    } else {
        minus.removeAttribute('disabled');
    }
}